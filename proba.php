<?php

$path = 'C:/xampp/htdocs/files';

function sortir($path_name) {
	$y = scandir($path_name);
		foreach ($y as $result) {
			if ($result === '.' or $result === '..') continue;
				$new_path = $path_name . '/' . $result;
				if (is_dir($new_path)) {
					echo $result, "<br>";
					sortir($new_path);
					} else {
						echo $result, "<br>";
						}
					}
				return;
	}
sortir($path);
?>