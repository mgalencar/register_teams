<?php
    class ControllerPlayer{

        private $playerDAO;
        private $player;

        public function __construct(){
            
            $path = $_SERVER['DOCUMENT_ROOT'];
            // importing classes. 
            require_once($path.'/register_teams/model/dao/playerDAO.php');
            require_once($path.'/register_teams/model/playerClass.php');
            
            $this->player = new Player();
            $this->playerDAO = new PlayerDAO();
        }
        public function insert_player(){
            
            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $name_player = $_POST['txtPlayer_name'];
                $last_name_player = $_POST['txtLast_name'];
                $id_team = $_POST['slc_team'];
                $shirt_number_player = $_POST['txtShirt_number'];

                $this->player->setName_player($name_player);
                $this->player->setLast_name_player($last_name_player);
                $this->player->setId_team($id_team);
                $this->player->setShirt_number_player($shirt_number_player);
                $this->playerDAO->insert($this->player);
            }
        }
        public function delete_player(){
            $id_player = $_GET['id_player'];
            $this->playerDAO->delete($id_player);
        }
        public function update_player(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $id_player = $_GET['id_player'];
                $name_player = $_POST['txtPlayer_name'];
                $last_name_player = $_POST['txtLast_name'];
                $id_team = $_POST['slc_team'];
                $shirt_number_player = $_POST['txtShirt_number'];

                $this->player->setId_player($id_player);
                $this->player->setName_player($name_player);
                $this->player->setLast_name_player($last_name_player);
                $this->player->setId_team($id_team);
                $this->player->setShirt_number_player($shirt_number_player);

                $this->playerDAO->update($this->player);
            }
        }
        public function list_player(){
            $consult_player = $this->playerDAO->selectAll();
            return $consult_player;
        }
        public function search_player(){
            $id_player = $_GET['id_player'];
            return $this->playerDAO->selectById($id_player);
        }
    }
?>