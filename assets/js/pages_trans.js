let activePage = "home";
let isTransitioning = false;

function changePage(pageName, forceUpdate = false) {
    console.log(`Changing from ${activePage} to ${pageName}`);
    
    // Voorkom nieuwe transities tijdens een actieve transitie
    if (isTransitioning) {
        console.log("Transition in progress, ignoring request");
        return;
    }
    
    if (!forceUpdate && pageName === activePage) {
        console.log("Same page, returning");
        return;
    }
    
    isTransitioning = true;
    
    const currentPage = document.getElementById(activePage + "Page");
    const targetPage = document.getElementById(pageName + "Page");
    
    if (!targetPage) {
        console.error(`Page ${pageName}Page not found`);
        isTransitioning = false;
        return;
    }
    
    // Start exit transitie voor huidige pagina
    if (currentPage && !forceUpdate) {
        currentPage.classList.add("page-exiting");
        
        // Na 250ms (helft van transitie), wissel de pagina's
        setTimeout(() => {
            currentPage.classList.remove("page-active", "page-exiting");
            targetPage.classList.add("page-active");
            activePage = pageName;
            updateIcons();
            
            // Reset transitie status na volledige transitie
            setTimeout(() => {
                isTransitioning = false;
            }, 250);
            
            console.log(`Successfully changed to ${pageName}`);
        }, 250);
    } else {
        // Force update (bij page load)
        document.querySelectorAll(".page").forEach(page => {
            page.classList.remove("page-active", "page-exiting");
        });
        targetPage.classList.add("page-active");
        activePage = pageName;
        updateIcons();
        isTransitioning = false;
        console.log(`Force updated to ${pageName}`);
    }
}

document.addEventListener("DOMContentLoaded", () => {
    // Forceren dat home altijd geselecteerd wordt bij refresh
    changePage(activePage, true);
    
    ["home", "info", "location", "music"].forEach((name) => {
        const iconElement = document.getElementById(name + "Icon");
        if (iconElement) {
            iconElement.addEventListener("click", () => {
                console.log(`Clicked on ${name} icon`);
                changePage(name);
            });
        } else {
            console.error(`Icon ${name}Icon not found`);
        }
    });
    
    const html = document.documentElement;
    const observer = new MutationObserver((mutations) => {
        mutations.forEach((mutation) => {
            if (mutation.attributeName === "class") {
                updateIcons();
            }
        });
    });
    observer.observe(html, { attributes: true });
});

function updateIcons() {
    const isDarkMode = document.documentElement.classList.contains("dark");
    const iconNames = ["home", "info", "location", "music"];
    
    iconNames.forEach((name) => {
        const iconElement = document.getElementById(name + "Icon");
        if (iconElement) {
            const isSelected = name === activePage;
            const color = isSelected ? (isDarkMode ? "W" : "B") : isDarkMode ? "B" : "W";
            iconElement.src = `assets/img/${name}${color}.png`;
        }
    });
}
