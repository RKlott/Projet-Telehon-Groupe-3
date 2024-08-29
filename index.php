<?php $page_title = 'Accueil'?>
<?php $css_path = "./public/css/index.css"?>

<?php $desktop_logo_path = "./public/images/logo.png"?>
<?php $tablet_logo_path = "./public/images/logo-tablet.png"?>

<?php require './include/header.php'; ?>

<main>
    <div class="accueil_hero-banner">
        <img src="./public/images/hero_banner.webp" alt="">
    </div>
    <div class="compteur">
        <div class="chiffres_compteur">
            <div class="chiffre_compteur">
                <p class="texte_chiffre_compteur">1</p>
            </div>
            <div class="chiffre_compteur">
                <p class="texte_chiffre_compteur">2</p>
            </div>
            <div class="virgule_compteur">
                <p class="texte_virgule_compteur">,</p>
            </div>
            <div class="chiffre_compteur">
                <p class="texte_chiffre_compteur">3</p>
            </div>
            <div class="chiffre_compteur">
                <p class="texte_chiffre_compteur">4</p>
            </div>
            <div class="chiffre_compteur">
                <p class="texte_chiffre_compteur">2</p>
            </div>
        </div>
    </div>
    <div class="accueil_section-evenement">
        <p class="accueil_titre">
            événements à venir
        </p>
        <div class="accueil_img-evenement">
            <img src="./public/images/evenement.webp" alt="">
        </div>
        <div class="accueil_button-even"> voir plus d'événements</div>

        

        
    </div>
    <div class="accueil_section-blog">
        <div class="accueil_cartes flex">
            <div class="accueil_carte flex">
                <div class="accueil_img"><img src="./public/images/article.webp" alt="">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum harum corrupti, 
                        maxime quos dolorem nisi doloremque aut.
                         Reprehenderit, animi! Corporis.</p>
                        <div class="accueil_button-article"><h4>lire l'article</h4>

                         </div>

                </div>

            </div>
            <div class="accueil_carte flex">
                <div class="accueil_img"><img src="./public/images/article.webp" alt="">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum harum corrupti, 
                        maxime quos dolorem nisi doloremque aut.
                         Reprehenderit, animi! Corporis.</p>
                        <div class="accueil_button-article"><h4>lire l'article</h4>

                         </div>

                </div>

            </div>
            <div class="accueil_carte flex">
                <div class="accueil_img"><img src="./public/images/article.webp" alt="">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum harum corrupti, 
                        maxime quos dolorem nisi doloremque aut.
                         Reprehenderit, animi! Corporis.</p>
                        <div class="accueil_button-article"><h4>lire l'article</h4>

                         </div>

                </div>

            </div>
        </div>
        <div class="accueil_button-even"> voir plus d'articles</div>
    </div>


</main>

<?php $facebook_logo_path = "./public/images/front-office/footer/facebook-desktop-logo.png"?>
<?php $instagram_logo_path = "./public/images/front-office/footer/instagram-desktop-logo.png"?>

<?php  require './include/footer.php'; ?>