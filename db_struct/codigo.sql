DROP TABLE IF EXISTS animal;
DROP TABLE IF EXISTS medicovet;
DROP TABLE IF EXISTS tipoUtilizador;

CREATE TABLE tipoUtilizador(
    id INT PRIMARY KEY AUTO_INCREMENT,
    descricao VARCHAR(255)
);

INSERT INTO tipoUtilizador (descricao) VALUES 
    ('administrador'), 
    ('user normal');

CREATE TABLE medicovet(
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(100) UNIQUE,
    password VARCHAR(100),
    foto VARCHAR(255),
    email VARCHAR(255),
    tipoUtilizador_id INT,

    FOREIGN KEY (tipoUtilizador_id) REFERENCES tipoUtilizador(id)
);

INSERT INTO medicovet(username, password, tipoUtilizador_id) VALUES
    ('admin','pass', 1),
    ('user','pass', 2);

CREATE TABLE animal(
                          id INT PRIMARY KEY AUTO_INCREMENT,
                          medicovet_id INT,
                          name VARCHAR(255),
                          data_nascimento DATE,
                          especie VARCHAR(255),
                          raca VARCHAR(255),
                          cor VARCHAR(255),
                          peso_kg double,
                          comprimento_cm INT,
                          nome_dono VARCHAR(255),
                          contato_dono INT(9),
                          contribuinte_dono INT(9),
                          email_dono VARCHAR(255),
                          comentario VARCHAR(600),

                          FOREIGN KEY (medicovet_id) REFERENCES medicovet(id)
);

INSERT INTO animal(medicovet_id,name,data_nascimento, especie,raca,cor,peso_kg,comprimento_cm,nome_dono,contato_dono,contribuinte_dono,email_dono,comentario )
VALUES (2,'kalimac','2017-05-01','gato','europeu comum','branco champagne',7.00,50,'Joao Mario','933333333','222222222','jmario@gmail.com','Gato com fracturas na perna traseira esquerda');

