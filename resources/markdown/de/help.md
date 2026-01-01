## Hilfe

<hr />

<!-- ---------------------------------------------------------------------------------- -->

## 1. Konzept: Modelle & Beziehungen

### a. Personen

<ul>
    <li>Eine Person kann 1 biologischen Vater haben (1 Person, basierend auf <b>father_id</b>)</li>
    <li>Eine Person kann 1 biologische Mutter haben (1 Person, basierend auf <b>mother_id</b>)</li>
    <li>Eine Person kann 1 Elternpaar haben, biologisch oder nicht (1 Paar aus 2 Personen, basierend auf <b>parents_id</b>)</li>
    <li>Eine Person kann 0 bis viele biologische Kinder haben (n Personen, basierend auf father_id/mother_id)</li>
    <li>Eine Person kann 0 bis viele Partner haben (n Personen), als Teil von 0 bis vielen Paaren (gleich- oder verschiedengeschlechtlich)</li>
    <li>Eine Person kann mehrmals Teil eines Paares mit demselben Partner sein (Wiederheirat oder Wiedervereinigung)</li>
</ul>

### b. Paare

<ul>
    <li>Ein Paar kann 0 bis viele Kinder haben (basierend auf parents_id als Paar oder father_id/mother_id einzeln)</li>
    <li>Ein Paar kann verheiratet sein oder nicht, noch zusammen oder in der Zwischenzeit getrennt</li>
</ul>

<hr />

<!-- ---------------------------------------------------------------------------------- -->

## 2. Authentifizierung, Mandantenfähigkeit und Datenzugriff

### a. Benutzer

<img src="img/help/genealogy-002a.webp" class="rounded" alt="Menü">

Benutzer können sich selbst <b>registrieren</b>.<br/>
Mindestens ein <b>Nachname</b>, eine gültige <b>E-Mail</b>-Adresse, eine <b>Sprache</b>, eine <b>Zeitzone</b> und ein <b>Passwort</b> sind erforderlich.

<img src="img/help/genealogy-002b.webp" class="rounded" alt="Registrieren">

Nach der Registrierung und optionalen E-Mail-Verifizierung können sich Benutzer <b>anmelden</b>.<br/>

<img src="img/help/genealogy-002c.webp" class="rounded" alt="Anmelden">

Authentifizierte Benutzer gehören ohne Einladung standardmäßig zu (und besitzen) ihr eigenes <b>persönliches Team</b>.<br/>
Neue Benutzer werden nach Annahme einer E-Mail-Einladung eines anderen Benutzers und Registrierung standardmäßig beim Team angemeldet, zu dem sie eingeladen wurden. Diese Benutzer haben standardmäßig auch ihr eigenes persönliches Team zur Verfügung.

<img src="img/help/genealogy-002d.webp" class="rounded" alt="Team">

<b>Zwei-Faktor-Authentifizierung</b> (2FA) und <b>E-Mail-Verifizierung</b> können in <b>config/fortify.php</b> aktiviert und konfiguriert werden.

### b. Benutzerkonto und Profil

Authentifizierte Benutzer können ihr Konto und Benutzerprofil über das Dropdown-Menü in der rechten oberen Ecke der Menüleiste verwalten.

<img src="img/help/genealogy-003a.webp" class="rounded" alt="Profileinstellungen">

<img src="img/help/genealogy-005a.webp" class="rounded" alt="Benutzerprofil">

### c. Teams

Diese Anwendung verwendet <a href="https://jetstream.laravel.com/" target="_blank">Laravel Jetstream</a> mit der <a href="https://jetstream.laravel.com/features/teams.html" target="_blank">Teams</a>-Option zur Implementierung und Durchsetzung von <a href="https://de.wikipedia.org/wiki/Mandantenf%C3%A4higkeit" target="_blank">Mandantenfähigkeit</a>.

Authentifizierte Benutzer können ihre Teams und Teameinstellungen über das Dropdown-Menü in der rechten oberen Ecke der Menüleiste verwalten.

<img src="img/help/genealogy-004.webp" class="rounded" alt="Teameinstellungen">

Benutzer können entweder ihr persönliches Team verwalten oder neue Teams erstellen.<br/>
<span style="color:red">
Das persönliche Team und alle von einem Benutzer erstellten Teams gehören auch diesem Benutzer.<br/>
Nur der Besitzer kann andere (neue oder bereits registrierte) Benutzer (per E-Mail) einladen, den eigenen Teams beizutreten.<br/>
Der Besitzer kann die Teambesitzrechte an ein anderes Teammitglied übertragen. Eine Benachrichtigungs-E-Mail wird an den neuen Besitzer gesendet. Der vorherige Besitzer wird Administrator.
</span>

