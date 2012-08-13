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
  
?>


<html>
  <head></head>

  <body>
     
	 <form action="query.php" method="GET" >
	 
     Wine name:
     <input type="text" name="wine" id="wine" /><br/>

     Winery name:
     <input type="text" name="winery" id="winery" /><br/>

     Region:
     <select name="region" id="region" >
       <?php
          foreach( $regions as $region ){
            echo "<option value='$region->region_name'>$region->region_name</option>";
	      }
       ?>  
     </select><br/>

     Grape type:
     <select name="grape" id="grape" >
        <?php
          foreach( $grapes as $grape ){
            echo "<option value='$grape->variety'>$grape->variety</option>";
	      }
       ?>  
     </select><br/>

     Range of years:
     <select name="years" id="years" >
        <?php
            foreach( $years as $year ){
               echo "<option value='$year'>$year</option>";
            }
        ?>  
     </select><br/>
	 
     Minimun number of wines in stock
	 <input type="text" name="stock" id="stock" /><br/>
	 
	 Minimum number of wines ordered
	 <input type="text" name="order" id="order" /><br/>
	 
	 Dollar cost range
	 From: 
         <input type="text" name="from" id="from" />
         To:
         <input type="text" name="to" id="to" /></br>
	 
	 <input type="submit" id="submit" />
	 
	 </form>
  </body>

</html>
