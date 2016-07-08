<?php

function sortir($path_name) {
	$y = scandir($path_name);
		foreach ($y as $result) {
			if ($result === '.' or $result === '..') continue;
				$new_path = $path_name . '/' . $result;
				if (is_dir($new_path)) {
					sortir($new_path);
					} else {
						foreach ($new_path as $file) {
							if (preg_match('/^\s*(?:\+(\d{1,3}))[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$/', $result)) {
									fwrite($myfile, $result);
										} 
									}
						}
					}
				return;
	}
$path = 'C:\xampp\htdocs\bitgear';
$myfile = fopen("newfile.txt", "w")
sortir($path);
?>