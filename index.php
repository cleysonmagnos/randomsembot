<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
    $teste = true;
    $array = array('alfredjudokus100289', 'aten', 'winsock', 'commanderroot');
    $channel = $_GET['channel'];
    while($teste){
		$retorno = trim(file_get_contents("https://2g.be/twitch/randomviewer.php?channel=$channel"));

		if(!in_array($retorno, $array)){
			echo $retorno;
			$teste = false;
		}
    }
	//var_dump($teste); die;
	?>
  </body>
</html>

 
