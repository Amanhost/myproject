select * from people

create table orders
(
od_num int primary key not null,
product varchar(20),
price int,
people_id int foreign key references people(ID)
)
select * from orders
insert into orders values(1,'T-shirrt',450,2)

insert into orders values(2,'pant',800,1)
insert into orders values(2,'shirt',500,5)
insert into orders values(3,'jens',999,3)
insert into orders values(4,'shoose',1800,6)
insert into orders values(5,'Belt',450,2)
insert into orders values(6,'voilate',349,8)
insert into orders values(7,'Mobile-vivo',18749,1)
insert into orders values(8,'T-shirrt',450,10)
insert into orders values(9,'formal pant',450,11)
insert into orders values(10,'shirt',450,8)
insert into orders values(11,'facewash',250,9)
insert into orders values(12,'sprey',300,6)
insert into orders values(13,'Hair drayer',500,13)
insert into orders values(14,'BOOK',270,4)
insert into orders values(15,'shoose',800,4)
insert into orders values(16,'sandle',449,9)
insert into orders values(17,'sleepar',225,11)

insert into orders values(18,'pant',800,19)
insert into orders values(19,'shirt',500,20)
insert into orders values(20,'jens',999,22)
insert into orders values(21,'shoose',1800,24)
insert into orders values(22,'Belt',450,26)
insert into orders values(23,'voilate',349,27)
insert into orders values(24,'Mobile-vivo',18749,33)
insert into orders values(25,'T-shirrt',450,38)
insert into orders values(26,'formal pant',450,38)
insert into orders values(27,'shirt',450,39)
insert into orders values(27,'facewash',250,36)
insert into orders values(28,'sprey',300,35)
insert into orders values(29,'Hair drayer',500,40)
insert into orders values(30,'BOOK',270,41)
insert into orders values(31,'shoose',800,42)
insert into orders values(32,'sandle',449,44)
insert into orders values(33,'sleepar',225,45)


select * from orders
insert into orders values(34,'pant',800,37)
insert into orders values(35,'shirt',500,38)
insert into orders values(36,'jens',999,39)
insert into orders values(37,'shoose',1800,36)
insert into orders values(38,'Belt',450,38)
insert into orders values(39,'voilate',349,39)
insert into orders values(40,'Mobile-vivo',18749,40)
insert into orders values(41,'T-shirrt',450,41)
insert into orders values(42,'formal pant',450,42)
insert into orders values(43,'shirt',450,44)
insert into orders values(44,'facewash',250,40)
insert into orders values(45,'sprey',300,48)
insert into orders values(46,'Hair drayer',500,50)
insert into orders values(47,'BOOK',270,46)
insert into orders values(48,'shoose',800,50)
insert into orders values(49,'sandle',449,50)
insert into orders values(50,'sleepar',225,51)

update orders set product='T-shirt' where od_num=1
insert into orders values(1,'T-shirrt',450,2)
insert into orders values(1,'T-shirrt',450,2)
select * from orders


select * from people
                                               ------------------------************JOIN Concept*********------------------------------------------------------------------------



--select p.Name,p.Age,p.salary,o.od_num,o.product,o.price,o.people_id people from people As p inner join orders As o on p.ID=o.people_id

--select Name ,product,price,people_id from people,orders where people.ID=orders.people_id order by ID asc

select p.Name,p.Age,p.salary,o.od_num,o.product,o.price,o.people_id people from people As p left join orders As o on p.ID=o.people_id

select p.Name,p.Age,p.salary,o.od_num,o.product,o.price,o.people_id people from people As p right join orders As o on p.ID=o.people_id

select * from orderss values(54,'Belt',250,57)
insert into orders values(55,'Jaykit',550,56)

insert into orders values(56,'',450,59)
insert into orders values(57,'Redmi 8a',8500,60)
insert into orders values(58,'mi a3',14500,58)


select *  from orders where od_num=56
update  orders set product='nike shoos' where od_num=56

insert into orders values(51,'',450,48)
insert into orders values(51,'',450,48)
insert into orders values(51,'',450,48)
insert into orders values(51,'Gogle',450,48)
insert into orders values(51,'Gogle',450,48)
insert into orders values(51,'Gogle',450,48)
 select * from people order by ID asc
