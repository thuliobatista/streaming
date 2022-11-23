const search = document.querySelector(".search-box input"), // input de pesquisa
      imagens = document.querySelectorAll(".imagem-box"); // div com a imagem

search.addEventListener("keyup", e =>{
        if(e.key == "Enter"){
            let searcValue = search.value, // o valor da pesquisa
                value = searcValue.toLowerCase(); // transforma tudo em minusculo
                imagens.forEach(image =>{
                    if(value === image.dataset.name){
                        return image.style.display = "block";
                    }
                    image.style.display = "none";
                });
    }
});

search.addEventListener("keyup", () =>{
    if(search.value != "") return;

    imagens.forEach(image =>{
        image.style.display = "block";
    })
})