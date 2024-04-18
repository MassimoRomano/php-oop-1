<?php
require_once __DIR__ . '/genre.php';
class Production{
    public function __construct(public string $titolo,public string $lingua,public int $voto,public string $poster,public Genre $genere){}

    public function __get($property)
    {
        /* se la proprieta cioe la variabile che abbiato dato c'e' */
        if (property_exists($this, $property)) {
            /* ce la restituisce cosi */
            return $this->$property;
        }
    }
}

