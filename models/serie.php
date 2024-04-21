<?php 
class Serie extends Production {
    public function __construct(string $titolo,string $lingua,int $voto,string $poster,array $generi, public int $stagioni) {
        parent::__construct($titolo, $lingua, $voto, $poster, $generi);
    }
}