<?php 
session_start();
require_once "DB/profile.php"; ?>
<?php include_once "parts/header.php"; ?>
<body>
<?php include_once "parts/preload.php"; ?>
<?php include_once "parts/login.php"; ?>
<?php include_once "parts/nav.php"; ?>


<div class="hero user-hero">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="hero-ct">
          <h1><?= htmlspecialchars($user['username']) ?>’s Profile</h1>
          <ul class="breadcumb">
            <li class="active"><a href="index.php">Home</a></li>
            <li><span class="ion-ios-arrow-right"></span> Profile</li>
          </ul>
          <?php if ($updateMessage): ?>
            <p class="text-success"><?= htmlspecialchars($updateMessage) ?></p>
          <?php endif; ?>
          <?php if ($passwordMessage): ?>
            <p class="text-danger"><?= htmlspecialchars($passwordMessage) ?></p>
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
  				    <img src="<?= htmlspecialchars($avatarPath) ?>" alt="Avatar">
				<!-- Avatar Upload Form -->
  				<form method="POST" action="userprofile.php" enctype="multipart/form-data" id="avatarForm">
					<input type="hidden" name="upload_avatar" value="1"/>
    				<input type="file" name="avatar" id="avatarInput" accept="image/*" style="display:none;" onchange="document.getElementById('avatarForm').submit()"/>
    				<label for="avatarInput" class="redbtn">Change avatar</label>
  				</form>
			</div>
          <div class="user-fav">
            <p>Account Details</p>
            <ul>
              <li class="active"><a href="userprofile.php">Profile</a></li>
              <li><a href="userfavoritegrid.php">Favorite movies</a></li>
              <li><a href="userrate.php">Rated movies</a></li>
            </ul>
          </div>
          <div class="user-fav">
            <p>Others</p>
            <ul>
              <li><a href="#changePasswordForm">Change password</a></li>
              <li><a href="db/logout.php">Log out</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-md-9 col-sm-12 col-xs-12">
        <div class="form-style-1 user-pro">
          <!-- Profile Form -->
          <form method="POST" class="user">
            <h4>01. Profile details</h4>
            <div class="row">
              <div class="col-md-6 form-it">
                <label>Username</label>
                <input type="text" name="username" value="<?= htmlspecialchars($user['username']) ?>" required>
              </div>
              <div class="col-md-6 form-it">
                <label>Email Address</label>
                <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <input class="submit" type="submit" name="save_profile" value="Save">
              </div>
            </div>
          </form>

          <!-- Password Change Form -->
          <form id="changePasswordForm" method="POST" class="password">
            <h4>02. Change password</h4>
            <div class="row">
              <div class="col-md-6 form-it">
                <label>Old Password</label>
                <input type="password" name="old_password" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-it">
                <label>New Password</label>
                <input type="password" name="new_password" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-it">
                <label>Confirm New Password</label>
                <input type="password" name="confirm_password" required>
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