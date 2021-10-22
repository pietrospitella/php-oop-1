<?php 

//    Definita una classe ‘Movie’
//    => all'interno della classe sono dichiarate delle variabili d'istanza
//    => all'interno della classe è definito un costruttore
//    => all'interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

    class Movie {
        public $title;
        public $year = 0;
        public $vote = 0;

        function __construct($_title,$_year)
        {
            $this->title = $_title;
            $this->year = $_year;
        }

        function voteColor($_vote){
            if ($_vote > 8){
                echo '<p style="color: red">'.$_vote.'</p>'; 
            } else {
                echo '<p style="color: blue">'.$_vote.'</p>'; 
            }
        }
    }

    $first = new Movie('Iron Man', 2008);
    
    echo $first->title.'<br>';
    echo $first->year.'<br>';
    echo $first->voteColor(8).'<br>';

    $second = new Movie('The Avengers', 2012,);

    echo $second->title.'<br>';
    echo $second->year.'<br>';
    echo $first->voteColor(9).'<br>';

    
?>