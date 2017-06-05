CREATE TABLE usuarios (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(80),
    end VARCHAR(180),
    email VARCHAR(150),
    senha VARCHAR(25),
    nivel INT DEFAULT 1,
    status INT DEFAULT 0);

INSERT INTO usuarios(nome, email, end, senha, nivel, status)
VALUES ('Administrator','admin@teste.com.br', 'Rua da Varzea, 119', '12345678', 2, 1);