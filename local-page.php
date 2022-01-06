<!--?php /* Template name: Localization Page */ ?-->

<?php
get_header();
?>

<main id="primary" class="site-main">
    <div class="d-flex mx-5 py-5 flex-column justify-content-center align-items-center where-border">
        <h1 class="text-blue">Onde Estamos</h1>
        <h5>Clique na localização e confira mais informações!</h5>
    </div>
    <div class="map-border mx-5"></div>
    <div class="map-bg d-flex justify-content-center align-items-center">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/map.png" alt="Imagem do mapa com as localizações da Orion Maritima">
    </div>

</main><!-- #main -->

<?php
get_footer();
