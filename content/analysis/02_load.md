---
Title: Laddtider
Description: Laddtider
---

## Laddtider

Snabba, optimerade webbsidor håller inte bara användare nöjda utan också koldioxidutsläppen i schack.
Men varför presterar vissa webbplatser bättre? Här följer en underökning av webplatsers laddtider. Det kanske kan ge några ledtrådar.

Urval
-----------------------

För en tid sedan blev webplatsen mcmaster.com viral, McMaster är en stor Amerikansk järnaffär, de säljer muttrar, bultar, kugghjul, och liknande. Kontrasten mellan deras verksamhet, hemsidans ålderdommliga (men snygga!) utseende och snabbheten tog _skruv_ bland "techfluencers"\[1]. Det verkar vara en intressant referenspunkt. Jag väljer att jämföra dem med svenska sidor i angränsande branscher: VVS-Butiken samt ytterligare ett svenskt lite större företag som borde ha pengar att lägga på en snabb hemsida: Clas Ohlson.

Metod
-----------------------

Jag använde Googles verktyg page speed insights som testar sidor i en labmiljö, det handlar främst om laddtider, rendering, interaktion och oväntade hopp i layouten[2] och betygsätter deras prestanda. Som komplement användes utvecklarläget i Firefox där jag undersökte laddtider och datavolymer med mer empiriska metoder. Här rensades cacheminne och kakor mellan omladdningar och jag gjorde flera omladdningar för att få ett stabilt medelvärde.


Resultat
-----------------------
<iframe class="spread-sheet" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vS4bObCvPIM-j07jePxUdCl-uUiwTASv6aPLoLHA6m9cU9UNBuVpNzfV7lcZRitGLfB9KIKyI10_4aE/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false"></iframe>

McMaster Presterar som väntat bra men i det mobila gränssnittet är det lägre poäng, något verkar fördröja renderingen av logon (en svg på 3.9 kB) med 2,5 sekunder. När den väl tillåts skicka requesten går filen snabbt att hämta. Det syns dock inte när jag själv testar att gå in på sidan med min smartphone. Där känns den lika snabb som på desktop versionen. Google rekommenderar att skjuta upp inläsningen av bilder som inte visas på skärmen "Möjlig databesparing 229 Kibit"
samt att undvika ett onödigt stort DOM-träd (2 441 element), det är de största förändringarna som föreslås. Jag misstänker att bilderna som inte används beror på att de använder så kallade sprites, och då dessa kan sparas i cacheminnet gör det resterande laddning snabbare i ett realistiskt scenario.

Clas Ohlson får inga lysande resultat. En del klagomål på layout förskjutningar, och många renderingsfördröjningar, till exempel hade en relativt väl anpassad bild på 375px bredd, men med en inläsningsfördröjning på 3 100 ms. Jag förmodar att den väntar på att någon annan process ska bli klar, detta borde optimeras även här. Men den största boven på sidan verkar vara tunga javascript filer. Bilder kan optimeras, och skulle minska storleken med 1 809,4 KiB, vilket verkar enormt, med tanke på att den nuvarande storleken är 2 095,2 KiB.

VVS-Butiken
Det går lite upp och ner med prestandan här. Index-sidan får 48poäng av google, och här används till exempel mood-bilder som är 960px breda för att fylla 400px. De hämtas dessutom från en tredjepart, det kan dock vara effektivt att använda ett CDN för att skicka till exempel bilder från en server som ligger närmare användaren, och i detta fallet är det en renderingsfördröjning (64% 1 780 ms) som är den stora boven i dramat. Detta beror möjligtvis på att storleken måste anpassas.
På andra sidor med bara produkter är storleken på bilderna anpassad, och laddtiderna ser mycket bättre ut.


Analys
-----------------------

Alla tre webbplatser ligger klart inom rimlighetens ramar. Man får en snabb First Content Paint gör att man vet att något är på gång, och innan man hinner reagera på det är _above the fold_ renderat. För mig skulle det behövas 1-2 sekunder utan respons för att reagera. Men i ärlighetens namn var det länge sen jag blev frustrerad av en långsam webbsida, då är det oftare ett ointuitivt gränssnitt som får mig att ogilla en webbupplevelse.

McMaster verkar leva upp till sitt rykte relativt bra, även om det inte syns lika bra i mätresultat som när man använder sidan med cachade filer. Clas Ohlson och VVS-Butiken får dela på tredjeplatsen, Clas Ohlson borde kunna leverera en snabbare sida med tanke på företagets storlek, men är godkänd. VVS-Butiken är ett klart mindre företag, de överpresterar inte men får också godkännt.

Samtliga webbplatser har sämre resultat på mobilversionen, det framstår i Google PSI som att det till största delen handlar om att bilder inte skalas ned korrekt.
Förutom icke-optimerade bilder är javascript det som tar mest tid och resurser.
Vidare nämns ofta att DOM-trädet är för stort och vissa processer blockerar att andra saker utförs, möjligen kan man ändra ordningen där, eller köra vissa saker i bakgrunden.
En sista nämnvärd stoppkloss är när filer hämtas från tredjeparts servrar.

Det kokar i stor utsträckning ner till att skicka det användaren behöver, i rätt storlek. Då är sidan både snabb och effektiv.

Referenser
-----------------------

Ange de eventuella referenser du använder dig av, om några.

\[1] https://www.youtube.com/watch?v=-Ln-8QM8KhQ
\[2]https://developers.google.com/speed/docs/insights/v5/about