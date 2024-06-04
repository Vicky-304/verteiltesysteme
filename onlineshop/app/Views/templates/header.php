<div class="header">
    <header>
        <img src="<?php echo base_url('pictures/icons/Logo.png') ?>">
        <p>SpringCraft & Co.</p>
    </header>
    <nav>
        <span id="menu">&#9776;</span>
        <div class="profile_shop">
            <span id="shop_bag"><img src="<?php echo base_url('pictures/icons/shopping-bag.png') ?>"
                    id="shop_bag_icon"></span>
            <span id="profile"><img src="<?php echo base_url('pictures/icons/account.png') ?>" id="profile_icon"></span>
        </div>
    </nav>
</div>

<main>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" id="closebtn">&times;</a>
        <a href="../index/index.html" id="home">HOME</a>
        <a href="#" id="profile">MEIN KONTO</a>
        <a href="../shop/Shop.html" id="shop">SHOP</a>
        <a href="../diy/diy.html" id="diy">DIY</a>
        <a href="../contact/contact.html" id="contact">KONTAKT</a>
    </div>
    <div id="myProfileSidenav" class="profileSidenav">
        <a href="javascript:void(0)" class="closebtn" id="closeProfileBtn">&times;</a>
        <h3>Profil</h3>
        <div id="profileData">
            <a>aktuell sind Sie nicht eingeloggt.</a>
        </div>
        <button id="loginBtn">Anmelden</button>
    </div>
    <div class="login" id="login">
        <div class="loginInput">
            <h3>Anmeldung</h3>
            <a href="javascript:void(0)" class="closebtn" id="closeLoginBtn">&times;</a>
            <div class="userInput">
                <label>Username: </label><input type="text"> <br><br>
                <label>Password: </label><input type="password">
            </div>
            <button>anmelden</button>
        </div>
    </div>
    <div id="myShopSidenav" class="shopSidenav">
        <a href="javascript:void(0)" class="closebtn" id="closeShopBtn">&times;</a>
        <h3>Warenkorb</h3>
        <a>Es befinden sich momentan keine Produkte im Warenkorb.</a>
    </div>