<?php


$favcolor = "red";


switch ($favcolor){
    case "blue":
      echo "faverout is blue";
    break;
    case "yellow":
        echo "faverout is yellow ";
    break;
    default: 
    echo "No exist colour red";
    
}


$d = date ('y/m/d');
$t = date ('h:i:s');

echo "<h1 style = color:blue>" . $d  . "</h1>";
echo "<h2 style = 'color: red'>" . $t . "</h2>";

echo "<h2> THe Examples Switch Case Loop  </h2>";

$x = 5 ;
switch ($x){
    case '6':
    echo '<br>' . 'the no. is 6';
    break;
    case '5':
    echo '<br>' . ' the no. is 5';
    break;
    case '4':
    echo '<br>' . ' the no. is 4';
    break;
    default:
    echo '<br>' . ' Not exist the no. that you need';
}

// While Looooooooooooooooooooop
echo "<h2> THe Examples to While Loop  </h2>";

$a = 9;
while ($a <= 11){
    echo " <br> <h3 style= 'color: green'> 
    This is loop </h3>  the no. is: $a . <br> " ;
    $a++;
    
}

$b = 0;
while ($b <= 100){
  echo "<p style= 'color: gray'> print Counter  from 0 to 100 is: </p> $b <br> ";
  $b+=20;
}


// DDoo While

echo "<h2> THe Examples to Do While Loop  </h2>";

$c = 5;
do {
  echo " this is pass" . 
   "<span style= 'color:blue'> 1 </ span> . $c <br>" ;
  $c++;
} while ($c <= 8);

echo "<h2> THe Examples to foreach Loop  </h2>";
// For Each (array values)
$ages = ['mousa'=> '2' , 'Ali' => '4' , 'Mazen' => '5'];
foreach($ages as $x => $num){
  echo 'the aged for kides are ' . 
   "<p style= 'color:green'> $x = $num  <p> <br>" ;
}


echo "<h2> THe Examples For Array  </h2>";

$names = ['Noah' , 'mariem' , 'Mousa', 'Hood'];
      echo  "My name is: <span style= 'color:red'>  $names[0] </span> <br> "  . 
      "And My sister is : <span style= 'color:red'> $names[1] </span><br>" .
      "My douters are <span style= 'color:red'> $names[2] </span>" .
       "And" . "<span style= 'color:red'> $names[3] </span> <br> <br>";
       
require 'main.php';
?>

