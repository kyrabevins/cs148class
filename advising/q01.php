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
$columns = 5;
    $query = 'SELECT pmkTerm, pmkYear, fldDepartment, fldCourseNumber, fldRequirement, tblCourses.fldCredits FROM tblSemesterPlan, tblCourses, tblFourYrPlan, tblSemesterPlanCourses, tblStudents WHERE tblCourses.pmkCourseId = tblSemesterPlanCourses.fnkCourseId AND tblStudents.pmkStudentId = tblFourYrPlan.fnkStudentId AND tblFourYrPlan.pmkPlanId = tblSemesterPlan.fnkPlanId AND tblSemesterPlan.pmkYear = tblSemesterPlanCourses.fnkYear AND tblSemesterPlan.pmkTerm = tblSemesterPlanCourses.fnkTerm AND tblSemesterPlan.fnkPlanId = tblSemesterPlanCourses.fnkPlanId ORDER BY tblSemesterPlan.fldDisplayOrder';
    $records = $thisDatabaseReader->select($query,  "", 1, 6, 0, 0, false, false);
print '<br><h1>Total Records: ' . count($records) . "</h1>";
    print '<br>';
    print '<h2>Four Year Plan</h2>';
    print '<br>';
    
    $semester = "";
    $year = "";
    $semesterCredits = 0;
    $totalCredits = 0;
    
    
    if(is_array($records)) {
        foreach ($records as $row){
        if ($semester != $row["pmkTerm"] . $row["pmkYear"]){
            if($semester != "") {
                print "</ol>";
                print "<p>Total Credits: " . $semesterCredits;
                print "</section>";
                
            }
            //if end of academic year print closing div
            if ($semester != "" AND ( $row["pmkTerm"] == "Fall")) {
                echo "</div>" . LINE_BREAK;
                
            }
            if ($row["pmkTerm"] == "Fall"){
                print "<div class='floatLeft'>";
                
            }
            print '<section class="fourColumns ';
            print $row["pmkTerm"];
            //i want to keep academic year together
            print '">';
            print '<h3>' . $row["pmkTerm"] . " " . $row["pmkYear"];
            $semester = $row["pmkTerm"] . $row["pmkYear"];
            $year = $row["pmkYear"];
            $semesterCredits = 0;
            
            
            print "<ol>";
        }
        
        
        print '<li class="' . $row["fldRequirement"] . '">';
        print $row["fldDepartment"] . " " . $row["fldCourseNumber"];
        print '</li>' . LINE_BREAK;
        $semesterCredits = $semesterCredits + $row["fldCredits"];
        $totalCredits = $totalCredits + $row["fldCredits"];
        }
        print "</ol>";
        print "</section></div>" . LINE_BREAK;
    }
    

    

    
    
    
include "footer.php";
?>