<?php
    include './includes/config.php';
    include './includes/data.php';

    // Safely retrieve ID and article
    $id = $_GET['id'] ?? null;
    $article = $articles[$id] ?? null;

    // Article not found
    if(empty($article))
    {
        header('Location:404.php');
        exit;
    }

    // Get author
    $author = $authors[$article['author']];

    // Header
    include './partials/header.php';
?>
    <main class="article">

        <h2><?= $article['title'] ?></h2>
        <div class="info">
            <small><a href="<?= $author['link'] ?>"><?= $author['firstName'] . ' ' . $author['lastName'] ?></a></small>
            <br>
            <small><?= date('d-m-Y', $article['date']) ?></small>
        </div>
        <img src="<?= $article['image'] ?>">
        <p><?= $article['description'] ?></p>
        <p><?= $article['content'] ?></p>

    </main>
<?php
    include './partials/footer.php';
?>