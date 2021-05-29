<?php
session_start();

if($_SESSION['USER_ID']=="")
{
    header('location:index.php');
}
?>