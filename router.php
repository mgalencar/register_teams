<?php

$controller = null;
$modo = null;

if(isset($_REQUEST['controller'])){
    $controller = strtoupper($_GET['controller']);
    $modo = strtoupper($_GET['modo']);

    switch($controller){

        case "TEAM":
        
        require_once('controller/controller_team.php');
        $controller_team = new ControllerTeam();
        switch($modo){
                case 'INSERT_TEAM':
                    $controller_team->insert_team();
                    break;
                case "UPDATE_TEAM":
                    $controller_team->update_team();
                    break;

                case "DELETE_TEAM":
                    $controller_team->delete_team();
                    break;
                case "SELECT_ALL_TEAM":
                    $list_team = $controller_team->list_team();
                    require_once('view/reg_team_form/table_team.php');
                    break;
                case "SELECT_BY_ID":
                    $team = $controller_team->search_team();
                    require_once('view/reg_team_form/reg_team.php');
                    break;
        }
        break;

        case "PLAYER":
          
            require_once('controller/controller_player.php');
            $controller_player = new ControllerPlayer();

            switch($modo){
                case 'INSERT_PLAYER':
                   
                    $controller_player->insert_player();
                    break;
                case "UPDATE_PLAYER":
                    $controller_player->update_player();
                    break;
                case "DELETE_PLAYER":
                    $controller_player->delete_player();
                    break;
                case "SELECT_ALL_PLAYER":
                    $list_player = $controller_player->list_player();
                    require_once('view/reg_player_form/table_player.php');
                    break;
                case "SELECT_BY_ID":
                    $player = $controller_player->search_player();
                    require_once('view/reg_player_form/reg_player.php');
                    break;
            }
            break;
    }
}
?>