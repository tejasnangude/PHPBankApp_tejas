<?php
	
	abstract class Accounts{
		protected $accno;
		protected $acbal;
		
		function __construct($accno,$acbal){
			$this->accno=$accno;
			$this->acbal=$acbal;
		}
		abstract protected function getAccno($accno);
		
		abstract protected function getAccbal($acbal);
	}
?>
