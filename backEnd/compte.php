<?php
include "./sessionAdmin.php";
include '../manipBDD/compte.php';
include '../manipBDD/pension.php';
if(isset($_POST['compte'])) {
    switch($_POST["compte"]) {
        case 'Ajouter' :
            ManipulationCompte::AjouterCompte($_POST["login"], $_POST["password"], intval($_POST["id_pension"]));
            header("Location: ../panelAdmin.php");
            break;
        case "Supprimer" :
            ManipulationCompte::SupprimerCompte($_POST["id_compte"]);
            header("Location: ../panelAdmin.php");
            break;
    }
} else if(isset($_POST['pension'])) {
    switch($_POST["pension"]) {
        case 'Supprimer' :
            ManipulationPension::supprimerPension($_POST["Id_pens"]);
            header("Location: ../pannelAdminPension.php");
            break;
        case "Ajouter" :
            ManipulationPension::AjouterPension($_POST["ville"], $_POST["adresse"], $_POST["telephone"], $_POST["code_postal"]);
            header("Location: ../pannelAdminPension.php");
            break;
    }
}