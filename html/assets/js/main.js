$(document).ready(function(){
    $('.loading').hide();

    const slider = function() {
        $('.main__slider-slides').slick({
            dots: false,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 3000,
        });
    }
    slider();
})