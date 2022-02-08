<?php
// $a = 10;
// $b =5;
// if($a%$b==0){
//     echo $a.' кратно '.$b;

// }
///////////////////////////////////////////
// $a = 10;
// $b =5;
// echo '1-'.$a,',  2-'.$b.'<br/>';

// if($a>$b){
//     echo $a*$a;
// }else{
//    echo $b*$b;
// }
////////////////////////////////////////////

// $month = 2;
// switch ($month) {
//     case 1:
//         case 3:
//             case 5:
//                 case 7:
//                     case 8:
//                         case 10:
//                             case 12:

//         $days = 31;

//     break;    
        
//     case 2 :
//         $days = 28;
//         break;

//     case 4:
//         case 6:
//             case 9:
//                 case 11:
//         $days = 30;
//         break;    

//     default:
//         echo 'ERROR';
//         break;
// }
// echo 'month - '.$month.'<br/>';
// echo 'Days in month - '.$days;
///////////////////////////////////////////////

// $year = 1904;
// if($year % 4 == 0 && $year % 100 !== 0 || $year % 400 == 0){
//     echo $year.' - leap yaer';
// }else{
//     echo $year.' - not leap yaer';
// }
/////////////////////////////////////////

// $a =10;
// $b =8 ;
// echo '1)'.$a,' ,  2)'.$b.'<br/>';
// if($b%3==0){
//     echo $a+$b;

// }else if($b!=0){
//     echo $a/$b;
// }
/////////////////////////////////////////

// $id_session = 1;
// if($id_session == 0){
// ?>
<!-- // <style>

// </style>
// <h1>Please regidter</h1>
// <br/>
// <span>id_session = 0;</span>


// <form action="">
//     <br/>
//     <input type="text" placeholder="Login">
//     <input type="password" placeholder="Password">
// </form>

// <?php
// }else{
//     ?>
// <h1>You already regidter</h1>
// <br/>
// <span>id_session = 1;</span>
// <br/>
// <a href="">Login</a> -->

 <?php

// }
?>

<?php 
$x =200;
$y=130;
$color = 'red';

echo 'X - '.$x.'<br/>'.'Y - '.$y.'<br/>'.'Color - '.$color.'<br/>'.'<div style="position:absolute;left:'.$x.';top:'.$y.'; width:100px;height:100px;background:'.$color.';"><div/>';