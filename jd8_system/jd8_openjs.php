
<?php if(@$openJs): // jd8lab : open page js
// ░░█ ▄▀█ █░█ ▄▀█ █▀ █▀▀ █▀█ █ █▀█ ▀█▀ ////////// ////////// ////////// ////////// ////////
// █▄█ █▀█ ▀▄▀ █▀█ ▄█ █▄▄ █▀▄ █ █▀▀ ░█░    
?>
<!DOCTYPE html>
<html lang="en" spellcheck="false">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nameFileToPrint; ?></title>
    <link rel="icon" type="image/x-icon" href="jd8_system/jd8.jpg">

    <link rel="stylesheet" href="jd8_system/import/codemirror.min.css">
    <script src="jd8_system/import/codemirror.min.js"></script>
    <script src="jd8_system/import/javascript.min.js"></script>

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
    padding: 4px 10px;
    color: #323330;
    background-color: #f0db4f;
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

<body style="background-color:#323330">

    <div class="container" style="border: solid #f0db4f;">

        <div class="top">
            <a href="?" class="btn-back">🔙</a>
            <a id="filename">
                <?php echo $nameFileToPrint; ?>
            </a>
            <input id="title-project" type="text" placeholder="untitled project" style="background-color:#f0db4f21"><br>
            <textarea id="description-project" oninput="resize(this)" onclick="resize(this)" placeholder="description" style="background-color:#f0db4f21"></textarea><br>
            <button id="save" onclick="save(this)" class="btn-save shadow">💾 Save</button>
            <button id="save" onclick="renderToHtml(this)" class="btn-render shadow">🔥 Render</button>
            <button id="run-all" onclick="runAll(this)" class="btn-run-all shadow">▶ Run All</button>
        </div>

        <div id="content">

            <div class="blok">
                <button onclick="deleteBlok(this)" class="btn-delete shadow">x</button>
                <button onclick="hideTitleComment(this)" class="btn-show-hide shadow" id="btnShowHide">show/hide heading and comment</button>
                <button onclick="moveDown(this)" class="btn-arrow shadow">↓</button>
                <button onclick="moveUp(this)" class="btn-arrow shadow">↑</button>

                <input id="judul" type="text" placeholder="heading"><br>
                <textarea id="komen" oninput="resize(this)" placeholder="comment"></textarea><br>

                <textarea id="code" class="code" oninput="resize(this)" onclick="resize(this)">console.log(document);</textarea><br>
                <button id="run" onclick="evalJs(this)" class="btn-run shadow">▶</button><br>
                <div id="output"><a style="color:#8080804f">output</a></div>
            </div><!-- end blok -->

        </div><!-- end content -->


    <button onclick="addBlok()" class="btn-add-blok shadow">+ Add</button>

    <div class="footer">
        <p>jd8lab v1</p>
    </div>

    </div><!-- end container -->


</body>


<script>
var variableTempJd8 = [];
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

function addBlok(judul ='', komen ='', code ='', output=''){
    var content = document.getElementById('content');

    if(output == ''){
        var strOutput = `<div id="output"><code><a style="color:#8080804f">output</a></code></div>`;
    }else{
        var strOutput = `<div id="output"><code>${output}</code></div>`;
    }

    var str = `<div class="blok">
                <button onclick="deleteBlok(this)" class="btn-delete shadow">x</button>
                <button onclick="hideTitleComment(this)" class="btn-show-hide shadow" id="btnShowHide">show/hide heading and comment</button>
                <button onclick="moveDown(this)" class="btn-arrow shadow">↓</button>
                <button onclick="moveUp(this)" class="btn-arrow shadow">↑</button>

                <input id="judul" type="text" placeholder="heading" value="${judul}"><br>
                <textarea id="komen" oninput="resize(this)" placeholder="comment">${komen}</textarea><br>

                <textarea id="code" class="code" oninput="resize(this)">${code}</textarea><br>
                <button id="run" onclick="evalJs(this)" class="btn-run shadow">▶</button><br>
                ${strOutput}
            </div><!-- end blok -->`;

    content.insertAdjacentHTML( 'beforeend', str);
    initAllCode();
}

