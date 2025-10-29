
//  Problème avec produit.js mon fichier produit.js est conçu pour un site HTML/JS pur avec une architecture différente :
// javascript// produit.js essaie d'accéder à une base de données JS qui n'existe pas
// const produit = db.products.find(p => p.id == id_product)
// //  ERREUR : "db is not defined"
// Ce fichier ne peut PAS fonctionner dans WordPress car :
// Il cherche une variable globale db qui n'existe pas
// Il récupère les données via URLSearchParams et non via WordPress
// Il génère dynamiquement le HTML, alors que WordPress utilise PHP pour ça
// Il est fait pour une Single Page Application (SPA), pas pour un CMS

//  Solution avec tabs.js
// On a créé un nouveau fichier minimaliste qui contient uniquement les fonctions JavaScript nécessaires :

// produit.js = Pour site HTML pur avec JS qui gère tout
// tabs.js = Pour WordPress où PHP génère le HTML et JS ajoute l'interactivité
// Voilà pourquoi on a créé tabs.js !

// plus tard, quand on va  intégrerez WooCommerce ou une vraie gestion de produits dans WordPress, on va:

// Adapter produit.js pour fonctionner avec WordPress
// Ou fusionner les deux fichiers

// Mais pour l'instant, tabs.js est la solution la plus simple et fonctionnelle ! 






















// Fonction pour changer d'onglet
function openTab(evt, tabName) {
    // Cacher tous les contenus d'onglets
    const tabContents = document.getElementsByClassName("tab-content");
    for (let i = 0; i < tabContents.length; i++) {
        tabContents[i].classList.remove("active");
    }
    
    // Retirer la classe active de tous les boutons
    const tabButtons = document.getElementsByClassName("tab-button");
    for (let i = 0; i < tabButtons.length; i++) {
        tabButtons[i].classList.remove("active");
    }
    
    // Afficher le contenu de l'onglet actuel
    document.getElementById(tabName).classList.add("active");
    
    // Ajouter la classe active au bouton cliqué
    evt.currentTarget.classList.add("active");
}

// Fonction pour changer l'image principale
function changeImage(element) {
    const mainImage = document.getElementById('mainImage');
    if (mainImage) {
        // Changer l'image principale avec la source de la miniature
        mainImage.src = element.src.replace('/100', '/500');
        
        // Retirer la classe active de toutes les miniatures
        const thumbnails = document.getElementsByClassName("thumbnail");
        for (let i = 0; i < thumbnails.length; i++) {
            thumbnails[i].classList.remove("active");
        }
        
        // Ajouter la classe active à la miniature cliquée
        element.classList.add("active");
    }
}

// Empêcher les erreurs si les éléments n'existent pas
console.log('Tabs.js chargé avec succès');