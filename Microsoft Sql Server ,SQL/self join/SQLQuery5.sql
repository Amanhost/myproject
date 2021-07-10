create table selfEmployee(
Emp_id int primary key,
Emp_Name varchar(20),
Manager_id int 
);
insert into selfEmployee values(1,'Tarun',3)
insert into selfEmployee values(2,'kunal',2)
insert into selfEmployee values(3,'varun',1)
insert into selfEmployee values(4,'Singhla',1)
select * from selfEmployee