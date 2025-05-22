

        let activeIcon = 'home'; 
        

        function changeIcon(iconName) {
            // First, set all icons to black (B)
            document.getElementById('homeIcon').src = 'assets/img/homeB.png';
            document.getElementById('infoIcon').src = 'assets/img/infoB.png';
            document.getElementById('locationIcon').src = 'assets/img/locationB.png';
            document.getElementById('musicIcon').src = 'assets/img/musicB.png';
            
            // Then set the clicked icon to white (W)
            document.getElementById(iconName + 'Icon').src = 'assets/img/' + iconName + 'W.png';
            
            // Update the active icon
            activeIcon = iconName;
            
            // You can also save the active icon to localStorage to persist across page reloads
            localStorage.setItem('activeIcon', activeIcon);
        }
        
        // When the page loads, check if there's a saved active icon
        window.onload = function() {
            const savedIcon = localStorage.getItem('activeIcon');
            if (savedIcon) {
                changeIcon(savedIcon);
            } else {
                changeIcon('home'); // Default to home if nothing is saved
            }
        };
