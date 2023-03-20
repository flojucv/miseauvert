<?php
include '../manipBDD/pension.php';
var_dump($_POST);
if (isset($_POST["infoPension"])) {
    switch ($_POST["infoPension"]) {
        case 'Changer information pension':
            $PHOTO = '';
            if ($_FILES["photo"]["size"] > 0) {
                $tabExtension = explode('.', $_FILES['photo']['name']);
                $extension = strtolower(end($tabExtension));
                $uniqueName = uniqid('', true);
                $file = $uniqueName . "." . $extension;
                $PHOTO = '../image_pens/' . $file;
                move_uploaded_file($_FILES['photo']['tmp_name'], $PHOTO);
            }
            ManipulationPension::ModifPension(
                $_POST["id_pens"],
                $_POST["ville"],
                $_POST["adresse"],
                $_POST["telephone"],
                $_POST["code_postale"],
                $PHOTO,
                $_POST["description_pens"]
            );
            header("Location: ../pension.php?numero_pension=".$_POST["id_pens"]);
            break;
    }
} else if(isset($_POST["modif_tarif"])) {
    switch($_POST["modif_tarif"]){
        case "MODIFIER" :
            ManipulationPension::ModifierPrixTarification($_POST["id_pens"], $_POST["id_typegard"], $_POST["prix"]);
            header("Location: ../panelGardiennage.php");
            break;
    }
}
