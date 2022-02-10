
//1) cree une classe game : 
//    un attribut "$map" + getter/setter (tableau vide)

// 2)cree une methode "init()" qui va update la map vide et la remplir 
        cree une methode "showMap()"

// 3) creer une copie de la map qui servira de calque pour le deplacement du joueur

// 4) creer une classe Player avec $ items (tableau vide)



<?php

require "Player.php";

class Game {

    protected  $map = [];
    protected $player;
    function __construct($player){
    $this->player=$player;
    }


    public function init(){
        $map = [
            [0,0,0,0,"K"],
            [0,1,1,0,1],
            ["S",1,0,0,0],
            [0,0,0,1,"E"]
        ];
        $this->setMap($map);

    }

    /* GETTERS*/

    public function getMap(){
        return $this->map;
    }
    public function getplayer(){
        return $this->player;
    }
   

    /* SETTERS */

    public function setMap($newMap){
        $this->map = $newMap;
    }
    public function setPlayer($newPlayer){
        $this->player = $newPlayer;
    }



    public function showMap() {
        for($line = 0; $line < count($this->getMap()); $line++){
            for($cell = 0; $cell < count($this->getMap()[$line]); $cell++){
                echo $this->getMap()[$line][$cell];
            }
            echo "\n";
        }
    }


    public function launch(){
        echo "vous vous etes fait kidnapée par des trolls et vous etes prisonner dans un labyrinthe, pour sortir il faut recuperer la cle. \n";
       $choix=(int)rtrim(fgets(STDIN));
       $this->playerChoice($choix); 
    }

    private function playerChoice($choix){
        $end = false;
        $map = $this->getMap();
        do{
            if($choix === 1){
                echo "vous allez en haut...\n";
                $move=[-1,0];
                $this->getPlayer()->move($move);
            }elseif($choix === 2){
                echo "vous allez a droite...\n";
                $this->getPlayer()->droite($player);
            }elseif($choix === 3){
                echo "vous allez en bas\n";
                $this->getPlayer()->bas($player);
            }elseif($choix === 4){
                echo "vous allez a gauche\n";
                $this->getPlayer()->gauche($player);
            }else{
                echo "Choisissez entre 1, 2 , 3 et 4\n";
                $this->launch();
                
            }
        }while(!$end);
        
    }
}
$player= new Player();    
$game= new Game($player); 
$game->init();
$game->showMap();
$game->launch();








