jQuery(document).ready(function($) {
    $(".els-logo-slider").each(function() {
        var slider = $(this);
        // Ensure the slider has children before initializing
        if (slider.children().length > 0) {
            var autoplayValue = slider.attr("data-autoplay") === "true"; // Convert to boolean
            slider.slick({
                slidesToShow: parseInt(slider.attr("data-slides-to-show")),
                slidesToScroll: parseInt(slider.attr("data-slides-to-scroll")),
                autoplay: autoplayValue, 
                autoplaySpeed: parseInt(slider.attr("data-autoplay-speed")),
                infinite: true,
                arrows: true,
                dots: false,
            });
        }
    });
});
