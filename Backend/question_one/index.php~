<?php
//I am going to go through the conditional statements
echo"Below are the months of the year<br>; 
$months = array(
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July ',
    'August',
    'September',
    'October',
    'November',
    'December',
);

$current = date('F');
$start = array_search($current, $months);

$toshow = array();
$total = 0;
for($i = $start; $total < 8; $i--)
{
    if($i == 0)
    {
        $i = 12;
    }

    $toshow[] = $months[$i];
    $total++;
}

var_dump($toshow);
?>
