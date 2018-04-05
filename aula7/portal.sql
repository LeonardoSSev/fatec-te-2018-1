USE `portal`;
BEGIN TRANSACTION;
CREATE TABLE categorias (
id INTEGER PRIMARY KEY,
nome TEXT);
INSERT INTO categorias VALUES(1,'Categoria 1');
INSERT INTO categorias VALUES(2,'Esportes');
INSERT INTO categorias VALUES(3,'Economia');
CREATE TABLE usuarios (
id INTEGER PRIMARY KEY,
login TEXT,
senha TEXT);
INSERT INTO usuarios VALUES(1,'ablono','1forrest1');
INSERT INTO usuarios VALUES(2,'Temer','123');
INSERT INTO usuarios VALUES(3,'Dilma','456');
INSERT INTO usuarios VALUES(4,'Lula','789');
CREATE TABLE noticias (
id INTEGER PRIMARY KEY,
categoria INTEGER,
usuario INTEGER,
titulo TEXT,
conteudo TEXT,
FOREIGN KEY(categoria) REFERENCES categorias(id),
FOREIGN KEY(usuario) REFERENCES usuarios(id));
INSERT INTO noticias VALUES(1,1,1,'Título da notícia','Conteúdo');
INSERT INTO noticias VALUES(2,2,2,'Julgamento dos Habeas Corpus','Votação da ministra');
COMMIT;
