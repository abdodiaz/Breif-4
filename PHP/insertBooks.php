<?php
$user='root';
$pass='';
try {
$db =new PDO('mysql:host=localhost;dbname=livre',$user,$pass);
}
catch(PDOException $e)
{
    print "Erreur :" .$e->getMessage() . "<br>";
    die;
}
//get element
try {
$name = $_GET['name'];
$price = $_GET['prix'];
$date =$_GET['date'];
$img = $_GET['img'];

$insert ="INSERT INTO `livres`( `Name`, `prix`, `Ddate`, `Img`) VALUES ('$name',$price,'$date','$img')";
$db->query($insert);
echo "rak ghaya";
}
catch(PDOException $e)
{
    print "Erreur :" .$e->getMessage() . "<br>";
    die;
}