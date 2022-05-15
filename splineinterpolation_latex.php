<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  
  "http://www.w3.org/TR/html4/loose.dtd">  
<html xml:lang="de" > 
<head><title></title> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
<meta name="generator" content="TeX4ht (https://tug.org/tex4ht/)"> 
<meta name="originator" content="TeX4ht (https://tug.org/tex4ht/)"> 
<!-- html --> 
<meta name="src" content="splineinterpolation_latex.tex"> 
<link rel="stylesheet" type="text/css" href="splineinterpolation_latex.css"> 
</head><body 
>
<h3 class="sectionHead"><span class="titlemark">1   </span> <a 
 id="x1-10001"></a>Spline Interpolation</h3>
<!--l. 26--><p class="noindent" >Bei der nachfolgenden Spline Interpolation wird das prinzip der Kubischen <span 
class="cmmi-12">C</span><sup><span 
class="cmr-8">2</span></sup>-Spline Interpolation
mit natürlichen Randbedingungen angewandt. Zur Lösung der Gleichung wird der Thomas
Algorithmus verwendet. Ausserdem werden Werte ausserhalb der Stützpunkte durch lineare
Extrapolation mit der Steigung am Anfangs- bzw. Endpunkt approximiert. <br 
class="newline" /><br>
<div class="table">
                                                                                            
                                                                                            
<!--l. 29--><p class="noindent" ><a 
 id="x1-10011"></a><hr class="float"><div class="float" 
>
                                                                                            
                                                                                            
<div class="tabular"> <table id="TBL-1" class="tabular" 
 
><colgroup id="TBL-1-1g"><col 
id="TBL-1-1"></colgroup><colgroup id="TBL-1-2g"><col 
id="TBL-1-2"></colgroup><tr  
 style="vertical-align:baseline;" id="TBL-1-1-"><td  style="white-space:nowrap; text-align:center;" id="TBL-1-1-1"  
class="td11"> <span 
class="cmmi-12">x</span><span 
class="cmr-12">[</span><span 
class="cmmi-12">n</span><span 
class="cmr-12">]  </span></td><td  style="white-space:nowrap; text-align:center;" id="TBL-1-1-2"  
class="td11"> Vektor Stützpunkte x-Wert  </td>
</tr><tr  
 style="vertical-align:baseline;" id="TBL-1-2-"><td  style="white-space:nowrap; text-align:center;" id="TBL-1-2-1"  
class="td11"> <span 
class="cmmi-12">y</span><span 
class="cmr-12">[</span><span 
class="cmmi-12">n</span><span 
class="cmr-12">]  </span></td><td  style="white-space:nowrap; text-align:center;" id="TBL-1-2-2"  
class="td11"> Vektor Stützpunkte y-Wert  </td>
</tr><tr  
 style="vertical-align:baseline;" id="TBL-1-3-"><td  style="white-space:nowrap; text-align:center;" id="TBL-1-3-1"  
class="td11">  <span 
class="cmmi-12">n   </span></td><td  style="white-space:nowrap; text-align:center;" id="TBL-1-3-2"  
class="td11">    Anzahl Stützpunkte      </td>
</tr><tr  
 style="vertical-align:baseline;" id="TBL-1-4-"><td  style="white-space:nowrap; text-align:center;" id="TBL-1-4-1"  
class="td11">      </td></tr></table></div>
<br /> <div class="caption" 
><span class="id">Tabelle&#x00A0;1.1: </span><span  
class="content">Eingabewerte</span></div><!--tex4ht:label?: x1-10011 -->
                                                                                            
                                                                                            
</div><hr class="endfloat" />
</div>
<div class="table">
                                                                                            
                                                                                            
<!--l. 39--><p class="noindent" ><a 
 id="x1-10022"></a><hr class="float"><div class="float" 
>
                                                                                            
                                                                                            
<div class="tabular"> <table id="TBL-2" class="tabular" 
 
><colgroup id="TBL-2-1g"><col 
id="TBL-2-1"></colgroup><colgroup id="TBL-2-2g"><col 
id="TBL-2-2"></colgroup><tr  
 style="vertical-align:baseline;" id="TBL-2-1-"><td  style="white-space:nowrap; text-align:center;" id="TBL-2-1-1"  
