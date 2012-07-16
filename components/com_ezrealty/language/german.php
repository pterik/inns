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

DEFINE("_EZREALTY_NOREMOVE","Zur Zeit nicht l�schbar, da noch von Eintr�gen verwendet.");
DEFINE("_EZREALTY_CLEAN","Entferne abgelaufene Eintr�ge.");

// configuration area settings

DEFINE("_EZREALTY_CONFIG_GENSET","Generelle Bild-Pfad Einstellungen");

DEFINE("_EZREALTY_CONFIG_IMAGESIZES","Thumbnail- & Bildgr��en");
DEFINE("_EZREALTY_CONFIG_WIDTHPROPIMG","Haupt-Bild Breite");
DEFINE("_EZREALTY_CONFIG_WIDTHPROPIMGDESC","Breite des Haupt-Bildes f�r Immobilien und Grundrissplan, wie es in der Details-Ansicht Seite erscheint. Es wird in Pixel wiedergegeben, um Ihnen die Einstellung f�r Ihr Template zu erleichtern. Ihre Bilder werden in die angegebene Gr��e umgewandelt.");
DEFINE("_EZREALTY_CONFIG_WIDTHCATTHUMB","Kategorie Thumbnail Breite");
DEFINE("_EZREALTY_CONFIG_WIDTHCATTHUMBDESC","Breite der Bilder, die in den Kategorien verwendet werden.");
DEFINE("_EZREALTY_CONFIG_WIDTHTHUMB","Thumbnail Max. Breite");
DEFINE("_EZREALTY_CONFIG_WIDTHTHUMBDESC","Breite der Thumbnails, wie sie dann f�r den Grundst�ck-Eintrag im Front-End erscheinen.");

DEFINE("_EZREALTY_CONFIG_TNCREATOR","Thumbnail Ersteller");
DEFINE("_EZREALTY_CONFIG_GDLIMIT","GD unterst�tzt nur JPG/JPEG und PNG!");
DEFINE("_EZREALTY_CONFIG_GDFOUND","GD gefunden");
DEFINE("_EZREALTY_CONFIG_GDCHOOSE","W�hlen Sie den Bild-Prozessor f�r Thumbnail-Erstellung.");
DEFINE("_EZREALTY_CONFIG_THUMBQUAL","Thumbnail Qualit�t");
DEFINE("_EZREALTY_CONFIG_THUMBQUALDESC","Qualit�t der erstellten Thumbnails.");
DEFINE("_EZREALTY_CONFIG_IMGDIR","Bild-Ordner");
DEFINE("_EZREALTY_CONFIG_IMGDIRDESC","Der Standard Bild-Ordner ist 'ezrealty', zu finden im components/com_ezrealty/ezrealty Pfad. DieThumbnails sind im gleichen Pfad, aber in dem Unterordner 'th'. Falls Sie den Ordnername �ndern, m�ssen Sie auch einen neuen Unterordner 'th' manuell erstellen! �ndern sie auf KEINEN FALL den NAME des 'th'-Ordners.");
DEFINE("_EZREALTY_CONFIG_TNNONE","Keine");
DEFINE("_EZREALTY_CONFIG_TNGD1","GD Library");
DEFINE("_EZREALTY_CONFIG_TNGD2","GD2 Library");

DEFINE("_EZREALTY_CONFIG_YOURBIZSET","Ihre Firmen Einstellungen");
DEFINE("_EZREALTY_CONFIG_BIZNAME","Firmen Name");
DEFINE("_EZREALTY_CONFIG_BIZNAMEDESC","Der Name Ihres Immobilien-Unternehmens, wie er in der Komponenten-�berschrift (Header) und an anderen Stellen erscheint z.B. auf der Druck-Seite und eMail-Seite.");
DEFINE("_EZREALTY_CONFIG_BIZAD","Firmen Anschrift");
DEFINE("_EZREALTY_CONFIG_BIZADDESC","Ihre Firmen Anschrift. Diese erscheint in der �berschrift (Header) der Druck-Seite damit Ihre m�glichen K�ufer Ihre Daten haben.");
DEFINE("_EZREALTY_CONFIG_TELEPHONE","Kontakt Telefon");
DEFINE("_EZREALTY_CONFIG_TELEPHONEDESC","Ihre Kontakt Telefon Nummer, angezeigt im 'Termin-Absprache'-Formular und in der Druck-Seite.");
DEFINE("_EZREALTY_CONFIG_EMAIL","eMail Adresse");
DEFINE("_EZREALTY_CONFIG_EMAILDESC","eMail Adresse, wie sie in dem Grundst�cks-Besichtigung Anfrage- und dem eMail-Listen Anforderungsformular erscheint.");
DEFINE("_EZREALTY_CONFIG_CURRENCYSIGN","W�hrungs-Symbol");
DEFINE("_EZREALTY_CONFIG_CURRENCYSIGNDESC","Das W�hrungs-Symbol, das vor den Immobilien-Preisen erscheinen soll.");
DEFINE("_EZREALTY_CONFIG_BIZINTRO","Firmen Einleitung");
DEFINE("_EZREALTY_CONFIG_BIZINTRODESC","Einleitungs-Text zu<br />Ihrem Immobilien-Unternehmen.");

DEFINE("_EZREALTY_CONFIG_LAYOUTSETTINGS","Verwalten Sie das Front-End Layout Ihrer Seite");

DEFINE("_EZREALTY_CONFIG_TPL","Front-End Template");
DEFINE("_EZREALTY_CONFIG_TPLDESC","W�hlen Sie das Layout f�r Ihr Front-End. Diese Funktion beeinflusst das Erscheinungsbild der Immobilien 'Detail-Seite' und der 'Druck Detail-Seite'.");
DEFINE("_EZREALTY_CONFIG_SELTPL","W�hle Template");

DEFINE("_EZREALTY_CONFIG_PROPPERPAGE","Immobilien pro Seite");
DEFINE("_EZREALTY_CONFIG_PROPPERPAGEDESC","Anzahl der Immobilien, die pro Seite im Front-End angezeigt werden sollen.");
DEFINE("_EZREALTY_CONFIG_RECFRIEND","'Empfehle Immobilie' Link");
DEFINE("_EZREALTY_CONFIG_RECFRIENDDESC","M�chten Sie Ihren Besuchern das \"Empfehle Immobilie einem Bekannten\" Sonderfunktion erm�glichen?");
DEFINE("_EZREALTY_CONFIG_MAILINGVIEW","Der 'Zur Mailing Liste hinzuf�gen' Link");
DEFINE("_EZREALTY_CONFIG_MAILINGDESC","M�chten Sie die \"Zur Mailing Liste hinzuf�gen\" eMail-Box anzeigen lassen? Das erlaubt Besuchern, Ihnen eine automatische eMail zu senden und Sie k�nnen die beinhalteten Details Ihrem Mailing List Manager hinzuf�gen.");
DEFINE("_EZREALTY_CONFIG_SHOWLINKS","Zeige 'Links Box'");
DEFINE("_EZREALTY_CONFIG_SHOWLINKSDESC","M�chten Sie die 'Links Box' anzeigen lassen? - z.B. beinhaltet diese die 'Map-Link', 'Drucke Seite Link' und 'Zu Favoriten hinzuf�gen' Optionen.");
DEFINE("_EZREALTY_CONFIG_SC","Staat/Land");
DEFINE("_EZREALTY_CONFIG_SCDESC","M�chten Sie die Staat/Land Auswahl-Boxen im 'Erweiterte Suche Filter' anzeigen lassen?");

DEFINE("_EZREALTY_CONFIG_RSS","RSS Feed");
DEFINE("_EZREALTY_CONFIG_RSSDESC","M�chten Sie einen RSS Feed Link mit 'Neueste Immobilien Eintr�ge' und 'Besichtigungs-Eintr�ge' anzeigen lassen?");
DEFINE("_EZREALTY_CONFIG_RSSNN","'Neueste Immobilie(n)' RSS Feed Bezeichnung");
DEFINE("_EZREALTY_CONFIG_RSSNNDESC","Wie m�chten Sie den 'Neueste Immobilie(n) RSS Feed nennen?");
DEFINE("_EZREALTY_CONFIG_RSSOH","'Besichtigung' RSS Feed Bezeichnung");
DEFINE("_EZREALTY_CONFIG_RSSOHDESC","Wie m�chten Sie den 'Besichtigung' RSS Feed nennen?");

DEFINE("_EZREALTY_CONFIG_LEAD","Immobilien Eintr�ge");
DEFINE("_EZREALTY_CONFIG_LEADDESC","M�chten Sie den Besuchern erlauben, Ihre Immobilien-Anfragen (W�nsche) auf Ihrer Seite einzutragen (registrieren)?");

DEFINE("_EZREALTY_CONFIG_MEMSALES","Bearbeite Front-End-Eintr�ge der Immobilien durch registrierte Mitglieder");
DEFINE("_EZREALTY_CONFIG_MEMLISTINGS","Mitglieder Eintr�ge");
DEFINE("_EZREALTY_CONFIG_MEMLISTINGSDESC","M�chten Sie registrierten Mitgliedern erlauben, ihre Immobilien �ber das Front-End Eintrag-Panel zum Verkauf anzubieten/einzutragen?");
DEFINE("_EZREALTY_CONFIG_NOTIFICATION","Eintr�ge Benachrichtigung");
DEFINE("_EZREALTY_CONFIG_NOTIFICATIONDESC","M�chten Sie �ber neue oder aktualisierte Eintr�ge informiert werden?");
DEFINE("_EZREALTY_CONFIG_MEMAPPROVAL","�berpr�fung");
DEFINE("_EZREALTY_CONFIG_MEMAPPROVALDESC","Ben�tigen neue oder aktualisierte Eintr�ge eine �berpr�fung durch den Administrator, bevor sie ver�ffentlicht werden?");
DEFINE("_EZREALTY_CONFIG_NUMLISTINGS","Anzahl der Eintr�ge");
DEFINE("_EZREALTY_CONFIG_NUMLISTINGSDESC","Wieviele Eintr�ge d�rfen die Mitglieder eintragen?");

DEFINE("_EZREALTY_CONFIG_MEMBERSINTRO","Mitglieder Bereich Einleitung/Anweisung");
DEFINE("_EZREALTY_CONFIG_MEMBERSINTRODESC","Schreiben Sie eine Einleitung/Anweisung f�r den Mitglieder-Bereich - z.B. verweisen Sie auf die 'Allgemeinen Gesch�ftsbedingungen (AGB)' f�r die Eintr�ge usw.");
DEFINE("_EZREALTY_CONFIG_TERMS","Allgemeine Gesch�ftsbedingungen");
DEFINE("_EZREALTY_CONFIG_TERMSDESC","Publizieren Sie Ihre AGB f�r die Eintr�ge.");

DEFINE("_EZREALTY_CONFIG_IMG1","Bilder");
DEFINE("_EZREALTY_CONFIG_IMG2","Bild-Einstellungen");
DEFINE("_EZREALTY_CONFIG_BIZ1","Gesch�ft");
DEFINE("_EZREALTY_CONFIG_BIZ2","Gesch�fts-Einstellungen");
DEFINE("_EZREALTY_CONFIG_LAY1","Layout");
DEFINE("_EZREALTY_CONFIG_LAY2","Seiten-Layout");
DEFINE("_EZREALTY_CONFIG_MEM1","Mitglieder");
DEFINE("_EZREALTY_CONFIG_MEM2","Mitglieder-Verk�ufe");
DEFINE("_EZREALTY_CONFIG_PAID1","Bezahlte Eintr�ge");
DEFINE("_EZREALTY_CONFIG_CUST1","Kunde");


DEFINE("_EZREALTY_CONFIG_PP","Ihre PayPal Einstellungen f�r bezahlte Eintr�ge");

