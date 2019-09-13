<?php


class Character 
{

    public $healt;

    public $mana;
    public $stuff;

    function __construc(){

    }

    function __destruct(){

    }

    public function chat(){

        $string = echo "STRING";

        return $string;
    };
}

class Orc extends Character 
{
    public $healt = 1000;

    public function useHammer(){

        $bool = true;
        return $bool;
    };

    public function useSword(){

        $bool = false;
        return $bool;
    };


}

class Stuff 
{

    public $head = 'head';

    public $body = 'body';
    public $weapon = 'weapon';

    function __construc(){

    }

    function __destruct(){

    }

    public function view(){

        $string = echo "STRING";

        return $string;
    };
}