// Store the currently active page
        let activePage = 'home';

        // Function to change icons and pages
        function changePage(pageName) {
            if (pageName === activePage) return; // Don't do anything if clicking the current page

            // Change icons
            document.getElementById('homeIcon').src = 'assets/img/homeB.png';
            document.getElementById('infoIcon').src = 'assets/img/infoB.png';
            document.getElementById('locationIcon').src = 'assets/img/locationB.png';
            document.getElementById('musicIcon').src = 'assets/img/musicB.png';

            // Set the clicked icon to white (W)
            document.getElementById(pageName + 'Icon').src = 'assets/img/' + pageName + 'W.png';

            // Hide current page
            document.getElementById(activePage + 'Page').classList.remove('page-active');

            // Show new page
            document.getElementById(pageName + 'Page').classList.add('page-active');

            // Update the active page
            activePage = pageName;

            // Save the active page to localStorage
            localStorage.setItem('activePage', activePage);
        }

        // When the page loads, check if there's a saved active page
        window.addEventListener('DOMContentLoaded', function () {
            const savedPage = localStorage.getItem('activePage');
            if (savedPage) {
                changePage(savedPage);
            }
        });