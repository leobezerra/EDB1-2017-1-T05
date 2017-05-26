## Análise empírica - Ordenação

Ao longo desta disciplina, vocês implementaram os algoritmos de ordenação por comparação e estruturas de dados mais tradicionais:
* **Ordenação por comparação**: selection, insertion, merge e quick sort
* **Estruturas de dados**: vetores e listas duplamente encadeadas

Em sala, analisamos a complexidade teórica dos algoritmos de ordenação aplicados a TADs Lista implementados com vetores. Além disso,
analisamos a complexidade teórica das principais operações fornecidas pelo TAD Lista quando implementado com vetores ou listas encadeadas.

Neste exercício puramente experimental, você verá a performance dos algoritmos de ordenação quando aplicados a TADs Lista implementados com
diferentes estruturas de dados.

## Design do experimento

São fornecidos três (subconjuntos de entradas)[], diferindo quanto ao grau de ordenação das mesmas:

* Subconjunto 1: vetores 10% ordenados (90% de entropia).
* Subconjunto 2: vetores 50% ordenados (50% de entropia).
* Subconjunto 3: vetores 90% ordenados (10% de entropia).

Cada subconjunto apresenta vetores de diferentes tamanhos gerados aleatoriamente utilizando diferentes sementes. Assim, será possível analisar os efeitos do tamanho e do tipo do subconjunto, tendo em mãos uma amostragem de tamanho razoável para propósitos estatísticos.

Especificamente, para cada subconjunto de entrada, execute todos os algoritmos e calcule o tempo médio que cada algoritmo gasta para cada tamanho presente no subconjunto.

## Orientações e pontuações

A pontuação deste trabalho será dividida da seguinte forma:
 
* Análise do tempo de execução de cada algoritmo por estrutura de dados.
* Análise comparativa entre os dois conjuntos de implementações e a implementação padrão de ordenação fornecida pela linguagem escolhida (C ou C++).

A análise deverá ser fornecida como um relatório. Torne-o conciso, porém interessante. Os seguintes tipos de análise são sugeridos:

* Para cada subconjunto de entradas, faça um gráfico demonstrando o crescimento do tempo de execução médio ao longo do aumento dos tamanhos das entradas.
* Para um determinado tamanho de entrada, faça um gráfico demonstrando a variação (potencialmente o crescimento) do tempo de execução médio ao longo do aumento do grau de entropia dos vetores (diferentes subconjuntos).
* Ao comparar com o método padrão fornecido pela linguagem escolhida, explique o funcionamento deste método e porque ele é (in)eficiente.

## Prazos

Uma vez que este exercício exigirá um maior esforço computacional, seu prazo será maior do que o dos demais.
* Deadline #1 (pontuação integral): Terça, 13/06/2017</li>
* Deadline #2 (pontuação parcial): Domingo, 20/06/2017</li>

