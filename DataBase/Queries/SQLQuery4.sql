USE PD_212;
GO


SELECT	
		discipline_id,
		discipline_name,
		number_of_lessons,
		FORMATMESSAGE(N'%s %s %s', last_name, first_name, middle_name) AS 'full_name'
		--last_name
FROM	Teachers
JOIN	TeachersDisciplinesRelation	ON	(teacher=teacher_id)
JOIN	Disciplines					ON	(discipline=discipline_id)
WHERE	teacher_id = 1

