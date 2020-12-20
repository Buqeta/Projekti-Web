const form = document.getElementById("form");
const first_name = document.getElementById("first-name");
const last_name = document.getElementById("last-name");
const username = document.getElementById("username");
const e_mail = document.getElementById("email");
const password = document.getElementById("password");
const password2 = document.getElementById("password2");



form.addEventListener("submit", function (event) {
    event.preventDefault();
    validate();
});


function validate(){
    const first_name_Value = first_name.value;
    const last_name_Value = last_name.value;
    const username_Value = username.value;
    const e_mail_Value =  e_mail.value;
    const password_Value = password.value;
    const password2_Value = password2.value;

    var successCounter = 0; //numeron se sa form-elements kane klasen success

    if(first_name_Value === ""){
        error(first_name, "First name should not be empty!");
    }else if(first_name_Value.length < 3){
        error(first_name, "First name should have 3 or more characters!");
    }else{
        success(first_name);
        successCounter++;
    }

    if(last_name_Value === ""){
        error(last_name, "Last name should not be empty!");
    }
    else if(last_name_Value.length < 3){
        error(last_name, "Last name should have 3 or more characters!")
    }else{
        success(last_name);
        successCounter++;
    }

    if(username_Value === ""){
        error(username, "Last name should not be empty!");
    }else if(username_Value.length < 3){
        error(username, "Username should have 3 or more characters!");
    }else{
        success(username);
        successCounter++;
    }

    if(e_mail_Value === ""){
        error(e_mail, "E-mail should not be empty!");
    }else if(!(validate_email(e_mail_Value))){
        error(e_mail, "E-mail is not valid!");
    }else{
        success(e_mail);
        successCounter++;
    }

    const illegalPassword = "password";

    if(password_Value === ""){
        error(password, "Password should not be empty!");
    }else if(password_Value.length < 8){
        error(password, "Password should have 8 or more characters!");
    }else if(password_Value.toLowerCase() === illegalPassword.toLowerCase()){
        error(password, "Password cannot be \"password\"!");
    }else if(password_Value === username_Value){
        error(password, "Username and password cannot be the same!");
    }else if(!(validate_password(password_Value))){
        error(password, "8 characters long, at least one nr., at least one UC and LC and at least one of #?!@$%^&*-");
    }else{
        success(password);
        successCounter++;
    }

    if(password2_Value === ""){
        error(password2, "Password confirm should not be empty!");
    }else if(password2_Value !== password_Value){
        error(password2, "Password confirm should be the same as password");
    }else{
        success(password2);
        successCounter++;
    }

    if(successCounter == 6){
        successP(password2, "You have successfully registered!");
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

function validate_email(emaili){
    const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return emailRegex.test(emaili);
}

function validate_password(pass){
    const passwordMatch = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/gm;
    return passwordMatch.test(pass);
}