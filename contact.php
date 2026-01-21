<?php include 'layouts/header.php'; ?>

<style>
    .contact-hero {
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('../img/bg_isuzukcc.webp') center/cover;
        padding: 100px 0;
        text-align: center;
        color: #fff;
    }

    .contact-hero h1 {
        font-size: 3rem;
        margin-bottom: 10px;
    }

    .contact-section {
        padding: 80px 0;
        background: #f9f9f9;
    }

    .contact-wrapper {
        display: grid;
        grid-template-columns: 1fr 1.5fr;
        gap: 50px;
        background: #fff;
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    }

    .info-card {
        display: flex;
        gap: 20px;
        margin-bottom: 30px;
    }

    .icon-box {
        width: 50px;
        height: 50px;
        background: rgba(227, 26, 34, 0.1);
        color: #e31a22;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
    }

    .info-card h3 {
        font-size: 1.1rem;
        margin-bottom: 5px;
        color: #333;
    }

    .info-card p {
        color: #666;
        font-size: 0.95rem;
        margin: 0;
    }

    .social-links {
        display: flex;
        gap: 15px;
        margin-top: 40px;
    }

    .social-item {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        transition: 0.3s;
    }

    .fb {
        background: #3b5998;
    }

    .line {
        background: #00c300;
    }

    .yt {
        background: #ff0000;
    }

    .social-item:hover {
        transform: translateY(-5px);
        opacity: 0.8;
    }

    /* Form Style */
    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 500;
        color: #444;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #ddd;
        border-radius: 10px;
        font-family: inherit;
        outline: none;
    }

    .form-group input:focus {
        border-color: #e31a22;
    }

    .btn-send {
        width: 100%;
        padding: 15px;
        background: #e31a22;
        color: #fff;
        border: none;
        border-radius: 10px;
        font-size: 1rem;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn-send:hover {
        background: #c00000;
        box-shadow: 0 5px 15px rgba(227, 26, 34, 0.3);
    }

    @media (max-width: 991px) {
        .contact-wrapper {
            grid-template-columns: 1fr;
        }

        .form-row {
            grid-template-columns: 1fr;
        }
    }
</style>

<section class="contact-hero">
    <div class="container">
        <h1>ติดต่อเรา</h1>
        <p>สอบถามข้อมูลโปรโมชั่น หรือนัดหมายทดลองขับ เรายินดีให้บริการคุณ</p>
    </div>
</section>

<section class="contact-section">
    <div class="container">
        <div class="contact-wrapper">

            <div class="contact-info">
                <div class="info-card">
                    <div class="icon-box"><i class="fa-solid fa-location-dot"></i></div>
                    <div>
                        <h3>ที่อยู่โชว์รูม</h3>
                        <p>123 ถนนมิตรภาพ ต.ในเมือง อ.เมือง จ.ขอนแก่น 40000</p>
                    </div>
                </div>

                <div class="info-card">
                    <div class="icon-box"><i class="fa-solid fa-phone"></i></div>
                    <div>
                        <h3>เบอร์โทรศัพท์</h3>
                        <p>043-XXX-XXX (ฝ่ายขาย)</p>
                        <p>043-YYY-YYY (ศูนย์บริการ)</p>
                    </div>
                </div>

                <div class="info-card">
                    <div class="icon-box"><i class="fa-solid fa-clock"></i></div>
                    <div>
                        <h3>เวลาทำการ</h3>
                        <p>จันทร์ - เสาร์: 08:00 - 17:00 น.</p>
                    </div>
                </div>

                <div class="social-links">
                    <a href="#" class="social-item fb"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="social-item line"><i class="fa-brands fa-line"></i></a>
                    <a href="#" class="social-item yt"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>

            <div class="contact-form">
                <form action="contact_db.php" method="POST">
                    <div class="form-row">
                        <div class="form-group">
                            <label>ชื่อ-นามสกุล</label>
                            <input type="text" name="name" placeholder="กรุณากรอกชื่อของคุณ" required>
                        </div>
                        <div class="form-group">
                            <label>เบอร์โทรศัพท์</label>
                            <input type="tel" name="phone" placeholder="08X-XXX-XXXX" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>รุ่นรถที่สนใจ</label>
                        <select name="car_model">
                            <option value="">-- เลือกรุ่นรถ --</option>
                            <option value="D-MAX">ISUZU D-MAX</option>
                            <option value="MU-X">ISUZU MU-X</option>
                            <option value="V-Cross">ISUZU V-CROSS 4x4</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>ข้อความเพิ่มเติม</label>
                        <textarea name="message" rows="5" placeholder="คุณต้องการสอบถามเรื่องใด..."></textarea>
                    </div>
                    <button type="submit" name="send_msg" class="btn-send">ส่งข้อความ</button>
                </form>
            </div>

        </div>
    </div>
</section>

<section class="map-section">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.2!2d102.8!3d16.4!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTbCsDI0JzAwLjAiTiAxMDLCsDQ4JzAwLjAiRQ!5e0!3m2!1sth!2sth!4v123456789"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>

<?php include 'layouts/footer.php'; ?>