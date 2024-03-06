<?php

/**
 * Kế thừa từ class Model
 */

class HomeModel extends Database
{

    private $connect;

    public function __construct()
    {
        $p = new Database();
        $this->connect =  $p->connect();
    }


    public function getListFromTowTablesCondition($tableName1, $tableName2, $columnName1, $columnName2, $condition)
    {
        $query = "SELECT * FROM $tableName1 INNER JOIN $tableName2 ON
         $tableName1.$columnName1 = $tableName2.$columnName2 
         WHERE $condition";

        $result = mysqli_query($this->connect, $query);
        $data = array();
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
        }
        return $data;

       // echo $query."<br>";
    }
}
