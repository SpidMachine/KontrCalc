<?php

use Core\Calculator;

include "../vendor/autoload.php";
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    if (!empty($_POST)) {
        echo (new Calculator($_POST['a'], $_POST['b']))->{$_POST['op']}();
    }
    ?>

    <form action="?" method="POST">
        <input type="text" name="a">
        <select name="op">
            <option value="sum">+</option>
            <option value="mul">*</option>
            <option value="dif">-</option>
            <option value="div">/</option>
        </select>
        <input type="text" name="b">
        <input type="submit" value="OK">
    </form>
</body>

</html>