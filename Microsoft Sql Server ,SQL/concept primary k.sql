use LockdownLearning
create table Department(
Dept_id int primary key,
Name varchar(20),
Dept_Name varchar(30),
salery int
);
insert into department values
(1,'Amar chand','CSE',35000)

insert into department values
(2,'Raj roy','MRKT',20000)
insert into department values
(3,'Manoj sing','CSE',30000)
insert into department values
(4,'Aman prakash','it',40000)
insert into department values
(5,'sujeet yadav','cs',35000)
insert into department values
(6,'prashant sukla','CE',32000)

insert into department(Dept_Name) values('css')

create table Employee2(
Emp_id int primary key,Emp_Name varchar(50) Not null,
Dept_id int foreign key references Department(Dept_id)
 insert into Employee2 values(1,'Anand',1)

 insert into Employee2 values(2,'Bhradwaj',3)
 insert into Employee2 values(3,'Rajat',4)
 insert into Employee2 values(4,'Ansu',5)
 insert into Employee2 values(5,'Atul',2)
insert into Employee2(Emp_id,Dept_id) values(5,3)
insert into Employee2 values(7,'Anand',6)
select * from Employee2

select * from Department
