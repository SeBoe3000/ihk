        <?php
        $content = ob_get_clean(); // Puffer auslesen, Inhaltsverzeichnis einbauen und ausgeben
        echo generateTOCRegex($content);
        ?>
        </section>
    </main>
    <?php include "$relPath" . "php/templates/footer.php"; ?>
    <a href="#top" id="back" aria-label="Zurück nach oben">&uarr;</a> <!-- Sprungmarke an Anfang der Seite -->
</body>
</html>