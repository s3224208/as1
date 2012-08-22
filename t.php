<?php

$a = array("Riesling", 1970, 1971);
$cs = 'mysql:host=localhost;dbname=winestore';

$pdo = new PDO( $cs, 'root', 'root' );

$sql = "SELECT * FROM wine INNER JOIN winery ON wine.winery_id=winery.winery_id INNER JOIN wine_variety ON wine_variety.wine_id=wine.wine_id INNER JOIN grape_variety ON wine_variety.variety_id=grape_variety.variety_id INNER JOIN region ON region.region_id=winery.region_id INNER JOIN inventory ON inventory.wine_id=wine.wine_id WHERE variety= ? AND year>= ? AND year<= ? ORDER BY year ASC";


$pth = $pdo->prepare($sql);

$pth->execute($a);

print_r( $pth->fetchAll() );

?>
