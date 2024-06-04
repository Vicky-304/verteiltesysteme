<body>
    <h1>Login</h1>
    <form action="<?= site_url('login/process') ?>" method="post" enctype="multipart/form-data">
        <label for="username">Username:</label>
        <input type="text" max="30" name="username" id="username">
        <label for="passwort">Passwort:</label>
        <input type="passwort" name="passwort" id="passwort">
        <button type="submit">Login</button>
    </form>
</body>