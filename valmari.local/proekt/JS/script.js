document.addEventListener('DOMContentLoaded', function () {
    
     // 1. СЛАЙДЕР КУРСОВ (Верхний)
    const swiper1 = new Swiper('.courses__slider', {
        loop: true,
        autoplay: { delay: 3000, disableOnInteraction: false },
        navigation: {
            // Ищем стрелки именно внутри блока courses
            nextEl: '.courses .swiper-button-next',
            prevEl: '.courses .swiper-button-prev',
        },
        pagination: { 
            el: '.courses .swiper-pagination', 
            clickable: true 
        },
        breakpoints: {
            320: { slidesPerView: 1 },
            1024: { slidesPerView: 3, spaceBetween: 30 }
        }
    });

    // 2. МАСТЕР-КЛАССЫ (Нижний)
    const swiper2 = new Swiper('.master__slider', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: false, // Grid не работает с loop!
        grid: {
            rows: 2,
            fill: 'column',
        },
        pagination: {
            el: '.master-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.master-arrow.swiper-button-next',
            prevEl: '.master-arrow.swiper-button-prev',
        },
        breakpoints: {
            1024: {
                slidesPerView: 2,
                grid: { rows: 1 },
                spaceBetween: 30,
            }
        }
    });
});