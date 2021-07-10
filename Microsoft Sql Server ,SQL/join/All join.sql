create table shippers(
Sap_ID int primary key,
Name varchar(20),
Supply_Date datetime,
peopleID int foreign key references people(ID)
);
select * from people
select * from Travels 
alter table shippers alter column Supply_Date smalldatetime;
select * from shippers
insert into shippers values(2,'Baghel','19/oct/2019',3)

insert into shippers values(3,'Baghel','19/oct/2019',4)
insert into shippers values(4,'Baghel','19/oct/2019',6)
insert into shippers values(5,'Baghel','19/oct/2019',8)
insert into shippers values(6,'Baghel','19/oct/2019',9)
insert into shippers values(7,'Baghel','19/oct/2019',10)
insert into shippers values(8,'Baghel','19/oct/2019',12)
insert into shippers values(9,'Baghel','19/oct/2019',14)
insert into shippers values(10,'Baghel','19/oct/2019',3)
update shippers set Name='Salex',Supply_Date='09/jan/2002' where sap_ID=4
update shippers set Name='Abhijeet',Supply_Date='22/may/2016' where sap_ID=5
update shippers set Name='RKD sing',Supply_Date='16/feb/2018' where sap_ID=6
update shippers set Name='Sarvepal',Supply_Date='12/may/2018' where sap_ID=7
update shippers set Name='Jayprakash',Supply_Date='12/jun/2015' where sap_ID=8
update shippers set Name='S N sing',Supply_Date='25/sep/2014' where sap_ID=9
update shippers set Name='Aprana',Supply_Date='10/dec/2019' where sap_ID=10
update shippers set Name='Suryabhan',Supply_Date='17/apr/2020' where sap_ID=11

select * from shippers

select people.Name,Travels.Train,shippers.Supply_Date from((people inner join Travels on people.ID=Travels.peopleID)
inner join shippers on people.ID=shippers.peopleID)

---select p.Name,Travels.Train from p inner join Travels on p.ID=Travels.peopleID

--select people.Name,Travels.Train from( people left join Travels on people.ID=Travels.peopleID)

--select people.Name,Travels.Train from people right join Travels on people.ID=Travels.peopleID)

--select p.*,T.Train from(people self join Travels on people.ID=Travels.peopleID)

--select * from people