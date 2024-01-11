
<?php if(@$openPhp): // jd8lab : open page php
// █▀█ █░█ █▀█ ////////// ////////// ////////// ////////// ////////
// █▀▀ █▀█ █▀▀
?>
<!DOCTYPE html>
<html lang="en" spellcheck="false">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nameFileToPrint; ?></title>
    <link rel="icon" type="image/x-icon" href="jd8_system/jd8.jpg">

    <link rel="stylesheet" href="jd8_system/import/php/codemirror.min.css">
    <script src="jd8_system/import/php/codemirror.min.js"></script>
    <script src="jd8_system/import/php/xml.min.js"></script>
    <script src="jd8_system/import/php/javascript.min.js"></script>
    <script src="jd8_system/import/php/css.min.js"></script>
    <script src="jd8_system/import/php/clike.min.js"></script>
    <script src="jd8_system/import/php/php.min.js"></script>

    <link rel="stylesheet" href="jd8_system/import/highlightjs.min.css">
    <script src="jd8_system/import/highlight.min.js"></script>
</head>

<style>
body {
    background-color: #5b5b5b;
}


.container {
    background-color: white;
    width: 75%;
    padding: 20px;
    padding-bottom: 5px;
    margin-top: 5vh;
    margin-bottom: 5vh;
    margin-left: auto;
    margin-right: auto;
    box-shadow: 0 4px 8px 0 rgb(255 255 255 / 2%), 0 6px 20px 0 rgb(0 0 0 / 43%);
    border-radius: 5px;
}

#title-project {
    font-size: 2.3rem;
    background-color: #e6f4e56b;
    border: transparent;
    outline: none;

    margin-top: 6%;
    margin-bottom: 10px;

    text-align: center;
    width: 95%;
}

#description-project {
    font-size: 0.8rem;
    background-color: #e6f4e56b;
    border: transparent;
    outline: none;
    resize: none;

    margin-bottom: 10px;

    width: 95%;
    height: 20px;
    text-align: center;
    min-height: 50px;
}

.top {
    margin-bottom: 20px;
    text-align: center;
}

#filename {
    padding: 7px;
    padding: 4px 10px;
    color: #232531;
    background-color: #8993be;
    float: right;
    margin-top: -10px;
}

.blok {
    border: solid #7f6f6f 2px;
    margin-bottom: 20px;
    padding: 10px;
    border-radius: 5px;
}

#judul {
    font-size: 1.3rem;
    background-color: #e6f4e55c;
    /* border-left: solid green; */
    outline: none;

    margin-left: 10px;
    margin-top: 10px;
    margin-bottom: 10px;
    padding-left: 10px;

    width: 97%;
    border: solid 1px #eeeeee;
}

#komen {
    font-size: 0.8rem;
    background-color: #fffdc426;
    border: transparent;
    /* border-left: solid yellow; */
    outline: none;
    resize: none;

    margin-left: 10px;
    margin-bottom: 10px;
    padding-left: 10px;

    width: 97%;
    height: 20px;
    /* border: solid 1px #eeeeee; */
    min-height: 40px;
}

#code {
    font-size: 1rem;
    background-color: transparent;
    border: transparent;
    border-left: solid red;
    outline: none;
    resize: none;

    margin-left: 10px;
    margin-top: 10px;
    margin-bottom: 10px;

    width: 90%;
    height: auto;
}

#output {
    /* border-left: solid blue; */
    margin-left: 10px;
    margin-top: 10px;
    margin-bottom: 10px;
    padding-left: 10px;
    padding-bottom: 20px;
    overflow: auto;
    background-color: #8d8dff12;
}

.CodeMirror {
  border: 1px solid #eee;
  height: auto;
  margin-top: 10px;
}

.CodeMirror-scroll {
    height: auto;
    max-height:500px;
}

.hidden {
    display: none;
}

button {
    cursor: pointer;
}

