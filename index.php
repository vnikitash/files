<?php


file_put_contents("index.txt", 'hello', FILE_APPEND);



$f = fopen('index.txt', 'r');

while ($txt = fread($f, 4)) {
    echo $txt;
}