# Sonos Plugin

Mit dem Sonos-Plugin können Sie Sonos Play 1, 3, 5, Sonos Connect, Sonos Connect AMP, Sonos Playbar und Ikea Symfonisk steuern. Sie können den Status des Sonos anzeigen und Aktionen ausführen (Wiedergabe, Pause, Weiter, Zurück, Lautstärke, Auswahl einer Wiedergabeliste…)

# Plugin Konfiguration

Die Konfiguration ist sehr einfach. Nach dem Herunterladen des Plugins müssen Sie es nur noch aktivieren und fertig. Das Plugin sucht in Ihrem Netzwerk nach Sonos und erstellt die Geräte automatisch. Wenn zwischen Jeedom-Objekten und Sonos-Räumen eine Übereinstimmung besteht, weist Jeedom Sonos automatisch den richtigen Räumen zu.

> **Spitze**
>
> Während der ersten Entdeckung wird dringend empfohlen, Soundsysteme nicht zu gruppieren, wenn Fehler auftreten

Wenn Sie später ein Sonos hinzufügen, können Sie entweder ein Sonos-Gerät erstellen, indem Sie Jeedom die IP-Adresse geben, oder auf "Nach Sonos-Geräten suchen" klicken"

-   **Stimme** : Wahl der Stimme während der TTS
-   **Teilen** : Freigabename und Ordnerpfad
-   **Benutzername für die Freigabe** : Benutzername für den Zugriff auf die Freigabe
-   **Passwort teilen** : Passwort teilen
-   **Entdeckung** : Erkennen Sie automatisch die Soundsysteme (funktioniert nicht bei einer Docker-Installation, bei der jedes Soundsystem von Hand erstellt werden muss)
-   **Sonos Nebengebäude** : Installieren Sie Sonos-Abhängigkeiten für TTS

> **Wichtig**
>
> Zu lange Nachrichten können nicht in TTS (dem Limit) übertragen werden
> hängt vom TTS-Anbieter ab, normalerweise ca. 100 Zeichen)

# Gerätekonfiguration

Auf die Konfiguration der Sonos-Geräte kann über das Plugins-Menü und dann über Multimedia zugegriffen werden

Hier finden Sie die gesamte Konfiguration Ihrer Geräte :

-   **Name der Sonos-Ausrüstung** : Name Ihres Sonos-Geräts
-   **Übergeordnetes Objekt** : Gibt das übergeordnete Objekt an, zu dem das Gerät gehört
-   **Aktivieren** : macht Ihre Ausrüstung aktiv
-   **Sichtbar** : macht es auf dem Dashboard sichtbar
-   **Modell** : das Modell Ihres Sonos (nur ändern, wenn es nicht das richtige ist)
-   **IP** : Die IP Ihres Sonos kann nützlich sein, wenn Ihr Sonos die IP ändert oder wenn Sie sie ersetzen

Nachfolgend finden Sie die Liste der Bestellungen :

-   **Name** : Name der Bestellung
-   **Erweiterte Konfiguration (kleine gekerbte Räder)** : Zeigt die erweiterte Konfiguration des Befehls an (Protokollierungsmethode, Widget usw.))
-   **Test** : Wird zum Testen des Befehls verwendet

Als Bestellung finden Sie :

-   **Playlist abspielen** : Befehl zum Nachrichtentyp, um eine Wiedergabeliste zu starten. Geben Sie einfach den Namen der Wiedergabeliste in den Titel ein. Sie können "zufällig" in die Nachricht einfügen, um die Wiedergabeliste vor dem Spielen zu mischen.
-   **Favoriten spielen** :  Befehl zum Nachrichtentyp, um ein Lesezeichen zu starten. Fügen Sie einfach den Namen des Lesezeichens in den Titel ein. Sie können "zufällig" in die Nachricht einfügen, um die Favoriten vor dem Lesen zu mischen.
-   **Spielen Sie ein Radio** : Befehlstyp Nachricht zum Starten eines Radios, nur im Titel, um den Namen des Radios anzugeben (ACHTUNG, dies muss in den Lieblingsradios sein).
-   **Hinzufügen eines Lautsprechers** : Ermöglicht das Hinzufügen eines Lautsprechers (eines Sonos) zum aktuellen Lautsprecher (um beispielsweise 2 Sonos zuzuordnen). Sie müssen den Namen des Sonos-Raums in den Titel einfügen (das Nachrichtenfeld wird hier nicht verwendet).
-   **Lautsprecher entfernen** : Mit dieser Option können Sie einen Lautsprecher (einen Sonos) aus dem aktuellen Lautsprecher löschen (um beispielsweise 2 Sonos zu trennen). Sie müssen den Namen des zu löschenden Sonos-Teils in den Titel einfügen (das Nachrichtenfeld wird hier nicht verwendet).
-   **Zufälliger Status** : zeigt an, ob wir uns im Zufallsmodus befinden oder nicht
-   **Zufällig** : Kehren Sie den Status des Zufallsmodus um
-   **Status wiederholen** : zeigt an, ob wir uns im Wiederholungsmodus befinden oder nicht
-   **Wiederholung** : Kehren Sie den Status des "Wiederholungs" -Modus um"
-   **Bild** : Link zum Albumbild
-   **Album** : Name des aktuell wiedergegebenen Albums
-   **Künstler** : Künstlername spielt gerade
-   **Verfolgen** : Name des aktuell wiedergegebenen Titels
-   **Stumm** : Geh stumm
-   **Früher** : vorheriger Titel
-   **Folgende** : nächster Track
-   **Lesen** : lesen
-   **Pause** : Pause
-   **STOP** : Hör auf zu lesen
-   **Lautstärke** : Ändern Sie die Lautstärke (von 0 auf 100))
-   **Statusvolumen** : Lautstärke
-   **Status** : Status (Pause, Lesen, Übergang…)
-   **Zu sagen** : ermöglicht das Lesen eines Textes auf Sonos (siehe TTS-Teil). Im Titel können Sie die Lautstärke und in der Nachricht die zu lesende Nachricht einstellen

