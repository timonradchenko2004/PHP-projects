<?php

// $arr = [3,7,5,2,8,45,7,12,9,10];
// $even=array();
// $sum = array_sum($arr);
// $avg = array_sum($arr) / count($arr);

// for ($i=0; $i <count($arr)-1 ; $i++) { 
//     if($arr[$i] < $arr[$i+1]){
//         echo $arr[$i+1].',';
//     }
// }
// for ($i=0; $i < count($arr) ; $i++) { 
//     if($arr[$i] % 2 != 0){
//         $even[$i] = $arr[$i];
//     }
// }

// array_multisort($even);

// echo " </br>Sum - ".$sum." , AVG - ".round($avg).'</br>';
// echo "Sorted elemnts: ";
// foreach ($even as $value) {
//     echo $value.',';
// }
//////////////////////////////////////////////////////
// $arr = ["12-5-2019","12-4-2019","12-3-2021","12-12-2019","12-9-2019"];
// for ($i=0; $i < count($arr); $i++) { 

//     $temp1[$i] = explode('-',$arr[$i]);
// }
// $time =  (int)($temp1[0][2]*12*30) + (int)$temp1[0][0] + (int)$temp1[0][1]*30;
// $time1 =  (int)($temp1[1][2]*12*30) + (int)$temp1[1][0] + (int)$temp1[1][1]*30;
// $time2 =  (int)($temp1[2][2]*12*30) + (int)$temp1[2][0] + (int)$temp1[2][1]*30;
// $time3 =  (int)($temp1[3][2]*12*30) + (int)$temp1[3][0] + (int)$temp1[3][1]*30;
// $time4 =  (int)($temp1[4][2]*12*30) + (int)$temp1[4][0] + (int)$temp1[4][1]*30;

// for ($i=0; $i <count($arr) ; $i++) { 
//     echo  $arr[$i].' , ';
// }
// echo "</br></br></br>   ";
// echo  $arr[0].'  -  '.$arr[1].' = '.($time - $time1)."</br>";
// echo  $arr[2].'  -  '.$arr[3].' = '.($time3 - $time4)."</br>";
// echo  $arr[4].'  -  '.$arr[1].' = '.($time2 - $time4)."</br>";
// echo  $arr[2].'  -  '.$arr[1].' = '.($time3 - $time1)."</br>";
//////////////////////////////////////////////////////////////////////////////////////

// $type = [['text','text1'],['submit','radioboxt1'],['radiobox','tbuttont1'],['button','text1'],['checkbox','tcheckbox1']];


// for ($i=0; $i < count($type) ; $i++) {
     
//     for ($j=0; $j < 1; $j++) { 

//         echo '<input type= "'.$type[$i][$j].'"  value= "'.$type[$i][$j+1].'"></br>';
//     }
 
// };
////////////////////////////////////////////////////////////////////////////////

// $type = [['round','60','90',"green"],['rectangle','34','123',"red"],['rec1','123','206',"black"]];

// for ($i=0; $i < count($type) ; $i++) { 
//     for ($j=0; $j < count($type[0])-3 ; $j++) { 
//         echo '<div style=" position:absolute; background:'.$type[$i][$j+3].'; width:100px; height:100px; left:'.$type[$i][$j+1].'px;top:'.$type[$i][$j+2].';"    ></div>';
//     }
// }

////////////////////////////////////////////////////////////////////////////////////////////////

// $proc = ['Ryzen','Amd','3,4ghz','CPU'];
// $plat = ['MSI','AM4','DDR4','Плата'];
// $pam = ['Corsair','DDR4','8GB','Память'];
// $pamv = ['Kingstone','SSD','240GB',"Память"];
// $block = ['Power Smart','1450','3,4ghz',"Питание"];

// $arr = [$proc,$plat,$pam,$pamv,$block];

// for ($i=0; $i < count($arr) ; $i++) {
//     echo '<div style="background-color:rgb('.rand(1,255).','.rand(1,255).','.rand(1,255).'); float:left; width:200px; flex-direction:column;">';
 
//     for ($j=0; $j <count($arr[0]) ; $j++) { 
//       echo '<div style="display:block; margin:20px;">'.$arr[$i][$j].'</div>';
//     }
//     echo '</div>';

// }
// echo '<div style="background-color:rgb('.rand(1,255).','.rand(1,255).','.rand(1,255).'); float:left;  width:400px; "> Result: </br>';
// for ($i=0; $i < count($arr) ; $i++) {
//     echo $arr[$i][3].': <div style="display:inline-block">';
//     for ($j=0; $j < 3; $j++) { 
//       echo '<div style="display:inline-block; margin:10px;">'.$arr[$i][$j].'   ;</div>';
//     }
//     echo "</div></br>";
// }
// echo '</div>';
/////////////////////////////////////////////////////////////////////////////////////////////
// $Header = ['green','90','white','Header'];
// $Content = ['red','400','black','Content'];
// $Footer = ['blue','100','green','Footer'];

// $type = [$Header,$Content,$Footer];

// for ($i=0; $i <count($type) ; $i++) { 
//     for ($j=0; $j <count($type[0])-3 ; $j++) { 
//         echo '<div style="background:'.$type[$i][$j].';height:'.$type[$i][$j+1].'; color:'.$type[$i][$j+2].'">'.$type[$i][$j+3].'</div>';
//     }
    
// }




