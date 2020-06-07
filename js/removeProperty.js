// Implemente a função removeProperty, que recebe um objeto e o nome de uma propriedade.

// Faça o seguinte:

// Se o objeto obj tiver uma propriedade prop, a função removerá a propriedade do objeto e retornará true;
// em todos os outros casos, retorna falso.

function removeProperty(obj, prop) {
  if(prop!="")
     return delete obj[prop];
  else
      return false;
}

// Create an object
var car = {type:"Fiat"};
var sobrenome = {sobrenome:""};



console.log("removeProperty "+removeProperty(car,'type'));

console.log("removeProperty "+removeProperty(sobrenome,""));
