<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0" 
xmlns:content="http://purl.org/rss/1.0/modules/content/"
xmlns:wfw="http://wellformedweb.org/CommentAPI/" 
xmlns:dc="http://purl.org/dc/elements/1.1/" 
xmlns:atom="http://www.w3.org/2005/Atom" 
xmlns:sy="http://purl.org/rss/1.0/modules/syndication/" 
xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
xmlns:msxsl="urn:schemas-microsoft-com:xslt"
xmlns:blog="http://mycompany.com/mynamespace"
>
<!--
<msxsl:script language="JScript"" implements-prefix="blog">
    function getCategory(){
        var pathArray = window.location.pathname.split( '/' );
        return pathArray[2];
    }
</msxsl:script>-->


<xsl:output method="html" doctype-system="http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"/>
	<xsl:template match="/">  
		<!--Depending on page enter the correct category ($category = page slug and category = post category)--> 
		<xsl:if test="rss/channel/item/category = 'engineering'" >
			<h3>Volunteer Leaders</h3>
			<!--For each post must include whether Volunteer Leader Image or Volunteer Leader Video-->
			<xsl:for-each select="rss/channel/item[category='Volunteer Leader Image' and category='engineering']" >
			<div style="background-color:#FFFFCC;width:100%;height:240px;margin-bottom:10px;">
                <xsl:variable name="imageLink" select="imageURL" />
				<img class="volunteer_image" src="{$imageLink}" alt="" align="left" width="384px" height="240px" />
				<h3><a href="{link}" ><xsl:value-of select="title" /></a></h3>
				<p><em><xsl:value-of select="description" disable-output-escaping="yes"/></em></p>
			</div>
			</xsl:for-each>
			<xsl:for-each select="rss/channel/item[category='Volunteer Leader Video' and category='engineering']" >
			<div style="background-color:#FFFFCC;width:100%;height:240px;margin-bottom:10px;">
				<xsl:variable name="videoURL" select="video" />
				<iframe class="volunteer_video" src="{$videoURL}?&amp;rel=0&amp;controls=0&amp;showinfo=0" width="384" height="240" align="left" frameborder="0"/>
				<h3><a href="{link}" ><xsl:value-of select="title" /></a></h3>
				<p><em><xsl:value-of select="description" /></em></p>
			</div>
			</xsl:for-each>
		</xsl:if>	
		
	</xsl:template>
</xsl:stylesheet>	