<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регулярные выражения</title>
</head>

<body>
<?php
echo "Task 1.a <br>";
$str = 'ahb acb aeb aeeb adcb axeb';

$pattern = '/a..b/';

preg_match_all($pattern, $str, $matches);

print_r($matches[0]);

echo "<br>";

echo "<br>Task 1.b<br>";
$str = 'a1b2c3';

$pattern = '/(\d+)/';

function replaceCallback($matches) {
    return $matches[1] * $matches[1] * $matches[1];
}

$newStr = preg_replace_callback($pattern, 'replaceCallback', $str);

echo $newStr;
?>
</body>

</html>