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

<form action="n2c_output.php" method="post">
    <label for="name">Имя:</label>
    <input type="text" id="name" name="name">
    <br>
    <label for="age">Возраст:</label>
    <input type="text" id="age" name="age">
    <br>
    <label for="salary">Зарплата: </label>
    <input type="text" id="salary" name="salary">
    <br>
    <label for="movie">Любимый фильм:</label>
    <input type="text" id="movie" name="movie">
    <br>
    <label for="book">Любимая книга:</label>
    <input type="text" id="book" name="book">
    <br>
    <input type="submit" value="Отправить">
</form>

</body>

</html>