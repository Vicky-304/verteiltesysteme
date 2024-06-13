document.querySelectorAll('.bestand').forEach(e => {
    if (e.innerText < 1) {
        e.style.color = 'red';
    }
});