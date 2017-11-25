<?php
  require_once("DB.php");
  
  class DatabaseConnect{
	  public static function get(){
		  static $db = null;
		  if($db == null){
			  $db = new DatabaseConnect();
		  }
		  return $db;
	  }
	  
	  private $_handle = null;
	  
	  private function __construct(){
		  $dsn = 'mysql://root:supersecretpassword@localhost/photos';
		  $this->_handle =& DB::Connect($dsn, array());
	  }
	  
	  public function handle(){
		  return $this->_handle;
	  }
  }
  
  print("Handling = ". DatabaseConnect::get()->handle()."\n");
  print("Handling = ". DatabaseConnect::get()->handle()."\n");
  
?>