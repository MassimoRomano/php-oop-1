<?php
require_once __DIR__ . "/../models/production.php";
require_once __DIR__ . "/../models/genre.php";
require_once __DIR__ . "/../models/film.php";
require_once __DIR__ . "/../models/serie.php";


/* GENERI */
$generi = [
    new Genre('Dramma', 'Breve descrizione del film'),
    new Genre('Azione', 'Breve descrizione del film'),
    new Genre('Azione', 'Breve descrizione del film'),
    new Genre('Azione, Giallo', 'Breve descrizione del film'),
    new Genre('Dramma', 'Breve descrizione del film'),
    new Genre('Azione, Psicologico', 'Breve descrizione del film')
];

/* FILM */
$films = [
    new Movie('The Shawshank Redemption', 'English', 9, 'https://m.media-amazon.com/images/M/MV5BNDE3ODcxYzMtY2YzZC00NmNlLWJiNDMtZDViZWM2MzIxZDYwXkEyXkFqcGdeQXVyNjAwNDUxODI@._V1_.jpg', [$generi[0]], 1000000, '2h 22min'),
    new Movie('The Godfather', 'English', 9, 'https://m.media-amazon.com/images/I/81B3U3Rv+hL._AC_UF1000,1000_QL80_.jpg', [$generi[1]], 5000000, '2h 55min'),
    new Movie('Pulp Fiction', 'English', 8, 'https://static.posters.cz/image/750/poster/pulp-fiction-cover-i1288.jpg', [$generi[2]], 3000000, '2h 34min'),
    new Movie('The Dark Knight', 'English', 9, 'https://m.media-amazon.com/images/I/91KkWf50SoL._AC_UF894,1000_QL80_DpWeblab_.jpg', [$generi[3]], 7000000, '2h 32min'),
    new Movie('Schindler\'s List', 'English', 8, 'https://static.wixstatic.com/media/9ff6b3_1da3aeb966864257be20b8faf3958426~mv2.jpg/v1/fill/w_640,h_740,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/9ff6b3_1da3aeb966864257be20b8faf3958426~mv2.jpg', [$generi[4]], 2000000, '3h 15min'),
    new Movie('Inception', 'English', 8, 'https://m.media-amazon.com/images/I/912AErFSBHL._AC_UF1000,1000_QL80_.jpg', [$generi[5]], 6000000, '2h 28min')
];


 

/* foreach ($films as $film) {
    echo '<br/>'.$film->titolo .' <br/> '.$film->lingua.' <br/> '.$film->voto. ' <br/> '.$film->poster.' <br/> ';
} */
