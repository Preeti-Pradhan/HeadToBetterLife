<?php

	$server="localhost";
	$username="root";
	$password="";
	$database="headtobetterlife";

	$con=mysqli_connect($server,$username,$password,$database);

	if(!$con)
		{
			die("coonection to this databse failed due to".mysql_connect_error());
		}

	if(isset($_POST['login']) && $_POST['login'] =='Login' ){

		$email=$_POST["email"];
		$password=$_POST["pass"];

		// table name - > userAccount
		$sql = "SELECT * FROM `useraccount`WHERE (`email`='$email' and `password`='$password')";
        $query = mysqli_query($con,$sql);
	    $rowcount=mysqli_num_rows($query);
		if($rowcount){
			//header('location:../index.html');
		}
		else
		{
            //echo "<script>alert('Incorrect Username or Password.')</script>";
            header('location:../login.html');
			//echo "Error: $sql <br> $con->error";
		}
	}
?>