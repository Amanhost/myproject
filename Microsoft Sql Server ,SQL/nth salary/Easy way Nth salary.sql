create table Manager(
Emp_id int,
Name varchar(20),
Salary int
);
insert into Manager values(1,'AAAA',10000)
insert into Manager values(2,'AAAA2',18000)
insert into Manager values(3,'AAAA3',22000)
insert into Manager values(4,'AAAA4',22000)
insert into Manager values(5,'AAAA6',40000)
insert into Manager values(6,'AAAA7',50000)
insert into Manager values(7,'AAAA8',45000)
insert into Manager values(8,'AAAA9',30000)
insert into Manager values(9,'AAAA10',60000)
insert into Manager values(10,'AAAA11',70000)
insert into Manager values(11,'AAAA12',75000)
insert into Manager values(12,'AAAA13',65000)
insert into Manager values(13,'AAAA14',25000)
insert into Manager values(14,'AAAA15',48000)
insert into Manager values(15,'AAAA16',19000)
insert into Manager values(16,'AAAA17',25000)
insert into Manager values(17,'AAAA18',30000)
insert into Manager values(18,'AAAA19',20000)
insert into Manager values(19,'AAAA20',10000)
insert into Manager values(20,'AAAA',10000)
select * from Manager
--select max(salary) from Manager in(select max(salary) from Manager)
--select salary from Manager order by salary desc

select Name,salary from Manager e1 where 4=(select count(distinct salary)from manager e2 
where e2.salary>e1.salary)
---select salary from manager order by salary desc
---sselect Name,salary from Manager e1 where 2=(select count (distinct salary) from  manager e2 where e2.salary >e1.salary) 