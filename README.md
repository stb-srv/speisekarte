
# Grav Plugin: Speisekarte

> **Verwaltet eine Speisekarte mit Kategorien, Inhaltsstoffen, Bildern und mehr.**

---

## Features

- **Einfache Verwaltung der Speisekarte im Grav-Admin**
- **Unbegrenzte Kategorien und Speisen**  
  – Jede Speise mit Nummer, Name, Beschreibung, Inhaltsstoffen, Kategorie und Bild
- **Eigene Legende für Inhaltsstoffe** (z.B. Allergene, vegan, etc.)
- **Bilder für jede Speise** (wird automatisch skaliert und im Layout angezeigt)
- **Dynamisches Layout:**  
  - Spaltenzahl (1-3) frei wählbar für Desktop  
  - Auf Mobilgeräten immer einspaltig
- **Kategorie-Akkordeon:** Kategorien sind aufklappbar, mit Hinweistext
- **Mehrsprachigkeit unterstützt**
- **CSV-Import/Export für Inhalte (optional, falls aktiviert)**
- **Speisekarte auf beliebigen Seiten einbindbar (Shortcode / Template)**

---

## Installation

1. **Plugin entpacken** und in den Ordner `/user/plugins/speisekarte` deiner Grav-Installation kopieren.
2. **Im Admin-Panel aktivieren:**  
   - Gehe zu „Plugins“ > „Speisekarte“.
   - Passe die Einstellungen nach deinen Wünschen an.
3. **Seite anlegen:**  
   - Neue Seite anlegen
   - In den Seiteneinstellungen unter „Erweitert“ das Template auf `speisekarte` setzen.

---

## Konfiguration

Alle Einstellungen findest du im Admin-Panel unter **Plugins > Speisekarte**.

### Wichtige Einstellungen:

- **Kategorien verwalten**  
  - Beliebig viele Kategorien anlegen (z.B. Vorspeisen, Pizza, Pasta ...)
- **Speisen verwalten**  
  - Jeder Eintrag: Nummer, Name, Beschreibung, Kategorie, Inhaltsstoffe, Bild
- **Inhaltsstoff-Legende verwalten**  
  - Codes und Erklärungen (z.B. A = Gluten, V = Vegan ...)
- **Spaltenzahl einstellen**  
  - Wähle 1 bis 3 Spalten für die Desktop-Ansicht
- **Bilder-Upload**  
  - Für jede Speise kann ein Bild hochgeladen werden (Empfohlenes Format: JPG/PNG, max. 300px Höhe)
- **Mehrsprachigkeit**  
  - Die Inhalte lassen sich für verschiedene Sprachen hinterlegen (sofern Grav mehrsprachig eingerichtet ist)

### Beispiel-Felder für eine Speise:

- **Nummer:** 101
- **Name:** Pizza Margherita
- **Beschreibung:** Tomatensauce, Mozzarella, frisches Basilikum
- **Kategorie:** Pizza
- **Inhaltsstoffe:** A, G
- **Bild:** pizza_margherita.jpg

---

## Einbindung auf der Website

### Variante 1: Template

- Lege eine Seite an und setze in den „Experten“-Einstellungen das Template auf `speisekarte`.
- Die Speisekarte wird automatisch mit allen Funktionen angezeigt.

### Variante 2: Shortcode

- Du kannst `[speisekarte]` als Shortcode in eine Seite einfügen, wenn dein Theme und Grav dies unterstützen (abhängig vom Theme/Plugin).

---

## Bedienung & Hinweise

- **Kategorien werden als Akkordeons dargestellt.**  
  Besucher klicken auf eine Kategorie, um die Speisen darin zu sehen.  
  Hinweistext: „🔽 Klicke auf eine Kategorie, um die Speisen einzublenden.“
- **Inhaltsstoff-Legende**  
  Am Ende der Karte erscheint automatisch die Legende mit allen verwendeten Codes.
- **Spaltenanzahl:**  
  Die Einstellung im Plugin gilt für Desktop. Auf Smartphones/Tablets wird automatisch auf 1 Spalte gewechselt.
- **Bilder:**  
  Bilder werden beim Upload automatisch richtig eingebunden und angezeigt.  
  Die Darstellung ist immer responsiv und passt sich der Spaltenzahl an.
- **Import/Export:**  
  (Falls aktiviert) In der Plugin-Oberfläche kannst du CSV-Dateien mit Speisen/Inhaltsstoffen importieren oder exportieren.

---

## FAQ

**Wie aktualisiere ich die Speisekarte?**  
> Einfach im Plugin im Admin neue Speisen/Kategorien anlegen, bearbeiten oder löschen. Die Ausgabe auf der Seite passt sich sofort an.

**Wie kann ich die Reihenfolge der Kategorien ändern?**  
> Kategorien und Speisen lassen sich im Admin-Panel sortieren.

**Kann ich mehrere Speisekarten für verschiedene Seiten/Sprachen verwalten?**  
> Ja, über die Plugin-Einstellungen und ggf. mehrsprachige Inhalte von Grav.

**Was passiert, wenn kein Bild hochgeladen wurde?**  
> Es wird einfach kein Bild angezeigt – alle anderen Informationen erscheinen wie gewohnt.

---

## Support und Kontakt

- **Plugin-Entwickler:**  
  Steven Behncke  
  [admin@stb-srv.de](mailto:admin@stb-srv.de)  
- **Plugin-Homepage:**  
  [https://stb-srv.de](https://stb-srv.de)
- **Fehler melden:**  
  [https://stb-srv.de/issues](https://stb-srv.de/issues)

---

## Lizenz

Keine – Privatnutzung erlaubt, kommerzielle Nutzung nach Rücksprache.

---

## Beispielansicht

[VORSPEISEN] 🔽 Klicke auf eine Kategorie, um die Speisen einzublenden.

• 101 Tomatensuppe  –  Hausgemacht, mit Croutons  
   Inhaltsstoffe: A, G  
   ![Tomatensuppe Bild]

• 102 Bruschetta  –  Mit frischen Tomaten, Knoblauch und Basilikum  
   Inhaltsstoffe: A  
   ![Bruschetta Bild]

...

[Legende]  
A = Gluten, G = Milchprodukte, V = Vegan, ...

---

**Viel Spaß mit deiner digitalen Speisekarte!**
