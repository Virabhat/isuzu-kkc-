var swiper = new Swiper(".car-swiper", {
  slidesPerView: 1, // มือถือแสดง 1 อัน
  spaceBetween: 20, // ระยะห่างระหว่างการ์ด
  loop: true, // วนลูป
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    640: {
      slidesPerView: 2, // แท็บเล็ตแสดง 2 อัน
    },
    1024: {
      slidesPerView: 4, // คอมพิวเตอร์แสดง 3 อัน
    },
  },
});
