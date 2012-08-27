<?php
  session_start();

  require "lib.php";

  $regions = DATASTORE::create_table_mysqli('region')->find_many_mysqli();

  $grapes = DATASTORE::create_table_mysqli('grape_variety')->find_many_mysqli();

  $wines = DATASTORE::create_table_mysqli('wine')->order_by_asc('year')->find_many_mysqli();

  $years = array();
  foreach($wines as $wine ){
     if ( !in_array( $wine['year'], $years ) ) { 
       array_push( $years, $wine['year'] ); 
     }
  }

  if ( !empty($_SESSION['err_msg']) ){ //if there is error msg 
     $err_msg = $_SESSION['err_msg'];
     unset($_SESSION['err_msg']); // unset flash msg
  }

  require_once("templates/search.tpl.php");
?>


