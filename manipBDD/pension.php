<?php
require_once "bdd.php";

class ManipulationPension
{
	public static function AffichePension() {
        $conn = new Database();
        $req= "CALL listerPension()";
        $restat = $conn->execRequete($req);
        return $restat;
    }

    public static function supprimerPension($ID_PENSION) {
        $conn = new Database();
        $req= "CALL supprimerPension(?)";
        $restat = $conn->execRequete($req, array($ID_PENSION));
        return $restat;
    }

    public static function AjouterPension($VILLE, $ADRESSE, $TELEPHONE, $CODEPOSTALE) {
        $conn = new Database();
        $req= "CALL ajouterPension(?, ?, ?, ?)";
        $restat = $conn->execRequete($req, array($VILLE, $ADRESSE, $TELEPHONE, $CODEPOSTALE));
        return $restat;
    }

    public static function recherchePension($ID_PENSION) {
        $conn = new Database();
        $req = "CALL recherchePension(?)";
        $restat = $conn->execRequete($req, array($ID_PENSION));
        return $restat;
    }

    public static function rechercheTarif($ID_PENSION) {
        $conn = new Database();
        $req = "CALL rechercheTarif(?)";
        $restat = $conn->execRequete($req, array($ID_PENSION));
        return $restat;
    }

    public static function ModifPension($ID_PENSION, $VILLE, $ADRESSE, $TELEPHONE, $CODEPOSTALE, $IMAGE, $DESCRIPTION) {
        $conn = new Database();
        $req = "CALL modifPension(?,?,?,?,?,?,?)";
        $restat = $conn->execRequete($req, array($ID_PENSION, $VILLE, $ADRESSE, $TELEPHONE, $CODEPOSTALE, $IMAGE, $DESCRIPTION));
        return $restat;
    }

    public static function ModifierPrixTarification($ID_PENSION, $ID_TYPEGARD, $PRIX) {
        $conn = new Database();
        $req = "CALL modifierPrixTarification(?,?,?)";
        $restat = $conn->execRequete($req, array($PRIX, $ID_PENSION, $ID_TYPEGARD));
        return $restat;
    }

}
