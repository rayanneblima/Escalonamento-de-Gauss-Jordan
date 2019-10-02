<!DOCTYPE html>		
<html lang="pt-br">		
  <head>		  
    <meta charset="utf-8">		  
    <meta name="viewport" content="width=device-width, initial-scale=1">		  		  
    <title>Escalonamento de Gauss-Jordan</title>		  		 		  
  </head>		
  <body><center>
    <div>	  
      <h1>Informe o tamanho da matriz:</h1>	
      <hr>
      <form action="sendmatriz.php" method="post">
        <div>
          <label for="linhas">Número de Linhas: </label>
          <input type="number" name="linhas" required>
        </div>
        <br>
        <div >
          <label for="colunas">Número de Colunas: </label>
          <input type="number" name="colunas" required>
        </div>
        <br>
        <button type="submit">Gerar Campos</button>
      </form>
    </div>	
  </body>		
</html>