<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logical stat</title>
    <style>
body {background-image: linear-gradient(120deg,#e05297, #fceef5, #f3bad6, #ea86b6);}
h1   {color: #8b5e83}
tr {font-size :30px}

</style>
</head>
<body>
<center>
  <h1>Happy Coding! 😄 </h1>  
 </center>

 <table style="width:100%" border="10px">
  <tr>
    <th>Num of Question</th>
    <th>The Solution</th>
  
  </tr>
  <tr>
    <td>Q1</td>
    <td><?php
function checkYear($my_year)
{
   if ($my_year % 400 == 0)
      print("Is a leap year");
   if ($my_year % 4 == 0)
      print("Is a leap year");
   else if ($my_year % 100 == 0)
      print("Isn`t a leap year");
   else
      print("Isn`t a leap year");
}
$my_year = 2022;
checkYear($my_year);
?>
    </td>
      </tr>


  <tr>
    <td>Q2</td>
    <td><?php
 $today = new DateTime();
 echo 'It`s ' . $today->format('m/d/Y');
 
 $spring = new DateTime('March 20');
 $summer = new DateTime('June 21');
 $fall = new DateTime('September 22');
 $winter = new DateTime('December 21');
 
 switch(true) {
     case $today >= $spring && $today < $summer:
         echo ' Spring';
         break;
 
     case $today >= $summer && $today < $fall:
         echo ' Summer';
         break;
 
     case $today >= $fall && $today < $winter:
         echo ' Fall';
         break;
 
     default:
         echo ' Winter';
 }  
?>
</tr>


  <tr>
    <td>Q3</td>
    <td>

    <?php
function sum($x, $y) 
{
    return $x == $y ? ($x + $y)*3 : $x + $y;
}
echo sum(4, 2)."\n";
echo sum(3, 4)."\n";
echo sum(8, 2)."\n";   

?>
    </td>
  </tr>


  <tr>
    <td>Q4</td>
    <td><?php
function diff($y) {
  $x = 100;

  if ($x > $y)
  {
return ($x - $y)*3;
  }
return $y - $x;
}
echo diff(53)."\n";
echo diff(30)."\n";
echo diff(51)."\n";  

?>

    </td>
  </tr>

  <tr>
    <td>Q5</td>
    <td><?php

function int($x,$y){
  $cal=1;
  if($x==30 || $y==30 || $y+$x==30){
    echo "True";
  }
  else{
    echo "False";
  }
}
int(20,2);
?>

    </td>
  </tr>
  <tr>
    <td>Q6</td>
    <td><?php
// function int($x){
//   if($x<=10 || $x<=100 || $x==200 ){
//     echo " Integer ";
//   }
//   else{
//     echo "Not Integer";
//   }
//   int(20,90);
// ?>

  
  <tr>
    <td>Q7</td>
    <td><?php
  function Multi($x){
    if($x >= 0){
        if($x % 3 == 0 && $x % 7 == 0){
            return " $x Multiple of 3 & 7";
        }
        elseif($x % 3 == 0) 
        {
            return " $x  Multiple of 3";
        }elseif($x % 7 == 0) 
        {
            return " $x Multiple Of 7";
        }else{
            return "$x  Not multiple of 3 or 7";
        }
    } else{
        return "Enter A positive number";
    }
}
echo Multi(1);
?>

    </td>
  </tr>
  <tr>
    <td>Q9</td>
    <td><?php

$str = "You Hungry.. Eat";
$arr = explode(" ",$str);
if("If" === $arr[0]){
    echo " String Unchanged";
} else{
    array_unshift($arr, "if");
    echo implode(" ",$arr);
}

?>
    </td>
  </tr>



  <tr>
    <td>Q10</td>
    <td><?php

?>

    </td>
  </tr>
  <tr>
    <td>Q11</td>
    <td><?php
     function integer($x, $y) 
     {
        return ($x <= 20 || $y >= 50) || ($y <= 20 || $x >= 50);
     }
    
     var_dump(integer(21, 30));

 
?>

    </td>
  </tr>
  <tr>
    <td>Q12</td>
    <td><?php

?>

    </td>
  </tr>
  <tr>
    <td>Q13</td>
    <td><?php

?>

    </td>
  </tr>
  <tr>
    <td>Q14</td>
    <td><?php
 function Accept($x, $y)
 {
    return $x == 5 || $y == 5 || $x + $y == 5 || abs($x - $y) == 5;
  }
   echo "";
   var_dump(Accept(4, 3));
echo "";
?>

    </td>
  </tr>
 
</table>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>













