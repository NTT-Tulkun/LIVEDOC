<?php

$currentURL = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$web_root = _WEB_ROOT;



if($currentURL ==  $web_root.'/'){
    $check = true;
}else if(rtrim(dirname($currentURL), "/") == $web_root.'/account'){
    $check = true;
}else {
    
    if(!isset($_SESSION['is_login'])){
       header("Location: $web_root");  
  }

}




$access_rights = [
    "$web_root/Personal/listAppointment" => 5,
    "$web_root/home/appointment" => 5,
    "$web_root/Home/appointmentDetail" => 5,
    "$web_root/Personal/workCalendar" => 4,
    "$web_root/Personal/medicalHistoryPatient"=> 4,
    "$web_root/Personal/medicalBill" => 4,
    "$web_root/Personal/prescription"=>4,
    "$web_root/Personal/medicalBillPDF"=>4,
    "$web_root/Personal/prescriptionPDF"=>4,
    "$web_root/Personal/workCalendarsss" => [2, 3], 
    "$web_root/admin" => [1, 2, 3]
];


// Kiểm tra xem URL hiện tại có trong mảng quyền truy cập hay không
if(isset($access_rights[$currentURL])){
    $required_roles = $access_rights[$currentURL];
  

    $user_role = $_SESSION['is_login']['id_role'];

    // Nếu quyền của người dùng khớp với quyền yêu cầu
    if(in_array($user_role, (array)$required_roles)){
        return true;
    } else {
       header("Location: $web_root/home/error");
       exit;
    }
}