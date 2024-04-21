<?php
class Movie extends Production {
    public function __construct(string $titolo,string $lingua,int $voto, string $poster, array $generi,public float $profitti,public string $durata) {
        parent::__construct($titolo, $lingua, $voto, $poster, $generi);
    }
}