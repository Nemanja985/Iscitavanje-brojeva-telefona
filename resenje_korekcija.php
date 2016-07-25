<?php
function sortir($path_name) {
	$y = scandir($path_name);
		foreach ($y as $result) {
			if ($result === '.' or $result === '..') continue;
				$new_path = $path_name . '/' . $result;
				if (is_dir($new_path)) {
					sortir($new_path);
					} else {
						header('Content-Type: text/plain');
						$contents = file_get_contents($new_path);
							if (preg_match_all('/^\+(\d{1,3})[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$/m', $contents, $match)) {
								$myfile = fopen("C:/xampp/htdocs/myapp/newfile.txt", "w+");
									$a = implode("\n", $match[0]);
										fwrite($myfile, $a);
											fclose($myfile);
							}
						}
}return;}
$path = "C:/xampp/htdocs/myapp";
sortir($path);
?>