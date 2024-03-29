<?php include('../config.php'); ?>
<?php include(ROOT_PATH . '/admin/includes/admin_functions.php');

if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location:../login.php');
} ?>
<?php
// Get all admin users from DB
$admins = getAdminUsers();
$roles = ['Admin', 'parent', 'nanny'];

if (!empty($_GET['edit-admin'])) {
	$rr = $_GET['edit-admin'];
	$sql3 = "UPDATE `users` SET `role`='Admin' WHERE UserID ='$rr' ";

	$conn->query($sql3);
}
if (!empty($_GET['edit-parent'])) {
	$rr = $_GET['edit-parent'];
	$sql3 = "UPDATE `users` SET `role`='parent' WHERE UserID ='$rr' ";

	$conn->query($sql3);
}
if (!empty($_GET['edit-nanny'])) {
	$rr = $_GET['edit-nanny'];
	$sql3 = "UPDATE `users` SET `role`='nanny' WHERE UserID ='$rr' ";

	$conn->query($sql3);
}

if (!empty($_GET['delete-pos'])) {
	$rr = $_GET['delete-pos'];
	$sql3 = "DELETE FROM `users` WHERE UserID='$rr' ";

	$conn->query($sql3);
}

?>
<?php include(ROOT_PATH . '/admin/includes/head_section.php'); ?>
<title>Admin | Manage users</title>
<style media="screen">
	.ed {
		width: 25px;
		float: left;
	}

	.fl {
		width: 95px;
	}
</style>
</head>

<body>
	<!-- admin navbar -->
	<?php include(ROOT_PATH . '/admin/includes/navbar.php') ?>
	<div class="container content">
		<!-- Left side menu -->
		<?php include(ROOT_PATH . '/admin/includes/menu.php') ?>
		<!-- Middle form - to create and edit  -->
		<div class="action">
			<h1 class="page-title">Add |Edit User</h1>

			<form method="post" action="<?php echo BASE_URL . 'admin/users.php'; ?>">

				<!-- validation errors for the form -->
				<?php include(ROOT_PATH . '/includes/errors.php') ?>

				<!-- if editing user, the id is required to identify that user -->
				<?php if ($isEditingUser === true): ?>
				<input type="hidden" name="admin_id" value="<?php echo $admin_id; ?>">
				<?php endif ?>

				<input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
				<input type="email" name="email" value="<?php echo $email ?>" placeholder="Email">
				<input type="password" name="password" placeholder="Password">
				<input type="password" name="passwordConfirmation" placeholder="Password confirmation">
				<select name="role">
					<option value="" selected disabled>Assign role</option>
					<?php foreach ($roles as $key => $role): ?>
					<option value="<?php echo $role; ?>">
						<?php echo $role; ?>
					</option>
					<?php endforeach ?>
				</select>

				<!-- if editing user, display the update button instead of create button -->
				<?php if ($isEditingUser === true): ?>
				<button type="submit" class="btn" name="update_admin">UPDATE</button>
				<?php else: ?>
				<button type="submit" class="btn" name="create_admin">Save User</button>
				<?php endif ?>
			</form>
		</div>
		<!-- // Middle form - to create and edit -->

		<!-- Display records from DB-->
		<div class="table-div">
			<!-- Display notification message -->
			<?php include(ROOT_PATH . '/includes/messages.php') ?>

			<?php if (empty($admins)): ?>
			<h1>No admins in the database.</h1>
			<?php else: ?>
			<table class="table">
				<thead>
					<th>UserID</th>
					<th>UserName,UserEmail</th>
					<th>Role</th>
					<th colspan="2">Action</th>
				</thead>
				<tbody>
					<?php foreach ($admins as $key => $admin): ?>
					<tr>
						<td>
							<?php echo $key + 1; ?>
						</td>
						<td>
							<?php echo $admin['username']; ?>, &nbsp;
							<?php echo $admin['email']; ?>
						</td>
						<td>
							<?php echo $admin['role']; ?>
						</td>
						<td class="fl">
							<a class=" ed fa fa-pencil btn edit"
								href="users.php?edit-admin=<?php echo $admin['UserID']; ?>">A
							</a>
							<a class=" ed fa fa-pencil btn edit"
								href="users.php?edit-parent=<?php echo $admin['UserID']; ?>">P
							</a>
							<a class=" ed  fa fa-pencil btn edit"
								href="users.php?edit-nanny=<?php echo $admin['UserID']; ?>">N
							</a>
						</td>
						<td>
							<a class="fa fa-trash btn delete"
								href="users.php?delete-pos=<?php echo $admin['UserID']; ?>">

							</a>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
			<?php endif ?>
		</div>
		<!-- // Display records from DB -->
	</div>
</body>

</html>