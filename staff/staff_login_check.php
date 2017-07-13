<?php

try
{
$staff_name=$_POST['name'];
$staff_pass=$_POST['pass'];

$staff_name=htmlspecialchars($staff_name,ENT_QUOTES,'UTF-8');
$staff_pass=htmlspecialchars($staff_pass,ENT_QUOTES,'UTF-8');

$staff_pass=md5($staff_pass);

$dsn='mysql:dbname=shop;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='SELECT name FROM mst_staff WHERE name=? AND password=?';
$stmt=$dbh->prepare($sql);
$data[]=$staff_name;
$data[]=$staff_pass;
$stmt->execute($data);

$dbh=null;

$rec=$stmt->fetch(PDO::FETCH_ASSOC);

if($rec==false)
{

}
else
{
	session_start();
    $_SESSION['login']=1;
	header('Location:Main.php');
	exit();
}

}
catch(Exception$e)
{
	print'ただいま障害により大変ご迷惑をお掛けしております。';
	exit();
}

?>

<DOCTYPE html>
<html>
<head>
<meta charest="UTF-8">
<link rel="stylesheet"href="staff.css">
</head>
<body>
<div>
売買マッチングシステム<br/>
<br/>
ログイン
<table>
<tr>
<td colspan="2">
<?php
if($rec==false)
{
	print'<font color="#FF0000">IDかパスワードが間違っています。<br/>';
}
?>
</td>
</tr>
<form method="post"action="staff_login_check.php">
<tr>
 <td>ID<br/></td>
 <td><input type="text"name="name"maxlength="8"pattern="^[0-9A-Za-z]+$|[\uFF21-\uFF3A｜\uFF41-\uFF5A]*|[\uFF10-\uFF19]*"></td>
</tr>
<tr>
 <td>パスワード<br/></td>
 <td><input type="password"name="pass"maxlength="8"pattern="^[0-9A-Za-z]+$|[\uFF21-\uFF3A｜\uFF41-\uFF5A]*|[\uFF10-\uFF19]*"></td>
   <tr>
  <td>
  <br/>
  </td>
  </tr>
  <tr>
</table>
<a href="staff_add.php">新規登録</a>
<input type="submit"value="ログイン">
</div>

</body>
</html>
