<?php
    session_start();

    class Database{
        function connect(){
            return new mysqli("127.0.0.1", "root", "", "que");
        }
    }

    $db = new Database();

    // if(!isset($_GET['next']) != 1){
     
    // }

    $query = "SELECT * FROM `register` WHERE `procced` = 0";
    $result = $db->connect()->query($query);
    $asaas = $result->fetch_object();
    $_SESSION['quee'] = $asaas->id;
    if($asaas == ''){
        echo 'No more Quee';
    }
    echo '#'.$asaas->id; 

    

    // while($asaas = $result->fetch_object()){
    //     echo $asaas->firstname;
    // }

    // var_dump($asaas);
?>