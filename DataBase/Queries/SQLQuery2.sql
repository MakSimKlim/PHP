USE PD_212;
GO

SELECT 
		teacher_id,
		FORMATMESSAGE(N'%s %s %s', last_name, first_name, middle_name) AS 'full_name',
		birth_date,
		DATEDIFF(DAY, work_since, GETDATE())/365 AS 'experience',
		discipline_name
FROM	Disciplines
JOIN	TeachersDisciplinesRelation ON (discipline=discipline_id)
JOIN	Teachers ON (teacher=teacher_id)
WHERE	discipline_name LIKE N'%C++%';