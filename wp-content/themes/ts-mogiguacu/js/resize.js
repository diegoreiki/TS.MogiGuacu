   jQuery(document).ready(function() {

    var $window = jQuery(window);
    var $stretch = jQuery("#screen")    

    function checkWidth() {
        var windowsize = $window.width();
        var auto = (windowsize - 960) / 2
        
        if (windowsize > 1034) {

          jQuery("#screen").css('width',auto);

        }
    }
    // Execute on load
    checkWidth();
    // Bind event listener
    jQuery(window).resize(checkWidth);


    jQuery(window).resize(function() {
    // do your stuff here
    jQuery("#screen").removeAttr("style");

    checkWidth();
 });

    });