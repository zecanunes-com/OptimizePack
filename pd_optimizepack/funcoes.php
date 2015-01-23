<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>
<?php

function posiciona_wpcontents()
	{
		
		//o arquivo PHP que possui essa função, DEVE estar dentro de \WP-Contents\plugins\"NomePlugin"\
		chdir(__DIR__); 	//pega o diretório desse plugin
		chdir('../..');		//desce 2 diretórios para alcançar o "WP-Contents"
		//echo "<br/>Função Posiciona_WPContents:" . getcwd();
	}//function posiciona_wpcontents


function apaga($orig)
	{
		posiciona_wpcontents();
		chdir($orig);
		echo "<br/>" . getcwd();
		$lista = scandir( getcwd() );
		$listamanho = (count($lista)-2);  //Menos 2 porque estamos tirando os "." e ".." da lista
		echo "<br/>$listamanho arquivo(s) sendo apagado(s)...";
		for ($i = 2; $i <= $listamanho; $i++) 
			{
				//echo "<br/>Apagando " . $lista[$i];
				unlink ($lista[$i]);
			}
	}//functiona apaga
	

function copia($orig,$dest)
	{
		
		//acessando a pasta a ser copiada: origem
		posiciona_wpcontents();
		chdir($orig);
		//echo "<br/>Function Copia, Estamos no Diretório: " . getcwd() . "<br/>";
		
		//listando arquivos a serem copiados
		$lista = scandir( getcwd() );
		$listamanho = (count($lista)-2);
		//echo "<br/>Count: ".count($lista);
		echo "<br/>$listamanho arquivo(s) sendo copiado(s)...";
		
		//Copiando um por um
		for ($i = 2; $i <= $listamanho; $i++) 
			{
				if (copy($lista[$i], $dest."/".$lista[$i])) 
				{
					//echo "<br/>Copiando $lista[$i] :OK";
				}
				else
				{
					echo "<br/>Copiando $lista[$i] : FALHOU!";
				}
			}
	}//function copia
?>