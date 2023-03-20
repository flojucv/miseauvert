# BACKEND

Dans cette partie, vous pouvez retrouver le back End du site, c'est ici que se déroule les actions une fois le bouton cliquez.

## Les différent fichiers

### Sommaire :
- [Header](#header)
- [Footer](#footer)
- [sessionAdmin](#sessionadmin)
- [sessionPension](#sessionpension)
- [loginAdminBackEnd](#loginadminbackend)
- [loginBackEnd](#loginbackend)
- [compte](#compte)
- [modifPension](#modifpension)

### Header :
Le fichier [header.php](https://github.com/flojucv/miseauvert/blob/master/backEnd/header.php) contient le bandeau du haut de page ainsi que le démarrage des cookies, le bandeau change selon si la personne est connecter ou non.

### Footer :
Le fichier [footer.php](https://github.com/flojucv/miseauvert/blob/master/backEnd/footer.php) contient le bandeau de bas de page.

### sessionAdmin :
Le fichier [sessionAdmin.php](https://github.com/flojucv/miseauvert/blob/master/backEnd/sessionAdmin.php) se met au debut des pages frontend ou l'on souhaite que seul les admins y est accès, se fichier renvoie sur la page principal tout personne qui n'ai pas un administrateur.

### sessionPension :
Le fichier [sessionPension.php](https://github.com/flojucv/miseauvert/blob/master/backEnd/sessionPension.php) se met au debut des pages frontend ou l'on souhaite que seul les comptes des pensions y ont accès, se fichier renvoie sur la page principal tout personne qui n'ai pas connecter avec un compte pension.

### loginAdminBackEnd :
Le fichier [loginAdminBackEnd.php](https://github.com/flojucv/miseauvert/blob/master/backEnd/loginAdminBackEnd.php) gère la connection en tant qu'administrateur sur le site, le code s'occupe de vérifier si les informations rentrer corresponde a un compte ou non :
- si il ne corresponde pas a un compte le code renvoie sur la [page de connexion](https://github.com/flojucv/miseauvert/blob/master/loginAdmin.php) en affichant un message d'erreur indiquant que le mot de passe ou l'identifiant est incorrect
- si il correpond a un compte le code créer un cookie de session en indiquant dans le cookie l'identifiant du compte admin, puis il renvoie vers le [panel administrateur](https://github.com/flojucv/miseauvert/blob/master/pannelAdminPension.php)

### loginBackEnd :
Le fichier [loginBackEnd.php](https://github.com/flojucv/miseauvert/blob/master/backEnd/loginBackEnd.php) gère la connection en tant que pension sur le site, le code s'occupe de vérifier si les informations de connection son correct ou non :
- Si les informations de connexion ne sont pas correct, le code renvoie sur la [page de connexion](https://github.com/flojucv/miseauvert/blob/master/login.php) en affichant un message d'erreur indiquant que le mot de passe ou l'identifant est incorrect
- Si les informations de connexion sont correct, le code créer un cookie de session en indiquant dans le cookie l'identifiant du compte de la pension, puis il renvoie vers le [panel d'édition](https://github.com/flojucv/miseauvert/blob/master/panelGardiennage.php)

### compte :
Le fichier [compte.php](https://github.com/flojucv/miseauvert/blob/master/backEnd/compte.php) gère le backEnd du panel administrateur, lors qu'un administrateur créer ou supprime un compte c'est la premier partie du code qui se met en marche, quand il créer ou supprime une pension, c'est la deuxième partie du code qui se met en marche

### modifPension :
Le fichier [modifPension.php](https://github.com/flojucv/miseauvert/blob/master/backEnd/modifPension.php) gère le backEnd du panel d'édition des pensions, lors qu'une pension souhaite éditer ses informations de présentation, c'est la premier partie du code qui se met en marche, lors qu'une pension souhaite modifier les prix de ses tarifications c'est la deuxième partie du code qui se met en marche