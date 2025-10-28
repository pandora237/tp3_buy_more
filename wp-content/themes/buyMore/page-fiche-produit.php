<?php
/**
 * Template Name: Fiche Produit
 * Description: Page de détail d'un produit
 */

get_header(); ?>

<!-- Ajouter FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/produit.css">

<main>
    <div class="container">
        <div class="product-page">
            <!-- Breadcrumb -->
            <nav class="breadcrumb">
                <a href="#">Accueil</a>
                <span>/</span>
                <a href="#">Électronique</a>
                <span>/</span>
                <a href="#">Smartphones</a>
                <span>/</span>
                <span>iPhone 14 Pro Max</span>
            </nav>

            <!-- Product Details Section -->
            <div class="product-details">
                <!-- Left: Image Gallery -->
                <div class="product-images">
                    <div class="main-image">
                        <img id="mainImage" src="https://via.placeholder.com/500" alt="iPhone 14 Pro Max">
                    </div>
                    <div class="thumbnail-container">
                        <img class="thumbnail active" src="https://via.placeholder.com/100" alt="Thumbnail 1" onclick="changeImage(this)">
                        <img class="thumbnail" src="https://via.placeholder.com/100" alt="Thumbnail 2" onclick="changeImage(this)">
                        <img class="thumbnail" src="https://via.placeholder.com/100" alt="Thumbnail 3" onclick="changeImage(this)">
                        <img class="thumbnail" src="https://via.placeholder.com/100" alt="Thumbnail 4" onclick="changeImage(this)">
                    </div>
                </div>

                <!-- Right: Product Info -->
                <div class="product-info">
                    <h1>iPhone 14 Pro Max</h1>
                    <p class="brand">Marque: <strong>Apple</strong></p>
                    <div class="rating">
                        <span class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </span>
                        <span class="reviews">(128 avis)</span>
                    </div>
                    <p class="price">1 299 000 FCFA</p>
                    <p class="availability">Disponible en stock</p>

                    <!-- Product Options -->
                    <div class="product-options">
                        <label for="color">Couleur:</label>
                        <select id="color">
                            <option>Noir</option>
                            <option>Argent</option>
                            <option>Or</option>
                        </select>

                        <label for="storage">Capacité:</label>
                        <select id="storage">
                            <option>128 Go</option>
                            <option>256 Go</option>
                            <option>512 Go</option>
                        </select>

                        <label for="quantity">Quantité:</label>
                        <input type="number" id="quantity" value="1" min="1">
                    </div>

                    <!-- Action Buttons -->
                    <div class="action-buttons">
                        <button class="btn-add-to-cart"><i class="fas fa-shopping-cart"></i> Ajouter au panier</button>
                        <button class="btn-buy-now"><i class="fas fa-bolt"></i> Acheter maintenant</button>
                        <button class="btn-wishlist"><i class="far fa-heart"></i> Ajouter aux favoris</button>
                    </div>
                </div>
            </div>

            <!-- Tabs Section -->
            <div class="tabs">
                <button class="tab-button active" onclick="openTab(event, 'description')">Description</button>
                <button class="tab-button" onclick="openTab(event, 'specifications')">Spécifications</button>
                <button class="tab-button" onclick="openTab(event, 'reviews')">Avis</button>
            </div>

            <!-- Tab Content -->
            <div id="description" class="tab-content active">
                <h2>Description du produit</h2>
                <p>
                    L'iPhone 14 Pro Max est le smartphone le plus avancé d'Apple, offrant des performances exceptionnelles avec sa puce A16 Bionic. 
                    Il dispose d'un écran Super Retina XDR de 6,7 pouces, d'un système photo professionnel avec un capteur principal de 48 MP, 
                    et de la technologie Dynamic Island pour une interaction fluide avec vos notifications.
                </p>
            </div>

            <div id="specifications" class="tab-content">
                <h2>Spécifications techniques</h2>
                <ul>
                    <li><strong>Écran:</strong> Super Retina XDR 6,7 pouces</li>
                    <li><strong>Processeur:</strong> Puce A16 Bionic</li>
                    <li><strong>Caméra:</strong> Triple caméra 48MP + 12MP + 12MP</li>
                    <li><strong>Batterie:</strong> Jusqu'à 29 heures de lecture vidéo</li>
                    <li><strong>Système d'exploitation:</strong> iOS 16</li>
                </ul>
            </div>

            <div id="reviews" class="tab-content">
                <h2>Avis des clients</h2>
                <div class="review">
                    <div class="review-header">
                        <span class="reviewer-name"><i class="fas fa-user-circle"></i> Jean Dupont</span>
                        <span class="review-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </span>
                    </div>
                    <p class="review-text">Excellent produit ! La qualité de l'écran et des photos est impressionnante.</p>
                    <p class="review-date">Publié le 12 octobre 2024</p>
                </div>

                <div class="review">
                    <div class="review-header">
                        <span class="reviewer-name"><i class="fas fa-user-circle"></i> Marie Martin</span>
                        <span class="review-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </span>
                    </div>
                    <p class="review-text">Très bon téléphone, mais un peu cher. La batterie tient toute la journée.</p>
                    <p class="review-date">Publié le 5 octobre 2024</p>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/produit.js"></script>

<?php get_footer(); ?>
