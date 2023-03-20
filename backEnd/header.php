<?php
session_start();
$page = basename($_SERVER['PHP_SELF']);

$liste_pages = array(
    array('page' => 'index', 'title' => 'Accueil'),
    array('page' => 'login', 'title' => 'Connexion'),
);

$liste_pages_login_admin = array(
    array('page' => 'index', 'title' => 'Accueil'),
    array('page' => 'panelAdmin', 'title' => 'Panel'),
    array('page' => 'deconnection', 'title' => 'Deconnexion'),
);

$liste_pages_login = array(
    array('page' => 'index', 'title' => 'Accueil'),
    array('page' => 'panelGardiennage', 'title' => 'Panel'),
    array('page' => 'deconnection', 'title' => 'Deconnexion'),
);
if(isset($_SESSION["id_admin"])) {
    $array_pages = $liste_pages_login_admin;
    $title_id = array_search($page, array_column($liste_pages_login_admin, 'page'));
    $titlePage = $liste_pages_login_admin[$title_id]['title'];
} else if(isset($_SESSION['id_compte'])) {
    $array_pages = $liste_pages_login;
    $title_id = array_search($page, array_column($liste_pages_login, 'page'));
    $titlePage = $liste_pages_login[$title_id]['title'];
} else {
    $array_pages = $liste_pages;
    $title_id = array_search($page, array_column($liste_pages, 'page'));
    $titlePage = $liste_pages[$title_id]['title'];
}

?>
<!doctype html>
<html lang="FR-fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mise au vert | <?php echo $titlePage ?></title>
    <link href="../style/style.css" rel="stylesheet">
    <link rel="icon" href="../img/logo.PNG">
</head>

<body>
    <nav class="navbar">
        <a class="logo" href="../index.php"><img src="../img/logo.PNG"> </a>
        <div class="nav-links">
            <ul>
                <?php
                foreach ($array_pages as $item) {
                    $url = $item['page'];
                    $title = $item['title'];
                ?>
                    <li><a href="./<?php echo $url; ?>.php" class="<?php $page == $url ? 'active' : '' ?>"> <?php echo $title ?></a></li>
                <?php } ?>
            </ul>
        </div>
        <img src="../img/menu-btn.png" alt="Menu hamburger" class="menu-hamburger">
    </nav>
    <div class="container">