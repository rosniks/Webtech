// Bildschirmgröße, ab der die Imagemap deaktiviert werden soll
const BREAKPOINT = 700;

// alle map-Elemente auf der Seite
const maps = document.querySelectorAll("map");

// Funktion zum Deaktivieren der Imagemap
function deactivateMap() {
  // Überprüfe die aktuelle Bildschirmgröße
  if (window.innerWidth < BREAKPOINT) {
    // Deaktiviere die Imagemap, indem name geändert wird
    maps.forEach((map) => {
      map.name = "none";
    });
  } else {
    // Aktiviere die Imagemap, indem name zurück geändert wird
    maps[0].name = "erdgeschoss"
    maps[1].name = "ersterstock";
    };
  }

window.addEventListener("resize", deactivateMap);

deactivateMap();