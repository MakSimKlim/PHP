USE PD_212;
GO
-- SELECT * FROM Directions;

SELECT
		--FORMATMESSAGE(N'%s %s %s', last_name, first_name, middle_name)
			group_id,
			group_name,
			COUNT(stud_id) AS students_count,
			direction_name	
FROM		Students 
RIGHT JOIN	Groups		ON ([group]=group_id)
JOIN		Directions	ON (direction = direction_id)
GROUP BY	group_id, group_name, direction_name;

--SELECT
--		--FORMATMESSAGE(N'%s %s %s', last_name, first_name, middle_name)
--			group_id,
--			group_name,
--			COUNT(stud_id) AS students_count,
--			direction_name	
--FROM		Directions
--JOIN		Groups ON (direction=direction_id)
--LEFT JOIN	Students ON ([group]=group_id)
--GROUP BY	group_id, group_name, direction_name;