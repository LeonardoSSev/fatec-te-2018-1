# MÉTODOS HTTP
## Objeto XMLHttpRequest
| Código do estado  | Estado | Descrição do estado |
| ----------------- | ------ | ------------------- |
| 0 | UNSENT         | Um cliente foi criado, mas o método open() não foi chamado ainda.|
| 1 | OPENED | O método open() foi chamado.    |
| 2 | HEADERS_RECEIVED | O método send() foi chamado e os cabeçalhos e status estão disponíveis.     |
| 3 | LOADING | Baixando e responsetext contém os dados parciais.    |
| 4 | DONE | Operação concluída.    |