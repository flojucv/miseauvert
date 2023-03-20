<?php
include "./backEnd/sessionAdmin.php";
include "./backEnd/header.php";
require_once "./manipBDD/compte.php";
?>

<div class="navbar-bis">
    <div class="nav-links">
        <ul>
            <li><a href="panelAdmin.php">Compte</a></li>
            <li><a href="pannelAdminPension.php">Pension</a></li>
        </ul>
    </div>
</div>

<form class="formAddCompte" method="post" action="./backEnd/compte.php">
    <input name="login" placeholder="Identifiant" type="text" required>
    <input name="password" placeholder="mot de passe" type="password" required>
    <select name="id_pension">
        <?php
            require_once "manipBDD/indexManip.php";
            $pensions = ManipulationIndex::AffichePension();
            foreach($pensions as $pension) {
                echo "<option value='". $pension["Id_pens"] . "'>". $pension["Ville_pens"] ."</option>";
            } ?>
    </select>
    <input type="submit" value="Ajouter" name="compte">
</form>
<div class="compte">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>IDENTIFIANT</th>
                <th>PENSION</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php
                    $comptes = ManipulationCompte::listerCompte();
                    foreach($comptes as $unCompte) {
                        echo "<tr> <td>" . $unCompte["Id_compte"] . "</td> <td>" . $unCompte["compte_user"] . "</td> <td>" . $unCompte["id_pens"] . "</td><td><form method='post' action='./backEnd/compte.php'><input type='submit' name='compte' value='Supprimer'><input type='hidden' name='id_compte' value='" . $unCompte['Id_compte'] . "'></form></td> </tr> ";
                    }
            ?>
        </tbody>
    </table>
</div>