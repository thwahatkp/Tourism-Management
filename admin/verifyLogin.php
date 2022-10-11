<?php session_start();
if(!isset($_SESSION['adm'])){
    header("location:../signup.html");
}
?>