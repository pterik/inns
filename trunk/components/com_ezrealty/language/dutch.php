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
    **   Dutch language
    **   By: R Mulder
    **   http://www.muldermedia.nl
    **  
    \*****************************************/


defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );


// admin.ezrealty.php file language tags

DEFINE("_EZREALTY_NOREMOVE","Kan niet verwijderd worden omdat er nog woningen in deze categorie aanwezig is.");
DEFINE("_EZREALTY_CLEAN","Verwijder verlopen aanbod.");

// configuration area settings

DEFINE("_EZREALTY_CONFIG_GENSET","Standaard Foto Paden instellingen");

DEFINE("_EZREALTY_CONFIG_IMAGESIZES","Thumbnail & Foto formaten");
DEFINE("_EZREALTY_CONFIG_WIDTHPROPIMG","Hoofd Foto Breedte");
DEFINE("_EZREALTY_CONFIG_WIDTHPROPIMGDESC","Width of main property and floorplan image when viewed on the property details page. It's expressed in pixels to assist fitting the image within your template. Images will be resized to this width");
DEFINE("_EZREALTY_CONFIG_WIDTHCATTHUMB","Categorie Thumbnail Breedte");
DEFINE("_EZREALTY_CONFIG_WIDTHCATTHUMBDESC","Breedte van de foto's bij gebruik voor een categorie.");
DEFINE("_EZREALTY_CONFIG_WIDTHTHUMB","Thumbnail max Breedte");
DEFINE("_EZREALTY_CONFIG_WIDTHTHUMBDESC","Breedte van de thumbnails zoals deze getoond worden op de pagina"); 

DEFINE("_EZREALTY_CONFIG_TNCREATOR","Thumbnail Generator");
DEFINE("_EZREALTY_CONFIG_GDLIMIT","GD ondersteund alleen jpg en png!");
DEFINE("_EZREALTY_CONFIG_GDFOUND","GD Gevonden");
DEFINE("_EZREALTY_CONFIG_GDCHOOSE","Kies foto generator voor het maken van thumbnails.");
DEFINE("_EZREALTY_CONFIG_THUMBQUAL","Thumbnail Kwaliteit");
DEFINE("_EZREALTY_CONFIG_THUMBQUALDESC","Kwaliteit van de gemaakte thumbnails.(lagere waarde is slechter)");
DEFINE("_EZREALTY_CONFIG_IMGDIR","Foto Directory");
DEFINE("_EZREALTY_CONFIG_IMGDIRDESC","De standaard foto directory heeft de naam 'ezrealty', en bevind zich in components/com_ezrealty/ezrealty pad. Thumbnails worden ook opgeslagen in deze directory, map th. Als u de directory aanpast, dan moet u ook de thumbnail directory handmatig hier weer aanmaken. U dient de map th NIET TE VERANDEREN.");
DEFINE("_EZREALTY_CONFIG_TNNONE","Geen");
DEFINE("_EZREALTY_CONFIG_TNGD1","GD Library");
DEFINE("_EZREALTY_CONFIG_TNGD2","GD2 Library");

DEFINE("_EZREALTY_CONFIG_YOURBIZSET","Uw Bedrijf Instellingen");
DEFINE("_EZREALTY_CONFIG_BIZNAME","Bedrijfsnaam");
DEFINE("_EZREALTY_CONFIG_BIZNAMEDESC","De naam van uw bedrijf wordt op meerdere plaatsen getoond, bijv. op de print en email pagina's.");
DEFINE("_EZREALTY_CONFIG_BIZAD","Adres Bedrijf");
DEFINE("_EZREALTY_CONFIG_BIZADDESC","Adres van uw bedrijf. Deze wordt op verschillende plaatsen getoond bijvoorbeeld in de print pagina.");
DEFINE("_EZREALTY_CONFIG_TELEPHONE","Telefoonnummer");
DEFINE("_EZREALTY_CONFIG_TELEPHONEDESC","Het telefoonnummer waarop uw bedrijf te bereiken is, is ook zichtbaar op de print pagina.");
DEFINE("_EZREALTY_CONFIG_EMAIL","Email adres");
DEFINE("_EZREALTY_CONFIG_EMAILDESC","Dit email adres wordt gebruikt bij een informatie verzoek.");
DEFINE("_EZREALTY_CONFIG_CURRENCYSIGN","Valuta Teken");
DEFINE("_EZREALTY_CONFIG_CURRENCYSIGNDESC","Valuta teken waarmee de prijzen worden afgebeeld.");
DEFINE("_EZREALTY_CONFIG_BIZINTRO","Introductie Tekst ");
DEFINE("_EZREALTY_CONFIG_BIZINTRODESC","Introductie tekst over<br />op de eerste pagina.");

DEFINE("_EZREALTY_CONFIG_LAYOUTSETTINGS","Beheer de lay-out van de pagina");

DEFINE("_EZREALTY_CONFIG_TPL","Lay-out");
DEFINE("_EZREALTY_CONFIG_TPLDESC","Selecteer de gewenste lay-out. Deze opmaak is zichtbaar op uw website en in op de print pagina.");
DEFINE("_EZREALTY_CONFIG_SELTPL","Kies Lay-out");

DEFINE("_EZREALTY_CONFIG_PROPPERPAGE","Woningen per Pagina");
DEFINE("_EZREALTY_CONFIG_PROPPERPAGEDESC","Aantal woningen die zichtbaar zijn op de introductie pagina");
DEFINE("_EZREALTY_CONFIG_FEATURETITLE","Speciale Kenmerken Box");
DEFINE("_EZREALTY_CONFIG_FEATURETITLEDESC","What would you like to call the special feature for your property listings? (eg. Community Highlights etc). This forms the box title on the full property description page.");
DEFINE("_EZREALTY_CONFIG_RECFRIEND","Beveel Woning aan");
DEFINE("_EZREALTY_CONFIG_RECFRIENDDESC","Wilt u de \"Stuur door via e-mail\" optie inschakelen?");
DEFINE("_EZREALTY_CONFIG_MAILINGVIEW","Link: Toevoegen aan Nieuwsbrief");
DEFINE("_EZREALTY_CONFIG_MAILINGDESC","Wilt u de \"Voeg toe aan Nieuwsbrief\" optie inschakelen? De bezoeker stuurt u een mailtje met z'n email adres zodat u deze kunt opnemen in uw nieuwsbrief.");
DEFINE("_EZREALTY_CONFIG_SHOWLINKS","Laat Service Links zien");
DEFINE("_EZREALTY_CONFIG_SHOWLINKSDESC","Wilt u dat de Service Links zichtbaar zijn? - oa. Druk pagina af toevoegen aan favorieten ed");
DEFINE("_EZREALTY_CONFIG_SC","Provincie/Land");
DEFINE("_EZREALTY_CONFIG_SCDESC","Wilt u dat de optie Provincie en Land zichtbaar zijn in de zoekfunctie?");

DEFINE("_EZREALTY_CONFIG_RSS","RSS Feed");
DEFINE("_EZREALTY_CONFIG_RSSDESC","Wilt u de RSS feed link laten zien?");
DEFINE("_EZREALTY_CONFIG_RSSNN","Nieuw Woningen RSS Feed naam");
DEFINE("_EZREALTY_CONFIG_RSSNNDESC","Wat moet de naam zijn van deze RSS feed?");
DEFINE("_EZREALTY_CONFIG_RSSOH","Openhuis RSS Feed Naam");
DEFINE("_EZREALTY_CONFIG_RSSOHDESC","Wat moet de naam zijn van deze openhuis RSS feed?");

DEFINE("_EZREALTY_CONFIG_LEAD","Woning Gezocht");
DEFINE("_EZREALTY_CONFIG_LEADDESC","Moeten bezoekers de mogelijkheid hebben een Woning Gezocht aan te vragen?");

DEFINE("_EZREALTY_CONFIG_MEMSALES","Beheer woning aanbod voor Geregistreerde Leden");
DEFINE("_EZREALTY_CONFIG_MEMLISTINGS","Leden Overzicht");
DEFINE("_EZREALTY_CONFIG_MEMLISTINGSDESC","Wilt u dat geregistreerde leden woningen te koop kunnen aanbieden?");
DEFINE("_EZREALTY_CONFIG_NOTIFICATION","Notificatie");
DEFINE("_EZREALTY_CONFIG_NOTIFICATIONDESC","Wil tu op de hoogte blijven van aangepaste of nieuw woning aanbod van uw leden?");
DEFINE("_EZREALTY_CONFIG_MEMAPPROVAL","Aanvraag Goedkeuren");
DEFINE("_EZREALTY_CONFIG_MEMAPPROVALDESC","Moeten nieuw aanbod eerst door u goedgekeurd worden alvorens deze wordt toegevoegd aan het aanbod?");
DEFINE("_EZREALTY_CONFIG_NUMLISTINGS","Aantal aangeboden");
DEFINE("_EZREALTY_CONFIG_NUMLISTINGSDESC","Hoeveel woningen mogen leden aanbieden?");

DEFINE("_EZREALTY_CONFIG_MEMBERSINTRO","Leden Introductie Tekst");
DEFINE("_EZREALTY_CONFIG_MEMBERSINTRODESC","Hier kunt u informatie kwijt voor het leden gedeelte - bijv. 'Algemene gebruikersvoorwaarden' ed.");
DEFINE("_EZREALTY_CONFIG_TERMS","Algemene Gebruikersvoorwaarden");
DEFINE("_EZREALTY_CONFIG_TERMSDESC","Stel hier uw Algemene gebruikersvoorwaarden op.");

DEFINE("_EZREALTY_CONFIG_IMG1","Foto´s");
DEFINE("_EZREALTY_CONFIG_IMG2","foto-instellingen");
DEFINE("_EZREALTY_CONFIG_BIZ1","Bedrijf");
DEFINE("_EZREALTY_CONFIG_BIZ2","bedrijfs-settings");
DEFINE("_EZREALTY_CONFIG_LAY1","Layout");
DEFINE("_EZREALTY_CONFIG_LAY2","pagina-layout");
DEFINE("_EZREALTY_CONFIG_MEM1","Leden");
DEFINE("_EZREALTY_CONFIG_MEM2","leden-verkoop");
DEFINE("_EZREALTY_CONFIG_PAID1","Betaald Overzicht");
DEFINE("_EZREALTY_CONFIG_CUST1","Custom");

DEFINE("_EZREALTY_CONFIG_CPITITLE","Klanten Informatie");
DEFINE("_EZREALTY_CONFIG_CPI1","Custom 1");
DEFINE("_EZREALTY_CONFIG_CPI2","Custom 2");
DEFINE("_EZREALTY_CONFIG_CPI3","Custom 3");
DEFINE("_EZREALTY_CONFIG_CPIDESC","Deze 3 custom velden kunt u gebruiken om uw klant bijvoorbeeld te informeren over bijv -  Gemeenschappelijke verwarmingskosten, gemeenschappelijke heffingen ed. Deze velden worden getoon bij het invoeren van een woning en zijn ook zichtbaar op de site zefl.");

DEFINE("_EZREALTY_CONFIG_APFTITLE","Aanvullende Woning Kenmerken");
DEFINE("_EZREALTY_CONFIG_APFDESC","Deze 10 extra kenmerken zijn zichtbaar bij het invoeren als Ja/Nee slectie vakjes. U kunt deze velden zelf definieren, als u ze leeg laat worden ze niet getoond. Deze kenmerken worden als opsomming aan de bezoeker getoond. Denk er aan dat als u deze kenmerken later veranderd dat deze niet meer zichtbaar zijn bij al eerder ingevoerde woningen!");
DEFINE("_EZREALTY_CONFIG_APF1","Kenmerk 1");
DEFINE("_EZREALTY_CONFIG_APF2","Kenmerk 2");
DEFINE("_EZREALTY_CONFIG_APF3","Kenmerk 3");
DEFINE("_EZREALTY_CONFIG_APF4","Kenmerk 4");
DEFINE("_EZREALTY_CONFIG_APF5","Kenmerk 5");
DEFINE("_EZREALTY_CONFIG_APF6","Kenmerk 6");
DEFINE("_EZREALTY_CONFIG_APF7","Kenmerk 7");
DEFINE("_EZREALTY_CONFIG_APF8","Kenmerk 8");
DEFINE("_EZREALTY_CONFIG_APF9","Kenmerk 9");
DEFINE("_EZREALTY_CONFIG_APF10","Kenmerk 10");

DEFINE("_EZREALTY_CONFIG_PP","Uw PayPal Instellingen voor betaalde gebruikers");

