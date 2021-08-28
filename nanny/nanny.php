
<?php require_once 'function.php' ?>  
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Meta tag Keywords -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="keywords" content="Intrend Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
  Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <!--// Meta tag Keywords -->
<title>Nanny| Dashboard</title>
</head>
<body>
<?php require 'navbar.php' ;?>
    <div class="container content" style="width: 100%;padding: 40px">
		<!-- Left side menu -->
		  <?php include(ROOT_PATH . '../nanny/menu.php') ?>
    
<div class="action">
			<h1 class="page-title">Nanny Profile</h1>
		<?php
		$conn = mysqli_connect("localhost", "root", "", "nanny");
		$idd = $_SESSION['user_nanny']['UserID'];
		// $sql4 = "SELECT * FROM bookings JOIN parking_slot  Ps ON bookings.slot= Ps.SlotID WHERE useri=$idd";
		//np JOIN upload ON upload.image = np.userNo
		$sql3 = "SELECT * FROM nanny_profile WHERE userNo='$idd'";
		$result3 = $conn->query($sql3);
		if($rec = $result3->num_rows==0): ?>
			<form method="post" action="profile.php" >

	            <input type="file" name="image" value="" placeholder="Upload Your Image">
				<input type="number"   style="width: 93%;padding: 12px;"name="userNo" value="<?php if(!empty($_SESSION['user_nanny'])){echo $_SESSION['user_nanny']['UserID'];} ?>" placeholder="User ID">
				<input type="text" name="name"  placeholder="Full Name" value="<?php if(!empty($_SESSION['user_nanny'])){echo $_SESSION['user_nanny']['username'];} ?>" >
				<input type="text" name="email" value="" placeholder="Email address">
				<input type="text" name="phone_no" value="" placeholder="Phone Number">
                <select class="gender"  name="gender">
			        <option value="" selected disabled>Gender</option>
			        <option value="Male">Male</option>
			        <option value="Female">Female</option>
	            </select>
				<input type="Address"  style="width: 93%;padding: 12px;" name="address" value="" placeholder="Address">
				<input type="text" name="nationality" value="" placeholder="Nationality">
                <input type="text" name="qualification" value="" placeholder="qualification">
                <input type="date" name="dob" style="width: 93%;padding: 12px;" value="" placeholder="dob">
				<input type="text" name="requirements" value="" placeholder="Your requirements">		
                
				<button type="submit" class="btn" name="create_btn">SUBMIT</button>

			</form>
			<?php else: ?>
				<h1>Your Information Has Been Successfully Saved.</h1>
					<?php endif ?>
		</div>
  </div>
</body>