<?php
/* ----------------- DESCRIÇÃO DO TESTE -----------------------*/

/*

A classe LeagueTablr acompanha o score de cada jogador em uma liga. Depois de cada jogo, 
o score do jogador é salvo utilizanod
a função recordResult.

O Rank de jogar na liga é calculado utilizando a seguinte lógica:

1- O jogador com a pontuação mais alta fica em primeiro lugar. O jogador com a pontuação mais baixa 
fica em último.
2- Se dois jogadores estiverem empatados, o jogador que jogou menos jogos é melhor posicionado.
3- Se dois jogadores estiverem empatados na pontuação e no número de jogos disputados, 
então o jogador que foi o primeiro na 
lista de jogadores é classificado mais alto.


Implemente a funação playerRank que retorna o jogador de uma posição escolhida do ranking.

Exemplo:

$table = new LeagueTable(array('Mike', 'Chris', 'Arnold'));
$table->recordResult('Mike', 2);
$table->recordResult('Mike', 3);
$table->recordResult('Arnold', 5);
$table->recordResult('Chris', 5);
echo $table->playerRank(1);


Todos os jogadores têm a mesma pontuação. No entanto, Arnold e Chris jogaram menos jogos do que Mike, 
e como Chris está acima de Arnold na lista de jogadores, ele está em primeiro lugar.

Portanto, o código acima deve exibir "Chris".


*/

class LeagueTable
{
	public function __construct($players)
    {
		$this->standings = array();
		foreach($players as $index => $p)
        {
			$this->standings[$p] = array
            (
                'index' => $index,
                'games_played' => 0, 
                'score' => 0,
                'jogos' => 0
            );
        }
	}
		
	public function recordResult($player, $score)
    {
		$this->standings[$player]['games_played']++;
        $this->standings[$player]['score'] += $score;
        $this->standings[$player]['jogos']++;
	}
	
	public function playerRank($rank)
    {
        echo "<br><hr>";
   //  var_dump($this->standings);   
        $maior = array();
        $cont = 0;

        foreach($this->standings as $index => $p){
      //  pega pontação só na primeira iteração, depois só muda o valor se pontuação for maior
        if($cont == 0){          
            $maior = $p;
            $jogador = $index;
        }
            //armazena sempre o maior pontuação na variável maior         
            else if($p['score'] > $maior['score']){            
                $maior = $p;
                $jogador = $index;
                    }
                //se caso as pontuação for igual e quantidade de jogos for menor    
                else if ($p['score'] == $maior['score'] && $p['jogos'] < $maior['jogos'] ){            
                    $maior = $p;
                    $jogador = $index;
            
        }    
        $cont++;
      

     }
     echo "<h3>League Table [PHP]</h3>";
     echo(" -Jogador ".$jogador." -Pontos ".$maior['score']." -Jogos ".$maior['jogos'])."<br>";

     
	}
}
      
$table = new LeagueTable(array('Mike', 'Chris', 'Arnold'));
$table->recordResult('Mike', 2);
$table->recordResult('Mike', 3);
$table->recordResult('Arnold', 5);
$table->recordResult('Chris', 5);
echo $table->playerRank(1);



