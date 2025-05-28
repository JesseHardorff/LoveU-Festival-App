document.addEventListener('DOMContentLoaded', function() {
    const mapContainer = document.getElementById('mapContainer');
    const mapImage = document.getElementById('mapImage');
    const zoomInBtn = document.getElementById('zoomIn');
    const zoomOutBtn = document.getElementById('zoomOut');
    const resetBtn = document.getElementById('resetMap');
    
    let scale = 1;
    let translateX = 0;
    let translateY = 0;
    let isDragging = false;
    let startX = 0;
    let startY = 0;
    
    const minScale = 0.5;
    const maxScale = 5;
    const scaleStep = 0.2;
    
    function updateTransform() {
        // Beperk beweging zodat je niet buiten de afbeelding kunt
        const containerRect = mapContainer.getBoundingClientRect();
        const imageRect = mapImage.getBoundingClientRect();
        
        // Bereken de maximale beweging
        const maxX = Math.max(0, (imageRect.width * scale - containerRect.width) / 2);
        const maxY = Math.max(0, (imageRect.height * scale - containerRect.height) / 2);
        
        // Beperk de translate waarden
        translateX = Math.max(-maxX, Math.min(maxX, translateX));
        translateY = Math.max(-maxY, Math.min(maxY, translateY));
        
        // Pas transform toe (90 graden gedraaid)
        mapImage.style.transform = `rotate(90deg) scale(${scale}) translate(${translateX}px, ${translateY}px)`;
    }
    
    function resetMap() {
        scale = 1;
        translateX = 0;
        translateY = 0;
        updateTransform();
    }
    
    function zoomIn() {
        if (scale < maxScale) {
            scale += scaleStep;
            updateTransform();
        }
    }
    
    function zoomOut() {
        if (scale > minScale) {
            scale -= scaleStep;
            updateTransform();
        }
    }
    
    // Mouse/Touch position helper
    function getPos(e) {
        return {
            x: e.touches ? e.touches[0].clientX : e.clientX,
            y: e.touches ? e.touches[0].clientY : e.clientY
        };
    }
    
    // Start dragging
    function startDrag(e) {
        e.preventDefault();
        isDragging = true;
        const pos = getPos(e);
        startX = pos.x - translateX;
        startY = pos.y - translateY;
        mapContainer.style.cursor = 'grabbing';
    }
    
    // Dragging
    function drag(e) {
        if (!isDragging) return;
        e.preventDefault();
        
        const pos = getPos(e);
        translateX = pos.x - startX;
        translateY = pos.y - startY;
        updateTransform();
    }
    
    // Stop dragging
    function stopDrag() {
        isDragging = false;
        mapContainer.style.cursor = 'grab';
    }
    
    // Event listeners
    zoomInBtn.addEventListener('click', zoomIn);
    zoomOutBtn.addEventListener('click', zoomOut);
    resetBtn.addEventListener('click', resetMap);
    
    // Mouse events
    mapContainer.addEventListener('mousedown', startDrag);
    document.addEventListener('mousemove', drag);
    document.addEventListener('mouseup', stopDrag);
    
    // Touch events
    mapContainer.addEventListener('touchstart', startDrag);
    document.addEventListener('touchmove', drag);
    document.addEventListener('touchend', stopDrag);
    
    // Wheel zoom
    mapContainer.addEventListener('wheel', function(e) {
        e.preventDefault();
        if (e.deltaY < 0) {
            zoomIn();
        } else {
            zoomOut();
        }
    });
    
    // Initialize
    resetMap();
});
