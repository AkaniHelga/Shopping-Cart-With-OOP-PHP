<?php

class CreateDb{
	// properties
	public $servername;
	public $username;
	public $password;
	public $database;
	public $tablename;
	public $con;

	// constructor
	public function __construct($servername="localhost", $username="root", $password="", $database="heri", $tablename="product"){
		
		$this->servername = $servername;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
		$this->tablename = $tablename;

		// create connection, pass 3 parameters: servername, username, password
		$this->con = mysqli_connect($servername,$username,$password);

		// check connection
		// if (!$this->con) {
		// 	die("Connection failed". mysqli_connect_error());
		// }
		// 	echo "Connected successfully";

		// create new database
		// $sql = "CREATE DATABASE IF NOT EXISTS $database";

		// execute database query
		// if (mysqli_query($this->con,$sql )) {
		// 	echo("Database created successfully");
		// } else{
		// 	echo "Error creating database!" . mysqli_error();
		// }


		// create  table
		// $sql = "CREATE TABLE IF NOT EXISTS product (
		// id INT(20) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
		// name VARCHAR(50) NOT NULL,
		// price FLOAT,
		// img VARCHAR(100)
		// )";

		//pass 4 parameters:add dbname
		$this->con = mysqli_connect($servername,$username,$password,$database);

		//execute table query
		// if (mysqli_query($this->con, $sql)) {
		// 	echo "Table created successfully";
		// } else{
		// 	echo "Error creating table".mysql_error($this->con);
		// }

	}

		public function getData(){
			$sql = "SELECT * FROM " . $this->tablename;
			$result = mysqli_query($this->con, $sql);

			if (mysqli_num_rows($result)> 0){
				return $result;
			}
		}
}

	$db = new CreateDb(); //instantiate the class
// echo $db->getData();


?>