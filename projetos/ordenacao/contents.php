  <div id="contenido">
   <h1>Análise e Projeto de Algoritmos - 2016.2</h1>

   <div id="navlist">
    <h2 id="overview">Índice</h2>

    <ul>
     <li><a href="#details">Informações gerais</a></li>
     <ul>
       <li><a href="#schedule">Cronograma</a></li>
       <li><a href="#material">Material de estudo</a></li>
       <li><a href="#utils">Links úteis</a></li>
     </ul>
     <li><a href="#assignments">Trabalhos</a></li>
     <ul>
       <li><a href="#sort01">Ordenação 01</a></li>
       <li><a href="#sort02">Ordenação 02</a></li>
       <li><a href="#sort03">Ordenação 03</a></li>
       <li><a href="#hsort">Ordenação Heurística</a></li>
     </ul>
    </ul>
   </div>

   <hr id="afterlogos">

   <h2 id="details">Informações gerais</h2>

   <p>
     A disciplina de Análise e Projeto de Algoritmos está sendo ministrada nos horários 24T12 na Sala 103. O email para dúvidas é o <a href="mailto:leo.tbezerra@ci.ufpb.br">leo.tbezerra@ci.ufpb.br</a>.
   </p>

   <h3 id="schedule">Cronograma</h2>

   Clique na descrição de cada unidade para maiores detalhes (um segundo clique ocultará os detalhes).

   <table class="data" summary="Schedule">
    <colgroup>
     <col span="2" class="coldefault">
     <col class="coldescription">
    </colgroup>

    <tbody>
     <tr onclick="toggle('unit1')" class="clickable">
      <td class="label">Unidade I</td>
      <td>Complexidade assintótica: teoria e prática.</td>
     </tr>
     <tr id="unit1" class="subschedule" style="display: none"><td></td>
     <td>
      <ul>
        <li>23/01 - Apresentação da disciplina</li>
        <li>25/01 - Crescimento de funções</li>
        <li>30/01 - Análise assintótica</li>
        <li>01/02 - Recorrências</li>
        <li>06/02 - Recorrências</li>
        <!-- <li>08/02 - Ordenação em tempo linear</li> -->
        <li>20/02 - Apresentação de projeto: Ordenação heurística</li>
        <li>22/02 - Estruturas de dados em árvore</li>
        <li>29/02 - Estruturas de dados de dispersão</li>
        <li><b>08/03 - Avaliação Unidade I</b></li>
        <!--<li>08/03 - Avaliação Unidade I</li>-->
        <li>13/03 - Apresentação de projeto: Container heurístico</li>
      </ul>
     </td>
     </tr>
     <tr><!--<tr onclick="toggle('unit2')" class="clickable">-->
      <td class="label">Unidade II</td>
      <td>Algoritmos eficientes: programação dinâmica, gulosos e branch-and-bound.</td>
     </tr>
     <!--
     <tr id="unit2" class="subschedule" style="display: none"><td></td>
     <td>
      <ul>
        <li>06/09 - Tabelas hash</li>
        <li>08/09 - Árvores de busca binárias</li>
        <li>13/09 - Árvores vermelho-preto</li>
        <li>15/09 - Árvore B</li>
        <li>20/10 - Programação dinâmica</li>
        <li>27/10 - Teste</li>
        <li>29/10 - Programação dinâmica</li>
        <li>04/09 - Algoritmos gulosos</li>
        <li>06/09 - Algoritmos gulosos</li>
        <li>11/10 - Exercícios e revisão Unidade II</li>
        <li><b>13/10 - Avaliação Unidade II</b></li>
        <li>20/10 - Discussão avaliação Unidade II</li>
      </ul>
     </td>
     </tr>
     -->
     <tr>
      <td class="label">Unidade III</td>
      <td>Metaheurísticas.</td>
     </tr>

    </tbody>
   </table>
   <hr>
   <h3 id="material">Material de estudo</h3>
   <p>O principal material de consulta para estudo são os links fornecidos junto às descrições dos trabalhos e os slides do professor Lucídio, que podem ser encontrados em sua <a href="https://sites.google.com/site/lucidiocabral/apa" target="_blank">página pessoal</a>.</p>
   <p>Abaixo, serão disponibilizados alguns materiais adicionais para cada unidade.</p>
    <h4>Unidade I</h4>
     <ul>
       <li><a href="/disciplinas/APA/2016-2/essays/ordenacao-linear.pdf" target="_blank">Ordenação em tempo linear (Leitura)</a></li>
       <li><a href="/disciplinas/APA/2016-2/essays/complexidade-algoritmos.pdf" target="_blank">Complexidade de algoritmos (Leitura)</a></li>
       <li><a href="/disciplinas/APA/2016-2/slides/crescimento-funcoes.pdf" target="_blank">Complexidade de algoritmos (Slides)</a></li>
       <li><a href="/disciplinas/APA/2016-2/listas/Unidade01.pdf" target="_blank">Lista de exercícios</a></li>
     </ul>
     <hr>
   <h3 id="utils">Links úteis</h3>
     <ul>
      <li><a href="http://bigocheatsheet.com" target="_blank">Cheat sheet de complexidades assintóticas</a></li>
      <li><a href="http://try.github.io/" target="_blank">Tutorial prático de Git</a></li>
      <li><a href="https://pt.wikipedia.org/wiki/Test_Driven_Development" target="_blank">Desenvolvimento orientado a testes</a></li>
     </ul>
   
   <hr>

   <h2 id="assignments">Trabalhos</h2>

   <div class="info">
      <p>
          <ul>
           <li>Todos os trabalhos deverão ser entregues até a véspera da aula seguinte.</li>
           <li>As implementações deverão estar sob controle de versão (<a href="https://git-scm.com" target="_blank">git</a>), hospedadas em um servidor público (<a href="https://github.com" target="_blank">GitHub</a>) ou privado (<a href="https://bitbucket.com" target="_blank">BitBucket</a>).</li>
           <li>Quando compiláveis, as implementações deverão ser acompanhadas de um Makefile.</li>
           <li>As implementações deverão respeitar a interface de execução definida para cada trabalho (entradas e saídas).</li>
           <li>As implementações deverão ser acompanhadas de casos de teste que possam ser executados por linha de comando.</li>
           <li>Os scripts para rodar os testes poderão ser escritos em Bash, Python, Perl ou Ruby (preferencialmente os dois primeiros).</li>
          </ul>
      </p>
   </div>

