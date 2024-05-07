<?php


class AdminModel extends Model
{

    public function getListUserMessage($condition = '')
    {
        $query = "SELECT patient.*, message.id_patient, COUNT(message.id_patient) AS message_count, message.send_date FROM patient 
        INNER JOIN message ON patient.id_patient = message.id_patient WHERE message.status=0 AND message.id_sender % 2 = 1 GROUP BY patient.id_patient 
        ORDER BY message.send_date DESC;";
        $result = mysqli_query($this->connect, $query);
        $data = array();
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
        }
        return $data;
    }


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
