<?php
  /*
  I guess i could've used a database to store all of these, but due to lack of knowledge essential to provide such solution I decided to use one big array to store questions. I've also decided to put it in a separate file for esthetical values of quiz.php file code 
  */ 
  $questions = array(

    // HTML questions

    0 => "
      <p> Jakiego atrybutu języka HTML należy użyć by scalić ze sobą dwie sąsiednie komórki w tabeli? </p>
      <label><input type='radio' name='question[1]' value='A'> A. row</label> 
      <label><input type='radio' name='question[1]' value='B'> B. col</label> 
      <label><input type='radio' name='question[1]' value='C'> C. rowspan</label> 
      <label><input type='radio' name='question[1]' value='1'> D. colspan</label>
      <p class='correctAnswer'>Poprawna odpowiedź: D</p>
      ",
    1 => "
      <p> Aby w języku HTML utworzyć pole do odznaczenia w formularzu (tzw. checkbox), należy użyć znacznika </p>
      <label><input type='radio' name='question[2]' value='A'> A. &lt;form input type=&quot;checkbox&quot; /&gt;</label> 
      <label><input type='radio' name='question[2]' value='B'> B. &lt;input value=&quot;checkbox&quot; /&gt;</label> 
      <label><input type='radio' name='question[2]' value='1'> C. &lt;input type=&quot;checkbox&quot; /&gt;</label>
      <label><input type='radio' name='question[2]' value='D'> D. &lt;input name=&quot;checkbox&quot; /&gt;</label> 
      <p class='correctAnswer'>Poprawna odpowiedź: C</p>
     ",
    2 => "
      <p>Znacznik &lt;input type=&quot;text&quot; size=&quot;20&quot; maxlength=&quot;40&quot;/&gt; definiuje pole</p>
      <label><input type='radio' name='question[3]' value='1'> A. Typu tekstowego o szerokości 20 znaków, z możliwością wpisania 40</label> 
      <label><input type='radio' name='question[3]' value='B'> B. Typu tekstowego o szerokości 40 znaków, z możliwością wpisania 20</label> 
      <label><input type='radio' name='question[3]' value='C'> C. Typu tekstowego o szerokości 20 znaków, z możliwością wpisania 40. Znaki są podmieniane na kropki</label> 
      <label><input type='radio' name='question[3]' value='D'> D. Typu tekstowego o szerokości 40 znaków, z możliwością wpisania 20. Znaki są podmieniane na kropki</label>
      <p class='correctAnswer'>Poprawna odpowiedź: A</p>
      ",
    3 => "
      <p> W języku HTML, która wartość atrybutu target hiperłącza sprawia, że otwarta zostanie tylko jedna nowa karta, na której będą otwierane wszystkie kliknięte linki?</p>
      <label><input type='radio' name='question[4]' value='A'> A. _blank</label> 
      <label><input type='radio' name='question[4]' value='1'> B. blank</label> 
      <label><input type='radio' name='question[4]' value='C'> C. _parent</label>
      <label><input type='radio' name='question[4]' value='D'> D. parent</label> 
      <p class='correctAnswer'>Poprawna odpowiedź: B</p>
     ",
    4 => "
      <p> Chcąc dodać do listy rozwijalnej możliwość zaznaczenia kilku opcji na raz, używamy atrybutu </p>
      <label><input type='radio' name='question[5]' value='1'> A. multiple</label> 
      <label><input type='radio' name='question[5]' value='B'> B. many</label> 
      <label><input type='radio' name='question[5]' value='C'> C. few</label>
      <label><input type='radio' name='question[5]' value='D'> D. more</label>
      <p class='correctAnswer'>Poprawna odpowiedź: A</p>
      ",
    5 => "
      <p> Czym charakteryzuje się metoda POST wysyłania formularzy? </p>
      <label><input type='radio' name='question[6]' value='A'> A. Dane są przesyłane przy pomocy adresu URL, przez co są widoczne dla użytkownika</label>
      <label><input type='radio' name='question[6]' value='B'> B. Posiada ograniczenie w rozmiarze przesyłanych danych, w wysokości 255 znaków</label> 
      <label><input type='radio' name='question[6]' value='C'> C. Dane są dzięki niej zapisywane w przeglądarce internetowej</label> 
      <label><input type='radio' name='question[6]' value='1'> D. Przesyłane dane nie są umieszczane w adresie URL, dzięki czemu są lepiej chronione</label>
      <p class='correctAnswer'>Poprawna odpowiedź: D</p>
      ",
    6 => "
      <p> W języku HTML atrybut alt w znaczniku &lt;img&gt; służy do </p>
      <label><input type='radio' name='question[7]' value='A'> A. Zdefiniowania tekstu, który wyświetli się koło kursora po najechaniu na zdjęcie</label>
      <label><input type='radio' name='question[7]' value='B'> B. Zdefiniowania podpisu wyświetlanego pod zdjęciem</label> 
      <label><input type='radio' name='question[7]' value='1'> C. Zdefiniowania tekstu, który będzie wyświetlony w wypadku gdy zdjęcie nie zostanie poprawnie wczytane</label>
      <label><input type='radio' name='question[7]' value='D'> D. Zdefiniowania ścieżki do pliku źródłowego grafiki</label>
      <p class='correctAnswer'>Poprawna odpowiedź: C</p>
      ",
    7 => "
      <p> Atrybut rel mogący występować w znacznikach takich jak np. &lt;a&gt;, &lt;link&gt; czy &lt;form&gt;definiuje</p>
      <label><input type='radio' name='question[8]' value='1'> A. Relację między podanym w znaczniku źródłem a bierzącym dokumentem</label>
      <label><input type='radio' name='question[8]' value='B'> B. Źródło kodu, który ma być wykonany po wejściu w interakcję ze znacznikiem</label> 
      <label><input type='radio' name='question[8]' value='C'> C. Rolę znacznika w bierzącym dokumencie</label>
      <label><input type='radio' name='question[8]' value='D'> D. Relację między znacznikiem a resztą dokumentu</label>
      <p class='correctAnswer'>Poprawna odpowiedź: A</p>
       ",
    8 => "
      <p> Do czego służy znacznik &lt;area&gt; w języku HTML? </p>
      <label><input type='radio' name='question[9]' value='1'> A. Do tzw. mapowania grafiki, czyli definicji współrzędnych pól, które odgrywają w grafice rolę hiperłączy</label> 
      <label><input type='radio' name='question[9]' value='B'> B. Do definicji kształtu, do jakiego ma być przycięta grafika wyświetlana na stronie</label> 
      <label><input type='radio' name='question[9]' value='C'> C. Działa podobnie jak znaczniki sekcji czy &lt;div&gt;, z tą różnicą, że mogą przybierać dowolne kształty</label>
      <label><input type='radio' name='question[9]' value='D'> D. Jest zwykłym kontenerem służącym do budowy struktury strony</label>
      <p class='correctAnswer'>Poprawna odpowiedź: A</p>
      ",
    9 => "
      <p> Do czego służy znacznik &lt;header&gt; w języku HTML? </p>
      <label><input type='radio' name='question[10]' value='A'> A. Stanowi kontener na tzw. metadane (dane o dokumencie HTML, które nie są wyświetlane na stronie)</label>
      <label><input type='radio' name='question[10]' value='1'> B. Jest zwykłym kontenerem służącym do budowy strony, z reguły używanym do tworzenia nagłówka strony</label> 
      <label><input type='radio' name='question[10]' value='C'> C. Definiuje &quot;ciało&quot; strony, czyli część wyświetlaną na stronie</label>
      <label><input type='radio' name='question[10]' value='D'> D. Umieszcza się w nim wszystkie odnośniki do plików zawierających kod wykonywany po stronie użytkownika. Jego zawartość nie jest wyświetlana na stronie</label>
      <p class='correctAnswer'>Poprawna odpowiedź: B</p>
      ",
    10 => "
      <p> Element języka HTML &lt;meta charset=&quot;utf-8&quot;&gt; określa metadane strony dotyczące </p>
      <label><input type='radio' name='question[11]' value='A'> A. Słów kluczowych</label> 
      <label><input type='radio' name='question[11]' value='B'> B. Wersji języka HTML w której została napisana strona</label>  
      <label><input type='radio' name='question[11]' value='C'> C. Autora strony</label> 
      <label><input type='radio' name='question[11]' value='1'> D. Kodowania znaków</label>
      <p class='correctAnswer'>Poprawna odpowiedź: D</p>
      ",
    11 => "
      <p> Wewnątrz znacznika &lt;style&gt; języka HTML definiuje się </p>
      <label><input type='radio' name='question[12]' value='1'> A. Styl wewnętrzny</label> 
      <label><input type='radio' name='question[12]' value='B'> B. Styl lokalny</label> 
      <label><input type='radio' name='question[12]' value='C'> C. Styl zewnętrzny</label>
      <label><input type='radio' name='question[12]' value='D'> D. Styl poboczny</label>
      <p class='correctAnswer'>Poprawna odpowiedź: A</p>
      ",
    12 => "
      <p> Gdzie jest wyświetlany tekst znajdujący się wewnątrz znacznika &lt;title&gt; języka HTML?</p>
      <label><input type='radio' name='question[13]' value='A'> A. Wyświetlony zostanie po najechaniu na grafikę, do której odwołuje się znacznik</label> 
      <label><input type='radio' name='question[13]' value='B'> B. W adresie URL strony</label> 
      <label><input type='radio' name='question[13]' value='1'> C. Na pasku tytułu przeglądarki</label> 
      <label><input type='radio' name='question[13]' value='D'> D. Nie jest nigdzie wyświetlany, gdyż jest to metadana</label>
      <p class='correctAnswer'>Poprawna odpowiedź: C</p>
       ",
    13 => "
      <p> Jaki znacznik kodu HTML służy do określenia listy definicji? </p>
      <label><input type='radio' name='question[14]' value='A'> A. &lt;td&gt;</label> 
      <label><input type='radio' name='question[14]' value='1'> B. &lt;dl&gt;</label> 
      <label><input type='radio' name='question[14]' value='C'> C. &lt;tr&gt;</label>
      <label><input type='radio' name='question[14]' value='D'> D. &lt;ul&gt;</label>
      <p class='correctAnswer'>Poprawna odpowiedź: B</p>
       ",
    14 => "
      <p> Który z poniższych elementów języka HTML jest niesemantyczny? </p>
      <label><input type='radio' name='question[15]' value='1'> A.  &lt;span&gt;</label>
      <label><input type='radio' name='question[15]' value='B'> B.  &lt;main&gt;</label> 
      <label><input type='radio' name='question[15]' value='C'> C.  &lt;section&gt;</label>
      <label><input type='radio' name='question[15]' value='D'> D.  &lt;figure&gt;</label>
      <p class='correctAnswer'>Poprawna odpowiedź: A</p>
       ",

    // CSS questions

    15 => "
      <p> Do utworzenia efektu zaokrąglonych narożników kontenera za pomocą CSS należy użyć właściwości </p>
      <label><input type='radio' name='question[16]' value='A'> A. border-width</label>
      <label><input type='radio' name='question[16]' value='B'> B. border-color</label> 
      <label><input type='radio' name='question[16]' value='C'> C. border-collapse</label>
      <label><input type='radio' name='question[16]' value='1'> D. border-radius</label>
      <p class='correctAnswer'>Poprawna odpowiedź: D</p>
       ",
    16 => "
      <p> Aby w arkuszu stylów CSS odwołać się do elementu o id &quot;baner&quot; należy posłużyć się selektorem</p>
      <label><input type='radio' name='question[17]' value='1'> A. #baner</label> 
      <label><input type='radio' name='question[17]' value='B'> B. .baner</label> 
      <label><input type='radio' name='question[17]' value='C'> C. *baner</label>
      <label><input type='radio' name='question[17]' value='D'> D. +baner</label>
      <p class='correctAnswer'>Poprawna odpowiedź: A</p>
       ",
    17 => "
      <p> Który z atrybutów właściwości background-attachment języka CSS sprawi, że tło strony będzie nieruchome względem okna przeglądarki? </p>
      <label><input type='radio' name='question[18]' value='A'> A. sticky</label>
      <label><input type='radio' name='question[18]' value='B'> B. scroll</label> 
      <label><input type='radio' name='question[18]' value='1'> C. fixed</label>
      <label><input type='radio' name='question[18]' value='D'> D. none</label>
      <p class='correctAnswer'>Poprawna odpowiedź: C</p>
       ",
    18 => "
      <p> Na stronie HTML zdefiniowany został tekst oraz grafika. Aby grafika mogła zostać umieszczona przez przeglądarkę w tej samej linii co akapit po prawej stronie, w arkuszu CSS należy umieścić właściwość</p>
      <label><input type='radio' name='question[19]' value='A'> A. display: right;</label> 
      <label><input type='radio' name='question[19]' value='B'> B. align: right;</label> 
      <label><input type='radio' name='question[19]' value='1'> C. float: right;</label>
      <label><input type='radio' name='question[19]' value='D'> D. position: right;</label>
      <p class='correctAnswer'>Poprawna odpowiedź: C</p>
       ",
    19 => "
      <p> Która z własności języka CSS służy do podłączenia zewnętrznego arkusza stylów? </p>
      <label><input type='radio' name='question[20]' value='A'> A. @include</label> 
      <label><input type='radio' name='question[20]' value='1'> B. @import</label> 
      <label><input type='radio' name='question[20]' value='C'> C. @require</label>
      <label><input type='radio' name='question[20]' value='D'> D. @connect</label>
      <p class='correctAnswer'>Poprawna odpowiedź: B</p>
      ",
    20 => "
      <p> Co definiuje właściwość min-height języka CSS?</p>
      <label><input type='radio' name='question[21]' value='A'> A. Taka właściwość nie istnieje</label>
      <label><input type='radio' name='question[21]' value='B'> B. Minimalną wysokość treści elementu języka HTML. Jeżeli wysokość treści nie przekroczy wartości właściwości, treść zostanie ukryta </label> 
      <label><input type='radio' name='question[21]' value='C'> C. Minimalną wysokość elementu języka HTML. Jeśli wysokość jego treści przekroczy wartość właściwości, nadmiar treści zostanie ukryty</label>
      <label><input type='radio' name='question[21]' value='1'> D. Minimalną wysokość elementu języka HTML. Jeśli wysokość jego treści przekroczy wartość właściwości, wysokość elementu odpowiednio się zwiększy</label>
      <p class='correctAnswer'>Poprawna odpowiedź: D</p>
       ",
    21 => "
      <p> Która z poniższych właściwości definiuje wewnętrzne marginesy elementu? </p>
      <label><input type='radio' name='question[22]' value='1'> A. padding</label> 
      <label><input type='radio' name='question[22]' value='B'> B. margin</label>
      <label><input type='radio' name='question[22]' value='C'> C. border</label> 
      <label><input type='radio' name='question[22]' value='D'> D. inner-margin</label> 
      <p class='correctAnswer'>Poprawna odpowiedź: A</p>
       ",
    22 => "
      <p> Chcąc zdefiniować marginesy o danych: margnies górny 15px, margines dolny 5px, margines lewy 10px, margines prawy 0px należy użyć składni CSS </p>
      <label><input type='radio' name='question[23]' value='A'> A. margin: 15px, 10px, 5px, 0;</label> 
      <label><input type='radio' name='question[23]' value='B'> B. margin: 15px, 0, 10px, 5px;</label>
      <label><input type='radio' name='question[23]' value='C'> C. margin: 15px, 5px, 10px, 0;</label> 
      <label><input type='radio' name='question[23]' value='1'> D. margin: 15px, 0, 5px, 10px;</label>
      <p class='correctAnswer'>Poprawna odpowiedź: D</p>
       ",
    23 => "
      <p> Jaki atrybut własności position sprawi, że ostylowany element będzie &quot;podążał&quot; za suwakiem strony? </p>
      <label><input type='radio' name='question[24]' value='A'> A. absolute</label> 
      <label><input type='radio' name='question[24]' value='1'> B. sticky</label> 
      <label><input type='radio' name='question[24]' value='C'> C. static</label>
      <label><input type='radio' name='question[24]' value='D'> D. relative</label>
      <p class='correctAnswer'>Poprawna odpowiedź: B</p>
     ",
    24 => "
      <p> Zastosowanie definicji stylu CSS <br> <br> a { <br> font-style: italic; <br> text-decoration: none; <br> color: red; <br>}<br> <br> sprawi że</p>
      <label><input type='radio' name='question[25]' value='A'> A.  Znaczniki hiperłącza będą miały pogrubioną czcionkę, czerwony kolor tła i nie będą miały żadnych ozdobników</label> 
      <label><input type='radio' name='question[25]' value='B'> B. Znaczniki hiperłącza będą miały pogrubioną czcionkę, czerwony kolor tekstu i nie będą miały żadnych ozdobników</label>
      <label><input type='radio' name='question[25]' value='1'> C. Znaczniki hiperłącza będą miały pochylony tekst, czerwony kolor tekstu i nie będą miały żadnych ozdobników </label>
      <label><input type='radio' name='question[25]' value='D'> D. Znaczniki hiperłącza będą miały pochylony tekst, czerwony kolor tła i nie będą miały żadnych ozdobników</label>
      <p class='correctAnswer'>Poprawna odpowiedź: C</p>
       ",
    25 => "
      <p> Czego należy użyć, aby ostylować element, który został najechany kursorem myszy? </p>
      <label><input type='radio' name='question[26]' value='A'> A. Pseudoklasy :focus</label>
      <label><input type='radio' name='question[26]' value='B'> B. Pseudoelementu ::focus</label> 
      <label><input type='radio' name='question[26]' value='1'> C. Pseudoklasy :hover</label>
      <label><input type='radio' name='question[26]' value='D'> D. Pseudoelementu ::hover</label>
      <p class='correctAnswer'>Poprawna odpowiedź: C</p>
       ",
    26 => "
      <p> Aby w języku CSS zdefiniować styl poszczególnych klatek animacji należy użyć własności </p>
      <label><input type='radio' name='question[27]' value='1'> A. @keyframes</label> 
      <label><input type='radio' name='question[27]' value='B'> B. @frames</label> 
      <label><input type='radio' name='question[27]' value='C'> C. @animation</label>
      <label><input type='radio' name='question[27]' value='D'> D. @animation-frames</label>
      <p class='correctAnswer'>Poprawna odpowiedź: A</p>
      ",
    27 => "
      <p> Która z poniżsych własności języka CSS definiuje animację, która powtarza się nieskończoną ilość razy? </p>
      <label><input type='radio' name='question[28]' value='A'> A. animation-duration: never-ending;</label>
      <label><input type='radio' name='question[28]' value='B'> B. animation-time: infinite;</label>
      <label><input type='radio' name='question[28]' value='C'> C. animation-duration: infinite;</label>
      <label><input type='radio' name='question[28]' value='1'> D. animation-iteration-count: infinite;</label>
      <p class='correctAnswer'>Poprawna odpowiedź: D</p>
       ",
    28 => "
      <p> Do czego służy funkcja calc() w kaskadowym arkuszu stylów CSS? </p>
      <label><input type='radio' name='question[29]' value='A'> A. Definiuje tzw. &quot;breakpointy&quot;, czyli wartość rozmiarów wyświetlacza (wysokość i szerokość), od którego, lub do którego wartości mają być wyświetlane dane elementy strony </label> 
      <label><input type='radio' name='question[29]' value='1'> B. Dzięki niej można wyrażać wartości numeryczne (np. rozmiar) w formie wyrażenia matematycznego</label> 
      <label><input type='radio' name='question[29]' value='C'> C. Pozwala na sprawdzenie domyślnej szerokości lub wysokości wskazanego elementu strony</label> 
      <label><input type='radio' name='question[29]' value='D'> D. Wewnątrz tej funkcji można umieścić kod napisany w języku JavaScript</label> 
      <p class='correctAnswer'>Poprawna odpowiedź: B</p>
       ",
    29 => "
      <p> Która z poniższych własności języka CSS zamieni cyfry listy uporządkowanej na duże cyfry rzymskie? </p>
      <label><input type='radio' name='question[30]' value='A'> A. list-style-type: square;</label> 
      <label><input type='radio' name='question[30]' value='1'> B. list-style-type: upper-roman;</label> 
      <label><input type='radio' name='question[30]' value='C'> C. list-style-type: upper-latin;</label>
      <label><input type='radio' name='question[30]' value='D'> D. list-style-type: upper-greek;</label>
      <p class='correctAnswer'>Poprawna odpowiedź: B</p>
       ",

    // JavaScript questions

    30 => "
      <p> Która z poniższych instrukcji JavaScript deklaruje stałą number o wartości 10? </p>
      <label><input type='radio' name='question[31]' value='A'> A. int number = 10</label> 
      <label><input type='radio' name='question[31]' value='B'> B. var number = 10</label> 
      <label><input type='radio' name='question[31]' value='C'> C. let number = 10</label> 
      <label><input type='radio' name='question[31]' value='1'> D. const number = 10</label>
      <p class='correctAnswer'>Poprawna odpowiedź: D</p>
       ",
    31 => "
      <p> Chcąc wypisać wartość zmiennej a w dokumencie HTML przy użyciu języka JavaScript, należałoby użyć instrukcji </p>
      <label><input type='radio' name='question[32]' value='1'> A. document.write(&quot;Zmienna a ma wartość : &quot; + a)</label> 
      <label><input type='radio' name='question[32]' value='B'> B. document.write(&quot;Zmienna a ma wartość : &quot;.a)</label> 
      <label><input type='radio' name='question[32]' value='C'> C. console.log(&quot;Zmienna a ma wartość : &quot; + a)</label>
      <label><input type='radio' name='question[32]' value='D'> D. console.log(&quot;Zmienna a ma wartość : &quot;.a)</label>
      <p class='correctAnswer'>Poprawna odpowiedź: A</p>
       ",
    32 => "
      <p> Jaki znak służy do komentowania jednoliniowego w języku JavaScript? </p>
      <label><input type='radio' name='question[33]' value='A'> A. #</label>
      <label><input type='radio' name='question[33]' value='1'> B. //</label> 
      <label><input type='radio' name='question[33]' value='C'> C. --</label>
      <label><input type='radio' name='question[33]' value='D'> D. /*</label>
      <p class='correctAnswer'>Poprawna odpowiedź: B</p>
       ",
    33 => "
      <p> Typ zmiennej w języku JavaScript </p>
      <label><input type='radio' name='question[34]' value='A'> A. jest tylko jeden</label> 
      <label><input type='radio' name='question[34]' value='B'> B. nie występuje</label> 
      <label><input type='radio' name='question[34]' value='1'> C. nadawany jest poprzez przypisanie wartości</label>
      <label><input type='radio' name='question[34]' value='D'> D. musi być zadeklarowany przed nazwą zmiennej lub stałej</label>
      <p class='correctAnswer'>Poprawna odpowiedź: C</p>
       ",
    34 => "
      <p> Jak zapisać w języku JavaScript warunek sprawdzający, czy zmienna a jest parzysta i większa od 10 </p>
      <label><input type='radio' name='question[35]' value='1'> A. (a % 2 == 0) && (a > 10)</label> 
      <label><input type='radio' name='question[35]' value='B'> B. (a % 2 == 0) || (a > 10)</label> 
      <label><input type='radio' name='question[35]' value='C'> C. (a % 2 = 0) && (a > 10)</label>
      <label><input type='radio' name='question[35]' value='D'> D. (a % 2 = 0) || (a > 10)</label>
      <p class='correctAnswer'>Poprawna odpowiedź: A</p>
       ",
    35 => "
      <p> W języku JavaScript zdefiniowano funkcję: <br> <br>
      function funkcja1(a) { <br>
        if(a > 0) { <br>
          a = a * a; <br>
        } else {<br>
          a = 0; <br>
        } <br>
        return a; <br> <br>
        Zwraca ona</p>
      <label><input type='radio' name='question[36]' value='A'> A. Kwadrat liczby ujemnej</label>
      <label><input type='radio' name='question[36]' value='B'> B. Kwadrat liczby dodatniej</label> 
      <label><input type='radio' name='question[36]' value='C'> C. Kwadrat liczby ujemnej, lub 0</label>
      <label><input type='radio' name='question[36]' value='1'> D. Kwadrat liczby dodatniej, lub 0</label>
      <p class='correctAnswer'>Poprawna odpowiedź: D</p>
      ",
    36 => "
      <p> Jak zapisać w JavaScripcie warunek sprawdzający, czy dana liczba jest z przedziału <5, 15) ? </p>
      <label><input type='radio' name='question[37]' value='A'> A. if(liczba >= 5 || liczba < 15)</label> 
      <label><input type='radio' name='question[37]' value='B'> B. if(liczba > 5 || liczba <= 15)</label> 
      <label><input type='radio' name='question[37]' value='1'> C. if(liczba >= 5 && liczba < 15)</label>
      <label><input type='radio' name='question[37]' value='D'> D. if(liczba > 5 && liczba <= 15)</label>
      <p class='correctAnswer'>Poprawna odpowiedź: C</p>
       ",
  );
?>