<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>你能绕过拿到flag嘛</title>
    <style>
        ol {
            background-color: #202020;
        }
        
        li {
            font-family: "Courier New";
            font-size: 16px;
            line-height: 25px;
            color: #fff;
        }
        
        .variable {
            color: #7cbce4;
        }
        
        .string {
            color: #c37e63;
        }
        
        .keyword {
            color: #4183c8;
        }
    </style>
</head>
<body>
    <ol>
        <li><span class="variable">$flag</span> = <span class="string">'flag{'</span>.<span class="keyword">md5</span>(<span class="string">1020</span>).<span class="string">'}'</span>;</li>
        <li><span class="keyword">if</span> (<span class="keyword">isset</span>(<span class="variable">$_GET</span>[<span class="string">'a'</span>]) && <span class="keyword">isset</span>(<span class="string">$_GET</span>[<span class="string">'b'</span>])) {</li>
        <li>&nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">if</span> (<span class="variable">$_GET</span>[<span class="string">'a'</span>] != <span class="variable">$_GET</span>[<span class="string">'b'</span>]) {</li>
        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">if</span> (<span class="keyword">md5</span>(<span class="variable">$_GET</span>[<span class="string">'a'</span>]) === <span class="keyword">md5</span>(<span class="variable">$_GET</span>[<span class="string">'b'</span>])) {</li>
        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">echo</span> <span class="variable">$flag;</span></li>
        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</li>
        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">else</span> {</li>
        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">echo</span> <span class="string">'Wrong!'</span>;</li>
        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</li>
        <li>&nbsp;&nbsp;&nbsp;&nbsp;}</li>
        <li>}</li>
    </ol>
</body>
</html>
<?php
error_reporting(0);
    $flag = 'flag{'.md5(1020).'}';
    if (isset($_GET['a']) && isset($_GET['b'])) {
        if ($_GET['a'] != $_GET['b']) {
            if (md5($_GET['a']) === md5($_GET['b'])) {
                echo $flag;
            }
            else {
                echo 'Wrong!';
            }
        }
    }