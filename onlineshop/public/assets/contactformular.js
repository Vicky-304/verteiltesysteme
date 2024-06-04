const nameInput = document.getElementById('txtName')
const nameLabel = document.getElementById('lblName')
const mailInput = document.getElementById('txtEmail')
const mailLabel = document.getElementById('lblEmail')
const msgInput = document.getElementById('txtMessage')
const msgLabel = document.getElementById('lblMessage')
const btn = document.querySelector("#btn");
const btnText = document.querySelector("#btnText");


btn.addEventListener("click", function () {
    sendInfo(btnText, btn)
})
nameInput.addEventListener('focus', function () {
    focusOnInput(nameLabel)
})
nameInput.addEventListener('blur', function () {
    noFocusOnInput(nameLabel, nameInput)
})
mailInput.addEventListener('focus', function () {
    focusOnInput(mailLabel)
})
mailInput.addEventListener('blur', function () {
    noFocusOnInput(mailLabel, mailInput)
})
msgInput.addEventListener('focus', function () {
    focusOnInput(msgLabel)
})
msgInput.addEventListener('blur', function () {
    noFocusOnInput(msgLabel, msgInput)
})

// styling wenn die Input Felder angeklickt werden
function focusOnInput(label) {
    label.classList.add('float')
    label.classList.add('focus')
}

// styling wenn die Input Felder nicht mehr angeklickt sind
// wieder Fallunterscheidung, wenn Input vorhanden ist wird nur der Fokus auf Standard gesetzt,
// wenn kein Input vorhanden ist, wird alles auf Standard gesetzt
function noFocusOnInput(label, input) {
    label.classList.remove('focus')
    if (!input.value) {
        label.classList.remove('float')
    }
}

// hier wird der Senden Button mit cooler Animation angepasst, wenn er geklickt wurde
// falls mind. ein Input Feld leer ist, wird der Button nicht angepasst
function sendInfo(text, button) {
    if(!((nameInput.value == "") || (mailInput.value == "") || (msgInput.value == ""))){
        text.innerHTML = "Thanks :)";
        button.classList.add("active");
    }    
}