<?php

 include 'config.php';

 $id=$_GET['id'];

 $sql="DELETE FROM `name` WHERE id='$id'";

 $result=mysqli_query($con,$sql);

 if($result){

		header ('location:display.php');

	}

	else

	{

		echo 'error';

	}

?>
