<?php get_header(); ?>
    <!--MAIN WRAPPER-->
    <section role="main">
        <!--BEGIN MAIN CONTENT-->
        <div class="row">
            <!--TEN COLUMNS CENTERED-->
            <div class="ten columns centered">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div> <!--END TEN COLUMNS-->
        </div>
        <!--FEATURED PROFILES-->
        <section id="featured_profile">
            <?php
                //Get blog slug
                $blog_details = get_blog_details($GLOBALS['blog_id']);
                $slug = str_replace('/', '', $blog_details->path);

                // Load the XML source
                $xml = new DOMDocument;
                $xml->load('http://www.uifoundation.org/stories/feed/');
                $xsl = new DOMDocument;
                $xsl->load('wp-content/themes/common_3.5/student.xsl');

                // Configure the transformer
                $proc = new XSLTProcessor;
                $proc->importStyleSheet($xsl); // attach the xsl rules
                //Pass the blog slug to determine which leaders to post
                $xsl = $proc ->setParameter('', 'category', $slug);
                echo $proc->transformToXML($xml);
            ?>
        </section> <!--END FEATURED PROFILES-->
    </section> <!--END MAIN WRAPPER-->
    <!--SIDEBAR / NEWS -->
    <?php get_sidebar(); ?>
<!--FOOTER-->
<?php get_footer(); ?>