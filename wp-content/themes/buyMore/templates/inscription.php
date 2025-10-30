<?php
/* Template Name: Page Inscription */
get_header();
?>
  <main class="container">

        <form id="formInscription" class="form-auth">
            <div class="page-intro">
                <h1>Salut toi !</h1>
                <p>Entre tes informations pour t'inscrire et achète</p>
            </div>
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" placeholder="Entrez votre nom">
            </div>
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" id="prenom" placeholder="Entrez votre prénom">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="telephone">Téléphone</label>
                <input type="tel" name="Téléphone" id="telephone" placeholder="+237 6XX XX XX XX" value="+237 ">
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <div style="position: relative;">
                    <input type="password" name="password" id="password" placeholder="Créez un mot de passe" style="padding-right: 40px;">
                    <span id="togglePassword" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;">

            <svg id="iconOeilFerme" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path>
                <line x1="1" y1="1" x2="23" y2="23"></line>
            </svg>

            <svg id="iconOeilOuvert" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display: none;">
                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                <circle cx="12" cy="12" r="3"></circle>
            </svg>
        </span>
                </div>

                <div id="passwordCriteria"></div>
            </div>


            <div class="form-group">
                <label for="confirmPassword">Confirmation mot de passe</label>
                <div style="position: relative;">
                    <input type="password" name="c-password" id="confirmPassword" placeholder="Confirmez votre mot de passe" style="padding-right: 40px;">
                    <span id="toggleConfirmPassword" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;">

            <svg id="iconOeilFerme2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path>
                <line x1="1" y1="1" x2="23" y2="23"></line>
            </svg>

            <svg id="iconOeilOuvert2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display: none;">
                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                <circle cx="12" cy="12" r="3"></circle>
            </svg>
        </span>
                </div>
            </div>
            <div id="messageErreur" style="color: var(--col-text); margin: 10px 0;"></div>
            <button type="submit" id="btnInscrire" class="btn btn-secondary">S'inscrire</button>

        </form>

        <div class="social-login">
            <p> Ou continuer avec</p>
            <div class="social-buttons">
                <a href="#" class="social-btn google">
                    <img src="../assets/images/google.svg" alt="google">
                </a>
                <a href="#" class="social-btn facebook">
                    <img src="../assets/images/facebook.svg" alt="Facebook">
                </a>
                <a href="#" class="social-btn apple">
                    <img src="../assets/images/apple.svg" alt="Apple">
                </a>
            </div>

        </div>
        <div class="signup-link">
            <p> Déja un compte ? <a href="connexion.html"> Connexion </a> </p>
        </div>

    </main>
<?php
get_footer();
?>