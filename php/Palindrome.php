<?php

/* ----------------- DESCRIÇÃO DO TESTE -----------------------*/

/*
Um palíndromo é uma palavra que pode ser lida  da mesma maneira da esquerda para direita, como ao contrário.
Exemplo: ASA.

Faça uma função que ao receber um input de uma palavra, string, verifica se é um palíndromo 
retornando verdadeiro ou falso.
O fato de um caracter ser maiúsculo ou mínusculo não deverá influenciar no resultado da função.

Exemplo: isPalindrome("Asa") deve retonar true.
*/




class Palindrome
{
    public static function isPalindrome($word)
    {
        //deixa letra minuscula
        $word = strtolower($word);

        //pega o tamanho da string
        $size = strlen($word);

        //cria string ao contrario da word
        $contrario = '';

        for($i = $size-1; $i >= 0; $i--){
        //preenche string ao contrário de palavra original    
        $contrario .= $word[$i];
          }
          //verifica se palavra é Palindrom
          if($contrario == $word)
            return true;
                else
                    return false;

      
    }
}
echo "<hr><h3>Palindrome [PHP]</h3>";
var_dump (Palindrome::isPalindrome('Deleveled'));

var_dump (Palindrome::isPalindrome('outra'));