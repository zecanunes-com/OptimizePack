<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem t�tulo</title>
</head>

<body>

<?php
 	//Defini��o dos Diret�rios que est�o envolvidos no OptimizePack by PedalDireito
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

	//chamando arquivo de fun��es
	include_once "funcoes.php";
	
	
	
	//Posicionar no diret�rio WP-Content
	posiciona_wpcontents();
	$wpcontent=getcwd();

	//Procura-se um diret�rio do OptimizePress nesse WordPress
	//Ser� que � um Theme?
	if ( (is_dir($wpcontent . '\themes\optimizePressTheme')) || (is_dir($wpcontent . '/themes/optimizePressTheme')) )
		{
			echo 'Achamos um Optimize"Theme"!';
			
			//passeando pelos diret�rios
			$jtamanho = (count($origem)-1);
			for ($j = 0; $j <= $jtamanho; $j++) 
			{
				apaga($destino_theme[$j]);
				copia($origem[$j],$recaminho[$j].$destino_theme[$j]);
			}
		}
	//Ou ser� que � um Plugin?
	else if ( (is_dir($wpcontent . '\plugins\optimizePressTheme'))  ||  (is_dir($wpcontent . '/plugins/optimizePressTheme')) )
		{
			echo "<br/>Achamos um Optimize:\"Plugin\"!";
			
			//passeando pelos diret�rios
			$jtamanho = (count($origem)-1);
			for ($j = 0; $j <= $jtamanho; $j++) 
			{
				apaga($destino_plugin[$j]);
				copia($origem[$j],$recaminho[$j].$destino_plugin[$j]);
			}
			
		}
	//Ou ainda pode n�o ser nada... 
	else
		{
			echo "<br/>N�o achamos um OptimizePress instalado. Conhe�a e Adquira J� o seu clicando aqui!";
		}




?>

</body>