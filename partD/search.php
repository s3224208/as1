<?php
  session_start();

  require "lib.php";

  $regions = DATASTORE::create_table('region')->find_many();

  $grapes = DATASTORE::create_table('grape_variety')->find_many();

  $wines = DATASTORE::create_table('wine')->order_by_asc('year')->find_many();

  $years = array();
  foreach($wines as $wine ){
     if ( !in_array( $wine['year'], $years ) ) { 
       array_push( $years, $wine['year'] ); 
     }
  }
  
  require_once("smarty/Smarty.class.php");
  $smarty = new Smarty();
  $smarty->assign('regions', $regions);
  $smarty->assign('grapes', $grapes);
  $smarty->assign('years', $years);
  if ( !empty($_SESSION['err_msg']) ){ //if there is error msg 
     $smarty->assign('err_msg', $_SESSION['err_msg']);
     unset($_SESSION['err_msg']); // unset flash msg
  }
  $smarty->display("templates/search.tpl");
  //require_once("tpl/search.tpl.php");
?>


