<?php
/**functions
*we are going to call a function
*A function is a block of statement
*
*/
<?php
function CalculateArea() {
   echo "we are going to calculate the area of a circle<br><br>";
}

CalculateArea();
//we are going to declare and initialize some variables
$diameter = 28.0;
$pi = 3.14;
$radius= $diameter/2;

echo "diameter $diameter<br>pi 
$pi "

function circleArea($diameter, $pi) 
{
    $area = $radius* $radius* $pi; 
    return $area; 
} 

echo circleArea ($diameter,$pi); 
echo "It was going to be this way";