<?php
session_start();
require_once '../config.php';

// ส่วนหัวเพื่อให้ใช้ SweetAlert2 ได้ในไฟล์นี้
echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
echo '<style> * { font-family: "Prompt", sans-serif !important; } </style>';

if (isset($_POST['submit'])) {
    $car_name = mysqli_real_escape_string($conn, $_POST['car_name']);
    $car_category = mysqli_real_escape_string($conn, $_POST['car_category']);
    $car_detail = mysqli_real_escape_string($conn, $_POST['car_detail']);
    $data_link = mysqli_real_escape_string($conn, $_POST['data_link']);

    $filename = $_FILES['car_image']['name'];
    $tmp_name = $_FILES['car_image']['tmp_name'];
    $new_filename = "car_" . time() . "_" . $filename;
    $upload_path = "../assets/img_cars/" . $new_filename;

    if (move_uploaded_file($tmp_name, $upload_path)) {
        $sql = "INSERT INTO cars (car_name, car_category, car_image, car_detail, data_link) 
                VALUES ('$car_name', '$car_category', '$new_filename', '$car_detail', '$data_link')";

        if (mysqli_query($conn, $sql)) {
            // ใช้ SweetAlert2 แจ้งเตือนสำเร็จ
            echo "
            <script>
                Swal.fire({
                    title: 'บันทึกสำเร็จ!',
                    text: 'ข้อมูลรถ $car_name ถูกเพิ่มเข้าสู่ระบบแล้ว',
                    icon: 'success',
                    confirmButtonText: 'ตกลง',
                    confirmButtonColor: '#ed1c24'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'dashboard.php';
                    }
                });
            </script>";
        }
    } else {
        // ใช้ SweetAlert2 แจ้งเตือนเมื่ออัปโหลดรูปพลาด
        echo "
        <script>
            Swal.fire({
                title: 'เกิดข้อผิดพลาด!',
                text: 'ไม่สามารถอัปโหลดรูปภาพได้',
                icon: 'error',
                confirmButtonText: 'ลองใหม่'
            }).then(() => {
                window.history.back();
            });
        </script>";
    }
}
?>