.shadow:hover{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

::placeholder {
  color: #8080804f;
}

.btn-arrow {
    padding: 5px 10px;
    font-size: 0.5rem;
    float: right;
    background-color: white;
    margin-right: 2px;
    border-color: black;
}

.btn-show-hide {
    padding: 5px;
    font-size: 0.5rem;
    float: right;
    background-color: white;
    margin-right: 2px;
    border-color: black;
}

.btn-delete {
    padding: 5px 7px;
    font-size: 0.5rem;
    float: right;
    background-color: white;
    border-color: black;
}

.btn-run {
    background-color: transparent;
    color: green;
    border-color: transparent;
}

.btn-add-blok {
    background-color: #5660d7;
    border: none;
    padding: 5px;
    color: white;
    border-radius: 2px;
}

.btn-save {
    background-color: #7575cd;
    border: none;
    padding: 5px;
    color: white;
}

.btn-render {
    background-color: #11cc92;
    border: none;
    padding: 5px;
    color: white;
}

.btn-run-all {
    background-color: green;
    border: none;
    padding: 5px;
    padding-top:7px;
    color: white;
}

.footer {
    font-size: 12px;
    text-align: center;
    color: lightgrey;
    margin-top: 30px;
}

.btn-back {
    padding: 2px 8px;
    background-color: #c7c7ff;
    color: white;
    text-decoration: none;
    border-radius: 3px;
    float: left;
    margin: -15px;
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }

  to {
    opacity: 1;
  }
}

.success {
  animation: fadeIn 0.5s ease-in-out;
}

code.hljs{
    white-space: pre;
    padding: 0;
}
</style>

<body style="background-color:#232531">

    <div class="container" style="border: solid #8993be;">

        <div class="top">
            <a href="?" class="btn-back">🔙</a>
            <a id="filename">
                <?php echo $nameFileToPrint; ?>
            </a>
            <input id="title-project" type="text" placeholder="untitled project" style="background-color:#8993be21"><br>
            <textarea id="description-project" oninput="resize(this)" onclick="resize(this)" placeholder="description" style="background-color:#8993be21"></textarea><br>
            <button id="save" onclick="save(this)" class="btn-save shadow">💾 Save</button>
            <button id="save" onclick="renderToHtml(this)" class="btn-render shadow">🔥 Render</button>
            <button id="run-all" onclick="runAll(this)" class="btn-run-all shadow">▶ Run All</button>
        </div>

        <div onclick="cekUnSave()" id="content">

            <div class="blok">
                <button onclick="deleteBlok(this)" class="btn-delete shadow">x</button>
                <button onclick="hideTitleComment(this)" class="btn-show-hide shadow" id="btnShowHide">show/hide heading and comment</button>
                <button onclick="moveDown(this)" class="btn-arrow shadow">↓</button>
                <button onclick="moveUp(this)" class="btn-arrow shadow">↑</button>

                <input id="judul" type="text" placeholder="heading"><br>
                <textarea id="komen" oninput="resize(this)" placeholder="comment"></textarea><br>

                <textarea id="code" class="code" oninput="resize(this)"></textarea><br>
                <button id="run" onclick="evalPhp(this)" class="btn-run shadow">▶</button><br>
                <div id="output"><code class="language-php"><a style="color:#8080804f">output</a></code></div>
            </div><!-- end blok -->

        </div><!-- end content -->


    <button onclick="addBlok()" class="btn-add-blok shadow">+ Add</button>

    <div class="footer">
        <p><a href="https://github.com/asbab-id/jd8lab" target="_blank" style="text-decoration: none;color: #7f6f6f;">jd8lab v1.1 codename: yakuza.</a></p>
    </div>

    </div><!-- end container -->


</body>


