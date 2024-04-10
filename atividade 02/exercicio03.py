# Escreva uma função que receba duas listas e retorne outra lista com os
#elementos que estão presentes em apenas uma das listas.

def listas (lista1, lista2):
    listas = list (set(lista1)^set(lista2))
    return listas 

lista3 = [1,2,3,4,5]
lista4 = [3,6,9,12,0]

resultado = listas(lista3, lista4)
print(resultado)


