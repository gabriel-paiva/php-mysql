const inputs = document.querySelectorAll(".field");
const button = document.querySelector("button");
const error = document.querySelectorAll("form span");
const link = document.querySelector("form a");

setTimeout(function(){
    button.classList.remove("noOpacity");
    button.classList.add("outIn");

    if(link){
        link.classList.remove("noOpacity");
        link.classList.add("outIn");
    }
    inputs.forEach(element => {
        element.classList.remove("noOpacity");
        element.classList.add("outIn");
    });

    error.forEach(element => {
        element.classList.remove("noOpacity");
        element.classList.add("outIn");
    });


}, 300)