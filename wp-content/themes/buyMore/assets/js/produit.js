



// Fonction pour changer d'onglet 
const tabButtons = document.querySelectorAll('.tab-button');

tabButtons.forEach(tab => {
    tab.addEventListener('click', e => {
        openTab(e);
    });
});

function openTab(e) {
    const targetId = e.currentTarget.dataset.id;

    tabButtons.forEach(btn => btn.classList.remove('active'));
    const tabContents = document.querySelectorAll('.tab-content');
    tabContents.forEach(content => content.classList.remove('active'));

    e.currentTarget.classList.add('active');

    const targetContent = document.getElementById(targetId);
    if (targetContent) {
        targetContent.classList.add('active');
    }
}

function changeImage(element) {
    const mainImage = document.getElementById('mainImage');
    if (mainImage) {
        mainImage.src = element.src.replace('/100', '/500');

        const thumbnails = document.getElementsByClassName("thumbnail");
        for (let i = 0; i < thumbnails.length; i++) {
            thumbnails[i].classList.remove("active");
        }

        element.classList.add("active");
    }
}