<img src="img/help/genealogy-005b.webp" class="rounded" alt="Teamverwaltung">

<span style="color:red">
    Erstellen Sie ein <b>neues und separates Team</b> für jeden <b>Stammbaum</b>, den Sie verwalten möchten, und laden Sie andere Benutzer dazu ein</b>.<br/><br/>
    <b>Verwenden Sie Ihr persönliches Team nicht zum Erstellen von Stammbäumen, da die Besitzrechte persönlicher Teams NICHT auf ein anderes Teammitglied übertragen werden können.</b><br/><br/>
    Durch Zuweisung der richtigen <b>Rolle</b> an Benutzer können Sie die Rechte definieren, die sie im ausgewählten Team haben.
</span>

Authentifizierte Benutzer können nur <b>Personen</b> und <b>Paare</b> sehen:

<ul>
    <li>erstellt von Teams, die sie selbst <b>besitzen</b></li>
    <li>erstellt von Teams, zu denen sie <b>vom Teambesitzer</b> als <b>Administrator</b>, <b>Manager</b>, <b>Bearbeiter</b> oder <b>Mitglied</b> eingeladen wurden</li>
</ul>

### d. Rollen & Berechtigungen

<table>
    <thead>
        <tr>
            <th style="text-align:left">Rolle</th>
            <th style="text-align:left">Modell</th>
            <th style="text-align:left">Berechtigungen</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td rowspan="3"><b>Administrator</b></td>
            <td>Benutzer</td>
            <td>erstellen, lesen, aktualisieren, löschen</td>
        </tr>
        <tr>
            <td>Person</td>
            <td>erstellen, lesen, aktualisieren, löschen</td>
        </tr>
        <tr>
            <td>Paar</td>
            <td>erstellen, lesen, aktualisieren, löschen</td>
        </tr>
        <tr>
            <td rowspan="2"><b>Manager</b></td>
            <td>Person</td>
            <td>erstellen, lesen, aktualisieren, löschen</td>
        </tr>
        <tr>
            <td>Paar</td>
            <td>erstellen, lesen, aktualisieren, löschen</td>
        </tr>
        <tr>
            <td rowspan="2"><b>Bearbeiter</b></td>
            <td>Person</td>
            <td>erstellen, lesen, aktualisieren</td>
        </tr>
        <tr>
            <td>Paar</td>
            <td>erstellen, lesen, aktualisieren</td>
        </tr>
        <tr>
            <td rowspan="2"><b>Mitglied</b></td>
            <td>Person</td>
            <td>lesen</td>
        </tr>
        <tr>
            <td>Paar</td>
            <td>lesen</td>
        </tr>
    </tbody>
</table>

<hr />

<!-- ---------------------------------------------------------------------------------- -->

## 3. Suche

<img src="img/help/genealogy-001.webp" class="rounded" alt="Menü">

Nach dem Anmelden und <span style="color:red">Auswahl des richtigen Teams</span> klicken Sie auf die Schaltfläche <b>Suche</b> im oberen Navigationsmenü.

<img src="img/help/genealogy-010a.webp" class="rounded" alt="Suche">

Geben Sie Suchwerte in das <b>Suchfeld</b> ein.<br/>
Über dem Suchfeld wird die Anzahl der im <b>aktuellen Team</b> verfügbaren/gefundenen Personen angezeigt.<br/>

<span class="text-red-500">
<u>Tipps</u>:<br/>
<ol>
<li>Das System sucht <b>jedes einzelne Wort</b> des Suchwertes in den Attributen <b>Nachname</b>, <b>Vorname</b>, <b>Geburtsname</b> und <b>Spitzname</b>.</li>
<li>
Beginnen Sie die Suchzeichenfolge mit <b>%</b>, wenn Sie nach Teilen von Namen suchen möchten, zum Beispiel: <b>%Jr</b>.<br/> Beachten Sie, dass diese Art von Suchen langsamer ist.
</li>
<li>
Wenn ein Nachname, Vorname, Geburtsname oder Spitzname Leerzeichen enthält, setzen Sie den Namen in doppelte Anführungszeichen, zum Beispiel: <b>"John Fitzgerald Jr." Kennedy</b>.<br/>
</li>
</ol>
</span>

