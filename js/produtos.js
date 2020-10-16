function exibir_categoria(categoria){

let elementos = document.getElementsByClassName('boxproduto');
console.log(elementos);
for (var i=0; i<elementos.length; i++){
    console.log(elementos[i].id);
    if(categoria == elementos[i].id)
       elementos[i].style ="display:block";
    else
        elementos[i].style = "display:none";
    
}
}

function bigImg(x) {
    x.style.height = "200px";
    x.style.width = "200px";
  }
  
  function normalImg(x) {
    x.style.height = "120px";
    x.style.width = "120px";
  }