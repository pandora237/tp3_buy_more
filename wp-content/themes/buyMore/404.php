<?php
/*
Template Name: 404
*/
get_header();
?>

<div class="">
    <section class="error-404">
        <h1>404</h1>
        <p>Oups ! La page que vous cherchez n'existe pas. Peut-être un produit vendu trop vite ?</p>
        <a href="<?php home_url() ?>" class="btn btn-secondary">Retour à l'Accueil</a>
    </section>
</div>

<?php get_footer(); ?>