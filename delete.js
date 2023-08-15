$(document).ready(function() {
    deleteListUser();

});

function deleteListUser(){

    $.ajax({
        url: "Action.php",
        type: "POST",
        data: {action: "userList"},

        success: function(response){
            let users= JSON.parse(response);
            let text="";
            users.forEach(user => {
                text +=
                "<div class='card text-white bg-secondary mt-2 mb-2 col-4'>"+
                    "<div class='card-header' id='email'>"+user.email+"</div>"+
                        "<div class='card-body'>"+
                            "<div class='card-text' id='userName'>"+user.user_name+"</div>"+
                        "</div>"+
                        "<div class='card-footer'>"+
                        "<button class= 'btn btn-danger w-100' id='id' onclick='deleteMember("+user.id+")'> Törlés </button> "+
                        "</div>"+
                "</div>";
            });    
            document.getElementById("users").innerHTML = text;
        },
        error: function(jqXhr, textStatus, errorMessage){

        }


    })

}

function deleteMember(id){
    $.ajax({
        url: "Action.php",
        type: "POST",
        data: {action: "deleteList", keyId: id},

        success: function(response){
            
            deleteListUser();
         },
        error: function(jqXhr, textStatus, errorMessage){
            
        }

    })
}