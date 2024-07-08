

 <?php 
 
 



// Ostad Requirment  Number Hiar 

$num1 = 4;
$num2 = 5;
$num3 = 6;


if ($num1 >= $num2 && $num1 >= $num3) { 
    echo " Largest Number Is: ",$num1 ;

}elseif(isset($num1) && $num2 >= $num3) { 
    echo " Largest Number Is: ", $num2 ;
}else{
    echo  " Largest Number Is: ",$num3;
}



// function find_largest_number($num1, $num2, $num3) {
//     if ($num1 >= $num2 && $num1 >= $num3) {
//         return $num1;
//     } elseif ($num2 >= $num1 && $num2 >= $num3) {
//         return $num2;
//     } else {
//         return $num3;
//     }
// }



// $largest_number = find_largest_number($num1, $num2, $num3);
// echo "The largest number is: $largest_number";


?>



 
