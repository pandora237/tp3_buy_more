<?php
/*
Template Name: mon compte
*/
get_header();
?>

<h1 class="title">Mon compte</h1>
<section class="content-compte">
    <div>
        <aside>
            <ul>
                <li>
                    <a href="./mes-commandes.html"><i class="fa fa-shopping-cart"></i>
                        <span class="item-aside">Mes commandes</span>
                    </a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-user"> </i>
                        <span class="item-aside">Profil</span>
                    </a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-heart"></i>
                        <span class="item-aside">Favoris</span>
                    </a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-gear"></i>
                        <span class="item-aside">Paramètres</span>
                    </a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-sign-out-alt"></i>
                        <span class="item-aside">Déconnexion</span>
                    </a>
                </li>
            </ul>
        </aside>
    </div>

    <div class="content">
        <div class="content-grid">
            <div class="cart-dash">
                <i class="fa fa-gear"></i>
                <h2>Paramètres du compte</h2>
            </div>

            <div class="cart-dash">
                <i class="fa fa-box"></i>
                <h2>Historique des commandes</h2>
            </div>

            <div class="cart-dash">
                <i class="fa fa-heart"></i>
                <h2>Mes favoris</h2>
            </div>

            <div class="cart-dash">
                <i class="fa fa-shield-alt"></i>
                <h2>Sécurité</h2>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>