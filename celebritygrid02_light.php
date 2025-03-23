<?php
include_once "parts/header.php";
?>
<body>
<?php include_once "parts/preload.php";?>
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
				    <a href="index_light.html"><img class="logo" src="images/logo1.png" alt="" width="119" height="58"></a>
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
								<li><a href="index_light.html">Home 01</a></li>
								<li><a href="homev2_light.html">Home 02</a></li>
								<li><a href="homev3_light.html">Home 03</a></li>
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
										<li><a href="moviegrid_light.html">Movie grid</a></li>
										<li><a href="moviegridfw_light.html">movie grid full width</a></li>
									</ul>
								</li>			
								<li><a href="movielist_light.html">Movie list</a></li>
								<li><a href="moviesingle_light.html">Movie single</a></li>
								<li class="it-last"><a href="seriessingle_light.html">Series single</a></li>
							</ul>
						</li>
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
							celebrities <i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu level1">
								<li><a href="celebritygrid01_light.html">celebrity grid 01</a></li>
								<li><a href="celebritygrid02_light.html">celebrity grid 02 </a></li>
								<li><a href="celebritylist_light.html">celebrity list</a></li>
								<li class="it-last"><a href="celebritysingle_light.html">celebrity single</a></li>
							</ul>
						</li>
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
							news <i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu level1">
								<li><a href="bloglist_light.html">blog List</a></li>
								<li><a href="bloggrid_light.html">blog Grid</a></li>
								<li class="it-last"><a href="blogdetail_light.html">blog Detail</a></li>
							</ul>
						</li>
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
							community <i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu level1">
								<li><a href="userfavoritegrid_light.html">user favorite grid</a></li>
								<li><a href="userfavoritelist_light.html">user favorite list</a></li>
								<li><a href="userprofile_light.html">user profile</a></li>
								<li class="it-last"><a href="userrate_light.html">user rate</a></li>
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

    	<div class="buster-light">
<div class="hero common-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1>celebrity listing - grid</h1>
					<ul class="breadcumb">
						<li class="active"><a href="#">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span> celebrity listing</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- celebrity grid v2 section-->
