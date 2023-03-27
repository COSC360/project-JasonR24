
function addErrorMessage(id, msg){
    let usernameError = document.getElementById("usernameError");
    let passwordError = document.getElementById("passwordError");
    
    var errorMsg = document.createTextNode(msg);
    if(id = usernameError){
        usernameError.appendChild(errorMsg);
    }else if(id = passwordError){
        passwordError.appendChild(errorMsg);
    }
}
function validateLoginForm() {
    let usernameOrEmail = document.forms["LoginForm"]['user-email'].value;
    let password = document.forms["LoginForm"]['password'].value;
    let usernameError = document.getElementById("usernameError");
    let passwordError = document.getElementById("passwordError");
    // var errorFlag = false;
    var passReg = /^[a-zA-Z]\w{8,16}$/;
    var emailReg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    if (usernameOrEmail == "" && password =="") {
        console.log("username/Password cannot be empty")
        usernameError.style.opacity = "1";
        usernameError.style.visibility = "visible";
        usernameError.style.transition = "visibility 0s linear 0s, opacity 300ms";
        passwordError.style.opacity = "1";
        passwordError.style.visibility = "visible";
        passwordError.style.transition = "visibility 0s linear 0s, opacity 300ms";
        return false;  
    }
    
    if(password ==""){
        passwordError.style.opacity = "1";
        passwordError.style.visibility = "visible";
        passwordError.style.transition = "visibility 0s linear 0s, opacity 300ms";
        window.alert("Password cannot be empty !");
        return false;  
    }
    if(usernameOrEmail ==""){
        usernameError.style.opacity = "1";
        usernameError.style.visibility = "visible";
        usernameError.style.transition = "visibility 0s linear 0s, opacity 300ms";
        window.alert("Username/Email cannot be empty !");
        return false;
    }

    if(!passReg.test(password)){        
        passwordError.style.opacity = "1";
        passwordError.style.visibility = "visible";
        passwordError.style.transition = "visibility 0s linear 0s, opacity 300ms";
        window.alert("Password must be at least 9 characters long !");
        return false;
    }

    if(usernameOrEmail !="" && !passReg.test(password)){
        passwordError.style.opacity = "1";
        passwordError.style.visibility = "visible";
        passwordError.style.transition = "visibility 0s linear 0s, opacity 300ms";
        return false;
    }


    if(usernameOrEmail =="" && passReg.test(password)){
        usernameError.style.opacity = "1";
        usernameError.style.visibility = "visible";
        usernameError.style.transition = "visibility 0s linear 0s, opacity 300ms";
        return false;
    }
  }

function UsernameErrorClearFunction(){
        let usernameError = document.getElementById("usernameError");
        usernameError.style.opacity = "0";
        usernameError.style.visibility = "hidden";
        
}

function PasswordErrorClearFunction(){
        let passwordError = document.getElementById("passwordError");
        passwordError.style.opacity = "0";
        passwordError.style.visibility = "hidden";
}

function ErrorClearFunction(){
    let usernameError = document.getElementById("usernameError");
    let passwordError = document.getElementById("passwordError");

    passwordError.style.opacity = "0";
    passwordError.style.visibility = "hidden";

    usernameError.style.opacity = "0";
    usernameError.style.visibility = "hidden";

}
