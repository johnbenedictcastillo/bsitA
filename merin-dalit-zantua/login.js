


const connection = supabase.createClient(PROJECT_URL,API_KEY);


var button = document.getElementById("loginform");
button.addEventListener("click", saveUser);

async function saveUser(){

    var username = document.getElementById("username");
    var password = document.getElementById("password");
    console.log(username.value)
    console.log(password.value)
  const { data, error } = await connection.from("user").select('*').eq('username', username.value).eq('password', password.value);
    if (data){
        if (data.length > 0){
            console.log(data)
            window.alert("Login Successfully!");
            sessionStorage.setItem("username", data[0].username);
            sessionStorage.setItem("password", data[0].password);
            location.replace('/bolinas-leynes/pages/productpage.html')
        }else{
            window.alert("Failed to Login.");
            username.value = null;
            password.value = null;

        }
    }
    if(error){
        console.log(error)
        window.alert("Failed to Login.");
        username.value = null;
        password.value = null;
    }
}
