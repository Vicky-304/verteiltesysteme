const sucheInput = document.getElementById('txtSuche')
const sucheLabel = document.getElementById('lblSuche')
const suchenBtn = document.getElementById('btnSuchen')
const shop = document.getElementById('shop-wrapper')
const url_test =  'http://kexx.ddns.net:8085/'; //'http://localhost:8080/'

window.onload = loadAllProducts()

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
    img.setAttribute('src', '../'+data.img)
    //img.setAttribute('alt', data.alt)

    const entry_details = document.createElement('div')
    entry_details.classList.add('entry-details')

    const desc = document.createElement('label')
    desc.classList.add('description')
    desc.innerHTML = data.name
    desc.innerHTML += data.description

    const price = document.createElement('label')
    price.classList.add('price')
    price.innerHTML = data.price

    entry_details.appendChild(desc)
    entry_details.appendChild(price)

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