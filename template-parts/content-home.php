<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp_guarapo
 */
?>


<!-- Hero -->
<div class="hero">
    <img class="hero-img" loading="lazy"
        src="<? echo get_field('hero_image') ?>"
        alt="Ernesto Rangel" />
    <div class="hero-wrapper" data-aos="fade-up">
        <h1 class="text-white margin-small w-80"><?php echo get_field('hero_title') ?></h1>
        <div
            class="text-size-medium text-white margin-small w-80 hero-description">
            <?php echo get_field('hero_description') ?></div>
        <a class="button button-white button-big" href="" target="_blank"
            rel="noopener noreferrer">
            <?php echo get_field('hero_button_text') ?>
        </a>
    </div>
</div>

<!-- Bloque 1-->
<div class="margin-large"></div>
<div class="container px-0">
  <div class="row g-0 ">
    <div class="col-12">
      	<div class="title text-center margin-large" data-aos="fade-up" >
			  <span class="title-back"><?php echo get_field('title_section_1_back') ?></span>
			  <span class="title-front"><?php echo get_field('title_section_1_front') ?></span>
		</div>
    </div>
  </div>

  <div class="row g-0">
      <div class="col-12 col-md-5">
	  <div class="px-3" data-aos="fade">
        <img class="img-fluid rounded-img mb-4 "  src="<? echo get_field('section_1_image') ?>" alt="Brickell Miami" />
      </div> </div>
      <div class="col-12 col-md-7">
        <div class="px-3" data-aos="fade">
			<?php echo get_field('section_1_description') ?>
		</div>
      </div>
  </div>
</div>
<hr />

<!-- Bloque 2-->
<div class="margin-large"></div>
<div class="container px-0">
  <div class="row g-0">
      <div class="col-12 col-md-7 order-2 order-md-1">
        <div class="px-3" data-aos="fade">
			<?php echo get_field('section_2_description') ?>
        </div>
      </div>
	  <div class="col-12 col-md-5 order-1 order-md-2">
		<div class="px-3" data-aos="fade">
			<img class="img-fluid rounded-img mb-4"  src="<? echo get_field('section_2_image') ?>" alt="ruben blades columbia university" /> 
		</div>
      </div>
  </div>
</div>
<hr />

<!-- Bloque 3-->
<div class="margin-large"></div>
<div class="container px-0">
  <div class="row g-0">
      <div class="col-12 col-md-5">
		<div class="px-3" data-aos="fade">
			<img class="img-fluid rounded-img mb-4"  src="<? echo get_field('section_3_image') ?>" alt="UNIMET acto degrado" />
		</div>
      </div>
      <div class="col-12 col-md-7">
        <div class="px-3" data-aos="fade">
			<?php echo get_field('section_3_description') ?>
        </div>
      </div>
  </div>
</div>
<hr />

<!-- Bloque 4-->
<div class="margin-large"></div>
<div class="container px-0">
  <div class="row g-0">
      <div class="col-12 col-md-7  order-2 order-md-1">
        <div class="px-3" data-aos="fade">
			<?php echo get_field('section_4_description') ?>
        </div>
      </div>
	  <div class="col-12 col-md-5  order-1 order-md-2">
	  <div class="px-3" data-aos="fade">
        <img class="img-fluid rounded-img mb-4"  src="<? echo get_field('section_4_image') ?>" alt="Brooklyn-cumana" />
      </div> 
	</div>
  </div>
</div>

<!-- Banner -->
<div class="margin-large"></div>
<div class="container-fluid bg-primary px-0 banner">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-4 text-center">
                <img class="img-fluid mb-4"
                    src="<?php echo get_field('banner_image') ?>"
                    alt="ypo logo" />
            </div>
            <div class="col-12 col-md-8 banner-text">
                <div class="px-3">
					<?php echo get_field('banner_description') ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Blog -->

<div class="margin-large"></div>
<div class="container px-0">
  <div class="row g-0 ">
    <div class="col-12">
	<div class="title text-center margin-large" data-aos="fade-up" >
			  <span class="title-back"><?php echo get_field('blog_title_back') ?></span>
			  <span class="title-front"><?php echo get_field('blog_title_front') ?></span>
		</div>
    </div>
	
    <section class="container">
        <div class="row no-gutters">
				<?php $args_2 = array(
						'posts_per_page' => 3					
						);
						
						$arr_posts = new WP_Query( $args_2 );
						if ( $arr_posts->have_posts() ) :
	
							while ( $arr_posts->have_posts() ) :
								$arr_posts->the_post();
								get_template_part( 'template-parts/content', 'loop' );

							endwhile;
						endif;
						/* Restore original Post Data */
						wp_reset_postdata();
						?>
            <div class="col-12 my-5 text-center">
                <a href="/blog" class="button">View More</a>
            </div>
        </div>
    </section>


	</div> 
  </div>
</div>
