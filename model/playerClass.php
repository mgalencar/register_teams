<?php

class Player{

    
    private $id_player;
    private $name_player;
    private $last_name_player;
    private $id_team;
    private $shirt_number_player;
    private $name_team;

    public function __construct(){

    }

    public function getId_player(){
        return $this->id_player;
    }
    public function setId_player($id_player){
        $this->id_player = $id_player;
        return $this;
    }

    public function getName_player(){
        return $this->name_player;
    }
    public function setName_player($name_player){
        $this->name_player = $name_player;
        return $this;
    }


    public function getLast_name_player(){
        return $this->last_name_player;
    }
    public function setLast_name_player($last_name_player){
        $this->last_name_player = $last_name_player;
        return $this;
    }

    public function getId_team(){
        return $this->id_team;
    }

    public function setId_team($id_team){
        $this->id_team = $id_team;
        return $this;
    }
    
    public function getShirt_number_player(){
        return $this->shirt_number_player;
    }
    public function setShirt_number_player($shirt_number_player){
        $this->shirt_number_player = $shirt_number_player;
        return $this;
    }
    public function getName_team(){
        return $this->name_team;
    }
    public function setName_team($name_team){
        $this->name_team = $name_team;
        return $this;
    }

}

?>