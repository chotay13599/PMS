<?php


require_once 'DotEnv.php';
class Database
{
    
    public static function connect(){
        
        $dotenv = new DotEnv(dirname(__DIR__) . "./env");
        $dotenv->load();

        $host = $_ENV["DB_HOST"];
        $port = $_ENV["DB_PORT"];
        $db_name = $_ENV["DB_NAME"];
        $username = $_ENV["DB_USERNAME"];
        $password = $_ENV["DB_PASSWORD"];


        $pdo = new PDO("mysql:host=".$host.";port=".$port.";dbname=".$db_name,$username,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}
