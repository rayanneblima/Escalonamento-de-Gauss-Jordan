<?php
    $qntlinhas = $_POST['linhas'];
    $qntcolunas = $_POST['colunas'];
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
		<h1>Insira os valores: </h1>	
		<hr>
		<form action="solucao.php" method="post">
			<table>
				<tbody>
					<thead>
						<tr>
						<th>#</th>
							<?php for($j = 1; $j <= $qntcolunas; $j++ ) { ?>
								<th>
                                    <!--se a qntcolunas for menor, imprime X; senão imprime o resultado da função-->
									<?php echo ($j != $qntcolunas)?"X<sub>$j<?/sub>":"resultado da função"?>
								</th>
							<?php } ?>
						</tr>
					</thead>
					<?php for($i = 1; $i <= $qntlinhas; $i++ ) { ?>
						<tr>
							<th scope="row"><?= "L<sub>$i</sub>" ?></th>

							<?php for($j = 1; $j <= $qntcolunas; $j++ ) { ?>
								<td class="<?php echo ($j == $qntcolunas)?'success':''?>">
									<input type="number" step="0.1" name="matriz[<?php echo $i ?>][<?php echo $j ?>]" 
										placeholder="<?="L".$i." - C".$j?>" required/>
								</td>
							<?php } ?>
						</tr>
					<?php } ?>
					<tr>
						<td colspan="<?php echo $qntcolunas ?>">
							<p><input type="submit" value="Resolver"/></p>
						</td>
					</tr>
				</tbody>
			</table>
			<input type="hidden" name="linhas" value="<?php echo $qntlinhas ?>"/>
			<input type="hidden" name="colunas" value="<?php echo $qntcolunas ?>"/>
		</form>
    </div>
  </body>		
</html>