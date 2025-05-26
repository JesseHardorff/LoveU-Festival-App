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
                        'primary': '#000000',  // Primary [voor leesteksten of achtergrond] ZWART
                        'base': '#FFFFFF',    // Base [voor leesteksten of achtergrond] WIT
                        'accent': '#F03228',   // Accent [voor knoppen en interactieve onderdelen] ROOD
                        'secondary': '#247BA0', // Secondary [voor kopteksten] BLAUW
                        'light': '#E3B505',   // Light [voor informatie of waarschuwingen] GEEL
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
    <!-- justify-center -->
    <header class="h-[10vh] w-full bg-primary dark:bg-base flex items-center">
        <div class="h-full w-[10vh] bg-accent flex items-center justify-center border-0 p-0 m-0">
            <img src="assets/img/logoB.png" alt="" class="h-full w-full object-contain block dark:hidden">
            <img src="assets/img/logoW.png" alt="" class="h-full w-full object-contain hidden dark:block">
        </div>

        <div class="h-full flex-grow bg-primary dark:bg-base flex justify-left items-center">
            <p class="font-sansation text-6xl text-white dark:text-black">FESTIVAL</p>
        </div>
        <div class="h-full w-[15vw] bg-primary dark:bg-base flex justify-center items-center ">
            <!-- Theme switch met Tailwind classes waar mogelijk -->
            <div id="theme-switch" class="relative w-full aspect-square cursor-pointer">
                <img src="assets/img/night.png" alt="Dark mode"
                    class="moon absolute w-full h-full transition-all duration-500 block dark:hidden">
                <img src="assets/img/light.png" alt="Light mode"
                    class="sun absolute w-full h-full transition-all duration-500 hidden dark:block">
            </div>


        </div>
        <div class="h-full w-[15vw] bg-primary dark:bg-base flex justify-center items-center">
            <img src="assets/img/netherlands.png" alt="" class="h-4/5 object-contain">
        </div>
    </header>




    <div class="relative h-[80vh] w-full bg-base dark:bg-primary overflow-hidden">
        <!-- Home Page -->
        <div id="homePage" class="page page-active bg-base dark:bg-primary flex justify-center overflow-y-auto">
            <div class="">
                <div
                    class="w-[90vw] bg-base dark:bg-primary h-[25vh] my-5 rounded-xl border-4 border-black dark:border-white">

                </div>
                <div
                    class="w-[90vw] bg-base dark:bg-primary h-[15vh] my-5 rounded-xl border-4 border-black dark:border-white">

                </div>
                <div
                    class="w-[90vw] bg-base dark:bg-primary h-[40vh] my-5 rounded-xl border-4 border-black dark:border-white">

                </div>
            </div>
        </div>


        <!-- Info Page -->
        <div id="infoPage" class="page bg-base dark:bg-primary flex items-center justify-center">

        </div>


        <!-- Location Page -->
        <div id="locationPage" class="page bg-base dark:bg-primary flex items-center justify-center">

        </div>


        <!-- Music Page -->
        <div id="musicPage" class="page bg-base dark:bg-primary flex items-center justify-center">
            <div class="text-center">
                <h2 class="text-4xl font-sansation text-primary dark:text-base  mb-4">Music Page</h2>
                <p class="text-xl text-primary dark:text-base ">Ontdek de artiesten en het programma.</p>
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



</body>
<script src="assets/js/footer_icons.js"></script>
<script src="assets/js/pages_trans.js"></script>
<script src="assets/js/dark-light-mode.js"></script>


</html>