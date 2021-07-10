select  * from Department
alter table Department add selary float 
 update Department set selary=30000 where Dept_id=5
 begin tran
select @@TRANCOUNT
commit
rollback
select  max(selary) from Department (select max(selary)from Department)
select  distinct (sum(selary))from Department
select average (selary) from Department 
sp_who2
