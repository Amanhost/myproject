CREATE TABLE Persons (
    ID int NOT NULL PRIMARY KEY,
    LastName varchar(255) NOT NULL,
    FirstName varchar(255),
    Age int
); 

--sp_rename 'Persons.LastName', 'LName', 'COLUMN';


select * from Persons
--insert into Persons values
--(1,'ABS','ZYZ',30)
--insert into Persons values
--(2,'ABS1','ZYZ1',50)
--insert into Persons values
--(3,'ABS2','ZYZ2',40)
insert into Persons values
(4,'ABS3','ZYZ3',40)

CREATE TABLE Orders (
    OrderID int NOT NULL PRIMARY KEY,
    OrderNumber int NOT NULL,
    PersonID int FOREIGN KEY REFERENCES Persons(ID)
); 
select * from Persons
select * from Orders

insert into Orders values
(4,234,4)


select P.*,O.OrderNumber from Persons P inner join Orders O
on P.ID = O.PersonID

select P.*,O.OrderNumber from Persons P left join Orders O
on P.ID = O.PersonID

select P.*,O.OrderNumber from Persons P right join Orders O
on P.ID = O.PersonID

select P.*,O.OrderNumber from Persons P cross join Orders O
