<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" 
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
    <html>
        <body>
            <h2>Book Collection</h2>
            <table border="1">
                <tr bgcolor ="Red">
                    <th>title</th>
                    <th>author</th>
                    <th>publishdate</th>
                    <th>genre</th>
                 </tr>

                <xsl:for-each select="Books/Book">
                <tr>
                    <td> <xsl:value-of select="title"/> </td>
                    <td> <xsl:value-of select="author"/> </td>
                    <td> <xsl:value-of select="publishdate"/> </td>
                    <td> <xsl:value-of select="genre"/> </td>
                </tr>
            </xsl:for-each>
            </table>
        </body>
    </html>
    </xsl:template>
</xsl:stylesheet>
