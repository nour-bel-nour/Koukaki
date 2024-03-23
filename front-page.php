<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
            <img class="banner__background" src="<?php echo get_theme_file_uri() . '/assets/images/banner.png'; ?>" alt="foto avec visages de chats">
            <img class="banner__logo" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
            <video class="banner__video" autoplay loop muted >
                <source src="<?php echo get_theme_file_uri() . '/assets/video/Video-Koukaki.mp4'; ?>" type="video/mp4">
            </video>
        </section>
        <section id="#story" class="story">
            <h2><span class="story__title">L'histoire</span></h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php 
               get_template_part ( 'template-parts/characters-slider' ); 
            ?>
            <article id="place">
                <div>
                <h3><span class="place__title">Le Lieu</span></h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>

            </article>
        </section>

        <section id="studio">
          <h2><span class="studio__title">Studio Koukaki</span></h2><div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>

        <section class="nomination">
            <div class="nomination__title">
            <img src="<?php echo get_theme_file_uri() . '/assets/images/oscars_rectangle.png'; ?>" alt="fond du titre des nominations">
            <h3 class="oscars__title">Fleurs d’oranger & chats errants est nominé aux Oscars Short Film Animated de 2022 !</h3>
            </div>
            <img src="<?php echo get_theme_file_uri() . '/assets/images/oscars_logo.png'; ?>" alt="Nomination aux Oscars 2022">
        </section>

    </main><!-- #main -->

<?php
get_footer();
