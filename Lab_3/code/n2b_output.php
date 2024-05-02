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

<div>
    <?php
    if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['age'])) {
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['surname'] = $_POST['surname'];
        $_SESSION['age'] = $_POST['age'];
    }
    ?>
</div>

Имя: <?= $_SESSION['name'] . " " ?><br>
Фамилия: <?= $_SESSION['surname'] . " " ?><br>
Возраст: <?= $_SESSION['age'] . " "?><br>

<p><a href="n2b_input.php">Назад</a></p>
</body>

</html>