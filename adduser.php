<?php
	$Name=$_POST['name'];
	$Email=$_POST['email'];
	$Pass=$_POST['pass'];
	$CPass=$_POST['cpass'];
	$conn=mysqli_connect('localhost','root','');
	
	if($conn)
	{
		$db=mysqli_select_db($conn,'ioregister');
		if($Pswd==$CPswd)
		{
			$query="INSERT INTO user(Name,Email_id,Password) VALUES('$Name','$Email','$Pass')";
			$sql=mysqli_query($conn,$query);
			header('location:index.html');
		}
		/*if(!empty($sql))
		{
			header('location:index.html');
		}
		else
		{
			echo "Error";
		}*/
	}
	else
	{
		echo "Database not connected!!!";
	}
?>