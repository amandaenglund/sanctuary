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



class Apa {
    public function draw() {
        echo "<img src='./images/apa.jpg' height='250px;' onclick='alert(\"ap-ljud\")'; class='apa'/>";
    }
}

class Giraff {
    public function draw() {
        echo "<img src='./images/giraff.jpg' height='250px;' onclick='alert(\"giraff-ljud\")'; class='giraff'/>";
    }
}

class Tiger {
    public function draw() {
        echo "<img src='./images/tiger.jpg' height='250px;' onclick='alert(\"tiger-ljud\")'; class='tiger'/>";
    }
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