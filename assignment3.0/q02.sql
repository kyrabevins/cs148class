SELECT DISTINCT fldDays, fldStart FROM tblSections, tblTeachers WHERE tblSections.fnkTeacherNetId=tblTeachers.pmkNetId AND fldFirstName LIKE "Robert%" AND fldLastName = "Snapp" ORDER BY fldStart;
