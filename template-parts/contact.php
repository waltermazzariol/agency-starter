<?php
if (have_rows('contact')) :
?>
    <section class="container contact">
        <div class="row contact-wrapper justify-content-md-center">
            <?php
            while (have_rows('contact')) : the_row();
                // Load sub field value.
                $title = get_sub_field('title');
                $description = get_sub_field('description');
                $icon = get_sub_field('icon');
            ?>

                <div class="contact-item col-md-4 col-lg-3">
                    <img src="<?php echo $icon ?>" alt="icon" />
                    <hr>
                    
                        <div class="title"><?php echo $title ?>:</div>
                        <div class="description"><?php echo $description ?></div>
                    
                </div>
            <?php
            endwhile;
            ?>
        </div>
    </section>
<?php
endif;
?>