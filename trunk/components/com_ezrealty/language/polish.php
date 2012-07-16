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
    **   Polish language
	**	 Encoding: ISO-8859-2
    **   By: Grzegorz Grajewski (aka el Donut)
    **   http://www.webarcane.com
    **  
    \*****************************************/


defined( '_VALID_MOS' ) or die( 'Bezpo¶redni dostêp to tegj lokalizacji jest zabroniony!' );

// admin.ezrealty.php file language tags

DEFINE("_EZREALTY_NOREMOVE","Nie mo¿na tego usun±æ w tym momencie, mechanizmy dalej uzywaj± tych wpisów (mo¿e s± teraz uaktualniane).");
DEFINE("_EZREALTY_CLEAN","Usuñ przeterminowane wpisy.");

//  Ustawienia komponentu 

DEFINE("_EZREALTY_CONFIG_GENSET","Ustawienia ¶cie¿ki zapisu obrazków/zdjêæ");

DEFINE("_EZREALTY_CONFIG_IMAGESIZES","Miniarurki i rozmiar zdjêæ");
DEFINE("_EZREALTY_CONFIG_WIDTHPROPIMG","Szeroko¶æ g³ównego zdjêcia");
DEFINE("_EZREALTY_CONFIG_WIDTHPROPIMGDESC","Szeroko¶æ g³ównej nieruchomo¶ci i rzutu piêter widocznych na stronie ze szczegó³ami oferty. Jest to wyra¿one w piskelach zeby u³atwiæ dopasowanie zdjeæ do twojej szaty graficznej. Zdjêcia bêd± zmniejszane do tej szeroko¶ci.");
DEFINE("_EZREALTY_CONFIG_WIDTHCATTHUMB","Szeroko¶æ miniarutki wystêpuj±cej przy nazwie kategorii");
DEFINE("_EZREALTY_CONFIG_WIDTHCATTHUMBDESC","Szeroko¶æ zdjêæ wykorzystuje kategorie obrazków.");
DEFINE("_EZREALTY_CONFIG_WIDTHTHUMB","Maksymalna szeroko¶æ miniaturki");
DEFINE("_EZREALTY_CONFIG_WIDTHTHUMBDESC","Szeroko¶æ miniaturek oferty utworzona, takie wymiary bêd± wykorzystywane we front-endzie");

DEFINE("_EZREALTY_CONFIG_TNCREATOR","Kreator miniaturek");
DEFINE("_EZREALTY_CONFIG_GDLIMIT","Mechanizm GD wspiera tylko jpg i png!");
DEFINE("_EZREALTY_CONFIG_GDFOUND","Znaleziono GD");
DEFINE("_EZREALTY_CONFIG_GDCHOOSE","Wybierz mechnaizm tworzenia miniatur.");
DEFINE("_EZREALTY_CONFIG_THUMBQUAL","Jako¶æ miniatur");
DEFINE("_EZREALTY_CONFIG_THUMBQUALDESC","Jako¶æ miniaturek ustawiona.");
DEFINE("_EZREALTY_CONFIG_IMGDIR","Katalog ze zdjêciami");
DEFINE("_EZREALTY_CONFIG_IMGDIRDESC","Domy¶lny katalog ze zdjeciami nazywa siê 'ezrealty' i zlokalizowany jest wewn±trz katalogu z komponentem ( components/com_ezrealty/ezrealty ). Miniaturki s± przechowywane w katalogu 'th'. Je¶li zmienisz nazwê lub ¶cie¿kê katalogu, bêdziesz musia³/a  stworzyæ te nowe katalogi rêcznie. NIE ZMIENIAJ nazwy katalugu miniaturek 'th'!");
DEFINE("_EZREALTY_CONFIG_TNNONE","¯aden");
DEFINE("_EZREALTY_CONFIG_TNGD1","Biblioteka GD ");
DEFINE("_EZREALTY_CONFIG_TNGD2","Biblioteka GD2");

DEFINE("_EZREALTY_CONFIG_YOURBIZSET","Ustawienia dotycz±ce twojej firmy");
DEFINE("_EZREALTY_CONFIG_BIZNAME","Nazwa firmy");
DEFINE("_EZREALTY_CONFIG_BIZNAMEDESC","Nazwa twojego biura nieruchomo¶ci widoczna jako nag³ówek komponentu oraz na stronie drukowania i emaili polecaj±cych.");
DEFINE("_EZREALTY_CONFIG_BIZAD","Siedziba firmy");
DEFINE("_EZREALTY_CONFIG_BIZADDESC","Adres biura nieruchomo¶ci. Ten adres jest widoczny w nag³ówku wydruku, aby przyszli klienci wiedzieli, ze dane og³oszenie pochodzi w³a¶nie od Ciebie.");
DEFINE("_EZREALTY_CONFIG_TELEPHONE","Telefon kontaktowy");
DEFINE("_EZREALTY_CONFIG_TELEPHONEDESC","Numer telefonu kontaktowego widoczny tak¿e na stronie wydruku.");
DEFINE("_EZREALTY_CONFIG_EMAIL","Adres email");
DEFINE("_EZREALTY_CONFIG_EMAILDESC","Adres email wy¶wietlany przy ofercie, w listach mailingowych i zapytaniach ofertowych");
DEFINE("_EZREALTY_CONFIG_CURRENCYSIGN","Symbol waluty");
DEFINE("_EZREALTY_CONFIG_CURRENCYSIGNDESC","Symbol waluty wy¶wietlany przed cen± oferty");
DEFINE("_EZREALTY_CONFIG_BIZINTRO","Wprowadzenie o firmie");
DEFINE("_EZREALTY_CONFIG_BIZINTRODESC","Tekst wprowadzaj±cy o <br />twoim biurze nieruchomo¶ci");

DEFINE("_EZREALTY_CONFIG_LAYOUTSETTINGS","Zarz±dzaj wygl±dem front-endu swojej strony ");

DEFINE("_EZREALTY_CONFIG_TPL","Szata graficzna front-endu");
DEFINE("_EZREALTY_CONFIG_TPLDESC","Wybierz szablon, który chcesz przypisac jako domy¶lny. Wp³ynie to na wygl±d szczegó³ów oferty i strony wydruku.");
DEFINE("_EZREALTY_CONFIG_SELTPL","Wybierz szatê graficzna");

DEFINE("_EZREALTY_CONFIG_PROPPERPAGE","Ofert na stronie");
DEFINE("_EZREALTY_CONFIG_PROPPERPAGEDESC","Liczba ofert nieruchomo¶ci pokazywanych na stronie (front-end)");
DEFINE("_EZREALTY_CONFIG_FEATURETITLE","Miejsce na cechy szczególne");
DEFINE("_EZREALTY_CONFIG_FEATURETITLEDESC","Jak by¶ chcia³/a nazwaæ specjalne cechy twoich nieruchomo¶ci? To wyra¿enie tworzy tytu³ w szczegó³owym widoku og³oszenia.");
DEFINE("_EZREALTY_CONFIG_RECFRIEND","Przeka¿ znajomemu link do tej oferty");
DEFINE("_EZREALTY_CONFIG_RECFRIENDDESC","Czy chcesz zezwoliæ odwiedzaj±cym u¿ywaæ funkcji \"poleæ znajomemu\"?");
DEFINE("_EZREALTY_CONFIG_MAILINGVIEW","Link - Zapisz siê do listy mailingowej");
DEFINE("_EZREALTY_CONFIG_MAILINGDESC","Czy checsz, aby by³a widoczna funkcja \"dodaj do listy mailingowej\"? Zezwoli to odwiedzaj±cym na wys³anie do Ciebie emaila aby¶ móg³/mog³a dodaæ zawarte w nim dane do swojej listy mailingowej.");
DEFINE("_EZREALTY_CONFIG_SHOWLINKS","Poka¿ przestrzeñ z linkami");
DEFINE("_EZREALTY_CONFIG_SHOWLINKSDESC","Czy chesz pokazaæ obszar z linkami (zawiera on naprzyklad link do mapy, link do strony wydruku, dodanie do ulubionych etc)?");
DEFINE("_EZREALTY_CONFIG_SC","Województwo/Kraj");
DEFINE("_EZREALTY_CONFIG_SCDESC","Czy chcesz zawrzeæ listy wyboru kraju i województw w zaawansowanej wyszukiwarce ofert?");

DEFINE("_EZREALTY_CONFIG_RSS","Kana³ wiadomo¶ci RSS ");
DEFINE("_EZREALTY_CONFIG_RSSDESC","Czy chcesz pokazaæ link kana³u RSS do najnowszych ofert nieruchomo¶ci i informacji o dniach otwartych?");
DEFINE("_EZREALTY_CONFIG_RSSNN","Nazwa kana³u RSS z nowymi ofertami");
DEFINE("_EZREALTY_CONFIG_RSSNNDESC","Jak chcesz nazwaæ kana³ RSS z nowymi ofertami?");
DEFINE("_EZREALTY_CONFIG_RSSOH","Nazwa kana³u RSS dla ofert typu Otwarty Dom ");
DEFINE("_EZREALTY_CONFIG_RSSOHDESC","Jak chcia³by¶/chcia³aby¶ nazwaæ kana³ RSS dla ofert typu Otwarty Dom?");

DEFINE("_EZREALTY_CONFIG_LEAD","Wiod±ca oferta");
DEFINE("_EZREALTY_CONFIG_LEADDESC","Czy chcia³by¶/chcia³aby¶ zezwoliæ odwiedzaj±cym rejestrowaæ ich wymagania wobec nieruchomo¶ci, których szukaj±?");

DEFINE("_EZREALTY_CONFIG_MEMSALES","Zarz±dzaj Front-endowym wy¶wietlaniem nieruchomo¶ci widocznym przez zarejestrowanych u¿ytkowników");
DEFINE("_EZREALTY_CONFIG_MEMLISTINGS","Lista u¿ytkowników");
DEFINE("_EZREALTY_CONFIG_MEMLISTINGSDESC","Czy chcesz zezwoliæ zarejestrowanym u¿ytkownikom wy¶wietlaæ nieruchomo¶ci do sprzeda¿y za po¶rednictwem panelu front-endowego?");
DEFINE("_EZREALTY_CONFIG_NOTIFICATION","Powiadomienie o wy¶wietleniu");
DEFINE("_EZREALTY_CONFIG_NOTIFICATIONDESC","Czy chesz byæ powiadamiany/a o nowych lub uaktualnionych ofertach?");
DEFINE("_EZREALTY_CONFIG_MEMAPPROVAL","Proces zatwierdzania w toku");
DEFINE("_EZREALTY_CONFIG_MEMAPPROVALDESC","Czy oferty nowe i uaktualnione wymagaj± zgody administratora na publikacjê?");
DEFINE("_EZREALTY_CONFIG_NUMLISTINGS","Liczba ofert");
DEFINE("_EZREALTY_CONFIG_NUMLISTINGSDESC","Okre¶l jak± liczbê ofert u¿ytkownik mo¿e posiadaæ?");

DEFINE("_EZREALTY_CONFIG_MEMBERSINTRO","Wprowadzenie do strefy u¿ytkowników");
DEFINE("_EZREALTY_CONFIG_MEMBERSINTRODESC","Wpisz tu swój tekst wprowadzaj±cy - na przyk³ad 'Warunki zg³aszania ofert' etc.");
DEFINE("_EZREALTY_CONFIG_TERMS","Warunki zg³aszania ofert");
DEFINE("_EZREALTY_CONFIG_TERMSDESC","Naszkicuj warunki zg³aszania ofert w twoim serwisie");

