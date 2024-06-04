<div class="header">
    <header>
        <img src="<?php echo base_url('icons/Logo.png') ?>">
        <p>SpringCraft & Co.</p>
    </header>
    <nav>
        <span id="menu">&#9776;</span>
        <div class="profile_shop">
            <span id="shop_bag"><img src="<?php echo base_url('icons/shopping-bag.png') ?>" id="shop_bag_icon"></span>
            <span id="profile"><img src="<?php echo base_url('icons/account.png') ?>" id="profile_icon"></span>
        </div>
    </nav>
</div>

<main>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" id="closebtn">&times;</a>
        <a href="<? echo base_url() ?>" id="home">HOME</a>
        <a href="#" id="profile">MEIN KONTO</a>
        <a href="<? echo base_url('shop/') ?>" id="shop">SHOP</a>
        <a href="<? echo base_url('diy/') ?>" id="diy">DIY</a>
        <a href="<? echo base_url('kontakt/') ?>" id="contact">KONTAKT</a>
    </div>
    <div id="myProfileSidenav" class="profileSidenav">
        <a href="javascript:void(0)" class="closebtn" id="closeProfileBtn">&times;</a>
        <h3>Profil</h3>
        <div id="profileData">
            <?php if (isset($_COOKIE['login']) && $_COOKIE['login'] == 'true'): ?>
                <a>Willkommen zurück!</a>
            <?php else: ?>
                <a>Bitte melden Sie sich an, um Ihr Profil zu sehen.</a>
            <? endif ?>
            <button class="loginBtn" id="loginBtn">Anmelden</button>
        </div>

    </div>
    <div class="login" id="login">
        <div class="loginInput">
            <h3>Anmeldung</h3>
            <a href="javascript:void(0)" class="closebtn" id="closeLoginBtn">&times;</a>
            <form class="userInput" action="<?= site_url('login/process') ?>" method="post">
                <div>
                    <label for="username">Username:</label>
                    <input type="text" max="30" name="username" id="username">
                </div>
                <div><label for="passwort">Passwort:</label>
                    <input type="passwort" name="passwort" id="passwort">
                </div>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
    <div id="myShopSidenav" class="shopSidenav">
        <a href="javascript:void(0)" class="closebtn" id="closeShopBtn">&times;</a>
        <h3>Warenkorb</h3>
        <a>Es befinden sich momentan keine Produkte im Warenkorb.</a>
    </div>
    <div class="fixed" id="cookies">
        COOKIES hier akzeptieren
        <button id="cookiesbtn">Alle Cookies akzeptieren</button>
    </div>