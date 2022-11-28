CREATE SCHEMA projetointerdisciplinar;

CREATE TABLE professor
(
	siepe MEDIUMINT,
    nome VARCHAR(80) NOT NULL,
    sobrenome VARCHAR(80) NOT NULL,
    ultimonome VARCHAR(80) NOT NULL,
    email VARCHAR(80) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    PATH VARCHAR(100),
	PRIMARY KEY (siepe)
);
CREATE TABLE aluno
(
	matricula VARCHAR(20),
    email VARCHAR(80) NOT NULL,
    nome VARCHAR(80) NOT NULL,
    sobrenome VARCHAR(80) NOT NULL,
    ultimonome VARCHAR(80) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    PATH VARCHAR(100),
	PRIMARY KEY (matricula)
);

CREATE TABLE estagio
(
	matricula_aluno VARCHAR(20),
    inicio TIMESTAMP,
    descricao VARCHAR(80) NOT NULL,
	lugar VARCHAR(50) NOT NULL,
    presenca VARCHAR(9),
    PRIMARY KEY (matricula_aluno,inicio),
    FOREIGN KEY (matricula_aluno) REFERENCES aluno(matricula)
);

INSERT INTO professor VALUES(001,'Gustavo Henrique','de Lima','Nascimento','ghln@discente.ifpe.edu.br','123',null);
INSERT INTO aluno VALUES('10','ens8@discente.ifpe.edu.br','Everson','Silva','Nascimento','123',null);

SELECT * FROM professor;
SELECT * FROM aluno;
SELECT * FROM estagio;

DELETE FROM estagio;
