const mySwiper = new Swiper('.swiper', {
    loop: true,
    effect: 'fade',
    fadeEffect: { crossFade: true },
    speed: 800,
    autoplay: {
        delay: 35000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

