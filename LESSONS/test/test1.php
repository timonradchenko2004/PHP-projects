<?php 

$arr = ['a','b','c','d'];
$answers = ['a','c','b','d','a','c','b','d','a','c'];

echo '<form method="POST" action="">';

for ($i=0; $i < count($answers); $i++) { 
  $mix[$i][0] = $answers[$i];
  $mix[$i][1] = $i+1;
}
shuffle($mix);

for ($i=0; $i < count($mix) ; $i++) { 
    echo '<p>Question '.$mix[$i][1].'</p>';
    for ($j=1; $j < 5 ; $j++) { 
        echo  '<label><input type="radio" value="'.$arr[$j-1].'" name="q'.$mix[$i][1].'">'.$j.'</label>';

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
  for ($i=0; $i < 10 ; $i++) { 
    if(isset($_POST['q'.($mix[$i][1]).''])){
      $temp[]=$_POST['q'.($mix[$i][1]).''];
    }

  }
    for ($i=0; $i < 10 ; $i++) { 
      if ($temp[$i] == $mix[$i][0])
      {$ot++;}  
    }

  session_start();
  $_SESSION['test1'] = $ot;
   header('Location: test2.php');
}
