<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mijn Tailwind PHP Site</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sansation:wght@300;400;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#000000',
                        'base': '#FFFFFF',
                        'accent': '#F03228',
                        'secondary': '#247BA0',
                        'light': '#E3B505',
                    },
                    fontFamily: {
                        'sansation': ['Sansation', 'sans-serif']
                    }
                }
            },
            darkMode: 'class'
        }
    </script>
</head>
<body class="text-center p-0 overflow-hidden bg-primary dark:bg-base">
    <header class="h-[10vh] w-full bg-primary dark:bg-base flex items-center">
        <div class="h-full w-[10vh] bg-accent flex items-center justify-center border-0 p-0 m-0">
            <img src="assets/img/logoB.png" alt="" class="h-full w-full object-contain block dark:hidden">
            <img src="assets/img/logoW.png" alt="" class="h-full w-full object-contain hidden dark:block">
        </div>
        <div class="h-full flex-grow bg-primary dark:bg-base flex justify-left items-center">
            <p id="headerTitle" class="font-sansation text-6xl text-white dark:text-black">FESTIVAL</p>
        </div>
        <div class="h-full w-[15vw] bg-primary dark:bg-base flex justify-center items-center">
            <div id="theme-switch" class="relative w-full aspect-square cursor-pointer transition-transform duration-500">
                <img src="assets/img/darkmode.svg" alt="Theme toggle" class="w-full h-full">
            </div>
        </div>
        <div class="h-full w-[15vw] bg-primary dark:bg-base flex justify-center items-center">
            <img id="languageFlag" src="assets/img/netherlands.png" alt="Language toggle" class="h-4/5 object-contain cursor-pointer transition-transform duration-300 hover:scale-110">
        </div>
    </header>
    
    <div class="relative h-[80vh] w-full bg-base dark:bg-primary overflow-hidden">
               <!-- Home Page -->
        <div id="homePage" class="page page-active bg-base dark:bg-primary justify-center overflow-y-auto">
            <div class="">
                <!-- Welkom Box -->
                <div class="w-[90vw] bg-base dark:bg-primary h-[25vh] my-5 rounded-xl border-4 border-black dark:border-white flex flex-col justify-center items-center p-6">
                    <h1 class="text-8xl font-sansation font-black text-accent mb-4" data-translate="welcome-title">WELKOM</h1>
                    <p class="text-4xl font-sansation text-primary dark:text-white text-center" data-translate="welcome-subtitle">bij het ❤️U Festival 2025</p>
                </div>
                
                <!-- Datum Box -->
                <div class="w-[90vw] bg-base dark:bg-primary h-[15vh] my-5 rounded-xl border-4 border-black dark:border-white flex items-center justify-center p-4">
                    <p class="text-5xl font-sansation font-bold text-secondary text-center" data-translate="home-date">6 September 2025 | 12:00 - 23:00</p>
                </div>
                
                <!-- Over het Festival Box -->
                <div class="w-[90vw] bg-base dark:bg-primary h-[40vh] my-5 rounded-xl border-4 border-black dark:border-white flex flex-col justify-center items-center p-8">
                    <h2 class="text-6xl font-sansation font-black text-secondary mb-6" data-translate="home-about-title">Over het Festival</h2>
                    <p class="text-3xl font-sansation text-primary dark:text-white text-center leading-relaxed mb-4" data-translate="home-about-description">
                        Het ❤️U Festival is dé plek voor studenten in Utrecht om samen te komen, nieuwe mensen te ontmoeten en te genieten van geweldige muziek en entertainment.
                    </p>
                    <p class="text-2xl font-sansation text-accent text-center" data-translate="home-about-extra">
                        Een onvergetelijke dag vol muziek, eten en plezier!
                    </p>
                </div>
                
                <!-- Locatie & Transport Box -->
                <div class="w-[90vw] bg-base dark:bg-primary h-[30vh] my-5 rounded-xl border-4 border-black dark:border-white flex flex-col justify-center items-center p-6">
                    <h2 class="text-5xl font-sansation font-black text-secondary mb-4" data-translate="home-location-title">Locatie</h2>
                    <p class="text-4xl font-sansation text-primary dark:text-white text-center mb-2" data-translate="home-location-place">Strijkviertel, Utrecht</p>
                    <p class="text-3xl font-sansation text-accent text-center mb-2" data-translate="home-location-transport">Gratis shuttlebus vanaf Utrecht Centraal</p>
                    <p class="text-2xl font-sansation text-primary dark:text-white text-center" data-translate="home-location-parking">Gratis fietsenstalling beschikbaar</p>
                </div>
            </div>
        </div>
        
        <!-- Info Page -->
        <div id="infoPage" class="page bg-base dark:bg-primary flex-col gap-4 mt-4 items-center overflow-y-auto">
            
            <!-- Algemeen & Contact -->
            <details class="w-[90vw]">
                <summary class="w-full h-[10vh] bg-secondary rounded-3xl border-4 flex justify-center items-center text-white dark:text-black text-6xl font-sansation cursor-pointer">
                    <span data-translate="general-contact-title">Algemeen & Contact</span>
                    <span class="transform transition-transform duration-200 ml-4">▼</span>
                </summary>
                <div class="p-10 bg-base dark:bg-primary">
                    <div class="text-left my-6">
                        <p class="text-primary dark:text-white text-3xl font-sansation" data-translate="general-description">Het ❤️U Festival is voor (nieuwe) studenten in de regio Utrecht en is een aanvulling op UIT.</p>
                    </div>
                    
                    <div class="text-left my-8">
                        <h3 class="text-4xl font-sansation font-black text-secondary mb-4" data-translate="address-title">Adres</h3>
                        <p class="text-primary dark:text-white text-3xl font-sansation mb-2" data-translate="address-location">Locatie: Strijkviertel, Utrecht</p>
                        <p class="text-primary dark:text-white text-3xl font-sansation" data-translate="address-navigation">Navigatieadres: Strijkviertelweg, Utrecht</p>
                    </div>
                    
                    <div class="text-left my-8">
                        <h3 class="text-4xl font-sansation font-black text-secondary mb-4" data-translate="datetime-title">Datum & Openingstijden</h3>
                        <p class="text-primary dark:text-white text-3xl font-sansation" data-translate="datetime-info">Zaterdag 6 september 2025 - 12:00 tot 23:00 uur</p>
                    </div>
                </div>
            </details>

            <!-- Bereikbaarheid -->
            <details class="w-[90vw]">
                <summary class="w-full h-[10vh] bg-secondary rounded-3xl border-4 flex justify-center items-center text-white dark:text-black text-6xl font-sansation cursor-pointer">
                    <span data-translate="accessibility-title">Bereikbaarheid</span>
                    <span class="transform transition-transform duration-200 ml-4">▼</span>
                </summary>
                <div class="p-10 bg-base dark:bg-primary">
                    
                    <div class="text-left my-8">
                        <h3 class="text-4xl font-sansation font-black text-secondary mb-4" data-translate="bike-title">Fiets</h3>
                        <p class="text-primary dark:text-white text-3xl font-sansation" data-translate="bike-info">Er is een grote gratis fietsenstalling aanwezig waar je jouw fiets de gehele dag kunt stallen.</p>
                    </div>
                    
                    <div class="text-left my-8">
                        <h3 class="text-4xl font-sansation font-black text-secondary mb-4" data-translate="car-title">Auto</h3>
                        <p class="text-primary dark:text-white text-3xl font-sansation" data-translate="car-info">Je kunt een parkingticket aanschaffen. Parkeren kan op P+R Papendorp, volg hiervoor de borden 'P online ticket'. Heb je geen ticket van te voren gekocht? Dan kun je bij de parkeerwachter op locatie een parkeerticket aanschaffen (PIN ONLY). Let wel op: VOL=VOL</p>
                    </div>
                    
                    <div class="text-left my-8">
                        <h3 class="text-4xl font-sansation font-black text-secondary mb-4" data-translate="ov-title">OV</h3>
                        <p class="text-primary dark:text-white text-3xl font-sansation" data-translate="ov-info">Kom je met het openbaar vervoer naar Lief? Plan dan je trip via 9292.nl.</p>
                    </div>
                    
                    <div class="text-left my-8">
                        <h3 class="text-4xl font-sansation font-black text-secondary mb-4" data-translate="shuttle-title">Shuttlebus</h3>
                        <p class="text-primary dark:text-white text-3xl font-sansation mb-4" data-translate="shuttle-info1">Vanaf Utrecht Centraal kun je onze gratis shuttlebus richting het festivalterrein pakken. Je vindt deze bus op het centraal station aan de Mineurslaan. Volg de witte bordjes met zwarte pijlen én ' ❤️U Festival'.</p>
                        <p class="text-primary dark:text-white text-3xl font-sansation" data-translate="shuttle-info2">De bus rijdt tussen 12:00 uur & 19:00 uur richting het festival en vanaf 21:00 uur kun je weer instappen om richting het station te gaan.</p>
                    </div>
                    
                    <div class="text-left my-8">
                        <h3 class="text-4xl font-sansation font-black text-secondary mb-4" data-translate="taxi-title">Taxi + Kiss & Ride</h3>
                        <p class="text-primary dark:text-white text-3xl font-sansation" data-translate="taxi-info">Navigeer naar Strijkviertel, De Meern (Utrecht). Volg de borden "Kiss & Ride ❤️U Festival", zodra je in de buurt bent van het festivalterrein.</p>
                    </div>
                </div>
            </details>

            <!-- Lockers -->
            <details class="w-[90vw]">
                <summary class="w-full h-[10vh] bg-secondary rounded-3xl border-4 flex justify-center items-center text-white dark:text-black text-6xl font-sansation cursor-pointer">
                    <span data-translate="lockers-title">Lockers</span>
                    <span class="transform transition-transform duration-200 ml-4">▼</span>
                </summary>
                <div class="p-10 bg-base dark:bg-primary">
                    <div class="text-left my-6">
                        <p class="text-primary dark:text-white text-3xl font-sansation mb-4" data-translate="lockers-info1">Op het festivalterrein zijn kluisjes aanwezig waar je je spullen veilig kunt opbergen!</p>
                        <p class="text-primary dark:text-white text-3xl font-sansation mb-4" data-translate="lockers-info2">Hier passen 3 à 4 jassen in. Goed om te weten: je kunt je kluisje gedurende de hele dag openen en sluiten zo vaak je wilt.</p>
                        <p class="text-primary dark:text-white text-3xl font-sansation" data-translate="lockers-info3">Het is niet mogelijk om online een kluisje te reserveren.</p>
                    </div>
                </div>
            </details>

            <!-- FAQ -->
            <details class="w-[90vw]">
                <summary class="w-full h-[10vh] bg-secondary rounded-3xl border-4 flex justify-center items-center text-white dark:text-black text-6xl font-sansation cursor-pointer">
                    <span data-translate="faq-title">FAQ</span>
                    <span class="transform transition-transform duration-200 ml-4">▼</span>
                </summary>
                <div class="p-10 bg-base dark:bg-primary">
                    
                    <div class="text-left my-8">
                        <h3 class="text-4xl font-sansation font-black text-secondary mb-4" data-translate="medication-question">Ik gebruik medicatie. Wat nu?</h3>
                        <p class="text-primary dark:text-white text-3xl font-sansation" data-translate="medication-answer">Het is toegestaan om medicijnen mee te nemen in een dosis die je maximaal nodig hebt op 1 dag. Een doktersverklaring/medicatiepaspoort is noodzakelijk. De beveiliging zal jouw documentatie beoordelen en de medicijnen controleren. Het kan zijn dat de EHBO jouw medicijnen (bijvoorbeeld als deze gevaarlijk zijn i.c.m. alcohol) in bewaring neemt en je deze enkel kan innemen bij de EHBO.</p>
                    </div>
                    
                    <div class="text-left my-8">
                        <h3 class="text-4xl font-sansation font-black text-secondary mb-4" data-translate="leave-question">Mag ik het festivalterrein tussentijds verlaten?</h3>
                        <p class="text-primary dark:text-white text-3xl font-sansation" data-translate="leave-answer">Nee, helaas is dat niet mogelijk. Om de veiligheid van alle bezoekers te kunnen waarborgen, kunnen we het niet toestaan dat het festivalterrein tussentijds verlaten wordt. Wij hebben namelijk geen zicht op hetgeen wat een bezoeker buiten het festivalterrein doet en ik welke staat deze het terrein weer betreedt. Hier kunnen dan ook geen uitzonderingen voor gemaakt worden. Wij hebben genoeg loungeplekken, foodstands & barren om het een hele dag uit te kunnen houden.</p>
                    </div>
                    
                    <div class="text-left my-8">
                        <h3 class="text-4xl font-sansation font-black text-secondary mb-4" data-translate="lockers-question">Zijn er lockers?</h3>
                        <p class="text-primary dark:text-white text-3xl font-sansation" data-translate="lockers-answer">Yes, deze zijn er! Op het terrein kun je medium & grote lockers huren.</p>
                    </div>
                </div>
            </details>

            <!-- Golden-GLU -->
            <details class="w-[90vw]">
                <summary class="w-full h-[10vh] bg-secondary rounded-3xl border-4 flex justify-center items-center text-white dark:text-black text-6xl font-sansation cursor-pointer">
                    <span data-translate="golden-glu-title">Golden-GLU</span>
                    <span class="transform transition-transform duration-200 ml-4">▼</span>
                </summary>
                <div class="p-10 bg-base dark:bg-primary">
                    <div class="text-left my-6">
                        <p class="text-primary dark:text-white text-3xl font-sansation" data-translate="golden-glu-description">Studenten van het GLU hebben tijdens het festival speciale privileges en zijn herkenbaar aan een gouden armbandje. Met dit gouden armbandje kunnen ze tijdens het festival gebruik maken van de gouden toiletten en met goud gemarkeerde bestelpunten aan de bars zonder in een rij te hoeven staan.</p>
                    </div>
                </div>
            </details>
        </div>

                   <!-- Location Page -->
        <div id="locationPage" class="page bg-base dark:bg-primary items-center justify-center overflow-hidden">
            <!-- Map Container -->
            <div id="mapContainer" class="w-[95vw] h-[85vh] bg-white rounded-lg border-4 border-black dark:border-white overflow-hidden relative cursor-grab">
                <img id="mapImage" src="assets/img/map.svg" alt="Festival Map" class="w-full h-full object-cover">
                
            
            </div>
        </div>



        
 <!-- Music Page -->
