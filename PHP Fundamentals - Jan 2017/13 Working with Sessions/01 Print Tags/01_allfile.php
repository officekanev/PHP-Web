<?php

session_start();
// if no have session_score  ->
if(!isset($_SESSION['score'])){
    $_SESSION['score'] = 0;// session_score = 0;
}

$htmlTags = "<!DOCTYPE> <a> <abbr> <acronym> <address> <applet> <area> <article> <aside>
    <audio> <b> <base> <basefont> <bdi> <bdo> <big> <blockquote> <body> <br> <button> <canvas>
    <caption> <center> <cite> <code> <col> <colgroup> <command> <datalist> <dd> <del> <details>
    <dfn> <dir> <div> <dl> <dt> <em> <embed> <fieldset> <figcaption> <figure> <font> <footer>
    <form> <frame> <frameset> <h1> <h2> <h3> <h4> <h5> <h6> <head> <header> <hgroup> <hr> <html>
    <i> <iframe>
    <img> <input> <ins> <kbd> <keygen> <label> <legend> <li> <link> <map> <mark> <menu>
    <meter> <meter> <nav> <noframes> <noscript> <object> <ol> <optgroup> <option> <output>
    <p> <param> <pre> <progress> <q> <rp> <rt> <ruby> <s> <samp> <script> <section> <select>
    <small> <source> <span> <strike> <strong> <style> <sub> <summary> <sup> <table> <tbody>
    <td> <textarea> <tfoot> <th> <thead> <time> <title> <tr> <track> <tt> <u> <ul> <video> <wbr> <var>";

$htmlTags = explode(' ', $htmlTags);
//echo htmlspecialchars(implode(', ', $htmlTags));
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head lang="en">
    <title>musaka</title>
    <meta charset="UTF-8">
</head>
<body>
    <form method="GET">
        <div class="form">
            <label>Input</label>
            <input type="text" name="input" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
    </form>

    <?php
    if(isset($_GET['input'])){
        $input = $_GET['input'];
        if($input[0] != '<' && $input[strlen($input) - 1] != '>') {
            $input = "<" . $input . ">";
        }


        if(in_array($input, $htmlTags)){
            echo "<h1>Valid HTML tag</h1>";
            $_SESSION['score']++;
        }else{
            echo "<h1>Invalid HTML tag!</h1>";
        }
        echo "<h2>Score: " . $_SESSION['score'] . "</h2>";
    }
    ?>

</body>
</html>
