<?php

class Database extends PDO
{

    //-- Connexion en local ----------------

    private $serveur = 'localhost';
    private $base = 'miseauvert';
    private $utilisateur = 'root';
    private $motDePasse = 'root';

    
    private $conn;

    public function __construct()
    {
        try {
            $dns = "mysql:host=$this->serveur;dbname=$this->base;charset=utf8";
            //$dns = "pgsql:host=$serveur;dbname=$base;";
            $this->conn = new PDO($dns, $this->utilisateur, $this->motDePasse, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        //return $conn;
    }

    public function execRequete($sql, $valeurs = null)
    {
        $requete = $this->conn->prepare($sql);

        $requete->execute($valeurs);

        $donnees = $requete->fetchAll();
        $requete->CloseCursor();

        return $donnees;
    }

    public function execRequeteSansRetour($sql, $valeurs = null)
    {
        $requete = $this->conn->prepare($sql);

        $requete->execute($valeurs);
    }
}
