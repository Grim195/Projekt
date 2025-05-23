<?php
session_start();
if (
    !isset($_SESSION['user']['username']) ||
    $_SESSION['user']['username'] !== 'Admin' ||
    $_SESSION['user']['email'] !== 'test@admin.com'
) {
    header('Location: index.php');
    exit;
}
?>
<?php include_once "parts/header.php";?>
<body>
<?php include_once "parts/preload.php";?>
<?php include_once "parts/login.php";?>
<?php include_once "parts/nav.php";?>

<div class="hero mv-single-hero">   
    <div class="row">
        <div class="col-md-12">
            <h1>Add New Movie</h1>
            <ul class="breadcumb">
                <li class="active"><a href="index.php">Home</a></li>
                <li><span class="ion-ios-arrow-right"></span> Add Movie</li>
            </ul>
        </div>
    </div> 
</div>

<div class="page-single">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="db/add_movies.php" method="POST" enctype="multipart/form-data" class="form-style-1">
                    <div class="row">
                        <div class="col-md-6 form-it">
                            <label>Movie Title</label>
                            <input type="text" name="title" required>
                        </div>
                        <div class="col-md-6 form-it">
                            <label>Release Year</label>
                            <input type="number" name="release_year" required>
                        </div>
                        <div class="col-md-6 form-it">
                            <label>Duration (in minutes)</label>
                            <input type="number" name="duration" required>
                        </div>
                        <div class="col-md-12 form-it">
                            <label>Genre</label>
                            <input type="text" name="genre" placeholder="e.g. Action, Thriller" required>
                        </div>
                        <div class="col-md-12 form-it">
                            <label>Director</label>
                            <input type="text" name="director">
                        </div>
                        <div class="col-md-12 form-it">
                            <label>Cast</label>
                            <textarea name="cast" rows="3" placeholder="Separate names with commas"></textarea>
                        </div>
                        <div class="col-md-12 form-it">
                            <label>Description</label>
                            <textarea name="description" rows="5" required></textarea>
                        </div>
                        <div class="col-md-12 form-it">
                            <label>Rating (0.0 - 10.0)</label>
                            <input type="number" name="rating" step="0.1" min="0" max="10">
                        </div>
                        <div class="col-md-12 form-it">
                            <label>Poster Image</label>
                            <form method="POST" enctype="multipart/form-data" id="posterForm">
                                <input type="hidden" name="upload_poster" value="1"/>
                                <input type="file" name="poster" id="posterInput" accept="image/*" style="display:none;" required>
                                <label for="posterInput" class="redbtn" style="cursor:pointer;">Choose Poster</label>
                                <span id="posterFileName" style="margin-left:10px;"></span>
                            </form>
                        </div>
                        <div class="col-md-12">
                            <input class="submit" type="submit" value="Add Movie">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include_once 'parts/footer.php'; ?>

<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/plugins2.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
