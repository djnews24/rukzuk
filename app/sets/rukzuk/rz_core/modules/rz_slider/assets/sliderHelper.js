define(['jquery'], function ($) {
    // the slider handles
    var slider = {};

    /**
     * retrieve current slider configuration, add start function
     * @param $unit - jquery object of the slider element
     * @returns {Object} - config object
     */
    var getSliderConfig = function ($unit) {
        var sliderConfig = $unit.data('sliderconfig');
        return sliderConfig;
    };

    /**
     * initialize a slider
     * @param unitId
     */
    var initSlider = function (unitId) {
        var $unit = $('#' + unitId);
        var sliderConfig = getSliderConfig($unit);
        sliderConfig.onSlideAfter = function ($slideElement, oldIndex, newIndex) {
            $slideElement.siblings('.slide').removeClass('slideActive');
            $slideElement.addClass('slideActive');
            $slideElement.find('.isModule').addClass('visiblePart10 visiblePart25 visiblePart50 visiblePart75 visiblePart100 top50Screen bottom50Screen animationRunning');
            $slideElement.siblings('.slide').find('.isModule').removeClass('visiblePart10 visiblePart25 visiblePart50 visiblePart75 visiblePart100 top50Screen bottom50Screen animationRunning');
        };

        var $slider = $unit.children('.slides').first();

        // clean up old sliders for this unitId
        if (slider[unitId] && slider[unitId].destroySlider) {
            slider[unitId].destroySlider();
        }

        slider[unitId] = $slider.bxSlider(sliderConfig);

        // HACK since layout of rz_box can be wrong in webkit after slider init
        if (window.webkitFixTableLayout) {
            window.webkitFixTableLayout();
        }
    };

    var initAllSlidersInDom = function () {
        $('.rz_slider').each(function () {
            initSlider($(this).attr('id'));
        });
    };

    var initAllSlidersInDomInLayoutInclude = function () {
        $('.rz_slider').each(function () {
            if($(this).parents('.rz_include').length > 0) {
                initSlider($(this).attr('id'));
            }

        });
    };


    return {
        initSlider: initSlider,
        initAllSlidersInDom: initAllSlidersInDom,
        initAllSlidersInDomInLayoutInclude: initAllSlidersInDomInLayoutInclude,
        getSliders: function () {
            return slider;
        }
    };
});

