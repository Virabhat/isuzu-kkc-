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
    0: { slidesPerView: 1 },
    768: { slidesPerView: 3 },
  },

  // --- ส่วนที่ต้องแก้คือตรงนี้ครับ ---
  on: {
    init: function () {
      // เรียกใช้งานครั้งแรกทันทีที่โหลดหน้า
      updateCaption(this);
    },
    slideChange: function () {
      // เรียกใช้งานทุกครั้งที่เลื่อน
      updateCaption(this);
    },
  },
});

function updateCaption(swiper) {
  // ใช้ realIndex เพื่อให้แม่นยำเวลาทำ Loop ครับ
  const activeSlide = swiper.slides[swiper.activeIndex];

  if (activeSlide) {
    const title = activeSlide.getAttribute("data-title");
    const link = activeSlide.getAttribute("data-link");

    const titleEl = document.getElementById("review-title");
    const linkEl = document.getElementById("review-link");

    if (titleEl && title) {
      titleEl.innerText = title;
    }
    if (linkEl && link) {
      linkEl.href = link;
    }
  }
}
