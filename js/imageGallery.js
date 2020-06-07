
// Uma galeria de imagens é um conjunto de imagens com botões de remoção correspondentes.
// Este é o código HTML de uma galeria com duas imagens:

// <div class="image">
//   <img src="https://goo.gl/kjzfbE" alt="First">
//   <button class="remove">X</button>
// </div>
// <div class="image">
//   <img src="https://goo.gl/d2JncW" alt="Second">
//   <button class="remove">X</button>
// </div>


// Implemente uma função de configuração que ao receber um evento de click implementa a seguinte lógica:
// * Quando o botão da classe "remove" é clicado, seu elemento div pai deve ser removido da galeria


// Por exemplo, depois que a primeira imagem da galeria acima foi removida, o código HTML ficaria assim:

// <div class="image">
//   <img src="https://goo.gl/d2JncW" alt="Second">
//   <button class="remove">X</button>
// </div>



function setup (id) {
    let element = document.getElementById(id);
        element.parentNode.removeChild(element);
}

/* Example case. 
document.body.innerHTML = `
<div class="image" id="first">
  <img src="https://goo.gl/kjzfbE" alt="First">
  <button class="remove" onclick="setup('first')">X</button>
</div>
<div class="image" id="second">
  <img src="https://goo.gl/d2JncW" alt="Second">
  <button class="remove"  onclick="setup('second')">X</button>
</div>`;
*/
