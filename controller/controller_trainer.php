<?php

class ControllerTrainer{

    private $trainerDao;
    private $trainer;

    public function __construct(){

        $path = $_SERVER['DOCUMENT_ROOT'];
        require_once($path.'/register_teams/model/dao/trainerDAO.php');
        require_once($path.'\register_teams\model\trainerClass.php');

       

        $this->trainer = new Trainer();
        $this->trainerDao = new TrainerDao();
    }
    public function list_trainer(){
        // a variavel consult recebe o objeto que chama o metodo criado na DAO
        $consult_trainer = $this->trainerDao->selectAll();
        return $consult_trainer;
    }





}















?>