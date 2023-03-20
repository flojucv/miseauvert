<?php
$pensions = array('Lambertsart', 'Vincennes', 'Les Echets', 'Saran', 'Coulmier');

foreach($pensions as $pension) {
    echo $pension . " : " . hash("sha256", $pension) . "<br>";
}