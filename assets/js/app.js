// Toggle เมนูมือถือ
const btn = document.querySelector(".nav-toggle");
const list = document.querySelector(".nav-list");
if (btn && list) {
  btn.addEventListener("click", () => {
    const opened = list.classList.toggle("show");
    btn.setAttribute("aria-expanded", opened ? "true" : "false");
  });
}
