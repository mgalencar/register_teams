<?php
    // $action = "router.php?controller=trainer&modo=insert_trainer";
    $button = "Salvar";
    $id_trainer = 0;
    $name_trainer = "";
    $last_name_trainer = "";
    $id_team = "";
    $functionJS = "insert_trainer()";

    // essa variavel serve para verificar se existe outro jogador ou não
    // se existir é pq deve editar ou atualizar 
    if(isset($trainer)){
        $id_trainer = 0;
        $name_trainer = "";
        $last_name_trainer = "";
        $id_team = "";
       
    }
?>
<img class="img_close" src="/register_teams/view/img/close.png" alt="close" title="close" onclick="close_modal()">
<form method="POST" id="form_trainer" action="<?=@$action ?>" onsubmit="<?php echo $functionJS?>">

    <label class="lable_title">CADASTRO DO TREINADOR</label><br>

    <label for="trainer_name">Nome do Treinador:</label><br>
    <input class="input" type="text" name="txttrainer_name" value="" placeholder="Nome do treinador" required><br>
    
    <label for="trainer_lastname">Sobrenome do Treinador: </label><br>
    <input class="input" type="text" name="txttrainer_lastname" value="" placeholder="Sobrenome do treinador" required><br>

    <label for="time_trainer">Time:</label><br>
    <select class="input" name="slc_trainer" id="slc_trainer"><br>

    <input  class="input" type="submit" name="btn_send" value="<?php echo $button?>">
</form>