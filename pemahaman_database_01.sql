CREATE DATABASE test_ide;
CREATE TABLE test_ide.school (
	id int NOT NULL AUTO_INCREMENT,
	school_code varchar (20) NOT NULL UNIQUE,
	school_name varchar (100),
	inaugurated_date date,
	PRIMARY KEY (id)
);