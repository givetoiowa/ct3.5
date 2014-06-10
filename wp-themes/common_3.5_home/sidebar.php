<section id="sidebar" class="sidebar_related" role="complementary">
    <div class="row">
        <div class="small-block-grid-2 columns">
            <h4>Related News</h4>
        </div>
    </div>
    <div class="row">
        <?php
            // Load the XML source
            $xml = new DOMDocument;
            $xml->load('http://localhost/wordpress/feed/');
            $xsl = new DOMDocument;
            $xsl->load('wp-content/themes/common_3.5_home/news.xsl');

            // Configure the transformer
            $proc = new XSLTProcessor;
            $proc->importStyleSheet($xsl); // attach the xsl rules
            echo $proc->transformToXML($xml);
        ?>
    </div>
</section>
