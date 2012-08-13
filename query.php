<?php

$wine = isset($_GET['wine'])?$_GET['wine']:"";

$winery = isset($_GET['winery'])?$_GET['winery']:"";

$region = isset($_GET['region'])?$_GET['region']:"";

$grape = isset($_GET['grape'])?$_GET['grape']:"";

$years = isset($_GET['years'])?$_GET['years']:""; 

$stock = isset($_GET['stock'])?$_GET['stock']:"";  

$order = isset($_GET['order'])?$_GET['order']:"";   

$from = isset($_GET['from'])?$_GET['from']:"";   

$to = isset($_GET['to'])?$_GET['to']:"";   

echo "wine " . $wine . "<br/>";
echo "winery " . $winery . "<br/>";
echo "region " . $region . "<br/>";
echo "grape " . $grape . "<br/>";
echo "years " . $years . "<br/>";
echo "stock " . $stock . "<br/>";
echo "order " . $order . "<br/>";
echo "from " . $from . "<br/>";
echo "to " . $to . "<br/>";


?>
