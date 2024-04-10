#Utilizando pandas, como selecionar uma coluna específica e filtrar linhas
#em um “DataFrame” com base em uma condição?

import pandas as pd


dados = {'Nome': ['Alice', 'Bob', 'Charlie', 'David', 'Emily'],
         'Idade': [25, 30, 35, 40, 45],
         'Cidade': ['São Paulo', 'Rio de Janeiro', 'Belo Horizonte', 'Salvador', 'Curitiba']}
df = pd.DataFrame(dados)
coluna_idade = df['Idade']
linhas_filtradas = df.loc[df['Idade'] > 30]