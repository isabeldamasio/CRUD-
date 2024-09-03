CREATE DATABASE crud_system;
use crud_system;

CREATE TABLE  usuario(
pk_usuario int not null primary key auto_increment,
nome_usuario VARCHAR(100) NOT NULL,
email_usuario VARCHAR (100) NOT NULL,
criado_em TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE = InnoDB;

select * from usuario