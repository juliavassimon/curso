#Utilizando pandas, como lidar com valores ausentes (NaN) em um
#DataFrame?

import pandas as pd
import numpy as np


dados = {'A': [1, 2, np.nan, 4],
         'B': [5, np.nan, np.nan, 8],
         'C': [np.nan, 10, 11, 12]}
df = pd.DataFrame(dados)

df_preenchido_media = df.fillna(df.mean())
print(df_preenchido_media)
