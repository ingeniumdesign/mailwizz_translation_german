### MailWizz Deutsche Übersetzung - Anleitung

**Überblick:**  
Dieses Repository enthält die deutsche Übersetzung für die MailWizz EMA-Anwendung. Die Übersetzungen decken verschiedene Module und Kategorien der Anwendung ab.

---

#### **Installation der Übersetzung**

1. **Repository klonen:**  
   Klone das Repository auf deinen lokalen Rechner:
   ```bash
   git clone https://github.com/ingeniumdesign/mailwizz_translation_german.git
   ```

2. **ZIP-Datei erstellen:**
    - Navigiere in das Verzeichnis `de_de`.
    - Erstelle eine ZIP-Datei des Ordners `de_de`.  
      Beispiel: `de_de.zip`.

3. **Sprachpaket hochladen:**
    - Melde dich im MailWizz-Adminbereich an.
    - Gehe zu **Erweiterung > Sprachen > Sprach-Paket hochladen**.
    - Lade die erstellte `de_de.zip`-Datei hoch.  
      **Wichtig:**
    - Überprüfe die ZIP-Datei vor dem Hochladen, da Sprachpakete ausführbare PHP-Dateien enthalten.
    - Lösche vorher die bestehende Sprache, falls bereits eine deutsche Übersetzung vorhanden ist:
        - Gehe zu **Einstellungen > Übersetzungen > Sprachen verwalten**.
        - Wähle die deutsche Sprache aus und lösche sie.

4. **Sprache aktivieren:**
    - Gehe zu **Einstellungen > Übersetzungen > Sprachen verwalten**.
    - Aktiviere Deutsch als Standardsprache oder füge sie als zusätzliche Sprache hinzu.

---

#### **Anpassungen und Beiträge**

- **Anpassungen:**  
  Du kannst die Übersetzungsdateien direkt bearbeiten, bevor du die ZIP-Datei erstellst.

- **Beiträge:**
    - Pull Requests für Verbesserungen oder neue Übersetzungen sind willkommen.
    - Achte darauf, den bestehenden Übersetzungsstil beizubehalten.

---

#### **Fehlerbehebung**

- **Import funktioniert nicht:**  
  Stelle sicher, dass die alte Sprache gelöscht wurde, bevor du die neuen Dateien hochlädst.
    - Lösche die Sprache unter **Einstellungen > Übersetzungen > Sprachen verwalten**.
    - Lade die ZIP-Datei erneut hoch.

- **Übersetzungen werden nicht angezeigt:**
    - Überprüfe, ob die ZIP-Datei korrekt erstellt wurde.
    - Stelle sicher, dass Deutsch in den Einstellungen aktiviert ist.

---

#### **Lizenz**

Dieses Projekt steht unter der MailWizz-Lizenz. Weitere Informationen findest du unter [MailWizz Lizenz](https://www.mailwizz.com/license/).