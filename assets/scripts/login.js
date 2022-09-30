const login_btn = document.querySelector("#login-btn");
const registro_btn = document.querySelector("#registro-btn");
const login_container = document.querySelector("#login-container");

registro_btn.addEventListener("click", () => {
    login_container.classList.add("modo-registro");
});

login_btn.addEventListener("click", () => {
    login_container.classList.remove("modo-registro");
});

