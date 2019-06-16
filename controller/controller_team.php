<?php

    class ControllerTeam{

        private $teamDAO;
        private $team;

        public function __construct(){
            $path = $_SERVER['DOCUMENT_ROOT'];
            require_once($path.'/register_teams/model/dao/teamDAO.php');
            require_once($path.'/register_teams/model/teamClass.php');

            $this->teamDao = new TeamDao();
            $this->team = new Team();
        }
        public function insert_team(){
    
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
              
                $name_team = $_POST['txtteam_name'];
                $color_team = $_POST['txtteam_color'];
                $date_foundation = $_POST['txtdate_foundation'];
               
                $this->team->setName_team($name_team);
                $this->team->setColor_team($color_team);
                $this->team->setDate_foundation_team($date_foundation);
                
                $this->teamDao->insert($this->team);
                                
            }
        }  
        public function delete_team(){
            $id_team = $_GET['id_team'];
            $this->teamDao->delete($id_team);
        }
        public function update_team(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $id_team = $_GET['id_team'];
                $name_team = $_POST['txtteam_name'];
                $color_team = $_POST['txtteam_color'];
                $date_foundation = $_POST['txtdate_foundation'];
                
                
                $this->team->setName_team($name_team);
                $this->team->setColor_team($color_team);
                $this->team->setDate_foundation_team($date_foundation);
                $this->team->setId_team($id_team);
                $this->teamDao->update($this->team);
            }
        }
        public function list_team(){
            
            $consult = $this->teamDao->selectAll();
           
            return $consult;
        }    
        public function search_team(){
            $id_team = $_GET['id_team'];
            return $this->teamDao->selectById($id_team);
        }
        
        


    }








?>