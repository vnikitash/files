<?php

$pieces = explode('.', $_FILES['file']['name']);
$pieces = array_reverse($pieces);
$ext = $pieces[0];
$fileName = (time() . rand(10000,99999)) . '.' . $ext;
$folderToUpload = __DIR__ . '/files/';

copy($_FILES['file']['tmp_name'], $folderToUpload . $fileName);