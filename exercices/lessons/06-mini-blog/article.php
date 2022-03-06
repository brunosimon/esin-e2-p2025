<?php
    include 'includes/config.php';
    include 'includes/data.php';

    $id = $_GET['id'] ?? null;
    $article = $articles[$id] ?? null;

    if($article === null)
    {
        header('location:404.php');
    }

    $author = $authors[$article['author']];

    include 'partials/header.php';
?>

    <article>
        <h2><?= $article['title'] ?></h2>

        <a href="<?= $author['link'] ?>"><?= $author['firstName'] . ' ' . $author['lastName'] ?></a>

        <div><?= date('d/m/Y', $article['date']) ?></div>
        <img src="<?= $article['image'] ?>">
        <p><?= $article['description'] ?></p>
        <p><?= $article['content'] ?></p>

    </article>

<?php include 'partials/footer.php' ?>