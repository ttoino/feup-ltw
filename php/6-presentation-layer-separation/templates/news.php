<?php

declare(strict_types=1);

function printArticleFooter($article) {
    $id = $article['id'];
    $author = $article['name'];
    $comments = $article['comments'];
    $tags = $article['tags'];
    $published = $article['published'];
?>
    <footer>
        <span class="author"><?= $author ?></span>
        <span class="tags">
            <?php foreach (explode(',', $tags) as $tag) { ?>
                <a href=".">#<?= $tag ?></a>
            <?php } ?>
        </span>
        <span class="date"><?= date('F j', $published) ?></span>
        <a class="comments" href="item.php?id=<?= $id ?>#comments"><?= $comments ?></a>
    </footer>
<?php }

function printArticle($article, $comments = null) {
    $id = $article['id'];
    $title = $article['title'];
    $intro = $article['introduction'];
    $text = $article['fulltext'];
?>

    <article>
        <header>
            <h1>
                <a href="item.php?id=<?= $id ?>"><?= $title ?></a>
            </h1>
        </header>
        <img src="https://picsum.photos/600/300?<?= $id ?>" alt="" />
        <p><?= $intro ?></p>

        <?php foreach (explode("\n\n", $text) as $paragraph) { ?>
            <p><?= $paragraph ?></p>
        <?php
        }

        if ($comments !== null)
            printCommentsSection($comments);

        printArticleFooter($article);
        ?>

    </article>

<?php }

function printArticles($articles) {
    foreach ($articles as $article)
        printArticle($article);
} ?>