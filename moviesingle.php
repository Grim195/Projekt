<?php
session_start();
include_once "db/movie_profile.php";
include_once "parts/header.php";
?>
<body>
<?php include_once "parts/preload.php";?>
<?php include_once "parts/login.php";?>
<?php include_once "parts/nav.php";?>

<div class="hero mv-single-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?= htmlspecialchars($movie['title']) ?></h1>
            </div>
        </div>
    </div>
</div>

<div class="page-single movie-single movie_single">
    <div class="container">
        <div class="row ipad-width2">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="movie-img">
                    <img src="<?= htmlspecialchars($movie['image']) ?>" alt="<?= htmlspecialchars($movie['title']) ?>">
                    <div class="movie-btn">
                        <div class="btn-transform transform-vertical red">
                            <?php if (!empty($movie['trailer_url'])): ?>
    							<a href="<?= htmlspecialchars($movie['trailer_url']) ?>" class="item item-1 redbtn fancybox-media hvr-grow" target="_blank">
        						<i class="ion-play"></i> Watch Trailer
    							</a>
							<?php else: ?>
    							<span class="item item-1 redbtn disabled"><i class="ion-play"></i> Trailer Unavailable</span>
							<?php endif; ?>
                        </div>
                        <div class="btn-transform transform-vertical">
                            <div><a href="#" class="item item-1 yellowbtn"> <i class="ion-card"></i> Buy ticket</a></div>
                            <div><a href="#" class="item item-2 yellowbtn"><i class="ion-card"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="movie-single-ct main-content">
                    <div class="movie-rate">
                        <div class="rate">
                            <i class="ion-android-star"></i>
                            <p><span><?= htmlspecialchars($movie['rating']) ?></span> /10</p>
                        </div>
                    </div>
                    <p><?= nl2br(htmlspecialchars($movie['description'])) ?></p>
                    <p><strong>Genre:</strong> <?= htmlspecialchars($movie['genre']) ?></p>
                    <p><strong>Director:</strong> <?= htmlspecialchars($movie['director']) ?></p>
                    <p><strong>Stars:</strong> <?= htmlspecialchars($movie['stars']) ?></p>
                    <p><strong>Release Year:</strong> <?= date('Y', strtotime($movie['release_date'])) ?></p>
                    <p><strong>Duration:</strong> <?= htmlspecialchars($movie['runtime']) ?> minutes</p>
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