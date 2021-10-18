const cep = document.querySelector("#cep")

function alimentarCampos(result){
    for(const campo in result){
        if(document.querySelector(`#${campo}`)){
            document.querySelector(`#${campo}`).value = result[campo]
        }
    }
}

cep.addEventListener("blur", (e) => {
    let search = cep.value.replace("-", "")
    const options = {
        method: "GET",
        mode: "cors",
        cache: "default"
    }

    fetch(`https://viacep.com.br/ws/${search}/json/`, options)
    .then((response) => response.json())
    .then(data => alimentarCampos(data))
    .catch(e => alert("Cep inexistente!" + e.message))
})