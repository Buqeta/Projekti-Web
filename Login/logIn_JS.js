const form = document.getElementById("form");
const username = document.getElementById("username");
const password = document.getElementById("password");

const username_validate = "User12345";
const password_validate = "UserUserUser123";


form.addEventListener("submit", function(event){
    event.preventDefault();
    validate();

});

function validate(){
    const username_Value = username.value;
    const password_Value = password.value;

    var successCounter = 0;

    if(username_Value === ""){
        error(username, "Username cannot be blank!");
    }else if(username_Value !== username_validate){
        error(username, "Username is incorrect!");
    }
    
    else{
        success(username);
        successCounter++;
    }

    if(password_Value === ""){
        error(password, "Password cannot be blank!");
    }else if(password_Value !== password_validate){
        error(password, "Password is incorrect!");
    }
    else{
        success(password);
        successCounter++;
    }

    if(successCounter === 2){
        successP(password, "You have successfully logged in!")
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