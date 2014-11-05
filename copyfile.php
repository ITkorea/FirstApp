<?php
$file ='readme.txt';
$newfile = 'example.txt.bak';

if (!copy($file, $newfile)) {
	echo "failled to copy $file..........\n";
	
}
?> 
1105추가연습
