<?php
// Kết nối đến cơ sở dữ liệu MySQL
$servername = "localhost";
$username = "username"; // Thay username bằng username của bạn
$password = "password"; // Thay password bằng password của bạn
$dbname = "tech_info";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
  die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ form
$name = $_POST['name'];
$email = $_POST['email'];
$product = $_POST['product'];
$description = $_POST['description'];

// Chèn dữ liệu vào cơ sở dữ liệu
$sql = "INSERT INTO tech_information (name, email, product, description) VALUES ('$name', '$email', '$product', '$description')";

if ($conn->query($sql) === TRUE) {
  echo "Dữ liệu đã được gửi thành công!";
} else {
  echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
