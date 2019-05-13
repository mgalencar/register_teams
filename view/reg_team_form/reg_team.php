<?php
    $button = "Salvar";
    $id_team = 0;
    $team_name = "";
    $color_team = "";
    $date_foundation_team = "";
    $action = "router.php?controller=team&modo=insert_team";
    $functionJS = "insert_team()";

    if(isset($team)){
        $id_team = $team->getId_team();
        $team_name = $team->getName_team();
        $color_team = $team->getColor_team();
        $date_foundation_team = $team->getDate_foundation_team();
        $action = "router.php?controller=team&modo=update_team&id_team=".$id_team;
        $functionJS = "update_team()";
        $button = "Atualizar";

    }
?>
<img class="img_close" src="/register_teams/view/img/close.png" alt="close" title="close" onclick="close_modal()">
<form method="POST" id="form_team" action="<?=@$action ?>" onsubmit="<?php echo $functionJS?>">
    <label class="lable_title">CADASTRO DO TIME</label><br>
    <label for="team_name">Nome do time:</label><br>
    <input class="input" type="text" name="txtteam_name" value="<?php echo $team_name?>" placeholder="Nome do time" required><br>
    <label for="team_color">Cor do escudo: </label><br>
    <input class="input" type="text" name="txtteam_color" value="<?php echo($color_team)?>" placeholder="Cor do escudo" required><br>
    <label for="date_foundation">Data da Fundação: </label><br>
    <input  class="input" type="text" name="txtdate_foundation" value="<?php echo($date_foundation_team)?>" placeholder="1999-01-01" required><br><br>
    <input  class="input" type="submit" name="btn_send" value="<?php echo $button?>">
</form>