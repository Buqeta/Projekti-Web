

function validate(){
    const username = document.getElementById("username");
    const password = document.getElementById("password");
    

    const username_Value = username.value;
    const password_Value = password.value;


    if(username_Value === "" && password_Value === ""){
        error(username, "Username cannot be blank!");
        error(password, "Password cannot be blank!");
        return false;
    }
    else if(username_Value === ""){
        error(username, "Username cannot be blank!");
        return false;
    }
    else if(password_Value === ""){
        error(password, "Password cannot be blank!");
        return false;
    }
    else{
        error(username, "");
        error(password, "");
        return true;
    }
}


function error(element, message){
    const form_element = element.parentElement;
    const p = form_element.querySelector("p");
    p.innerHTML = message;

    form_element.classList.add("error");
}

function success(element){
    const form_element = element.parentElement;
    form_element.classList.remove("error");
    form_element.classList.add("success");
}

function successP(element, message){
    const p = element.nextElementSibling;
    p.innerHTML = message;

    p.classList.add("pSuccess");
}