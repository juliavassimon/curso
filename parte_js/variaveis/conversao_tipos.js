//conversao implicita: permite q a gente converta um tipo de dados em outros
//comparação precisa ser com "=="
//o js q converteu as variaveis
const numero = 2;
const numeroSring = "2";
console.log(numero == numeroSring);
//conversao explicita
//função Number e String
//Number vai converter pra um numero e Strin pra uma String
//dentro da string n pode ter letra com numeros
console.log(numero + Number(numeroSring));
