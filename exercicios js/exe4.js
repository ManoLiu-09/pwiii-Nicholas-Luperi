//crie uma função que verifica se um número é primo. Um número primo é aquele que só pode 
//ser dividido por 1 e por ele mesmo.
var primo = parseFloat(window.prompt("diga um número:"));
if(primo % 2 == 0){
    window.alert("não é primo");
}else{
    window.alert("é primo")
};