<hr>
   <h3 id="sort01">Ordenação 01</h3>
   <p>
   Implemente os seguintes algoritmos de ordenação.</p>

    <ul>

     <li>Selection sort</a>: Wikipedia (<a href="https://en.wikipedia.org/wiki/Selection_sort" target="_blank">en</a> | <a href="https://pt.wikipedia.org/wiki/Selection_sort" target="_blank"> pt</a>), YouTube (<a href="https://www.youtube.com/watch?v=f8hXR_Hvybo" target="_blank">en</a>), Khan Academy (<a href="https://pt.khanacademy.org/computing/computer-science/algorithms/sorting-algorithms/a/selection-sort-pseudocode" target="_blank">pt</a>) </li>

     <li>Insertion sort</a>: Wikipedia (<a href="https://en.wikipedia.org/wiki/Insertion_sort" target="_blank">en</a> | <a href="https://pt.wikipedia.org/wiki/Insertion_sort" target="_blank"> pt</a>), YouTube (<a href="https://www.youtube.com/watch?v=DFG-XuyPYUQ" target="_blank">en</a>), Khan Academy (<a href="https://pt.khanacademy.org/computing/computer-science/algorithms/insertion-sort/a/insertion-sort-pseudocode" target="_blank">en</a>) </li>

     <li>Merge sort</a>: Wikipedia (<a href="https://en.wikipedia.org/wiki/Merge_sort" target="_blank">en</a> | <a href="https://pt.wikipedia.org/wiki/Merge_sort" target="_blank"> pt</a>), YouTube (<a href="https://www.youtube.com/watch?v=EeQ8pwjQxTM" target="_blank">en</a>), Khan Academy (<a href="https://pt.khanacademy.org/computing/computer-science/algorithms/merge-sort/a/overview-of-merge-sort" target="_blank">en</a>) </li>

     <li>Quicksort</a>: Wikipedia (<a href="https://en.wikipedia.org/wiki/Quicksort" target="_blank">en</a> | <a href="https://pt.wikipedia.org/wiki/Quicksort" target="_blank"> pt</a>), YouTube (<a href="https://www.youtube.com/watch?v=aQiWF4E8flQ" target="_blank">en</a>), Khan Academy (<a href="https://pt.khanacademy.org/computing/computer-science/algorithms/quick-sort/a/overview-of-quicksort" target="_blank">en</a>) </li>

     <li>Heapsort</a>: Wikipedia (<a href="https://en.wikipedia.org/wiki/Heapsort" target="_blank">en</a> | <a href="https://pt.wikipedia.org/wiki/Heapsort" target="_blank"> pt</a>), YouTube (<a href="https://www.youtube.com/watch?v=zSYOMJ1E52A" target="_blank">pt</a>) </li>

    </ul>

   <p>
   A correta implementação do heapsort valerá 1 ponto extra na primeira unidade. No entanto, a pontuação do heapsort só será computada caso todos os algoritmos de ordenação solicitados tenham sido (corretamente) implementados.</p>

   <ul>
    <li>Deadline: Quarta, 25/01/2017, 12h (pontuação integral) / Domingo, 29/01/2017 (pontuação parcial)</li>
    <li><a href="/disciplinas/APA/2016-2/data/example.in" target="_blank">Exemplo de entrada</a></li>
    <li><a href="/disciplinas/APA/2016-2/data/example.out" target="_blank">Exemplo de saída</a></li>
   </ul>
  <hr>
   <h3 id="sort02">Ordenação 02</h3>
   <p>
