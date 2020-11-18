create database testerilvan;

use testerilvan;

create table comentarios(
	id int not null auto_increment,
    nome varchar(255),
    msg varchar(255),
    primary key(id)
)
engine InnoDB;