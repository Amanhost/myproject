use LockdownLearning

CREATE TABLE EmployeeIndex
(
 Id INT,
 Name VARCHAR(50),
 Salary INT,
 Gender VARCHAR(10),
 City VARCHAR(50),
 Dept VARCHAR(50)
)
GO

INSERT INTO EmployeeIndex VALUES (3,'Pranaya', 4500, 'Male', 'New York', 'IT')
INSERT INTO EmployeeIndex VALUES (1,'Anurag', 2500, 'Male', 'London', 'IT')
INSERT INTO EmployeeIndex VALUES (4,'Priyanka', 5500, 'Female', 'Tokiyo', 'HR')
INSERT INTO EmployeeIndex VALUES (5,'Sambit', 3000, 'Male', 'Toronto', 'IT')
INSERT INTO EmployeeIndex VALUES (7,'Preety', 6500, 'Female', 'Mumbai', 'HR')
INSERT INTO EmployeeIndex VALUES (6,'Tarun', 4000, 'Male', 'Delhi', 'IT')
INSERT INTO EmployeeIndex VALUES (2,'Hina', 500, 'Female', 'Sydney', 'HR')
INSERT INTO EmployeeIndex VALUES (8,'John', 6500, 'Male', 'Mumbai', 'HR')
INSERT INTO EmployeeIndex VALUES (10,'Pam', 4000, 'Female', 'Delhi', 'IT')
INSERT INTO EmployeeIndex VALUES (9,'Sara', 500, 'Female', 'London', 'IT')

select * from EmployeeIndex where Id = 8 and Name = 'Anurag'

CREATE CLUSTERED INDEX idx_Id ON EmployeeIndex (Id) 


CREATE NONCLUSTERED INDEX idx_Name ON EmployeeIndex (Name) 
CREATE NONCLUSTERED INDEX idx_Dept ON EmployeeIndex (Dept) 
--drop table EmployeeIndex


--create view vwEmployee
--as
--select 
--Id
--Name,
--Dept
--from EmployeeIndex where Id = 8

--select * from vwEmployee

sp_help EmployeeIndex