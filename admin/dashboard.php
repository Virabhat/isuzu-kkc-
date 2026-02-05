<?php
session_start(); // บรรทัดแรกสุดเสมอ

require_once '../config.php';
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
                <p style="color: var(--text-muted);">ยินดีต้อนรับกลับมา, <strong>
                        <?php echo $_SESSION['admin_name']; ?>
                    </strong></p>
            </div>
            <div style="display: flex; gap: 15px; align-items: center;">
                <a href="add-car.php" class="btn-add">
                    <i class="fa-solid fa-video"></i> เพิ่มวิดีโอรถ
                </a>
                <a href="add-car.php" class="btn-add">
                    <i class="fa-solid fa-camera"></i> เพิ่มภาพรีวิว
                </a>
                <a href="add-car.php" class="btn-add">
                    <i class="fa-solid fa-car-side"></i> เพิ่มรุ่นรถ
                </a>
                <button class="theme-switch" id="theme-toggle"><i class="fa-solid fa-moon"></i></button>

            </div>
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
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <script>
        // ระบบสลับโหมดมืด
        const themeBtn = document.getElementById('theme-toggle');
        const currentTheme = localStorage.getItem('theme');

        if (currentTheme === 'dark') {
            document.documentElement.setAttribute('data-theme', 'dark');
            themeBtn.innerHTML = '<i class="fa-solid fa-sun"></i>';
        }

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