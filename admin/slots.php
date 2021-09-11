<?php  include('../config.php'); ?>
<?php  include(ROOT_PATH . '/admin/includes/admin_functions.php');

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location:../login.php');
	} ?>
<?php include(ROOT_PATH . '/admin/includes/head_section.php'); ?>

<!-- Get all admin posts from DB -->

	<title>Admin | View Nannies</title>
	<style media="screen">
		.ed{
			width: 30px;
			float: left;
		}
		.fl{
			width: 100px;
		}
	</style>
</head>
<body>
	<!-- admin navbar -->
	<?php include(ROOT_PATH . '/admin/includes/navbar.php') ?>

	<div class="container content">
		<!-- Left side menu -->
		
		

		<!-- Display records from DB-->
		<div class="table-div"  style="width: 100%;">
			<!-- Display notification message -->
			<?php include(ROOT_PATH . '/includes/messages.php') ?>

			<?php
			if (!empty($_GET['edit-pos'])) {
				$rr = $_GET['edit-pos'];
			$sql3 = "UPDATE `nanny_profile` SET `Status`='free' WHERE userNo ='$rr' ";

			$conn->query($sql3);
			}
			if (!empty($_GET['free-pos'])) {
				$rr = $_GET['free-pos'];
			$sql3 = "UPDATE `nanny_profile` SET `Status`='booked' WHERE userNo ='$rr' ";

			$conn->query($sql3);
			}


				if (!empty($_GET['delete-pos'])) {
					$rr = $_GET['delete-pos'];
				$sql3 = "DELETE FROM `nanny_profile` WHERE userNo='$rr' ";

				$conn->query($sql3);
				}


				
	    $conn = mysqli_connect("localhost", "root", "", "nanny");
		
	    $sql4 = "SELECT * FROM nanny_profile  ";
	;
	
	$result = $conn->query($sql4);
	if ( $result) {
		 while($rec = $result->fetch_assoc() ) {
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
			?>
		
	
		<table class="table" style="width: 50%;">
						<thead>
						<th>UserNo</th>
						<th>Name</th>
						<th>Email</th>
						<th>Phone_no</th>
						<th>Gender</th>
                        <th>Address</th>
                        <th>Nationality</th>
						<th>Qualification</th>
						<th>Dob</th>
                        <th>Requirements</th>
						<th>Status</th>
						
</thead>
		<tr>
				 <td><?php echo$userNo?></td>
				 <td><?php echo$name?></td>
				 <td><?php echo$email?></td>
				 <td><?php echo$phone_no?></td>
				 <td><?php echo$gender?></td>
                 <td><?php echo$address?></td>
                 <td><?php echo$nationality?></td>
				 <td><?php echo$qualification?></td>
				 <td><?php echo$dob?></td>
                 <td><?php echo$requirements?></td>
				 <td><?php echo$Status?></td>
                
			 </tr>
			 	
		 <?php
		}
		
		}

		 ?>
			


								<td class="fl">
								<a class=" ed fa fa-pencil btn edit"
									href="slots.php?free-pos=<?php echo $userNo; ?>">B
								</a>
								<a class=" ed fa fa-pencil btn edit"
									href="slots.php?edit-pos=<?php echo $userNo; ?>">F
								</a>
							</td>


							<td>
								<a  class="fa fa-trash btn delete"
									href="slots.php?delete-pos=<?php echo $userNo;?>">DELETE

								</a>
							</td>
						</tr>
					
					</tbody>
					
				</table>
				<div class="text-center">
    <button onclick ="window.print();" class="btn btn-primary" id="print-btn">Print</a>
</div>
<style>
		 table,th, td { border-collapse: collapse; width: 70%; margin: 20px auto;
 text-align: center; padding: 8px; text-align: left; border: 2px solid black; } 
	     </style>

			
		</div>
		<!-- // Display records from DB -->
	</div>
</body>
</html>
