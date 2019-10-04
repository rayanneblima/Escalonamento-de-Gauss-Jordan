<!DOCTYPE html>		
<html lang="pt-br">		
  <head>		  
    <meta charset="utf-8">		  
    <meta name="viewport" content="width=device-width, initial-scale=1">		  		  
    <title>Escalonamento de Gauss-Jordan</title>		  		 		  
  </head>		
  <body><center>
    <div>	  
      <h1>Informe:</h1>	
      <hr>
      <form action="sendmatriz.php" method="post">
        <div>
        <!--linhas=restricoes, colunas=variaveis-->
          <label for="linhas">Número de Restrições: </label> 
          <input type="number" name="linhas" required>
        </div>
        <br>
        <div >
          <label for="colunas">Número de Variáveis: </label>
          <input type="number" name="colunas" required>
        </div>
        <br>
        <button type="submit">Gerar Campos</button>
      </form>
    </div>	
  </body>		
</html>