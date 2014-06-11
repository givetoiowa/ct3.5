<?php
/**
*Template Name: Home Template Progress
*/
?>
<?php get_header(); ?>
    <!--BEGIN MAIN WRAPPER-->
    <section role="main">
        <!--BEGIN FEATURED CONTENT-->
        <?php if (has_post_thumbnail( $post->ID ) ): ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
            <section class="featured_content" style="background-image:url(<?php echo "{$image[0]}"; ?>); background-repeat:no-repeat; background-position:center top;">
                <div class="row">
                    <div class="ten columns centered">
                        <!--RELATIVE POSITIONING-->
                        <div class="featured_content_holder">
                            <!--ABSOLUTE POSITIONING-->
                            <div class="building_text hide-for-small">
                            </div>
                            <div class="featured_content_text">
                                <small>For Iowa. Forever More.</small>
                                <!--HEADER 1-->
                                <h1><?php bloginfo('name'); ?></h1>
                                <a class="large button" href="<?php the_field('giving_link'); ?>">Give to Iowa</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!--BEGIN PROGRESS BAR-->
        <section style="width:100%;  height:120px;  clear:both;" >
            <section id="progressBar" class="campaign_statistics" style="background-color:#EFEFEF;">
            </section>
        </section> <!--END PROGRESS BAR-->
        <!--BEGIN MAIN CONTENT-->
        <div class="row">
            <!--TEN COLUMNS CENTERED-->
            <div class="ten columns centered">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div> <!--END TEN COLUMNS-->
        </div>
        <!--FEATURED PROFILE-->
        <section id = "featuredProfile">
        </section><!--END FEATURED CONTENT-->
        <div class="row">
            <!--TEN COLUMNS CENTERED-->
            <div class="ten columns centered">
                <?php the_field('honor_clubs'); ?>
                <!-- VOLUNTEER LEADERS-->
                <div id="volunteerLeaders">
                </div>
            </div>
        </div>
        <div class="row">
            <!--CONTACT SHORTCODE HOOK-->
            <?php the_field('area_contact_information'); ?>
        </div>
        <section>
            <div class="row">
                <div class="ten columns centered" style="padding:0px;">
                    <!--DONORS-->
                    <div id="donorProfile">
                    </div>
                </div>
            </div>
        </section>
    </section> <!--END MAIN WRAPPER-->
    <!--SIDEBAR-->
    <?php get_sidebar(); ?>
<!--FOOTER-->
<?php get_footer(); ?>