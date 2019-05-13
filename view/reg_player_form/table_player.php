<div id="box_table">
    <div id="btn_add" onclick="show_modal_player()">
        <a>Adicionar</a>
    </div>
    <!--tbl player-->
    <div id="tbl_player">
        <div class="title_line" style="background-color: #3A7EA7;">
            <div class="col_title" style="width: 160px;">
                <p>Jogador</p>
            </div>
            <div class="col_title" style="width: 160px;">
                <p>Sobrenome</p>
            </div>
            <div class="col_title" style="width: 160px;">
                <p>Time</p>
            </div>
            <div class="col_title" style="width: 160px;">
                <p>Camisa</p>
            </div>
            <div class="col_title" style="width: 158px;">
                <p>Ações</p>
            </div>
        </div>
        
        <?php
            //importing controller - player 
            $path = $_SERVER['DOCUMENT_ROOT'];
            require_once($path.'/register_teams/controller/controller_player.php');
            
            $controller_player = new ControllerPlayer();

            $list_player = $controller_player->list_player();
            
            foreach($list_player as $list){
        ?>

        <div class="title_line" style="color:#000000">
            <div class="col_title" style="width: 160px;">
               <?php echo($list->getName_player())?> 
            </div>
            <div class="col_title" style="width: 160px;">
                <?php echo($list->getLast_name_player())?> 
            </div>
            <div class="col_title" style="width: 160px;">
                <?php echo($list->getName_team())?> 
            </div>
            <div class="col_title" style="width: 160px;">
                <?php echo($list->getShirt_number_player())?> 
            </div>
            <div class="col_title" style="width: 158px; padding-left:20px;">
                <img src="/register_teams/view/img/edit.png" alt="editar" title="editar" onclick="search_player('player', 'select_by_id', <?php echo($list->getId_player())?>)">
                <img src="/register_teams/view/img/delet.png" alt="editar" title="editar" onclick="delete_player('player', 'delete_player', <?php echo($list->getId_player())?>)">
            </div>

        </div>

        <?php
            }
        ?>

    </div>
 </div>