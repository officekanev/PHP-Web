<?php
$output = '';
$score = 0;
$alltag = ["kbd","keygen","label","legend","li","link","map","mark","menu","meta","meter","nav","noframes","noscript","object","ol",
    "optgroup","option","output","p","param","pre","progress","q","rp","rt","ruby","s","samp","script","section","select",
    "small","source","span","strike", "strong","style","sub","summary","sup","table","tbody","td","textarea","tfoot","th",
    "thead","time","title","tr","track","tt","u","ul","var","video","wbr","DOCTYPE","a","abbr","acronym","address","applet",
    "area","article","aside","audio","b","base","basefont", "bdi","bdo","big", "blockquote","body","br","button","canvas",
    "caption","center", "cite","code","col","colgroup","command","datalist","dd","del","details","dfn","dir","div","dl","dt",
    "em","embed","fieldset","figcaption","figure","font","footer","form","frame","frameset",
    "h1","h2","h3","h4","h5","h6","head","header","hgroup","hr","html","i","iframe","img","input","ins"];

if(isset($_GET['Submit'])){
    $text = $_GET['input'];
     $text = trim($text);
    if(in_array($text, $alltag)){
        $output = "<strong>Valid HTML tag!</strong>";
        ++$score;
    }else{
        $output = "<strong>Invalid HTML tag!</strong>";
    }
}

include 'htmltagcounter_frontend.php';