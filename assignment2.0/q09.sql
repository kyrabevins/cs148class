SELECT fldBuilding, SUM(fldNumStudents) AS num_studs FROM tblSections WHERE fldDays LIKE “%W%” GROUP BY fldBuilding ORDER BY num_studs DESC;
