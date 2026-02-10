<?php
session_start(); // บรรทัดแรกสุดเสมอ
require_once '../config.php';

// ตรวจสอบการล็อกอินเพื่อความปลอดภัย
if (!isset($_SESSION['admin_login'])) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | ISUZU KKC</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../assets/css_admin/dashboard.css">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        /* สไตล์เพิ่มเติมสำหรับ Modal Popup */
        .modal {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(8px);
        }

        .modal-content {
            background-color: var(--card-bg, #fff);
            margin: 50px auto;
            padding: 30px;
            border-radius: 24px;
            width: 90%;
            max-width: 550px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
            animation: modalFadeIn 0.3s ease-out;
        }

        @keyframes modalFadeIn {
            from {
                transform: translateY(-30px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid var(--border-color, #eee);
            padding-bottom: 15px;
        }

        .close-btn {
            font-size: 28px;
            cursor: pointer;
            color: #888;
        }

        .close-btn:hover {
            color: var(--isuzu-red, #ed1c24);
        }

        /* ปรับฟอร์มใน Modal */
        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 10px;
            font-family: 'Prompt', sans-serif;
        }

        .btn-submit {
            width: 100%;
            padding: 14px;
            background: #ed1c24;
            color: #fff;
            border: none;
            border-radius: 10px;
            font-family: 'Prompt', sans-serif;
            font-weight: 500;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <aside class="sidebar">
        <div class="sidebar-logo">
            <img src="../assets/img/isuzu-Logo.png" alt="Logo" width="160">
        </div>
        <div class="nav-links">
            <a href="dashboard.php" class="nav-link active"><i class="fa-solid fa-gauge-high"></i>
                <span>แผงควบคุม</span></a>
            <a href="manage-cars.php" class="nav-link"><i class="fa-solid fa-car-side"></i>
                <span>จัดการรุ่นรถ</span></a>
            <a href="manage-videos.php" class="nav-link"><i class="fa-solid fa-play-circle"></i>
                <span>วิดีโอรีวิว</span></a>
        </div>
        <a href="logout.php" class="nav-link" style="color: #d9534f; margin-top: auto;">
            <i class="fa-solid fa-power-off"></i> <span>ออกจากระบบ</span>
        </a>
    </aside>

    <main class="main-content">
        <div class="top-bar">
            <div>
                <h1 style="font-size: 28px;">จัดการข้อมูลรถยนต์</h1>
                <p style="color: var(--text-muted);"><strong>
                        <?php echo $_SESSION['admin_name']; ?>
                    </strong></p>
            </div>
            <div style="display: flex; gap: 15px; align-items: center;">
                <button class="btn-add"><i class="fa-solid fa-video"></i> เพิ่มวิดีโอรถ</button>
                <button class="btn-add" id="openReviewModal"><i class="fa-solid fa-camera"></i> เพิ่มภาพรีวิว</button>
                <button class="btn-add" id="openCarModal"><i class="fa-solid fa-car-side"></i> เพิ่มรุ่นรถ</button>
                <button class="theme-switch" id="theme-toggle"><i class="fa-solid fa-moon"></i></button>
            </div>
        </div>

        <div class="content-box">
            <table>
                <thead>
                    <tr>
                        <th>รูปภาพ</th>
                        <th>ชื่อรุ่น</th>
                        <th>ประเภท</th>
                        <th>จัดการ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM cars ORDER BY id DESC";
                    $query = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($query)) {
                        ?>
                        <tr>
                            <td><img src="../assets/img_cars/<?php echo $row['car_image']; ?>" width="80"
                                    style="border-radius: 8px;"></td>
                            <td><strong>
                                    <?php echo $row['car_name']; ?>
                                </strong></td>
                            <td>
                                <?php echo $row['car_category']; ?>
                            </td>
                            <td>
                                <a href="#" style="color: #f0ad4e; margin-right: 10px;"><i class="fa-solid fa-pen"></i></a>
                                <a href="javascript:void(0)" onclick="confirmDelete(<?php echo $row['id']; ?>)"
                                    style="color: #d9534f;">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </main>

    <div id="carModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 style="font-size: 20px;">เพิ่มรุ่นรถใหม่</h2>
                <span class="close-btn" id="closeCarModal">&times;</span>
            </div>
            <form action="add_car_process.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>ชื่อรุ่นรถ</label>
                    <input type="text" name="car_name" required placeholder="เช่น ISUZU D-MAX">
                </div>
                <div class="form-group">
                    <label>ประเภทรถ</label>
                    <select name="car_category">
                        <option value="pickup">รถกระบะ</option>
                        <option value="suv">รถอเนกประสงค์</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>รูปภาพ</label>
                    <input type="file" name="car_image" required accept="image/*">
                </div>
                <div class="form-group">
                    <label>รายละเอียด</label>
                    <textarea name="car_detail" rows="3"></textarea>
                </div>
                <button type="submit" name="submit" class="btn-submit">บันทึกข้อมูล</button>
            </form>
        </div>
    </div>

    <div id="reviewModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 style="font-size: 20px;">เพิ่มภาพรีวิวลูกค้า</h2>
                <span class="close-btn" id="closeReviewModal">&times;</span>
            </div>
            <form action="add_review_process.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>หัวข้อรีวิว</label>
                    <input type="text" name="review_title" required placeholder="เช่น ส่งมอบรถใหม่คุณลูกค้า">
                </div>
                <div class="form-group">
                    <label>รูปภาพรีวิว</label>
                    <input type="file" name="review_image" required accept="image/*">
                </div>
                <div class="form-group">
                    <label>รายละเอียดสั้นๆ</label>
                    <textarea name="review_detail" rows="3"></textarea>
                </div>
                <button type="submit" name="submit_review" class="btn-submit">บันทึกภาพรีวิว</button>
            </form>
        </div>
    </div>

    <script>
        // ระบบเปิด-ปิด Modal (รักษาของเดิมและเพิ่มของรีวิว)
        const modal = document.getElementById("carModal");
        const openBtn = document.getElementById("openCarModal");
        const closeBtn = document.getElementById("closeCarModal");

        const reviewModal = document.getElementById("reviewModal");
        const openReviewBtn = document.getElementById("openReviewModal");
        const closeReviewBtn = document.getElementById("closeReviewModal");

        // ควบคุม Modal รถ
        openBtn.onclick = () => modal.style.display = "block";
        closeBtn.onclick = () => modal.style.display = "none";

        // ควบคุม Modal รีวิว
        openReviewBtn.onclick = () => reviewModal.style.display = "block";
        closeReviewBtn.onclick = () => reviewModal.style.display = "none";

        // ปิดเมื่อคลิกนอกหน้าต่าง
        window.onclick = (event) => {
            if (event.target == modal) modal.style.display = "none";
            if (event.target == reviewModal) reviewModal.style.display = "none";
        }

        // ฟังก์ชันลบแบบ SweetAlert2 (เพิ่มเข้าไปเพื่อความสวยงาม)
        function confirmDelete(id) {
            Swal.fire({
                title: 'ยืนยันการลบ?',
                text: "ข้อมูลนี้จะถูกลบออกจากระบบอย่างถาวร!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ed1c24',
                cancelButtonColor: '#888',
                confirmButtonText: 'ใช่, ลบเลย!',
                cancelButtonText: 'ยกเลิก'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'delete_car.php?id=' + id;
                }
            });
        }

        // ระบบ Dark Mode เดิมของพี่
        const themeBtn = document.getElementById('theme-toggle');
        themeBtn.addEventListener('click', () => {
            let theme = document.documentElement.getAttribute('data-theme');
            if (theme === 'dark') {
                document.documentElement.removeAttribute('data-theme');
                localStorage.setItem('theme', 'light');
                themeBtn.innerHTML = '<i class="fa-solid fa-moon"></i>';
            } else {
                document.documentElement.setAttribute('data-theme', 'dark');
                localStorage.setItem('theme', 'dark');
                themeBtn.innerHTML = '<i class="fa-solid fa-sun"></i>';
            }
        });
    </script>
</body>

</html>