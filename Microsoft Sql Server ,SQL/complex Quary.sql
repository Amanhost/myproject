create table Employee2
(E_ID int primary key not NULL,
Name varchar(20),
Dept varchar(20),
salary int
);
drop table Employe

insert into Employee2 values(1,'Ram','Hr',22000)insert into Employee2 values(2,'Ravi','mrkt',35000)insert into Employee2 values(3,'Ram2','Hr',22000)
insert into Employee2 values(4,'Ram3','mrkt',25000)
insert into Employee2 values(5,'Ram4','IT',22000)insert into Employee2 values(6,'Ram5','Hr',21000)
insert into Employee2 values(7,'Ram6','IT',31000)insert into Employee2 values(8,'Ram7','Hr',18000)insert into Employee2 values(9,'Ram8','mrkt',19000)insert into Employee2 values(10,'Ram9','Hr',22000)
insert into Employee2 values(11,'Ram10','Hr',25000)insert into Employee2 values(12,'Ram11','mrkt',36000)insert into Employee2 values(13,'Ram12','IT',35000)
insert into Employee2 values(14,'Ram14','Hr',36000)insert into Employee2 values(15,'Ram13','IT',35000)insert into Employee2 values(16,'Ram15','mrkt',31000)insert into Employee2 values(17,'Ram16','Hr',22000)
insert into Employee2 values(18,'Ram17','IT',18000)insert into Employee2 values(19,'Ram18','Hr',15000)
insert into Employee2 values(20,'Ram19','mrkt',19500)insert into Employee2 values(21,'Ram20','IT',20000)insert into Employee2 values(22,'Ram21','Hr',20000)
insert into Employee2 values(23,'Ram22','mrkt',22000)insert into Employee2 values(24,'Ram23','Hr',25000)
insert into Employee2 values(25,'Ram24','Hr',18000)insert into Employee2 values(27,'Ram26','mrkt',40000)


select * from Employee2
select * from Employee2
select * from Employee2 where salary=(select Max(salary)from Employee2 where salary <>(select distinct min(salary) from Employee2))

select Name ,salary from Employee2 where dept in (select dept From Employee2 group by dept having count(*)<7)
select dept From Employee2 group by dept having count(*)<7
                         |------ write a Quary  find the Heighest salary Department Wise &&&&&&&  Who is taking the Heighest Salary printf the Name-----------------------------|
                       select * from Employee2 where salary in (select max(salary) from Employee2 group by Dept)

					  select * from Employee5
					  create table product
					  (E_id int foreign key references Employee5(ID),p_id varchar(20),p_Name varchar(20),Location varchar(20))
					  insert into product values(1,'p1','IOT','Banglure')
					  insert into product values(5,'p2','Bigdata','Delhi')
					  insert into product values(3,'p3','Retail','Umbai')
					  insert into product values(4,'p4','Andorise','Hydrabad')
					  insert into product values(6,'p5','Machin','Delhi')
					  
					  select * from product
					  select * from Employee5
					  update product set p_Name='Androide' where Location='Hydrabad'
					  -----------find Details of Employee whose Address of Delhi chandigrah And pune--------------
					  select * from Employee5 where Address in('Delhi','chd')


					  ***********-------use of IN/NoTin-----*****************************
					   ---------find Detail of Employee Who Work on A prosect---------------------Table---product--------Employee5----------
					    select * from product
					  select * from Employee5
					  select * from Employee5 where ID in (select distinct E_id from product)