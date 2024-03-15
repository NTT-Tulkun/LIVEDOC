<?php


// Sử dụng hàm mã hóa
$email = 'example@example.com';
$encoded_email = base64_encode($email);
echo "Mã hóa email: $encoded_email <br>";

// Sử dụng hàm giải mã
$decoded_email = base64_decode($encoded_email);
echo "Giải mã email: $decoded_email";
?>
