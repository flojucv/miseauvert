<?php
require_once "../manipBDD/compte.php";

if(isset($_POST["login"])) {
    $result = ManipulationCompte::RechercheCompteAdmin($_POST["identifiant"], $_POST["password"]);
    if(count($result) === 0) {
        header("Location: ../loginAdmin.php?error=1");
    }else {
        session_start();
        $_SESSION["id_admin"] = $result[0]["id_admin"];
        header("Location: ../panelAdmin.php");
    }
}