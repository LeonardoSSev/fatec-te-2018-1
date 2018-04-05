# Aula 7
## SQLITE

##### CRIAR O BANCO

`$ sqlite3 portal.db`

### CRIAR TABELAS

##### Usuários
```
CREATE TABLE usuarios (
    id INTEGER PRIMARY KEY, 
    login TEXT,
    senha TEXT
);
```
##### Categorias
```
CREATE TABLE categorias (
    id INTEGER PRIMARY KEY, 
    nome TEXT
);
```
##### Notícias
```
CREATE TABLE noticias (
    id INTEGER PRIMARY KEY, 
    categoria INTEGER, 
    usuario INTEGER,
    titulo TEXT,
    conteudo TEXT,
    FOREIGN KEY(categoria) REFERENCES categorias(id),
    FOREIGN KEY(usuario) REFERENCES usuarios(id)
);
```

##### HABILITANDO A RESTRIÇÃO DE CHAVE ESTRANGEIRA

`PRAGMA foreign_keys = ON;`

##### VERIFICANDO SE A RESTRIÇÃO DE CHAVE ESTANGEIRA ESTÁ HABILITADA 

`PRAGMA foreign_keys;`

-- -> 1 para ligado

-- -> 0 para desligado

### INSERIR DADOS NAS TABELAS
##### Usuários

```
INSERT INTO usuarios VALUES
(1, 'Leonardo', '1forrest1'),
(2, 'Temer', '123'),
(3, 'Dilma', '456'),
(4, 'Lula', '789');
```

##### Categorias
```
INSERT INTO categorias VALUES 
(1, 'Aula')
(2, 'Esportes'), 
(3, 'Economia');
```

##### Noticias
```
INSERT INTO noticias VALUES
(1, 1, 1,  'Aula 7', 'SQLite - PDO'),
(2, 2, 2, 'Julgamento dos Habeas Corpus', 'Votação da ministra');
``` 

#### Diferença entre `.open` e `.read`:

* `.open` -> Abre arquivos `.sqlite` ou `.db` 

* `.read` -> Abre arquivos `.sql`

## PHP - PDO
#### PDO
##### Métodos básicos

* `__construct($dsn)` -> Cria um objeto PDO

* `query($select)` -> Faz a consulta ao banco e já a executa

* `prepare($sql)` -> Prepara uma consulta

* `exec()` -> Prepara consulta (DML) e já executa

Os métodos `query()` e `prepare()` retornam um objeto do tipo `PDOStatement`.

#### PDOStatement
##### Métodos básicos 
* `bindParam($par, $vlr)`

* `execute()` -> Executa uma consulta preparada pelo `prepare($sql)`

* `fetchAll()` -> Retorna uma matriz da consulta

* `fetch()` -> Retorna um vetor da consulta


#### Hands On!
##### CRIANDO UM OBJETO PDO

`$portal = new PDO('sqlite:portal.db);`

##### OBTENDO REGISTROS DE UMA TABELA

```
$comando = $portal->query('SELECT * FROM categorias);
$categorias = $comando->fetchAll();
var_dump($categorias);
$categoria = $categorias[1];
print "Nome: " . $categoria['nome'];

$comando = $portal->query('SELECT * FROM categorias');
$categoria = $comando->fetch();
var_dump($categoria);
```

##### DEFININDO INSTRUÇÃO SQL COM PARÂMETROS
```
$comando = $portal->prepare('SELECT * FROM usuarios WHERE id =:id');
$id = 2;
$comando->bindParam(':id', $id);
print $comando->execute();
$usuario = $comando->fetch();
var_dump($usuario);
print "Nome: " . $usuario['login'];
print "Senha: " . $usuario['senha'];
```

##### INSERINDO REGISTROS
```
$comando = $portal->prepare('INSERT INTO usuarios VALUES(5, "Bolsonaro", "1")');'
print $comando->execute();
print $portal->exec('INSERT INTO usuarios VALUES (6, "Collor", "456")');
$comando = $portal->query('SELECT rowid, * FROM usuarios');
$usuarios = $comando->fetchAll();
var_dump($usuarios);
```

##### REMOVENDO REGISTROS DA TABELA
```
$comando = $portal->prepare('DELETE FROM usuarios WHERE id=:id');
$id = 5;
$comando->bindParam(':id', $id);
print $comando->execute();
$comando = $portal->query('SELECT * FROM usuarios WHERE id=1 OR "1"="1"');
$usuarios = $comando->fetchAll();
var_dump($usuarios);
$comando = $portal->prepare('CREATE TABLE log (id INTEGER PRIMARY KEY, ocorrencia TEXT)');
print $comando->execute();
```