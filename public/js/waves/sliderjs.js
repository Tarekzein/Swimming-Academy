$(".toggle").on("click", function(){
    $(".ok").css('display') == 'none' ? $(".ok").css('display', 'flex') : $(".ok").css('diplay', 'none')
});
var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlider:'true',
    fade:'true',
    grabCursor:'true',
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets:true
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520:{
            slidesPerView: 2,
        },
        950:{
            slidesPerView: 3,
        },
    },
});

