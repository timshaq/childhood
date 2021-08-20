<?php
/*
Template Name: Наша история
*/
?>

<?php
    get_header();
?>

<div class="aboutus">
    <div class="container">
        <h1 class="title"><?php the_field('story_title'); ?></h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('story_subtitle1'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('story_description1'); ?>
                </div>
            </div>
            <div class="col-lg-6">
                    <?php
                        $image = get_field('story_img1');

                        if (!empty($image)) : ?>
                            <img
                                class="aboutus__img"
                                src="<?php echo $image['url']; ?>"
                                alt="<?php echo $image['alt']; ?>"
                            >
                        <?php endif;
                    ?>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                    <?php
                        $image = get_field('story_img2');

                        if (!empty($image)) : ?>
                            <img
                                class="aboutus__img"
                                src="<?php echo $image['url']; ?>"
                                alt="<?php echo $image['alt']; ?>"
                            >
                        <?php endif;
                    ?>
            </div>
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('story_subtitle2'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('story_description2'); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('story_subtitle3'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('story_description3'); ?>
                </div>
            </div>
            <div class="col-lg-6">
                    <?php
                        $image = get_field('story_img3');

                        if (!empty($image)) : ?>
                            <img
                                class="aboutus__img"
                                src="<?php echo $image['url']; ?>"
                                alt="<?php echo $image['alt']; ?>"
                            >
                        <?php endif;
                    ?>
            </div>
        </div>
    </div>
</div>

<?php
    get_footer();
?>