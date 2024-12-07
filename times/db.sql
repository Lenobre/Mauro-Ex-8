create database if not exists mauro_times;

create table times (
	id int not null auto_increment primary key,
  name varchar(255) not null,
  points int not null
)
