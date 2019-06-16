<div id="box_table">
    <div id="btn_add" onclick="show_modal_trainer()">
        <a>Adicionar</a>
    </div>
    <!--tbl trainer-->
    <div id="tbl_trainer">
        <div class="title_line" style="background-color: #3A7EA7;">
            <div class="col_title" style="width: 160px;">
                <p>Nome</p>
            </div>
            <div class="col_title" style="width: 160px;">
                <p>Sobrenome</p>
            </div>
            <div class="col_title" style="width: 160px;">
                <p>Time</p>
            </div>
            <div class="col_title" style="width: 158px;">
                <p>Ações</p>
            </div>
        </div>
        
        <?php
            //importing controller - Trainer
            $path = $_SERVER['DOCUMENT_ROOT'];
            require_once($path.'/register_teams/controller/controller_trainer.php');
            
            $controller_trainer = new ControllerTrainer();

            $list_trainer = $controller_trainer->list_trainer();
            
            foreach($list_trainer as $list){
        ?>

        <div class="title_line_trainer" style="color:#000000">
            <div class="col_title" style="width: 200px;">
            <?php echo $list->getName_trainer()?>
            </div>
            <div class="col_title" style="width: 200px;">
            <?php echo $list->getLast_name_trainer()?>
            </div>
            <div class="col_title" style="width: 200px;">
            <?php echo $list->getId_team()?>
            </div>
            <div class="col_title" style="width: 198px;">
            <?php echo $list->getName_team()?>
            </div>
            <div class="col_title" style="width: 158px; padding-left:20px;">
                <img src="/register_teams/view/img/edit.png" alt="editar" title="editar">
                <img src="/register_teams/view/img/delet.png" alt="deletar" title="deletar">
            </div>

        </div>

        <?php
            }
        ?>

    </div>
 </div>