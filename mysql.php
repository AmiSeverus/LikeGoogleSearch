<?php

class mySql 
{
    private $connect = false;
    
    public function __construct($dbParams = []){
        
    $this->connect = new mysqli(
        $dbParams['host'], 
        $dbParams['login'],
        $dbParams['password'], 
        $dbParams['name'],
        $dbParams['port']);
    }
    
    public function query($sql){
        return mysqli_query($this->connect, $sql);
    }
    
    public function querySelect($sql){
        $res = mysqli_query($this->connect, $sql);
        //var_dump($res);
        $out = [];
        while ($row = mysqli_fetch_assoc($res)){
          $out[]= $row;  
        }
        return $out;
    }
    
    public function escape ($data = ''){
        return mysqli_escape_string($this->connect, $data);
    }
}