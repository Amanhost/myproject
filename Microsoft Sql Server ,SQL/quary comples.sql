select * from people
select * from orders
 select * from people where salary in (select distinct max(salary)from people group by Department)
 ----------------use of IN********* NOTin--------------------------
 
          select *from people where ID in(select Distinct(people_id) from orders)
		  select Distinct(people_id) from orders
-----------------------****Use Exist not Not Exist****-------------------------------------
      select * from people where Exists (select people_id from orders where people.ID=orders.people_id)
	  select * from people
	  select * from orders
	  select people.Name,orders.product,orders.people_id from people right join orders on people.ID=orders.people_id
	  
	  -------------------------Agregate function------------------------------------***********

	  select * from people where salary=(select Max(salary) from people)
	  select * from people where salary=(select Min(salary) from people)
	  select Distinct count(salary)from people
	  select sum(salary) from people 
	  select Distinct(count(salary)) from people

	  select Distinct Avg(salary) from people
	  select * from orders
	  select * from people
	  select Name from people where Exists(select product from  orders where orders.people_id=people.ID)
	  select * from Employee
	  select * from Deparyment
	  



	  insert into people values(77,'prince panday','Haidrabad','female',25,'1998/aug/22',22000,'IT')
	  select * from people
	  update people set ID=80 where Name='Dheeraj Gupta'
	  select * from people where Name like 'Dh%'

	   -------nested subquary------coreleted subquarry------join-----------------------
	  ---
	  select * from people,orders where(people.ID=orders.people_id)

	  select * from people
	  select * from orders
	  select * from people e1 where 0=(select count (Distinct salary) from people e2 where e2.salary>e1.salary)0.
	  s