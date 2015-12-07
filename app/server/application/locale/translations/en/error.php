<?php
/**
 * english translation for errors (exceptions)
 */
return array(
  'error.message.0' => 'unknown error',    
  'error.message.1' => 'Internal server error',
  'error.message.2' => 'Internal server error: {message}',
  'error.message.3' => 'Validation of the parameter “{field}” failed',
  'error.message.4' => 'You don’t have permission for the call of “{resource}::{privilege}.”',
  'error.message.5' => 'You aren’t logged in.',
  'error.message.6' => 'Login failed.',
  'error.message.7' => 'You do not have permission for this action.',
  'error.message.8' => 'Opt-in not completed yet.',
  'error.message.9' => 'Space expired.',
  'error.message.10' => 'Error during import: {detail}',
  'error.message.11' => 'Conflict during import',
  'error.message.12' => 'Failed to cache the import',
  'error.message.13' => 'Caching instance of the import already exists',
  'error.message.14' => 'Error while loading import from cache: {detail}',
  'error.message.15' => 'Import id “{value}” doesn’t exist',
  'error.message.16' => 'Cached import file doesn’t exist',
  'error.message.17' => 'Import file (version: {importFileVersion}) not supported',
  'error.message.18' => 'Import via URLs is disabled.',
  'error.message.19' => 'Import from “{url}” not allowed.',
  'error.message.20' => 'Error while creating the import file “{file}” ({error_type}): {error_message}',
  'error.message.21' => 'Failed to download the import file from “{url}” ({error_no}): {error_message}',
  'error.message.22' => 'No website id given',
  'error.message.23' => 'Invalid website id',
  'error.message.24' => 'Import file doesn’t exist',
  'error.message.25' => 'Import file (type: {type}) not supported',
  'error.message.30' => 'This type of import isn’t possible here',
  'error.message.31' => 'Importing a website isn’t possible here',
  'error.message.34' => 'Importing modules isn’t possible here',
  'error.message.35' => 'Importing snippets isn’t possible here',
  'error.message.36' => 'Export file couldn’t be created',
  'error.message.101' => 'Error while loading modules',
  'error.message.102' => 'Module “{id}” doesn’t exist',
  'error.message.103' => 'Error while loading module',
  'error.message.104' => 'Error while creating a new module',
  'error.message.105' => 'Module doesn’t exist (editModule)',
  'error.message.106' => 'Error while saving module',
  'error.message.107' => 'Module doesn’t exist (deleteModule)',
  'error.message.108' => 'Module couldn’t be deleted. Still used in one or more layouts.',
  'error.message.110' => 'Error while deleting module',
  'error.message.112' => 'Error while loading modules',
  'error.message.113' => 'Module already exists',
  'error.message.114' => 'global module with the id “{id}” is read-only',
  'error.message.150' => 'Error, generated too few module ids',
  'error.message.151' => 'Error generating new module ids',
  'error.message.160' => 'Error, generated too few unit ids',
  'error.message.161' => 'Error generating new unit ids',
  'error.message.170' => 'Source module with the id “{id}” couldn’t be found (cloneModule)',
  'error.message.171' => 'Error while duplicating the module with the id “{id}” (cloneModule)',
  'error.message.172' => 'Error while duplicating module (cloneModule): {msg}',
  'error.message.173' => 'Module with the id “{id}” already exists in the target website',
  'error.message.174' => 'Error while copying the module with the id “{id}”',
  'error.message.175' => 'Copying of the global module with the id “{id}” not allowed',
  'error.message.176' => 'Error: module with the id “{id}” is already a local module',
  'error.message.202' => 'Error in the existence check of the file',
  'error.message.210' => 'Error: file is too large (max. {quota.maxFileSize}MB).',
  'error.message.211' => 'Error: media database quota exceeded (max. {quota.maxSizePerWebsite}MB).',
  'error.message.220' => 'Received no file which can be inserted into the media database',
  'error.message.232' => 'File doesn’t exist in the media database ({mediaId})',
  'error.message.234' => 'File couldn’t be deleted',
  'error.message.235' => 'Error while deleting file',
  'error.message.236' => 'The file “{name}” couldn’t be deleted from the media database, as it’s still being used in one or more pages or layouts.',
  'error.message.261' => 'File doesn’t exist in the media database ({mediaId})',
  'error.message.263' => 'Error while editing meta data of a file (editMediaTags): {msg}',
  'error.message.264' => 'Failed to move file to album',
  'error.message.265' => 'Target album doesn’t exist',
  'error.message.266' => 'File to be moved doesn’t exist',
  'error.message.267' => 'Album doesn’t exist',
  'error.message.268' => 'Website doesn’t exist',
  'error.message.301' => 'Error while loading layouts',
  'error.message.302' => 'Layout doesn’t exist (getTemplate)',
  'error.message.303' => 'Error while loading layout',
  'error.message.304' => 'Error while creating a new layout',
  'error.message.305' => 'Layout doesn’t exist (editTemplate)',
  'error.message.306' => 'Error while saving layout',
  'error.message.307' => 'Layout doesn’t exist (deleteTemplate)',
  'error.message.308' => 'Layout couldn’t be deleted',
  'error.message.309' => 'Error while deleting layout',
  'error.message.350' => 'Error, generated too few layout ids',
  'error.message.351' => 'Error generating new layout ids',
  'error.message.402' => 'Album doesn’t exist',
  'error.message.404' => 'Error while creating the new album',
  'error.message.405' => 'Error while loading albums',
  'error.message.406' => 'Error while saving the album',
  'error.message.408' => 'Error while loading album',
  'error.message.410' => 'Album couldn’t be deleted',
  'error.message.501' => 'Error in the existence check of user group(s) of the website',
  'error.message.502' => 'User group doesn’t exist',
  'error.message.504' => 'Error while creating new user group',
  'error.message.506' => 'Error while saving user group',
  'error.message.510' => 'Error while deleting user group',
  'error.message.514' => 'Error while adding users to user group',
  'error.message.515' => 'User group to which the user is to be added doesn’t exist',
  'error.message.517' => 'User group of which the user is to be removed doesn’t exist',
  'error.message.518' => 'User group of which the user is to be removed doesn’t contain users',
  'error.message.519' => 'Error while removing users from user group',
  'error.message.520' => 'User which is to be removed from the user group doesn’t exist in the user group',
  'error.message.521' => 'User which is to be added to the user group doesn’t exist',
  'error.message.522' => 'User which is to be removed from the user group doesn’t exist',
  'error.message.570' => 'Source user group with the id “{id}” doesn’t exist (copyGroup)',
  'error.message.571' => 'Error while duplicating the user group with the id “{id}” (copyGroup)',
  'error.message.572' => 'Names of the source user group and target user group are equal (copyGroup)',
  'error.message.573' => 'User group with this name already exists (copyGroup)',
  'error.message.580' => 'User group with the id “{id}” doesn’t exist (setPageRights)',
  'error.message.581' => 'Error while setting page rights for user group with id “{id}” (setPageRights)',
  'error.message.600' => 'Error while loading website with the id “{id}”',
  'error.message.601' => 'Error while loading websites',
  'error.message.602' => 'Website doesn’t exist ({id})',
  'error.message.603' => 'Error while duplicating website ({id})',
  'error.message.604' => 'Error while deleting website ({id})',
  'error.message.605' => 'Error while saving website ({id})',
  'error.message.606' => 'Error while creating new website',
  'error.message.607' => 'Error while deleting website ({id})',
  'error.message.608' => 'Error while increasing website version',
  'error.message.609' => 'Error while decreasing website version',
  'error.message.610' => 'Error while determining the websites to be deleted',
  'error.message.611' => 'Error while loading websites',
  'error.message.612' => 'Error while count all websites',
  'error.message.613' => 'Error while generate a new short id',
  'error.message.622' => 'Website version doesn’t exist ({id})',
  'error.message.623' => 'Please provide the live server configuration',
  'error.message.624' => 'Publishing of the website is disabled ({websiteId}).',
  'error.message.702' => 'Page doesn’t exist ({id} - {websiteid})',
  'error.message.703' => 'Error while loading page ({id} - {websiteid})',
  'error.message.704' => 'Error while loading all page ids ({websiteId})',
  'error.message.708' => 'Error while saving page',
  'error.message.709' => 'Error while creating new page',
  'error.message.722' => 'Error while deleting page',
  'error.message.742' => 'Error while duplicating page',
  'error.message.752' => 'New website navigation couldn’t be created',
  'error.message.801' => 'Reparsing of page “{pageName}” ({pageId}) failed. Faulty unit: “{unitName}” ({unitId}).',
  'error.message.802' => 'Reparsing of page “{pageName}” ({pageId}) failed. Module “{moduleId}” of unit “{unitName}” ({unitId}) doesn’t exist.',
  'error.message.803' => 'Content of the page couldn’t be generated. Faulty unit “{unitName}” ({unitId}).',
  'error.message.901' => 'Website has no live server configuration',
  'error.message.902' => 'Error while publishing {msg}',
  'error.message.903' => 'Version {buildversion} is being published. Please wait until this process is complete.',
  'error.message.904' => 'Website version is not supported anymore. Publish aborted.',
  'error.message.1001' => 'User with the same email address already exists',
  'error.message.1002' => 'User doesn’t exist',
  'error.message.1004' => 'Error while creating new user',
  'error.message.1006' => 'Error while saving user',
  'error.message.1010' => 'Error while deleting user',
  'error.message.1011' => 'User isn’t deletable',
  'error.message.1012' => 'Error while loading users',
  'error.message.1013' => 'Error while loading user',
  'error.message.1014' => 'Error while adding a user to user group',
  'error.message.1015' => 'User group to which the user is to be added doesn’t exist',
  'error.message.1016' => 'User is already in the user group to which he is to be added',
  'error.message.1017' => 'User group of which the user is to be removed doesn’t exist',
  'error.message.1018' => 'User which is to be removed from the user group doesn’t exist in the user group',
  'error.message.1019' => 'Error while removing users from user group',
  'error.message.1020' => 'Error while loading users',
  'error.message.1021' => 'Password isn’t equal to the old user password',
  'error.message.1022' => 'Error while loading superusers',
  'error.message.1032' => 'Error while deleting user opt-ins',
  'error.message.1033' => 'Error while loading user opt-ins',
  'error.message.1035' => 'User opt-in code doesn’t exist',
  'error.message.1036' => 'Error while deleting user opt-in',
  'error.message.1037' => 'User opt-in code expired',
  'error.message.1038' => 'Unsupported opt-in mode ({mode})',
  'error.message.1039' => 'Invalid opt-in code',
  'error.message.1040' => 'Unknown email address',
  'error.message.1101' => 'Error while sending feedback',
  'error.message.1201' => 'Error while reading action log',
  'error.message.1202' => 'Error while deleting time expired log entries',
  'error.message.1203' => 'Error while try to find the last entry in ActionLog for "{action}"',
  'error.message.1301' => 'Error while creating ticket',
  'error.message.1302' => 'Error while generating new ticket id',
  'error.message.1303' => 'Error while loading ticket',
  'error.message.1304' => 'Error in the existence check of a ticket',
  'error.message.1305' => 'Error while increasing ticket call counter',
  'error.message.1306' => 'Error while deleting expired tickets',
  'error.message.1307' => 'Unknown access format of new ticket',
  'error.message.1308' => 'Ticket is invalid',
  'error.message.1309' => 'Ticket access disabled',
  'error.message.1401' => 'Website doesn’t exist ({websiteid})',
  'error.message.1402' => 'Page doesn’t exist ({pageid})',
  'error.message.1500' => 'Error while loading locked entities',
  'error.message.1501' => 'Error in determining the lock status',
  'error.message.1502' => 'The entity “{item.name}” of type “{item.type}” is currently being edited by “{user.firstname} {user.lastname} ({user.email})”.',
  'error.message.1503' => 'Error while creating lock',
  'error.message.1504' => 'Error while overwriting lock',
  'error.message.1505' => 'Error while updating lock',
  'error.message.1506' => 'No lock available to be removed',
  'error.message.1507' => 'Lock type “{type}” doesn’t exist',
  'error.message.1508' => 'The entity “{item.name}” of type “{item.type}” isn’t locked',
  'error.message.1509' => 'Lock of entity “{item.name}” of type “{item.type}” expired',
  'error.message.1510' => 'The page “{item.name}” isn’t locked',
  'error.message.1511' => 'The page “{item.name}” is being edited by you in another window/tab.',
  'error.message.1512' => 'The page “{item.name}” is being edited by “{user.firstname} {user.lastname} ({user.email})”.',
  'error.message.1513' => 'The page “{item.name}” can’t be edited. Associated layout “{lock.name}” is being edited by you in another window/tab.',
  'error.message.1514' => 'The page “{item.name}” can’t be edited. Associated layout “{lock.name}” is being edited by “{user.firstname} {user.lastname} ({user.email})”.',
  'error.message.1515' => 'The page “{item.name}” can’t be edited, website “{lock.name}” is locked.',
  'error.message.1516' => 'The page “{item.name}” can’t be edited. Website “{lock.name}” is locked by “{user.firstname} {user.lastname} ({user.email})”.',
  'error.message.1517' => 'Lock of page “{item.name}” expired.',
  'error.message.1520' => 'The layout “{item.name}” isn’t locked.',
  'error.message.1521' => 'The layout “{item.name}” is being edited by you in another window/tab.',
  'error.message.1522' => 'The layout “{item.name}” is being edited by “{user.firstname} {user.lastname} ({user.email})”.',
  'error.message.1523' => 'The layout “{item.name}” can’t be edited. Associated page “{lock.name}” is being edited by you in another window/tab.',
  'error.message.1524' => 'The layout “{item.name}” can’t be edited. Associated page “{lock.name}” is being edited by “{user.firstname} {user.lastname} ({user.email})”.',
  'error.message.1525' => 'The layout “{item.name}” can’t be edited, website “{lock.name}” is locked.',
  'error.message.1526' => 'The layout “{item.name}” can’t be edited. Website “{lock.name}” is locked by “{user.firstname} {user.lastname} ({user.email})”.',
  'error.message.1527' => 'Lock of layout “{item.name}” expired.',
  'error.message.1530' => 'The module “{item.name}” isn’t locked',
  'error.message.1531' => 'The module “{item.name}” is being edited by you in another window/tab.',
  'error.message.1532' => 'The module “{item.name}” is being edited by “{user.firstname} {user.lastname} ({user.email})”.',
  'error.message.1533' => 'The module “{item.name}” can’t be edited, website “{lock.name}” is locked.',
  'error.message.1534' => 'The module “{item.name}” can’t be edited. Website “{lock.name}” is locked by “{user.firstname} {user.lastname} ({user.email})”.',
  'error.message.1535' => 'Lock of module “{item.name}” expired.',
  'error.message.1540' => 'The website “{item.name}” isn’t locked',
  'error.message.1541' => 'The website “{item.name}” is locked by you in another window/tab.',
  'error.message.1542' => 'The website “{item.name}” is locked by “{user.firstname} {user.lastname} ({user.email})”.',
  'error.message.1543' => 'The website “{item.name}” can’t be edited. Associated page “{lock.name}” is edited by you in another window/tab.',
  'error.message.1544' => 'The website “{item.name}” can’t be edited. Associated page “{lock.name}” is edited by “{user.firstname} {user.lastname} ({user.email})”.',
  'error.message.1545' => 'The website “{item.name}” can’t be edited. Associated layout “{lock.name}” is edited by you in another window/tab.',
  'error.message.1546' => 'The website “{item.name}” can’t be edited. Associated layout “{lock.name}” is edited by “{user.firstname} {user.lastname} ({user.email})”.',
  'error.message.1547' => 'The website “{item.name}” can’t be edited. Associated module “{lock.name}” is edited by you in another window/tab.',
  'error.message.1548' => 'The website “{item.name}” can’t be edited. Associated module “{lock.name}” is edited by “{user.firstname} {user.lastname} ({user.email})”.',
  'error.message.1549' => 'Lock of website “{item.name}” expired.',
  'error.message.1601' => 'Error while loading snippets',
  'error.message.1602' => 'Snippet doesn’t exist',
  'error.message.1603' => 'Error while loading snippet',
  'error.message.1605' => 'Snippet doesn’t exist (update)',
  'error.message.1606' => 'Error while creating new snippet',
  'error.message.1607' => 'Snippet doesn’t exist (delete)',
  'error.message.1608' => 'Error while deleting snippet (deleteByIds)',
  'error.message.1609' => 'Error while deleting snippet',
  'error.message.1610' => 'Error while loading snippets',
  'error.message.1611' => 'Error while saving snippet',
  'error.message.1612' => 'Error while loading snippet (copy)',
  'error.message.1613' => 'Snippet is readonly',
  'error.message.1801' => 'No layout available',
  'error.message.1802' => 'Error while importing the layout',
  'error.message.1803' => 'Registration currently not possible. Please try again later.',
  'error.message.2006' => 'FTP credentials incorrect',
  'error.message.2007' => 'FTP login not possible for this user',
  'error.message.2008' => 'Login incorrect',
  'error.message.2100' => 'Ticket is not valid',
  'error.message.2101' => 'Invalid render type “{type}”',
  'error.message.2210' => 'Error at prepare css code for page “{page.id}”: {exception.message}',
  'error.message.2211' => 'Error at prepare css code for page “{page.id}”: {exception.message}',
  'error.message.2300' => 'Maximum website quota reached',
  'error.message.2301' => 'Module development is not allowed (quota)',
  'error.message.2302' => 'Export is not allowed (quota)',
  'error.message.2303' => 'Maximum webhosting quota reached',
  'error.message.-10' => 'Request class “{class}” couldn’t be loaded',
  'error.message.-11' => 'Validator class “{class}” couldn’t be loaded',
  'error.message.-12' => 'No validation method found for “{method}”',
  'error.message.-13' => 'Couldn’t create CMS data object',
  'error.message.-14' => 'Invalid feedback mode “{mode}”',
  'error.message.-15' => 'No feedback email address provided',
  'error.message.-16' => 'Feedback couldn’t be sent',
  'error.message.-17' => 'Feedback adapter “{adapter}” wasn’t found',
  'error.message.-20' => 'There was no item be identified',
  'error.message.-30' => 'Plugin “{plugin}” is not registered',
  'error.message.-40' => 'Transport class “{transportclass}” couldn’t be loaded',
  'error.message.-41' => 'Transport “{transport}” not supported',
  'error.message.-42' => 'Transport “{transportclass}” couldn’t be initiated',
  'error.message.-1001' => 'Invalid user role “{role}”',
);
