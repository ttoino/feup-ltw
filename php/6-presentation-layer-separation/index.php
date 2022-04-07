<?php

declare(strict_types=1);

require_once('./templates/common.php');
require_once('./templates/news.php');

require_once('./database/connection.php');
require_once('./database/news.php');

$db = getDatabaseConnection();
$articles = getAllNews($db);
?>

<?php printHeader(); ?>
<section id="news">
    <?php printArticles($articles); ?>
</section>
<?php printFooter(); ?>