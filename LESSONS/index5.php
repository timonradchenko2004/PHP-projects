<?php

    
// $max=0;
// $min =rand(4,100);
//     for ($i=0; $i <100 ; $i++) { 
//         $arr[$i]=rand(4,100);

//         echo '<div style="display:inline-block; margin:10px;">'.$arr[$i].'</div>';

//         if($min >$arr[$i]){
//             $min = $arr[$i];
//         }

//         if($max < $arr[$i]){
//             $max = $arr[$i];
           
//         }
        
        

        
//     }

// echo '<br/> Maximum - '.$max.',<br/> Minimum - '.$min;
///////////////////////////////////////////////////////////////////////////////
?>
<!-- <style>
    img{
        width:150px;
        height:100px;
        margin:5px;
    }
    td{
        border:2px solid red;
    }

</style> -->
<?php
// $columns = 15;
// $images_dir = 'img/';

// $count = 1;
// echo '<table><tr>';
// if(is_dir($images_dir)) {
//     if ($h = opendir($images_dir)) {
//         while (($file = readdir($h))) {
//            if(preg_match("#\.(jpg|gif|png)$#i", $file)) {
// 				echo '<td><img  src="'.$images_dir.$file.'"  /></td>';
// 				$count++;
// 				if( ($count%$columns)==0 )
// 					echo '</tr><tr>';
// 		   }
//         }
//         closedir($h);
//     }
// }
// echo '</tr></table>';    
///////////////////////////////////////////////////////////////////////////////
// echo '<table>';
// for ($i=2; $i<10; $i++) {
//     echo '<tr>';
//     for ($j=1; $j < 10 ; $j++) { 
//         echo '<td>';
//         echo $i.'*'.$j.'='.$i*$j.',';
//         echo '</td>';
//     }
//     echo '<tr/>';
// }
// echo '</table>';
//////////////////////////////////////////////////////////////////////////////

?>
<!-- <style>
    table{
        border-spacing:inherit;
    }
    td{
        border:1px solid black;
        border-spacing:none;
    }
</style>
<table>
    <tr style="background:red;  ">
        <td>Year  </td>
        <td>Start  </td>
        <td>End  </td>
        <td>Profit  </td>
    </tr>
    <?php
    // $st=300;
    // for ($i=1; $i <21 ; $i++) { 
    //     echo '<tr><td>'.$i.'</td>';
    //     $pr = $st+$st*0.2;
    //     $sum = $pr - $st;
    //         echo  '<td>'.$st.'</td><td>'.$pr.'</td><td>'.$sum.'</td>';
    //         $st = round($pr,2);
    //     echo '</tr>';

    // }

    ?>
</table> -->

<?php
///////////////////////////////////////////////////////////////////////

// $x = '123456';
// $temp ='';

// for ($i=strlen($x)-1; $i >=0 ; $i--) { 
//     $temp.=$x{$i};   
// }
// echo $temp;
//////////////////////////////

$x = "76423489";
echo '<h1>  The number is:  '.$x.' </br> </h1>';
echo '<h2>Digits in number is: ';

for ($i=0; $i< strlen($x); $i++) 
 { 
    $temp = str_split($x);

    echo $temp[$i].' ';

}
$average = array_sum($temp) / count($temp);

echo '</br></br>Count of Digits: '.count($temp).' , Max : '.max($temp).' , Min: '.min ($temp).', Sum: '.array_sum($temp).' , AVG: '.round($average,1);
