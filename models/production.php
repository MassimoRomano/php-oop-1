<?php
class Production{
    public function __construct(public string $titolo,public string $lingua,public int $voto,public string $poster,public array $genere){}

    public function __get($property)
    {
        /* se la proprieta cioe la variabile che abbiamo dato c'e' */
        if (property_exists($this, $property)) {
            /* ce la restituisce cosi */
            return $this->$property;
        }
    }
}

