function getitem(id){
    return document.getElementById(id);
}

function validate_form(){
    if(getitem("username").value == ""){
        alert("Le nom est obligatoire.");
        return false;
    }
    if(getitem("password").value == ""){
        alert("Le mot de passe est obligatoire.");
        getitem("password").style = "background-color: red;";
        return false;
    }
    alert("Merci pour votre ajout!");
}