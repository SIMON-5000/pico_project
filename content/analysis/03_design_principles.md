---
Title: Designprinciper
Description: Designprinciper
---
## Designprinciper
Jag valde tre sidor inom designvärlden, få musikartister (utom de du nämnde) verkar ha ordentliga webbsidor nuförtiden, man hamnar hos deras bokningsbolag eller på deras sociala medier i de fall jag försökte. Jag utgick från The Principles of Beautiful Web Design av Jason Beaird, länkar och föreläsningar som ingår i kursmaterialet.

### Brittany Chiang
_Front end engineer_  
  
https://brittanychiang.com/
Detta är ett CV, en samling för länkar till hennes sociala medier och kanske en plats att testa och visa nya tekniker. Det är en mörkt blå sida med ljus text, “dark mode-only”, layouten består av två kolumner i desktopläge men den vänstra kolumnen (navigationskolumnen) är något smalare, det ser dock balanserat ut tack vare det stora och ljusa textpartiet.  
![Brittany Chiangs hemsida](%assets_url%/img/design_analys/bc1.png "Brittany Chiangs hemsida")  
Ögat jobbar i ett z-mönster; rubrik, textmassa, ikoner, listade jobb; sen vet man vad man har och kan börja läsa. Hon använder halvopaka bakgrunder - som ger en illusionen av en glasskiva - för att ge länkar emfas när muspekaren förs över. Förutom det används också ett svagt sken runt muspekaren vilket också skapar en upplevelse av den tredje dimensionen.
Webbsidan känns noggrant genomförd, sparsmakad utan att vara tråkig, teknisk utan att vara överbelastad med onödiga effekter. Brittany har 10 års erfarenhet på hög nivå och det tycker jag framgår.

### David Liebermann
_Grafisk designer_  
  
https://davidliebermann.de/
Här har vi med en tysk professor att göra. Detta får väl kallas minimalism, eller web-brutalism. Vi har ett css-dokument på 45 luftigt skrivna rader, vilket är längre än vad jag trodde.  
![David Liebermanns hemsida](%assets_url%/img/design_analys/dl1.png "David Liebermanns hemsida")  
Men! Så fort muspekaren rör sig faller alla element ned i en till synes slumpmässig hög. Dock är all text fortfarande läslig, några element trillar åt sidan men det mesta är bara lite sluttande (beroende på skärmens bredd).  
![David Liebermanns hemsida efter fallet](%assets_url%/img/design_analys/dl2.png "David Liebermanns hemsida efter fallet")  
På samma vis som parallaxeffekter eller skuggningar kan ge en tredje dimension till en sida, får den här sidan naturlagen gravitation att förhålla sig till. Det skapar också en nedåtrörelse och en nyfikenhet att se hur “högen” av text ser ut.	Frånvaron av bilder och Styling gör att de grundläggande hierarkiska idéerna med htmltaggarna får fritt spelrum, även länkarnas betydelse får emfas med den klassiska blåa färgen. Det är effektiv design.
Jag tycker det är en lyckad sida, det extremt avskalade första intrycket bäddar för att effekten vid raset skall bli stark. David (ofta med sina kollegor i https://liebermannkiepereddemann.de/) gör också ofta webbplatser som har en särpräglad textorienterad estetik. Det är kunder som ger stor konstnärlig frihet och nästan alltid är något på sidorna lite avsiktligt skevt, kanske skaver och irriterar. Denna sida kommunicerar hans estetik och konceptdrivna inställning till webbdesign väl.

### Mirko Romanelli
_Industridesigner_

https://www.mirkoromanelli.com/
Detta är en sida för att visa sina projekt och sitt personliga varumärke. Landningssidan öppnar med en animation som tar fram huvudbilden, en bild på en sladdlös laddare som skapar diagonaler medan textelement hörnen ramar in bilden.  
![Mirko Romanellis hemsida](%assets_url%/img/design_analys/mr1.png "Mirko Romanellis hemsida")  
När vi scrollar ner följer ett galleri, det är mestadels uppdelat  i två kolumner, ibland tillåts en bild ta upp båda kolumnerna. Det, samt att bildparen är förskjutna i höjdled (flex-start respektive flex-end) gör mönstret i rutnätet levande och luftigt.  
![Mirko Romanellis galleri](%assets_url%/img/design_analys/mr2.png "Mirko Romanellis galleri")  
Sidan använder mycket negativt utrymme, bilderna får gott om plats att andas.  
  
Det är en hel del animationer, bilder flyter efter muspekaren vid hover och det tar sin tid att exempelvis visa en bild man klickat på, inte på grund av laddtider, utan presentationen. Sidan känns eterisk, men jag kan tänka mig att på en sämre dag, kan det kännas långsamt och omständligt. Navigerar vi vidare till “works” så är bilderna placerade i rakare rader med samma höjd, text nere till vänster, fortfarande luftigt, men lättare att scanna av och ta in objekten.  
![Mirko Romanelli, works](%assets_url%/img/design_analys/mr3.png "Mirko Romanelli, works")  
Jag tycker det är en lyckad webbplats som är snygg, fungerar bra och skapar ett intryck i mig.

### Samanfattning
Det är tre väldigt olika sidor, alla följer sina regler. Det handlar om att förmedla ett budskap och i bästa fall ge en känsla. Jag tycker alla lyckas göra det på sitt egna sätt. Brittany Chiang förmedlar en självsäkerhet, det behöver inte vara svårare än såhär, bara det är väl utfört. David Liebermann ställer både sidan och en del uppfattningar på ända, det väcker frågor hos mig om hur webbdesign kan se ut och vad man kan göra. Mirko Romanelli har en snygg sida för sina snygga saker, och det är nog precis vad han vill ha.

### Min sida
Det var intressant med ett 16px grid som bakgrund, mest som ett verktyg att kunna analysera textflödet och elementens positionering. 16px är ju ofta 1 rem, och mycket av mina marginaler och padding utgår från det. Det fanns ett drag av web-brutalism där också. Jag ville se alla element, vart deras kanter fanns och hur allt fungerar ihop. Jag ville ha så lite pixel-petande som möjligt, arbeta _med_ css-flödet och inte emot. Tanken var att täcka över det och göra det “snyggt på riktigt”, sen…  
Sen har blivit nu och jag gör ett försök. Jag gillar hur enkel och självklar Brittany Chiangs sida är, jag vill inte ta mig vatten över huvudet, utan hålla det tight.  
Jag ger meny-länkarna mer emfas och får dem att sticka ut med en mer knapplik utformning. Det blir också snyggare, uppfattas som ett återkommande mönster för sidlänkar, och de fungerar som en avgränsande linje ner till innehållet. Huvudrubriken får en poppig färg, färgen återkommer för att få länkelement att stå ut samt i ikonerna. Vidare ger jag huvudrubriken en lätt rotation för att skapa dynamik och rörelse.  
Bilderna i galleriet får större tomt utrymme runt sig. De separeras (inom sin gruppering) och som i exemplet mirkoomanelli.com framhävs de individuella bilderna och syns tydligare även om de nu är till ytan mindre. Varje h2-rubrik som är förste arvinge till .main får en egen stil med stora bokstäver och extra letter-spacing, det blir den enskilda sidans rubrik (huvudrubriken/“logotypen” är en h1, så hierarkin är korrekt). Detta återkommande utseende gör att man känner igen sig och det är lättare att läsa av sidan. Jag tycker att slutresultatet är bra. Inget magiskt, men färgerna har en bra baston, det känns nästan som en trycksak, och allt sitter ganska tight.
