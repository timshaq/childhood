<?php
/*
Template Name: Игрушки
*/
?>

<?php
    get_header();
?>

<div class="toys">
    <div class="container">
        <a href="<?php echo get_category_link(3); ?>" class="subtitle">
            <h2 class="subtitle">Мягкие игрушки</h2>
        </a>
        <div class="toys__wrapper">

            <?php
                $posts = get_posts( array(
                    'numberposts'      => -1,
                    'category_name'    => 'soft-toys',
                    'orderby'          => 'date',
                    'order'            => 'ASC',
                    'post_type'        => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );

                foreach( $posts as $post ){
                    setup_postdata($post);
                    ?>
                    <div class="toys__item" style="background-image: url(
                        <?php
                            if(has_post_thumbnail()) {
                                the_post_thumbnail_url();
                            } else {
                                echo get_template_directory_uri() . '/assets/img/not-found.jpg';
                            }
                        ?>
                    ">
                        <div class="toys__item-info" style="width: 100%">
                            <div class="toys__item-title"><?php the_title(); ?></div>
                            <div class="toys__item-descr">
                                <?php the_field('toys_description'); ?>                          
                            </div>
                            <a href="<?php echo get_permalink(); ?>" class="minibutton toys__trigger">Подробнее</a>
                        </div>
                    </div>
                    <?php
                }

                wp_reset_postdata(); // сброс

            ?>

        </div>


        <a href="<?php echo get_category_link(4); ?>" class="subtitle">
            <h2 class="subtitle">Развивающие игрушки</h2>
        </a>
        <div class="toys__wrapper">

            <?php
                $posts = get_posts( array(
                    'numberposts'      => -1,
                    'category_name'    => 'edu_toys',
                    'orderby'          => 'date',
                    'order'            => 'ASC',
                    'post_type'        => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );

                foreach( $posts as $post ){
                    setup_postdata($post);
                    ?>
                    <div class="toys__item" style="background-image: url(
                        <?php
                            if(has_post_thumbnail()) {
                                the_post_thumbnail_url();
                            } else {
                                echo get_template_directory_uri() . '/assets/img/not-found.jpg';
                            }
                        ?>
                    ">
                        <div class="toys__item-info" style="width: 100%">
                            <div class="toys__item-title"><?php the_title(); ?></div>
                            <div class="toys__item-descr">
                                <?php the_field('toys_description'); ?>                          
                            </div>
                            <a href="<?php echo get_permalink(); ?>" class="minibutton toys__trigger">Подробнее</a>
                        </div>
                    </div>
                    <?php
                }

                wp_reset_postdata(); // сброс

            ?>

        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="toys__alert">
                    <span>Не нашли то, что искали?</span> Свяжитесь с нами - и мы с радостью создадим любую игрушку по вашему желанию. Вы можете выбрать все: размер, материал, формы...!
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    get_footer();
?>