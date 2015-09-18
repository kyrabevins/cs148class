<html lang="en">
    <head>
        <title>CS148 Assignment 2.0</title>
        <meta charset="utf-8">
        <meta name="author" content="Kyra Bevins">
        <meta name="description" content="This site is for Assignment 2.0 of CS148.">

        <meta name="viewport" content="width=device-width, initial-scale=1">
    <h1>List of Queries</h1><br>
    
    <p><b>q01.</b>   <a href="https://kbevins.w3.uvm.edu/cs148/assignment2.0/q01.php">SQL:</a>   SELECT pmkNetId FROM tblTeachers;</p>
    <br>
    <p><b>q02.</b>   <a href="https://kbevins.w3.uvm.edu/cs148/assignment2.0/q02.php">SQL:</a>   SELECT fldDepartment FROM tblCourses WHERE fldCourseName LIKE "Introduction%";</p>
    <br>
    <p><b>q03.</b>   <a href="https://kbevins.w3.uvm.edu/cs148/assignment2.0/q03.php">SQL:</a>   SELECT * FROM tblSections WHERE fldStart = "13:10:00" AND fldBuilding = "Kalkin";</p>
    <br>
    <p><b>q04.</b>   <a href="https://kbevins.w3.uvm.edu/cs148/assignment2.0/q04.php">SQL:</a>   SELECT * FROM tblCourses WHERE fldDepartment = “CS” AND fldCourseNumber = 148;</p>
    <br>
    <p><b>q05.</b>   <a href="https://kbevins.w3.uvm.edu/cs148/assignment2.0/q05.php">SQL:</a>   SELECT fldFirstName, fldLastName FROM tblTeachers WHERE pmkNetId LIKE "R%o";</p>
    <br>
    <p><b>q06.</b>   <a href="https://kbevins.w3.uvm.edu/cs148/assignment2.0/q06.php">SQL:</a>   SELECT fldCourseName FROM tblCourses WHERE fldCourseName LIKE “%data%” AND fldDepartment NOT LIKE “CS”;</p>
    <br>
    <p><b>q07.</b>   <a href="https://kbevins.w3.uvm.edu/cs148/assignment2.0/q07.php">SQL:</a>   SELECT COUNT(DISTINCT fldDepartment) FROM tblCourses;</p>
    <br>
    <p><b>q08.</b>   <a href="https://kbevins.w3.uvm.edu/cs148/assignment2.0/q08.php">SQL:</a>   SELECT fldBuilding, COUNT(*) AS num_sections FROM tblSections GROUP BY fldBuilding;</p>
    <br>
    <p><b>q09.</b>   <a href="https://kbevins.w3.uvm.edu/cs148/assignment2.0/q09.php">SQL:</a>   SELECT fldBuilding, SUM(fldNumStudents) AS num_studs FROM tblSections WHERE fldDays LIKE “%W%” GROUP BY fldBuilding ORDER BY num_studs DESC;</p>
    <br>
    <p><b>q10.</b>   <a href="https://kbevins.w3.uvm.edu/cs148/assignment2.0/q10.php">SQL:</a>   SELECT fldBuilding, SUM(fldNumStudents) AS num_studs FROM tblSections WHERE fldDays LIKE “%F%” GROUP BY fldBuilding ORDER BY num_studs DESC;</p>
    <br>
    <p><b>q11.</b>   <a href="https://kbevins.w3.uvm.edu/cs148/assignment2.0/q11.php">SQL:</a>   SELECT fnkCourseId FROM tblSections GROUP BY fnkCourseId HAVING COUNT(fldSection)>=50;</p>

</html>