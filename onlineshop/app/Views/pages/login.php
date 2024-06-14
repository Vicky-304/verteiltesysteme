<script src="path/to/allg.js"></script>
<script>openLogin();</script>
<div class="login" id="login">
    <div class="loginInput">
        <h3>Anmeldung</h3>
        <a href="javascript:void(0)" class="closebtn" id="closeLoginBtn">&times;</a>
        <form class="userInput" action="<?= site_url('login/process'); ?>" method="post">
            <div>
                <label for="username">Username:</label>
                <input type="text" maxlength="30" name="username" id="username">
            </div>
            <div>
                <label for="passwort">Passwort:</label>
                <input type="password" name="passwort" id="password">
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</div>