<div id="footer">
    <!--BREADCRUMBS/TOP-->
    <section class="footer_header">
        <div class="row">
            <div class="twelve columns">
                <p><a href="<?php echo network_site_url(); ?>">Home</a> / <?php if (function_exists('tasty_breadcrumbs')) tasty_breadcrumbs(); ?></p>
            </div>
        </div>
    </section>
    <!--CAMPAIGN/SEARCH-->
    <section class="search_campaign">
        <div class="row">
            <!--CAMPAIGN-->
            <div class="six columns">
                <a href="http://www3.uifoundation.org/campaign/">
                    <img src="../wp-content/themes/common_3.5/images/fifm.png" alt="For Iowa. Forever More." style="border:0;">
                </a>
            </div>
            <!--SEARCH-->
            <div class="six columns">
                <!-- Postfix action -->
                <div class="row collapse">
                    <div class="ten mobile-three columns">
                        <!--Search results sent to /stories page using goolge custom search -->
                        <form action="http://www.uifoundation.org/search/" id="cse-search-box">
                            <input type="hidden" name="cx" value="004292187385298253618:rfbc288j0ps">
                            <input type="hidden" name="ie" value="UTF-8">
                            <input class="search" type="text" name="q" placeholder="Search the UI Foundation">
                        </form>
                    </div>
                    <div class="two mobile-one columns">
                        <input class="button expand postfix" type="submit" name="sa" value="Search">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SITE DESTINATIONS-->
    <!--Footer links from RSS feed. Colleges, Programs, Ways to Give, Communication Options, and Connect with Us columns/links included                Bottom Section with Contact Us, Private Poilicy, Trouble w/site, and Questions links included in footer-links.php as well -->
    <?php include 'wp-content/themes/common_3.5_home/footer-links.php'; ?>
</div> <!--END FOOTER-->

<div id="global_mobile" class="reveal-modal expand">
    <h3>Navigation</h3>
    <ul>
        <li><a href="<?php the_field('giving_link'); ?>">Give Now</a></li>
        <li><a href="http://www.uifoundation.org/about/">About the Foundation</a></li>
        <li><a href="http://www.uifoundation.org/thanks/">Recognition and thanks</a></li>
        <li><a href="http://www3.uifoundation.org/jobs">Careers</a></li>
        <li><a href="http://www.uifoundation.org/ways">Ways to give</a></li>
    </ul>
</div>

<?php wp_footer(); ?>
</body>
</html>
