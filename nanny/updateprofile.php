<!-- // this code is used to get the details of a user from the db. -->
<!DOCTYPE html>
<html>
<head>
	<title>Update Profile</title>
</head>
<body>
<?php include('navbar.php') ;?>
<div class="container content">

<?php include('menu.php') ?>

<center><h1>User Profile<h1></center>
	<table class="table">
						<thead>
						<th>userNo</th>
						<th>name</th>
						<th>email</th>
						<th>phone_no</th>
						<th>gender</th>
                        <th>address</th>
                        <th>nationality</th>
                        <th>qualification</th>
                        <th>dob</th>
                        <th>requirements</th>
</thead>
<tbody>
<?php
    $user_id = $_SESSION['user_nanny']['UserID'];
	$sql3 = "SELECT * FROM nanny_profile WHERE userNo = '$user_id' ";
	$result3 = $conn->query($sql3);
	if ($result3) {
		 while($rec = $result3->fetch_assoc()) {
			 
				 $userNo= $rec['userNo'];
				 $name=$rec['name'];
				 $email=$rec['email'];
				 $phone_no=$rec['phone_no'];
				 $address=$rec['gender'];
                 $gender=$rec['address'];
                 $nationality=$rec['nationality'];
                 $qualification=$rec['qualification'];
                 $dob=$rec['dob'];
                 $requirements=$rec['requirements'];
		echo "
				 <tr>
				 <td>$userNo</td>
				 <td>$name</td>
				 <td>$email</td>
				 <td>$phone_no</td>
				 <td>$gender</td>
                 <td>$address</td>
                 <td>$nationality</td>
                 <td>$qualification</td>
                 <td>$dob</td>
                 <td>$requirements</td>

			 </tr>

				 ";
			}

		}
		else{
			echo $conn->error;
		}

		?>
		
	</tbody>	
</table>
</div>


</body>
</html>