No exercício anterior, vocês implementaram os algoritmos de ordenação por comparação mais comuns. Nas aulas teóricas, estudaremos a análise da complexidade assintótica dos mesmos.
Neste exercício puramente experimental, vocês verão os efeitos das complexidades na prática.
</p>

<p>
São fornecidos três subconjuntos de entradas (<a href="/disciplinas/APA/2016-2/data/entradas_ordenacao02.tar.gz" target="_blank">link</a>), diferindo quanto ao grau de ordenação das mesmas:
</p>

<ul>
 <li>Subconjunto 1: vetores 10% ordenados (90% de entropia).</li>
 <li>Subconjunto 2: vetores 50% ordenados (50% de entropia).</li>
 <li>Subconjunto 3: vetores 90% ordenados (10% de entropia).</li>
</ul>

<p>
Cada subconjunto apresenta vetores de diferentes tamanhos gerados aleatoriamente utilizando diferentes sementes. Assim, será possível analisar os efeitos do tamanho e do tipo do subconjunto, tendo em mãos uma amostragem de tamanho razoável para propósitos estatísticos.
</p>

<p>Dadas as implementações do exercício anterior e os conjuntos de entradas fornecidos para este exercício:</p>
<ul>
 <li>Selecione um colega que tenha implementado os algoritmos de ordenação usando uma linguagem de programação diferente da sua.</li>
 <li>Para cada subconjunto de entrada, execute todos os algoritmos e calcule o tempo médio que cada algoritmo gasta para cada tamanho presente no subconjunto.</li>
</ul>

<p>A pontuação deste trabalho será dividida da seguinte forma:</p>
<ul>
 <li>Análise do tempo de execução de cada algoritmo (1,0 ponto para cada aluno).</li>
 <li>Análise comparativa entre os dois conjuntos de implementações e uma implementação padrão de ordenação fornecida nas linguagens escolhidas (1,0 ponto para a dupla).</li>
</ul>

<p>A análise deverá ser fornecida em formato a ser escolhido pela dupla (relatório, prezi ou slides em vídeo). Torne o “produto” conciso, porém interessante. Os seguintes tipos de análise são sugeridos:</p>
<ul>
 <li>Para cada subconjunto de entradas, faça um gráfico demonstrando o crescimento do tempo de execução médio ao longo do aumento dos tamanhos dos vetores.</li>
 <li>Para um determinado tamanho de entrada, faça um gráfico demonstrando a variação (potencialmente o crescimento) do tempo de execução médio ao longo do aumento do grau de entropia dos vetores (diferentes subconjuntos).</li>
 <li>Ao comparar com o método padrão fornecido pela linguagem escolhida, explique o funcionamento deste método e porque ele é (in)eficiente.</li>
