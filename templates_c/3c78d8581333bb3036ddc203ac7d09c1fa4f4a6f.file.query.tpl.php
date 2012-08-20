<?php /* Smarty version Smarty-3.1.11, created on 2012-08-20 15:06:58
         compiled from "templates/query.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2599674155032367243cdc0-49254596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c78d8581333bb3036ddc203ac7d09c1fa4f4a6f' => 
    array (
      0 => 'templates/query.tpl',
      1 => 1345467739,
      2 => 'file',
    ),
    'd727a2f7c0bda098bc7da6c28169b69f69e5ee74' => 
    array (
      0 => './templates/base.tpl',
      1 => 1345467739,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2599674155032367243cdc0-49254596',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_503236724a0940_41910221',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503236724a0940_41910221')) {function content_503236724a0940_41910221($_smarty_tpl) {?><!DOCTYPE html>

<html>
   <head> 
      <link href="static/css/bootstrap.min.css" rel="stylesheet">
      <style type="text/css">
          .main{
            padding-top: 20px;
          }
      </style>
   </head>

   <body>
      <div class="container main">
        

<table class="table table-striped table-condensed">
  <thead>
    <tr>
      <th>Wine Name</th>
      <th>Grape varieties</th>
      <th>Year</th>
      <th>Winery</th>
      <th>Region</th>
      <th>Cost</th>
      <th>qty sold</th>
      <th>sales</th>
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
   <td><?php echo $_smarty_tpl->tpl_vars['wine']->value[$_smarty_tpl->tpl_vars['sum_qty']->value];?>
</td>
   <td><?php echo $_smarty_tpl->tpl_vars['wine']->value[$_smarty_tpl->tpl_vars['sum_price']->value];?>
</td>
 </tr>
<?php } ?>

  </tbody>
</table>


      </div>
   </body>


</html>
<?php }} ?>