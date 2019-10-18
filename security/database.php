<?php
class Database{
    function connect(){
        return new mysqli("127.0.0.1", "root", "", "que");
    }
}