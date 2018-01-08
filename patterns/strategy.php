<?php
	interface IStrategy{
		function filter($record);
	}
	
	class findAfterStrategy implements IStrategy{
		private $_name;
		
		public function __construct($name){
			$this->_name = $name;
		}
		
		public function filter($record){
			return strcmp($this->_name, $record ) <= 0;
		}
	}
	
	class randomStrategy implements IStrategy{
		public function filter($record){
			return rand(0, 1) >= 0.5;
		}
	}
	
	class UserList{
		
		private $_list = array();
		
		public function __construct($names){
			if($name != null){
				foreach($names != null){
					$this->_list []= $names;
				}
			}
		}
		
		public function add($name){
			$this->_list []= $name;
		}
		
		public function find($filter){
			$recs = array();
			
			foreach($this->_list as $user){
				if($filter->filter($user)){
					$recs []= $user;
				}
			}
			return $recs;
		}
	}
	
	$ul = new UserList(array("Josh", "Olaf", "Laura", "Norman"));
	$f1 = $ul->find( new FindAfterStrategy("Olaf"));
	print_r($f1);
	
	$f2 = $ul->find(new RandomStrategy());
	print_r($f2);
?>
