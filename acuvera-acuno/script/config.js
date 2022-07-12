var userAcc = "java123";
var passAcc = "pass";
var fnameACC = "JAVA";
var lnameACC = "SHOES";
var accLOGIN = false;

function onRUN(){
    var user = document.getElementById("userNAME");

    if(accLOGIN==true){
        user.innerHTML = userAcc;

        accLOGIN=true
    }
}

function login(){
    var user = document.getElementById("userLOG");
    var pass = document.getElementById("passLOG");

    var nm = document.getElementById("userNAME");
    
    if (user.value==userAcc && pass.value==passAcc) {
        if(accLOGIN==true){
            window.alert("Already Login!");
        }
        else{
            window.alert("Successfully Login!");
            nm.innerHTML = "Welcome "+ lnameACC + "," + fnameACC;
            accLOGIN=true;
        }
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
    var user = document.getElementById("userREG");
    var pass = document.getElementById("passREG");
    var conpass = document.getElementById("conpassREG");
    var check = document.getElementById("chckbox");
    var fname = document.getElementById("txtbFnm");
    var lname = document.getElementById("txtbLnm");

    document.getElementById("myModal").style.display = "block";

    user.value=null;
    pass.value=null;
    conpass.value=null;
    check.checked = false;
    fname.value = null;
    lname.value = null;

    
}

function span() {
    document.getElementById("myModal").style.display = "none";
}

function profile() {
    var info = document.getElementById("myInfo").style;

    if(info.display=="none") info.display = "block";
    else info.display = "none";
    

    var uTxt = document.getElementById("Uname");
    var fTxt = document.getElementById("Fname");
    var lTxt = document.getElementById("Lname");

    if(accLOGIN==true){
        uTxt.innerHTML = "Username: " + userAcc;
        fTxt.innerHTML = "Firstname: " + fnameACC;
        lTxt.innerHTML = "Lastname: " + lnameACC;

        accLOGIN=true
    }

}

function createACC() {
    var user = document.getElementById("userREG");
    var pass = document.getElementById("passREG");
    var conpass = document.getElementById("conpassREG");
    var fname = document.getElementById("txtbFnm");
    var lname = document.getElementById("txtbLnm");


    if((user.value!=null && pass.value!=null && conpass.value!=null)&&
        (user.value!="" && pass.value!="" && conpass.value!="")){
        if(pass.value==conpass.value){
            userAcc = user.value;
            passAcc = pass.value;
            user.value = null;
            pass.value = null;
            conpass.value = null;
            fname.value = null;
            lname.value = null;
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

