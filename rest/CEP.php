<?php


/* ----------------- DESCRIÇÃO DO TESTE -----------------------*/

/*

Postmon é uma API para consultar CEP e encomendas de maneira fácil.

Implemente uma função que recebe CEP e retorna todos os dados reltivos ao endereço correspondente.

Exemplo:

getAddressByCep('13566400') retorna:
{
	"bairro": "Vila Marina",
	"cidade": "São Carlos",
	"logradouro": "Rua Francisco Maricondi",
	"estado_info": {
	"area_km2": "248.221,996",
	"codigo_ibge": "35",
		"nome": "São Paulo"
	},
	"cep": "13566400",
	"cidade_info": {
		"area_km2": "1136,907",
		"codigo_ibge": "3548906"
	},
	"estado": "SP"
}



Documentação:
https://postmon.com.br/


*/

class CEP
{
    public static function getAddressByCep($cep)
    {
		
		
		@$json_file = file_get_contents("https://api.postmon.com.br/v1/cep/".$cep);
		$json_str = json_decode($json_file, true);
		

		if (empty($json_file))
		return "CEP não encontrado";
		else
		return $json_str;

    }
}

echo "<hr><h3>Busca de dados através do CEP [PHP]</h3>";

var_dump(CEP::getAddressByCep('06110210'));


echo "<hr><h3>SQL Pets</h3>";
echo "
select name from dogs D FULL OUTER JOIN cats C ON D.Value = C.Value WHERE D.Value IS NULL OR C.Value IS NULL";

echo "<h3>SQL Students</h3>";

echo "
select COUNT(firstName) FROM students WHERE firstName = 'Jhon'";