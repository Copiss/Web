<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма. Сесии и Куки</title>
</head>

<form  action="n2b_output.php" method="post">

    <label for="name">Имя:</label>
    <input type="text" id="name" name="name">

    <label for="surname">Фамилия:</label>
    <input type="text" id="surname" name="surname">

    <label for="age">Возраст</label>
    <input type="text" id="age" name="age">

    <input type="submit" value="Отправить">
</form>

</body>
</html>