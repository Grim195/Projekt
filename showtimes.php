<?php
session_start();
if (!isset($_SESSION['user']['username']) || $_SESSION['user']['username'] !== 'Admin') {
    header("Location: index.php");
    exit;
}
?>
<?php require_once "DB/spracovanie_showtime.php"; ?>
<?php include_once "parts/header.php"; ?>
<body>
<?php include_once "parts/preload.php"; ?>
<?php include_once "parts/nav.php"; ?>

<div class="page-single">
    <div class="container">
        <h2>Add New Showtime</h2>

        <?php if ($message): ?>
            <p style="color: green;"><?= htmlspecialchars($message) ?></p>
        <?php endif; ?>

        <form method="POST" class="form-style-1">
            <div class="row">
                <div class="col-md-6 form-it">
                    <label>Movie</label>
                    <select name="movie_id" required>
                        <option value="">-- Select Movie --</option>
                        <?php foreach ($movies as $movie): ?>
                            <option value="<?= $movie['id'] ?>"><?= htmlspecialchars($movie['title']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-6 form-it">
                    <label>Date & Time</label>
                    <input type="datetime-local" name="start_time" required>
                </div>
                <div class="col-md-6 form-it">
                    <label>Total Seats</label>
                    <input type="number" name="total_seats" required min="1">
                </div>
                <div class="col-md-12">
                    <input type="submit" value="Add Showtime" class="submit">
                </div>
            </div>
        </form>
    </div>
</div>

<?php include_once "parts/footer.php"; ?>
<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
