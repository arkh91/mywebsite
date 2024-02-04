/*
	use this file to re/build your database. 
*/
/*
keep the following 2 lines commented out the first time
then uncomment them to wipe and reset the db
*/
/*
drop table authors;
drop table books;
drop table publishers;
drop table members;
*/
/*create 3 tables*/
Create table authors (authorID int not null auto_increment primary key, 
	authorFName varchar (40) not null, 
	authorLName varchar (40) not null,
	genre varchar (30)
);
Create table books( 
	bookID int not null auto_increment primary key, 
	bookName varchar(70) not null, 
	publishDate date,
	authorID int not null, 
	publisherID int	
);
Create table publishers (publisherID int not null auto_increment primary key, 
	publisherName varchar (40) not null
);
/*
to hold log in information
*/
Create table members (username varchar(30) not null unique,
	password varchar(128) not null,
	email varchar(50) not null,
	id int not null auto_increment primary key
);

/*insert some data*/
Insert into authors(authorFName, authorLName, genre) values 
	("Donald", "Knuth", "CS Theory"), ("Douglas", "Adams", "Sci Fi"), 
	("Neal", "Stephenson", "Speculative Fiction"), ("Neil", "Gaiman", "Fantasy");

Insert into books(bookName, authorID, publishDate, publisherID) values 
	("Art of Computer Programming", 1, "1968-08-01", 2), 
	("The TeXbook", 1, "1984-11-30", 5), 
	("So Long, and Thanks for all the Fish", 2, "1984-08-10", 1),
	("The Hitchhiker\'s Guide to the Galaxy", 2, "1979-04-21", 1), 
	("Seveneves", 3, "2015-07-01", 3), 
	("Reamde", 3, "2011-06-10", 3),
	("Good Omens", 4, "1990-05-01", 4),
	("American Gods", 4, "2001-06-19", 3);
	
Insert into publishers(publisherName) values
	("Pan Books"),
	("Addison-Wesley"),
	("William Morrow"),
	("Gollancz"),
	("Donald Knuth");
	