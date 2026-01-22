<?php
// 1. เชื่อมต่อฐานข้อมูล
require_once '../config.php';


if (isset($_POST['submit'])) {
    // 2. รับค่าจากฟอร์มและป้องกัน SQL Injection
    $car_name = mysqli_real_escape_string($conn, $_POST['car_name']);
    $car_category = mysqli_real_escape_string($conn, $_POST['car_category']);
    $car_detail = mysqli_real_escape_string($conn, $_POST['car_detail']);
    $data_link = mysqli_real_escape_string($conn, $_POST['data_link']);

    // 3. จัดการเรื่องรูปภาพ
    $image_file = $_FILES['car_image'];
    $image_name = $image_file['name'];
    $image_tmp = $image_file['tmp_name'];
    $image_error = $image_file['error'];

    // ตั้งชื่อไฟล์ใหม่เพื่อป้องกันชื่อซ้ำ (เช่น 20240122_dmax.png)
    $file_ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
    $new_file_name = time() . "_" . str_replace(' ', '_', $image_name);
    $upload_path = '../assets/img_cars/' . $new_file_name;

    // ตรวจสอบว่ามีการเลือกไฟล์และไม่มีข้อผิดพลาด
    if ($image_error === 0) {
        // ย้ายไฟล์จากโฟลเดอร์ชั่วคราวไปยังโฟลเดอร์ที่ต้องการ
        if (move_uploaded_file($image_tmp, $upload_path)) {

            // 4. บันทึกข้อมูลลงฐานข้อมูล
            $sql = "INSERT INTO cars (car_name, car_category, car_image, car_detail, data_link) 
                    VALUES ('$car_name', '$car_category', '$new_file_name', '$car_detail', '$data_link')";

            if (mysqli_query($conn, $sql)) {
                echo "<script>
                        alert('เพิ่มข้อมูลรถยนต์เรียบร้อยแล้ว!');
                        window.location.href = 'admin_dashboard.php'; // หรือหน้าจัดการรถของพี่
                      </script>";
            } else {
                echo "เกิดข้อผิดพลาดในการบันทึกข้อมูล: " . mysqli_error($conn);
            }
        } else {
            echo "เกิดข้อผิดพลาดในการอัปโหลดไฟล์รูปภาพ";
        }
    } else {
        echo "กรุณาเลือกไฟล์รูปภาพที่ถูกต้อง";
    }
} else {
    // ถ้าไม่ได้มาจากการกดปุ่ม submit ให้เด้งกลับ
    header("Location: add_car_form.php");
    exit();
}
?>