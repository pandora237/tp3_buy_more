<?php 
/*
Template Name: panier
*/
get_header();
?>
<div class="wrapper" id="wrapper">
    <div class="items">
      <div class="title">
        <h3>Panier</h3>
      </div>
      <div class="content-product">
        <div class="product">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/other/ecouteur-sans-fil-noir-avec-etui-de-chargement.jpg" alt="ongles by stl">
          <div class="details">
            <h2>Ecouteurs sans fil</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo ab vitae esse quod fuga voluptatum
              nesciunt aliquam. Dicta, veniam harum.</p>
            <div class="size">
              <h3>Couleur: Rouge noir</h3>
            </div>
            <div class="qty">
              <h4>Qty:<input type="number" value="1" min="1"></h4>
              <button>
                <i class="fa-solid fa-trash"></i> Delete
              </button>

            </div>
          </div>
          <div class="price">
            <p>5000FCFA</p>
          </div>
        </div>

      </div>
      <div class="total">
        <h3>Prix Total</h3>
        <h3 class="total-val">20000 FCFA</h3>
        <a href="/pages/livraison.html"><button class="commander" type="button">Commander le panier</button></a>
      </div>
    </div>
  </div>
<?php get_footer(); ?>