<?php /* Smarty version Smarty-3.1.11, created on 2012-08-20 18:55:58
         compiled from "tpl/query.tpl" */ ?>
<?php /*%%SmartyHeaderCode:745449575031ebe18ab685-57692763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e2ca3763a800949d20d8fc4813e1251e769be1b' => 
    array (
      0 => 'tpl/query.tpl',
      1 => 1345449351,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '745449575031ebe18ab685-57692763',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5031ebe19118b6_16189091',
  'variables' => 
  array (
    'wines' => 0,
    'wine' => 0,
    'sum_qty' => 0,
    'sum_price' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5031ebe19118b6_16189091')) {function content_5031ebe19118b6_16189091($_smarty_tpl) {?><table>
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

<?php }} ?>