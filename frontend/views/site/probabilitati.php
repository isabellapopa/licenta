<?php

/* @var $this yii\web\Probabilitati*/

use yii\helpers\Html;
$this->title = 'Probabilitati';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="site-glosar">
    <h1><?= Html::encode($this->title) ?></h1>
    <br>
    <p>Cadrul matematic de bază ın care se construieşte teoria probabilităţilor
        este spaţiul de probabilitate. Formal, un spaţiu de probabilitate este alcătuit
        dintr-o mulţime Ω (interpretată că reprezentând evenimentul sigur ), o familie E
        de submulţimi ale lui Ω (interpretată că familia evenimentelor care pot rezulta
        ın urmă unei anumite experienţe), cu proprietăţile:</p>

    <ul>
        <li>
            <math style="font-family:Arial" xmlns="http://www.w3.org/1998/Math/MathML"><mstyle mathsize="12px"><menclose notation="top"><mi>A</mi></menclose></mstyle></math> ∈ <math style="font-family:Arial" xmlns="http://www.w3.org/1998/Math/MathML"><mstyle mathsize="22px"><mi>&#x003B5;</mi></mstyle></math>,
            unde<math style="font-family:Arial" xmlns="http://www.w3.org/1998/Math/MathML"><mstyle mathsize="12px"><menclose notation="top"><mi>A</mi></menclose></mstyle></math>  := Ω
        </li>
        <li>
            A ∪ B ∈<math style="font-family:Arial" xmlns="http://www.w3.org/1998/Math/MathML"><mstyle mathsize="22px"><mi>&#x003B5;</mi></mstyle></math>, ∀ A, B ∈ <math style="font-family:Arial" xmlns="http://www.w3.org/1998/Math/MathML"><mstyle mathsize="22px"><mi>&#x003B5;</mi></mstyle></math>
        </li>
    </ul>
    şi o funcţie P:<math style="font-family:Arial" xmlns="http://www.w3.org/1998/Math/MathML"><mstyle mathsize="22px"><mi>&#x003B5;</mi></mstyle></math> -> [0,1], numită probabilitate, care atribuie fiecărui eveniment, P ∈ <math style="font-family:Arial" xmlns="http://www.w3.org/1998/Math/MathML"><mstyle mathsize="22px"><mi>&#x003B5;</mi></mstyle></math>
    o "probabilitate de realizare" P(A), astfel ca:
    <ul>
        <li>
            P(Ω) = 1;
        </li>
        <li>
            P(A ∪ B) = P(A) + P(B), ∀ A, B ∈ <math style="font-family:Arial" xmlns="http://www.w3.org/1998/Math/MathML"><mstyle mathsize="22px"><mi>&#x003B5;</mi></mstyle></math> , cu A ∩ B = ∅ (evenimente incompatibile).
        </li>
    </ul>

    Realizarea simultană a evenimentelor A şi B corespunde evenimentului A ∩ B, iar faptul că realizarea evenimentului A implica realizarea evenimentului
    B corespunde situaţiei A ⊂ B . Avem P(∅) = 0, unde ∅ ∈ <math style="font-family:Arial" xmlns="http://www.w3.org/1998/Math/MathML"><mstyle mathsize="22px"><mi>&#x003B5;</mi></mstyle></math>
    reprezintă evenimentul imposibil. Probabilitatea evenimentului contrar evenimentului A se calculează prin: <br>
    </p>
    <p align="center">
        P(<math style="font-family:Arial" xmlns="http://www.w3.org/1998/Math/MathML"><mstyle mathsize="12px"><menclose notation="top"><mi>A</mi></menclose></mstyle></math>) = 1- P(A)
    </p>
    <p>
        In particular, daca Ω este o multime finita, <math style="font-family:Arial" xmlns="http://www.w3.org/1998/Math/MathML"><mstyle mathsize="22px"><mi>&#x003B5;</mi></mstyle></math> = P(Ω),
        iar P(A) = <math style="font-family:Arial" xmlns="http://www.w3.org/1998/Math/MathML"><mstyle mathsize="20px"><mfrac><mfenced open="|" close="|"><mi>A</mi></mfenced><mfenced open="|" close="|"><mo>&#x02126;</mo></mfenced></mfrac></mstyle></math>,
        <math style="font-family:Arial" xmlns="http://www.w3.org/1998/Math/MathML"><mstyle mathsize="20px"><mrow><mo>&#x02200;</mo><mo>&#x000A0;</mo><mi>A</mi><mo>&#x02208;</mo><mo>&#x02126;</mo></mrow></mstyle></math>
        (<math style="font-family:Arial" xmlns="http://www.w3.org/1998/Math/MathML"><mstyle mathsize="20px"><mrow><mo>&#x02200;</mo><mo>&#x000A0;</mo><mi>A</mi><mo>&#x02208;</mo><mo>&#x02126;</mo></mrow></mstyle></math> desemneaza
        numarul de elemente ale multimii M, suntem in cazul "evenimentelor elementare egal probabile" (P({w}) = <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mi>n</mi></mfrac></math>,
        <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x02200;</mo><mo>&#x000A0;</mo><mi>w</mi><mo>&#x000A0;</mo><mo>&#x02208;</mo><mo>&#x000A0;</mo><mo>&#x02126;</mo></math>,
        iar n =|Ω|)
        &nbnb Atunci probabilitatea unui eveniment A se calculeaza:
    </p>
    <p align="center">
            P(A) = <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mi>n</mi><mi>u</mi><mi>m</mi><mi>a</mi><mi>r</mi><mo>&#x000A0;</mo><mi>d</mi><mi>e</mi><mo>&#x000A0;</mo><mi>c</mi><mi>a</mi><mi>z</mi><mi>u</mi><mi>r</mi><mi>i</mi><mo>&#x000A0;</mo><mi>f</mi><mi>a</mi><mi>v</mi><mi>o</mi><mi>r</mi><mi>a</mi><mi>b</mi><mi>i</mi><mi>l</mi><mi>e</mi></mrow><mrow><mi>n</mi><mi>u</mi><mi>m</mi><mi>a</mi><mi>r</mi><mi>i</mi><mo>&#x000A0;</mo><mi>d</mi><mi>e</mi><mo>&#x000A0;</mo><mi>c</mi><mi>a</mi><mi>z</mi><mi>u</mi><mi>r</mi><mi>i</mi><mo>&#x000A0;</mo><mi>p</mi><mi>o</mi><mi>s</mi><mi>i</mi><mi>b</mi><mi>i</mi><mi>l</mi><mi>e</mi></mrow></mfrac></math>
    </p>
    <p>
        Evenimentele A si B se numesc independente daca P (A <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x02229;</mo></math> B) = P(A) * P(B)

        Daca A ∈ math style="font-family:Arial" xmlns="http://www.w3.org/1998/Math/MathML"><mstyle mathsize="22px"><mi>&#x003B5;</mi></mstyle></math> are o pribabilitate strict pozitiva, atunci numarul :
    </p>
    <br>
    <p>
        P(E|A) = <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mi>P</mi><mo>(</mo><mi>E</mi><mo>&#x000A0;</mo><mo>&#x02229;</mo><mo>&#x000A0;</mo><mi>A</mi><mo>)</mo></mrow><mrow><mi>P</mi><mo>(</mo><mi>A</mi><mo>)</mo></mrow></mfrac></math> este probabilitatea realizarii evenimentului E
        conditionata de realizarea evenimentului A.
        In particular, daca A si E sunt independente, atunci P(E|A) = P(E). Schemele de probabilitate reprezinta
        modele de baza in spatii de probabilitate. <br>
            <h6>Schema lui Bernouli</h6>

        Probabilitatea de realizare a unui eveniment A este P(A) = p ∈ (0, 1). Daca experienta se repeta de n ori
    atunci probabilitatea realizarii evenimentului A de exact k ori in cele n experiente este:


    </p>
    <p align="center">
        <math style="font-family:Arial" xmlns="http://www.w3.org/1998/Math/MathML"><mstyle mathsize="22px"><msub><mi>p</mi><mrow><mi>n</mi><mo>:</mo><mi>k</mi></mrow></msub></mstyle></math> =
        <math style="font-family:Arial" xmlns="http://www.w3.org/1998/Math/MathML"><mstyle mathsize="22px"><msubsup><mo largeop="true">C</mo><mi>n</mi><mi>k</mi></msubsup></mstyle></math> <math size="22px"> <math style="font-family:Arial" xmlns="http://www.w3.org/1998/Math/MathML"><mstyle mathsize="22px"><mrow><mo>(</mo><mn>1</mn><mo>-</mo><mi>p</mi><msup><mo>)</mo><mrow><mi>n</mi><mo>-</mo><mi>k</mi></mrow></msup></mrow></mstyle></math>
    </p>

    <p>
        <h6> Schema lui Poisson </h6>

    Se efectueaza n experiente independente. In cadrul unei experiente "i" se urmareste realizarea
   evenimentului <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>A</mi><mi>i</mi></msub></math>
   cu propabilitatea P(<math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>A</mi><mi>i</mi></msub></math>)= <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>p</mi><mi>i</mi></msub></math> ∈ (0, 1),
    unde i ∈ {1, 2, ··· , n}.Atunci probabilitatea <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>p</mi><mrow><mi>k</mi><mo>:</mo><mi>n</mi></mrow></msub></math>
    de realizare a exact k evenimente dintre cele urmarite in cadrul celor n experiente este coeficientul lui <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mi>k</mi></msup></math>
    din dezvoltarea polinomului:
    </p>
    <p align="center">
        <math style="font-family:Arial" xmlns="http://www.w3.org/1998/Math/MathML"><mstyle mathsize="20px"><mrow><mo>(</mo><msub><mi>p</mi><mn>1</mn></msub><mi>x</mi><mo>&#x000A0;</mo><mo>+</mo><msub><mi>q</mi><mn>1</mn></msub><mo>)</mo><mo>(</mo><msub><mi>p</mi><mn>2</mn></msub><mi>x</mi><mo>+</mo><msub><mi>q</mi><mn>2</mn></msub><mo>)</mo><mo>.</mo><mo>.</mo><mo>.</mo><mo>(</mo><msub><mi>p</mi><mi mathvariant="normal">n</mi></msub><mi>x</mi><mo>+</mo><msub><mi>q</mi><mi>n</mi></msub><mo>)</mo><mo>&#x000A0;</mo></mrow></mstyle></math>
    </p>
    <p>
        unde <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>q</mi><mi>i</mi></msub></math> = 1- <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>p</mi><mi>i</mi></msub></math>
        reprezinta probabilitatea evenimentului <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mover><mi>A</mi><mo>&#x000AF;</mo></mover><mi>i</mi></msub></math>
       Schema lui Poisson este o generalizare a schemei lui Bernouli
    </p>
    <p>
        Fie un spatiu de probabilitate(Ω, <math style="font-family:Arial" xmlns="http://www.w3.org/1998/Math/MathML"><mstyle mathsize="22px"><mi>&#x003B5;</mi></mstyle></math> , P),arbitrar,fixat.
        O functie X : Ω → R, cu proprietatea {ω ∈ Ω : X(ω) ≤ a} ∈ <math style="font-family:Arial" xmlns="http://www.w3.org/1998/Math/MathML"><mstyle mathsize="22px"><mi>&#x003B5;</mi></mstyle></math>, , ∀ a ∈ R,
        se numeste variabila aleatoare
    </p>
    <p>
        Variabila aleatoare X se numeste finita daca ia numar finit de valori <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>x</mi><mrow><mn>1</mn><mo>,</mo></mrow></msub><msub><mi>x</mi><mrow><mn>2</mn><mo>,</mo><mo>&#x000A0;</mo></mrow></msub><mo>.</mo><mo>.</mo><mo>.</mo><mo>.</mo><mo>.</mo><mo>,</mo><msub><mi>x</mi><mi>n</mi></msub></math>.
        Atunci <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>A</mi><mi>i</mi></msub></math> := {w ∈ Ω,X(ω) = <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>x</mi><mi>i</mi></msub></math> ∈ <math style="font-family:Arial" xmlns="http://www.w3.org/1998/Math/MathML"><mstyle mathsize="22px"><mi>&#x003B5;</mi></mstyle></math> si notam :

    </p>

    <p align="center">

        <math style="font-family:Arial" xmlns="http://www.w3.org/1998/Math/MathML"><mstyle mathsize="18px"><mrow><msub><mi>p</mi><mi>i</mi></msub><mo>=</mo><mi>P</mi><mo>(</mo><msub><mi>A</mi><mi>i</mi></msub><mo>)</mo><mo>=</mo><mi>P</mi><mo>{</mo><mi>X</mi><mo>=</mo><msub><mi>x</mi><mi>i</mi></msub><mo>}</mo><mo>&gt;</mo><mn>0</mn></mrow></mstyle></math>
        pentru i=1,2,...,n.
    </p>
    <p >
        Distributia variabilei aleatoare X se reprezinta prin:
    </p>
    <p align="center">
        <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>X</mi><mo>&#x000A0;</mo><mo>:</mo><mo>&#x000A0;</mo><mfenced><mtable><mtr><mtd><msub><mi>x</mi><mn>1</mn></msub><mo>,</mo><msub><mi>x</mi><mn>2</mn></msub><mo>,</mo><mo>.</mo><mo>.</mo><mo>.</mo><mo>,</mo><msub><mi>x</mi><mi>n</mi></msub></mtd></mtr><mtr><mtd><msub><mi>p</mi><mn>1</mn></msub><mo>,</mo><msub><mi>p</mi><mn>2</mn></msub><mo>,</mo><mo>.</mo><mo>.</mo><mo>.</mo><mo>,</mo><msub><mi>p</mi><mi>n</mi></msub></mtd></mtr></mtable></mfenced></math>
    </p>
    <p>
        Evenimentele <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>A</mi><mi>i</mi></msub></math> si <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>A</mi><mi>j</mi></msub></math>
        sunt incompatibile pentru i<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x02260;</mo></math> j.Atunci
    </p>





</div>


