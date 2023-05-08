# Boekenzoeker Project

## Beschrijving
Boekenzoeker is een innovatief concept dat is ontwikkeld om bezoekers van een bibliotheek te begeleiden bij het vinden van hun gewenste boeken op een eenvoudige en intuïtieve manier. Het concept maakt gebruik van overzichtelijke panelen die bezoekers kunnen gebruiken om hun gewenste zone aan te geven. Wanneer een bezoeker een bepaalde zone selecteert, zal er een lamp boven die zone gaan branden met een unieke kleur voor deze bezoeker, waardoor het voor hem/haar makkelijker wordt om de juiste boeken te vinden.

Het idee achter dit concept is vergelijkbaar met de manier waarop beschikbare parkeerplaatsen worden aangegeven in een ondergrondse parkeergarage. Het gebruik van deze panelen en lampen biedt bezoekers een eenvoudige en intuïtieve manier om hun gewenste boeken te vinden. Het systeem kan worden uitgebreid met meerdere lampen in een zone, waardoor de precisie van de navigatie nog verder wordt vergroot.

Daarnaast hebben medewerkers toegang tot een bedieningspaneel achter de balie of op bepaalde locaties in de bibliotheek. Dit paneel stelt hen in staat om bezoekers te helpen bij het vinden van hun gewenste boeken. Door simpelweg op de knop van de gewenste zone te drukken, gaat er direct een lamp branden met een unieke kleur, waardoor de bezoeker direct naar de juiste plaats in de bibliotheek wordt geleid.

## Gebruikte componenten

##### ESP8266
De ESP8266 is een krachtige en veelzijdige microcontroller gebaseerd op de ESP8266-chip, die wordt gebruikt voor het verbinden met Wi-Fi-netwerken en het uitvoeren van taken zoals het verzenden en ontvangen van gegevens via het internet.

#### Mini PC (Raspberry Pi)
Mini PC's zoals de Raspberry Pi kunnen worden gebruikt om complexere taken uit te voeren, zoals het aansturen van LED-panelen, het uitvoeren van webtoepassingen, het verwerken van gegevens en het communiceren met andere apparaten via netwerkverbindingen.

#### NeoPixel LED-paneel
Een NeoPixel LED-paneel is een LED-paneel dat gebruikmaakt van NeoPixel-LED's, die individueel adresseerbaar zijn en kunnen worden aangestuurd met behulp van een digitaal signaal. 

NeoPixel LED's zijn zeer helder, energiezuinig en kunnen in verschillende kleuren worden weergegeven.

#### Samenhang
De ESP8266 kan worden geprogrammeerd om de status van het LED-paneel te controleren en gegevens te ontvangen van de mini PC zoals de Raspberry Pi.

De mini PC kan fungeren als een server waarop de logica voor het begeleidingssysteem kan worden uitgevoerd, zoals het verwerken van gebruikersinvoer van de panelen, het aansturen van de LED-panelen en het beheren van de communicatie tussen de verschillende componenten.

Het NeoPixel LED-paneel kan worden aangesloten op de ESP8266 of de mini PC, en de LED's kunnen individueel worden aangestuurd om de gewenste kleur en helderheid weer te geven op basis van de ontvangen gegevens.

Door de juiste programmering en communicatie tussen de ESP8266, mini PC en NeoPixel LED-panelen kunnen bezoekers worden begeleid naar de juiste zone in de bibliotheek door middel van de verlichte zones op het LED-paneel, zoals beschreven in het concept.

## Programmeertalen
#### C/C++
Populaire programmeertalen die vaak worden gebruikt voor het programmeren van microcontrollers zoals ESP8266. Ze kunnen worden gebruikt voor het schrijven van firmware voor de ESP8266 en het aansturen van LED-panelen.

#### Python
Python kan worden gebruikt voor het implementeren van logica op de mini PC, zoals het verwerken van gebruikersinvoer, communicatie met de ESP8266 en aansturing van het LED-paneel.

#### JavaScript
Een veel gebruikte programmeertaal die vaak wordt gebruikt voor webontwikkeling. Kan worden gebruikt voor het implementeren van logica aan de serverkant.

#### HTML/CSS
HTML en CSS kan nuttig zijn voor het ontwerpen en bouwen van de gebruikersinterface als het concept een webgebaseerde interface heeft voor gebruikersinvoer en -weergave.
