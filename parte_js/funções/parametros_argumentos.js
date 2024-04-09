//parametros serve pra função receber informações necesssarias 
//ordem dos parametros
function soma(num1, num2){
    return num1 + num2;
}
//os numeros são parametros
console.log(soma(2,5));

function nomeIdade(nome, idade){
    return `Meu nome é ${nome} e minha idade é ${idade}`;    
}
console.log(nomeIdade('Júlia', 21))

function comParametro(param) {
    console.log(param)
}
comParametro()
