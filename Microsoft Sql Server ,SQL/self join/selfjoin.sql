create table Employee
(
E_Id int primary key,
E_Name varchar(100),
Mgr_Id int
)

--

insert into Employee 
values (1,'ABC',3)
insert into Employee 
values (2,'ABC1',2)
insert into Employee 
values (3,'ABC2',NULL)
insert into Employee 
values (4,'ABC3',2)
insert into Employee 
values (5,'ABC4',2)
insert into Employee 
values (7,'ABC5',2)

select * from    Employee 

select e1.E_Name as EmployeeName ,e2.E_Name as ManagerName from Employee e1 inner join Employee e2 
on e1.Mgr_Id=e2.E_Id

create table Student1(
s_id int primary key,
s_Name varchar(20),
s_cource varchar(20),
Teacher_id int
);
select * from    Employee 
insert into student1 values(1,'Abxyz1','DBMS',2)
insert into student1 values(2,'Abxyz2','DS',2)
insert into student1 values(3,'Abxyz3','oop',3)
insert into student1 values(4,'Abxyz4','Aps',NULL)
insert into student1 values(5,'Abxyz5','OS',4)
insert into student1 values(6,'Abxyz6','Iscl',2)
insert into student1 values(7,'Abxyz7','Java',4)
insert into student1 values(8,'Abxyz8','Fm',null)
select * from student1
select e1 student1,e2 student1 from e1 student1 self join e2 student1 where e1.s_id=e2.Teacher_id
