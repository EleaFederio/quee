<?php

    class Database{
        function connect(){
            return new mysqli("127.0.0.1", "root", "", "que");
        }
    }

    $db = new Database();
    $query = "SELECT * FROM `register`";
    $result = $db->connect()->query($query);

    var_dump($result);
?>