<?php
session_start();
include_once "parts/header.php";
include_once "db/movieportfolio.php";
$isAdmin = isset($_SESSION['user_id']) && $_SESSION['user_id'] == 1;
?>
<body>
<?php include_once "parts/preload.php";?>
<?php include_once "parts/login.php";?>
<?php include_once "parts/nav.php";?>

<div class="hero common-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1> movie list</h1>
					<ul class="breadcumb">
						<li class="active"><a href="#">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span> movie list</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-single">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="topbar-filter">
					 <p>Found <span><?= $totalMovies ?></span> in total</p> 
					<a  href="moviegrid.html" class="grid"><i class="ion-grid active"></i></a>
				</div>
				<div class="flex-wrap-movielist">
  					<?php foreach ($movies as $movie): ?>
    				<div class="movie-item-style-2 movie-item-style-1">
        				<img src="<?= htmlspecialchars($movie['image']) ?>" alt="">
        				<div class="hvr-inner">
            				<a href="moviesingle.php?id=<?= $movie['id'] ?>">Read more <i class="ion-android-arrow-dropright"></i></a>
        				</div>
        				<div class="mv-item-infor">
            				<h6><a href="moviesingle.php?id=<?= $movie['id'] ?>"><?= htmlspecialchars($movie['title']) ?></a></h6>
            				<p class="rate"><i class="ion-android-star"></i><span><?= htmlspecialchars($movie['rating']) ?></span> /10</p>
        				</div>
    				</div>
  					<?php endforeach; ?>
				</div>		
				<div class="topbar-filter">
					
					<div class="pagination2">
  						<span>Page <?= $page ?> of <?= $totalPages ?>:</span>
  						<?php for ($i = 1; $i <= $totalPages; $i++): ?>
    						<a href="?page=<?= $i ?>" class="<?= $i === $page ? 'active' : '' ?>"><?= $i ?></a>
  						<?php endfor; ?>
  						<?php if ($page < $totalPages): ?>
    						<a href="?page=<?= $page + 1 ?>"><i class="ion-arrow-right-b"></i></a>
  						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="sidebar">
					<div class="searh-form">
						<h4 class="sb-title">Search for movie</h4>
						<!-- add new movie button for admin -->
								<?php if (isset($_SESSION['user']['username']) && $_SESSION['user']['username'] === 'Admin' &&
    							$_SESSION['user']['email'] === 'test@admin.com'): ?>
    							<div class="row" style="margin-bottom: 15px;">
        							<div class="col-md-12">
            							<a href="new_movie.php" class="btn_movie">➕ Add New Movie</a>
        							</div>
    							</div>
								<?php endif; ?>
						<form class="form-style-1" action="#">
							<div class="row">
								<div class="col-md-12 form-it">
									<label>Movie name</label>
									<input type="text" placeholder="Enter keywords">
								</div>
								<div class="col-md-12 form-it">
									<label>Genres & Subgenres</label>
									<div class="group-ip">
										<select
											name="skills" multiple="" class="ui fluid dropdown">
											<option value="">Enter to filter genres</option>
											<option value="Action1">Action 1</option>
					                        <option value="Action2">Action 2</option>
					                        <option value="Action3">Action 3</option>
					                        <option value="Action4">Action 4</option>
					                        <option value="Action5">Action 5</option>
										</select>
									</div>	
								</div>
								<div class="col-md-12 form-it">
									<label>Release Year</label>
									<div class="row">
										<div class="col-md-6">
											<select>
											  <option value="range">From</option>
											  <option value="number">10</option>
											</select>
										</div>
										<div class="col-md-6">
											<select>
											  <option value="range">To</option>
											  <option value="number">20</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-12 ">
									<input class="submit" type="submit" value="submit">
								</div>	
							</div>
						</form>
					</div>
					<div class="ads">
						<img src="images/uploads/ads1.png" alt="">
					</div>
					<div class="sb-facebook sb-it">
						<h4 class="sb-title">Find us on Facebook</h4>
						<iframe src="#" data-src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftemplatespoint.net%2F%3Ffref%3Dts&tabs=timeline&width=340&height=315px&small_header=true&adapt_container_width=false&hide_cover=false&show_facepile=true&appId"  height="315" style="width:100%;border:none;overflow:hidden" ></iframe>
					</div>
					<div class="sb-twitter sb-it">
						<h4 class="sb-title">Tweet to us</h4>
						<div class="slick-tw">
							<div class="tweet item" id=""><!-- Put your twiter id here -->
							</div>
							<div class="tweet item" id=""><!-- Put your 2nd twiter account id here -->
							</div>
						</div>					
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- footer section-->
<?php
include_once "parts/footer.php";
?>
<!-- end of footer section-->

<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/plugins2.js"></script>
<script src="js/custom.js"></script>
</body>

<!-- moviegrid07:38-->
</html>