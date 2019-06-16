<?php

class Connection{

    private $server;
    private $user;
    private $password;
    private $database;

    public function __construct(){
        
        $this->server = 'localhost';
        $this->user = 'root';
        $this->password = 'Senai@127131';
        $this->database = 'db_register_teams';
    }
    public function connect_database(){

        try{
            $conexao = new PDO('mysql:host='.$this->server.';dbname='.$this->database, $this->user, $this->password);
            return $conexao;
        }catch(PDOException $erro){
            echo 'Erro ao tentar a conexao com o banco de dados! <br>
            Linhas: '.$erro->getLine().'<br>
            Mensagem: '.$erro->getMensagem();
        }
    }
    
    public function close_database(){
        $conexao = null;
        unset($conexao);
    }

}

?>