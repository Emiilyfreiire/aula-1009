<?php

 class Calculadora {

    public function calcular() {
        if (isset($_POST['doCalc'])) {
            if ($_POST['v2'] / $_POST['v3']){
                # Armazena a soma de [v1 + v2] na variável $resultado
                $resultado = $_POST['v2'] / $_POST['v3'];
                # Exibe a variável $resultado com os valores já somados
                return "Valor da mesa ".$_POST['v2']. " por pessoa " .$resultado;
    }  

 }
    }
        }
?>