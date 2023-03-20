<?php include('./backEnd/header.php'); ?>
<?php if(isset($_GET["error"])) {
        if($_GET["error"] == 1) {
            echo "<div class='error'>Identifiant ou mot de passe invalide</div>";
        }
    } ?>
<div class="login">
    <form method="post" action="../backEnd/loginAdminBackEnd.php">
        <h3>Connexion</h3>
        <label for="identifiant" class="">Identifiant :</label><br>
        <input type="text" id="identifiant" name="identifiant" class="loginElement" required><br>
        <label for="password" class="">Mot de passe :</label><br>
        <input type="password" id="password" name="password" class="loginElement" required><br>
        <input type="submit" value="Connexion" name="login">
    </form>
</div>
<?php include('./backEnd/footer.php'); ?>