<?php
include "./backEnd/sessionPension.php";
include "./manipBDD/pension.php";
include "./manipBDD/compte.php";
?>
<div class="affichagePension">
    <form method="post" action="./backEnd/modifPension.php" enctype="multipart/form-data">
        <?php
        if (isset($_SESSION["id_compte"])) {
            $infoCompte = ManipulationCompte::SelectionnerCompte($_SESSION["id_compte"])[0];
            $infoPension = ManipulationPension::recherchePension($infoCompte["id_pens"])[0];
            if ($infoPension["image_pens"] != null) {
                echo '<img src="' . $infoPension["image_pens"] . '">';
            }
            echo '<input type="file" name="photo" id="photo" accept="image/png, image/jpeg"><br>';
            echo "<label for='description_pens'>description : </label><textarea type='text' name='description_pens' >" . $infoPension["description_pens"] . "</textarea><br>";
            echo "<label for='adresse'>adresse : </label><input type='text' name='adresse' value='" . $infoPension["Adresse"] . "'><br>";
            echo "<label for='ville'>ville : </label><input type='text' name='ville' value='" . $infoPension["Ville_pens"] . "'><br>";
            echo "<label for='code_postale'>code postale : </label> <input type='number' name='code_postale' value='" . $infoPension["code_postale"] . "'><br>";
            echo "<label for='telephone'>Telephone : </label> <input type='tel' name='telephone' value='" . $infoPension["Telephone_pens"] . "'><br>";
            echo "<input type='submit' name='infoPension' value='Changer information pension'><br>";
            echo "<input type='hidden' name='id_pens' value='" . $infoCompte["id_pens"] . "'>";
            $infoTarifications = ManipulationPension::rechercheTarif($infoCompte["id_pens"]); ?>
    </form>
    <br>
    <table>
        <thead>
            <th>Type Gardiennage</th>
            <th>Prix</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php
            foreach ($infoTarifications as $tarification) {
                echo "<tr><td>" . $tarification["typegard"] . "</td><td><form method='post' action='./backEnd/modifPension.php'><input type='number' name='prix' value='" . $tarification["tarif"] . "'></td><td><input type='submit' name='modif_tarif' value='MODIFIER'><input type='hidden' name='id_pens' value='".$tarification["id_pens"]."'><input type='hidden' name='id_typegard' value='". $tarification["id_typegard"]."'></form></td></tr>";
            }
            ?>
        </tbody>
    </table>
<?php
        }
?>

</div>
<?php
include "./backEnd/footer.php"
?>