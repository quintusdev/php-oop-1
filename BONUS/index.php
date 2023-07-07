<?php
    // Definizione della classe Movie
    class Movie {
        // Proprietà della classe Movie
        public $titolo;
        public $genere;
        public $anno;
        public $voto;
        public $prezzo_biglietto;

        // Costruttore della classe Movie
        function __construct($titolo, $genere, $anno, $voto, $prezzo_biglietto){
            // Inizializzazione delle proprietà dell'oggetto
            $this->titolo = $titolo;
            $this->genere = $genere;
            $this->anno = $anno;
            $this->voto = $voto;
            $this->prezzo_biglietto = $prezzo_biglietto;
        }

        // Metodo per impostare il prezzo finale del biglietto
        function setPrezzo($prezzo_biglietto){
            // Verifica se l'anno di uscita è precedente al 2015
            if($this->anno < 2015) {
                // Applica uno sconto di 10 al prezzo del biglietto
                $this->prezzo_biglietto =$prezzo_biglietto - 10;
            } else {
                // L'anno di uscita è successivo o uguale al 2015, il prezzo rimane invariato
                $this->prezzo_biglietto =$prezzo_biglietto;
            }
        }
        // Metodo per ottenere il prezzo finale del biglietto
        function getPrezzo(){
            return $this->prezzo_biglietto;
        }

    }
    // Creazione degli oggetti Movie
        /* FILM 1 */
            $movie1 = new Movie('Ritorno al futuro', 'Fantascienza', 1984, '9', 20);
            $movie1->setPrezzo($movie1->prezzo_biglietto);
        /* FILM2 */
            $movie2 = new Movie('La mummia', 'Horror', 2006, '7', 35);
            $movie2->setPrezzo($movie2->prezzo_biglietto);
        /* FILM 3 */
            $movie3 = new Movie('LOL', 'Comico', 2022, '8', 45);
            $movie3->setPrezzo($movie3->prezzo_biglietto);
        /* FILM 4 */
            $movie4 = new Movie('Boolean il film', 'Fantascienza', 2023, '10', 100);
            $movie4->setPrezzo($movie4->prezzo_biglietto);

    // Visualizzazione delle informazioni sui film
    echo "<pre>";
    echo "<hr/>";
    echo "<h2><strong>"."Primo Film:"."</strong></h2>";
    echo "<h3><strong>Genere: ".$movie1->genere."</strong></h4>";
    echo "<h3><strong>Anno di uscita: ".$movie1->anno."</strong></h4>";
    echo "<h3><strong>Voto: ".$movie1->voto."</strong></h4>";
    echo "<h3><strong>Prezzo Biglietto: ".$movie1->prezzo_biglietto."€"."</strong></h4>";
    echo "<hr/>";
    echo "<h2><strong>"."Secondo Film:"."</strong></h2>";
    echo "<h3><strong>Genere: ".$movie2->genere."</strong></h4>";
    echo "<h3><strong>Anno di uscita: ".$movie2->anno."</strong></h4>";
    echo "<h3><strong>Voto: ".$movie2->voto."</strong></h4>";
    echo "<h3><strong>Prezzo Biglietto: ".$movie2->prezzo_biglietto."€"."</strong></h4>";
    echo "<hr/>";
    echo "<h2><strong>"."Terzo Film:"."</strong></h2>";
    echo "<h3><strong>Genere: ".$movie3->genere."</strong></h4>";
    echo "<h3><strong>Anno di uscita: ".$movie3->anno."</strong></h4>";
    echo "<h3><strong>Voto: ".$movie3->voto."</strong></h4>";
    echo "<h3><strong>Prezzo Biglietto: ".$movie3->prezzo_biglietto."€"."</strong></h4>";
    echo "<hr/>";
    echo "<h2><strong>"."Quarto Film:"."</strong></h2>";
    echo "<h3><strong>Genere: ".$movie4->genere."</strong></h4>";
    echo "<h3><strong>Anno di uscita: ".$movie4->anno."</strong></h4>";
    echo "<h3><strong>Voto: ".$movie4->voto."</strong></h4>";
    echo "<h3><strong>Prezzo Biglietto: ".$movie4->prezzo_biglietto."€"."</strong></h4>";
    echo "<hr/>";
?>
