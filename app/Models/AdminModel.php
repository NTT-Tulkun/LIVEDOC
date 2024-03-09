<?php


class AdminModel extends Model
{

 //   private $connect;

    // public function __construct()
    // {
    //     $p = new Database();
    //     $this->connect =  $p->connect();
    // }

    


    // public function insertposts($posts)
    // {
    //     $insert = '';

    //     $title = $posts['title'];
    //     $created_at = date('Y-m-d');
    //     $id_staff =  $_SESSION['is_login']['id_account'];

    //     $insert  = "INSERT INTO `posts`(title, created_at, id_staff) VALUES('$title', '$created_at','$id_staff');";

    //     $insert .= "INSERT INTO `postcontents`(content_order, content, id_post) VALUES  ";
    //     foreach ($posts['con'] as $item) {
    //         $con = $item['content'];
    //         $number =  $item['number'];
    //         $insert .= "('$number', '$con', LAST_INSERT_ID()),";  //@@IDENTITY
    //     }
    //     $insert = rtrim($insert, ",");

    //     $kq = mysqli_multi_query($this->connect, $insert);
    //     return $kq;
    // }
}
