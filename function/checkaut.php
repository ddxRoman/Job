<?php
session_start();

if($_SESSION['user']){


}
else {
    echo "Chekout";
    header ('Location: action/autorization.php');
}
?>