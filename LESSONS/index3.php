<?php

// $name = "John";
// echo 'Hello "'.$name.'" ';
///////////////////////////
// $name = "John";
// $age = "25";
// echo 'Hello "'.$name.'".<br/> I"m aged '.$age.' ';
////////////////////////////////////////
// $a= 10;
// $b =12;
// $rez= $a +$b;
// echo ''.$a.' +'.$b.' = '.$rez.' ';
/////////////////////////////////////////
// $a = 12;
// $b =10;
// echo $a,$b.'<br/>';
// $a=$a+$b;
// $b=$a-$b;
// $a=$a-$b;
// echo $a,$b;
////////////////////////////////////
///////
?>
<!-- <style>
    div{
        display:flex;
    }
    form{
        border:1px solid black;
        width:170px;
    }
    .text{
        width:70%;
        margin:5px;
    }
</style>
<form action="">
    <label for="">14+15=...?</label>
    <div style="display:flex"><input type="checkbox"><option value="0">45</option></div>
    <div style="display:flex"><input type="checkbox"><option value="0">35</option></div>
    <div style="display:flex"><input type="checkbox"><option value="0">28</option></div>
    <div style="display:flex"><input type="checkbox"><option value="1">29</option></div>

</form>
<br/>
<form action="">
    <label for="">2..2=4?</label>
    <div style="display:flex"><input type="checkbox"><option value="0">/</option></div>
    <div style="display:flex"><input type="checkbox"><option value="1">*</option></div>
    <div style="display:flex"><input type="checkbox"><option value="0">-</option></div>
    <div style="display:flex"><input type="checkbox"><option value="1">+</option></div>

</form>
<br/>
<form action="">
    <label for="">Столица России - ?</label>
    <input class="text" type="text">
</form> -->
<?php
$tag = 'div';
$background_color = '#ffff1717';
$color = 'red';
$width=159;
$height = 150;
echo 'tag:'.$tag.'<br/>'.'background-color:'.$background_color.'<br/>'.'color:'.$color.'<br/>'.'width:'.$width.'<br/>'.'height:'.$height;
echo '<'.$tag.' style = "width:'.$width.';height:'.$height.';color:'.$color.';background:'.$background_color.'">Hello</'.$tag.'>';

