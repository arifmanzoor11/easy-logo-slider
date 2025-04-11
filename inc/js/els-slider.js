jQuery(document).ready(function($) {
    $(".els-logo-slider").each(function() {
        var slider = $(this);
        // Ensure the slider has children before initializing
        if (slider.children().length > 0) {
            var autoplayValue = slider.attr("data-autoplay") === "true";
            var showArrows = slider.attr("show-arrows") === "true";
            var showDots = slider.attr("show-dots") === "true";
            slider.slick({
                slidesToShow: parseInt(slider.attr("data-slides-to-show")),
                slidesToScroll: parseInt(slider.attr("data-slides-to-scroll")),
                autoplay: autoplayValue, 
                autoplaySpeed: parseInt(slider.attr("data-autoplay-speed")),
                infinite: parseInt(slider.attr("data-autoplay-speed")),
                arrows: showArrows,
                dots: showDots,
                responsive: [
                    {
                      breakpoint: 1024,
                      settings: {
                        slidesToShow: parseInt(slider.attr("data-slides-in-tablet")),
                        slidesToScroll: 3,
                      }
                    },
                    {
                      breakpoint: 600,
                      settings: {
                        slidesToShow: parseInt(slider.attr("data-slides-in-mobile")),
                        slidesToScroll: 1
                      }
                    },
                    {
                      breakpoint: 480,
                      settings: {
                        slidesToShow: parseInt(slider.attr("data-slides-in-mobile")),
                        slidesToScroll: 1
                      }
                    }
                  ]
            });
        }
    });
});
