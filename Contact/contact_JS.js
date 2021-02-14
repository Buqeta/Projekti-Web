function validate(){
    const username = document.getElementById("username");
    const textarea = document.getElementById("textarea");
    

    const username_Value = username.value;
    const textarea_Value = textarea.value;


    if(username_Value === "" && textarea_Value === ""){
        error(username, "Subject cannot be blank!");
        error(textarea, "Content cannot be blank!");
        return false;
    }
    else if(username_Value === ""){
        error(username, "Subject cannot be blank!");
        return false;
    }
    else if(textarea_Value === ""){
        error(textarea, "Content cannot be blank!");
        return false;
    }
    else{
        error(username, "");
        error(textarea, "");
        return true;
    }
}

function error(element, message){
    const form_element = element.parentElement;
    const p = form_element.querySelector("p");
    p.innerHTML = message;

    form_element.classList.add("error");
}