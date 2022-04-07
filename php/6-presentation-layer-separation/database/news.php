<?php

declare(strict_types=1);

const QUERY_ALL_NEWS = 'SELECT news.*, users.*, COUNT(comments.id) AS comments
FROM news JOIN
        users USING (username) LEFT JOIN
        comments ON comments.news_id = news.id
GROUP BY news.id, users.username
ORDER BY published DESC';

const QUERY_ARTICLE = 'SELECT * FROM news WHERE id = ?';

function getAllNews(PDO $db) {
    $stmt = $db->prepare(QUERY_ALL_NEWS);
    $stmt->execute();
    return $stmt->fetchAll();
}

function getArticle(PDO $db, int $id) {
    $stmt = $db->prepare(QUERY_ARTICLE);
    $stmt->execute(array($id));
    return $stmt->fetch();
}
