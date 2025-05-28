<?php
session_start();
require_once "db/config.php";
require_once "classes/Database.php";

if (!isset($_SESSION['user'])) {
    header("Location: index.php?error=not_logged_in");
    exit;
}

$db = new Database();
$conn = $db->getConnection();

$userId = $_SESSION['user']['id'];

$stmt = $conn->prepare("
    SELECT t.seats, s.start_time, m.title
    FROM tickets t
    JOIN showtimes s ON t.showtime_id = s.id
    JOIN movies m ON s.movie_id = m.id
    WHERE t.user_id = ?
    ORDER BY s.start_time DESC
");
$stmt->execute([$userId]);
$tickets = $stmt->fetchAll();
?>

<?php include_once "parts/header.php"; ?>
<body>
<?php include_once "parts/nav.php"; ?>

<div class="hero common-hero">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="hero-ct">
          <h1>My Tickets</h1>
          <ul class="breadcumb">
            <li class="active"><a href="index.php">Home</a></li>
            <li> <span class="ion-ios-arrow-right"></span> My Tickets</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="page-single">
  <div class="container">
    <div class="row ipad-width">
      <div class="col-md-12">
        <?php if (empty($tickets)): ?>
          <p>You haven’t booked any tickets yet.</p>
        <?php else: ?>
          <ul class="ticket-list">
  <?php foreach ($tickets as $ticket): ?>
    <li style="margin-bottom: 20px; border-bottom: 1px solid #ddd; padding-bottom: 10px;">
      <p><strong>🎬 Movie:</strong> <?= htmlspecialchars($ticket['title']) ?></p>
      <p><strong>🕒 Time:</strong> <?= date("M d, Y H:i", strtotime($ticket['start_time'])) ?></p>
      <p><strong>🎟️ Seats:</strong> <?= $ticket['seats'] ?></p>
      <p><strong>Status:</strong> <?= (strtotime($ticket['start_time']) > time()) ? '<span style="color: green;">Upcoming</span>' : '<span style="color: gray;">Expired</span>' ?></p>
    </li>
  <?php endforeach; ?>
</ul>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<?php include_once "parts/footer.php"; ?>
<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
