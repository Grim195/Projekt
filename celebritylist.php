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
<?php
include_once "parts/nav.php";
?>
<!-- END | Header -->

<div class="hero common-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1>celebrity listing - list</h1>
					<ul class="breadcumb">
						<li class="active"><a href="#">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span> celebrity listing</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- celebrity list section-->
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
					<a href="celebritylist.html" class="list"><i class="ion-ios-list-outline active"></i></a>
					<a  href="celebritygrid01.html" class="grid"><i class="ion-grid "></i></a>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceblist1.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Dan Stevens</a></h2>
								<span>actor, usa</span>
								<p>Dan Stevens was born at Croydon in Surrey on 10th October 1982. His parents are teachers. He was educated at Tonbridge School and trained in acting at the National Youth Theatre of Great Britain... </p>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceblist2.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Luke Evans</a></h2>
								<span>actor, mexico</span>
								<p>Luke George Evans was born in Pontypool, Wales, and grew up in Aberbargoed, in the south of Wales. He is the son of Yvonne (Lewis) and David Evans. He moved to Cardiff at the age 17...</p>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceblist3.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Scarlett Johansson</a></h2>
								<span>actress, france</span>
								<p>Scarlett Ingrid Johansson was born in New York City. Her mother, Melanie Sloan, is from a Jewish family from the Bronx, and her father, Karsten Johansson, is a Danish-born architect, from Copenhagen...</p>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceblist4.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Emma Watson</a></h2>
								<span>actress, uk</span>
								<p>Emma Charlotte Duerre Watson was born in Paris, France, to English parents, Jacqueline Luesby and Chris Watson, both lawyers. She moved to Oxfordshire when she was five...</p>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceblist5.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Tom Hardy</a></h2>
								<span>actor, italy	</span>
								<p>Joan Crawford was born Lucille Fay LeSueur on March 23, 1905, in San Antonio, Texas, to Anna Belle (Johnson) and Thomas E. LeSueur, a laundry laborer. By the time she was born her parents had separated....</p>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceblist6.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Joan Crawford</a></h2>
								<span>director, sweden</span>
								<p>Joan Crawford was born Lucille Fay LeSueur on March 23, 1905, in San Antonio, Texas, to Anna Belle (Johnson) and Thomas E. LeSueur, a laundry laborer. By the time she was born her parents had separated....</p>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceblist7.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Margot Robbie</a></h2>
								<span>actress, chile</span>
								<p>Margot Robbie is an Australian actress born in Dalby, Queensland, and raised on the Gold Coast, spending much of her time at the farm belonging to her grandparents. Her mother, Sarie Kessler, is a physiotherapist....</p>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceblist8.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Jason Momoa</a></h2>
								<span>actor, usa</span>
								<p>Joseph Jason Namakaeha Momoa was born on August 1, 1979 in Honolulu, Hawaii. He is the son of Coni (Lemke), a photographer, and Joseph Momoa, a painter...</p>
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
<!-- end of celebrity list section-->

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

<!-- celebritylist12:04-->
</html>