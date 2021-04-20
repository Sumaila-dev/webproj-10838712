create database weblogins;
use weblogins;
create table users
(
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
	email VARCHAR(250) NOT NULL ,
    id INT NOT NULL  AUTO_INCREMENT,
    
	 PRIMARY KEY  (id)
);