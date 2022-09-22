<!-- - è definita una classe ‘Movie’
=> all’interno della classe sono dichiarati degli attributi
=> all’interno della classe è definito un costruttore
=> all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a 
schermo i valori delle relative proprietà -->

<?php
//dichiaro le variabili di istanza
class Movie{       
    public $title;
    public $genre;
    public $year;

    //funzione di construct
public function __construct($filmTitle, $genreFilm, $yearFilm){
    $this->title =$filmTitle;
    $this->genre =$genreFilm;
    $this->year =$yearFilm;
}
//return titolo
public function getTitle(){
    return $this->title;

}
//return genere
public function getGenre(){
    return $this->genre; 
    
}
//return anno
public function getYear(){
    return $this->year; 
}

}