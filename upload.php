<?php

$image = base64_decode(explode(',',$_POST["image"])[1]);
$name = md5($image);
if (!file_exists($name.'.jpg')) {
    $fh = fopen($name.'.jpg','w+');
    fwrite($fh,$image);
    fclose($fh);
}
echo json_encode(['img' => $name.'.jpg']);