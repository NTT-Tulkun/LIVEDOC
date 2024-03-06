<?php

class PersonalModel extends Database
{
    private $connect;

    public function __construct()
    {
        $p = new Database();
        $this->connect =  $p->connect();
    }

    public function getTable($tableName)
    {
        $query = "SELECT * FROM $tableName";
        $result = mysqli_query($this->connect, $query);
        $data = array();
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
        }
        return $data;
    }
    
}
