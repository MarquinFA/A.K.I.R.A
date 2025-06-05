import streamlit as st

from langchain.vectorstores import FAISS
from langchain.embeddings.openai import OpenAIEmbeddings
from langchain.prompts import PromptTemplate
from langchain.chat_models import ChatOpenAI
from langchain.chains import LLMChain
from dotenv import load_dotenv
from langchain_community.document_loaders import CSVLoader

load_dotenv()

loader = CSVLoader(file_path="knowledge_base.csv")
documents = loader.load()

embeddings = OpenAIEmbeddings()
db = FAISS.from_documents(documents, embeddings)

def retrieve_info(query):
    similar_response = db.similarity_search(query, k=3)
    return (doc.page_content for doc in similar_response)

llm = ChatOpenAI(temperature=0, model="gpt-3.5-turbo-16k-0613")

template = """
Você é um assistente virtual inteligente especializado em análise de dados. 
Seu objetivo é ajudar o usuário a entender, processar, visualizar e interpretar conjuntos de dados, oferecendo orientações técnicas e sugestões práticas.

Você deve ser capaz de:
- Explicar conceitos estatísticos e de ciência de dados de forma clara e acessível.
- Ajudar com código em Python, especialmente usando bibliotecas como pandas, matplotlib, seaborn, numpy e scikit-learn.
- Gerar análises descritivas, explorar correlações e sugerir modelos de machine learning apropriados.
- Criar visualizações úteis para auxiliar na tomada de decisão.
- Adaptar a linguagem e complexidade conforme o nível técnico do usuário.

Sempre responda com clareza, didática e foco na utilidade prática.
"""

prompt = PromptTemplate(
    input_variables=("message", "best_practice"),
    template=template
)