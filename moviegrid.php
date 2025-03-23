<?php
include_once "parts/header.php";
?>
<body>
<!--preloading-->
<div id="preloader">
    <img class="logo" src="images/logo1.png" alt="" width="119" height="58">
    <div id="status">
        <span></span>
        <span></span>
    </div>
</div>
<!--end of preloading-->
<!--login form popup-->
<div class="login-wrapper" id="login-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>Login</h3>
        <form method="post" action="#">
        	<div class="row">
        		 <label for="username">
                    Username:
                    <input type="text" name="username" id="username" placeholder="Hugh Jackman" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
                </label>
        	</div>
           
            <div class="row">
            	<label for="password">
                    Password:
                    <input type="password" name="password" id="password" placeholder="******" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                </label>
            </div>
            <div class="row">
            	<div class="remember">
					<div>
						<input type="checkbox" name="remember" value="Remember me"><span>Remember me</span>
					</div>
            		<a href="#">Forget password ?</a>
            	</div>
            </div>
           <div class="row">
           	 <button type="submit">Login</button>
           </div>
        </form>
        <div class="row">
        	<p>Or via social</p>
            <div class="social-btn-2">
            	<a class="fb" href="#"><i class="ion-social-facebook"></i>Facebook</a>
            	<a class="tw" href="#"><i class="ion-social-twitter"></i>twitter</a>
            </div>
        </div>
    </div>
</div>
<!--end of login form popup-->
<!--signup form popup-->
<div class="login-wrapper"  id="signup-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>sign up</h3>
        <form method="post" action="#">
            <div class="row">
                 <label for="username-2">
                    Username:
                    <input type="text" name="username" id="username-2" placeholder="Hugh Jackman" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
                </label>
            </div>
           
            <div class="row">
                <label for="email-2">
                    your email:
                    <input type="password" name="email" id="email-2" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                </label>
            </div>
             <div class="row">
                <label for="password-2">
                    Password:
                    <input type="password" name="password" id="password-2" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                </label>
            </div>
             <div class="row">
                <label for="repassword-2">
                    re-type Password:
                    <input type="password" name="password" id="repassword-2" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                </label>
            </div>
           <div class="row">
             <button type="submit">sign up</button>
           </div>
        </form>
    </div>
</div>
<!--end of signup form popup-->

<!-- BEGIN | Header -->
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
				    <a href="index-2.html"><img class="logo" src="images/logo1.png" alt="" width="119" height="58"></a>
			    </div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav flex-child-menu menu-left">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown">
							Home <i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu level1">
								<li><a href="index-2.html">Home 01</a></li>
								<li><a href="homev2.html">Home 02</a></li>
								<li><a href="homev3.html">Home 03</a></li>
							</ul>
						</li>
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
							movies<i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu level1">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Movie grid<i class="ion-ios-arrow-forward"></i></a>
									<ul class="dropdown-menu level2">
										<li><a href="moviegrid.html">Movie grid</a></li>
										<li><a href="moviegridfw.html">movie grid full width</a></li>
									</ul>
								</li>			
								<li><a href="movielist.html">Movie list</a></li>
								<li><a href="moviesingle.html">Movie single</a></li>
								<li class="it-last"><a href="seriessingle.html">Series single</a></li>
							</ul>
						</li>
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
							celebrities <i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu level1">
								<li><a href="celebritygrid01.html">celebrity grid 01</a></li>
								<li><a href="celebritygrid02.html">celebrity grid 02 </a></li>
								<li><a href="celebritylist.html">celebrity list</a></li>
								<li class="it-last"><a href="celebritysingle.html">celebrity single</a></li>
							</ul>
						</li>
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
							news <i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu level1">
								<li><a href="bloglist.html">blog List</a></li>
								<li><a href="bloggrid.html">blog Grid</a></li>
								<li class="it-last"><a href="blogdetail.html">blog Detail</a></li>
							</ul>
						</li>
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
							community <i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu level1">
								<li><a href="userfavoritegrid.html">user favorite grid</a></li>
								<li><a href="userfavoritelist.html">user favorite list</a></li>
								<li><a href="userprofile.html">user profile</a></li>
								<li class="it-last"><a href="userrate.html">user rate</a></li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav flex-child-menu menu-right">
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
							pages <i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu level1">
								<li><a href="landing.html">Landing</a></li>
								<li><a href="404.html">404 Page</a></li>
								<li class="it-last"><a href="comingsoon.html">Coming soon</a></li>
							</ul>
						</li>                
						<li><a href="#">Help</a></li>
						<li class="loginLink"><a href="#">LOG In</a></li>
						<li class="btn signupLink"><a href="#">sign up</a></li>
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
<!-- END | Header -->

