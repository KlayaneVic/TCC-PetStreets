create database pet_streets;
use pet_streets;

create table usuario
(
	id_usuario int not null auto_increment,
	email varchar(80) not null unique,
    senha varchar(80) not null,
    nome_usuario varchar(80),
    foto_usuario text(100),
    adm binary,
    tipo varchar(80),
    bairro varchar(80),
    cidade varchar(80),
    telefone varchar(80),
    primary key(id_usuario)
)engine=innoDB;

create table animal
(
	id int not null auto_increment,
    nome_animal varchar(80),
    especie varchar(80),
    raca varchar(80),
    cor varchar(80),
    porte varchar(80),
    sexo varchar(80),
    idade int,
    observacoes text(200),
    foto_animal text(100),
	usuario_cadastro int not null,
	permissao int,
	status int,
    primary key(id),
	foreign key(usuario_cadastro) references usuario(id_usuario) on update cascade on delete cascade
)engine=innoDB;

create table tipo_tratamento
(
	id int not null auto_increment,
    nome varchar(80),
    categoria varchar(80),
    primary key(id)
)engine=innoDB;

create table animal_tratamento
(
	id_at int not null auto_increment,
	idAnimal int,
    idTratamento int,
    dataTratamento date,
    observacao text(200),
    primary key(id_at, idAnimal, idTratamento),
    foreign key(idAnimal) references animal(id) on update cascade on delete cascade,
    foreign key(idTratamento) references tipo_tratamento(id) on update cascade on delete cascade
)engine=innoDB;

desc usuario;
desc animal;
desc tipo_tratamento;
desc animal_tratamento;