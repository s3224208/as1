<?php
session_start();
/*
 * set flash msg and redirect to url
 */
function flash_redirect($msg, $url){
  $_SESSION['err_msg'] = $msg; 
  header('Location: ' . $url);
  exit;
}

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

/* validation */

/* check range of years */
if ( $from_y != "" && $to_y != "" && $from_y > $to_y ){
  flash_redirect("Range of years are invalid", "search.php");
}

/* check range of cost range */
if ( $from != "" && $to != "" && $from > $to ){
  flash_redirect("Dollar cost range are invalid", "search.php");
}

if ( $from != "" && $to != "" && ($from < 0 ||  $to < 0) ){
  flash_redirect("Dollar cost range are invalid", "search.php");
}

/* check minimun stock number */
if ( $stock != "" && $stock <= 0 ){
  flash_redirect("Minimun number of wines in stock is invalid", "search.php");
}

/* check minimun wines ordered number */
if ( $order != "" && $order <= 0 ){
  flash_redirect("Minimun number of wines ordered is invalid", "search.php");
}


/* end of validation */

$res = DATASTORE::create_table('wine')
       ->join('winery', array('wine.winery_id', '=', 'winery.winery_id' ))
       ->join('wine_variety', array('wine_variety.wine_id', '=', 'wine.wine_id' ))
       ->join('grape_variety', array('wine_variety.variety_id', '=', 'grape_variety.variety_id') )
       ->join('region', array('region.region_id', '=', 'winery.region_id') )
       ->join('items', array('items.wine_id', '=', 'wine.wine_id'))
       ->join('inventory', array('inventory.wine_id', '=', 'wine.wine_id'))
       ->select('wine_name')
       ->select('variety')
       ->select('year')
       ->select('winery_name')
       ->select('region_name')
       ->select('cost')
       ->select('on_hand')
       ->select('SUM(qty)')
       ->select('SUM(price)')
       ->group_by('items.wine_id');

if ( !empty( $wine ) ){
   $res = $res->where('wine_name', $wine);
}

if ( !empty( $winery ) ){ 
   $res = $res->where('winery_name', $winery);
}

if ( !empty( $region ) ){ 
   if ( $region != "All" ){
     $res = $res->where('region_name', $region);
   }
}

if ( !empty( $grape ) ){ 
   $res = $res->where('variety', $grape);
}

if ( !empty( $from_y ) ){ 
   $res = $res->where_gte('year', $from_y);
}


if ( !empty( $to_y ) ){ 
   $res = $res->where_lte('year', $to_y);
}


if ( !empty( $stock ) ){
   $res = $res->where_gte('on_hand', $stock );
}


if ( !empty( $from ) ){
   $res = $res->where_gte('cost', $from );
}


if ( !empty( $to ) ){
   $res = $res->where_lte('cost', $to );
}


if ( !empty( $order ) ){

   $res = $res->having('SUM( qty )', '>', $order );

}

$wines = $res->order_by_asc('year')
           ->find_many();

//generate data to share to Twitter
$text = "";
foreach( $wines as $wine ){
   $text .= $wine['wine_name'] . " ";
   if ( strlen($text) > 100 ){
      $text = substr( $text, 0, 99 );
      break;
   }
}


require_once("smarty/Smarty.class.php");
$smarty = new Smarty();
$smarty->assign('wines', $wines);
$smarty->assign('sum_qty', "SUM(qty)");
$smarty->assign('sum_price', "SUM(price)");
$smarty->assign('share', $text);
if( !empty($_SESSION['session']) ){
    $smarty->assign('session', 1);
    $i = count($_SESSION['result']);
    foreach( $wines as $wine ){
       $_SESSION['result'][$i++] = $wine;
    }
    //print count( $_SESSION['result'] );
}

$smarty->display("templates/query.tpl");

?>

