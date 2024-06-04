const cookiesbtn = document.getElementById('cookiesbtn');
const closebtn = document.getElementById('closebtn');
const navbtn = document.getElementById('menu');
const profilebtn = document.getElementById('profile');
const closeProfileBtn = document.getElementById('closeProfileBtn');
const shopbtn = document.getElementById('shop_bag');
const closeShopBtn = document.getElementById('closeShopBtn');
const loginBtn = document.getElementById('loginBtn')
const closeLoginBtn = document.getElementById('closeLoginBtn')
const closeEditBtn = document.getElementById('closeEditBtn')
const closeDeleteBtn = document.getElementById('closeDeleteBtn')
const closeOrderBtn = document.getElementById('closeOrderBtn')


cookiesbtn.addEventListener("click", cookies_accept);
closebtn.addEventListener("click", closeNav);
navbtn.addEventListener("click", openNav);
profilebtn.addEventListener("click", function() {
    openProfile()
})
closeProfileBtn.addEventListener("click", function() {
    closeProfile()
})
shopbtn.addEventListener("click", function() {
    openShop()
})
closeShopBtn.addEventListener("click", function() {
    closeShop()
})
loginBtn.addEventListener("click", function() {
    openLogin()
})
closeLoginBtn.addEventListener("click", function() {
    closeLogin()
})
closeEditBtn.addEventListener("click", function() {
    closeEdit()
})
closeDeleteBtn.addEventListener("click", function() {
    closeDelete()
})
closeOrderBtn.addEventListener("click", function() {
    closeOrder()
})


// gesamter Cookie Banner wird gelöscht
function cookies_accept() {
    document.getElementById("cookies").remove();
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

function openEdit() {
    document.getElementById("editPopup").style.width = "100%";
}

function closeEdit() {
    document.getElementById("editPopup").style.width = "0%";
}

function openDelete() {
    document.getElementById("deletePopup").style.width = "100%";
}

function closeDelete() {
    document.getElementById("deletePopup").style.width = "0%";
}

function openOrder() {
    document.getElementById("orderPopup").style.width = "100%";
}

function closeOrder() {
    document.getElementById("orderPopup").style.width = "0%";
}

