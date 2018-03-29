Anotações da aula 6 de Tópicos Especiais.

Comandos SQLite

- Cria uma base de dados chamada fatec:

`sqlite3 fatec.db`

- Sai do sqlite:

`.quit`

- Lista as tabelas:

`.table`

- Lista os comandos:

`.help`

- Permite usar comandos do terminal. Exemplo `.system clear`:

`.system`

- Permite escolher o modo de listagem dos dados. Exemplo `.mode html`, `.mode line`, `.mode column`, `.mode line`:

`.mode`

- Permite exibir os headers das tabelas. Exemplo `.header on` e depois `SELECT * FROM alunos;`:

`.header on`

- Lista os dados com o separador `;`:

`.separator ";"`
 
- Com isso, é possível utilizar esse comando `.mode csv`. 
  Após isso, rode `.once fatec.csv` e, em seguida, `SELECT * FROM alunos;`
  Um arquivo csv será gerado com os dados da consulta.
  
- Gerando exportação de tabela:

`once export-db.sql`
`.dump`

- Mostrando todo o schema:

`.fullschema`

- Mostrando schema específico:

`.schema alunos`

- Mostrando `rowid` (Chave de controle gerada automaticamente):

`SELECT rowid,* from ALUNOS;`

- Excluindo dados da tabela:

`DELETE FROM alunos WHERE rowid=3`

- Especificando o rowid:

`ÌNSERT INTO alunos(rowid,nome) VALUES(3, 'lula');`

- Curiosidade -> o dado será inserido seguindo o último índice do rowid:
`ÌNSERT INTO alunos(rowid,nome) VALUES(7, 'lula');`
`ÌNSERT INTO alunos(nome) VALUES('bolsonaro');` -> rowid vai ser igual a 8
