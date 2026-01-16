<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "root";
$db = "isuzukkc_db";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("เชื่อมต่อฐานข้อมูลล้มเหลว: " . mysqli_connect_error());
} else {
    // เพิ่มส่วนนี้เพื่อ Alert ครับ
    echo "<script>alert('เชื่อมต่อฐานข้อมูล Isuzu KKC สำเร็จแล้ว!');</script>";
}

mysqli_set_charset($conn, "utf8");
?>