<?php 
include "./backEnd/sessionAdmin.php";
session_destroy();
header("Location: ../index.php");