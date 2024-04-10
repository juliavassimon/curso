#Escreva uma função que receba uma lista de números e retorne outra lista
#com os números ímpares

def impares(lista):
    impares = [n for n in lista if n %2 != 0]
    return impares

lista_numeros = [1,2,34,5,6,7,8,9,10]
resultado = impares(lista_numeros)
print(resultado)
