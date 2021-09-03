<?php
$conn = mysqli_connect("localhost", "root", "", "nanny");


	
	if(isset($_GET['userNo'])){
		$Status=$_GET['userNo'];
		
		
		$update = "UPDATE `nanny_profile` SET `Status`= 'booked' WHERE  `userNo` = '$Status'";
	    $query = mysqli_query($conn,$update);
	if($query){
         echo "<script>alert('Nanny has been booked')</script>";
	}else{
		echo"<script>alert('Unknown error has occured')</script>";
	}
	}	
	?>
 