<div class="page-single">
	<div class="container">
		<div class="row ipad-width2">
			<div class="col-md-9 col-sm-12 col-xs-12">
				<div class="topbar-filter">
					<p class="pad-change">Found <span>1,608 celebrities</span> in total</p>
					<label>Sort by:</label>
					<select>
						<option value="popularity">Popularity Descending</option>
						<option value="popularity">Popularity Ascending</option>
						<option value="rating">Rating Descending</option>
						<option value="rating">Rating Ascending</option>
						<option value="date">Release date Descending</option>
						<option value="date">Release date Ascending</option>
					</select>
					<a href="celebritylist.html" class="list"><i class="ion-ios-list-outline "></i></a>
					<a  href="celebritygrid02.html" class="grid"><i class="ion-grid active"></i></a>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceb21.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Leonardo DiCaprio</a></h2>
								<span>actor, uk</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceb22.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Meryl Streep</a></h2>
								<span>actor, Iran</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceb23.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Tom Hanks</a></h2>
								<span>Director, Sweden</span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceb24.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Robert De Niro</a></h2>
								<span>actor, uk</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceb25.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Kamal Haasan</a></h2>
								<span>actress, usa</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceb26.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Anthony Hopkins</a></h2>
								<span>actress, France</span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceb27.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Robert De Niro</a></h2>
								<span>actor, uk</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceb28.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Kamal Haasan</a></h2>
								<span>actress, usa</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceb29.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Anthony Hopkins</a></h2>
								<span>actress, France</span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceb21.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Leonardo DiCaprio</a></h2>
								<span>actor, uk</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceb22.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Meryl Streep</a></h2>
								<span>actor, Iran</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceb23.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Tom Hanks</a></h2>
								<span>Director, Sweden</span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceb24.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Robert De Niro</a></h2>
								<span>actor, uk</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceb25.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Kamal Haasan</a></h2>
								<span>actress, usa</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceb26.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Anthony Hopkins</a></h2>
								<span>actress, France</span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceb27.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Robert De Niro</a></h2>
								<span>actor, uk</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceb28.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Kamal Haasan</a></h2>
								<span>actress, usa</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceb29.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Anthony Hopkins</a></h2>
								<span>actress, France</span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceb21.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Leonardo DiCaprio</a></h2>
								<span>actor, uk</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceb22.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Meryl Streep</a></h2>
								<span>actor, Iran</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceb23.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Tom Hanks</a></h2>
								<span>Director, Sweden</span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceb24.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Robert De Niro</a></h2>
								<span>actor, uk</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceb25.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Kamal Haasan</a></h2>
								<span>actress, usa</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceb26.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Anthony Hopkins</a></h2>
								<span>actress, France</span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceb27.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Robert De Niro</a></h2>
								<span>actor, uk</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceb28.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Kamal Haasan</a></h2>
								<span>actress, usa</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceb29.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Anthony Hopkins</a></h2>
								<span>actress, France</span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceb21.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Leonardo DiCaprio</a></h2>
								<span>actor, uk</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceb22.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Meryl Streep</a></h2>
								<span>actor, Iran</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceb23.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Tom Hanks</a></h2>
								<span>Director, Sweden</span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceb24.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Robert De Niro</a></h2>
								<span>actor, uk</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceb25.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Kamal Haasan</a></h2>
								<span>actress, usa</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceb26.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Anthony Hopkins</a></h2>
								<span>actress, France</span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceb27.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Robert De Niro</a></h2>
								<span>actor, uk</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceb28.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Kamal Haasan</a></h2>
								<span>actress, usa</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceb29.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Anthony Hopkins</a></h2>
								<span>actress, France</span>
							</div>
						</div>
					</div>
				</div>
				<div class="topbar-filter">
					<label>Reviews per page:</label>
					<select>
						<option value="range">36 Reviews</option>
						<option value="saab">18 Reviews</option>
					</select>
					
					<div class="pagination2">
						<span>Page 1 of 6:</span>
						<a class="active" href="#">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#">4</a>
						<a href="#">5</a>
						<a href="#">6</a>
						<a href="#"><i class="ion-arrow-right-b"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-xs-12 col-sm-12">
				<div class="sidebar">
						<div class="searh-form">
						<h4 class="sb-title">Search celebrity</h4>
						<form class="form-style-1 celebrity-form" action="#">
							<div class="row">
								<div class="col-md-12 form-it">
									<label>Celebrity name</label>
									<input type="text" placeholder="Enter keywords">
								</div>
								<div class="col-md-12 form-it">
									<label>Celebrity Letter</label>
									<select>
									  <option value="range">A</option>
									  <option value="saab">B</option>
									</select>
								</div>
								<div class="col-md-12 form-it">
									<label>Category</label>
									<select>
									  <option value="range">Actress</option>
									  <option value="saab">Others</option>
									</select>
								</div>
								<div class="col-md-12 form-it">
									<label>Year of birth</label>
									<div class="row">
										<div class="col-md-6">
											<select>
											  <option value="range">1970</option>
											  <option value="number">Other</option>
											</select>
										</div>
										<div class="col-md-6">
											<select>
											  <option value="range">1990</option>
											  <option value="number">others</option>
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
					<div class="celebrities">
						<h4 class="sb-title">featured celebrity</h4>
						<div class="celeb-item">
							<a href="#"><img src="images/uploads/ava1.jpg" alt=""></a>
							<div class="celeb-author">
								<h6><a href="#">Samuel N. Jack</a></h6>
								<span>Actor</span>
							</div>
						</div>
						<div class="celeb-item">
							<a href="#"><img src="images/uploads/ava2.jpg" alt=""></a>
							<div class="celeb-author">
								<h6><a href="#">Benjamin Carroll</a></h6>
								<span>Actor</span>
							</div>
						</div>
						<div class="celeb-item">
							<a href="#"><img src="images/uploads/ava3.jpg" alt=""></a>
							<div class="celeb-author">
								<h6><a href="#">Beverly Griffin</a></h6>
								<span>Actor</span>
							</div>
						</div>
						<div class="celeb-item">
							<a href="#"><img src="images/uploads/ava4.jpg" alt=""></a>
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
<!-- end of celebrity grid v2 section-->
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

<!-- celebritygrid02_light16:30-->
</html>