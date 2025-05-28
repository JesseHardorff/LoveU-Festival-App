
# LoveU Festival App

Een Progressive Web App (PWA) ontwikkeld voor het LoveU Festival. Deze webapplicatie biedt bezoekers een overzichtelijke en interactieve ervaring, met onder andere informatie over het programma, artiesten en andere festivaldetails.

## 📁 Bestandsstructuur

```
LoveU-Festival-App/
├── assets/               # Afbeeldingen en statische bestanden
├── index.php             # Startbestand van de webapp
├── app.js                # Hoofd JavaScript-bestand
├── manifest.json         # Configuratie voor PWA
├── service-worker.js     # Offline functionaliteit
├── style.css             # Opmaak van de app
└── README.md             # Documentatie (deze file)
```

## ⚙️ Installatie & Gebruik

1. **Benodigdheden**:

   * [XAMPP](https://www.apachefriends.org/index.html) of een andere lokale PHP-server.

2. **Project installeren**:

   * Download of clone de repository:

     ```bash
     git clone https://github.com/JesseHardorff/LoveU-Festival-App.git
     ```
   * Plaats de map in de `htdocs`-directory van XAMPP.

3. **Start de server**:

   * Open XAMPP en start **Apache**.
   * Ga in je browser naar `http://localhost/LoveU-Festival-App`.

## 🧱 Architectuur & Technologieën

* **Frontend**: HTML, CSS, JavaScript
* **Backend**: PHP
* **Progressive Web App (PWA)**: Ondersteund via `manifest.json` en `service-worker.js` voor installatie en offline gebruik.

## 🔄 Commits

De commitgeschiedenis is gestructureerd en beschrijvend, wat zorgt voor goede documentatie van de ontwikkeling.

## 📌 Mogelijke uitbreidingen

* Favorieten toevoegen aan artiesten
* Interactieve plattegrond
* Live updates via een API

