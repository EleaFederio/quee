<?php
include 'security/database.php';
if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['phonenumber'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phonenumber = $_POST['phonenumber'];

    $db = new Database();
    $query = "INSERT INTO `register`(`firstname`, `lastname`, `email`, `procced`) VALUES ('$firstname', '$lastname', '$phonenumber', 0)";
    if($db->connect()->query($query)){
        header('location:index.php');
    }

}