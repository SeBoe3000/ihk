<?php

// Für Erstellung Links und Listen für "Kreationen" im Header und auf Unterseiten.

// Kategorien als Links
$dessertKategorie = createLink("kreationen-navigation", "Desserts");
$kuchenKategorie = createLink("kreationen-navigation", "Kuchen");
$gebaeckKategorie = createLink("kreationen-navigation", "Kleines Gebäck");

// Rezeptvariablen als Links in Arrays sammeln
$dessert = [
    $dessertvariation = createLink("kreationen", "Dessertvariation"),
    $tiramisu = createLink("kreationen", "Tiramisu",),
    $mangoKokosKugel = createLink("kreationen", "Mango-Kokos-Kugel"),
    $schokoKirschToertchen = createLink("kreationen", "Schoko-Kirsch Törtchen mit Strukturbiskuit"),
    $schokoladenmousse = createLink("kreationen", "Schokoladenmousse im Schokobecher",)
];
$kuchen = [
    $schwarzwaelder = createLink("kreationen", "Schwarzwälder"),
];
$gebaeck = [
    $schneckennudeln = createLink("kreationen", "Schneckennudeln"),
    $croissant = createLink("kreationen", "Croissant"),
];

// Name in Dateinamen umwandeln
function dateiname($string) {
    // Name abspeichern
    $name = $string;
    
    // Alles in Kleinbuchstaben
    $string = strtolower($string);

    // Umlaute umwandeln
    $umlaute = [
        'ü' => 'ue',
        'ä' => 'ae',
        'ö' => 'oe',
        'ß' => 'ss'
    ];
    $string = strtr($string, $umlaute);

    // Leerzeichen in Bindestriche umwandeln
    $string = str_replace(' ', '-', $string);

    // Alle nicht erlaubten Zeichen entfernen
    $string = preg_replace('/[^a-z0-9\-]/', '', $string);

    // Keine mehrfachen Bindestriche
    $string = preg_replace('/-+/', '-', $string);

    // Bindestrich am Anfang/Ende entfernen
    $string = trim($string, '-');

    return $string;
}

// Link erstellen
function createLink($ordner, $string) {
    global $relPath; // Zugriff auf Variable außerhalb Funktion
    $dateiname = dateiname($string) . ".php" ;
    $link = '<a href="' . $relPath . 'php/' . $ordner . '/' . $dateiname . '">' . $string . '</a>';
    return $link;
}

// Liste li oder dd erstellen anhand übergebenem Array von Rezeptlinks
function createList(array $links, string $tag = 'li') {
    // li nehmen, sofern nicht li oder dd
    if ($tag !== 'li' && $tag !== 'dd') {
        $tag = 'li';
    }

    $output = "";
    foreach ($links as $link) {
        $output .= "<$tag>$link</$tag>\n";
    }
    return $output;
} 

function createDropdown(string $kategorie, array $items) {
    $output = '<li class="dropdown">' . $kategorie . "\n";
    $output .= '  <ul class="dropdown-content">' . "\n";
    $output .= createList($items, 'li');
    $output .= '  </ul>' . "\n";
    $output .= '</li>' . "\n";

    return $output;
}




// Seitennamen ändern
function getPageTitle($siteName = null) {
    return $siteName ?? 'Standardtitel';
}




// aktueller Modus ermitteln
function getMode($mode){
    if ($mode === 'dark') {
        return '<a href="?mode=light">Heller Modus</a>';
    } else {
        return '<a href="?mode=dark">Dunkler Modus</a>';
    }
}



// Für Rezepttabelle

// Listen für Rezept (Zutaten und Schritte) erstellen
function erstelleListeRezept($listType = 'ul', $rezeptString) {
    // Ausgabe nur bei ul, ol ansonsten still abbrechen
    if ($listType != 'ul' && $listType != 'ol') {
        return;
    }

    // Einträge trennen
    $rezept = explode(';', $rezeptString);

    // leere Einträge und ausfiltern und Leerzeichen nach ; entfernen
    $zutaten = array_filter(array_map('trim', explode(';', $rezeptString)));

    // HTML-Liste erzeugen
    $html = "<$listType>\n";
    foreach ($rezept as $eintrag) {
        $html .= "    <li>" . $eintrag . "</li>\n";
    }
    $html .= "</$listType>";

    return $html;
}

// Kalorienangabe erstellen
function erstelleKalorien($kalorien, $protein, $kohlenhydrate,$fett){
    $html = "Energie: <b>$kalorien"."kcal</b>, Eiweiß: <b>$protein"."g</b>, Kohlenhydrate: <b>$kohlenhydrate"."g</b>, Fett: <b>$fett"."g</b>";
    return $html;
}

// Rezepttabelle erstellen
function erstelleTabelleRezept($rezeptname, $schritte, $tfoot, $zutaten1, $zutaten2, $zutaten3, $zutaten4, $zutaten5) {
    $html = "<div class=\"table-wrapper\">
        <table class=\"rezept\">
            <caption><strong>$rezeptname</strong></caption>
            <thead>
                <tr>
                    <th>Zutaten</th>
                    <th>Zubereitung</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!-- Zutaten -->
                    <td>
                        <div class=\"grid\">";
                        if (trim($zutaten1) !== '') {
                            $html .= "<!-- Block: Obst -->
                                <div>
                                    <b>🍏🍌🫐 Obst</b>
                                    $zutaten1
                                </div>";
                        }
                        if (trim($zutaten2) !== '') {
                            $html .= "<!-- Block: Gemüse -->
                                <div>
                                    <b>🥦🥕🍅 Gemüse</b>
                                    $zutaten2
                                </div>";
                        }
                        if (trim($zutaten3) !== '') {
                            $html .= "<!-- Block: Getreide -->
                                <div>
                                    <b>🥔🌾 Getreide</b>
                                    $zutaten3
                                </div>";
                        }
                        if (trim($zutaten4) !== '') {
                            $html .= "<!-- Block: Tierisches -->
                                <div>
                                    <b>🧀🥚🐮 Tierisches</b>
                                    $zutaten4
                                </div>";
                        }
                        if (trim($zutaten5) !== '') {
                            $html .= "<!-- Block: Sonstiges -->
                                <div>
                                    <b>Sonstiges</b>
                                    $zutaten5
                                </div>";
                        }
                        $html .= "</div>
                    </td>
                    <!-- Zubereitung -->
                    <td>
                        $schritte
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan=\"2\">
                        $tfoot
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>";
    
    return $html;
}

?>