</ul>

<p>Uma vez que este exercício exigirá um maior esforço computacional, seu prazo será maior do que o dos demais.</p>
 <ul>
  <li>Deadline #1 (pontuação integral): Domingo, 05/02/2017</li>
  <li>Deadline #2 (pontuação parcial): Terça, 07/02/2017</li>
 </ul>

<br/>
<div class="info">
<p><ul>
 <li>Todos os experimentos devem ser executados em cores (núcleos) de um mesmo computador.</li>
 <li>Caso algum algoritmo demore mais que 5 minutos para uma dada entrada, desconsidere este algoritmo para o restante do subconjunto em questão (tamanhos iguais ou maiores que o da entrada em questão).</li>
 <li>Se optar pelo formato relatório, a dupla deve enviá-lo em PDF por email. Caso opte pelos formatos Prezi ou Slides em vídeo, a dupla deve enviar o link do Prezi ou do vídeo no servidor escolhido (YouTube, Vimeo, …).</li>
</ul></p>
</div>
<hr>
   <h3 id="sort03">Ordenação 03</h3>
   <p>
   Implemente os seguintes algoritmos de ordenação em tempo linear. Para consulta, utilize o material de leitura adicionado à seção <a href="#material" target="_self">Material de estudo</a>, assim como os links fornecidos abaixo com maiores informações sobre cada um dos algoritmos.</p>

    <ul>

     <li>Counting sort</a>: Wikipedia (<a href="https://en.wikipedia.org/wiki/Counting_sort" target="_blank">en</a> | <a href="https://pt.wikipedia.org/wiki/Counting_sort" target="_blank"> pt</a>), University of San Francisco (<a href="https://www.cs.usfca.edu/~galles/visualization/CountingSort.html" target="_blank">visualização</a>), GeeksForGeeks (<a href="http://www.geeksforgeeks.org/counting-sort/" target="_blank">código</a>) </li>

     <li>Bucket sort</a>: Wikipedia (<a href="https://en.wikipedia.org/wiki/Bucket_sort" target="_blank">en</a> | <a href="https://pt.wikipedia.org/wiki/Bucket_sort" target="_blank">pt</a>), University of San Francisco (<a href="https://www.cs.usfca.edu/~galles/visualization/BucketSort.html" target="_blank">visualização</a>), GeeksForGeeks (<a href="http://www.geeksforgeeks.org/bucket-sort-2/" target="_blank">código</a>) </li>

     <li>Radix sort</a>: Wikipedia (<a href="https://en.wikipedia.org/wiki/Merge_sort" target="_blank">en</a> | <a href="https://pt.wikipedia.org/wiki/Merge_sort" target="_blank"> pt</a>), YouTube (<a href="https://www.youtube.com/watch?v=EeQ8pwjQxTM" target="_blank">en</a>), GeeksForGeeks (<a href="http://www.geeksforgeeks.org/radix-sort/" target="_blank">código</a>) </li>

    </ul>

   <p>
   A correta implementação destes algoritmos valerá 1 ponto extra na primeira unidade. No entanto, a pontuação só será computada caso todos os algoritmos tenham sido (corretamente) implementados.</p>

   <ul>
    <li>Deadline: Quarta, 08/02/2017, 12h (pontuação integral) / Sexta, 10/02/2017 (pontuação parcial)</li>
    <li><a href="/disciplinas/APA/2016-2/data/example.in" target="_blank">Exemplo de entrada</a></li>
    <li><a href="/disciplinas/APA/2016-2/data/example.out" target="_blank">Exemplo de saída</a></li>
   </ul>
