SELECT DISTINCT fldCourseName, fldDays, fldStart FROM tblCourses, tblSections, tblTeachers WHERE tblSections.fnkTeacherNetId=tblTeachers.pmkNetId AND tblSections.fnkCourseId=tblCourses.pmkCourseId AND fldLastName="Horton" AND fldFirstName LIKE "Jackie%" ORDER BY  fldStart;