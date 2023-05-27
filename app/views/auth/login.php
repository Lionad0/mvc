<h1>LOGIN</h1>
<form action="" method="post">
    <label for="user">username</label>
    <input type="text" name="username" required>
    <br>
    <label for="pass">password</label>
    <input type="password" name="password" required>
    <br>
    <button type="submit" name="login">LOGIN</button>
</form>
<p>Don't have an account? <a href="<?= BASEURL; ?>/register">register here!</a></p>
