insert into student (Dob) values (12/05/2006);
select * from student
alter table student 
alter column Dob smalldatetime
update student set Dob='10/04/2006' where ID=1
Sp_Rename 'student.Dob','Birthdate','column'