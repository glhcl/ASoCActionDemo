<?php
sha = new SHA1CryptoServiceProvider(); //Example 2 md5 = HashAlgorithm.Create("MD5");
$file = $_GET['file'];
$content = $_GET['content'];
file_put_contents("/some/path/$file",$content);
fclose($fh);
?>