<script>
function moveUp(w) {
    var elem = w.parentElement;
    var prevElem = elem.previousElementSibling;
    if (prevElem) {
    elem.parentNode.insertBefore(elem, prevElem);
    }
}
function moveDown(w) {
    var elem = w.parentElement;
    var nextElem = elem.nextElementSibling;
    if (nextElem) {
        elem.parentNode.insertBefore(nextElem, elem);
    }
}
function hideTitleComment(w) {
    var elem = w.parentElement;
    var title = elem.querySelector('#judul');
    var comment = elem.querySelector('#komen');
    
    title.classList.toggle("hidden");
    comment.classList.toggle("hidden");
}

function deleteBlok(w) {
    var elem = w.parentElement;
    var title = elem.querySelector('#judul');
    if (confirm("Are you sure to remove  " + title.value + " ?") == true) {
        var blok = document.querySelectorAll('.blok');
        var index = Array.prototype.indexOf.call(blok, w.parentNode);
        var blokTarget = blok[index].querySelector('#code');
        var cmTmp = blokTarget.getAttribute('editor_id');
        cm_list[cmTmp] = '';

        elem.remove();
    }
}

function resize(w) {
    const textarea = w;
    textarea.style.height = 'auto';
    textarea.style.height = `${textarea.scrollHeight}px`;
}

function addBlok(judul ='', komen ='', code ='<\?php\n', output=''){
    var content = document.getElementById('content');

    if(output == ''){
        var strOutput = `<div id="output"><code class="language-php"><a style="color:#8080804f">output</a></code></div>`;
    }else{
        var strOutput = `<div id="output"><code class="language-php">${output}</code></div>`;
    }

    var str = `<div class="blok">
                <button onclick="deleteBlok(this)" class="btn-delete shadow">x</button>
                <button onclick="hideTitleComment(this)" class="btn-show-hide shadow" id="btnShowHide">show/hide heading and comment</button>
                <button onclick="moveDown(this)" class="btn-arrow shadow">↓</button>
                <button onclick="moveUp(this)" class="btn-arrow shadow">↑</button>

                <input id="judul" type="text" placeholder="heading" value="${judul}"><br>
                <textarea id="komen" oninput="resize(this)" placeholder="comment">${komen}</textarea><br>

                <textarea id="code" class="code" oninput="resize(this)" onclick="resize(this)">${code}</textarea><br>
                <button id="run" onclick="evalPhp(this)" class="btn-run shadow">▶</button><br>
                ${strOutput}
            </div><!-- end blok -->`;

    content.insertAdjacentHTML( 'beforeend', str);
    initAllCode();
}

function initAllCode(){
    var list = document.querySelectorAll('.code');
    for(var i=0; i<list.length; i++){
        
        if(list[i].getAttribute('code') != 'rendered'){
            createCode(list[i]);
            list[i].setAttribute('code', 'rendered');
        }
    }
}


var cm_list = [];
function createCode(code){
    cm_add =
    CodeMirror.fromTextArea(code, {
        lineNumbers: true,
        mode: "application/x-httpd-php",
        indentUnit: 4,
      })

      cm_list.push(cm_add);
      code.setAttribute('editor_id', cm_list.length-1)
}


function parsePhp(w){
    var w = w.replace(/<\?php/g, '');
    var w = w.replace(/<\?/g, '');
    var w = w.replace(/\?>/g, '');
    return w;
}

function parseEchoPhp(w){
    // this function will store echo, var_dump, print_r to variable $temp_var
    var w = w.replace(/echo/g, '$false_echo[] = ');
    var w = w.replace(/var_dump/g, 'returnFalse');
    var w = w.replace(/print_r/g, 'returnFalse');
    return w;
}


function packBlok(elem){
    var judul = elem.querySelector('#judul').value;
    var komen = elem.querySelector('#komen').value;
    var output = elem.querySelector('#output').innerText;

    var editor_id = elem.querySelector('#code').getAttribute('editor_id');
    var code = cm_list[editor_id].getValue();

    var arr = [];
    arr.push(judul);
    arr.push(komen);
    arr.push(code);
    arr.push(output);

    return arr;
}

