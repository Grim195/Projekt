<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php?error=login_required");
    exit;
}

?>
<?php include_once "parts/header.php"; ?>
<?php include_once "db/ticket_buying.php";?>
<body>
<?php include_once "parts/nav.php"; ?>
<div class="page-single">
    <div class="container">
        <h2>Buy Tickets</h2>
        <?php if ($message): ?>
            <p style="color: <?= strpos($message, 'successfully') ? 'green' : 'red' ?>;"><?= htmlspecialchars($message) ?></p>
        <?php endif; ?>

        <form method="POST" class="form-style-1">
            <div class="row">
                <div class="col-md-12 form-it">
                    <label>Showtime</label>
                    <select name="showtime_id" required>
                        <option value="">-- Select a Showtime --</option>
                        <?php foreach ($showtimes as $s): ?>
                            <option value="<?= $s['id'] ?>">
                                <?= htmlspecialchars($s['title']) ?> - <?= date("M d, Y H:i", strtotime($s['start_time'])) ?> (Seats: <?= $s['available_seats'] ?>)
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-12 form-it">
                    <label>Number of Seats</label>
                    <input type="number" name="seats" min="1" required>
                </div>
                <div class="col-md-12">
                    <input type="submit" class="submit" value="Buy Ticket">
                </div>
            </div>
        </form>
    </div>
</div>
<?php include_once "parts/footer.php"; ?>
</body>
</html>
