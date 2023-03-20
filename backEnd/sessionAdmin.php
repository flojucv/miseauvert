<?php
session_start();
if(!isset($_SESSION["id_admin"])) {
    var_dump($_SESSION);
    header("Location: ../index.php");
}