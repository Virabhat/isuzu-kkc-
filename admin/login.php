<?php
require_once '../config.php'; // เรียกไฟล์เชื่อมต่อฐานข้อมูล

$error = ""; // ตัวแปรสำหรับเก็บข้อความแจ้งเตือนความผิดพลาด

// 1. ตรวจสอบเมื่อมีการกดปุ่ม Login
if (isset($_POST['login_btn'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // 2. ค้นหาผู้ใช้งานในฐานข้อมูล
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($query);

    if ($result) {
        // 3. เช็ครหัสผ่านแบบ Plain Text (เปรียบเทียบตรงๆ ตามที่พี่ต้องการ)
        if ($password == $result['password']) {
            // Login สำเร็จ: เก็บค่าไว้ใน Session
            $_SESSION['admin_login'] = $result['id'];
            $_SESSION['admin_name'] = $result['fullname'];

            // ไปยังหน้า Dashboard ของแอดมิน
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
    <style>
        /* CSS เพิ่มเติมเพื่อให้ฟอร์มอยู่กึ่งกลางหน้าจอ */
        .login-page {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f4f4f4;
        }

        .login-box {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .error-msg {
            color: #d9534f;
            background: #f2dede;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group input {
            width: 100%;
        }

        .btn-login {
            width: 100%;
            padding: 12px;
            background: var(--brand, #c00000);
            /* ใช้สีแดง Isuzu */
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <div class="login-page">
        <div class="login-box">
            <h2 style="text-align: center; margin-bottom: 30px;">Admin Login</h2>

            <?php if ($error != ""): ?>
                <div class="error-msg">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>

            <form action="login.php" method="POST">
                <div class="form-group">
                    <label for="username">ชื่อผู้ใช้งาน</label>
                    <input type="text" name="username" placeholder="Username" required class="minimal-select">
                </div>

                <div class="form-group">
                    <label for="password">รหัสผ่าน</label>
                    <input type="password" name="password" placeholder="Password" required class="minimal-select">
                </div>

                <button type="submit" name="login_btn" class="btn-login">เข้าสู่ระบบ</button>
            </form>

            <p style="text-align: center; margin-top: 20px; font-size: 14px;">
                <a href="../index.php" style="color: #666;">← กลับสู่หน้าหลัก</a>
            </p>
        </div>
    </div>

</body>

</html>