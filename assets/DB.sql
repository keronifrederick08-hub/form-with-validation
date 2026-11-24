
--create database 
create database student_info;

--create table statement
create table student(
    stu_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name varchar(30) NOT NULL,
    program varchar(30),
    year_of_study int(4),
    email varchar(45) UNIQUE);