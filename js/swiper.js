jQuery(function ($) {
  let sliderThumbnail = new Swiper(".slider-thumbnail", {
    loop: true,
    slidesPerView: 2,
    spaceBetween: 8,
    loopedSlides: 4,
    breakpoints: {
      960: {
        slidesPerView: 4,
      },
    },
  });
  let mainSlider = new Swiper(".slider", {
    // Optional parameters
    autoplay: true,
    effect: "fade",
    loop: true,
    loopedSlides: 4,
    speed: 800,

    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    thumbs: {
      swiper: sliderThumbnail,
    },

    on: {
      slideChange: (swiper) => {
        let activeIndex = swiper.realIndex;
        let circleItems = $(".p-top-swiper-pagination").find("div");
        circleItems.eq(activeIndex).addClass("active");
        circleItems.not(circleItems.eq(activeIndex)).removeClass("active");
      },
    },
  });
});
