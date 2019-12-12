<?php 

    function createStudent($name,$email,$mark){
		$con = mysqli_connect('localhost','root','','studentdb');
		if (!$con) {
    	die("Connect fail!!!");
	}

	$query = "INSERT INTO student (name,email,mark) VALUES ('".$name."','".$email."',".$mark.")";
	$result = mysqli_query($con, $query);
	// var_dump($query);exit();
		if($result){
			return true;
		}
			return false;
	}

	function deleteStudent($id){
		$con = mysqli_connect('localhost','root','','studentdb');
		if (!$con) {
    	die("Connect fail!!!");
	}

	$query = "DELETE FROM student WHERE id =".$id." ";
	$result = mysqli_query($con, $query);

		if($result){
			return true;
		}
			return false;
}	

	function updateStudent($id,$name,$email,$mark){
		$con = mysqli_connect('localhost','root','','studentdb');
		if (!$con) {
    	die("Connect fail!!!");
	}

	$query = "UPDATE student SET name = '".$name."', email = '".$email."', mark = ".$mark." WHERE id = ".$id." ";
	$result = mysqli_query($con, $query);
	// var_dump($query);exit();
		if($result){
			return true;
		}
			return false;
	}
	
	function showByid($id){
		$con = mysqli_connect('localhost','root','','studentdb');
		if (!$con) {
    	die("Connect fail!!!");
		}
		$query = "SELECT * FROM student WHERE id = ".$id." ";
		// var_dump($query);
		if ($result = mysqli_query($con, $query )) {
				$row = mysqli_fetch_assoc($result);
				// var_dump($code);
				return $row;
				}
				
	}

 ?>