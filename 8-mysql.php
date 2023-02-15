<!-- MySQL methods -->
<!-- ----------------------------------------------------------------------- -->

<?php
// MySQL methods
// -----------------------------------------------------------------------

// Connect to MySQL
function mysqlConnect($host, $user, $pass, $db)
{
    $link = mysql_connect($host, $user, $pass);
    if (!$link) {
        die('Could not connect: ' . mysql_error());
    }

    mysql_select_db($db);
}
