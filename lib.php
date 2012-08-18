<?php

  require_once 'idiorm.php';
  require_once 'paris.php';

  ORM::configure('mysql:host=localhost;dbname=winestore');
  ORM::configure('username', 'root');
  ORM::configure('password', 'RMIT2010');

  class Wine extends Model {
     public static $_table = 'wine';
  }

  class Region extends Model {
     public static $_table = 'region';
  }

  class Grape extends Model {
     public static $_table = 'grape_variety';
  }

  class Inventory extends Model {
     public static $_table = 'inventory';
  }
?>
