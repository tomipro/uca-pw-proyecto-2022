
const registro_btn = document.querySelector("#pagar");

registro_btn.addEventListener("click", () => {
    login_container.classList.add("modo-registro");
});

login_btn.addEventListener("click", () => {
    login_container.classList.remove("modo-registro");
});

function verificacionTarjeta(){
    var cardnumber = document.getElementById("card-id").value;
    var cvv = document.getElementById("codigoseguridad").value;
    var exp = document.getElementById("fecha").value;
    var name = document.getElementById("nombre").value;

    //validacion de los datos de tarjeta
    if(name == null || name == ""){
        alert("El nombre del titular no puede estar vacio");
        return false;
    }
    else if (cardnumber.length!=8){
        alert("El numero de tarjeta debe contener 8 numeros");
        return false;
    }

    else if (cardnumber == null || cardnumber == ""){
        alert("El campo de numero de tarjeta no puede estar vacio");
        return false;
    }

    //validacion de los datos de cvv
    else if (cvv.length!=3){
        alert("El codigo de seguridad debe contener 3 numeros");
        return false;
    }

    else if(cvv == null || cvv == ""){
        alert("El codigo de seguridad no puede estar vacio");
        return false;
    }

    else{
        return true;
    }
}
    
const name = document.getElementById('name')
const password = document.getElementById('password')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) => {
  let messages = []
  if (name.value === '' || name.value ==C) {
    messages.push('Name is required')
  }

  if (password.value.length <= 6) {
    messages.push('Password must be longer than 6 characters')
  }

  if (password.value.length >= 20) {
    messages.push('Password must be less than 20 characters')
  }

  if (password.value === 'password') {
    messages.push('Password cannot be password')
  }

  if (messages.length > 0) {
    e.preventDefault()
    errorElement.innerText = messages.join(', ')
  }
})