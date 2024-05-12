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
    $_SESSION['input'] = array();
    $_SESSION['input'][] = ($_POST['name']);
    $_SESSION['input'][] = ($_POST['age']);
    $_SESSION['input'][] = ($_POST['salary']);
    $_SESSION['input'][] = ($_POST['movie']);
    $_SESSION['input'][] = ($_POST['book']);

    echo '<ul>';
    foreach ($_SESSION['input'] as $value) {
        echo '<li>'.$value.'</li>';
    }
    echo '</ul>';
    ?>
</div>

<p><a href="n2c_input.php">Назад</a></p>
</body>
</html>