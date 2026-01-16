const sidebar = document.getElementById("mySidebar");
const overlay = document.getElementById("overlay");
const body = document.body;

function openNav() {
  sidebar.classList.add("active");
  overlay.style.display = "block";
  body.classList.add("no-scroll"); // ล็อกหน้าจอ
}

function closeNav() {
  sidebar.classList.remove("active");
  overlay.style.display = "none";
  body.classList.remove("no-scroll"); // ปลดล็อกหน้าจอ
}
