<?php
//Substituir todas as vogais por *
$string = "Manipulacao de Strings";
echo str_replace(["a","e","i","o","u"],"*", $string);

//Verificar se um número é primo
function isPrimo($num){
    for($i = 2; $i <$num; $i++){
        if($num % $i === 0){
            return false;
        }
    }
    return true;
}
echo("<br>");
$numero = 19;
if(isPrimo($numero)){
    echo "$numero é um número primo.";
} else {
    echo "$numero é um numero primo.";
}

//Inverter uma string sem usar a função streev
$string = "Repeticao";
$invertida = "";

for($i =strlen($string) - 1; $i >= 0; $i--){
    $invertida .= $string[$i];
}

echo "<br>";
echo $invertida;

//Crie uma função que verifique se uma palavra é um palindromo
function isPalindromo($palavra){
    $palavraInvertida = strrev($palavra);
    return strtolower($palavra) === strtolower($palavraInvertida);
}

echo("<br>");
$teste = "radar";
if(isPalindromo($teste)){
    echo "$teste é um palindromo";
} else {
    echo "$teste não é um palindromo";
}

echo "<br>"; 

// 4) Crie uma função que receba um número e retorne se é positivo, negativo ou zero.

function isPositivoNegativo($number){
    if ($number > 0) {
        return "é positivo";
    } elseif ($number < 0) {
        return "é negativo";
    } else {
        return "zero";
    }
}

$teste = -13;
echo("<br>");
echo "$teste " . isPositivoNegativo($teste);
echo("<br>");
echo "<br>";

// 5) Conte o número de palavras em uma frase e imprima cada palavra em uma nova linha.

$frase = "o naruto pode ser um pouco duro as vezes";

$array = explode(" ",$frase);
foreach ($array as $palavra) {
    echo $palavra . "<br>";
}
echo "  ||  o número de palavras é: " . (str_word_count($frase));
echo("<br>");
echo "<br>";


// 7) Crie um programa que imprima os números de 1 a 20, substituindo múltiplos de 3 por "Fizz" e múltiplos de 5 por "Buzz".

function isMultiplo($numero) {
    return ($numero % 3 == 0 || $numero % 5 == 0);
}

for ($i = 1; $i <= 20; $i++) {
    if (isMultiplo($i)) {
        if ($i % 3 == 0) {
            echo "Fizz ";
        }
        if ($i % 5 == 0) {
            echo "Buzz ";
        }
    } else {
        echo $i;
    }

    echo "<br>";
}

echo "<br>";

// 8) Crie uma função que remova os espaços em branco de uma string.

$frase8 = " Bloodborne e o melhor jogo de todos ";
$fraseSemEspaco = str_replace(' ', '', $frase8);
echo "Frase sem espaços: " . $fraseSemEspaco;
echo "<br>";
echo "<br>";


// 9) Crie um programa que calcule e imprima os números Fibonacci até o décimo termo.

$primeir_num = 0;  
$segund_num = 1;  
$nume = 10;
echo "Números fibonacci: $primeir_num, $segund_num";  

for($i = 2; $i < $nume; $i++) {  
    $prox_num = $primeir_num + $segund_num;  
    echo ", $prox_num";  
    $primeir_num = $segund_num;  
    $segund_num = $prox_num;  
}  

echo "<br>";
echo "<br>";


// 10) Crie uma função que receba um texto e retorne se é um pangrama (contém todas as letras do alfabeto pelo menos uma vez).

function isPangrama($texto) {
    $letras = range('a', 'z');

    foreach ($letras as $letra) {
        if (!str_contains(strtolower($texto), $letra)) {
            return false;
        }
    }

    return true;
}

$texto9 = "Juiz faz com que whisky de malte baixe logo preço de venda.";

if (isPangrama($texto9)) {
    echo "O texto '$texto9' é um pangrama";
} else {
    echo "O texto '$texto9' não é um pangrama";
}

echo "<br>";

?>