class="td11"> <span 
class="cmmi-12">a</span><span 
class="cmr-12">[</span><span 
class="cmmi-12">n </span><span 
class="cmsy-10x-x-120">- </span><span 
class="cmr-12">1]  </span></td><td  style="white-space:nowrap; text-align:center;" id="TBL-2-1-2"  
class="td11">   Kubischer Spline Koeffizient    </td>
</tr><tr  
 style="vertical-align:baseline;" id="TBL-2-2-"><td  style="white-space:nowrap; text-align:center;" id="TBL-2-2-1"  
class="td11"> <span 
class="cmmi-12">b</span><span 
class="cmr-12">[</span><span 
class="cmmi-12">n </span><span 
class="cmsy-10x-x-120">- </span><span 
class="cmr-12">1]  </span></td><td  style="white-space:nowrap; text-align:center;" id="TBL-2-2-2"  
class="td11"> Quadratischer Spline Koeffizient  </td>
</tr><tr  
 style="vertical-align:baseline;" id="TBL-2-3-"><td  style="white-space:nowrap; text-align:center;" id="TBL-2-3-1"  
class="td11"> <span 
class="cmmi-12">c</span><span 
class="cmr-12">[</span><span 
class="cmmi-12">n </span><span 
class="cmsy-10x-x-120">- </span><span 
class="cmr-12">1]  </span></td><td  style="white-space:nowrap; text-align:center;" id="TBL-2-3-2"  
class="td11">   Linearer Spline Koeffizient     </td></tr></table>
</div>
<br /> <div class="caption" 
><span class="id">Tabelle&#x00A0;1.2: </span><span  
class="content">Ausgabewerte</span></div><!--tex4ht:label?: x1-10022 -->
                                                                                            
                                                                                            
</div><hr class="endfloat" />
</div>
<!--l. 49--><p class="noindent" >Die Schrittweite zwischen den einzelnen Stützpunkten wird wie folgt berechnet <br 
class="newline" /><br>
<table 
class="equation"><tr><td>
<div class="math-display" >
<img 
src="splineinterpolation_latex0x.svg" alt="hi = xi+1 - xi     ;i &#x2208; [1,n - 1]
" class="math-display" ><a 
 id="x1-1003r1"></a></div>
</td><td class="equation-label">(1.1)</td></tr></table>
<!--l. 54--><p class="nopar" >
<br 
class="newline" /><br>
<!--l. 57--><p class="noindent" >Bei der Kubischen <span 
class="cmmi-12">C</span><sup><span 
class="cmr-8">2</span></sup>-Spline Interpolation wird die diskrete Funktion <span 
class="cmmi-12">y</span><span 
class="cmr-12">[</span><span 
class="cmmi-12">n</span><span 
class="cmr-12">](</span><span 
class="cmmi-12">x</span><span 
class="cmr-12">[</span><span 
class="cmmi-12">n</span><span 
class="cmr-12">]) </span>im Intervall <span 
class="cmr-12">[</span><span 
class="cmmi-12">x</span><sub>
<span 
class="cmr-8">1</span></sub><span 
class="cmmi-12">,x</span><sub><span 
class="cmmi-8">n</span></sub><span 
class="cmr-12">]</span>
durch eine kontinuierliche funktion <span 
class="cmmi-12">s</span><span 
class="cmr-12">(</span><span 
class="cmmi-12">x</span><span 
class="cmr-12">) </span>approximiert. <span 
class="cmmi-12">s</span><span 
class="cmr-12">(</span><span 
class="cmmi-12">x</span><span 
class="cmr-12">) </span>hat die Form. <br 
class="newline" /><br>
<table 
class="equation-star"><tr><td>
<div class="math-display" >
<img 
src="splineinterpolation_latex1x.svg" alt="s(x ) = si(x)     ;x &#x2208; [x1,xn ]
" class="math-display" ></div>
</td></tr></table>
<!--l. 63--><p class="nopar" >
<br 
class="newline" /><br>
<table 
class="equation"><tr><td>
<div class="math-display" >
<img 
src="splineinterpolation_latex2x.svg" alt="                        3             2
si(x) = yi + ai &#x22C5; (x - xi) + bi &#x22C5; (x - xi) + ci &#x22C5; (x - xi)  ;x &#x2208; [xi,xi+1]
" class="math-display" ><a 
 id="x1-1004r2"></a></div>
                                                                                            
                                                                                            
