<?php

namespace Orm\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20130411140948 extends AbstractMigration
{
  const CODE_PREFIX = "<?php namespace Dual\Render; ?>\n";
  
  protected $dataDir    = null;
  protected $assetsDir  = null;
  
  public function up(Schema $schema)
  {

    // do not execute in testing mode
    if (APPLICATION_ENV == 'testing') {
      $this->dropOldModuleTable();
      return;
      /* test data migration only required once
        $this->dataDir    = CMS_PATH . DIRECTORY_SEPARATOR . 'server' . DIRECTORY_SEPARATOR . 'tests' . DIRECTORY_SEPARATOR . '_data';
        $this->assetsDir  = CMS_PATH . DIRECTORY_SEPARATOR . 'server' . DIRECTORY_SEPARATOR . 'tests' . DIRECTORY_SEPARATOR . '_assets';
        $allWebsiteIdSql  = "SELECT DISTINCT websiteid as id FROM modul";
      */
    } else {
      $this->dataDir    = CMS_PATH . DIRECTORY_SEPARATOR . 'data';
      $this->assetsDir  = CMS_PATH . DIRECTORY_SEPARATOR . 'assets';
      
      $allWebsiteIdSql = "SELECT id FROM website";
    }

    // create base data directory
    if (!file_exists($this->dataDir) && !is_dir($this->dataDir)) {
      mkdir($this->dataDir);
    }

    // iterate over all websites and dump modules
    $websites = $this->connection->fetchAll($allWebsiteIdSql);
    foreach ($websites as $website) {
      $modulesDir = $this->createWebsiteFolder($website['id']);
      $this->createAllModulesForWebsite($modulesDir, $website['id']);
    }

    $this->dropOldModuleTable();

    // remove old module assets folder
    self::rmdir($this->assetsDir);
  }

  public function down(Schema $schema)
  {
    // this down() migration is autogenerated, please modify it to your needs
  }
  
  protected function dropOldModuleTable()
  {
    // drop module table
    $dropSql = "DROP TABLE modul";
    $this->connection->prepare($dropSql)->execute();
  }
  

  protected function createWebsiteFolder($websiteId)
  {
    // create base data directory
    $websiteModulesDataDir = $this->dataDir . DIRECTORY_SEPARATOR . $websiteId . DIRECTORY_SEPARATOR . 'modules';
    if (!file_exists($websiteModulesDataDir) && !is_dir($websiteModulesDataDir)) {
      mkdir($websiteModulesDataDir, 0777, true);
    }
    
    return $websiteModulesDataDir;
  }

  protected function createAllModulesForWebsite($modulesDir, $websiteId)
  {
    // write alle modules to filesystem
    $sql = "SELECT * FROM modul WHERE websiteid = :websiteid";
    $modules = $this->connection->fetchAll($sql, array('websiteid' => $websiteId));
    foreach ($modules as $module) {
      $moduleId = $module['id'];
      $moduleDataDir = $this->mkdir($modulesDir, $moduleId);
      $moduleDumpDir = $this->mkdir($moduleDataDir, 'module');
      $moduleAssetsDir = $this->mkdir($moduleDataDir, 'assets');
      $this->copyModuleAssets($moduleAssetsDir, $moduleId, $websiteId);
      $this->dumpModule($moduleDumpDir, $module);
    }

  }

  protected function dumpModule($moduleDumpDir, $module)
  {
    $this->createHtaccess($moduleDumpDir);
    $this->dumpModuleCode($moduleDumpDir, $module, 'renderer', 'moduleRenderer.php');
    $this->dumpModuleCode($moduleDumpDir, $module, 'css', 'moduleCss.php');
    $this->dumpModuleCode($moduleDumpDir, $module, 'header', 'moduleHeader.php');
    $this->dumpModuleManifest($moduleDumpDir, $module, 'moduleManifest.json');
    $this->dumpModuleData($moduleDumpDir, $module, 'moduleData.json');
  }
  
  protected function createHtaccess($moduleDumpDir)
  {
    $htaccessFilePath = $moduleDumpDir . DIRECTORY_SEPARATOR . '.htaccess';
    $code = "Order deny,allow\nDeny from all\n";
    self::writeFile($htaccessFilePath, $code);
  }
  
  protected function dumpModuleCode($moduleDumpDir, $module, $attribute, $filename)
  {
    $code = self::CODE_PREFIX . (isset($module[$attribute]) ? $module[$attribute] : '');
    $filePath = $moduleDumpDir . DIRECTORY_SEPARATOR . $filename;
    self::writeFile($filePath, $code);
  }
  
  protected function dumpModuleManifest($moduleDumpDir, $module, $filename)
  {
    $moduleManifest = array(
      'name'                    => $module['name'],
      'description'             => $module['description'],
      'version'                 => $module['version'],
      'icon'                    => $module['icon'],
      'category'                => $module['category'],
      'moduleType'              => $module['moduletype'],
      'allowedChildModuleType'  => $module['allowedchildmoduletype'],
      'reRenderRequired'        => $module['rerenderrequired'],
    );
    
    $moduleManifestFilename = $moduleDumpDir . DIRECTORY_SEPARATOR . $filename;
    try {
      $this->dumpJson($moduleManifestFilename, $moduleManifest);
    } catch (\Exception $e) {
      throw new \Exception('error at dumping module manifest json ('.$moduleManifestFilename.')', -1, $e);
    }
  }
  
