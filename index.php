<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>

    <body>
    
        <?php

        class Movie {

            public $title;
            public $language;
            public $genre;
            public $year;

            function __construct($_title, $_language, $_year, $_genre) {
            
                $this->title = $_title;
                $this->language = $_language;
                $this->year = $_year;
                $this->genre = $_genre;
    
            }

            function ReturnMovie() {
                echo "Titolo: $this->title Lingua: $this->language Anno: $this->year Genere: $this->genre" . "<br><br>";
            }

        }

        $movie1 = new Movie("Resident Evil", "English", "2002", "Action, Horror");
        $movie1->ReturnMovie();

        $movie2 = new Movie("Resident Evil 2 - Apocalypse", "English", "2004", "Action, Horror");
        $movie2->ReturnMovie();

        $movie3 = new Movie("Resident Evil 3 - Extinction", "English", "2007", "Action, Horror");
        $movie3->ReturnMovie();

        $movie4 = new Movie("Resident Evil 4 - Retribution", "English", "2012", "Action, Horror");
        $movie4->ReturnMovie();

        ?>

    </body>

</html>