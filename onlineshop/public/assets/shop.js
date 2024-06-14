const sucheInput = document.getElementById('txtSuche')
const sucheLabel = document.getElementById('lblSuche')
const suchenBtn = document.getElementById('btnSuchen')
const shop = document.getElementById('shop-wrapper')
const closeOrderBtn = document.getElementById('closeOrderBtn')

closeOrderBtn.addEventListener("click", function () {
    closeOrder()
})


function openOrder() {
    document.getElementById("orderPopup").style.width = "100%";
}
function closeOrder() {
    document.getElementById("orderPopup").style.width = "0%";
}

// auf dem Suchen Button werden zuerst alle Produkte gelöscht, damit keine Doppelten Einträge entstehen
// und danach mit dem jeweiligen Input die entsprechenden Produkte generiert
// es gibt einen Fallunterschied, wenn es keine Produkte oder mind. 1 Produkt gibt
// falls der Input leer ist werden alle Produkte generiert

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


// einen automatischen Slider für den Tab-Namen damit alles lesbar ist
function titleScroller(text) {
    document.title = text;
    setTimeout(function () {
        titleScroller(text.substr(1) + text.substr(0, 1));
    }, 175);
} ("Willkommen im Onlineshop von SpringCraft & Co.                   ");

