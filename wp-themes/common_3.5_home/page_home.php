<?php
/**
 *  Template Name: Home Page
 */

get_header(); ?>
<section role="main">
    <section class="home_featured_content">
        <div class="bx-wrapper" style="max-width: 100%;">
            <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 448px;">
                <ul class="slider_main" style="width: auto; position: relative;">
                    <!--SLIDE 1-->
                    <li style="background-image: url(wp-content/themes/common_3.5_home/images/old_cap.jpg); float: none; list-style: none; position: absolute; width: 1425px; z-index: 0; display: none; background-position: 50% 100%; background-repeat: no-repeat no-repeat;">
                        <div class="row">
                            <!--RELATIVE POSITIONING-->
                            <div class="home_featured_content_holder">
                                <div class="twelve columns" style="height:448px; margin:0px; padding:0px;">
                                    <!--TEXT FOR IMAGE-->
                                    <div class="home_featured_content_text" style="margin-bottom:120px;">
                                        <div class="eight columns offset-by-four"> <small>For Iowa. Forever More.</small>
                                            <!--HEADER 1-->
                                            <h1>Making a difference in communities around the world</h1>  <a class="button medium" href="http://www.uifoundation.org/campaign/">Read more</a> &nbsp;</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!--SLIDE 2-->
                    <li style="background-image: url(wp-content/themes/common_3.5_home/images/grad_student.jpg); float: none; list-style: none; position: absolute; width: 1425px; z-index: 0; display: none; background-position: 50% 100%; background-repeat: no-repeat no-repeat;">
                        <div class="row">
                            <!--RELATIVE POSITIONING-->
                            <div class="home_featured_content_holder">
                                <div class="twelve columns" style="height:448px; margin:0px; padding:0px;">
                                    <!--TEXT FOR IMAGE-->
                                    <div class="home_featured_content_text" style="margin-bottom:120px;">
                                        <div class="seven columns offset-by-five"> <small>For Iowa. Forever More.</small>
                                            <!--HEADER 1-->
                                            <h1>Tomorrow's leaders are in UI classrooms today</h1>  <a class="button medium" href="http://www.uifoundation.org/campaign/strategies/educating-our-students/">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!--SLIDE 3-->
                    <li style="background-image: url(wp-content/themes/common_3.5_home/images/researcher.jpg); float: none; list-style: none; position: absolute; width: 1425px; z-index: 0; display: none; background-position: 50% 100%; background-repeat: no-repeat no-repeat;">
                        <div class="row">
                            <div class="twelve columns centered">
                                <!--RELATIVE POSITIONING-->
                                <div class="home_featured_content_holder">
                                    <!--TEXT FOR IMAGE-->
                                    <div class="home_featured_content_text" style="margin-bottom:120px;">
                                        <div class="seven columns offset-by-five"> <small>For Iowa. Forever More.</small>
                                            <!--HEADER 1-->
                                            <h1>Ensuring a healthier and more sustainable world</h1>  <a class="button medium" href="http://www.uifoundation.org/campaign/strategies/ensuring-a-healthier-and-more-sustainable-world/">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!--SLIDE 4-->
                    <li style="background-image: url(wp-content/themes/common_3.5_home/images/artist.jpg); float: none; list-style: none; position: absolute; width: 1425px; z-index: 50; display: list-item; background-position: 50% 100%; background-repeat: no-repeat no-repeat;">
                        <div class="row">
                            <!--RELATIVE POSITIONING-->
                            <div class="home_featured_content_holder">
                                <!--TEXT FOR IMAGE-->
                                <div class="twelve columns" style="height:448px; margin:0px; padding:0px;">
                                    <div class="home_featured_content_text" style="margin-bottom:100px;">
                                        <div class="seven columns offset-by-five"> <small>For Iowa. Forever More.</small>
                                            <!--HEADER 1-->
                                            <h1>Enriching commerce, culture, and communities</h1>  <a class="button medium" href="http://www.uifoundation.org/campaign/strategies/enriching-commerce-culture-and-communities/">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="bx-controls"></div>
        </div>
    </section>
    <section class="featured_menu hide-for-small" style="position:absolute; width:100%; margin-top:-30px; z-index:999;">
        <div class="row">
            <div class="twelve columns">
                <ul id="slider-pager" class="block-grid four-up mobile-two-up">
                    <li>
                        <a data-slide-index="0" href="#" class="active">
                            <img src="wp-content/themes/common_3.5_home/images/old_cap_small.jpg">
                        </a>
                    </li>
                    <li>
                        <a data-slide-index="1" href="#" class="">
                            <img src="wp-content/themes/common_3.5_home/images/grad_small.jpg">
                        </a>
                    </li>
                    <li>
                        <a data-slide-index="2" href="#" class="">
                            <img src="wp-content/themes/common_3.5_home/images/researcher_small.jpg">
                        </a>
                    </li>
                    <li>
                        <a data-slide-index="3" href="#" class="">
                            <img src="wp-content/themes/common_3.5_home/images/artist_small.jpg">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section id="home_video_section">
        <div class="row">
            <!--WP CONTENT-->
            <div class="twelve columns">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </section>
    <section class="new_campaign_statistics">
        <div class="new_campaign_progress" style="width:100%;" id="progressBar">

        </div>
    </section>
    <section class="our_commitment">
        <div class="row">
            <div class="five columns">
                <h2>For Iowa. Forever More: The Campaign for the University of Iowa</h2>
                <p>The University of Iowa stands at the threshold of an era of great promise, and we must act quickly and boldly to bring change to life for new generations. For Iowa. Forever More: The Campaign for the University of Iowa will help us do
                    just that.</p> <a class="button" href="http://www.uifoundation.org/about/our-commitment/">Read more</a>
            </div>
        </div>
    </section>
    <!--STORIES-->
    <section class="stories_section">
        <div class="row">
            <div class="twelve columns">
                <h3>Stories</h3>
            </div>
        </div>
        <div xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:wfw="http://wellformedweb.org/CommentAPI/" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:atom="http://www.w3.org/2005/Atom" xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
             xmlns:slash="http://purl.org/rss/1.0/modules/slash/" class="row">
            <div class="twelve columns">
                <ul class="block-grid three-up mobile-one-up home_page_story">
                    <li id="home_page_story" style="display: list-item;">
                        <div class="stories_image_holder">
                            <img alt="" src="wp-content/themes/common_3.5_home/images/rose-garfinkle.jpg" width="100%" height="100%">
                            <div class="stories_image_text">
                                <div class="twelve columns">
                                    <a href="http://www.uifoundation.org/stories/features/rose-garfinkle/"> <small>Holden Comprehensive Cancer Center</small>
                                    </a>
                                    <a href="http://www.uifoundation.org/stories/features/rose-garfinkle/">
                                        <h4 width="100%" height="100%">Rose Garfinkle</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="sup_lead">
                            <a href="http://www.uifoundation.org/stories/features/rose-garfinkle/">
                                <blockquote>"The cancer center was a protective, caring environment. I felt comfortable and safe there."</blockquote>
                            </a>
                        </div>
                    </li>
                    <li id="home_page_story" style="display: list-item;">
                        <div class="stories_image_holder">
                            <img alt="" src="wp-content/themes/common_3.5_home/images/mark-wilkinson.jpg" width="100%" height="100%">
                            <div class="stories_image_text">
                                <div class="twelve columns">
                                    <a href="http://www.uifoundation.org/stories/features/dr-mark-e-wilkinson/"> <small>UI Carver College of Medicine</small>
                                    </a>
                                    <a href="http://www.uifoundation.org/stories/features/dr-mark-e-wilkinson/">
                                        <h4 width="100%" height="100%">Dr. Mark E. Wilkinson</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="sup_lead">
                            <a href="http://www.uifoundation.org/stories/features/dr-mark-e-wilkinson/">
                                <blockquote>"We couldn't be more grateful for the generosity of those who help us in our mission."</blockquote>
                            </a>
                        </div>
                    </li>
                    <li id="home_page_story">
                        <div class="stories_image_holder">
                            <img alt="" src="wp-content/themes/common_3.5_home/images/jack-lynch.jpg" width="100%" height="100%">
                            <div class="stories_image_text">
                                <div class="twelve columns">
                                    <a href="http://www.uifoundation.org/stories/features/jack-lynch/"> <small>Iowa Impact Fund</small>
                                    </a>
                                    <a href="http://www.uifoundation.org/stories/features/jack-lynch/">
                                        <h4 width="100%" height="100%">Jack Lynch</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="sup_lead">
                            <a href="http://www.uifoundation.org/stories/features/jack-lynch/">
                                <blockquote>"When an opportunity came, I wasn't denied the chance to seize upon it just because I didn't have the financial ability to go."</blockquote>
                            </a>
                        </div>
                    </li>
                    <li id="home_page_story">
                        <div claClass 'XSLTProcessor' not found in ss="stories_image_holder">
                            <img alt="" src="http://www.uifoundation.org/stories/wp-content/uploads/sites/40/2013/04/heidi-wagler.jpg" width="100%" height="100%">
                            <div class="stories_image_text">
                                <div class="twelve columns">
                                    <a href="http://www.uifoundation.org/stories/features/heidi-bernau-wagler/"> <small>Holden Comprehensive Cancer Center</small>
                                    </a>
                                    <a href="http://www.uifoundation.org/stories/features/heidi-bernau-wagler/">
                                        <h4 width="100%" height="100%">Heidi Bernau Wagler</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="sup_lead">
                            <a href="http://www.uifoundation.org/stories/features/heidi-bernau-wagler/">
                                <blockquote>"The physicians and staff got to know my mother so well; they really care personally about every patient."</blockquote>
                            </a>
                        </div>
                    </li>
                    <li id="home_page_story">
                        <div class="stories_image_holder">
                            <img alt="" src="http://www.uifoundation.org/stories/wp-content/uploads/sites/40/2013/04/david-gompper.jpg" width="100%" height="100%">
                            <div class="stories_image_text">
                                <div class="twelve columns">
                                    <a href="http://www.uifoundation.org/stories/features/david-gompper/"> <small>College of Liberal Arts &amp; Sciences</small>
                                    </a>
                                    <a href="http://www.uifoundation.org/stories/features/david-gompper/">
                                        <h4 width="100%" height="100%">David Gompper</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="sup_lead">
                            <a href="http://www.uifoundation.org/stories/features/david-gompper/">
                                <blockquote>"I’m so blessed to be at Iowa."</blockquote>
                            </a>
                        </div>
                    </li>
                    <li id="home_page_story" style="display: list-item;">
                        <div class="stories_image_holder">
                            <img alt="" src="wp-content/themes/common_3.5_home/images/brandon-cochran.jpg" width="100%" height="100%">
                            <div class="stories_image_text">
                                <div class="twelve columns">
                                    <a href="http://www.uifoundation.org/stories/features/brandon-cochran/"> <small>Pentacrest Museums</small>
                                    </a>
                                    <a href="http://www.uifoundation.org/stories/features/brandon-cochran/">
                                        <h4 width="100%" height="100%">Brandon Cochran</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="sup_lead">
                            <a href="http://www.uifoundation.org/stories/features/brandon-cochran/">
                                <blockquote>"I never would have had these opportunities without contributors' generous investments in the Pentacrest Museums."</blockquote>
                            </a>
                        </div>
                    </li>
                    <li id="home_page_story">
                        <div class="stories_image_holder">
                            <img alt="" src="http://www.uifoundation.org/stories/wp-content/uploads/sites/40/2013/04/mark-maryjo-abbott.jpg" width="100%" height="100%">
                            <div class="stories_image_text">
                                <div class="twelve columns">
                                    <a href="http://www.uifoundation.org/stories/features/mark-and-mary-jo-abbott/"> <small>Parents Fund for Student Support</small>
                                    </a>
                                    <a href="http://www.uifoundation.org/stories/features/mark-and-mary-jo-abbott/">
                                        <h4 width="100%" height="100%">Mark and Mary Jo Abbott</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="sup_lead">
                            <a href="http://www.uifoundation.org/stories/features/mark-and-mary-jo-abbott/">
                                <blockquote>"Contributing to the Parents Fund and taking an active role in the Parents Association seemed like a natural extension..."</blockquote>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section><!--END STORIES-->
    <!--ADDITIONAL CAMPAIGNS-->
    <section style="width:100%; float:left;">
        <div class="row">
            <div class="twelve columns">
                <h4>Additional Campaigns</h4>
                <?php the_field('additional_campaigns'); ?>
            </div>
        </div>
    </section>
</section><!--CLOSE MAIN WRAPPER-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>