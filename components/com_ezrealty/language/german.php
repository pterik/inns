<?php

#############################################################################
#                                                                           #
#  EZ Realty 5.0.0 - A Mambo Real Estate component                          #
#  By: Kathy Strickland (aka PixelBunyiP)                                   #
#  Copyright (C) 2006 K.J. Strickland, Raptor Developments Pty Ltd          #
#  All rights reserved                                                      #
                                         #
#  Released as a commercial component!                                      #
#                                                                           #
#############################################################################

    /**** LANGUAGE FILE INFO *****************\
    **   
    **   German language
    **   By: H.W. Schwoelm     http://www.humanwerk.de 
    **	 and D. Schnappinger  http://www.beratungskombinat.eu
    **  
    \*****************************************/


defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

// admin.ezrealty.php file language tags

DEFINE("_EZREALTY_NOREMOVE","Zur Zeit nicht löschbar, da noch von Einträgen verwendet.");
DEFINE("_EZREALTY_CLEAN","Entferne abgelaufene Einträge.");

// configuration area settings

DEFINE("_EZREALTY_CONFIG_GENSET","Generelle Bild-Pfad Einstellungen");

DEFINE("_EZREALTY_CONFIG_IMAGESIZES","Thumbnail- & Bildgrößen");
DEFINE("_EZREALTY_CONFIG_WIDTHPROPIMG","Haupt-Bild Breite");
DEFINE("_EZREALTY_CONFIG_WIDTHPROPIMGDESC","Breite des Haupt-Bildes für Immobilien und Grundrissplan, wie es in der Details-Ansicht Seite erscheint. Es wird in Pixel wiedergegeben, um Ihnen die Einstellung für Ihr Template zu erleichtern. Ihre Bilder werden in die angegebene Größe umgewandelt.");
DEFINE("_EZREALTY_CONFIG_WIDTHCATTHUMB","Kategorie Thumbnail Breite");
DEFINE("_EZREALTY_CONFIG_WIDTHCATTHUMBDESC","Breite der Bilder, die in den Kategorien verwendet werden.");
DEFINE("_EZREALTY_CONFIG_WIDTHTHUMB","Thumbnail Max. Breite");
DEFINE("_EZREALTY_CONFIG_WIDTHTHUMBDESC","Breite der Thumbnails, wie sie dann für den Grundstück-Eintrag im Front-End erscheinen.");

DEFINE("_EZREALTY_CONFIG_TNCREATOR","Thumbnail Ersteller");
DEFINE("_EZREALTY_CONFIG_GDLIMIT","GD unterstützt nur JPG/JPEG und PNG!");
DEFINE("_EZREALTY_CONFIG_GDFOUND","GD gefunden");
DEFINE("_EZREALTY_CONFIG_GDCHOOSE","Wählen Sie den Bild-Prozessor für Thumbnail-Erstellung.");
DEFINE("_EZREALTY_CONFIG_THUMBQUAL","Thumbnail Qualität");
DEFINE("_EZREALTY_CONFIG_THUMBQUALDESC","Qualität der erstellten Thumbnails.");
DEFINE("_EZREALTY_CONFIG_IMGDIR","Bild-Ordner");
DEFINE("_EZREALTY_CONFIG_IMGDIRDESC","Der Standard Bild-Ordner ist 'ezrealty', zu finden im components/com_ezrealty/ezrealty Pfad. DieThumbnails sind im gleichen Pfad, aber in dem Unterordner 'th'. Falls Sie den Ordnername ändern, müssen Sie auch einen neuen Unterordner 'th' manuell erstellen! Ändern sie auf KEINEN FALL den NAME des 'th'-Ordners.");
DEFINE("_EZREALTY_CONFIG_TNNONE","Keine");
DEFINE("_EZREALTY_CONFIG_TNGD1","GD Library");
DEFINE("_EZREALTY_CONFIG_TNGD2","GD2 Library");

DEFINE("_EZREALTY_CONFIG_YOURBIZSET","Ihre Firmen Einstellungen");
DEFINE("_EZREALTY_CONFIG_BIZNAME","Firmen Name");
DEFINE("_EZREALTY_CONFIG_BIZNAMEDESC","Der Name Ihres Immobilien-Unternehmens, wie er in der Komponenten-Überschrift (Header) und an anderen Stellen erscheint z.B. auf der Druck-Seite und eMail-Seite.");
DEFINE("_EZREALTY_CONFIG_BIZAD","Firmen Anschrift");
DEFINE("_EZREALTY_CONFIG_BIZADDESC","Ihre Firmen Anschrift. Diese erscheint in der Überschrift (Header) der Druck-Seite damit Ihre möglichen Käufer Ihre Daten haben.");
DEFINE("_EZREALTY_CONFIG_TELEPHONE","Kontakt Telefon");
DEFINE("_EZREALTY_CONFIG_TELEPHONEDESC","Ihre Kontakt Telefon Nummer, angezeigt im 'Termin-Absprache'-Formular und in der Druck-Seite.");
DEFINE("_EZREALTY_CONFIG_EMAIL","eMail Adresse");
DEFINE("_EZREALTY_CONFIG_EMAILDESC","eMail Adresse, wie sie in dem Grundstücks-Besichtigung Anfrage- und dem eMail-Listen Anforderungsformular erscheint.");
DEFINE("_EZREALTY_CONFIG_CURRENCYSIGN","Währungs-Symbol");
DEFINE("_EZREALTY_CONFIG_CURRENCYSIGNDESC","Das Währungs-Symbol, das vor den Immobilien-Preisen erscheinen soll.");
DEFINE("_EZREALTY_CONFIG_BIZINTRO","Firmen Einleitung");
DEFINE("_EZREALTY_CONFIG_BIZINTRODESC","Einleitungs-Text zu<br />Ihrem Immobilien-Unternehmen.");

DEFINE("_EZREALTY_CONFIG_LAYOUTSETTINGS","Verwalten Sie das Front-End Layout Ihrer Seite");

DEFINE("_EZREALTY_CONFIG_TPL","Front-End Template");
DEFINE("_EZREALTY_CONFIG_TPLDESC","Wählen Sie das Layout für Ihr Front-End. Diese Funktion beeinflusst das Erscheinungsbild der Immobilien 'Detail-Seite' und der 'Druck Detail-Seite'.");
DEFINE("_EZREALTY_CONFIG_SELTPL","Wähle Template");

DEFINE("_EZREALTY_CONFIG_PROPPERPAGE","Immobilien pro Seite");
DEFINE("_EZREALTY_CONFIG_PROPPERPAGEDESC","Anzahl der Immobilien, die pro Seite im Front-End angezeigt werden sollen.");
DEFINE("_EZREALTY_CONFIG_RECFRIEND","'Empfehle Immobilie' Link");
DEFINE("_EZREALTY_CONFIG_RECFRIENDDESC","Möchten Sie Ihren Besuchern das \"Empfehle Immobilie einem Bekannten\" Sonderfunktion ermöglichen?");
DEFINE("_EZREALTY_CONFIG_MAILINGVIEW","Der 'Zur Mailing Liste hinzufügen' Link");
DEFINE("_EZREALTY_CONFIG_MAILINGDESC","Möchten Sie die \"Zur Mailing Liste hinzufügen\" eMail-Box anzeigen lassen? Das erlaubt Besuchern, Ihnen eine automatische eMail zu senden und Sie können die beinhalteten Details Ihrem Mailing List Manager hinzufügen.");
DEFINE("_EZREALTY_CONFIG_SHOWLINKS","Zeige 'Links Box'");
DEFINE("_EZREALTY_CONFIG_SHOWLINKSDESC","Möchten Sie die 'Links Box' anzeigen lassen? - z.B. beinhaltet diese die 'Map-Link', 'Drucke Seite Link' und 'Zu Favoriten hinzufügen' Optionen.");
DEFINE("_EZREALTY_CONFIG_SC","Staat/Land");
DEFINE("_EZREALTY_CONFIG_SCDESC","Möchten Sie die Staat/Land Auswahl-Boxen im 'Erweiterte Suche Filter' anzeigen lassen?");

DEFINE("_EZREALTY_CONFIG_RSS","RSS Feed");
DEFINE("_EZREALTY_CONFIG_RSSDESC","Möchten Sie einen RSS Feed Link mit 'Neueste Immobilien Einträge' und 'Besichtigungs-Einträge' anzeigen lassen?");
DEFINE("_EZREALTY_CONFIG_RSSNN","'Neueste Immobilie(n)' RSS Feed Bezeichnung");
DEFINE("_EZREALTY_CONFIG_RSSNNDESC","Wie möchten Sie den 'Neueste Immobilie(n) RSS Feed nennen?");
DEFINE("_EZREALTY_CONFIG_RSSOH","'Besichtigung' RSS Feed Bezeichnung");
DEFINE("_EZREALTY_CONFIG_RSSOHDESC","Wie möchten Sie den 'Besichtigung' RSS Feed nennen?");

DEFINE("_EZREALTY_CONFIG_LEAD","Immobilien Einträge");
DEFINE("_EZREALTY_CONFIG_LEADDESC","Möchten Sie den Besuchern erlauben, Ihre Immobilien-Anfragen (Wünsche) auf Ihrer Seite einzutragen (registrieren)?");

DEFINE("_EZREALTY_CONFIG_MEMSALES","Bearbeite Front-End-Einträge der Immobilien durch registrierte Mitglieder");
DEFINE("_EZREALTY_CONFIG_MEMLISTINGS","Mitglieder Einträge");
DEFINE("_EZREALTY_CONFIG_MEMLISTINGSDESC","Möchten Sie registrierten Mitgliedern erlauben, ihre Immobilien über das Front-End Eintrag-Panel zum Verkauf anzubieten/einzutragen?");
DEFINE("_EZREALTY_CONFIG_NOTIFICATION","Einträge Benachrichtigung");
DEFINE("_EZREALTY_CONFIG_NOTIFICATIONDESC","Möchten Sie über neue oder aktualisierte Einträge informiert werden?");
DEFINE("_EZREALTY_CONFIG_MEMAPPROVAL","Überprüfung");
DEFINE("_EZREALTY_CONFIG_MEMAPPROVALDESC","Benötigen neue oder aktualisierte Einträge eine Überprüfung durch den Administrator, bevor sie veröffentlicht werden?");
DEFINE("_EZREALTY_CONFIG_NUMLISTINGS","Anzahl der Einträge");
DEFINE("_EZREALTY_CONFIG_NUMLISTINGSDESC","Wieviele Einträge dürfen die Mitglieder eintragen?");

DEFINE("_EZREALTY_CONFIG_MEMBERSINTRO","Mitglieder Bereich Einleitung/Anweisung");
DEFINE("_EZREALTY_CONFIG_MEMBERSINTRODESC","Schreiben Sie eine Einleitung/Anweisung für den Mitglieder-Bereich - z.B. verweisen Sie auf die 'Allgemeinen Geschäftsbedingungen (AGB)' für die Einträge usw.");
DEFINE("_EZREALTY_CONFIG_TERMS","Allgemeine Geschäftsbedingungen");
DEFINE("_EZREALTY_CONFIG_TERMSDESC","Publizieren Sie Ihre AGB für die Einträge.");

DEFINE("_EZREALTY_CONFIG_IMG1","Bilder");
DEFINE("_EZREALTY_CONFIG_IMG2","Bild-Einstellungen");
DEFINE("_EZREALTY_CONFIG_BIZ1","Geschäft");
DEFINE("_EZREALTY_CONFIG_BIZ2","Geschäfts-Einstellungen");
DEFINE("_EZREALTY_CONFIG_LAY1","Layout");
DEFINE("_EZREALTY_CONFIG_LAY2","Seiten-Layout");
DEFINE("_EZREALTY_CONFIG_MEM1","Mitglieder");
DEFINE("_EZREALTY_CONFIG_MEM2","Mitglieder-Verkäufe");
DEFINE("_EZREALTY_CONFIG_PAID1","Bezahlte Einträge");
DEFINE("_EZREALTY_CONFIG_CUST1","Kunde");


DEFINE("_EZREALTY_CONFIG_PP","Ihre PayPal Einstellungen für bezahlte Einträge");

