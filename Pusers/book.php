<?php
$conn = mysqli_connect("localhost", "root", "", "nanny");


	
	if(isset($_GET['book'])){
		$Status=$_GET['book'];
		
		
		$update = "UPDATE `nanny_profile` SET `Status`= 'booked' WHERE  `userNo` = '$Status'";
	    $query = mysqli_query($conn,$update);
	if($query){
         echo "<script>
		 alert('Nanny has been booked')
		 window.location.href='viewbookings.php';
		 </script>";
	}else{
		echo"<script>alert('Unknown error has occured')</script>";
	}
	}	
	?>
 
