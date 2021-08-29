<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Домашняя страница</title>
</head>
<body>

<form action="handler.php" enctype="multipart/form-data" method="POST" name="form">
	<fieldset>
		<legend><b>Ввод личных данных</b></legend>
		<p>* - поля обязательны к заполнению</p>
		<p>Ваши ФИО: * </p>
		<p><input type="text" name="fio" size="48" maxlength="96" required></p>
		<p>Ваш адрес:</p>
		<p><input type="text" name="address" size="48" maxlength="96"></p>
		<p>Ваш email: *</p>
		<p><input type="email" name="email" size="48" maxlength="96" required></p>
		<p>Ваш номер телефона: </p>
		<p><input type="tel" name="phone" size="48" maxlength="15"></p>
		<p>Ваш комментарий: </p>
		<p><textarea name="comment" cols="50" rows="5" placeholder="не более 256 симвалов"></textarea></p>
		<p><input type="file"  name="file"></p>
		<p><input type="submit" name="button" value="Отправить"></p>
	</fieldset>
</form>

</body>
</html>