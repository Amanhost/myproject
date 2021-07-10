select * from people
select *  from Travels
select  * from shippers

select people.Name,people.Address,Travels.Train,Travels.TrainNumber,shippers.Supply_Date from people inner join Travels
on people.ID=Travels.peopleID
inner join shippers  on people.ID = shippers.peopleID

select P.Name,P.Address,P.Gender,T.Train,T.TrainNumber,S.Supply_Date from people P inner join Travels T
on P.ID=T.peopleID inner join shippers S  on P.ID = S.peopleID
-----------------------------------------------------------------------------------------------------------------------

