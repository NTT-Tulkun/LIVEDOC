<?php

class Database{

    function connect()
    {
        $connect =  mysqli_connect('localhost', 'root', '', 'livedoc');
        mysqli_set_charset($connect, "utf8");
        return $connect;
    }
  
}

?>