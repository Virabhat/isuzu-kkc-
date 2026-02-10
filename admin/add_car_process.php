<?php
session_start();
require_once '../config.php'; // เชื่อมต่อฐานข้อมูล

if (isset($_POST['submit'])) {
    // 1. รับค่าจากฟอร์มและป้องกันการ SQL Injection
    $car_name = mysqli_real_escape_string($conn, $_POST['car_name']);
    $car_category = mysqli_real_escape_string($conn, $_POST['car_category']);
    $car_detail = mysqli_real_escape_string($conn, $_POST['car_detail']);
    $data_link = mysqli_real_escape_string($conn, $_POST['data_link']);

    // 2. จัดการเรื่องรูปภาพ
    $filename = $_FILES['car_image']['name'];
    $tmp_name = $_FILES['car_image']['tmp_name'];

    // ตั้งชื่อไฟล์ใหม่เพื่อไม่ให้ซ้ำกัน (ใช้ car_ตามด้วยเวลาปัจจุบัน)
    $file_extension = pathinfo($filename, PATHINFO_EXTENSION);
    $new_filename = "car_" . time() . "." . $file_extension;
    $upload_path = "../assets/img_cars/" . $new_filename;

    // 3. ตรวจสอบและอัปโหลดไฟล์
    if (move_uploaded_file($tmp_name, $upload_path)) {
        // บันทึกลง Database
        $sql = "INSERT INTO cars (car_name, car_category, car_image, car_detail, data_link) 
                VALUES ('$car_name', '$car_category', '$new_filename', '$car_detail', '$data_link')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>
                    alert('บันทึกข้อมูลรถใหม่เรียบร้อยแล้วครับพี่!');
                    window.location='dashboard.php';
                  </script>";
        } else {
            echo "เกิดข้อผิดพลาดในการบันทึกข้อมูล: " . mysqli_error($conn);
        }
    } else {
        echo "<script>alert('อัปโหลดรูปภาพไม่สำเร็จ กรุณาเช็คโฟลเดอร์ assets/img_cars/ ครับ'); window.history.back();</script>";
    }
}
?>