Die Ergebnisse werden in einem Raster unter dem Suchfeld angezeigt. Jede Person wird in einer Karte dargestellt.<br/>
Sie können die Paginierungsschaltflächen zur Navigation verwenden. Sie können auch die Anzahl der pro Seite angezeigten Personen ändern.

<img src="img/help/genealogy-012.webp" class="rounded" alt="Menü">

Klicken Sie auf die Schaltfläche <b>Profil</b> oder <b>Familienstammbaum</b>, um Details zu dieser Person anzuzeigen.<br/>
Klicken Sie auf den Namen des Vaters oder der Mutter, um die Eltern zu besuchen.

<hr />

<!-- ---------------------------------------------------------------------------------- -->

## 4. Personen hinzufügen

### a. Neue Person

Nach dem Anmelden und <span style="color:red">Auswahl des richtigen Teams</span> klicken Sie auf die Schaltfläche <b>Suche</b> im oberen Navigationsmenü.

<img src="img/help/genealogy-001.webp" class="rounded" alt="Suche">

Sie können eine neue Person hinzufügen, indem Sie auf die Schaltfläche <b>Person hinzufügen</b> über der Suchleiste klicken.

<img src="img/help/genealogy-010.webp" class="rounded" alt="Person hinzufügen">
<img src="img/help/genealogy-011.webp" class="rounded" alt="Person hinzufügen">

### b. Neue Person als Vater oder Mutter

Eine weitere Möglichkeit, Personen hinzuzufügen, ist das Klicken auf die Registerkarte <b>Vater hinzufügen</b> oder <b>Mutter hinzufügen</b> im <b>Familie</b>-Kontextmenü einer bestehenden Person.<br/>
Diese Optionen sind nur verfügbar, wenn die bestehende Person noch keinen Vater oder keine Mutter hat.

<img src="img/help/genealogy-033a.webp" class="rounded" alt="Partner">
<img src="img/help/genealogy-035a.webp" class="rounded" alt="Vater hinzufügen">
<img src="img/help/genealogy-036.webp" class="rounded" alt="Mutter hinzufügen">

<div style="color:red">
    Sie können entweder eine <b>völlig NEUE Person</b> erstellen oder eine <b>BESTEHENDE Person</b> als neuen Vater oder neue Mutter der Person auswählen.
</div>

<img src="img/help/genealogy-035b.webp" class="rounded" alt="Bestehende Person als Vater hinzufügen">
<img src="img/help/genealogy-036b.webp" class="rounded" alt="Bestehende Person als Mutter hinzufügen">

### c. Neue Person als Partner

Eine weitere Möglichkeit, Personen hinzuzufügen, ist das Klicken auf die Registerkarte <b>Beziehung hinzufügen</b> im <b>Partner</b>-Kontextmenü einer bestehenden Person.

<img src="img/help/genealogy-055.webp" class="rounded" alt="Partner">
<img src="img/help/genealogy-056a.webp" class="rounded" alt="Partner hinzufügen">

<div style="color:red">
    Sie können entweder eine <b>völlig neue Person</b> erstellen oder eine <b>bestehende Person</b> als neuen Partner der Person auswählen.
</div>

<img src="img/help/genealogy-056b.webp" class="rounded" alt="Bestehende Person als Partner hinzufügen">

### d. Neue Person als Kind

Eine letzte Möglichkeit, Personen hinzuzufügen, ist das Klicken auf die Registerkarte <b>Kind hinzufügen</b> im <b>Kinder</b>-Kontextmenü einer bestehenden Person.

<img src="img/help/genealogy-050.webp" class="rounded" alt="Kinder">
<img src="img/help/genealogy-051.webp" class="rounded" alt="Kind hinzufügen">

<div style="color:red">
    Sie können entweder eine <b>völlig neue Person</b> erstellen oder eine <b>bestehende Person</b> als neues Kind der Person auswählen.
</div>

<img src="img/help/genealogy-051b.webp" class="rounded" alt="Bestehende Person als Kind hinzufügen">

<hr />

<!-- ---------------------------------------------------------------------------------- -->

## 5. Personen und Beziehungen

### a. Profil

Die Personenübersicht zeigt alle Informationen über die ausgewählte Person.

<img src="img/help/genealogy-020.webp" class="rounded" alt="Personenübersicht">

Die Navigationsleiste oben ermöglicht Ihnen die Auswahl bestimmter Elemente.

<img src="img/help/genealogy-021a.webp" class="rounded" alt="Personenmenü">

Die <b>Profil</b>-Karte zeigt alle allgemeinen Informationen über die Person.