function packAll(click_run){
    var title = document.getElementById('title-project').value;
    var desc = document.getElementById('description-project').value;
    var blok = document.getElementsByClassName('blok');
    var arr_blok = [[], []];

    arr_blok[0].push(title);
    arr_blok[0].push(desc);

    for(var i=0;i<blok.length;i++){
        if(click_run == true){
            blok[i].querySelector('#run').click();
        }

        var dataBlok = packBlok(blok[i]);
        arr_blok[1].push(dataBlok);
    }

    var toJson = JSON.stringify(arr_blok);
    return toJson;
}

function save(){
    const xhr = new XMLHttpRequest();
    const url = window.location.href;
    const pack = packAll();
    const data = JSON.stringify({"pack": pack});
    const uri = encodeURIComponent(data);

    xhr.open('POST', url, true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
    if(xhr.readyState === XMLHttpRequest.DONE) {
        if(xhr.status === 200){
            // console.log(xhr.responseText);
            if(xhr.responseText == "view_only_enabled"){
                alert("view only mode");
            }else if(xhr.responseText == "true"){
                const date = new Date();
                console.log(`~ 💾 Saved : ${date.getHours()}:${date.getMinutes()}:${date.getSeconds()}`);
                window.cekLeaveSite = "";
    
                document.getElementsByClassName("top")[0].classList.add("success");
                setTimeout(function(){ 
                    document.getElementsByClassName("top")[0].classList.remove("success");
                 }, 2000);
            }else{
                login_jd8lab("save");
            }

        }else{
            console.log("Save Failed");
        }
    }
    };

    xhr.send(`codeSave=${uri}`);
}

function evalPhp(w){
    var elem = w.parentElement;
    var code  = parsePhp(getCode(elem));
    const xhr = new XMLHttpRequest();
    const url = "?";
    

    var blok = document.querySelectorAll('.blok');
    var index = Array.prototype.indexOf.call(blok, w.parentNode);

    var list_isi = [];
    for(var o=0; o<index; o++){
        var blokTarget = blok[o].querySelector('#code');
        var cmTmp = blokTarget.getAttribute('editor_id');
        list_isi.push(cm_list[cmTmp].getValue());
    }

    var isi = list_isi.join('');
        isi = parsePhp(isi);
        isi = parseEchoPhp(isi);

    const uri = encodeURIComponent(isi+code);
    // console.log(uri);

    xhr.open('POST', url, true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
    if(xhr.readyState === XMLHttpRequest.DONE) {
        if(xhr.status === 200){
            // console.log(xhr.responseText);
            if(xhr.responseText == "view_only_enabled"){
                alert("view only mode");
            }else if(xhr.responseText == "login_failed"){
                login_jd8lab("evalPhp");
            }else{
                // console.log(xhr.responseText);
                elem.querySelector('#output').innerHTML = `<code class="language-php">${xhr.responseText}</code>`;
                hljs.highlightElement(elem.querySelector('#output > code'));
            }

        }else{
            console.log("Run Failed");
        }
    }
    };

    xhr.send(`evalPhp=${uri}`);
}

function getCode(elem){
    var output = elem.querySelector('#output');
    var code = elem.querySelector('#code');
    var cm = code.getAttribute('editor_id');

    var isi = cm_list[cm].getValue();
        return isi;
}

