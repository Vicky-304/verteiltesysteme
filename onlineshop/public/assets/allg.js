
const cookiesbtn = document.getElementById('cookiesbtn');
const closebtn = document.getElementById('closebtn');
const navbtn = document.getElementById('menu');
const profilebtn = document.getElementById('profile');
const closeProfileBtn = document.getElementById('closeProfileBtn');
const shopbtn = document.getElementById('shop_bag');
const closeShopBtn = document.getElementById('closeShopBtn');
const loginBtn = document.getElementById('loginBtn');
const logoutBtn = document.getElementById('logoutBtn');
const closeLoginBtn = document.getElementById('closeLoginBtn')

//Wenn Cookies bereits bestätingt wurden, wird der automatisch Banner gelöscht
if (document.cookie.includes("cookieBanner=accepted")) {
    document.getElementById("cookies").style.display = "none";
}

//wenn der User bereits eingeloggt ist, wird der Login Button ausgeblendet
if (document.cookie.includes("login=true")) {
    if (loginBtn) {
        loginBtn.style.display = "none";
    }
    if (logoutBtn) {
        logoutBtn.style.display = "";
    }
}



cookiesbtn.addEventListener("click", cookies_accept);
closebtn.addEventListener("click", closeNav);
navbtn.addEventListener("click", openNav);
profilebtn.addEventListener("click", function () {
    openProfile()
})
closeProfileBtn.addEventListener("click", function () {
    closeProfile()
})
shopbtn.addEventListener("click", function () {
    openShop()
})
closeShopBtn.addEventListener("click", function () {
    closeShop()
})
if(loginBtn) {
    loginBtn.addEventListener("click", function () {
        openLogin()
    })
}
if(logoutBtn) {
    logoutBtn.addEventListener("click", function () {
        var expirationDate = new Date();
        expirationDate.setFullYear(expirationDate.getFullYear() - 1); // Set expiration date to one year ago
        document.cookie = "login=false; path=/; expires=" + expirationDate.toUTCString() + ";";
        document.cookie = "id=; path=/; expires=" + expirationDate.toUTCString() + ";";
        window.location.reload();
    })
}
closeLoginBtn.addEventListener("click", function () {
    closeLogin()
})


// gesamter Cookie Banner wird gelöscht
function cookies_accept() {
    document.getElementById("cookies").style.display = "none";
    document.cookie = "cookieBanner=accepted; max-age=3600"; //läuft nach 1h ab 
}

// die Sidenavigation wird geöffnet
// falls die Profil-/Shop-Sidenavigation noch offen ist, wird diese zuerst geschlossen
function openNav() {
    if (document.getElementById("myProfileSidenav").classList.contains('active-sidenav')) {
        closeProfile()
    }
    if (document.getElementById("myShopSidenav").classList.contains('active-sidenav')) {
        closeShop()
    }
    document.getElementById("mySidenav").style.width = "100vw";
}

// hier wird die Sidenavigation geschlossen
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

// Profil-Sidenavigation wird geöffnet
function openProfile() {
    document.getElementById("myProfileSidenav").classList.add('active-sidenav');
}

// Profil-Sidenavigation wird geschlossen
function closeProfile() {
    document.getElementById("myProfileSidenav").classList.remove('active-sidenav');
}

// Warenkorb-Sidenavigation wird geöffnet
function openShop() {
    document.getElementById("myShopSidenav").classList.add('active-sidenav');
}

// Warenkorb-Sidenavigation wird geschlossen
function closeShop() {
    document.getElementById("myShopSidenav").classList.remove('active-sidenav');
}

function openLogin() {
    document.getElementById("login").style.width = "100%";
}

function closeLogin() {
    document.getElementById("login").style.width = "0%";
}