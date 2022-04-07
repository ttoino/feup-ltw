<?php

declare(strict_types=1);

require_once('./templates/common.php');
require_once('./templates/news.php');
require_once('./templates/comments.php');

require_once('./database/connection.php');
require_once('./database/news.php');
require_once('./database/comments.php');

$article_query = 'SELECT news.*, users.*
FROM news JOIN users USING (username)
WHERE id = ?';

$comments_query = 'SELECT *
FROM comments
WHERE news_id = ?';

$id = intval($_GET['id']);

$db = getDatabaseConnection();
$article = getArticle($db, $id);
$comments = getComments($db, $id);

if ($article === false) {
    http_response_code(404);
    require('../common/error.php');
    die;
}

?>

<?php printHeader(); ?>
<section id="news">
    <?php printArticle($article, $comments); ?>
</section>
<?php printFooter(); ?>