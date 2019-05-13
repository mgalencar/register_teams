<?php

class PlayerDao{

    private $connect;

    public function __construct(){
        
        $path = $_SERVER['DOCUMENT_ROOT'];
        require_once($path.'/register_teams/model/dao/conection.php');

        $this->connect = new connection();
    }
    public function insert($player){
        $sql ="INSERT into tbl_player (name_player, last_name_player, id_team, shirt_number_player) 
        VALUES ('".$player->getName_player()."','".$player->getLast_name_player()."',
        '".$player->getId_team()."','".$player->getShirt_number_player()."')";

        // starting connection 
        $PDO_conex = $this->connect->connect_database();

        if($PDO_conex->query($sql)){
            echo "Sucesso, insert realizado";
        }else{
            echo "Erro, insert não realizado";
        }
        $this->connect->close_database();
    }
    public function delete($id_player){
        // delete
        $sql = "DELETE FROM tbl_player where id_player=".$id_player;
        // starting connection 
        $PDO_conex = $this->connect->connect_database();
        // error message
        if($PDO_conex->query($sql)){
            echo "Item deletado";
        }else{
            echo "Erro ao deletar";
        }
        $this->connect->close_database();
    }
    public function update($player){
        $sql = "UPDATE tbl_player set 
        name_player='".$player->getName_player()."',
        last_name_player='".$player->getLast_name_player()."',
        id_team='".$player->getId_team()."',
        shirt_number_player='".$player->getShirt_number_player()."'
        WHERE id_player=".$player->getId_player();
        // starting connection
        $PDO_conex = $this->connect->connect_database();
        echo $sql;
        if($PDO_conex->query($sql)){
            echo "Sucesso, update realizado";
        }else{
            echo "Erro ao atualizar";
        }
        $this->connect->close_database();
    }
    public function selectAll(){
        $sql = "SELECT tbl_player.*, tbl_team.name_team FROM tbl_player, tbl_team WHERE tbl_player.id_team = tbl_team.id_team";
        // starting connection 
        $PDO_conex = $this->connect->connect_database();
        $select = $PDO_conex->query($sql);
        $list_player = array();

        while($rs_player = $select->fetch(PDO::FETCH_ASSOC)){
            $player = new Player();
            $player->setId_player($rs_player['id_player']);
            $player->setName_player($rs_player['name_player']);
            $player->setLast_name_player($rs_player['last_name_player']);
            $player->setId_team($rs_player['id_team']);
            $player->setShirt_number_player($rs_player['shirt_number_player']);
            $player->setName_team($rs_player['name_team']);

            $list_player[] = $player;
        }
        $this->connect->close_database();
        
        return $list_player;
    }

    public function selectById($id_player){
        $sql = "SELECT * from tbl_player WHERE id_player=".$id_player;
        // starting connection
        $PDO_conex = $this->connect->connect_database();

        $select = $PDO_conex->query($sql);

        if($rs_player = $select->fetch(PDO::FETCH_ASSOC)){
            
            $list_player = new Player();
            $list_player->setId_player($rs_player['id_player']);
            $list_player->setName_player($rs_player['name_player']);
            $list_player->setLast_name_player($rs_player['last_name_player']);
            $list_player->setId_team($rs_player['id_team']);
            $list_player->setShirt_number_player($rs_player['shirt_number_player']);
            
        }
        $this->connect->close_database();

        return $list_player;
    }
}
?>