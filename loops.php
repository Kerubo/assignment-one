<?php
/*Loops in PHP are used to execute the same block of code a specified number of times.
 * for - loops through a block of code a specified number of times.
 *while - loops through a block of code if and as long as a specified condition is true.
 * do...while - loops through a block of code once, and then repeats the loop as long as a special condition is true.
 * for-each - loops through a block of code for each element in an array.
 */
echo"These are  the common loops in php<br>we will execute the the for-loops first";

//declaring an array of months
$month = array(
       'January';
       'February';
       'March';
       'April';
       'May';
       'June';
       'July';
       'August';
       'September';
       'October';
       'November';
       'December';
       );
   // using a for loop we are going to loop over the arrays of months
   echo"<BR> <BR> These are the months of the year yahoo! He he he";  
      
        for ($i=0; $i<count($month); $i++)/*here we are defining the conditions under which the code will be executed */
        {
              if ($i === 6)
              /* in this case if the month lies in the specified position then the following statement will be echoed out*/ 
              {
            unset($month[$i]);
        }
        echo "This is the best month of the year: ".count($month). " - Position: ".$i."<br>";
    }
    echo "<br> I just love months of the year: ".count($month)."<br>";  
    
    //we will now take a lovely step towards another loop, come
    foreach($months as $months){
echo"<br><br>This is a foreach<br>$months<br>";    
    }
    //well the loops are not over yet we have two more to go
    // the while and the do-while
    //we are going to declare a couple of variable to initiate the execution of the code using the while loop.
   
 $lolipop=12;
    $samaki=100;
    $biscuit=6;
    
    echo"Now you choose for yourself";
    
    while($samaki<76)//this gives in the condition for execution
                    //if the condition is true then the code below will be executed 
                    {
    	echo "Then samaki is so sweat... Ya..a.a.amy";
    	
    //we are finally going to use the do-while loop, this was quite a piece of work
    // I will declare another variable right here and now
    $orange=24;
    $banana=56;
    //banana seems to be more expensive as compared to the apple
    
do {
	echo "Mmmmm...I love Matokes! *oooh...yum yum yum*";
} while ($banana < 27;)

    
?>
