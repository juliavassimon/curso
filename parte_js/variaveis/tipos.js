// var é tipo global
//pode usar as variaveis antes de declarar, n é uma boa pratica
/*var altura = 5;
var comp =  5;
var area = altura * comp;
console.log(area);

//let
//so pode usar dps de declarar
//aceita mudança de valores
let forma = 'Retângulo'; 
let alt = 5;
let com = 5;
let area2;
if (forma === "Retângulo"){
    area2 = alt * com;
}else{
    area2 = (alt * com)/2
}
console.log(area2);*/

//const é uma variavel que o valor n pode ser mudado
//a variavel precisa ser inicializada
const forma2 = "Quadrada";
const altu = 2;
const comprimento = 2;
let  area3 ; //como é uma variavel q muda, n pode ser const
if (forma2 === "Quadrado"){
    area3 = altu * comprimento;
}else{
    area3 = (altu* comprimento)/2
}
console.log(area3);