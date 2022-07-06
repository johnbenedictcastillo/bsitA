var userAcc = "user";
var passAcc = "pass";

function login(){

    var user = document.getElementById("userLOG");
    var pass = document.getElementById("passLOG");
    
    if (user.value==userAcc && pass.value==passAcc) {
        window.alert("Successfully Login!");
        user.value = null;
        pass.value = null;
    }
    else if ((user.value==null || pass.value==null) 
        || (user.value=="" || pass.value=="")) {
        window.alert("Fill up the textbox.");
    }
    else {
        window.alert("Failed to Log-In!");
        user.value = null;
        pass.value = null;
    }
}

function register() {
    document.getElementById("myModal").style.display = "block";
}

function span() {
    document.getElementById("myModal").style.display = "none";
}

function createACC() {
    var user = document.getElementById("userREG");
    var pass = document.getElementById("passREG");
    var conpass = document.getElementById("conpassREG");

    if((user.value!=null && pass.value!=null && conpass.value!=null)&&
        (user.value!="" && pass.value!="" && conpass.value!="")){
        if(pass.value==conpass.value){
            userAcc = user.value;
            passAcc = pass.value;
            user.value = null;
            pass.value = null;
            conpass.value = null;
            window.alert("Successfully Registered!");
            document.getElementById("myModal").style.display = "none";
        }
        else {
            conpass.value = null;
            window.alert("Password doesn't match!");
        }
    } else window.alert("Fill up the Textbox/es!");
}

function oncheck(){
    var pass = document.getElementById("passREG");
    var conpass = document.getElementById("conpassREG");
    var check = document.getElementById("chckbox");

    if(check.checked == true){
        pass.type = "text";
        conpass.type = "text";
    }
    else{
        pass.type = "password";
        conpass.type = "password";
    }
}
