<?php

class Player {
    
    protected $items = [];
    function __construct(){

    }


    /* GETTERS*/

    public function getItems(){
        return $this->items;
    }

      /* SETTERS */
    public function setItems(){
        $this->items = $newitems;
    }


   public function move($move){
       $cords=$this->getCoords();

       $result[]=$coords[0] + $move[0];
       $result[]=$coords[1] + $move[1];
   }
}
