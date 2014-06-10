<?php get_header(); ?>
    <section role="main">
        <!--BEGIN MAIN CONTENT-->
        <div class="row">
            <!--TEN COLUMNS CENTERED-->
            <div class="ten columns centered">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div><!--END TEN COLUMNS-->
        </div> <!-- END MAIN CONTENT-->
        <!--FEATURED PROFILE-->
        <section id="featured_profile">
            <div class="row" style="margin-bottom:80px; background-color:#FFEEA9;">
                <div class="six columns" style="margin:0px; padding:0px;">
                    <img src="wp-content/uploads/2014/06/rachel-revelez.jpg" style="float:left;">
                </div>
                <div class="six columns" style="padding:30px;">
                    <h5 style="margin-bottom:10px; color:#AC9A50;">Your Gifts Help</h5>
                    <blockquote>
                        <p>"I wanted to come to Iowa because when I came to visit, I felt really welcome. But if I didn't have these scholarships, I would've had to stay in Illinois for school."</p>
                        <cite>Maribel Treto</cite>
                    </blockquote>
                </div>
            </div>
        </section>
    </section> <!--END MAIN SECTION-->
    <?php get_sidebar(); ?>
<?php get_footer(); ?>