DEFINE("_EZREALTY_CONFIG_IMG1","Zdjêcia");
DEFINE("_EZREALTY_CONFIG_IMG2","Ustawienie Zdjêæ");
DEFINE("_EZREALTY_CONFIG_BIZ1","Firma");
DEFINE("_EZREALTY_CONFIG_BIZ2","Ustawienia firmy");
DEFINE("_EZREALTY_CONFIG_LAY1","Wygl±d");
DEFINE("_EZREALTY_CONFIG_LAY2","Wygl±d strony");
DEFINE("_EZREALTY_CONFIG_MEM1","U¿ytkownicy");
DEFINE("_EZREALTY_CONFIG_MEM2","Oferty u¿ytkowników");
DEFINE("_EZREALTY_CONFIG_PAID1","P³atne og³oszenia");
DEFINE("_EZREALTY_CONFIG_CUST1","Dodatki");

DEFINE("_EZREALTY_CONFIG_CPITITLE","Dodatkowe informacje o nieruchomo¶ci");
DEFINE("_EZREALTY_CONFIG_CPI1","Dodatek 1");
DEFINE("_EZREALTY_CONFIG_CPI2","Dodatek 2");
DEFINE("_EZREALTY_CONFIG_CPI3","Dodatek 3");
DEFINE("_EZREALTY_CONFIG_CPIDESC","3 dodatkowe cechy pozwol± ci na zdefiniowanie specjalnych informacji odnosz±cych siê do twojej oferty - np roczny koszt ogrzewania. Te nazwy pojawia siê na stronie w polu dodaj/edytuj, gdzie bêdzie mo¿na wprowadziæ warto¶ci maj±ce zastosowanie dla tej nieruchomo¶ci.");

DEFINE("_EZREALTY_CONFIG_APFTITLE","Dodatkowe cechy nieruchomo¶ci");
DEFINE("_EZREALTY_CONFIG_APFDESC","Dziesiêæ dodatkowych cech nieruchomo¶ci wy¶wietlone zostanie jako lista wyboru tak/nie na stronie dodaj/edytuj informacje o nieruchomo¶ci. We front-endzie widoczne bêd± jako wypunktowana lista. Mo¿na zdefiniowaæ nazwy cech aby by³y zgodne z geograficznym nazewnictwem w twoim rejonie. Ustal nazwy przemy¶lanie aby nie by³o niespodzianek w wynikach wyszukiwania.");
DEFINE("_EZREALTY_CONFIG_APF1","Cecha 1");
DEFINE("_EZREALTY_CONFIG_APF2","Cecha 2");
DEFINE("_EZREALTY_CONFIG_APF3","Cecha 3");
DEFINE("_EZREALTY_CONFIG_APF4","Cecha 4");
DEFINE("_EZREALTY_CONFIG_APF5","Cecha 5");
DEFINE("_EZREALTY_CONFIG_APF6","Cecha 6");
DEFINE("_EZREALTY_CONFIG_APF7","Cecha 7");
DEFINE("_EZREALTY_CONFIG_APF8","Cecha 8");
DEFINE("_EZREALTY_CONFIG_APF9","Cecha 9");
DEFINE("_EZREALTY_CONFIG_APF10","Cecha 10");

DEFINE("_EZREALTY_CONFIG_PP","Ustawienia twojego konta PayPal dla p³atnych ofert");

