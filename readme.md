#Como utilizar o sistema Cadatro de Times e Jogadores?

Instru��es abaixo:

1-Fazer o download do arquivo e coloca-lo na pasta htdocs do XAMPP; <br>
2-Rodar o arquivo dump.sql no MySql; 
3-Alterar a senha de conex�o com o banco por meio do seguinte caminho:<br>
model-> dao-> connection.php na linha 13 ->$this->password = 'coloque sua senha';<br>
4-Ap�s as etapas acima, entrar no navegador e buscar pelo endere�o: localhost/register.team ;<br>
5-Cada bot�o esta identificado com a a��o: Cadastrar Times e Cadastrar Jogadores; <br>
6-Ao clicar, os arquivos dispon�veis no banco de dados ser�o listados;<br>
7-Ao clicar no bot�o Adicionar, uma modal ser� aberta e ser� poss�vel realizar o cadastro <br>
de um novo time ou de um novo jogador, usando a base de times existente; <br>
8-� poss�vel deletar ou atualizar os itens listados clicando nos icones na coluna a��es, para atualizar: <br>
novamente ser� aberta a modal, onde � poss�vel fazer a atualiza��o; 
