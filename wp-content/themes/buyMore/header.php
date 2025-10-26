<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <div id="anchor-top"></div>
        <div id="header-block">
        </div>
        <div class="header-menu">
            <nav class="main-nav">
                <div class="content-menu">
                    <!-- <div class="menu-nav">
                   <button class="Menu">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none"
                                stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                                <line x1="4" y1="7" x2="28" y2="7" />
                                <line x1="4" y1="16" x2="28" y2="16" />
                                <line x1="4" y1="25" x2="28" y2="25" />
                            </svg>
                        </button>
                        <div class="menu-items">
                            <ul class="">
                                <li class="menu-item">
                                    <a href="#">Electronique</a>
                                    <div class="img-menu">
                                        <img src="/assets/img/category/cat1.png" alt="category">
                                    </div>
                                </li>
                                <li class="menu-item"><a href="#">Alimentation</a>
                                    <div class="img-menu">
                                        <img src="/assets/img/category/cat1.png" alt="category">
                                    </div>
                                </li>
                                <li class="menu-item"><a href="#">Mode</a>
                                    <div class="img-menu">
                                        <img src="/assets/img/electronique/disque dur 4t0.png" alt="category">
                                    </div>
                                </li>
                                <li class="menu-item"><a href="#">Maison</a>
                                    <div class="img-menu">
                                        <img src="/assets/img/category/cat1.png" alt="category">
                                    </div>
                                </li>
                                <li class="menu-item"><a href="#">Sports</a>
                                    <div class="img-menu">
                                        <img src="/assets/img/electronique/disque dur 4t0.png"
                                            alt="category">
                                    </div>
                                </li>
                            </ul>
                            <div class="img-menu-logo">
                                <a href="#"> <img src="/assets/img/logo2.png" alt="category"></a>
                            </div>
                        </div>  
                </div> -->
                    <div class="logo">
                        <a href="<?php echo home_url(); ?>">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo2.png" alt="logo" title="Buy More" height="50">
                        </a>
                    </div>

                </div>

                <div class="search-bar">
                    <form>
                        <input type="text" placeholder="Rechercher un produit...">
                        <button type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white"
                                viewBox="0 0 24 24">
                                <path
                                    d="M21 19l-5.2-5.2A7.9 7.9 0 0016 9a8 8 0 10-8 8 7.9 7.9 0 004.8-1.7L19 21zM4 9a5 5 0 1110 0A5 5 0 014 9z" />
                            </svg>
                        </button>
                    </form>
                </div>

                <div class="nav-right">
                    <select class="language-selector">
                        <option value="fr">FR</option>
                        <option value="en">EN</option>
                    </select>

                    <div class="profile">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#333" viewBox="0 0 24 24">
                            <path
                                d="M12 2a5 5 0 110 10 5 5 0 010-10zm0 12c4.97 0 9 2.91 9 6.5V22H3v-1.5C3 16.91 7.03 14 12 14z" />
                        </svg>

                        <ul class="profile-menu">
                            <li><a href="/pages/inscription.html">Inscription</a></li>
                            <li><a href="/pages/connexion.html">Connexion</a></li>
                            <li><a href="/pages/admin/mon-compte.html">Mon compte</a></li>
                            <li><a href="#">Déconnexion</a></li>
                        </ul>
                    </div>

                    <a href="/pages/panier.html">
                        <div class="cart">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#333"
                                viewBox="0 0 24 24">
                                <path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 
                   0c-1.1 0-1.99.9-1.99 2S15.9 22 17 22s2-.9 2-2-.9-2-2-2zm1.83-4.25
                   L20.9 6H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 16.37 
                   5.48 18 7 18h12v-2H7l1.1-2h9.45c.75 0 1.41-.41 
                   1.75-1.05z" />
                            </svg>
                            <span class="cart-count">3</span>
                        </div>
                    </a>
                </div>
            </nav>
            <div id="menu" class=" ">
                <div class="menu-items">
                    <ul class="">
                        <li class="menu-item">
                            <a href="#">
                                <span><i class="fa-solid fa-tv"></i></span>
                                <span>Électronique</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#">
                                <span><i class="fa-solid fa-utensils"></i></span>
                                <span>Alimentation</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#">
                                <span><i class="fa-solid fa-shirt"></i></span>
                                <span>Mode</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#">
                                <span><i class="fa-solid fa-couch"></i></span>
                                <span>Maison</span>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </header>
    <main class="container">