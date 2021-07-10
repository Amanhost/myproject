select * from people
select * from Travels
select people.Name,Travels.TrainNumber,Travels .Train from people full join Travels on people.ID=Travels.ID
select top 40 percent Name from people
select * from people
select max (salary) from people
select min (salary) from people inner join Travels on people.ID=Travels.peopleID
group  by people.ID
select * from people where age between 18 and 25 order by age Asc
select count(salary) from people