import Swiper from "swiper/bundle";

const reviewSlider = new Swiper(".review-swiper", {
  slidesPerView: "auto",
  // slidesOffsetBefore: 20,
  // slidesOffsetAfter: 20,
  spaceBetween: 20,

  breakpoints: {
    481: {
      slidesOffsetBefore: 40,
      slidesOffsetAfter: 40,
      spaceBetween: 40,
    },
    975: {
      slidesOffsetBefore: 60,
      slidesOffsetAfter: 60,
      spaceBetween: 30,
    },
    1280: {
      slidesOffsetBefore: 60,
      slidesOffsetAfter: 60,
      spaceBetween: 40,
    },
  },

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
