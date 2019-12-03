create database BookShopDB;
use BookShopDB;

create table User (
	username varchar(30),
	password varchar(6) NOT NULL,
	firstname varchar(30) NOT NULL,
	surname varchar(30) NOT NULL,
	addressLine1 varchar(30) NOT NULL,
	addressLine2 varchar(30) NOT NULL,
	city varchar(30) NOT NULL,
	telephone int(10) NOT NULL,
	mobile int(10) NOT NULL,

	primary key(username)
);



create table Books (
	isbn varchar(30),
	booktitle varchar(30) NOT NULL,
	author varchar(30) NOT NULL,
	edition varchar(30),
	year int(4) NOT NULL,
	categoryID varchar(10) NOT NULL,
	reserved varchar(3) NOT NULL,

	primary key(isbn),
	foreign key(categoryID) references Categories(categoryID)
);


create table Categories(
	categoryID varchar(10),
	categoryDescription varchar(20) NOT NULL,

	primary key(categoryID)
);


create table Reservations(
	isbn varchar(30),
	username varchar(30),
	reservedDate date NOT NULL,

	primary key(isbn),
	foreign key(isbn) references books(isbn),
	foreign key(username) references User(username)
);


insert into user values('alanjmckenna', 't1234s', 'Alan', 'Mckenna', '38 Cranley Road', 'Fairview', 'Dublin', 9998377, 8566255675);
insert into user values('joecrotty', 'kj7899', 'Joseph', 'Crotty', 'Apt 5 Clyde Road', 'Donnybrook', 'Dublin', 8887889, 8766544565);
insert into user values('tommy100', '123456', 'tom', 'behan', '14 hyde road', 'dalkey', 'Dublin', 9983747, 8768387820);


insert into categories values(1, 'Health');
insert into categories values(2, 'Business');
insert into categories values(3, 'Biography');
insert into categories values(4, 'Technology');
insert into categories values(5, 'Travel');
insert into categories values(6, 'Self-Help');
insert into categories values(7, 'Cookery');
insert into categories values(8, 'Fiction');




insert into books values('093-403992', 'Computers in Business', 'Alicia Oneill', '3', 1997, 3, 'N');
insert into books values('23472-8729', 'Exploring Peru', 'Stephanie Birchie', '4', 2005, 5, 'N');
insert into books values('237-34823', 'Business Strategy', 'Joe Peppard', '2', 2002, 2, 'N');
insert into books values('23u8-923849', 'A guide to Nutrition', 'John Thorpe', '2', 1997, 1, 'N');
insert into books values('2983-3494', 'Cooking For Children', 'Anabelle Sharpen', '1', 2003, 7, 'N');
insert into books values('82n8-308', 'Computers For Idiots', 'Susan Oneill', '5', 1998, 4, 'N');
insert into books values('9823-23984', 'My Life In a Picture', 'Kevin Graham', '8', 2004, 1, 'N');
insert into books values('9823-2403-0', 'Davinci Code', 'Dan Brown', '1', 2003, 8, 'N');
insert into books values('98234-029384', 'My Ranch in Texas', 'George Bush', '1', 2005, 1, 'Y');
insert into books values('9823-98345', 'How to Cook Italian Food', 'Jamie Oliver', '2', 2005, 7, 'Y');
insert into books values('9823-89387', 'Optimising your business', 'Cleo Blair', '1', 2001, 2, 'N');
insert into books values('988745-234', 'Tara Road', 'Maeve Binchy', '4', 2002, 8, 'N');
insert into books values('993-004-00', 'My Life in Bits', 'John Smith', '1', 2001, 1, 'N');
insert into books values('9987-0039882', 'Shooting History', 'John Snow', '1', 2003, 1, 'N');



insert into reservations values('98234-029384','joecrotty','2008-10-11');
insert into reservations values('9823-98345','tommy100','2008-10-11');
