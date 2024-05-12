<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма. Сессии и Куки</title>
</head>

<body>
<form method="post">
    <textarea name="text" rows="5" cols="40"></textarea><br>
    <input type="submit" value="Count">
</form>
<?php

if(isset($_POST['text'])) {
    $text = $_POST['text'];
    $wordCount = str_word_count($text);
    $charCount = strlen($text);
    echo "<br>Количество слов: $wordCount<br>";
    echo "<br>Количество символов: $charCount";
}

?>
</body>

</html>