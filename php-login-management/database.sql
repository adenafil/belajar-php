create database php_login_management;

create database php_login_management_test;

create table users(
    id varchar(255) primary key ,
    name varchar(255) not null ,
    password varchar(255) not null
) engine = InnoDB;

create table sessions(
    id varchar(255) primary key ,
    user_id varchar(255) not null
) engine = InnoDB;

alter table sessions
add constraint fk_sessions_user
    FOREIGN KEY (user_id)
        references users(id);