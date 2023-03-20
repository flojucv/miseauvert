# Manip BDD

## Fichier bdd.php
Le fichier [bdd.php](https://github.com/flojucv/miseauvert/blob/master/manipBDD/bdd.php) contient la connexion a la base de donnée et les functions pour executer des requête.

## Créer une fonction de requête
Les requêtes sont diviser dans plusieurs fichiers :
- [compte.php](https://github.com/flojucv/miseauvert/blob/master/manipBDD/compte.php)
- [indexManip.php](https://github.com/flojucv/miseauvert/blob/master/manipBDD/indexManip.php)
- [pension.php](https://github.com/flojucv/miseauvert/blob/master/manipBDD/pension.php)

La gestion de la base de donnée est fait via des classes, pour l'utiliser vous devez créer une classe, pour cela créer un fichier avec le nom de votre choix, puis créer la classe comme suivant :
```php
<?php
require_once "bdd.php";

class ManipulationCompte
{

}
?>
```

pour ensuite créer une requête vous devez créer une fonction dans la classe comme suivant :

*Exemple de requête sans parametre :*
```php
    public static function listerCompte() {
        $conn = new Database();
        $req = "CALL listerCompte";
        $restat = $conn->execRequete($req);
        return $restat;
    }
```
*Exemple de requête avec parametre :*
```php
    public static function AjouterCompte($login, $mdp, $IDPENSION) {
        $conn = new Database();
        $req = "CALL ajouterCompte(?,?, ?)";
        $restat = $conn->execRequete($req, array($login, $mdp, $IDPENSION));
        return $restat;
    }
```

*Les exemples sont tiré du fichier [compte.php](https://github.com/flojucv/miseauvert/blob/master/manipBDD/compte.php)*

Ensuite dans vos fichier de back End ou de front End vous n'avez qu'a include votre fichier de base de donnée et appeler votre fonction<br>
*Exemple d'initialisation et d'appel de fonction*
```php
include '../manipBDD/compte.php';
ManipulationCompte::AjouterCompte($_POST["login"], $_POST["password"], intval($_POST["id_pension"]));
```
*Exemple pris du fichier [compte.php](https://github.com/flojucv/miseauvert/blob/master/backEnd/compte.php) coter back End*

*Si vous ne comprenez pas quelque chose vous pouvez me contactez sur discord*