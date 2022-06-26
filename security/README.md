# Web Security Exercises

## 1. SQL Injection

1. Download, extract, and then run [this very simple PHP project](security01.zip) using:

    ```console
    php -S localhost:9000
    ```

2. Inspect the project. You should have:

    - an index page that shows the currently logged-in user.
    - a login page that sends login info to the action_login page.
    - a database.sql file with some initial data.

3. Passwords are stored in SHA1 format. For example, the password for user 'johndoe' is '1234'. Try to log in and log out using that user's credentials.

4. Now, let's try to log in with another user without knowing her password. Try this as a username:

    ```sql
    ' OR 1 = 1 GROUP BY username HAVING username='janedoe';--
    ```

    No password is needed!

5. Understand the vulnerability, and fix it!

## 2. Password Storage

1. Continuing with the same example, notice that we are using SHA1 to store passwords and we are not using salt.

2. Change the example so that we are using [password_hash](https://www.php.net/manual/en/function.password-hash.php) and [password_verify](https://www.php.net/manual/en/function.password-verify.php).

3. What are the advantages of using different salts for each user, even if we are storing everything in the same place?

## 3. Cross-Site Scripting (XSS)

1. Download, extract, and then run [this very simple PHP project](security02.zip) using:

    ```console
    php -S localhost:9000
    ```

2. Inspect the project. You should have:

    - an index page that shows a form to create posts and a list of posts.
    - an action_save_post.php page that receives a new post and saves it to the database.
    - a database.sql file with some initial data.

    Notice that usernames and passwords are still not being verified, but that is not important for now.

3. Try creating a post using 'janedoe' as the username, and 'Goodbye!' as the text. A new post should appear.

4. Now try this as the username:

    ```html
    notevil<script>console.log('Hello!!!')</script>
    ```

    And this, as the text: 'This is a perfectly safe post.'.

5. Check the developer console. We are executing JavaScript from injected code. This is XSS!

6. Let's try something more dangerous:

    Username:

    ```html
    stillnotevil<script>[...document.querySelectorAll('input')].forEach(i => i.addEventListener('input', function(){console.log(this.value)}))</script>
    ```

    Text: 'This is also extremely safe!'.

7. Try writing something in the username or password input field and watch the console. We could even be sending that data to a remote server using fetch...

8. Try fixing the problem using several different strategies:

    - Raise an error when special characters are used in usernames and post texts.
    - Filtering special characters without raising an error.
    - Before outputting any data from a dangerous source (e.g., the user), encode it. For example using [htmlentities()](https://www.php.net/manual/en/function.htmlentities.php).

## 4. Cross-Site Request Forgery (CSRF)

**(soon...)**

## 5. Path Traversal

**(soon...)**
