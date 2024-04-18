<?php 
require_once __DIR__."/production.php";
require_once __DIR__."/genre.php";



$film1= new Production('The Shawshank Redemption','English', 9,'https://m.media-amazon.com/images/M/MV5BNDE3ODcxYzMtY2YzZC00NmNlLWJiNDMtZDViZWM2MzIxZDYwXkEyXkFqcGdeQXVyNjAwNDUxODI@._V1_.jpg',new Genre('Dramma','Hai un paragrafo che descrivere brevemente il film che si sta per scegliere'));
$film2 = new Production('The Godfather', 'English', 9, 'https://m.media-amazon.com/images/I/81B3U3Rv+hL._AC_UF1000,1000_QL80_.jpg',new Genre('Azione','Hai un paragrafo che descrivere brevemente il film che si sta per scegliere'));
$film3 = new Production('Pulp Fiction', 'English', 8, 'https://static.posters.cz/image/750/poster/pulp-fiction-cover-i1288.jpg',new Genre('Azione','Hai un paragrafo che descrivere brevemente il film che si sta per scegliere'));
$film4 = new Production('The Dark Knight', 'English', 9, 'https://m.media-amazon.com/images/I/91KkWf50SoL._AC_UF894,1000_QL80_DpWeblab_.jpg',new Genre('Azione,Giallo','Hai un paragrafo che descrivere brevemente il film che si sta per scegliere'));
$film5 = new Production('Schindler\'s List', 'English', 8,'https://static.wixstatic.com/media/9ff6b3_1da3aeb966864257be20b8faf3958426~mv2.jpg/v1/fill/w_640,h_740,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/9ff6b3_1da3aeb966864257be20b8faf3958426~mv2.jpg',new Genre('Dramma','Hai un paragrafo che descrivere brevemente il film che si sta per scegliere'));
$film6 = new Production('Inception', 'English', 8, 'https://m.media-amazon.com/images/I/912AErFSBHL._AC_UF1000,1000_QL80_.jpg',new Genre('Azione,PSicologico','Hai un paragrafo che descrivere brevemente il film che si sta per scegliere'));

$films=[$film1,$film2,$film3,$film4,$film5,$film6];

foreach ($films as $film) {
    echo '<br/>'.$film->titolo .' <br/> '.$film->lingua.' <br/> '.$film->voto. ' <br/> '.$film->poster.' <br/> ';
}