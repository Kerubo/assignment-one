<?php
/*
*The conditional statements
*We will handle the if else statement
* and later the switch  statement
*/

//Variable Declaration and Initializations
 $english=78;
 $Kiswhaili=76;
 $Maths    =92;
 $results = 246;
 
 /*we are now going to execute the code using the if else statement*/
 if ($results >= 246) { 
    echo "Passed very well:thumbs up<br />";
}
elseif ($results < 235{
    echo "Pull up: Grade B <br />";
}
elseif ($results <= 220) {
    echo "Yo will be given a chance <br />";
}
else {
    echo "Failed <br />";
}
//This is the end of the if else statement
echo "<br/><br/>";
/*
 *Switch statement
 */
 
 // in this case we are going to use an array
 $months = array("January","February","March","April");

	foreach ($months as $months){

	switch ($months) {

	case 1:
	echo " is in the list";
	break;

	case 0:
	echo "January is in the list";
	break;

	case 6:
	echo "july  is not the list";
	break;

	default:
	if ($months != array("January","February","March","April")) {
	echo "Well this is how it works,how lovely<BR>";
}	

	}

}




?>