</td><td class="equation-label">(1.2)</td></tr></table>
<!--l. 67--><p class="nopar" >
<br 
class="newline" /><br>
<!--l. 70--><p class="noindent" >Die erste und zweite Ableitung sind gegeben durch <br 
class="newline" /><br>
<table 
class="equation"><tr><td>
<div class="math-display" >
<img 
src="splineinterpolation_latex3x.svg" alt="s&#x2032;i(x ) = 3 &#x22C5; ai &#x22C5; (x - xi)2 + 2 &#x22C5; bi &#x22C5; (x - xi) + ci ;x &#x2208; [xi,xi+1]
" class="math-display" ><a 
 id="x1-1005r3"></a></div>
</td><td class="equation-label">(1.3)</td></tr></table>
<!--l. 75--><p class="nopar" >
<br 
class="newline" /><br>
<table 
class="equation"><tr><td>
<div class="math-display" >
<img 
src="splineinterpolation_latex4x.svg" alt=" &#x2032;&#x2032;
si(x) = 6 &#x22C5; ai &#x22C5; (x - xi) + 2 &#x22C5; bi ;x &#x2208; [xi,xi+1]
" class="math-display" ><a 
 id="x1-1006r4"></a></div>
</td><td class="equation-label">(1.4)</td></tr></table>
<!--l. 79--><p class="nopar" >
<br 
class="newline" /><br>
<!--l. 82--><p class="noindent" >Es gelten die Bedingungen <br 
class="newline" /><br>
<table 
class="equation"><tr><td>
<div class="math-display" >
<img 
src="splineinterpolation_latex5x.svg" alt="si(xi+1 ) = si+1(xi+1)
" class="math-display" ><a 
 id="x1-1007r5"></a></div>
</td><td class="equation-label">(1.5)</td></tr></table>
<!--l. 87--><p class="nopar" >
<br 
class="newline" /><br>
<table 
class="equation"><tr><td>
<div class="math-display" >
<img 
src="splineinterpolation_latex6x.svg" alt="s&#x2032;(x   ) = s&#x2032; (x   )
 i  i+1     i+1  i+1
" class="math-display" ><a 
 id="x1-1008r6"></a></div>
</td><td class="equation-label">(1.6)</td></tr></table>
<!--l. 91--><p class="nopar" >
<br 
class="newline" /><br>
<table 
class="equation"><tr><td>
<div class="math-display" >
<img 
src="splineinterpolation_latex7x.svg" alt=" &#x2032;&#x2032;          &#x2032;&#x2032;
si(xi+1) = si+1(xi+1)
" class="math-display" ><a 
 id="x1-1009r7"></a></div>
</td><td class="equation-label">(1.7)</td></tr></table>
<!--l. 95--><p class="nopar" >
<br 
class="newline" /><br>
<!--l. 98--><p class="noindent" >Wir definieren den Koeffizienten <span 
class="cmmi-12">S</span><sub><span 
class="cmmi-8">i</span></sub> für <span 
class="cmmi-12">s</span><sub><span 
class="cmmi-8">i</span></sub><span 
class="cmsy-10x-x-120">&#x2032;&#x2032;</span><span 
class="cmr-12">(</span><span 
class="cmmi-12">x</span><sub><span 
class="cmmi-8">i</span></sub><span 
class="cmr-12">) </span><br 
class="newline" /><br>
<table 
class="equation"><tr><td>
<div class="math-display" >
<img 
src="splineinterpolation_latex8x.svg" alt="Si :=  s&#x2032;&#x2032;i(xi)
" class="math-display" ><a 
 id="x1-1010r8"></a></div>
