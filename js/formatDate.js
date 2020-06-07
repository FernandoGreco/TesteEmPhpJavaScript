// Escreva uma função que converta a data de entrada do usuário formatada como MM/DD/YYYY em um formato exigido por uma API (YYYYMMDD). O parâmetro "userDate" e o valor de retorno são strings.

// Por exemplo, ele deve converter a data de entrada do usuário "31/12/2014" em "20141231" adequada para a API.


function formatDate(userDate) {
  // format from M/D/YYYY to YYYYMMDD
  let dia = userDate.slice(3, 5);
  let mes = userDate.slice(0, 2);
  let ano = userDate.slice(6, 10);

  return ano+mes+dia;
  
}




var data = "formatDate: "+formatDate("12/31/2014");

console.log(data);
