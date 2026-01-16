<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ISUZU KKC</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/hero.css">
    <link rel="stylesheet" href="assets/css/video.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

    <div id="overlay" onclick="closeNav()"></div>

    <div id="mySidebar" class="sidebar-right">
        <div class="sidebar-header">
            <h3>เมนูรถยนต์</h3>
            <span class="close-sidebar" onclick="closeNav()">&times;</span>
        </div>
        <ul class="sidebar-menu">
            <li><a href="#"><i class="fa-solid fa-chevron-right"></i> Isuzu D-Max</a></li>
            <li><a href="#"><i class="fa-solid fa-chevron-right"></i> Isuzu MU-X</a></li>
            <li><a href="#"><i class="fa-solid fa-chevron-right"></i> รถบรรทุก Isuzu</a></li>
            <li><a href="#"><i class="fa-solid fa-chevron-right"></i> จองคิวทดลองขับ</a></li>
            <li><a href="#"><i class="fa-solid fa-chevron-right"></i> คำนวณค่างวด</a></li>
        </ul>
    </div>

    <header class="navbar">
        <div class="container nav-inner">
            <a class="logo" href="index.php" aria-label="ISUZU KKC">
                <img src="assets/img/logo.png" alt="ISUZU KKC Logo" width="160" height="44" />
            </a>

            <nav class="nav" role="navigation" aria-label="เมนูหลัก">
                <ul class="nav-list">
                    <li><a href="#review">รีวิว</a></li>
                    <li><a href="#type">รุ่นรถ</a></li>
                    <li><a href="#">ผลงาน</a></li>
                    <li><a href="#">ติดต่อเรา</a></li>
                    <li>
                        <a href="javascript:void(0)" onclick="openNav()">
                            <i class="fa-solid fa-car" style="color: #ffffff;"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>



</body>

</html>