DEFINE("_EZREALTY_CONFIG_PAIDLISTINGS","Bezahlte Einträge");
DEFINE("_EZREALTY_CONFIG_PAIDLISTINGSDESC","Möchten Sie bezahlte Immobilien-Einträge auf Ihrer WebSite anbieten? Bezahlte Einträge erlauben den Mitgliedern, zusätzliche Bilder und Informationen in ihren Eintrag einzugeben.");
DEFINE("_EZREALTY_CONFIG_PPEMAIL","PayPal eMail Adresse");
DEFINE("_EZREALTY_CONFIG_PPEMAILDESC","Dies muss Ihre primäre Paypal Adresse sein.<br /><br />Besuchen Sie 
<a target='_blank' href='http://paypaltech.com/Stephen/affiliate/hemail.htm'>PayPal Tech Resources</a>
um eine einfache Methode kennenzulernen um Ihre Paypal Email zu verschlüsseln, um sich for Spam zu schützen.Dann fügen Sie den Paypal Code in das Feld ein. BENUTZEN SIE DIESEN CODE NICHT für Ihre überprüfte Email-Adresse. Diese muss unten im richtigen Format eingegeben werden.");
DEFINE("_EZREALTY_CONFIG_CHECKMAIL","Überprüfte eMail Adresse");
DEFINE("_EZREALTY_CONFIG_CHECKMAILDESC","Wiederholen Sie Ihre PRIMÄRE PayPal eMail Adresse hier. Sie wird verwendet, um die Transaktionen über Formulare mit Ihrer PayPal eMail Adresse zu überprüfen und gegen Betrug zu schützen. Diese eMail Adresse DARF NICHT verschlüsselt sein!!");
DEFINE("_EZREALTY_CONFIG_PPCURRENCY","Währungs Code");
DEFINE("_EZREALTY_CONFIG_PPCURRENCYDESC","Dies muss der 3-buchstaben PayPal Währungs Code für Ihre PRIMÄRE PayPal Währung sein - KEINE von IHNEN erdachte.");
DEFINE("_EZREALTY_CONFIG_PPBUTTON","Button Grafik");
DEFINE("_EZREALTY_CONFIG_PPBUTTONDESC","Name der Button Grafik um Einträge im Front-End zu aktualisieren. Die Button Grafik muss in den Front-End Bilder-Ordner geladen werden.");

DEFINE("_EZREALTY_CONFIG_PPPREMIUM","Standard Upgrade Name");
DEFINE("_EZREALTY_CONFIG_PPPREMIUMDESC","Wie möchten Sie Ihre Eintrag-Erweiterungen (Upgrades) nennen - z.B. Premium/Erweiterter Eintrag usw. Diese Bezeichnung erscheint im Button Code und in den PayPal Transaktions- (Bezahl-) Berichten.");
DEFINE("_EZREALTY_CONFIG_PPCOST","Standard Upgrade Kosten");
DEFINE("_EZREALTY_CONFIG_PPCOSTDESC","Die Kosten für das Upgrade von einem FREIEN Immobilien Eintrag zu einem BEZAHLTEN Eintrag.");
DEFINE("_EZREALTY_CONFIG_FPNAME","Spezial-Eintrag Upgrade Name");
DEFINE("_EZREALTY_CONFIG_FPNAMEDESC","Wie möchten Sie Ihre Spezial-Eintrag Upgrades nennen - z.B. Spezial-Eintrag (Sonder-Eintrag/Besonderes). Diese Bezeichnung erscheint im Button Code und in den PayPal Transaktions- (Bezahl-) Berichten.");
DEFINE("_EZREALTY_CONFIG_FPCOST","Spezial-Eintrag Upgrade Kosten");
DEFINE("_EZREALTY_CONFIG_FPCOSTDESC","Die Kosten für das Upgrade von einem bezahlten Immobilien-Eintrag zu einem Spezial-Eintrag. Denken Sie daran - die Mitglieder können nicht direkt von einem FREIEN Eintrag upgraden - sie müssen erst zu einem Standard Upgrade Eintrag upgraden.");

DEFINE("_EZREALTY_CONFIG_PPPOSTMODE","Übertragungs Modus");
DEFINE("_EZREALTY_CONFIG_PPPOSTMODEDESC","Stellen Sie auf 'Live Verkäufe' um echte Upgrades über das PayPal System zu verkaufen, oder testen Sie Ihre Installation/Konfiguration durch 'Test Verkäufe' über die PayPal Entwickler-Netzwerk Sandbox (engl. PayPal Developers Network Sandbox).");
DEFINE("_EZREALTY_CONFIG_LS","Live Verkäufe");
DEFINE("_EZREALTY_CONFIG_TS","Test Verkäufe");

DEFINE("_EZREALTY_CONFIG_SUCCESS","Erfolg Seite");
DEFINE("_EZREALTY_CONFIG_SUCCESSDESC","Geben Sie Ihren Text für eine erfolgreiche PayPal Transaktion ein (erscheint auf der 'erfolgreiche Transaktion' Seite).");
DEFINE("_EZREALTY_CONFIG_CANCEL","Annulierungs Seite");
DEFINE("_EZREALTY_CONFIG_CANCELDESC","Geben Sie Ihren Text für eine stornierte/nicht erfolgreiche PayPal Transaktion ein (erscheint auf der 'nicht erfolgreich Transaktion' Seite).");

DEFINE("_EZREALTY_CONFIG_YES","Ja");
DEFINE("_EZREALTY_CONFIG_NO","Nein");

DEFINE("_EZREALTY_CONFIG_CONFIGSAVED","Einstellungen gespeichert");

// Miscellaneous administration area language tags - error notices and dropdown list boxes

DEFINE("_EZREALTY_ADMIN_BACK","Zurück zum Immobilien Management");
DEFINE("_EZREALTY_ADMIN_SOURCEERROR","FEHLER: Quelldatei nicht gefunden!");

// admin.ezrealty.html.php language tags

// Manage property listings page

DEFINE("_EZREALTY_LISTINGS_TITLE","Verwalte Immobilien-Einträge");
DEFINE("_EZREALTY_LISTINGS_DISPLAYNUM","Anzeige #");
DEFINE("_EZREALTY_LISTINGS_SEARCHPROP","Suche");
DEFINE("_EZREALTY_LISTINGS_FILTER","Filter nach:-");
DEFINE("_EZREALTY_LISTINGS_SORTLOCALL","-Alle Orte-");
DEFINE("_EZREALTY_LISTINGS_SORTTYPEALL","-Alle Immobilien Typen-");
DEFINE("_EZREALTY_LISTINGS_SORTPRICEALL","-Alle Preis Angaben-");
DEFINE("_EZREALTY_LISTINGS_PROPID","Makler ID#");
DEFINE("_EZREALTY_LISTINGS_PROPNAME","Adresse");
DEFINE("_EZREALTY_LISTINGS_PROPCAT","Immobilien Typ");
DEFINE("_EZREALTY_LISTINGS_PROPPRICE","Preise");
DEFINE("_EZREALTY_LISTINGS_PROPHITS","Hits");
DEFINE("_EZREALTY_LISTINGS_PUBSTATUS","Veröffentlicht");
DEFINE("_EZREALTY_LISTINGS_MARKETSTATUS","Verkauft?");
DEFINE("_EZREALTY_LISTINGS_APPROVEDSTATUS","Überprüft");
DEFINE("_EZREALTY_LISTINGS_LTYPE","Typ");
DEFINE("_EZREALTY_LISTINGS_AGENT","Makler");
DEFINE("_EZREALTY_LISTINGS_LISTINGDATE","Eintrags- Datum");
DEFINE("_EZREALTY_LISTINGS_UPDATE","Neuestes Update");
DEFINE("_EZREALTY_LISTINGS_EDIT","Editiere Immobilie");
DEFINE("_EZREALTY_LISTINGS_APPROVED","Überprüft");
DEFINE("_EZREALTY_LISTINGS_SELLER","Verkäufer");

// Add/edit property details page

DEFINE("_EZREALTY_LISTINGS_SELLER_EXPL","<strong><font color='#FF0000'>Lese Mich!</font></strong><br /><br />Verkäufer Details werden dazu verwendet, um zukünftigen (möglichen) Käufern im Front-End zu ermöglichen, direkt mehr Informationen anzufordern oder eine Immobilien-Besichtigung zu vereinbaren. Falls Sie Ihren Mitgliedern erlauben, eigene Immobilien auf Ihrer Seite zu verkaufen, sind diese verpflichtet, die Verkäufer Details komplett auszufüllen. Falls Sie zukünftigen Käufern lieber erlauben wollen, anstelle von Ihren Mitgliedern Sie selbst zu kontaktieren - lassen Sie diesen Bereich leer. Dann erscheint der normale \"Vereinbare Besichtigung\" eMail-Link direkt zu Ihnen, wenn Sie es so konfiguriert haben.");

DEFINE("_EZREALTY_DETAILS_REQ","*Obligatorisch");
DEFINE("_EZREALTY_DETAILS_OPT","*Optional");
DEFINE("_EZREALTY_DETAILS_TITLE","Immobilien Eintrag");
DEFINE("_EZREALTY_DETAILS_MARKET","Markt Status");
DEFINE("_EZREALTY_DETAILS_SOLDDESC"," - Diese Einstellung erlaubt Ihnen, den Markt Status eines Immobilien Eintrags anzuzeigen - der Standardwert ist 'nicht verkauft'.");
DEFINE("_EZREALTY_DETAILS_SELMARKET","Wähle Markt Status");
DEFINE("_EZREALTY_DETAILS_SELLOC","Wähle Ort");
DEFINE("_EZREALTY_DETAILS_SELSTATE","Wähle Bundesland");
DEFINE("_EZREALTY_DETAILS_SELCOUNTRY","Wähle Staat/Land");
DEFINE("_EZREALTY_DETAILS_SELCAT","Wähle Immobilien Kategorie");
DEFINE("_EZREALTY_DETAILS_SELPRICE","Wähle Preis Bereich");
DEFINE("_EZREALTY_DETAILS_SELROOM","Immobilie hat keine Schlafzimmer");
DEFINE("_EZREALTY_DETAILS_LISTDATE","Eintrag Datum");
DEFINE("_EZREALTY_DETAILS_LISTDATEDESC","Immobilien Datum war für Vekauf gelistet.");
DEFINE("_EZREALTY_DETAILS_AGENTID","Eindeutige Makler ID Nummer");
DEFINE("_EZREALTY_DETAILS_AGENTIDDESC","Verwenden Sie dies, falls Sie eine eindeutige Nummer haben, um dieses Objekt (Immobilie) in Ihrem Büro, Geschäftsunterlagen usw. nachvollziehen zu können (Tracking)");
DEFINE("_EZREALTY_DETAILS_PROPADDRESS1","Straßen Adresse 1");
DEFINE("_EZREALTY_DETAILS_PROPCITY","Stadt/Dorf/Bezirk");
DEFINE("_EZREALTY_DETAILS_AREA","Bundesland/Kreis/Gemeinde");
DEFINE("_EZREALTY_DETAILS_COUNTRY","Staat/Land");
DEFINE("_EZREALTY_DETAILS_PROPPOSTCODE","Postleitzahl");
DEFINE("_EZREALTY_DETAILS_PROPTYPE","Immobilien Typ");
DEFINE("_EZREALTY_DETAILS_ADLINE","Kurzer eingängiger Verkaufsspruch");
DEFINE("_EZREALTY_DETAILS_PROPDESC","Komplette Immobilien Beschreibung");
DEFINE("_EZREALTY_DETAILS_SHORTDESC","Kurz Beschreibung:<br />(max. 255 Zeichen)");
DEFINE("_EZREALTY_DETAILS_PROPPRICE","Immobilien Preis");
DEFINE("_EZREALTY_DETAILS_LANDTYPE","Grundstück Typ/Größe");
DEFINE("_EZREALTY_DETAILS_LANDTYPEDESC","z.B. Freies Grundstück, Pacht, 1000qm usw.");
DEFINE("_EZREALTY_DETAILS_BEDROOMS","Schlafzimmer");
DEFINE("_EZREALTY_DETAILS_BEDROOMSDESC","Anzahl der Schlafzimmer, über die die Immobilie verfügt.");
DEFINE("_EZREALTY_DETAILS_BATHROOMS","Badezimmer");
DEFINE("_EZREALTY_DETAILS_BATHROOMSDESC","Anzahl der Schlafzimmer, über die die Immobilie verfügt.");
DEFINE("_EZREALTY_DETAILS_PARKING","Park-/Stellplätze");
DEFINE("_EZREALTY_DETAILS_PARKINGDESC","Anzahl der Park-/Stellplätze für Fahrzeuge");
DEFINE("_EZREALTY_DETAILS_MAPREF","Immobilien Map Referenz Link");
DEFINE("_EZREALTY_DETAILS_MAPREFDESC","Die URL für einen Map-/Landkartenservice für Ihre Immobilie, falls gewünscht.<br />Einen kostenlosen Map-Service finden Sie bei multimap.com und map24.de");
DEFINE("_EZREALTY_DETAILS_VTOUR","Virtuelle Tour Seiten Link");
DEFINE("_EZREALTY_DETAILS_VTOURDESC","Die URL zu dieser Immobilie als Virtuelle Tour, falls gewünscht.<br />Dieser Link öffnet ein neues Fenster im Browser.");
DEFINE("_EZREALTY_DETAILS_SAVED","Immobilien Details gespeichert");

DEFINE("_EZREALTY_VLDET_IMAGE1","Bild 01");
DEFINE("_EZREALTY_VLDET_IMAGE2","Bild 02");
DEFINE("_EZREALTY_VLDET_IMAGE3","Bild 03");
DEFINE("_EZREALTY_VLDET_IMAGE4","Bild 04");
DEFINE("_EZREALTY_VLDET_IMAGE5","Bild 05");
DEFINE("_EZREALTY_VLDET_IMAGE6","Bild 06");
DEFINE("_EZREALTY_VLDET_IMAGE7","Bild 07");
DEFINE("_EZREALTY_VLDET_IMAGE8","Bild 08");
DEFINE("_EZREALTY_VLDET_IMAGE9","Bild 09");
DEFINE("_EZREALTY_VLDET_IMAGE10","Bild 10");
DEFINE("_EZREALTY_VLDET_IMAGE11","Bild 11");
DEFINE("_EZREALTY_VLDET_IMAGE12","Bild 12");

DEFINE("_EZREALTY_VLDET_CURRENTIMG","Aktuelles Bild");
DEFINE("_EZREALTY_VLDET_CHOOSENEW","Wähle Neues Bild");
DEFINE("_EZREALTY_VLDET_UPLOADNEW","Upload Neues Bild");
DEFINE("_EZREALTY_VLDET_DELETEIMG","Lösche Bild");
DEFINE("_EZREALTY_VLDET_DELETE","Löschen");
DEFINE("_EZREALTY_VLDET_OPENFULLSIZE","Öffne Bild in Originalgröße");
DEFINE("_EZREALTY_VLDET_TNPREV","Thumbnail Vorschau");

DEFINE("_EZREALTY_DETAILS_CTOWN","Nächster Ort");
DEFINE("_EZREALTY_DETAILS_CTPORT","Nächste Verkehrsanbindung");
DEFINE("_EZREALTY_DETAILS_ADDFEATURES","Zusätzliche Immobilien Besonderheiten");
DEFINE("_EZREALTY_DETAILS_AGE","Alter der Immobilie");
DEFINE("_EZREALTY_DETAILS_OHOUSE","Ist eine Besichtigung möglich?");
DEFINE("_EZREALTY_DETAILS_OHOUSEDET","Besichtigungs-Details:<br />Falls es für diese Immobilie eine Besichtigung gibt, geben Sie hier bitte Datum, Uhrzeit usw. an.");

DEFINE("_EZREALTY_DETAILS_APPR","Immobilien-Eintrag freigeben");
DEFINE("_EZREALTY_DETAILS_PUBL","Veröffentliche Immobilien-Eintrag");
DEFINE("_EZREALTY_DETAILS_LISTSTATUS","Eintrag-Typ");
DEFINE("_EZREALTY_DETAILS_FREESTATUS","Freier Eintrag");
DEFINE("_EZREALTY_DETAILS_LISTPREMIUM","Auf Spezial stellen");

DEFINE("_EZREALTY_DETAILS_ERROR1","Immobilie benötigt eine Adresse");
DEFINE("_EZREALTY_DETAILS_ERROR2","Immobilie benötigt eine Stadt, Ort, Gemeinde");
DEFINE("_EZREALTY_DETAILS_ERROR3","Sie müssen ein Bundesland wählen");
DEFINE("_EZREALTY_DETAILS_ERROR4","Sie müssen einen Staat/Land wählen");
DEFINE("_EZREALTY_DETAILS_ERROR5","Immobilie benötigt eine Postleitzahl");
DEFINE("_EZREALTY_DETAILS_ERROR6","Sie müssen einen Immobilien Typ wählen");
DEFINE("_EZREALTY_DETAILS_ERROR7","Immobilie benötigt Angabe der/des Schlafzimmer(s)");
DEFINE("_EZREALTY_DETAILS_ERROR8","Sie müssen einen Immobilien Preis eingeben");
DEFINE("_EZREALTY_DETAILS_ERROR9","Sie müssen die Preis-Bereich Suchparameter wählen");
DEFINE("_EZREALTY_DETAILS_ERROR10","Sie müssen ein kurzes, eingängiges Verkaufsargument eingeben, da die Standard-Templates diesen Wert verwenden/anzeigen.");
DEFINE("_EZREALTY_DETAILS_ERROR11","Sie müssen eine kurze Beschreibung eingeben, da die Standard-Templates diesen Wert verwenden/anzeigen.");
DEFINE("_EZREALTY_DETAILS_ERROR12","Sie benötigen mindestens 1 Bild für Ihren Immobilien-Eintrag.");

DEFINE("_EZREALTY_DETAILS_TAB1A","Adresse");
DEFINE("_EZREALTY_DETAILS_TAB1B","Immobilien-Adresse");
DEFINE("_EZREALTY_DETAILS_TAB2A","Besonderheiten");
DEFINE("_EZREALTY_DETAILS_TAB2B","Immobilien-Besonderheiten");
DEFINE("_EZREALTY_DETAILS_TAB3A","Marketing");
DEFINE("_EZREALTY_DETAILS_TAB3B","Marketing-Information");
DEFINE("_EZREALTY_DETAILS_TAB4A","Bilder");
DEFINE("_EZREALTY_DETAILS_TAB4B","Immobilien-Bilder");
DEFINE("_EZREALTY_DETAILS_TAB5A","Verkäufer");
DEFINE("_EZREALTY_DETAILS_TAB5B","Verkäufer-Details");
DEFINE("_EZREALTY_DETAILS_TAB6A","Administrator");
DEFINE("_EZREALTY_DETAILS_TAB6B","Administrations-Bearbeitung");

DEFINE("_EZREALTY_DETAILS_MARKET2","Angebot/Nicht Verkauft");
DEFINE("_EZREALTY_DETAILS_MARKET3","Vertraglich gebunden");
DEFINE("_EZREALTY_DETAILS_MARKET4","Unter Vertrag");
DEFINE("_EZREALTY_DETAILS_MARKET5","Verkauft");

DEFINE("_EZREALTY_DETAILS_SOURCE1","Suchmaschine");
DEFINE("_EZREALTY_DETAILS_SOURCE2","Web Site");
DEFINE("_EZREALTY_DETAILS_SOURCE3","Empfehlung");
DEFINE("_EZREALTY_DETAILS_SOURCE4","Immobilien-Netzwerk");
DEFINE("_EZREALTY_DETAILS_SOURCE5","Bitte wählen");

// Manage property price range page

DEFINE("_EZREALTY_PRICES_DISPLAYNUM","Anzeige #");
DEFINE("_EZREALTY_PRICES_SEARCHCOM","Suche");
DEFINE("_EZREALTY_PRICES_PUBSTATUS","Veröffentlicht");
DEFINE("_EZREALTY_PRICES_REORDER","Neu Sortieren");
DEFINE("_EZREALTY_MODPRICES_ADD","Hinzufügen");
DEFINE("_EZREALTY_MODPRICES_EDIT","Bearbeiten");
DEFINE("_EZREALTY_MODPRICES_ORDER","Sortieren");

// Manage property city/town/suburbs

DEFINE("_EZREALTY_LOCALITIES_TITLE","Manage 'Stadt/Ort/Bezirk' Such/Auswahl-Liste");
DEFINE("_EZREALTY_LOCALITIES_DISPLAYNUM","Anzeige #");
DEFINE("_EZREALTY_LOCALITIES_LOC","Stadt/Ort/Bezirk Name");
DEFINE("_EZREALTY_LOCALITIES_PUBSTATUS","Veröffentlicht");
DEFINE("_EZREALTY_LOCALITIES_REORDER","Neu Sortieren");
DEFINE("_EZREALTY_MODLOC_TITLE","'Stadt/Ort/Bezirk' Such/Auswahl-Begriff");
DEFINE("_EZREALTY_MODLOC_ADD","Hinzufügen");
DEFINE("_EZREALTY_MODLOC_EDIT","Bearbeiten");
DEFINE("_EZREALTY_MODLOC_LOC","Ortsname (Stadt, Ort oder Bezirk usw.)");
DEFINE("_EZREALTY_MODLOC_ORDER","Sortieren");
DEFINE("_EZREALTY_MODLOC_SAVED","Ort Details Gespeichert");
DEFINE("_EZREALTY_MODLOC_ERROR1","Sie müssen den Name für Stadt, Ort, Bezirk usw. eingeben.");
DEFINE("_EZREALTY_LOCALITIES_EDITTAG","Bearbeite Immobilien Ortsangaben");

// Manage property states/regional areas

DEFINE("_EZREALTY_STATE_TITLE","Manage 'Bundesland/Gemeinde' Such/Auswahl-Liste");
DEFINE("_EZREALTY_STATE_DISPLAYNUM","Anzeige #");
DEFINE("_EZREALTY_STATE_LOC","Bundesland/Gemeinde Name");
DEFINE("_EZREALTY_STATE_PUBSTATUS","Veröffentlicht");
DEFINE("_EZREALTY_STATE_REORDER","Neu Sortieren");
DEFINE("_EZREALTY_STATE_TITLE2","'Bundesland/Gemeinde' Such/Auswahl-Begriff");
DEFINE("_EZREALTY_STATE_ADD","Hinzufügen");
DEFINE("_EZREALTY_STATE_EDIT","Bearbeiten");
DEFINE("_EZREALTY_STATE_ORDER","Sortieren");
DEFINE("_EZREALTY_STATE_SAVED","Bundesland/Gemeinde Details gespeichert");
DEFINE("_EZREALTY_STATE_ERROR1","Sie müssen den Name für Bundesland/Gemeinde eingeben.");
DEFINE("_EZREALTY_STATE_EDITTAG","Bearbeite Bundesland/Gemeinde");

// Manage property country areas

DEFINE("_EZREALTY_COUNTRY_TITLE","Manage 'Staat/Land' Such/Auswahl-Liste");
DEFINE("_EZREALTY_COUNTRY_DISPLAYNUM","Anzeige #");
DEFINE("_EZREALTY_COUNTRY_LOC","Staat/Land Name");
DEFINE("_EZREALTY_COUNTRY_PUBSTATUS","Veröffentlicht");
DEFINE("_EZREALTY_COUNTRY_REORDER","Neu Sortieren");
DEFINE("_EZREALTY_COUNTRY_TITLE2","'Staat/Land' Such/Auswahl-Begriff");
DEFINE("_EZREALTY_COUNTRY_ADD","Hinzufügen");
DEFINE("_EZREALTY_COUNTRY_EDIT","Bearbeiten");
DEFINE("_EZREALTY_COUNTRY_ORDER","Sortieren");
DEFINE("_EZREALTY_COUNTRY_SAVED","Staat/Land Details gespeichert");
DEFINE("_EZREALTY_COUNTRY_ERROR1","Sie müssen den Name für Staat/Land eingeben.");
DEFINE("_EZREALTY_COUNTRY_EDITTAG","Bearbeite Staat/Land");

// Manage bedroom numbers

DEFINE("_EZREALTY_ROOMS_TITLE","Manage 'Anzahl Schlafzimmer' Such/Auswahl-Liste");
DEFINE("_EZREALTY_ROOMS_DISPLAYNUM","Anzeige #");
DEFINE("_EZREALTY_ROOMS_LOC","Anzahl Schlafzimmer");
DEFINE("_EZREALTY_ROOMS_PUBSTATUS","Veröffentlicht");
DEFINE("_EZREALTY_ROOMS_REORDER","Neu Sortieren");
DEFINE("_EZREALTY_ROOMS_TITLE2","'Anzahl Schlafzimmer' Such/Auswahl-Begriff");
DEFINE("_EZREALTY_ROOMS_ADD","Hinzufügen");
DEFINE("_EZREALTY_ROOMS_EDIT","Bearbeiten");
DEFINE("_EZREALTY_ROOMS_ORDER","Sortieren");
DEFINE("_EZREALTY_ROOMS_SAVED","Anzahl Schlafzimmer gespeichert");
DEFINE("_EZREALTY_ROOMS_ERROR1","Sie müssen die Anzahl der Schlafzimmer eingeben");
DEFINE("_EZREALTY_ROOMS_EDITTAG","Bearbeite Anzahl Schlafzimmer");

// Manage leads list

DEFINE("_EZREALTY_LEADS_TITLE","Manage Interessenten Liste");
DEFINE("_EZREALTY_LEADS_DISPLAYNUM","Anzeige #");
DEFINE("_EZREALTY_LEADS_AR","Datum hinzufügen/erneuern");
DEFINE("_EZREALTY_LEADS_LCONTACT","Kontakt Details");
DEFINE("_EZREALTY_LEADS_LNAME","Name");
DEFINE("_EZREALTY_LEADS_LEMAIL","eMail");
DEFINE("_EZREALTY_LEADS_LLOC","Gewünschter Ort");
DEFINE("_EZREALTY_LEADS_EDITTAG","Interessenten Details hinzufügen/erneuern");
DEFINE("_EZREALTY_LEADS_ADD","Hinzufügen");
DEFINE("_EZREALTY_LEADS_EDIT","Bearbeiten");
DEFINE("_EZREALTY_LEADS_TITLE2","Kauf-Interessenten Details");
DEFINE("_EZREALTY_LEADS_FMATCH","Finde Immobilien Übereinstimmung");

DEFINE("_EZREALTY_LEADS_HPHONE","Telefon Privat");
DEFINE("_EZREALTY_LEADS_WPHONE","Telefon Geschäft");
DEFINE("_EZREALTY_LEADS_MOBILE","Telefon Mobil");
DEFINE("_EZREALTY_LEADS_FAX","Fax");
DEFINE("_EZREALTY_LEADS_SOURCE","Wie haben Sie uns gefunden");
DEFINE("_EZREALTY_LEADS_COMMENTS","Kommentare");
DEFINE("_EZREALTY_LEADS_DETAILS","Immobilien Details");
DEFINE("_EZREALTY_LEADS_BUDGET","Kauf-Etat");

DEFINE("_EZREALTY_LEADS_SAVED","Kauf-Interessenten Details gespeichert");

DEFINE("_EZREALTY_LEADS_ERROR1","Sie müssen einen Namen eingeben");

DEFINE("_EZREALTY_LEADS_ERROR2","Sie müssen eine eMail-Adresse eingeben");
DEFINE("_EZREALTY_LEADS_ERROR3","Sie müssen einen Immobilien-Typ eingeben");
DEFINE("_EZREALTY_LEADS_ERROR4","Sie müssen einen Preis-Bereich eingeben");
DEFINE("_EZREALTY_LEADS_ERROR5","Sie müssen Stadt/Ort/Bezirk eingeben");
DEFINE("_EZREALTY_LEADS_ERROR6","Sie müssen die Anzahl der Schlafzimmer eingeben");

// Manage property-type categories

DEFINE("_EZREALTY_CATEGORY_PAGETITLE","Immobilien Kategorie Manager");
DEFINE("_EZREALTY_CATEGORY_DISPLAYNUM","Anzeige #");
DEFINE("_EZREALTY_CATEGORY_SEARCHCAT","Suche");
DEFINE("_EZREALTY_CATEGORY_CATNAME","Kategorie");
DEFINE("_EZREALTY_CATEGORY_PUBSTATUS","Veröffentlicht");
DEFINE("_EZREALTY_CATEGORY_ACCLEVEL","Zugriff");
DEFINE("_EZREALTY_CATEGORY_REORDER","Sortieren");
DEFINE("_EZREALTY_CATEGORY_MAIN","Immobilien Kategorie");
DEFINE("_EZREALTY_CATEGORY_ADD","Hinzufügen");
DEFINE("_EZREALTY_CATEGORY_EDIT","Bearbeiten");
DEFINE("_EZREALTY_CATEGORY_DEFTITLE","Titel");
DEFINE("_EZREALTY_CATEGORY_DEFCONTENT","Beschreibung");
DEFINE("_EZREALTY_CATEGORY_DEFACCESS","zugriff");
DEFINE("_EZREALTY_CATEGORY_DEFORDER","Sortieren");
DEFINE("_EZREALTY_CATEGORY_IMAGE","Kategorie Bild");
DEFINE("_EZREALTY_CATEGORY_IMAGESEL","Kategorie Bild-Wähler");
DEFINE("_EZREALTY_CATEGORY_SAVED","Immobilien Kategorie Details gespeichert");
DEFINE("_EZREALTY_CATEGORY_ERROR1","Kategorie muss einen Titel haben");
DEFINE("_EZREALTY_CATEGORY_EDITTAG","Bearbeite Immobilien Kategorie");

// Manage property-type categories

DEFINE("_EZREALTY_MARKET_PAGETITLE","Manage Markt Status Notizen");
DEFINE("_EZREALTY_MARKET_DISPLAYNUM","anzeige #");
DEFINE("_EZREALTY_MARKET_STATUS","Markt Status");
DEFINE("_EZREALTY_MARKET_PUBSTATUS","Veröffentlicht");
DEFINE("_EZREALTY_MARKET_REORDER","Sortieren");
DEFINE("_EZREALTY_MARKET_MAIN","Markt Status Notiz");
DEFINE("_EZREALTY_MARKET_ADD","Hinzufügen");
DEFINE("_EZREALTY_MARKET_EDIT","Bearbeiten");
DEFINE("_EZREALTY_MARKET_DEFNAME","Name");
DEFINE("_EZREALTY_MARKET_DEFORDER","Sortieren");
DEFINE("_EZREALTY_MARKET_SAVED","Markt Status Notiz Details gespeichert");
DEFINE("_EZREALTY_MARKET_ERROR1","Markt Status Notiz muss einen Namen haben");

// General error messages

DEFINE("_EZREALTY_GENERAL_ERROR1","Wählen Sie einen Begriff ");
DEFINE("_EZREALTY_CONFIG_ERROR","Konfigurations Datei nicht beschreibbar! Bitte stellen Sie die Dateirechte richtig ein (z.B. per FTP) und versuchen es noch einmal.");

// Miscellaneous language tags for hyperlinks and image tags

DEFINE("_EZREALTY_GENERAL_PUBLISHED","Veröffentlicht");
DEFINE("_EZREALTY_GENERAL_UNPUBLISHED","Unveröffentlicht");
DEFINE("_EZREALTY_GENERAL_APPROVED","Überprüft");
DEFINE("_EZREALTY_GENERAL_UNAPPROVED","Nicht Überprüft");
DEFINE("_EZREALTY_GENERAL_CHECKOUT","Entfernt");
DEFINE("_EZREALTY_GENERAL_RETURN","Zurück zu Immobilien-Manager");
DEFINE("_EZREALTY_GENERAL_UP","Nach oben");
DEFINE("_EZREALTY_GENERAL_DOWN","Nach unten");
DEFINE("_EZREALTY_GENERAL_EDITPROP","Bearbeite Immobilie");
DEFINE("_EZREALTY_GENERAL_SOLD","Verkauft");
DEFINE("_EZREALTY_GENERAL_CONTRACT","Unter Vertrag");

DEFINE("_EZREALTY_GENERIC_ADD","Hinzufügen");
DEFINE("_EZREALTY_GENERIC_EDIT","Bearbeiten");

//////////////////// FRONT END FILE LANGUAGE TAGS ///////////////////////

// includes.ezrealty.php file

DEFINE("_EZREALTY_HOME","Home");

// ezrealty.php file

DEFINE("_EZREALTY_BACK","Zurück");
DEFINE("_EZREALTY_INCLUDES_HOME","Home");
DEFINE("_EZREALTY_INCLUDES_SEARCH","Suche");
DEFINE("_EZREALTY_INCLUDES_NEW","Neu");
DEFINE("_EZREALTY_CATEGORIES","Property Types");
DEFINE("_EZREALTY_PROPERTIES","Immobilien");
DEFINE("_EZREALTY_PROPERTY","Immobilie");
DEFINE("_EZREALTY_INCLUDES_RSSOH","Besichtigungs-Eintrag");
DEFINE("_EZREALTY_INCLUDES_POSTMAIL","Danke - sie können dieses Fenster nun schliessen.");

// category display

DEFINE("_EZREALTY_PAGES","Seiten");
DEFINE("_EZREALTY_PREV","Zuvor");
DEFINE("_EZREALTY_NEXT","Nächstes");
DEFINE("_EZREALTY_READMORE","Weiterlesen");
DEFINE("_EZREALTY_VIEWPROP","Zeige Immobilien");

// send to friend and arrange viewing forms

DEFINE("_EZREALTY_INVITE_VIEW_PROP","hat Sie eingeladen, um eine zum Verkauf anstehende Immobilie anzusehen. Bitte benützen Sie zur Besichtigung den Link unten.");
DEFINE("_EZREALTY_RECCOMEND_PROP_FROM_FREND","Eine von Ihrem Bekannten empfohlene Immobilie");
DEFINE("_EZREALTY_FROM","Von");
DEFINE("_EZREALTY_REPLYTO","Rückantwort");
DEFINE("_EZREALTY_MAIL_SENT","Danke! Ihre Immobilien-Empfehlung wurde gesendet...");
DEFINE("_EZREALTY_MAIL_VIEWINGSENT","Danke! Ihre Anfrage für eine Immobilien-Besichtigung wurde gesendet...");
DEFINE("_EZREALTY_INSPECTION"," Immobilien Besichtigungs Anfrage");
DEFINE("_EZREALTY_TELEPHONE","Kontakt Telefon:-");
DEFINE("_EZREALTY_DATETIME","Bevorzugtes Datum und Uhrzeit:-");
DEFINE("_EZREALTY_REQUEST_MAILINGLIST","wäre(n) gerne in Ihrer Mailing-Liste eingetragen. Bitte benützen Sie den Link unten, um die vom Interessenten betrachteten Immobilien anzuzeigen. Das könnte Ihnen helfen, die Interessen des Antragstellers herauszufinden.");
DEFINE("_EZREALTY_PROPERTY_INTERESTS","Dieser Besucher ist an folgenden Immobilien-Typen interessiert:-");
DEFINE("_EZREALTY_MAILING_TITLE"," Zur Mailing-Liste hinzufügen Anfrage");
DEFINE("_EZREALTY_MAILINGLIST_SENT","Danke! Ihre Anfrage, in unserer Mailing-Liste aufgenommen zu werden, wurde gesendet...");
DEFINE("_EZREALTY_AGENTIDREF","Makler ID Immobilien Referenz Nummer:-");

// viewdetails.ezrealty.php file

DEFINE("_EZREALTY_VIEWDET_NAME_EMAIL","Bitte vervollständigen Sie alle Felder im Formular!");
DEFINE("_EZREALTY_VIEWDET_NOVIEW","Tut uns leid, diese Besonderheit ist momentan nicht verfügbar.");
DEFINE("_EZREALTY_PROPGONE","Die Immobilie, nach der Sie sehen wollen, existiert bei uns nicht mehr oder ist in den Einträgen noch nicht veröffentlicht!");
DEFINE("_EZREALTY_VIEWDET_PROPDET","Immobilien Details");
DEFINE("_EZREALTY_VIEWDET_MAP","Zeige Map");
DEFINE("_EZREALTY_VIEWDET_TOUR","Tour");
DEFINE("_EZREALTY_VIEWDET_VTOUR","Machen sie eine virtuelle Tour");
DEFINE("_EZREALTY_VIEWDET_PRINT","Diese Seite drucken");
DEFINE("_EZREALTY_VIEWDET_FAVS","Zu Favoriten hinzufügen");
DEFINE("_EZREALTY_VIEWDET_VIEWING","Besichtigung vereinbaren");
DEFINE("_EZREALTY_VIEWDET_VNAME","Ihr Name");
DEFINE("_EZREALTY_VIEWDET_VMAIL","Ihre eMail");
DEFINE("_EZREALTY_VIEWDET_VPHONE","Ihr Telefon");
DEFINE("_EZREALTY_VIEWDET_VTIME","Bevorzugtes Datum und Zeit");
DEFINE("_EZREALTY_VIEWDET_SEND","Senden");
DEFINE("_EZREALTY_VIEWDET_SEND_FRIEND","Weiter empfehlen");
DEFINE("_EZREALTY_VIEWDET_YOUR_NAME","Ihr Name");
DEFINE("_EZREALTY_VIEWDET_YOUR_MAIL","Ihre eMail");
DEFINE("_EZREALTY_VIEWDET_FRIENDS_NAME","Name Ihres Bekannten");
DEFINE("_EZREALTY_VIEWDET_FRIENDS_MAIL","eMail Ihres Bekannten");
DEFINE("_EZREALTY_VIEWDET_APPROX","ungefähr");
DEFINE("_EZREALTY_VIEWDET_LINKS","Kunden Links");
DEFINE("_EZREALTY_VIEWDET_FPLANS","Grundstücks-Pläne");
DEFINE("_EZREALTY_VIEWDET_MAILING","Nutzen Sie unsere Mailing Liste");
DEFINE("_EZREALTY_VIEWDET_MAILING_SPEIL","Die Immobilien-Einträge werden ständig aktualisiert. Bleiben Sie informiert!");
DEFINE("_EZREALTY_VIEWDET_INTERESTS","Ich bin an folgenden Immobilien-Typen interessiert");
DEFINE("_EZREALTY_VIEWDET_LOCALITY","Ort");
DEFINE("_EZREALTY_VIEWDET_LAND","Grundstück-Typ");
DEFINE("_EZREALTY_VIEWDET_BEDROOM","Schlafzimmer");
DEFINE("_EZREALTY_VIEWDET_BEDROOMS","Schlafzimmer");
DEFINE("_EZREALTY_VIEWDET_BATHROOM","Badezimmer");
DEFINE("_EZREALTY_VIEWDET_BATHROOMS","Badezimmer");
DEFINE("_EZREALTY_VIEWDET_PARKING","Parkplatz für");
DEFINE("_EZREALTY_VIEWDET_PARKING2","Parkplatz");
DEFINE("_EZREALTY_VIEWDET_GALLERY","Bilder Galerie");
DEFINE("_EZREALTY_VIEWDET_SOLD","Verkauft");
DEFINE("_EZREALTY_VIEWDET_CONTRACT","Unter Vertrag");
DEFINE("_EZREALTY_VIEWDET_REGISTER","Registrierung");

DEFINE("_EZREALTY_VIEWDET_PRICE","Preis");
DEFINE("_EZREALTY_VIEWDET_EXTRA","Besonderheiten auf einen Blick");
DEFINE("_EZREALTY_VIEWDET_YES","Ja");
DEFINE("_EZREALTY_VIEWDET_NO","Nein");
DEFINE("_EZREALTY_VIEWDET_LOCATION","Ort");
DEFINE("_EZREALTY_VIEWDET_TOWN","Nächste Stadt");
DEFINE("_EZREALTY_VIEWDET_TPORT","Transport");
DEFINE("_EZREALTY_VIEWDET_AGE","Alter");

DEFINE("_EZREALTY_VIEWDET_PSELLERS","Verkäufer");
DEFINE("_EZREALTY_VIEWDET_SELLER","Verkäufer");
DEFINE("_EZREALTY_VIEWDET_SELLER_PHONE","Kontakt #");
DEFINE("_EZREALTY_VIEWDET_SELLER_ARRANGE","Zeige Immobilie");
DEFINE("_EZREALTY_VIEWDET_SELLER_VIEWING","Vereinbare Besichtigung direkt mit Verkäufer");

DEFINE("_EZREALTY_PIX_HOVER","Um das Bild zu wechseln, mit der Maus über die Thumbnails unten gleiten.");

// search.ezrealty.php file

DEFINE("_EZREALTY_SEARCHPRICE","Preis Bereich");
DEFINE("_EZREALTY_SEARCHPROPTYPE","Immobilien Typ");
DEFINE("_EZREALTY_SEARCHLOC","Ort");
DEFINE("_EZREALTY_SEARCHSUB","Bezirk");
DEFINE("_EZREALTY_SEARCHREG","Bundesland");
DEFINE("_EZREALTY_SEARCHCON","Staat");
DEFINE("_EZREALTY_SEARCHBRM","Schlafzimmer");
DEFINE("_EZREALTY_SEARCHORD","Auftrag");
DEFINE("_EZREALTY_SEARCHADV","Erweiterter Such Filter");
DEFINE("_EZREALTY_SEARCH_SEARCH","Suche");

DEFINE("_EZREALTY_SEARCH_ALCAT","Wähle alle Kategorien");
DEFINE("_EZREALTY_SEARCH_ALLOC","Wähle alle Orte");
DEFINE("_EZREALTY_SEARCH_ALSTA","Wähle alle Bundesländer");
DEFINE("_EZREALTY_SEARCH_ALCOU","Wähle alle Staaten");
DEFINE("_EZREALTY_SEARCH_MINPRI","Wähle Min. Preis");
DEFINE("_EZREALTY_SEARCH_MAXPRI","Wähle Max. Preis");
DEFINE("_EZREALTY_SEARCH_MINBED","Wähle Min. Schlafzimmer");
DEFINE("_EZREALTY_SEARCH_MAXBED","Wähle Max. Schlafzimmer");
DEFINE("_EZREALTY_SEARCH_ONLYAV","Nur verfügbare Immobilien");
DEFINE("_EZREALTY_SEARCH_PRIASC","Preis Aufsteigend");
DEFINE("_EZREALTY_SEARCH_PRIDESC","Preis Absteigend");
DEFINE("_EZREALTY_SEARCH_ASC","Datum Aufsteigend");
DEFINE("_EZREALTY_SEARCH_DESC","Datum Absteigend");

// results.ezrealty.php file

DEFINE("_EZREALTY_RESULTSL_SELECT","Bitte wählen Sie Ihre Such-Parameter!");
DEFINE("_EZREALTY_RESULTS_RESULTS","Ergebnisse:-");
DEFINE("_EZREALTY_RESULTS_NORESULTS","Tut uns leid - kein Ergebnis gefunden...");
DEFINE("_EZREALTY_RESULTS_NEW","Neueste");
DEFINE("_EZREALTY_RESULTS_NEWLISTINGS","Neue Immobilien Einträge");

// printdetails.ezrealty.php file

DEFINE("_EZREALTY_PRINT_ID","Immobilien ID");
DEFINE("_EZREALTY_PRINT_TELEPHONE","Telefon:");
DEFINE("_EZREALTY_PRINT_PRINT","Druck Anzeige");
DEFINE("_EZREALTY_PRINT_CLOSE","Schliesse Fenster");

// submit lead stuff

DEFINE("_EZREALTY_SUBLEAD_TITLE","Unverbindliche Immobilien Anfrage");
DEFINE("_EZREALTY_SUBLEAD_INTRO","Immobilien kommen ständig auf den Markt. Wenn Sie momentan nichts Passendes finden - registrieren Sie Ihre Anfrage doch einfach bei uns. Wir werden Sie umgehend informieren, sobald etwas Passendes für Sie verfügbar ist.");
DEFINE("_EZREALTY_SUBLEAD_THANKS","Danke - Ihre Immobilien-Anfrage wurde bei uns eingetragen.");
DEFINE("_EZREALTY_SUBLEAD_CONTACT","Ihre Kontakt Details");
DEFINE("_EZREALTY_SUBLEAD_NOTON","Tut uns leid - momentan können keine Immobilien Anfragen gemacht werden.");

DEFINE("_EZREALTY_LM_ERROR1","Bitte tragen Sie Ihren Namen ein");
DEFINE("_EZREALTY_LM_ERROR2","Bitte tragen Sie Ihre eMail-Adresse ein");
DEFINE("_EZREALTY_LM_ERROR3","Bitte wählen Sie eine Kategorie");
DEFINE("_EZREALTY_LM_ERROR4","Bitte wählen Sie einen Preis-Bereich");
DEFINE("_EZREALTY_LM_ERROR5","Bitte wählen sie eine Stadt/Ort/Bezirk");
DEFINE("_EZREALTY_LM_ERROR6","Bitte wählen Sie eine ungefähre Anzahl Schlafzimmer");

DEFINE("_EZREALTY_EMAIL_ERROR1","Bitte Ihren Name eintragen");
DEFINE("_EZREALTY_EMAIL_ERROR2","Bitte Ihre eMail-Adresse eintragen");
DEFINE("_EZREALTY_EMAIL_ERROR3","Bitte Ihr Kontakt-Telefon eintragen");
DEFINE("_EZREALTY_EMAIL_ERROR4","Bitte Ihre Frage(n) eintragen");
DEFINE("_EZREALTY_EMAIL_ERROR5","Bitte Name Ihres Bekannten eintragen");
DEFINE("_EZREALTY_EMAIL_ERROR6","Bitte eMail-Adresse Ihres Bekannten eintragen");
DEFINE("_EZREALTY_EMAIL_ERROR7","Bitte beschreiben Sie Ihre Vorstellung(en)");
DEFINE("_EZREALTY_EMAIL_ERROR8","Tut uns leid - dieses eMail-Feature ist momentan nicht verfügbar");
DEFINE("_EZREALTY_EMAIL_ERROR9","Bitte einen generellen Zeitrahmen für eine Besichtigung eintragen");

// front-end member stuff

DEFINE("_EZREALTY_LISTINGS_INTRO","Die folgende Anzahl an FREIEN Verkauf-Einträgen steht Ihnen zur Verfügung");
DEFINE("_EZREALTY_NOLISTINGS","Sie haben momentan keine Einträge");
DEFINE("_EZREALTY_ADDNEW","Neuen Eintrag hinzufügen");
DEFINE("_EZREALTY_SUBMIT_LISTING","Eintrag speichern");
DEFINE("_EZREALTY_NO_LOGIN","Tut uns leid - Sie müssen sich zuerst anmelden (Login)");
DEFINE("_EZREALTY_MAX_NUM","Tut uns leid - Sie haben die maximale Anzahl erreicht");
DEFINE("_EZREALTY_MAXNUM_LIST","Einträge");
DEFINE("_EZREALTY_YOUVEGOTMAIL","Neuer Immobilien Eintrag");
DEFINE("_EZREALTY_DONE","Bild(er) Upload und Immobilien-Eintrag erfolgreich!");
DEFINE("_EZREALTY_UPDATEDONE","Sie haben Ihren Eintrag erfolgreich aktualisiert!");
DEFINE("_EZREALTY_NO_EDIT","Tut uns leid - Sie sind nicht berechtigt, diesen Eintrag zu bearbeiten.");
DEFINE("_EZREALTY_NODELETE","Sie sind nicht berechtigt, diesen Eintrag zu löschen");
DEFINE("_EZREALTY_CHECKDELETE","Sind Sie sicher, dass Sie diesen Immobilien-Eintrag löschen wollen?");
DEFINE("_EZREALTY_DELETE_LISTING","Lösche Eintrag");
DEFINE("_EZREALTY_LISTINGS_PREVIEW","Vorschau Eintrag");
DEFINE("_EZREALTY_DELIMGOOPS","Konnte Bild-Datei nicht löschen");
DEFINE("_EZREALTY_LISTING_DELETED","Immobilien-Eintrag erfolgreich gelöscht");
DEFINE("_EZREALTY_LISTING_TERMS","Geschäftsbedingungen des Eintrags");
DEFINE("_EZREALTY_PREVIEW_LISTING","Ihre Immobilien-Eintrag Vorschau");

DEFINE("_EZREALTY_MEMBERS_ADDRESS","Adresse");
DEFINE("_EZREALTY_MEMBERS_HITS","Hits");
DEFINE("_EZREALTY_MEMBERS_ACTION","Aktion");
DEFINE("_EZREALTY_MEMBERS_STATUS","Veröffentlicht");
DEFINE("_EZREALTY_MEMBERS_UPGRADE","Aktualisierung");
DEFINE("_EZREALTY_MEMBERS_MAKEFEAT","Stelle auf Spezial");
DEFINE("_EZREALTY_MEMBERS_SELLERDET","Verkäufer Details");

DEFINE("_EZREALTY_LISTING1","Verkäufer Kontakt Details");
DEFINE("_EZREALTY_LISTING2","Kontakt Name");
DEFINE("_EZREALTY_LISTING3","Kontakt Telefon");
DEFINE("_EZREALTY_LISTING4","eMail Adresse");
DEFINE("_EZREALTY_LISTING5","Adresse der Immobilie (Verkauf)");
DEFINE("_EZREALTY_LISTING6","Immobilien Details");
DEFINE("_EZREALTY_LISTING7","Besonderheiten auf einen Blick");
DEFINE("_EZREALTY_LISTING8","Immobilien Marketing Details");
DEFINE("_EZREALTY_LISTING9","Immobilien Details hinzufügen");
DEFINE("_EZREALTY_LISTING10","Immobilien Details bearbeiten");
DEFINE("_EZREALTY_LISTING11","Verkäufer Anschrift");
DEFINE("_EZREALTY_LISTING12","Bilder");
DEFINE("_EZREALTY_LISTING_IMGDELETED","Bild geläscht");
DEFINE("_EZREALTY_LISTING_RESTRICTED","**Diese Information ist für FREIE Einträge nicht verfügbar**");

DEFINE("_EZREALTY_SELLER_ERROR1","Sie müssen einen Kontakt Name eintragen");
DEFINE("_EZREALTY_SELLER_ERROR2","Sie müssen eine Kontakt Telefonnummer eintragen");
DEFINE("_EZREALTY_SELLER_ERROR3","Sie müssen eine Kontakt eMail Adresse eintragen");
DEFINE("_EZREALTY_SELLER_ERROR4","Sie müssen Ihre Anschrift eintragen");

DEFINE("_EZREALTY_SELLER_N","Name");
DEFINE("_EZREALTY_SELLER_T","Telefon");
DEFINE("_EZREALTY_SELLER_E","eMail");
DEFINE("_EZREALTY_SELLER_L","Anschrift");
DEFINE("_EZREALTY_SELLER_C","Kontakt");

DEFINE("_EZREALTY_NOCATLISTINGS","Tut uns leid - es sind keine Einträge in dieser Kategorie");

DEFINE("_EZREALTY_IPN_SUBJECT","Eintrag erweitert auf");
DEFINE("_EZREALTY_IPN_MSG1","Ein Mitglied hat soeben seinen Eintrag erweitert auf");
DEFINE("_EZREALTY_IPN_MSG2","Besteller Details:-");
DEFINE("_EZREALTY_IPN_MSG3","Immobilien ID#");

DEFINE("_EZREALTY_POA","Preis auf Anfrage");
DEFINE("_EZREALTY_CONFIG_SBIMP","Listen nach Anzeigemenge (Impressions)");
DEFINE("_EZREALTY_CONFIG_SBIMPDESC","Falls Sie Ihren Mitgliedern erlauben, eigene Immobilien-Einträge zu veröffentlichen, möchten Sie das dann aufgrund der angezeigten Menge (Impressions) machen? - z.B. Klicks auf die Detail-Ansicht. Die Einträge werden dann so lange angezeigt, bis die von Ihnen eingestellte Menge an Anzeigen (Impressions) erreicht ist und Sie können anschliessend Ihre Datenbank von diesen alten Einträgen bereinigen, indem Sie auf den 'Bereinige Einträge' Button klicken.");
DEFINE("_EZREALTY_CONFIG_IMPNUM","Anzahl der Anzeigemenge (Impressions)");
DEFINE("_EZREALTY_CONFIG_IMPNUMDESC","Falls Sie die Einträge nach Anzeigemenge (Impressions) begrenzen wollen - Wie oft sollen sie angezeigt werden.");

DEFINE("_EZREALTY_RESET_MSG","Hits wurden zurück gesetzt");
DEFINE("_EZREALTY_RESET_BTN","Zurücksetzen");
DEFINE("_EZREALTY_CLEANDB","Bereinige Einträge");
DEFINE("_EZREALTY_LISTINGS_PAID1","Einträge Kosten");
DEFINE("_EZREALTY_LISTINGS_PAID2","Je Erweiterung");
DEFINE("_EZREALTY_LISTINGS_HITSINTRO","Einträge werden ausgesetzt und aus der Datenbank gelöscht nach");
DEFINE("_EZREALTY_LISTINGS_HITS2","Hits");
DEFINE("_EZREALTY_BEDROOMS_EXPL","Verwenden Sie Ganze Zahlen von 1 aufwärts - die 0 ist für die Fälle in der Drop-Down Box vordefiniert, in denen Schlafzimmer nicht angegeben (anwendbar) sind.");
DEFINE("_EZREALTY_SELLERSPANEL","Verkäufer Panel");
DEFINE("_EZREALTY_MAINPANEL","Haupt-Einträge");

// NEW TAGS THAT WERE ADDED FOR THE 3.2.2 VERSION

DEFINE("_EZREALTY_SUB_MSG","Ein Mitglied hat einen Eintrag hinzugefügt oder aktualisiert");
DEFINE("_EZREALTY_TOOLBAR_CLOSE","Schliessen");
DEFINE("_EZREALTY_NLAVAIL","Tut uns leid - dieser Eintrag ist zur Zeit nicht verfügbar");

// NEW TAGS THAT WERE ADDED AFTER THE 3.2.2 VERSION FOR CB INTEGRATION

DEFINE("_EZREALTY_CONFIG_CBINT","Community Builder Integration");
DEFINE("_EZREALTY_CONFIG_CBINTDESC","Falls Sie den Community Builder (CB) verwenden, möchten Sie dann die Daten aus den Mitglieder-Tabellen des CB nutzen, um die Verkäufer Kontakt Details anzeigen zu lassen?");
DEFINE("_EZREALTY_PROFILER_CBMSG1","Die 'EZ Realty Property Eintrag Komponente' ist nicht installiert. Bitte nehmen Sie Kontakt zu Ihrem Site Administrator auf.");
DEFINE("_EZREALTY_PROFILER_CBMSG2","Es gibt keine Immobilien-Einträge für dieses Mitglied.");
DEFINE("_EZREALTY_PROFILER_CBPROFILE","Profil Anzeige");

// NEW TAGS THAT WERE ADDED AFTER THE 3.3.0 VERSION

DEFINE("_EZREALTY_CLICK_OPEN","Klicken zum Öffnen");

// NEW TAGS THAT WERE ADDED FOR THE 4.0.0 RELEASE

DEFINE("_EZREALTY_CONFIG_FREEPIC","Freier Eintrag Bild");
DEFINE("_EZREALTY_CONFIG_FREEPICDESC","Falls Sie Ihren Mitgliedern FREIE und BEZAHLTE Einträge anbieten, soll in den FREIEN Einträgen ein Bild angezeigt werden? Falls Sie 'NEIN' auswählen wird ein Platzhalter angezeigt, der das Mitglied vielleicht dazu 'anregt', zum BEZAHLTEN Eintrag zu wechseln. Falls Sie 'JA' wählen - wird beim FREIEN Eintrag nur EIN Bild angezeigt. Diese Einstellung beeinflusst die Einträge nicht, wenn Sie Ihre Seite NUR im FREIE Einträge Modus eingestellt haben - Ihre Mitglieder können dann bis zu 12 Bilder anzeigen lassen.");
DEFINE("_EZREALTY_CONFIG_PAIDOPT1","FREI mit Option zum ERWEITERN");
DEFINE("_EZREALTY_CONFIG_PAIDOPT2","NUR BEZAHLTE Einträge");
DEFINE("_EZREALTY_CONFIG_PAIDONLY","Zahlungsarten");
DEFINE("_EZREALTY_CONFIG_PAIDONLYDESC","Falls Sie BEZAHLTE Einträge anbieten - möchten Sie dann FREIE Einträge mit der Option zur Erweiterung (Upgrade) anbieten - ODER NUR BEZAHLTE Einträge.");

DEFINE("_EZREALTY_CONFIG_LEVEL1","Bezahlter Eintrag Level 1 Name");
DEFINE("_EZREALTY_CONFIG_LEVEL1DESC","Wie möchten Sie Ihre Eintrag-Erweiterungen (Upgrades) bezeichnen - z.B. Premium/Erweiterter Eintrag usw. Dies wird als Begriffsbezeichnung im Button Code und in den PayPal Transaktions Listen (PayPal transaction reports) erscheinen.");
DEFINE("_EZREALTY_CONFIG_LEVEL1COST","Bezahlter Eintrag Level 1 Kosten");
DEFINE("_EZREALTY_CONFIG_LEVEL1COSTDESC","Die Kosten (Preis) für das Erweitern (Upgrade) vom FREIEN Eintrag zum BEZAHLTEN Eintrag.");

DEFINE("_EZREALTY_CONFIG_LEVEL2","Bezahlter Eintrag Level 2 Name");
DEFINE("_EZREALTY_CONFIG_LEVEL2DESC","Wie möchten Sie Ihre Eintrag-Erweiterungen (Upgrades) bezeichnen - z.B. Premium/Erweiterter Eintrag usw. Dies wird als Begriffsbezeichnung im Button Code und in den PayPal Transaktions Listen (PayPal transaction reports) erscheinen.");
DEFINE("_EZREALTY_CONFIG_LEVEL2COST","Bezahlter Eintrag Level 2 Kosten");
DEFINE("_EZREALTY_CONFIG_LEVEL2COSTDESC","Die Kosten (Preis) für das Erweitern (Upgrade).");

DEFINE("_EZREALTY_DETAILS_TAB7A","Metatags");
DEFINE("_EZREALTY_DETAILS_METADESC","Beschreibung");
DEFINE("_EZREALTY_DETAILS_METAKEYS","Schlüsselwörter");
DEFINE("_EZREALTY_FEND_BUYNOW","Bestellen Sie zuerst den 'Spezial-Eintrag', dann müssen Sie nicht die Setup-Gebühr für den 'Premium Eintrag' bezahlen.");
DEFINE("_EZREALTY_FEND_BUYNOW2","Erweitern Sie zuerst zum 'Spezial-Eintrag', dann müssen Sie nicht die Setup-Gebühr für den 'Premium Eintrag' bezahlen.");
DEFINE("_EZREALTY_UPGRADE","Erweitern");
DEFINE("_EZREALTY_CHECK_LOC","Prüfe Orte");
DEFINE("_EZREALTY_CHECK_STATE","Prüfe Bundesländer");
DEFINE("_EZREALTY_CHECK_COUNTRY","Prüfe Staaten");
DEFINE("_EZREALTY_CHECK_AVAIL","Prüfe Verfügbarkeit");
DEFINE("_EZREALTY_CHECK_SUBMIT","Neu einreichen");
DEFINE("_EZREALTY_CHECK_GO","Weiter");
DEFINE("_EZREALTY_CHECK_REFRESH","<strong><br /><br />Nachdem Sie dieses Fenster geschlossen haben, drücken Sie bitte den Aktualisieren-Button Ihres Browsers - und Sie werden den neuen Eintrag sehen.</strong>");

DEFINE("_EZREALTY_CONFIG_SELFENTRY","Front-End Zusätze");
DEFINE("_EZREALTY_CONFIG_SELFENTRYDESC","Wollen Sie Ihren Mitgliedern die Möglichkeit einräumen, selbst neue Orte, Bundesländer und Staaten hinzuzufügen? Wenn Sie es zulassen - werden diese automatisch veröffentlicht und stehen Ihren Mitgliedern zur Verfügung, wenn sie ihren eigenen Immobilien-Eintrag erstellen.");
DEFINE("_EZREALTY_CONFIG_COLOUR1","Rollover (Hover) Farbe 1");
DEFINE("_EZREALTY_CONFIG_COLOUR1DESC","Das ist die Farbe zu der die Zellen im Front-End-Eintrag wechseln, wenn jemand mit der Maus darüber gleitet. Diese Funktion ändert das Erscheinungsbild Ihres Immobilien Eintrags auf der Hauptseite von EZ Realty.");
DEFINE("_EZREALTY_CONFIG_COLOUR2","Rollover (Hover) Farbe 2");
DEFINE("_EZREALTY_CONFIG_COLOUR2DESC","Das ist die Farbe zu der die Zellen im Front-End-Eintrag wechseln, wenn jemand mit der Maus den Bereich wieder verlässt. Tipp: Für das beste Resultat empfiehlt es sich, die Hintergrundfarbe des Template Hintergrunds Ihrer WebSeite zu verwenden.");

DEFINE("_EZREALTY_DATABASE1","Datenbank aktualisieren");
DEFINE("_EZREALTY_DATABASE2","Die Aktualisierung Ihrer Datenbank war erfolgreich");

// TAGS THAT HAD THEIR LANGUAGE CONTENT CHANGED FOR THE 4.0.0 RELEASE

DEFINE("_EZREALTY_LISTINGS_HITSEXPL","Falls eine Aktualisierung zwischen den Eintrag-Levels/Typen vorgenommen wird - die Hits werden auf 0 zurückgesetzt.");
DEFINE("_EZREALTY_HEADER_OHOUSE","Besichtigung");

// NEW TAGS FOR THE 4.1.0 RELEASE

DEFINE("_EZREALTY_LISTING_SELECTTYPE","Wähle Typ");
DEFINE("_EZREALTY_TYPE_SALE","Zum Verkauf");
DEFINE("_EZREALTY_TYPE_RENTAL","Zur Miete");
DEFINE("_EZREALTY_LISTING_TYPE","Eintrag Typ");
DEFINE("_EZREALTY_LISTING_ANYTYPE","Jeder Eintrag Typ");
DEFINE("_EZREALTY_RENTAL_FREQUENCY","Miet-Häufigkeit");
DEFINE("_EZREALTY_RENTAL_NA","Nicht zutreffend");
DEFINE("_EZREALTY_RENTAL_NIGHTLY","Pro Nacht");
DEFINE("_EZREALTY_RENTAL_WEEKLY","Pro Woche");
DEFINE("_EZREALTY_RENTAL_FNIGHT","2-Wöchig");
DEFINE("_EZREALTY_RENTAL_MONTH","Pro Monat");
DEFINE("_EZREALTY_RENTAL_SQFT","Pro Fläche");
DEFINE("_EZREALTY_RENTAL_SQMTR","Pro Quadratmeter");
DEFINE("_EZREALTY_RENTAL_SPARE","Freies Zusatzfeld");


// TAGS THAT HAD THEIR LANGUAGE CONTENT CHANGED FOR THE 4.1.0 RELEASE


DEFINE("_EZREALTY_DETAILS_MARKET1","Nicht verkauft");


// NEW TAGS FOR THE 4.2.0 RELEASE

DEFINE("_EZREALTY_CONFIG_MOBILE","Mobil Telefon #");
DEFINE("_EZREALTY_CONFIG_MOBILEDESC","Dies wird für das SMS Kontakt Formular verwendet, falls Sie Ihren Mitgliedern keinen eigenen Eintrag erlauben, oder Sie selbst eigene Immobilien anbieten. Sie MUSS im internationalen Format sein: Länder Code, Vorwahl ohne die führende '0' - keine Leerzeichen, nur Ziffern. Beispiel für eine deutsche Nr.: 0049123456789. Wollen Sie keinen SMS Kontakt zur Verfügung stellen - lassen Sie diese Details leer.");

DEFINE("_EZREALTY_SELLER_SMS1","SMS #");
DEFINE("_EZREALTY_SELLER_SMS2","SMS an mich!");
DEFINE("_EZREALTY_SELLER_SMS3","MERKE: Bevor Sie dies nutzen, benötigen Sie einen aktiven");
DEFINE("_EZREALTY_SELLER_SMS4","account! Ausserdem müssen Sie eine HTTP API über Ihr Clickatell Control Panel einrichten.");
DEFINE("_EZREALTY_SELLER_SMS5","Ihre Mobil Telefon Nummer im internationalen Format: Länder Code, Vorwahl ohne die führende '0' - keine Leerzeichen, nur Ziffern.");
DEFINE("_EZREALTY_SELLER_SMS6","Sende SMS über Clickatell an diesen Immobilien Verkäufer");
DEFINE("_EZREALTY_SELLER_SMS7","Benutzername");
DEFINE("_EZREALTY_SELLER_SMS8","Passwort");
DEFINE("_EZREALTY_SELLER_SMS9","Mobil Telefon #");
DEFINE("_EZREALTY_SELLER_SMS10","Nachricht");
DEFINE("_EZREALTY_SELLER_SMS11","Erfolg");
DEFINE("_EZREALTY_SELLER_SMS12","Nachrichten ID");
DEFINE("_EZREALTY_SELLER_SMS13","Nchricht senden fehlgeschlagen");
DEFINE("_EZREALTY_SELLER_SMS14","Authentifizierung fehlgeschlagen");
DEFINE("_EZREALTY_SELLER_SMS15","Sie müssen Ihren Clickatell Benutzername eingeben");
DEFINE("_EZREALTY_SELLER_SMS16","Sie müssen Ihr Clickatell Passwort eingeben");
DEFINE("_EZREALTY_SELLER_SMS17","Sie müssen Ihre Mobil Telefon Nummer eingeben, übereinstimmend mit Ihrem Clickatell Account.");
DEFINE("_EZREALTY_SELLER_SMS18","Sie müssen eine Nachricht an diesen Immobilien Verkäufer eingeben");
DEFINE("_EZREALTY_SELLER_SMS19","HTTP API ID#");
DEFINE("_EZREALTY_SELLER_SMS20","Sie müssen Ihre Clickatell API ID eingeben. Falls Sie noch keine haben, tragen Sie eine HTTP API über Ihr Clickatell Control Panel ein.");
DEFINE("_EZREALTY_SELLER_SMS21","150 Zeichen max.");
DEFINE("_EZREALTY_SELLER_SMS22","Ihre Clickatell Details");
DEFINE("_EZREALTY_SELLER_SMS23","Sende SMS über Clickatell");
DEFINE("_EZREALTY_SELLER_SMS24","Sende SMS über Clickatell für diese Kaufanfrage - Erstellen Sie bitte eine Kaufanfrage, BEVOR Sie eine SMS senden!");
DEFINE("_EZREALTY_SELLER_SMS25","Erledigt!");
DEFINE("_EZREALTY_SELLER_SMS26","Sende SMS");
DEFINE("_EZREALTY_SELLER_SMS27","Stellen Sie sicher, dass Sie Ihre Clickatell Details in den EZ Realty Konfigurations-Einstellungen eingetragen haben, BEVOR Sie eine SMS senden!!");

DEFINE("_EZREALTY_SELLER_SMS7DESC","Dies muss Ihr Clickatell Central API Account Benutzername sein.");
DEFINE("_EZREALTY_SELLER_SMS8DESC","Dies muss Ihr Clickatell Central API Account Passwort sein.");
DEFINE("_EZREALTY_SELLER_SMS19DESC","Dies muss Ihre Clickatell Central API Account HTTP API ID# sein. Erstellen Sie Ihre API ID# über Ihr Clickatell Control Panel.");


DEFINE("_EZREALTY_CONFIG_TEXTBOX","Text Box Breite");
DEFINE("_EZREALTY_CONFIG_TEXTBOXDESC","Die Breite der größeren Text Box im Front-End im 'Hinzufügen/Bearbeiten' Formular. Diese Breiten-Einstellung hilft, eine falsche Darstellung in Ihrem Template zu vermeiden.");
DEFINE("_EZREALTY_CONFIG_TEXTAREA","Text Bereich Breite");
DEFINE("_EZREALTY_CONFIG_TEXTAREADESC","Die Breite der Text-Bereiche im Front-End im 'Hinzufügen/Bearbeiten' Formular. Diese Breiten-Einstellung hilft, eine falsche Darstellung in Ihrem Template zu vermeiden.");
DEFINE("_EZREALTY_TYPE_LEASE","Zur Pacht");
DEFINE("_EZREALTY_IMAGE_WARNING","<strong><font color='#FF0000'>Bild Format MUSS JPG oder PNG sein!!</font></strong>");
DEFINE("_EZREALTY_IMAGE_WARNING2","Eines oder mehrere Ihrer Bilder überschreiten die erlaubte Bildhöhe oder -breite!!");

DEFINE("_EZREALTY_CONFIG_OHOUSE","Besichtigungs-Link");
DEFINE("_EZREALTY_CONFIG_OHOUSEDESC","Möchten Sie den 'Besichtigung'-Link anzeigen lassen?");
DEFINE("_EZREALTY_CONFIG_MAXWIDTH","Maximal erlaubte Bild-Breite");
DEFINE("_EZREALTY_CONFIG_MAXWIDTHDESC","Was ist die maximale Breite in Pixel, die Sie beim Bilder-Upload erlauben?");
DEFINE("_EZREALTY_CONFIG_MAXHEIGHT","Maximal erlaubte Bild-Höhe");
DEFINE("_EZREALTY_CONFIG_MAXHEIGHTDESC","Was ist die maximale Höhe in Pixel, die Sie beim Bilder-Upload erlauben?");

DEFINE("_EZREALTY_PIXELS","Pixel");
DEFINE("_EZREALTY_BEDBATH","Bett/Bad");
DEFINE("_EZREALTY_BUDGET","Budget");
DEFINE("_EZREALTY_INTERESTED","Interesse?");
DEFINE("_EZREALTY_WANTED","Anfragen-Übersicht");
DEFINE("_EZREALTY_PROPERTIES_WANTED","Immobilien gewünscht");
DEFINE("_EZREALTY_PROPERTIES_WANTEDDESC","Interessenten, die folgendes benötigen");

DEFINE("_EZREALTY_LEAD_RESPONSE","Kaufanfrage Rückantwort");
DEFINE("_EZREALTY_RESPONS_PROPLEAD","könnte eine Immobilie haben, die Sie in Ihrer Kaufanfrage eingestellt hatten. Anfrage ID# ist:-");
DEFINE("_EZREALTY_LEAD_RESPONSEERROR","Sie müssen eine kurze Nachricht eingeben");
DEFINE("_EZREALTY_CONFIG_COUNTRY","Verwende Staaten");

DEFINE("_EZREALTY_CONFIG_NLLINK","Neue Einträge Link");
DEFINE("_EZREALTY_CONFIG_NLLINKDESC","Möchten Sie den 'Neue Einträge'-Link im EZ Realty Kopfbereich (Header) im Front-End anzeigen lassen?");
DEFINE("_EZREALTY_STUDIO","Studio");
DEFINE("_EZREALTY_RESET","Zurückstellen");
DEFINE("_EZREALTY_LEADCONTACT_PROMO","Eine Immobilie vorhanden, für die wir eventuell einen Käufer haben?");
DEFINE("_EZREALTY_SKIPFREE_LISTING","Verzichten Sie auf den freien Eintrag und gehen direkt zum bezahlten Eintrag!!");

DEFINE("_EZREALTY_CONFIG_COLCOUNT","Spalten Anzahl");
DEFINE("_EZREALTY_CONFIG_COLCOUNTDESC","Wieviele Spalten sollen auf der ersten Seite des Kategorien Eintrag Layout angezeigt werden?");
DEFINE("_EZREALTY_CONFIG_COLWIDTH","Spalten Breite");
DEFINE("_EZREALTY_CONFIG_COLWIDTHDESC","Wie breit sind die Spalten auf der ersten Seite des Kategorien-Eintrag Layout? z.B.: Falls Sie 1 Spalte haben, sollte die Breite 100% sein - falls Sie 2 Spalten haben, sollte die Breite 50% sein - falls Sie 3 Spalten haben, sollte die Breite 33% sein. Sie MÜSSEN das Prozentzeichen eingeben.");

DEFINE("_EZREALTY_ESSENTIALS","Besonderheiten");
DEFINE("_EZREALTY_OTHERSPECS","Andere Besonderheiten");
DEFINE("_EZREALTY_NS","Nicht näher beschrieben");
DEFINE("_EZREALTY_EA","eMail Administrator");

DEFINE("_EZREALTY_CONFIG_FORMATTING","Formatierung");
DEFINE("_EZREALTY_CONFIG_MAPPING","Mapping Einstellungen");
DEFINE("_EZREALTY_CONFIG_MAPWIDTH","Map Breite");
DEFINE("_EZREALTY_CONFIG_MAPWIDTHDESC","Die Map-Breite in Ihrem Front-End angegeben in Pixel.");
DEFINE("_EZREALTY_CONFIG_MAPHEIGHT","Map Höhe");
DEFINE("_EZREALTY_CONFIG_MAPHEIGHTDESC","Die Map-Höhe in Ihrem Front-End angegeben in Pixel.");
DEFINE("_EZREALTY_CONFIG_ADDRESSWIDTH","Adressen Box Breite");
DEFINE("_EZREALTY_CONFIG_ADDRESSWIDTHDESC","Die Breite der Text-Box über der Map, die die Immobilien-Adresse anzeigt.");
DEFINE("_EZREALTY_PROPERTY_MAPLOC","Map Anschrift");
DEFINE("_EZREALTY_SEARCH_ALLPOSTCODES","Wähle alle Postleitzahlen");

// TAGS THAT HAD THEIR LANGUAGE CONTENT CHANGED FOR THE 4.2.0 RELEASE

DEFINE("_EZREALTY_CONFIG_NEWLIST","Spezielle Immobilien-Eintrag Seiten");
DEFINE("_EZREALTY_CONFIG_NEWLISTDESC","Anzahl der Immobilien, die in 'Neue Einträge', 'Besichtigung', Immobilien gesucht' und 'RSS Feed' -Seiten angezeigt werden.");

// NEW LANGUAGE TAGS FOR THE *** 4.2.0 STABLE *** RELEASE

DEFINE("_EZREALTY_ERROR_DUPLICATE","FEHLER - doppelter Eintrag!!");
DEFINE("_EZREALTY_OPENHOUSE_DETAILS","Besichtigungs-Details");

// NEW LANGUAGE TAGS FOR THE *** 5.0.0 STABLE *** RELEASE

DEFINE("_EZREALTY_CPANEL","cPanel");

DEFINE("_EZREALTY_CPANEL_VMGR","Fahrzeug Manager");
DEFINE("_EZREALTY_CPANEL_MGCAT","Kategorien Verwaltung");
DEFINE("_EZREALTY_CPANEL_MGVEHMAKE","Manage Fahrzeug-Marke");
DEFINE("_EZREALTY_CPANEL_MGVEHMOD","Manage Fahrzeug Modelle");
DEFINE("_EZREALTY_CPANEL_MGENG","Manage Motorleistung Liste");
DEFINE("_EZREALTY_CPANEL_MGPRICE","Preis-Listen Verwaltung");
DEFINE("_EZREALTY_CPANEL_PROFMGR","Profil Verwaltung");
DEFINE("_EZREALTY_CPANEL_MGSALES","Kauf-Anfragen Verwaltung");
DEFINE("_EZREALTY_CPANEL_SENDALERT","Alarm-eMails senden");
DEFINE("_EZREALTY_CPANEL_CLEANLIST","Einträge bereinigen");
DEFINE("_EZREALTY_CPANEL_UPGRADE","Datenbank aktualisieren");
DEFINE("_EZREALTY_CPANEL_HELP","Hilfe");
DEFINE("_EZREALTY_CPANEL_MIGRATE","Integriere Jommla Users");
DEFINE("_EZREALTY_CPANEL_CONFIG","Konfiguration der Haupt-Einstellungen");
DEFINE("_EZREALTY_CPANEL_INTRO","Einleitung");
DEFINE("_EZREALTY_CPANEL_OPTIMIZE","Tabellen optimieren");

DEFINE("_EZREALTY_PROFILE_DSDET","Kontakt Details");
DEFINE("_EZREALTY_PROFILE_MANAGE","Manage Makler/Verkäufer Profile");
DEFINE("_EZREALTY_PROFILE_IMAGE","Profil Bild");
DEFINE("_EZREALTY_PROFILE_NAME","Makler/Verkäufer Name");
DEFINE("_EZREALTY_PROFILE_NUMPROPS","Anzahl der Einträge");
DEFINE("_EZREALTY_PROFILE_COMPANY","Firma");
DEFINE("_EZREALTY_PROFILE_EDIT","Bearbeite Verkäufer");
DEFINE("_EZREALTY_PROFILE_LINK","Link zu vorhandenen Mitgliedern");
DEFINE("_EZREALTY_PROFILE_TYPE4","Verkäufer Typ");
DEFINE("_EZREALTY_PROFILE_INTRO","Persönliche Beschreibung<br />max. 255 Zeichen");
DEFINE("_EZREALTY_PROFILE_ADDRESS1","Hausnr.");
DEFINE("_EZREALTY_PROFILE_ADDRESS2","Straße");
DEFINE("_EZREALTY_PROFILE_LOCALITY","Ort");
DEFINE("_EZREALTY_PROFILE_PCODE","Postleitzahl");
DEFINE("_EZREALTY_PROFILE_STATE","Bundesland");
DEFINE("_EZREALTY_PROFILE_COUNTRY","Staat");
DEFINE("_EZREALTY_PROFILE_EMAIL","eMail");
DEFINE("_EZREALTY_PROFILE_PHONE","Telefon");
DEFINE("_EZREALTY_PROFILE_FAX","Fax");
DEFINE("_EZREALTY_PROFILE_MOBILE","Mobil #");
DEFINE("_EZREALTY_PROFILE_SMS","Internationale Mobil #");
DEFINE("_EZREALTY_PROFILE_ALLOWSMS","Erlaube SMS Kontakt");
DEFINE("_EZREALTY_PROFILE_WEB","Web Site URL");
DEFINE("_EZREALTY_PROFILE_BLOG","Blog Site URL");
DEFINE("_EZREALTY_PROFILE_MSN","MSN Benutzername");
DEFINE("_EZREALTY_PROFILE_SKYPE","Skype Benutzername");
DEFINE("_EZREALTY_PROFILE_YAHOO","Yahoo Benutzername");
DEFINE("_EZREALTY_PROFILE_ICQ","ICQ Benutzername");
DEFINE("_EZREALTY_PROFILE_APPROVE","Profil freigeben");
DEFINE("_EZREALTY_PROFILE_DETAILS","Makler/Verkäufer Profil Details");
DEFINE("_EZREALTY_PROFILE_SAVE","Speichere/Aktualisiere Profil");
DEFINE("_EZREALTY_PROFILE_PROFILE","Mein Profil");
DEFINE("_EZREALTY_PROFILE_TYPE1","Wähle Sie Ihren Verkäufer Status");
DEFINE("_EZREALTY_PROFILE_SAVED","Profile Details gespeichert");
DEFINE("_EZREALTY_PROFILE_SEARCHALL","Suche alle Orte");
DEFINE("_EZREALTY_PROFILE_AGSELLERS","Unsere Makler & Private Verkäufer");
DEFINE("_EZREALTY_PROFILE_NOPROFILES","Momentan sind keine Profile gelistet");
DEFINE("_EZREALTY_PROFILE_FINDDEALER","Finden Sie einen Makler/Privaten Verkäufer in Ihrem Bereich");
DEFINE("_EZREALTY_PROFILE_AGLINK","Makler/Verkäufer anzeigen");
DEFINE("_EZREALTY_PROFILE_MOBILE2","Mobil");
DEFINE("_EZREALTY_PROFILE_TEXT","Text Nachricht");
DEFINE("_EZREALTY_AGENT_CURRENTLISTINGS","Vorhandene Einträge");
DEFINE("_EZREALTY_AGENT_MYLISTINGS","Zeige meine Einträge");
DEFINE("_EZREALTY_AGENT_LISTINGSFOR","Einträge für:-");
DEFINE("_EZREALTY_DEALER_NOLISTINGS","Es sind keine Einträge mit diesem Profil verbunden");
DEFINE("_EZREALTY_PROFILE_SENDCONTACT","Kontakt zu diesem Makler/Verkäufer");
DEFINE("_EZREALTY_PROFILE_SMSCONTACT","Sende SMS über Clickatell an diesen Makler/Verkäufer");
DEFINE("_EZREALTY_ERROR_NOPROFILE","ACHTUNG - Sie müssen erst Ihr Profil erstellt haben, bevor Sie Ihre Immobilien zu den Einträgen hinzufügen/bearbeiten können!! Bitte klicken Sie auf den 'Mein Profil' Link oben, um Ihr Profil zu erstellen.");

DEFINE("_EZREALTY_CONFIG_CURRENCYPOS","Währung Position");
DEFINE("_EZREALTY_CONFIG_CURRENCYPOS_DESC","Sie können einstellen, ob das Währungssymbol vor oder nach dem Preis angezeigt wird.");
DEFINE("_EZREALTY_CONFIG_CURRENCYFORMAT","Währung Format");
DEFINE("_EZREALTY_CONFIG_CURRENCYFORMAT_DESC","Sie können einstellen, ob die Währung im Dezimal- oder europäischen Format erscheint.");
DEFINE("_EZREALTY_CONFIG_BEFORE","Davor");
DEFINE("_EZREALTY_CONFIG_AFTER","Danach");
DEFINE("_EZREALTY_CONFIG_DECIMAL","Dezimal");
DEFINE("_EZREALTY_CONFIG_EUROPEAN","Europäisch");
DEFINE("_EZREALTY_CONFIG_MAPTYPE1","Google Maps");
DEFINE("_EZREALTY_CONFIG_MAPTYPE2","Yahoo Maps");

DEFINE("_EZREALTY_CONFIG_SHOWPROF","Zeige Profil");
DEFINE("_EZREALTY_CONFIG_PROFILING","Management Ihrer Seiten Profil Einstellungen");
DEFINE("_EZREALTY_CONFIG_PROFACCESS","Profil Berechtigung");
DEFINE("_EZREALTY_CONFIG_PROFACCESSDESC","Definieren Sie, wer die Details des Verkäufer-Profils ansehen kann. DENKEN SIE DARAN - Sie DÜRFEN NICHT den Zugriff über dem 'registrierten Mitglied' Level sperren - sonst sind die Besucher nicht in der Lage, einen Kontakt zum Verkäufer herzustellen. Für den überwiegenden Teil Ihrer WebSeite gilt - öffentlicher Zugriff (Public Access) ist die richtige Einstellung.");
DEFINE("_EZREALTY_CONFIG_PROFILEWIDTH","Profil Bild Breite");
DEFINE("_EZREALTY_CONFIG_PROFILEWIDTHDESC","Maximal erlaubte Breite des Profil-Bildes. Denken Sie daran: das ist die Breite des Bildes, wie sie im Front-End auf der Profil-Seite angezeigt wird. Bilder, die diese Breite überschreiten, werden während des Upload-Prozesses auf die eingestellte Breite angepasst.");
DEFINE("_EZREALTY_CONFIG_PROFILEHEIGHT","Profil Bild Höhe");
DEFINE("_EZREALTY_CONFIG_PROFILEHEIGHTDESC","Maximal erlaubte Höhe des Profil-Bildes. Denken Sie daran: das ist die Höhe des Bildes, wie sie im Front-End auf der Profil-Seite angezeigt wird. Bilder, die diese Höhe überschreiten, werden während des Upload-Prozesses auf die eingestellte Höhe angepasst.");

DEFINE("_EZREALTY_PROFACCESS_DENIED","Unsere Makler/Verkäufer Profile ermöglichen umfangreiche Einstellungen. Bitte melden Sie sich zuerst an (Login).");

DEFINE("_EZREALTY_CONFIG_PROFILES","Profile");

DEFINE("_EZREALTY_CONFIG_USESMS","Erlaube SMS");
DEFINE("_EZREALTY_CONFIG_USESMS_DESC","Möchten Sie den/das SMS Kontakt -Link/-Formular anzeigen lassen, um SMS Nachrichten über das Front-End zu erlauben? Falls Clickatell diesen Service für diesen Teil Europas nicht anbietet, tragen Sie hier bitte 'NEIN' ein.");

DEFINE("_EZREALTY_CONFIG_DEFEXPMGMT","Definieren Sie Ihre Ablauf-Management Einstellungen");
DEFINE("_EZREALTY_CONFIG_USEEXPMGMT","Verwende Ablauf-Management");
DEFINE("_EZREALTY_CONFIG_USEEXPMGMTDESC","Möchten Sie das Ablauf-Management System verwenden? Dies erlaubt Ihnen, auf welche Art und wie lange die Einträge angezeigt werden - entweder zeitgesteuert oder durch die Limitierung der Anzeigeanzahl.");
DEFINE("_EZREALTY_CONFIG_EXPSYS","Ablauf-System");
DEFINE("_EZREALTY_CONFIG_EXPSYSDESC","Falls Sie das Ablauf-System verwenden - wählen Sie die Methode, aufgrund der die Einträge begrenzt angezeigt werden.");
DEFINE("_EZREALTY_CONFIG_EXPHITSBASED","Seiten Anzeige");
DEFINE("_EZREALTY_CONFIG_EXPDATEBASED","Zeitgesteuert");
DEFINE("_EZREALTY_CONFIG_EXPFIG","Zeit in Tagen");
DEFINE("_EZREALTY_CONFIG_EXPFIGDESC","Falls Sie das zeitgesteuerte Ablauf-System verwenden, geben Sie bitte an, wieviele Tage die Einträge angezeigt werden sollen.");
DEFINE("_EZREALTY_CONFIG_EXPGRACE","Übergangszeit");
DEFINE("_EZREALTY_CONFIG_EXPGRACEDESC","Falls sie 'Zeitgesteuerte' Einträge verwenden, geben Sie bitte die Übergangszeit in Tagen an. Dies ist die Anzahl der Tage, in denen der Eintrag nicht mehr erscheint (da bereits abgelaufen) und dem endgültigen Entfernen aus der Datenbank. Während dieser Übergangszeit können die Einträge noch/wieder erneuert werden.");
DEFINE("_EZREALTY_CONFIG_LIGHTBOXEXP","Merkliste Ablauf-Zeit");
DEFINE("_EZREALTY_CONFIG_LIGHTBOXEXPDESC","Wie viele Tage sollen die Merklisten-Artikel in der Datenbank bleiben? Nach dieser Zeit können diese entfernt werden, indem Sie die 'Entfernen' Funktion verwenden.");
DEFINE("_EZREALTY_CONFIG_LISTINGSTEMPL","Einträge Seiten-Template");
DEFINE("_EZREALTY_CONFIG_LISTINGSTEMPL_DESC","Es gibt nun verschiedene Layouts für die Eintrag-Seiten - z.B. für die Kategorie Inhalte, Neue Einträge, Suchergebnisse, Fahrzeugmarken Seiten.");
DEFINE("_EZREALTY_CONFIG_MGSCHFILTER","Management Ihrer Such Filter Einstellungen");
DEFINE("_EZREALTY_CONFIG_PAYMENTSYS","Wählen Sie Ihr Zahlsystem");
DEFINE("_EZREALTY_CONFIG_PAYMENTSYS_DESC","EZ Realty bietet momentan 2 Möglichkeiten, um die Zahlungen für bezahlte Erweiterungen (Upgrades) zu gewährleisten. Das PayPal System ermöglicht Ihnen das automatisch über ein eingebautes IPN Script oder, falls Ihnen PayPal nicht zur Verfügung steht - können Sie Ihre Einträge zu einer Seite leiten, die beschreibt wie Zahlungen über Ihre Seite vorgenommen werden sollen.");
DEFINE("_EZREALTY_CONFIG_CHANGEIMAGES","Wechsel Eintrag Bilder");
DEFINE("_EZREALTY_CONFIG_CHANGEIMAGES_DESC","Wollen Sie Ihren Mitgliedern erlauben, ihre eigenen Bilder nach dem ersten Upload zu wechseln? Wenn Sie das auf 'Nein' einstellen, bezieht sich das nur auf die Bilder, nicht jedoch die Inhalte. Diese können von den Mitgliedern nach wie vor bearbeitet werden. Bedenken Sie: Einige Mitglieder könnten es als Einschränkung empfinden, dass sie Ihre einmal hochgeladenen Bilder nicht mehr bearbeiten können.");
DEFINE("_EZREALTY_CONFIG_LEADSNOTIFY","Anfrage Bescheid");
DEFINE("_EZREALTY_CONFIG_LEADSNOTIFY_DESC","Falls Sie das Anfrage-Management Feature verwenden, möchten Sie per eMail über eine neue Anfrage informiert werden?");
DEFINE("_EZREALTY_CONFIG_MAPRES","Mapping Anzeige");

DEFINE("_EZREALTY_MAPPING_STNUM","Verwende Haus Nummer");
DEFINE("_EZREALTY_MAPPING_STNUMDESC","Wollen Sie die Hausnummer für das Mapping verwenden? Falls Sie NEIN angeben, zeigt die Map nur die Straße. Falls Sie JA eingeben, zeigt die Map exakt die angegebene Adresse.");
DEFINE("_EZREALTY_MAPPING_STREET","Verwende Straßen Name");
DEFINE("_EZREALTY_MAPPING_STREETDESC","Wollen Sie den Straßenname für das Mapping verwenden? Falls Sie NEIN angeben, zeigt die Map nur den nächst höheren Bereich - z.B. den Ort.");
DEFINE("_EZREALTY_MAPPING_LOCALITY","Verwende Ort");
DEFINE("_EZREALTY_MAPPING_LOCALITYDESC","Wollen Sie den Ort für das Mapping verwenden? Falls Sie NEIN eingeben, zeigt die Map nur eine ungenaue Darstellung (Übersicht).");
DEFINE("_EZREALTY_MAPPING_STATE","Verwende Bundesland");
DEFINE("_EZREALTY_MAPPING_STATEDESC","Falls Ihr Bundesland nicht groß genug ist, sollten Sie dies möglicherweise auf NEIN stellen, wenn Sie das Mapping benutzen.");


DEFINE("_EZREALTY_SCH_TYPE","Verwende Eintrag Typ");
DEFINE("_EZREALTY_SCH_TYPEDESC","Wollen Sie die Eintrag-Typen - 'DropDown-Liste' im Haupt-Suchfilter verwenden?");
DEFINE("_EZREALTY_SCH_CTG","Verwende Immobilien Kategorien");
DEFINE("_EZREALTY_SCH_CTGDESC","Wollen Sie die Immobilien Kategorien Liste im Haupt-Suchfilter verwenden?");

DEFINE("_EZREALTY_SCH_LOC","Verwende Bundesländer und Orte");
DEFINE("_EZREALTY_SCH_LOCDESC","Wollen Sie Bundesländer und Orte im Haupt-Suchfilter verwenden?");

DEFINE("_EZREALTY_SCH_CNID","Verwende Staaten");
DEFINE("_EZREALTY_SCH_CNIDDESC","Wollen Sie die Staaten im Haupt-Suchfilter verwenden?");
DEFINE("_EZREALTY_SCH_PCODE","Verwende Postleitzahl");
DEFINE("_EZREALTY_SCH_PCODEDESC","Wollen Sie die Postleitzahlen im Haupt-Suchfilter verwenden?");
DEFINE("_EZREALTY_SCH_PRICE","Verwende Preis Bereich");
DEFINE("_EZREALTY_SCH_PRICEDESC","Wollen Sie die 2 Preisbereich Listen im Haupt-Suchfilter verwenden?");
DEFINE("_EZREALTY_SCH_ROOMS","Verwende Schlafzimmer");
DEFINE("_EZREALTY_SCH_ROOMSDESC","Wollen Sie die 2 Schlafzimmer Listen im Haupt-Suchfilter werwenden?");
DEFINE("_EZREALTY_SCH_MARKET","Verwende Markt Status");
DEFINE("_EZREALTY_SCH_MARKETDESC","Wollen Sie die Markt Status Liste im Haupt-Scuhfilter verwenden?");
DEFINE("_EZREALTY_SCH_MLS","Verwende MLS #");
DEFINE("_EZREALTY_SCH_MLSDESC","Wollen Sie die MLS ID# Liste im Haupt-Suchfilter werwenden? Diese Liste wird durch das Makler ID/MLS Feld generiert.");

DEFINE("_EZREALTY_LISTINGS_EXPDATE","Ablauf-Datum");
DEFINE("_EZREALTY_LISTINGS_EXPIRED","Abgelaufen");
DEFINE("_EZREALTY_EXPDATE_RESET","Das Ablauf-Datum wurde erneuert!");
DEFINE("_EZREALTY_SELECT_SELLER","Wähle Makler/Verkäufer");
DEFINE("_EZREALTY_DEALER_SELLER","Makler/Verkäufer");

DEFINE("_EZREALTY_DETAILS_UNITNUM","Wohneinheit");
DEFINE("_EZREALTY_DETAILS_STREETNUM","Haus Nummer");
DEFINE("_EZREALTY_DETAILS_DISPLAYAD","Zeige Adresse");
DEFINE("_EZREALTY_LISTINGS_DISPLADDYEXTFEED","Wollen Sie die Immobilien Adresse per RSS-Feed auf externen Immobilien-Seiten anzeigen lassen?");

DEFINE("_EZREALTY_OPTIMIZE_DATABASE","Die EZ Realty Tabellen wurden optimiert");
DEFINE("_EZREALTY_MIGRATE_ERROR","Fehler - Sie vergaßen Ihre Mitglieder auszuwählen!");
DEFINE("_EZREALTY_COPY","Kopie");
DEFINE("_EZREALTY_PROFILE_ERROR_MID","FEHLER - Sie müssen ein existierendes Joomla Mitglied zu diesem Profil zuordnen!!");
DEFINE("_EZREALTY_SORT_ALLSTATES","-Alle Bundesländer-");
DEFINE("_EZREALTY_SORT_ALLCOUNTRIES","-Alle Staaten-");

DEFINE("_EZREALTY_ORDER_LIST1","ID aufsteigend");
DEFINE("_EZREALTY_ORDER_LIST2","ID absteigend");
DEFINE("_EZREALTY_ORDER_LIST3","Verkäufer Name aufsteigend");
DEFINE("_EZREALTY_ORDER_LIST4","Verkäufer Name absteigend");
DEFINE("_EZREALTY_ORDER_LIST5","Kategorie Name aufsteigend");
DEFINE("_EZREALTY_ORDER_LIST6","Kategorie Name absteigend");
DEFINE("_EZREALTY_ORDER_LIST9","Veröffentlicht aufsteigend");
DEFINE("_EZREALTY_ORDER_LIST10","Veröffentlicht absteigend");
DEFINE("_EZREALTY_ORDER_LIST11","Überprüft aufsteigend");
DEFINE("_EZREALTY_ORDER_LIST12","Überprüft absteigend");
DEFINE("_EZREALTY_ORDER_LIST13","Premium aufsteigend");
DEFINE("_EZREALTY_ORDER_LIST14","Premium absteigend");
DEFINE("_EZREALTY_ORDER_LIST15","Spezial aufsteigend");
DEFINE("_EZREALTY_ORDER_LIST16","Spezial absteigend");
DEFINE("_EZREALTY_ORDER_LIST17","Ablauf Datum aufsteigend");
DEFINE("_EZREALTY_ORDER_LIST18","Ablauf Datum absteigend");
DEFINE("_EZREALTY_ORDER_LIST19","Preis aufsteigend");
DEFINE("_EZREALTY_ORDER_LIST20","Preis absteigend");
DEFINE("_EZREALTY_ORDER_LIST21","Ort aufsteigend");
DEFINE("_EZREALTY_ORDER_LIST22","Ort absteigend");


DEFINE("_EZREALTY_ORDERBY","Sortierung nach");

DEFINE("_EZREALTY_MYEZPANEL","Mein EZ Panel");
DEFINE("_EZREALTY_MYPROFILE","Mein Profil");
DEFINE("_EZREALTY_MYLISTINGS","Meine Einträge");

DEFINE("_EZREALTY_GENERIC_SAVED","Details gespeichert");

DEFINE("_EZREALTY_LISTINGS_ADDLIGHTBOX","Zur Merkliste hinzufügen");
DEFINE("_EZREALTY_NEEDTOLOGIN","Tut uns leid - Sie müssen angemeldet sein, um dieses Feature nützen zu können.");
DEFINE("_EZREALTY_VIEW_LIGHTBOX","Merkliste anzeigen");
DEFINE("_EZREALTY_REMOVE_LIGHTBOX","Von Merkliste entfernen");

DEFINE("_EZREALTY_EMPTY_LIGHTBOX","Zur Zeit befinden sich keine Einträge in Ihrer Merkliste");
DEFINE("_EZREALTY_MY_LIGHTBOX","Meine Merkliste");

DEFINE("_EZREALTY_CONFIG_ADDRESSIMG","Wählen Sie, welche Adressangaben beim Eintrag der Immobilien-Informationen verwendet werden sollen");
DEFINE("_EZREALTY_CONFIG_SHOWMEMB","Zeige den Mitglieder-Bereich Link");
DEFINE("_EZREALTY_CONFIG_SHOWMEMBDESC","Falls Sie Immobilien-Einträge von Mitgliedern haben - möchten Sie den Link zum 'Verkäufer Panel' oben im EZ Realty Menü (Front-End) anzeigen? Möglicherweise wollen Sie hier 'Nein' einstellen, um ein eigenes Auswahl-Menü in Joomla zu erstellen, das zu den Benutzer-Privilegien verlinkt.");
DEFINE("_EZREALTY_CONFIG_ADDPCODEDESC","Wollen Sie beim Verwalten und Anzeigen Ihrer Immobilien-Adressen die Postleitzahl verwenden/anzeigen?");
DEFINE("_EZREALTY_DETAILS_PROPCOUNTY","Kreis/Gemeinde/Kommune");
DEFINE("_EZREALTY_DETAILS_PROPCOUNTY_DESC","** Ein optionales Feld für geographische Bereiche zwischen Staat und Stadt. Dieses Feld ist KEIN TEIL der Immobilien-Adresse - aber wird in der Detail Seite angezeigt.");
DEFINE("_EZREALTY_DETAILS_TOTALROOMS","Gesamtzahl der Räume");
DEFINE("_EZREALTY_DETAILS_LIVINGAREA","Wohnbereich");
DEFINE("_EZREALTY_DETAILS_BOND","Kaution");
DEFINE("_EZREALTY_DETAILS_FRONTAGE","Grundstück-Breite");
DEFINE("_EZREALTY_DETAILS_DEPTH","Grundstück-Tiefe");
DEFINE("_EZREALTY_SHOW_PRICE","Zeige Preis");
DEFINE("_EZREALTY_DETAILS_PRICEVIEW","Preis Anzeige");
DEFINE("_EZREALTY_DETAILS_PRICEVIEW_DESC","Falls Sie den Immobilienpreis verstecken (nicht anzeigen) - schreiben Sie eine besondere Nachricht - z.B. 'Verhandlungsbasis ca. 1 Mio. €'.");

DEFINE("_EZREALTY_DETAILS_BUSINESS","Infos zu Firmen-Immobilien");
DEFINE("_EZREALTY_DETAILS_TAKINGS","Einnahmen");
DEFINE("_EZREALTY_DETAILS_RETURNS","Ausgaben");
DEFINE("_EZREALTY_DETAILS_NETPROFIT","Netto Umsatz");
DEFINE("_EZREALTY_DETAILS_BUSTYPE","Art des Unternehmens");
DEFINE("_EZREALTY_DETAILS_BUSSUBTYPE","Besonderes");

DEFINE("_EZREALTY_DETAILS_RURAL","Zusatz-Informationen");
DEFINE("_EZREALTY_DETAILS_FENCING","Einzäunung");
DEFINE("_EZREALTY_DETAILS_RAINFALL","Niederschlagsmenge");
DEFINE("_EZREALTY_DETAILS_SOILTYPE","Bodentyp");
DEFINE("_EZREALTY_DETAILS_IRRIGATION","Bewässerung");
DEFINE("_EZREALTY_DETAILS_CARRYINGCAP","Tragkraft");
DEFINE("_EZREALTY_DETAILS_SERVICES","Dienstleistungen");

DEFINE("_EZREALTY_TYPE_AUCTION","Zur Auktion");
DEFINE("_EZREALTY_DETAILS_MARKET0","Markt Status");
DEFINE("_EZREALTY_DETAILS_MLSID","MLS ID Nummer");
DEFINE("_EZREALTY_DETAILS_MLSIDDESC","Falls Sie ein US Makler sind, können Sie hier Ihre MLS ID für diese Immobilie aufführen");

DEFINE("_EZREALTY_DETAILS_GRAZING","Weideland");
DEFINE("_EZREALTY_DETAILS_CROPPING","Ackerbau");
DEFINE("_EZREALTY_DETAILS_WATERRESOURCES","Wasserquellen");
DEFINE("_EZREALTY_DETAILS_STORAGE","Lager");
DEFINE("_EZREALTY_DETAILS_GENERAL","Allgemeine Immobilien Info");

DEFINE("_EZREALTY_PRUNE_DONE","Merklisten-Einträge entfernt");

DEFINE("_EZREALTY_NOALERT_SENT","Alarm eMails für ausstehende Eintrag-Löschung wurde nicht gesendet, da Ihre Seite nicht das zeitbasierte Ablauf-Management verwendet.");

DEFINE("_EZREALTY_EXPIRY_WARNING","Ausstehender Eintrag-Ablauf");
DEFINE("_EZREALTY_EXPIRY_MESSAGE","Ihr Immobilien-Eintrag auf unserer WebSeite wird bald ablaufen und wir hoffen, Sie hatten eine erfolgreiche Anzeigkampagne. Sollten Sie eine Fortführung Ihrer Anzeige wünschen, besuchen Sie bitte unsere WebSeite und verlängern Ihren Eintrag. Sie finden uns hier:-");
DEFINE("_EZREALTY_EXPIRY_MESSAGE2","Melden Sie sich auf der WebSeite an (Login) und besuchen Sie das Mitglieder Control Panel. Dort können Sie Ihren Eintrag erneuern. Sollten Sie sich zu keiner Verlägerung entschließen, wird Ihr Eintrag ohne weitere Mitteilung gelöscht.");
DEFINE("_EZREALTY_ALERTMSG_PT1","eMail gesendet an");
DEFINE("_EZREALTY_ALERTMSG_PT2","Benutzer");
DEFINE("_EZREALTY_CONFIG_BRAZILIAN","BrasilianerIn");

DEFINE("_EZREALTY_HEADER_FEATURED","Besonderes");
DEFINE("_EZREALTY_FEATURED_PROPERTY_LIST","Aussergewöhnliche Objekte");

DEFINE("_EZREALTY_CONFIG_TOPMENU","Manage die Top EZ Realty Menü Links");
DEFINE("_EZREALTY_CONFIG_USEMENU","Verwende Top Menü Links");
DEFINE("_EZREALTY_CONFIG_USEMENU_DESC","Wollen Sie die Top EZ Realty menü Links verwenden? Wird diese Einstellung auf 'Nein' gesetzt, werden ALLE Top Menü Links im Front-End versteckt/nicht angezeigt.");
DEFINE("_EZREALTY_CONFIG_USEFEAT","Verwende Spezial-Einträge Link");
DEFINE("_EZREALTY_CONFIG_USEFEAT_DESC","Wollen Sie den Top Spezial-Einträge Link verwenden?");
DEFINE("_EZREALTY_CONFIG_AGLINK","Makler/Verkäufer Link");
DEFINE("_EZREALTY_CONFIG_AGLINK_DESC","Wollen Sie den Top Makler/Verkäufer Link verwenden?");
DEFINE("_EZREALTY_CONFIG_SCHLINK","Verwende Such Filter Link");
DEFINE("_EZREALTY_CONFIG_SCHLINK_DESC","Wollen Sie den Top Such Filter Link verwenden?");
DEFINE("_EZREALTY_CONFIG_MEMLINK","Verwende Mitglieder Link");
DEFINE("_EZREALTY_CONFIG_MEMLINK_DESC","Wollen Sie den Top Link verwenden, der direkt zum Mitglieder Eintrag Management-Bereich führt?");

DEFINE("_EZREALTY_SEL_STATE","Wähle Bundesland");
DEFINE("_EZREALTY_SEL_LOCALITY","Wähle Ort");
DEFINE("_EZREALTY_CLICKOPEN","Zum Öffnen auf Thumbnail klicken");

DEFINE("_EZREALTY_LISTINGS_SUMMARY","Übersicht");
DEFINE("_EZREALTY_LISTINGS_EXPAND","Zum Erweitern klicken");
DEFINE("_EZREALTY_LISTINGS_TECHNICAL","Technische Einzelheiten");
DEFINE("_EZREALTY_LISTINGS_NOTECHSPECS","Für dieses Fahrzeug sind keine technischen Einzelheiten gelistet.");
DEFINE("_EZREALTY_LISTINGS_CLICKOPEN","Anzeige des Bildes in Originalgröße - klicken");
DEFINE("_EZREALTY_LISTINGS_SPECS","Einzelheiten");
DEFINE("_EZREALTY_LISTINGS_FEATS","Besonderheiten");
DEFINE("_EZREALTY_TOOLS","Tools");
DEFINE("_EZREALTY_DET_ADDFEAT","Zusätzliche Besonderheiten");
DEFINE("_EZREALTY_DET_ADDNUM","Anzeige #");
DEFINE("_EZREALTY_DET_AGID","Agentur Referenz #");
DEFINE("_EZREALTY_DET_MLSID","MLS ID");
DEFINE("_EZREALTY_DET_COUNTY","Landkreis/Gemeinde");

DEFINE("_EZREALTY_CONFIG_BACKBUT","Zurück Button");
DEFINE("_EZREALTY_CONFIG_BACKBUTDESC","Wollen Sie den Zurück Button unten (im Footer) Ihrer WebSeite anzeigen?");

DEFINE("_EZREALTY_TABS_SUMMARY","Übersicht");
DEFINE("_EZREALTY_TABS_DETAILS","Details");
DEFINE("_EZREALTY_TABS_FEATURES","Besonderheiten");
DEFINE("_EZREALTY_TABS_DESCRIPTION","Beschreibung");

DEFINE("_EZREALTY_PROFILE_CONTACT","Kontakt Verkäufer");

DEFINE("_EZREALTY_LISTINGS_RENEW","Erneuern");
DEFINE("_EZREALTY_LISTING_UPGRADE","erweitern/Upgrade");
DEFINE("_EZREALTY_LEADS_SUBMSG","Ein Besucher Ihrer WebSeite hat soeben Daten in Ihr Anfrage Management System eingetragen. Bitte melden Sie sich an (Login), um die Daten zu anzusehen, sobald Sie Zeit dazu haben.");

DEFINE("_EZREALTY_LISTINGS_TIMEINTRO","Einträge sind abgelaufen nach");
DEFINE("_EZREALTY_LISTINGS_TIME2","Tagen, und Sie haben noch");
DEFINE("_EZREALTY_LISTINGS_TIME3","Tage, während der Sie Ihren Eintrag verlängern können.");
DEFINE("_EZREALTY_LISTINGS_TIMEEXPL","Falls Sie zwischen den Eintrag-Levels/Typen erweitern (upgraden) - erneuert Sich das Ablauf-Datum.");

DEFINE("_EZREALTY_MSG","Nachricht");
DEFINE("_EZREALTY_SITE_CONTACT","Generelle Kontakt-Anfrage über");

DEFINE("_EZREALTY_LISTER_AGENT","Makler");
DEFINE("_EZREALTY_LISTER_OWNER","Besitzer/Verkäufer");
DEFINE("_EZREALTY_LISTER_BROKER","Broker");
DEFINE("_EZREALTY_LISTER_SELECTTYPE","Wähle Verkäufer Typ");

DEFINE("_EZREALTY_SEARCH_ANYMLS","Jede MLS ID");

DEFINE("_EZREALTY_YOUVEGOT_LEADSMAIL","Neue Immobilien-Anfrage eingetragen");

DEFINE("_EZREALTY_REDUNDANT","** Dieses Feld ist nun überflüssig **");

DEFINE('_EZREALTY_NAV_LT','&lt;');
DEFINE('_EZREALTY_NAV_RT','&gt;');
DEFINE('_EZREALTY_NAV_PAGE','Seite');
DEFINE('_EZREALTY_NAV_OF','von');
DEFINE('_EZREALTY_NAV_START','Start');
DEFINE('_EZREALTY_NAV_PREVIOUS','Vorherige');
DEFINE('_EZREALTY_NAV_NEXT','Nächste');
DEFINE('_EZREALTY_NAV_END','Ende');
DEFINE('_EZREALTY_NAV_RESULTS','Ergebnisse');

DEFINE('_EZREALTY_TABS_ADDRESS','Adresse');
DEFINE('_EZREALTY_TABS_SPECS','Einzelheiten');
DEFINE('_EZREALTY_TABS_MARKETING','Marketing');
DEFINE('_EZREALTY_TABS_ADMIN','Administration');
DEFINE('_EZREALTY_TABS_BUSINESS','Geschäft');
DEFINE('_EZREALTY_TABS_PROFILES','Profile');
DEFINE('_EZREALTY_TABS_SMS','SMS');
DEFINE('_EZREALTY_TABS_MAPPING','Mapping');
DEFINE('_EZREALTY_TABS_EXP','Ablauf');
DEFINE('_EZREALTY_TABS_FORMATTING','Formatieren');
DEFINE('_EZREALTY_TABS_SEARCH','Suche');
DEFINE('_EZREALTY_TABS_LINKS','Links');
DEFINE('_EZREALTY_TABS_MEMBERS','Mitglieder');
DEFINE('_EZREALTY_TABS_PAYMENTS','Zahlungen');

DEFINE('_EZREALTY_DETAILS_STOCK','Warenbestand');
DEFINE('_EZREALTY_DETAILS_FIXTURES','Inventar');
DEFINE('_EZREALTY_DETAILS_FITTINGS','Ausstattung');
DEFINE('_EZREALTY_DETAILS_SQUARES','Erdgeschoß');
DEFINE('_EZREALTY_DETAILS_POFFICE','Anteil der Verwaltung in %');
DEFINE('_EZREALTY_DETAILS_PWAREHOUSE','Anteil Geschäft/Lager in %');
DEFINE('_EZREALTY_DETAILS_LOADING','Lademöglichkeiten');
DEFINE('_EZREALTY_DETAILS_NOADFEAT','Keine zusätzlichen Besonderheiten gelistet');
DEFINE('_EZREALTY_DETAILS_VIDEOTOUR','Video Tour');

DEFINE('_EZREALTY_MIGRATE_USERS','Verschiebe Benutzer');

DEFINE('_EZREALTY_CONFIG_STATESLOCS','Bundesländer und Orte');
DEFINE('_EZREALTY_CONFIG_LOCSONLY','Nur Orte');
DEFINE('_EZREALTY_CONFIG_NEITHER','Weder');
DEFINE('_EZREALTY_CONFIG_STATELOCTITLE','Bundesländer und Orte');
DEFINE('_EZREALTY_CONFIG_STATELOCTITLE_DESC','Definieren Sie, wie Bundesländer und Orte für Ihre Immobilien Adressen eingetragen werden. Manche kleinen Bereiche/Orte erfordern weder ein Bundesland noch einen Ort, während andere nur Orte erfordern und landes-/staatenweite Einträge benötigen beides - Bundesländer und Orte.');
DEFINE('_EZREALTY_CONFIG_YOURVIDEOS','Ihre Video Einstellungen');
DEFINE('_EZREALTY_CONFIG_FLV','Einbinden FLV Video Tour Dateien');
DEFINE('_EZREALTY_CONFIG_FLV_DESC','Sie können nun ermöglichen, extern gehostete FLV Dateien in Ihre WebSeite einzubinden, um als Video Tour angezeigt zu werden. Diese Funktion ist anstelle der üblichen Möglichkeit gedacht, zu einem Satz Dateien als Virtuelle Tour zu verlinken. FLV-Dateien sind Flash Movies, die eine Reihe mehr Möglichkeiten zum Einbinden zulassen, als andere Video-Formate.');
DEFINE('_EZREALTY_CONFIG_FLVWIDTH','Anzeige-Breite');
DEFINE('_EZREALTY_CONFIG_FLVWIDTH_DESC','Die Anzeige-Breite der eingebundenen FLV Dateien. Die Anzeige-Breite ist abhängig von der Anzeige-Position im Template und der Breite des Templates.');
DEFINE('_EZREALTY_CONFIG_FLVHEIGHT','Anzeige-Höhe');
DEFINE('_EZREALTY_CONFIG_FLVHEIGHT_DESC','Die Anzeige-Höhe der eingebundenen FLV Dateien. Diese kann gleich eingestellt werden wie die Anzeige-Breite.');
DEFINE('_EZREALTY_TABS_VIDEO','Video');
DEFINE('_EZREALTY_TABS_NOMAP','Tut uns leid - es ist keine Map für diese Immobilie verfügbar');
DEFINE('_EZREALTY_TABS_NOVIDEO','Tut uns leid - es ist keine Video-Tour für diese Immobilie verfügbar');

DEFINE('_EZREALTY_PROFILE_ERROR_TYPE','Sie müssen einen Verkäufer-Typ auswählen.');
DEFINE('_EZREALTY_PROFILE_TYPE','Verkäufer Typ');
DEFINE('_EZREALTY_LISTINGS_ASC','Einträge aufsteigend');
DEFINE('_EZREALTY_LISTINGS_DESC','Einträge absteigend');

DEFINE('_EZREALTY_LISTINGS_FLVMODE','Diese Seite bietet die Möglichkeit, Embedded FLV Dateien für Video-Touren zu verwenden anstelle von externen Dateien. Bitte tragen Sie die URL zur Ihrer FLV-Datei ein, falls vorhanden.');
DEFINE('_EZREALTY_LOCALITY_DESC','Orts-Beschreibung');
DEFINE('_EZREALTY_SOLD_ERROR','FEHLER - Sie müssen einen Markt-Status für Ihren Immobilien-Eintrag definieren');

DEFINE("_EZREALTY_APF11","Haustiere erlaubt");
DEFINE("_EZREALTY_SEARCH_ANYMARKET","Irgendein Markt-Status");

DEFINE("_EZREALTY_SCH_PETS","Verwende Haustiere erlaubt");
DEFINE("_EZREALTY_SCH_PETSDESC","Wollen Sie die 'Haustiere erlaubt' Ja/Nein-Auswahl-Liste im Suchfilter verwenden?");
DEFINE("_EZREALTY_SCH_LUG","Verwende Abschliessbare Garage");
DEFINE("_EZREALTY_SCH_LUGDESC","Wollen Sie die 'Abschliessbare Garage' Ja/Nein-Auswahl-Liste im Suchfilter verwenden?");



DEFINE("_EZREALTY_DETAILS_VIEWBOOKING","Buchungs-Link verwenden");
DEFINE("_EZREALTY_DETAILS_VIEWBOOKING_DESC","Diese WebSite beinhaltet Buchungs-Möglichkeiten - wollen Sie diese nutzen um Immobilien-Buchungen zu verwalten?");
DEFINE("_EZREALTY_LEADS_STATUS","Status");
DEFINE("_EZREALTY_LEADS_REVIEW","Anfragen Übersicht");
DEFINE("_EZREALTY_LEADS_CALL","Interessenten anrufen");
DEFINE("_EZREALTY_LEADS_RECALL","Nochmals anrufen");
DEFINE("_EZREALTY_LEADS_DOEMAIL","E-Mail an Interessenten");
DEFINE("_EZREALTY_LEADS_DOINSPECTION","Immobilien zur Ansicht organisieren");
DEFINE("_EZREALTY_LEADS_NOINTEREST","Nicht länger interessiert");
DEFINE("_EZREALTY_LEADS_CLOSED","Geschlossen - kein weiteres Interesse");
DEFINE("_EZREALTY_LEADS_NOTES","Admin Notizen:<br />Diese Information ist im Front-End nicht sichtbar. Hinterlegen Sie hier Ihre Notizen zu diesem Vorgang.");
DEFINE("_EZREALTY_LEADS_ADMIN","Verwaltungsaufgaben Anzeige");
DEFINE("_EZREALTY_LEADS_LISTREQ","Anfrage erstellen");

DEFINE("_EZREALTY_MAPPING_INCOMPATIBLE","Leider ist die Google Maps API nicht kompatibel mit diesem Browser");

DEFINE("_EZREALTY_CONFIG_OTHERLINKS","Cross-component Integration Links");
DEFINE("_EZREALTY_CONFIG_BOOKINGS","JomRes Buchungen Integration");
DEFINE("_EZREALTY_CONFIG_BOOKINGS_DESC","Haben Sie die JomRes Buchungs-Komponente sowie den Syncbot installiert, um Vermietungen (Mietbuchungen) zu verwalten?");
DEFINE("_EZREALTY_BOOKINGS","Buchungen");

DEFINE("_EZREALTY_CHECK_PRUNE","Sie sind dabei, alte (abgelaufene) Einträge in den Merklisten unwiderruflich zu entfernen. Sind Sie sicher, dass Sie das wollen?");
DEFINE("_EZREALTY_CHECK_ALERT","Sie sind dabei, E-Mails bezüglich aller abgelaufenen Einträge in der Datenbank zu versenden. Dies kann einige Zeit benötigen, je nach Anzahl. Sind Sie sicher, dass Sie diese E-Mails versenden wollen?");
DEFINE("_EZREALTY_CHECK_CLEAN","Sie sind dabei alte, abgelaufene Einträge aus der Datenbank zu löschen. Die Löschung der Einträge kann nicht rückgängig gemacht werden. Sind Sie sicher, dass Sie die Einträge löschen wollen?");

DEFINE("_EZREALTY_CPANEL_FEEDS","Feeds");
DEFINE("_EZREALTY_SELECT_IMAGE","Bild auswählen");

DEFINE("_EZREALTY_PROFILE_LOGO","Agentur Logo");
DEFINE("_EZREALTY_PROFILE_MAXSIZE","Die maximal erlaubte Bild-Größe beträgt");
DEFINE("_EZREALTY_CONFIG_LOGOWIDTH","Logo Breite");
DEFINE("_EZREALTY_CONFIG_LOGOHEIGHT","Logo Höhe");

DEFINE("_EZREALTY_CONFIG_LOGOWIDTHDESC","Maximal erlaubte Breite des Verkäufer-Logos. Denken Sie daran, dass dieses die Breite ist, die im Front-End Profil sowie im Immobilien-Eintrag angezeigt wird. Bilder/Grafiken, die diese Breite überschreiten, werden beim Upload zurückgewiesen. Eine gute Breite ist 160 Pixel.");
DEFINE("_EZREALTY_CONFIG_LOGOHEIGHTDESC","Maximal erlaubte Höhe des Verkäufer-Logos. Denken Sie daran, dass dieses die Höhe ist, die im Front-End Profil sowie im Immobilien-Eintrag angezeigt wird. Bilder/Grafiken, die diese Höhe überschreiten, werden beim Upload zurückgewiesen. Eine gute Höhe ist 30 Pixel.");

DEFINE("_EZREALTY_HELPER_PETS","Assistenztiere/Handicap");
DEFINE("_EZREALTY_NA","keine Angabe");

DEFINE("_EZREALTY_LISTINGS_PRESCHOOL","Nächster Kindergarten");
DEFINE("_EZREALTY_LISTINGS_PRIMARYSCHOOL","Nächste Grundschule");
DEFINE("_EZREALTY_LISTINGS_HIGHSCHOOL","Nächste weiterführende Schule");
DEFINE("_EZREALTY_LISTINGS_UNIVERSITY","Nächste Universität");

DEFINE("_EZREALTY_CONFIG_MAPTYPE","Mapping-Service auswählen");
DEFINE("_EZREALTY_CONFIG_MAPTYPEDESC","Welchen Mapping-Service wollen Sie benutzen? Falls in Ihrem Joomla-Template viel JavaScript verwendet wird, kann es sein, daß Sie diese Yahoo-Mapping-Option verwenden müssen: <a target='_blank' href='http://developer.yahoo.com/maps/'>http://developer.yahoo.com/maps/</a>.");
DEFINE("_EZREALTY_CONFIG_OSTATUS","Online Status Anzeige");
DEFINE("_EZREALTY_CONFIG_OSTATUSDESC","Online-Status-Anzeigen für IM-Systeme sind unterschiedlich, gelegentlich offline - und haben eine große Auswahl an Anzeige-Buttons. Währen Sie den \"Status Indicator Server\", den Sie für Ihre WebSite verwenden wollen.");
DEFINE("_EZREALTY_DRIVING_DIRECTIONS","Hier klicken für die Fahrtrichtung");

DEFINE("_EZREALTY_PROFILE_SHOWADDY","Anschrift anzeigen");
DEFINE("_EZREALTY_PROFILE_SHOWADDYDESC","&nbsp;&nbsp;Möchten Sie Ihre Anschrift auf Ihrer Profil-Seite anzeigen? - Falls Sie dies auf \"Nein\" setzen, werden weder Ihre Anschrift noch eine Route zu Ihrer Anschrift angezeigt.");
DEFINE("_EZREALTY_CONFIG_CURRENCYCODE","Währungs-Code");
DEFINE("_EZREALTY_CONFIG_CURRENCYCODEDESC","Der aus 3 Buchstaben bestehende Währungs-Code Ihrer Immobilien-Einträge - z. B. EUR, USD - auf die gleiche Art, wie auch Währungs-Codes für Paypal definiert werden. Dieser Code wird von einigen externen Feeds zur Anzeige der Immobilien-Einträge verwendet.");
DEFINE("_EZREALTY_CONFIG_SHORTLIST","Kurz-Liste");
DEFINE("_EZREALTY_CONFIG_SHORTLISTDESC","Wollen Sie das \"Kurz-Eintrag\"-Feature verwenden? Um es benutzen zu können, müssen registrierte User eingeloggt sein. Wenn Sie diesen Zugriff nicht erlauben wollen, stellen Sie dieses Feature auf \"Nein\".");

DEFINE("_EZREALTY_LISTINGS_SCHOOLDIST","Schulbezirk");
DEFINE("_EZREALTY_LISTINGS_HOFEES","Instandshaltungs-/Nebenkosten");
DEFINE("_EZREALTY_APF12","Aufzug");
DEFINE("_EZREALTY_SPECS","Kurzbeschreibung");
DEFINE("_EZREALTY_CLICK","Klicken zum Vergrößern");
DEFINE("_EZREALTY_OHOUSE","Besichtigung");
DEFINE("_EZREALTY_DETAILS_MARKET6","nicht verfügbar");
DEFINE("_EZREALTY_ADDOWNER_ERROR","FEHLER - benennen Sie einen Makler/Besitzer, der für diesen Eintrag verantwortlich ist");

DEFINE("_EZREALTY_CPANEL_FEEDSDESC","Zusätzlich zu den RSS 2.0 Feeds, die immer verwendet werden konnten, bietet EZ Realty nun die Möglichkeit, Ihre Immobilien-Einträge einigen externen, großen Immobilien-Seiten anzubieten.<br /><br /><strong>Diese Feeds sind neue Features - und noch in der Versuchsphase - sollten Sie Schwierigkeiten damit haben, senden Sie bitte ein Support Ticket mit einer Beschreibung des Bugs.</strong>");
DEFINE("_EZREALTY_CPANEL_GOOGLE1","Ihr Google RSS 2.0 Feed");
DEFINE("_EZREALTY_CPANEL_GOOGLE2","Besuchen Sie Google für mehr Informationen");
DEFINE("_EZREALTY_CPANEL_EDGEIO1","Ihr Edgeio RSS 2.0 Feed");
DEFINE("_EZREALTY_CPANEL_EDGEIO2","Besuchen Sie Edgeio für mehr Informationen");
DEFINE("_EZREALTY_CPANEL_PROPSMART1","Ihr PropSmart RSS 2.0 Feed");
DEFINE("_EZREALTY_CPANEL_PROPSMART2","Besuchen Sie PropSmart für mehr Informationen");
DEFINE("_EZREALTY_MIGRATE_MEMBERS","User einbinden");

DEFINE("_EZREALTY_CPANEL_COUNTRIES","Länder/Staaten Verwaltung");
DEFINE("_EZREALTY_CPANEL_STATES","Bundesländer Verwaltung");
DEFINE("_EZREALTY_CPANEL_LOCALITIES","Städte/Orte Verwaltung");
DEFINE("_EZREALTY_CPANEL_BEDROOMS","Schlafzimmer Verwaltung");
DEFINE("_EZREALTY_CPANEL_PROPERTYMGR","Immobilien Verwaltung");

DEFINE("_EZREALTY_PRICE_DISPLAYVALUE","Wert (Preis) anzeigen");
DEFINE("_EZREALTY_FILTER_MLS","-Alle MLS ID's-");
DEFINE("_EZREALTY_FILTER_AGENTS","-Alle Makler ID's-");


//****************************************************//
//  EXISTING LANGUAGE TAGS THAT HAVE HAD THEIR CONTENT CHANGED FOR THE 5.0.0 RELEASE
//****************************************************//


DEFINE("_EZREALTY_CONFIG_USEMAP","Mapping verwenden");
DEFINE("_EZREALTY_CONFIG_USEMAPDESC","Möchten Sie einen der Mapping-Services verwenden? Falls ja, lesen Sie bitte die Nutzungsbedingungen hier: <a target='_blank' href='http://www.google.com/apis/maps/terms.html'>http://www.google.com/apis/maps/terms.html</a> - oder lesen Sie die Bedingungen bei Yahoo Mapping Site");
DEFINE("_EZREALTY_CONFIG_MAPAPI","Mapping API Nummer");
DEFINE("_EZREALTY_CONFIG_MAPAPIDESC","Sie MÜSSEN eine Mapping API Nummer für Ihre WebSite beantragen und hier eintragen, falls Sie das Mapping verwenden. Beantragen Sie Ihre API Nummer hier: <a target='_blank' href='http://www.google.com/apis/maps/'>http://www.google.com/apis/maps/</a> - oder gehen Sie zur Yahoo Mapping Site, um eine Yahoo Mapping API zu erhalten. Yahoo Mapping API\'s können Sie hier beantragen: <a target='_blank' href='http://developer.yahoo.com/maps/'>http://developer.yahoo.com/maps/</a>");
DEFINE("_EZREALTY_CONFIG_OP2","Definieren Sie die Benachrichtigungen, die Sie erhalten möchten");

DEFINE("_EZREALTY_DETAILS_PROPPRICEDESC","<font color='#FF0000'>Dieses Datenbankfeld enthält eine Eingabe-Maske. Geben Sie Zahlen in diesem Format ein - 10000.00 - verwenden Sie kein Komma!</font>");

DEFINE("_EZREALTY_CONFIG_ARRVIEW","Email Verkäufer Link");
DEFINE("_EZREALTY_CONFIG_ARRVIEWDESC","Möchten Sie den \"Email Verkäufer\" Kontakt-Link in der detaillierten Immobilien-Information anzeigen?");
DEFINE("_EZREALTY_DETAILS_PROPADDRESS2","Straße");
DEFINE("_EZREALTY_CONFIG_TITLE","Einstellung");
DEFINE("_EZREALTY_CONFIG_COUNTRYDESC","Falls Sie Land/Staat nicht in Ihren Immobilien-Einträgen und dem Interessenten-Registrierungs-Formular verwenden möchten, tragen Sie hier \"Nein\" ein, um die Anzeige zu verstecken.");
DEFINE("_EZREALTY_CLEANDB_SUCCESS","In der Datenbank wurden die Anzeigen gelöscht, die die vereinbarte Anzahl von Page-Impressions bzw. Tagen überschritten haben");
DEFINE("_EZREALTY_CLEANDB_FAIL","Die Datenbank wurde nicht bereinigt, da Sie momentan auf Ihrer WebSite EZ Realty ohne Ablauf-Management verwenden");

DEFINE("_EZREALTY_PRICES_TITLE","Such-Filter Preise verwalten");
DEFINE("_EZREALTY_MODPRICES_TITLE","Such-Filter Preis-Bereiche");
DEFINE("_EZREALTY_PRICES_RANGE","Such-Filter Preis-Bereich");
DEFINE("_EZREALTY_MODPRICES_RANGE","Such-Filter Preis-Bereich definieren");
DEFINE("_EZREALTY_MODPRICES_SAVED","Such-Filter Preis-Bereich gespeichert");
DEFINE("_EZREALTY_MODPRICES_ERROR1","Sie müssen einen Preis-Bereich eintragen");
DEFINE("_EZREALTY_PRICES_EDITTAG","Such-Filter Preis-Bereich editieren");


//****************************************************//
//  EXISTING LANGUAGE TAGS THAT WILL BE REMOVED       //
//****************************************************//

DEFINE("_EZREALTY_CONFIG_CPITITLE","Kunden Immobilien Information");
DEFINE("_EZREALTY_CONFIG_CPIDESC","Die 3 benutzerdefinierten Features geben Ihnen die Möglichkeit, besonders wichtige Informationen für Ihre Auflistung zu definieren - z. B. jährliche Heizkosten, jährliche Kreditraten/Steuern u.ä. Diese Namen (Bezeichnungen) erscheinen im \"Eintrag hinzufügen/bearbeiten\", in dem Sie der Immobilie Werte zuordnen können, ebenso wie im Front-End.");

DEFINE("_EZREALTY_CONFIG_APFTITLE","Zusätzliche Immobilien-Besonderheiten");
DEFINE("_EZREALTY_CONFIG_APFDESC","Die 10 zusätzlichen Immobilien-Besonderheiten erscheinen als Ja/Nein-Auswahlboxen im \"add/edit-Immobilieninfo-Bereich\". Im Front-End werden diese Besonderheiten als Punktliste angezeigt. Sie haben die Möglichkeit, die Bezeichnung der Besonderheiten zu definieren, so dass sie Ihren örtlichen Gegebenheiten entsprechen. Doch bitte beachten Sie, dass Sie die einmal vorgenommene Definition nicht mehr ändern sollten, da dies die korrekte Anzeige der Immobilien-Information verändern könnte.");
DEFINE("_EZREALTY_CONFIG_FEATURETITLE","Spezielle Besonderheiten Box");
DEFINE("_EZREALTY_CONFIG_FEATURETITLEDESC","Wie möchten Sie die spezielle Besonderheit Ihrer Immobilien-Einträge bezeichnen? (z. B. wirtschaftliche Highlights usw.). Dies erstellt den Titel dieser Box in der detaillierten Immobilien-Beschreibung.");
DEFINE("_EZREALTY_CONFIG_STATES","Verwende Bundesländer");
DEFINE("_EZREALTY_CONFIG_STATESDESC","Falls Sie Immobilien in einer Region verkaufen, die keine Bundesländer besitzt wie grössere Staaten, tragen Sie hier \"Nein\" ein um diese Anzeige zu verstecken.");


//****************************************************//
//  TAGS FROM THE CONFIGURATION AREA THAT ARE NEEDED  //
//****************************************************//


DEFINE("_EZREALTY_SPECIAL_FEATURE","Gemeinschaft Spezial");

DEFINE("_EZREALTY_CONFIG_CPI1","Benutzerdefiniert 1");
DEFINE("_EZREALTY_CONFIG_CPI2","Benutzerdefiniert 2");
DEFINE("_EZREALTY_CONFIG_CPI3","Benutzerdefiniert 3");

DEFINE("_EZREALTY_APF1","Pool");
DEFINE("_EZREALTY_APF2","Offener Kamin");
DEFINE("_EZREALTY_APF3","Grillplatz");
DEFINE("_EZREALTY_APF4","Gartenhaus");
DEFINE("_EZREALTY_APF5","Abschließbare Garage");
DEFINE("_EZREALTY_APF6","Einbauschränke");
DEFINE("_EZREALTY_APF7","Zentralheizung");
DEFINE("_EZREALTY_APF8","Klimaanlage");
DEFINE("_EZREALTY_APF9","Nächste Einkaufsmöglichkeiten");
DEFINE("_EZREALTY_APF10","Nächste Schulen");


DEFINE("_EZREALTY_PREMIUM","Premium");
DEFINE("_EZREALTY_FEATURED","Spezial");


//****************************************************//
//  TAGS ADDED FOR THE 5.0.1 BETA RELEASE             //
//****************************************************//



DEFINE("_EZREALTY_TEMPLATE_ERROR","Error - you must define a layout template in the configuration area");




//****************************************************//
//  TAGS ADDED FOR THE 5.1.0 STABLE RELEASE           //
//****************************************************//


DEFINE("_EZREALTY_CONFIG_MARKETSTATUS","Select which choices to use in the Market Status List");
DEFINE("_EZREALTY_CONFIG_PROPTYPE","Select which choices to use in the Property Type List");
DEFINE("_EZREALTY_CONFIG_FREQUITLIST","Select which choices to use in the Rental Frequency List");

DEFINE("_EZREALTY_CPANEL_STATIC","Static Content");
DEFINE("_EZREALTY_CPANEL_DOCUMENTATION","Documentation");
DEFINE("_EZREALTY_CPANEL_MLIST","Mailing List Submissions");

DEFINE("_EZREALTY_MANAGE_STATIC","Manage Static Content");
DEFINE("_EZREALTY_CONTENT_ITEM","Content Item");
DEFINE("_EZREALTY_CONTENT_ERROR","you must add some content");
DEFINE("_EZREALTY_MANAGE_SUBSCRIBER","Manage Mailing List Submissions");
DEFINE("_EZREALTY_SUBSCRIBER_NAME","Name");
DEFINE("_EZREALTY_SUBSCRIBER_EMAIL","Email address");
DEFINE("_EZREALTY_SUBSCRIBER_CONFIRMED","Confirmed");
DEFINE("_EZREALTY_SUBSCRIBER_DATE","Date");
DEFINE("_EZREALTY_ERROR_SUBNAME","Error - you must include a name");
DEFINE("_EZREALTY_ERROR_EMAIL","Error - you must include an email address");
DEFINE("_EZREALTY_EMAIL_FORMAT_ERROR","Error - incorrect email address format : please supply a valid email address");
DEFINE("_EZREALTY_REGISTERED_ACCESS","Sorry - you must be a registered and logged in member to view this listing.");

DEFINE("_EZREALTY_APF13","Extra 1");
DEFINE("_EZREALTY_APF14","Extra 2");
DEFINE("_EZREALTY_APF15","Extra 3");
DEFINE("_EZREALTY_APF16","Extra 4");
DEFINE("_EZREALTY_APF17","Extra 5");
DEFINE("_EZREALTY_APF18","Extra 6");
DEFINE("_EZREALTY_APF19","Extra 7");
DEFINE("_EZREALTY_APF20","Extra 8");


DEFINE("_EZREALTY_BROKENLINK_WARNING","***NOTE*** Some email programmes break long links, so if yours has done this - copy and paste the link parts into your browser address bar.");
DEFINE("_EZREALTY_REQUEST_FOLLOWLINK","Please use the link below to view the property in question:-");
DEFINE("_EZREALTY_MAIL_LISTDET","Listing details");
DEFINE("_EZREALTY_MAIL_PROPADD1","-------------------------------------------------------");
DEFINE("_EZREALTY_MAIL_PROPADD2","Property address");
DEFINE("_EZREALTY_MAIL_PROPADD3","-------------------------------------------------------");
DEFINE("_EZREALTY_MAIL_CONTACTDET","Contact details");
DEFINE("_EZREALTY_MAIL_EMAIL","Email address:-");
DEFINE("_EZREALTY_DETAILS_DECLAT","Decimal Latitude");
DEFINE("_EZREALTY_DETAILS_DECLONG","Decimal Longitude");
DEFINE("_EZREALTY_SEARCH_ANY","Any property");
DEFINE("_EZREALTY_SEARCH_ONLYFEAT","Only featured properties");
DEFINE("_EZREALTY_SCH_FEAT","Use featured listings");
DEFINE("_EZREALTY_SCH_FEATDESC","Do you want to allow people to search for properties based on featured listing status?");

DEFINE("_EZREALTY_CONFIG_MAPTYPE3","Google Decimal Coordinates");
DEFINE("_EZREALTY_MAP_DIRECTIONS","Get Driving Directions");

DEFINE("_EZREALTY_PRESCHOOL","Pre-school");
DEFINE("_EZREALTY_PRIMARYSCHOOL","Primary school");
DEFINE("_EZREALTY_HIGHSCHOOL","High school");
DEFINE("_EZREALTY_UNIVERSITY","University");
DEFINE("_EZREALTY_REQUESTMORE","Request more Info");
DEFINE("_EZREALTY_LOADING_IMAGE","Loading image. Please wait");
DEFINE("_EZREALTY_PROPERTY_TOOLS","Property Tools");
DEFINE("_EZREALTY_PROPERTY_INFO","Property info");
DEFINE("_EZREALTY_LISTED_BY","Listed by");
DEFINE("_EZREALTY_COUNCIL","Local council");


DEFINE("_EZREALTY_FORGOT_LOCALITY","Make sure that your locality etc is available for use in the property address - BEFORE getting to the add/edit details page!! Do it on the next page!!");
DEFINE("_EZREALTY_FORGOT_LOCALITY2","Make sure that your locality etc is available for use in the property address!! Do it now!!");

DEFINE("_EZREALTY_SEARCH_BATHROOMS","Bathrooms");
DEFINE("_EZREALTY_SELECT_BATHROOMS","Any bathroom number");

DEFINE("_EZREALTY_SCH_BTHROOMS","Use Bathrooms");
DEFINE("_EZREALTY_SCH_BTHROOMSDESC","Do you want to use the bathrooms select list in the main search filter");
DEFINE("_EZREALTY_TYPE_TENDER","Sale by Tender");

DEFINE("_EZREALTY_FNA","File not available");
DEFINE("_EZREALTY_KSNA","Your keyserver file is missing");

DEFINE("_EZREALTY_PNPFC","You can contact this seller once their profile is approved");
DEFINE("_EZREALTY_MAP_CHOOSE_ANOTHER","You must use Yahoo mapping or Googles decimal coordinates mapping with this template.");

DEFINE("_EZREALTY_MAP_TOHERE","To here");
DEFINE("_EZREALTY_MAP_FROMHERE","From here");
DEFINE("_EZREALTY_MAP_START","Start address");
DEFINE("_EZREALTY_MAP_END","End address");

DEFINE("_EZREALTY_SHORTLIST_ERROR","Error - you already have this listing shortlisted.");
DEFINE("_EZREALTY_LOCALITY_DEMOGRAPHICS","Locality demographics");

DEFINE("_EZREALTY_ENTER_CAPTCHA","Enter security code shown below");
DEFINE("_EZREALTY_SECURITY_FAILED","Error - Incorrect Security Code");
DEFINE("_EZREALTY_PRINT_ADMIN","Print");
DEFINE("_EZREALTY_FIND_COORDINATES","CLICK HERE to find your decimal coordinates");

DEFINE("_EZREALTY_CONFIG_PAGEORDER","Default page order");
DEFINE("_EZREALTY_CONFIG_PAGEORDERDESC","This is the general ordering of properties on the frontend pages.");

DEFINE("_EZREALTY_FILTER_ALLSTREETS","-All Streets-");
DEFINE("_EZREALTY_FILTER_ALLIDS","-All ID Numbers-");

DEFINE("_EZREALTY_LISTS_STATEFIRST","Select the state first - then locality");

DEFINE("_EZREALTY_CUSTOM4","Custom 4");
DEFINE("_EZREALTY_CUSTOM5","Custom 5");
DEFINE("_EZREALTY_FIELD_SEARCHABLE","This field is searchable");
DEFINE("_EZREALTY_SCH_CUST4","Use custom 4 data field");
DEFINE("_EZREALTY_SCH_CUST4DESC","Do you want to use the custom 4 data field in your search filter. Remember to rename this field name in the language file to something meaningful.");
DEFINE("_EZREALTY_SCH_CUST5","Use custom 5 data field");
DEFINE("_EZREALTY_SCH_CUST5DESC","Do you want to use the custom 5 data field in your search filter. Remember to rename this field name in the language file to something meaningful.");
DEFINE("_EZREALTY_ANYCUSTOM4","Any custom 4");
DEFINE("_EZREALTY_ANYCUSTOM5","Any custom 5");
DEFINE("_EZREALTY_DISPLAY_VALUE","Display value");
DEFINE("_EZREALTY_VIEW_NEARBY","View nearby properties");


DEFINE("_EZREALTY_WRITABLE","Writeable");
DEFINE("_EZREALTY_UNWRITABLE","Unwriteable");
DEFINE("_EZREALTY_SAVE","Save");
DEFINE("_EZREALTY_LICENSE_KEY","License Key Number");
DEFINE("_EZREALTY_LICENSE_ERROR","Error - you must insert a license key number");

DEFINE("_EZREALTY_DUPLICATE_PROFILE_ERROR","Error - each site member can only have one profile, and you have already created a profile for this username.");




//****************************************************//
//  TAGS CHANGED FOR THE 5.1.0 STABLE RELEASE         //
//****************************************************//


DEFINE("_EZREALTY_REQUEST_PROPVIEWING","has requested a property inspection appointment.");
DEFINE("_EZREALTY_TYPE_SWAP","Property Exchange");
DEFINE("_EZREALTY_MYLIGHTBOX","My Shortlist");
DEFINE("_EZREALTY_CPANEL_INTRO2","Welcome to EZ Realty.");
DEFINE("_EZREALTY_CPANEL_PRUNE","Prune Shortlist");
DEFINE("_EZREALTY_CONFIG_SHOWPROF_DESC","If you want to over-ride the display of profiles and have all property enquiries directed to you - you can do this by setting this to NO. Members will still have to create their profiles, but those details won't be displayed.");


?>