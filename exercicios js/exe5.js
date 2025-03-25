//Crie um programa que conte quantas vezes uma letra aparece em uma palavra

function contarLetra(palavra, letra) {
    let contador = 0;
    
    // Loop para percorrer cada letra da palavra
    for (let i = 0; i < palavra.length; i++) {
        // Se a letra na posição i for igual à letra procurada
        if (palavra[i] === letra) {
            contador++;
        }
    }
    
    return contador;
}

// Exemplo de uso
let palavra = window.prompt("diga uma palavra:");
let letra = window.prompt("diga uma letra:");

window.alert("A letra '" + letra + "' aparece " + contarLetra(palavra, letra) + " vezes na palavra '" + palavra + "'.");
