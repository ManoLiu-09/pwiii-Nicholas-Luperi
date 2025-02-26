<?php
$altura = 1.80;
$peso = 90;
$imc = $peso/($altura*$altura);

if ($imc<18.5) {
    echo "seu imc é: $imc e voce esta abaixo do peso";
}
else if ($imc >= 18.5 && $imc <= 24.99 ) {
    echo "seu imc é: $imc e voce esta normal";
} 
else if ($imc >= 25 && $imc <= 29.99 ) {
    echo "seu imc é: $imc e voce esta com sobrepeso";
} 
else {
    echo "seu imc é: $imc e voce esta obesidade";
} 