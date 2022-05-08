<?php
    include './includes/config.php';
    include './includes/data.php';
    
    // Header
    include './partials/header.php';
?>
    <?php foreach($nfts as $nft): ?>
        <article>
            <h1><?= $nft['title'] ?></h1>
            <div class="author">
                <?php 
                    $author = $authors[$nft['author']];
                ?>
                <h3>By <?= $author['title'] ?></h3>
                <div class="info">
                    Joined on <?= date('d/m/Y', $author['registrationDate']) ?>
                    <br>Items: <?= number_format($author['items']) ?>
                    <br>Owners: <?= number_format($author['owners']) ?>
                    <?php if(!empty($author['socials']['twitter'])): ?>
                        <br><a href="<?= $author['socials']['twitter'] ?>">Twitter</a>
                    <?php endif ?>
                    <?php if(!empty($author['socials']['instagram'])): ?>
                        <br><a href="<?= $author['socials']['instagram'] ?>">Instagram</a>
                    <?php endif ?>
                    <?php if(!empty($author['socials']['discord'])): ?>
                        <br><a href="<?= $author['socials']['discord'] ?>">Discord</a>
                    <?php endif ?>
                </div>
            </div>
            <img src="<?= $nft['image'] ?>">
            <?php if($nft['sold']): ?>
                <div class="status">
                    Sold for <?= $nft['value'] ?>ETH (<?= number_format($nft['value'] * $ethToUsd, 2) ?> USD) on <?= date('d/m/Y', $nft['saleDate']) ?>
                </div>
                <div class="owner">
                    <?php 
                        $owner = $owners[$nft['owner']];
                    ?>
                    Owner: <?= $owner['name'] ?>
                    <?php if(!empty($owner['socials']['twitter'])): ?>
                        <br><a href="<?= $owner['socials']['twitter'] ?>">Twitter</a>
                    <?php endif ?>
                    <?php if(!empty($owner['socials']['instagram'])): ?>
                        <br><a href="<?= $owner['socials']['instagram'] ?>">Instagram</a>
                    <?php endif ?>
                </div>
            <?php else: ?>
                <div class="status">
                    On sale at <?= $nft['value'] ?>ETH (<?= number_format($nft['value'] * $ethToUsd, 2) ?> USD)
                </div>
            <?php endif ?>
        </article>
    <?php endforeach ?>
<?php
    include './partials/footer.php';
?>