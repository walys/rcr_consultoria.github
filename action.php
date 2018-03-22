<?php

include "db.php";

class DataOperacao extends Database
{
	public function insert_record($table,$fileds){
		//"INSERT INTO users(,) VALUES ('','')";
		$sql = ""; 
		$sql .= "INSERT INTO ".$table;
		$sql .= " (".implode(",", array_keys($fileds)).") VALUES ";
		$sql .= "('".implode("','", array_values($fileds))."')";
		$query = mysqli_query($this->con,$sql);
		if($query){
			return true;
		}
		
	}

	public function fetch_record($table){

		$sql = "SELECT * FROM ".$table;
    	$array = array();
		$query = mysqli_query($this->con, $sql);
		while($row  = mysqli_fetch_assoc($query)){
			$array[] = $row;
		
		}
		return $array;
	}

	public function select_record($table,$where){
		$sql = "";
		$condition = "";
		foreach ($where as $key => $value) {
			$condition .= $key . "='". $value . "' AND "; 
		}
		$condition = substr($condition, 0, -5);
		$sql .= "SELECT * FROM ".$table." WHERE ".$condition;
		$query = mysqli_query($this->con,$sql);
		$row = mysqli_fetch_array($query);
		return $row;
	}

	public function update_record($table, $where, $fields){
		$sql = "";
		$condition = "";
		foreach ($where as $key => $value) {
			# code...
			$condition .= $key . "='" . "' AND ";
		}
		$condition = substr($condition, 0, -5);
		foreach ($fields as $key => $value) {
			# code...
			$sql .= $key . "='" . $value ."',";  
		}
		$sql = substr($sql, 0, -2);
		$sql .= "UPDATE ".$table." SET ".$sql." WHERE ". $condition;
		if(mysqli_query($this->con,$sql)){
			return true;
		}	
	}

	public function delete_record($table, $where){
		$sql = "";
		$condition = "";
		foreach ($where as $key => $value) {
			# code...
			$condition .= $key . "='" . $value . "' AND";
		}
		$condition = substr($condition, 0, -5);
		$sql = "DELETE * FROM ".$table." WHERE ".$condition;
		if (mysqli_query($this->con,$sql)) {
			# code...
			return true;
		}
	}
}

$obj = new DataOperacao;

if(isset($_POST["submit"])){
	$myArray = array(
		"nome" => $_POST["nome"], 
		"email" => $_POST["email"]
	);

	if($obj->insert_record("users",$myArray)){
		header("location:index.php");
	}	
}

if(isset($_POST["edit"])){
	$id = $_POST["id"];
	$where = array("id"=>$id);
    $myArray = array(
		"nome" => $_POST["nome"], 
		"email" => $_POST["email"]
	);

	if($obj = update_record("users", $where, $myArray)){
		header("location:index.php?msg=Editado com  Successo");
	}
	
}

if(isset($_GET["delete"])){
	$id = $_GET['id'] ?? null;
	$where = array("id"=>$id);
	if($obj->delete_record("users", $where, $myArray)){
        header("location:index.php?msg=Deletado com Sucesso");
	}
	
}
?>