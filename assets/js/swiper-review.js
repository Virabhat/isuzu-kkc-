// ================= Review Car Swiper =================
const reviewSwiper = new Swiper(".mySwiper", {
  loop: true,
  centeredSlides: true,
  grabCursor: true,
  spaceBetween: 30,
  slidesPerView: 3,

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 3,
    },
  },
});
