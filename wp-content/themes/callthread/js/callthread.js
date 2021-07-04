jQuery(document).ready(function () {
    jQuery(function () {
        jQuery(window).on("scroll", function () {
            if (jQuery(window).scrollTop() > 100) {
                jQuery(".navbar-transparent").addClass("active");
            } else {
                //remove the background property so it comes transparent again (defined in your css)
                jQuery(".navbar-transparent").removeClass("active");
            }
        });
    });
});