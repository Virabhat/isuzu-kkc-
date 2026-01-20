<?php
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <style>
        .login-page {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            /* ใส่รูป Background ที่พี่ต้องการ */
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                url('https://isuzukkc.com/assets/img/bg_isuzukcc.webp');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .login-box {
            background: rgba(255, 255, 255, 0.95);
            /* ขาวแบบโปร่งแสงนิดๆ ให้ดูหรู */
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            width: 90%;
            max-width: 400px;
            backdrop-filter: blur(5px);
            /* เพิ่มเอฟเฟกต์กระจกฝ้า */
        }

        .login-center {
            display: block;
            margin: 0 auto 30px;
            max-width: 100%;
            height: auto;
        }

        .error-msg {
            color: #fff;
            background: #d9534f;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
            font-size: 14px;
            animation: shake 0.5s;
            /* เพิ่มลูกเล่นสั่นเวลาใส่ผิด */
        }

        @keyframes shake {

            0%,
            100% {
                transform: translateX(0);
            }

            25% {
                transform: translateX(-5px);
            }

            75% {
                transform: translateX(5px);
            }
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-sizing: border-box;
        }

        .btn-login {
            font-family: "Prompt", sans-serif;
            width: 100%;
            padding: 14px;
            background: #c00000;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-login:hover {
            background: #a00000;
            transform: translateY(-2px);
        }
    </style>
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
                <a href="../index.php" style="color: #666; text-decoration: none;">← กลับสู่หน้าหลัก</a>
            </p>
        </div>
    </div>

</body>

</html>