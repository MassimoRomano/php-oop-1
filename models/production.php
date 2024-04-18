<?php
class Production
{

    public $titolo;
    public $lingua;
    public $voto;
    public $poster;

    public function __construct($titolo, $lingua, $voto, $poster)
    {
        $this->titolo = $titolo;
        $this->lingua = $lingua;
        $this->voto = $voto;
        $this->poster = $poster;
    }

    public function __get($property)
    {
        /* se la proprieta cioe la variabile che abbiato dato c'e' */
        if (property_exists($this, $property)) {
            /* ce la restituisce cosi */
            return $this->$property;
        };
    }
    
}