<div class="hero common-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1> movie listing - grid</h1>
					<ul class="breadcumb">
						<li class="active"><a href="#">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span> movie listing</li>
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
					<p>Found <span>1,608 movies</span> in total</p>
					<label>Sort by:</label>
					<select>
						<option value="popularity">Popularity Descending</option>
						<option value="popularity">Popularity Ascending</option>
						<option value="rating">Rating Descending</option>
						<option value="rating">Rating Ascending</option>
						<option value="date">Release date Descending</option>
						<option value="date">Release date Ascending</option>
					</select>
					<a href="movielist.html" class="list"><i class="ion-ios-list-outline "></i></a>
					<a  href="moviegrid.html" class="grid"><i class="ion-grid active"></i></a>
				</div>
				<div class="flex-wrap-movielist">
						<div class="movie-item-style-2 movie-item-style-1">
							<img src="images/uploads/mv1.jpg" alt="">
							<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
							<div class="mv-item-infor">
								<h6><a href="#">oblivion</a></h6>
								<p class="rate"><i class="ion-android-star"></i><span>8.1</span> /10</p>
							</div>
						</div>					
						<div class="movie-item-style-2 movie-item-style-1">
							<img src="images/uploads/mv2.jpg" alt="">
							<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
							<div class="mv-item-infor">
								<h6><a href="#">into the wild</a></h6>
								<p class="rate"><i class="ion-android-star"></i><span>7.8</span> /10</p>
							</div>
						</div>
					
					
						<div class="movie-item-style-2 movie-item-style-1">
	            			<img src="images/uploads/mv-item3.jpg" alt="">
	            			<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
	            			<div class="mv-item-infor">
	            				<h6><a href="#">Die hard</a></h6>
	            				<p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
	            			</div>
	            		</div>
					
					
						<div class="movie-item-style-2 movie-item-style-1">
	            			<img src="images/uploads/mv-item4.jpg" alt="">
	            			<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
	            			<div class="mv-item-infor">
	            				<h6><a href="#">The walk</a></h6>
	            				<p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
	            			</div>
	            		</div>
	            		<div class="movie-item-style-2 movie-item-style-1">
							<img src="images/uploads/mv3.jpg" alt="">
							<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
							<div class="mv-item-infor">
								<h6><a href="#">blade runner  </a></h6>
								<p class="rate"><i class="ion-android-star"></i><span>7.3</span> /10</p>
							</div>
						</div>
						<div class="movie-item-style-2 movie-item-style-1">
							<img src="images/uploads/mv4.jpg" alt="">
							<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
							<div class="mv-item-infor">
								<h6><a href="#">Mulholland pride</a></h6>
								<p class="rate"><i class="ion-android-star"></i><span>7.2</span> /10</p>
							</div>
						</div>
						<div class="movie-item-style-2 movie-item-style-1">
							<img src="images/uploads/mv5.jpg" alt="">
							<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
							<div class="mv-item-infor">
								<h6><a href="#">skyfall: evil of boss</a></h6>
								<p class="rate"><i class="ion-android-star"></i><span>7.0</span> /10</p>
							</div>
						</div>
						<div class="movie-item-style-2 movie-item-style-1">
	            			<img src="images/uploads/mv-item1.jpg" alt="">
	            			<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
	            			<div class="mv-item-infor">
	            				<h6><a href="#">Interstellar</a></h6>
	            				<p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
	            			</div>
	            		</div>
	            		<div class="movie-item-style-2 movie-item-style-1">
	            			<img src="images/uploads/mv-item2.jpg" alt="">
	            			<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
	            			<div class="mv-item-infor">
	            				<h6><a href="#">The revenant</a></h6>
	            				<p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
	            			</div>
	            		</div>
	            		<div class="movie-item-style-2 movie-item-style-1">
	            			<img src="images/uploads/mv-it10.jpg" alt="">
	            			<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
	            			<div class="mv-item-infor">
	            				<h6><a href="#">harry potter</a></h6>
	            				<p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
	            			</div>
	            		</div>
						<div class="movie-item-style-2 movie-item-style-1">
	            			<img src="images/uploads/mv-it11.jpg" alt="">
	            			<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
	            			<div class="mv-item-infor">
	            				<h6><a href="#">guardians galaxy</a></h6>
	            				<p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
	            			</div>
	            		</div>
	            		<div class="movie-item-style-2 movie-item-style-1">
	            			<img src="images/uploads/mv-it12.jpg" alt="">
	            			<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
	            			<div class="mv-item-infor">
	            				<h6><a href="#">the godfather</a></h6>
	            				<p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
	            			</div>
	            		</div>
						<div class="movie-item-style-2 movie-item-style-1">
	            			<img src="images/uploads/mv-item6.jpg" alt="">
	            			<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
	            			<div class="mv-item-infor">
	            				<h6><a href="#">blue velvet</a></h6>
	            				<p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
	            			</div>
	            		</div>
	            		<div class="movie-item-style-2 movie-item-style-1">
	            			<img src="images/uploads/mv-item7.jpg" alt="">
	            			<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
	            			<div class="mv-item-infor">
	            				<h6><a href="#">gravity</a></h6>
	            				<p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
	            			</div>
	            		</div>
	            		<div class="movie-item-style-2 movie-item-style-1">
	            			<img src="images/uploads/mv-item8.jpg" alt="">
	            			<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
	            			<div class="mv-item-infor">
	            				<h6><a href="#">southpaw</a></h6>
	            				<p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
	            			</div>
	            		</div>
	            		<div class="movie-item-style-2 movie-item-style-1">
	            			<img src="images/uploads/mv-it9.jpg" alt="">
	            			<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
	            			<div class="mv-item-infor">
	            				<h6><a href="#">jurassic park</a></h6>
	            				<p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
	            			</div>
	            		</div>
	            		<div class="movie-item-style-2 movie-item-style-1">
	            			<img src="images/uploads/mv-item9.jpg" alt="">
	            			<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
	            			<div class="mv-item-infor">
	            				<h6><a href="#">the forest</a></h6>
	            				<p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
	            			</div>
	            		</div>
	            		<div class="movie-item-style-2 movie-item-style-1">
	            			<img src="images/uploads/mv-item10.jpg" alt="">
	            			<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
	            			<div class="mv-item-infor">
	            				<h6><a href="#">spectre</a></h6>
	            				<p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
	            			</div>
	            		</div>
	            		<div class="movie-item-style-2 movie-item-style-1">
	            			<img src="images/uploads/mv-item11.jpg" alt="">
	            			<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
	            			<div class="mv-item-infor">
	            				<h6><a href="#">strager things</a></h6>
	            				<p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
	            			</div>
	            		</div>
	            		<div class="movie-item-style-2 movie-item-style-1">
	            			<img src="images/uploads/mv-item12.jpg" alt="">
	            			<div class="hvr-inner">
	            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
	            			<div class="mv-item-infor">
	            				<h6><a href="#">la la land</a></h6>
	            				<p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
	            			</div>
	            		</div>
				</div>		
				<div class="topbar-filter">
					<label>Movies per page:</label>
					<select>
						<option value="range">20 Movies</option>
						<option value="saab">10 Movies</option>
					</select>
					
					<div class="pagination2">
						<span>Page 1 of 2:</span>
						<a class="active" href="#">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#">...</a>
						<a href="#">78</a>
						<a href="#">79</a>
						<a href="#"><i class="ion-arrow-right-b"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="sidebar">
					<div class="searh-form">
						<h4 class="sb-title">Search for movie</h4>
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
									<label>Rating Range</label>
									<select>
									  <option value="range">-- Select the rating range below --</option>
									  <option value="saab">-- Select the rating range below --</option>
									</select>
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