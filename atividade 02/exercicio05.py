#Crie uma função que receba uma lista de tuplas, cada uma contendo o
#nome e a idade de uma pessoa, e retorne a lista ordenada pelo nome das
#pessoas em ordem alfabética

def ordenar_nome(lista_pessoas):
    lista_ordenada = sorted(lista_pessoas, key=lambda pessoa: pessoa[0])
    return lista_ordenada

lista_de_pessoas = [("Renata", 30), ("Carla", 25), ("Ana", 35), ("Daniel", 20)]
resultado = ordenar_nome(lista_de_pessoas)
print(resultado)


