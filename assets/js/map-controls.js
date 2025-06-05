document.addEventListener("DOMContentLoaded", function () {
  const mapContainer = document.getElementById("mapContainer");
  const mapImage = document.getElementById("mapImage");
  const zoomInBtn = document.getElementById("zoomIn");
  const zoomOutBtn = document.getElementById("zoomOut");
  const resetBtn = document.getElementById("resetMap");

  let scale = 1;
  let translateX = 0;
  let translateY = 0;
  let isDragging = false;
  let startX = 0;
  let startY = 0;
  let lastX = 0;
  let lastY = 0;

  // Zoom settings
  const minScale = 1;
  const maxScale = 4;
  const zoomStep = 0.3;

  // Apply transform to image
  function updateTransform() {
    mapImage.style.transform = `translate(${translateX}px, ${translateY}px) scale(${scale})`;
  }

  // Constrain position to keep image within bounds
  function constrainPosition() {
    const containerRect = mapContainer.getBoundingClientRect();
    const imageRect = mapImage.getBoundingClientRect();

    // Calculate the scaled dimensions
    const scaledWidth = mapImage.offsetWidth * scale;
    const scaledHeight = mapImage.offsetHeight * scale;

    // Calculate maximum allowed translation
    const maxTranslateX = Math.max(0, (scaledWidth - containerRect.width) / 2);
    const maxTranslateY = Math.max(0, (scaledHeight - containerRect.height) / 2);

    // Constrain translation
    translateX = Math.max(-maxTranslateX, Math.min(maxTranslateX, translateX));
    translateY = Math.max(-maxTranslateY, Math.min(maxTranslateY, translateY));
  }

  // Zoom function
  function zoom(factor, centerX = null, centerY = null) {
    const oldScale = scale;
    scale = Math.max(minScale, Math.min(maxScale, scale * factor));

    if (centerX !== null && centerY !== null) {
      // Zoom towards specific point
      const containerRect = mapContainer.getBoundingClientRect();
      const relativeX = centerX - containerRect.left - containerRect.width / 2;
      const relativeY = centerY - containerRect.top - containerRect.height / 2;

      translateX = translateX - (relativeX * (scale - oldScale)) / oldScale;
      translateY = translateY - (relativeY * (scale - oldScale)) / oldScale;
    }

    constrainPosition();
    updateTransform();
  }

  // Reset map to original position and scale
  function resetMap() {
    scale = 1;
    translateX = 0;
    translateY = 0;
    updateTransform();
  }

  // Mouse/Touch event handlers
  function getEventPos(e) {
    if (e.touches && e.touches.length > 0) {
      return { x: e.touches[0].clientX, y: e.touches[0].clientY };
    }
    return { x: e.clientX, y: e.clientY };
  }

  function startDrag(e) {
    e.preventDefault();
    isDragging = true;
    const pos = getEventPos(e);
    startX = pos.x - translateX;
    startY = pos.y - translateY;
    lastX = pos.x;
    lastY = pos.y;
    mapContainer.style.cursor = "grabbing";
  }

  function drag(e) {
    if (!isDragging) return;
    e.preventDefault();

    const pos = getEventPos(e);
    translateX = pos.x - startX;
    translateY = pos.y - startY;

    constrainPosition();
    updateTransform();

    lastX = pos.x;
    lastY = pos.y;
  }

  function endDrag(e) {
    isDragging = false;
    mapContainer.style.cursor = "grab";
  }

  // Mouse events
  mapContainer.addEventListener("mousedown", startDrag);
  document.addEventListener("mousemove", drag);
  document.addEventListener("mouseup", endDrag);

  // Touch events
  mapContainer.addEventListener("touchstart", startDrag, { passive: false });
  document.addEventListener("touchmove", drag, { passive: false });
  document.addEventListener("touchend", endDrag);

  // Prevent context menu on long press
  mapContainer.addEventListener("contextmenu", (e) => e.preventDefault());

  // Pinch to zoom for touch devices
  let initialDistance = 0;
  let initialScale = 1;

  mapContainer.addEventListener(
    "touchstart",
    function (e) {
      if (e.touches.length === 2) {
        e.preventDefault();
        const touch1 = e.touches[0];
        const touch2 = e.touches[1];
        initialDistance = Math.hypot(touch2.clientX - touch1.clientX, touch2.clientY - touch1.clientY);
        initialScale = scale;
      }
    },
    { passive: false }
  );

  mapContainer.addEventListener(
    "touchmove",
    function (e) {
      if (e.touches.length === 2) {
        e.preventDefault();
        const touch1 = e.touches[0];
        const touch2 = e.touches[1];
        const currentDistance = Math.hypot(touch2.clientX - touch1.clientX, touch2.clientY - touch1.clientY);

        if (initialDistance > 0) {
          const centerX = (touch1.clientX + touch2.clientX) / 2;
          const centerY = (touch1.clientY + touch2.clientY) / 2;
          const zoomFactor = currentDistance / initialDistance;

          scale = Math.max(minScale, Math.min(maxScale, initialScale * zoomFactor));
          constrainPosition();
          updateTransform();
        }
      }
    },
    { passive: false }
  );

  // Mouse wheel zoom
  mapContainer.addEventListener(
    "wheel",
    function (e) {
      e.preventDefault();
      const zoomFactor = e.deltaY > 0 ? 1 - zoomStep : 1 + zoomStep;
      zoom(zoomFactor, e.clientX, e.clientY);
    },
    { passive: false }
  );

  // Double tap to zoom
  let lastTap = 0;
  mapContainer.addEventListener("touchend", function (e) {
    const currentTime = new Date().getTime();
    const tapLength = currentTime - lastTap;
    if (tapLength < 500 && tapLength > 0) {
      e.preventDefault();
      const touch = e.changedTouches[0];
      zoom(scale < 2 ? 2 : 1, touch.clientX, touch.clientY);
    }
    lastTap = currentTime;
  });

  // Initialize
  updateTransform();
});
