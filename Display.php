

<a href="home.php" class="btn btn-info" align="right"><h3>add usar</h3></a>

<div class="container">

<h1 class="mt-5">Display</h1>

<table border="2px" class="table font-monospace bg-dark text-info">

<tr> 			 <th>s.no:</th>

				 <th>fname:</th>

				 <th>lname:</th>

				 <th>email:</th>

				 <th>mobile:</th>

				 <th>contry:</th>

				 <th>state:</th>

				 <th>city:</th>

				 <th>address:</th>

				 <th>gender:</th>

				 <th colspan="2">action:</th>

</tr>

	<?php

		include "config.php";

		$no=1;

		$sql="SELECT * FROM `name`";

		$result=mysqli_query($con,$sql);

		while($row=mysqli_fetch_assoc($result))

		{

	?>

		<tr>	

				<td><?php echo $no;$no++; ?></td>

				 <td><?php echo $row['fname']; ?></td>

				 <td><?php echo $row['lname']; ?></td>

				 <td><?php echo $row['email']; ?></td>

				 <td><?php echo $row['mobile']; ?></td>

				 <td><?php echo $row['contry']; ?></td>

				 <td><?php echo $row['state']; ?></td>

				 <td><?php echo $row['city']; ?></td>

				 <td><?php echo $row['address']; ?></td>

				 <td><?php echo $row['gender']; ?></td>

				 <td><button class="btn btn-info"><a href="update.php? id=<?php echo $row['id'];?>">update</a></button>

				 <td><button class="btn btn-info"><a href="delete.php? id=<?php echo $row['id']; ?>">delete</a></button>

		</tr>

	<?php		

		}

	?>

</table>

</div>
