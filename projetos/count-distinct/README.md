## Análise empírica - Elementos distintos

Ao longo desta disciplina, vocês estudaram e implementaram diferentes tipos abstratos de dados (TADs) com diferentes níveis de abstração, bem como as estruturas de dados mais tradicionalmente usadas para suas implementações: 
* **TADs de maior nível de abstração**: conjunto, dicionário, sequência, lista, deque, pilha e fila.
* **TADs de menor nível de abstração**: vetores, listas encadeadas e tabelas de dispersão.
* **Estruturas de dados**: vetores lineares e circulares, listas simples e duplamente encadeadas e tabelas de dispersão com encadeamento e endereçamento aberto.

Em sala, analisamos a complexidade teórica das operações fornecidas pelos diferentes TADs quando implementados com estruturas de dados específicas. Além disso, vimos que a complexidade esperada para operações de TADs não-relacionais implementados com tabelas de dispersão deveria ser melhor, na prática, que se implementados com vetores. 

Neste exercício puramente experimental, você verificará se esta previsão teórica se confirma na prática.

## Descrição da análise

São fornecidos conjuntos contendo elementos em duplicidade. Você deverá filtrar estes conjuntos para que obedeçam à propriedade de não haver repetição entre elementos de um conjunto. Para isto, você deverá considerar três estratégias:

1. Criar um **TAD Conjunto** a partir dos dados de entrada, usando como estrutura de dados uma tabela de dispersão com **encadeamento**.
1. Criar um **TAD Conjunto** a partir dos dados de entrada, usando como estrutura de dados uma tabela de dispersão com **endereçamento aberto**.
3. Criar um **TAD Lista** a partir dos dados de entrada, usando como estrutura de dados um vetor. Uma vez criada a lista, você deverá ordená-la (gerando um **TAD Sequência**) e fazer uma cópia desta lista onde não haja duplicação de elementos. Note que o **TAD Sequência** também deverá ser implementado com vetor.

O objetivo desta análise é identificar o impacto de performance do uso de estruturas que se baseiam em listas, em comparação com estruturas que se baseiam em vetores. Note que, pela análise assintótica, é de se esperar que a opção 1 seja a mais rápida de todas, enquanto a opção 3 se apresenta como a potencialmente mais devagar.

## Design do experimento

São fornecidos três [tipos de entradas](instancias.tar.gz), diferindo quanto ao grau de duplicidade das mesmas:

* *Tipo 1*: conjuntos com 90% de elementos não-repetidos (**10% de duplicidade**).
* *Tipo 2*: conjuntos com 50% de elementos não-repetidos (**50% de duplicidade**).
* *Tipo 3*: conjuntos com 10% de elementos não-repetidos (**90% de duplicidade**).

Para cada tipo de entrada, foram geradas aleatoriamente instâncias de diferentes tamanhos. Assim, será possível analisar os efeitos do tamanho e do tipo de entrada, tendo em mãos uma amostragem de tamanho razoável para propósitos estatísticos.

Especificamente, para cada tipo de entrada, execute todas as opções consideradas e calcule o tempo médio que cada opção gasta para cada tamanho disponível para aquele tipo de entrada. Assim, você poderá efetuar os seguintes tipos de análise:

* Análise do tempo de execução comparando o uso do TAD Lista contra o TAD Conjunto.
* Análise do impacto do uso de TADs baseados em lista contra TADs baseados em vetores.
* Análise comparando a performance dos TADs que você implementou contra os TADs disponíveis na STL do C++.

## Orientações

A análise deverá ser fornecida como um relatório. Torne-o conciso, porém interessante. Os seguintes tipos de análise são sugeridos:

* Para cada tipo de entrada, faça um gráfico demonstrando o crescimento do tempo de execução médio ao longo do aumento dos tamanhos das entradas.
* Para um determinado tamanho de entrada, faça um gráfico demonstrando a variação do tempo de execução médio ao longo do aumento do grau de duplicidade (diferentes tipos de entrada).
* Ao comparar com as implementações fornecidas pela linguagem escolhida, pesquise porque estas implementações são (in)eficientes.

## Prazos

* *Deadline #1* (pontuação **integral**): Terça, 27/06/2017
* *Deadline #2* (pontuação **parcial**): Quinta, 29/06/2017

