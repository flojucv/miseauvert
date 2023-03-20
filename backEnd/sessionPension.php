<?php
include "./backEnd/header.php";
if(!isset($_SESSION["id_compte"])) {
    header("Location: ../index.php");
}