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

    if($(window).width() <= 900){
        // add menu mobile
        $('.header__container').append(`
            <figure class="header__mobile">
                <span></span>
                <span></span>
                <span></span>
            </figure>
        `)

        const headerNav = $('.header__nav');
        const menuMobile = $('.header__mobile');
        menuMobile.on('click', () => {
            menuMobile.addClass('header__mobile--active')
            $('body').addClass('menu-open')
            $('body').append(headerNav)
            headerNav.addClass('header__nav--open')
            headerNav.append('<span class="header__close"></span>')

            $('.header__close').on('click', () => {
                menuMobile.removeClass('header__mobile--active')
                $('body').removeClass('menu-open')
                headerNav.removeClass('header__nav--open')
            })
        })
    }
})