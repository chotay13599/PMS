<?php

require_once 'core/DotEnv.php';

(new DotEnv(__DIR__ . "/.env"))->load();

$host = $_ENV["DB_HOST"];
$port = $_ENV["DB_PORT"];
$db_name = $_ENV["DB_NAME"];
$username = $_ENV["DB_USERNAME"];
$password = $_ENV["DB_PASSWORD"];


echo $host."</br>";
echo $port."</br>";
echo $db_name."</br>";