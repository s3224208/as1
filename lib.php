<?php

  require_once 'idiorm.php';
  require_once 'paris.php';

  ORM::configure('mysql:host=localhost;dbname=winestore');
  ORM::configure('username', 'root');
  ORM::configure('password', 'root');

  class DATASTORE{

     protected static $_config = array();
     protected static $_pdo;
     protected $_table;
     protected $_join = array();
     protected $_where = array();
     protected $_group_by = array();
     protected $_having = array();

     /**
      * Config the connection string which is used by PDO
      */
     public static function config($connect_string, $username="root", $password=null){
         self::$_config['connect_string'] = $connect_string;
         self::$_config['username'] = $username;
         if( !is_null($password) )
            self::$_config['password'] = $password;
     }

     /** 
      * Create a new DATASTORE obj; Factory pattern
      */
     public static function create_table($table_name){
         self::$_pdo = new PDO( self::$_config['connect_string'], $username, $password );
         return new self($table_name);
     }

     public function __construct($table_name){
         $this->_table = $table_name;
     }

     public function where($column, $value){
         array_push( $_where, array( $column, "=", $value ) );
         return $this;
     }

     public function where_gte($column, $value){ 
         array_push( $_where, array( $column, ">=" , $value ) );
         return $this;
     }

     public function where_lte($column, $value){ 
         array_push( $_where, array( $column, "<=" , $value ) );
         return $this;
     }

     public function join($table_name, $constraint){
         array_push( $_join, array( $table_name, $constraint ) );
         return $this;
     }

     public function group_by($column){
         array_push( $_group_by, $column );
         return $this;
     }


     public function having($column, $operator, $value){
         array_push( $_having, array( $column, $operator, $value ) );
         return $this;
     }

     public function order_by_asc($column){ 
         array_push( $_asc, $column );
         return $this;
     }


     protected function _build_select_start(){
        return "SELECT * FROM ? ";
     }

     protected function _build_where(){
        $f = "WHERE ";
        
        foreach( $_where as $w ){
           $f .= "WHERE ? AND ? "; 
        }
        return $f;
     }

     protected function _build_join(){
        $f = "";
        foreach( $_join as $j ){
           $f .= "INNER JOIN ? ON ?" . $j[1] . "? ";
        }
        return $f;
     }

     protected function _build_group_by(){
        return "GROUP BY ? ";
     }


     protected function _build_order_by(){
        return "ORDER BY ? ASC"; 
     }


     protected function _build_select(){
        $query = $this->_build_select_start() . $this->_build_join() . $this->_build_where() .
                 $this->_build_group_by() . $this->_build_order_by();
        return array( $query, $place_holders);
     }


     public function find_many(){
        list($query, $place_holders) = _build_select();
        $sth = $_pdo->prepare( $query );
        $sth->execute( $place_holders ); 
        return $sth->fetchAll();
     }

  }


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
