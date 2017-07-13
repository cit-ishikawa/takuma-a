<?php
$staff_name=$_POST['name'];
$staff_pass=$_POST['pass'];
$staff_pass2=$_POST['pass2'];

$staff_name=htmlspecialchars($staff_name,ENT_QUOTES,'UTF-8');
$staff_pass=htmlspecialchars($staff_pass,ENT_QUOTES,'UTF-8');
$staff_pass2=htmlspecialchars($staff_pass2,ENT_QUOTES,'UTF-8');

if($staff_name==''|$staff_pass==''||$staff_pass!=$staff_pass2)
{

}
else
{
 
try
{
$staff_pass=md5($staff_pass);
$staff_pass2=md5($staff_pass2);

$dsn='mysql:dbname=shop;host=localhost;charst=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='INSERT INTO mst_staff(name,password)VALUES(?,?)';
$stmt=$dbh->prepare($sql);
$data[]=$staff_name;
$data[]=$staff_pass;
$stmt->execute($data);

$dbh=null;

 session_start();
 $_SESSION['login']=1;
 header("Location: Main.php"); 
                    }

catch(Exception$e)
{
	print'ただいま障害により大変ご迷惑をお掛けしております。';
	exit();
}


}

?>

<DOCTYPE html>
<html>
<head>
<meta charest="UTF-8">
<link rel="stylesheet"href="staff.css">
<body>

<div>
売買マッチングシステム
<br/>
<br/>
IDとパスワードを入力して下さい。<br/>
<br/>

<table>
    <form method="post"action="staff_add_check.php">
  <tr>
   <td>ID</td>
   <td><input type="text"name="name"maxlength="8"pattern="^[0-9A-Za-z]+$|[\uFF21-\uFF3A｜\uFF41-\uFF5A]*|[\uFF10-\uFF19]*"></td>
  </tr>
  <tr>
  <td>
<?php
if($staff_name=='')
{
	print'<font color="#FF0000">IDが入力されていません。<br/>';
}
?>
  </td>
  </tr>
  <tr>
   <td>パスワード</td>
   <td><input type="password"name="pass"maxlength="8"pattern="^[0-9A-Za-z]+$|[\uFF21-\uFF3A｜\uFF41-\uFF5A]*|[\uFF10-\uFF19]*"></td>
  </tr>
    <tr>
  <td>
<?php
if($staff_pass=='')
{
	print'<font color="#FF0000">パスワードが入力されていません。<br/>';
}
?>
  </td>
  </tr>
   <tr>
   <td>パスワード再入力</td>
   <td><input type="password"name="pass2"maxlength="8"pattern="^[0-9A-Za-z]+$|[\uFF21-\uFF3A｜\uFF41-\uFF5A]*|[\uFF10-\uFF19]*"></td>
  </tr>
    <tr>
  <td>
<?php
if($staff_pass!=$staff_pass2)
{
	print'<font color="#FF0000">パスワードが一致しません。<br/>';
}
?>
  </td>
  </tr>
</table>
    <input type="submit"value="登録">
</div>

</body>
</html>