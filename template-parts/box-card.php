<?php $especializaciones = get_field('especializaciones'); if ($especializaciones) : ?>
    <Section class="bg-beige-lighter">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-8 py-4 align-self-center animated fadeIn">
                    <h2 class="mb-4 ml-2"> <?php print_r($especializaciones['title']); ?></h2>
                        <div class="row text-center">
                            <?php
                            $index = 1;
                            $especializaciones_item = $especializaciones['especializaciones'];
                            if ($especializaciones_item) : foreach ($especializaciones_item as &$value) : ?>
                                    <div class="box-card col-sm-12 col-md-6 mb-3">
                                        <div class="content bg-white">
                                            <div class="number"><?php echo $index ?></div>
                                            <h3 class="text-primary"><?php echo $value['title']; ?></h3>
                                            <hr>
                                            <p class="mb-3"><?php echo $value['description']; ?></p>
                                            <a class="btn btn-basic" href="<?php echo $value['url_boton']; ?>"><?php echo $value['texto_boton']; ?></a>
                                        </div>
                                    </div>
                            <?php
                                    $index = $index + 1;
                                endforeach;
                            endif;
                            ?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 px-0  box-container banner">
                    <div class="box-fluid">
                        <img class="box-fluid-image animated fadeIn" src="<?php echo esc_url($especializaciones['image']); ?>" alt="profile" />
                    </div>
                    <div class="content text-center ">
                        <h3 class="tagline animated fadeIn"><?php print_r($especializaciones['tagline']); ?></h3>
                        <a class="btn btn-basic animated fadeIn" href="<?php print_r($especializaciones['url_boton']); ?>"><?php print_r($especializaciones['texto_boton']); ?></a>
                    </div>
                </div>

            </div>
        </div>
    </Section>
<?php
endif;
?>
