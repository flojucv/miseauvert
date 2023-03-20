<?php
include "./backEnd/sessionAdmin.php";
include "./backEnd/header.php";
require_once "./manipBDD/pension.php";
?>

<div class="navbar-bis">
    <div class="nav-links">
        <ul>
            <li><a href="./panelAdmin.php">Compte</a></li>
            <li><a href="./pannelAdminPension.php">Pension</a></li>
        </ul>
    </div>
</div>

<form class="formAddCompte" method="post" action="./backEnd/compte.php">
    <input type="text" name="adresse" placeholder="Adresse">
    <input type="text" name="ville" placeholder="Ville">
    <input type="number" name="code_postal" placeholder="Code Postal">
    <input type="tel" name="telephone" placeholder="Numero de telephone">
    <input type="submit" name="pension" value="Ajouter">
</form>

<div class="compte">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>ADRESSE</th>
                <th>VILLE</th>
                <th>CODE POSTAL</th>
                <th>TELEPHONE</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $pensions = ManipulationPension::AffichePension();
            foreach ($pensions as $pension) {
                echo "<tr><td>" . $pension["Id_pens"] . "</td><td>" . $pension["Adresse"] . "</td><td>" . $pension["Ville_pens"] . "</td><td>" . $pension["code_postale"] . "</td><td>" . $pension["Telephone_pens"] . "</td><td><form method='post' action='./backEnd/compte.php'><input type='submit' value='Supprimer' name='pension'><input type='hidden' name='Id_pens' value='". $pension["Id_pens"] ."' style='display: none'></form></td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>