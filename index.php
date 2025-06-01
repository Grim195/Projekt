
<?php
session_start(); 
include_once "parts/header.php";
include_once "db/movieportfolio.php";?>

<body>
<?php include_once "parts/preload.php";?>
<!--signup/login form popup-->
<?php
include_once "parts/login.php";
?>
<!--end of signup/login form popup-->

<!-- BEGIN | Header -->
<?php
include_once "parts/nav.php";
?>
<!-- END | Header -->

<div class="slider movie-items">
	<div class="container">
		<div class="row">
			<div class="social-link">
				<p>Follow us: </p>
				<a href="https://www.facebook.com"><i class="ion-social-facebook"></i></a>
				<a href="https://www.twitter.com"><i class="ion-social-twitter"></i></a>
				<a href="https://www.instagram.com"><i class="ion-social-instagram"></i></a>
				<a href="https://www.youtube.com"><i class="ion-social-youtube"></i></a>
			</div>
			<!-- slider -->
	    	<div  class="slick-multiItemSlider">
	    		<?php foreach ($latestMovies as $movie): ?>
    				<div class="movie-item">
        				<div class="mv-img">
            				<a href="moviesingle.php?id=<?= $movie['id'] ?>">
                			<img src="<?= htmlspecialchars($movie['image']) ?>" alt="<?= htmlspecialchars($movie['title']) ?>" width="285" height="437">
            				</a>
        				</div>
        				<div class="title-in">
           					<div class="cate">
                				<span class="blue"><a href="#"><?= htmlspecialchars($movie['genre']) ?></a></span>
            				</div>
            				<h6><a href="moviesingle.php?id=<?= $movie['id'] ?>"><?= htmlspecialchars($movie['title']) ?></a></h6>
            				<p><i class="ion-android-star"></i><span><?= htmlspecialchars($movie['rating']) ?></span> /10</p>
        				</div>
    				</div>
				<?php endforeach; ?>
	    	</div>
	    </div>
	</div>
