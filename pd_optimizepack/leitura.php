<head>
</head>

<body>

<?php
 
	echo __DIR__;
	echo "<br />";

	//voltar ao diretório WP-Content
	chdir('../..');
	$contentdir = getcwd();
	echo $contentdir;

	//listando tudo
	if ( (is_dir($contentdir . '\themes\optimizePressTheme')) || (is_dir($contentdir . '/themes/optimizePressTheme')) )
		{
		echo "Achamos um Optimize:Theme!<br/>";
		echo getcwd()."Antes de tentar:<br/>";
		$testedir = 'themes/optimizePressTheme/lib/assets/images/button/button-text-blue';
		chdir($testedir);
		echo getcwd()."Chegou??<br/>";
		print_r( scandir( getcwd() ) );
		}
	else if ( (is_dir($contentdir . '\plugins\optimizePressTheme'))  ||  (is_dir($contentdir . '/plugins/optimizePressTheme')) )
		{
			echo "Achamos um Optimize:Plugin!<br/>";
			
		}
	else 
		{
			echo "Não é Theme!<br/>";
		}

?>

</body>