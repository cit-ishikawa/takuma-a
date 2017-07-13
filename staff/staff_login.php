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
<form method="post"action="staff_login_check.php">
<tr>
<td>
</br>
</td>
</tr>
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