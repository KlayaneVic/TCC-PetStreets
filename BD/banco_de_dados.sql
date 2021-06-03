create database banco_de_dados;
use banco_de_dados;

create table usuario
(
	email varchar(80) not null,
    senha varchar(80) not null,
    nome varchar(80),
    foto text(100),
    adm binary,
    tipo varchar(80),
    bairro varchar(80),
    cidade varchar(80),
    telefone varchar(80),
    primary key(email)
)engine=innoDB;

create table animal
(
	id int not null auto_increment,
    nome varchar(80),
    especie varchar(80),
    raca varchar(80),
    cor varchar(80),
    porte varchar(80),
    sexo varchar(80),
    idade int,
    observacoes text(200),
    foto text(100),
	usuario_cadastro varchar(80),
    usuario_adocao varchar(80),
    primary key(id),
	foreign key(usuario_cadastro) references usuario(email) on update cascade on delete cascade,
    foreign key(usuario_adocao) references usuario(email) on update cascade on delete cascade
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
	idAnimal int,
    idTratamento int,
    dataTratamento date,
    observacao text(200),
    primary key(idAnimal, idTratamento),
    foreign key(idAnimal) references animal(id) on update cascade on delete cascade,
    foreign key(idTratamento) references tipo_tratamento(id) on update cascade on delete cascade
)engine=innoDB;

desc usuario;
desc animal;
desc tipo_tratamento;
desc animal_tratamento;