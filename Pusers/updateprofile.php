<?php  include('../config.php'); ?>
<?php  include('../Pusers/includes/user_function.php'); 
     if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location:../login.php');
	}?>
<!-- // this code is used to get the details of a user from the db. -->
<!DOCTYPE html>
<html>
<head>
	<title>View feedback</title>
</head>
<body>
<?php include('includes/navbar.php') ;?>
<div class="container content">

<?php include('includes/menu.php') ?>

<center><h1>User Profile<h1></center>
	<table class="table">
						<thead>
						<th>userNo</th>
						<th>child_name</th>
						<th>email</th>
						<th>phone_no</th>
						<th>address</th>
                        <th>gender</th>
                        <th>nanny_type</th>
                        <th>requirements</th>
</thead>
<tbody>
<?php
    $user_id = $_SESSION['user']['UserID'];
	$sql3 = "SELECT * FROM parent WHERE userNo = '$user_id' ";
	$result3 = $conn->query($sql3);
	if ($result3) {
		 while($rec = $result3->fetch_assoc()) {
			 
				 $userNo= $rec['userNo'];
				 $child_name=$rec['child_name'];
				 $email=$rec['email'];
				 $phone_no=$rec['phone_no'];
				 $address=$rec['address'];
                 $gender=$rec['gender'];
                 $nanny_type=$rec['nanny_type'];
                 $requirements=$rec['requirements'];
		echo "
				 <tr>
				 <td>$userNo</td>
				 <td>$child_name</td>
				 <td>$email</td>
				 <td>$phone_no</td>
				 <td>$address</td>
                 <td>$gender</td>
                 <td>$nanny_type</td>
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