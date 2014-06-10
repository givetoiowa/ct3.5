<section class="site_map">
<div class="row">
<div class="three columns">
    <h4>Colleges</h4>
    <nav>
        <?php // Get RSS Feed(s)

        require_once($_SERVER['DOCUMENT_ROOT'] . '/wordpress/wp-includes/feed.php');

        $feed = 'http://localhost/wordpress/wp-content/themes/common_3.5_home/xml-files/footer-links-college.xml';
        // Get a SimplePie feed object from the specified feed source.
        $rss = fetch_feed($feed);

        if ( ! is_wp_error( $rss ) ) : // Checks that the object is created correctly

            // Figure out how many total items there are, but limit it to 5.
            $maxitems = $rss->get_item_quantity( 11 );

            // Build an array of all the items, starting with element 0 (first element).
            $rss_items = $rss->get_items( 0, $maxitems );

        endif;
        ?>

        <ul>
            <?php if ( $maxitems == 0 ) : ?>
                <li><?php _e( 'No items', 'my-text-domain' ); ?></li>
            <?php else : ?>
                <?php // Loop through each feed item and display each item as a hyperlink. ?>
                <?php foreach ( $rss_items as $item ) : ?>
                    <li>
                        <a href="<?php echo esc_url( $item->get_permalink() ); ?>"
                           title="<?php echo esc_html( $item->get_title() ); ?>">
                            <?php echo esc_html( $item->get_title() ); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </nav>
    <h4>Campaigns</h4>
    <nav>
        <?php

        $feed = 'http://localhost/wordpress/wp-content/themes/common_3.5_home/xml-files/footer-links-campaigns.xml';
        // Get a SimplePie feed object from the specified feed source.
        $rss = fetch_feed($feed);

        if ( ! is_wp_error( $rss ) ) : // Checks that the object is created correctly

            // Figure out how many total items there are, but limit it to 5.
            $maxitems = $rss->get_item_quantity( 10 );

            // Build an array of all the items, starting with element 0 (first element).
            $rss_items = $rss->get_items( 0, $maxitems );

        endif;
        ?>

        <ul>
            <?php if ( $maxitems == 0 ) : ?>
                <li><?php _e( 'No items', 'my-text-domain' ); ?></li>
            <?php else : ?>
                <?php // Loop through each feed item and display each item as a hyperlink. ?>
                <?php foreach ( $rss_items as $item ) : ?>
                    <li>
                        <a href="<?php echo esc_url( $item->get_permalink() ); ?>"
                           title="<?php echo esc_html( $item->get_title() ); ?>">
                            <?php echo esc_html( $item->get_title() ); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </nav>
</div>

<div class="three columns">
    <h4>Programs</h4>
    <nav>
        <?php

        $feed = 'http://localhost/wordpress/wp-content/themes/common_3.5_home/xml-files/footer-links-programs.xml';
        // Get a SimplePie feed object from the specified feed source.
        $rss = fetch_feed($feed);

        if ( ! is_wp_error( $rss ) ) : // Checks that the object is created correctly

            // Figure out how many total items there are, but limit it to 5.
            $maxitems = $rss->get_item_quantity( 10 );

            // Build an array of all the items, starting with element 0 (first element).
            $rss_items = $rss->get_items( 0, $maxitems );

        endif;
        ?>

        <ul>
            <?php if ( $maxitems == 0 ) : ?>
                <li><?php _e( 'No items', 'my-text-domain' ); ?></li>
            <?php else : ?>
                <?php // Loop through each feed item and display each item as a hyperlink. ?>
                <?php foreach ( $rss_items as $item ) : ?>
                    <li>
                        <a href="<?php echo esc_url( $item->get_permalink() ); ?>"
                           title="<?php echo esc_html( $item->get_title() ); ?>">
                            <?php echo esc_html( $item->get_title() ); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </nav>
    <h4>University</h4>
    <nav>
        <?php

        $feed = 'http://localhost/wordpress/wp-content/themes/common_3.5_home/xml-files/footer-links-university.xml';
        // Get a SimplePie feed object from the specified feed source.
        $rss = fetch_feed($feed);

        if ( ! is_wp_error( $rss ) ) : // Checks that the object is created correctly

            // Figure out how many total items there are, but limit it to 5.
            $maxitems = $rss->get_item_quantity( 5 );

            // Build an array of all the items, starting with element 0 (first element).
            $rss_items = $rss->get_items( 0, $maxitems );

        endif;
        ?>

        <ul>
            <?php if ( $maxitems == 0 ) : ?>
                <li><?php _e( 'No items', 'my-text-domain' ); ?></li>
            <?php else : ?>
                <?php // Loop through each feed item and display each item as a hyperlink. ?>
                <?php foreach ( $rss_items as $item ) : ?>
                    <li>
                        <a href="<?php echo esc_url( $item->get_permalink() ); ?>"
                           title="<?php echo esc_html( $item->get_title() ); ?>">
                            <?php echo esc_html( $item->get_title() ); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </nav>
</div>

