<?php /* Smarty version Smarty-3.1.11, created on 2012-08-27 19:58:23
         compiled from "templates/session_query.tpl" */ ?>
<?php /*%%SmartyHeaderCode:531414427503b19d9bdec29-97786361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '257f7e48bf9970425d81631591807e0e9b563e12' => 
    array (
      0 => 'templates/session_query.tpl',
      1 => 1346059775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '531414427503b19d9bdec29-97786361',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_503b19d9c6f6d2_61826592',
  'variables' => 
  array (
    'wines' => 0,
    'wine' => 0,
    'sum_qty' => 0,
    'sum_price' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503b19d9c6f6d2_61826592')) {function content_503b19d9c6f6d2_61826592($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['wines']->value){?>

<table class="table table-striped table-condensed">
  <thead>
    <tr>
      <th>Wine Name</th>
      <th>Grape Varieties</th>
      <th>Year</th>
      <th>Winery</th>
      <th>Region</th>
      <th>Cost</th>
      <th>Total number of bottles available</th>
      <th>Total Stock sold</th>
      <th>Sales Revenue</th>
    </tr>
  </thead>

  <tbody>

<?php  $_smarty_tpl->tpl_vars['wine'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wine']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wines']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wine']->key => $_smarty_tpl->tpl_vars['wine']->value){
$_smarty_tpl->tpl_vars['wine']->_loop = true;
?>
 <tr>
   <td><?php echo $_smarty_tpl->tpl_vars['wine']->value['wine_name'];?>
</td>
   <td><?php echo $_smarty_tpl->tpl_vars['wine']->value['variety'];?>
</td>
   <td><?php echo $_smarty_tpl->tpl_vars['wine']->value['year'];?>
</td>
   <td><?php echo $_smarty_tpl->tpl_vars['wine']->value['winery_name'];?>
</td>
   <td><?php echo $_smarty_tpl->tpl_vars['wine']->value['region_name'];?>
</td>
   <td><?php echo $_smarty_tpl->tpl_vars['wine']->value['cost'];?>
</td>
   <td><?php echo $_smarty_tpl->tpl_vars['wine']->value['on_hand'];?>
</td>
   <td><?php echo $_smarty_tpl->tpl_vars['wine']->value[$_smarty_tpl->tpl_vars['sum_qty']->value];?>
</td>
   <td><?php echo $_smarty_tpl->tpl_vars['wine']->value[$_smarty_tpl->tpl_vars['sum_price']->value];?>
</td>
 </tr>
<?php } ?>

  </tbody>
</table>

<?php }else{ ?>

<div class="alert alert-block">
No records.
</div>

<?php }?>

<?php }} ?>