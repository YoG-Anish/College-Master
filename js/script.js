jQuery(function ($) {
    $('.single-slider').slick({
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        prevArrow: '<div class="slick-prev slick-arrow"><i class="fas fa-chevron-left"></i></div>',
        nextArrow: '<div class="slick-next slick-arrow"><i class="fas fa-chevron-right"></i></div>'

    });


    $('a[data-toggle="tab"]').on('shown.bs.tab', function() {
        $($(this).attr('href')).find('.course-info-items.multi-slider.slider').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            prevArrow: '<div class="slick-prev slick-arrow"><i class="fas fa-chevron-left"></i></div>',
            nextArrow: '<div class="slick-next slick-arrow"><i class="fas fa-chevron-right"></i></div>'
        });
    }).first().trigger('shown.bs.tab');

    $('.testimonials-items .row').slick({
        infinite: true,
        slidesToShow: 2,
        arrows:false,
        dots:true,
        slidesToScroll: 1,
        prevArrow: '<div class="slick-prev slick-arrow"><i class="fas fa-chevron-left"></i></div>',
        nextArrow: '<div class="slick-next slick-arrow"><i class="fas fa-chevron-right"></i></div>'
    });

});

