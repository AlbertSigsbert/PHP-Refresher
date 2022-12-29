<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PWD', '');
define('DB_NAME', 'php_dev');

$conn =new mysqli(DB_HOST,DB_USER,DB_PWD,DB_NAME);

if ($conn->connect_error) {
    echo "Failed to connect to db".$conn->connect_error;
}

echo "CONNECTED";