<!DOCTYPE html>

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

<?php if (isset($err_msg)) { ?>
     <div class="alert alert-error">
       <?php echo $err_msg; ?>
     </div>
<?php } ?>
	 <form action="query.php" method="GET" >
	 
     Wine name:
     <input type="text" name="wine" id="wine" /><br/>

     Winery name:
     <input type="text" name="winery" id="winery" /><br/>

     Region:
     <select name="region" id="region" >
          <?php foreach( $regions as $region ){  ?>
             <option value='<?php echo $region['region_name'];?>' ><?php echo $region['region_name'];?></option>;
          <?php }   ?>
     </select><br/>

     Grape type:
     <select name="grape" id="grape" >
          <?php foreach( $grapes as $grape){ ?>
               <option value='<?php echo $grape['variety'];?>' ><?php echo $grape['variety']; ?></option>;
          <?php } ?>
     </select><br/>

     Range of years:
     from:
     <select name="from_y" id="from_y" >
          <?php foreach( $years as $year ){ ?>
          <option value='<?php echo $year?>'><?php echo $year ?></option>;
          <?php } ?>
     </select>
     to:	 
     <select name="to_y" id="to_y" >
          <?php foreach( $years as $year ){ ?>
          <option value='<?php echo $year?>'><?php echo $year ?></option>;
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
