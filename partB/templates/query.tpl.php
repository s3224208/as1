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

<?php if ($wines) { ?>

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

<?php foreach ( $wines as $wine ) { ?>
 <tr>
   <td><?php echo $wine['wine_name']; ?></td>
   <td><?php echo $wine['variety']; ?></td>
   <td><?php echo $wine['year']; ?></td>
   <td><?php echo $wine['winery_name']; ?></td>
   <td><?php echo $wine['region_name']; ?></td>
   <td><?php echo $wine['cost']; ?></td>
   <td><?php echo $wine['on_hand']; ?></td>
   <td><?php echo $wine['SUM(qty)']; ?></td>
   <td><?php echo $wine['SUM(price)']; ?></td>
 </tr>
<?php } ?>
  </tbody>
</table>

<?php } else{ ?>

<div class="alert alert-block">
No records match your search criteria
</div>



<?php } ?>

</div>

</body>

</html>

