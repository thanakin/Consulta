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
<br>

|||
|------------|------------|
| consuta.php | Listagem do numero de 'conectados' ao BD por dia |
| index.html | Arquivo inicial do projeto, de onde se pode consultar ou inserir manualmente |
| insere.php | Realiza a inserção no bd da lista de 'conectados' ao db no momento da execução |
<br>

#### Funcionamento
##### Modo Manual 
Acessando _/Consulta/insere.php_ 

##### Modo Automatico
Pode-se criar manualmente um novo evento no agendador de tarefas do Windows ou uma vez neste, importar _/Consulta/Outros/Consulta.xml_<br>
Este exemplo, esta configurado para execução de **segunda a sexta, as 08:10 e as 16:00**.

### Agradecimento
Este arquivo foi estilizado graças a este [passo a passo](https://medium.com/@raullesteves/github-como-fazer-um-readme-md-bonitão-c85c8f154f8)