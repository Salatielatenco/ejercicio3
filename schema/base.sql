create schema personas ;
use personas;
create table if not exists personas{
    id int not null auto_increment  primary key,
    nombre varchar(45) not null
}ENGINE=InnoDB default  charset=latin1;