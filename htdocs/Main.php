<?php
session_start();
if(isset($_SESSION['login'])==false)
{
	header('Location:Login.php');
	exit();
}
?>

<!doctype html>
<html>
<head>
<title>売買マッチングシステム</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body bgcolor="#FFFFFF">
<table width="700"align="center" height="91">

<tr align="center">
<td style="BORDER-RIGHT: #DCDCDC 1px solid" width="25%">
<font size="7">
売買マッチングシステム
</font></td>

</table>

<table width="1500" border="0" cellspacing="2" cellpadding="4" bgcolor="#3981B7" align="center">
<tr>
<td>
<table width="100%" border="0" cellspacing="0" cellpadding="2" align="center" bgcolor="#f0f8ff">
<tr align="center">

<td width="20%" style="BORDER-RIGHT: #0C4183 1px solid;BORDER-LEFT: #7BB4D8 1px solid" class="T1"><a href="Youkyu.php">要求登録</a></td>

<td width="20%" style="BORDER-RIGHT: #0C4183 1px solid;BORDER-LEFT: #7BB4D8 1px solid" class="T1">
<a href="logout.php">ログアウト</a>

</td>

</tr>
</table>
</td>
</tr>
</table>
<br>




<CENTER>
<table  border="1" bordercolor="#3981B7"  bgcolor="#f0f8ff"> 
<tr><th>要求名</th><th>価格</th><th>ジャンル</th><th>商品説明</th><th>画像</th>
<?php
$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8','root','');
foreach($pdo->query('select * from youkyu') as $row) 
{ 
  echo '<tr>';
  echo '<td>', htmlspecialchars ($row['product']),'</td>';
  echo '<td>', htmlspecialchars ($row['price']),'円','</td>';
  echo '<td>', htmlspecialchars ($row['genre']),'</td>';
  echo '<td>', htmlspecialchars ($row['contents']),'</td>';
  echo '<td>', htmlspecialchars ($row['phot']),'</td>';
  echo '</tr>';
 }
?>
</CENTER>
</table>
<br>
<table width="1500" border="0" cellspacing="2" cellpadding="2" align="center"  style="BORDER-TOP: #3981B7 4px solid;" height="40" background="image/headmenuback.gif">

</table>
<br><br><br>
<input type="button" onclick="location.href='kosho.php'"value="交渉画面へ">