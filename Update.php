<?php
	include 'config.php';
	//$tes=new mysqli("localhost","root","","task");
	$id=$_GET['id'];
	$query="SELECT * FROM `name` WHERE id='$id'";
	$data=mysqli_query($con,$query);
	$row=mysqli_fetch_assoc($data);
?>

<?php 
	
	if(isset($_POST['save']))
	{
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$contact=$_POST['contact'];
		$contry=$_POST['contry'];
		$state=$_POST['state'];
		$city=$_POST['city'];
		$address=$_POST['address'];
		$gender=$_POST['gender'];
		$sql="UPDATE `name` SET `fname`='$fname',`lname`='$lname',`email`='$email',`mobile`='$contact',`contry`='$contry',`state`='$state',`city`='$city',`address`='$address',`gender`='$gender' WHERE id='$id'";
		$task=mysqli_query($con,$sql);
		if($task)
		{
			?>
			<script>
				alert(" update in successfuly!!");
			</script>
			<?php
			header('location:display.php');
		}
		else
		{
			echo "plase try again";
		}
	}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<div class="container">
<form action="" method="POST">
  <div class="mb-3">
    <label for="fname" class="form-label">fname</label>
    <input type="text" value="<?php echo $row['fname']?>" class="form-control" id="fname" name="fname">
  </div>
  <div class="mb-3">
    <label for="lname" class="form-label">lname</label>
    <input type="lname" value="<?php echo $row['lname']?>" class="form-control" id="lname" name="lname">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">email</label>
    <input type="email" value="<?php echo $row['email']?>" class="form-control" id="email" name="email">
  </div>
  <div class="mb-3">
    <label for="mobile" class="form-label">mobile</label>
    <input type="number" value="<?php echo $row['mobile']?>" class="form-control" id="contact" name="contact">
  </div>
  <div class="mb-3">
	Contry:<div >
				<select class="w-100" value="<?php echo $row['contry']?>"name="contry" >
					<option>india</option>
				</select>
			</div>
	state:<div >
				<select class="w-100" value="<?php echo $row['state']?>" name="state">
					<option>gujrat</option>
				</select>
			</div>
	city:<div >
				<select class="w-100" value="<?php echo $row['city']?>" name="city">
					<option>morbi</option>
				</select>
		</div>
  <div>
  <div class="mb-3" >
	<textarea name="address">
	</textarea>
  </div>
  <div class="mb-3">
	<input type="radio" value="male" name="gender" >male
	<input type="radio" value="female" name="gender">female
	<input type="radio" value="other" name="gender">other
  </div>
  <button type="submit" name="save" class="btn btn-primary">Submit</button>
</form>
</div>