</td><td class="equation-label">(1.8)</td></tr></table>
<!--l. 103--><p class="nopar" >
<br 
class="newline" /><br>
<!--l. 106--><p class="noindent" >Aus den Formeln 1.7 geht hervor dass für <span 
class="cmmi-12">S</span><sub><span 
class="cmmi-8">i</span></sub> gilt: <br 
class="newline" /><br>
<table 
class="equation-star"><tr><td>
<div class="math-display" >
<img 
src="splineinterpolation_latex9x.svg" alt="Si+1 = 2 &#x22C5; bi+1 = 6 &#x22C5; ai &#x22C5; hi + 2 &#x22C5; bi
" class="math-display" ></div>
</td></tr></table>
<!--l. 111--><p class="nopar" >
<br 
class="newline" /><br>
<table 
class="equation"><tr><td>
<div class="math-display" >
<img 
src="splineinterpolation_latex10x.svg" alt="Si+1 = 6 &#x22C5; ai &#x22C5; hi + Si
" class="math-display" ><a 
 id="x1-1011r9"></a></div>
</td><td class="equation-label">(1.9)</td></tr></table>
<!--l. 115--><p class="nopar" >
<br 
class="newline" /><br>
<!--l. 118--><p class="noindent" >Entsprechend gilt für <span 
class="cmmi-12">a</span><sub><span 
class="cmmi-8">i</span></sub> und <span 
class="cmmi-12">b</span><sub><span 
class="cmmi-8">i</span></sub> <br 
class="newline" /><br>
<table 
class="equation-star"><tr><td>
<div class="math-display" >
                                                                                            
                                                                                            
<img 
src="splineinterpolation_latex11x.svg" alt="     Si+1 --Si
ai =   6 &#x22C5; hi
" class="math-display" ></div>
</td></tr></table>
<!--l. 123--><p class="nopar" >
<br 
class="newline" /><br>
<table 
class="equation"><tr><td>
<div class="math-display" >
<img 
src="splineinterpolation_latex12x.svg" alt="bi = Si-
      2
" class="math-display" ><a 
 id="x1-1012r10"></a></div>
</td><td class="equation-label">(1.10)</td></tr></table>
<!--l. 127--><p class="nopar" >
<br 
class="newline" /><br>
<!--l. 130--><p class="noindent" >Durch substituieren von <span 
class="cmmi-12">a</span><sub><span 
class="cmmi-8">i</span></sub> und <span 
class="cmmi-12">b</span><sub><span 
class="cmmi-8">i</span></sub> in Gleichung 1.5 folgt für <span 
class="cmmi-12">c</span><sub><span 
class="cmmi-8">i</span></sub> <br 
class="newline" /><br>
<table 
class="equation"><tr><td>
<div class="math-display" >
<img 
src="splineinterpolation_latex13x.svg" alt="c =  yi+1 --yi-  hi &#x22C5; (Si+1-+-2 &#x22C5;-Si)
 i      hi              6
" class="math-display" ><a 
 id="x1-1013r11"></a></div>
</td><td class="equation-label">(1.11)</td></tr></table>
<!--l. 135--><p class="nopar" >
<br 
class="newline" /><br>
<!--l. 138--><p class="noindent" >Entsprechend ergibt sich die Gleichung für <span 
class="cmmi-12">S</span><span 
class="cmr-12">[</span><span 
class="cmmi-12">n</span><span 
class="cmr-12">] </span>durch substituieren der Koeffizienten <span 
class="cmmi-12">a</span><sub><span 
class="cmmi-8">i</span></sub>,<span 
class="cmmi-12">b</span><sub><span 
class="cmmi-8">i</span></sub> und <span 
class="cmmi-12">c</span><sub><span 
class="cmmi-8">i</span></sub> in
Gleichung 1.5
<table 
class="equation"><tr><td>
                                                                                            
                                                                                            
<div class="math-display" >
<img 
src="splineinterpolation_latex14x.svg" alt="h &#x22C5; S + 2 &#x22C5; (h + h   ) &#x22C5; S  + h    &#x22C5; S  =  6 &#x22C5; (yi+2---yi+1-- yi+1---yi)
 i   i       i    i+1    i+1    i+1   i+2          hi+1          hi
" class="math-display" ><a 
 id="x1-1014r12"></a></div>