DEFINE("_EZREALTY_CONFIG_PAIDLISTINGS","P³atne oferty");
DEFINE("_EZREALTY_CONFIG_PAIDLISTINGSDESC","Czy zamierzasz oferowaæ p³atne oferty na swojej stronie? P³atne og³oszenia pozwol± na zawarcie dodatkowych zdjêæ i informacji o nieruchomo¶ci.");
DEFINE("_EZREALTY_CONFIG_PPEMAIL","Adres email w systemie PayPal");
DEFINE("_EZREALTY_CONFIG_PPEMAILDESC","To musi byæ twój G£ÓWNY adres email w serwisie PAYPAL. <br /><br /> Odwied¼ 
<a target='_blank' href='http://paypaltech.com/Stephen/affiliate/hemail.htm'>PayPal Dokumentacja techniczna</a>. 
Dla prostych metod kodowania twojego adresu email w serwisie PAYPAL by uchroniæ go przed robotami spamerów, skopiuj/wklej kod i miejsce adresu PAYPAL email powy¿ej. 
Nie u¿ywaj zakodowanego emaila dla funkcji sprawdzaj±cej pocztê - ten adres musi byæ wprowadzony normalnie.");
DEFINE("_EZREALTY_CONFIG_CHECKMAIL","Sprawd¼ pocztê");
DEFINE("_EZREALTY_CONFIG_CHECKMAILDESC","Powtórz swój g³ówny adres email w serwisie PAYPAL. Jest on wykorzystywany do sprawdzenia interakcji. Ten adres musi byæ podany w formacie zakodowanym!!");
DEFINE("_EZREALTY_CONFIG_PPCURRENCY","Kod waluty");
DEFINE("_EZREALTY_CONFIG_PPCURRENCYDESC","To musi byæ 3 literowy symbol waluty w serwisie PAYPAL.");
DEFINE("_EZREALTY_CONFIG_PPBUTTON","Obrazek przycisków");
DEFINE("_EZREALTY_CONFIG_PPBUTTONDESC","Nazwa obrazka przycisku, który wykorzystany jest przy aktualizacji og³oszeñ we front-endzie. Obrazek musi znajdowaæ siê w g³ównym folderze z obrazkami.");


DEFINE("_EZREALTY_CONFIG_PPPREMIUM","Standardowa nazwa aktualizacji");
DEFINE("_EZREALTY_CONFIG_PPPREMIUMDESC","Jak chcesz nazwaæ aktualizacje ofert -np. Oferty Premium etc. Ta nazwa poka¿e siê jako nazwa na przycisku z kodem do transakcji PAYPAL.");
DEFINE("_EZREALTY_CONFIG_PPCOST","Koszt standardowej aktualizacji");
DEFINE("_EZREALTY_CONFIG_PPCOSTDESC","Koszty aktualizacji darmowej oferty do p³atnej.");
DEFINE("_EZREALTY_CONFIG_FPNAME","Nazwa aktualizacji do uwydatnionej oferty");
DEFINE("_EZREALTY_CONFIG_FPNAMEDESC","Jak chcesz nazwaæ aktualizacjê do uwydatnionej oferty- np. OFERTA SPECJALNA! Ta nazwa poka¿e siê jako nazwa na przycisku z kodem do transakcji PAYPAL.");
DEFINE("_EZREALTY_CONFIG_FPCOST","Koszt aktualizacji do uwydatnionej oferty");
DEFINE("_EZREALTY_CONFIG_FPCOSTDESC","Koszt aktualizacji p³atnej oferty do uwydatnionej. Pamiêtaj u¿ytkownicy musz± najpierw aktualizaowaæ do p³atnej oferty a nastêpnie mog± j± uwydatniæ w naszym serwisie.");

DEFINE("_EZREALTY_CONFIG_PPPOSTMODE","Tryb pocztowy");
DEFINE("_EZREALTY_CONFIG_PPPOSTMODEDESC","Ustaw na 'Sprzeda¿ ONLINE' by sprzedaæ nieruchomo¶æ przez system PAYPAL, lub przetestowaæ instalacjê korzystaj±c z 'Test sprzeda¿y ONLINE'.");
DEFINE("_EZREALTY_CONFIG_LS","Sprzeda¿ ONLINE");
DEFINE("_EZREALTY_CONFIG_TS","Test sprzeda¿y ONLINE");

DEFINE("_EZREALTY_CONFIG_SUCCESS","Strona finalizacji transakcji");
DEFINE("_EZREALTY_CONFIG_SUCCESSDESC","Wprowad¼ tekst informuj±cy o finalizacji transakcji przez system PAYPAL.");
DEFINE("_EZREALTY_CONFIG_CANCEL","Strona anulowania transakcji");
DEFINE("_EZREALTY_CONFIG_CANCELDESC","Wprowad¼ tekst informuj±cy o anulowaniu/odrzuceniu transakcji w systemie PAYPAL.");

DEFINE("_EZREALTY_CONFIG_YES","Tak");
DEFINE("_EZREALTY_CONFIG_NO","Nie");

DEFINE("_EZREALTY_CONFIG_CONFIGSAVED","Ustawienia zosta³y zapisane");

// Rózne tagi jêzykowe obszaru administracyjnego - komunikaty b³edów i rozwijane menu 

DEFINE("_EZREALTY_ADMIN_BACK","Kliknij aby powróciæ do centrum zarz±dzania nieruchomo¶ciami.");
DEFINE("_EZREALTY_ADMIN_SOURCEERROR","B£¡D: pliku nie znaleziono!");

// admin.ezrealty.html.php tagi jêzykowe

// Zarzadzaj wyswietlaniem nieruchomosci

DEFINE("_EZREALTY_LISTINGS_TITLE","Zarz±dzaj wy¶wietlaniem nieruchomo¶ci");
DEFINE("_EZREALTY_LISTINGS_DISPLAYNUM","Wy¶wietl #");
DEFINE("_EZREALTY_LISTINGS_SEARCHPROP","Szukaj");
DEFINE("_EZREALTY_LISTINGS_FILTER","Filtruj:-");
DEFINE("_EZREALTY_LISTINGS_SORTLOCALL","-Wszystkie lokalizacje-");
DEFINE("_EZREALTY_LISTINGS_SORTTYPEALL","-Wszystkie typy nieruchomo¶ci-");
DEFINE("_EZREALTY_LISTINGS_SORTPRICEALL","-Pe³en zakres cenowy-");
DEFINE("_EZREALTY_LISTINGS_PROPID","Numer agenta #");
DEFINE("_EZREALTY_LISTINGS_PROPNAME","Adres");
DEFINE("_EZREALTY_LISTINGS_PROPCAT","Typ nieruchomo¶ci");
DEFINE("_EZREALTY_LISTINGS_PROPPRICE","Wy¶wietlone ceny");
DEFINE("_EZREALTY_LISTINGS_PROPHITS","Wej¶æ");
DEFINE("_EZREALTY_LISTINGS_PUBSTATUS","Opublikowano");
DEFINE("_EZREALTY_LISTINGS_MARKETSTATUS","Sprzedane?");
DEFINE("_EZREALTY_LISTINGS_APPROVEDSTATUS","Zatwierdzono");
DEFINE("_EZREALTY_LISTINGS_LTYPE","Typ");
DEFINE("_EZREALTY_LISTINGS_AGENT","Agent");
DEFINE("_EZREALTY_LISTINGS_LISTINGDATE","Poka¿ datami");
DEFINE("_EZREALTY_LISTINGS_UPDATE","Ostatnia aktualizacja");
DEFINE("_EZREALTY_LISTINGS_EDIT","Edytuj Nieruchomo¶æ");
DEFINE("_EZREALTY_LISTINGS_APPROVED","Zatwierdzono");
DEFINE("_EZREALTY_LISTINGS_SELLER","Sprzedawca");

// Dodaj/edytuj szczegó³y dotycz±ce nieruchomo¶ci widoczne na stronie

DEFINE("_EZREALTY_LISTINGS_SELLER_EXPL","<strong><font color='#FF0000'>Czytaj TO!</font></strong><br /><br />Szczegó³y sprzedawcy s± wykorzystane na stronie z ofert±, by umo¿liwiæ szukaj±cym nieruchomo¶ci na
bezpo¶redni kontakt z biurem lub agentem, w celu zdobycia wiêkszej ilo¶ci informacji oraz ustalenia terminu wizyty. Je¶li zezwolisz u¿ytkownikom
zg³aszaæ oferty do sprzeda¿y, informacja ta jest wymagana. Je¶li chcesz aby przegl±daj±cy stronê potencjalni kupcy kontaktowali siê
bezpo¶rednio z w³a¶cicielem nieruchomo¶ci - zostaw pole puste.");


DEFINE("_EZREALTY_DETAILS_REQ","*Wymagane");
DEFINE("_EZREALTY_DETAILS_OPT","*Opcjonalne");
DEFINE("_EZREALTY_DETAILS_TITLE","Oferta nieruchomo¶ci");
DEFINE("_EZREALTY_DETAILS_MARKET","Status oferty");
DEFINE("_EZREALTY_DETAILS_SOLDDESC"," - Ten parametr umo¿liwia ustalenie statusu oferty - domy¶lna warto¶æ to 'niesprzedane'.");
DEFINE("_EZREALTY_DETAILS_SELMARKET","Wybierz status oferty");
DEFINE("_EZREALTY_DETAILS_SELLOC","Wybierz lokalizacjê");
DEFINE("_EZREALTY_DETAILS_SELSTATE","Wybierz województwo");
DEFINE("_EZREALTY_DETAILS_SELCOUNTRY","Wybierz kraj");
DEFINE("_EZREALTY_DETAILS_SELCAT","Wybierz kategorie nieruchomo¶ci");
DEFINE("_EZREALTY_DETAILS_SELPRICE","Wybierz zakres cenowy");
DEFINE("_EZREALTY_DETAILS_SELROOM","Nieruchomo¶æ nie posiada sypialni");
DEFINE("_EZREALTY_DETAILS_LISTDATE","Data og³oszenia");
DEFINE("_EZREALTY_DETAILS_LISTDATEDESC","Data zg³oszenia oferty do sprzeda¿y.");
DEFINE("_EZREALTY_DETAILS_AGENTID","Unikatowy numer identyfikacyjny Agenta");
DEFINE("_EZREALTY_DETAILS_AGENTIDDESC","Wype³nij to pole jesli posiadasz unikatowy numer agenta.");
DEFINE("_EZREALTY_DETAILS_PROPADDRESS1","Adres 1");
DEFINE("_EZREALTY_DETAILS_PROPCITY","Miasto/Miejscowo¶æ/Dzielnica");
DEFINE("_EZREALTY_DETAILS_AREA","Województwo/region");
DEFINE("_EZREALTY_DETAILS_COUNTRY","Kraj");
DEFINE("_EZREALTY_DETAILS_PROPPOSTCODE","Kod pocztowy");
DEFINE("_EZREALTY_DETAILS_PROPTYPE","Typ nieruchomo¶ci");
DEFINE("_EZREALTY_DETAILS_ADLINE","Krótkie chwytliwe has³o");
DEFINE("_EZREALTY_DETAILS_PROPDESC","Pe³ny opis nieruchomo¶ci");
DEFINE("_EZREALTY_DETAILS_SHORTDESC","Skrócony opis:<br />(maksymalnie 255 znaków)");
DEFINE("_EZREALTY_DETAILS_PROPPRICE","Cena nieruchomo¶ci");
DEFINE("_EZREALTY_DETAILS_LANDTYPE","Aktywa ziemskie typ/obszar");
DEFINE("_EZREALTY_DETAILS_LANDTYPEDESC","np. prawo w³asno¶ci, dzier¿awa, 100 akrów etc.");
DEFINE("_EZREALTY_DETAILS_BEDROOMS","Sypialnie");
DEFINE("_EZREALTY_DETAILS_BEDROOMSDESC","liczba sypialni wewn±trz nieruchomo¶ci");
DEFINE("_EZREALTY_DETAILS_BATHROOMS","£azienki");
DEFINE("_EZREALTY_DETAILS_BATHROOMSDESC","liczba ³azienek wewn±trz nieruchomo¶ci");
DEFINE("_EZREALTY_DETAILS_PARKING","Parking");
DEFINE("_EZREALTY_DETAILS_PARKINGDESC","liczba miejsc parkingowych");
DEFINE("_EZREALTY_DETAILS_MAPREF","Link do mapy");
DEFINE("_EZREALTY_DETAILS_MAPREFDESC","Adres strony do mapki je¶li wykorzystana jest ta opcja. <br />Darmowy system geolokalizacji mo¿na znale¼æ na multimap.com");
DEFINE("_EZREALTY_DETAILS_VTOUR","Wirtualna wycieczka - Link");
DEFINE("_EZREALTY_DETAILS_VTOURDESC","Adres strony do wirtualnej wycieczki po nieruchomosci jesli wykorzystana.<br /> Ten link otworzy nowe okienko.");
DEFINE("_EZREALTY_DETAILS_SAVED","Zapisano szczegó³y oferty");

DEFINE("_EZREALTY_VLDET_IMAGE1","Zdjêcie1");
DEFINE("_EZREALTY_VLDET_IMAGE2","Zdjêcie2");
DEFINE("_EZREALTY_VLDET_IMAGE3","Zdjêcie3");
DEFINE("_EZREALTY_VLDET_IMAGE4","Zdjêcie4");
DEFINE("_EZREALTY_VLDET_IMAGE5","Zdjêcie5");
DEFINE("_EZREALTY_VLDET_IMAGE6","Zdjêcie6");
DEFINE("_EZREALTY_VLDET_IMAGE7","Zdjêcie7");
DEFINE("_EZREALTY_VLDET_IMAGE8","Zdjêcie8");
DEFINE("_EZREALTY_VLDET_IMAGE9","Zdjêcie9");
DEFINE("_EZREALTY_VLDET_IMAGE10","Zdjêcie10");
DEFINE("_EZREALTY_VLDET_IMAGE11","Zdjêcie11");
DEFINE("_EZREALTY_VLDET_IMAGE12","Zdjêcie12");

DEFINE("_EZREALTY_VLDET_CURRENTIMG","Aktualne zdjêcie");
DEFINE("_EZREALTY_VLDET_CHOOSENEW","Wybierz nowe zdjêcie");
DEFINE("_EZREALTY_VLDET_UPLOADNEW","Wgraj nowe zdjêcie");
DEFINE("_EZREALTY_VLDET_DELETEIMG","Skasuj zdjêcie");
DEFINE("_EZREALTY_VLDET_DELETE","Skasuj");
DEFINE("_EZREALTY_VLDET_OPENFULLSIZE","Poka¿ du¿e zdjêcie");
DEFINE("_EZREALTY_VLDET_TNPREV","Podgl±d miniaturek");

DEFINE("_EZREALTY_DETAILS_CTOWN","Najbli¿sze miasto");
DEFINE("_EZREALTY_DETAILS_CTPORT","Komunikacja");
DEFINE("_EZREALTY_DETAILS_ADDFEATURES","Dodatkowe cechy nieruchomo¶ci");
DEFINE("_EZREALTY_DETAILS_AGE","Wiek nieruchomo¶ci");
DEFINE("_EZREALTY_DETAILS_OHOUSE","Jest tam <b>Dzieñ Otwartego Domu</b>");
DEFINE("_EZREALTY_DETAILS_OHOUSEDET","Otwarty Dom szczegó³y:<br />Je¶li ta nieruchomo¶æ ma takie dni specjalne, gdzie kupuj±cy mog± przybyæ na miejsce i spotkaæ agenta, podaj datê, godziny i inne wa¿ne twoim zdaniem informacje");

DEFINE("_EZREALTY_DETAILS_APPR","Zatwierd¼ ofertê nieruchomo¶ci ");
DEFINE("_EZREALTY_DETAILS_PUBL","Publikuj ofertê nieruchomo¶ci");
DEFINE("_EZREALTY_DETAILS_LISTSTATUS","Typ og³oszenia");
DEFINE("_EZREALTY_DETAILS_FREESTATUS","Darmowe og³oszenie");
DEFINE("_EZREALTY_DETAILS_LISTPREMIUM","Uwydatnij og³oszenie");

DEFINE("_EZREALTY_DETAILS_ERROR1","Nieruchomo¶æ musi posiadaæ adres");
DEFINE("_EZREALTY_DETAILS_ERROR2","Nieruchomo¶æ musi posiadaæ zdefiniowane miasto, miasteczko lub dzielnice");
DEFINE("_EZREALTY_DETAILS_ERROR3","Musisz wybraæ województwo/region kraju");
DEFINE("_EZREALTY_DETAILS_ERROR4","Musisz wybraæ a kraj");
DEFINE("_EZREALTY_DETAILS_ERROR5","Nieruchomo¶æ musi posiadaæ zdefiniowany kod pocztowy");
DEFINE("_EZREALTY_DETAILS_ERROR6","Musisz wybraæ typ nieruchomo¶ci");
DEFINE("_EZREALTY_DETAILS_ERROR7","Nieruchomo¶æ musi posiadaæ zdefiniowan± liczbê sypialni");
DEFINE("_EZREALTY_DETAILS_ERROR8","Musisz podaæ cenê nieruchomo¶ci");
DEFINE("_EZREALTY_DETAILS_ERROR9","Musisz wybraæ zakres cenowy");
DEFINE("_EZREALTY_DETAILS_ERROR10","Musisz podaæ krótkie chwytliwe has³o o ile zezwalaj± na to domy¶lne ustawienia szaty graficznej");
DEFINE("_EZREALTY_DETAILS_ERROR11","Musisz wprowadziæ krótki opis o ile zezwalaj± na to domy¶lne ustawienia szaty graficznej");
DEFINE("_EZREALTY_DETAILS_ERROR12","Musisz pokazaæ choæ 1 zdjêcie dla twojej oferty");

DEFINE("_EZREALTY_DETAILS_TAB1A","Adres");
DEFINE("_EZREALTY_DETAILS_TAB1B","Adres nieruchomo¶ci");
DEFINE("_EZREALTY_DETAILS_TAB2A","Cechy");
DEFINE("_EZREALTY_DETAILS_TAB2B","Cechy nieruchomo¶ci");
DEFINE("_EZREALTY_DETAILS_TAB3A","Marketing");
DEFINE("_EZREALTY_DETAILS_TAB3B","Informacje marketingowe");
DEFINE("_EZREALTY_DETAILS_TAB4A","Zdjêcia");
DEFINE("_EZREALTY_DETAILS_TAB4B","Zdjêcia oferty");
DEFINE("_EZREALTY_DETAILS_TAB5A","Sprzedawca");
DEFINE("_EZREALTY_DETAILS_TAB5B","Szczegó³owe dane biura lub agenta");
DEFINE("_EZREALTY_DETAILS_TAB6A","Administrator");
DEFINE("_EZREALTY_DETAILS_TAB6B","Przetwarzanie przez administratora");

DEFINE("_EZREALTY_DETAILS_MARKET2","Wy³±czno¶æ");
DEFINE("_EZREALTY_DETAILS_MARKET3","Sprzeda¿ uzale¿niona od zawarcia umowy wstêpnej");
DEFINE("_EZREALTY_DETAILS_MARKET4","W trakcie finalizacji");
DEFINE("_EZREALTY_DETAILS_MARKET5","<b>Sprzedane!</b>");

DEFINE("_EZREALTY_DETAILS_SOURCE1","Wyszukiwarka");
DEFINE("_EZREALTY_DETAILS_SOURCE2","Strona www");
DEFINE("_EZREALTY_DETAILS_SOURCE3","Przechadzka");
DEFINE("_EZREALTY_DETAILS_SOURCE4","Sieæ nieruchomo¶ci");
DEFINE("_EZREALTY_DETAILS_SOURCE5","Inne - proszê okre¶l poni¿ej");

// Zarz±dzaj zakresem cenowym nieruchomo¶ci

DEFINE("_EZREALTY_PRICES_DISPLAYNUM","Wy¶wietl #");
DEFINE("_EZREALTY_PRICES_SEARCHCOM","Szukaj");
DEFINE("_EZREALTY_PRICES_PUBSTATUS","Opublikowano");
DEFINE("_EZREALTY_PRICES_REORDER","Uporz±dkuj");
DEFINE("_EZREALTY_MODPRICES_ADD","Dodaj");
DEFINE("_EZREALTY_MODPRICES_EDIT","Edytuj");
DEFINE("_EZREALTY_MODPRICES_ORDER","Kolejno¶æ");

// Zarz±dzaj lokalizacj± nieruchomo¶ci: miasto/miejscowo¶æ/dzielnica  

DEFINE("_EZREALTY_LOCALITIES_TITLE","Zarz±dzaj list± wyboru miasta/miejscowo¶ci/dzielnicy wyszukiwarki/listy wyboru");
DEFINE("_EZREALTY_LOCALITIES_DISPLAYNUM","Wy¶wietl #");
DEFINE("_EZREALTY_LOCALITIES_LOC","Nazwa Miasta/Miejscowo¶ci/Dzielnicy");
DEFINE("_EZREALTY_LOCALITIES_PUBSTATUS","Opublikowano");
DEFINE("_EZREALTY_LOCALITIES_REORDER","Uporz±dkuj");
DEFINE("_EZREALTY_MODLOC_TITLE","miasto, miejscowo¶æ, dzielnica wyszukaj/wybierz");
DEFINE("_EZREALTY_MODLOC_ADD","Dodaj");
DEFINE("_EZREALTY_MODLOC_EDIT","Edytuj");
DEFINE("_EZREALTY_MODLOC_LOC","Nazwa lokalizacji (miasto, miejscowo¶æ, dzielnica etc)");
DEFINE("_EZREALTY_MODLOC_ORDER","Kolejno¶æ");
DEFINE("_EZREALTY_MODLOC_SAVED","Szczegó³y lokalizacji zapisano");
DEFINE("_EZREALTY_MODLOC_ERROR1","Musisz podaæ nazwê dzielnicy, miejscowo¶ci, miasta");
DEFINE("_EZREALTY_LOCALITIES_EDITTAG","Edytuj lokalizacjê nieruchomo¶ci");

// Zarz±dzaj województwem/gmin±, w którym znajduje siê nieruchomo¶æ

DEFINE("_EZREALTY_STATE_TITLE","Zarz±dzaj polem wyszukiwania/zaznaczania województwa/gminy");
DEFINE("_EZREALTY_STATE_DISPLAYNUM","Wy¶wietl #");
DEFINE("_EZREALTY_STATE_LOC","Nazwa Województwa/gminy");
DEFINE("_EZREALTY_STATE_PUBSTATUS","Opublikowano");
DEFINE("_EZREALTY_STATE_REORDER","Uporz±dkuj");
DEFINE("_EZREALTY_STATE_TITLE2","Pole wyszukiwania/wyboru województwa/gminy");
DEFINE("_EZREALTY_STATE_ADD","Dodaj");
DEFINE("_EZREALTY_STATE_EDIT","Edytuj");
DEFINE("_EZREALTY_STATE_ORDER","Kolejno¶æ");
DEFINE("_EZREALTY_STATE_SAVED","Dane województwa zosta³y zapisane");
DEFINE("_EZREALTY_STATE_ERROR1","Musisz podaæ nazwê województwa");
DEFINE("_EZREALTY_STATE_EDITTAG","Edytuj Województwo");

// Zarz±dzaj przynale¿no¶ci± oferty do danego kraju

DEFINE("_EZREALTY_COUNTRY_TITLE","Wybierz kraj z listy");
DEFINE("_EZREALTY_COUNTRY_DISPLAYNUM","Wy¶wietl #");
DEFINE("_EZREALTY_COUNTRY_LOC","Nazwa kraju");
DEFINE("_EZREALTY_COUNTRY_PUBSTATUS","Opublikowano");
DEFINE("_EZREALTY_COUNTRY_REORDER","Uporz±dkuj");
DEFINE("_EZREALTY_COUNTRY_TITLE2","Wyszukaj/wybierz kraj");
DEFINE("_EZREALTY_COUNTRY_ADD","Dodaj");
DEFINE("_EZREALTY_COUNTRY_EDIT","Edytuj");
DEFINE("_EZREALTY_COUNTRY_ORDER","Kolejno¶æ");
DEFINE("_EZREALTY_COUNTRY_SAVED","Szczegó³y dotycz±ce kraju zapisano");
DEFINE("_EZREALTY_COUNTRY_ERROR1","Musisz podaæ nazwê kraju");
DEFINE("_EZREALTY_COUNTRY_EDITTAG","Edytuj kraj");

// Zarz±dzaj liczba sypialni

DEFINE("_EZREALTY_ROOMS_TITLE","Zarz±dzaj liczb± sypialni szukaj/zaznacz");
DEFINE("_EZREALTY_ROOMS_DISPLAYNUM","Wy¶wietl #");
DEFINE("_EZREALTY_ROOMS_LOC","Liczba sypialni");
DEFINE("_EZREALTY_ROOMS_PUBSTATUS","Opublikowano");
DEFINE("_EZREALTY_ROOMS_REORDER","Uporz±dkuj");
DEFINE("_EZREALTY_ROOMS_TITLE2","Liczba sypialni szukaj/zaznacz");
DEFINE("_EZREALTY_ROOMS_ADD","Dodaj");
DEFINE("_EZREALTY_ROOMS_EDIT","Edytuj");
DEFINE("_EZREALTY_ROOMS_ORDER","Kolejno¶æ");
DEFINE("_EZREALTY_ROOMS_SAVED","Zapisano liczbê sypialni");
DEFINE("_EZREALTY_ROOMS_ERROR1","Musisz podaæ liczbê sypialni");
DEFINE("_EZREALTY_ROOMS_EDITTAG","Edytuj liczbê sypialni");

// Manage leads list

DEFINE("_EZREALTY_LEADS_TITLE","Zarz±dzaj list± kupuj±cych");
DEFINE("_EZREALTY_LEADS_DISPLAYNUM","Wy¶wietl #");
DEFINE("_EZREALTY_LEADS_AR","Data dodania/oceny");
DEFINE("_EZREALTY_LEADS_LCONTACT","Szczegó³y kontaktowe");
DEFINE("_EZREALTY_LEADS_LNAME","Nazwa");
DEFINE("_EZREALTY_LEADS_LEMAIL","Email");
DEFINE("_EZREALTY_LEADS_LLOC","Po¿±dana lokalizacja");
DEFINE("_EZREALTY_LEADS_EDITTAG","Edytuj/zobacz szczegó³y");
DEFINE("_EZREALTY_LEADS_ADD","Dodaj");
DEFINE("_EZREALTY_LEADS_EDIT","Edytuj");
DEFINE("_EZREALTY_LEADS_TITLE2","Szczegó³y kupuj±cego");
DEFINE("_EZREALTY_LEADS_FMATCH","Znajd¼ nieruchomo¶ci odpowiadaj±ce Twoim kryteriom");

DEFINE("_EZREALTY_LEADS_HPHONE","Telefon domowy");
DEFINE("_EZREALTY_LEADS_WPHONE","Telefon do pracy");
DEFINE("_EZREALTY_LEADS_MOBILE","Tel. kom.");
DEFINE("_EZREALTY_LEADS_FAX","Fax");
DEFINE("_EZREALTY_LEADS_SOURCE","Gdzie nas znalaz³e¶/a¶");
DEFINE("_EZREALTY_LEADS_COMMENTS","Komentarz");
DEFINE("_EZREALTY_LEADS_DETAILS","Szczegó³y oferty");
DEFINE("_EZREALTY_LEADS_BUDGET","Bud¿et na zakup");

DEFINE("_EZREALTY_LEADS_SAVED","Zapisano szczegó³y dotycz±ce kupuj±cego");

DEFINE("_EZREALTY_LEADS_ERROR1","Musisz podaæ nazwê");

DEFINE("_EZREALTY_LEADS_ERROR2","Musisz podaæ adres email");
DEFINE("_EZREALTY_LEADS_ERROR3","Musisz podaæ typ nieruchomo¶ci");
DEFINE("_EZREALTY_LEADS_ERROR4","Musisz podaæ zakres cenowy");
DEFINE("_EZREALTY_LEADS_ERROR5","Musisz podaæ miasto/miejscowo¶æ/dzielnice");
DEFINE("_EZREALTY_LEADS_ERROR6","Musisz podaæ liczbê sypialni");

// Zarz±dzaj kategoriami typów nieruchomo¶ci 

DEFINE("_EZREALTY_CATEGORY_PAGETITLE","Mened¿er kategorii nieruchomo¶ci");
DEFINE("_EZREALTY_CATEGORY_DISPLAYNUM","Wy¶wietl #");
DEFINE("_EZREALTY_CATEGORY_SEARCHCAT","Szukaj");
DEFINE("_EZREALTY_CATEGORY_CATNAME","Kategoria");
DEFINE("_EZREALTY_CATEGORY_PUBSTATUS","Opublikowano");
DEFINE("_EZREALTY_CATEGORY_ACCLEVEL","Dostêp");
DEFINE("_EZREALTY_CATEGORY_REORDER","Uporz±dkuj");
DEFINE("_EZREALTY_CATEGORY_MAIN","Kategoria nieruchomo¶ci");
DEFINE("_EZREALTY_CATEGORY_ADD","Dodaj");
DEFINE("_EZREALTY_CATEGORY_EDIT","Edytuj");
DEFINE("_EZREALTY_CATEGORY_DEFTITLE","Tytu³");
DEFINE("_EZREALTY_CATEGORY_DEFCONTENT","Opis");
DEFINE("_EZREALTY_CATEGORY_DEFACCESS","Dostêp");
DEFINE("_EZREALTY_CATEGORY_DEFORDER","Kolejno¶æ");
DEFINE("_EZREALTY_CATEGORY_IMAGE","Obrazek kategorii");
DEFINE("_EZREALTY_CATEGORY_IMAGESEL","Wybór obrazka kategorii");
DEFINE("_EZREALTY_CATEGORY_SAVED","Szczegó³y kategorii nieruchomo¶ci zapisano");
DEFINE("_EZREALTY_CATEGORY_ERROR1","Kategoria musi mieæ tytu³");
DEFINE("_EZREALTY_CATEGORY_EDITTAG","Edytuj kategorie nieruchomo¶ci");

// Zarz±dzaj kategoriami typów nieruchomo¶ci

DEFINE("_EZREALTY_MARKET_PAGETITLE","Zarz±daj informacjami o statusie oferty");
DEFINE("_EZREALTY_MARKET_DISPLAYNUM","Wy¶wietl #");
DEFINE("_EZREALTY_MARKET_STATUS","Status oferty");
DEFINE("_EZREALTY_MARKET_PUBSTATUS","Opublikowano");
DEFINE("_EZREALTY_MARKET_REORDER","Uporz±dkuj");
DEFINE("_EZREALTY_MARKET_MAIN","Informacje o statusie oferty");
DEFINE("_EZREALTY_MARKET_ADD","Dodaj");
DEFINE("_EZREALTY_MARKET_EDIT","Edytuj");
DEFINE("_EZREALTY_MARKET_DEFNAME","Nazwa");
DEFINE("_EZREALTY_MARKET_DEFORDER","Kolejno¶æ");
DEFINE("_EZREALTY_MARKET_SAVED","Informacje o statusie oferty zapisano");
DEFINE("_EZREALTY_MARKET_ERROR1","Informacje o statusie oferty musz± mieæ jak±¶ nazwê");

// G³ówne tre¶ci zg³aszanych b³êdów

DEFINE("_EZREALTY_GENERAL_ERROR1","Wybierz pozycjê ");
DEFINE("_EZREALTY_CONFIG_ERROR","Plik konfiguracyjny jest niezapysywalny! Proszê ustaw odpowiednie prawa (CHMOD) i wówczas spróbuj ponownie.");

// Miscellaneous language tags for hyperlinks and image tags

DEFINE("_EZREALTY_GENERAL_PUBLISHED","Opublikowano");
DEFINE("_EZREALTY_GENERAL_UNPUBLISHED","Nieopublikowano");
DEFINE("_EZREALTY_GENERAL_APPROVED","Zatwierdzono");
DEFINE("_EZREALTY_GENERAL_UNAPPROVED","Nie Zatwierdzono");
DEFINE("_EZREALTY_GENERAL_CHECKOUT","Sprawd¼");
DEFINE("_EZREALTY_GENERAL_RETURN","Wróæ do Mened¿era Nieruchomo¶ci");
DEFINE("_EZREALTY_GENERAL_UP","Do góry");
DEFINE("_EZREALTY_GENERAL_DOWN","Na dó³");
DEFINE("_EZREALTY_GENERAL_EDITPROP","Edytuj nieruchomo¶æ");
DEFINE("_EZREALTY_GENERAL_SOLD","Sprzedane!");
DEFINE("_EZREALTY_GENERAL_CONTRACT","W trakcie finalizacji");

DEFINE("_EZREALTY_GENERIC_ADD","Dodaj");
DEFINE("_EZREALTY_GENERIC_EDIT","Edytuj");

//////////////////// FRONT END FILE LANGUAGE TAGS ///////////////////////

// includes.ezrealty.php file

DEFINE("_EZREALTY_HOME","Start");

// ezrealty.php file

DEFINE("_EZREALTY_BACK","Cofnij");
DEFINE("_EZREALTY_INCLUDES_HOME","Start");
DEFINE("_EZREALTY_INCLUDES_SEARCH","Szukaj");
DEFINE("_EZREALTY_INCLUDES_NEW","Nowe oferty");
DEFINE("_EZREALTY_CATEGORIES","Typy nieruchomo¶ci");
DEFINE("_EZREALTY_PROPERTIES","nieruchomo¶ci");
DEFINE("_EZREALTY_PROPERTY","nieruchomo¶æ");
DEFINE("_EZREALTY_INCLUDES_RSSOH","Oferty w kategorii Dom Otwarty");
DEFINE("_EZREALTY_INCLUDES_POSTMAIL","Dziêkujemy - mo¿na teraz zamkn±c to okno.");

// category display

DEFINE("_EZREALTY_PAGES","Stron");
DEFINE("_EZREALTY_PREV","Poprzednia");
DEFINE("_EZREALTY_NEXT","Nastêpna");
DEFINE("_EZREALTY_READMORE","Czytaj dalej");
DEFINE("_EZREALTY_VIEWPROP","Podgl±d nieruchomo¶ci");

// prze¶lij znajomemu - ustawienia tre¶ci wiadomo¶ci

DEFINE("_EZREALTY_INVITE_VIEW_PROP","wys³a³/a ci zaproszenie do przyjrzenia siê ofercie wystawionej na sprzeda¿. Prosze u¿yj poni¿szego linka aby przej¶æ do tej oferty.");
DEFINE("_EZREALTY_RECCOMEND_PROP_FROM_FREND","Oferta nieruchomo¶ci polecona przez twojego znajomego");
DEFINE("_EZREALTY_FROM","Od");
DEFINE("_EZREALTY_REPLYTO","Odpowiedzi na ten adres");
DEFINE("_EZREALTY_MAIL_SENT","Dziêkujemy! Twoja rekomendacja dotycz±ca tej nieruchomo¶ci zosta³a wys³ana...");
DEFINE("_EZREALTY_MAIL_VIEWINGSENT","Dziêkujemy! Twoja zapytanie o obejrzenie nieruchomo¶ci zosta³o wys³ane...");
DEFINE("_EZREALTY_INSPECTION"," Zapytanie o obejrzenie nieruchomo¶ci ");
DEFINE("_EZREALTY_TELEPHONE","Telefon kontaktowy:-");
DEFINE("_EZREALTY_DATETIME","Preferowana godzina i data:-");
DEFINE("_EZREALTY_REQUEST_MAILINGLIST","chce byæ dodany do listy mailingowej. Prosze u¿yj poni¿szego linku, aby zobaczyæ nieruchomo¶æ, o któr± chodzi zainteresowanemu(mo¿e to pomóc zidentyfikowaæ zainteresowania potencjalnego nabywcy).");
DEFINE("_EZREALTY_PROPERTY_INTERESTS","Ten kupuj±cy jest zainteresowany nastêpuj±cymi typami nieruchomo¶ci:-");
DEFINE("_EZREALTY_MAILING_TITLE"," Zg³oszenie do listy mailingowej");
DEFINE("_EZREALTY_MAILINGLIST_SENT","Dziêkujemy! Twoje zg³oszenie do listy mailingowej zosta³o wys³ane...");
DEFINE("_EZREALTY_AGENTIDREF","Numer identyfikacyjny Agenta i sygnatura nieruchomo¶ci:-");

// viewdetails.ezrealty.php file

DEFINE("_EZREALTY_VIEWDET_NAME_EMAIL","Proszê wype³niæ wszystkie pola formularza!");
DEFINE("_EZREALTY_VIEWDET_NOVIEW","Przykro nam, ale ta us³uga jest niedostêpna w danej chwili.");
DEFINE("_EZREALTY_PROPGONE","Nieruchomo¶æ której szukasz nie istnieje w bazie, zosta³a wycofana z publikacji lub sprzedana!");
DEFINE("_EZREALTY_VIEWDET_PROPDET","Szczegó³y nieruchomo¶ci");
DEFINE("_EZREALTY_VIEWDET_MAP","Zobacz mapê");
DEFINE("_EZREALTY_VIEWDET_TOUR","Zwiedzanie");
DEFINE("_EZREALTY_VIEWDET_VTOUR","Wybierz siê na wirtualna wycieczkê");
DEFINE("_EZREALTY_VIEWDET_PRINT","Wydrukuj t± strone");
DEFINE("_EZREALTY_VIEWDET_FAVS","Dodaj do ulubionych");
DEFINE("_EZREALTY_VIEWDET_VIEWING","Aran¿uj widok");
DEFINE("_EZREALTY_VIEWDET_VNAME","Twoja nazwa");
DEFINE("_EZREALTY_VIEWDET_VMAIL","Twój email");
DEFINE("_EZREALTY_VIEWDET_VPHONE","Twój telefon");
DEFINE("_EZREALTY_VIEWDET_VTIME","Preferowany termin (data i godzina)");
DEFINE("_EZREALTY_VIEWDET_SEND","Wy¶lij");
DEFINE("_EZREALTY_VIEWDET_SEND_FRIEND","Wy¶lij znajomemu");
DEFINE("_EZREALTY_VIEWDET_YOUR_NAME","Twoja nazwa");
DEFINE("_EZREALTY_VIEWDET_YOUR_MAIL","Twój email");
DEFINE("_EZREALTY_VIEWDET_FRIENDS_NAME","Nazwa twojego znajomego");
DEFINE("_EZREALTY_VIEWDET_FRIENDS_MAIL","Adres email znajomego");
DEFINE("_EZREALTY_VIEWDET_APPROX","w przybli¿eniu.");
DEFINE("_EZREALTY_VIEWDET_LINKS","Linki klienta");
DEFINE("_EZREALTY_VIEWDET_FPLANS","Rzut przestrzenny");
DEFINE("_EZREALTY_VIEWDET_MAILING","Dopisz siê do naszej listy mailingowej");
DEFINE("_EZREALTY_VIEWDET_MAILING_SPEIL","Oferty nieruchomo¶ci s± ci±gle uaktualniane. B±d¼ zawsze dobrze poinformowany/a!");
DEFINE("_EZREALTY_VIEWDET_INTERESTS","Jestem zainteresowany/a nastepuj±cymi typami nieruchomo¶ci");
DEFINE("_EZREALTY_VIEWDET_LOCALITY","Lokalizacja");
DEFINE("_EZREALTY_VIEWDET_LAND","Typ ziemi");
DEFINE("_EZREALTY_VIEWDET_BEDROOM","Sypialnia");
DEFINE("_EZREALTY_VIEWDET_BEDROOMS","Sypialnie");
DEFINE("_EZREALTY_VIEWDET_BATHROOM","£azienka");
DEFINE("_EZREALTY_VIEWDET_BATHROOMS","£azienki");
DEFINE("_EZREALTY_VIEWDET_PARKING","Parking dla");
DEFINE("_EZREALTY_VIEWDET_PARKING2","Parking");
DEFINE("_EZREALTY_VIEWDET_GALLERY","Galeria zdjec");
DEFINE("_EZREALTY_VIEWDET_SOLD","Sprzedane!");
DEFINE("_EZREALTY_VIEWDET_CONTRACT","W trakcie finalizacji");
DEFINE("_EZREALTY_VIEWDET_REGISTER","Zarejestruj siê");

DEFINE("_EZREALTY_VIEWDET_PRICE","Cena");
DEFINE("_EZREALTY_VIEWDET_EXTRA","Dostêpne od zaraz");
DEFINE("_EZREALTY_VIEWDET_YES","Tak");
DEFINE("_EZREALTY_VIEWDET_NO","Nie");
DEFINE("_EZREALTY_VIEWDET_LOCATION","Lokalizacja");
DEFINE("_EZREALTY_VIEWDET_TOWN","Najbli¿sze miasto");
DEFINE("_EZREALTY_VIEWDET_TPORT","Transport");
DEFINE("_EZREALTY_VIEWDET_AGE","Wiek");

DEFINE("_EZREALTY_VIEWDET_PSELLERS","Biura nieruchomo¶ci, agenci, osoby prywatne");
DEFINE("_EZREALTY_VIEWDET_SELLER","Sprzedawca");
DEFINE("_EZREALTY_VIEWDET_SELLER_PHONE","Kontakt #");
DEFINE("_EZREALTY_VIEWDET_SELLER_ARRANGE","Zobacz nieruchomo¶æ");
DEFINE("_EZREALTY_VIEWDET_SELLER_VIEWING","Zaaran¿uj spotkanie bezpo¶rednio z agentem nieruchomo¶ci");

DEFINE("_EZREALTY_PIX_HOVER","By zmieniæ zdjêcie, najed¼ myszk± nad miniaturkê poni¿ej");

// search.ezrealty.php file

DEFINE("_EZREALTY_SEARCHPRICE","Zakres cenowy");
DEFINE("_EZREALTY_SEARCHPROPTYPE","Typ nieruchomo¶ci");
DEFINE("_EZREALTY_SEARCHLOC","Okolica");
DEFINE("_EZREALTY_SEARCHSUB","Dzielnica");
DEFINE("_EZREALTY_SEARCHREG","Województwo");
DEFINE("_EZREALTY_SEARCHCON","Kraj");
DEFINE("_EZREALTY_SEARCHBRM","£azienek");
DEFINE("_EZREALTY_SEARCHORD","Kolejno¶æ");
DEFINE("_EZREALTY_SEARCHADV","Zaawansowane filtry wyszukiwania");
DEFINE("_EZREALTY_SEARCH_SEARCH","Szukaj");

DEFINE("_EZREALTY_SEARCH_ALCAT","Wybierz wszystkie kategorie");
DEFINE("_EZREALTY_SEARCH_ALLOC","Wybierz wszystkie lokalizacje");
DEFINE("_EZREALTY_SEARCH_ALSTA","Wybierz wszystkie województwa");
DEFINE("_EZREALTY_SEARCH_ALCOU","Wybierz wszystkie kraje");
DEFINE("_EZREALTY_SEARCH_MINPRI","Wybierz minimaln± cenê");
DEFINE("_EZREALTY_SEARCH_MAXPRI","Wybierz maksymaln± cenê");
DEFINE("_EZREALTY_SEARCH_MINBED","Wybierz minimaln± liczbê sypialni");
DEFINE("_EZREALTY_SEARCH_MAXBED","Wybierz maksymaln± liczbê sypialni");
DEFINE("_EZREALTY_SEARCH_ONLYAV","Tylko dostêpne nieruchomo¶ci");
DEFINE("_EZREALTY_SEARCH_PRIASC","Cena rosn±co");
DEFINE("_EZREALTY_SEARCH_PRIDESC","Cena malej±co");
DEFINE("_EZREALTY_SEARCH_ASC","Data rosn±co");
DEFINE("_EZREALTY_SEARCH_DESC","Data malej±co");

// results.ezrealty.php file

DEFINE("_EZREALTY_RESULTSL_SELECT","Proszê wybraæ parametry wyszukiwania!");
DEFINE("_EZREALTY_RESULTS_RESULTS","Rezultaty:-");
DEFINE("_EZREALTY_RESULTS_NORESULTS","Przykro nam - brak rezultatów wyszukiwania...");
DEFINE("_EZREALTY_RESULTS_NEW","Najnowsze");
DEFINE("_EZREALTY_RESULTS_NEWLISTINGS","Nowe oferty");

// printdetails.ezrealty.php file

DEFINE("_EZREALTY_PRINT_ID","Sygnatura");
DEFINE("_EZREALTY_PRINT_TELEPHONE","Telefon:");
DEFINE("_EZREALTY_PRINT_PRINT","Podgl±d wydruku");
DEFINE("_EZREALTY_PRINT_CLOSE","Zamknij okno");

// submit lead stuff

DEFINE("_EZREALTY_SUBLEAD_TITLE","Wy¶lij wymagania oczekiwane w stosunku do nieruchomo¶ci");
DEFINE("_EZREALTY_SUBLEAD_INTRO","Nieruchomo¶ci ci±gle pojawiaj± siê na rynku, czasami nie s± zgodne z twoimi oczekiwaniami. Je¶li nie mo¿esz znale¼æ czego¶ co Ci bêdzie odpowiadaæ, czemu nie podasz nam Twoich oczekiwañ. Gdy agenci znajd± ofertê odpowiadaj±c± twoim oczekiwaniom lub w naszej bazie pojawi siê takie og³oszenie zostaniesz odrazu poinformowany/a.
");
DEFINE("_EZREALTY_SUBLEAD_THANKS","Dziêkujemy - twoje wymagania zosta³y wys³ane.");
DEFINE("_EZREALTY_SUBLEAD_CONTACT","Dane kontaktowe");
DEFINE("_EZREALTY_SUBLEAD_NOTON","Przykro nam ale obecnie nie przyjmujemy wskazówek dotycz±cych szukanych nieruchomo¶ci");

DEFINE("_EZREALTY_LM_ERROR1","Proszê podaæ swoj± nazwê");
DEFINE("_EZREALTY_LM_ERROR2","Proszê podaæ adres email");
DEFINE("_EZREALTY_LM_ERROR3","Proszê wybraæ kategorie");
DEFINE("_EZREALTY_LM_ERROR4","Proszê wybraæ wybraæ zakres cenowy");
DEFINE("_EZREALTY_LM_ERROR5","Proszê wybraæ miasto/miejscowo¶æ/dzielnice");
DEFINE("_EZREALTY_LM_ERROR6","Proszê wybraæ orientacyjnie liczbê sypialni");

DEFINE("_EZREALTY_EMAIL_ERROR1","Proszê dopisaæ swoja nazwê");
DEFINE("_EZREALTY_EMAIL_ERROR2","Proszê dopisaæ swój email");
DEFINE("_EZREALTY_EMAIL_ERROR3","Proszê dopisaæ telefon kontaktowy");
DEFINE("_EZREALTY_EMAIL_ERROR4","Proszê dopisaæ swoje pytania");
DEFINE("_EZREALTY_EMAIL_ERROR5","Proszê dopisaæ nazwê znajomego");
DEFINE("_EZREALTY_EMAIL_ERROR6","Proszê dopisaæ email znajomego");
DEFINE("_EZREALTY_EMAIL_ERROR7","Proszê dopisaæ kilka s³ów o swoich zainteresowaniach");
DEFINE("_EZREALTY_EMAIL_ERROR8","Przykro nam - funkcja wysy³ania emaili nie jest aktualnie dostêpna");
DEFINE("_EZREALTY_EMAIL_ERROR9","Prosze dopisaæ ramy czasowe wy¶wietlania ofert.");

// front-end member stuff

DEFINE("_EZREALTY_LISTINGS_INTRO","Mo¿esz posiadaæ nastêpuj±c± liczbê darmowych og³oszeñ");
DEFINE("_EZREALTY_NOLISTINGS","Nie masz ¿adnych ofert");
DEFINE("_EZREALTY_ADDNEW","Dodaj now± ofertê");
DEFINE("_EZREALTY_SUBMIT_LISTING","Wy¶lij ofertê");
DEFINE("_EZREALTY_NO_LOGIN","Przykro nam - ale musisz siê najpierw zalogowaæ");
DEFINE("_EZREALTY_MAX_NUM","Przykro nam - wykorzysta³e¶ maksymalny limit");
DEFINE("_EZREALTY_MAXNUM_LIST","ofert");
DEFINE("_EZREALTY_YOUVEGOTMAIL","Nowa lista og³oszeñ");
DEFINE("_EZREALTY_DONE","Wgranie zdjêæ i nieruchomo¶ci zakoñczone sukcesem!");
DEFINE("_EZREALTY_UPDATEDONE","Zaktualizowa³e¶/a¶ swoje og³oszenie!");
DEFINE("_EZREALTY_NO_EDIT","Przykro nam - nie masz uprawnieñ do edycji tego og³oszenia");
DEFINE("_EZREALTY_NODELETE","Nie masz uprawnieñ do skasowania tego og³oszenia");
DEFINE("_EZREALTY_CHECKDELETE","Jeste¶ pewny/pewna ¿e chcesz skasowaæ t± ofertê?");
DEFINE("_EZREALTY_DELETE_LISTING","Skasuj ofertê");
DEFINE("_EZREALTY_LISTINGS_PREVIEW","Podgl±d oferty");
DEFINE("_EZREALTY_DELIMGOOPS","Nie mo¿na skasowaæ zdjêcia");
DEFINE("_EZREALTY_LISTING_DELETED","Ofertê nieruchomo¶ci skasowano");
DEFINE("_EZREALTY_LISTING_TERMS","Warunki publikacji ofert");
DEFINE("_EZREALTY_PREVIEW_LISTING","Podgl±d twojego og³oszenia");

DEFINE("_EZREALTY_MEMBERS_ADDRESS","Adres");
DEFINE("_EZREALTY_MEMBERS_HITS","Wej¶æ");
DEFINE("_EZREALTY_MEMBERS_ACTION","Akcja");
DEFINE("_EZREALTY_MEMBERS_STATUS","Opublikowano");
DEFINE("_EZREALTY_MEMBERS_UPGRADE","Uaktualnienie");
DEFINE("_EZREALTY_MEMBERS_MAKEFEAT","Uwydatnij ofertê");
DEFINE("_EZREALTY_MEMBERS_SELLERDET","Szczegó³owe dane biura nieruchomo¶ci");

DEFINE("_EZREALTY_LISTING1","Dane kontaktowe prowadz±cego sprzeda¿");
DEFINE("_EZREALTY_LISTING2","Nazwa");
DEFINE("_EZREALTY_LISTING3","Telefon");
DEFINE("_EZREALTY_LISTING4","Adres email ");
DEFINE("_EZREALTY_LISTING5","Adres nieruchomo¶ci wystawionej na sprzeda¿");
DEFINE("_EZREALTY_LISTING6","Szczegó³y dotycz±ce nieruchomo¶ci");
DEFINE("_EZREALTY_LISTING7","Szczególnie interesuj±ce");
DEFINE("_EZREALTY_LISTING8","Dane marketingowe nieruchomo¶ci");
DEFINE("_EZREALTY_LISTING9","Dodaj szczegó³y do tej oferty ");
DEFINE("_EZREALTY_LISTING10","Edytuj szczegó³owy opis nieruchomo¶ci");
DEFINE("_EZREALTY_LISTING11","Lokalizacja biura nieruchomo¶ci");
DEFINE("_EZREALTY_LISTING12","Zdjêcia");
DEFINE("_EZREALTY_LISTING_IMGDELETED","Zdjêcie skasowane");
DEFINE("_EZREALTY_LISTING_RESTRICTED","**Ta informacja nie jest dostêpna w darmowym og³oszeniu**");

DEFINE("_EZREALTY_SELLER_ERROR1","Musisz podaæ nazwê biura");
DEFINE("_EZREALTY_SELLER_ERROR2","Musisz podaæ numer telefonu");
DEFINE("_EZREALTY_SELLER_ERROR3","Musisz podaæ adres email");
DEFINE("_EZREALTY_SELLER_ERROR4","Musisz podaæ siedzibê biura");

DEFINE("_EZREALTY_SELLER_N","Agent");
DEFINE("_EZREALTY_SELLER_T","Telefon");
DEFINE("_EZREALTY_SELLER_E","Email");
DEFINE("_EZREALTY_SELLER_L","Siedziba");
DEFINE("_EZREALTY_SELLER_C","Kontakt");

DEFINE("_EZREALTY_NOCATLISTINGS","Przykro nam, ale nie ma ofert w tej kategorii");

DEFINE("_EZREALTY_IPN_SUBJECT","Oferty zaktualizowano do");
DEFINE("_EZREALTY_IPN_MSG1","Zarejestrowany u¿ytkownik zaktualizowa³ swoje oferty do");
DEFINE("_EZREALTY_IPN_MSG2","Szczegó³y zakupu:- ");
DEFINE("_EZREALTY_IPN_MSG3","Sygnatura");

DEFINE("_EZREALTY_POA","Informacja w biurze");
DEFINE("_EZREALTY_CONFIG_STATES","U¿yj Województw");
DEFINE("_EZREALTY_CONFIG_STATESDESC","Je¶li sprzedawana nieruchomo¶æ nie wymaga w opisie województwa, ustaw to na NIE aby schowaæ zmienn±.");
DEFINE("_EZREALTY_CONFIG_SBIMP","Poka¿ wed³ug liczby wy¶wietleñ"); 
DEFINE("_EZREALTY_CONFIG_SBIMPDESC","Je¶li zezwalasz u¿ytkownikom na dodawanie og³oszeñ i kontrolujesz to na podstawie wy¶wietleñ -  zliczane s± otwarcia szczegó³ow oferty. Wy¶wietlanie zostanie przerwane w momencie przektoczenia ilo¶ci wykupionych wy¶wietleñ. Bêdzie mo¿na wyczy¶ciæ bazê danych tych og³oszeñ jednym przyciskiem 'czy¶æ og³oszenia'.");
DEFINE("_EZREALTY_CONFIG_IMPNUM","Liczba wy¶wietleñ");
DEFINE("_EZREALTY_CONFIG_IMPNUMDESC","Je¶li ograniczasz pokaz ofert w oparciu o liczbe wy¶wietleñ/wej¶æ - jak wiele ma byæ ich pokazanych.");

DEFINE("_EZREALTY_RESET_MSG","Licznik odwiedzin zosta³ zresetowany");
DEFINE("_EZREALTY_RESET_BTN","Reset");
DEFINE("_EZREALTY_CLEANDB","Czy¶æ og³oszenia");
DEFINE("_EZREALTY_LISTINGS_PAID1","koszt og³oszenia");
DEFINE("_EZREALTY_LISTINGS_PAID2","ka¿dorazowo za uaktualnienie");
DEFINE("_EZREALTY_LISTINGS_HITSINTRO","Wy¶wietlanie przerwane lub oferta usuniêta z bazy po");
DEFINE("_EZREALTY_LISTINGS_HITS2","wej¶æ");
DEFINE("_EZREALTY_BEDROOMS_EXPL","U¿yj liczb ca³kowitych od 1, jako ¿e 0 ju¿ jest predefiniowane w rozwijanym boksie, dla przyk³adowego u¿ycia, gdzie sypialnie nie s± stosownym s³owem.");
DEFINE("_EZREALTY_SELLERSPANEL","Panel sprzedawcy (agenta)");
DEFINE("_EZREALTY_MAINPANEL","G³ówne wpisy");


// Nowe tagi dodane w wersji 3.2.2

DEFINE("_EZREALTY_SUB_MSG","U¿ytkownik twojej strony doda³ lub uaktualni³ wpis.");
DEFINE("_EZREALTY_TOOLBAR_CLOSE","Zamknij");
DEFINE("_EZREALTY_NLAVAIL","Przepraszamy - wy¶wietlanie ofert chwilowo nie dostêpne");


// Nowe tagi dodane po wersji 3.2.2 zawierajacej integracje z CB 

DEFINE("_EZREALTY_CONFIG_CBINT","Integracja z Community Builder");
DEFINE("_EZREALTY_CONFIG_CBINTDESC","Je¶li korzystasz z Community Builder, czy chesz wykorzystaæ dane uzyskane przy rejestracji jako szczegó³y kontaktowe?");
DEFINE("_EZREALTY_PROFILER_CBMSG1","Komponent EZ Realty umo¿liwiajacy obs³ugê ofert nieruchomo¶ci jest nie zainstalowany. Proszê skontaktuj siê z administratorem serwisu.");
DEFINE("_EZREALTY_PROFILER_CBMSG2","Aktualnie nie ma nieruchmo¶ci pochodz±cych od tego u¿ytkownika/biura");
DEFINE("_EZREALTY_PROFILER_CBPROFILE","Zobacz profil");




// NEW TAGS THAT WERE ADDED AFTER THE 3.3.0 VERSION


DEFINE("_EZREALTY_CLICK_OPEN","Kliknij aby otworzyæ");




// NEW TAGS THAT WERE ADDED FOR THE 4.0.0 RELEASE

DEFINE("_EZREALTY_CONFIG_FREEPIC","Darmowe wy¶wietlanie zdjêæ");
DEFINE("_EZREALTY_CONFIG_FREEPICDESC","Je¶li masz darmowe i p³atne rodzaje ofert, czy chcesz ¿eby darmowe og³oszenia zawiera³y zdjêcia ofert? Je¶li wybierzesz 'NIE' pojawi siê ilustracja zastêpcza co mo¿e zachêciæ do wykupienia p³atnych ofert. Je¶li wybierzesz 'TAK' - dla darmowych og³oszeñ mo¿liwa bêdzie publikacja tylko jednego zdjêcia. Zarejestrowani uzytkownicy mog± wgraæ do 12 zdjêæ.");
DEFINE("_EZREALTY_CONFIG_PAIDOPT1","Darmowe z opcj± aktualizacji");
DEFINE("_EZREALTY_CONFIG_PAIDOPT2","Tylko p³atne og³oszenia");
DEFINE("_EZREALTY_CONFIG_PAIDONLY","Wybór sposobu p³atno¶ci");
DEFINE("_EZREALTY_CONFIG_PAIDONLYDESC","Je¶li oferujesz p³atne og³oszenia - czy chcesz jednocze¶nie pozostawiæ opcjê darmowych z opcj± przej¶cia na p³atne czy dostêpne bêd± WY£¡CZNIE p³atne wy¶wietlanie.");

DEFINE("_EZREALTY_CONFIG_LEVEL1","Og³oszenia p³atne poziom 1 Nazwa");
DEFINE("_EZREALTY_CONFIG_LEVEL1DESC","Jak chcesz nazwaæ aktualizacje og³oszeñ - np Premium/Rozszerzone etc. Ta zmienna pojawi siê jako przysisk z kodem do transakcji PAYPAL.");
DEFINE("_EZREALTY_CONFIG_LEVEL1COST","Og³oszenia p³atne poziom 1 koszt");
DEFINE("_EZREALTY_CONFIG_LEVEL1COSTDESC","Koszt aktualizacji darmowego og³oszenia do p³atnych opcji.");

DEFINE("_EZREALTY_CONFIG_LEVEL2","Og³oszenia p³atne poziom 2 Nazwa");
DEFINE("_EZREALTY_CONFIG_LEVEL2DESC","Jak chcesz nazwaæ aktualizacje og³oszeñ - np Premium/Rozszerzone etc. Ta zmienna pojawi siê jako przysisk z kodem do transakcji PAYPAL.");
DEFINE("_EZREALTY_CONFIG_LEVEL2COST","Og³oszenia p³atne poziom 2 koszt");
DEFINE("_EZREALTY_CONFIG_LEVEL2COSTDESC","Koszt zakupu/aktualizacji.");

DEFINE("_EZREALTY_DETAILS_TAB7A","Metatagi");
DEFINE("_EZREALTY_DETAILS_METADESC","Opis");
DEFINE("_EZREALTY_DETAILS_METAKEYS","S³owa kluczowe");
DEFINE("_EZREALTY_FEND_BUYNOW","Wykup wyró¿nienie dla twojego og³oszenia, a nie bêdziesz musia³/musia³a uiszczaæ op³aty za aktualizacjê kolejnych twoich og³oszeñ.");
DEFINE("_EZREALTY_FEND_BUYNOW2","Uaktualnij og³oszenia do wyró¿nionych, a nie bêdziesz musia³/musia³a uiszczaæ op³aty za aktualizacjê kolejnych twoich og³oszeñ.");
DEFINE("_EZREALTY_UPGRADE","Uaktualnij");
DEFINE("_EZREALTY_CHECK_LOC","Sprawd¼ lokalizacje");
DEFINE("_EZREALTY_CHECK_STATE","Sprawd¼ województwa");
DEFINE("_EZREALTY_CHECK_COUNTRY","Sprawd¼ kraje");
DEFINE("_EZREALTY_CHECK_AVAIL","Sprawd¿ dostêpno¶æ");
DEFINE("_EZREALTY_CHECK_SUBMIT","Zaproponuj now±");
DEFINE("_EZREALTY_CHECK_GO","Id¼");
DEFINE("_EZREALTY_CHECK_REFRESH","<strong><br /><br />Od¶wierz ekran po zamkniêciu tego okna - wtedy zobaczysz nowy wpis.</strong>");

DEFINE("_EZREALTY_CONFIG_SELFENTRY","Dodatki we Front-endzie");
DEFINE("_EZREALTY_CONFIG_SELFENTRYDESC","Czy chcesz zezwoliæ zarejestrowanym u¿ytkownikom na dodawanie nowych lokalizacji, województw, krajów. Zgoda na takie zmiany spowoduje automatyczn± publikacjê tych danych i ich widoczno¶æ w og³oszeniach.");
DEFINE("_EZREALTY_CONFIG_COLOUR1","Rollover kolor 1");
DEFINE("_EZREALTY_CONFIG_COLOUR1DESC","To s± kolory komórek, umo¿liwiaj± one zmianê koloru po najechaniu nad nie wska¼nikiem, znajduj± siê one w li¶cie nieruchomo¶ci.");
DEFINE("_EZREALTY_CONFIG_COLOUR2","Rollover kolor 2");
DEFINE("_EZREALTY_CONFIG_COLOUR2DESC","To s± kolory komórek które wczytywane s± po zabraniu wska¼nika myszy znad nich. Dla najlepszego rezultatu podaj kolor t³a swojej strony.");

DEFINE("_EZREALTY_DATABASE1","Aktualizuj bazê danych");
DEFINE("_EZREALTY_DATABASE2","Aktualizacja bazy danych zosta³a wykonana");



// TAGS THAT HAD THEIR LANGUAGE CONTENT CHANGED FOR THE 4.0.0 RELEASE


DEFINE("_EZREALTY_LISTINGS_HITSEXPL","Je¶li aktualizujesz po miêdzy poziomami/typami - licznik wej¶æ zostanie zresetowany do 0");
DEFINE("_EZREALTY_HEADER_OHOUSE","Domy Otwarte ");


// NEW TAGS FOR THE 4.1.0 RELEASE

DEFINE("_EZREALTY_LISTING_SELECTTYPE","Wybierz typ");
DEFINE("_EZREALTY_TYPE_SALE","Na sprzeda¿");
DEFINE("_EZREALTY_TYPE_RENTAL","Do wynajêcia");
DEFINE("_EZREALTY_LISTING_TYPE","Typ wy¶wietlania");
DEFINE("_EZREALTY_LISTING_ANYTYPE","Dowolny typ oferty");
DEFINE("_EZREALTY_RENTAL_FREQUENCY","Op³ata za wynajem");
DEFINE("_EZREALTY_RENTAL_NA","Nie odpowiednie");
DEFINE("_EZREALTY_RENTAL_NIGHTLY","Za dobê");
DEFINE("_EZREALTY_RENTAL_WEEKLY","Za tydzieñ");
DEFINE("_EZREALTY_RENTAL_FNIGHT","Za dwatygodnie");
DEFINE("_EZREALTY_RENTAL_MONTH","Miesiêcznie");
DEFINE("_EZREALTY_RENTAL_SQFT","Za stope kwadratowa");
DEFINE("_EZREALTY_RENTAL_SQMTR","Za metr kwadratowy");
DEFINE("_EZREALTY_RENTAL_SPARE","Dodatkowe pole");


// TAGS THAT HAD THEIR LANGUAGE CONTENT CHANGED FOR THE 4.1.0 RELEASE


DEFINE("_EZREALTY_DETAILS_MARKET1","Niesprzedane/Dostêpne");


// NEW TAGS FOR THE 4.2.0 RELEASE

DEFINE("_EZREALTY_CONFIG_MOBILE","Numer telefonu komórkowego #");
DEFINE("_EZREALTY_CONFIG_MOBILEDESC","Numer komórki bêdzie wykorzystany kontaktu przez SMS. Numer musi byæ zapisany w formacie miêdzynarodowym:- 48(prefix sieci bez zera)(numer bez spacji lub znaków tylko cyfry). Je¶li nie chcesz u¿ywaæ fukcji SMS do kontaktu z kupuj±cych z og³oszeniodawcami zostaw to pole puste.");

DEFINE("_EZREALTY_SELLER_SMS1","SMS #");
DEFINE("_EZREALTY_SELLER_SMS2","Wy¶lij mi SMS!");
DEFINE("_EZREALTY_SELLER_SMS3","WA¯NE: Zanim u¿yjesz tego musisz mieæ aktywne");
DEFINE("_EZREALTY_SELLER_SMS4","konto! Bêdzie musia³o byæ ustanowione HTTP API z twoim panelem kontrolnym Clickatell (w Polsce nie dzia³a - nie wiem na pewno!).");
DEFINE("_EZREALTY_SELLER_SMS5","Twój numer musi byæ zapisany w formacie miêdzynarodowym:- 48(prefix sieci bez zera)(numer bez spacji lub znaków tylko cyfry).");
DEFINE("_EZREALTY_SELLER_SMS6","Wy¶lij SMS przez bramkê Clickatell do agenta");
DEFINE("_EZREALTY_SELLER_SMS7","U¿ytkownik");
DEFINE("_EZREALTY_SELLER_SMS8","Has³o");
DEFINE("_EZREALTY_SELLER_SMS9","Numer telefonu #");
DEFINE("_EZREALTY_SELLER_SMS10","Wiadomo¶æ");
DEFINE("_EZREALTY_SELLER_SMS11","wiadomo¶æ wys³ana");
DEFINE("_EZREALTY_SELLER_SMS12","nr ID wiadomo¶ci");
DEFINE("_EZREALTY_SELLER_SMS13","wys³anie nie powiod³o siê");
DEFINE("_EZREALTY_SELLER_SMS14","nie powiod³a siê autoryzacja");
DEFINE("_EZREALTY_SELLER_SMS15","Musisz podaæ nazwê u¿ytkownika w Clickatell");
DEFINE("_EZREALTY_SELLER_SMS16","Musisz podaæ nazwê has³o do Clickatell");
DEFINE("_EZREALTY_SELLER_SMS17","Musisz podaæ nazwê numer telefonu powi±zanego z twoim kontem Clickatell");
DEFINE("_EZREALTY_SELLER_SMS18","Musisz podaæ nazwê  wiadomo¶æ do agenta");
DEFINE("_EZREALTY_SELLER_SMS19","HTTP API ID#");
DEFINE("_EZREALTY_SELLER_SMS20","Musisz podaæ nazwê API ID Clickatell. Je¶li nie posiadasz ustanów HTTP API przez panel kontrolny Clickatell.");
DEFINE("_EZREALTY_SELLER_SMS21","150 liter max");
DEFINE("_EZREALTY_SELLER_SMS22","Twoje dane w Clickatell");
DEFINE("_EZREALTY_SELLER_SMS23","Wy¶lij SMS przez Clickatell");
DEFINE("_EZREALTY_SELLER_SMS24","Wy¶lij SMS przez Clickatell do kupuj±cego - Utwórz/sprawd¼ profil kupuj±cego ZANIM wy¶lesz SMS!");
DEFINE("_EZREALTY_SELLER_SMS25","Zrobione!");
DEFINE("_EZREALTY_SELLER_SMS26","Wy¶lij SMS");
DEFINE("_EZREALTY_SELLER_SMS27","Upewnij siê ¿e dane z Clickatell s± poprawnie ustawione w ustawieniach komponentu EZ Realty ZANIM wy¶ljesz SMS!!");

DEFINE("_EZREALTY_SELLER_SMS7DESC","To musi byæ twoja nazwa u¿ytkownika w Clickatell Central API.");
DEFINE("_EZREALTY_SELLER_SMS8DESC","To musi byæ twoje has³o w Clickatell Central API.");
DEFINE("_EZREALTY_SELLER_SMS19DESC","To musi byæ twój numer HTTP API w Clickatell Central. Utwórz swoj API ID przez panel kontrolny Clickatell.");


DEFINE("_EZREALTY_CONFIG_TEXTBOX","Szeroko¶æ pola tekstowego");
DEFINE("_EZREALTY_CONFIG_TEXTBOXDESC","Szeroko¶æ wiêkszego pola tekstowego widocznego w dodaj/edytuj szczegó³y nieruchomo¶ci. Ta warto¶æ pomaga zredukowaæ niedopasowanie szaty graficznej.");
DEFINE("_EZREALTY_CONFIG_TEXTAREA","Szeroko¶æ obszaru tekstu");
DEFINE("_EZREALTY_CONFIG_TEXTAREADESC","Szeroko¶æ obszaru tekstowego widocznego w dodaj/edytuj szczegó³y nieruchomo¶ci. Ta warto¶æ pomaga zredukowaæ niedopasowanie szaty graficznej.");
DEFINE("_EZREALTY_TYPE_LEASE","Dzier¿awa");
DEFINE("_EZREALTY_IMAGE_WARNING","<strong><font color='#FF0000'>Zdjêcie musi mieæ rozsze¿enie jpg lub png!!</font></strong>");
DEFINE("_EZREALTY_IMAGE_WARNING2","Jedno lub wiêcej zdjêæ przekracza dpuszczalny rozmiar (wysoko¶æ lub szeroko¶æ)!!");

DEFINE("_EZREALTY_CONFIG_OHOUSE","Link do Domu Otwartego");
DEFINE("_EZREALTY_CONFIG_OHOUSEDESC","Czy chcesz pokazaæ oferty oznaczone jak Dom Otwarty?");
DEFINE("_EZREALTY_CONFIG_MAXWIDTH","Maksymalna dopuszczalna szeroko¶æ zdjêcia");
DEFINE("_EZREALTY_CONFIG_MAXWIDTHDESC","Jaka jest maksymalna dopuszczalna szeroko¶æ w pikselach dla wgrywanych zdjêæ?");
DEFINE("_EZREALTY_CONFIG_MAXHEIGHT","Maksymalna dopuszczalna wysoko¶æ zdjêcia");
DEFINE("_EZREALTY_CONFIG_MAXHEIGHTDESC","Jaka jest maksymalna dopuszczalna wysoko¶æ w pikselach dla wgrywanych zdjêæ?");

DEFINE("_EZREALTY_PIXELS","pikseli");
DEFINE("_EZREALTY_BEDBATH","£ózko/£azienka");
DEFINE("_EZREALTY_BUDGET","Bud¿et");
DEFINE("_EZREALTY_INTERESTED","Zainteresowany?");
DEFINE("_EZREALTY_WANTED","Poszukiwane");
DEFINE("_EZREALTY_PROPERTIES_WANTED","Poszukiwana nieruchomo¶æ");
DEFINE("_EZREALTY_PROPERTIES_WANTEDDESC","Nasz klient zg³asza zapotrzebowanie na nastepuj±c± nieruchomo¶æ:");

DEFINE("_EZREALTY_LEAD_RESPONSE","Odpowied¼ kupuj±cego");
DEFINE("_EZREALTY_RESPONS_PROPLEAD","mo¿e mieæ nieruchomo¶æ odpowiadaj±c± kryteriom kupuj±cego zarejestrowanego w serwisie. Numer identyfikacyjny potencjalnego nabywcy to :-");
DEFINE("_EZREALTY_LEAD_RESPONSEERROR"," Musisz podaæ krótk± wiadomo¶æ");
DEFINE("_EZREALTY_CONFIG_COUNTRY","U¿ywaj zmiennej kraj");

DEFINE("_EZREALTY_CONFIG_NLLINK","Link do nowych og³oszeñ");
DEFINE("_EZREALTY_CONFIG_NLLINKDESC","Czy chcesz wy¶wietliæ link do nowych og³oszen w nag³ówku komponentu (front-endzie)?");
DEFINE("_EZREALTY_STUDIO","Studio");
DEFINE("_EZREALTY_RESET","Reset");
DEFINE("_EZREALTY_LEADCONTACT_PROMO","Masz mo¿e nieruchomo¶æ spe³niaj±c± kryteria którego¶ z naszych zarejestrowanych nabywców?");
DEFINE("_EZREALTY_SKIPFREE_LISTING","Pomiñ darmowe og³oszenia i id¼ do tych p³atnych!!");

DEFINE("_EZREALTY_CONFIG_COLCOUNT","Licznik kolumn");
DEFINE("_EZREALTY_CONFIG_COLCOUNTDESC","Ile kolumn ma mieæ pierwsza kategoria na stronie z ofertami?");
DEFINE("_EZREALTY_CONFIG_COLWIDTH","Szeroko¶æ kolumn");
DEFINE("_EZREALTY_CONFIG_COLWIDTHDESC","Jak szerokie maj± byæ kolumny pierwszej kategorii na stronie z ofertami? Dla przyk³adu, je¶li masz jedn± kolumnê, szeroko¶æ powinna byæ ustawiona na 100%, gdy 2 - 50%, itd. PAMIÊTAJ ¿e znak % MUSI BYÆ PODANY!");

DEFINE("_EZREALTY_ESSENTIALS","Niezbêdnik");
DEFINE("_EZREALTY_OTHERSPECS","Inne specyfikacje");
DEFINE("_EZREALTY_NS","Nie okre¶lone");
DEFINE("_EZREALTY_EA","Email administratora");

DEFINE("_EZREALTY_CONFIG_FORMATTING","Formatowanie");
DEFINE("_EZREALTY_CONFIG_MAPPING","Ustawienia map");
DEFINE("_EZREALTY_CONFIG_MAPWIDTH","Szeroko¶æ mapki");
DEFINE("_EZREALTY_CONFIG_MAPWIDTHDESC","Szeroko¶æ mapki (widoczna we front-endzie) podawana w pikselach.");
DEFINE("_EZREALTY_CONFIG_MAPHEIGHT","Wysoko¶æ mapki");
DEFINE("_EZREALTY_CONFIG_MAPHEIGHTDESC","Wysoko¶æ mapki (widocznej we front-endzie) podawana w pikselach.");
DEFINE("_EZREALTY_CONFIG_ADDRESSWIDTH","Szeroko¶æ pola adresu");
DEFINE("_EZREALTY_CONFIG_ADDRESSWIDTHDESC","Szeroko¶æ pola adresu wy¶wietlanego nad map±, na której jest pokazany.");
DEFINE("_EZREALTY_PROPERTY_MAPLOC","Lokalizacja na mapie");
DEFINE("_EZREALTY_SEARCH_ALLPOSTCODES","Wybierz wszystkie kody pocztowe");




// TAGS THAT HAD THEIR LANGUAGE CONTENT CHANGED FOR THE 4.2.0 RELEASE


DEFINE("_EZREALTY_CONFIG_NEWLIST","Strona z specjalnymi ofertami");
DEFINE("_EZREALTY_CONFIG_NEWLISTDESC","Liczba ofert do wyswietlenia jako 'Nowe oferty', 'Domy otwarte (prezentacje)', 'Poszukiwane nieruchomosci' i linki RSS");


// NEW LANGUAGE TAGS FOR THE *** 4.2.0 STABLE *** RELEASE


DEFINE("_EZREALTY_ERROR_DUPLICATE","ERROR - duplicate entry!!");
DEFINE("_EZREALTY_OPENHOUSE_DETAILS","OpenHouse details");




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