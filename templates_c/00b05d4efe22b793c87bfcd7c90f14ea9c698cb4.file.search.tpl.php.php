<?php /* Smarty version Smarty-3.1.11, created on 2012-08-20 17:10:03
         compiled from "tpl/search.tpl.php" */ ?>
<?php /*%%SmartyHeaderCode:18424483725031d4bb058cb3-57504795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00b05d4efe22b793c87bfcd7c90f14ea9c698cb4' => 
    array (
      0 => 'tpl/search.tpl.php',
      1 => 1345429061,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18424483725031d4bb058cb3-57504795',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5031d4bb086db2_56497838',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5031d4bb086db2_56497838')) {function content_5031d4bb086db2_56497838($_smarty_tpl) {?><html>
  <head></head>

  <body>
     
	 <form action="new_query.php" method="GET" >
	 
     Wine name:
     <input type="text" name="wine" id="wine" /><br/>

     Winery name:
     <input type="text" name="winery" id="winery" /><br/>

     Region:
     <select name="region" id="region" >
       <<?php ?>?php
          foreach( $regions as $region ){
            echo "<option value='$region->region_name'>$region->region_name</option>";
	      }
       ?<?php ?>>  
     </select><br/>

     Grape type:
     <select name="grape" id="grape" >
        <<?php ?>?php
          foreach( $grapes as $grape ){
            echo "<option value='$grape->variety'>$grape->variety</option>";
	      }
       ?<?php ?>>  
     </select><br/>

     Range of years:
     from:
     <select name="from_y" id="from_y" >
        <<?php ?>?php
            foreach( $years as $year ){
               echo "<option value='$year'>$year</option>";
            }
        ?<?php ?>>  
     </select>
     to:	 
     <select name="to_y" id="to_y" >
        <<?php ?>?php
            foreach( $years as $year ){
               echo "<option value='$year'>$year</option>";
            }
        ?<?php ?>>  
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
<?php }} ?>