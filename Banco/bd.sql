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