DEFINE("_EZREALTY_CONFIG_PAIDLISTINGS","Bezahlte Eintr�ge");
DEFINE("_EZREALTY_CONFIG_PAIDLISTINGSDESC","M�chten Sie bezahlte Immobilien-Eintr�ge auf Ihrer WebSite anbieten? Bezahlte Eintr�ge erlauben den Mitgliedern, zus�tzliche Bilder und Informationen in ihren Eintrag einzugeben.");
DEFINE("_EZREALTY_CONFIG_PPEMAIL","PayPal eMail Adresse");
DEFINE("_EZREALTY_CONFIG_PPEMAILDESC","Dies muss Ihre prim�re Paypal Adresse sein.<br /><br />Besuchen Sie 
<a target='_blank' href='http://paypaltech.com/Stephen/affiliate/hemail.htm'>PayPal Tech Resources</a>
um eine einfache Methode kennenzulernen um Ihre Paypal Email zu verschl�sseln, um sich for Spam zu sch�tzen.Dann f�gen Sie den Paypal Code in das Feld ein. BENUTZEN SIE DIESEN CODE NICHT f�r Ihre �berpr�fte Email-Adresse. Diese muss unten im richtigen Format eingegeben werden.");
DEFINE("_EZREALTY_CONFIG_CHECKMAIL","�berpr�fte eMail Adresse");
DEFINE("_EZREALTY_CONFIG_CHECKMAILDESC","Wiederholen Sie Ihre PRIM�RE PayPal eMail Adresse hier. Sie wird verwendet, um die Transaktionen �ber Formulare mit Ihrer PayPal eMail Adresse zu �berpr�fen und gegen Betrug zu sch�tzen. Diese eMail Adresse DARF NICHT verschl�sselt sein!!");
DEFINE("_EZREALTY_CONFIG_PPCURRENCY","W�hrungs Code");
DEFINE("_EZREALTY_CONFIG_PPCURRENCYDESC","Dies muss der 3-buchstaben PayPal W�hrungs Code f�r Ihre PRIM�RE PayPal W�hrung sein - KEINE von IHNEN erdachte.");
DEFINE("_EZREALTY_CONFIG_PPBUTTON","Button Grafik");
DEFINE("_EZREALTY_CONFIG_PPBUTTONDESC","Name der Button Grafik um Eintr�ge im Front-End zu aktualisieren. Die Button Grafik muss in den Front-End Bilder-Ordner geladen werden.");

DEFINE("_EZREALTY_CONFIG_PPPREMIUM","Standard Upgrade Name");
DEFINE("_EZREALTY_CONFIG_PPPREMIUMDESC","Wie m�chten Sie Ihre Eintrag-Erweiterungen (Upgrades) nennen - z.B. Premium/Erweiterter Eintrag usw. Diese Bezeichnung erscheint im Button Code und in den PayPal Transaktions- (Bezahl-) Berichten.");
DEFINE("_EZREALTY_CONFIG_PPCOST","Standard Upgrade Kosten");
DEFINE("_EZREALTY_CONFIG_PPCOSTDESC","Die Kosten f�r das Upgrade von einem FREIEN Immobilien Eintrag zu einem BEZAHLTEN Eintrag.");
DEFINE("_EZREALTY_CONFIG_FPNAME","Spezial-Eintrag Upgrade Name");
DEFINE("_EZREALTY_CONFIG_FPNAMEDESC","Wie m�chten Sie Ihre Spezial-Eintrag Upgrades nennen - z.B. Spezial-Eintrag (Sonder-Eintrag/Besonderes). Diese Bezeichnung erscheint im Button Code und in den PayPal Transaktions- (Bezahl-) Berichten.");
DEFINE("_EZREALTY_CONFIG_FPCOST","Spezial-Eintrag Upgrade Kosten");
DEFINE("_EZREALTY_CONFIG_FPCOSTDESC","Die Kosten f�r das Upgrade von einem bezahlten Immobilien-Eintrag zu einem Spezial-Eintrag. Denken Sie daran - die Mitglieder k�nnen nicht direkt von einem FREIEN Eintrag upgraden - sie m�ssen erst zu einem Standard Upgrade Eintrag upgraden.");

DEFINE("_EZREALTY_CONFIG_PPPOSTMODE","�bertragungs Modus");
DEFINE("_EZREALTY_CONFIG_PPPOSTMODEDESC","Stellen Sie auf 'Live Verk�ufe' um echte Upgrades �ber das PayPal System zu verkaufen, oder testen Sie Ihre Installation/Konfiguration durch 'Test Verk�ufe' �ber die PayPal Entwickler-Netzwerk Sandbox (engl. PayPal Developers Network Sandbox).");
DEFINE("_EZREALTY_CONFIG_LS","Live Verk�ufe");
DEFINE("_EZREALTY_CONFIG_TS","Test Verk�ufe");

DEFINE("_EZREALTY_CONFIG_SUCCESS","Erfolg Seite");
DEFINE("_EZREALTY_CONFIG_SUCCESSDESC","Geben Sie Ihren Text f�r eine erfolgreiche PayPal Transaktion ein (erscheint auf der 'erfolgreiche Transaktion' Seite).");
DEFINE("_EZREALTY_CONFIG_CANCEL","Annulierungs Seite");
DEFINE("_EZREALTY_CONFIG_CANCELDESC","Geben Sie Ihren Text f�r eine stornierte/nicht erfolgreiche PayPal Transaktion ein (erscheint auf der 'nicht erfolgreich Transaktion' Seite).");

DEFINE("_EZREALTY_CONFIG_YES","Ja");
DEFINE("_EZREALTY_CONFIG_NO","Nein");

DEFINE("_EZREALTY_CONFIG_CONFIGSAVED","Einstellungen gespeichert");

// Miscellaneous administration area language tags - error notices and dropdown list boxes

DEFINE("_EZREALTY_ADMIN_BACK","Zur�ck zum Immobilien Management");
DEFINE("_EZREALTY_ADMIN_SOURCEERROR","FEHLER: Quelldatei nicht gefunden!");

// admin.ezrealty.html.php language tags

// Manage property listings page

DEFINE("_EZREALTY_LISTINGS_TITLE","Verwalte Immobilien-Eintr�ge");
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
DEFINE("_EZREALTY_LISTINGS_PUBSTATUS","Ver�ffentlicht");
DEFINE("_EZREALTY_LISTINGS_MARKETSTATUS","Verkauft?");
DEFINE("_EZREALTY_LISTINGS_APPROVEDSTATUS","�berpr�ft");
DEFINE("_EZREALTY_LISTINGS_LTYPE","Typ");
DEFINE("_EZREALTY_LISTINGS_AGENT","Makler");
DEFINE("_EZREALTY_LISTINGS_LISTINGDATE","Eintrags- Datum");
DEFINE("_EZREALTY_LISTINGS_UPDATE","Neuestes Update");
DEFINE("_EZREALTY_LISTINGS_EDIT","Editiere Immobilie");
DEFINE("_EZREALTY_LISTINGS_APPROVED","�berpr�ft");
DEFINE("_EZREALTY_LISTINGS_SELLER","Verk�ufer");

// Add/edit property details page

DEFINE("_EZREALTY_LISTINGS_SELLER_EXPL","<strong><font color='#FF0000'>Lese Mich!</font></strong><br /><br />Verk�ufer Details werden dazu verwendet, um zuk�nftigen (m�glichen) K�ufern im Front-End zu erm�glichen, direkt mehr Informationen anzufordern oder eine Immobilien-Besichtigung zu vereinbaren. Falls Sie Ihren Mitgliedern erlauben, eigene Immobilien auf Ihrer Seite zu verkaufen, sind diese verpflichtet, die Verk�ufer Details komplett auszuf�llen. Falls Sie zuk�nftigen K�ufern lieber erlauben wollen, anstelle von Ihren Mitgliedern Sie selbst zu kontaktieren - lassen Sie diesen Bereich leer. Dann erscheint der normale \"Vereinbare Besichtigung\" eMail-Link direkt zu Ihnen, wenn Sie es so konfiguriert haben.");

DEFINE("_EZREALTY_DETAILS_REQ","*Obligatorisch");
DEFINE("_EZREALTY_DETAILS_OPT","*Optional");
DEFINE("_EZREALTY_DETAILS_TITLE","Immobilien Eintrag");
DEFINE("_EZREALTY_DETAILS_MARKET","Markt Status");
DEFINE("_EZREALTY_DETAILS_SOLDDESC"," - Diese Einstellung erlaubt Ihnen, den Markt Status eines Immobilien Eintrags anzuzeigen - der Standardwert ist 'nicht verkauft'.");
DEFINE("_EZREALTY_DETAILS_SELMARKET","W�hle Markt Status");
DEFINE("_EZREALTY_DETAILS_SELLOC","W�hle Ort");
DEFINE("_EZREALTY_DETAILS_SELSTATE","W�hle Bundesland");
DEFINE("_EZREALTY_DETAILS_SELCOUNTRY","W�hle Staat/Land");
DEFINE("_EZREALTY_DETAILS_SELCAT","W�hle Immobilien Kategorie");
DEFINE("_EZREALTY_DETAILS_SELPRICE","W�hle Preis Bereich");
DEFINE("_EZREALTY_DETAILS_SELROOM","Immobilie hat keine Schlafzimmer");
DEFINE("_EZREALTY_DETAILS_LISTDATE","Eintrag Datum");
DEFINE("_EZREALTY_DETAILS_LISTDATEDESC","Immobilien Datum war f�r Vekauf gelistet.");
DEFINE("_EZREALTY_DETAILS_AGENTID","Eindeutige Makler ID Nummer");
DEFINE("_EZREALTY_DETAILS_AGENTIDDESC","Verwenden Sie dies, falls Sie eine eindeutige Nummer haben, um dieses Objekt (Immobilie) in Ihrem B�ro, Gesch�ftsunterlagen usw. nachvollziehen zu k�nnen (Tracking)");
DEFINE("_EZREALTY_DETAILS_PROPADDRESS1","Stra�en Adresse 1");
DEFINE("_EZREALTY_DETAILS_PROPCITY","Stadt/Dorf/Bezirk");
DEFINE("_EZREALTY_DETAILS_AREA","Bundesland/Kreis/Gemeinde");
DEFINE("_EZREALTY_DETAILS_COUNTRY","Staat/Land");
DEFINE("_EZREALTY_DETAILS_PROPPOSTCODE","Postleitzahl");
DEFINE("_EZREALTY_DETAILS_PROPTYPE","Immobilien Typ");
DEFINE("_EZREALTY_DETAILS_ADLINE","Kurzer eing�ngiger Verkaufsspruch");
DEFINE("_EZREALTY_DETAILS_PROPDESC","Komplette Immobilien Beschreibung");
DEFINE("_EZREALTY_DETAILS_SHORTDESC","Kurz Beschreibung:<br />(max. 255 Zeichen)");
DEFINE("_EZREALTY_DETAILS_PROPPRICE","Immobilien Preis");
DEFINE("_EZREALTY_DETAILS_LANDTYPE","Grundst�ck Typ/Gr��e");
DEFINE("_EZREALTY_DETAILS_LANDTYPEDESC","z.B. Freies Grundst�ck, Pacht, 1000qm usw.");
DEFINE("_EZREALTY_DETAILS_BEDROOMS","Schlafzimmer");
DEFINE("_EZREALTY_DETAILS_BEDROOMSDESC","Anzahl der Schlafzimmer, �ber die die Immobilie verf�gt.");
DEFINE("_EZREALTY_DETAILS_BATHROOMS","Badezimmer");
DEFINE("_EZREALTY_DETAILS_BATHROOMSDESC","Anzahl der Schlafzimmer, �ber die die Immobilie verf�gt.");
DEFINE("_EZREALTY_DETAILS_PARKING","Park-/Stellpl�tze");
DEFINE("_EZREALTY_DETAILS_PARKINGDESC","Anzahl der Park-/Stellpl�tze f�r Fahrzeuge");
DEFINE("_EZREALTY_DETAILS_MAPREF","Immobilien Map Referenz Link");
DEFINE("_EZREALTY_DETAILS_MAPREFDESC","Die URL f�r einen Map-/Landkartenservice f�r Ihre Immobilie, falls gew�nscht.<br />Einen kostenlosen Map-Service finden Sie bei multimap.com und map24.de");
DEFINE("_EZREALTY_DETAILS_VTOUR","Virtuelle Tour Seiten Link");
DEFINE("_EZREALTY_DETAILS_VTOURDESC","Die URL zu dieser Immobilie als Virtuelle Tour, falls gew�nscht.<br />Dieser Link �ffnet ein neues Fenster im Browser.");
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
DEFINE("_EZREALTY_VLDET_CHOOSENEW","W�hle Neues Bild");
DEFINE("_EZREALTY_VLDET_UPLOADNEW","Upload Neues Bild");
DEFINE("_EZREALTY_VLDET_DELETEIMG","L�sche Bild");
DEFINE("_EZREALTY_VLDET_DELETE","L�schen");
DEFINE("_EZREALTY_VLDET_OPENFULLSIZE","�ffne Bild in Originalgr��e");
DEFINE("_EZREALTY_VLDET_TNPREV","Thumbnail Vorschau");

DEFINE("_EZREALTY_DETAILS_CTOWN","N�chster Ort");
DEFINE("_EZREALTY_DETAILS_CTPORT","N�chste Verkehrsanbindung");
DEFINE("_EZREALTY_DETAILS_ADDFEATURES","Zus�tzliche Immobilien Besonderheiten");
DEFINE("_EZREALTY_DETAILS_AGE","Alter der Immobilie");
DEFINE("_EZREALTY_DETAILS_OHOUSE","Ist eine Besichtigung m�glich?");
DEFINE("_EZREALTY_DETAILS_OHOUSEDET","Besichtigungs-Details:<br />Falls es f�r diese Immobilie eine Besichtigung gibt, geben Sie hier bitte Datum, Uhrzeit usw. an.");

DEFINE("_EZREALTY_DETAILS_APPR","Immobilien-Eintrag freigeben");
DEFINE("_EZREALTY_DETAILS_PUBL","Ver�ffentliche Immobilien-Eintrag");
DEFINE("_EZREALTY_DETAILS_LISTSTATUS","Eintrag-Typ");
DEFINE("_EZREALTY_DETAILS_FREESTATUS","Freier Eintrag");
DEFINE("_EZREALTY_DETAILS_LISTPREMIUM","Auf Spezial stellen");

DEFINE("_EZREALTY_DETAILS_ERROR1","Immobilie ben�tigt eine Adresse");
DEFINE("_EZREALTY_DETAILS_ERROR2","Immobilie ben�tigt eine Stadt, Ort, Gemeinde");
DEFINE("_EZREALTY_DETAILS_ERROR3","Sie m�ssen ein Bundesland w�hlen");
DEFINE("_EZREALTY_DETAILS_ERROR4","Sie m�ssen einen Staat/Land w�hlen");
DEFINE("_EZREALTY_DETAILS_ERROR5","Immobilie ben�tigt eine Postleitzahl");
DEFINE("_EZREALTY_DETAILS_ERROR6","Sie m�ssen einen Immobilien Typ w�hlen");
DEFINE("_EZREALTY_DETAILS_ERROR7","Immobilie ben�tigt Angabe der/des Schlafzimmer(s)");
DEFINE("_EZREALTY_DETAILS_ERROR8","Sie m�ssen einen Immobilien Preis eingeben");
DEFINE("_EZREALTY_DETAILS_ERROR9","Sie m�ssen die Preis-Bereich Suchparameter w�hlen");
DEFINE("_EZREALTY_DETAILS_ERROR10","Sie m�ssen ein kurzes, eing�ngiges Verkaufsargument eingeben, da die Standard-Templates diesen Wert verwenden/anzeigen.");
DEFINE("_EZREALTY_DETAILS_ERROR11","Sie m�ssen eine kurze Beschreibung eingeben, da die Standard-Templates diesen Wert verwenden/anzeigen.");
DEFINE("_EZREALTY_DETAILS_ERROR12","Sie ben�tigen mindestens 1 Bild f�r Ihren Immobilien-Eintrag.");

DEFINE("_EZREALTY_DETAILS_TAB1A","Adresse");
DEFINE("_EZREALTY_DETAILS_TAB1B","Immobilien-Adresse");
DEFINE("_EZREALTY_DETAILS_TAB2A","Besonderheiten");
DEFINE("_EZREALTY_DETAILS_TAB2B","Immobilien-Besonderheiten");
DEFINE("_EZREALTY_DETAILS_TAB3A","Marketing");
DEFINE("_EZREALTY_DETAILS_TAB3B","Marketing-Information");
DEFINE("_EZREALTY_DETAILS_TAB4A","Bilder");
DEFINE("_EZREALTY_DETAILS_TAB4B","Immobilien-Bilder");
DEFINE("_EZREALTY_DETAILS_TAB5A","Verk�ufer");
DEFINE("_EZREALTY_DETAILS_TAB5B","Verk�ufer-Details");
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
DEFINE("_EZREALTY_DETAILS_SOURCE5","Bitte w�hlen");

// Manage property price range page

DEFINE("_EZREALTY_PRICES_DISPLAYNUM","Anzeige #");
DEFINE("_EZREALTY_PRICES_SEARCHCOM","Suche");
DEFINE("_EZREALTY_PRICES_PUBSTATUS","Ver�ffentlicht");
DEFINE("_EZREALTY_PRICES_REORDER","Neu Sortieren");
DEFINE("_EZREALTY_MODPRICES_ADD","Hinzuf�gen");
DEFINE("_EZREALTY_MODPRICES_EDIT","Bearbeiten");
DEFINE("_EZREALTY_MODPRICES_ORDER","Sortieren");

// Manage property city/town/suburbs

DEFINE("_EZREALTY_LOCALITIES_TITLE","Manage 'Stadt/Ort/Bezirk' Such/Auswahl-Liste");
DEFINE("_EZREALTY_LOCALITIES_DISPLAYNUM","Anzeige #");
DEFINE("_EZREALTY_LOCALITIES_LOC","Stadt/Ort/Bezirk Name");
DEFINE("_EZREALTY_LOCALITIES_PUBSTATUS","Ver�ffentlicht");
DEFINE("_EZREALTY_LOCALITIES_REORDER","Neu Sortieren");
DEFINE("_EZREALTY_MODLOC_TITLE","'Stadt/Ort/Bezirk' Such/Auswahl-Begriff");
DEFINE("_EZREALTY_MODLOC_ADD","Hinzuf�gen");
DEFINE("_EZREALTY_MODLOC_EDIT","Bearbeiten");
DEFINE("_EZREALTY_MODLOC_LOC","Ortsname (Stadt, Ort oder Bezirk usw.)");
DEFINE("_EZREALTY_MODLOC_ORDER","Sortieren");
DEFINE("_EZREALTY_MODLOC_SAVED","Ort Details Gespeichert");
DEFINE("_EZREALTY_MODLOC_ERROR1","Sie m�ssen den Name f�r Stadt, Ort, Bezirk usw. eingeben.");
DEFINE("_EZREALTY_LOCALITIES_EDITTAG","Bearbeite Immobilien Ortsangaben");

// Manage property states/regional areas

DEFINE("_EZREALTY_STATE_TITLE","Manage 'Bundesland/Gemeinde' Such/Auswahl-Liste");
DEFINE("_EZREALTY_STATE_DISPLAYNUM","Anzeige #");
DEFINE("_EZREALTY_STATE_LOC","Bundesland/Gemeinde Name");
DEFINE("_EZREALTY_STATE_PUBSTATUS","Ver�ffentlicht");
DEFINE("_EZREALTY_STATE_REORDER","Neu Sortieren");
DEFINE("_EZREALTY_STATE_TITLE2","'Bundesland/Gemeinde' Such/Auswahl-Begriff");
DEFINE("_EZREALTY_STATE_ADD","Hinzuf�gen");
DEFINE("_EZREALTY_STATE_EDIT","Bearbeiten");
DEFINE("_EZREALTY_STATE_ORDER","Sortieren");
DEFINE("_EZREALTY_STATE_SAVED","Bundesland/Gemeinde Details gespeichert");
DEFINE("_EZREALTY_STATE_ERROR1","Sie m�ssen den Name f�r Bundesland/Gemeinde eingeben.");
DEFINE("_EZREALTY_STATE_EDITTAG","Bearbeite Bundesland/Gemeinde");

// Manage property country areas

DEFINE("_EZREALTY_COUNTRY_TITLE","Manage 'Staat/Land' Such/Auswahl-Liste");
DEFINE("_EZREALTY_COUNTRY_DISPLAYNUM","Anzeige #");
DEFINE("_EZREALTY_COUNTRY_LOC","Staat/Land Name");
DEFINE("_EZREALTY_COUNTRY_PUBSTATUS","Ver�ffentlicht");
DEFINE("_EZREALTY_COUNTRY_REORDER","Neu Sortieren");
DEFINE("_EZREALTY_COUNTRY_TITLE2","'Staat/Land' Such/Auswahl-Begriff");
DEFINE("_EZREALTY_COUNTRY_ADD","Hinzuf�gen");
DEFINE("_EZREALTY_COUNTRY_EDIT","Bearbeiten");
DEFINE("_EZREALTY_COUNTRY_ORDER","Sortieren");
DEFINE("_EZREALTY_COUNTRY_SAVED","Staat/Land Details gespeichert");
DEFINE("_EZREALTY_COUNTRY_ERROR1","Sie m�ssen den Name f�r Staat/Land eingeben.");
DEFINE("_EZREALTY_COUNTRY_EDITTAG","Bearbeite Staat/Land");

// Manage bedroom numbers

DEFINE("_EZREALTY_ROOMS_TITLE","Manage 'Anzahl Schlafzimmer' Such/Auswahl-Liste");
DEFINE("_EZREALTY_ROOMS_DISPLAYNUM","Anzeige #");
DEFINE("_EZREALTY_ROOMS_LOC","Anzahl Schlafzimmer");
DEFINE("_EZREALTY_ROOMS_PUBSTATUS","Ver�ffentlicht");
DEFINE("_EZREALTY_ROOMS_REORDER","Neu Sortieren");
DEFINE("_EZREALTY_ROOMS_TITLE2","'Anzahl Schlafzimmer' Such/Auswahl-Begriff");
DEFINE("_EZREALTY_ROOMS_ADD","Hinzuf�gen");
DEFINE("_EZREALTY_ROOMS_EDIT","Bearbeiten");
DEFINE("_EZREALTY_ROOMS_ORDER","Sortieren");
DEFINE("_EZREALTY_ROOMS_SAVED","Anzahl Schlafzimmer gespeichert");
DEFINE("_EZREALTY_ROOMS_ERROR1","Sie m�ssen die Anzahl der Schlafzimmer eingeben");
DEFINE("_EZREALTY_ROOMS_EDITTAG","Bearbeite Anzahl Schlafzimmer");

// Manage leads list

DEFINE("_EZREALTY_LEADS_TITLE","Manage Interessenten Liste");
DEFINE("_EZREALTY_LEADS_DISPLAYNUM","Anzeige #");
DEFINE("_EZREALTY_LEADS_AR","Datum hinzuf�gen/erneuern");
DEFINE("_EZREALTY_LEADS_LCONTACT","Kontakt Details");
DEFINE("_EZREALTY_LEADS_LNAME","Name");
DEFINE("_EZREALTY_LEADS_LEMAIL","eMail");
DEFINE("_EZREALTY_LEADS_LLOC","Gew�nschter Ort");
DEFINE("_EZREALTY_LEADS_EDITTAG","Interessenten Details hinzuf�gen/erneuern");
DEFINE("_EZREALTY_LEADS_ADD","Hinzuf�gen");
DEFINE("_EZREALTY_LEADS_EDIT","Bearbeiten");
DEFINE("_EZREALTY_LEADS_TITLE2","Kauf-Interessenten Details");
DEFINE("_EZREALTY_LEADS_FMATCH","Finde Immobilien �bereinstimmung");

DEFINE("_EZREALTY_LEADS_HPHONE","Telefon Privat");
DEFINE("_EZREALTY_LEADS_WPHONE","Telefon Gesch�ft");
DEFINE("_EZREALTY_LEADS_MOBILE","Telefon Mobil");
DEFINE("_EZREALTY_LEADS_FAX","Fax");
DEFINE("_EZREALTY_LEADS_SOURCE","Wie haben Sie uns gefunden");
DEFINE("_EZREALTY_LEADS_COMMENTS","Kommentare");
DEFINE("_EZREALTY_LEADS_DETAILS","Immobilien Details");
DEFINE("_EZREALTY_LEADS_BUDGET","Kauf-Etat");

DEFINE("_EZREALTY_LEADS_SAVED","Kauf-Interessenten Details gespeichert");

DEFINE("_EZREALTY_LEADS_ERROR1","Sie m�ssen einen Namen eingeben");

DEFINE("_EZREALTY_LEADS_ERROR2","Sie m�ssen eine eMail-Adresse eingeben");
DEFINE("_EZREALTY_LEADS_ERROR3","Sie m�ssen einen Immobilien-Typ eingeben");
DEFINE("_EZREALTY_LEADS_ERROR4","Sie m�ssen einen Preis-Bereich eingeben");
DEFINE("_EZREALTY_LEADS_ERROR5","Sie m�ssen Stadt/Ort/Bezirk eingeben");
DEFINE("_EZREALTY_LEADS_ERROR6","Sie m�ssen die Anzahl der Schlafzimmer eingeben");

// Manage property-type categories

DEFINE("_EZREALTY_CATEGORY_PAGETITLE","Immobilien Kategorie Manager");
DEFINE("_EZREALTY_CATEGORY_DISPLAYNUM","Anzeige #");
DEFINE("_EZREALTY_CATEGORY_SEARCHCAT","Suche");
DEFINE("_EZREALTY_CATEGORY_CATNAME","Kategorie");
DEFINE("_EZREALTY_CATEGORY_PUBSTATUS","Ver�ffentlicht");
DEFINE("_EZREALTY_CATEGORY_ACCLEVEL","Zugriff");
DEFINE("_EZREALTY_CATEGORY_REORDER","Sortieren");
DEFINE("_EZREALTY_CATEGORY_MAIN","Immobilien Kategorie");
DEFINE("_EZREALTY_CATEGORY_ADD","Hinzuf�gen");
DEFINE("_EZREALTY_CATEGORY_EDIT","Bearbeiten");
DEFINE("_EZREALTY_CATEGORY_DEFTITLE","Titel");
DEFINE("_EZREALTY_CATEGORY_DEFCONTENT","Beschreibung");
DEFINE("_EZREALTY_CATEGORY_DEFACCESS","zugriff");
DEFINE("_EZREALTY_CATEGORY_DEFORDER","Sortieren");
DEFINE("_EZREALTY_CATEGORY_IMAGE","Kategorie Bild");
DEFINE("_EZREALTY_CATEGORY_IMAGESEL","Kategorie Bild-W�hler");
DEFINE("_EZREALTY_CATEGORY_SAVED","Immobilien Kategorie Details gespeichert");
DEFINE("_EZREALTY_CATEGORY_ERROR1","Kategorie muss einen Titel haben");
DEFINE("_EZREALTY_CATEGORY_EDITTAG","Bearbeite Immobilien Kategorie");

// Manage property-type categories

DEFINE("_EZREALTY_MARKET_PAGETITLE","Manage Markt Status Notizen");
DEFINE("_EZREALTY_MARKET_DISPLAYNUM","anzeige #");
DEFINE("_EZREALTY_MARKET_STATUS","Markt Status");
DEFINE("_EZREALTY_MARKET_PUBSTATUS","Ver�ffentlicht");
DEFINE("_EZREALTY_MARKET_REORDER","Sortieren");
DEFINE("_EZREALTY_MARKET_MAIN","Markt Status Notiz");
DEFINE("_EZREALTY_MARKET_ADD","Hinzuf�gen");
DEFINE("_EZREALTY_MARKET_EDIT","Bearbeiten");
DEFINE("_EZREALTY_MARKET_DEFNAME","Name");
DEFINE("_EZREALTY_MARKET_DEFORDER","Sortieren");
DEFINE("_EZREALTY_MARKET_SAVED","Markt Status Notiz Details gespeichert");
DEFINE("_EZREALTY_MARKET_ERROR1","Markt Status Notiz muss einen Namen haben");

// General error messages

DEFINE("_EZREALTY_GENERAL_ERROR1","W�hlen Sie einen Begriff ");
DEFINE("_EZREALTY_CONFIG_ERROR","Konfigurations Datei nicht beschreibbar! Bitte stellen Sie die Dateirechte richtig ein (z.B. per FTP) und versuchen es noch einmal.");

// Miscellaneous language tags for hyperlinks and image tags

DEFINE("_EZREALTY_GENERAL_PUBLISHED","Ver�ffentlicht");
DEFINE("_EZREALTY_GENERAL_UNPUBLISHED","Unver�ffentlicht");
DEFINE("_EZREALTY_GENERAL_APPROVED","�berpr�ft");
DEFINE("_EZREALTY_GENERAL_UNAPPROVED","Nicht �berpr�ft");
DEFINE("_EZREALTY_GENERAL_CHECKOUT","Entfernt");
DEFINE("_EZREALTY_GENERAL_RETURN","Zur�ck zu Immobilien-Manager");
DEFINE("_EZREALTY_GENERAL_UP","Nach oben");
DEFINE("_EZREALTY_GENERAL_DOWN","Nach unten");
DEFINE("_EZREALTY_GENERAL_EDITPROP","Bearbeite Immobilie");
DEFINE("_EZREALTY_GENERAL_SOLD","Verkauft");
DEFINE("_EZREALTY_GENERAL_CONTRACT","Unter Vertrag");

DEFINE("_EZREALTY_GENERIC_ADD","Hinzuf�gen");
DEFINE("_EZREALTY_GENERIC_EDIT","Bearbeiten");

//////////////////// FRONT END FILE LANGUAGE TAGS ///////////////////////

// includes.ezrealty.php file

DEFINE("_EZREALTY_HOME","Home");

// ezrealty.php file

DEFINE("_EZREALTY_BACK","Zur�ck");
DEFINE("_EZREALTY_INCLUDES_HOME","Home");
DEFINE("_EZREALTY_INCLUDES_SEARCH","Suche");
DEFINE("_EZREALTY_INCLUDES_NEW","Neu");
DEFINE("_EZREALTY_CATEGORIES","Property Types");
DEFINE("_EZREALTY_PROPERTIES","Immobilien");
DEFINE("_EZREALTY_PROPERTY","Immobilie");
DEFINE("_EZREALTY_INCLUDES_RSSOH","Besichtigungs-Eintrag");
DEFINE("_EZREALTY_INCLUDES_POSTMAIL","Danke - sie k�nnen dieses Fenster nun schliessen.");

// category display

DEFINE("_EZREALTY_PAGES","Seiten");
DEFINE("_EZREALTY_PREV","Zuvor");
DEFINE("_EZREALTY_NEXT","N�chstes");
DEFINE("_EZREALTY_READMORE","Weiterlesen");
DEFINE("_EZREALTY_VIEWPROP","Zeige Immobilien");

// send to friend and arrange viewing forms

DEFINE("_EZREALTY_INVITE_VIEW_PROP","hat Sie eingeladen, um eine zum Verkauf anstehende Immobilie anzusehen. Bitte ben�tzen Sie zur Besichtigung den Link unten.");
DEFINE("_EZREALTY_RECCOMEND_PROP_FROM_FREND","Eine von Ihrem Bekannten empfohlene Immobilie");
DEFINE("_EZREALTY_FROM","Von");
DEFINE("_EZREALTY_REPLYTO","R�ckantwort");
DEFINE("_EZREALTY_MAIL_SENT","Danke! Ihre Immobilien-Empfehlung wurde gesendet...");
DEFINE("_EZREALTY_MAIL_VIEWINGSENT","Danke! Ihre Anfrage f�r eine Immobilien-Besichtigung wurde gesendet...");
DEFINE("_EZREALTY_INSPECTION"," Immobilien Besichtigungs Anfrage");
DEFINE("_EZREALTY_TELEPHONE","Kontakt Telefon:-");
DEFINE("_EZREALTY_DATETIME","Bevorzugtes Datum und Uhrzeit:-");
DEFINE("_EZREALTY_REQUEST_MAILINGLIST","w�re(n) gerne in Ihrer Mailing-Liste eingetragen. Bitte ben�tzen Sie den Link unten, um die vom Interessenten betrachteten Immobilien anzuzeigen. Das k�nnte Ihnen helfen, die Interessen des Antragstellers herauszufinden.");
DEFINE("_EZREALTY_PROPERTY_INTERESTS","Dieser Besucher ist an folgenden Immobilien-Typen interessiert:-");
DEFINE("_EZREALTY_MAILING_TITLE"," Zur Mailing-Liste hinzuf�gen Anfrage");
DEFINE("_EZREALTY_MAILINGLIST_SENT","Danke! Ihre Anfrage, in unserer Mailing-Liste aufgenommen zu werden, wurde gesendet...");
DEFINE("_EZREALTY_AGENTIDREF","Makler ID Immobilien Referenz Nummer:-");

// viewdetails.ezrealty.php file

DEFINE("_EZREALTY_VIEWDET_NAME_EMAIL","Bitte vervollst�ndigen Sie alle Felder im Formular!");
DEFINE("_EZREALTY_VIEWDET_NOVIEW","Tut uns leid, diese Besonderheit ist momentan nicht verf�gbar.");
DEFINE("_EZREALTY_PROPGONE","Die Immobilie, nach der Sie sehen wollen, existiert bei uns nicht mehr oder ist in den Eintr�gen noch nicht ver�ffentlicht!");
DEFINE("_EZREALTY_VIEWDET_PROPDET","Immobilien Details");
DEFINE("_EZREALTY_VIEWDET_MAP","Zeige Map");
DEFINE("_EZREALTY_VIEWDET_TOUR","Tour");
DEFINE("_EZREALTY_VIEWDET_VTOUR","Machen sie eine virtuelle Tour");
DEFINE("_EZREALTY_VIEWDET_PRINT","Diese Seite drucken");
DEFINE("_EZREALTY_VIEWDET_FAVS","Zu Favoriten hinzuf�gen");
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
DEFINE("_EZREALTY_VIEWDET_APPROX","ungef�hr");
DEFINE("_EZREALTY_VIEWDET_LINKS","Kunden Links");
DEFINE("_EZREALTY_VIEWDET_FPLANS","Grundst�cks-Pl�ne");
DEFINE("_EZREALTY_VIEWDET_MAILING","Nutzen Sie unsere Mailing Liste");
DEFINE("_EZREALTY_VIEWDET_MAILING_SPEIL","Die Immobilien-Eintr�ge werden st�ndig aktualisiert. Bleiben Sie informiert!");
DEFINE("_EZREALTY_VIEWDET_INTERESTS","Ich bin an folgenden Immobilien-Typen interessiert");
DEFINE("_EZREALTY_VIEWDET_LOCALITY","Ort");
DEFINE("_EZREALTY_VIEWDET_LAND","Grundst�ck-Typ");
DEFINE("_EZREALTY_VIEWDET_BEDROOM","Schlafzimmer");
DEFINE("_EZREALTY_VIEWDET_BEDROOMS","Schlafzimmer");
DEFINE("_EZREALTY_VIEWDET_BATHROOM","Badezimmer");
DEFINE("_EZREALTY_VIEWDET_BATHROOMS","Badezimmer");
DEFINE("_EZREALTY_VIEWDET_PARKING","Parkplatz f�r");
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
DEFINE("_EZREALTY_VIEWDET_TOWN","N�chste Stadt");
DEFINE("_EZREALTY_VIEWDET_TPORT","Transport");
DEFINE("_EZREALTY_VIEWDET_AGE","Alter");

DEFINE("_EZREALTY_VIEWDET_PSELLERS","Verk�ufer");
DEFINE("_EZREALTY_VIEWDET_SELLER","Verk�ufer");
DEFINE("_EZREALTY_VIEWDET_SELLER_PHONE","Kontakt #");
DEFINE("_EZREALTY_VIEWDET_SELLER_ARRANGE","Zeige Immobilie");
DEFINE("_EZREALTY_VIEWDET_SELLER_VIEWING","Vereinbare Besichtigung direkt mit Verk�ufer");

DEFINE("_EZREALTY_PIX_HOVER","Um das Bild zu wechseln, mit der Maus �ber die Thumbnails unten gleiten.");

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

DEFINE("_EZREALTY_SEARCH_ALCAT","W�hle alle Kategorien");
DEFINE("_EZREALTY_SEARCH_ALLOC","W�hle alle Orte");
DEFINE("_EZREALTY_SEARCH_ALSTA","W�hle alle Bundesl�nder");
DEFINE("_EZREALTY_SEARCH_ALCOU","W�hle alle Staaten");
DEFINE("_EZREALTY_SEARCH_MINPRI","W�hle Min. Preis");
DEFINE("_EZREALTY_SEARCH_MAXPRI","W�hle Max. Preis");
DEFINE("_EZREALTY_SEARCH_MINBED","W�hle Min. Schlafzimmer");
DEFINE("_EZREALTY_SEARCH_MAXBED","W�hle Max. Schlafzimmer");
DEFINE("_EZREALTY_SEARCH_ONLYAV","Nur verf�gbare Immobilien");
DEFINE("_EZREALTY_SEARCH_PRIASC","Preis Aufsteigend");
DEFINE("_EZREALTY_SEARCH_PRIDESC","Preis Absteigend");
DEFINE("_EZREALTY_SEARCH_ASC","Datum Aufsteigend");
DEFINE("_EZREALTY_SEARCH_DESC","Datum Absteigend");

// results.ezrealty.php file

DEFINE("_EZREALTY_RESULTSL_SELECT","Bitte w�hlen Sie Ihre Such-Parameter!");
DEFINE("_EZREALTY_RESULTS_RESULTS","Ergebnisse:-");
DEFINE("_EZREALTY_RESULTS_NORESULTS","Tut uns leid - kein Ergebnis gefunden...");
DEFINE("_EZREALTY_RESULTS_NEW","Neueste");
DEFINE("_EZREALTY_RESULTS_NEWLISTINGS","Neue Immobilien Eintr�ge");

// printdetails.ezrealty.php file

DEFINE("_EZREALTY_PRINT_ID","Immobilien ID");
DEFINE("_EZREALTY_PRINT_TELEPHONE","Telefon:");
DEFINE("_EZREALTY_PRINT_PRINT","Druck Anzeige");
DEFINE("_EZREALTY_PRINT_CLOSE","Schliesse Fenster");

// submit lead stuff

DEFINE("_EZREALTY_SUBLEAD_TITLE","Unverbindliche Immobilien Anfrage");
DEFINE("_EZREALTY_SUBLEAD_INTRO","Immobilien kommen st�ndig auf den Markt. Wenn Sie momentan nichts Passendes finden - registrieren Sie Ihre Anfrage doch einfach bei uns. Wir werden Sie umgehend informieren, sobald etwas Passendes f�r Sie verf�gbar ist.");
DEFINE("_EZREALTY_SUBLEAD_THANKS","Danke - Ihre Immobilien-Anfrage wurde bei uns eingetragen.");
DEFINE("_EZREALTY_SUBLEAD_CONTACT","Ihre Kontakt Details");
DEFINE("_EZREALTY_SUBLEAD_NOTON","Tut uns leid - momentan k�nnen keine Immobilien Anfragen gemacht werden.");

DEFINE("_EZREALTY_LM_ERROR1","Bitte tragen Sie Ihren Namen ein");
DEFINE("_EZREALTY_LM_ERROR2","Bitte tragen Sie Ihre eMail-Adresse ein");
DEFINE("_EZREALTY_LM_ERROR3","Bitte w�hlen Sie eine Kategorie");
DEFINE("_EZREALTY_LM_ERROR4","Bitte w�hlen Sie einen Preis-Bereich");
DEFINE("_EZREALTY_LM_ERROR5","Bitte w�hlen sie eine Stadt/Ort/Bezirk");
DEFINE("_EZREALTY_LM_ERROR6","Bitte w�hlen Sie eine ungef�hre Anzahl Schlafzimmer");

DEFINE("_EZREALTY_EMAIL_ERROR1","Bitte Ihren Name eintragen");
DEFINE("_EZREALTY_EMAIL_ERROR2","Bitte Ihre eMail-Adresse eintragen");
DEFINE("_EZREALTY_EMAIL_ERROR3","Bitte Ihr Kontakt-Telefon eintragen");
DEFINE("_EZREALTY_EMAIL_ERROR4","Bitte Ihre Frage(n) eintragen");
DEFINE("_EZREALTY_EMAIL_ERROR5","Bitte Name Ihres Bekannten eintragen");
DEFINE("_EZREALTY_EMAIL_ERROR6","Bitte eMail-Adresse Ihres Bekannten eintragen");
DEFINE("_EZREALTY_EMAIL_ERROR7","Bitte beschreiben Sie Ihre Vorstellung(en)");
DEFINE("_EZREALTY_EMAIL_ERROR8","Tut uns leid - dieses eMail-Feature ist momentan nicht verf�gbar");
DEFINE("_EZREALTY_EMAIL_ERROR9","Bitte einen generellen Zeitrahmen f�r eine Besichtigung eintragen");

// front-end member stuff

DEFINE("_EZREALTY_LISTINGS_INTRO","Die folgende Anzahl an FREIEN Verkauf-Eintr�gen steht Ihnen zur Verf�gung");
DEFINE("_EZREALTY_NOLISTINGS","Sie haben momentan keine Eintr�ge");
DEFINE("_EZREALTY_ADDNEW","Neuen Eintrag hinzuf�gen");
DEFINE("_EZREALTY_SUBMIT_LISTING","Eintrag speichern");
DEFINE("_EZREALTY_NO_LOGIN","Tut uns leid - Sie m�ssen sich zuerst anmelden (Login)");
DEFINE("_EZREALTY_MAX_NUM","Tut uns leid - Sie haben die maximale Anzahl erreicht");
DEFINE("_EZREALTY_MAXNUM_LIST","Eintr�ge");
DEFINE("_EZREALTY_YOUVEGOTMAIL","Neuer Immobilien Eintrag");
DEFINE("_EZREALTY_DONE","Bild(er) Upload und Immobilien-Eintrag erfolgreich!");
DEFINE("_EZREALTY_UPDATEDONE","Sie haben Ihren Eintrag erfolgreich aktualisiert!");
DEFINE("_EZREALTY_NO_EDIT","Tut uns leid - Sie sind nicht berechtigt, diesen Eintrag zu bearbeiten.");
DEFINE("_EZREALTY_NODELETE","Sie sind nicht berechtigt, diesen Eintrag zu l�schen");
DEFINE("_EZREALTY_CHECKDELETE","Sind Sie sicher, dass Sie diesen Immobilien-Eintrag l�schen wollen?");
DEFINE("_EZREALTY_DELETE_LISTING","L�sche Eintrag");
DEFINE("_EZREALTY_LISTINGS_PREVIEW","Vorschau Eintrag");
DEFINE("_EZREALTY_DELIMGOOPS","Konnte Bild-Datei nicht l�schen");
DEFINE("_EZREALTY_LISTING_DELETED","Immobilien-Eintrag erfolgreich gel�scht");
DEFINE("_EZREALTY_LISTING_TERMS","Gesch�ftsbedingungen des Eintrags");
DEFINE("_EZREALTY_PREVIEW_LISTING","Ihre Immobilien-Eintrag Vorschau");

DEFINE("_EZREALTY_MEMBERS_ADDRESS","Adresse");
DEFINE("_EZREALTY_MEMBERS_HITS","Hits");
DEFINE("_EZREALTY_MEMBERS_ACTION","Aktion");
DEFINE("_EZREALTY_MEMBERS_STATUS","Ver�ffentlicht");
DEFINE("_EZREALTY_MEMBERS_UPGRADE","Aktualisierung");
DEFINE("_EZREALTY_MEMBERS_MAKEFEAT","Stelle auf Spezial");
DEFINE("_EZREALTY_MEMBERS_SELLERDET","Verk�ufer Details");

DEFINE("_EZREALTY_LISTING1","Verk�ufer Kontakt Details");
DEFINE("_EZREALTY_LISTING2","Kontakt Name");
DEFINE("_EZREALTY_LISTING3","Kontakt Telefon");
DEFINE("_EZREALTY_LISTING4","eMail Adresse");
DEFINE("_EZREALTY_LISTING5","Adresse der Immobilie (Verkauf)");
DEFINE("_EZREALTY_LISTING6","Immobilien Details");
DEFINE("_EZREALTY_LISTING7","Besonderheiten auf einen Blick");
DEFINE("_EZREALTY_LISTING8","Immobilien Marketing Details");
DEFINE("_EZREALTY_LISTING9","Immobilien Details hinzuf�gen");
DEFINE("_EZREALTY_LISTING10","Immobilien Details bearbeiten");
DEFINE("_EZREALTY_LISTING11","Verk�ufer Anschrift");
DEFINE("_EZREALTY_LISTING12","Bilder");
DEFINE("_EZREALTY_LISTING_IMGDELETED","Bild gel�scht");
DEFINE("_EZREALTY_LISTING_RESTRICTED","**Diese Information ist f�r FREIE Eintr�ge nicht verf�gbar**");

DEFINE("_EZREALTY_SELLER_ERROR1","Sie m�ssen einen Kontakt Name eintragen");
DEFINE("_EZREALTY_SELLER_ERROR2","Sie m�ssen eine Kontakt Telefonnummer eintragen");
DEFINE("_EZREALTY_SELLER_ERROR3","Sie m�ssen eine Kontakt eMail Adresse eintragen");
DEFINE("_EZREALTY_SELLER_ERROR4","Sie m�ssen Ihre Anschrift eintragen");

DEFINE("_EZREALTY_SELLER_N","Name");
DEFINE("_EZREALTY_SELLER_T","Telefon");
DEFINE("_EZREALTY_SELLER_E","eMail");
DEFINE("_EZREALTY_SELLER_L","Anschrift");
DEFINE("_EZREALTY_SELLER_C","Kontakt");

DEFINE("_EZREALTY_NOCATLISTINGS","Tut uns leid - es sind keine Eintr�ge in dieser Kategorie");

DEFINE("_EZREALTY_IPN_SUBJECT","Eintrag erweitert auf");
DEFINE("_EZREALTY_IPN_MSG1","Ein Mitglied hat soeben seinen Eintrag erweitert auf");
DEFINE("_EZREALTY_IPN_MSG2","Besteller Details:-");
DEFINE("_EZREALTY_IPN_MSG3","Immobilien ID#");

DEFINE("_EZREALTY_POA","Preis auf Anfrage");
DEFINE("_EZREALTY_CONFIG_SBIMP","Listen nach Anzeigemenge (Impressions)");
DEFINE("_EZREALTY_CONFIG_SBIMPDESC","Falls Sie Ihren Mitgliedern erlauben, eigene Immobilien-Eintr�ge zu ver�ffentlichen, m�chten Sie das dann aufgrund der angezeigten Menge (Impressions) machen? - z.B. Klicks auf die Detail-Ansicht. Die Eintr�ge werden dann so lange angezeigt, bis die von Ihnen eingestellte Menge an Anzeigen (Impressions) erreicht ist und Sie k�nnen anschliessend Ihre Datenbank von diesen alten Eintr�gen bereinigen, indem Sie auf den 'Bereinige Eintr�ge' Button klicken.");
DEFINE("_EZREALTY_CONFIG_IMPNUM","Anzahl der Anzeigemenge (Impressions)");
DEFINE("_EZREALTY_CONFIG_IMPNUMDESC","Falls Sie die Eintr�ge nach Anzeigemenge (Impressions) begrenzen wollen - Wie oft sollen sie angezeigt werden.");

DEFINE("_EZREALTY_RESET_MSG","Hits wurden zur�ck gesetzt");
DEFINE("_EZREALTY_RESET_BTN","Zur�cksetzen");
DEFINE("_EZREALTY_CLEANDB","Bereinige Eintr�ge");
DEFINE("_EZREALTY_LISTINGS_PAID1","Eintr�ge Kosten");
DEFINE("_EZREALTY_LISTINGS_PAID2","Je Erweiterung");
DEFINE("_EZREALTY_LISTINGS_HITSINTRO","Eintr�ge werden ausgesetzt und aus der Datenbank gel�scht nach");
DEFINE("_EZREALTY_LISTINGS_HITS2","Hits");
DEFINE("_EZREALTY_BEDROOMS_EXPL","Verwenden Sie Ganze Zahlen von 1 aufw�rts - die 0 ist f�r die F�lle in der Drop-Down Box vordefiniert, in denen Schlafzimmer nicht angegeben (anwendbar) sind.");
DEFINE("_EZREALTY_SELLERSPANEL","Verk�ufer Panel");
DEFINE("_EZREALTY_MAINPANEL","Haupt-Eintr�ge");

// NEW TAGS THAT WERE ADDED FOR THE 3.2.2 VERSION

DEFINE("_EZREALTY_SUB_MSG","Ein Mitglied hat einen Eintrag hinzugef�gt oder aktualisiert");
DEFINE("_EZREALTY_TOOLBAR_CLOSE","Schliessen");
DEFINE("_EZREALTY_NLAVAIL","Tut uns leid - dieser Eintrag ist zur Zeit nicht verf�gbar");

// NEW TAGS THAT WERE ADDED AFTER THE 3.2.2 VERSION FOR CB INTEGRATION

DEFINE("_EZREALTY_CONFIG_CBINT","Community Builder Integration");
DEFINE("_EZREALTY_CONFIG_CBINTDESC","Falls Sie den Community Builder (CB) verwenden, m�chten Sie dann die Daten aus den Mitglieder-Tabellen des CB nutzen, um die Verk�ufer Kontakt Details anzeigen zu lassen?");
DEFINE("_EZREALTY_PROFILER_CBMSG1","Die 'EZ Realty Property Eintrag Komponente' ist nicht installiert. Bitte nehmen Sie Kontakt zu Ihrem Site Administrator auf.");
DEFINE("_EZREALTY_PROFILER_CBMSG2","Es gibt keine Immobilien-Eintr�ge f�r dieses Mitglied.");
DEFINE("_EZREALTY_PROFILER_CBPROFILE","Profil Anzeige");

// NEW TAGS THAT WERE ADDED AFTER THE 3.3.0 VERSION

DEFINE("_EZREALTY_CLICK_OPEN","Klicken zum �ffnen");

// NEW TAGS THAT WERE ADDED FOR THE 4.0.0 RELEASE

DEFINE("_EZREALTY_CONFIG_FREEPIC","Freier Eintrag Bild");
DEFINE("_EZREALTY_CONFIG_FREEPICDESC","Falls Sie Ihren Mitgliedern FREIE und BEZAHLTE Eintr�ge anbieten, soll in den FREIEN Eintr�gen ein Bild angezeigt werden? Falls Sie 'NEIN' ausw�hlen wird ein Platzhalter angezeigt, der das Mitglied vielleicht dazu 'anregt', zum BEZAHLTEN Eintrag zu wechseln. Falls Sie 'JA' w�hlen - wird beim FREIEN Eintrag nur EIN Bild angezeigt. Diese Einstellung beeinflusst die Eintr�ge nicht, wenn Sie Ihre Seite NUR im FREIE Eintr�ge Modus eingestellt haben - Ihre Mitglieder k�nnen dann bis zu 12 Bilder anzeigen lassen.");
DEFINE("_EZREALTY_CONFIG_PAIDOPT1","FREI mit Option zum ERWEITERN");
DEFINE("_EZREALTY_CONFIG_PAIDOPT2","NUR BEZAHLTE Eintr�ge");
DEFINE("_EZREALTY_CONFIG_PAIDONLY","Zahlungsarten");
DEFINE("_EZREALTY_CONFIG_PAIDONLYDESC","Falls Sie BEZAHLTE Eintr�ge anbieten - m�chten Sie dann FREIE Eintr�ge mit der Option zur Erweiterung (Upgrade) anbieten - ODER NUR BEZAHLTE Eintr�ge.");

DEFINE("_EZREALTY_CONFIG_LEVEL1","Bezahlter Eintrag Level 1 Name");
DEFINE("_EZREALTY_CONFIG_LEVEL1DESC","Wie m�chten Sie Ihre Eintrag-Erweiterungen (Upgrades) bezeichnen - z.B. Premium/Erweiterter Eintrag usw. Dies wird als Begriffsbezeichnung im Button Code und in den PayPal Transaktions Listen (PayPal transaction reports) erscheinen.");
DEFINE("_EZREALTY_CONFIG_LEVEL1COST","Bezahlter Eintrag Level 1 Kosten");
DEFINE("_EZREALTY_CONFIG_LEVEL1COSTDESC","Die Kosten (Preis) f�r das Erweitern (Upgrade) vom FREIEN Eintrag zum BEZAHLTEN Eintrag.");

DEFINE("_EZREALTY_CONFIG_LEVEL2","Bezahlter Eintrag Level 2 Name");
DEFINE("_EZREALTY_CONFIG_LEVEL2DESC","Wie m�chten Sie Ihre Eintrag-Erweiterungen (Upgrades) bezeichnen - z.B. Premium/Erweiterter Eintrag usw. Dies wird als Begriffsbezeichnung im Button Code und in den PayPal Transaktions Listen (PayPal transaction reports) erscheinen.");
DEFINE("_EZREALTY_CONFIG_LEVEL2COST","Bezahlter Eintrag Level 2 Kosten");
DEFINE("_EZREALTY_CONFIG_LEVEL2COSTDESC","Die Kosten (Preis) f�r das Erweitern (Upgrade).");

DEFINE("_EZREALTY_DETAILS_TAB7A","Metatags");
DEFINE("_EZREALTY_DETAILS_METADESC","Beschreibung");
DEFINE("_EZREALTY_DETAILS_METAKEYS","Schl�sselw�rter");
DEFINE("_EZREALTY_FEND_BUYNOW","Bestellen Sie zuerst den 'Spezial-Eintrag', dann m�ssen Sie nicht die Setup-Geb�hr f�r den 'Premium Eintrag' bezahlen.");
DEFINE("_EZREALTY_FEND_BUYNOW2","Erweitern Sie zuerst zum 'Spezial-Eintrag', dann m�ssen Sie nicht die Setup-Geb�hr f�r den 'Premium Eintrag' bezahlen.");
DEFINE("_EZREALTY_UPGRADE","Erweitern");
DEFINE("_EZREALTY_CHECK_LOC","Pr�fe Orte");
DEFINE("_EZREALTY_CHECK_STATE","Pr�fe Bundesl�nder");
DEFINE("_EZREALTY_CHECK_COUNTRY","Pr�fe Staaten");
DEFINE("_EZREALTY_CHECK_AVAIL","Pr�fe Verf�gbarkeit");
DEFINE("_EZREALTY_CHECK_SUBMIT","Neu einreichen");
DEFINE("_EZREALTY_CHECK_GO","Weiter");
DEFINE("_EZREALTY_CHECK_REFRESH","<strong><br /><br />Nachdem Sie dieses Fenster geschlossen haben, dr�cken Sie bitte den Aktualisieren-Button Ihres Browsers - und Sie werden den neuen Eintrag sehen.</strong>");

DEFINE("_EZREALTY_CONFIG_SELFENTRY","Front-End Zus�tze");
DEFINE("_EZREALTY_CONFIG_SELFENTRYDESC","Wollen Sie Ihren Mitgliedern die M�glichkeit einr�umen, selbst neue Orte, Bundesl�nder und Staaten hinzuzuf�gen? Wenn Sie es zulassen - werden diese automatisch ver�ffentlicht und stehen Ihren Mitgliedern zur Verf�gung, wenn sie ihren eigenen Immobilien-Eintrag erstellen.");
DEFINE("_EZREALTY_CONFIG_COLOUR1","Rollover (Hover) Farbe 1");
DEFINE("_EZREALTY_CONFIG_COLOUR1DESC","Das ist die Farbe zu der die Zellen im Front-End-Eintrag wechseln, wenn jemand mit der Maus dar�ber gleitet. Diese Funktion �ndert das Erscheinungsbild Ihres Immobilien Eintrags auf der Hauptseite von EZ Realty.");
DEFINE("_EZREALTY_CONFIG_COLOUR2","Rollover (Hover) Farbe 2");
DEFINE("_EZREALTY_CONFIG_COLOUR2DESC","Das ist die Farbe zu der die Zellen im Front-End-Eintrag wechseln, wenn jemand mit der Maus den Bereich wieder verl�sst. Tipp: F�r das beste Resultat empfiehlt es sich, die Hintergrundfarbe des Template Hintergrunds Ihrer WebSeite zu verwenden.");

DEFINE("_EZREALTY_DATABASE1","Datenbank aktualisieren");
DEFINE("_EZREALTY_DATABASE2","Die Aktualisierung Ihrer Datenbank war erfolgreich");

// TAGS THAT HAD THEIR LANGUAGE CONTENT CHANGED FOR THE 4.0.0 RELEASE

DEFINE("_EZREALTY_LISTINGS_HITSEXPL","Falls eine Aktualisierung zwischen den Eintrag-Levels/Typen vorgenommen wird - die Hits werden auf 0 zur�ckgesetzt.");
DEFINE("_EZREALTY_HEADER_OHOUSE","Besichtigung");

// NEW TAGS FOR THE 4.1.0 RELEASE

DEFINE("_EZREALTY_LISTING_SELECTTYPE","W�hle Typ");
DEFINE("_EZREALTY_TYPE_SALE","Zum Verkauf");
DEFINE("_EZREALTY_TYPE_RENTAL","Zur Miete");
DEFINE("_EZREALTY_LISTING_TYPE","Eintrag Typ");
DEFINE("_EZREALTY_LISTING_ANYTYPE","Jeder Eintrag Typ");
DEFINE("_EZREALTY_RENTAL_FREQUENCY","Miet-H�ufigkeit");
DEFINE("_EZREALTY_RENTAL_NA","Nicht zutreffend");
DEFINE("_EZREALTY_RENTAL_NIGHTLY","Pro Nacht");
DEFINE("_EZREALTY_RENTAL_WEEKLY","Pro Woche");
DEFINE("_EZREALTY_RENTAL_FNIGHT","2-W�chig");
DEFINE("_EZREALTY_RENTAL_MONTH","Pro Monat");
DEFINE("_EZREALTY_RENTAL_SQFT","Pro Fl�che");
DEFINE("_EZREALTY_RENTAL_SQMTR","Pro Quadratmeter");
DEFINE("_EZREALTY_RENTAL_SPARE","Freies Zusatzfeld");


// TAGS THAT HAD THEIR LANGUAGE CONTENT CHANGED FOR THE 4.1.0 RELEASE


DEFINE("_EZREALTY_DETAILS_MARKET1","Nicht verkauft");


// NEW TAGS FOR THE 4.2.0 RELEASE

DEFINE("_EZREALTY_CONFIG_MOBILE","Mobil Telefon #");
DEFINE("_EZREALTY_CONFIG_MOBILEDESC","Dies wird f�r das SMS Kontakt Formular verwendet, falls Sie Ihren Mitgliedern keinen eigenen Eintrag erlauben, oder Sie selbst eigene Immobilien anbieten. Sie MUSS im internationalen Format sein: L�nder Code, Vorwahl ohne die f�hrende '0' - keine Leerzeichen, nur Ziffern. Beispiel f�r eine deutsche Nr.: 0049123456789. Wollen Sie keinen SMS Kontakt zur Verf�gung stellen - lassen Sie diese Details leer.");

DEFINE("_EZREALTY_SELLER_SMS1","SMS #");
DEFINE("_EZREALTY_SELLER_SMS2","SMS an mich!");
DEFINE("_EZREALTY_SELLER_SMS3","MERKE: Bevor Sie dies nutzen, ben�tigen Sie einen aktiven");
DEFINE("_EZREALTY_SELLER_SMS4","account! Ausserdem m�ssen Sie eine HTTP API �ber Ihr Clickatell Control Panel einrichten.");
DEFINE("_EZREALTY_SELLER_SMS5","Ihre Mobil Telefon Nummer im internationalen Format: L�nder Code, Vorwahl ohne die f�hrende '0' - keine Leerzeichen, nur Ziffern.");
DEFINE("_EZREALTY_SELLER_SMS6","Sende SMS �ber Clickatell an diesen Immobilien Verk�ufer");
DEFINE("_EZREALTY_SELLER_SMS7","Benutzername");
DEFINE("_EZREALTY_SELLER_SMS8","Passwort");
DEFINE("_EZREALTY_SELLER_SMS9","Mobil Telefon #");
DEFINE("_EZREALTY_SELLER_SMS10","Nachricht");
DEFINE("_EZREALTY_SELLER_SMS11","Erfolg");
DEFINE("_EZREALTY_SELLER_SMS12","Nachrichten ID");
DEFINE("_EZREALTY_SELLER_SMS13","Nchricht senden fehlgeschlagen");
DEFINE("_EZREALTY_SELLER_SMS14","Authentifizierung fehlgeschlagen");
DEFINE("_EZREALTY_SELLER_SMS15","Sie m�ssen Ihren Clickatell Benutzername eingeben");
DEFINE("_EZREALTY_SELLER_SMS16","Sie m�ssen Ihr Clickatell Passwort eingeben");
DEFINE("_EZREALTY_SELLER_SMS17","Sie m�ssen Ihre Mobil Telefon Nummer eingeben, �bereinstimmend mit Ihrem Clickatell Account.");
DEFINE("_EZREALTY_SELLER_SMS18","Sie m�ssen eine Nachricht an diesen Immobilien Verk�ufer eingeben");
DEFINE("_EZREALTY_SELLER_SMS19","HTTP API ID#");
DEFINE("_EZREALTY_SELLER_SMS20","Sie m�ssen Ihre Clickatell API ID eingeben. Falls Sie noch keine haben, tragen Sie eine HTTP API �ber Ihr Clickatell Control Panel ein.");
DEFINE("_EZREALTY_SELLER_SMS21","150 Zeichen max.");
DEFINE("_EZREALTY_SELLER_SMS22","Ihre Clickatell Details");
DEFINE("_EZREALTY_SELLER_SMS23","Sende SMS �ber Clickatell");
DEFINE("_EZREALTY_SELLER_SMS24","Sende SMS �ber Clickatell f�r diese Kaufanfrage - Erstellen Sie bitte eine Kaufanfrage, BEVOR Sie eine SMS senden!");
DEFINE("_EZREALTY_SELLER_SMS25","Erledigt!");
DEFINE("_EZREALTY_SELLER_SMS26","Sende SMS");
DEFINE("_EZREALTY_SELLER_SMS27","Stellen Sie sicher, dass Sie Ihre Clickatell Details in den EZ Realty Konfigurations-Einstellungen eingetragen haben, BEVOR Sie eine SMS senden!!");

DEFINE("_EZREALTY_SELLER_SMS7DESC","Dies muss Ihr Clickatell Central API Account Benutzername sein.");
DEFINE("_EZREALTY_SELLER_SMS8DESC","Dies muss Ihr Clickatell Central API Account Passwort sein.");
DEFINE("_EZREALTY_SELLER_SMS19DESC","Dies muss Ihre Clickatell Central API Account HTTP API ID# sein. Erstellen Sie Ihre API ID# �ber Ihr Clickatell Control Panel.");


DEFINE("_EZREALTY_CONFIG_TEXTBOX","Text Box Breite");
DEFINE("_EZREALTY_CONFIG_TEXTBOXDESC","Die Breite der gr��eren Text Box im Front-End im 'Hinzuf�gen/Bearbeiten' Formular. Diese Breiten-Einstellung hilft, eine falsche Darstellung in Ihrem Template zu vermeiden.");
DEFINE("_EZREALTY_CONFIG_TEXTAREA","Text Bereich Breite");
DEFINE("_EZREALTY_CONFIG_TEXTAREADESC","Die Breite der Text-Bereiche im Front-End im 'Hinzuf�gen/Bearbeiten' Formular. Diese Breiten-Einstellung hilft, eine falsche Darstellung in Ihrem Template zu vermeiden.");
DEFINE("_EZREALTY_TYPE_LEASE","Zur Pacht");
DEFINE("_EZREALTY_IMAGE_WARNING","<strong><font color='#FF0000'>Bild Format MUSS JPG oder PNG sein!!</font></strong>");
DEFINE("_EZREALTY_IMAGE_WARNING2","Eines oder mehrere Ihrer Bilder �berschreiten die erlaubte Bildh�he oder -breite!!");

DEFINE("_EZREALTY_CONFIG_OHOUSE","Besichtigungs-Link");
DEFINE("_EZREALTY_CONFIG_OHOUSEDESC","M�chten Sie den 'Besichtigung'-Link anzeigen lassen?");
DEFINE("_EZREALTY_CONFIG_MAXWIDTH","Maximal erlaubte Bild-Breite");
DEFINE("_EZREALTY_CONFIG_MAXWIDTHDESC","Was ist die maximale Breite in Pixel, die Sie beim Bilder-Upload erlauben?");
DEFINE("_EZREALTY_CONFIG_MAXHEIGHT","Maximal erlaubte Bild-H�he");
DEFINE("_EZREALTY_CONFIG_MAXHEIGHTDESC","Was ist die maximale H�he in Pixel, die Sie beim Bilder-Upload erlauben?");

DEFINE("_EZREALTY_PIXELS","Pixel");
DEFINE("_EZREALTY_BEDBATH","Bett/Bad");
DEFINE("_EZREALTY_BUDGET","Budget");
DEFINE("_EZREALTY_INTERESTED","Interesse?");
DEFINE("_EZREALTY_WANTED","Anfragen-�bersicht");
DEFINE("_EZREALTY_PROPERTIES_WANTED","Immobilien gew�nscht");
DEFINE("_EZREALTY_PROPERTIES_WANTEDDESC","Interessenten, die folgendes ben�tigen");

DEFINE("_EZREALTY_LEAD_RESPONSE","Kaufanfrage R�ckantwort");
DEFINE("_EZREALTY_RESPONS_PROPLEAD","k�nnte eine Immobilie haben, die Sie in Ihrer Kaufanfrage eingestellt hatten. Anfrage ID# ist:-");
DEFINE("_EZREALTY_LEAD_RESPONSEERROR","Sie m�ssen eine kurze Nachricht eingeben");
DEFINE("_EZREALTY_CONFIG_COUNTRY","Verwende Staaten");

DEFINE("_EZREALTY_CONFIG_NLLINK","Neue Eintr�ge Link");
DEFINE("_EZREALTY_CONFIG_NLLINKDESC","M�chten Sie den 'Neue Eintr�ge'-Link im EZ Realty Kopfbereich (Header) im Front-End anzeigen lassen?");
DEFINE("_EZREALTY_STUDIO","Studio");
DEFINE("_EZREALTY_RESET","Zur�ckstellen");
DEFINE("_EZREALTY_LEADCONTACT_PROMO","Eine Immobilie vorhanden, f�r die wir eventuell einen K�ufer haben?");
DEFINE("_EZREALTY_SKIPFREE_LISTING","Verzichten Sie auf den freien Eintrag und gehen direkt zum bezahlten Eintrag!!");

DEFINE("_EZREALTY_CONFIG_COLCOUNT","Spalten Anzahl");
DEFINE("_EZREALTY_CONFIG_COLCOUNTDESC","Wieviele Spalten sollen auf der ersten Seite des Kategorien Eintrag Layout angezeigt werden?");
DEFINE("_EZREALTY_CONFIG_COLWIDTH","Spalten Breite");
DEFINE("_EZREALTY_CONFIG_COLWIDTHDESC","Wie breit sind die Spalten auf der ersten Seite des Kategorien-Eintrag Layout? z.B.: Falls Sie 1 Spalte haben, sollte die Breite 100% sein - falls Sie 2 Spalten haben, sollte die Breite 50% sein - falls Sie 3 Spalten haben, sollte die Breite 33% sein. Sie M�SSEN das Prozentzeichen eingeben.");

DEFINE("_EZREALTY_ESSENTIALS","Besonderheiten");
DEFINE("_EZREALTY_OTHERSPECS","Andere Besonderheiten");
DEFINE("_EZREALTY_NS","Nicht n�her beschrieben");
DEFINE("_EZREALTY_EA","eMail Administrator");

DEFINE("_EZREALTY_CONFIG_FORMATTING","Formatierung");
DEFINE("_EZREALTY_CONFIG_MAPPING","Mapping Einstellungen");
DEFINE("_EZREALTY_CONFIG_MAPWIDTH","Map Breite");
DEFINE("_EZREALTY_CONFIG_MAPWIDTHDESC","Die Map-Breite in Ihrem Front-End angegeben in Pixel.");
DEFINE("_EZREALTY_CONFIG_MAPHEIGHT","Map H�he");
DEFINE("_EZREALTY_CONFIG_MAPHEIGHTDESC","Die Map-H�he in Ihrem Front-End angegeben in Pixel.");
DEFINE("_EZREALTY_CONFIG_ADDRESSWIDTH","Adressen Box Breite");
DEFINE("_EZREALTY_CONFIG_ADDRESSWIDTHDESC","Die Breite der Text-Box �ber der Map, die die Immobilien-Adresse anzeigt.");
DEFINE("_EZREALTY_PROPERTY_MAPLOC","Map Anschrift");
DEFINE("_EZREALTY_SEARCH_ALLPOSTCODES","W�hle alle Postleitzahlen");

// TAGS THAT HAD THEIR LANGUAGE CONTENT CHANGED FOR THE 4.2.0 RELEASE

DEFINE("_EZREALTY_CONFIG_NEWLIST","Spezielle Immobilien-Eintrag Seiten");
DEFINE("_EZREALTY_CONFIG_NEWLISTDESC","Anzahl der Immobilien, die in 'Neue Eintr�ge', 'Besichtigung', Immobilien gesucht' und 'RSS Feed' -Seiten angezeigt werden.");

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
DEFINE("_EZREALTY_CPANEL_CLEANLIST","Eintr�ge bereinigen");
DEFINE("_EZREALTY_CPANEL_UPGRADE","Datenbank aktualisieren");
DEFINE("_EZREALTY_CPANEL_HELP","Hilfe");
DEFINE("_EZREALTY_CPANEL_MIGRATE","Integriere Jommla Users");
DEFINE("_EZREALTY_CPANEL_CONFIG","Konfiguration der Haupt-Einstellungen");
DEFINE("_EZREALTY_CPANEL_INTRO","Einleitung");
DEFINE("_EZREALTY_CPANEL_OPTIMIZE","Tabellen optimieren");

DEFINE("_EZREALTY_PROFILE_DSDET","Kontakt Details");
DEFINE("_EZREALTY_PROFILE_MANAGE","Manage Makler/Verk�ufer Profile");
DEFINE("_EZREALTY_PROFILE_IMAGE","Profil Bild");
DEFINE("_EZREALTY_PROFILE_NAME","Makler/Verk�ufer Name");
DEFINE("_EZREALTY_PROFILE_NUMPROPS","Anzahl der Eintr�ge");
DEFINE("_EZREALTY_PROFILE_COMPANY","Firma");
DEFINE("_EZREALTY_PROFILE_EDIT","Bearbeite Verk�ufer");
DEFINE("_EZREALTY_PROFILE_LINK","Link zu vorhandenen Mitgliedern");
DEFINE("_EZREALTY_PROFILE_TYPE4","Verk�ufer Typ");
DEFINE("_EZREALTY_PROFILE_INTRO","Pers�nliche Beschreibung<br />max. 255 Zeichen");
DEFINE("_EZREALTY_PROFILE_ADDRESS1","Hausnr.");
DEFINE("_EZREALTY_PROFILE_ADDRESS2","Stra�e");
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
DEFINE("_EZREALTY_PROFILE_DETAILS","Makler/Verk�ufer Profil Details");
DEFINE("_EZREALTY_PROFILE_SAVE","Speichere/Aktualisiere Profil");
DEFINE("_EZREALTY_PROFILE_PROFILE","Mein Profil");
DEFINE("_EZREALTY_PROFILE_TYPE1","W�hle Sie Ihren Verk�ufer Status");
DEFINE("_EZREALTY_PROFILE_SAVED","Profile Details gespeichert");
DEFINE("_EZREALTY_PROFILE_SEARCHALL","Suche alle Orte");
DEFINE("_EZREALTY_PROFILE_AGSELLERS","Unsere Makler & Private Verk�ufer");
DEFINE("_EZREALTY_PROFILE_NOPROFILES","Momentan sind keine Profile gelistet");
DEFINE("_EZREALTY_PROFILE_FINDDEALER","Finden Sie einen Makler/Privaten Verk�ufer in Ihrem Bereich");
DEFINE("_EZREALTY_PROFILE_AGLINK","Makler/Verk�ufer anzeigen");
DEFINE("_EZREALTY_PROFILE_MOBILE2","Mobil");
DEFINE("_EZREALTY_PROFILE_TEXT","Text Nachricht");
DEFINE("_EZREALTY_AGENT_CURRENTLISTINGS","Vorhandene Eintr�ge");
DEFINE("_EZREALTY_AGENT_MYLISTINGS","Zeige meine Eintr�ge");
DEFINE("_EZREALTY_AGENT_LISTINGSFOR","Eintr�ge f�r:-");
DEFINE("_EZREALTY_DEALER_NOLISTINGS","Es sind keine Eintr�ge mit diesem Profil verbunden");
DEFINE("_EZREALTY_PROFILE_SENDCONTACT","Kontakt zu diesem Makler/Verk�ufer");
DEFINE("_EZREALTY_PROFILE_SMSCONTACT","Sende SMS �ber Clickatell an diesen Makler/Verk�ufer");
DEFINE("_EZREALTY_ERROR_NOPROFILE","ACHTUNG - Sie m�ssen erst Ihr Profil erstellt haben, bevor Sie Ihre Immobilien zu den Eintr�gen hinzuf�gen/bearbeiten k�nnen!! Bitte klicken Sie auf den 'Mein Profil' Link oben, um Ihr Profil zu erstellen.");

DEFINE("_EZREALTY_CONFIG_CURRENCYPOS","W�hrung Position");
DEFINE("_EZREALTY_CONFIG_CURRENCYPOS_DESC","Sie k�nnen einstellen, ob das W�hrungssymbol vor oder nach dem Preis angezeigt wird.");
DEFINE("_EZREALTY_CONFIG_CURRENCYFORMAT","W�hrung Format");
DEFINE("_EZREALTY_CONFIG_CURRENCYFORMAT_DESC","Sie k�nnen einstellen, ob die W�hrung im Dezimal- oder europ�ischen Format erscheint.");
DEFINE("_EZREALTY_CONFIG_BEFORE","Davor");
DEFINE("_EZREALTY_CONFIG_AFTER","Danach");
DEFINE("_EZREALTY_CONFIG_DECIMAL","Dezimal");
DEFINE("_EZREALTY_CONFIG_EUROPEAN","Europ�isch");
DEFINE("_EZREALTY_CONFIG_MAPTYPE1","Google Maps");
DEFINE("_EZREALTY_CONFIG_MAPTYPE2","Yahoo Maps");

DEFINE("_EZREALTY_CONFIG_SHOWPROF","Zeige Profil");
DEFINE("_EZREALTY_CONFIG_PROFILING","Management Ihrer Seiten Profil Einstellungen");
DEFINE("_EZREALTY_CONFIG_PROFACCESS","Profil Berechtigung");
DEFINE("_EZREALTY_CONFIG_PROFACCESSDESC","Definieren Sie, wer die Details des Verk�ufer-Profils ansehen kann. DENKEN SIE DARAN - Sie D�RFEN NICHT den Zugriff �ber dem 'registrierten Mitglied' Level sperren - sonst sind die Besucher nicht in der Lage, einen Kontakt zum Verk�ufer herzustellen. F�r den �berwiegenden Teil Ihrer WebSeite gilt - �ffentlicher Zugriff (Public Access) ist die richtige Einstellung.");
DEFINE("_EZREALTY_CONFIG_PROFILEWIDTH","Profil Bild Breite");
DEFINE("_EZREALTY_CONFIG_PROFILEWIDTHDESC","Maximal erlaubte Breite des Profil-Bildes. Denken Sie daran: das ist die Breite des Bildes, wie sie im Front-End auf der Profil-Seite angezeigt wird. Bilder, die diese Breite �berschreiten, werden w�hrend des Upload-Prozesses auf die eingestellte Breite angepasst.");
DEFINE("_EZREALTY_CONFIG_PROFILEHEIGHT","Profil Bild H�he");
DEFINE("_EZREALTY_CONFIG_PROFILEHEIGHTDESC","Maximal erlaubte H�he des Profil-Bildes. Denken Sie daran: das ist die H�he des Bildes, wie sie im Front-End auf der Profil-Seite angezeigt wird. Bilder, die diese H�he �berschreiten, werden w�hrend des Upload-Prozesses auf die eingestellte H�he angepasst.");

DEFINE("_EZREALTY_PROFACCESS_DENIED","Unsere Makler/Verk�ufer Profile erm�glichen umfangreiche Einstellungen. Bitte melden Sie sich zuerst an (Login).");

DEFINE("_EZREALTY_CONFIG_PROFILES","Profile");

DEFINE("_EZREALTY_CONFIG_USESMS","Erlaube SMS");
DEFINE("_EZREALTY_CONFIG_USESMS_DESC","M�chten Sie den/das SMS Kontakt -Link/-Formular anzeigen lassen, um SMS Nachrichten �ber das Front-End zu erlauben? Falls Clickatell diesen Service f�r diesen Teil Europas nicht anbietet, tragen Sie hier bitte 'NEIN' ein.");

DEFINE("_EZREALTY_CONFIG_DEFEXPMGMT","Definieren Sie Ihre Ablauf-Management Einstellungen");
DEFINE("_EZREALTY_CONFIG_USEEXPMGMT","Verwende Ablauf-Management");
DEFINE("_EZREALTY_CONFIG_USEEXPMGMTDESC","M�chten Sie das Ablauf-Management System verwenden? Dies erlaubt Ihnen, auf welche Art und wie lange die Eintr�ge angezeigt werden - entweder zeitgesteuert oder durch die Limitierung der Anzeigeanzahl.");
DEFINE("_EZREALTY_CONFIG_EXPSYS","Ablauf-System");
DEFINE("_EZREALTY_CONFIG_EXPSYSDESC","Falls Sie das Ablauf-System verwenden - w�hlen Sie die Methode, aufgrund der die Eintr�ge begrenzt angezeigt werden.");
DEFINE("_EZREALTY_CONFIG_EXPHITSBASED","Seiten Anzeige");
DEFINE("_EZREALTY_CONFIG_EXPDATEBASED","Zeitgesteuert");
DEFINE("_EZREALTY_CONFIG_EXPFIG","Zeit in Tagen");
DEFINE("_EZREALTY_CONFIG_EXPFIGDESC","Falls Sie das zeitgesteuerte Ablauf-System verwenden, geben Sie bitte an, wieviele Tage die Eintr�ge angezeigt werden sollen.");
DEFINE("_EZREALTY_CONFIG_EXPGRACE","�bergangszeit");
DEFINE("_EZREALTY_CONFIG_EXPGRACEDESC","Falls sie 'Zeitgesteuerte' Eintr�ge verwenden, geben Sie bitte die �bergangszeit in Tagen an. Dies ist die Anzahl der Tage, in denen der Eintrag nicht mehr erscheint (da bereits abgelaufen) und dem endg�ltigen Entfernen aus der Datenbank. W�hrend dieser �bergangszeit k�nnen die Eintr�ge noch/wieder erneuert werden.");
DEFINE("_EZREALTY_CONFIG_LIGHTBOXEXP","Merkliste Ablauf-Zeit");
DEFINE("_EZREALTY_CONFIG_LIGHTBOXEXPDESC","Wie viele Tage sollen die Merklisten-Artikel in der Datenbank bleiben? Nach dieser Zeit k�nnen diese entfernt werden, indem Sie die 'Entfernen' Funktion verwenden.");
DEFINE("_EZREALTY_CONFIG_LISTINGSTEMPL","Eintr�ge Seiten-Template");
DEFINE("_EZREALTY_CONFIG_LISTINGSTEMPL_DESC","Es gibt nun verschiedene Layouts f�r die Eintrag-Seiten - z.B. f�r die Kategorie Inhalte, Neue Eintr�ge, Suchergebnisse, Fahrzeugmarken Seiten.");
DEFINE("_EZREALTY_CONFIG_MGSCHFILTER","Management Ihrer Such Filter Einstellungen");
DEFINE("_EZREALTY_CONFIG_PAYMENTSYS","W�hlen Sie Ihr Zahlsystem");
DEFINE("_EZREALTY_CONFIG_PAYMENTSYS_DESC","EZ Realty bietet momentan 2 M�glichkeiten, um die Zahlungen f�r bezahlte Erweiterungen (Upgrades) zu gew�hrleisten. Das PayPal System erm�glicht Ihnen das automatisch �ber ein eingebautes IPN Script oder, falls Ihnen PayPal nicht zur Verf�gung steht - k�nnen Sie Ihre Eintr�ge zu einer Seite leiten, die beschreibt wie Zahlungen �ber Ihre Seite vorgenommen werden sollen.");
DEFINE("_EZREALTY_CONFIG_CHANGEIMAGES","Wechsel Eintrag Bilder");
DEFINE("_EZREALTY_CONFIG_CHANGEIMAGES_DESC","Wollen Sie Ihren Mitgliedern erlauben, ihre eigenen Bilder nach dem ersten Upload zu wechseln? Wenn Sie das auf 'Nein' einstellen, bezieht sich das nur auf die Bilder, nicht jedoch die Inhalte. Diese k�nnen von den Mitgliedern nach wie vor bearbeitet werden. Bedenken Sie: Einige Mitglieder k�nnten es als Einschr�nkung empfinden, dass sie Ihre einmal hochgeladenen Bilder nicht mehr bearbeiten k�nnen.");
DEFINE("_EZREALTY_CONFIG_LEADSNOTIFY","Anfrage Bescheid");
DEFINE("_EZREALTY_CONFIG_LEADSNOTIFY_DESC","Falls Sie das Anfrage-Management Feature verwenden, m�chten Sie per eMail �ber eine neue Anfrage informiert werden?");
DEFINE("_EZREALTY_CONFIG_MAPRES","Mapping Anzeige");

DEFINE("_EZREALTY_MAPPING_STNUM","Verwende Haus Nummer");
DEFINE("_EZREALTY_MAPPING_STNUMDESC","Wollen Sie die Hausnummer f�r das Mapping verwenden? Falls Sie NEIN angeben, zeigt die Map nur die Stra�e. Falls Sie JA eingeben, zeigt die Map exakt die angegebene Adresse.");
DEFINE("_EZREALTY_MAPPING_STREET","Verwende Stra�en Name");
DEFINE("_EZREALTY_MAPPING_STREETDESC","Wollen Sie den Stra�enname f�r das Mapping verwenden? Falls Sie NEIN angeben, zeigt die Map nur den n�chst h�heren Bereich - z.B. den Ort.");
DEFINE("_EZREALTY_MAPPING_LOCALITY","Verwende Ort");
DEFINE("_EZREALTY_MAPPING_LOCALITYDESC","Wollen Sie den Ort f�r das Mapping verwenden? Falls Sie NEIN eingeben, zeigt die Map nur eine ungenaue Darstellung (�bersicht).");
DEFINE("_EZREALTY_MAPPING_STATE","Verwende Bundesland");
DEFINE("_EZREALTY_MAPPING_STATEDESC","Falls Ihr Bundesland nicht gro� genug ist, sollten Sie dies m�glicherweise auf NEIN stellen, wenn Sie das Mapping benutzen.");


DEFINE("_EZREALTY_SCH_TYPE","Verwende Eintrag Typ");
DEFINE("_EZREALTY_SCH_TYPEDESC","Wollen Sie die Eintrag-Typen - 'DropDown-Liste' im Haupt-Suchfilter verwenden?");
DEFINE("_EZREALTY_SCH_CTG","Verwende Immobilien Kategorien");
DEFINE("_EZREALTY_SCH_CTGDESC","Wollen Sie die Immobilien Kategorien Liste im Haupt-Suchfilter verwenden?");

DEFINE("_EZREALTY_SCH_LOC","Verwende Bundesl�nder und Orte");
DEFINE("_EZREALTY_SCH_LOCDESC","Wollen Sie Bundesl�nder und Orte im Haupt-Suchfilter verwenden?");

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
DEFINE("_EZREALTY_SELECT_SELLER","W�hle Makler/Verk�ufer");
DEFINE("_EZREALTY_DEALER_SELLER","Makler/Verk�ufer");

DEFINE("_EZREALTY_DETAILS_UNITNUM","Wohneinheit");
DEFINE("_EZREALTY_DETAILS_STREETNUM","Haus Nummer");
DEFINE("_EZREALTY_DETAILS_DISPLAYAD","Zeige Adresse");
DEFINE("_EZREALTY_LISTINGS_DISPLADDYEXTFEED","Wollen Sie die Immobilien Adresse per RSS-Feed auf externen Immobilien-Seiten anzeigen lassen?");

DEFINE("_EZREALTY_OPTIMIZE_DATABASE","Die EZ Realty Tabellen wurden optimiert");
DEFINE("_EZREALTY_MIGRATE_ERROR","Fehler - Sie verga�en Ihre Mitglieder auszuw�hlen!");
DEFINE("_EZREALTY_COPY","Kopie");
DEFINE("_EZREALTY_PROFILE_ERROR_MID","FEHLER - Sie m�ssen ein existierendes Joomla Mitglied zu diesem Profil zuordnen!!");
DEFINE("_EZREALTY_SORT_ALLSTATES","-Alle Bundesl�nder-");
DEFINE("_EZREALTY_SORT_ALLCOUNTRIES","-Alle Staaten-");

DEFINE("_EZREALTY_ORDER_LIST1","ID aufsteigend");
DEFINE("_EZREALTY_ORDER_LIST2","ID absteigend");
DEFINE("_EZREALTY_ORDER_LIST3","Verk�ufer Name aufsteigend");
DEFINE("_EZREALTY_ORDER_LIST4","Verk�ufer Name absteigend");
DEFINE("_EZREALTY_ORDER_LIST5","Kategorie Name aufsteigend");
DEFINE("_EZREALTY_ORDER_LIST6","Kategorie Name absteigend");
DEFINE("_EZREALTY_ORDER_LIST9","Ver�ffentlicht aufsteigend");
DEFINE("_EZREALTY_ORDER_LIST10","Ver�ffentlicht absteigend");
DEFINE("_EZREALTY_ORDER_LIST11","�berpr�ft aufsteigend");
DEFINE("_EZREALTY_ORDER_LIST12","�berpr�ft absteigend");
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
DEFINE("_EZREALTY_MYLISTINGS","Meine Eintr�ge");

DEFINE("_EZREALTY_GENERIC_SAVED","Details gespeichert");

DEFINE("_EZREALTY_LISTINGS_ADDLIGHTBOX","Zur Merkliste hinzuf�gen");
DEFINE("_EZREALTY_NEEDTOLOGIN","Tut uns leid - Sie m�ssen angemeldet sein, um dieses Feature n�tzen zu k�nnen.");
DEFINE("_EZREALTY_VIEW_LIGHTBOX","Merkliste anzeigen");
DEFINE("_EZREALTY_REMOVE_LIGHTBOX","Von Merkliste entfernen");

DEFINE("_EZREALTY_EMPTY_LIGHTBOX","Zur Zeit befinden sich keine Eintr�ge in Ihrer Merkliste");
DEFINE("_EZREALTY_MY_LIGHTBOX","Meine Merkliste");

DEFINE("_EZREALTY_CONFIG_ADDRESSIMG","W�hlen Sie, welche Adressangaben beim Eintrag der Immobilien-Informationen verwendet werden sollen");
DEFINE("_EZREALTY_CONFIG_SHOWMEMB","Zeige den Mitglieder-Bereich Link");
DEFINE("_EZREALTY_CONFIG_SHOWMEMBDESC","Falls Sie Immobilien-Eintr�ge von Mitgliedern haben - m�chten Sie den Link zum 'Verk�ufer Panel' oben im EZ Realty Men� (Front-End) anzeigen? M�glicherweise wollen Sie hier 'Nein' einstellen, um ein eigenes Auswahl-Men� in Joomla zu erstellen, das zu den Benutzer-Privilegien verlinkt.");
DEFINE("_EZREALTY_CONFIG_ADDPCODEDESC","Wollen Sie beim Verwalten und Anzeigen Ihrer Immobilien-Adressen die Postleitzahl verwenden/anzeigen?");
DEFINE("_EZREALTY_DETAILS_PROPCOUNTY","Kreis/Gemeinde/Kommune");
DEFINE("_EZREALTY_DETAILS_PROPCOUNTY_DESC","** Ein optionales Feld f�r geographische Bereiche zwischen Staat und Stadt. Dieses Feld ist KEIN TEIL der Immobilien-Adresse - aber wird in der Detail Seite angezeigt.");
DEFINE("_EZREALTY_DETAILS_TOTALROOMS","Gesamtzahl der R�ume");
DEFINE("_EZREALTY_DETAILS_LIVINGAREA","Wohnbereich");
DEFINE("_EZREALTY_DETAILS_BOND","Kaution");
DEFINE("_EZREALTY_DETAILS_FRONTAGE","Grundst�ck-Breite");
DEFINE("_EZREALTY_DETAILS_DEPTH","Grundst�ck-Tiefe");
DEFINE("_EZREALTY_SHOW_PRICE","Zeige Preis");
DEFINE("_EZREALTY_DETAILS_PRICEVIEW","Preis Anzeige");
DEFINE("_EZREALTY_DETAILS_PRICEVIEW_DESC","Falls Sie den Immobilienpreis verstecken (nicht anzeigen) - schreiben Sie eine besondere Nachricht - z.B. 'Verhandlungsbasis ca. 1 Mio. �'.");

DEFINE("_EZREALTY_DETAILS_BUSINESS","Infos zu Firmen-Immobilien");
DEFINE("_EZREALTY_DETAILS_TAKINGS","Einnahmen");
DEFINE("_EZREALTY_DETAILS_RETURNS","Ausgaben");
DEFINE("_EZREALTY_DETAILS_NETPROFIT","Netto Umsatz");
DEFINE("_EZREALTY_DETAILS_BUSTYPE","Art des Unternehmens");
DEFINE("_EZREALTY_DETAILS_BUSSUBTYPE","Besonderes");

DEFINE("_EZREALTY_DETAILS_RURAL","Zusatz-Informationen");
DEFINE("_EZREALTY_DETAILS_FENCING","Einz�unung");
DEFINE("_EZREALTY_DETAILS_RAINFALL","Niederschlagsmenge");
DEFINE("_EZREALTY_DETAILS_SOILTYPE","Bodentyp");
DEFINE("_EZREALTY_DETAILS_IRRIGATION","Bew�sserung");
DEFINE("_EZREALTY_DETAILS_CARRYINGCAP","Tragkraft");
DEFINE("_EZREALTY_DETAILS_SERVICES","Dienstleistungen");

DEFINE("_EZREALTY_TYPE_AUCTION","Zur Auktion");
DEFINE("_EZREALTY_DETAILS_MARKET0","Markt Status");
DEFINE("_EZREALTY_DETAILS_MLSID","MLS ID Nummer");
DEFINE("_EZREALTY_DETAILS_MLSIDDESC","Falls Sie ein US Makler sind, k�nnen Sie hier Ihre MLS ID f�r diese Immobilie auff�hren");

DEFINE("_EZREALTY_DETAILS_GRAZING","Weideland");
DEFINE("_EZREALTY_DETAILS_CROPPING","Ackerbau");
DEFINE("_EZREALTY_DETAILS_WATERRESOURCES","Wasserquellen");
DEFINE("_EZREALTY_DETAILS_STORAGE","Lager");
DEFINE("_EZREALTY_DETAILS_GENERAL","Allgemeine Immobilien Info");

DEFINE("_EZREALTY_PRUNE_DONE","Merklisten-Eintr�ge entfernt");

DEFINE("_EZREALTY_NOALERT_SENT","Alarm eMails f�r ausstehende Eintrag-L�schung wurde nicht gesendet, da Ihre Seite nicht das zeitbasierte Ablauf-Management verwendet.");

DEFINE("_EZREALTY_EXPIRY_WARNING","Ausstehender Eintrag-Ablauf");
DEFINE("_EZREALTY_EXPIRY_MESSAGE","Ihr Immobilien-Eintrag auf unserer WebSeite wird bald ablaufen und wir hoffen, Sie hatten eine erfolgreiche Anzeigkampagne. Sollten Sie eine Fortf�hrung Ihrer Anzeige w�nschen, besuchen Sie bitte unsere WebSeite und verl�ngern Ihren Eintrag. Sie finden uns hier:-");
DEFINE("_EZREALTY_EXPIRY_MESSAGE2","Melden Sie sich auf der WebSeite an (Login) und besuchen Sie das Mitglieder Control Panel. Dort k�nnen Sie Ihren Eintrag erneuern. Sollten Sie sich zu keiner Verl�gerung entschlie�en, wird Ihr Eintrag ohne weitere Mitteilung gel�scht.");
DEFINE("_EZREALTY_ALERTMSG_PT1","eMail gesendet an");
DEFINE("_EZREALTY_ALERTMSG_PT2","Benutzer");
DEFINE("_EZREALTY_CONFIG_BRAZILIAN","BrasilianerIn");

DEFINE("_EZREALTY_HEADER_FEATURED","Besonderes");
DEFINE("_EZREALTY_FEATURED_PROPERTY_LIST","Aussergew�hnliche Objekte");

DEFINE("_EZREALTY_CONFIG_TOPMENU","Manage die Top EZ Realty Men� Links");
DEFINE("_EZREALTY_CONFIG_USEMENU","Verwende Top Men� Links");
DEFINE("_EZREALTY_CONFIG_USEMENU_DESC","Wollen Sie die Top EZ Realty men� Links verwenden? Wird diese Einstellung auf 'Nein' gesetzt, werden ALLE Top Men� Links im Front-End versteckt/nicht angezeigt.");
DEFINE("_EZREALTY_CONFIG_USEFEAT","Verwende Spezial-Eintr�ge Link");
DEFINE("_EZREALTY_CONFIG_USEFEAT_DESC","Wollen Sie den Top Spezial-Eintr�ge Link verwenden?");
DEFINE("_EZREALTY_CONFIG_AGLINK","Makler/Verk�ufer Link");
DEFINE("_EZREALTY_CONFIG_AGLINK_DESC","Wollen Sie den Top Makler/Verk�ufer Link verwenden?");
DEFINE("_EZREALTY_CONFIG_SCHLINK","Verwende Such Filter Link");
DEFINE("_EZREALTY_CONFIG_SCHLINK_DESC","Wollen Sie den Top Such Filter Link verwenden?");
DEFINE("_EZREALTY_CONFIG_MEMLINK","Verwende Mitglieder Link");
DEFINE("_EZREALTY_CONFIG_MEMLINK_DESC","Wollen Sie den Top Link verwenden, der direkt zum Mitglieder Eintrag Management-Bereich f�hrt?");

DEFINE("_EZREALTY_SEL_STATE","W�hle Bundesland");
DEFINE("_EZREALTY_SEL_LOCALITY","W�hle Ort");
DEFINE("_EZREALTY_CLICKOPEN","Zum �ffnen auf Thumbnail klicken");

DEFINE("_EZREALTY_LISTINGS_SUMMARY","�bersicht");
DEFINE("_EZREALTY_LISTINGS_EXPAND","Zum Erweitern klicken");
DEFINE("_EZREALTY_LISTINGS_TECHNICAL","Technische Einzelheiten");
DEFINE("_EZREALTY_LISTINGS_NOTECHSPECS","F�r dieses Fahrzeug sind keine technischen Einzelheiten gelistet.");
DEFINE("_EZREALTY_LISTINGS_CLICKOPEN","Anzeige des Bildes in Originalgr��e - klicken");
DEFINE("_EZREALTY_LISTINGS_SPECS","Einzelheiten");
DEFINE("_EZREALTY_LISTINGS_FEATS","Besonderheiten");
DEFINE("_EZREALTY_TOOLS","Tools");
DEFINE("_EZREALTY_DET_ADDFEAT","Zus�tzliche Besonderheiten");
DEFINE("_EZREALTY_DET_ADDNUM","Anzeige #");
DEFINE("_EZREALTY_DET_AGID","Agentur Referenz #");
DEFINE("_EZREALTY_DET_MLSID","MLS ID");
DEFINE("_EZREALTY_DET_COUNTY","Landkreis/Gemeinde");

DEFINE("_EZREALTY_CONFIG_BACKBUT","Zur�ck Button");
DEFINE("_EZREALTY_CONFIG_BACKBUTDESC","Wollen Sie den Zur�ck Button unten (im Footer) Ihrer WebSeite anzeigen?");

DEFINE("_EZREALTY_TABS_SUMMARY","�bersicht");
DEFINE("_EZREALTY_TABS_DETAILS","Details");
DEFINE("_EZREALTY_TABS_FEATURES","Besonderheiten");
DEFINE("_EZREALTY_TABS_DESCRIPTION","Beschreibung");

DEFINE("_EZREALTY_PROFILE_CONTACT","Kontakt Verk�ufer");

DEFINE("_EZREALTY_LISTINGS_RENEW","Erneuern");
DEFINE("_EZREALTY_LISTING_UPGRADE","erweitern/Upgrade");
DEFINE("_EZREALTY_LEADS_SUBMSG","Ein Besucher Ihrer WebSeite hat soeben Daten in Ihr Anfrage Management System eingetragen. Bitte melden Sie sich an (Login), um die Daten zu anzusehen, sobald Sie Zeit dazu haben.");

DEFINE("_EZREALTY_LISTINGS_TIMEINTRO","Eintr�ge sind abgelaufen nach");
DEFINE("_EZREALTY_LISTINGS_TIME2","Tagen, und Sie haben noch");
DEFINE("_EZREALTY_LISTINGS_TIME3","Tage, w�hrend der Sie Ihren Eintrag verl�ngern k�nnen.");
DEFINE("_EZREALTY_LISTINGS_TIMEEXPL","Falls Sie zwischen den Eintrag-Levels/Typen erweitern (upgraden) - erneuert Sich das Ablauf-Datum.");

DEFINE("_EZREALTY_MSG","Nachricht");
DEFINE("_EZREALTY_SITE_CONTACT","Generelle Kontakt-Anfrage �ber");

DEFINE("_EZREALTY_LISTER_AGENT","Makler");
DEFINE("_EZREALTY_LISTER_OWNER","Besitzer/Verk�ufer");
DEFINE("_EZREALTY_LISTER_BROKER","Broker");
DEFINE("_EZREALTY_LISTER_SELECTTYPE","W�hle Verk�ufer Typ");

DEFINE("_EZREALTY_SEARCH_ANYMLS","Jede MLS ID");

DEFINE("_EZREALTY_YOUVEGOT_LEADSMAIL","Neue Immobilien-Anfrage eingetragen");

DEFINE("_EZREALTY_REDUNDANT","** Dieses Feld ist nun �berfl�ssig **");

DEFINE('_EZREALTY_NAV_LT','&lt;');
DEFINE('_EZREALTY_NAV_RT','&gt;');
DEFINE('_EZREALTY_NAV_PAGE','Seite');
DEFINE('_EZREALTY_NAV_OF','von');
DEFINE('_EZREALTY_NAV_START','Start');
DEFINE('_EZREALTY_NAV_PREVIOUS','Vorherige');
DEFINE('_EZREALTY_NAV_NEXT','N�chste');
DEFINE('_EZREALTY_NAV_END','Ende');
DEFINE('_EZREALTY_NAV_RESULTS','Ergebnisse');

DEFINE('_EZREALTY_TABS_ADDRESS','Adresse');
DEFINE('_EZREALTY_TABS_SPECS','Einzelheiten');
DEFINE('_EZREALTY_TABS_MARKETING','Marketing');
DEFINE('_EZREALTY_TABS_ADMIN','Administration');
DEFINE('_EZREALTY_TABS_BUSINESS','Gesch�ft');
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
DEFINE('_EZREALTY_DETAILS_SQUARES','Erdgescho�');
DEFINE('_EZREALTY_DETAILS_POFFICE','Anteil der Verwaltung in %');
DEFINE('_EZREALTY_DETAILS_PWAREHOUSE','Anteil Gesch�ft/Lager in %');
DEFINE('_EZREALTY_DETAILS_LOADING','Ladem�glichkeiten');
DEFINE('_EZREALTY_DETAILS_NOADFEAT','Keine zus�tzlichen Besonderheiten gelistet');
DEFINE('_EZREALTY_DETAILS_VIDEOTOUR','Video Tour');

DEFINE('_EZREALTY_MIGRATE_USERS','Verschiebe Benutzer');

DEFINE('_EZREALTY_CONFIG_STATESLOCS','Bundesl�nder und Orte');
DEFINE('_EZREALTY_CONFIG_LOCSONLY','Nur Orte');
DEFINE('_EZREALTY_CONFIG_NEITHER','Weder');
DEFINE('_EZREALTY_CONFIG_STATELOCTITLE','Bundesl�nder und Orte');
DEFINE('_EZREALTY_CONFIG_STATELOCTITLE_DESC','Definieren Sie, wie Bundesl�nder und Orte f�r Ihre Immobilien Adressen eingetragen werden. Manche kleinen Bereiche/Orte erfordern weder ein Bundesland noch einen Ort, w�hrend andere nur Orte erfordern und landes-/staatenweite Eintr�ge ben�tigen beides - Bundesl�nder und Orte.');
DEFINE('_EZREALTY_CONFIG_YOURVIDEOS','Ihre Video Einstellungen');
DEFINE('_EZREALTY_CONFIG_FLV','Einbinden FLV Video Tour Dateien');
DEFINE('_EZREALTY_CONFIG_FLV_DESC','Sie k�nnen nun erm�glichen, extern gehostete FLV Dateien in Ihre WebSeite einzubinden, um als Video Tour angezeigt zu werden. Diese Funktion ist anstelle der �blichen M�glichkeit gedacht, zu einem Satz Dateien als Virtuelle Tour zu verlinken. FLV-Dateien sind Flash Movies, die eine Reihe mehr M�glichkeiten zum Einbinden zulassen, als andere Video-Formate.');
DEFINE('_EZREALTY_CONFIG_FLVWIDTH','Anzeige-Breite');
DEFINE('_EZREALTY_CONFIG_FLVWIDTH_DESC','Die Anzeige-Breite der eingebundenen FLV Dateien. Die Anzeige-Breite ist abh�ngig von der Anzeige-Position im Template und der Breite des Templates.');
DEFINE('_EZREALTY_CONFIG_FLVHEIGHT','Anzeige-H�he');
DEFINE('_EZREALTY_CONFIG_FLVHEIGHT_DESC','Die Anzeige-H�he der eingebundenen FLV Dateien. Diese kann gleich eingestellt werden wie die Anzeige-Breite.');
DEFINE('_EZREALTY_TABS_VIDEO','Video');
DEFINE('_EZREALTY_TABS_NOMAP','Tut uns leid - es ist keine Map f�r diese Immobilie verf�gbar');
DEFINE('_EZREALTY_TABS_NOVIDEO','Tut uns leid - es ist keine Video-Tour f�r diese Immobilie verf�gbar');

DEFINE('_EZREALTY_PROFILE_ERROR_TYPE','Sie m�ssen einen Verk�ufer-Typ ausw�hlen.');
DEFINE('_EZREALTY_PROFILE_TYPE','Verk�ufer Typ');
DEFINE('_EZREALTY_LISTINGS_ASC','Eintr�ge aufsteigend');
DEFINE('_EZREALTY_LISTINGS_DESC','Eintr�ge absteigend');

DEFINE('_EZREALTY_LISTINGS_FLVMODE','Diese Seite bietet die M�glichkeit, Embedded FLV Dateien f�r Video-Touren zu verwenden anstelle von externen Dateien. Bitte tragen Sie die URL zur Ihrer FLV-Datei ein, falls vorhanden.');
DEFINE('_EZREALTY_LOCALITY_DESC','Orts-Beschreibung');
DEFINE('_EZREALTY_SOLD_ERROR','FEHLER - Sie m�ssen einen Markt-Status f�r Ihren Immobilien-Eintrag definieren');

DEFINE("_EZREALTY_APF11","Haustiere erlaubt");
DEFINE("_EZREALTY_SEARCH_ANYMARKET","Irgendein Markt-Status");

DEFINE("_EZREALTY_SCH_PETS","Verwende Haustiere erlaubt");
DEFINE("_EZREALTY_SCH_PETSDESC","Wollen Sie die 'Haustiere erlaubt' Ja/Nein-Auswahl-Liste im Suchfilter verwenden?");
DEFINE("_EZREALTY_SCH_LUG","Verwende Abschliessbare Garage");
DEFINE("_EZREALTY_SCH_LUGDESC","Wollen Sie die 'Abschliessbare Garage' Ja/Nein-Auswahl-Liste im Suchfilter verwenden?");



DEFINE("_EZREALTY_DETAILS_VIEWBOOKING","Buchungs-Link verwenden");
DEFINE("_EZREALTY_DETAILS_VIEWBOOKING_DESC","Diese WebSite beinhaltet Buchungs-M�glichkeiten - wollen Sie diese nutzen um Immobilien-Buchungen zu verwalten?");
DEFINE("_EZREALTY_LEADS_STATUS","Status");
DEFINE("_EZREALTY_LEADS_REVIEW","Anfragen �bersicht");
DEFINE("_EZREALTY_LEADS_CALL","Interessenten anrufen");
DEFINE("_EZREALTY_LEADS_RECALL","Nochmals anrufen");
DEFINE("_EZREALTY_LEADS_DOEMAIL","E-Mail an Interessenten");
DEFINE("_EZREALTY_LEADS_DOINSPECTION","Immobilien zur Ansicht organisieren");
DEFINE("_EZREALTY_LEADS_NOINTEREST","Nicht l�nger interessiert");
DEFINE("_EZREALTY_LEADS_CLOSED","Geschlossen - kein weiteres Interesse");
DEFINE("_EZREALTY_LEADS_NOTES","Admin Notizen:<br />Diese Information ist im Front-End nicht sichtbar. Hinterlegen Sie hier Ihre Notizen zu diesem Vorgang.");
DEFINE("_EZREALTY_LEADS_ADMIN","Verwaltungsaufgaben Anzeige");
DEFINE("_EZREALTY_LEADS_LISTREQ","Anfrage erstellen");

DEFINE("_EZREALTY_MAPPING_INCOMPATIBLE","Leider ist die Google Maps API nicht kompatibel mit diesem Browser");

DEFINE("_EZREALTY_CONFIG_OTHERLINKS","Cross-component Integration Links");
DEFINE("_EZREALTY_CONFIG_BOOKINGS","JomRes Buchungen Integration");
DEFINE("_EZREALTY_CONFIG_BOOKINGS_DESC","Haben Sie die JomRes Buchungs-Komponente sowie den Syncbot installiert, um Vermietungen (Mietbuchungen) zu verwalten?");
DEFINE("_EZREALTY_BOOKINGS","Buchungen");

DEFINE("_EZREALTY_CHECK_PRUNE","Sie sind dabei, alte (abgelaufene) Eintr�ge in den Merklisten unwiderruflich zu entfernen. Sind Sie sicher, dass Sie das wollen?");
DEFINE("_EZREALTY_CHECK_ALERT","Sie sind dabei, E-Mails bez�glich aller abgelaufenen Eintr�ge in der Datenbank zu versenden. Dies kann einige Zeit ben�tigen, je nach Anzahl. Sind Sie sicher, dass Sie diese E-Mails versenden wollen?");
DEFINE("_EZREALTY_CHECK_CLEAN","Sie sind dabei alte, abgelaufene Eintr�ge aus der Datenbank zu l�schen. Die L�schung der Eintr�ge kann nicht r�ckg�ngig gemacht werden. Sind Sie sicher, dass Sie die Eintr�ge l�schen wollen?");

DEFINE("_EZREALTY_CPANEL_FEEDS","Feeds");
DEFINE("_EZREALTY_SELECT_IMAGE","Bild ausw�hlen");

DEFINE("_EZREALTY_PROFILE_LOGO","Agentur Logo");
DEFINE("_EZREALTY_PROFILE_MAXSIZE","Die maximal erlaubte Bild-Gr��e betr�gt");
DEFINE("_EZREALTY_CONFIG_LOGOWIDTH","Logo Breite");
DEFINE("_EZREALTY_CONFIG_LOGOHEIGHT","Logo H�he");

DEFINE("_EZREALTY_CONFIG_LOGOWIDTHDESC","Maximal erlaubte Breite des Verk�ufer-Logos. Denken Sie daran, dass dieses die Breite ist, die im Front-End Profil sowie im Immobilien-Eintrag angezeigt wird. Bilder/Grafiken, die diese Breite �berschreiten, werden beim Upload zur�ckgewiesen. Eine gute Breite ist 160 Pixel.");
DEFINE("_EZREALTY_CONFIG_LOGOHEIGHTDESC","Maximal erlaubte H�he des Verk�ufer-Logos. Denken Sie daran, dass dieses die H�he ist, die im Front-End Profil sowie im Immobilien-Eintrag angezeigt wird. Bilder/Grafiken, die diese H�he �berschreiten, werden beim Upload zur�ckgewiesen. Eine gute H�he ist 30 Pixel.");

DEFINE("_EZREALTY_HELPER_PETS","Assistenztiere/Handicap");
DEFINE("_EZREALTY_NA","keine Angabe");

DEFINE("_EZREALTY_LISTINGS_PRESCHOOL","N�chster Kindergarten");
DEFINE("_EZREALTY_LISTINGS_PRIMARYSCHOOL","N�chste Grundschule");
DEFINE("_EZREALTY_LISTINGS_HIGHSCHOOL","N�chste weiterf�hrende Schule");
DEFINE("_EZREALTY_LISTINGS_UNIVERSITY","N�chste Universit�t");

DEFINE("_EZREALTY_CONFIG_MAPTYPE","Mapping-Service ausw�hlen");
DEFINE("_EZREALTY_CONFIG_MAPTYPEDESC","Welchen Mapping-Service wollen Sie benutzen? Falls in Ihrem Joomla-Template viel JavaScript verwendet wird, kann es sein, da� Sie diese Yahoo-Mapping-Option verwenden m�ssen: <a target='_blank' href='http://developer.yahoo.com/maps/'>http://developer.yahoo.com/maps/</a>.");
DEFINE("_EZREALTY_CONFIG_OSTATUS","Online Status Anzeige");
DEFINE("_EZREALTY_CONFIG_OSTATUSDESC","Online-Status-Anzeigen f�r IM-Systeme sind unterschiedlich, gelegentlich offline - und haben eine gro�e Auswahl an Anzeige-Buttons. W�hren Sie den \"Status Indicator Server\", den Sie f�r Ihre WebSite verwenden wollen.");
DEFINE("_EZREALTY_DRIVING_DIRECTIONS","Hier klicken f�r die Fahrtrichtung");

DEFINE("_EZREALTY_PROFILE_SHOWADDY","Anschrift anzeigen");
DEFINE("_EZREALTY_PROFILE_SHOWADDYDESC","&nbsp;&nbsp;M�chten Sie Ihre Anschrift auf Ihrer Profil-Seite anzeigen? - Falls Sie dies auf \"Nein\" setzen, werden weder Ihre Anschrift noch eine Route zu Ihrer Anschrift angezeigt.");
DEFINE("_EZREALTY_CONFIG_CURRENCYCODE","W�hrungs-Code");
DEFINE("_EZREALTY_CONFIG_CURRENCYCODEDESC","Der aus 3 Buchstaben bestehende W�hrungs-Code Ihrer Immobilien-Eintr�ge - z. B. EUR, USD - auf die gleiche Art, wie auch W�hrungs-Codes f�r Paypal definiert werden. Dieser Code wird von einigen externen Feeds zur Anzeige der Immobilien-Eintr�ge verwendet.");
DEFINE("_EZREALTY_CONFIG_SHORTLIST","Kurz-Liste");
DEFINE("_EZREALTY_CONFIG_SHORTLISTDESC","Wollen Sie das \"Kurz-Eintrag\"-Feature verwenden? Um es benutzen zu k�nnen, m�ssen registrierte User eingeloggt sein. Wenn Sie diesen Zugriff nicht erlauben wollen, stellen Sie dieses Feature auf \"Nein\".");

DEFINE("_EZREALTY_LISTINGS_SCHOOLDIST","Schulbezirk");
DEFINE("_EZREALTY_LISTINGS_HOFEES","Instandshaltungs-/Nebenkosten");
DEFINE("_EZREALTY_APF12","Aufzug");
DEFINE("_EZREALTY_SPECS","Kurzbeschreibung");
DEFINE("_EZREALTY_CLICK","Klicken zum Vergr��ern");
DEFINE("_EZREALTY_OHOUSE","Besichtigung");
DEFINE("_EZREALTY_DETAILS_MARKET6","nicht verf�gbar");
DEFINE("_EZREALTY_ADDOWNER_ERROR","FEHLER - benennen Sie einen Makler/Besitzer, der f�r diesen Eintrag verantwortlich ist");

DEFINE("_EZREALTY_CPANEL_FEEDSDESC","Zus�tzlich zu den RSS 2.0 Feeds, die immer verwendet werden konnten, bietet EZ Realty nun die M�glichkeit, Ihre Immobilien-Eintr�ge einigen externen, gro�en Immobilien-Seiten anzubieten.<br /><br /><strong>Diese Feeds sind neue Features - und noch in der Versuchsphase - sollten Sie Schwierigkeiten damit haben, senden Sie bitte ein Support Ticket mit einer Beschreibung des Bugs.</strong>");
DEFINE("_EZREALTY_CPANEL_GOOGLE1","Ihr Google RSS 2.0 Feed");
DEFINE("_EZREALTY_CPANEL_GOOGLE2","Besuchen Sie Google f�r mehr Informationen");
DEFINE("_EZREALTY_CPANEL_EDGEIO1","Ihr Edgeio RSS 2.0 Feed");
DEFINE("_EZREALTY_CPANEL_EDGEIO2","Besuchen Sie Edgeio f�r mehr Informationen");
DEFINE("_EZREALTY_CPANEL_PROPSMART1","Ihr PropSmart RSS 2.0 Feed");
DEFINE("_EZREALTY_CPANEL_PROPSMART2","Besuchen Sie PropSmart f�r mehr Informationen");
DEFINE("_EZREALTY_MIGRATE_MEMBERS","User einbinden");

DEFINE("_EZREALTY_CPANEL_COUNTRIES","L�nder/Staaten Verwaltung");
DEFINE("_EZREALTY_CPANEL_STATES","Bundesl�nder Verwaltung");
DEFINE("_EZREALTY_CPANEL_LOCALITIES","St�dte/Orte Verwaltung");
DEFINE("_EZREALTY_CPANEL_BEDROOMS","Schlafzimmer Verwaltung");
DEFINE("_EZREALTY_CPANEL_PROPERTYMGR","Immobilien Verwaltung");

DEFINE("_EZREALTY_PRICE_DISPLAYVALUE","Wert (Preis) anzeigen");
DEFINE("_EZREALTY_FILTER_MLS","-Alle MLS ID's-");
DEFINE("_EZREALTY_FILTER_AGENTS","-Alle Makler ID's-");


//****************************************************//
//  EXISTING LANGUAGE TAGS THAT HAVE HAD THEIR CONTENT CHANGED FOR THE 5.0.0 RELEASE
//****************************************************//


DEFINE("_EZREALTY_CONFIG_USEMAP","Mapping verwenden");
DEFINE("_EZREALTY_CONFIG_USEMAPDESC","M�chten Sie einen der Mapping-Services verwenden? Falls ja, lesen Sie bitte die Nutzungsbedingungen hier: <a target='_blank' href='http://www.google.com/apis/maps/terms.html'>http://www.google.com/apis/maps/terms.html</a> - oder lesen Sie die Bedingungen bei Yahoo Mapping Site");
DEFINE("_EZREALTY_CONFIG_MAPAPI","Mapping API Nummer");
DEFINE("_EZREALTY_CONFIG_MAPAPIDESC","Sie M�SSEN eine Mapping API Nummer f�r Ihre WebSite beantragen und hier eintragen, falls Sie das Mapping verwenden. Beantragen Sie Ihre API Nummer hier: <a target='_blank' href='http://www.google.com/apis/maps/'>http://www.google.com/apis/maps/</a> - oder gehen Sie zur Yahoo Mapping Site, um eine Yahoo Mapping API zu erhalten. Yahoo Mapping API\'s k�nnen Sie hier beantragen: <a target='_blank' href='http://developer.yahoo.com/maps/'>http://developer.yahoo.com/maps/</a>");
DEFINE("_EZREALTY_CONFIG_OP2","Definieren Sie die Benachrichtigungen, die Sie erhalten m�chten");

DEFINE("_EZREALTY_DETAILS_PROPPRICEDESC","<font color='#FF0000'>Dieses Datenbankfeld enth�lt eine Eingabe-Maske. Geben Sie Zahlen in diesem Format ein - 10000.00 - verwenden Sie kein Komma!</font>");

DEFINE("_EZREALTY_CONFIG_ARRVIEW","Email Verk�ufer Link");
DEFINE("_EZREALTY_CONFIG_ARRVIEWDESC","M�chten Sie den \"Email Verk�ufer\" Kontakt-Link in der detaillierten Immobilien-Information anzeigen?");
DEFINE("_EZREALTY_DETAILS_PROPADDRESS2","Stra�e");
DEFINE("_EZREALTY_CONFIG_TITLE","Einstellung");
DEFINE("_EZREALTY_CONFIG_COUNTRYDESC","Falls Sie Land/Staat nicht in Ihren Immobilien-Eintr�gen und dem Interessenten-Registrierungs-Formular verwenden m�chten, tragen Sie hier \"Nein\" ein, um die Anzeige zu verstecken.");
DEFINE("_EZREALTY_CLEANDB_SUCCESS","In der Datenbank wurden die Anzeigen gel�scht, die die vereinbarte Anzahl von Page-Impressions bzw. Tagen �berschritten haben");
DEFINE("_EZREALTY_CLEANDB_FAIL","Die Datenbank wurde nicht bereinigt, da Sie momentan auf Ihrer WebSite EZ Realty ohne Ablauf-Management verwenden");

DEFINE("_EZREALTY_PRICES_TITLE","Such-Filter Preise verwalten");
DEFINE("_EZREALTY_MODPRICES_TITLE","Such-Filter Preis-Bereiche");
DEFINE("_EZREALTY_PRICES_RANGE","Such-Filter Preis-Bereich");
DEFINE("_EZREALTY_MODPRICES_RANGE","Such-Filter Preis-Bereich definieren");
DEFINE("_EZREALTY_MODPRICES_SAVED","Such-Filter Preis-Bereich gespeichert");
DEFINE("_EZREALTY_MODPRICES_ERROR1","Sie m�ssen einen Preis-Bereich eintragen");
DEFINE("_EZREALTY_PRICES_EDITTAG","Such-Filter Preis-Bereich editieren");


//****************************************************//
//  EXISTING LANGUAGE TAGS THAT WILL BE REMOVED       //
//****************************************************//

DEFINE("_EZREALTY_CONFIG_CPITITLE","Kunden Immobilien Information");
DEFINE("_EZREALTY_CONFIG_CPIDESC","Die 3 benutzerdefinierten Features geben Ihnen die M�glichkeit, besonders wichtige Informationen f�r Ihre Auflistung zu definieren - z. B. j�hrliche Heizkosten, j�hrliche Kreditraten/Steuern u.�. Diese Namen (Bezeichnungen) erscheinen im \"Eintrag hinzuf�gen/bearbeiten\", in dem Sie der Immobilie Werte zuordnen k�nnen, ebenso wie im Front-End.");

DEFINE("_EZREALTY_CONFIG_APFTITLE","Zus�tzliche Immobilien-Besonderheiten");
DEFINE("_EZREALTY_CONFIG_APFDESC","Die 10 zus�tzlichen Immobilien-Besonderheiten erscheinen als Ja/Nein-Auswahlboxen im \"add/edit-Immobilieninfo-Bereich\". Im Front-End werden diese Besonderheiten als Punktliste angezeigt. Sie haben die M�glichkeit, die Bezeichnung der Besonderheiten zu definieren, so dass sie Ihren �rtlichen Gegebenheiten entsprechen. Doch bitte beachten Sie, dass Sie die einmal vorgenommene Definition nicht mehr �ndern sollten, da dies die korrekte Anzeige der Immobilien-Information ver�ndern k�nnte.");
DEFINE("_EZREALTY_CONFIG_FEATURETITLE","Spezielle Besonderheiten Box");
DEFINE("_EZREALTY_CONFIG_FEATURETITLEDESC","Wie m�chten Sie die spezielle Besonderheit Ihrer Immobilien-Eintr�ge bezeichnen? (z. B. wirtschaftliche Highlights usw.). Dies erstellt den Titel dieser Box in der detaillierten Immobilien-Beschreibung.");
DEFINE("_EZREALTY_CONFIG_STATES","Verwende Bundesl�nder");
DEFINE("_EZREALTY_CONFIG_STATESDESC","Falls Sie Immobilien in einer Region verkaufen, die keine Bundesl�nder besitzt wie gr�ssere Staaten, tragen Sie hier \"Nein\" ein um diese Anzeige zu verstecken.");


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
DEFINE("_EZREALTY_APF5","Abschlie�bare Garage");
DEFINE("_EZREALTY_APF6","Einbauschr�nke");
DEFINE("_EZREALTY_APF7","Zentralheizung");
DEFINE("_EZREALTY_APF8","Klimaanlage");
DEFINE("_EZREALTY_APF9","N�chste Einkaufsm�glichkeiten");
DEFINE("_EZREALTY_APF10","N�chste Schulen");


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