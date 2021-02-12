
function validate(){

    const first_name = document.getElementById("first-name");
    const last_name = document.getElementById("last-name");
    const username = document.getElementById("username");
    const e_mail = document.getElementById("email");
    const password = document.getElementById("password");
    const password2 = document.getElementById("password2");

    const first_name_Value = first_name.value;
    const last_name_Value = last_name.value;
    const username_Value = username.value;
    const e_mail_Value =  e_mail.value;
    const password_Value = password.value;
    const password2_Value = password2.value;

    var successCounter = 0; //numeron se sa form-elements kane klasen success

    if(first_name_Value === ""){
        error(first_name, "First name should not be empty!");
        return false;
    }
    else{
        error(first_name, "");
    }
    if(last_name_Value === ""){
        error(last_name, "Last name should not be empty!");
        return false;
    }
    else{
        error(last_name, "");
    }
    if(username_Value === ""){
        error(username, "Username should not be empty!");
        return false;
    }
    else{
        error(username, "");
    }
    if(e_mail_Value === ""){
        error(e_mail, "E-mail should not be empty!");
        return false;
    }
    if(!(validate_email(e_mail_Value))){
        error(e_mail, "E-mail is not valid!");
        return false;
    }
    else{
        error(e_mail, "");
    }
    if(password_Value === ""){
        error(password, "Password should not be empty!");
        return false;
    }
    else if(!(validate_password(password_Value))){
        error(password, "8 characters long, at least one nr., at least one UC and LC and at least one of #?!@$%^&*-");
        return false;
    }
    else{
        error(password, "");
    }
    if(password2_Value === ""){
        error(password2, "Password confirm should not be empty!");
        return false;
    }else if(password2_Value !== password_Value){
        error(password2, "Password confirm should be the same as password");
        return false;
    }else{
        error(password2, "");
        return true;
    }
}

function error(element, message){
    const form_element = element.parentElement;
    const p = form_element.querySelector("p");
    p.innerHTML = message;

    form_element.classList.add("error");
}

//function success(element){
  //  const form_element = element.parentElement;
  //  form_element.classList.remove("error");
    //form_element.classList.add("success");
//}

//function successP(element, message){
  //  const p = element.nextElementSibling;
   // p.innerHTML = message;

//    p.classList.add("pSuccess");
//}

function validate_email(emaili){
    const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return emailRegex.test(emaili);
}

function validate_password(pass){
    const passwordMatch = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/gm;
    return passwordMatch.test(pass);
}