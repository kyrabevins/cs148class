<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CS148 Assignment 3.0</title>
        <meta charset="utf-8">
        <meta name="author" content="Kyra Bevins">
        <meta name="description" content="This site is for Assignment 3.0 of CS148.">

        <meta name="viewport" content="width=device-width, initial-scale=1">
    <h1>List of Queries</h1><br>
    
    <p><b>q01.</b>   <a href="https://kbevins.w3.uvm.edu/cs148/assignment3.0/q01.php">SQL:</a>   SELECT DISTINCT fldCourseName FROM tblCourses, tblEnrolls WHERE tblCourses.pmkCourseId=tblEnrolls.fnkCourseId AND fldGrade=100 ORDER BY fldCourseName;</p>
    <br>
    <p><b>q02.</b>   <a href="https://kbevins.w3.uvm.edu/cs148/assignment3.0/q02.php">SQL:</a>   SELECT DISTINCT fldDays, fldStart FROM tblSections, tblTeachers WHERE tblSections.fnkTeacherNetId=tblTeachers.pmkNetId AND fldFirstName LIKE "Robert%" AND fldLastName = "Snapp" ORDER BY fldStart;</p>
    <br>
    <p><b>q03.</b>   <a href="https://kbevins.w3.uvm.edu/cs148/assignment3.0/q03.php">SQL:</a>   SELECT DISTINCT fldCourseName, fldDays, fldStart FROM tblCourses, tblSections, tblTeachers WHERE tblSections.fnkTeacherNetId=tblTeachers.pmkNetId AND tblSections.fnkCourseId=tblCourses.pmkCourseId AND fldLastName="Horton" AND fldFirstName LIKE "Jackie%" ORDER BY  fldStart;</p>
    <br>
    <p><b>q04.</b>   <a href="https://kbevins.w3.uvm.edu/cs148/assignment3.0/q04.php">SQL:</a>   SELECT fldCRN, fldFirstName, fldLastName FROM tblStudents, tblEnrolls, tblCourses, tblSections WHERE tblStudents.pmkStudentId=tblEnrolls.fnkStudentId AND tblEnrolls.fnkCourseId=tblSections.fnkCourseId AND tblEnrolls.fnkCourseId=tblCourses.pmkCourseId AND fldCourseNumber=148 AND fldDepartment="CS" GROUP BY pmkStudentId ORDER BY fldCRN,fldLastName,fldFirstName;</p>
    <br>
    <p><b>q05.</b>   <a href="https://kbevins.w3.uvm.edu/cs148/assignment3.0/q05.php">SQL:</a>   SELECT tblTeachers.fldFirstName, tblTeachers.fldLastName,  count(tblStudents.fldFirstName) as total
FROM tblSections
JOIN tblEnrolls on tblSections.fldCRN  = tblEnrolls.`fnkSectionId`
JOIN tblStudents on pmkStudentId = fnkStudentId
JOIN tblTeachers on tblSections.fnkTeacherNetId=pmkNetId
WHERE fldType != "LAB"
group by fnkTeacherNetId
ORDER BY total desc;</p>
    <br>
    <p><b>q06.</b>   <a href="https://kbevins.w3.uvm.edu/cs148/assignment3.0/q06.php">SQL:</a>   SELECT fldFirstName,fldPhone,fldSalary FROM tblTeachers WHERE fldSalary < (SELECT AVG(fldSalary) FROM tblTeachers);</p>
    

</html>