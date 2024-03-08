<?php


class AdminModel extends Database
{

    private $connect;

    public function __construct()
    {
        $p = new Database();
        $this->connect =  $p->connect();
    }

    public function getListTable($tableName, $condition = '')
    {
        $query = "SELECT * FROM $tableName $condition";
        $result = mysqli_query($this->connect, $query);
        $data = array();
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function getListFromTowTables($tableName1, $tableName2, $columnName1, $columnName2,  $condition = '')
    {
        $query = "SELECT * FROM $tableName1 
        INNER JOIN $tableName2 ON $tableName1.$columnName1 = $tableName2.$columnName2 $condition";
        $result = mysqli_query($this->connect, $query);
        $data = array();
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function getListFromThreeTables($tableName1, $tableName2, $tableName3, $columnName1, $columnName2, $columnName3, $columnName4, $condition = '')
    {
        $query = "SELECT * FROM $tableName1 
        INNER JOIN $tableName2 ON $tableName1.$columnName1 = $tableName2.$columnName2 
        INNER JOIN $tableName3 ON $tableName2.$columnName3 = $tableName3.$columnName4 $condition";
        $result = mysqli_query($this->connect, $query);
        $data = array();
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function InsertData($tableName, $data)
    {
        $columns = implode(", ", array_keys($data));
        $values = implode("', '", array_values($data));
        $insert = "INSERT INTO `$tableName` ($columns) VALUES('$values');";
        $kq = mysqli_query($this->connect, $insert);
        return $kq;
    }


    public function DeleteData($tableName, $condition)
    {
        $delete = "DELETE FROM `$tableName` $condition;";
        $kq = mysqli_query($this->connect, $delete);
        return $kq;
    }



    public function insertposts($posts)
    {
        $insert = '';

        $title = $posts['title'];
        $created_at = date('Y-m-d');
        $id_staff =  $_SESSION['is_login']['id_account'];

        $insert  = "INSERT INTO `posts`(title, created_at, id_staff) VALUES('$title', '$created_at','$id_staff');";

        $insert .= "INSERT INTO `postcontents`(content_order, content, id_post) VALUES  ";
        foreach ($posts['con'] as $item) {
            $con = $item['content'];
            $number =  $item['number'];
            $insert .= "('$number', '$con', LAST_INSERT_ID()),";  //@@IDENTITY
        }
        $insert = rtrim($insert, ",");

        $kq = mysqli_multi_query($this->connect, $insert);
        return $kq;
    }
}
