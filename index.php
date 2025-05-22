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
                        'primary': '#000000',    // Primary [voor leesteksten of achtergrond] ZWART
                        'base': '#FFFFFF',       // Base [voor leesteksten of achtergrond] WIT
                        'accent': '#F03228',     // Accent [voor knoppen en interactieve onderdelen] ROOD
                        'secondary': '#247BA0',  // Secondary [voor kopteksten] BLAUW
                        'light': '#E3B505',      // Light [voor informatie of waarschuwingen] GEEL
                    },
                    fontFamily: {
                        'sansation': ['Sansation', 'sans-serif']
                    }
                }
            }
        }
    </script>

</head>

<body class="bg-primary text-center p-0 overflow-hidden">
    <!-- justify-center -->
    <header class="h-[15vh] w-full bg-primary flex items-center ">
        <div class="aspect-square h-full bg-accent">
<img src="assets/img/" alt="">
        </div>
        <div class="h-full w-[35vw] bg-light flex justify-center items-center">
            <p class="font-sansation text-7xl text-white ">FESTIVAL</p>
        </div>

    </header>

    <div class="relative h-[70vh] w-full bg-base overflow-hidden">
        <!-- Home Page -->
        <div id="homePage" class="page page-active bg-base flex items-center justify-center">
            <div class="text-center">
                <h2 class="text-4xl font-sansation text-primary mb-4">Home Page</h2>
                <p class="text-xl text-primary">Welkom bij het Festival!</p>
            </div>
        </div>

        <!-- Info Page -->
        <div id="infoPage" class="page bg-base flex items-center justify-center">
            <div class="text-center">
                <h2 class="text-4xl font-sansation text-primary mb-4">Info Page</h2>
                <p class="text-xl text-primary">Hier vind je alle informatie over het festival.</p>
            </div>
        </div>

        <!-- Location Page -->
        <div id="locationPage" class="page bg-base flex items-center justify-center">
            <div class="text-center">
                <h2 class="text-4xl font-sansation text-primary mb-4">Location Page</h2>
                <p class="text-xl text-primary">Bekijk de kaart en locaties van het festival.</p>
            </div>
        </div>

        <!-- Music Page -->
        <div id="musicPage" class="page bg-base flex items-center justify-center">
            <div class="text-center">
                <h2 class="text-4xl font-sansation text-primary mb-4">Music Page</h2>
                <p class="text-xl text-primary">Ontdek de artiesten en het programma.</p>
            </div>
        </div>
    </div>

    <footer class="h-[15vh] w-full bg-accent flex items-center justify-center">
        <div class="flex justify-between w-full max-w-4xl px-12">
            <img id="homeIcon" src="assets/img/homeW.png" class="h-24 w-24 object-cover cursor-pointer"
                onclick="changePage('home')">
            <img id="infoIcon" src="assets/img/infoB.png" class="h-24 w-24 object-cover cursor-pointer"
                onclick="changePage('info')">
            <img id="locationIcon" src="assets/img/locationB.png" class="h-24 w-24 object-cover cursor-pointer"
                onclick="changePage('location')">
            <img id="musicIcon" src="assets/img/musicB.png" class="h-24 w-24 object-cover cursor-pointer"
                onclick="changePage('music')">
        </div>
    </footer>


</body>
<script src="assets/js/footer_icons.js"></script>
<script src="assets/js/pages_trans.js"></script>

</html>