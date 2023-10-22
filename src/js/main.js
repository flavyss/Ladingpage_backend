const menu = () => {
    let ativa = document.querySelector(".ativa")
    let campo = document.querySelector("nav.menu ul")
    let fecha = document.querySelector(".fecha")

    ativa.addEventListener("click", () => {
        if(campo.classList.contains("ativa")){
            campo.classList.remove("ativa")
        }
        else{
            campo.classList.add("ativa")}
    })
    fecha.addEventListener("click", () => {
        campo.classList.remove("ativa")
    })
}

menu()
