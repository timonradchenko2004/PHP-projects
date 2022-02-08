<?php
$arr = ['a','b','c','d'];
$answers = ['ab','bc','ab','ad','abc','cd','ab','ad','ac','ac'];

echo '<form method="POST" action="">';

for ($i=1; $i < 11 ; $i++) { 
    echo '<p>Question '.$i.'</p>';
    for ($j=1; $j < 5 ; $j++) { 
        echo  '<label><input type="checkbox" value="'.$arr[$j-1].'" name="q'.$i.'[]">'.$j.'</label>';

    }
    echo '<br><br>';
}

echo '<input type="submit" name="btn">';

echo '</form">';

if(isset($_POST["btn"]))
{
  for ($i=1; $i <11 ; $i++) { 
    if (isset($_POST['q'.$i.'']) == ''){
        echo '<h3 style="color:red">Fill all FIELDS!</h3>';
        return ;
    }
  }
  
  $ot = 0;
  $temp=[];
  for ($i=1; $i < 11 ; $i++) { 
    if(isset($_POST['q'.$i.''])){
        $temp[]=implode($_POST['q'.$i.''],'');
    }
}
  for ($i=1; $i < 11 ; $i++) { 
    if ($temp[$i-1] == $answers[$i-1]){$ot++;}
  }

  session_start();
  $_SESSION['test2'] = $ot;
  header('Location: test3.php');
}