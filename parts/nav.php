
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<header class="ht-header">
	<div class="container">
		<nav class="navbar navbar-default navbar-custom">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header logo">
				    <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					    <span class="sr-only">Toggle navigation</span>
					    <div id="nav-icon1">
							<span></span>
							<span></span>
							<span></span>
						</div>
				    </div>
				    <a href="index.php"><img class="logo" src="images/logo2.png" alt="" width="119" height="58"></a>
			    </div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav flex-child-menu menu-left">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li><a href="index.php">Home</a></li>
						<li><a href="moviegrid.php">Movies</a></li>
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
							community <i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu level1">
								<li><a href="userfavoritegrid.php">user favorite grid</a></li>
								<li class="it-last"><a href="userrate.php">user rate</a></li>
							</ul>
						</li>
						<?php if (isset($_SESSION['user']['username']) && $_SESSION['user']['username'] === 'Admin'): ?>
    					<li><a href="showtimes.php">Manage Showtimes</a></li>
						<?php endif; ?>
					</ul>
					<ul class="nav navbar-nav flex-child-menu menu-right">
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
							pages <i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu level1">
								<li><a href="landing.php">Landing</a></li>
								<li><a href="404.php">404 Page</a></li>
								<li class="it-last"><a href="comingsoon.php">Coming soon</a></li>
							</ul>
						</li>                
						<li><a href="#">Help</a></li>

    				<?php if (isset($_SESSION['user'])): ?>
        				<li><a href="userprofile.php">Hello, <?= htmlspecialchars($_SESSION['user']['username']) ?></a></li>
        				<li class="btn logoutLink"><a href="db/logout.php">Logout</a></li>
    				<?php else: ?>
        				<li class="loginLink"><a href="#">LOG In</a></li>
        				<li class="btn signupLink"><a href="#">sign up</a></li>
    				<?php endif; ?>

					</ul>
				</div>
			<!-- /.navbar-collapse -->
	    </nav>
	    
	    <!-- top search form -->
	    <div class="top-search">
	    	<select>
				<option value="united">TV show</option>
				<option value="saab">Others</option>
			</select>
			<input type="text" placeholder="Search for a movie, TV Show or celebrity that you are looking for">
	    </div>
	</div>
</header>