const login_btn = document.querySelector("#login-btn");
const registro_btn = document.querySelector("#registro-btn");
const login_container = document.querySelector("#login-container");

registro_btn.addEventListener("click", () => {
    login_container.classList.add("modo-registro");
});

login_btn.addEventListener("click", () => {
    login_container.classList.remove("modo-registro");
});

//verificacion del registro

function verificacionRegistro(){
    var user = document.getElementById("usuario").value;
    var password = document.getElementById("contrasena").value;
    var email = document.getElementById("email").value;

    //validacion de los datos del usuario
    if (user.length>30){
        alert("El usuario debe tener un maximo de 30 caracteres!");
        return false;
    }

    else if (user == null || user == ""){
        alert("El campo de usuario no puede estar vacio!");
        return false;
    }

    else if(email.includes("@") == false || email.includes(".")){
        alert("Por favor ingresar un email valido!")
    }

    //validacion de los datos de la contraseña
    else if (password.length>100){
        alert("La contraseña debe tener un maximo de 100 caracteres!");
        return false;
    }

    else if(password == null || password == ""){
        alert("El campo de contraseña no puede estar vacia!");
        return false;
    }
    else{
        return true;
    }
}

function verificacionIniciar(){
    var user = document.getElementById("usuario").value;
    var password = document.getElementById("contrasena").value;
    var email = document.getElementById("email").value;

    //validacion de los datos del usuario
    if (user.length>30){
        alert("El usuario debe tener un maximo de 30 caracteres!");
        return false;
    }

    else if (user == null || user == ""){
        alert("El campo de usuario no puede estar vacio!");
        return false;
    }

    //validacion de los datos de la contraseña
    else if (password.length>100){
        alert("La contraseña debe tener un maximo de 100 caracteres!");
        return false;
    }

    else if(password == null || password == ""){
        alert("El campo de contraseña no puede estar vacia!");
        return false;
    }
    else{
        return true;
    }
}