> **Notiz**
>
> Zum Abspielen von Wiedergabelisten können Sie Optionen (im Optionsfeld) einfügen). Um die Wiedergabeliste zufällig zu lesen, müssen Sie "zufällig" eingeben"

# TTS

TTS (Text-to-Speech) für Sonos erfordert die Freigabe von Windows (Samba) im Netzwerk (von Sonos vorgeschrieben, keine andere Möglichkeit)). Sie benötigen also einen NAS im Netzwerk. Die Konfiguration ist recht einfach. Sie müssen den Namen oder die IP-Adresse des NAS (achten Sie darauf, dass Sie das Gleiche wie auf Sonos deklarieren) sowie den Pfad (relativ), den Benutzernamen und das Kennwort ( Aufmerksamkeit der Benutzer muss Schreibrechte haben)

> **Wichtig**
>
> Es ist unbedingt erforderlich, ein Passwort einzugeben, damit dies funktioniert

> **Wichtig**
>
> Ein Unterverzeichnis ist auch unbedingt erforderlich, damit die Sprachdatei korrekt erstellt wird.

**Hier ist ein Beispiel für die Konfiguration (danke @masterfion) :.**

NAS-Seite, hier ist meine Konfiguration :

-   Jeedom-Ordner wird freigegeben
-   Der Sonos-Benutzer hat Lese- / Schreibzugriff (erforderlich für Jeedom))
-   Der Gastbenutzer hat nur Lesezugriff (für Sonos erforderlich))

Sonos Plugin Seite, hier ist meine Konfiguration :

-   Teilen :
    -   Feld 1 : 192.168.xxx.yyy
    -   Feld 2 : Jeedom / TTS
-   Benutzername : Sonos und sein Passwort…

Sonos Library Seite (PC App)
-   der Weg ist : //192.168.xxx.yyy/Jeedom/TTS

> **Wichtig**
>
> ABSOLUT Netzwerkfreigabe in der Soundbibliothek hinzufügen, andernfalls erstellt Jeedom die MP3-Datei für die tts, kann jedoch nicht vom Sonos abgespielt werden

> **Wichtig**
>
> Die Sprache hängt von der Jeedom-Sprache ab und verwendet standardmäßig Picotts. Ab jeedom 3.3.X Es wird möglich sein, Google TTS zu verwenden, um eine schönere Stimme zu haben


# Das Panel

Das Sonos-Plugin bietet auch ein Bedienfeld, in dem alle Ihre Sonos zusammengefasst sind. Verfügbar über das Home-Menü → Sonos Controller :

> **Wichtig**
>
> Um das Panel zu haben, müssen Sie es in der Plugin-Konfiguration aktivieren

# FAQ

> **Fehler "Keine Geräte in dieser Sammlung" bei der Suche nach Geräten**
>
> Dieser Fehler tritt auf, wenn die automatische Erkennung blockiert ist (z. B. Router, der den Boradcast blockiert)). Es spielt keine Rolle, dass Sie Ihre Sonos nur von Hand hinzufügen müssen, indem Sie das Modell und die IP angeben.

> **Ich habe Bedenken bezüglich TTS (in Schleife), die Radios funktionieren nicht, ich habe bizarre Fehler...**
>
> Das erste, was Sie bei Problemen tun müssen, ist, alle Sonos zu trennen, sie wieder anzuschließen, um zu warten, bis sie starten, und dann den Sonos-Dämon in Jeedom neu zu starten. Im Allgemeinen löst dies 90% der Probleme
