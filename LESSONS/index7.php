<?php
//  $arr = [['Ann','Apple','Developer'],['Pete','Google','Developer-J'],['Jorg','Microsoft','Developer-M'],['Michael','Yandex','Developer-S']];

//  for ($i=0; $i < count($arr) ; $i++) { 
//      for ($j=0; $j < count($arr[0])-2 ; $j++) { 
//         echo '<div>'.$arr[$i][$j].' is working in '.$arr[$i][$j+1].' on position:'.$arr[$i][$j+2].';</div></br>';
//      }
//  }
////////////////////////////////////////////////////////

// $arr = [['Pete','Google','Developer-J'],['Andrew','Google','Developer-J'],['Andrew1','Google','Developer-J'],['Andrew2','Google','Developer-J'],['Ann','Apple','Developer-J'],['Peter','Apple','Developer-J'],['Peter','VIP','Developer-J'],['Peter','VIP','Developer-J'],['Michael','Microsoft','Developer-J'],['SKDJC','Microsoft','Developer-J']];
// for ($i=0; $i < count($arr); $i++) { 
//     $temp[]= $arr[$i][1];
// }
// $temp = array_unique($temp);

// foreach($temp as $item){

//     $temp1[] = $item;

// }   

// for ($i=0; $i < count($temp1); $i++) { 
//     echo '<ul>'.$temp1[$i].'';

//         for ($j = 0; $j < count($arr); $j++) { 
//             if($temp1[$i]==$arr[$j][1]){
//                 echo '<li>'.$arr[$j][0].'</li>';
//             }
//         }
//     echo '</ul>';
// }
/////////////////////////////////////////////////////////////

// $arr = [1];
// for ($i=1; $i<10; $i++) {
//    $num = rand(0, 200);
//    if($arr[$i-1] < $num or $num==100){
//        $arr[]=$num;
//     }else{
//         $i--;
//     }
// }
// echo implode($arr,',');
////////////////////////////////////////////////////////////////

// $arr = [[8.87879798,3],[13.234443,2],[12.34987952,5],[1.23123,1]];

//  for ($i=0; $i < count($arr) ; $i++) { 
//      for ($j=0; $j < count($arr[0])-1; $j++) { 
//         echo '<div>'.$arr[$i][$j].' to  '.$arr[$i][$j+1].': '.round($arr[$i][$j],$arr[$i][$j+1]).';</div></br>';
//      }
//  }
///////////////////////////////////////////////////////////////////////////

$matrix = [];

for ($j=0; $j < 5  ; $j++) { 
    for ($i=0; $i < 5 ; $i++) { 
        $arr[$i] = rand(10,99); 
    }
    $matrix[]=$arr;
}
$j = 0;
$min1= 0;
while($j<5){

    for ($i=0; $i < 5; $i++) { 
        $temp[] = $matrix[$i][$j];
    }
    $minimum[] = min($temp);
    $min1+=$minimum[0];
    $matrix[array_search($minimum[0],$temp)][$j] = '<span style="color:red">'.$matrix[array_search($minimum[0],$temp)][$j].'</span>';
    unset($temp);
    unset($minimum);
    $j++;
}    

for ($i=0; $i < 5 ; $i++) { 
    echo '</br>';
    for ($j=0; $j < 5 ; $j++) { 
        echo $matrix[$i][$j].'  ';
    }
}


echo '</br> </br>Sum of mins: '.$min1.'</br>Avg of mins: '.round(($min1/5),3);
