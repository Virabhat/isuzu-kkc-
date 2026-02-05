<?php
session_start();
require_once '../config.php';

$error = "";

if (isset($_POST['login_btn'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($query);

    if ($result) {
        if ($password == $result['password']) {
            $_SESSION['admin_login'] = $result['id'];
            $_SESSION['admin_name'] = $result['fullname'];

            // ลบ alert ออกแล้วใช้ header ย้ายหน้าทันที
            header("location: dashboard.php");
            exit;
        } else {
            $error = "รหัสผ่านไม่ถูกต้อง!";
        }
    } else {
        $error = "ไม่พบชื่อผู้ใช้งานนี้ในระบบ!";
    }
}
?>

<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบแอดมิน - ISUZU KKC</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css_admin/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
    <div class="login-page">
        <div class="login-box">
            <img class="login-center" src="../assets/img/isuzu-Logo.png" alt="ISUZU KKC Logo" width="300" height="80" />

            <?php if ($error != ""): ?>
                <div class="error-msg">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>

            <form action="login.php" method="POST">
                <div class="form-group">
                    <label>ชื่อผู้ใช้งาน</label>
                    <input type="text" name="username" placeholder="Username" required>
                </div>

                <div class="form-group">
                    <label>รหัสผ่าน</label>
                    <input type="password" name="password" placeholder="Password" required>
                </div>

                <button type="submit" name="login_btn" class="btn-login">
                    <i class="fa-solid fa-user"></i>
                    เข้าสู่ระบบ</button>
            </form>

            <p style="text-align: center; margin-top: 25px; font-size: 14px;">
                <a href="../index.php" style="color: #666; text-decoration: none;">← กลับสู่เว็บหลัก</a>
            </p>
        </div>
    </div>
</body>

</html>