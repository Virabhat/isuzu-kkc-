<?php
require_once '../config.php';

// ล็อกสิทธิ์แอดมิน
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
    <title>Dashboard - ISUZU KKC Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        :root {
            --sidebar-width: 260px;
            --isuzu-red: #c00000;
            --bg-light: #f8f9fa;
        }

        body {
            background-color: var(--bg-light);
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar Style */
        .sidebar {
            width: var(--sidebar-width);
            background: #fff;
            padding: 20px;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.05);
            position: fixed;
            height: 100%;
        }

        .sidebar-logo {
            text-align: center;
            margin-bottom: 40px;
        }

        .nav-link {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            color: #555;
            text-decoration: none;
            border-radius: 10px;
            margin-bottom: 10px;
            transition: 0.3s;
        }

        .nav-link i {
            margin-right: 15px;
            width: 20px;
        }

        .nav-link:hover,
        .nav-link.active {
            background: var(--isuzu-red);
            color: #fff;
        }

        /* Content Area */
        .main-content {
            margin-left: var(--sidebar-width);
            width: calc(100% - var(--sidebar-width));
            padding: 40px;
        }

        .header-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        /* Dashboard Cards / Table Box */
        .content-box {
            background: #fff;
            padding: 25px;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.03);
        }

        .btn-add {
            background: #000;
            color: #fff;
            padding: 10px 20px;
            border-radius: 10px;
            text-decoration: none;
            font-size: 14px;
            transition: 0.3s;
        }

        .btn-add:hover {
            background: var(--isuzu-red);
        }

        /* Minimal Table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th {
            text-align: left;
            padding: 15px;
            border-bottom: 2px solid #f1f1f1;
            color: #888;
            font-weight: 500;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid #f1f1f1;
            vertical-align: middle;
        }

        .car-img {
            width: 80px;
            height: 50px;
            object-fit: cover;
            border-radius: 8px;
        }

        /* Action Buttons */
        .btn-edit {
            color: #f0ad4e;
            margin-right: 10px;
        }

        .btn-delete {
            color: #d9534f;
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <div class="sidebar-logo">
            <img src="../assets/img/isuzu-Logo.png" alt="Logo" width="160">
        </div>
        <a href="dashboard.php" class="nav-link active"><i class="fa-solid fa-gauge"></i> แผงควบคุม</a>
        <a href="manage-cars.php" class="nav-link"><i class="fa-solid fa-car"></i> จัดการรุ่นรถ</a>
        <a href="manage-videos.php" class="nav-link"><i class="fa-solid fa-video"></i> วิดีโอรีวิว</a>
        <hr style="border: 0.5px solid #eee; margin: 20px 0;">
        <a href="logout.php" class="nav-link" style="color: #d9534f;"><i class="fa-solid fa-right-from-bracket"></i>
            ออกจากระบบ</a>
    </div>

    <div class="main-content">
        <div class="header-section">
            <div>
                <h1 style="font-size: 24px;">จัดการข้อมูลรถยนต์</h1>
                <p style="color: #888; font-size: 14px;">ยินดีต้อนรับคุณ
                    <?php echo $_SESSION['admin_name']; ?>
                </p>
            </div>
            <a href="add-car.php" class="btn-add"><i class="fa-solid fa-plus"></i> เพิ่มรุ่นรถใหม่</a>
        </div>

        <div class="content-box">
            <table>
                <thead>
                    <tr>
                        <th>รูปภาพ</th>
                        <th>ชื่อรุ่น</th>
                        <th>ราคาเริ่มต้น</th>
                        <th>สถานะ</th>
                        <th>จัดการ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="https://isuzukkc.com/assets/img/d-max.png" class="car-img"></td>
                        <td><strong>ISUZU D-MAX V-CROSS 4x4</strong></td>
                        <td>฿917,000</td>
                        <td><span
                                style="color: #28a745; background: #e8f5e9; padding: 4px 10px; border-radius: 20px; font-size: 12px;">แสดงอยู่</span>
                        </td>
                        <td>
                            <a href="#" class="btn-edit"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="#" class="btn-delete" onclick="return confirm('ยืนยันการลบ?')"><i
                                    class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>