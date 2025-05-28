document.addEventListener("DOMContentLoaded", function() {
    // Get the theme switch element
    const themeSwitch = document.getElementById("theme-switch");
    const html = document.documentElement;
    
    // Check if dark mode is stored in localStorage
    if (localStorage.getItem("darkMode") === "true") {
        html.classList.add("dark");
        themeSwitch.classList.add("active");
    }
    
    // Toggle dark mode when clicking the theme switch
    themeSwitch.addEventListener("click", function() {
        // Toggle the dark class
        html.classList.toggle("dark");
        
        // Toggle the active class for rotation
        themeSwitch.classList.toggle("active");
        
        // Store the preference in localStorage
        localStorage.setItem("darkMode", html.classList.contains("dark"));
    });
});
