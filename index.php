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
    <footer class="h-[15vh] w-full bg-base">

    </footer>
</body>

<!-- <div class="grid grid-cols-1 gap-4">
            <div class="p-4 bg-primary text-white rounded">Primary kleur</div>
            <div class="p-4 bg-secondary text-white rounded">Secondary kleur</div>
            <div class="p-4 bg-accent text-white rounded">Accent kleur</div>
            <div class="p-4 bg-dark text-white rounded">Dark kleur</div>
            <div class="p-4 bg-light text-dark rounded border">Light kleur</div>
        </div> -->

</html>