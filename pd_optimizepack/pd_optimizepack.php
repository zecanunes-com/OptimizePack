<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>

<?php
 	//Definição dos Diretórios que estão envolvidos no OptimizePack by PedalDireito
	$origem = array(
				'plugins/pd_optimizepack/customizadas/button-text-blue',
				'plugins/pd_optimizepack/customizadas/button5',
				'plugins/pd_optimizepack/customizadas/button-4-text/dark',
				'plugins/pd_optimizepack/customizadas/button-4-text/light');
	$originais = array(
				'plugins/pd_optimizepack/originais/button-text-blue',
				'plugins/pd_optimizepack/originais/button5',
				'plugins/pd_optimizepack/originais/button-4-text/dark',
				'plugins/pd_optimizepack/originais/button-4-text/light');
	$recaminho = array(
				'../../../../',
				'../../../../',
				'../../../../../',
				'../../../../../');
	$destino_theme = array(
				'themes/optimizePressTheme/lib/assets/images/button/button-text-blue',
				'themes/optimizePressTheme/lib/assets/images/button/button5',
				'themes/optimizePressTheme/lib/assets/images/button/button-4-text/dark',
				'themes/optimizePressTheme/lib/assets/images/button/button-4-text/light');
	$destino_plugin = array(
				'plugins/optimizePressTheme/lib/assets/images/button/button-text-blue',
				'plugins/optimizePressTheme/lib/assets/images/button/button5',
				'plugins/optimizePressTheme/lib/assets/images/button/button-4-text/dark',
				'plugins/optimizePressTheme/lib/assets/images/button/button-4-text/light');

	//chamando arquivo de funções
	include_once "funcoes.php";
	
	
	
	//Posicionar no diretório WP-Content
	posiciona_wpcontents();
	$wpcontent=getcwd();

	//Procura-se um diretório do OptimizePress nesse WordPress
	//Será que é um Theme?
	if ( (is_dir($wpcontent . '\themes\optimizePressTheme')) || (is_dir($wpcontent . '/themes/optimizePressTheme')) )
		{
			echo 'Achamos um Optimize"Theme"!';
			
			//passeando pelos diretórios
			$jtamanho = (count($origem)-1);
			for ($j = 0; $j <= $jtamanho; $j++) 
			{
				apaga($destino_theme[$j]);
				copia($origem[$j],$recaminho[$j].$destino_theme[$j]);
			}
		}
	//Ou será que é um Plugin?
	else if ( (is_dir($wpcontent . '\plugins\optimizePressTheme'))  ||  (is_dir($wpcontent . '/plugins/optimizePressTheme')) )
		{
			echo "<br/>Achamos um Optimize:\"Plugin\"!";
			
			//passeando pelos diretórios
			$jtamanho = (count($origem)-1);
			for ($j = 0; $j <= $jtamanho; $j++) 
			{
				apaga($destino_plugin[$j]);
				copia($origem[$j],$recaminho[$j].$destino_plugin[$j]);
			}
			
		}
	//Ou ainda pode não ser nada... 
	else
		{
			echo "<br/>Não achamos um OptimizePress instalado. Conheça e Adquira Já o seu clicando aqui!";
		}




?>

</body>