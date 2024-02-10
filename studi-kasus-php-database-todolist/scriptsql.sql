create database belajar_php_todolist;

use belajar_php_todolist;

create table todolist(
                         id int not null auto_increment,
                         todo varchar(255) not null,
                         primary key(id)
)engine = innodb;