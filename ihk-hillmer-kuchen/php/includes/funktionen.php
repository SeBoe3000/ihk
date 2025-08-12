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
    $donauwelle = createLink("kreationen", "Donauwelle"),
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



// Bild erstellen
function createPic ($name, $class) {
    $bildname = dateiname($name) . ".png" ;
    $output = '<figure class="' . $class . '">' . "\n";
    $output .= '  <img src="../../assets/images/' . $bildname . '" alt="' . $name . '">' . "\n";
    $output .= '  <figcaption>' . $name . '</figcaption>' . "\n";
    $output .= '</figure>' .  "\n";

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



/* Inhaltsverzeichnis erstellen, nach erster h1 einfügen und ID's setzen */
function generateTOCRegex($html) {
    /* Überschriften h2 bis h6 mit Reg-Ex suchen
        $matches[0]: kompletten gefundenen Tags z.B. <h1>Start</h1>
        $matches[1]: Tag-Typ                    z.B. h1
        $matches[2]: Inhalt der Überschrift     z.B. Start
        <(h[1-3]): h2 bis h6 Tags in $matches[1] speichern, dabei beliebige Attribute ignorieren mit [^>]*
        >(.*?)<\/\1>: Inhalt speichern in $matches[2], wobei \1 gleiche Tag $matches[1]
        i: Groß-/Kleinschreibung egal*/
    preg_match_all('/<(h[2-6])[^>]*>(.*?)<\/\1>/i', $html, $matches);
    
    // bei keinen Überschriften Rückgabe unverändertem HTML-Text
    if (empty($matches[0])) return $html;

    // verschachteltes Inhaltsverzeichnis erstellen und ID's einfügen
    $toc = "<strong>Inhaltsverzeichnis</strong>"; // Vor Inhaltsverzeichnis anhängen
    $currentLevel = 1; // Ebene letzten Überschrift merken, aber h1 weglassen (sonst startet Aufzählung auf Ebene 2)

    // Schleife über alle Überschriften
    foreach ($matches[1] as $i => $tag) { // Index $i um zu passenden Text & kompletten Tag zu kommen
        $level = (int)substr(strtolower($tag), 1); // Ebene Überschrift bestimmen, also h davor entfernen
        $text = strip_tags($matches[2][$i]); // Text um HTML-Tags bereinigen
        // ID aus Text generieren, nur a-z 0-9 und - dafür zuerst Zeichen per Funktion dateiname umwandeln und restliche ungültige entfernen
        $id = strtolower(preg_replace('/[^a-z0-9]+/', '-', trim(dateiname(trim($text))))); 

        // ID einfügen, durch überschreiben Original-Tag mit ID
        $pattern = '/' . preg_quote($matches[0][$i], '/') . '/';
        $replacement = "<$tag id=\"$id\">$text</$tag>";
        $html = preg_replace($pattern, $replacement, $html, 1);

        // Geschachteletes Inhaltsverzeichnis erstellen
        if ($level > $currentLevel) { // neue Überschrift ist tiefer (größeres Level) --> neue UL öffnen
            $toc .= str_repeat("<ul>\n", $level - $currentLevel);
        } elseif ($level < $currentLevel) { // höher --> UL schließen
            $toc .= str_repeat("</li></ul>\n", $currentLevel - $level) . "</li>\n";
        } else { // gleiche Ebene --> vorherige LI schließen (außer beim ersten Element)
            if ($i != 0) $toc .= "</li>\n";
        }

        // Listeneintrag mit Link hinzufügen:
        $toc .= "<li><a href=\"#$id\">$text</a>";

        $currentLevel = $level; // aktuelles Level merken (relativ)
    }

    // Offene UL und LI schließen aber nicht beim ersten Level, sonst ein </li></ul>\n zu viel am Ende
    while ($currentLevel != 1) {
        $toc .= "</li></ul>\n";
        $currentLevel--;
    }

    // Suche nach </h1> und sofern vorhanden, Inhaltsverzeichnis mit substr_replace einfügen
    $pos = strpos($html, '</h1>');
    if ($pos !== false) {
        $pos += strlen('</h1>');
        $html = substr_replace($html, $toc, $pos, 0);
    }

    // Rückgabe HTML-String mit eingefügtem Inhaltsverzeichnis und gesetzten IDs
    return $html;
}
?>