</td><td class="equation-label">(1.12)</td></tr></table>
<!--l. 141--><p class="nopar" >
<br 
class="newline" /><br>
<!--l. 144--><p class="noindent" >Wir erhalten also ein Randwertproblem. Durch die natürliche Randwertbedingung gilt:
<br 
class="newline" /><br>
<table 
class="equation"><tr><td>
<div class="math-display" >
<img 
src="splineinterpolation_latex15x.svg" alt="S  = S  =  0
 1     n
" class="math-display" ><a 
 id="x1-1015r13"></a></div>
</td><td class="equation-label">(1.13)</td></tr></table>
<!--l. 149--><p class="nopar" >
<br 
class="newline" /><br>
<!--l. 152--><p class="noindent" >Entsprechend den vorgängigen Überlegungen folgt das Gleichungssystem für die unbekannten Einträge
von <span 
class="cmmi-12">S</span><span 
class="cmr-12">[</span><span 
class="cmmi-12">n</span><span 
class="cmr-12">] </span><br 
class="newline" /><br>
<table 
class="equation"><tr><td>
<div class="math-display" >
<img 
src="splineinterpolation_latex16x.svg" alt="&#x230A;                                                     &#x230B;
 2 &#x22C5; (h1 + h2)      h2                                   &#x230A;     &#x230B;      &#x230A;    y3-y2-  y2--y1-  &#x230B;
|     h2       2 &#x22C5; (h2 + h3) h3                       |     S2             yh42-y3   yh3-1y2-
||                            ..   ..                  ||  ||  S3 ||      ||     h3  -   h2    ||
||                   h3        .     .                 || &#x22C5;|&#x2308;   ... |&#x2309; =  6&#x22C5;|&#x2308;          ...        |&#x2309;
&#x2308;                            ...   ...        hn-2     &#x2309;                 yn-yn-1   yn-1--yn-2-
                                                           Sn-1          hn-1  -    hn-2
                                 hn- 2 2 &#x22C5; (hn- 2+hn -1)
" class="math-display" ><a 
 id="x1-1016r14"></a></div>
</td><td class="equation-label">(1.14)</td></tr></table>
<!--l. 178--><p class="nopar" >
<br 
class="newline" /><br>
                                                                                            
                                                                                            
<!--l. 182--><p class="noindent" >Da es sich um eine Tridiagonalmatrix handelt kann dieses Gleichungssystem mit dem
Thomas Algorithmus gelöst werden. Zuerst müssen die Koeffizienten <span 
class="cmmi-12">a</span><sub><span 
class="cmmi-8">T</span> </sub><span 
class="cmr-12">[</span><span 
class="cmmi-12">n</span><sub><span 
class="cmmi-8">T</span> </sub><span 
class="cmr-12">]</span>, <span 
class="cmmi-12">b</span><sub><span 
class="cmmi-8">T</span> </sub><span 
class="cmr-12">[</span><span 
class="cmmi-12">n</span><sub><span 
class="cmmi-8">T</span> </sub><span 
class="cmr-12">]</span>,<span 
class="cmmi-12">c</span><sub><span 
class="cmmi-8">T</span> </sub><span 
class="cmr-12">[</span><span 
class="cmmi-12">n</span><sub><span 
class="cmmi-8">T</span> </sub><span 
class="cmr-12">]</span>
und <span 
class="cmmi-12">d</span><sub><span 
class="cmmi-8">T</span> </sub><span 
class="cmr-12">[</span><span 
class="cmmi-12">n</span><sub><span 
class="cmmi-8">T</span> </sub><span 
class="cmr-12">] </span>bestimmt werden. Das Subskript T dient der unterscheidung der Variablen.
<br 
class="newline" /><br>
<table 
class="equation"><tr><td>
<div class="math-display" >
<img 
src="splineinterpolation_latex17x.svg" alt="&#x230A;                               &#x230B;
 bT,1  cT,1                         &#x230A;      &#x230B;   &#x230A;      &#x230B;
||aT,2  bT,2  cT,2                ||  | xT,1 |   | dT,1 |
|            ...   ...          |  | xT,2 |   |  dT2 |
||      aT,3                     || &#x22C5;|&#x2308;   ...  |&#x2309; = |&#x2308;   ...  |&#x2309;
&#x2308;            ...   ...   cT,nT-1&#x2309;
                  a       b          xT,nT       dT,nT
                   T,nT     T,nT
