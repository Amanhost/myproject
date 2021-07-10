use DB2
create table Test2(
 Roll_no int primary key,
 Name varchar(20),
 Age int,
 Gender varchar(20),
 Mob int(30),
 Addr varchar(20)
 );
alter table Test2 drop column mob;



 insert into Test2 values(1,'Rajpal',25,'male','jaunpur')
 
 insert into Test2 values(2,'Aryan',22,'male','Varansi')
 
 insert into Test2 values(3,'Shaline',24,'female','Agra')
 insert into Test2 values(4,'Rajat',25,'male','Lucknow')
 insert into Test2 values(10,'pooja',22,'female','Raibarelly')
 insert into Test2 values(6,'pranjal',25,'male','Gorakhpur')
 insert into Test2 values(7,'Rajpal',23,'male','jaunpur')
 insert into Test2 values(8,'Rajat',25,'male','Azamgrah')
 insert into Test2 values(9,'Rohit',28,'male','sultanpur')
 insert into Test2 values(10,'Reyanse',26,'male','Lucknow')



select * from Test2
--delete from Test2 where Roll_no=5 
--update Test2 set Roll_no=5 where Roll_no=10
--sp_who2 
--dbcc inputbuffer(53)
select * from Test2 where Name='pooja';
--begin tran
--select @@TRANCOUNT


update Test2 set Age=31 where Roll_no=1
--rollback
--commit

alter table persons drop column mob;

