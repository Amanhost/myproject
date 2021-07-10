
create table persons(
id int; 
Name varchar(50),
Addreess varchar(50),
City varchar(50),
department varchar(50),
Salery int
);
insert into persons values
(1,'Abhishek','budhanipur','Azamgarh','Mrkt',35000)

use LockdownLearning
select * from persons

--delete from persons where Name = 'prashant'
--update persons set Name = 'ABC' where Name = 'Pranjal'

--alter table persons add  homeaddress varchar(100)
--alter table persons drop column homeaddress 


--DDL - 
--DML - 
--DCL -
--sp_who2
--dbcc inputbuffer(53)


--select * from persons where Name = 'Aditya'
--update persons set  department ='Admin' where Name = 'Aditya' 

--begin tran
--select @@TRANCOUNT

--update persons set  department ='HR' where Name = 'Aditya' 
--rollback
--commit

