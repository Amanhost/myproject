select *  from people
select sum(salary) from people
select distinct Avg(salary) from people
select count(salary) from people
begin tran
select @@TRANCOUNT 
delete from people where ID=1
select * from people
rollback

create table Department
(
Dept_ID int Not NULL primary key,
Name varchar(20),
Location varchar(50),
Dept_Number int foreign key References people(ID) 
);
select * from Department
insert into Department values(1,'ITCA','Takshsila',5)
insert into Department values(2,'CSSE','Takshsila',2)
insert into Department values(3,'MRKT','puspagiti',4)
insert into Department values(4,'CS','Takshsila',6)
insert into Department values(5,'Math','puspagiri',7)
insert into Department values(6,'ITCA','Puspagiri',10)
insert into Department values(7,'MBA','Takshsila',11)
insert into Department values(8,'IT','Takshsila',13)
insert into Department values(9,'CSSE','Takshsila',15)
insert into Department values(10,'PHD','Takshsila',16)
insert into Department values(11,'B.Tech','Takshsila',18)
insert into Department values(12,'ITCA','Itrc',20)
insert into Department values(13,'IT','Takshsila',21)
insert into Department values(14,'Mrkt','Librery',23)
insert into Department values(15,'CS','Takshsila',25)

insert into Department values(16,'ITCA','Librery',26)
insert into Department values(17,'CS','Takshsila',28)
insert into Department values(18,'MRKT','C',30)
insert into Department values(19,'ITCA','Takshsila',34)
insert into Department values(20,'MBA','Librery',35)
insert into Department values(21,'ITCA','Takshsila',36)
insert into Department values(22,'ITCA','Librery',38)

insert into Department values(23,'CSSE','Takshsila',40)
insert into Department values(24,'ITCA','Takshsila',42)
insert into Department values(25,'Mrkt','Librery',44)
insert into Department values(26,'ITCA','Takshsila',45)
insert into Department values(27,'IT','Librery',47)
insert into Department values(28,'ITCA','Librery',50)

select p.ID,p.Name,p.salary,D.Dept_ID,
D.Location,D.Name,D.Dept_Number 
from people p inner join Department D on p.ID=D.Dept_Number
select * from people right join Department on people.ID=Department.Dept_Number