" class="math-display" ><a 
 id="x1-1017r15"></a></div>
</td><td class="equation-label">(1.15)</td></tr></table>
<!--l. 207--><p class="nopar" >
<br 
class="newline" /><br>
<!--l. 210--><p class="noindent" >Das <span 
class="cmmi-12">n</span><sub><span 
class="cmmi-8">T</span> </sub> des Thomas Algorithmus entspricht der Anzahl Stützstellen - 2 (<span 
class="cmmi-12">n</span><sub><span 
class="cmmi-8">T</span> </sub> <span 
class="cmr-12">= </span><span 
class="cmmi-12">n </span><span 
class="cmsy-10x-x-120">- </span><span 
class="cmr-12">2</span>). Entsprechend
glit für die Koeffizienten durch Koeffizientenvergleich mit Gleichung 3.7 und substituieren von <span 
class="cmmi-12">n</span><sub><span 
class="cmmi-8">T</span> </sub>
<br 
class="newline" /><br>
<table 
class="equation-star"><tr><td>
<div class="math-display" >
<img 
src="splineinterpolation_latex18x.svg" alt="      {
a   =   0   ;i = 1
 T,i    hi  ;i &#x2208; [2,n - 2]
" class="math-display" ></div>
</td></tr></table>
<!--l. 219--><p class="nopar" >
<br 
class="newline" /><br>
<table 
class="equation-star"><tr><td>
                                                                                            
                                                                                            
<div class="math-display" >
<img 
src="splineinterpolation_latex19x.svg" alt="bT,i = 2 &#x22C5; (hi + hi+1)    ;i &#x2208; [1,n - 2]
" class="math-display" ></div>
</td></tr></table>
<!--l. 223--><p class="nopar" >
<br 
class="newline" /><br>
<table 
class="equation-star"><tr><td>
<div class="math-display" >
<img 
src="splineinterpolation_latex20x.svg" alt="      {
        hi+1  ;i &#x2208; [1,n - 3]
cT,i =
        0     ;i = n - 2
" class="math-display" ></div>
</td></tr></table>
<!--l. 231--><p class="nopar" >
<br 
class="newline" /><br>
<table 
class="equation"><tr><td>
<div class="math-display" >
<img 
src="splineinterpolation_latex21x.svg" alt="         ( y   -  y      y   - y )
dT,i = 6 &#x22C5; -i+2----i+1--  -i+1----i-       ;i &#x2208; [1,n - 2]
              hi+1          hi
" class="math-display" ><a 
 id="x1-1018r16"></a></div>
</td><td class="equation-label">(1.16)</td></tr></table>
<!--l. 235--><p class="nopar" >
<br 
class="newline" /><br>
<!--l. 238--><p class="noindent" >Mit dem Thomas Algorithmus werden in einem ersten Schritt die Koeffizienten <span 
class="cmmi-12">c</span><sub><span 
class="cmmi-8">T</span> </sub><span 
class="cmsy-10x-x-120">&#x2032;</span><span 
class="cmr-12">[</span><span 
class="cmmi-12">n</span><sub><span 
class="cmmi-8">T</span> </sub><span 
class="cmr-12">] </span>und <span 
class="cmmi-12">d</span><sub><span 
class="cmmi-8">T</span> </sub><span 
class="cmsy-10x-x-120">&#x2032;</span><span 
class="cmr-12">[</span><span 
class="cmmi-12">n</span><sub><span 
class="cmmi-8">T</span> </sub><span 
class="cmr-12">]</span>
berechnet. (Vorwärtseinsetzen) <br 
class="newline" /><br>
<table 
class="equation-star"><tr><td>
                                                                                            
                                                                                            
<div class="math-display" >
<img 
src="splineinterpolation_latex22x.svg" alt="      {
        cbT,i          ;i = 1
c&#x2032;T,i =   -T,i-cT,i----
        bT,i-c&#x2032;T,i- 1&#x22C5;ai  ;i &#x2208; [2,n - 3]