<hr>
   <h3 id="hsort">Ordenação Heurística</h3>
    <p>Ao longo dos últimos trabalhos e aulas, analisamos a complexidade teórica dos algoritmos de ordenação. Em especial, discutimos os tipos de entrada que levam algoritmos aos seus melhores e piores desempenhos. Vimos, também, que é possível utilizar algoritmos de ordenação com complexidade de tempo linear, desde que a entrada apresente determinadas características.</p>
    <p>Neste trabalho, vocês serão testados quanto a sua capacidade de por em prática estes conhecimentos teóricos. Em síntese, o objetivo deste trabalho é desenvolver uma heurística seletora capaz de escolher o algoritmo mais adequado para cada entrada apresentada, baseada nas características que as mesmas apresentem.</p>
    <p>Abaixo, seguem dicas e o detalhamento das regras do trabalho.</p>
   <h4>Dicas para elaboração da heurística</h4>
   <ul>
     <li>Sempre que possível, opte por algoritmos de ordenação em tempo linear.</li>
     <li>Para verificar se um algoritmo se aplica, utilize rotinas auxiliares de complexidade O(n).</li>
     <li>Alguns algoritmos em tempo linear podem se tornar aplicáveis com um simples pré-processamento dos dados de entrada.</li>
     <li>Para os casos em que algoritmos de ordenação em tempo linear não forem aplicáveis, você precisará de um bom algoritmo de ordenação por comparação.</li>
     <li>Dentre os algoritmos de ordenação por comparação, quais apresentaram melhor desempenho no trabalho Ordenação 02?</li>
     <li>Seria possível melhorar um algoritmo de ordenação por comparação? Pesquise sobre análises destes tipos de algoritmo e melhorias.</li>
   </ul>
   <h4>Regras de implementação</h4>
   <ul>
     <li>Nenhum parâmetro será passado como argumento.</li>
     <li>A entrada e saída utilizada serão as padrões.</li>
     <li>A linguagem escolhida para implementação deverá ser uma das linguagens adotadas pela dupla no exercício Ordenação 02.</li>
   </ul>
   <h4>Instâncias (entradas)</h4>
   <p>Além das instâncias disponibilizadas para o trabalho Ordenação 02, são disponibilizados 02 novos conjuntos de instâncias, descritos abaixo:</p>
   <ul>
     <li>Instâncias <a href="APA/2016-2/data/instancias-numericas.tar.gz" target="_blank">numéricas</a></li>
     <li>Instâncias <a href="APA/2016-2/data/instancias-string.tar.gz" target="_blank">string</a></li>
   </ul>
   <br/>
   <div class="info">
      <p><img style="width: 40px; height: 40px;" alt="Warning" src="imgs/Icon_info.png" height="33"
          width="40">Não é necessário utilizar as instâncias string, mas seu uso renderá 1,0 ponto extra.</p>
   </div>
   <p>Note que, para a análise nestes novos conjuntos, será necessário rodar também dois algoritmos de comparação (quicksort e heapsort). Além disso, os algoritmos de ordenação linear devem ser rodados em todos os conjuntos aos quais possam ser aplicados (incluindo os conjuntos do trabalho Ordenação 02).</p> 
   <h4>Regras de avaliação</h4>
   <ul>
     <li>A dupla será avaliada pela proposta de heurística, pelo código produzido, por uma apresentação presencial e por um relatório.</li>
     <li>A proposta de heurística deverá ser um documento em PDF, explicando através de um pseudocódigo o funcionamento da mesma. É importante que a proposta detalhe os motivos por trás das escolhas da heurística, fazendo correspondência com as características dos algoritmos de ordenação.</li>
     <li>O código deverá ser disponibilizado via GitHub ou BitBucket, contendo também scripts para gerar os resultados novamente (caso necessário). No entanto, o repositório não deve conter as instâncias (arquivos) utilizadas como entradas para este trabalho (você pode possuir uma pasta local com as instâncias, mas não deve adicioná-la ao controle de versionamento).</li>
     <li>A apresentação presencial será feita com auxílio de slides e terá duração máxima de 5 minutos. Assim, não adicione detalhes desnecessários, concentrando-se nos detalhes de sua heurística seletora e nos resultados do seu algoritmo.</li>
     <li>O relatório será composto de 5 partes: introdução; explicação dos casos que favorecem ou prejudicam o desempenho dos algoritmos considerados; detalhamento da heurística seletora; análise dos resultados; conclusões.</li>
   </ul>
   <h4>Prazos e pontuações</h4>
   <ul>
     <li>Proposta (0,5pt): segunda, 13/02, 16h</li>
     <li>Implementação (0,5pt): quarta, 15/02</li>
     <li>Relatório (0,5pt): domingo, 19/02 (integral); quarta, 22/02 (parcial)</li>
     <li>Apresentação (0,5pt): quarta, 22/02, 14h</li>
   </ul>
<hr>
</div>

