<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    require_once($path.'/register_teams/controller/controller_player.php');
    
    $action = "router.php?controller=player&modo=insert_player";
    $functionJS = "insert_player()";
    $id_player = 0;
    $name_player = "";
    $last_name_player = "";
    $id_team = "";
    $slc_team = 0;
    $shirt_number_player = "";
    $button = "Salvar";

    if(isset($player)){
        $id_player = $player->getId_player();
        $name_player = $player->getName_player();
        $last_name_player = $player->getLast_name_player();
        $slc_team = $player->getId_team();

        $shirt_number_player = $player->getShirt_number_player();
        $action = "router.php?controller=player&modo=update_player&id_player=".$id_player;
        $functionJS = "update_player()";
        $button = "Atulizar";
    }
?>
<img class="img_close" src="/register_teams/view/img/close.png" alt="close" title="close" onclick="close_modal()">
<form method="POST" id="form_player" action="<?=@$action ?>" onsubmit="<?php echo $functionJS?>">
    <label class="lable_title">CADASTRO DOS JOGADORES</label><br>
    <label for="player_name">Primeiro nome:</label><br>
    <input class="input" type="text" name="txtPlayer_name" value="<?php echo $name_player?>" placeholder="Primeiro nome" required><br>
    <label for="last_name">Sobrenome:</label><br>
    <input class="input" type="text" name="txtLast_name" value="<?php echo $last_name_player?>" placeholder="Sobrenome" required><br>
    <label for="player_team">Time:</label><br>
    <select class="input" name="slc_team" id="slc_team"><br>
    <?php
        require_once($path.'/register_teams/controller/controller_team.php');


        $controllerTeam = new ControllerTeam();
        $list_team = $controllerTeam->list_team();

       
    ?>
        <?php  foreach($list_team as $list){ ?>
            <?php if($list->getId_team() == $slc_team){?>
                <option value="<?php echo $list->getId_team(); ?>" selected>
                    <?php echo ($list->getName_team())?>
                </option>
            <?php } elseif($list->getId_team() != $slc_team){?> 
                <option value="<?php echo $list->getId_team();?>">
                    <?php echo ($list->getName_team())?>
                </option>
            <?php }?>

    <?php } ?>


    </select><br>
    <label for="shirt_number">Número da camisa:</label><br>
    <input class="input" type="text" name="txtShirt_number" value="<?php echo $shirt_number_player?>" placeholder="Numero da camisa" required><br><br>
    <input class="input" type="submit" name="btn_send" value="<?php echo $button ?>">
</form>
