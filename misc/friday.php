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
$start = (int)$_GET["start"];

$lowerLimit = 10;
$upperLimit = 999;
$columns = 8;
    
    $query = 'SELECT pmkStudentId, fldFirstName, fldLastName, fldStreetAddress, fldCity, fldState, fldZip, fldGender FROM tblStudents ORDER BY fldLastName, fldFirstName LIMIT '. $lowerLimit. ' OFFSET '. $start;
    $info2 = $thisDatabaseReader->select($query,  "", 0, 1, 0, 0, false, false);
    //$info2 = $thisDatabaseReader->testquery($query,  "", 0, 1, 0, 0, false, false);
print '<h1>Total Records: ' . count($info2) . "</h1>";
    print '<br>';
    print '<h2> SQL: ' . $query . '</h2>';
    print '<br>';
    $iteration = 10;
    print '<p><a href="https://kbevins.w3.uvm.edu/cs148develop/misc/friday.php?start=' . ($start += $iteration) . ' ">Next 10 records</a>';
    
   
print "<table>";
print "<tr><th>Student Id</th><th>First Name</th><th>Last Name</th><th>Street Address</th><th>City</th><th>State</th><th>Zip Code</th><th>Gender</th></tr>";

    

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
            print '<td><a href="http://www.oplin.org/tree/">' . $rec[$i] . '</a></td>';
        }
        print '</tr>';
    }
    // all done
    print '</table>';
    
include "footer.php";
?>