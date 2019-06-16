var href = window.location.href;
$(document).ready(function(){
    $("#btn_team").click(function(){ 
        list_team();
    });
});
function list_team(){
    $.ajax({
        type: "GET",
        url: "view/reg_team_form/table_team.php",
        success: function(callback){
            $("#box_container").html(callback)
            console.log("Descarregando...");
        } 
    });
}
function insert_team(){
    form = $("#form_team");
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: form.attr('action'),
        data: form.serialize(),
        success: function(callback){
            console.log(callback);
            list_team();
            close_modal();
        }
    });
}
function delete_team(controller, modo, id_team){
    console.log(href);
    $.ajax({
        type:"GET",
        url: href+"router.php?",
        data : {controller: controller, modo: modo, id_team: id_team},
        success: function(callback){
            list_team();
            console.log(callback)
        }
    });
}
function update_team(){
    form = $('#form_team');
    event.preventDefault();
    $.ajax({
        type:"POST",
        url: form.attr('action'),
        data: form.serialize(),
        success: function(callback){
            close_modal();
            list_team();
            console.log(callback)
        }
    })
}
function search_team(controller, modo, id_team){
    $("#container_modal").fadeIn();
    $.ajax({
        type:"GET",
        url: href+"router.php?",
        data : {controller: controller, modo: modo, id_team: id_team},
        success:function(callback){
            $("#modal").html(callback)
            console.log(callback)
        }
    })
}

// PLAYER
$(document).ready(function(){
    $("#btn_player").click(function(){ 
        list_player();
    });
});
function list_player(){
    $.ajax({
        type: "GET",
        url: "view/reg_player_form/table_player.php",
        success: function(callback){
            $("#box_container").html(callback)
        } 
    });
}
function insert_player(){
    form = $("#form_player");
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: form.attr('action'),
        data: form.serialize(),
        success: function(callback){
            console.log(callback);
            list_player();
            close_modal();
        }
    });
}
function delete_player(controller, modo, id_player){
    console.log(href);
    $.ajax({
        type: "GET",
        url: href+"router.php?",
        data: {controller: controller, modo: modo, id_player: id_player},
        success: function(callback){
            list_player();
            console.log(callback)
        }
    });
}
function update_player(){
    form = $('#form_player');
    event.preventDefault();
    $.ajax({
        type:"POST",
        url: form.attr('action'),
        data: form.serialize(),
        success: function(callback){
            close_modal();
            list_player();
            console.log(callback)
            
        }
    })
}
function search_player(controller, modo, id_player){
    $("#container_modal").fadeIn();
    $.ajax({
        type:"GET",
        url: href+"router.php?",
        data : {controller: controller, modo: modo, id_player: id_player},
        success:function(callback){
            $("#modal").html(callback)
            console.log(callback)
        }
    })
}
// TRAINER
$(document).ready(function(){
    $("#btn_trainer").click(function(){ 
        list_trainer();
    });
});
function list_trainer(){
    $.ajax({
        type: "GET",
        url: "view/reg_trainer_form/table_trainer.php",
        success: function(callback){
            $("#box_container").html(callback)
        } 
    });
}
function insert_trainer(){
    form = $("#form_trainer");
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: form.attr('action'),
        data: form.serialize(),
        success: function(callback){
            console.log(callback);
            list_trainer();
            close_modal();
        }
    });
}






function show_modal_team(){

    $("#container_modal").fadeIn();
    $.ajax({
        type: "GET",
        url: "view/reg_team_form/reg_team.php",
        success: function(callback){
            $("#modal").html(callback)
        }
    });
}
function show_modal_player(){
    $("#container_modal").fadeIn();
    $.ajax({
        type: "GET",
        url: "view/reg_player_form/reg_player.php",
        success: function(callback){
            $("#modal").html(callback)
        }
    });
}
function show_modal_trainer(){
    $("#container_modal").fadeIn();
    $.ajax({
        type: "GET",
        url: "view/reg_trainer_form/reg_trainer.php",
        success: function(callback){
            $("#modal").html(callback)
        }
    });
}

function close_modal(){
    $("#container_modal").fadeOut();

}

