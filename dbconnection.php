<?php

$servername="localhost";
$username="root";
$password="";
$db="test1";

try{
    $db1=new PDO("mysql:host=$servername;dbname=$db",$username,$password);
    
}catch(PDOException $e)
{
}





?>