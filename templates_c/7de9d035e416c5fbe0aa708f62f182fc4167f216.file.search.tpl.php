<?php /* Smarty version Smarty-3.1.11, created on 2012-08-20 17:51:52
         compiled from "tpl/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17417717645031de886ef752-55285873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7de9d035e416c5fbe0aa708f62f182fc4167f216' => 
    array (
      0 => 'tpl/search.tpl',
      1 => 1345443063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17417717645031de886ef752-55285873',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'regions' => 0,
    'region' => 0,
    'grapes' => 0,
    'grape' => 0,
    'years' => 0,
    'year' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5031de889fcee1_22007305',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5031de889fcee1_22007305')) {function content_5031de889fcee1_22007305($_smarty_tpl) {?><html>
  <head></head>

  <body>
     
	 <form action="new_query.php" method="GET" >
	 
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
             <option value='<?php echo $_smarty_tpl->tpl_vars['region']->value->region_name;?>
'><?php echo $_smarty_tpl->tpl_vars['region']->value->region_name;?>
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
             <option value='<?php echo $_smarty_tpl->tpl_vars['grape']->value->variety;?>
'><?php echo $_smarty_tpl->tpl_vars['grape']->value->variety;?>
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
	 
	 <input type="submit" id="submit" />
	 
	 </form>
  </body>

</html>
<?php }} ?>