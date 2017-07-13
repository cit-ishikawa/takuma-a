<?php

try
{

$staff_phot=$_POST['phot'];
$staff_product=$_POST['product'];
$staff_price=$_POST['price'];
$staff_genre=$_POST['genre'];
$staff_contents=$_POST['contents'];

$staff_phot=htmlspecialchars($staff_phot,ENT_QUOTES,'UTF-8');
$staff_product=htmlspecialchars($staff_product,ENT_QUOTES,'UTF-8');
$staff_price=htmlspecialchars($staff_price,ENT_QUOTES,'UTF-8');
$staff_genre=htmlspecialchars($staff_genre,ENT_QUOTES,'UTF-8');
$staff_contents=htmlspecialchars($staff_contents,ENT_QUOTES,'UTF-8');

$dsn='mysql:dbname=shop;host=localhost;charst=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='INSERT INTO youkyu(phot,product,price,genre,contents)VALUES(?,?,?,?,?)';
$stmt=$dbh->prepare($sql);
$data[]=$staff_phot;
$data[]=$staff_product;
$data[]=$staff_price;
$data[]=$staff_genre;
$data[]=$staff_contents;
$stmt->execute($data);

$dbh=null;

header('Location:Main.php');
exit();


}
catch(Exception$e)
{
	print'ただいま障害により大変ご迷惑をお掛けしております。';
	exit();
}

?>