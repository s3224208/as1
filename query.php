<?php

require_once 'lib.php';

$wine = isset($_GET['wine'])?$_GET['wine']:"";

$winery = isset($_GET['winery'])?$_GET['winery']:"";

$region = isset($_GET['region'])?$_GET['region']:"";

$grape = isset($_GET['grape'])?$_GET['grape']:"";

$from_y = isset($_GET['from_y'])?$_GET['from_y']:""; 

$to_y = isset($_GET['to_y'])?$_GET['to_y']:""; 

$stock = isset($_GET['stock'])?$_GET['stock']:"";  

$order = isset($_GET['order'])?$_GET['order']:"";   

$from = isset($_GET['from'])?$_GET['from']:"";   

$to = isset($_GET['to'])?$_GET['to']:"";   


$res = ORM::for_table('wine')
       ->join('winery', array('wine.winery_id', '=', 'winery.winery_id' ))
       ->join('grape_variety', array('grape_variety.variety_id', '=', 'grape_variety.variety_id') )
       ->join('region', array('region.region_id', '=', 'winery.region_id') )
       ->join('inventory', array('inventory.wine_id', '=', 'wine.wine_id'));


if ( !empty( $wine ) ){
   $res = $res->where('wine_name', $wine);
}

if ( !empty( $winery ) ){ 
   $res = $res->where('winery_name', $winery);
}

if ( !empty( $region ) ){ 
   $res = $res->where('region_name', $region);
}

if ( !empty( $grape ) ){ 
   $res = $res->where('variety', $grape);
}

if ( !empty( $from_y ) ){ 
   $res = $res->where_lte('year', $from_y);
}

/*
if ( !empty( $to_y ) ){ 
   $res = $res->where_gte('year', $to_y);
}
*/

echo $from_y . "<br/>";
echo $to_y;

$res = $res->find_many();

//for debug
foreach( $res as $wine ){
   echo $wine->wine_name . "<br/>"; 
   echo $wine->variety . "<br/>";
   echo $wine->year . "<br/>";
   echo $wine->winery_name . "<br/>";
   echo $wine->region_name . "<br/>";
   echo "<br/><br/>";
}


/*
echo "wine " . $wine . "<br/>";
echo "winery " . $winery . "<br/>";
echo "region " . $region . "<br/>";
echo "grape " . $grape . "<br/>";
echo "years " . $years . "<br/>";
echo "stock " . $stock . "<br/>";
echo "order " . $order . "<br/>";
echo "from " . $from . "<br/>";
echo "to " . $to . "<br/>";
*/

?>