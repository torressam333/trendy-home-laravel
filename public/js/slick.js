/*Code for the Projects section of the site slick.min.js*/

$(document).ready(function () {
    $('.my-slick').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3500,
        dots: true,
        responsive: [
            {
                breakpoint: 780, // tablet breakpoint
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480, // mobile breakpoint
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});