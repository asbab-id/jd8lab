
<?php if(@$home): // jd8lab : home page
// █░█ █▀█ █▀▄▀█ █▀▀ █▀█ ▄▀█ █▀▀ █▀▀ ////////// ////////// ////////// ////////// ////////
// █▀█ █▄█ █░▀░█ ██▄ █▀▀ █▀█ █▄█ ██▄

// https://fsymbols.com/text-art/ (number 3)


function printAllAsset(){
    global $exclude_folder;
    $arr = glob("*");
    $str = '';
    for($i=0;$i<count($arr);$i++){
        if(!strpos($arr[$i],".jd8") && ($arr[$i] != $exclude_folder)){
            $str .= "<a href='$arr[$i]' target='_blank'>$arr[$i]</a><br>";
        }
    }
    return $str;
}

function printJsJd8(){
    $arr = glob("*.js.jd8");
    $str = '';
    for($i=0;$i<count($arr);$i++){
        $str .= "<a href='?open=$arr[$i]'>$arr[$i]</a><br>";
    }
    return $str;
}

function printPhpJd8(){
    $arr = glob("*.php.jd8");
    $str = '';
    for($i=0;$i<count($arr);$i++){
        $str .= "<a href='?open=$arr[$i]'>$arr[$i]</a><br>";
    }
    return $str;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jd8lab</title>
    <link rel="icon" type="image/x-icon" href="jd8_system/jd8.jpg">
</head>

<style>
body {
    background-color: #5b5b5b;
}


.container {
    background-color: white;
    width: 80%;
    padding: 20px;
    padding-bottom: 5px;
    margin-top: 8vh;
    margin-left: auto;
    margin-right: auto;
    box-shadow: 0 4px 8px 0 rgb(255 255 255 / 2%), 0 6px 20px 0 rgb(0 0 0 / 43%);
    border-radius: 5px;
    min-height: 80vh;
}


.top {
    margin-bottom: 20px;
    text-align: center;
    border-bottom: solid 1px #ff00005e;
    border-radius: 8px;
}

.blok {
    border: solid #7f6f6f 2px;
    margin-bottom: 20px;
    padding: 10px;
    border-radius: 5px;
}

.shadow:hover{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.column {
  float: left;
  width: 25%;
  padding: 10px;
  padding-top:2px;
  margin-left: 2%;
  margin-right: 2%;
}

.row{
    padding-left: 5%;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .column {
    width: 80%;
  }
}

a{
    text-decoration: none;
    color: #342f2f;
    display: inline-block;
    width: 95%;
    margin-top: 6px;
    padding: 4px;
    border-radius: 5px;
}

div:nth-child(1) > a{
    background-color: #f0db4f21;
}

div:nth-child(2) > a{
    background-color: #8993be21;
}

div:nth-child(3) > a{
    background-color: #4dff6e21;
}

h2{
    text-align: center;
}

.input-new-js{
    border-color: #000000;
    outline: none;
    width: 50%;
    padding: 3px;
}

.btn-new-js{
    background-color: #ffff3f;
    outline: none;
    color: black;
    padding: 3px 5px;
    border-radius: 3px;
    cursor: pointer;
    border-color: black;
}

.input-new-php{
    border-color: #000000;
    outline: none;
    width: 50%;
    padding: 3px;
}

.btn-new-php{
    background-color: #3f83ff85;
    outline: none;
    color: black;
    padding: 3px 5px;
    border-radius: 3px;
    cursor: pointer;
    border-color: black;
}

.footer {
    font-size: 12px;
    text-align: center;
    color: lightgrey;
    margin-top: 30px;
}
</style>

<body>

    <div class="container">

        <div class="top">
            <h1 style="text-shadow: 6px -2px 6px #0a0a0a82;">jd8lab v1</h1>
        </div>

        <div id="content">

        

        <div class="row">
            <div class="column blok">
                <h2 style="color: #000000;text-shadow: 4px 0 0 #fff900;">list js</h2>
                <input class="input-new-js" type="text" placeholder="new js note" id="new_js">
                <button class="btn-new-js shadow" onclick="newfile('js')">create</button><br><br>
                <?php echo printJsJd8(); ?>
            </div>
            <div class="column blok">
                <h2 style="color: #000000;text-shadow: 3px 0 0 #384ede5e;">list php</h2>
                <input class="input-new-php" type="text" placeholder="new php note" style="width:50%" id="new_php">
                <button class="btn-new-php shadow" onclick="newfile('php')">create</button><br><br>
                <?php echo printPhpJd8(); ?>
            </div>
            <div class="column blok">
                <h2 style="    color: #000000;text-shadow: 3px 0 0 #38de4d5e;">list all asset</h2>
                <?php echo printAllAsset(); ?>
            </div>
        </div>


        </div><!-- end content -->

    <div class="footer">
        <p><a href="https://github.com/asbab-id/jd8lab" target="_blank" style="text-decoration: none;color: #7f6f6f;">jd8lab v1.1 codename: yakuza.</a></p>
    </div>

    </div><!-- end container -->


</body>


<script>

function newfile(ext){
    const xhr = new XMLHttpRequest();
    var filename = document.querySelector(`#new_${ext}`).value;
    var url = `?newfile=${filename}.${ext}`;

    xhr.open('GET', url, true);
    // xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
    if(xhr.readyState === XMLHttpRequest.DONE) {
        if(xhr.status === 200){
            if(xhr.responseText == "⛔️ View Only Mode"){
                alert("view only mode");
            }else if(xhr.responseText == "true"){
                window.location.href = `?open=${filename}.${ext}.jd8`;
                console.log("iso");
            }else if(xhr.responseText == "file_exists"){
                alert("file exists");
            }else{
                login_jd8lab("newfile", [ext, filename]);
            }

        }else{
            console.log("Create New File Failed");
        }
    }
    };

    xhr.send();
}

function login_jd8lab(callback, arrParam) {
  let password = prompt("Please enter your password");
  if (password != null) {
    const xhr = new XMLHttpRequest();
    const url = window.location.href;
    const uri = encodeURIComponent(password);

    xhr.open('POST', url, true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
    if(xhr.readyState === XMLHttpRequest.DONE) {
        if(xhr.status === 200){
            // console.log(xhr.responseText);
            if(xhr.responseText == "login_failed"){
                alert("wrong password");
            }else{
                const date = new Date();
                console.log(`~ ✅ Login : ${date.getHours()}:${date.getMinutes()}:${date.getSeconds()}`);

                if(callback == "save"){
                    save();
                }else if(callback == "newfile"){
                    newfile(arrParam[0], arrParam[1]);
                }
            }
        }else{
            console.log("login Failed");
        }
    }
    };

    xhr.send(`login=${uri}`);
  }
}

window.addEventListener('DOMContentLoaded', (event) => {
    console.log('welcome to jd8lab v1.1');
    // note, resize all textarea
});
</script>

</html>
<?php endif; // end home page?>