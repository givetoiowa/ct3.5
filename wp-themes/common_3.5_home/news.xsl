<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"  version="1.0"
                xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
                xmlns:content="http://purl.org/rss/1.0/modules/content/"
                xmlns:wfw="http://wellformedweb.org/CommentAPI/"
                xmlns:dc="http://purl.org/dc/elements/1.1/"
                xmlns:atom="http://www.w3.org/2005/Atom"
                xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
        >

    <xsl:output method="html"
                doctype-system="http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"/>

    <xsl:template match="/">
        <xsl:apply-templates select="rss/channel/item[position() &lt;= 4]" />
    </xsl:template>

    <xsl:template match="item">
        <div class = "three columns">
            <h5><a href="{link}"><xsl:value-of select="title" /></a> </h5>
            <xsl:variable name="date"><xsl:value-of select="pubDate"/></xsl:variable>
            <xsl:variable name="day" select="substring-before(substring-after($date, ' '), ' ')"/>
            <xsl:variable name="day2" select="concat(translate(substring($day,1,1), '0', ''), substring($day,2,1))"/>
            <xsl:variable name="monthName" select="substring-before(substring-after(substring-after($date, ' '), ' '), ' ')"/>
            <xsl:variable name="year" select="substring-before(substring-after(substring-after(substring-after($date, ' '), ' '), ' '), ' ')"/>
            <xsl:variable name="month">
                <xsl:choose>
                    <xsl:when test="$monthName = 'Jan'">January</xsl:when>
                    <xsl:when test="$monthName = 'Feb'">February</xsl:when>
                    <xsl:when test="$monthName = 'Mar'">March</xsl:when>
                    <xsl:when test="$monthName = 'Apr'">April</xsl:when>
                    <xsl:when test="$monthName = 'May'">May</xsl:when>
                    <xsl:when test="$monthName = 'Jun'">June</xsl:when>
                    <xsl:when test="$monthName = 'Jul'">July</xsl:when>
                    <xsl:when test="$monthName = 'Aug'">August</xsl:when>
                    <xsl:when test="$monthName = 'Sep'">September</xsl:when>
                    <xsl:when test="$monthName = 'Oct'">October</xsl:when>
                    <xsl:when test="$monthName = 'Nov'">November</xsl:when>
                    <xsl:when test="$monthName = 'Dec'">December</xsl:when>
                    <xsl:otherwise/>
                </xsl:choose>
            </xsl:variable>
            <p><xsl:value-of select="concat($month, ' ', $day2, ', ', $year)"/><br/></p>

        </div>
    </xsl:template>

</xsl:stylesheet>