  protected function dumpModuleData($moduleDumpDir, $module, $filename)
  {
    $moduleData = array(
      'form'        => (isset($module['form']) ? json_decode($module['form']) : array()),
      'formValues'  => (isset($module['formvalues']) ? json_decode($module['formvalues']) : new \stdClass()),
    );
    
    $moduleDataFilename = $moduleDumpDir . DIRECTORY_SEPARATOR . $filename;
    try {
      $this->dumpJson($moduleDataFilename, $moduleData);
    } catch (\Exception $e) {
      throw new \Exception('error at dumping module data json ('.$moduleDataFilename.')', -1, $e);
    }
  }
  
  protected function dumpJson($jsonFile, $data)
  {
    $json = self::prettyPrint(json_encode($data), '    ');
    self::writeFile($jsonFile, $json);
    $this->validateJson($json);
  }

  protected function validateJson($json)
  {
    $checkData = json_decode($json, true);
    if (is_null($checkData)) {
      throw new \Exception('error at validate json string: ' . json_last_error());
    }
  }

  protected function copyModuleAssets($moduleAssetsDir, $moduleId, $websiteId)
  {
    $oldModuleAssetDir = $this->assetsDir .
            DIRECTORY_SEPARATOR . $websiteId .
            DIRECTORY_SEPARATOR . 'modules' .
            DIRECTORY_SEPARATOR . $moduleId;
    if (is_dir($oldModuleAssetDir)) {
      self::copyDir($oldModuleAssetDir, $moduleAssetsDir);
    }
  }


  protected static function writeFile($filename, $content)
  {
    return (file_put_contents($filename, $content) === false ? false : true);
  }

  protected static function mkdir($baseDir, $subDir = null)
  {
    if ($subDir == null) {
      $dir = $baseDir;
    } else {
      $dir = $baseDir . DIRECTORY_SEPARATOR . $subDir;
    }
   
    self::rmdir($dir);

    if (!is_dir($dir)) {
      mkdir($dir, 0777, true);
    }

    return $dir;
  }
 
  protected static function rmdir($dir)
  {
    $dir = realpath($dir);
    if (is_dir($dir)) {
      $iterator = new \DirectoryIterator($dir);
      foreach ($iterator as $entry) {
        $path = realpath($entry->getPathname());
        if (!$entry->isDot() && strpos($path, $dir) === 0) {
          self::rmdir($path);
        }
      }
      rmdir($dir);
    } elseif (is_file($dir)) {
      unlink($dir);
    }
  }
 
  protected static function copyDir($source, $destination)
  {
    if (!is_dir($source)) {
      throw new \Exception('Sourcedir "' . $source . '" does not exists');
    }

    $iterator = new \RecursiveIteratorIterator(
        new \RecursiveDirectoryIterator($source),
        \RecursiveIteratorIterator::SELF_FIRST
    );

    if (!self::mkdir($destination)) {
      return false;
    }

    // Verzeichnis rekursiv durchlaufen
    while ($iterator->valid()) {
      if (!$iterator->isDot()) {
        if ($iterator->current()->isDir()) {
          // relativen Teil des Pfad auslesen
          $relDir = str_replace($source, '', $iterator->key());

          // Ziel-Verzeichnis erstellen
          if (!self::mkdir($destination . $relDir)) {
            return false;
          }
        } elseif ($iterator->current()->isFile()) {
          $destinationFile = $destination . str_replace($source, '', $iterator->key());

          if (!copy($iterator->key(), $destinationFile)) {
            return false;
          }
        }
      }

      $iterator->next();
    }

    return true;
  }
  
  protected static function prettyPrint($json, $indentStr = "\t")
  {
    $result      = '';
    $pos         = 0;
    $strLen      = strlen($json);
    $newLine     = "\n";
    $prevChar    = '';
    $outOfQuotes = true;

    for ($i=0; $i<=$strLen; $i++) {
      // Grab the next character in the string.
      $char = substr($json, $i, 1);

      // Are we inside a quoted string?
      if ($char == '"' && $prevChar != '\\') {
          $outOfQuotes = !$outOfQuotes;

      // If this character is the end of an element,
      // output a new line and indent the next line.
      } elseif (($char == '}' || $char == ']') && $outOfQuotes) {
        $result .= $newLine;
        $pos --;
        for ($j=0; $j<$pos; $j++) {
          $result .= $indentStr;
        }
      }

      // Add the character to the result string.
      $result .= $char;

      // If the last character was the beginning of an element,
      // output a new line and indent the next line.
      if (($char == ',' || $char == '{' || $char == '[') && $outOfQuotes) {
        $result .= $newLine;
        if ($char == '{' || $char == '[') {
          $pos ++;
        }

        for ($j = 0; $j < $pos; $j++) {
          $result .= $indentStr;
        }
      }

      $prevChar = $char;
    }

    return $result;
  }
}
