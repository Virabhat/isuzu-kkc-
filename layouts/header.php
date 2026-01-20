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
    <link rel="stylesheet" href="assets/css/review.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

    <div id="overlay" onclick="closeNav()"></div>

    <div id="mySidebar" class="sidebar-right">
        <div class="sidebar-header">
            <img src="assets/img/isuzu-Logo.png" alt="ISUZU KKC Logo" width="285" height="80" />
            <span class="close-sidebar" onclick="closeNav()">&times;</span>
        </div>
        <ul class="sidebar-menu">
            <li><a href="#"> โปรโมชั่นประจำเดือน </a></li>
            <li><a href="#"> โปรโมชั่นชุดเเต่ง</a></li>
            <li><a href="#"> รุ่นรถ</a></li>
            <li><a href="#"> ติดต่อเรา</a></li>
        </ul>

        <div class="sidebar-footer-banner">
            <img src="https://isuzukkc.com/assets/img/isuzu_menu_footer.webp" alt="Banner">
        </div>
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