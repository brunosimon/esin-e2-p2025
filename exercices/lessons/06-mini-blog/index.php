<?php
    include 'includes/config.php';
    include 'includes/data.php';

    include 'partials/header.php';
?>

    <?php foreach($articles as $key => $article): ?>
        <?php $author = $authors[$article['author']]; ?>
        <article>
            <h2><?= $article['title'] ?></h2>

            <a href="<?= $author['link'] ?>"><?= $author['firstName'] . ' ' . $author['lastName'] ?></a>

            <div><?= date('d/m/Y', $article['date']) ?></div>
            <img src="<?= $article['image'] ?>">
            <p><?= $article['description'] ?></p>

            <a href="article.php?id=<?= $key ?>">Read more</a>
        </article>
    <?php endforeach ?>

<?php include 'partials/footer.php' ?>