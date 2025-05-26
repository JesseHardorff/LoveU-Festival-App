let activePage = "home";

function changePage(pageName, forceUpdate = false) {
  if (!forceUpdate && pageName === activePage) return;

  const pages = document.querySelectorAll(".page");
  pages.forEach((page) => page.classList.remove("page-active"));
  document.getElementById(pageName + "Page").classList.add("page-active");

  activePage = pageName;

  updateIcons();
}

document.addEventListener("DOMContentLoaded", () => {
  // Forceren dat home altijd geselecteerd wordt bij refresh
  changePage(activePage, true);

  ["home", "info", "location", "music"].forEach((name) => {
    document.getElementById(name + "Icon").addEventListener("click", () => changePage(name));
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
    const isSelected = name === activePage;

    const color = isSelected ? (isDarkMode ? "W" : "B") : isDarkMode ? "B" : "W";

    iconElement.src = `assets/img/${name}${color}.png`;
  });
}
