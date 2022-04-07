<?php

declare(strict_types=1);

const QUERY_COMMENTS = 'SELECT * FROM comments WHERE news_id = ?';

function getComments(PDO $db, int $id) {
    $stmt = $db->prepare(QUERY_COMMENTS);
    $stmt->execute(array($id));
    return $stmt->fetchAll();
}
