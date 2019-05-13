<?php

class Team{

    private $id_team;
    private $name_team;
    private $color_team;
    private $date_foudation_team;

    public function __construct(){

    }

    // sets e gets das variaveis
    public function getId_team(){
        return $this->id_team;
    }
    public function setId_team($id_team){
        $this->id_team = $id_team;
        return $this;
    }

    public function getName_team(){
        return $this->name_team;
    }
    public function setName_team($name_team){
        $this->name_team = $name_team;
        return $this;
    }

    public function getColor_team(){
        return $this->color_team;
    }
    public function setColor_team($color_team){
        $this->color_team = $color_team;
        return $this;
    }

    public function getDate_foundation_team(){
        return $this->date_foudation_team;
    }
    public function setDate_foundation_team($date_foudation_team){
        $this->date_foudation_team = $date_foudation_team;
        return $this;
    }

}









?>