<?php

declare(strict_types=1);

require_once('./templates/common.php');
?>

<?php printHeader() ?>
<section id="login">
    <h1>Login</h1>
    <form>
        <label> Username <input type="text" name="username" /> </label>
        <label>
            Password <input type="password" name="password" />
        </label>
        <button formaction="#" formmethod="post">Login</button>
    </form>
</section>
<?php printFooter() ?>