function renderToHtml(){
    if(confirm("This page will reload after rendering and will DELETE any unsaved blocks. make sure to SAVE and RELOAD before pressing render. Press OK if you done.")){
        // delete blok yang tertulis di file html (reset blok)
        var blok = document.getElementsByClassName('blok');
        for(var i=0;i<blok.length;i++){
            blok[i].remove();
        }

        var html = document.documentElement.outerHTML; 


        // change to cdn
        html = html.replace("jd8_system/import/php/codemirror.min.css", "https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.0/codemirror.min.css");
        html = html.replace("jd8_system/import/php/codemirror.min.js", "https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.0/codemirror.min.js");
        html = html.replace("jd8_system/import/php/xml.min.js", "https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.0/mode/xml/xml.min.js");
        html = html.replace("jd8_system/import/php/javascript.min.js", "https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.0/mode/javascript/javascript.min.js");
        html = html.replace("jd8_system/import/php/css.min.js", "https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.0/mode/css/css.min.js");
        html = html.replace("jd8_system/import/php/clike.min.js", "https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.0/mode/clike/clike.min.js");
        html = html.replace("jd8_system/import/php/php.min.js", "https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.0/mode/php/php.min.js");

        html = html.replace("jd8_system/import/highlightjs.min.css", "https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/styles/default.min.css");
        html = html.replace("jd8_system/import/highlight.min.js", "https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/highlight.min.js");
        
        const blob = new Blob([html], {type: "text/html"});
        const url = URL.createObjectURL(blob);
        const a = document.createElement("a");
        a.href = url;
        a.download = document.querySelector("title").innerText+".html";
        a.click();
        URL.revokeObjectURL(url);
      
        alert('rendered to html.');
        location.reload();
        // catatan : lebih baik merender data save terbaru untuk mereplace param print_jd8lab wkwk
    }
}

function runAll(){
    if (confirm("mensimulasikan click run untuk setiap  blok code dengan konsekwensi akan terjadi perulangan") == true) {
        var blok = document.getElementsByClassName('blok');
        console.log('simulate click all run button');
        for(var i=0;i<blok.length;i++){
            blok[i].querySelector('#run').click();
        }
    }
}

function highlightOutputJs(){
    var js = document.querySelectorAll("#output");
    for(var i=0;i<js.length;i++){
        hljs.highlightElement(js[i].querySelector("code"));
    }
}


function hideNullHeadingComment(){
    var blok = document.querySelectorAll(".blok");
    for(var i=0; i<blok.length;i++){
        var heading = blok[i].querySelector("#judul").value;
        var comment = blok[i].querySelector("#komen").value;
        var btnShowHide = blok[i].querySelector("#btnShowHide");

        if(heading == '' && comment == ''){
            btnShowHide.click();
        }

        // numpang, untuk resize
        blok[i].querySelector("#komen").click();
    }
}


function login_jd8lab(callback) {
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
                }
                if(callback == "evalPhp"){
                    alert("please run again");
                }
            }
        }else{
            console.log("login_failed");
        }
    }
    };

    xhr.send(`login=${uri}`);
  }
}

function print_jd8lab(w){
    // delete blok yang tertulis di file html (reset blok)
    var blok = document.getElementsByClassName('blok');
    if(blok.length > 0){
        for(var i=0;i<blok.length;i++){
            blok[i].remove();
        }
    }

    if(w){
        var parse = JSON.parse(w.pack);
        var pack = parse;
        try {
            document.getElementById('title-project').value = pack[0][0];
            document.getElementById('description-project').value  = pack[0][1];
            document.getElementById('description-project').click();
        
            for(var i=0;i<pack[1].length;i++){
                addBlok(pack[1][i][0], pack[1][i][1], pack[1][i][2], pack[1][i][3]);
            }
            highlightOutputJs();
            hideNullHeadingComment();
        }
        catch(err) {
            console.log(err);
        }
    }else{
        addBlok("", "", "<\?php\necho 'hello';");
    }



    // console.log(w);

}

function cekUnSave(){
	window.cekLeaveSite = "unsave";
}

window.addEventListener('beforeunload', function (e) {
    if (cekLeaveSite == "unsave") {
        e.preventDefault();
        e.returnValue = 'mau ke mana?';
    }
});

window.addEventListener('DOMContentLoaded', (event) => {
    console.log('welcome to jd8lab v1.1');
    // note, resize all textarea
    initAllCode();
    <?php echo "print_jd8lab($openFile);";?>
});
</script>

</html>
<?php endif; // end open page js?>