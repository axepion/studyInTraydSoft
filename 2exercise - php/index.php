<?php
	
		$a = getcwd(); // используется путь исполняемого файла
		$b = opendir($a); //открываем данный путь
		$handle = $b; //записываем данный путь в переменную
		function witd($handle){
			if ($handle = opendir('.')) {
				while (false !== ($entry = readdir($handle))){
					if ($entry != "." && $entry != "..") {
						echo "$entry\n";
					}
					if ($entry == is_dir()){
						$handle = opendir($entry);
						witd($handle);
					}
				}
			}
		}
?>
