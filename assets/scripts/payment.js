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
    else if (cardnumber.length!=16){
        alert("El numero de tarjeta debe contener 16 numeros");
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
      alert("Gracias por tu compra!");
      return true;
    }
}

