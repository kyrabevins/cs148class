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

print "<table>";
    $columns = 2;
    $query = 'SELECT fnkCourseId, SUM(fldNumStudents – fldMaxStudents) from tblSections WHERE (fldNumStudents-fldMaxStudents)>0 GROUP BY fnkCourseID';
    $info2 = $thisDatabaseReader->select($query,  "", 1, 0, 0, 3, false, false);

    $highlight = 0; // used to highlight alternate rows
    print '<h2>Total Records: ' . count($info2) . "</h2>";
    print '<p> SQL: ' . $query . '</p>';
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
    print '</aside>';

print '</article>';
include "footer.php";
?>