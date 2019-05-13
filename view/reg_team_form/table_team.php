
<div id="box_table">
    <div id="btn_add" onclick="show_modal_team()">
        <a>Adicionar</a>
    </div>
    <div id="tbl_team">
        <div class="title_line" style="background-color: #3A7EA7;">
            <div class="col_title" >
                <p>Nome</p>
            </div>
            <div class="col_title" style="width: 300px;">
                <p>Cor do escudo</p>
            </div>
            <div class="col_title" style="width: 200px;">
                <p>Data da Fundação</p>
            </div>
            <div class="col_title" style="width: 100px;">
                <p>Ações</p>
            </div>

        </div>
        <?php
            $path = $_SERVER['DOCUMENT_ROOT'];
            require_once($path.'/register_teams/controller/controller_team.php');
            
            $controller_team = new ControllerTeam();

            $list_team = $controller_team->list_team();
            
            foreach($list_team as $list){
        ?>

        <div class="title_line" style="color:#000000">
            <div class="col_title" >
               <?php echo($list->getName_team())?> 
            </div>
            <div class="col_title" style="width: 300px;">
                <?php echo($list->getColor_team())?> 
            </div>
            <div class="col_title" style="width: 200px;">
                <?php echo($list->getDate_foundation_team())?> 
            </div>
            <div class="col_title" style="width: 100px">
            
                <img src="/register_teams/view/img/edit.png" alt="editar" title="editar" onclick="search_team('team', 'select_by_id', <?php echo($list->getId_team())?>)">
                <img src="/register_teams/view/img/delet.png" alt="editar" title="editar" onclick="delete_team('team', 'delete_team', <?php echo($list->getId_team())?>)">
               
            </div>

        </div>

        <?php
            }
        ?>

    </div>
 </div>