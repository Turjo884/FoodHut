    <?php
    
        $email_address = get_theme_mod('email_address' , esc_html__('info@website.com', 'foodhut'));

        $phone_number = get_theme_mod('phone_number', esc_html__('(123) 456-7890', 'foodhut'));

        $address = get_theme_mod('address', esc_html__('12345 Fake ST NoWhere AB Country', 'foodhut'));

        $copywright_text = get_theme_mod('copywright_text', esc_html__('© Copyright 2024 Made with By DevCRUD', 'foodhut'))


    ?>
    
    <!-- page footer  -->
    <div class="container-fluid bg-dark text-light has-height-md middle-items border-top text-center wow fadeIn">
        <div class="row">

            <?php if(!empty($email_address)) : ?>        
            <div class="col-sm-4">
                <h3><?php echo esc_html__('EMAIL US','foodhut')?></h3>
                <P class="text-muted"><?php echo esc_html($email_address); ?></P>
            </div>
            <?php endif; ?>   

            <?php if(!empty($phone_number)) : ?>
            <div class="col-sm-4">
                <h3><?php echo esc_html__('CALL US', 'foodhut')?></h3>
                <P class="text-muted"><?php echo esc_html($phone_number); ?></P>
            </div>
            <?php endif; ?>

            <?php if(!empty($address)) : ?>
            <div class="col-sm-4">
                <h3><?php echo esc_html__('FIND US', 'foodhut')?></h3>
                <P class="text-muted"><?php echo esc_html($address); ?></P>
            </div>
            <?php endif; ?>

        </div>
    </div>

    <?php if(!empty($copywright_text)) : ?>
    <div class="bg-dark text-light text-center border-top wow fadeIn">
        <p class="mb-0 py-3 text-muted small"><?php echo esc_html__($copywright_text); ?></p>
    </div>
    <?php endif; ?>
    <!-- end of page footer -->

    <?php wp_footer(); ?>