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
$columns = 6;
    $query = 'SELECT tblFourYrPlan.pmkPlanId, tblFourYrPlan.fldDateCreated, tblFourYrPlan.fldCatalogYr, tblFourYrPlan.fnkStudentId, pmkYear, pmkTerm FROM tblFourYrPlan, tblSemesterPlan, tblSemesterPlanCourses, tblCourses WHERE tblFourYrPlan.pmkPlanId = tblSemesterPlan.fnkPlanId AND tblSemesterPlan.pmkYear = tblSemesterPlanCourses.fnkYear AND tblSemesterPlan.pmkTerm = tblSemesterPlanCourses.fnkTerm AND tblSemesterPlanCourses.pmkPlanId = tblSemesterPlan.fnkPlanId AND tblCourses.pmkCourseId = tblSemesterPlanCourses.fnkCourseId ORDER BY tblSemesterPlan.fldDisplayOrder, tblSemesterPlanCourses.fldDisplayOrder';
    $info2 = $thisDatabaseReader->select($query,  "", 1, 5, 0, 0, false, false);
print '<br><h1>Total Records: ' . count($info2) . "</h1>";
    print '<br>';
    print '<h2>Four Year Plan</h2>';
    print '<br>';
    
    
print "<table>";
print "<tr><th>Plan Id</th><th>Date Created</th><th>Catalog Year</th><th>Student Id</th><th>Year</th><th>Term</th></tr>";

    

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