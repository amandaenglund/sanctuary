<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Resultat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>


<?php

class SanctuaryThings {
    protected $image = '';
    
    public function draw() {
        echo "<img src='./images/$this->image' height='250px;' onclick='alert(\"ap-ljud\")'; class='apa'/>";
    }
    
}



class Apa extends SanctuaryThings {
    
    protected $image = 'apa.jpg';
    
}

class Giraff extends SanctuaryThings {
    
    protected $image = 'giraff.jpg';
    
}

class Tiger extends SanctuaryThings {
    
    protected $image = 'tiger.jpg';

}

class Kokos {
    public function draw() {
        echo "<img src='./images/kokos.jpg' height='250px;'>";
    }
}



$apa = new Apa();
$giraff = new Giraff();
$tiger = new Tiger();
$kokos = new Kokos();

$apa -> draw();
$giraff -> draw();
$tiger -> draw();
$kokos -> draw();


?>
    
</body>
</html>