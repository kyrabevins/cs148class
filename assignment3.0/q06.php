<?php
//##############################################################################
//
// This page lists your tables and fields within your database. if you click on
// a database name it will show you all the records for that table. 
// 
// 
// This file is only for class purposes and should never be publicly live
//##############################################################################
include "top.php";
$columns = 3;
    $query = 'SELECT fldFirstName,fldPhone,fldSalary FROM tblTeachers WHERE fldSalary < (SELECT AVG(fldSalary) FROM tblTeachers)';
    $info2 = $thisDatabaseReader->select($query,  "", 1, 0, 0, 1, false, false);
print '<h1>Total Records: ' . count($info2) . "</h1>";
    print '<br>';
    print '<h2> SQL: ' . $query . '</h2>';
    print '<br>';
    
    
print "<table>";

    

    $highlight = 0; // used to highlight alternate rows
    
    
    foreach ($info2 as $rec) {
        $highlight++;
        if ($highlight % 2 != 0) {
            $style = ' odd ';
        } else {
            $style = ' even ';
        }
        print '<tr class="' . $style . '">';
        for ($i = 0; $i < $columns; $i++) {
            print '<td>' . $rec[$i] . '</td>';
        }
        print '</tr>';
    }
    // all done
    print '</table>';
    
include "footer.php";
?>

