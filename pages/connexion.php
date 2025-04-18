<?php 

define('SERVER', 'mysql:server=localhost;dbname=puffstime');
define('USER', 'root');
define('PASS', '');

try {
    $auth = new PDO(SERVER,USER,PASS);
} catch (Exception $e){
    echo $e->getMessage();
}