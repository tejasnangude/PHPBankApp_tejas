<?php
	class Customer{
		private $custfname;
		private $custlname;
		private $username;
		private $password;
		private $aadharno;
		private $panno;
		
		function __construct($custfname,$custlname,$aadharno,$panno,$username,$password){
			$this->custfname=$custfname;
			$this->custlname=$custlname;
			$this->aadharno=$aadharno;
			$this->panno=$panno;
			$this->username=$username;
			$this->password=$password;
		}
		
		function getCustFname(){
			return $this->custfname;
		}
		
		function getCustLname(){
			return $this->custlname;
		}
		
		function getUsername(){
			return $this->username;
		}
		
		function getPassword(){
			return $this->password;
		}
		
		function getAadharno(){
			return $this->aadharno;
		}
		
		function getPanno(){
			return $this->panno;
		}
	}
?>