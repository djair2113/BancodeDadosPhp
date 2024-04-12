<?php

namespace App\persistence;

class ConnectionFactory{
//nome do usuario do banco de dados
static $dbuser = "root";
static $dbpass = "";
static $dbname = "etecphp";
static $dbhost = "localhost";
static $dbport = "3306";
private static $connectionInstance;

public static function getConnection(){
    $strConn = "mysql:host=".self::$dbhost.";dbname=".self::$dbname;
    try{
        self::$connectionInstance = new \PDO($strConn, self::$dbuser, self::$dbpass);
        self::$connectionInstance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }catch(\PDOException $e){
        echo print_r($e, true);
     }
     return self::$connectionInstance;
    }
}






