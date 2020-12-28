<?php

/* 1 */
for($x=1; $x<=10; $x++)
{
 if($x< 10)
 {
 echo "$x-";
 }
 else
  {
 echo "$x";
  }
}
echo "<hr>";

/* 2 */
$sum = 0;
for($x=1; $x<=30; $x++)
{
$sum +=$x;
}
echo "The sum of the numbers 0 to 30 is $sum"."\n";
echo "<hr>";

/* 3c */


/* 3b */


/* 4*/

/* 5*/

$n = 5;
$x = 1;
for($i=1;$i<=$n-1;$i++)
{
 $x*=($i+1); 
}
echo "The factorial of  $n = $x";

/* 6*/
function fib($n) 
{ 
    if ($n <= 1) 
        return $n; 
    return fib($n - 1) +  
           fib($n - 2); 
} 
  
// Driver Code 
$n = 9; 
echo fib($n); 
echo "<hr>";
function factorial($n) 
{ 
    if ($n == 0) 
        return 1; 
    return $n * factorial($n - 1); 
} 
  
    $num = 4; 
    echo "Factorial of ", $num, " is ", factorial($num); 
    echo "<hr>";


/* 7*/
$text="OrangeAcademy";
$search_char="c";
$count="0";
for($x="0"; $x< strlen($text); $x++)
  { 
    if(substr($text,$x,1)==$search_char)
    {
    $count=$count+1;
	 }
  }
echo $count."\n";
echo "<hr>";

/* 8*/
echo "<table border =\"1\" style='border-collapse: collapse'>";
for($i=1;$i<=6;$i++)
{
echo "<tr>";
for ($j=1;$j<=5;$j++)
  {
  echo "<td>$i * $j = ".$i*$j."</td>";
  }
  echo "</tr>";
  }
    echo "</table>";
    echo "<hr>";

/* 9*/

/* 10*/

/* 11*/

/* 12*/

/* 13*/

/* 14 */
echo "<pre>";
for ($row = 0; $row < 11; $row++) {
    for ($col = 0; $col <= 11; $col++) {
        if ($col == 1 or (($row == 0 or $row == 5 or $row == 10) and ($col < 10 and $col > 1)) or ($col == 10 and ($row != 0 and $row != 5 and $row != 10))) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
echo "</pre>";
echo "<hr>";

/* 15 */

echo "<pre>";
for ($row = 0; $row < 11; $row++) {
    for ($col = 0; $col <= 11; $col++) {
        if (($col == 1 and ($row != 0 and $row != 10)) or (($row == 0 or $row == 10) and ($col > 1 and $col < 9)) or ($col == 9 and ($row == 1 or $row == 9))) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
echo "</pre>";
echo "<hr>";

/* 16*/

for($row=1;$row<=8;$row++)
{
   for ($star=1;$star<=$row;$star++)
    {
     echo "     * ";
     }
 echo "<br>";
}
for($i=0;$i<=8;$i++)
{  
for($j=8-$i;$j>=1;$j--)
{  
echo "    * ";  
}  
echo "<br>";  
} 
echo "<hr>";

$alpha = range('A', 'Z');  
for ($i=5; $i>=1; $i--) {    
  for($j=0; $j<=$i; $j++) {    
     echo '  ';    
  }  
  $j--;  
for ($k=0; $k<=(5-$j); $k++) {    
    echo  $alpha[$k];   
}    
echo "<br>\n";  
}  
$alpha = range('A', 'Z');  
for ($i=1; $i>=5; $i++) {    
  for($j=0; $j<=$i; $j++) {    
     echo '  ';    
  }  
  $j++;  
for ($k=5; $k<=(0+$j); $k--) {    
    echo  $alpha[$k];   
}    
echo "<br>\n";  
}  


?>