create database site;

use site;

create table usuario(
	usuario_id int not null primary key auto_increment,
    usuario_nome varchar(50) not null,
    usuario_sobrenome varchar(50) not null,
    usuario_imgperfil varchar(100),
    usuario_email varchar(50) not null,
    usuario_username varchar(20) not null,
    usuario_senha varchar(20) not null,
    usuario_recuperacao varchar(20) not null,
    usuario_nivelacesso char(1) not null
);

create table post(
	post_id int not null primary key auto_increment,
	post_pergunta varchar(500) not null,
	post_descricao varchar(1000) not null,
	post_data date not null,
	post_status char(1),
	post_usuario_id int not null,
	foreign key (post_usuario_id) references usuario (usuario_id)
);

create table post_avaliacao(
	post_avaliacao_id int not null primary key auto_increment,
	post_avaliacao char(1),
	post_avaliacao_post_id int not null,
	foreign key (post_avaliacao_post_id) references post (post_id),
	post_avaliacao_usuario_id int,
	foreign key (post_avaliacao_usuario_id) references usuario (usuario_id)
);

create table post_resposta(
	resposta_id int not null primary key auto_increment,
	resposta_descricao varchar(1000) not null,
	resposta_status char(1) not null,
	resposta_usuario_id int not null,
	foreign key (resposta_usuario_id) references usuario (usuario_id),
	resposta_post_id int not null,
	foreign key (resposta_post_id) references post (post_id)
);