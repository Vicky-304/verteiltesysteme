const sucheInput = document.getElementById('txtSuche')
const sucheLabel = document.getElementById('lblSuche')
const suchenBtn = document.getElementById('btnSuchen')
const shop = document.getElementById('shop-wrapper')
const createDiyBtn = document.getElementById('createDiyBtn')
const closeEditBtn = document.getElementById('closeEditBtn')
const closeDeleteBtn = document.getElementById('closeDeleteBtn')
const closeOrderBtn = document.getElementById('closeOrderBtn')
const closeCreateBtn = document.getElementById('closeCreateBtn')
const openCreateBtn = document.getElementById('createDiyBtn')
const url_test =  'http://kexx.ddns.net:8085/'; //'http://localhost:8080/'


openCreateBtn.addEventListener("click", function() {
    openCreate()
})
closeCreateBtn.addEventListener("click", function() {
    closeCreate()
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


function updateSelectedProducts() {
    const productBox = document.getElementById('productsGrid');
    const checkboxes = productBox.querySelectorAll('input[type="checkbox"]');
    const selectedProducts = [];
    
    checkboxes.forEach(checkbox => {
        if (checkbox.checked) {
            selectedProducts.push(checkbox.value);
        }
    });
    
    document.getElementById('products').innerText = selectedProducts.join(', ');
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

function openCreate() {
    document.getElementById("createPopup").style.width = "100%";
}

function closeCreate() {
    document.getElementById("createPopup").style.width = "0%";
}









//window.onload = loadAllProducts()

// auf dem Suchen Button werden zuerst alle Produkte gelöscht, damit keine Doppelten Einträge entstehen
// und danach mit dem jeweiligen Input die entsprechenden Produkte generiert
// es gibt einen Fallunterschied, wenn es keine Produkte oder mind. 1 Produkt gibt
// falls der Input leer ist werden alle Produkte generiert
suchenBtn.addEventListener('click', function() {
    removeAllProducts()

    if(sucheInput.value != ""){
        fetch(url_test + "search/" + sucheInput.value, {
            method: 'GET'
        })
        .then((response) => response.json())
        .then((data) => {
            if(data != null){
                data.forEach(element => {
                    buildEntry(element)
                });
            } else {
                noProductsFound()
            }
        })
        .catch((error) => {console.log(error)}) 
    } else {
        loadAllProducts()
    } 
})

// styling für das Input Feld wenn es angeklickt wird
sucheInput.addEventListener('focus', function () {
    sucheLabel.classList.add('float')
    sucheLabel.classList.add('focus')
})

// styling für das Input Feld wenn es den Fokus verliert
// Fallunterscheidung, wenn ein Wert drin steht (wird nur das Fokus styling gelöscht) und wenn es leer ist (wird alles wieder auf default gesetzt)
sucheInput.addEventListener('blur', function () {
    sucheLabel.classList.remove('focus')
    if (!sucheInput.value) {
        sucheLabel.classList.remove('float')
    }
})


// Hier werden die jeweiligen n einträge generiert
// Ein neues Div wird erstellt und dort werden Bild, Name + Beschreibung, Preis als Childs angehangen 
// und am Ende an das bereits vorhandene Div "Shop" wieder als Child angehangen
function buildEntry(data){
    const shop_entry = document.createElement('div')
    shop_entry.classList.add('shop-entry')
    
    const img = document.createElement('img')
    img.setAttribute('id', 'img-entry')
    img.setAttribute('src', '../' + data.img)
    //img.setAttribute('alt', data.alt) TODO

    const entry_details = document.createElement('div')
    entry_details.classList.add('entry-details')

    const desc = document.createElement('label')
    desc.classList.add('description')
    desc.innerHTML = data.name
    desc.innerHTML += data.description

    const price = document.createElement('label')
    price.classList.add('price')
    price.innerHTML = data.price

    const icons = document.createElement('div')
    icons.classList.add('icons')
    const editSpan = document.createElement('span')
    editSpan.setAttribute('id', 'edit')
    const editImg = document.createElement('img')
    editImg.setAttribute('src', '../icons/editPen.png')
    editSpan.appendChild(editImg)

    const deleteSpan = document.createElement('span')
    deleteSpan.setAttribute('id', 'delete')
    const deleteImg = document.createElement('img')
    deleteImg.setAttribute('src', '../icons/trashcan.png')
    deleteSpan.appendChild(deleteImg)

    icons.appendChild(deleteSpan)
    icons.appendChild(editSpan)

    entry_details.appendChild(desc)
    entry_details.appendChild(price)
    entry_details.appendChild(icons)

    shop_entry.appendChild(img)
    shop_entry.appendChild(entry_details)

    shop.appendChild(shop_entry)
}


// Falls keine Einträge passend gefunden wurde
// wird ein einzelner Eintrag, dass mit dem Input nichts gefunden wurde
function noProductsFound(){
    const shop_entry = document.createElement('div')
    shop_entry.classList.add('shop-entry')

    const entry_details = document.createElement('div')
    entry_details.classList.add('entry-details')

    const desc = document.createElement('label')
    desc.classList.add('description')
    desc.innerHTML = `Keine Produkte für "${sucheInput.value}" gefunden.`

    entry_details.appendChild(desc)

    shop_entry.appendChild(entry_details)

    shop.appendChild(shop_entry)
    shop.classList.add('empty')
}


// hier werden alle Einträge gelöscht
function removeAllProducts() {
    while(shop.hasChildNodes){
        if(shop.firstChild != null){
            shop.removeChild(shop.firstChild)
        } else {
            break;
        }
    }
}

// es werden alle Einträge von der API abgefragt und generiert
async function loadAllProducts(){
    fetch(url_test + "products/all", {
        method: 'GET'
    })
    .then((response) => response.json())
    .then((data) => {
        data.forEach(element => {
            buildEntry(element)
        });
    })
    .catch((error) => {console.log(error)}) 
}

// einen automatischen Slider für den Tab-Namen damit alles lesbar ist
function titleScroller(text) {
    document.title = text;
    setTimeout(function () {
        titleScroller(text.substr(1) + text.substr(0, 1));
    }, 175);
}("Willkommen im Onlineshop von SpringCraft & Co.                   ");