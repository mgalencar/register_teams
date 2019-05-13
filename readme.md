#Como utilizar o sistema Cadatro de Times e Jogadores?

Instruções abaixo:

1-Fazer o download do arquivo e coloca-lo na pasta htdocs do XAMPP; <br>
2-Rodar o arquivo dump.sql no MySql; 
3-Alterar a senha de conexão com o banco por meio do seguinte caminho:<br>
model-> dao-> connection.php na linha 13 ->$this->password = 'coloque sua senha';<br>
4-Após as etapas acima, entrar no navegador e buscar pelo endereço: localhost/register.team ;<br>
5-Cada botão esta identificado com a ação: Cadastrar Times e Cadastrar Jogadores; <br>
6-Ao clicar, os arquivos disponíveis no banco de dados serão listados;<br>
7-Ao clicar no botão Adicionar, uma modal será aberta e será possível realizar o cadastro <br>
de um novo time ou de um novo jogador, usando a base de times existente; <br>
8-É possível deletar ou atualizar os itens listados clicando nos icones na coluna ações, para atualizar: <br>
novamente será aberta a modal, onde é possível fazer a atualização; 
