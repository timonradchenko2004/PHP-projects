<?php

function register($name,$pass,$email){
    $name = trim(htmlspecialchars($name));
    $pass = trim(htmlspecialchars($pass));
    $email = trim(htmlspecialchars($email));

    if($email == "" || $name == ""|| $pass == ""){
        echo '<h3 style="color:red">Fill all FIELDS!</h3>';
        return false;
    }
    if(strlen($name)<3 || strlen($name) >30|| strlen($pass) <3 || strlen($pass) >30){
        echo '<h3 style="color:red">VALUES LENGTH MUST BE BETWEEN 3 AND 30)</h3>';
        return false;
    }
    $users = 'pages/users.txt';

    $file = fopen($users,"a+");
    while($line = fgets($file,128)){
        
        $readName = substr($line,0,strpos($line,":"));

        if($readName == $name){
            echo '<h3 style="color:red">SUCH NAME IS ALREADY USED</h3>';
            return false;    
        }
    }

        $newUserLine = $name.':'.md5($pass).':'.$email."\r\n";
        fputs($file,$newUserLine);
        fclose($file);
        return true;
    }

    function login( $name1 , $pass )
    {
        $db_name = 'pages/users.txt';
        $arr= file($db_name);
        $i = 1; 
        $reg = array(); 
        $pas = array(); 
        foreach($arr as $line) 
        { 
            
            $readName = substr($line,0,strpos($line,":"));
            $readPass = explode(':',$line);
            $reg[$i] = $readName; 
            $pas[$i] = $readPass[1]; 
            $i++; 
        } 
        if(in_array($name1,$reg))
        { 
            if(in_array(md5($pass),$pas))
            { 
                return true;

            } 
            else{
                header('Location: login.php');
                exit();
                return false;
            }


        } 


    }
        



    
