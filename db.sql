drop database if exists shoppinglist;
create database shoppinglist;

use shoppinglist;

create TABLE task (
    id int primary key auto_increment,
    description varchar(255) not null,
    amount smallint unsigned not null
);

insert into task (description) values ('Test task',1);