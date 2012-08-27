<?php

session_start();

if( !empty($_SESSION['session']) ){

   require_once("smarty/Smarty.class.php");
   $smarty = new Smarty();
   $smarty->assign('wines', $_SESSION['result']);
   $smarty->assign('sum_qty', "SUM(qty)"); 
   $smarty->assign('sum_price', "SUM(price)");
   $smarty->assign('session', 1);

   $smarty->display("templates/session_query.tpl");

}
else{

  echo "session has started yet";

}

?>
