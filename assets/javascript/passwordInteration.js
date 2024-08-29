const inputPassword = document.getElementById("password")
const eye = document.getElementById("senhaOption");

eye.addEventListener("click", () => {
    if(eye.classList.contains("invisible")){
        inputPassword.setAttribute("type", "text");
        eye.setAttribute("src", "assets/img/icon/form/openEye.svg");

        eye.classList.remove("invisible")
        eye.classList.add("visible")

    }else {
        inputPassword.setAttribute("type", "password");
        eye.setAttribute("src", "assets/img/icon/form/closedEye.svg");

        eye.classList.add("invisible")
        eye.classList.remove("visible")
    }
})