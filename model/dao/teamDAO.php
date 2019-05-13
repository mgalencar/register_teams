<?php

    class TeamDao{

        private $connect;

        public function __construct(){
            $path = $_SERVER['DOCUMENT_ROOT'];
            require_once($path.'/register_teams/model/dao/conection.php');

            $this->connect = new Connection();
        }
        public function insert($team){
            $sql = "INSERT INTO tbl_team (name_team, color_team, date_foundation_team)
            VALUES ('".$team->getName_team()."',
                    '".$team->getColor_team()."',
                    '".$team->getDate_foundation_team()."')";
            

            var_dump ($this->connect->connect_database());
            // starting connection 
            $PDO_conex = $this->connect->connect_database();
           
            if($PDO_conex->query($sql)){
                echo "Sucesso, insert realizado";
            }else{
                echo "Erro, insert não realizado";
            }

            $this->connect->close_database();
        }
        public function delete ($id_team){
            $sql = "DELETE FROM tbl_team where id_team = ".$id_team;
            $PDO_conex = $this->connect->connect_database();
            echo $sql;

            // error message
            if($PDO_conex->query($sql)){
                echo "Item deletado";
            }else{
                echo "Erro ao deletar";
            }
            $this->connect->close_database();
        }
        public function update($team){
            $sql = "UPDATE tbl_team set
            name_team='".$team->getName_team()."',
            color_team='".$team->getColor_team()."',
            date_foundation_team='".$team->getDate_foundation_team()."'
            WHERE id_team=".$team->getId_team();
            // starting connection
            $PDO_conex = $this->connect->connect_database();
            // error message
            if($PDO_conex->query($sql)){
                echo "Sucesso, update realizado";
            }else{
                echo $sql;
                echo "Erro ao atualizar";
            }
            // closing connection
            $this->connect->close_database();

        }
        public function selectAll(){
            $sql = "SELECT * FROM tbl_team";
            // starting connection 
            $PDO_conex = $this->connect->connect_database();
            $select = $PDO_conex->query($sql);

            $list_team = array();

            while($rs_team = $select->fetch(PDO::FETCH_ASSOC)){
                $team = new Team();
                $team->setId_team($rs_team['id_team']);
                $team->setName_team($rs_team['name_team']);
                $team->setColor_team($rs_team['color_team']);
                $team->setDate_foundation_team($rs_team['date_foundation_team']);

                $list_team[] = $team;
            }
            $this->connect->close_database();
            return $list_team;
        }
        public function selectById($id_team){
            $sql = "SELECT * FROM tbl_team where id_team=".$id_team;
            // starting connection
            $PDO_conex = $this->connect->connect_database();
            $select = $PDO_conex->query($sql);

            if($rs_team = $select->fetch(PDO::FETCH_ASSOC)){
                
                $list_team = new Team();
                $list_team->setId_team($rs_team['id_team']);
                $list_team->setName_team($rs_team['name_team']);
                $list_team->setColor_team($rs_team['color_team']);
                $list_team->setDate_foundation_team($rs_team['date_foundation_team']);
            }
            // closing database
            $this->connect->close_database();

            return $list_team;
        }


    }


?>