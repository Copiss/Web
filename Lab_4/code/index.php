<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laba 4</title>
</head>
<body>
<form method="POST" action="SpreadsheetCreate.php">
    <label for="email">E-mail:</label>
    <input id="email" type="email" name="email" required>

    <label for="category">Category</label>
    <select name="category" id="category">
        <?php
        $categories =['Ягодки', 'Цветочки','Другое'];

        foreach ($categories as $category) {
            echo "<option value=\"$category\">$category</option>";
        }
        ?>
    </select>

    <label for="title">Title</label>
    <input id="title" type="text" name="title" required>

    <label for="description">Description</label>
    <textarea id="description" rows="3" cols="20" name="description"></textarea>

    <input type="submit" value="save">
</form>

<div class="TableOfAnnouncement">
    <table>
        <caption><span style="color: black; font-size: 20px" >Advertisement list</span></caption>
        <thead>
        <tr>
            <th>E-mail</th>
            <th>Category</th>
            <th>Title</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php
            require __DIR__.'/loadSheets.php';
            ?>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>
