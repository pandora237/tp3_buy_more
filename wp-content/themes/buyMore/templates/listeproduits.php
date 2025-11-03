<?php
/*
Template Name: listeproduits
*/
get_header();
?>
<div class='main container'>
 <h1 class="main-title">Nos Produits</h1>
        
        <section class="section-content">
            <div class="filtre">
                <div class="content-filtre">
                    <h2>Filtre</h2>
                    <div>
                        <div class="items-filter">
                            <div class="filter-group">
                                <label for="categorie">Catégorie :</label>
                                <select id="categorie" name="categorie">
                                    <option value="">Toutes</option>
                                    <option value="gastronomie">Gastronomie</option>
                                    <option value="electronique">Électronique</option>
                                    <option value="vetement">Manuels d'etudes</option>
                                    <option value="materiel">Materiel d'etudes</option>
                                </select>
                            </div>

                            <!--<div class="filter-group">
                                <label>Prix :</label>
                                <input type="number" placeholder="Min" min="0"> -
                                <input type="number" placeholder="Max" min="0">
                            </div>-->

                            <div class="filter-group">
                                    <div class="slider-container">
                                       <label><span>min :</span><input type="range" min="0" max="100" value="0" id="minRange"></label> 
                                        <label>max :<input type="range" min="0" max="100" value="0" id="maxRange"></label> 
                                        <!--<p>Valeur min: <span id="minVal">25</span> / Valeur max: <span id="maxVal">75</span></p>-->
                                    </div>
                            </div>

                            <div class="content-filter">
                                <div class="filter-group">
                                    <label>
                                        <input type="checkbox" name="disponible" value="1">
                                        Disponible
                                    </label>
                                </div>

                                <div class="filter-group">
                                    <label>
                                        <input type="checkbox" name="promo" value="1">
                                        En promotion
                                    </label>
                                </div>

                                <div class="filter-group">
                                    <label>
                                        <input type="checkbox" name="promo" value="1">
                                        Nouveau
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            
            <div class="content-product">
                <div class="box-product">
                    
                        <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img0.jpeg" alt="Livre 1"></a></div>
                        <div class="content">
                            <div class="description">
                                <h3><a href="">Chawama</a></h3>
                                <p >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>

                                <p class="price">1500 FCFA</p>
                            </div>
                            <a href="produit.html" class="btn btn-secondary position-btn">Decouvrir</a>
                        </div>
                    
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img1.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">Casque</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                            <p class="type">New</p>
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">5000 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary position-btn">Decouvrir</a>
                    </div>
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img2.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">Samsung A30</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">60000 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary">Decouvrir</a>
                    </div>
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img3.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">Kit-Arduino</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                            <p class="type promo">En promo</p>   
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">1500 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary">Decouvrir</a>
                    </div>
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img4.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">Poulet pane</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                            <p class="type">New</p>    
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">2500 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary">Decouvrir</a>
                    </div>
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img5.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">Goffre au Chocolat</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                            <p class="type ">En promo</p>     
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">350 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary">Decouvrir</a>
                    </div>
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img6.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">DELL-Desktop</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">150000 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary">Decouvrir</a>
                    </div>
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img7.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">H-Prepa Maths</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                            <p class="type">En promo</p>    
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">1500 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary">Decouvrir</a>
                    </div>
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img8.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">H-Prepa Maths Exercices</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">1500 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary">Decouvrir</a>
                    </div>
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img9.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">Burger</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                                <p class="type">New</p>
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">1500 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary">Decouvrir</a>
                    </div>
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img10.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">Differentiel et Integral</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">3000 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary">Decouvrir</a>
                    </div>
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img11.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">Iphone 15</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                            <p class="type">New</p>    
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">100000 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary">Decouvrir</a>
                    </div>
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img12.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">HP</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">100500 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary">Decouvrir</a>
                    </div>
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img13.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">Kit-Arduino</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                            <p class="type">New</p>
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">25000 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary">Decouvrir</a>
                    </div>
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img14.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">Tout-en-un- 1ere annee</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">1500 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary">Decouvrir</a>
                    </div>
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img15.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">DELL</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">200000 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary">Decouvir</a>
                    </div>
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img16.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">Orimo</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">1000 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary">Decouvrir</a>
                    </div>
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img17.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">Pizza</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">2500 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary">Decouvrir</a>
                    </div>
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img18.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">Casque</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">4500 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary">Decouvrir</a>
                    </div>
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img19.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">Maths de LSI</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">2500 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary">Decouvrir</a>
                    </div>
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img20.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">Chips Sweet</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">1000 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary">Decouvir</a>
                    </div>
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img21.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">Casque</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">5000 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary">Decouvrir</a>
                    </div>
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img22.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">Airport</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">4500 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary">Decouvrir</a>
                    </div>
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img23.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">DELL</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">140000 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary">Decouvrir</a>
                    </div>
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img24.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">Iphone</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">70500 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary">Decouvrir</a>
                    </div>
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img25.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">Outis mathematiques pour la physique</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">2500 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary">Decouvrir</a>
                    </div>
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img26.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">Airport</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">3500 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary">Decouvrir</a>
                    </div>
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img27.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">Equations differentielles</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">2500 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary">Decouvrir</a>
                    </div>
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img28.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">Airport</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">3500 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary">Decouvrir</a>
                    </div>
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img29.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">Casque</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">5000 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary">Decouvrir</a>
                    </div>
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img30.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">Casque</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">5000 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary">Decouvrir</a>
                    </div>
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img31.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">Ecouteur</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">1500 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary">Decouvrir</a>
                    </div>
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img32.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">Casque</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">5000 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary">Decouvrir</a>
                    </div>
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img33.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">Casque</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">5000 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary">Decouvrir</a>
                    </div>
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img34.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">DELL</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">200000 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary">Decouvrir</a>
                    </div>
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img35.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">DELL</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">200000 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary">Decouvrir</a>
                    </div>
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img36.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">DELL</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">200000 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary">Decouvrir</a>
                    </div>
                </div>
                <div class="box-product">
                    <div class="image"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/listeProduits/img37.jpeg" alt="Livre 1"></a></div>
                    <div class="content">
                        <div class="description">
                            <h3><a href="">HP</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, deserunt!</p>
                                <div>
                                    <div class="rating"><i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i></div>
                                    <button class="like-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            <p class="price">200000 FCFA</p>
                        </div>
                        <a href="produit.html" class="btn btn-secondary">Decouvrir</a>
                    </div>
                </div>

            </div>
        </section>
    </div>    
<?php get_footer(); ?>