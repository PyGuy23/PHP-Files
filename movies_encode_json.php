<?php
//include 'imageLibrary.php'

$movies = array('IT' => 2.99, 'Cujo' => 3.99, 'Tales From the Darkside' => 5.99, 'Sometimes They Come Back' => 8.99);

$artWork = array('IT' => 'IT.jpg', 'Cujo' => 'Cujo.jpg');



echo json_encode($movies);

$moviesImage = 'IT.jpg';

header('Content-Type: image/jpeg');

$firstMove = array();
$secondMove = array();

$min = 1;
$max = 5;


$ranNum = rand($min, $max);

for($i = 0; $i < $ranNum; $i++){
  $firstMove[] = '<img src="Cujo2.jpg" >';
  $secondMove[] = '<img src="IT.jpg">';

  echo $firstMove[0];
  echo $secondMove[1];
}


//<a href="imageLibrary.php" title="Check it out">Go to the other page</a>

//works in php 7

//define('IMAGES', array('<img src="Cujo2.jpg">', '<img src="IT.jpg">')

 // );

 //echo IMAGES[1];

 define('MOVIES_VIEWABLE', true);


 $comedy = "Dilbert";

 echo constant("MOVIES_VIEWABLE_$comedy");

?>