select * from [dbo].[Employeel5] order by Salery desc

;with ordered_salary as
(
SELECT Name, Salery, ROW_NUMBER() OVER(ORDER BY Salery DESC) rn
FROM [Employeel5]
)
select  rn,Name, Salery
from ordered_salary
where rn = 5