<?php

class TrainerDao{

private $connect;

public function __construct(){

    $path = $_SERVER['DOCUMENT_ROOT'];
    require_once($path.'/register_teams/model/dao/conection.php');

    $this->connect = new connection();
}

public function selectAll(){                 
    $sql = "SELECT tbl_trainer.*,tbl_team.name_team from tbl_trainer, tbl_team where tbl_trainer.id_team = tbl_team.id_team";
    // criando a conexão
    $PDO_conex = $this->connect->connect_database();
    $select = $PDO_conex->query($sql);
    $list_trainer = array();

    while($rs_trainer = $select->fetch(PDO::FETCH_ASSOC)){

       
        $trainer = new Trainer();
        $trainer->setId_trainer($rs_trainer['id_trainer']);
        $trainer->setName_trainer($rs_trainer['name_trainer']);
        $trainer->setLast_name_trainer($rs_trainer['last_name_trainer']);
        $trainer->setId_team($rs_trainer['id_team']);
        $trainer->setName_team($rs_trainer['name_team']);
        // o array recebe as posições setadas do array
        $list_trainer[] = $trainer;

        
        // usando objeto criado no construct 
        $this->connect->close_database();

        return $list_trainer;

    }




}


}













?>