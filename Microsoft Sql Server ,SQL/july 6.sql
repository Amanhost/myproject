select * from people
select * from Department
select *from people as p right  join Department  As D on p.ID=D.Dept_ID

create table Family
(
ID int primary key not null,
 Name varchar(50),
 family_master int
 );
 insert into family values(1,'Ramdavar',1)
 insert into family values(2,'devraji Devi',1)
 insert into family values(3,'Indresen',1)
 insert into family values(4,'Rajkumari devi',3)
 insert into family values(5,'Chandan',3)
 select * from Family
 insert into family values(6,'Vipin',3)
 insert into family values(7,'Gudiya',4)
 insert into family values(8,'Dileep',1)
 insert into family values(9,'Seema',8)
 insert into family values(10,'Aman',8)
 insert into family values(11,'Aditya',8)
 insert into family values(12,'pradeep',1)
 insert into family values(13,'malti',12)
 insert into family values(14,'Anant',12)
 insert into family values(15,'Pragati',14)
 update Family set family_master=13 where ID=15
 select  e2.Name as Director,e1.Name As Member from Family e2 inner join Family e1 on e2.ID=e1.family_master
 select * from people
 order by salary desc
 --select *from people e1 where 1=(select count (distinct salary) from people e2 where e2.salary>e1.salary)
 select * from people e1 where 1=(select count(distinct salary) from people e2 where e2.salary>e1.salary)
 select top 1 salary from (select distinct top 2 salary from people order by salary desc)a order by salary