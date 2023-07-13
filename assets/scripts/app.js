window.addEventListener("scroll", function () {
    var navbar = this.document.querySelector("nav");
    navbar.classList.toggle("sticky", window.scrollY > 50);
});

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
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
        string[j] = '../imgs/nft-art/';
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

function abrir() {
    document.getElementById("editar-arte").style.display = "block";
}
  
  function cerrar() {
    document.getElementById("editar-arte").style.display = "none";
}