<img src="img/help/genealogy-022a.webp" class="rounded" alt="Profil verstorben">

Beachten Sie, dass diese Karte unterschiedliche Daten für <b>lebende</b> und <b>verstorbene</b> Personen anzeigt.

<img src="img/help/genealogy-022b.webp" class="rounded" alt="Profil lebend">

Sie können die <b>Profil</b>-, <b>Kontakt</b>- und <b>Sterbe</b>-Daten bearbeiten, indem Sie die entsprechende Registerkarte im Kontextmenü auswählen.

<img src="img/help/genealogy-023.webp" class="rounded" alt="Profil bearbeiten">
<img src="img/help/genealogy-024.webp" class="rounded" alt="Profil bearbeiten Profil">
<img src="img/help/genealogy-025a.webp" class="rounded" alt="Profil bearbeiten Kontakt">
<img src="img/help/genealogy-026a.webp" class="rounded" alt="Profil bearbeiten Tod">

### b. Ereignisse

Sie können benutzerdefinierte <b>Ereignisse</b> bearbeiten, indem Sie die entsprechende Registerkarte im Kontextmenü auswählen.

<img src="img/help/genealogy-023.webp" class="rounded" alt="Profil bearbeiten">
<img src="img/help/genealogy-028.webp" class="rounded" alt="Ereignisse verwalten">

Sie können Ereignisse hinzufügen, bearbeiten oder löschen.

<img src="img/help/genealogy-028b.webp" class="rounded" alt="Ereignis bearbeiten">

### c. Fotos

<img src="img/help/genealogy-022c.webp" class="rounded" alt="Fotobearbeitung">

Sie können mit der Navigationsleiste über dem Fotokarussell durch die verfügbaren Fotos blättern.<br/>
Sie können Fotos verwalten, indem Sie die entsprechende Registerkarte im Kontextmenü auswählen.

<img src="img/help/genealogy-023.webp" class="rounded" alt="Profil bearbeiten">
<img src="img/help/genealogy-027.webp" class="rounded" alt="Foto hinzufügen">

Sie können (mehrere) neue Bilder <b>hochladen</b>.<br/>
Sie können bestehende Bilder <b>herunterladen</b> oder <b>löschen</b>.<br/>
Nach dem Löschen des Hauptfotos wird das erste Bild in der Sammlung zum neuen Hauptfoto.<br/>
Sie können das Hauptbild auch setzen, indem Sie auf die <b>Stern</b>-Schaltfläche klicken.

### d. Familie

Die <b>Familie</b>-Karte zeigt die Eltern der Person und den aktuellen Partner.

<img src="img/help/genealogy-033.webp" class="rounded" alt="Familie">

<b>Vater</b> und <b>Mutter</b> beziehen sich immer auf den <b>biologischen</b> Vater und die Mutter.<br/>
Nicht-biologische Eltern können über den <b>Eltern</b>-Link definiert werden.

Sie können die Familiendaten bearbeiten, indem Sie die Option <b>Bearbeiten</b> im Familienkontextmenü auswählen.<br/>
Falls der Vater oder die Mutter der Person noch nicht bekannt sind, können Sie diese direkt im Familienkontextmenü hinzufügen oder bearbeiten.

<img src="img/help/genealogy-033a.webp" class="rounded" alt="Familie bearbeiten">
<img src="img/help/genealogy-034.webp" class="rounded" alt="Familie">

### e. Partner (Paare)

<img src="img/help/genealogy-040a.webp" class="rounded" alt="Partner">

Sie können eine Beziehung <b>hinzufügen</b>, <b>bearbeiten</b> oder <b>löschen</b>, indem Sie die entsprechende Registerkarte im Kontextmenü auswählen.<br/>
Beim Löschen einer Beziehung bleibt der Ex-Partner in der Sammlung als separate Person erhalten.<br/>
Unter normalen Umständen sollten Sie Beziehungen nur löschen, wenn sie versehentlich eingegeben wurden.<br/>
Sie können jede bestehende Beziehung beenden, indem Sie die Beziehung als beendet markieren, mit oder ohne Angabe des Enddatums.

<img src="img/help/genealogy-042.webp" class="rounded" alt="Partner hinzufügen">

<div style="color:red">
Beim Hinzufügen eines Partners können Sie entweder eine völlig neue Person erstellen oder eine bestehende Person als neuen Partner auswählen.
</div>

### f. Kinder

<img src="img/help/genealogy-050.webp" class="rounded" alt="Kinder">

