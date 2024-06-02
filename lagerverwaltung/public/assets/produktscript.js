enableForm('form');

function enableForm(parentEle_id) {
    var parentEle = document.getElementById(parentEle_id);
    parentEle.querySelectorAll('input, select, button[type=submit], a, textarea').forEach((ele) => {
        ele.disabled = !ele.disabled;
    });
    parentEle.querySelectorAll("button[type=button]").forEach((ele) => {
        if (ele.innerHTML == "Bearbeiten") {
            ele.innerHTML = "Abbrechen";
        } else if (ele.innerHTML == "Abbrechen") {
            ele.innerHTML = "Bearbeiten";
            parentEle.reset();
        }
    });

}