<?php
include_once 'parts/header.php';
?>

<body>
<?php include_once 'parts/nav.php'; ?>

<div class="page-single">
    <div class="container_buy">
        <h2>Search Results for "<?= htmlspecialchars($searchQuery) ?>"</h2>

        <?php if (count($results) === 0): ?>
            <p>No movies found.</p>
        <?php else: ?>
            <div class="flex-wrap-movielist">
                <?php foreach ($results as $movie): ?>
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
        <?php endif; ?>
    </div>
</div>

<?php include_once 'parts/footer.php'; ?>
</body>
</html>
