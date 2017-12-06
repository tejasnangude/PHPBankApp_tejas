<?php
	include 'accounts.class.php';
	class SavingsAcc extends Accounts{
		public $accno;
		public $acbal;
		function __construct($accno,$acbal){
			parent::__construct($accno,$acbal);
		}
		public function getAccno(){
			return $this->accno;
		}
		
		public function getAccbal(){
			return $this->acbal;
		}
		
		/*private function deposit(){
			
		}*/
	}
?>