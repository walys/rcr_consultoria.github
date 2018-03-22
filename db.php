<?php

class Database {
	public $con;
	
	public function __construct()
	{

		$this->con = mysqli_connect("localhost", "root", "", "rcr_projeto"); 

	}
}
?>