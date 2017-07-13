<!DOCTYPE html>
<html>
<head>
<meta charest="UTF-8">
<link rel="stylesheet"href="Touroku.css">
</head>
<body>

<div class="footer">
<input type="button" onclick="location.href='Logout.php'"value="ログアウト">
</div>

<div class="center">
売買マッチングシステム(要求登録)
</div>

<form method="post"action="Youkyu_check.php">

<div class="outside">
<input type="submit"onClick="location.href='Youkyu_check.php"value="登録">
</div>

<table class="inside">
<tr>
<td rowspan="4"><input type="file"name="phot"class="phot"placeholder="画像"></td>

<td colspan="2"><input type="text"name="product"class="product"placeholder="商品名"required>
</tr>

<tr>
<td><input type="text"name="price"class="price"placeholder="希望価格"required></td>
<td>
<select name="genre"class="price"required>
<option value="">ジャンル</option>
<option value="本">本</option>
<option value="ホビー">ホビー</option>
<option value="家電">家電</option>
<option value="電子機器">電子機器</option>
<option value="ゲーム">ゲーム</option>
<option value="衣類">衣類</option>
<option value="雑貨">雑貨</option>
<option value="その他">その他</option>
</optgroup>
</select>
</td>
</tr>

<td colspan="2"><textarea name="contents"class="contents"wrap="hard"required>要求内容
</textarea>

</tr>
</table>

</form>



</body>
</html>