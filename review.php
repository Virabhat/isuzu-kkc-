<?php include 'layouts/header.php'; ?>

<!-- ================= Hero Section ================= -->
<section class="hero">
    <div class="container hero-inner">
        <h1>
            <span>รีวิวรถยนต์</span>
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

<section class="car-gallery">
    <div class="container">
        <h2 class="section-title">รุ่นรถยอดนิยม</h2>

        <div class="swiper car-swiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="gallery-item">
                        <div class="car-image">
                            <img src="assets/images/isuzu-dmax.jpg" alt="Isuzu D-Max">
                            <div class="car-overlay"><span class="view-btn">ดูรายละเอียด</span></div>
                        </div>
                        <div class="car-info">
                            <h3>Isuzu D-Max</h3>
                            <p>ปิกอัพยอดนิยม แข็งแกร่ง ทนทาน</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="gallery-item">
                        <div class="car-image">
                            <img src="assets/images/isuzu-mu-x.jpg" alt="Isuzu MU-X">
                            <div class="car-overlay"><span class="view-btn">ดูรายละเอียด</span></div>
                        </div>
                        <div class="car-info">
                            <h3>Isuzu MU-X</h3>
                            <p>เหนือระดับ แห่งความสง่างาม</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="gallery-item">
                        <div class="car-image">
                            <img src="assets/images/isuzu-v-cross.jpg" alt="Isuzu V-Cross">
                            <div class="car-overlay"><span class="view-btn">ดูรายละเอียด</span></div>
                        </div>
                        <div class="car-info">
                            <h3>Isuzu V-Cross 4x4</h3>
                            <p>ลุยไปทุกที่ด้วยพลังขับเคลื่อน 4 ล้อ</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="gallery-item">
                        <div class="car-image">
                            <img src="assets/images/isuzu-spark.jpg" alt="Isuzu Spark">
                            <div class="car-overlay"><span class="view-btn">ดูรายละเอียด</span></div>
                        </div>
                        <div class="car-info">
                            <h3>Isuzu Spark</h3>
                            <p>บรรทุกหนัก มั่นใจทุกเส้นทาง</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>



<?php include 'layouts/footer.php'; ?>