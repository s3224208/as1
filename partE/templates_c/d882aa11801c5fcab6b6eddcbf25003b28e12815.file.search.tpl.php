<?php /* Smarty version Smarty-3.1.11, created on 2012-08-27 19:58:10
         compiled from "templates/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133842776503a17c481cc40-43901329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd882aa11801c5fcab6b6eddcbf25003b28e12815' => 
    array (
      0 => 'templates/search.tpl',
      1 => 1346059775,
      2 => 'file',
    ),
    'd727a2f7c0bda098bc7da6c28169b69f69e5ee74' => 
    array (
      0 => './templates/base.tpl',
      1 => 1346059775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133842776503a17c481cc40-43901329',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_503a17c48c1b90_62901490',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503a17c48c1b90_62901490')) {function content_503a17c48c1b90_62901490($_smarty_tpl) {?><!DOCTYPE html>

<html>
   <head> 
      <link href="static/css/bootstrap.min.css" rel="stylesheet">
      <style type="text/css">
          .main{
            padding-top: 20px;
          }
      </style>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
   </head>

   <body>
      <div class="container main">
        
   

   <?php if (isset($_smarty_tpl->tpl_vars['session']->value)){?>
     <div class="alert alert-success">
        session is started
     </div>
   <?php }else{ ?>
     <a href="search.php?session=1">Start Session</a>
     <br/><br/>
   <?php }?>
   

   <?php if (isset($_smarty_tpl->tpl_vars['err_msg']->value)){?>
     <div class="alert alert-error">
        <?php echo $_smarty_tpl->tpl_vars['err_msg']->value;?>

     </div>
   <?php }?>
	 <form action="query.php" method="GET" >
	 
     Wine name:
     <input type="text" name="wine" id="wine" /><br/>

     Winery name:
     <input type="text" name="winery" id="winery" /><br/>

     Region:
     <select name="region" id="region" >
          <?php  $_smarty_tpl->tpl_vars['region'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['region']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['regions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['region']->key => $_smarty_tpl->tpl_vars['region']->value){
$_smarty_tpl->tpl_vars['region']->_loop = true;
?>
             <option value='<?php echo $_smarty_tpl->tpl_vars['region']->value['region_name'];?>
'><?php echo $_smarty_tpl->tpl_vars['region']->value['region_name'];?>
</option>";
          <?php } ?>
     </select><br/>

     Grape type:
     <select name="grape" id="grape" >
          <?php  $_smarty_tpl->tpl_vars['grape'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['grape']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['grapes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['grape']->key => $_smarty_tpl->tpl_vars['grape']->value){
$_smarty_tpl->tpl_vars['grape']->_loop = true;
?>
             <option value='<?php echo $_smarty_tpl->tpl_vars['grape']->value['variety'];?>
'><?php echo $_smarty_tpl->tpl_vars['grape']->value['variety'];?>
</option>";
          <?php } ?>
     </select><br/>

     Range of years:
     from:
     <select name="from_y" id="from_y" >
          <?php  $_smarty_tpl->tpl_vars['year'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['year']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['years']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['year']->key => $_smarty_tpl->tpl_vars['year']->value){
$_smarty_tpl->tpl_vars['year']->_loop = true;
?>
             <option value='<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</option>";
          <?php } ?>
     </select>
     to:	 
     <select name="to_y" id="to_y" >
          <?php  $_smarty_tpl->tpl_vars['year'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['year']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['years']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['year']->key => $_smarty_tpl->tpl_vars['year']->value){
$_smarty_tpl->tpl_vars['year']->_loop = true;
?>
             <option value='<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</option>";
          <?php } ?>
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
	 
	 <input type="submit" id="submit" class="btn btn-primary" />
	 
	 </form>

      </div>
   </body>


</html>
<?php }} ?>