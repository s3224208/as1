<?php /* Smarty version Smarty-3.1.11, created on 2012-08-27 19:58:19
         compiled from "templates/query.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1881299042503a23cb20bc56-35707915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c78d8581333bb3036ddc203ac7d09c1fa4f4a6f' => 
    array (
      0 => 'templates/query.tpl',
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
  'nocache_hash' => '1881299042503a23cb20bc56-35707915',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_503a23cb292c67_57134398',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503a23cb292c67_57134398')) {function content_503a23cb292c67_57134398($_smarty_tpl) {?><!DOCTYPE html>

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
        

<script type="text/javascript">
  $(document).ready(function(){

     $("#view").click(function(event){
        event.preventDefault(); 
        $('#review_session').show(); 
        $.ajax({
           url: "review_session.php", 
           success: function(data){
             $('#review_session').hide().html(data).fadeIn(500); 
           }
        }); 
     }); 

  });
</script>



<a href="search.php">Back to search.php</a>
<br/><br/>

<?php if (isset($_smarty_tpl->tpl_vars['session']->value)){?>
   <div class="alert alert-success">
       session is started
   </div>

   <a href="end_session.php">End session</a>
   <br/><br/>

   <a id="view" href="review_session.php">View session query</a>
<?php }?>

<br/><br/>

<div id="review_session" class="hide">
  <img src="static/image/ajax-loader.gif">
</div>

<br/><br/>

<strong> Normal result </strong>

<br/><br/>
Share results: 
<a href="https://twitter.com/share" class="twitter-share-button" 
data-text="<?php echo $_smarty_tpl->tpl_vars['share']->value;?>
" data-via="tang_z_2012">Tweet</a>


<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


<br/><br/>

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
No records match your search criteria
</div>

<?php }?>


      </div>
   </body>


</html>
<?php }} ?>