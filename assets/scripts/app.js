window.addEventListener("scroll", function () {
    var navbar = this.document.querySelector("nav");
    navbar.classList.toggle("sticky", window.scrollY > 50);
});

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

// if checkbox with id="check-priv-pub" is checked add class "privado" to element with id="inventario"
// else remove class "privado" from element with id="inventario"
function privado() {
    var checkBox = document.getElementById("check-priv-pub");
    var inventario = document.getElementById("inventario");
    if (checkBox.checked == true) {
        inventario.classList.add("privado");
    } else {
        inventario.classList.remove("privado");
    }
}


function getRandomInt(max) {
    return Math.floor(Math.random() * max);
}

document.getElementById("refresh-button").addEventListener("click", function () {
    fotosRandom();
});


function fotosRandom() {
    var n = 40;
    var lista = [];
    var string = [];
    var image = "";
    var random = getRandomInt(n);

    for (var i = 0; i < n; i++) {
        while (lista.includes(random)) {
            random = getRandomInt(n);
        }
        lista.push(random);
    }

    // console.log(lista);

    for (var j = 0; j < n; j++) {
        string[j] = './assets/imgs/nft-art/';
        string[j] += lista[j] + '.jpeg';
        image[j] = string[j];
        // console.log(string[j]);
    }

    for (var k = 0; k < n; k++) {
        var strI = "gallery" + k;
        var foto = document.getElementById(strI);
        foto.src = string[k];
    }
};

//prueba lucas js
document.getElementById()