function evalJs(w){
    window.variableTempJd8 = [];
    var elem = w.parentElement;
    var output = elem.querySelector('#output');
    var code  = parseJs(getCode(elem));
    // console.log(code);

    var blok = document.querySelectorAll('.blok');
    var index = Array.prototype.indexOf.call(blok, w.parentNode);

    var list_isi = [];
    for(var o=0; o<index; o++){
        var blokTarget = blok[o].querySelector('#code');
        var cmTmp = blokTarget.getAttribute('editor_id');
        list_isi.push(cm_list[cmTmp].getValue());
    }

    // console.log(list_isi);

    var isi = list_isi.join("\n\n");
        isi = parseJs(isi);
        isi = parseConsoleToFalse(isi);

    try {
        var evil = eval(isi+"\n\n"+code+"\n\n returnVariableTempJd8();");
        // alert(isi+"\n\n"+code+"\n\n returnVariableTempJd8();");

        // ktk 2 console.log, hanya dieksekusi yang awal
        // var evil = new Function(`return ${isi} ${code}`)();

        // if(typeof evil == 'object'){ // sudah dihandle function lain
        //     evil = JSON.stringify(evil);
        // }

        if(code ==""){
            evil = 'output';
        }
        output.innerHTML = `<code>${evil}</code>`;
        hljs.highlightElement(output.querySelector('code'));
    } catch (error) {
        output.innerHTML = `<code>${error}</code>`;
        hljs.highlightElement(output.querySelector('code'));
    }
}

function evalOnly(elem){ // todo -> belum guna
    var output = elem.querySelector('#output');
    var code = elem.querySelector('#code');
    var cm = code.getAttribute('editor_id');

    var isi = cm_list[cm].getValue();
        isi = parseJs(isi);

    try {
        var evil = eval(isi);

        if(typeof evil == 'object'){
            evil = JSON.stringify(evil);
        }
        output.innerHTML = `<code>${evil}</code>`;
        hljs.highlightElement(output.querySelector('code'));
    } catch (error) {
        output.innerHTML = `<code>${error}</code>`;
        hljs.highlightElement(output.querySelector('code'));
    }
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
        mode: "javascript"
      })

      cm_list.push(cm_add);
      code.setAttribute('editor_id', cm_list.length-1)
}


function parseJs(w){
    var w = w.replace(/console.log/g, 'printConsole');
    return w;
}

function parseConsoleToFalse(w){
    // this function will store echo, var_dump, print_r to variable $temp_var
    var w = w.replace(/console.log\(/g, 'falseReturn(');
    var w = w.replace(/printConsole\(/g, 'falseReturn(');
    return w;
}

function printConsole(w){
    console.log(w);
    return HandleReturn(w);
}

function HandleReturn(w){
    if(typeof w == 'object'){
            w = JSON.stringify(w);
    }
    return window.variableTempJd8.push(w);
}

function returnVariableTempJd8(){
    var out = window.variableTempJd8.join("\n👉 ");
    return "👉 "+out;
}

function falseReturn(){
    // return false;
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
        html = html.replace("jd8_system/import/codemirror.min.css", "https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.2/codemirror.min.css");
        html = html.replace("jd8_system/import/codemirror.min.js", "https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.2/codemirror.min.js");
        html = html.replace("jd8_system/import/javascript.min.js", "https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.2/mode/javascript/javascript.min.js");
        html = html.replace("jd8_system/import/highlightjs.min.css", "https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/styles/default.min.css");
        html = html.replace("jd8_system/import/highlight.min.js", "https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/highlight.min.js");
        html = html.replace("blok[0].remove();", "blok.remove();");

        const blob = new Blob([html], {type: "text/html"});
        const url = URL.createObjectURL(blob);
        const a = document.createElement("a");
        a.href = url;
        a.download = document.querySelector("title").innerText+".html";
        a.click();
        URL.revokeObjectURL(url);
      
          alert('rendered to html.');
          location.reload();
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

function vanillaTextarea(elem, crawl){
    var output = elem.value;
    var code  = parseJs(output);

    return code;
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
            console.log(blok.length);
            console.log("hapus "+i);
            blok[i].remove();
        }
    }

    if(w){
        var parse = JSON.parse(w.pack);
        var pack = parse;
        try {
            document.getElementById('title-project').value = pack[0][0];
            document.getElementById('description-project').value  = pack[0][1];
        
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
        addBlok("", "", "console.log(document);");
    }



    // console.log(w);

}


window.addEventListener('DOMContentLoaded', (event) => {
    console.log('welcome to jd8lab v1');
    // note, resize all textarea
    initAllCode();
    <?php echo "print_jd8lab($openFile);";?>
});
</script>

</html>
<?php endif; // end open page js?>
