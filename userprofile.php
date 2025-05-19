<?php include_once "parts/header.php"; ?>
<body>
<?php include_once "parts/preload.php"; ?>
<?php include_once "parts/login.php"; ?>
<?php include_once "parts/nav.php"; ?>
<?php include_once "DB/profile.php"; ?>

<div class="hero user-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1><?= htmlspecialchars($user['username']) ?>'s Profile</h1>
					<ul class="breadcumb">
						<li class="active"><a href="index.php">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span> Profile</li>
					</ul>
                    <?php if ($updateMessage): ?>
                        <p style="color:green;"><?= htmlspecialchars($updateMessage) ?></p>
                    <?php endif; ?>
                    <?php if ($passwordMessage): ?>
                        <p style="color:red;"><?= htmlspecialchars($passwordMessage) ?></p>
                    <?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="page-single">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-3 col-sm-12 col-xs-12">
				<div class="user-information">
					<div class="user-img">
						<a href="#"><img src="images/uploads/user-img.png" alt=""><br></a>
						<a href="#" class="redbtn">Change avatar</a>
					</div>
					<div class="user-fav">
						<p>Account Details</p>
						<ul>
							<li class="active"><a href="userprofile.php">Profile</a></li>
							<li><a href="userfavoritelist.html">Favorite movies</a></li>
							<li><a href="userrate.html">Rated movies</a></li>
						</ul>
					</div>
					<div class="user-fav">
						<p>Others</p>
						<ul>
							<li><a href="#">Change password</a></li>
							<li><a href="db/logout.php">Log out</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-9 col-sm-12 col-xs-12">
				<div class="form-style-1 user-pro">
					<form method="POST" class="user">
						<h4>01. Profile details</h4>
						<div class="row">
							<div class="col-md-6 form-it">
								<label>Username</label>
								<input type="text" name="username" value="<?= htmlspecialchars($user['username']) ?>">
							</div>
							<div class="col-md-6 form-it">
								<label>Email Address</label>
								<input type="text" name="email" value="<?= htmlspecialchars($user['email']) ?>">
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 form-it">
								<label>First Name</label>
								<input type="text" name="first_name" value="<?= htmlspecialchars($user['first_name'] ?? '') ?>">
							</div>
							<div class="col-md-6 form-it">
								<label>Last Name</label>
								<input type="text" name="last_name" value="<?= htmlspecialchars($user['last_name'] ?? '') ?>">
							</div>
						</div>
						<div class="row">
							<div class="col-md-2">
								<input class="submit" type="submit" name="save_profile" value="Save">
							</div>
						</div>	
					</form>

					<form method="POST" class="password">
						<h4>02. Change password</h4>
						<div class="row">
							<div class="col-md-6 form-it">
								<label>Old Password</label>
								<input type="password" name="old_password" placeholder="**********">
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 form-it">
								<label>New Password</label>
								<input type="password" name="new_password" placeholder="***************">
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 form-it">
								<label>Confirm New Password</label>
								<input type="password" name="confirm_password" placeholder="***************">
							</div>
						</div>
						<div class="row">
							<div class="col-md-2">
								<input class="submit" type="submit" name="change_password" value="Change">
							</div>
						</div>	
					</form>
				</div>
			</div>

		</div>
	</div>
</div>

<?php include_once "parts/footer.php"; ?>

<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/plugins2.js"></script>
<script src="js/custom.js"></script>
</body>
</html>