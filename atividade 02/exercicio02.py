#Escreva uma função que receba uma lista de números e retorne outra lista
#com os números primos presentes.

def verificacao (numeros):
    if numeros <=1:
        return False
    for i in range (2, int (numeros**0.5)+1):
        if numeros % i ==0:
            return True

def primos(lista):
    primos = [n for n in lista if verificacao ]
    return primos

lista_numeros = [1,2,34,5,6,7,8,9,10]
resultado = primos(lista_numeros)
print(resultado)

