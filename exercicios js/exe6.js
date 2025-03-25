//Crie um programa que inverta uma string (sequência de caracteres).
function inverterString(str) {
    return str.split('').reverse().join('');
}

var minhaString = window.prompt("diga uma palavra:");
var stringInvertida = inverterString(minhaString);

window.alert(stringInvertida);
