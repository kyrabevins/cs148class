<?php

$admin = true;
include "top.php";

print "<article>";
// %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
// prepare the sql statement

$columns = 3;
$query  = 'SELECT * FROM tblAdministrators';
$results = $thisDatabaseReader->select($query, "", 0, 0, 0, 0, false, false);   

print "<ol>\n";

foreach ($results as $res) {

    print "<li>";
    if ($admin) {
        print '<a href="form.php?id=' . $res["pmkAdminNum"] . '">[Edit]</a> ';
    }
    print $res['pmkAdminId'] . "</li>\n";
}
print "</ol>\n";
print "</article>";
include "footer.php";
?>
