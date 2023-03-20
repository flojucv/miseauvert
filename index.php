<?php include('./backEnd/header.php'); ?>
<div class="presentation">
    <h2>Avec nos pensions pour chiens et chats, partez tranquille !</h2>
    <p>Depuis 1976, nous accueillons votre compagnon dans nos pensions pour chiens et chats dans un environ-nement agréable à la campagne. Nous sommes situés à proximité de Lille, Paris, Lyon, Orléans, Bordeaux, Dijon, Rennes, Reims, Clermont Ferrand, Millau, Amiens. Pour de court et long séjours, votre animal sera hébergé dans les meilleures conditions. Notre expérience et notre histoire, c’est avant tout le partage de notre passion....Toutes nos prestations sont de qualités afin d’assurer le bien être de nos chers chiens et chats.</p>
</div>

<div class="pensions">
    <div class="box-container">
        <?php
        require_once "./manipBDD/indexManip.php";
        $result = ManipulationIndex::AffichePension();

        $compteur = 1;
        foreach($result as $unePension) { ?>
            <div class="box-pension">
                <h3><?php echo "PENSION NO°" . $compteur ?></h3>
                <h5>Adresse</h5>
                <p class="adresse"><?php echo $unePension["Adresse"] . " " . $unePension["Ville_pens"] . " " . $unePension["code_postale"] ?></p>
                <h5>Téléphone</h5>
                <p class="telephone"><?php echo $unePension["Telephone_pens"] ?></p>
                <form method="get" action="./pension.php">
                    <input type="hidden" name="numero_pension" value=<?php echo $unePension["Id_pens"] ?> />
                    <input type="submit" class="btnDetail" value="Details" />
                </form>
            </div>
        <?php $compteur ++; }
        ?>
    </div>
    <p><i>Il est tout à fait possible que d’autres pensions viennent rejoindre la scop.</i></p>
</div>

<?php include('./backEnd/footer.php'); ?>