<?php

function foodhut_logo(){
    $header_logo = get_theme_mod('header_logo', get_template_directory_uri() . '/assets/imgs/logo.svg');
    ?>
    <a class="navbar-brand m-auto" href="<?php echo home_url(); ?>">
        <img src="<?php echo esc_url($header_logo); ?>" class="brand-img" alt="Food Hut Logo">
        <span class="brand-txt">Food Hut</span>
    </a>
    <?php

    
}
?>
