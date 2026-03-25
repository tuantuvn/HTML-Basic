<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Phản Hồi</title>
</head>
<body>
    <h2>Thông Tin Đã Gửi</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        echo "<p>Tên của bạn là: $name</p>";
    } else {
        echo "<p>Không có thông tin nào được gửi.</p>";
    }
    ?>
    <a href="index.html">Quay lại biểu mẫu</a>
</body>
</html>