<?php


/* ----------------- DESCRIÇÃO DO TESTE -----------------------*/

/*
Implemente uma função que ao receber um array associativo contendo arquivos e donos, retorne os arquivos agrupados por dono. 

Por exempolo, um array ["Input.txt" => "Jose", "Code.py" => "Joao", "Output.txt" => "Jose"] a função groupByOwners deveria retornar ["Jose" => ["Input.txt", "Output.txt"], "Joao" => ["Code.py"]].


*/

class FileOwners
{

    public static function groupByOwners($files)
    {
        //return NULL;
       // echo $files;
       $max =  sizeof($files);
        $cont = 0;
        $valor = [];
        $chave = [];

            foreach($files as $x => $x_value){
          // echo "<br>Key=" . $x . ", Value=" . $x_value;
            $valor[$cont] =  $x_value; 
            $chave[$cont] = $x;    
            foreach($files as $x => $x_value){
                //verifica se existe outro key para o valor, se existir concatena a key
                if($valor[$cont] == $x_value && $chave[$cont] != $x){
                    $chave[$cont].=" , ".$x;    
               
                
                }
            }
            
            $cont++;
             }
             //exibir valores

             $valor = array_unique($valor);
            
             echo "<hr><h3>File Owners [PHP]</h3>";

             for($i=0; $i<$max; $i++){
               //verifica se variável não esta vazia  
               if (@$valor[$i] != "" )
                echo '<br>["'.$valor[$i].'" =>'.'["'.$chave[$i].'"]]';
             }

    }
}
$files = array
(
    "Input.txt" => "Jose",
    "Code.py" => "Joao",
    "Output.txt" => "Jose",
    "Click.js" => "Maria",
    "Out.php" => "Maria",

);
var_dump(FileOwners::groupByOwners($files));




