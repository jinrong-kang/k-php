create database db_test;
use db_test;
create table t_user (
id int not null auto_increment,
name varchar(20) not null,
passwd varchar(20) not null,
email varchar(30) not null,
age int,
reg_time datetime,
primary key (id)
);