<div id="musicPage" class="page bg-base dark:bg-primary items-center justify-center overflow-y-auto">
    <div class="w-full max-w-6xl px-4 py-8">
        <!-- Header -->
        <div class="text-center mb-8">
            <h2 class="text-6xl font-sansation font-black text-primary dark:text-base mb-4" data-translate="music-title">Muziek</h2>
        </div>
        
        <!-- Artists Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 w-full">
            <!-- Artist 1 -->
            <div class="bg-base dark:bg-primary rounded-xl border-4 border-black dark:border-white p-6 flex flex-col items-center">
                <div class="w-full h-[40vh] mb-6 overflow-hidden rounded-lg">
                    <img src="assets/img/artiest1.png" alt="Artist 1" class="w-full h-full object-cover">
                </div>
                <p class="text-2xl font-sansation text-primary dark:text-white text-center leading-relaxed">
                    Five-time "World's No. 1 DJ" and trance icon, Armin delivers euphoric, high-energy sets that have headlined festivals from Tomorrowland to Ultra. His uplifting melodies and impeccable mixing keep crowds dancing for hours.
                </p>
            </div>
            
            <!-- Artist 2 -->
            <div class="bg-base dark:bg-primary rounded-xl border-4 border-black dark:border-white p-6 flex flex-col items-center">
                <div class="w-full h-[40vh] mb-6 overflow-hidden rounded-lg">
                    <img src="assets/img/artiest2.png" alt="Artist 2" class="w-full h-full object-cover">
                </div>
                <p class="text-2xl font-sansation text-primary dark:text-white text-center leading-relaxed">
                    Broke through as a teenager with "Animals," Martin Garrix has become one of the biggest names in EDM. His anthemic big-room tracks and stadium-sized drops make him a festival favorite across Europe.
                </p>
            </div>
        </div>
    </div>
</div>
    </div>
    
    <footer class="h-[10vh] w-full bg-accent flex items-center justify-center">
        <div class="flex justify-between w-full max-w-4xl px-12">
            <img id="homeIcon" src="assets/img/homeW.png" class="h-24 w-24 object-cover cursor-pointer">
            <img id="infoIcon" src="assets/img/infoW.png" class="h-24 w-24 object-cover cursor-pointer">
            <img id="locationIcon" src="assets/img/locationW.png" class="h-24 w-24 object-cover cursor-pointer">
            <img id="musicIcon" src="assets/img/musicW.png" class="h-24 w-24 object-cover cursor-pointer">
        </div>
    </footer>
    
    <script src="assets/js/taal.js"></script>
    <script src="assets/js/footer_icons.js"></script>
    <script src="assets/js/pages_trans.js"></script>
    <script src="assets/js/dark-light-mode.js"></script>
        <script src="assets/js/map-controls.js"></script>
</body>
</html>
