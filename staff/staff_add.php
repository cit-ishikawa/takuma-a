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
  <br/>
  </td>
  </tr>
  <tr>
   <td>パスワード</td>
   <td><input type="password"name="pass"maxlength="8"pattern="^[0-9A-Za-z]+$|[\uFF21-\uFF3A｜\uFF41-\uFF5A]*|[\uFF10-\uFF19]*"></td>
  </tr>
    <tr>
  <td>
  <br/>
  </td>
  </tr>
   <tr>
   <td>パスワード再入力</td>
   <td><input type="password"name="pass2"maxlength="8"pattern="^[0-9A-Za-z]+$|[\uFF21-\uFF3A｜\uFF41-\uFF5A]*|[\uFF10-\uFF19]*"></td>
  </tr>
    <tr>
  <td>
  <br/>
  </td>
  </tr>
</table>
    <input type="submit"value="登録">
</div>

</body>
</html>