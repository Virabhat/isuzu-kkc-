<?php include 'layouts/header.php'; ?>

<!-- ================= Hero Section ================= -->
<section class="hero">
    <div class="container hero-inner">
        <h1>
            ยินดีต้อนรับสู่ <span>ISUZU KKC</span>
        </h1>

        <p>
            ศูนย์รวมรถยนต์อีซูซุครบวงจรในขอนแก่น
            บริการด้วยใจ ใส่ใจทุกรายละเอียด
        </p>

        <div class="hero-actions">
            <!-- ปุ่มหรือรูปภาพ (เผื่อใช้ในอนาคต) -->
        </div>
    </div>
</section>

<!-- ================= Review Car Section ================= -->
<section id="review" class="review-car">
    <h2>รีวิว</h2>

    <div class="swiper-outer">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide" data-title="มีเทคโนโลยีความปลอดภัยรอบคัน" data-link="review_detail_1.php">
                    <div class="swiper-card">
                        <video autoplay muted loop playsinline class="card-video">
                            <source src="VDO/video_one.mp4" type="video/mp4">
                            เบราว์เซอร์ของคุณไม่รองรับการเล่นวิดีโอ
                        </video>
                    </div>
                </div>

                <div class="swiper-slide" data-title="ดีไซน์โฉบเฉี่ยว ทันสมัย" data-link="review_detail_2.php">
                    <div class="swiper-card">
                        <video autoplay muted loop playsinline class="card-video">
                            <source src="VDO/video_two.mp4" type="video/mp4">
                            เบราว์เซอร์ของคุณไม่รองรับการเล่นวิดีโอ
                        </video>
                    </div>
                </div>

                <div class="swiper-slide" data-title="ดีไซน์โฉบเฉี่ยว ทันสมัย เจ๋งเเจ๋ว"
                    data-link="review_detail_3.php">
                    <div class="swiper-card">
                        <video autoplay muted loop playsinline class="card-video">
                            <source src="VDO/video_three.mp4" type="video/mp4">
                            เบราว์เซอร์ของคุณไม่รองรับการเล่นวิดีโอ
                        </video>
                    </div>
                </div>

                <div class="swiper-slide" data-title="เยี่ยมยอดกล้วยทอดสองถุง" data-link="review_detail_5.php">
                    <div class="swiper-card">
                        <video autoplay muted loop playsinline class="card-video">
                            <source src="VDO/video_four.mp4" type="video/mp4">
                            เบราว์เซอร์ของคุณไม่รองรับการเล่นวิดีโอ
                        </video>
                    </div>
                </div>

                <div class="swiper-slide" data-title="รถซื้อเเกงจะไปเเรงได้ยังไง" data-link="review_detail_6.php">
                    <div class="swiper-card">
                        <video autoplay muted loop playsinline class="card-video">
                            <source src="VDO/video_five.mp4" type="video/mp4">
                            เบราว์เซอร์ของคุณไม่รองรับการเล่นวิดีโอ
                        </video>
                    </div>
                </div>

            </div>
        </div>

        <!-- Swiper Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>


        <!-- swiper-caption -->
        <div class="review-caption">
            <h3 id="review-title">มีเทคโนโลยีความปลอดภัยรอบคัน</h3>
            <a href="#" id="review-link" class="btn-review">
                สนใจเพิ่มเติม
            </a>
        </div>

    </div>
</section>

<!-- ================= Type Car Section ================= -->
<section id="type" class="type-car">
    <h2>รุ่นรถ</h2>

    <div class="type-filter">
        <div class="dropdown">
            <select id="carCategory" class="minimal-select">
                <option value="all">ทุกประเภท</option>
                <option value="pickup">รถกระบะ (D-MAX)</option>
                <option value="suv">รถอเนกประสงค์ (MU-X)</option>
                <option value="truck">รถบรรทุก</option>
            </select>
        </div>
    </div>

    <div class="swiper-outer">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="swiper-card">
                        <img src="assets/img_cars/1.webp" alt="Isuzu D-Max" class="car-img">

                        <div class="car-details">
                            <h4>Isuzu D-Max</h4>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="swiper-card">
                        <img src="assets/img_cars/2.webp" alt="Isuzu D-Max" class="car-img">

                        <div class="car-details">
                            <h4>Isuzu D-Max</h4>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="swiper-card">
                        <img src="assets/img_cars/3.webp" alt="Isuzu D-Max" class="car-img">

                        <div class="car-details">
                            <h4>Isuzu D-Max</h4>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="swiper-card">
                        <img src="assets/img_cars/4.webp" alt="Isuzu D-Max" class="car-img">

                        <div class="car-details">
                            <h4>Isuzu D-Max</h4>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="swiper-card">
                        <img src="assets/img_cars/1.webp" alt="Isuzu D-Max" class="car-img">

                        <div class="car-details">
                            <h4>Isuzu D-Max</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Swiper Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>


        <!-- swiper-caption -->
        <div class="type-caption">
            <h3>มีเทคโนโลยีความปลอดภัยรอบคัน</h3>
            <a href="#" class="btn-review">
                สนใจเพิ่มเติม
            </a>
        </div>

    </div>





</section>

<?php include 'layouts/footer.php'; ?>