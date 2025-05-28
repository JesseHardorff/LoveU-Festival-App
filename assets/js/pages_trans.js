let activePage = "home";

function changePage(pageName, forceUpdate = false) {
  console.log(`Changing from ${activePage} to ${pageName}`); // Debug log
  
  if (!forceUpdate && pageName === activePage) {
    console.log("Same page, returning"); // Debug log
    return;
  }
  
  const pages = document.querySelectorAll(".page");
  pages.forEach((page) => page.classList.remove("page-active"));
  
  const targetPage = document.getElementById(pageName + "Page");
  if (targetPage) {
    targetPage.classList.add("page-active");
    activePage = pageName;
    updateIcons();
    console.log(`Successfully changed to ${pageName}`); // Debug log
  } else {
    console.error(`Page ${pageName}Page not found`); // Debug log
  }
}

document.addEventListener("DOMContentLoaded", () => {
  // Forceren dat home altijd geselecteerd wordt bij refresh
  changePage(activePage, true);
  
  ["home", "info", "location", "music"].forEach((name) => {
    const iconElement = document.getElementById(name + "Icon");
    if (iconElement) {
      iconElement.addEventListener("click", () => {
        console.log(`Clicked on ${name} icon`); // Debug log
        changePage(name);
      });
    } else {
      console.error(`Icon ${name}Icon not found`); // Debug log
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
