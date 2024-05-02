<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Task 3</title>
</head>
<body>
<div id="form">
    <form action="save.php" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" required>
        <label for="category">Category</label>
        <?php
        echo '<select name="category" required>';
        $dir = opendir('categories');
        while($file = readdir($dir)) {
            if (is_dir('categories/'.$file) && $file != '.' && $file != '..') {
                echo '<option value="'.$file.'">'.$file.'</option>';
            }
        }
        echo '</select>';
        ?>
        <label for="title">Title</label>
        <input type="text" name="title" required>
        <label for="description">Description</label>
        <textarea rows="3" name="description"></textarea>
        <input type="submit" value="Save">
    </form>
</div>
<div id="table">
    <table>
        <thead>
        <th>Category</th>
        <th>Title</th>
        <th>Description</th>
        </thead>
        <tbody>
        <?php
        $dir = opendir('categories');
        while ($file = readdir($dir)) {
            if (is_dir('categories/'.$file) && $file != '.' && $file != '..') {
                $cat = opendir('categories/'.$file);
                while ($adv = readdir($cat)) {
                    if ($adv != '.' && $adv != '..') {
                        $advert = fopen('categories/'.$file.'/'.$adv, 'r');
                        $desc = "";
                        while ($str = fgets($advert)) {
                            $desc .= $str;
                        }
                        fclose($advert);
                        echo "<tr>";
                        echo "<td>$file</td>";
                        echo "<td>".basename($adv, ".txt"). "</td>";
                        echo "<td>$desc</td>";
                        echo "</tr>";
                    }
                }
            }
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>