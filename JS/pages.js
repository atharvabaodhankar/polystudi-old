     // Swiper JS

     var swiper = new Swiper(".slide-content", {
        slidesPerView: 3,
        spaceBetween: 30,
        // centeredSlides: true,
        loop: true,
        fade: "true",
        speed: 1000,
        slidesPerGroupSkip: 10,
        grabCursor: true,
        autoplayDisableOnInteraction: true,
        autoplay: {
          enabled: true,
          delay: 5000,
        },
        keyboard: {
          enabled: true,
        },
        breakpoints: {
          0: {
            slidesPerView: 1,
            slidesPerGroup: 1,
            spaceBetween: 30,
      
          },
          650: {
            slidesPerView: 2,
            slidesPerGroup: 2,
            spaceBetween: 60,
      
          },
          1200: {
            slidesPerView: 3,
            slidesPerGroup: 3,
            spaceBetween: 40,
          },
        },
        scrollbar: {
          el: ".swiper-scrollbar",
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
          dynamicBullets: true,
        },
      });