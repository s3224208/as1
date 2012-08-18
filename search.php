<?php
  require "lib.php";
  
  $regions = Model::factory('Region')
	    ->find_many(); 

  $grapes = Model::factory('Grape')
	    ->find_many(); 

  $wines =  Model::factory('wine')
	    ->order_by_asc('year')
      ->find_many();

  $years = array();
  foreach($wines as $wine ){
     if ( !in_array( $wine->year, $years ) ) { 
       array_push( $years, $wine->year ); 
     }
  }

  $costs = array();  
  $inventory = Model::factory('inventory')
	       ->order_by_asc('cost')
	       ->find_many();

  foreach( $inventory as $item ){
     if ( !in_array( $item->cost, $costs ) ) { 
       array_push( $costs, $item->cost ); 
     }
  }


  require_once("tpl/search.tpl.php");
?>