<div class="three columns">
    <h4>Ways to give</h4>
    <nav>
        <?php

        $feed = 'http://localhost/wordpress/wp-content/themes/common_3.5_home/xml-files/footer-links-give.xml';
        // Get a SimplePie feed object from the specified feed source.
        $rss = fetch_feed($feed);

        if ( ! is_wp_error( $rss ) ) : // Checks that the object is created correctly

            // Figure out how many total items there are, but limit it to 5.
            $maxitems = $rss->get_item_quantity( 10 );

            // Build an array of all the items, starting with element 0 (first element).
            $rss_items = $rss->get_items( 0, $maxitems );

        endif;
        ?>

        <ul>
            <?php if ( $maxitems == 0 ) : ?>
                <li><?php _e( 'No items', 'my-text-domain' ); ?></li>
            <?php else : ?>
                <?php // Loop through each feed item and display each item as a hyperlink. ?>
                <?php foreach ( $rss_items as $item ) : ?>
                    <li>
                        <a href="<?php echo esc_url( $item->get_permalink() ); ?>"
                           title="<?php echo esc_html( $item->get_title() ); ?>">
                            <?php echo esc_html( $item->get_title() ); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </nav>

    <h4>Contact Us</h4>
    <nav>
        <?php

        $feed = 'http://localhost/wordpress/wp-content/themes/common_3.5_home/xml-files/footer-links-contact-us.xml';
        // Get a SimplePie feed object from the specified feed source.
        $rss = fetch_feed($feed);

        if ( ! is_wp_error( $rss ) ) : // Checks that the object is created correctly

            // Figure out how many total items there are, but limit it to 5.
            $maxitems = $rss->get_item_quantity( 10 );

            // Build an array of all the items, starting with element 0 (first element).
            $rss_items = $rss->get_items( 0, $maxitems );

        endif;
        ?>

        <ul>
            <?php if ( $maxitems == 0 ) : ?>
                <li><?php _e( 'No items', 'my-text-domain' ); ?></li>
            <?php else : ?>
                <?php // Loop through each feed item and display each item as a hyperlink. ?>
                <?php foreach ( $rss_items as $item ) : ?>
                    <li>
                        <a href="<?php echo esc_url( $item->get_permalink() ); ?>"
                           title="<?php echo esc_html( $item->get_title() ); ?>">
                            <?php echo esc_html( $item->get_title() ); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </nav>
</div>

<!--ADDRESS-->
<div class="three columns">
    <h4>The University of Iowa Foundation</h4>
    <p>P.O. Box 4550<br>
        Iowa City, Iowa 52244<br>
        (319) 335-3305 / (800) 648-6973<br>
        <a href="http://www.uifoundation.org/wp-content/uploads/2013/12/Driving+Directions.pdf">Directions</a></p>
    <p><a href="http://www.uiowa.edu" target="_blank">The University of Iowa</a></p>

    <h4>Connect with us</h4>
    <nav>
        <?php

        $feed = 'http://localhost/wordpress/wp-content/themes/common_3.5_home/xml-files/footer-links-connect.xml';
        // Get a SimplePie feed object from the specified feed source.
        $rss = fetch_feed($feed);

        if ( ! is_wp_error( $rss ) ) : // Checks that the object is created correctly

            // Figure out how many total items there are, but limit it to 5.
            $maxitems = $rss->get_item_quantity( 10 );

            // Build an array of all the items, starting with element 0 (first element).
            $rss_items = $rss->get_items( 0, $maxitems );

        endif;
        ?>

        <ul>
            <?php if ( $maxitems == 0 ) : ?>
                <li><?php _e( 'No items', 'my-text-domain' ); ?></li>
            <?php else : ?>
                <?php // Loop through each feed item and display each item as a hyperlink. ?>
                <?php foreach ( $rss_items as $item ) : ?>
                    <li>
                        <a href="<?php echo esc_url( $item->get_permalink() ); ?>"
                           title="<?php echo esc_html( $item->get_title() ); ?>">
                            <?php echo esc_html( $item->get_title() ); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </nav>
</div>
</div>
</section>

<section class="bottom">

    <div class="row">
        <div class="twelve columns">
            <?php

            $feed = 'http://localhost/wordpress/wp-content/themes/common_3.5_home/xml-files/footer-links-bottom.xml';
            // Get a SimplePie feed object from the specified feed source.
            $rss = fetch_feed($feed);

            if ( ! is_wp_error( $rss ) ) : // Checks that the object is created correctly

                // Figure out how many total items there are, but limit it to 5.
                $maxitems = $rss->get_item_quantity( 10 );

                // Build an array of all the items, starting with element 0 (first element).
                $rss_items = $rss->get_items( 0, $maxitems );

            endif;
            ?>

            <ul>
                <li><span class="footer_copy">© 1996-2013 University of Iowa Foundation</span></li>
                <?php if ( $maxitems == 0 ) : ?>
                    <li><?php _e( 'No items', 'my-text-domain' ); ?></li>
                <?php else : ?>
                    <?php // Loop through each feed item and display each item as a hyperlink. ?>
                    <?php foreach ( $rss_items as $item ) : ?>
                        <li>
                            <a href="<?php echo esc_url( $item->get_permalink() ); ?>" title="<?php echo esc_html( $item->get_title() ); ?>"><?php echo esc_html( $item->get_title() ); ?></a>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>

        </div>

        <div class="twelve columns">
            <p></a>NOTICE: The State University of Iowa Foundation is a 501(c)(3) tax-exempt organization soliciting tax-deductible  private contributions for the benefit of the University of Iowa. Please review its <a href="/about/disclosure">full disclosure statement</a>.</p>
        </div>
    </div>

</section>