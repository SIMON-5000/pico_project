---
Title: Färger och typografi
Description: Färger och typografi
# Template: technology
---

## Färger och typografi

Här gör jag en genomlysning av tre webbsidors färg- och teckensnittsval.
Häng med!

Urval
-----------------------
Jag valde tre sidor som har tre typer av avsändare, en myndighet vars sida som __måste__ vara tillgänglig och lättbegriplig för alla, 
en kommersiell tjänst vars sida __vill__ vara lättillgänglig och kunna hantera alla användare, och slutligen en personlig frilansares sida där istället __avsändaren__ bör välja vilka hen vill rikta sig till.

Metod
-----------------------

Främst har jag använt inspektera-funktionen i Chrome respektive Firefox. Men jag har också dubbelkollat värdena med andra verktyg. För att extrahera färger har jag använt Sindre Sorhus lilla verktyg: Color Picker. För att identifiera teckensnitten användes browsertillägget Whatfont som komplement.

Resultat
-----------------------

>### Huvudsakliga typsättningar:
| Sida                  |Rubrik                |Brödtext        |
|:----------------------|:---------------------|:---------------|
|1177                   |Inter 700             |Open Sans 400   |
|Google Search          |Arial 400             |Arial 400       |
|Margherita Fortuna     |Migra 300 - 500       |DMSans 500      |

## 1177.se

<div class="table-container">
    <table class="colors">
        <tr>
            <th colspan="5">1177s färger</th>
        </tr>
        <tr>
            <td>#C12143</td>
            <td>#a00b36</td>
            <td>#FAEEF0</td>
            <td>#396291</td>
            <td>#f1f1f5</td>
        </tr>
        <tr>
            <td style="background-color: #C12143;"></td>
            <td style="background-color: #a00b36;"></td>
            <td style="background-color: #FAEEF0;"></td>
            <td style="background-color: #396291;"></td>
            <td style="background-color: #f1f1f5;"></td>
        </tr>
    </table>
</div>

Genast möts man av den röda färgen som är 1177s huvudfärg. Den paras med en ljus rosa som de kan lägga en röd text på utan att äventyra läsbarheten. Texten är en mörkare röd än huvudfärgen och används på mindre text - medan vissa rubriker kan använda huvudfärgen då större text inte behöver samma kontrast för att vara läsbar. Brödtext i 1 - 1.125rem är satt i Open sans med normalvikt och använder #353535, en trevlig dov grå. I artiklars ingresser används Open Sans 300 i 22px ( 1.375 rem) med en line-height satt till 1.63, det skapar en luftig och lockande inledning. För rubriker och menyer används Inter; 700 i rubriker, och i menyn med vikt 400.

![Öppningssidan på 1177.se](%assets_url%/img/1177.png "Öppningssidan på 1177")

Det kan kvalificera in som ett komplementär färgsättning, huvudfärgen och det mesta går i röda toner, men det används också en komplementär blå färg som call-to-action och bakgrund för att framhäva knappar, länkar och rikta användarens uppmärksamhet lite extra på något viktigt, som i bilden, en uppmaningen att göra en screening.

De röda färgerna ger en varm och välkomnande känsla, samtidigt som den relativt anonyma, men stiliga typografin ger ett seriöst intryck. Den rosa färgen adderar lite lekfullhet, medan den blåa som används - på de kanske viktigaste ställena - adderar seriositet.

---

## Google search

<div class="table-container">
    <table class="colors">
        <tr>
            <th colspan="5">Google searchs färger</th>
        </tr>
        <tr>
            <td>#ffffff</td>
            <td>#1a0dab</td>
            <td>#681da8</td>
            <td>#1f1f1f</td>
            <td>#4d5156</td>
        </tr>
        <tr>
            <td style="background-color: #ffffff;"></td>
            <td style="background-color: #1a0dab;"></td>
            <td style="background-color: #681da8;"></td>
            <td style="background-color: #1f1f1f;"></td>
            <td style="background-color: #4d5156;"></td>
        </tr>
    </table>
</div>

Google använder uteslutande Arial förutom för länkarna under sökrutan, där används Google sans, förutsatt att vi använder latinska tecken. Om vi ändrar språk till exempelvis arabiska, mandarin eller hindi så ändras teckensnittet till Arial där också. Arial är ett stort teckensnitt som fungerar med de flesta skriftsystem.
![Google på Hindi, med skrivriktning vänster](%assets_url%/img/google.png "Google på Hindi")
Färgschemat är stramt, sånär som på logotypen som med sina färger ger en antydan om att allt finns här.
Teckenfärgerna går i en mörkt grå (#1f1f1f), men sökresultatens brödtexter är lite oväntat i en gråaktig ton med ganska mycket blått i: #4d5156, detta matchar bra med den blå länkfärgen som dominerar sidan och framstår därför som grått.
>Om man till äventyrs [söker på Comic Sans](https://www.google.com/search?q=comic+sans) så kommer ett litet påskägg, sidan renderas med comic sans som teckensnitt, mycket trevligt, eller hur Emil!

---

## Margherita Fortuna

<div class="table-container">
    <table class="colors">
        <tr>
            <th colspan="5">Margherita Fortunas färger</th>
        </tr>
        <tr>
            <td>#2b322a</td>
            <td>#622c33</td>
            <td>#f6f4f1</td>
            <td>#f59ba5 </td>
            <td>#b5aea2</td>
        </tr>
        <tr>
            <td style="background-color: #2b322a;"></td>
            <td style="background-color: #622c33;"></td>
            <td style="background-color: #f6f4f1;"></td>
            <td style="background-color: #f59ba5;"></td>
            <td style="background-color: #b5aea2;"></td>
        </tr>
    </table>
</div>

Margherita Fortuna är en frilansande Design Director, hennes hemsida är ett exempel på hur en personlig avsändare kan göra.
Besökaren välkomnas av en dov röd ton som glider över till en vit bakgrund. Scrollar man ned tonas denna bakgrund in i en mörk grön ton. Designern kommer från Italien, kanske kan landets flagga vara en anledning till färgvalen. De utgör hur som helst ett fint komplementärt färgschema.
![Margherita Fortunas hemsida](%assets_url%/img/mf.png "Margherita Fortunas hemsida")
Även bilderna på sidan har en röd ton och samverkar i färgspelet. Det mest framträdande teckensnittet är Migra, en detaljrik serif som passar i de stora teckenstorlekar det här används i.
Uttrycket är mjukt och romantiskt men smakfullt. Inget revolutionerande men proffesionellt och samtidigt personligt. Jag tycker att hon lyckas presentera sin smak för potentiella kunder som då vet vad de kan vänta sig.

Analys
-----------------------

1177 har en enkel och klar profil med sans serifer för maximal läsbarhet, vilket är önskvärt då det gäller medicinska frågor. De röda och rosa tonerna ger dock en varm och trygg känsla vilket passar då deras användare ofta är oroliga eller behöver någon form av hjälp eller stöd.

Googles minimalism med vitt och användande av Arial är ett resultat av att de behöver vara ett universellt verktyg, oberoende av sinnesstämning och personlighet. Det ska också fungera på alla skriftspråk samt också matcha med världens alla bilder som syns i sökresultaten.

I fallet Margherita Fortuna handlar det om att hon vill uttrycka sin personliga smak och stil, vilket är hennes "handelsvara". Hon har lyxen att kunna anpassa alla element, teckensnitt, färger och bilder så att allt fungerar ihop. Då kan man också använda mer djärva och specifika teckensnitt och färger.

Av: _SIDR24_
