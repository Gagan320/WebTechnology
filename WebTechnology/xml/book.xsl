<?xml version="1.0" encoding="UTF-8"?>
<xsl: stylesheet version="1.0" <xmlns:xsl></xmlns:xsl>="http://www.w3.org//1999/xsl/Transform">

<xsl:template match="/">
    <html>
        <body>
            <h2>Book Collection</h2>
            <table border="1">
                <tr bgcolor ="Red">
                    <th>Book ID</th>
                    <th>Author</th>
                </tr>

                <xsl:foreach select="books/book">
                <tr>
                    <td><xsl:value of</td>
                </tr>
            </xsl:foreach>
            </table>
        </body>
    </html>

</xsl:template>