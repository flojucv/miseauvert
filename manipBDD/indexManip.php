<?php
require_once "bdd.php";

class ManipulationIndex
{
	public static function AffichePension() {
        $conn = new Database();
        $req= "CALL listerPension()";
        $restat = $conn->execRequete($req);
        return $restat;
    }

}
