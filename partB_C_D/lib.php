<?php

  DATASTORE::config('mysql:host=localhost;dbname=winestore', 'root', 'root');

  class DATASTORE{

     protected static $_config = array();
     protected static $_pdo;
     protected $_select = array();
     protected $_table;
     protected $_join = array();
     protected $_where = array();
     protected $_group_by = array();
     protected $_having = array();
     protected $_asc;
     protected $_placeholder = array(); 

     /**
      * Config the connection string which is used by PDO
      */
     public static function config($connect_string, $username='root', $password=null){
         self::$_config['connect_string'] = $connect_string;
         self::$_config['username'] = $username;
         if( !is_null($password) )
            self::$_config['password'] = $password;
     }

     /** 
      * Create a new DATASTORE obj; Factory pattern
      */
     public static function create_table($table_name){
         self::$_pdo = new PDO( self::$_config['connect_string'], self::$_config['username'], self::$_config['password']);
         return new self($table_name);
     }

     public function __construct($table_name){
         $this->_table = $table_name;
     }

     public function select($column){
         array_push( $this->_select, $column );
         return $this;
     }

     public function where($column, $value){
         array_push( $this->_where, array( $column, '=', $value ) );
         return $this;
     }

     public function where_gte($column, $value){ 
         array_push( $this->_where, array( $column, '>=' , $value ) );
         return $this;
     }

     public function where_lte($column, $value){ 
         array_push( $this->_where, array( $column, '<=' , $value ) );
         return $this;
     }

     public function join($table_name, $constraint){
         array_push( $this->_join, array( $table_name, $constraint ) );
         return $this;
     }

     public function group_by($column){
         array_push( $this->_group_by, $column );
         return $this;
     }

     public function having($column, $operator, $value){
         array_push( $this->_having, $column, $operator, $value );
         return $this;
     }

     public function order_by_asc($column){ 
         $this->_asc = $column;
         return $this;
     }

     public function find_many($debug=False){
        $query = $this->_build_select();
        if ($debug == True ){
           print $query;
           print "<pre>";
           print_r( $this->_placeholder );
           print "</pre>";
        }
        $sth = self::$_pdo->prepare( $query );
        $sth->execute( $this->_placeholder ); 
        return $sth->fetchAll();
     }

     protected function _build_select_start(){
        if ( empty( $this->_select) ){
           return 'SELECT * FROM ' . $this->_table . " ";
        }

        $f = "SELECT ";
        foreach( $this->_select as $select ){
           $f .= $select . " ,"; 
        }
        $f = substr( $f, 0, -1 ) . "FROM " . $this->_table . " ";

        return $f;

     }

     protected function _build_where(){
        if ( empty($this->_where) )
          return '';

        $f = 'WHERE ';
        foreach( $this->_where as $w ){
           array_push( $this->_placeholder, $w[2]);
           $f .= $w[0] . $w[1] . ' ? ' . ' AND '; 
        }
        $f = substr($f, 0, -4) . " ";//cut off 'AND ' 
        return $f;
     }

     protected function _build_join(){
        if ( empty($this->_join) )
          return '';

        $f = '';
        foreach( $this->_join as $j ){ 
           $f .= 'INNER JOIN ' . $j[0] . ' ON ' . $j[1][0] . $j[1][1] . $j[1][2] . '  ';
        }
        return $f;
     }

     protected function _build_group_by(){
        if ( empty($this->_group_by) )
          return '';
        $f = ' GROUP BY ';
        foreach( $this->_group_by as $g ){
           $f .= $g . ' ?,';
        }
        $f = substr($f, 0, -2);
        return $f;
     }


     protected function _build_order_by(){
        if ( empty($this->_asc) )
          return '';
        return ' ORDER BY ' . $this->_asc . ' ASC '; 
     }


     protected function _build_having(){
        if ( empty($this->_having) )
          return '';
        array_push( $this->_placeholder, $this->_having[0], $this->_having[2] );
        return 'HAVING ? ' . $this->_having[1]  . ' ? '; 
     }


     protected function _build_select(){
        $query = $this->_build_select_start() . $this->_build_join() . $this->_build_where() .
                 $this->_build_group_by() . $this->_build_order_by() . $this->_build_having();
        return $query;
     }

  }

?>
