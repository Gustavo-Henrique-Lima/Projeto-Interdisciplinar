CREATE SCHEMA projetointerdisciplinar;

CREATE TABLE professor
(
	siepe MEDIUMINT,
    nome VARCHAR(80),
    sobrenome VARCHAR(80),
    ultimonome VARCHAR(80),
    email VARCHAR(80),
    senha VARCHAR(255),
	PRIMARY KEY (siepe)
);
CREATE TABLE aluno
(
	matricula VARCHAR(20),
    email VARCHAR(80),
    nome VARCHAR(80),
    sobrenome VARCHAR(80),
    ultimonome VARCHAR(80),
    senha VARCHAR(255),
	PRIMARY KEY (matricula)
);

CREATE TABLE estagio
(
	matricula_aluno VARCHAR(20),
    inicio TIMESTAMP,
    fim TIMESTAMP,
    descricao VARCHAR(80),
    local VARCHAR(50),
    PRIMARY KEY (matricula_aluno,inicio),
	FOREIGN KEY (matricula_aluno) REFERENCES aluno(matricula)
);
select * from professor;
SELECT * FROM aluno;
INSERT INTO professor VALUES(001,'Gustavo Henrique','de Lima','Nascimento','ghln@discente.ifpe.edu.br','123');
INSERT INTO aluno VALUES(001,'ens8@discente.ifpe.edu.br','Everson','Silva','Nascimento','123');