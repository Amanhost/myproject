create database Test1

create table Student
(S_Rollno int primary key,
S_Name  varchar(100))


select * from Student

insert/update/delete/truncate/drop
create new table and test all join


SELECT DB_NAME(ius.[database_id]) AS [Database],
OBJECT_NAME(ius.[object_id]) AS [TableName],
MAX(ius.[last_user_lookup]) AS [last_user_lookup],
MAX(ius.[last_user_scan]) AS [last_user_scan],
MAX(ius.[last_user_seek]) AS [last_user_seek] FROM sys.dm_db_index_usage_stats AS ius
WHERE ius.[database_id] = DB_ID()
 AND ius.[object_id] = OBJECT_ID('Travels')
GROUP BY ius.[database_id], ius.[object_id];

select * from Travels