<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">

    </head>
    <body>
        <form action="file_practice.php" method="post">
            <p>Как вам погода в Витебске?</p>
            <input type="radio" name="opinion" id="1" value="1">
            <label for="1">Отлично</label><br>
            <input type="radio" name="opinion" id="2" value="2">
            <label for="2">Нормально</label><br>
            <input type="radio" name="opinion" id="3" value="3">
            <label for="3">Плохо</label><br>
            <input type="radio" name="opinion" id="4" value="4">
            <label for="4">Ужасно</label><br><br>
            <input type="submit" value="Проголосовать" style="height: 30px; width: 150px; border-radius: 4px;">
</form>
<style>
    body{
        text-align: center;
    }
    form p{
        color: black;
    }
</style>
<?php
if (isset($_POST['opinion'])){
$arr = explode(":", file_get_contents('voting.txt'));
    if ($_POST['opinion']=="1") $arr[0]++ & print_r('Thanks for your vote! You have voted for the first variant! Common points: '.$arr[0]);
    if ($_POST['opinion']=="2") $arr[1]++ & print_r('Thanks for your vote! You have voted for the second variant! Common points: '.$arr[1]);
    if ($_POST['opinion']=="3") $arr[2]++ & print_r('Thanks for your vote! You have voted for the third variant! Common points: '.$arr[2]);
    if ($_POST['opinion']=="4") $arr[3]++ & print_r('Thanks for your vote! You have voted for the forth variant! Common points: '.$arr[3]);
    echo "<br>";
    echo "Common number of votes for now: " . array_sum($arr);
    file_put_contents('voting.txt', implode(':', $arr));
}else{
    echo "Please, give your vote!";
}
?>
    </body>
</html>

