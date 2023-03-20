<?php
require_once "../manipBDD/compte.php";

if(isset($_POST["login"])) {
    $result = ManipulationCompte::RechercheCompte($_POST["identifiant"], $_POST["password"]);
    if(count($result) === 0) {
        header("Location: ../login.php?error=1");
    }else {
        session_start();
        $_SESSION["id_compte"] = $result[0]["Id_compte"];
        header("Location: ../panelGardiennage.php");
    }
}