</div>
<div class="movie-items">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-8">
				<div class="title-hd">
    				<h2>In Theatres</h2>
				</div>
				<div class="tabs">
    				<div class="tab-content">
        				<div id="in-theatres" class="tab active">
            				<div class="row">
                				<?php foreach ($inTheatreMovies as $movie): ?>
                    			<div class="col-md-4">
                        			<div class="movie-item-style-2">
                            			<img src="<?= htmlspecialchars($movie['image']) ?>" alt="<?= htmlspecialchars($movie['title']) ?>">
                            			<div class="mv-item-infor">
                                			<h6><a href="moviesingle.php?id=<?= $movie['id'] ?>"><?= htmlspecialchars($movie['title']) ?></a></h6>
                                			<p class="rate"><i class="ion-android-star"></i><span><?= htmlspecialchars($movie['rating']) ?></span> /10</p>
                                			<p class="run-time">Genre: <?= htmlspecialchars($movie['genre']) ?></p>
                            			</div>
                        			</div>
                    			</div>
                				<?php endforeach; ?>
            				</div>
        				</div>
    				</div>
				</div>
				<div class="title-hd">
    				<h2>Top Rated Movies</h2>
				</div>
				<div class="flex-wrap-movielist">
  					<?php foreach ($topRatedMovies as $movie): ?>
    				<div class="movie-item-style-2 movie-item-style-1">
      					<img src="<?= htmlspecialchars($movie['image']) ?>" alt="<?= htmlspecialchars($movie['title']) ?>">
      					<div class="hvr-inner">
        					<a href="moviesingle.php?id=<?= $movie['id'] ?>"> Read more <i class="ion-android-arrow-dropright"></i> </a>
      					</div>
      					<div class="mv-item-infor">
        					<h6><a href="moviesingle.php?id=<?= $movie['id'] ?>"><?= htmlspecialchars($movie['title']) ?></a></h6>
        					<p class="rate"><i class="ion-android-star"></i><span><?= htmlspecialchars($movie['rating']) ?></span> /10</p>
      					</div>
    				</div>
  					<?php endforeach; ?>
				</div>
			</div>
			<div class="col-md-4">
				<div class="sidebar">
					<div class="ads">
						<img src="images/uploads/ads1.png" alt="" width="336" height="296">
					</div>
					<div class="celebrities">
						<h4 class="sb-title">Spotlight Celebrities</h4>
						<div class="celeb-item">
							<a href="#"><img src="images/uploads/ava1.jpg" alt="" width="70" height="70"></a>
							<div class="celeb-author">
								<h6><a href="#">Samuel N. Jack</a></h6>
								<span>Actor</span>
							</div>
						</div>
						<div class="celeb-item">
							<a href="#"><img src="images/uploads/ava2.jpg" alt="" width="70" height="70"></a>
							<div class="celeb-author">
								<h6><a href="#">Benjamin Carroll</a></h6>
								<span>Actor</span>
							</div>
						</div>
						<div class="celeb-item">
							<a href="#"><img src="images/uploads/ava3.jpg" alt="" width="70" height="70"></a>
							<div class="celeb-author">
								<h6><a href="#">Beverly Griffin</a></h6>
								<span>Actor</span>
							</div>
						</div>
						<div class="celeb-item">
							<a href="#"><img src="images/uploads/ava4.jpg" alt="" width="70" height="70"></a>
							<div class="celeb-author">
								<h6><a href="#">Justin Weaver</a></h6>
								<span>Actor</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="trailers">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-12">
				<div class="title-hd">
					<h2>Trailers</h2>
				</div>
				<div class="videos">
				 	<div class="slider-for-2 video-ft">
				 		<div>
					    	<iframe class="item-video" src="#" data-src="https://www.youtube.com/embed/1Q8fG0TtVAY"></iframe>
					    </div>
					    <div>
					    	<iframe class="item-video" src="#" data-src="https://www.youtube.com/embed/w0qQkSuWOS8"></iframe>
					    </div>
					    <div>
					    	<iframe class="item-video" src="#" data-src="https://www.youtube.com/embed/44LdLqgOpjo"></iframe>
					    </div>
					    <div>
					    	<iframe class="item-video" src="#" data-src="https://www.youtube.com/embed/gbug3zTm3Ws"></iframe>
					    </div>
					    <div>
					    	<iframe class="item-video" src="#" data-src="https://www.youtube.com/embed/e3Nl_TCQXuw"></iframe>
					    </div>
					    <div>
					    	<iframe class="item-video" src="#" data-src="https://www.youtube.com/embed/NxhEZG0k9_w"></iframe>
					    </div>
						
						
					</div>
					<div class="slider-nav-2 thumb-ft">
						<div class="item">
							<div class="trailer-img">
								<img src="images/uploads/trailer7.jpg"  alt="photo by Barn Images" width="4096" height="2737">
							</div>
							<div class="trailer-infor">
	                        	<h4 class="desc">Wonder Woman</h4>
	                        	<p>2:30</p>
	                        </div>
						</div>
						<div class="item">
							<div class="trailer-img">
								<img src="images/uploads/trailer2.jpg"  alt="photo by Barn Images" width="350" height="200">
							</div>
							<div class="trailer-infor">
	                        	<h4 class="desc">Oblivion: Official Teaser Trailer</h4>
	                        	<p>2:37</p>
	                        </div>
						</div>
						<div class="item">
							<div class="trailer-img">
								<img src="images/uploads/trailer6.jpg" alt="photo by Joshua Earle">
							</div>
							<div class="trailer-infor">
	                        	<h4 class="desc">Exclusive Interview:  Skull Island</h4>
	                        	<p>2:44</p>
	                        </div>
						</div>
						<div class="item">
							<div class="trailer-img">
								<img src="images/uploads/trailer3.png" alt="photo by Alexander Dimitrov" width="100" height="56">
							</div>
							<div class="trailer-infor">
	                        	<h4 class="desc">Logan: Director James Mangold Interview</h4>	
	                        	<p>2:43</p>
	                        </div>
						</div>
						<div class="item">
							<div class="trailer-img">
								<img src="images/uploads/trailer4.png"  alt="photo by Wojciech Szaturski" width="100" height="56">
							</div>
							<div class="trailer-infor">
	                        	<h4 class="desc">Beauty and the Beast: Official Teaser Trailer 2</h4>	
	                        	<p>2: 32</p>
	                        </div>	
						</div>
						<div class="item">
							<div class="trailer-img">
								<img src="images/uploads/trailer5.jpg"  alt="photo by Wojciech Szaturski" width="360" height="189">
							</div>
							<div class="trailer-infor">
	                        	<h4 class="desc">Fast&Furious 8</h4>	
	                        	<p>3:11</p>
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


</html>