Sie können ein Kind <b>hinzufügen</b> oder bestehende Kinder <b>trennen</b>, indem Sie die entsprechende Registerkarte im Kontextmenü auswählen.<br/>
Das getrennte Kind bleibt in der Datenbank als Person erhalten, hat aber die ausgewählte Person nicht mehr als Vater oder Mutter.

<img src="img/help/genealogy-051.webp" class="rounded" alt="Kind hinzufügen">

<div style="color:red">
Beim Hinzufügen eines Kindes können Sie entweder eine <b>völlig neue Person</b> erstellen oder eine <b>bestehende Person</b> auswählen.
</div>

<img src="img/help/genealogy-051b.webp" class="rounded" alt="Bestehende Person als Kind">

### g. Geschwister

Geschwister werden auf der Geschwisterkarte angezeigt.<br/>

<img src="img/help/genealogy-060a.webp" class="rounded" alt="Geschwister">

Ein Geschwister kann <b>vollständig</b> sein: beide biologischen Eltern sind dieselben wie bei der ausgewählten Person.<br/>
Ein Geschwister kann <b>halb</b> sein: nur die biologische Mutter oder der biologische Vater sind gemeinsam. <span class="text-yellow-500">[1/2]</span><br/>
Ein Geschwister kann <b>plus</b> sein: weder der biologische Vater noch die biologische Mutter sind gemeinsam, aber das Kind ist Teil der aktuellen Beziehung der ausgewählten Person <span class="text-yellow-500">[+]</span>

### h. Dateien

Die <b>Dateien</b>-Karte zeigt die an die Person angehängten Dateien.<br/>
Sie können diese Funktion nutzen, um Dokumentation anzuhängen.

<img src="img/help/genealogy-074.webp" class="rounded" alt="Dateien">

Sie können (mehrere) neue Dokumente hochladen.<br/>
Sie können die Quelle der hochzuladenden Dokumente angeben.<br/>
Sie können die Reihenfolge der Dokumente durch Klicken auf die <b>Auf</b>- oder <b>Ab</b>-Schaltflächen ändern.<br/>
Sie können Dokumente durch Klicken auf die <b>Download</b>-Schaltfläche herunterladen oder in einem separaten Fenster öffnen, indem Sie auf das Dokumentsymbol klicken.<br/>
Sie können ein Dokument löschen, indem Sie auf die <b>Löschen</b>-Schaltfläche klicken.

### i. Vorfahren

Dies zeigt die Vorfahren der ausgewählten Person.<br/>
Sie können die Baumtiefe über die Steuerung in der Kopfzeile der Vorfahrenkarte ändern.

<img src="img/help/genealogy-070.webp" class="rounded" alt="Vorfahren">

### j. Nachkommen

Dies zeigt die Nachkommen der ausgewählten Person.<br/>
Sie können die Baumtiefe über die Steuerung in der Kopfzeile der Nachkommenkarte ändern.

<img src="img/help/genealogy-071.webp" class="rounded" alt="Nachkommen">

### k. Familienstammbaum

Dies zeigt den vollständigen Familienstammbaum, 3 Generationen tief.<br/>
Klicken Sie auf einen Namen eines Familienmitglieds, um dessen Familienstammbaum anzuzeigen.

<img src="img/help/genealogy-072.webp" class="rounded" alt="Familienstammbaum">

### l. Zeitleiste

Dies zeigt die Zeitleiste der Person, einschließlich fester Ereignisse wie Geburt, Tod (eigene und die der Kinder) und Beziehungen, kombiniert mit allen benutzerdefinierten Ereignissen wie Taufe, Militärdienst usw.

<img src="img/help/genealogy-076.webp" class="rounded" alt="Zeitleiste">

### m. Datenblatt

Dies zeigt das Datenblatt der ausgewählten Person.<br/>
Sie können dies verwenden, um eine Übersicht zu <b>drucken</b>.

<img src="img/help/genealogy-075.webp" class="rounded" alt="Datenblatt">

### n. Verlauf

Dies zeigt den Verlauf der ausgewählten Person.<br/>

<img src="img/help/genealogy-073a.webp" class="rounded" alt="Verlauf">

<hr />

<!-- ---------------------------------------------------------------------------------- -->

## 6. Geburtstage

Nach dem Anmelden und Auswahl des richtigen Teams klicken Sie auf die Schaltfläche <b>Geburtstage</b> im oberen Navigationsmenü.

<img src="img/help/genealogy-001.webp" class="rounded" alt="Menü">

