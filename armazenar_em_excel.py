import os
import pandas as pd

# Função para ler os dados do arquivo form_data.txt
def ler_dados_do_arquivo(arquivo):
    with open(arquivo, 'r', encoding='utf-8') as f:
        dados = f.readlines()
    return dados

# Função para armazenar os dados em um arquivo Excel
def armazenar_em_excel(dados, excel_file='dados_formulario.xlsx', sheet_name='Formulário'):
    # Inicializar dicionário para armazenar chaves e valores
    dados_dict = {}

    # Processar cada linha do arquivo
    for linha in dados:
        # Verificar se a linha contém ':'
        if ':' in linha:
            # Dividir cada linha em chave e valor
            chave, valor = linha.strip().split(':', 1)
            chave = chave.strip()  # Remover espaços em branco em torno da chave
            valor = valor.strip()  # Remover espaços em branco em torno do valor
            dados_dict[chave] = valor  # Adicionar chave e valor ao dicionário

    # Criar DataFrame pandas a partir do dicionário
    df = pd.DataFrame(list(dados_dict.items()), columns=['Chave', 'Valor'])

    # Salvar o DataFrame em um arquivo Excel
    df.to_excel(excel_file, index=False, sheet_name=sheet_name)

# Diretório onde os arquivos estão localizados (mesmo diretório deste script)
diretorio = os.path.dirname(os.path.abspath(__file__))
arquivo_entrada = os.path.join(diretorio, 'form_data.txt')
arquivo_excel = os.path.join(diretorio, 'dados_formulario.xlsx')

# Ler os dados do arquivo
dados = ler_dados_do_arquivo(arquivo_entrada)

# Armazenar os dados em um arquivo Excel
armazenar_em_excel(dados, excel_file=arquivo_excel)

print(f'Dados armazenados com sucesso em {arquivo_excel}')
