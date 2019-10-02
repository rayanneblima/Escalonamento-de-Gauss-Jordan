<?php
    class Gauss {
    
        private $linhas;
        private $colunas;
        private $matriz;
    
        public function __construct($matriz){
            $this->matriz  = $matriz;
            $this->linhas  = count($matriz);
            $this->colunas = count($matriz['1']);
        }
        
        public function getGaussResult(){
            //$this->mostrarMatriz();
            
            for($x = 1; $x <= $this->linhas; $x++){
                $pivo = $this->matriz[$x][$x]; //pivo sempre na posição 11, 22, 33...
                for($i = $x; $i <= $this->linhas; $i++ ){ //enqt i <= qntlinhas
                    for($j = $x; $j <= $this->colunas; $j++ ){ //enqt j <= qntcolunas
                        if($i == $x) { //diagonal
                            $this->matriz[$i][$j] /= $pivo; //elementos da linha do pivo / pivo
                            continue;
                        } elseif($j == $x && $i != $x){
                            $aux = $this->matriz[$i][$j] * (-1); //troca sinal de tudo
                        }
                        //nova linha = linha antiga * -1 + linha a ser zerada (L2 - L1)
                        $this->matriz[$i][$j] =	$this->matriz[$x][$j] * $aux + $this->matriz[$i][$j];
                    }
                    //$this->mostrarMatriz();
                }
            }
            //faz a mesma coisa da função anterior mas "decrementando" a matriz, deixando o resultado de fora
            for($x = 4; $x > 0; $x--){
                //$pivo = $this->matriz[$x][$x];
                for($i = $x-1; $i > 0; $i-- ){
                    for($j = $x; $j <= $this->colunas; $j++ ){
                        if($j == $x){
                            $aux = $this->matriz[$i][$j] * (-1);
                        }
                        if (isset($this->matriz[$x][$j])){
                            $this->matriz[$i][$j] =	$this->matriz[$x][$j] * $aux + $this->matriz[$i][$j];
                        }
                    }
                    //$this->mostrarMatriz();
                }
            }
            
            $this->imprimirMatriz();
        }
        
        private function imprimirMatriz() {
            echo '<table>';
                echo '<tbody>';
                    echo '<thead>';
                        echo '<tr>';
                            echo '<th>#</th>';
                            //estrutura do print
                            for($j = 1; $j <= $this->colunas; $j++ ) { 
                                echo '<th>';
                                    echo ($j != $this->colunas)?"X<sub>$j<?/sub>":"b";
                                echo '</th>';
                            }
                        echo '</tr>';
                    echo '</thead>';
                //estrutura do print
                for($i = 1; $i <= $this->linhas; $i++ ) {
                    echo '<tr>';
                    echo "<th scope='row'>L<sub>".$i."</sub></th>";
                    for($j = 1; $j <= $this->colunas; $j++ ) {
                        echo "<td class=".(($j == $this->colunas)?'success':'').">";
                        //echo '<td>';
                            echo "<input type='text' value='".round($this->matriz[$i][$j], 1)."' disabled style='background:#FFF'>";
                        echo '</td>';
                    }
                    echo '</tr>';
                }
                echo '</tbody>';
            echo '</table>';
        }
    }  
?>