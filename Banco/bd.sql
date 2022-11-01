CREATE SCHEMA projetointerdisciplinar;

CREATE TABLE professor
(
	siepe VARCHAR(40),
    nome VARCHAR(80),
    senha VARCHAR(40),
	PRIMARY KEY (siepe)
);

INSERT INTO professor VALUES ('20211ewbj0101','Usuário de teste','123456789');
INSERT INTO professor VALUES ('20211ewbj0102','Usuário de teste 02','987654321');