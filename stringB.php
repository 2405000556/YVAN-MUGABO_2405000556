<!DOCTYP<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>main book</title>
</head>
<body>

<?php 
    $sentance = "The main body of a book";


    echo strtolower($sentance) . "<br>";


    echo strtoupper($sentance) . "<br>";


    $g = "The main body of a book" ;

    $d = str_replace(" book"," college" , $g);
    echo $d. "<br>";


echo strlen($sentance). "<br>";
echo $sentance [4];

?>

</body>
</html>