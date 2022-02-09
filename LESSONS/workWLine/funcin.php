<?php


function countL($line,$letter){
    $count = 0;
     $temp =str_split($line);
     foreach ($temp as $value) {
        if($value==$letter){
            $count+=1;
        }
     }
    return $count;
}
function changeLettre($line,$letter1,$letter2){
     $temp =str_split($line);
     foreach ($temp as $key=>$value) {
        if($value==$letter1){
            $temp[$key] = '<span style="color:red">'.$letter2.'</span>';
        }
     }
    return implode($temp,'');
}
function backward($line){
    return implode(array_reverse(str_split($line),''));
}
function Toword($line){

     return explode(' ',$line);

}
function checkL($line){

    preg_match("/[а-я]/i", $line) ? $temp = "Cyrilic" : $temp =""; 
    if(!$temp){
        preg_match("/[a-z]/i", $line) ? $temp = "Latin" : $temp ="";   
    }
    return $temp;
}



echo 'find: Text = "Some text" , Symbol = "e" , result = '.countL("Some text","e").'<br>';
echo 'replace: Text = "Some text" , Symbol1 = "e" , Symbol1 = "o" , result = '.changeLettre("Some text","e","o").'<br>';
echo 'reflect: Text = "Some text" , result = '.backward("Some text").'<br>';
echo 'split: Text = "Some text" , result = <br>';
print_r(Toword("Some text"));
echo '<br>alphabet: Text = "Some text" , result = '.checkL("Some").'<br>';
