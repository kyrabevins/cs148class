SELECT fnkCourseId, SUM(fldNumStudents – fldMaxStudents) from tblSections WHERE (fldNumStudents-fldMaxStudents)>0 GROUP BY fnkCourseID;
