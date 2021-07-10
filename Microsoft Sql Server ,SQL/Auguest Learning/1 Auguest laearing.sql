create table student1
(
 S_ID int primary key not null,
 S_Name varchar(20),
 C_ID varchar(20),
 C_Name varchar(20),
 F_ID varchar(20),
 F_Name varchar(20),
 Salary int
 );
 select * from student1
 insert into student1 values(1,'Ram','c1','DBMS','F1','John',30000)
 insert into student1 values(2,'Ravi','c2','Java','F2','Bob',40000)
 insert into student1 values(3,'Nitin','c1','DBMS','F1','John',30000)
 insert into student1 values(4,'Amit','c1','DBMS','F1','John',30000)
 update student1 set S_Name='Amrit pal' where S_ID=4
 ----but column lavel duplicace if we update data salary from the table RS=30000 to 40000
 ----the the All salary will be changed due  to the column level duplicacy And -----if e want to update the subject name from the table 
 ----According to the C_ID  && According to the Student All subjet Will be changed
 update  student1 set C_Name='C++' where C_ID='c1' 
 select * from student1
 begin tran
 select @@TRANCOUNT 
 commit
 se

 