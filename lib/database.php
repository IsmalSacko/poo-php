<?php
// class database{
    // public $pdo;
    // public function __construct($pdo)
    // {
    //     $this->pdo = $pdo;
    // }
   function getPdo(){
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=blogpoo;charset=utf8', 'root', '', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
        return $pdo;
    }
// } 
    
   