let registerFromData= document.getElementById("register");

registerFromData.addEventListener("submit", (e) =>{
    e.preventDefault();

    
    let username= document.getElementById("username").value;
    let email= document.getElementById("email").value;
    let password= document.getElementById("password").value;
    let allData

    if(username != "" && email != "" && password != ""){
    allData = {
            userName: username,
            email: email,
            passw: password,

        }
    }else{
        alert ("Nem írt be értékeket");
    }
    
 
        $.ajax({
            url: "Action.php",
            type: "POST",
            data: {action:"register", keyAllData: allData},
            success: function(response){
            console.log(response);
                if(response == true){
                window.location.href = "?page=userList";
            }    
            },
            error: function(jqXhr, textStatus, errorMessage){

            }


        })
    

});

