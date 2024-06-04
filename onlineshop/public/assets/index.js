const vid = document.getElementById('vid')
const imageWrapper = document.querySelector('.image-wrapper')
const imageItems = document.querySelectorAll('.image-wrapper > *')
const imageLength = imageItems.length
const videoObserver = new IntersectionObserver(pauseVideoIfOutOfView, { threshold: 0.5 });

videoObserver.observe(vid);

// falls das Karusell nicht in Sicht ist, wird es pausiert
function pauseVideoIfOutOfView(entries, observer) {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            vid.pause();
        } else {
            vid.play();
        }
    });
}

// Für den langen Tab-Namen einen automatischen Slider
function titleScroller(text) {
    document.title = text;
    setTimeout(function () {
        titleScroller(text.substr(1) + text.substr(0, 1));
    }, 500);
} (" Willkommen im Onlineshop von SpringCraft & Co. ");


const perView = 3
let totalScroll = 0

// Hier wird die Länge des Karusells bestimmt und als Liste generiert
imageWrapper.style.setProperty('--per-view', perView)
for (let i = 0; i < perView + 1; i++) {
    imageWrapper.insertAdjacentHTML('beforeend', imageItems[i].outerHTML)
}

let autoScroll = setInterval(scrolling, 2500)

// Styling und Funktion des Karusells, damit alle Bilder zentiert verschoben werden
// und alle 1x "fokusiert"
function scrolling() {
    totalScroll++
    if (totalScroll == imageLength + 1) {
        clearInterval(autoScroll)
        totalScroll = 1
        imageWrapper.style.transition = '0s'
        imageWrapper.style.left = '0'
        autoScroll = setInterval(scrolling, 2500)
    }
    const widthEl = document.querySelector('.image-wrapper > :first-child').offsetWidth + 1
    imageWrapper.style.left = `-${totalScroll * widthEl}px`
    imageWrapper.style.transition = '.3s'
}