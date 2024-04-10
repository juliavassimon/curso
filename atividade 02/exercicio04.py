#Dada uma lista de números inteiros, escreva uma função para encontrar o
#segundo maior valor na lista


def segundo_maior(lista):
    lista_sem_duplicatas = list(set(lista))
    if len(lista_sem_duplicatas) < 2:
        return "A lista precisa de dois números únicos."
    lista_ordenada = sorted(lista_sem_duplicatas, reverse=True)
    return lista_ordenada[1]

numeros = [50, 1, 10, 15, 18, 25, 30]
segundo_max = segundo_maior(numeros)
print(segundo_max)
