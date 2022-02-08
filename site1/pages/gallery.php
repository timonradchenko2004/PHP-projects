<h1>galllery</h1>

<form action="index.php?page=3" method="POST"> 
    <p>Select graphics extension to display:</p>
    <select name="ext">
        <?php
        $path = "img/";
        $dir = opendir($path);
        $ar = array();
        while (($file = readdir($dir)) !== false) 
        {
                $fullname = $path.$file;
                $pos = strrpos($fullname,".");
                $ext = substr($fullname,$pos+1);
                $ext = strtolower($ext);
                if(!in_array($ext,$ar))
                {
                    $ar[] = $ext;
                    echo '<option value="'.$ext.'">'.$ext.'</option>';
                }
        }
        
        ?>
    </select>
    <button type="submit" name="btn-show">Show pictures</button>
</form>
<?php
if(isset($_POST["btn-show"])){
    $selectExt = $_POST["ext"];
    $images = glob($path . '*.'.$selectExt);
    ?>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Gallery Content</h3>
            </div>   
            <?php foreach($images as $image ) { ?>
                <a href="<?php echo $image?>" target="_blanc">
                    <img src="<?php echo $image ?>" alt="image" height="200px">
                </a>
            <?php } ?>

        </div>

    <?php
}
