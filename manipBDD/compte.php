<?php
require_once "bdd.php";

class ManipulationCompte
{
	public static function RechercheCompte($login, $mdp) {
        $conn = new Database();
        $req= "CALL rechercheCompte(?,?)";
        $restat = $conn->execRequete($req, array($login, $mdp));
        return $restat;
    }

    public static function RechercheCompteAdmin($login, $mdp) {
        $conn = new Database();
        $req= "CALL rechercheCompteAdmin(?,?)";
        $restat = $conn->execRequete($req, array($login, $mdp));
        return $restat;
    }

    public static function listerCompte() {
        $conn = new Database();
        $req = "CALL listerCompte";
        $restat = $conn->execRequete($req);
        return $restat;
    }

    public static function AjouterCompte($login, $mdp, $IDPENSION) {
        $conn = new Database();
        $req = "CALL ajouterCompte(?,?, ?)";
        $restat = $conn->execRequete($req, array($login, $mdp, $IDPENSION));
        return $restat;
    }

    public static function SupprimerCompte($Id_compte) {
        $conn = new Database();
        $req = "CALL supprimerCompte(?)";
        $restat = $conn->execRequete($req, array($Id_compte));
        return $restat;
    }

    public static function SelectionnerCompte($Id_compte) {
        $conn = new Database();
        $req = "CALL selectionnerCompte(?)";
        $restat = $conn->execRequete($req, array($Id_compte));
        return $restat;
    }
}
