<?php

$text = '<div class= "abouttext"> <p align="justify">Das Egg Tracker Projekt wurde im Rahmen des Kurses Geosoftware am Institut für Geoinformatik an der Universität Münster entwickelt.</p>

<p align="justify">Es soll in Zukunft dazu dienen Luftdaten für normale Bürger zugänglich zu machen.
Die Luftdaten werden dabei von Air Quality Eggs(<a href="http://airqualityegg.com/">AQE</a>
) gesammelt, die in Münsters Innenstadt stehen. Über die Plattform <a href="http://cosm.com/">cosm.com</a>
, ehemals Pachube, werden Daten über die cosm-API gesammelt und in einer lokalen Datenbank gespeichert um eine gute Performace bei Anfragen zu erreichen.</p>

<p align="justify">Validierte Daten werden außerdem vom Landesamt für Natur, Umwelt und Verbraucherschutz NRW (<a href="http://www.lanuv.nrw.de">LANUV</a>) bezogen um gesicherten Messwerte zur Validierung der Egg-Messwerte zu benutzen.</p>

<p align="justify">Ziel des Projektes ist das man die Bürger Münsters auf mögliche Probleme der Luftqualität aufmerksam macht und zum Beispiel Ozondaten für interessierte Sportler bereitstellt, die ihr Sportprogramm nur bei unbedenklicher Luftverschmutzung betreiben möchten.</p>

<p align="justify">Alle verarbeiteten Daten können mit dem Egg Tracker System in einer <a href="http://giv-geosoft2a.uni-muenster.de/eggtracker/?action=">Kartenansicht</a>, in einer <a href="http://giv-geosoft2a.uni-muenster.de/eggtracker/?action=list_values">Tabelle</a> oder einem <a href="http://giv-geosoft2a.uni-muenster.de/eggtracker/?action=diagram">Diagramm</a> angezeigt werden.
Alle verarbeiteten <a href="http://giv-geosoft2a.uni-muenster.de/eggtracker/?action=list">Datenquellen</a> werden in einer zentralen Tabelle angezeigt.
Ein <a href="http://giv-geosoft2a.uni-muenster.de/eggtracker/?action=export_form">Datenexport</a> ist als XML, CSV oder JSON möglich.</p></div>';

$text = str_replace ("ä", "&auml;", $text);
$text = str_replace ("Ä", "&uml;", $text);
$text = str_replace ("ö", "&ouml;", $text);
$text = str_replace ("Ö", "&Ouml;", $text);
$text = str_replace ("ü", "&uuml;", $text);
$text = str_replace ("Ü", "&Uuml;", $text);
$text = str_replace ("ß", "&szlig;", $text);

echo $text;

echo '<p>
	<img src="img/logo_ifgi.png" alt="ifgi" class="poweredby logo">
	<img src="img/logo_aqe.png" alt="Air Quality Egg" class="poweredby logo">
	<img src="img/logo_cosm.png" alt="Cosm" class="poweredby logo">
	<img src="img/logo_ol.png" alt="Open Layers" class="poweredby logo">
	[FamFamFam Icons]
</p>';

?>
 























