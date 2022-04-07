<?php

declare(strict_types=1);

function printCommentsForm() { ?>
    <form>
        <h2>Add your voice...</h2>
        <label>Username
            <input type="text" name="username" />
        </label>
        <label>E-mail
            <input type="email" name="email" />
        </label>
        <label>Comment
            <textarea name="comment"></textarea>
        </label>
        <button formaction="#" formmethod="post">Reply</button>
    </form>
<?php }

function printComment($comment) {
    $username = $comment['username'];
    $comment_date = $comment['published'];
    $comment_text = $comment['text']
?>
    <article class="comment">
        <span class="user"><?= $username ?></span>
        <span class="date"><?= date('F j', $comment_date) ?></span>
        <p><?= $comment_text ?></p>
    </article>
<?php }

function printCommentsSection($comments) { ?>
    <section id="comments">
        <h1><?= count($comments) ?> Comments</h1>

        <?php
        foreach ($comments as $comment)
            printComment($comment);

        printCommentsForm();
        ?>
    </section>
<?php } ?>