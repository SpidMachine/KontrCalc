<?php
if (isset($_POST['opinion'])){
$arr = explode(":", file_get_contents('voting.txt'));
    if ($_POST['opinion']=="1") $arr[0]++ & print_r('Thanks for your vote! You have voted for the first variant! Common points: '.$arr[0]);
    if ($_POST['opinion']=="2") $arr[1]++ & print_r('Thanks for your vote! You have voted for the second variant! Common points: '.$arr[1]);
    if ($_POST['opinion']=="3") $arr[2]++ & print_r('Thanks for your vote! You have voted for the third variant! Common points: '.$arr[2]);
    if ($_POST['opinion']=="4") $arr[3]++ & print_r('Thanks for your vote! You have voted for the forth variant! Common points: '.$arr[3]);
    file_put_contents('voting.txt', implode(':', $arr));
}else{
    echo "Please, give your vote!";
}
?>