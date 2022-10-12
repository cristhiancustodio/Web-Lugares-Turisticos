
create database peru;
use peru;
create table departamentos(
	id_departamento int auto_increment primary key not null,
    nombre_region varchar(50) not null
);

create table sitios(
	id int not null primary key auto_increment,
	nombre varchar(50),
    id_departamento int,
    constraint fk_id_departamento
    foreign key (id_departamento) references departamentos(id_departamento)
    on delete cascade
    on update cascade
);


select * from sitios;












