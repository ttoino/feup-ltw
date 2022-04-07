<?php
$query = 'SELECT news.*, users.*, COUNT(comments.id) AS comments
FROM news JOIN
     users USING (username) LEFT JOIN
     comments ON comments.news_id = news.id
GROUP BY news.id, users.username
ORDER BY published DESC';

$db = new PDO('sqlite:../2-sqlite-db-creation/news.db');

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_NAMED);

$stmt = $db->prepare($query);
$stmt->execute();
$articles = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Super Legit News</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../../css/1-online-newspaper/style.css" rel="stylesheet" />
    <link href="../../css/1-online-newspaper/layout.css" rel="stylesheet" />
    <link href="../../css/1-online-newspaper/responsive.css" rel="stylesheet" />
    <link href="../../css/1-online-newspaper/comments.css" rel="stylesheet" />
    <link href="../../css/1-online-newspaper/forms.css" rel="stylesheet" />
</head>

<body>
    <header>
        <h1><a href=".">Super Legit News</a></h1>
        <h2><a href=".">Where fake news are born!</a></h2>
        <div id="signup">
            <a href="register.html">Register</a>
            <a href="login.html">Login</a>
        </div>
    </header>
    <nav id="menu">
        <!-- just for the hamburguer menu in responsive layout -->
        <input type="checkbox" id="hamburger" />
        <label class="hamburger" for="hamburger"></label>

        <ul>
            <li><a href=".">Local</a></li>
            <li><a href=".">World</a></li>
            <li><a href=".">Politics</a></li>
            <li><a href=".">Sports</a></li>
            <li><a href=".">Science</a></li>
            <li><a href=".">Weather</a></li>
        </ul>
    </nav>
    <aside id="related">
        <article>
            <h1><a href="#">Duis arcu purus</a></h1>
            <p>
                Etiam mattis convallis orci eu malesuada. Donec odio ex,
                facilisis ac blandit vel, placerat ut lorem. Ut id sodales
                purus. Sed ut ex sit amet nisi ultricies malesuada.
                Phasellus magna diam, molestie nec quam a, suscipit finibus
                dui. Phasellus a.
            </p>
        </article>
        <article>
            <h1><a href="#">Sed efficitur interdum</a></h1>
            <p>
                Integer massa enim, porttitor vitae iaculis id, consequat a
                tellus. Aliquam sed nibh fringilla, pulvinar neque eu,
                varius erat. Nam id ornare nunc. Pellentesque varius ipsum
                vitae lacus ultricies, a dapibus turpis tristique. Sed
                vehicula tincidunt justo, vitae varius arcu.
            </p>
        </article>
        <article>
            <h1><a href="#">Vestibulum congue blandit</a></h1>
            <p>
                Proin lectus felis, fringilla nec magna ut, vestibulum
                volutpat elit. Suspendisse in quam sed tellus fringilla
                luctus quis non sem. Aenean varius molestie justo, nec
                tincidunt massa congue vel. Sed tincidunt interdum laoreet.
                Vivamus vel odio bibendum, tempus metus vel.
            </p>
        </article>
    </aside>
    <section id="news">

        <?php
        foreach ($articles as $article) {
            $id = $article['id'];
            $title = $article['title'];
            $comments = $article['comments'];
            $intro = $article['introduction'];
            $text = $article['fulltext'];
            $tags = $article['tags'];
            $published = $article['published'];
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
                <?php } ?>

                <footer>
                    <span class="author"><?= $article['name'] ?></span>
                    <span class="tags">
                        <?php foreach (explode(',', $tags) as $tag) { ?>
                            <a href=".">#<?= $tag ?></a>
                        <?php } ?>
                    </span>
                    <span class="date"><?= date('F j', $published) ?></span>
                    <a class="comments" href="item.php?id=<?= $id ?>#comments"><?= $comments ?></a>
                </footer>
            </article>

        <?php } ?>

    </section>
    <footer>
        <p>&copy; Fake News, 2022</p>
    </footer>
</body>

</html>