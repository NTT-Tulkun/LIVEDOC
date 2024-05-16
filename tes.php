<?php

$currentURL = "http://example.com/home/appointment/1234";
$url = "/home/appointment";

$position = strpos($currentURL, $url);

if ($position !== false) {
    echo "Chuỗi '$url' được tìm thấy trong '$currentURL' tại vị trí $position.";
} else {
    echo "Chuỗi '$url' không được tìm thấy trong '$currentURL'.";
}

?>
<br>
<?php


// Chuỗi chứa URL hiện tại
$currentURL = "http://example.com/home/appointment/1234";

// Chuỗi chứa đoạn URL cần kiểm tra
$url = "/home/appointment/";

// Tìm vị trí xuất hiện đầu tiên của $url trong $currentURL
$position = strpos($currentURL, $url);

// Kiểm tra nếu $url xuất hiện ở đầu $currentURL (vị trí 0)
if ($position === 0) {
    echo "Chuỗi '$url' được tìm thấy ở đầu '$currentURL'.";
} else {
    echo "Chuỗi '$url' không được tìm thấy ở đầu '$currentURL'.";
}
?>