const createDiyBtn = document.getElementById('createDiyBtn')
const closeEditBtn = document.getElementById('closeEditBtn')
const closeDeleteBtn = document.getElementById('closeDeleteBtn')
const closeOrderBtn = document.getElementById('closeOrderBtn')
const closeCreateBtn = document.getElementById('closeCreateBtn')
const openCreateBtn = document.getElementById('createDiyBtn')


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

function openEdit(param) {
    document.getElementById("editPopup").style.width = "100%";
    setDiyId(param);
}

function closeEdit() {
    document.getElementById("editPopup").style.width = "0%";
}

function openDelete(param) {
    document.getElementById("deletePopup").style.width = "100%";
    setDiyId(param);
}

function setDiyId(param) {
    document.cookie = `diyId=${param}`;
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

function updateSelectedProducts(param) {
    const productBox = document.getElementById(`productsGrid${param}`);
    const checkboxes = productBox.querySelectorAll('input[type="checkbox"]');
    const selectedProducts = [];
    
    checkboxes.forEach(checkbox => {
        if (checkbox.checked) {
            selectedProducts.push(checkbox.value);
        }
    });
    
    document.getElementById(`products${param}Input`).setAttribute('value', selectedProducts.join(', '));
    document.getElementById(`products${param}Label`).innerHTML = selectedProducts.join(', ');
}





// einen automatischen Slider für den Tab-Namen damit alles lesbar ist
function titleScroller(text) {
    document.title = text;
    setTimeout(function () {
        titleScroller(text.substr(1) + text.substr(0, 1));
    }, 175);
}("Willkommen im Onlineshop von SpringCraft & Co.                   ");