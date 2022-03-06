<?php
    include './includes/config.php';
    include './includes/data.php';
    
    // Header
    include './partials/header.php';
?>
    <main class="articles">

        <?php foreach($articles as $key => $article): ?>
            <?php
                $author = $authors[$article['author']];
            ?>
            <article>
                <h2><?= $article['title'] ?></h2>
                <div class="info">
                    <small><a href="<?= $author['link'] ?>"><?= $author['firstName'] . ' ' . $author['lastName'] ?></a></small>
                    <br>
                    <small><?= date('d-m-Y', $article['date']) ?></small>
                </div>
                <img src="<?= $article['image'] ?>">
                <p><?= $article['description'] ?></p>
                <a href="article.php?id=<?= $key ?>">Read more</a>
            </article>
        <?php endforeach ?>

    </main>
<?php
    include './partials/footer.php';
?>