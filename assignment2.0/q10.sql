SELECT fldBuilding, SUM(fldNumStudents) AS num_studs FROM tblSections WHERE fldDays LIKE “%F%” GROUP BY fldBuilding ORDER BY num_studs DESC;
