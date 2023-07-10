<?php
    class Movie {
        public $titolo;
        public $generi;
        public $anno;
        public $voto;
        public $prezzo_biglietto;

        function __construct($titolo, $generi, $anno, $voto, $prezzo_biglietto){
            $this->titolo = $titolo;
            $this->generi = $generi;
            $this->anno = $anno;
            $this->voto = $voto;
            $this->prezzo_biglietto = $prezzo_biglietto;
        }

        function setPrezzo($prezzo_biglietto){
            if($this->anno < 2015) {
                $this->prezzo_biglietto = $prezzo_biglietto - 10;
            } else {
                $this->prezzo_biglietto = $prezzo_biglietto;
            }
        }

        function getPrezzo(){
            return $this->prezzo_biglietto;
        }
    }

    class Genere {
        public $nome;

        function __construct($nome) {
            $this->nome = $nome;
        }
    }

    $generi = [
        new Genere('Fantascienza'),
        new Genere('Horror'),
        new Genere('Comico'),
        new Genere('Azione')
    ];

    $movie1 = new Movie('Ritorno al futuro', $generi, 1984, '9', 20);
    $movie1->setPrezzo($movie1->prezzo_biglietto);

    $movie2 = new Movie('La mummia', $generi, 2006, '7', 35);
    $movie2->setPrezzo($movie2->prezzo_biglietto);

    $movie3 = new Movie('LOL', $generi, 2022, '8', 45);
    $movie3->setPrezzo($movie3->prezzo_biglietto);

    $movie4 = new Movie('Boolean il film', $generi, 2023, '10', 100);

    $movie4->setPrezzo($movie4->prezzo_biglietto);

    echo "<pre>";
    echo "<hr/>";
    echo "<h1><strong>Primo Film:</strong></h1>";
    echo "<h2><strong>Genere: ";
    foreach ($movie1->generi as $genere) {
        echo $genere->nome . " ";
    }
    echo "</strong></h2>";
    echo "<h2><strong>Anno di uscita: ".$movie1->anno."</strong></h2>";
    echo "<h2><strong>Voto: ".$movie1->voto."</strong></h2>";
    echo "<h2><strong>Prezzo Biglietto: ".$movie1->prezzo_biglietto."€</strong></h2>";
    echo "<hr/>";
    echo "<h1><strong>Secondo Film:</strong></h1>";
    echo "<h2><strong>Genere: ";
    foreach ($movie2->generi as $genere) {
        echo $genere->nome . " ";
    }
    echo "</strong></h2>";
    echo "<h2><strong>Anno di uscita: ".$movie2->anno."</strong></h2>";
    echo "<h2><strong>Voto: ".$movie2->voto."</strong></h2>";
    echo "<h2><strong>Prezzo Biglietto: ".$movie2->prezzo_biglietto."€</strong></h2>";
    echo "<hr/>";
    echo "<h1><strong>Terzo Film:</strong></h1>";
    echo "<h2><strong>Genere: ";
    foreach ($movie3->generi as $genere) {
        echo $genere->nome . " ";
    }
    echo "</strong></h2>";
    echo "<h2><strong>Anno di uscita: ".$movie3->anno."</strong></h2>";
    echo "<h2><strong>Voto: ".$movie3->voto."</strong></h2>";
    echo "<h2><strong>Prezzo Biglietto: ".$movie3->prezzo_biglietto."€</strong></h2>";
    echo "<hr/>";
    echo "<h1><strong>Quarto Film:</strong></h1>";
    echo "<h2><strong>Genere: ";
    foreach ($movie4->generi as $genere) {
        echo $genere->nome . " ";
    }
    echo "</strong></h2>";
    echo "<h2><strong>Anno di uscita: ".$movie4->anno."</strong></h2>";
    echo "<h2><strong>Voto: ".$movie4->voto."</strong></h2>";
    echo "<h2><strong>Prezzo Biglietto: ".$movie4->prezzo_biglietto."€</strong></h2>";
    echo "<hr/>";
    echo "</pre>";
?>