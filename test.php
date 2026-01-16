<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ISUZU KKC - Right Sidebar</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        /* --- เพิ่ม CSS สำหรับ Sidebar และ Overlay --- */

        /* ฉากหลังมืด */
        #overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: 998;
            /* อยู่ใต้ Sidebar */
            cursor: pointer;
        }

        /* ตัว Sidebar */
        .sidebar {
            height: 100%;
            width: 300px;
            /* ปรับความกว้างตามชอบ */
            position: fixed;
            z-index: 999;
            /* อยู่หน้าสุด */
            top: 0;
            right: -300px;
            /* ซ่อนไว้ทางขวา */
            background-color: #ffffff;
            /* เปลี่ยนเป็นสีขาวเพื่อให้เข้ากับเว็บรถ */
            transition: 0.4s ease-in-out;
            padding-top: 60px;
            box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
        }

        .sidebar a {
            padding: 15px 25px;
            text-decoration: none;
            font-size: 18px;
            color: #333;
            display: block;
            border-bottom: 1px solid #eee;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background-color: #f8f9fa;
            color: #ed1c24;
            /* สีแดง Isuzu */
            padding-left: 35px;
        }

        .sidebar .close-btn {
            position: absolute;
            top: 15px;
            left: 15px;
            font-size: 24px;
            color: #333;
            cursor: pointer;
            border: none;
        }

        /* สไตล์เพิ่มเติมเพื่อให้ Navbar ดูดี */
        .nav-list {
            list-style: none;
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .nav-list a {
            text-decoration: none;
            color: inherit;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div id="overlay" onclick="toggleNav()"></div>

    <div id="mySidebar" class="sidebar">
        <div class="close-btn" onclick="toggleNav()"><i class="fa-solid fa-xmark"></i></div>
        <h3 style="padding: 0 25px; color: #ed1c24;">เลือกรุ่นรถ Isuzu</h3>
        <a href="#">Isuzu D-MAX</a>
        <a href="#">Isuzu MU-X</a>
        <a href="#">รถบรรทุก Isuzu</a>
        <a href="#">โปรโมชั่นพิเศษ</a>
    </div>

    <header class="navbar">
        <div class="container nav-inner">
            <a class="logo" href="index.php">
                <img src="assets/img/logo.png" alt="Logo" width="160" />
            </a>

            <nav class="nav">
                <ul class="nav-list">
                    <li><a href="#review">รีวิว</a></li>
                    <li><a href="#type">รุ่นรถ</a></li>
                    <li><a href="#">ผลงาน</a></li>
                    <li><a href="#">ติดต่อเรา</a></li>

                    <li>
                        <a href="javascript:void(0)" onclick="toggleNav()" style="font-size: 1.5rem; color: #ed1c24;">
                            <i class="fa-solid fa-car"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
    </main>

    <script>
        function toggleNav() {
            const sidebar = document.getElementById("mySidebar");
            const overlay = document.getElementById("overlay");

            // เช็คว่า Sidebar เปิดอยู่หรือไม่
            if (sidebar.style.right === "0px") {
                sidebar.style.right = "-300px";
                overlay.style.display = "none";
                document.body.style.overflow = "auto"; // ให้กลับมาเลื่อนหน้าจอได้
            } else {
                sidebar.style.right = "0px";
                overlay.style.display = "block";
                document.body.style.overflow = "hidden"; // ล็อกหน้าจอไม่ให้เลื่อนตอนเปิดเมนู
            }
        }
    </script>
</body>

</html>