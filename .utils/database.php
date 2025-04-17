<?php

	class Database{
		private $DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME, $CONN;
		public __construct($host, $user, $pass, $name){
			$this->DATABASE_HOST = $host;
			$this->DATABASE_USER = $user;
			$this->DATABASE_PASS = $pass;
			$this->DATABASE_NAME = $name;
		}
		public connect(&$conn){
			$conn = mysqli_connect(
				$DATABASE_HOST,
				$DATABASE_USER,
				$DATABASE_PASS, 
				$DATABASE_NAME
			);
			$this->CONN = $conn;
		}
		public executeQuery($sql_command){
			return mysqli_query($this->CONN, $sql_command);
		}
		public checkConnection(){
			$conn = mysqli_connect(
				$DATABASE_HOST,
				$DATABASE_USER,
				$DATABASE_PASS, 
				$DATABASE_NAME
			);
			if($conn) {
				return true;
			} else {
				return false;
			}
		}
	}
?>