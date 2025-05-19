<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mijn Tailwind PHP Site</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {

                        'primary': '#000000',    // Primary [voor leesteksten of achtergrond]
                        'base': '#FFFFFF',       // Base [voor leesteksten of achtergrond]
                        'accent': '#F03228',     // Accent [voor knoppen en interactieve onderdelen]
                        'secondary': '#247BA0',  // Secondary [voor kopteksten]
                        'light': '#E3B505',      // Light [voor informatie of waarschuwingen]

                    }
                }
            }
        }
    </script>
</head>

<body class="bg-primary text-center p-0 ">
    <header class="h-[15vh] w-full bg-light">

    </header>
    <div class="h-[70vh] w-full bg-secondary">
    </div>
    <footer class="h-[15vh] w-full bg-base flex items-center justify-center">
        <div class="flex justify-between w-full max-w-4xl px-12">
            <img src="assets/img/home.png"class="h-24 w-24 object-cover">
            <img src="assets/img/info.png" class="h-24 w-24 object-cover">
            <img src="assets/img/location.png"  class="h-24 w-24 object-cover">
            <img src="assets/img/music.png" class="h-24 w-24 object-cover">
        </div>
    </footer>
</body>



</html>