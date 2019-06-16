<?php

class Trainer{

    private $id_trainer;
    private $name_trainer;
    private $last_name_trainer;
    private $id_team;
    private $name_team;

    public function __construct(){
    }
    // id_trainer
    public function getId_trainer(){
        return $this->id_trainer;
    }
    public function setId_trainer($id_trainer){
        $this->id_trainer = $id_trainer;
        return $this;
    }
    // name_trainer
    public function getName_trainer(){
        return $this->name_trainer;
    }
    public function setName_trainer($name_trainer){
        $this->name_trainer = $name_trainer;
        return $this;
    }
    // last_name_trainer
    public function getLast_name_trainer(){
        return $this->last_name_trainer;
    }
    public function setLast_name_trainer($last_name_trainer){
        $this->last_name_trainer = $last_name_trainer;
        return $this;
    }
    // id_team
    public function getId_team(){
        return $this->id_team;
    }
    public function setId_team($id_team){
        $this->id_team = $id_team;
        return $this;
    }
    // name_team
    public function getName_team(){
        return $this->name_team;
    }
    public function setName_team($name_team){
        $this->name_team = $name_team;
        return $this;
    }
}

















?>