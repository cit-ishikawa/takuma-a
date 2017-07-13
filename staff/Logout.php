<?php
session_start();
$_SESSION=array();
if(isset($_COOKIE[session_name()])==true)
{
	setcookie(session_name(),'',time()-42000,'/');
}
session_destroy()
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
ログアウトしました
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<a href="Touroku.php">新規登録</a>
<a href="Login.php">ログイン画面へ戻る</a>
</div>

</body>
</html>