DEFINE("_EZREALTY_CONFIG_PAIDLISTINGS","Commerciele Lijst");
DEFINE("_EZREALTY_CONFIG_PAIDLISTINGSDESC","Do you want to offer paid property listings on your site? Paid listings allow members to include additional images and information in their listing.");
DEFINE("_EZREALTY_CONFIG_PPEMAIL","PayPal email address");
DEFINE("_EZREALTY_CONFIG_PPEMAILDESC","This must be your PRIMARY PayPal email address.<br /><br />Visit
<a target='_blank' href='http://paypaltech.com/Stephen/affiliate/hemail.htm'>PayPal Tech Resources</a>
for a simple method of encoding your PayPal email addy to protect it from spam bots, then copy/paste the code into the 
PayPal email address space above. DO NOT use this encoded email address for the checkmail address below - this must be 
presented in normal format.");
DEFINE("_EZREALTY_CONFIG_CHECKMAIL","CheckMail");
DEFINE("_EZREALTY_CONFIG_CHECKMAILDESC","Nogmaals uw PRIMARY PayPal email adres. Deze wordt gebruikt voor om fraude uit te sluiten voor de transactie. Dit MAG NIET niet het versleutelde formaat zijn!!");
DEFINE("_EZREALTY_CONFIG_PPCURRENCY","Valuta Teken");
DEFINE("_EZREALTY_CONFIG_PPCURRENCYDESC","Hier het drie letterige PayPal valuta teken voor uw PRIMARY PayPal muntsoort - bedenkt deze niet zelf!.");
DEFINE("_EZREALTY_CONFIG_PPBUTTON","Knop Afbeelding");
DEFINE("_EZREALTY_CONFIG_PPBUTTONDESC","Bestandsnaam van de knop die gebruikt wordt voor het updaten.");

DEFINE("_EZREALTY_CONFIG_PPPREMIUM","Standard Upgrade Naam");
DEFINE("_EZREALTY_CONFIG_PPPREMIUMDESC","What would you like to call your listing upgrades - eg. Premium/Enhanced Listing etc. This will appear as the Item Name in button code and PayPal transaction reports.");
DEFINE("_EZREALTY_CONFIG_PPCOST","Standaard Upgrade Prijs");
DEFINE("_EZREALTY_CONFIG_PPCOSTDESC","De prijs om te upgrading van een gratis naar een betaald overzicht.");
DEFINE("_EZREALTY_CONFIG_FPNAME","Featured Listing Upgrade Name");
DEFINE("_EZREALTY_CONFIG_FPNAMEDESC","What would you like to call your featured listing upgrades - eg. Featured Listing. This will appear as the Item Name in button code and PayPal transaction reports.");
DEFINE("_EZREALTY_CONFIG_FPCOST","Featured Listing Upgrade Cost");
DEFINE("_EZREALTY_CONFIG_FPCOSTDESC","The cost of upgrading a paid property listing to a featured listing. Remember - members cannot upgrade directly from a free listing - they must first upgrade to a standard paid listing.");

DEFINE("_EZREALTY_CONFIG_PPPOSTMODE","Post Mode");
DEFINE("_EZREALTY_CONFIG_PPPOSTMODEDESC","Set to 'Live Sales' to sell real updates via the PayPal system, or test your installation by doing 'Test Sales' via the PayPal Developers Network Sandbox.");
DEFINE("_EZREALTY_CONFIG_LS","Live Sales");
DEFINE("_EZREALTY_CONFIG_TS","Test Sales");

DEFINE("_EZREALTY_CONFIG_SUCCESS","Succes Pagina");
DEFINE("_EZREALTY_CONFIG_SUCCESSDESC","Vul de tekst in als de PayPal transactie goed is verlopen.");
DEFINE("_EZREALTY_CONFIG_CANCEL","Cancel Pagina");
DEFINE("_EZREALTY_CONFIG_CANCELDESC","Vul de tekst in als de PayPal transactie is afgebroken of niet goed is verlopen.");

DEFINE("_EZREALTY_CONFIG_YES","Ja");
DEFINE("_EZREALTY_CONFIG_NO","Nee");

DEFINE("_EZREALTY_CONFIG_CONFIGSAVED","Wijziging opgslagen");

// Miscellaneous administration area language tags - error notices and dropdown list boxes

DEFINE("_EZREALTY_ADMIN_BACK","Terug naar het dashboard");
DEFINE("_EZREALTY_ADMIN_SOURCEERROR","ERROR: Bron bestand niet gevonden!");

// admin.ezrealty.html.php language tags

// Manage property listings page

DEFINE("_EZREALTY_LISTINGS_TITLE","Woningen Overzicht Lijst");
DEFINE("_EZREALTY_LISTINGS_DISPLAYNUM","Display #");
DEFINE("_EZREALTY_LISTINGS_SEARCHPROP","Zoeken");
DEFINE("_EZREALTY_LISTINGS_FILTER","Filter:-");
DEFINE("_EZREALTY_LISTINGS_SORTLOCALL","-Alle Locaties-");
DEFINE("_EZREALTY_LISTINGS_SORTTYPEALL","-Alle Woning Soorten-");
DEFINE("_EZREALTY_LISTINGS_SORTPRICEALL","-Alle Prijsklasses-");
DEFINE("_EZREALTY_LISTINGS_PROPID","Agent ID#");
DEFINE("_EZREALTY_LISTINGS_PROPNAME","Adresgegevens Woning");
DEFINE("_EZREALTY_LISTINGS_PROPCAT","Woning Soort");
DEFINE("_EZREALTY_LISTINGS_PROPPRICE","Prijs");
DEFINE("_EZREALTY_LISTINGS_PROPHITS","Hits");
DEFINE("_EZREALTY_LISTINGS_PUBSTATUS","Gepubliceerd?");
DEFINE("_EZREALTY_LISTINGS_MARKETSTATUS","Verkocht?");
DEFINE("_EZREALTY_LISTINGS_APPROVEDSTATUS","Goedgekeurd?");
DEFINE("_EZREALTY_LISTINGS_LTYPE","Type");
DEFINE("_EZREALTY_LISTINGS_AGENT","Agent");
DEFINE("_EZREALTY_LISTINGS_LISTINGDATE","Datum");
DEFINE("_EZREALTY_LISTINGS_UPDATE","Laatst Aangepast");
DEFINE("_EZREALTY_LISTINGS_EDIT","Woning Aanpassen");
DEFINE("_EZREALTY_LISTINGS_APPROVED","Goedgekeurd");
DEFINE("_EZREALTY_LISTINGS_SELLER","Verkoper");

// Add/edit property details page

DEFINE("_EZREALTY_LISTINGS_SELLER_EXPL","<strong><font color='#FF0000'>Lees mij!</font></strong><br /><br />Verkopers details worden getoond op de homepage zodat kopers
direct informatie kunnen aanvragen of een afspraak kunnen maken. Als u de mogelijkheid tot het zelf aanbieden van woningen heeft ingeschakeld, moet de verkoper deze informatie invullen.  If you want prospective buyers to contact 
In tengenstelling tot -externe kopers- hoeft u deze gegevens niet in voeren, u laat dan deze velden leeg de standaard contact link verschijnt op de webstie indien ingesteld .");

DEFINE("_EZREALTY_DETAILS_REQ","*Verplicht");
DEFINE("_EZREALTY_DETAILS_OPT","*Optie");
DEFINE("_EZREALTY_DETAILS_TITLE","Woning Aanbod");
DEFINE("_EZREALTY_DETAILS_MARKET","Market Status");
DEFINE("_EZREALTY_DETAILS_SOLDDESC"," - Markt Status van de woning - de standaard waarde is  'niet verkocht'.");
DEFINE("_EZREALTY_DETAILS_SELMARKET","Selecteer Markt Status");
DEFINE("_EZREALTY_DETAILS_SELLOC","Selecteer Woonplaats");
DEFINE("_EZREALTY_DETAILS_SELSTATE","Selecteer Provincie");
DEFINE("_EZREALTY_DETAILS_SELCOUNTRY","Selecteer Land");
DEFINE("_EZREALTY_DETAILS_SELCAT","Kies Soort Woning");
DEFINE("_EZREALTY_DETAILS_SELPRICE","Selecteer Prijsklasse");
DEFINE("_EZREALTY_DETAILS_SELROOM","Woning heeft geen Slaapkamers");
DEFINE("_EZREALTY_DETAILS_LISTDATE","Invoer Datum");
DEFINE("_EZREALTY_DETAILS_LISTDATEDESC","Datum dat woning is toegevoegd aan de verkoop lijst.");
DEFINE("_EZREALTY_DETAILS_AGENTID","Uniek Verkoop ID nummer");
DEFINE("_EZREALTY_DETAILS_AGENTIDDESC","Handig om te bekijken of een externe verkoper zaken heeft gedaan.");
DEFINE("_EZREALTY_DETAILS_PROPADDRESS1","Adres (straat en huisnummer)");
DEFINE("_EZREALTY_DETAILS_PROPCITY","Woonplaats");
DEFINE("_EZREALTY_DETAILS_AREA","Provincie");
DEFINE("_EZREALTY_DETAILS_COUNTRY","Land");
DEFINE("_EZREALTY_DETAILS_PROPPOSTCODE","Postcode");
DEFINE("_EZREALTY_DETAILS_PROPTYPE","Woning type");
DEFINE("_EZREALTY_DETAILS_ADLINE","Korte Beknopte omschrijving in 1 zin");
DEFINE("_EZREALTY_DETAILS_PROPDESC","Volledige beschrijving (deze is zichtbaar bij de woning details)");
DEFINE("_EZREALTY_DETAILS_SHORTDESC","Korte omschrijving: (deze is zichtbaar in de overzichts lijst<br />(max 255 tekens)");
DEFINE("_EZREALTY_DETAILS_PROPPRICE","Prijs");
DEFINE("_EZREALTY_DETAILS_LANDTYPE","Perceeloppervlakte");
DEFINE("_EZREALTY_DETAILS_LANDTYPEDESC","Opgeven als: 450M");
DEFINE("_EZREALTY_DETAILS_BEDROOMS","Slaapkamers");
DEFINE("_EZREALTY_DETAILS_BEDROOMSDESC","aantal slaapkamers van de woning");
DEFINE("_EZREALTY_DETAILS_BATHROOMS","Badkamers");
DEFINE("_EZREALTY_DETAILS_BATHROOMSDESC","aantal badkamers van de woning");
DEFINE("_EZREALTY_DETAILS_PARKING","Parkeerplaats");
DEFINE("_EZREALTY_DETAILS_PARKINGDESC","aantal parkeerplaatsen");
DEFINE("_EZREALTY_DETAILS_MAPREF","Property Map Reference Link");
DEFINE("_EZREALTY_DETAILS_MAPREFDESC","The URL to this property's map reference if used.<br />A free mapping service can be found at multimap.com");
DEFINE("_EZREALTY_DETAILS_VTOUR","Virtual Tour Page Link");
DEFINE("_EZREALTY_DETAILS_VTOURDESC","The URL to this property's virtual tour page if used.<br />This link will open in a new window");
DEFINE("_EZREALTY_DETAILS_SAVED","Kenmerken Opgeslagen");

DEFINE("_EZREALTY_VLDET_IMAGE1","FOTO1");
DEFINE("_EZREALTY_VLDET_IMAGE2","FOTO2");
DEFINE("_EZREALTY_VLDET_IMAGE3","FOTO3");
DEFINE("_EZREALTY_VLDET_IMAGE4","FOTO4");
DEFINE("_EZREALTY_VLDET_IMAGE5","FOTO5");
DEFINE("_EZREALTY_VLDET_IMAGE6","FOTO6");
DEFINE("_EZREALTY_VLDET_IMAGE7","FOTO7");
DEFINE("_EZREALTY_VLDET_IMAGE8","FOTO8");
DEFINE("_EZREALTY_VLDET_IMAGE9","FOTO9");
DEFINE("_EZREALTY_VLDET_IMAGE10","FOTO10");
DEFINE("_EZREALTY_VLDET_IMAGE11","FOTO11");
DEFINE("_EZREALTY_VLDET_IMAGE12","FOTO12");

DEFINE("_EZREALTY_VLDET_CURRENTIMG","Huidige foto");
DEFINE("_EZREALTY_VLDET_CHOOSENEW","Selecteer nieuwe foto");
DEFINE("_EZREALTY_VLDET_UPLOADNEW","Upload nieuwe foto");
DEFINE("_EZREALTY_VLDET_DELETEIMG","Verwijder foto");
DEFINE("_EZREALTY_VLDET_DELETE","Verwijder");
DEFINE("_EZREALTY_VLDET_OPENFULLSIZE","Open grote foto");
DEFINE("_EZREALTY_VLDET_TNPREV","Thumbnail Voorbeeld");

DEFINE("_EZREALTY_DETAILS_CTOWN","Dichtbijzijnde Plaats");
DEFINE("_EZREALTY_DETAILS_CTPORT","Openbaar Vervoer");
DEFINE("_EZREALTY_DETAILS_ADDFEATURES","Aanvullende Opties");
DEFINE("_EZREALTY_DETAILS_AGE","Bouwjaar");
DEFINE("_EZREALTY_DETAILS_OHOUSE","Is er een Openhuis Dag?");
DEFINE("_EZREALTY_DETAILS_OHOUSEDET","Openhuis info:<br />Indien er openhuis is kunt u hier de details zoals datum en tijd enz. kwijt.");

DEFINE("_EZREALTY_DETAILS_APPR","Ingave goedgekeurd?");
DEFINE("_EZREALTY_DETAILS_PUBL","Laat ingave zien?");
DEFINE("_EZREALTY_DETAILS_LISTSTATUS","Listing Type");
DEFINE("_EZREALTY_DETAILS_FREESTATUS","Free Listing");
DEFINE("_EZREALTY_DETAILS_LISTPREMIUM","Zet als Woning in Beeld");

DEFINE("_EZREALTY_DETAILS_ERROR1","Vul een Woning adres in");
DEFINE("_EZREALTY_DETAILS_ERROR2","Vul een Woonplaats voor uw Woning in");
DEFINE("_EZREALTY_DETAILS_ERROR3","Kies een Provincie");
DEFINE("_EZREALTY_DETAILS_ERROR4","Kies een Land in");
DEFINE("_EZREALTY_DETAILS_ERROR5","Vul een Postcode in voor uw Woning");
DEFINE("_EZREALTY_DETAILS_ERROR6","Selecteer het Woningtype");
DEFINE("_EZREALTY_DETAILS_ERROR7","Vul het aantal slaapkamers in voor uw Woning");
DEFINE("_EZREALTY_DETAILS_ERROR8","Vul een prijs in voor uw Woning");
DEFINE("_EZREALTY_DETAILS_ERROR9","Kies een prijsklasse");
DEFINE("_EZREALTY_DETAILS_ERROR10","Schrijf een Pakkende introductie regel voor uw woning");
DEFINE("_EZREALTY_DETAILS_ERROR11","You must enter a short description as the default templates use this value");
DEFINE("_EZREALTY_DETAILS_ERROR12","U dient minimaal gebruik te maken van 1 foto voor uw woning");

DEFINE("_EZREALTY_DETAILS_TAB1A","Adres");
DEFINE("_EZREALTY_DETAILS_TAB1B","woning-adres");
DEFINE("_EZREALTY_DETAILS_TAB2A","Features");
DEFINE("_EZREALTY_DETAILS_TAB2B","Woning-Kenmerk");
DEFINE("_EZREALTY_DETAILS_TAB3A","Verkoop Informatie");
DEFINE("_EZREALTY_DETAILS_TAB3B","Verkoop-informatie");
DEFINE("_EZREALTY_DETAILS_TAB4A","Foto's");
DEFINE("_EZREALTY_DETAILS_TAB4B","foto's-woning");
DEFINE("_EZREALTY_DETAILS_TAB5A","Verkoper");
DEFINE("_EZREALTY_DETAILS_TAB5B","Verkoper-details");
DEFINE("_EZREALTY_DETAILS_TAB6A","Admin");
DEFINE("_EZREALTY_DETAILS_TAB6B","admin-processing");

DEFINE("_EZREALTY_DETAILS_MARKET2","Under Offer");
DEFINE("_EZREALTY_DETAILS_MARKET3","Subject to Contract");
DEFINE("_EZREALTY_DETAILS_MARKET4","Under Contract");
DEFINE("_EZREALTY_DETAILS_MARKET5","Verkocht");

DEFINE("_EZREALTY_DETAILS_SOURCE1","Zoekmachine");
DEFINE("_EZREALTY_DETAILS_SOURCE2","Website");
DEFINE("_EZREALTY_DETAILS_SOURCE3","Toeval");
DEFINE("_EZREALTY_DETAILS_SOURCE4","Huizen markt");
DEFINE("_EZREALTY_DETAILS_SOURCE5","Anders - kies uit lijst aub.");

// Manage property price range page

DEFINE("_EZREALTY_PRICES_DISPLAYNUM","Display #");
DEFINE("_EZREALTY_PRICES_SEARCHCOM","Zoeken");
DEFINE("_EZREALTY_PRICES_PUBSTATUS","Gepubliceerd");
DEFINE("_EZREALTY_PRICES_REORDER","Rangschikken");
DEFINE("_EZREALTY_MODPRICES_ADD","Toevoegen");
DEFINE("_EZREALTY_MODPRICES_EDIT","Aanpassen");
DEFINE("_EZREALTY_MODPRICES_ORDER","Volgorde");

// Manage property city/town/suburbs

DEFINE("_EZREALTY_LOCALITIES_TITLE","Plaatsnaam");
DEFINE("_EZREALTY_LOCALITIES_DISPLAYNUM","Display #");
DEFINE("_EZREALTY_LOCALITIES_LOC","Plaatsnaam");
DEFINE("_EZREALTY_LOCALITIES_PUBSTATUS","Gepubliceerd?");
DEFINE("_EZREALTY_LOCALITIES_REORDER","Rangschikken");
DEFINE("_EZREALTY_MODLOC_TITLE","plaatsnaam zoek/selectie lijst");
DEFINE("_EZREALTY_MODLOC_ADD","Toevoegen");
DEFINE("_EZREALTY_MODLOC_EDIT","Aanpassen");
DEFINE("_EZREALTY_MODLOC_LOC","Plaatsnaam");
DEFINE("_EZREALTY_MODLOC_ORDER","Volgorde");
DEFINE("_EZREALTY_MODLOC_SAVED","Plaatsnaam opgeslagen");
DEFINE("_EZREALTY_MODLOC_ERROR1","U dient een Plaatsnaam in te voeren");
DEFINE("_EZREALTY_LOCALITIES_EDITTAG","Aanpassen Plaatsnaam");

// Manage property states/regional areas

DEFINE("_EZREALTY_STATE_TITLE","Beheer Provincies Zoek/Selectie lijst");
DEFINE("_EZREALTY_STATE_DISPLAYNUM","Display #");
DEFINE("_EZREALTY_STATE_LOC","Naam Provincie");
DEFINE("_EZREALTY_STATE_PUBSTATUS","Gepubliceerd");
DEFINE("_EZREALTY_STATE_REORDER","Volgorde");
DEFINE("_EZREALTY_STATE_TITLE2","Provincies Zoek/Selectie Lijst");
DEFINE("_EZREALTY_STATE_ADD","Toevoegen");
DEFINE("_EZREALTY_STATE_EDIT","Aanpassen");
DEFINE("_EZREALTY_STATE_ORDER","Volgorde");
DEFINE("_EZREALTY_STATE_SAVED","Provincie Opgeslagen");
DEFINE("_EZREALTY_STATE_ERROR1","U dient een naam voor de Provincie in te voeren");
DEFINE("_EZREALTY_STATE_EDITTAG","Bewerk Provincie");

// Manage property country areas

DEFINE("_EZREALTY_COUNTRY_TITLE","Landen zoek/selectie lijst");
DEFINE("_EZREALTY_COUNTRY_DISPLAYNUM","Aantal #");
DEFINE("_EZREALTY_COUNTRY_LOC","Land Naam");
DEFINE("_EZREALTY_COUNTRY_PUBSTATUS","Gepubliceerd");
DEFINE("_EZREALTY_COUNTRY_REORDER","Rangschikken");
DEFINE("_EZREALTY_COUNTRY_TITLE2","Land zoek/selectie lijst");
DEFINE("_EZREALTY_COUNTRY_ADD","Toevoegen");
DEFINE("_EZREALTY_COUNTRY_EDIT","Aanpassen");
DEFINE("_EZREALTY_COUNTRY_ORDER","Volgorde");
DEFINE("_EZREALTY_COUNTRY_SAVED","Land opgeslagen");
DEFINE("_EZREALTY_COUNTRY_ERROR1","U dient een Landnaam in te voeren");
DEFINE("_EZREALTY_COUNTRY_EDITTAG","Aanpassen Land");

// Manage bedroom numbers

DEFINE("_EZREALTY_ROOMS_TITLE","Beheer aantal slaapkamers zoek/selectie lijst");
DEFINE("_EZREALTY_ROOMS_DISPLAYNUM","Display #");
DEFINE("_EZREALTY_ROOMS_LOC","Aantal Slaapkamers");
DEFINE("_EZREALTY_ROOMS_PUBSTATUS","Publiseren");
DEFINE("_EZREALTY_ROOMS_REORDER","Rangschikken");
DEFINE("_EZREALTY_ROOMS_TITLE2","Bedroom number search/select item");
DEFINE("_EZREALTY_ROOMS_ADD","Toevoegen");
DEFINE("_EZREALTY_ROOMS_EDIT","Aanpassen");
DEFINE("_EZREALTY_ROOMS_ORDER","Volgorde");
DEFINE("_EZREALTY_ROOMS_SAVED","Slaapkamer aantal opgeslagen");
DEFINE("_EZREALTY_ROOMS_ERROR1","U dient het aantal slaapkamers in te voeren");
DEFINE("_EZREALTY_ROOMS_EDITTAG","Aanpassen Aantal Slaapkamers");

// Manage leads list

DEFINE("_EZREALTY_LEADS_TITLE","Manage Leads List");
DEFINE("_EZREALTY_LEADS_DISPLAYNUM","Display #");
DEFINE("_EZREALTY_LEADS_AR","Add/Review Datum");
DEFINE("_EZREALTY_LEADS_LCONTACT","Gegevens");
DEFINE("_EZREALTY_LEADS_LNAME","Naam");
DEFINE("_EZREALTY_LEADS_LEMAIL","Email");
DEFINE("_EZREALTY_LEADS_LLOC","Plaats voorkeur");
DEFINE("_EZREALTY_LEADS_EDITTAG","Aanpassen/View Lead Details");
DEFINE("_EZREALTY_LEADS_ADD","Toevoegen");
DEFINE("_EZREALTY_LEADS_EDIT","Aanpassen");
DEFINE("_EZREALTY_LEADS_TITLE2","Sales Lead Details");
DEFINE("_EZREALTY_LEADS_FMATCH","Zoek gelijkwaardige woning");

DEFINE("_EZREALTY_LEADS_HPHONE","Telefoon nummer");
DEFINE("_EZREALTY_LEADS_WPHONE","telefoon werk");
DEFINE("_EZREALTY_LEADS_MOBILE","Mobiel nummer");
DEFINE("_EZREALTY_LEADS_FAX","Fax");
DEFINE("_EZREALTY_LEADS_SOURCE","Hoe vond u ons?");
DEFINE("_EZREALTY_LEADS_COMMENTS","Commentaar");
DEFINE("_EZREALTY_LEADS_DETAILS","Kenmerken");
DEFINE("_EZREALTY_LEADS_BUDGET","Budget");

DEFINE("_EZREALTY_LEADS_SAVED","Sales Lead Details Saved");

DEFINE("_EZREALTY_LEADS_ERROR1","U dient uw naam in te vullen");

DEFINE("_EZREALTY_LEADS_ERROR2","Vul een email adres in aub");
DEFINE("_EZREALTY_LEADS_ERROR3","Kies de Soort woning");
DEFINE("_EZREALTY_LEADS_ERROR4","Vul een prijsklasse in aub");
DEFINE("_EZREALTY_LEADS_ERROR5","Vul een plaatsnaam in aub");
DEFINE("_EZREALTY_LEADS_ERROR6","Vul het aantal slaapkamers in aub");

// Manage property-type categories

DEFINE("_EZREALTY_CATEGORY_PAGETITLE","Beheer Soort Woning");
DEFINE("_EZREALTY_CATEGORY_DISPLAYNUM","Display #");
DEFINE("_EZREALTY_CATEGORY_SEARCHCAT","Zoeken");
DEFINE("_EZREALTY_CATEGORY_CATNAME","Soort Woning");
DEFINE("_EZREALTY_CATEGORY_PUBSTATUS","Gepubliceerd");
DEFINE("_EZREALTY_CATEGORY_ACCLEVEL","Toegang");
DEFINE("_EZREALTY_CATEGORY_REORDER","Volgorde");
DEFINE("_EZREALTY_CATEGORY_MAIN","Soort Woning");
DEFINE("_EZREALTY_CATEGORY_ADD","Toevoegen");
DEFINE("_EZREALTY_CATEGORY_EDIT","Bewerken");
DEFINE("_EZREALTY_CATEGORY_DEFTITLE","Titel");
DEFINE("_EZREALTY_CATEGORY_DEFCONTENT","Beschrijving");
DEFINE("_EZREALTY_CATEGORY_DEFACCESS","Toegang");
DEFINE("_EZREALTY_CATEGORY_DEFORDER","Volgorde");
DEFINE("_EZREALTY_CATEGORY_IMAGE","Soort Woning Foto");
DEFINE("_EZREALTY_CATEGORY_IMAGESEL","Soort Woning Foto Selector");
DEFINE("_EZREALTY_CATEGORY_SAVED","Soort Woning Opgeslagen");
DEFINE("_EZREALTY_CATEGORY_ERROR1","Vul een Titel in voor de Soort Woning");
DEFINE("_EZREALTY_CATEGORY_EDITTAG","Aanpassen Soort Woning");

// Manage property-type categories

DEFINE("_EZREALTY_MARKET_PAGETITLE","Manage Market Status Notices");
DEFINE("_EZREALTY_MARKET_DISPLAYNUM","Display #");
DEFINE("_EZREALTY_MARKET_STATUS","Markt Status");
DEFINE("_EZREALTY_MARKET_PUBSTATUS","Published");
DEFINE("_EZREALTY_MARKET_REORDER","Rangschikken");
DEFINE("_EZREALTY_MARKET_MAIN","Market Status Notice");
DEFINE("_EZREALTY_MARKET_ADD","Toevoegen");
DEFINE("_EZREALTY_MARKET_EDIT","Aanpassen");
DEFINE("_EZREALTY_MARKET_DEFNAME","Naam");
DEFINE("_EZREALTY_MARKET_DEFORDER","Volgorde");
DEFINE("_EZREALTY_MARKET_SAVED","Market Status Notice Details Saved");
DEFINE("_EZREALTY_MARKET_ERROR1","Market Status Notice must have a name");

// General error messages

DEFINE("_EZREALTY_GENERAL_ERROR1","Kies een item om te ");
DEFINE("_EZREALTY_CONFIG_ERROR","Configuration bestand is niet schrijfbaar! Pas de permissie aan (CMOD) van dit bestand en probeer het nogmaals.");

// Miscellaneous language tags for hyperlinks and image tags

DEFINE("_EZREALTY_GENERAL_PUBLISHED","Gepubliceerd");
DEFINE("_EZREALTY_GENERAL_UNPUBLISHED","Niet Gepubliceerd");
DEFINE("_EZREALTY_GENERAL_APPROVED","Goedgekeurd");
DEFINE("_EZREALTY_GENERAL_UNAPPROVED","Niet Goedgekeurd");
DEFINE("_EZREALTY_GENERAL_CHECKOUT","Checked Out");
DEFINE("_EZREALTY_GENERAL_RETURN","Terug naar woning overzicht");
DEFINE("_EZREALTY_GENERAL_UP","Omhoog");
DEFINE("_EZREALTY_GENERAL_DOWN","Naar beneden");
DEFINE("_EZREALTY_GENERAL_EDITPROP","Woning Aanpassen");
DEFINE("_EZREALTY_GENERAL_SOLD","Verkocht");
DEFINE("_EZREALTY_GENERAL_CONTRACT","Optie");

DEFINE("_EZREALTY_GENERIC_ADD","Toevoegen");
DEFINE("_EZREALTY_GENERIC_EDIT","Aanpassen");

//////////////////// FRONT END FILE LANGUAGE TAGS ///////////////////////

// includes.ezrealty.php file

DEFINE("_EZREALTY_HOME","Home");

// ezrealty.php file

DEFINE("_EZREALTY_BACK","Terug");
DEFINE("_EZREALTY_INCLUDES_HOME","Home");
DEFINE("_EZREALTY_INCLUDES_SEARCH","Zoeken");
DEFINE("_EZREALTY_INCLUDES_NEW","Nieuw");
DEFINE("_EZREALTY_CATEGORIES","Soort Woning");
DEFINE("_EZREALTY_PROPERTIES","Woningen");
DEFINE("_EZREALTY_PROPERTY","Woning");
DEFINE("_EZREALTY_INCLUDES_RSSOH","Openhuis Lijst");
DEFINE("_EZREALTY_INCLUDES_POSTMAIL","Bedankt  - Uw bericht is verstuurd u kunt nu dit venster sluiten.");

// category display

DEFINE("_EZREALTY_PAGES","Paginas");
DEFINE("_EZREALTY_PREV","Vorige");
DEFINE("_EZREALTY_NEXT","Volgende");
DEFINE("_EZREALTY_READMORE","Lees meer >>");
DEFINE("_EZREALTY_VIEWPROP","Bekijk aanbod");

// send to friend and arrange viewing forms

DEFINE("_EZREALTY_INVITE_VIEW_PROP","heeft u uitgenodigd om een woning bezichtiging. Klik op onderstaande link op de woning te bekijken.");
DEFINE("_EZREALTY_RECCOMEND_PROP_FROM_FREND"," Een friend heeft een interssante woning gezien");
DEFINE("_EZREALTY_FROM","From");
DEFINE("_EZREALTY_REPLYTO","Reply-To");
DEFINE("_EZREALTY_MAIL_SENT","Bedankt! Uw uitnodiging is verzonden...");
DEFINE("_EZREALTY_MAIL_VIEWINGSENT","Bedankt! Uw verzoek voor een woning bezichtiging is verzonden...");
DEFINE("_EZREALTY_INSPECTION"," Woning Bezichtiging Verzoek");
DEFINE("_EZREALTY_TELEPHONE","Telefoon nummer:-");
DEFINE("_EZREALTY_DATETIME","Voorkeur datum en tijd:-");
DEFINE("_EZREALTY_REQUEST_MAILINGLIST","stelt een vraag of heeft een operking over een woning met de volgende link");//wilt u lid worden van de Nieuwsbrief? Please use the link below to view the property they were looking at, as this may help identify their interests.
DEFINE("_EZREALTY_PROPERTY_INTERESTS","De bezoeker stelt de volgende vraag of heeft een opmerking:-<br /><br />");//Deze bezoeker geinteresseerd in de volgende Soorten Woningen:-
DEFINE("_EZREALTY_MAILING_TITLE","Er is een vraag of opmerking verstuurd ");//Voeg toe aan Nieuwsbrief
DEFINE("_EZREALTY_MAILINGLIST_SENT","Bedankt! Uw aanmelding voor onze Nieuwsbrief is verzonden...");
DEFINE("_EZREALTY_AGENTIDREF","Makelaars ID referentie nummer:-");

// viewdetails.ezrealty.php file

DEFINE("_EZREALTY_VIEWDET_NAME_EMAIL","Vul alle verplichte velden in aub!");
DEFINE("_EZREALTY_VIEWDET_NOVIEW","Sorry, deze optie is momenteel niet beschikbaar.");
DEFINE("_EZREALTY_PROPGONE","De woning die u zoekt bestaat niet meer, of is nog niet gepubliceerd!");
DEFINE("_EZREALTY_VIEWDET_PROPDET","Kenmerken");
DEFINE("_EZREALTY_VIEWDET_MAP","Bekijk map");
DEFINE("_EZREALTY_VIEWDET_TOUR","Tour");
DEFINE("_EZREALTY_VIEWDET_VTOUR","Bekijk virtual tour");
DEFINE("_EZREALTY_VIEWDET_PRINT","Druk deze pagina af");
DEFINE("_EZREALTY_VIEWDET_FAVS","Toevoegen aan Favorieten");
DEFINE("_EZREALTY_VIEWDET_VIEWING","Regel Bezichtiging");
DEFINE("_EZREALTY_VIEWDET_VNAME","Uw Naam");
DEFINE("_EZREALTY_VIEWDET_VMAIL","Uw Email");
DEFINE("_EZREALTY_VIEWDET_VPHONE","Uw Telefoonnummer");
DEFINE("_EZREALTY_VIEWDET_VTIME","Voorkeurs Datum & Tijd");
DEFINE("_EZREALTY_VIEWDET_SEND","Verstuur");
DEFINE("_EZREALTY_VIEWDET_SEND_FRIEND","Stuur door via e-mail");
DEFINE("_EZREALTY_VIEWDET_YOUR_NAME","Uw Naam");
DEFINE("_EZREALTY_VIEWDET_YOUR_MAIL","Uw Email");
DEFINE("_EZREALTY_VIEWDET_FRIENDS_NAME","Uw vriend's Naam");
DEFINE("_EZREALTY_VIEWDET_FRIENDS_MAIL","Uw vriend's Email");
DEFINE("_EZREALTY_VIEWDET_APPROX","ongeveer.");
DEFINE("_EZREALTY_VIEWDET_LINKS","Service Links");
DEFINE("_EZREALTY_VIEWDET_FPLANS","Plattegrond");
DEFINE("_EZREALTY_VIEWDET_MAILING","Neem contact op");//Inschrijven voor Nieuwsbrief
DEFINE("_EZREALTY_VIEWDET_MAILING_SPEIL","Vul uw gegevens in en wij nemen contact met u op");//Het Woningaanbod wordt continu bijgewerkt. Blijf op de hoogte!
DEFINE("_EZREALTY_VIEWDET_INTERESTS","Uw vraag op opmerking");//Ik ben geinteresserd in de volgende woningen
DEFINE("_EZREALTY_VIEWDET_LOCALITY","Plaats");
DEFINE("_EZREALTY_VIEWDET_LAND","Perceeloppervlakte");
DEFINE("_EZREALTY_VIEWDET_BEDROOM","Slaapkamer");
DEFINE("_EZREALTY_VIEWDET_BEDROOMS","Slaapkamers");
DEFINE("_EZREALTY_VIEWDET_BATHROOM","Badkamer");
DEFINE("_EZREALTY_VIEWDET_BATHROOMS","Badkamers");
DEFINE("_EZREALTY_VIEWDET_PARKING","Parkeerplaats voor");
DEFINE("_EZREALTY_VIEWDET_PARKING2","Parkeerplaats");
DEFINE("_EZREALTY_VIEWDET_GALLERY","Foto Galerij");
DEFINE("_EZREALTY_VIEWDET_SOLD","Verkocht");
DEFINE("_EZREALTY_VIEWDET_CONTRACT","Under Contract");
DEFINE("_EZREALTY_VIEWDET_REGISTER","Register");

DEFINE("_EZREALTY_VIEWDET_PRICE","Prijs");
DEFINE("_EZREALTY_VIEWDET_EXTRA","Kenmerken in het kort");
DEFINE("_EZREALTY_VIEWDET_YES","Ja");
DEFINE("_EZREALTY_VIEWDET_NO","Nee");
DEFINE("_EZREALTY_VIEWDET_LOCATION","Locatie");
DEFINE("_EZREALTY_VIEWDET_TOWN","Dichtsbijzijnde plaats");
DEFINE("_EZREALTY_VIEWDET_TPORT","Openbaar vervoer");
DEFINE("_EZREALTY_VIEWDET_AGE","Bouwjaar");

DEFINE("_EZREALTY_VIEWDET_PSELLERS","Verkopers");
DEFINE("_EZREALTY_VIEWDET_SELLER","Verkoper");
DEFINE("_EZREALTY_VIEWDET_SELLER_PHONE","Contact #");
DEFINE("_EZREALTY_VIEWDET_SELLER_ARRANGE","Bekijk woning");
DEFINE("_EZREALTY_VIEWDET_SELLER_VIEWING","Regel Bezichtiging met de verkoper");

DEFINE("_EZREALTY_PIX_HOVER","Beweeg uw muis over de foto's om een groter exemplaar te bekijken");

// search.ezrealty.php file

DEFINE("_EZREALTY_SEARCHPRICE","Prijsklasse");
DEFINE("_EZREALTY_SEARCHPROPTYPE","Soort Woning");
DEFINE("_EZREALTY_SEARCHLOC","Plaats");
DEFINE("_EZREALTY_SEARCHSUB","Streek");
DEFINE("_EZREALTY_SEARCHREG","Provincie");
DEFINE("_EZREALTY_SEARCHCON","Land");
DEFINE("_EZREALTY_SEARCHBRM","Slaapkamers");
DEFINE("_EZREALTY_SEARCHORD","Volgorde");
DEFINE("_EZREALTY_SEARCHADV","Uitgebreid Zoeken Filter");
DEFINE("_EZREALTY_SEARCH_SEARCH","Zoeken");

DEFINE("_EZREALTY_SEARCH_ALCAT","Geen voorkeur");
DEFINE("_EZREALTY_SEARCH_ALLOC","Geen voorkeur");
DEFINE("_EZREALTY_SEARCH_ALSTA","Geen voorkeur");
DEFINE("_EZREALTY_SEARCH_ALCOU","Geen voorkeur");
DEFINE("_EZREALTY_SEARCH_MINPRI","Minimum Prijs");
DEFINE("_EZREALTY_SEARCH_MAXPRI","Maximum Prijs");
DEFINE("_EZREALTY_SEARCH_MINBED","Minimum Slaapkamers");
DEFINE("_EZREALTY_SEARCH_MAXBED","Maximum Slaapkamers");
DEFINE("_EZREALTY_SEARCH_ONLYAV","Alleen Beschikbaar Aanbod");
DEFINE("_EZREALTY_SEARCH_PRIASC","Prijs Oplopend");
DEFINE("_EZREALTY_SEARCH_PRIDESC","Prijs Aflopend");
DEFINE("_EZREALTY_SEARCH_ASC","Datum Oplopend");
DEFINE("_EZREALTY_SEARCH_DESC","Datum Aflopend");

// results.ezrealty.php file

DEFINE("_EZREALTY_RESULTSL_SELECT","Kies uw zoek voorkeuren!");
DEFINE("_EZREALTY_RESULTS_RESULTS","Resultaten:-");
DEFINE("_EZREALTY_RESULTS_NORESULTS","Sorry - geen zoekresultaten...");
DEFINE("_EZREALTY_RESULTS_NEW","Laatste");
DEFINE("_EZREALTY_RESULTS_NEWLISTINGS","Nieuw Aanbod");

// printdetails.ezrealty.php file

DEFINE("_EZREALTY_PRINT_ID","Property ID");
DEFINE("_EZREALTY_PRINT_TELEPHONE","Telefoon:");
DEFINE("_EZREALTY_PRINT_PRINT","Print Scherm");
DEFINE("_EZREALTY_PRINT_CLOSE","Sluit Scherm");

// submit lead stuff

DEFINE("_EZREALTY_SUBLEAD_TITLE","Vul de gegevens in.");
DEFINE("_EZREALTY_SUBLEAD_INTRO","De woningmarkt is continue in beweging.  Indien uw aanbod er niet tussen zit kunt u hier uw wensen kenbaar maken. Wij nemen contact met u op als we een geschikte woning gevonden hebben.
");
DEFINE("_EZREALTY_SUBLEAD_THANKS","Bedankt - uw verzoek is verstuurd.");
DEFINE("_EZREALTY_SUBLEAD_CONTACT","Uw gegevens");
DEFINE("_EZREALTY_SUBLEAD_NOTON","Sorry - we're not currently accepting property leads");

DEFINE("_EZREALTY_LM_ERROR1","Vul uw naam in aub");
DEFINE("_EZREALTY_LM_ERROR2","Vul uw email adres in aub");
DEFINE("_EZREALTY_LM_ERROR3","Kies een categorie aub");
DEFINE("_EZREALTY_LM_ERROR4","Kies een prijsklasse aub");
DEFINE("_EZREALTY_LM_ERROR5","Kies een Plaats aub");
DEFINE("_EZREALTY_LM_ERROR6","Kies het aantal slaapkamers aub");

DEFINE("_EZREALTY_EMAIL_ERROR1","Vul uw naam in aub");
DEFINE("_EZREALTY_EMAIL_ERROR2","Vul uw email adres in aub");
DEFINE("_EZREALTY_EMAIL_ERROR3","Vul uw telefoonnummer in aub");
DEFINE("_EZREALTY_EMAIL_ERROR4","Stel uw vraag aub");
DEFINE("_EZREALTY_EMAIL_ERROR5","Vul uw vriends naam in aub");
DEFINE("_EZREALTY_EMAIL_ERROR6","Vul uw friends email adres in aub");
DEFINE("_EZREALTY_EMAIL_ERROR7","Vul aub wat informatie in aub");
DEFINE("_EZREALTY_EMAIL_ERROR8","Sorry - deze email optie is momenteel niet beschikbaar");
DEFINE("_EZREALTY_EMAIL_ERROR9","Geef een voorkeurs tijd op aub");

// front-end member stuff

DEFINE("_EZREALTY_LISTINGS_INTRO","You may have the following number of FREE listings for sale");
DEFINE("_EZREALTY_NOLISTINGS","You have no current listings");
DEFINE("_EZREALTY_ADDNEW","Add new listing");
DEFINE("_EZREALTY_SUBMIT_LISTING","Submit Listing");
DEFINE("_EZREALTY_NO_LOGIN","Sorry - u dient eerst in te loggen");
DEFINE("_EZREALTY_MAX_NUM","Sorry - u heeft het masimub aantal bereikt van");
DEFINE("_EZREALTY_MAXNUM_LIST","listings");
DEFINE("_EZREALTY_YOUVEGOTMAIL","Nieuw woning overzichtProperty Listing");
DEFINE("_EZREALTY_DONE","Image upload and property listing successful!");
DEFINE("_EZREALTY_UPDATEDONE","You have successfully updated your listing!");
DEFINE("_EZREALTY_NO_EDIT","Sorry - you're not allowed to edit this listing");
DEFINE("_EZREALTY_NODELETE","U bent niet gemachtigd om dit overizcht te verwijderen");
DEFINE("_EZREALTY_CHECKDELETE","Weet u zeker dat u dit overzicht wilt verwijderen?");
DEFINE("_EZREALTY_DELETE_LISTING","Verwijder Overzicht");
DEFINE("_EZREALTY_LISTINGS_PREVIEW","Preview Overzicht");
DEFINE("_EZREALTY_DELIMGOOPS","Foto werd niet verwijderd");
DEFINE("_EZREALTY_LISTING_DELETED","Woning overzicht is verwijderd");
DEFINE("_EZREALTY_LISTING_TERMS","Algemene voorwaarden");
DEFINE("_EZREALTY_PREVIEW_LISTING","Your Property Listing Preview");

DEFINE("_EZREALTY_MEMBERS_ADDRESS","Adres");
DEFINE("_EZREALTY_MEMBERS_HITS","Hits");
DEFINE("_EZREALTY_MEMBERS_ACTION","Aktie");
DEFINE("_EZREALTY_MEMBERS_STATUS","Gepubliceerd");
DEFINE("_EZREALTY_MEMBERS_UPGRADE","Opwaarderen");
DEFINE("_EZREALTY_MEMBERS_MAKEFEAT","Zet als Featured");
DEFINE("_EZREALTY_MEMBERS_SELLERDET","Verkoper Details");

DEFINE("_EZREALTY_LISTING1","Verkoper contact details");
DEFINE("_EZREALTY_LISTING2","Naam Verkoper");
DEFINE("_EZREALTY_LISTING3","Telefoon Verkoper");
DEFINE("_EZREALTY_LISTING4","Email adres");
DEFINE("_EZREALTY_LISTING5","Adres van de Woning");
DEFINE("_EZREALTY_LISTING6","Woning details");
DEFINE("_EZREALTY_LISTING7","Kenmerken in het kort");
DEFINE("_EZREALTY_LISTING8","Woning Markt Details");
DEFINE("_EZREALTY_LISTING9","Voeg Woning Detail toe");
DEFINE("_EZREALTY_LISTING10","Pas Woning Detail aan");
DEFINE("_EZREALTY_LISTING11","Woonplaats Verkoper");
DEFINE("_EZREALTY_LISTING12","Foto's");
DEFINE("_EZREALTY_LISTING_IMGDELETED","Foto verwijderd");
DEFINE("_EZREALTY_LISTING_RESTRICTED","**Deze informatie is niet beschikbaar voor een gratis advertentie**");

DEFINE("_EZREALTY_SELLER_ERROR1","U dient een contact naam in te vullen");
DEFINE("_EZREALTY_SELLER_ERROR2","U dient een telefoonnummer in te vullen");
DEFINE("_EZREALTY_SELLER_ERROR3","U dient een email adres in te vullen");
DEFINE("_EZREALTY_SELLER_ERROR4","U dient uw woonplaats in te voeren");

DEFINE("_EZREALTY_SELLER_N","Naam");
DEFINE("_EZREALTY_SELLER_T","Telefoon");
DEFINE("_EZREALTY_SELLER_E","Email");
DEFINE("_EZREALTY_SELLER_L","Woonplaats");
DEFINE("_EZREALTY_SELLER_C","Gegevens");

DEFINE("_EZREALTY_NOCATLISTINGS","Sorry - er is geen aanbod in deze categorie");

DEFINE("_EZREALTY_IPN_SUBJECT","Listing Upgraded to");
DEFINE("_EZREALTY_IPN_MSG1","A site member has just upgraded their listing to");
DEFINE("_EZREALTY_IPN_MSG2","Verkoper details:-");
DEFINE("_EZREALTY_IPN_MSG3","Woning ID#");

DEFINE("_EZREALTY_POA","POA");
DEFINE("_EZREALTY_CONFIG_STATES","Gebruik Provincies");
DEFINE("_EZREALTY_CONFIG_STATESDESC","Wilt u gebruik maken van de mogelijkheid om Provincies in te voeren?");
DEFINE("_EZREALTY_CONFIG_SBIMP","Aanbod volgens Impressies");
DEFINE("_EZREALTY_CONFIG_SBIMPDESC","Als u gebruikt maakt van de Leden functies, moet dit dan gebaseerd zijn op impressies - of op hits op de Lees meer link. Listings will then cease to display once they exceed the number of impressions and you'll be able to clean the database of these old listings by pressing the 'Clean Listings' button.");
DEFINE("_EZREALTY_CONFIG_IMPNUM","Aantal Impressies/Hits");
DEFINE("_EZREALTY_CONFIG_IMPNUMDESC","Indien er gebruik wordt gemaakt van Impressies/Hits - wat moet de waarde zijn?");

DEFINE("_EZREALTY_RESET_MSG","Hits zijn gereset");
DEFINE("_EZREALTY_RESET_BTN","Reset");
DEFINE("_EZREALTY_CLEANDB","Clean Listings");
DEFINE("_EZREALTY_LISTINGS_PAID1","listings cost");
DEFINE("_EZREALTY_LISTINGS_PAID2","per upgrade");
DEFINE("_EZREALTY_LISTINGS_HITSINTRO","Listings are discontinued and removed from the database after");
DEFINE("_EZREALTY_LISTINGS_HITS2","hits");
DEFINE("_EZREALTY_BEDROOMS_EXPL","Use whole numbers from 1 upwards, as the 0 is already defined in the drop-down box code for use in instances where bedrooms are not applicable.");
DEFINE("_EZREALTY_SELLERSPANEL","Seller's Panel");
DEFINE("_EZREALTY_MAINPANEL","Main Listings");


// NEW TAGS THAT WERE ADDED FOR THE 3.2.2 VERSION

DEFINE("_EZREALTY_SUB_MSG","A member of your site has added or updated a listing");
DEFINE("_EZREALTY_TOOLBAR_CLOSE","Sluiten");
DEFINE("_EZREALTY_NLAVAIL","Sorry - er is momenteel geen aanbod");


// NEW TAGS THAT WERE ADDED AFTER THE 3.2.2 VERSION FOR CB INTEGRATION

DEFINE("_EZREALTY_CONFIG_CBINT","Community Builder Intergratie");
DEFINE("_EZREALTY_CONFIG_CBINTDESC","If you are using Community Builder, do you want to use the information from its membership tables for seller contact details?");
DEFINE("_EZREALTY_PROFILER_CBMSG1","The EZ Realty property listings component is not installed.  Please contact the site administrator.");
DEFINE("_EZREALTY_PROFILER_CBMSG2","There are no property listings for this member.");
DEFINE("_EZREALTY_PROFILER_CBPROFILE","Bekijk Profiel");




// NEW TAGS THAT WERE ADDED AFTER THE 3.3.0 VERSION


DEFINE("_EZREALTY_CLICK_OPEN","Klik om te openen");




// NEW TAGS THAT WERE ADDED FOR THE 4.0.0 RELEASE

DEFINE("_EZREALTY_CONFIG_FREEPIC","Gratis Aanbod foto");
DEFINE("_EZREALTY_CONFIG_FREEPICDESC","If you have free and paid listings for your members, do you want free listings to be able to show an image? If you select 'NO' just a placeholder will be displayed, which may encourage more paid listings. If you select 'YES' - free listings will only be able to have one image. This will not affect listings if you're ONLY running in free listings mode - members can have 12 images when run in this mode.");
DEFINE("_EZREALTY_CONFIG_PAIDOPT1","FREE with option to UPGRADE");
DEFINE("_EZREALTY_CONFIG_PAIDOPT2","Alleen voor betaalde");
DEFINE("_EZREALTY_CONFIG_PAIDONLY","Betaal Methode");
DEFINE("_EZREALTY_CONFIG_PAIDONLYDESC","If offering paid listings - do you want to offer FREE listings with the option to upgrade - OR ONLY paid listings.");

DEFINE("_EZREALTY_CONFIG_LEVEL1","Paid Listing Level 1 Name");
DEFINE("_EZREALTY_CONFIG_LEVEL1DESC","What would you like to call your listing upgrades - eg. Premium/Enhanced Listing etc. This will appear as the Item Name in button code and PayPal transaction reports.");
DEFINE("_EZREALTY_CONFIG_LEVEL1COST","Paid Listing Level 1 Cost");
DEFINE("_EZREALTY_CONFIG_LEVEL1COSTDESC","The cost of upgrading a free property listing to a paid listing.");

DEFINE("_EZREALTY_CONFIG_LEVEL2","Paid Listing Level 2 Name");
DEFINE("_EZREALTY_CONFIG_LEVEL2DESC","What would you like to call your listing upgrades - eg. Premium/Enhanced Listing etc. This will appear as the Item Name in button code and PayPal transaction reports.");
DEFINE("_EZREALTY_CONFIG_LEVEL2COST","Paid Listing Level 2 Cost");
DEFINE("_EZREALTY_CONFIG_LEVEL2COSTDESC","The cost of purchasing/upgrading.");

DEFINE("_EZREALTY_DETAILS_TAB7A","Metatags");
DEFINE("_EZREALTY_DETAILS_METADESC","Omschrijving");
DEFINE("_EZREALTY_DETAILS_METAKEYS","Keywords");
DEFINE("_EZREALTY_FEND_BUYNOW","Purchase a 'Featured Listing' first and you don't have to pay the initial 'Premium Listing' fee.");
DEFINE("_EZREALTY_FEND_BUYNOW2","Upgrade to a 'Featured Listing' first and you don't have to pay the initial 'Premium Listing' fee.");
DEFINE("_EZREALTY_UPGRADE","Upgrade");
DEFINE("_EZREALTY_CHECK_LOC","Controleer Plaats");
DEFINE("_EZREALTY_CHECK_STATE","Controleer Provincie");
DEFINE("_EZREALTY_CHECK_COUNTRY","Controleer Land");
DEFINE("_EZREALTY_CHECK_AVAIL","Controleer Beschikbaarheid");
DEFINE("_EZREALTY_CHECK_SUBMIT","Nieuw toevoegen");
DEFINE("_EZREALTY_CHECK_GO","Ok");
DEFINE("_EZREALTY_CHECK_REFRESH","<strong><br /><br />Ververs het scherm nadat u dit scherm heeft gesloten - daarna ziet u uw toevoeging.</strong>");

DEFINE("_EZREALTY_CONFIG_SELFENTRY","Front-end Additions");
DEFINE("_EZREALTY_CONFIG_SELFENTRYDESC","Moeten leden de mogelijkheid hebben om Plaatsen en Provincies aan te maken? Indien ja - dan worden deze gegevens automatisch doorgevoerd in het aanbod.");
DEFINE("_EZREALTY_CONFIG_COLOUR1","Rollover Kleur 1");
DEFINE("_EZREALTY_CONFIG_COLOUR1DESC","Dit is de kleur die wordt getoond als u met de muis over het woning aanbod lijst zweeft.");
DEFINE("_EZREALTY_CONFIG_COLOUR2","Rollover Kleur 2");
DEFINE("_EZREALTY_CONFIG_COLOUR2DESC","Dit is de kleur die wordt getoond als u met de muis over het woning aanbod lijst zweeft.");

DEFINE("_EZREALTY_DATABASE1","Optimaliseer Database");
DEFINE("_EZREALTY_DATABASE2","Database is geoptimaliseerd");



// TAGS THAT HAD THEIR LANGUAGE CONTENT CHANGED FOR THE 4.0.0 RELEASE


DEFINE("_EZREALTY_LISTINGS_HITSEXPL","If upgrading between listing levels/types - hits will be reset to 0");
DEFINE("_EZREALTY_HEADER_OHOUSE","Open Huis");


// NEW TAGS FOR THE 4.1.0 RELEASE Woningsoort:/Woningtype:

DEFINE("_EZREALTY_LISTING_SELECTTYPE","Selecteer Type");
DEFINE("_EZREALTY_TYPE_SALE","Verkoop");
DEFINE("_EZREALTY_TYPE_RENTAL","Verhuur");
DEFINE("_EZREALTY_LISTING_TYPE","Status Woning");
DEFINE("_EZREALTY_LISTING_ANYTYPE","Geen voorkeur");
DEFINE("_EZREALTY_RENTAL_FREQUENCY","Verhuur Tarief");
DEFINE("_EZREALTY_RENTAL_NA","Onbepaalde termijn");
DEFINE("_EZREALTY_RENTAL_NIGHTLY","Per nacht");
DEFINE("_EZREALTY_RENTAL_WEEKLY","Per week");
DEFINE("_EZREALTY_RENTAL_FNIGHT","Per avond");
DEFINE("_EZREALTY_RENTAL_MONTH","Per maand");
DEFINE("_EZREALTY_RENTAL_SQFT","Extra Optie");
DEFINE("_EZREALTY_RENTAL_SQMTR","Extra Optie");
DEFINE("_EZREALTY_RENTAL_SPARE","Extra Optie");


// TAGS THAT HAD THEIR LANGUAGE CONTENT CHANGED FOR THE 4.1.0 RELEASE


DEFINE("_EZREALTY_DETAILS_MARKET1","Te Koop/Beschikbaar");


// NEW TAGS FOR THE 4.2.0 RELEASE

DEFINE("_EZREALTY_CONFIG_MOBILE","06 Nummer");
DEFINE("_EZREALTY_CONFIG_MOBILEDESC","Dit nummer wordt gebruikt voor het versturen van de SMS contact form if you don't allow site members to list, or if you also list properties. Het MOET ingeveord worden als internationaal nummer:- Land Code, Network prefix zonder '0' en nummer - geen spaties, alleen getallen. Als u geen gebruik wilt maken van deze optie laat dan dit veld leeg.");

DEFINE("_EZREALTY_SELLER_SMS1","SMS Nummer");
DEFINE("_EZREALTY_SELLER_SMS2","SMS mij!");
DEFINE("_EZREALTY_SELLER_SMS3","Attentie: Voordat u hier gebruik van kunt maken dient u deze optie te actieveren");
DEFINE("_EZREALTY_SELLER_SMS4","account! You also need to set up a HTTP API via your Clickatell control panel.");
DEFINE("_EZREALTY_SELLER_SMS5","Your mobile number in international format:- Country Code, Network prefix without the leading '0' and Number - no spaces, only numerals.");
DEFINE("_EZREALTY_SELLER_SMS6","Verstuur een SMS via Clickatell naar de woning verkoper");
DEFINE("_EZREALTY_SELLER_SMS7","Gebruikersnaam");
DEFINE("_EZREALTY_SELLER_SMS8","Wachtwoord");
DEFINE("_EZREALTY_SELLER_SMS9","06 Nummer");
DEFINE("_EZREALTY_SELLER_SMS10","Bericht");
DEFINE("_EZREALTY_SELLER_SMS11","Succes");
DEFINE("_EZREALTY_SELLER_SMS12","Bericht ID");
DEFINE("_EZREALTY_SELLER_SMS13","Versturen mislukt");
DEFINE("_EZREALTY_SELLER_SMS14","Authentication failure");
DEFINE("_EZREALTY_SELLER_SMS15","U dient uw Clickatell gebruikersnaam in te vullen");
DEFINE("_EZREALTY_SELLER_SMS16","U dient uw Clickatell wachtwoord in te vullen");
DEFINE("_EZREALTY_SELLER_SMS17","U dient uw 06 Nummer in te voeren dat is gekoppeld aan de Clickatell dienst");
DEFINE("_EZREALTY_SELLER_SMS18","U dient een bericht in te vullen voor uw woning verkoper");
DEFINE("_EZREALTY_SELLER_SMS19","HTTP API ID#");
DEFINE("_EZREALTY_SELLER_SMS20","U dient uw Clickatell API ID in te voeren. If you don't already have one, set up a HTTP API via your Clickatell control panel.");
DEFINE("_EZREALTY_SELLER_SMS21","maximaal 150 tekens");
DEFINE("_EZREALTY_SELLER_SMS22","Uw Clickatell Details");
DEFINE("_EZREALTY_SELLER_SMS23","Verstuur SMS via Clickatell");
DEFINE("_EZREALTY_SELLER_SMS24","Verstuur SMS via Clickatell to this sales lead - Create sales lead BEFORE sending SMS!");
DEFINE("_EZREALTY_SELLER_SMS25","Klaar!");
DEFINE("_EZREALTY_SELLER_SMS26","Verstuur SMS");
DEFINE("_EZREALTY_SELLER_SMS27","U dient eerst alle Clickatell gegevens in te voeren VOORDAT u een SMS verstuurd!!");

DEFINE("_EZREALTY_SELLER_SMS7DESC","Dit dient uw Clickatell Central API dienst gebruikersnaam te zijn.");
DEFINE("_EZREALTY_SELLER_SMS8DESC","Dit dient uw Clickatell Central API dienst wachtwoord te zijn");
DEFINE("_EZREALTY_SELLER_SMS19DESC","Dit dient uw Clickatell Central API dienst HTTP API ID#. Maak uw API ID# via uw Clickatell controle paneel.");


DEFINE("_EZREALTY_CONFIG_TEXTBOX","Tekst box breedte");
DEFINE("_EZREALTY_CONFIG_TEXTBOXDESC","De breedte van de grote tekst vlakken op uw website. Deze breedte voorkomt dat uw lay-out wordt verstoort.");
DEFINE("_EZREALTY_CONFIG_TEXTAREA","Tekst breedte");
DEFINE("_EZREALTY_CONFIG_TEXTAREADESC","De breedte van de grote tekst vlakken op uw website. Deze breedte voorkomt dat uw lay-out wordt verstoort.");
DEFINE("_EZREALTY_TYPE_LEASE","For Lease");
DEFINE("_EZREALTY_IMAGE_WARNING","<strong><font color='#FF0000'>Foto's MOETEN jpg's of png's zijn!!</font></strong>");
DEFINE("_EZREALTY_IMAGE_WARNING2","Een of meer foto's overschrijden de maximale breedte of hoogte!!");

DEFINE("_EZREALTY_CONFIG_OHOUSE","Open Huis Link");
DEFINE("_EZREALTY_CONFIG_OHOUSEDESC","Moet de 'Open Huis aanbod' link zichtbaar zijn?");
DEFINE("_EZREALTY_CONFIG_MAXWIDTH","Maximaal toegestane breedte");
DEFINE("_EZREALTY_CONFIG_MAXWIDTHDESC","Wat is de maximaal toegestane foto upload breedte in pixels?");
DEFINE("_EZREALTY_CONFIG_MAXHEIGHT","Maximaal toegestande hoogte");
DEFINE("_EZREALTY_CONFIG_MAXHEIGHTDESC","What is de maximaal toegestane foto upload hoogte in pixels?");

DEFINE("_EZREALTY_PIXELS","pixels");
DEFINE("_EZREALTY_BEDBATH","Bed/Bad");
DEFINE("_EZREALTY_BUDGET","Budget");
DEFINE("_EZREALTY_INTERESTED","Geinteresseerd?");
DEFINE("_EZREALTY_WANTED","Gezocht");
DEFINE("_EZREALTY_PROPERTIES_WANTED","Te koop gevraagd");
DEFINE("_EZREALTY_PROPERTIES_WANTEDDESC","Op dit moment is er vraag naar de volgende woning{en}");

DEFINE("_EZREALTY_LEAD_RESPONSE"," Sales Lead Response");
DEFINE("_EZREALTY_RESPONS_PROPLEAD","may have a property for a sales lead you have listed. Lead ID# is:-");
DEFINE("_EZREALTY_LEAD_RESPONSEERROR"," U dient een korte omschrijving in te voeren");
DEFINE("_EZREALTY_CONFIG_COUNTRY","Gebruik Landen");

DEFINE("_EZREALTY_CONFIG_NLLINK","Nieuw Aanbod Link");
DEFINE("_EZREALTY_CONFIG_NLLINKDESC","Wilt u Nieuwe Woningen Knop op de voorpagina laten zien?");
DEFINE("_EZREALTY_STUDIO","Studio");
DEFINE("_EZREALTY_RESET","Reset");
DEFINE("_EZREALTY_LEADCONTACT_PROMO","Got a property that may match one we've got a buyer for?");
DEFINE("_EZREALTY_SKIPFREE_LISTING","Skip the free listing and go straight to a paid listing!!");

DEFINE("_EZREALTY_CONFIG_COLCOUNT","Aantal kolommen");
DEFINE("_EZREALTY_CONFIG_COLCOUNTDESC","Hoeveel kolommen wilt u laten zien de categorie lijst?");
DEFINE("_EZREALTY_CONFIG_COLWIDTH","Kolom breedte");
DEFINE("_EZREALTY_CONFIG_COLWIDTHDESC","Hoe breedt moeten de kolommen zijn op de categorie pagina? Voorbeeld, als u 1 kolom gebruikt, dan moet de breedte worden ingesteld op 100%, als u tweee kolomen wenst te gebruiken moet u deze waarde halveren (50%), en bij gebruik van 3 kolommen dan moet de breedte worden ingsteld op 33%. Denk er aan het % teken is verplicht.");

DEFINE("_EZREALTY_ESSENTIALS","Essentials");
DEFINE("_EZREALTY_OTHERSPECS","Other Specs");
DEFINE("_EZREALTY_NS","Niet opgegeven");
DEFINE("_EZREALTY_EA","Email Admin");

DEFINE("_EZREALTY_CONFIG_FORMATTING","Opmaak");
DEFINE("_EZREALTY_CONFIG_MAPPING","Kaart Instelligen");
DEFINE("_EZREALTY_CONFIG_MAPWIDTH","Map Breedte");
DEFINE("_EZREALTY_CONFIG_MAPWIDTHDESC","De breedte van de kaart zoals deze wordt afgebeeld.");
DEFINE("_EZREALTY_CONFIG_MAPHEIGHT","Map Hoogte");
DEFINE("_EZREALTY_CONFIG_MAPHEIGHTDESC","De hoogte van de kaart zoals deze wordt afgebeeld.");
DEFINE("_EZREALTY_CONFIG_ADDRESSWIDTH","Adres Balk Breedte");
DEFINE("_EZREALTY_CONFIG_ADDRESSWIDTHDESC","De breedte van de tekst boven de kaart.");
DEFINE("_EZREALTY_PROPERTY_MAPLOC","Locatie van de Woning");
DEFINE("_EZREALTY_SEARCH_ALLPOSTCODES","Geen voorkeur");




// TAGS THAT HAD THEIR LANGUAGE CONTENT CHANGED FOR THE 4.2.0 RELEASE


DEFINE("_EZREALTY_CONFIG_NEWLIST","Special property listing pages");
DEFINE("_EZREALTY_CONFIG_NEWLISTDESC","Aantal Woningen dat wordt getoond bij: 'Nieuw Aanbod', 'Openhuis Lijst', 'Woning Gezocht' and 'RSS feed' pagina");


// NEW LANGUAGE TAGS FOR THE *** 4.2.0 STABLE *** RELEASE


DEFINE("_EZREALTY_ERROR_DUPLICATE","Fout - Dubbele invoer!!");
DEFINE("_EZREALTY_OPENHOUSE_DETAILS","Openhuis bezichtiging");



// NEW LANGUAGE TAGS FOR THE *** 5.0.0 STABLE *** RELEASE


DEFINE("_EZREALTY_CPANEL","cPanel");

DEFINE("_EZREALTY_CPANEL_VMGR","Vehicle Manager");
DEFINE("_EZREALTY_CPANEL_MGCAT","Manage Categories");
DEFINE("_EZREALTY_CPANEL_MGVEHMAKE","Manage Vehicle Makes");
DEFINE("_EZREALTY_CPANEL_MGVEHMOD","Manage Vehicle Models");
DEFINE("_EZREALTY_CPANEL_MGENG","Manage Engine Size List");
DEFINE("_EZREALTY_CPANEL_MGPRICE","Manage Price List");
DEFINE("_EZREALTY_CPANEL_PROFMGR","Profile Manager");
DEFINE("_EZREALTY_CPANEL_MGSALES","Manage Sales Leads");
DEFINE("_EZREALTY_CPANEL_SENDALERT","Send Alert Email");
DEFINE("_EZREALTY_CPANEL_CLEANLIST","Clean Listings");
DEFINE("_EZREALTY_CPANEL_UPGRADE","Upgrade Database");
DEFINE("_EZREALTY_CPANEL_HELP","Help");
DEFINE("_EZREALTY_CPANEL_MIGRATE","Migrate Mambo Users");
DEFINE("_EZREALTY_CPANEL_CONFIG","Configuration Settings");
DEFINE("_EZREALTY_CPANEL_INTRO","Introduction");
DEFINE("_EZREALTY_CPANEL_OPTIMIZE","Optimize Tables");



DEFINE("_EZREALTY_PROFILE_DSDET","Contact Details");
DEFINE("_EZREALTY_PROFILE_MANAGE","Manage Agent/Seller Profiles");
DEFINE("_EZREALTY_PROFILE_IMAGE","Profile Image");
DEFINE("_EZREALTY_PROFILE_NAME","Agent/Seller Name");
DEFINE("_EZREALTY_PROFILE_NUMPROPS","Number of Listings");
DEFINE("_EZREALTY_PROFILE_COMPANY","Company");
DEFINE("_EZREALTY_PROFILE_EDIT","Edit Seller");
DEFINE("_EZREALTY_PROFILE_LINK","Link to Existing Member");
DEFINE("_EZREALTY_PROFILE_TYPE4","Seller Type");
DEFINE("_EZREALTY_PROFILE_INTRO","Personal Introduction<br />255 char max");
DEFINE("_EZREALTY_PROFILE_ADDRESS1","Street #");
DEFINE("_EZREALTY_PROFILE_ADDRESS2","Street Name");
DEFINE("_EZREALTY_PROFILE_LOCALITY","Locality");
DEFINE("_EZREALTY_PROFILE_PCODE","Zip/Postcode");
DEFINE("_EZREALTY_PROFILE_STATE","State");
DEFINE("_EZREALTY_PROFILE_COUNTRY","Country");
DEFINE("_EZREALTY_PROFILE_EMAIL","Email");
DEFINE("_EZREALTY_PROFILE_PHONE","Phone");
DEFINE("_EZREALTY_PROFILE_FAX","Fax");
DEFINE("_EZREALTY_PROFILE_MOBILE","Mobile #");
DEFINE("_EZREALTY_PROFILE_SMS","International Mobile #");
DEFINE("_EZREALTY_PROFILE_ALLOWSMS","Allow SMS contact");
DEFINE("_EZREALTY_PROFILE_WEB","Web Site URL");
DEFINE("_EZREALTY_PROFILE_BLOG","Blog Site URL");
DEFINE("_EZREALTY_PROFILE_MSN","MSN Username");
DEFINE("_EZREALTY_PROFILE_SKYPE","Skype Username");
DEFINE("_EZREALTY_PROFILE_YAHOO","Yahoo Username");
DEFINE("_EZREALTY_PROFILE_ICQ","ICQ Username");
DEFINE("_EZREALTY_PROFILE_APPROVE","Approve Profile");
DEFINE("_EZREALTY_PROFILE_DETAILS","Agent/Seller Profile Details");
DEFINE("_EZREALTY_PROFILE_SAVE","Save/Update Profile");
DEFINE("_EZREALTY_PROFILE_PROFILE","My Profile");
DEFINE("_EZREALTY_PROFILE_TYPE1","Select your seller status");
DEFINE("_EZREALTY_PROFILE_SAVED","Profile Details Saved");
DEFINE("_EZREALTY_PROFILE_SEARCHALL","Search all localities");
DEFINE("_EZREALTY_PROFILE_AGSELLERS","Our Agents and Private Sellers");
DEFINE("_EZREALTY_PROFILE_NOPROFILES","There are no profiles currently listed");
DEFINE("_EZREALTY_PROFILE_FINDDEALER","Find an Agent/private seller in your area");
DEFINE("_EZREALTY_PROFILE_AGLINK","Find an Agent");
DEFINE("_EZREALTY_PROFILE_MOBILE2","Mobile");
DEFINE("_EZREALTY_PROFILE_TEXT","Text message");
DEFINE("_EZREALTY_AGENT_CURRENTLISTINGS","Current Listings");
DEFINE("_EZREALTY_AGENT_MYLISTINGS","View My Listings");
DEFINE("_EZREALTY_AGENT_LISTINGSFOR","Listings for:-");
DEFINE("_EZREALTY_DEALER_NOLISTINGS","There are no listings associated with this profile");
DEFINE("_EZREALTY_PROFILE_SENDCONTACT","Contact this agent/seller");
DEFINE("_EZREALTY_PROFILE_SMSCONTACT","Send SMS via Clickatell to this agent/seller");
DEFINE("_EZREALTY_ERROR_NOPROFILE","ATTENTION - You must create your profile before being able to add/edit property listings!! Please click the 'My Profile' link above to do this.");

DEFINE("_EZREALTY_CONFIG_CURRENCYPOS","Currency Position");
DEFINE("_EZREALTY_CONFIG_CURRENCYPOS_DESC","You may define whether to display the currency sign before or after the price");
DEFINE("_EZREALTY_CONFIG_CURRENCYFORMAT","Currency Format");
DEFINE("_EZREALTY_CONFIG_CURRENCYFORMAT_DESC","You may define whether to display the currency in a decimal or european format");
DEFINE("_EZREALTY_CONFIG_BEFORE","Before");
DEFINE("_EZREALTY_CONFIG_AFTER","After");
DEFINE("_EZREALTY_CONFIG_DECIMAL","Decimal");
DEFINE("_EZREALTY_CONFIG_EUROPEAN","European");
DEFINE("_EZREALTY_CONFIG_MAPTYPE1","Google maps");
DEFINE("_EZREALTY_CONFIG_MAPTYPE2","Yahoo maps");

DEFINE("_EZREALTY_CONFIG_SHOWPROF","Show Profile");
DEFINE("_EZREALTY_CONFIG_PROFILING","Manage your site's profile settings");
DEFINE("_EZREALTY_CONFIG_PROFACCESS","Profile Access");
DEFINE("_EZREALTY_CONFIG_PROFACCESSDESC","Specify who should be able to view details of a seller's profile. REMEMBER - you MUST NOT restrict access above registered member level - otherwise people will not be able to contact the seller. For the majority of sites - public access should work well.");
DEFINE("_EZREALTY_CONFIG_PROFILEWIDTH","Profile image width");
DEFINE("_EZREALTY_CONFIG_PROFILEWIDTHDESC","Maximum allowed width of the profile image. Keep in mind that this is the width that will be displayed on the front-end profile page. Images that exceed this width will be rejected during the upload process.");
DEFINE("_EZREALTY_CONFIG_PROFILEHEIGHT","Profile image height");
DEFINE("_EZREALTY_CONFIG_PROFILEHEIGHTDESC","Maximum allowed height of the profile image. keep in mind that this is the height that will be displayed on the front-end profile page. Images that exceed this height will be rejected during the upload process.");

DEFINE("_EZREALTY_PROFACCESS_DENIED","Our Agent/Seller profiles have access privileges enabled. Please login first.");

DEFINE("_EZREALTY_CONFIG_PROFILES","Profiles");

DEFINE("_EZREALTY_CONFIG_USESMS","Enable SMS");
DEFINE("_EZREALTY_CONFIG_USESMS_DESC","Do you want to display the SMS contact link/form to enable SMS messaging via the site's front-end? If Clickatell doesn't service your part of the world - set this to NO.");

DEFINE("_EZREALTY_CONFIG_DEFEXPMGMT","Define your various Expiration Management settings");
DEFINE("_EZREALTY_CONFIG_USEEXPMGMT","Use Expiration Management");
DEFINE("_EZREALTY_CONFIG_USEEXPMGMTDESC","Do you want to use the expiration management system. This allows you to limit how long listings are displayed for based on either time or page impressions.");
DEFINE("_EZREALTY_CONFIG_EXPSYS","Expiration system");
DEFINE("_EZREALTY_CONFIG_EXPSYSDESC","If using the expiration management system - select the method to limit how long listings are displayed for.");
DEFINE("_EZREALTY_CONFIG_EXPHITSBASED","Page Impressions");
DEFINE("_EZREALTY_CONFIG_EXPDATEBASED","Time-based");
DEFINE("_EZREALTY_CONFIG_EXPFIG","Time in Days");
DEFINE("_EZREALTY_CONFIG_EXPFIGDESC","If using 'Time-based' expiration management, specify how many days listings should be displayed for.");
DEFINE("_EZREALTY_CONFIG_EXPGRACE","Grace Period");
DEFINE("_EZREALTY_CONFIG_EXPGRACEDESC","If using 'Time-based' listings, specify a grace period in days. This is the amount of time between when a listing is discontinued, and when it can be cleaned from the database. During this period, listings can be renewed.");
DEFINE("_EZREALTY_CONFIG_LIGHTBOXEXP","Lightbox Expirary Time");
DEFINE("_EZREALTY_CONFIG_LIGHTBOXEXPDESC","How many days should lightbox items remain in the database. After this they can be pruned using the prune function.");
DEFINE("_EZREALTY_CONFIG_LISTINGSTEMPL","Listings Page Template");
DEFINE("_EZREALTY_CONFIG_LISTINGSTEMPL_DESC","There are now different layouts available for the listings pages - ie. category contents, new listings, search results, featured listings, model contents pages.");
DEFINE("_EZREALTY_CONFIG_MGSCHFILTER","Manage your search filter settings");
DEFINE("_EZREALTY_CONFIG_PAYMENTSYS","Select your payment system");
DEFINE("_EZREALTY_CONFIG_PAYMENTSYS_DESC","EZ Realty currently supports 2 ways to handle payments for paid upgrades. The PayPal system will allow you to handle these automatically via a built-in IPN script, or if PayPal isn't available to you - you can do this manually by linking listings to a page that explains how they must go about paying you.");
DEFINE("_EZREALTY_CONFIG_CHANGEIMAGES","Change Listing Images");
DEFINE("_EZREALTY_CONFIG_CHANGEIMAGES_DESC","Do you want to allow site members the ability to change the images in a listing once they've been uploaded? Setting this to 'no' will prevent changes to the images only. Some members may find this inconvenient if they don't like their initial image order.");
DEFINE("_EZREALTY_CONFIG_LEADSNOTIFY","Leads Notification");
DEFINE("_EZREALTY_CONFIG_LEADSNOTIFY_DESC","If you are using the Leads Management feature, do you want to be notified via email of new sales leads?");
DEFINE("_EZREALTY_CONFIG_MAPRES","Mapping Resolution");

DEFINE("_EZREALTY_MAPPING_STNUM","Use Street Number");
DEFINE("_EZREALTY_MAPPING_STNUMDESC","Do you want to use the street number for mapping purposes. If you select NO the map will only identify the street, but if you select YET it will identify the actual property location.");
DEFINE("_EZREALTY_MAPPING_STREET","Use Street Name");
DEFINE("_EZREALTY_MAPPING_STREETDESC","Do you want to use the street name for mapping purposes. If you select NO the map will only identify to the next level up - ie. the locality.");
DEFINE("_EZREALTY_MAPPING_LOCALITY","Use Locality");
DEFINE("_EZREALTY_MAPPING_LOCALITYDESC","Do you want to use the locality for mapping purposes. If you select NO mappikng will be less selective.");
DEFINE("_EZREALTY_MAPPING_STATE","Use State/Region");
DEFINE("_EZREALTY_MAPPING_STATEDESC","If your country isn't big enough for states/regions, you'll probably need to set this to NO if using mapping.");


DEFINE("_EZREALTY_SCH_TYPE","Use Listing Type");
DEFINE("_EZREALTY_SCH_TYPEDESC","Do you want to use the listing types dropdown list in the main search filter?");
DEFINE("_EZREALTY_SCH_CTG","Use Property Category");
DEFINE("_EZREALTY_SCH_CTGDESC","Do you want to use the property categories list in the main search filter?");

DEFINE("_EZREALTY_SCH_LOC","Use States and Localities");
DEFINE("_EZREALTY_SCH_LOCDESC","Do you want to display the chained states and localities in the main search filter?");

DEFINE("_EZREALTY_SCH_CNID","Use Country");
DEFINE("_EZREALTY_SCH_CNIDDESC","Do you want to display countries in the main search filter?");
DEFINE("_EZREALTY_SCH_PCODE","Use Zip/Postcode");
DEFINE("_EZREALTY_SCH_PCODEDESC","Do you want to display zip/postcode in the main search filter?");
DEFINE("_EZREALTY_SCH_PRICE","Use Price Range");
DEFINE("_EZREALTY_SCH_PRICEDESC","Do you want to use the 2 price range lists in the main search filter?");
DEFINE("_EZREALTY_SCH_ROOMS","Use Bedrooms");
DEFINE("_EZREALTY_SCH_ROOMSDESC","Do you want to use the 2 bedroom lists in the main search filter?");
DEFINE("_EZREALTY_SCH_MARKET","Use Market Status");
DEFINE("_EZREALTY_SCH_MARKETDESC","Do you want to use the market status list in the main search filter?");
DEFINE("_EZREALTY_SCH_MLS","Use MLS #");
DEFINE("_EZREALTY_SCH_MLSDESC","Do you want to use the MLS id# select list int he main search filter? This list is built from the unique agent id/mls id field.");

DEFINE("_EZREALTY_LISTINGS_EXPDATE","Expiration Date");
DEFINE("_EZREALTY_LISTINGS_EXPIRED","Expired");
DEFINE("_EZREALTY_EXPDATE_RESET","The Expiration Date has been reset!");
DEFINE("_EZREALTY_SELECT_SELLER","Select Agent/Seller");
DEFINE("_EZREALTY_DEALER_SELLER","Agent/Seller");

DEFINE("_EZREALTY_DETAILS_UNITNUM","Unit number");
DEFINE("_EZREALTY_DETAILS_STREETNUM","Street number");
DEFINE("_EZREALTY_DETAILS_DISPLAYAD","Display Address");
DEFINE("_EZREALTY_LISTINGS_DISPLADDYEXTFEED","Do you want to display the property address on any feeds to external property sites?");

DEFINE("_EZREALTY_OPTIMIZE_DATABASE","The EZ Realty tables have been optimized");
DEFINE("_EZREALTY_MIGRATE_ERROR","Error - you forgot to select your site members!");
DEFINE("_EZREALTY_COPY","Copy");
DEFINE("_EZREALTY_PROFILE_ERROR_MID","ERROR - You must assign an existing Mambo member to this profile!!");
DEFINE("_EZREALTY_SORT_ALLSTATES","-All States-");
DEFINE("_EZREALTY_SORT_ALLCOUNTRIES","-All Countries-");

DEFINE("_EZREALTY_ORDER_LIST1","ID asc");
DEFINE("_EZREALTY_ORDER_LIST2","ID desc");
DEFINE("_EZREALTY_ORDER_LIST3","Seller Name asc");
DEFINE("_EZREALTY_ORDER_LIST4","Seller Name desc");
DEFINE("_EZREALTY_ORDER_LIST5","Category Name asc");
DEFINE("_EZREALTY_ORDER_LIST6","Category Name desc");
DEFINE("_EZREALTY_ORDER_LIST9","Published asc");
DEFINE("_EZREALTY_ORDER_LIST10","Published desc");
DEFINE("_EZREALTY_ORDER_LIST11","Approved asc");
DEFINE("_EZREALTY_ORDER_LIST12","Approved desc");
DEFINE("_EZREALTY_ORDER_LIST13","Premium asc");
DEFINE("_EZREALTY_ORDER_LIST14","Premium desc");
DEFINE("_EZREALTY_ORDER_LIST15","Featured asc");
DEFINE("_EZREALTY_ORDER_LIST16","Featured desc");
DEFINE("_EZREALTY_ORDER_LIST17","Expiration date asc");
DEFINE("_EZREALTY_ORDER_LIST18","Expiration date desc");
DEFINE("_EZREALTY_ORDER_LIST19","Price asc");
DEFINE("_EZREALTY_ORDER_LIST20","Price desc");
DEFINE("_EZREALTY_ORDER_LIST21","Locality asc");
DEFINE("_EZREALTY_ORDER_LIST22","Locality desc");


DEFINE("_EZREALTY_ORDERBY","Order by");

DEFINE("_EZREALTY_MYEZPANEL","My EZ Panel");
DEFINE("_EZREALTY_MYPROFILE","My Profile");
DEFINE("_EZREALTY_MYLISTINGS","My Listings");

DEFINE("_EZREALTY_GENERIC_SAVED","Details Saved");

DEFINE("_EZREALTY_LISTINGS_ADDLIGHTBOX","Add to Shortlist");
DEFINE("_EZREALTY_NEEDTOLOGIN","Sorry - You must be logged in to use this feature.");
DEFINE("_EZREALTY_VIEW_LIGHTBOX","View Shortlist");
DEFINE("_EZREALTY_REMOVE_LIGHTBOX","Remove from Shortlist");

DEFINE("_EZREALTY_EMPTY_LIGHTBOX","There are no listings currently on your Shortlist");
DEFINE("_EZREALTY_MY_LIGHTBOX","My Shortlist");

DEFINE("_EZREALTY_CONFIG_ADDRESSIMG","Select which address variables to use when entering property information");
DEFINE("_EZREALTY_CONFIG_SHOWMEMB","Show Member's Area Link");
DEFINE("_EZREALTY_CONFIG_SHOWMEMBDESC","If you've got registered site members listing properties - do you want to display the link to the 'sellers panel' on the top EZ Realty menu. You may want to set this to 'no' so that you can create a menu link with user privileges.");
DEFINE("_EZREALTY_CONFIG_ADDPCODEDESC","Do you want to use the postcode when managing and displaying your property addresses?");
DEFINE("_EZREALTY_DETAILS_PROPCOUNTY","County/Municipality/Council");
DEFINE("_EZREALTY_DETAILS_PROPCOUNTY_DESC","** Optional field that's related to a geographical area somewhere between city and state level. It DOES NOT form part of the property address - but will be displayed on the property details page.");
DEFINE("_EZREALTY_DETAILS_TOTALROOMS","Total rooms");
DEFINE("_EZREALTY_DETAILS_LIVINGAREA","Living area");
DEFINE("_EZREALTY_DETAILS_BOND","Bond");
DEFINE("_EZREALTY_DETAILS_FRONTAGE","Frontage");
DEFINE("_EZREALTY_DETAILS_DEPTH","Depth");
DEFINE("_EZREALTY_SHOW_PRICE","Show price");
DEFINE("_EZREALTY_DETAILS_PRICEVIEW","Price view");
DEFINE("_EZREALTY_DETAILS_PRICEVIEW_DESC","If hiding your property price - write a special message - eg. 'suit buyers circ. 1M'.");

DEFINE("_EZREALTY_DETAILS_BUSINESS","Business info");
DEFINE("_EZREALTY_DETAILS_TAKINGS","Takings");
DEFINE("_EZREALTY_DETAILS_RETURNS","Returns");
DEFINE("_EZREALTY_DETAILS_NETPROFIT","Net profit");
DEFINE("_EZREALTY_DETAILS_BUSTYPE","Business type");
DEFINE("_EZREALTY_DETAILS_BUSSUBTYPE","Business specialty");

DEFINE("_EZREALTY_DETAILS_RURAL","Rural info");
DEFINE("_EZREALTY_DETAILS_FENCING","Fencing");
DEFINE("_EZREALTY_DETAILS_RAINFALL","Rainfall");
DEFINE("_EZREALTY_DETAILS_SOILTYPE","Soil type");
DEFINE("_EZREALTY_DETAILS_IRRIGATION","Irrigation");
DEFINE("_EZREALTY_DETAILS_CARRYINGCAP","Carrying capacity");
DEFINE("_EZREALTY_DETAILS_SERVICES","Services");

DEFINE("_EZREALTY_TYPE_AUCTION","For Auction");
DEFINE("_EZREALTY_DETAILS_MARKET0","Market Status");
DEFINE("_EZREALTY_DETAILS_MLSID","MLS ID Number");
DEFINE("_EZREALTY_DETAILS_MLSIDDESC","If you're a US agent, this is where you can list your MLS ID number for this property");

DEFINE("_EZREALTY_DETAILS_GRAZING","Grazing");
DEFINE("_EZREALTY_DETAILS_CROPPING","Cropping");
DEFINE("_EZREALTY_DETAILS_WATERRESOURCES","Water resources");
DEFINE("_EZREALTY_DETAILS_STORAGE","Storage");
DEFINE("_EZREALTY_DETAILS_GENERAL","General residential info");

DEFINE("_EZREALTY_PRUNE_DONE","Lightbox entries pruned");

DEFINE("_EZREALTY_NOALERT_SENT","Alert emails for pending listing deletions have not been sent, as your site is not using time-based expiration management.");

DEFINE("_EZREALTY_EXPIRY_WARNING","Pending listing expiry");
DEFINE("_EZREALTY_EXPIRY_MESSAGE","Your property listing on our site is due to expire soon, and we hope you've had a successful advertising campaign. Should you wish to extend your advertisement, please visit our site to renew your listing. You'll find us here:-");
DEFINE("_EZREALTY_EXPIRY_MESSAGE2","Log into the site and visit the member's control panel. From there you'll be able to renew your listing. Should you choose not to renew it - your listing will be deleted without further notice.");
DEFINE("_EZREALTY_ALERTMSG_PT1","E-mail sent to");
DEFINE("_EZREALTY_ALERTMSG_PT2","users");
DEFINE("_EZREALTY_CONFIG_BRAZILIAN","Brazilian");

DEFINE("_EZREALTY_HEADER_FEATURED","Featured");
DEFINE("_EZREALTY_FEATURED_PROPERTY_LIST","Our Featured Properties");

DEFINE("_EZREALTY_CONFIG_TOPMENU","Manage the Top EZ Realty Menu Links");
DEFINE("_EZREALTY_CONFIG_USEMENU","Use Top Menu Links");
DEFINE("_EZREALTY_CONFIG_USEMENU_DESC","Do you want to use the top EZ Realty menu links? Setting this to 'no' will completely hide the top menu link.");
DEFINE("_EZREALTY_CONFIG_USEFEAT","Use Featured Listings Link");
DEFINE("_EZREALTY_CONFIG_USEFEAT_DESC","Do you want to use the top featured listings link?");
DEFINE("_EZREALTY_CONFIG_AGLINK","Agent/Seller's Link");
DEFINE("_EZREALTY_CONFIG_AGLINK_DESC","Do you want to use the top agent/seller's link?");
DEFINE("_EZREALTY_CONFIG_SCHLINK","Use Search Filter Link");
DEFINE("_EZREALTY_CONFIG_SCHLINK_DESC","Do you want to use the top search filter link?");
DEFINE("_EZREALTY_CONFIG_MEMLINK","Use Members Link");
DEFINE("_EZREALTY_CONFIG_MEMLINK_DESC","Do you want to use the top link that goes into the member's listings management area?");

DEFINE("_EZREALTY_SEL_STATE","Select State");
DEFINE("_EZREALTY_SEL_LOCALITY","Select Locality");
DEFINE("_EZREALTY_CLICKOPEN","Click thumbnails to open");

DEFINE("_EZREALTY_LISTINGS_SUMMARY","Summary");
DEFINE("_EZREALTY_LISTINGS_EXPAND","click to expand");
DEFINE("_EZREALTY_LISTINGS_TECHNICAL","Technical Specifications");
DEFINE("_EZREALTY_LISTINGS_NOTECHSPECS","There are no technical specifications listed for this vehicle");
DEFINE("_EZREALTY_LISTINGS_CLICKOPEN","Click to open the full-size image");
DEFINE("_EZREALTY_LISTINGS_SPECS","Specifications");
DEFINE("_EZREALTY_LISTINGS_FEATS","Features");
DEFINE("_EZREALTY_TOOLS","Tools");
DEFINE("_EZREALTY_DET_ADDFEAT","Additional features");
DEFINE("_EZREALTY_DET_ADDNUM","Ad #");
DEFINE("_EZREALTY_DET_AGID","Agency reference #");
DEFINE("_EZREALTY_DET_MLSID","MLS ID");
DEFINE("_EZREALTY_DET_COUNTY","County/Municipality");

DEFINE("_EZREALTY_CONFIG_BACKBUT","Back button");
DEFINE("_EZREALTY_CONFIG_BACKBUTDESC","Do you want to display the back button on the footer of the page?");

DEFINE("_EZREALTY_TABS_SUMMARY","Summary");
DEFINE("_EZREALTY_TABS_DETAILS","Details");
DEFINE("_EZREALTY_TABS_FEATURES","Features");
DEFINE("_EZREALTY_TABS_DESCRIPTION","Description");

DEFINE("_EZREALTY_PROFILE_CONTACT","Contact seller");

DEFINE("_EZREALTY_LISTINGS_RENEW","Renew");
DEFINE("_EZREALTY_LISTING_UPGRADE","Upgrade");
DEFINE("_EZREALTY_LEADS_SUBMSG","A visitor to your site has just submitted details to your leads management system. Please login to check it out when you've got the time.");

DEFINE("_EZREALTY_LISTINGS_TIMEINTRO","Listings are discontinued after");
DEFINE("_EZREALTY_LISTINGS_TIME2","days, and you will have a further");
DEFINE("_EZREALTY_LISTINGS_TIME3","days during which you may renew your listing.");
DEFINE("_EZREALTY_LISTINGS_TIMEEXPL","If upgrading between listing levels/types - the expiry date will be reset.");

DEFINE("_EZREALTY_MSG","Message");
DEFINE("_EZREALTY_SITE_CONTACT","General contact enquiry via");

DEFINE("_EZREALTY_LISTER_AGENT","Agent");
DEFINE("_EZREALTY_LISTER_OWNER","Owner/Seller");
DEFINE("_EZREALTY_LISTER_BROKER","Broker");
DEFINE("_EZREALTY_LISTER_SELECTTYPE","Select seller type");

DEFINE("_EZREALTY_SEARCH_ANYMLS","Any MLS ID");

DEFINE("_EZREALTY_YOUVEGOT_LEADSMAIL","New Property Lead Submitted");

DEFINE("_EZREALTY_REDUNDANT","** This field is now redundant **");

DEFINE('_EZREALTY_NAV_LT','&lt;');
DEFINE('_EZREALTY_NAV_RT','&gt;');
DEFINE('_EZREALTY_NAV_PAGE','Page');
DEFINE('_EZREALTY_NAV_OF','of');
DEFINE('_EZREALTY_NAV_START','Start');
DEFINE('_EZREALTY_NAV_PREVIOUS','Prev');
DEFINE('_EZREALTY_NAV_NEXT','Next');
DEFINE('_EZREALTY_NAV_END','End');
DEFINE('_EZREALTY_NAV_RESULTS','Results');

DEFINE('_EZREALTY_TABS_ADDRESS','Address');
DEFINE('_EZREALTY_TABS_SPECS','Specifications');
DEFINE('_EZREALTY_TABS_MARKETING','Marketing');
DEFINE('_EZREALTY_TABS_ADMIN','Admin');
DEFINE('_EZREALTY_TABS_BUSINESS','Business');
DEFINE('_EZREALTY_TABS_PROFILES','Profiles');
DEFINE('_EZREALTY_TABS_SMS','SMS');
DEFINE('_EZREALTY_TABS_MAPPING','Mapping');
DEFINE('_EZREALTY_TABS_EXP','Expiration');
DEFINE('_EZREALTY_TABS_FORMATTING','Formatting');
DEFINE('_EZREALTY_TABS_SEARCH','Search');
DEFINE('_EZREALTY_TABS_LINKS','Links');
DEFINE('_EZREALTY_TABS_MEMBERS','Members');
DEFINE('_EZREALTY_TABS_PAYMENTS','Payments');

DEFINE('_EZREALTY_DETAILS_STOCK','Stock');
DEFINE('_EZREALTY_DETAILS_FIXTURES','Fixtures');
DEFINE('_EZREALTY_DETAILS_FITTINGS','Fittings');
DEFINE('_EZREALTY_DETAILS_SQUARES','Floor area');
DEFINE('_EZREALTY_DETAILS_POFFICE','Percent Office');
DEFINE('_EZREALTY_DETAILS_PWAREHOUSE','Percent Warehouse');
DEFINE('_EZREALTY_DETAILS_LOADING','Loading Facilities');
DEFINE('_EZREALTY_DETAILS_NOADFEAT','No additional features listed');
DEFINE('_EZREALTY_DETAILS_VIDEOTOUR','Video Tour');

DEFINE('_EZREALTY_MIGRATE_USERS','Migrate Users');

DEFINE('_EZREALTY_CONFIG_STATESLOCS','States and Localities');
DEFINE('_EZREALTY_CONFIG_LOCSONLY','Localities only');
DEFINE('_EZREALTY_CONFIG_NEITHER','Neither');
DEFINE('_EZREALTY_CONFIG_STATELOCTITLE','States and Localities');
DEFINE('_EZREALTY_CONFIG_STATELOCTITLE_DESC','Define how to enter states and localities info for your property addresses. Some very small places may not require either states or localities, some may require only localities, and country-wide listings may require both states and localities to be entered for property addresses.');
DEFINE('_EZREALTY_CONFIG_YOURVIDEOS','Your Video Settings');
DEFINE('_EZREALTY_CONFIG_FLV','Embed FLV Video Tour Files');
DEFINE('_EZREALTY_CONFIG_FLV_DESC','You can now allow externally hosted FLV files to be embedded in the page output for use as video tours, instead of linking to an external set of files such as virtual tours. FLV files are flash movies, which have a number of benefits over embedding other video formats.');
DEFINE('_EZREALTY_CONFIG_FLVWIDTH','Display Width');
DEFINE('_EZREALTY_CONFIG_FLVWIDTH_DESC','The display width of embedded FLV files. The width you define will depend on its position in the template, and your template width.');
DEFINE('_EZREALTY_CONFIG_FLVHEIGHT','Display Height');
DEFINE('_EZREALTY_CONFIG_FLVHEIGHT_DESC','The display height of embedded FLV files. This can be left the same as the display width.');
DEFINE('_EZREALTY_TABS_VIDEO','Video');
DEFINE('_EZREALTY_TABS_NOMAP','Sorry - there is no map available for this property');
DEFINE('_EZREALTY_TABS_NOVIDEO','Sorry - there is no video tour available for this property');

DEFINE('_EZREALTY_PROFILE_ERROR_TYPE','You must select a seller type.');
DEFINE('_EZREALTY_PROFILE_TYPE','Seller Type');
DEFINE('_EZREALTY_LISTINGS_ASC','Listings asc');
DEFINE('_EZREALTY_LISTINGS_DESC','Listings desc');

DEFINE('_EZREALTY_LISTINGS_FLVMODE','This site is configured to use embedded FLV files for video tours rather than external files. Please enter the URL to your FLV file if applicable.');
DEFINE('_EZREALTY_LOCALITY_DESC','Locality Description');
DEFINE('_EZREALTY_SOLD_ERROR','Error - you must define a market status for your property listing');

DEFINE("_EZREALTY_APF11","Pets allowed");
DEFINE("_EZREALTY_SEARCH_ANYMARKET","Any Market Status");

DEFINE("_EZREALTY_SCH_PETS","Use Pets Allowed");
DEFINE("_EZREALTY_SCH_PETSDESC","Do you want to use the 'pets allowed' yes/no select list on the search filter?");
DEFINE("_EZREALTY_SCH_LUG","Use Lock-up Garage");
DEFINE("_EZREALTY_SCH_LUGDESC","Do you want to use the 'lock-up garage' yes/no select list on the search filter?");



DEFINE("_EZREALTY_DETAILS_VIEWBOOKING","Use Bookings Link");
DEFINE("_EZREALTY_DETAILS_VIEWBOOKING_DESC","This site has integrated bookings functionality - do you want to use this to manage property bookings?");
DEFINE("_EZREALTY_LEADS_STATUS","Lead Status");
DEFINE("_EZREALTY_LEADS_REVIEW","Review requirements");
DEFINE("_EZREALTY_LEADS_CALL","Call lead");
DEFINE("_EZREALTY_LEADS_RECALL","Try calling again");
DEFINE("_EZREALTY_LEADS_DOEMAIL","Email lead");
DEFINE("_EZREALTY_LEADS_DOINSPECTION","Organize properties to view");
DEFINE("_EZREALTY_LEADS_NOINTEREST","No longer interested");
DEFINE("_EZREALTY_LEADS_CLOSED","Closed - no further interest");
DEFINE("_EZREALTY_LEADS_NOTES","Admin notes:-<br />This info is not visible on the frontend. It's to record your progress notes for reference purposes.");
DEFINE("_EZREALTY_LEADS_ADMIN","Administrative Processing Notations");
DEFINE("_EZREALTY_LEADS_LISTREQ","Register your Requirements");

DEFINE("_EZREALTY_MAPPING_INCOMPATIBLE","Sorry, the Google Maps API is not compatible with this browser");

DEFINE("_EZREALTY_CONFIG_OTHERLINKS","Cross-component Integration Links");
DEFINE("_EZREALTY_CONFIG_BOOKINGS","JomRes Bookings Integration");
DEFINE("_EZREALTY_CONFIG_BOOKINGS_DESC","Do you have the JomRes bookings component and syncbot installed to manage rental bookings?");
DEFINE("_EZREALTY_BOOKINGS","Bookings");

DEFINE("_EZREALTY_CHECK_PRUNE","You are about to prune the lightbox of favourite listings. Are you sure you want to do that?");
DEFINE("_EZREALTY_CHECK_ALERT","You are about to send out emails to all expired listings in the database. This may take a while if you have a lot. Are you sure you want to do that?");
DEFINE("_EZREALTY_CHECK_CLEAN","You are about to clean the database of old expired listings. You cannot undo this once they have been deleted. Are you sure you want to do that?");

DEFINE("_EZREALTY_CPANEL_FEEDS","Feeds");
DEFINE("_EZREALTY_SELECT_IMAGE","Select image");

DEFINE("_EZREALTY_PROFILE_LOGO","Agency Logo");
DEFINE("_EZREALTY_PROFILE_MAXSIZE","Maximum image size allowed is");
DEFINE("_EZREALTY_CONFIG_LOGOWIDTH","Logo Width");
DEFINE("_EZREALTY_CONFIG_LOGOHEIGHT","Logo Height");

DEFINE("_EZREALTY_CONFIG_LOGOWIDTHDESC","Maximum allowed width of the logo image associated with a seller. Keep in mind that this is the width that will be displayed on the front-end profile page and property listings pages. Images that exceed this width will be rejected during the upload process. A good width is 160 pixels.");
DEFINE("_EZREALTY_CONFIG_LOGOHEIGHTDESC","Maximum allowed height of the logo image associated with a seller. Keep in mind that this is the width that will be displayed on the front-end profile page and property listings pages. Images that exceed this height will be rejected during the upload process. A good height is 30 pixels.");

DEFINE("_EZREALTY_HELPER_PETS","Helper Animals");
DEFINE("_EZREALTY_NA","Not Applicable");

DEFINE("_EZREALTY_LISTINGS_PRESCHOOL","Closest Pre-school");
DEFINE("_EZREALTY_LISTINGS_PRIMARYSCHOOL","Closest Primary School");
DEFINE("_EZREALTY_LISTINGS_HIGHSCHOOL","Closest High School");
DEFINE("_EZREALTY_LISTINGS_UNIVERSITY","Closest College/University");

DEFINE("_EZREALTY_CONFIG_MAPTYPE","Select mapping service");
DEFINE("_EZREALTY_CONFIG_MAPTYPEDESC","Which mapping service do you want to use? If your Mambo template has lots of javascript, you may have to use the Yahoo mapping option here:- <a target='_blank' href='http://developer.yahoo.com/maps/'>http://developer.yahoo.com/maps/</a>.");
DEFINE("_EZREALTY_CONFIG_OSTATUS","Online status indicator");
DEFINE("_EZREALTY_CONFIG_OSTATUSDESC","Online status indicators for the IM systems come and go, and are occasionally offline - and have a range of different indicator buttons. Choose the 'Status Indicator Server' you want to use for your site.");
DEFINE("_EZREALTY_DRIVING_DIRECTIONS","CLICK HERE FOR DRIVING DIRECTIONS");

DEFINE("_EZREALTY_PROFILE_SHOWADDY","Display address");
DEFINE("_EZREALTY_PROFILE_SHOWADDYDESC","Do you want to display your address on your profile page? If set to no - neither your address or a map to your address will be displayed.");
DEFINE("_EZREALTY_CONFIG_CURRENCYCODE","Currency code");
DEFINE("_EZREALTY_CONFIG_CURRENCYCODEDESC","The 3-letter currency code of your property listings - eg. USD, AUD, GBP - the same way of defining currency codes for PayPal. This code is used for some external feeds for property listing sites.");
DEFINE("_EZREALTY_CONFIG_SHORTLIST","Short List");
DEFINE("_EZREALTY_CONFIG_SHORTLISTDESC","Do you want to use the 'short listing' feature? This does require registered members to be logged in to be able to use it, so if you don't provide this access - set this feature to 'NO'.");

DEFINE("_EZREALTY_LISTINGS_SCHOOLDIST","School district");
DEFINE("_EZREALTY_LISTINGS_HOFEES","Home Owner Assn. Fees");
DEFINE("_EZREALTY_APF12","Elevator");
DEFINE("_EZREALTY_SPECS","Quick Specs");
DEFINE("_EZREALTY_CLICK","click to expand");
DEFINE("_EZREALTY_OHOUSE","Openhouse");
DEFINE("_EZREALTY_DETAILS_MARKET6","Unavailable");
DEFINE("_EZREALTY_ADDOWNER_ERROR","Error - you must specify an agent/owner responsible for maintaining this listing");

DEFINE("_EZREALTY_CPANEL_FEEDSDESC","In addition to the RSS 2.0 feeds that have always been available, EZ Realty now has the ability to feed your property listings to a couple of large external property listing sites.<br /><br /><strong>These feeds are new features - and are still experimental - so if you encounter problems with them please submit a support ticket reporting any bugs.</strong>");
DEFINE("_EZREALTY_CPANEL_GOOGLE1","Your Google RSS 2.0 Feed");
DEFINE("_EZREALTY_CPANEL_GOOGLE2","Visit Google for more information");
DEFINE("_EZREALTY_CPANEL_EDGEIO1","Your Edgeio RSS 2.0 Feed");
DEFINE("_EZREALTY_CPANEL_EDGEIO2","Visit Edgeio for more information");
DEFINE("_EZREALTY_CPANEL_PROPSMART1","Your Propsmart RSS 2.0 Feed");
DEFINE("_EZREALTY_CPANEL_PROPSMART2","Visit PropSmart for more information");
DEFINE("_EZREALTY_MIGRATE_MEMBERS","Migrate users");

DEFINE("_EZREALTY_CPANEL_COUNTRIES","Manage Countries");
DEFINE("_EZREALTY_CPANEL_STATES","Manage States");
DEFINE("_EZREALTY_CPANEL_LOCALITIES","Manage Localities");
DEFINE("_EZREALTY_CPANEL_BEDROOMS","Manage Bedrooms");
DEFINE("_EZREALTY_CPANEL_PROPERTYMGR","Property Manager");

DEFINE("_EZREALTY_PRICE_DISPLAYVALUE","Display Value");
DEFINE("_EZREALTY_FILTER_MLS","-All MLS ID's-");
DEFINE("_EZREALTY_FILTER_AGENTS","-All Agent ID's-");









//****************************************************//
//  EXISTING LANGUAGE TAGS THAT HAVE HAD THEIR CONTENT CHANGED FOR THE 5.0.0 RELEASE
//****************************************************//


DEFINE("_EZREALTY_CONFIG_USEMAP","Use Mapping");
DEFINE("_EZREALTY_CONFIG_USEMAPDESC","Do you want to use one of the mapping services? If wanting to use it - make sure you read their Terms of Use here:- <a target='_blank' href='http://www.google.com/apis/maps/terms.html'>http://www.google.com/apis/maps/terms.html</a> - alternatively - check the Yahoo mapping site for their TOS");
DEFINE("_EZREALTY_CONFIG_MAPAPI","Mapping API Number");
DEFINE("_EZREALTY_CONFIG_MAPAPIDESC","You MUST apply for a Mapping service API number for your site, then add it here if using the mapping. You can apply for an API number here:- <a target='_blank' href='http://www.google.com/apis/maps/'>http://www.google.com/apis/maps/</a> - or go to the Yahoo mapping site to get one of their mapping API's. Yahoo mapping API's can be obtained here:- <a target='_blank' href='http://developer.yahoo.com/maps/'>http://developer.yahoo.com/maps/</a>");
DEFINE("_EZREALTY_CONFIG_OP2","Define the notifications that you want");

DEFINE("_EZREALTY_DETAILS_PROPPRICEDESC","<font color='#FF0000'>This database field has an input mask. Enter figures in this format - 10000.00 - do not use commas!</font>");

DEFINE("_EZREALTY_CONFIG_ARRVIEW","Email Seller Link");
DEFINE("_EZREALTY_CONFIG_ARRVIEWDESC","Do you want to show the \"email seller\" contact link on the full property details page?");
DEFINE("_EZREALTY_DETAILS_PROPADDRESS2","Street Name");
DEFINE("_EZREALTY_CONFIG_TITLE","Configuration");
DEFINE("_EZREALTY_CONFIG_COUNTRYDESC","If you do not want to use countries in your real estate listings and the leads registration form, set this to 'NO' to hide this variable.");
DEFINE("_EZREALTY_CLEANDB_SUCCESS","The database has been cleaned of listings that exceed the allowed number of impressions/days");
DEFINE("_EZREALTY_CLEANDB_FAIL","The database has not been cleaned as your site is not running with expiry management turned on");

DEFINE("_EZREALTY_PRICES_TITLE","Manage Property Price Ranges");
DEFINE("_EZREALTY_MODPRICES_TITLE","Property Price Range");
DEFINE("_EZREALTY_PRICES_RANGE","Property Price Range");
DEFINE("_EZREALTY_MODPRICES_RANGE","Define price range");
DEFINE("_EZREALTY_MODPRICES_SAVED","Property Price Range Saved");
DEFINE("_EZREALTY_MODPRICES_ERROR1","You must enter a price range");
DEFINE("_EZREALTY_PRICES_EDITTAG","Edit Price Range");





//****************************************************//
//  EXISTING LANGUAGE TAGS THAT WILL BE REMOVED       //
//****************************************************//

DEFINE("_EZREALTY_CONFIG_CPITITLE","Custom Property Information");
DEFINE("_EZREALTY_CONFIG_CPIDESC","The 3 custom features allow you to define special information of relevance to your listings - eg. annual heating costs, annual rates/taxes etc. These names will appear in the add/edit listings page where you can then assign values applicable to the property, as well as on the front-end.");

DEFINE("_EZREALTY_CONFIG_APFTITLE","Additional Property Features");
DEFINE("_EZREALTY_CONFIG_APFDESC","The 10 additional property features appear as yes/no selection boxes in the add/edit property information area.  On the front-end these names appear as a bulleted list. You're able to define the names of these features so that they're relevant to your geographical area - but remember - once defined you should not change them as this may affect the accuracy of property information.");
DEFINE("_EZREALTY_CONFIG_FEATURETITLE","Special Feature Box");
DEFINE("_EZREALTY_CONFIG_FEATURETITLEDESC","What would you like to call the special feature for your property listings? (eg. Community Highlights etc). This forms the box title on the full property description page.");
DEFINE("_EZREALTY_CONFIG_STATES","Use States");
DEFINE("_EZREALTY_CONFIG_STATESDESC","If you sell real estate in a region that does not require states like the larger countries, set this to 'NO' to hide this variable.");





//****************************************************//
//  TAGS FROM THE CONFIGURATION AREA THAT ARE NEEDED  //
//****************************************************//



DEFINE("_EZREALTY_SPECIAL_FEATURE","Community Features");

DEFINE("_EZREALTY_CONFIG_CPI1","Custom 1");
DEFINE("_EZREALTY_CONFIG_CPI2","Custom 2");
DEFINE("_EZREALTY_CONFIG_CPI3","Custom 3");

DEFINE("_EZREALTY_APF1","Pool");
DEFINE("_EZREALTY_APF2","Fireplace");
DEFINE("_EZREALTY_APF3","BBQ area");
DEFINE("_EZREALTY_APF4","Gazebo");
DEFINE("_EZREALTY_APF5","Lock up garage");
DEFINE("_EZREALTY_APF6","Built in Robes");
DEFINE("_EZREALTY_APF7","Central heating");
DEFINE("_EZREALTY_APF8","Air conditioning");
DEFINE("_EZREALTY_APF9","Close to shops");
DEFINE("_EZREALTY_APF10","Close to schools");


DEFINE("_EZREALTY_PREMIUM","Premium");
DEFINE("_EZREALTY_FEATURED","Featured");





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