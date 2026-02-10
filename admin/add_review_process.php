<?php
session_start();
require_once '../config.php';

// นำเข้า SweetAlert2
echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
echo '<style> * { font-family: "Prompt", sans-serif !important; } </style>';

if (isset($_POST['submit_review'])) {
    $review_title = mysqli_real_escape_string($conn, $_POST['review_title']);
    $review_detail = mysqli_real_escape_string($conn, $_POST['review_detail']);

    // จัดการอัปโหลดรูปภาพไปยังโฟลเดอร์ที่พี่สร้างว
    $filename = $_FILES['review_image']['name'];
    $tmp_name = $_FILES['review_image']['tmp_name'];
    $new_filename = "review_" . time() . "_" . $filename;
    $upload_path = "../assets/img_customers_review/" . $new_filename;

    if (move_uploaded_file($tmp_name, $upload_path)) {
        $sql = "INSERT INTO customer_reviews (review_title, review_image, review_detail) 
                VALUES ('$review_title', '$new_filename', '$review_detail')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>
                Swal.fire({
                    title: 'บันทึกภาพรีวิวสำเร็จ!',
                    icon: 'success',
                    confirmButtonColor: '#ed1c24'
                }).then(() => { window.location.href = 'dashboard.php'; });
            </script>";
        }
    } else {
        echo "<script>
            Swal.fire({
                title: 'อัปโหลดรูปภาพไม่สำเร็จ!',
                text: 'กรุณาตรวจสอบโฟลเดอร์ img_customers_review',
                icon: 'error'
            }).then(() => { window.history.back(); });
        </script>";
    }
}
?>