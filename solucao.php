<?php
    //inclui a classe das definições das matrizes e cria um novo método
	include 'class.gauss.php';
	$method = new Gauss($_POST['matriz']);
	//$method->getGaussSolution();
?>

<!DOCTYPE html>		
<html lang="pt-br">		
  <head>		  
    <meta charset="utf-8">		  
    <meta name="viewport" content="width=device-width, initial-scale=1">		  		  
    <title>Escalonamento de Gauss-Jordan</title>		  		 	  
  </head>		
  <body>	
    <div>	  
		<h1>Resultado:</h1>	
		<hr>
        <!--mostra o resultado de acordo com a matriz passada e a classe -->
		<?php $method->getGaussResult(); ?>
    </div>
  </body>		
</html>