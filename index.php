<?php
session_start();
include "jd8_system/setting.php";

// jd8lab : route
if(isset($_POST["codeSave"])){
    CekViewOnly();

    if($login_setting == true){
        if(@$_SESSION["login"] == true){
            file_put_contents($_GET["open"], $_POST["codeSave"]);
            echo "true";
        }else{
            echo "login_failed";
        }
    }else{
        file_put_contents($_GET["open"], $_POST["codeSave"]);
        echo "true";
    }
    
    exit();

}elseif(isset($_POST["evalPhp"])){
    CekViewOnly();

    if($login_setting == true){
        if(@$_SESSION["login"] == true){
            echo RunEvaluatePHP($_POST["evalPhp"]."\nfunction returnFalse(){}");
        }else{
            echo "login_failed";
        }
    }else{
        echo RunEvaluatePHP($_POST["evalPhp"]."\nfunction returnFalse(){}");
    }
    exit();
    
}elseif(isset($_POST["login"])){
    CekViewOnly();

    if(md5($_POST["login"]) == $password_login){
        echo "true";
        $_SESSION["login"] = true;
    }else{
        echo "login_failed";
    }
    exit();

    
}elseif(isset($_GET["open"])){
    if(file_exists($_GET["open"])){
        $openFile = file_get_contents($_GET["open"]);
        $nameFileToPrint = $_GET["open"];

        if(strpos($nameFileToPrint, '.js.jd8')){
            $openJs = true;
            include "jd8_system/jd8_openjs.php";
        }elseif(strpos($nameFileToPrint, '.php.jd8')){
            $openPhp = true;
            include "jd8_system/jd8_openphp.php";
        }else{
            echo "not found";
        }

    }else{
        header("Location: ?");
        exit();
    }

    
}elseif(isset($_GET["newfile"])){
    CekViewOnly();

    if($login_setting == true){
        if(@$_SESSION["login"] == true){
            if(file_exists($_GET["newfile"].".jd8")){
                echo "file_exists";
            }else{
                file_put_contents($_GET["newfile"].".jd8", '');
                echo "true";
            }
        }else{
            echo "false";
        }
    }else{
        file_put_contents($_GET["newfile"].".jd8", '');
        echo "true";
    }
    exit();


}else{
    $home = true;
    include "jd8_system/jd8_homepage.php";
}




function CekViewOnly(){
    global $view_only;
    if($view_only == true){
        echo "⛔️ View Only Mode";
        exit();
    }
}

function RunEvaluatePHP($w){
    global $disable_php;
    if($disable_php == true){
        echo "⛔️ PHP is enabled";
        exit();
    }else{
        $tmp_file = tempnam(sys_get_temp_dir(), '');
        file_put_contents("$tmp_file",'<?php '."$w");
        include "$tmp_file";
        unlink($tmp_file);
    }
}
?>