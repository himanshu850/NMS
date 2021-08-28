<?php
	include('../function.php');
	
	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location:../login.php');
	}
 ?>

<?php include('includes/head_section.php'); ?>
	<title>Nanny Bookings</title>
</head>
<body>
<!-- User navbar -->
<?php error_reporting( error_reporting() & ~E_NOTICE ); ?>
	<?php include( 'includes/navbar.php') ?>
	<div class="container content" >
		<!-- Left side menu -->
		<?php include('includes/menu.php') ?>
		<?php
			$conn = mysqli_connect("localhost", "root", "", "nanny");
	
		?>
	<table class="table" style="width: 50%;">
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
						<th>Book</th>
						<th>Status</th>
</thead>
<tbody>
<?php
 
	$sql3 = "SELECT * FROM nanny_profile WHERE Status = 'free' ";
	$result3 = $conn->query($sql3);
	if ($result3) {
		 while($rec = $result3->fetch_assoc()) {
			 
				 $userNo= $rec['userNo'];
				 $name=$rec['name'];
				 $email=$rec['email'];
				 $phone_no=$rec['phone_no'];
				 $gender=$rec['gender'];
                 $address=$rec['address'];
                 $nationality=$rec['nationality'];
				 $qualification=$rec['qualification'];
				 $dob=$rec['dob'];
                 $requirements=$rec['requirements'];
				 $Status=$rec['Status'];
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
				 <td>$Status</td>
                 <td><button type='submit' class='btn' name='login_btn'>BOOK</button></td>
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

		
	
	</div>
</body>
</html>
