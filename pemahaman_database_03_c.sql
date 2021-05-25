SELECT S.school_name, B.count as count_inaugurated_date 
FROM school S, 
	(SELECT inaugurated_date ,COUNT(inaugurated_date) as count from school GROUP by inaugurated_date) B 
		where S.inaugurated_date = B.inaugurated_date