" class="math-display" ></div>
</td></tr></table>
<!--l. 247--><p class="nopar" >
<br 
class="newline" /><br>
<table 
class="equation"><tr><td>
<div class="math-display" >
<img 
src="splineinterpolation_latex23x.svg" alt="      (
      { dbT,i           ;i = 1
d&#x2032;T,i =   dTT,i,i-d&#x2032;T,i-1&#x22C5;aT,i
      ( bT,i-c&#x2032;T,i-1&#x22C5;aT,i  ;i &#x2208; [2,n - 2]
" class="math-display" ><a 
 id="x1-1019r17"></a></div>
</td><td class="equation-label">(1.17)</td></tr></table>
<!--l. 255--><p class="nopar" >
                                                                                            
                                                                                            
<!--l. 258--><p class="noindent" >Die unbekannten Koeffizienten von <span 
class="cmmi-12">S</span><span 
class="cmr-12">[</span><span 
class="cmmi-12">n</span><span 
class="cmr-12">] </span>werden anschliessend wie folgt berechnet. (Rückwärtseinsetzen)
<br 
class="newline" /><br>
<table 
class="equation"><tr><td>
<div class="math-display" >
<img 
src="splineinterpolation_latex24x.svg" alt="     {
        &#x2032;
Si =   dT,i- 1             ;i = n - 1
       d&#x2032;T,i- 1 - c&#x2032;T,i &#x22C5; Si+1 ;i &#x2208; [n - 2,2]
" class="math-display" ><a 
 id="x1-1020r18"></a></div>
</td><td class="equation-label">(1.18)</td></tr></table>
<!--l. 267--><p class="nopar" >
<br 
class="newline" /><br>
<!--l. 270--><p class="noindent" >Damit lassen sich die Spline Koeffizienten folgendermassen berechnen. <br 
class="newline" /><br>
<table 
class="equation-star"><tr><td>
<div class="math-display" >
<img 
src="splineinterpolation_latex25x.svg" alt="ai = Si+1 --Si     ;i &#x2208; [1,n -  1]
       6 &#x22C5; hi
" class="math-display" ></div>
</td></tr></table>
<!--l. 275--><p class="nopar" >
<table 
class="equation-star"><tr><td>
<div class="math-display" >
<img 
src="splineinterpolation_latex26x.svg" alt="     Si
bi = ---     ;i &#x2208; [1,n - 1]
     2
" class="math-display" ></div>
</td></tr></table>
                                                                                            
                                                                                            
<!--l. 278--><p class="nopar" >
<table 
class="equation"><tr><td>
<div class="math-display" >
<img 
src="splineinterpolation_latex27x.svg" alt="     yi+1---yi-  hi-&#x22C5; (Si+1 +-2 &#x22C5; Si)
ci =    h     -         6              ;i &#x2208; [1,n - 1]
         i
" class="math-display" ><a 
 id="x1-1021r19"></a></div>
</td><td class="equation-label">(1.19)</td></tr></table>
<!--l. 281--><p class="nopar" >
<br 
class="newline" /><br>
<!--l. 284--><p class="noindent" >Ein Wert <span 
class="cmmi-12">y</span><span 
class="cmr-12">(</span><span 
class="cmmi-12">x</span><span 
class="cmr-12">) </span>lässt sich anschliessend berechnen mit <br 
class="newline" /><br>
<table 
class="equation"><tr><td>
<div class="math-display" >
<img 
src="splineinterpolation_latex28x.svg" alt="    (
    | y1 - c1 &#x22C5; (x1 - x)                                                   ;x &#x003C; x1
    {                3              2
y = | yi + ai &#x22C5; (x - xi) + bi &#x22C5; (x - xi) + ci &#x22C5; (x - xi)                   ;x &#x2208; [xi,xi+1]
    ( yn + (3 &#x22C5; an- 1 &#x22C5; (xn - xn -1)2 + 2 &#x22C5; bn-1 &#x22C5; (xn - xn-1) + cn-1) &#x22C5; (x - xn ) ;x &#x003E; xn
" class="math-display" ><a 
 id="x1-1022r20"></a></div>
</td><td class="equation-label">(1.20)</td></tr></table>
<!--l. 294--><p class="nopar" >
                                                                                            
                                                                                            
 
</body></html>