
<?php

class movie
{
    public $titolo;
    public $anno;
    public $genere;

    public function descrizione()
    {
        return "Il Film " . $this->titolo . " è uscito nelle sale cinema nel " . $this->anno . " ed è un genere " . $this->genere;
    }

    public function __construct($titolo, $anno, $genere)
    {
        $this->titolo = $titolo;
        $this->anno = $anno;
        $this->genere = $genere;
    }
}