Dies zeigt die bevorstehenden Geburtstage.

<img src="img/help/genealogy-080.webp" class="rounded" alt="Geburtstage">

<hr />

<!-- ---------------------------------------------------------------------------------- -->

## 7. Offcanvas-Menü

Benutzer können auf eine Schaltfläche im oberen rechten Menü klicken, um das <b>Offcanvas-Menü</b> zu öffnen.<br/>
Oben werden die Rolle und Berechtigungen des Benutzers im aktuellen Team angezeigt.<br/>
Wenn ein Benutzer die entsprechenden Rechte hat, werden zusätzliche Funktionen angezeigt.

<img src="img/help/genealogy-006.webp" class="rounded" alt="Offcanvas-Menü">

### a. Team

Das Offcanvas-Menü ermöglicht <b>allen Benutzern</b> die Einsicht in das <b>aktive Team</b> und die entsprechenden Protokolle für Team/Benutzer und Personen/Paare.

<img src="img/help/genealogy-100a.webp" class="rounded" alt="Team">

### b. Teams & Personen

Das Offcanvas-Menü ermöglicht <b>Entwicklern</b> die Einsicht in alle <b>Teams</b> und <b>Personen</b>.

<img src="img/help/genealogy-090a.webp" class="rounded" alt="Teams">
<img src="img/help/genealogy-090b.webp" class="rounded" alt="Personen">

### c. Benutzer & Protokollierung

Das Offcanvas-Menü ermöglicht <b>Entwicklern</b> die Einsicht in die Benutzer und deren Protokollinformationen.

<img src="img/help/genealogy-091.webp" class="rounded" alt="Benutzer">
<img src="img/help/genealogy-093.webp" class="rounded" alt="Benutzerprotokoll 1">
<img src="img/help/genealogy-094.webp" class="rounded" alt="Benutzerprotokoll 2">
<img src="img/help/genealogy-094b.webp" class="rounded" alt="Benutzerprotokoll 3">

### d. Einstellungen

Der Menüpunkt <b>Einstellungen</b> ermöglicht <b>Entwicklern</b> die Verwaltung der Protokollierungseinstellungen.

<img src="img/help/genealogy-099.webp" class="rounded" alt="Einstellungen">

### e. Sicherungen

Der Menüpunkt <b>Sicherungen</b> ermöglicht <b>Entwicklern</b> die Verwaltung von Datenbanksicherungen.

<img src="img/help/genealogy-095.webp" class="rounded" alt="Sicherungen">

### f. Protokollanzeige

Der Menüpunkt <b>Protokollanzeige</b> ermöglicht <b>Entwicklern</b> die Einsicht in die Anwendungsprotokolldateien.

<img src="img/help/genealogy-096a.webp" class="rounded" alt="Protokollanzeige">

### g. Abhängigkeiten

Der Menüpunkt <b>Abhängigkeiten</b> ermöglicht <b>Entwicklern</b> die Einsicht in die Anwendungsabhängigkeiten.

<img src="img/help/genealogy-097.webp" class="rounded" alt="Abhängigkeiten">

### h. Sitzung

Der Menüpunkt <b>Sitzung</b> ermöglicht <b>Entwicklern</b> die Einsicht in die Anwendungssitzung.

<img src="img/help/genealogy-098.webp" class="rounded" alt="Sitzung">

<hr />

<!-- ---------------------------------------------------------------------------------- -->

## 8. Sprache & Zeitzone

### a. Besucher

Besucher können die Sprache im oberen rechten Menü über den <b>Sprachauswähler</b> ändern.<br/>
Die <b>Standard</b>-Anwendungssprache ist <b>Englisch</b>.

<img src="img/help/genealogy-002a.webp" class="rounded" alt="Sprachmenü">

### b. Authentifizierte Benutzer

Authentifizierte Benutzer können die Sprache und die Zeitzone im oberen rechten Menü über den <b>Profileditor</b> ändern.<br/>
Die ausgewählte Sprache und Zeitzone werden in der Datenbank gespeichert.

<img src="img/help/genealogy-002d.webp" class="rounded" alt="Profileditor">

<hr />

<!-- ---------------------------------------------------------------------------------- -->

## 9. Farbthema

Benutzer können das Farbthema im oberen rechten Menü über das <b>Themensymbol</b> ändern.<br/>
Das <b>Standard</b>-Anwendungsthema ist <b>Dunkelmodus</b>.

<img src="img/help/genealogy-002a.webp" class="rounded" alt="Themenauswahl">
