
<?php

// function func1($arr){

// for ($i=0; $i <count($arr) ; $i++) { 
//     if($arr[$i]<0){
//         $arr[$i] = '<span style="color:red">'.$arr[$i].'</span>';
//     }
    
// }
// echo implode($arr,',');

// }

// for ($i=0; $i < 10 ; $i++) { 
//     $arr[]=rand(-10,10);
// }
// func1($arr);
//////////////////////////////////////////////////////////////////

// function number2string($number) {
	
// 	static $dic = array(
	
// 		array(
// 			-2	=> 'две',
// 			-1	=> 'одна',
// 			1	=> 'один',
// 			2	=> 'два',
// 			3	=> 'три',
// 			4	=> 'четыре',
// 			5	=> 'пять',
// 			6	=> 'шесть',
// 			7	=> 'семь',
// 			8	=> 'восемь',
// 			9	=> 'девять',
// 			10	=> 'десять',
// 			11	=> 'одиннадцать',
// 			12	=> 'двенадцать',
// 			13	=> 'тринадцать',
// 			14	=> 'четырнадцать' ,
// 			15	=> 'пятнадцать',
// 			16	=> 'шестнадцать',
// 			17	=> 'семнадцать',
// 			18	=> 'восемнадцать',
// 			19	=> 'девятнадцать',
// 			20	=> 'двадцать',
// 			30	=> 'тридцать',
// 			40	=> 'сорок',
// 			50	=> 'пятьдесят',
// 			60	=> 'шестьдесят',
// 			70	=> 'семьдесят',
// 			80	=> 'восемьдесят',
// 			90	=> 'девяносто',
// 			100	=> 'сто',
// 			200	=> 'двести',
// 			300	=> 'триста',
// 			400	=> 'четыреста',
// 			500	=> 'пятьсот',
// 			600	=> 'шестьсот',
// 			700	=> 'семьсот',
// 			800	=> 'восемьсот',
// 			900	=> 'девятьсот'
// 		),
		
		
// 		array(
// 			2, 0, 1, 1, 1, 2
// 		)
// 	);
	
// 	$string = array();
// 	$number = str_pad($number, ceil(strlen($number)/3)*3, 0, STR_PAD_LEFT);
	
// 	$parts = array_reverse(str_split($number,3));
	
// 	foreach($parts as $i=>$part) {
		
// 		if($part>0) {
			
// 			$digits = array();
			
// 			if($part>99) {
// 				$digits[] = floor($part/100)*100;
// 			}
// 			if($mod1=$part%100) {
// 				$mod2 = $part%10;
// 				$flag = $i==1 && $mod1!=11 && $mod1!=12 && $mod2<3 ? -1 : 1;
// 				if($mod1<20 || !$mod2) {
// 					$digits[] = $flag*$mod1;
// 				} else {
// 					$digits[] = floor($mod1/10)*10;
// 					$digits[] = $flag*$mod2;
// 				}
// 			}
			
// 			$last = abs(end($digits));
			
// 			foreach($digits as $j=>$digit) {
// 				$digits[$j] = $dic[0][$digit];
// 			}
			
			
// 			array_unshift($string, join(' ', $digits));
// 		}
// 	}
	
// 	return join(' ', $string);
// }

// echo number2string(12345);
//////////////////////////////////////////////////////////////////////////////////////////////////////

// function position(){
// $x = rand(1,300);
// return $x;
// }

// for ($i=0; $i <10 ; $i++) { 
//    echo '<div style="background:red; position:absolute; left:'.position().';top:'.position().'; width:20px; height:20px"></div>';
// }
////////////////////////////////////////////////////////////////////////////////////////////////////////


// function show($name,$image,$price)
// {
//     echo '<div style="width:300px; height:500px; border:1px solid green; padding:20px; display:flex; flex-direction:column; align-itmes:center; ">';
//     echo '<img src="'.$image.'">';
//     echo '<h1> '.$name.'</h1>';
//     echo '<h2>'.$price.'</h2>';
//     echo '<input type="button" value="BUY" >';
//     echo '</div>';
// }



// show('IPhone 1 2 3','img\free-icon-long-arrow-pointing-to-the-right-25426.png','12000$');
// show('NOTIPhone 1 2 3','img\premium-icon-arrow-3634118.png','400$');
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
error_reporting(0);
function func2($arr){
   for ($i=0; $i < count($arr) ; $i++) { 
      $temp[] = $arr[$i][0];
   
   }
   
   foreach(array_unique($temp) as $item){
   
       $temp1[] = $item;
   }   
   
   for ($i=0; $i <count(array_unique($temp)); $i++) { 
      $temp2[][]=0;
   }
   unset($temp2[0]);
   
   for ($i=0; $i < count($temp1); $i++) { 
     for ($j=0; $j < count($temp); $j++) { 
      if($temp1[$i] == $temp[$j])
      {
         $temp2[$i][0] +=1;
         $temp2[$i][1] = $temp1[$i];
      }
   
     }
   
   }
   for ($i=0; $i < count($temp2); $i++) { 
      if($arr[$i][0] = $temp[$i][1]){
         $temp2[$i][2] = $arr[$i][1];
      }
      if($arr[$i][0] = $temp[$i][1]){
         $temp2[$i][3] = $arr[$i][2];
      }
   
   }
   
   for ($i=0; $i < count($temp2); $i++) { 
   
      echo '<div style="width:300px; height:600px; border:1px solid green; padding:20px; display:flex; flex-direction:column; align-itmes:center; ">';
      echo '<img src="'. $temp2[$i][2].'">';
      echo '<h1> '.$temp2[$i][1].'</h1>';
      echo '<h2>Count:'.$temp2[$i][0].' </h2>';
      echo '<h2>Price:'.$temp2[$i][3]*$temp2[$i][0] .'$</h2>';
      echo '<input type="button" value="BUY" >';
      echo '</div>';
   
   }
   

}

$arr = [['Iphone5','img\free-icon-long-arrow-pointing-to-the-right-25426.png','2000'],['Iphone5','img\free-icon-long-arrow-pointing-to-the-right-25426.png','2000'],['Iphone','img\free-icon-long-arrow-pointing-to-the-right-25426.png','1000'],['Samsung','img\free-icon-long-arrow-pointing-to-the-right-25426.png','800'],['Xiaomi','img\free-icon-long-arrow-pointing-to-the-right-25426.png','1200'],['Xiaomi','img\free-icon-long-arrow-pointing-to-the-right-25426.png','1200'],['Xiaomi1','img\free-icon-long-arrow-pointing-to-the-right-25426.png','900'],['Iphone5','img\free-icon-long-arrow-pointing-to-the-right-25426.png','2000']];

func2($arr);

