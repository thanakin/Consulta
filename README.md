# Consulta

#### Obtendo numero de clientes conectados ao DB (MySQL).
Apesar de existir outras formas mais praticas de faze-lo, esta era a solução disponivel.<br>
**Obs.:** _este controle não foi implementado inicialmente na aplicação._<br>
<br>

#### Estrutura

|    /conf    ||
|------------|------------|
| config.php | configurações e dados do(s) db(s)|
<br>
|    /outros    ||
|------------|------------|
| atalho.url | Atalho que o agendador de tarefas ira procurar |
| Consulta.xml | arquivo xml para importação no agendador de tarefas do Windows |
<br>
|    /sql    ||
|------------|------------|
| db.sql | estrutura do db utilizado para armazenar registros |




### Agradecimento
Este arquivo foi estilizado graças a este [passo a passo](https://medium.com/@raullesteves/github-como-fazer-um-readme-md-bonitão-c85c8f154f8)