<?php
include "./backEnd/header.php";
include "./manipBDD/pension.php";
?>
<div class="affichagePension">
<?php
if(isset($_GET["numero_pension"])) {
    $infoPension = ManipulationPension::recherchePension($_GET["numero_pension"])[0];
    if($infoPension["image_pens"] != null) {
        echo '<img src="'.$infoPension["image_pens"].'">';
    }
    echo "<p>" . $infoPension["description_pens"] ."</p>";
    echo "<p>adresse : " . $infoPension["Adresse"] . " " . $infoPension["Ville_pens"] . " " . $infoPension["code_postale"] ."</p>";
    echo "<p>Telephone : " . $infoPension["Telephone_pens"] . "</p>";

    $infoTarifications = ManipulationPension::rechercheTarif($_GET["numero_pension"]);?>
<table>
    <thead>
        <th>Type Gardiennage</th>
        <th>Prix</th>
    </thead>
    <tbody>
        <?php
        foreach($infoTarifications as $tarification) {
            echo "<tr><td>" . $tarification["typegard"] . "</td><td>". $tarification["tarif"] ."</td></tr>";
        }
        ?>
    </tbody>
</table>
<?php
}else {
    header("Location: ./index.php");
}
?>
</div>
<?php
include "./backEnd/footer.php"
?>