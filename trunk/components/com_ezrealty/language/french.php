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
    **   French language
    **   By: Frank Schroeder(aka Phoenix)
    **   http://www.darkgroup.net
    **  
    \*****************************************/


defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );


// admin.ezstore.php file language tags

DEFINE("_EZREALTY_NOREMOVE","Suppression impossible car certaines offres utilisent encore cette ressource");
DEFINE("_EZREALTY_CLEAN","Suppression des offres expir�es.");

// configuration area settings

DEFINE("_EZREALTY_CONFIG_GENSET","Chemin g�n�ral des images");

DEFINE("_EZREALTY_CONFIG_IMAGESIZES","Taille miniatures & images");
DEFINE("_EZREALTY_CONFIG_WIDTHPROPIMG","Largeur principale de l'image");
DEFINE("_EZREALTY_CONFIG_WIDTHPROPIMGDESC","Largeur des images sur la page des d�tails des biens. Celle ci est exprim�e en pixels pour simplifier l'int�gration dans votre template. Les images seront r�ajust�es en largeur");
DEFINE("_EZREALTY_CONFIG_WIDTHCATTHUMB","Taille de l'image miniature de la cat�gorie"); 
DEFINE("_EZREALTY_CONFIG_WIDTHCATTHUMBDESC","Largeur de l'image de la cat�gorie.");
DEFINE("_EZREALTY_CONFIG_WIDTHTHUMB","Taille maximale des miniatures");
DEFINE("_EZREALTY_CONFIG_WIDTHTHUMBDESC","Taille des miniatures utilis�es sur la page des d�tails des biens");

DEFINE("_EZREALTY_CONFIG_TNCREATOR","Cr�ation des miniatures");
DEFINE("_EZREALTY_CONFIG_GDLIMIT","GD supporte seulement jpg et png!");
DEFINE("_EZREALTY_CONFIG_GDFOUND","GD trouv�");
DEFINE("_EZREALTY_CONFIG_GDCHOOSE","Choisissez le processeur d'images pour les miniatures.");
DEFINE("_EZREALTY_CONFIG_THUMBQUAL","Qualit� des miniatures");
DEFINE("_EZREALTY_CONFIG_THUMBQUALDESC","Qualit� des miniatures cr��es.");
DEFINE("_EZREALTY_CONFIG_IMGDIR","R�pertoire des images");
DEFINE("_EZREALTY_CONFIG_IMGDIRDESC","Le r�pertoire par d�faut est 'ezrealty' et se trouve dans components/com_ezrealty/ezrealty. Les miniatures sont stock�es dans un sous-r�pertoire nomm� th. Si vous changez le r�pertoire vous devrez cr�er les r�pertoires manuellement - y compris celui des miniatures!! Vous ne DEVEZ PAS changer le r�pertoire des miniatures (toujours th)");
DEFINE("_EZREALTY_CONFIG_TNNONE","Aucun");
DEFINE("_EZREALTY_CONFIG_TNGD1","Biblioth�que GD");
DEFINE("_EZREALTY_CONFIG_TNGD2","Biblioth�que GD2");

DEFINE("_EZREALTY_CONFIG_YOURBIZSET","Configuration des donn�es professionelles");
DEFINE("_EZREALTY_CONFIG_BIZNAME","Nom de la soci�t� ou raison sociale");
DEFINE("_EZREALTY_CONFIG_BIZNAMEDESC","Ce nom se retrouvera sur chaque page, y compris les pages d'impressions et de mails.");
DEFINE("_EZREALTY_CONFIG_BIZAD","Adresse de la soci�t�");
DEFINE("_EZREALTY_CONFIG_BIZADDESC","Votre adresse professionelle. Elle apparaitra automatiquement sur chaque page d'impression de fa�on � ce que chaque acheteur potentiel obtienne directement cette adresse sur sa feuille");
DEFINE("_EZREALTY_CONFIG_TELEPHONE","Contact t�l�phonique");
DEFINE("_EZREALTY_CONFIG_TELEPHONEDESC","Votre num�ro de t�l�phone qui sera imprim�  sur chaque page");
DEFINE("_EZREALTY_CONFIG_EMAIL","Votre adresse Email (courrier �lectronique)");
DEFINE("_EZREALTY_CONFIG_EMAILDESC","Votre adresse E-Mail qui sera utilis�e pour chaque requ�te par mail");
DEFINE("_EZREALTY_CONFIG_CURRENCYSIGN","Type de devise");
DEFINE("_EZREALTY_CONFIG_CURRENCYSIGNDESC","Le type de devise affich� avant le prix du bien");
DEFINE("_EZREALTY_CONFIG_BIZINTRO","Introduction");
DEFINE("_EZREALTY_CONFIG_BIZINTRODESC","Texte d'introduction<br />pour votre soci�t�");

DEFINE("_EZREALTY_CONFIG_LAYOUTSETTINGS","Changer la disposition de votre site");

DEFINE("_EZREALTY_CONFIG_TPL","Mod�le");
DEFINE("_EZREALTY_CONFIG_TPLDESC","Choisissez le mod�le de votre site (front-end). Cela aura un effet sur l'affichage des d�tails des biens et sur les impressions");
DEFINE("_EZREALTY_CONFIG_SELTPL","Choisissez votre mod�le");

DEFINE("_EZREALTY_CONFIG_PROPPERPAGE","Biens par page");
DEFINE("_EZREALTY_CONFIG_PROPPERPAGEDESC","Nombre de biens affich�s par page (front-end)");
DEFINE("_EZREALTY_CONFIG_FEATURETITLE","Equipements");
DEFINE("_EZREALTY_CONFIG_FEATURETITLEDESC","Comment voulez vous nommer les �quipements sp�ciaux pour vos fiches ? (ex. Centre d'int�r�t etc). Ce nom sera affich� en titre de ligne sur la fiche du bien.");
DEFINE("_EZREALTY_CONFIG_RECFRIEND","Recommandez ce bien");
DEFINE("_EZREALTY_CONFIG_RECFRIENDDESC","Permettez vous aux visiteurs d'utiliser la fonction? \"Recommandez la propri�t� � un ami\" ");
DEFINE("_EZREALTY_CONFIG_MAILINGVIEW","Ajouter � la Mailing liste");
DEFINE("_EZREALTY_CONFIG_MAILINGDESC","Voulez vous faire apparaitre le lien \"Ajouter � la Mailing liste\" ? Cela permettra aux visiteurs de vous envoyer un email automatiquement et vous pourrez ajouter les informations dans le gestionnaire de mailing liste");
DEFINE("_EZREALTY_CONFIG_SHOWLINKS","Afficher la boite de liens");
DEFINE("_EZREALTY_CONFIG_SHOWLINKSDESC","Voulez vous faire apparaitre la boite de liens - la boite contenant les otions :lien vers la carte, imprimer la page et ajouter aux favoris ?");
DEFINE("_EZREALTY_CONFIG_SC","D�partement");
DEFINE("_EZREALTY_CONFIG_SCDESC","Voulez vous inclure le d�partement et le pays dans le filtre de recherche avanc�?");

DEFINE("_EZREALTY_CONFIG_RSS","Flux RSS");
DEFINE("_EZREALTY_CONFIG_RSSDESC","Voulez-vous faire apparaitre un lien RSS sur vos derni�res propri�t�s?");
DEFINE("_EZREALTY_CONFIG_RSSNN","Nouveau titre du flux RSS");
DEFINE("_EZREALTY_CONFIG_RSSNNDESC","Comment voulez-vous nommer vos nouveaux flux RSS?");
DEFINE("_EZREALTY_CONFIG_RSSOH","Nom du flux RSS \"Journ�e porte ouverte\"");
DEFINE("_EZREALTY_CONFIG_RSSOHDESC","Comment voulez-vous nommer vos flux RSS porte ouverte?");

DEFINE("_EZREALTY_CONFIG_LEAD","Recherche de clients");
DEFINE("_EZREALTY_CONFIG_LEADDESC","Voulez-vous permettre aux visiteurs d'enregistrer des crit�res de recherche correspondants au bien qu'ils convoitent?");

DEFINE("_EZREALTY_CONFIG_MEMSALES","G�rer des listes de biens par des membres enregistr�s");
DEFINE("_EZREALTY_CONFIG_MEMLISTINGS","Ajout de bien par un membre?");
DEFINE("_EZREALTY_CONFIG_MEMLISTINGSDESC","Voulez-vous permettre aux membres enregistr�s d'ajouter des biens via la partie publique du site?");
DEFINE("_EZREALTY_CONFIG_NOTIFICATION","Notification de nouveaux biens");
DEFINE("_EZREALTY_CONFIG_NOTIFICATIONDESC","Voulez-vous �tre inform� sur les nouveaut�s ou les mises � jour de biens?");
DEFINE("_EZREALTY_CONFIG_MEMAPPROVAL","Processus d'approbation");
DEFINE("_EZREALTY_CONFIG_MEMAPPROVALDESC","Les nouveaut�s ou mises � jour requi�rent-elles l'approbation d'un administrateur avant la publication?");
DEFINE("_EZREALTY_CONFIG_NUMLISTINGS","Nombre de biens");
DEFINE("_EZREALTY_CONFIG_NUMLISTINGSDESC","Combien de biens les membres peuvent-ils g�rer?");

DEFINE("_EZREALTY_CONFIG_MEMBERSINTRO","Introduction � l'espace membre");
DEFINE("_EZREALTY_CONFIG_MEMBERSINTRODESC","Ecrivez un texte d'introduction pour l'espace membre, par exemple 'Bienvenu � l'espace membre' etc.");
DEFINE("_EZREALTY_CONFIG_TERMS","R�gles concernant les biens");
DEFINE("_EZREALTY_CONFIG_TERMSDESC","D�crivez les r�gles pour les biens ajout�s par vos membres");

DEFINE("_EZREALTY_CONFIG_IMG1","Images");
DEFINE("_EZREALTY_CONFIG_IMG2","R�glages d'images");
DEFINE("_EZREALTY_CONFIG_BIZ1","Soci�t�/Raison sociale");
DEFINE("_EZREALTY_CONFIG_BIZ2","R�glages professionels");
DEFINE("_EZREALTY_CONFIG_LAY1","Disposition");
DEFINE("_EZREALTY_CONFIG_LAY2","Disposition du site");
DEFINE("_EZREALTY_CONFIG_MEM1","Membres");
DEFINE("_EZREALTY_CONFIG_MEM2","Ventes par membre");
DEFINE("_EZREALTY_CONFIG_PAID1","Biens payants");
DEFINE("_EZREALTY_CONFIG_CUST1","Personnalis�");

DEFINE("_EZREALTY_CONFIG_PP","Vos param�tres PayPal pour proposer des listes de biens payantes");

DEFINE("_EZREALTY_CONFIG_PAIDLISTINGS","Listes de biens payantes");
DEFINE("_EZREALTY_CONFIG_PAIDLISTINGSDESC","Voulez-vous proposer des listes payantes de propri�t� sur votre site ? Les listes payantes permettent aux membres d'inclure des images compl�mentaires et des informations suppl�mentaires dans leur inscription");
DEFINE("_EZREALTY_CONFIG_PPEMAIL","Votre adress E-Mail PayPal");
DEFINE("_EZREALTY_CONFIG_PPEMAILDESC","Votre adresse PayPal PRIMAIRE.<br /><br />Visitez
<a target='_blank' href='http://paypaltech.com/Stephen/affiliate/hemail.htm'>PayPal Tech Resources</a>
pour une m�thode simple pour encoder votre adresse PayPal pour vous prot�ger du spam, alors copier/coller le code dans
l'espace PayPal ci-dessus. N'utiliser pas cette adresse cod�e pour l'adresse de v�rification ci-dessous - elle doit �tre 
pr�sent�e en format normal");
DEFINE("_EZREALTY_CONFIG_CHECKMAIL","Adresse mail pour v�rification");
DEFINE("_EZREALTY_CONFIG_CHECKMAILDESC","Retapez votre adress E-Mail primaire de PAYPAL ici. Elle est utilis�e pour v�rifier les transactions pour les formes de fraude �lectronique impliquant les adresses E-Mail PayPal. Celle-ci NE DOIT PAS �tre dans un format crypt�!!!!");
DEFINE("_EZREALTY_CONFIG_PPCURRENCY","Symbole mon�taire");
DEFINE("_EZREALTY_CONFIG_PPCURRENCYDESC","Code (3 lettres) de PayPal que vous utilisez pour vote adresse Mail primaire PayPal");
DEFINE("_EZREALTY_CONFIG_PPBUTTON","Bouton (Image)");
DEFINE("_EZREALTY_CONFIG_PPBUTTONDESC","Nom de l'image utilis�e pour faire la mise � niveau de son compte vers un compte avec des listes de biens payantes");

DEFINE("_EZREALTY_CONFIG_PPPREMIUM","Nom de la mise � jour standard");
DEFINE("_EZREALTY_CONFIG_PPPREMIUMDESC","Nom de vos listes payantes - ex. Listes Premium etc. Cela appara�tra comme nom d'article sur le rapport de transaction Paypal");
DEFINE("_EZREALTY_CONFIG_PPCOST","Co�t de mise � niveau");
DEFINE("_EZREALTY_CONFIG_PPCOSTDESC","Le co�t pour passer d'une insciption gratuite � une inscription payante");
DEFINE("_EZREALTY_CONFIG_FPNAME","Nom de la mise � niveau de la liste \"meilleurs offres\"");
DEFINE("_EZREALTY_CONFIG_FPNAMEDESC","Comment voulez-vous nommer vos listes \"meilleurs offres\"? Ce nom appara�tra comme nom d'article sur le rapport de transaction Paypal");
DEFINE("_EZREALTY_CONFIG_FPCOST","Co�t de mise � niveau");
DEFINE("_EZREALTY_CONFIG_FPCOSTDESC","Le co�t de mise � niveau d�une inscription de liste de propri�t� payante � une inscription montr�e. Souvenez-vous - les membres ne peuvent entreprendre une mise � niveau avec une inscription gratuite - ils doivent d'abord r�actualiser avec une inscription payante");

DEFINE("_EZREALTY_CONFIG_PPPOSTMODE","Post Mode");
DEFINE("_EZREALTY_CONFIG_PPPOSTMODEDESC","Passer en mode 'Ventes r�elles' pour activer le syst�me PayPal - pour tester votre installation sel�ctionnez 'Ventes tests' (via PayPal Developers Network Sandbox)");
DEFINE("_EZREALTY_CONFIG_LS","Ventes r�elles");
DEFINE("_EZREALTY_CONFIG_TS","Ventes pour tests");

DEFINE("_EZREALTY_CONFIG_SUCCESS","Transaction r�ussie");
DEFINE("_EZREALTY_CONFIG_SUCCESSDESC","Entrez le texte pour une op�ration PayPal r�ussie");
DEFINE("_EZREALTY_CONFIG_CANCEL","Transaction non r�ussie");
DEFINE("_EZREALTY_CONFIG_CANCELDESC","Entrez le texte pour une op�ration PayPal r�ussie ou annul�e");

DEFINE("_EZREALTY_CONFIG_YES","Oui");
DEFINE("_EZREALTY_CONFIG_NO","Non");

DEFINE("_EZREALTY_CONFIG_CONFIGSAVED","Configuration enregistr�e");

// Miscellaneous administration area language tags - error notices and dropdown list boxes

DEFINE("_EZREALTY_ADMIN_BACK","Retour � la Gestion de biens");
DEFINE("_EZREALTY_ADMIN_SOURCEERROR","ERREUR: Fichier source non trouv�!");

// admin.ezrealty.html.php language tags

// Manage property listings page

DEFINE("_EZREALTY_LISTINGS_TITLE","G�rez la liste des biens");
DEFINE("_EZREALTY_LISTINGS_DISPLAYNUM","Affichage #");
DEFINE("_EZREALTY_LISTINGS_SEARCHPROP","Rechercher");
DEFINE("_EZREALTY_LISTINGS_FILTER","Filtrer par :");
DEFINE("_EZREALTY_LISTINGS_SORTLOCALL","-Toutes les localit�s-");
DEFINE("_EZREALTY_LISTINGS_SORTTYPEALL","-Toutes les types de propri�t�s-");
DEFINE("_EZREALTY_LISTINGS_SORTPRICEALL","-Toutes les gammes de prix-");
DEFINE("_EZREALTY_LISTINGS_PROPID","ID# de l'agent");
DEFINE("_EZREALTY_LISTINGS_PROPNAME","Adresse");
DEFINE("_EZREALTY_LISTINGS_PROPCAT","Type de propri�t�");
DEFINE("_EZREALTY_LISTINGS_PROPPRICE","Prix inscrits");
DEFINE("_EZREALTY_LISTINGS_PROPHITS","Hits");
DEFINE("_EZREALTY_LISTINGS_PUBSTATUS","Publi�");
DEFINE("_EZREALTY_LISTINGS_MARKETSTATUS","Vendu");
DEFINE("_EZREALTY_LISTINGS_APPROVEDSTATUS","Approuv�");
DEFINE("_EZREALTY_LISTINGS_LTYPE","Type");
DEFINE("_EZREALTY_LISTINGS_AGENT","Agent");
DEFINE("_EZREALTY_LISTINGS_LISTINGDATE","Date d'inscription");
DEFINE("_EZREALTY_LISTINGS_UPDATE","Derni�re mise � jour");
DEFINE("_EZREALTY_LISTINGS_EDIT","Edition du bien");
DEFINE("_EZREALTY_LISTINGS_APPROVED","Approuv�");
DEFINE("_EZREALTY_LISTINGS_SELLER","Vendeur");

// Add/edit property details page

DEFINE("_EZREALTY_LISTINGS_SELLER_EXPL","<strong><font color='#FF0000'>Lisez-moi!</font></strong><br /><br />Les informations propres au vendeur sont utilis�es sur le site pour permettre aux acheteurs �ventuels d'entrer en   
contact avec le vendeur directement pour plus de renseignements ou d'organiser une visite. Si vous permettez � vos membres 
d'inscrire des propri�t�s pour la vente, ces informations seront exig�es pour achever cette inscription. Si vous voulez que des acheteurs �ventuels entrent en contact avec vous plut�t que le propri�taire foncier - laissez cette section vierge. .  Le lien  \"Plus d'infos\" d'e-mail  vous montre alors s'il a �t� configur� comme cela");
DEFINE("_EZREALTY_DETAILS_REQ","*Requis");
DEFINE("_EZREALTY_DETAILS_OPT","*Optionel");
DEFINE("_EZREALTY_DETAILS_TITLE","Liste de biens");
DEFINE("_EZREALTY_DETAILS_MARKET","Etat de vente du bien");
DEFINE("_EZREALTY_DETAILS_SOLDDESC"," - Ce r�glage vous permet de faire apparaitre l'�tat de vente d'un bien inscrit - La valeur par d�faut est 'Non vendu'");
DEFINE("_EZREALTY_DETAILS_SELMARKET","S�lectionnez l'�tat de vente");

DEFINE("_EZREALTY_DETAILS_SELSTATE","S�lectionnez le d�partement");
DEFINE("_EZREALTY_DETAILS_SELCOUNTRY","S�lectionnez le pays");
DEFINE("_EZREALTY_DETAILS_SELCAT","S�lectionnez la cat�gorie du bien");
DEFINE("_EZREALTY_DETAILS_SELPRICE","S�lectionnez la gamme de prix");
DEFINE("_EZREALTY_DETAILS_SELROOM","S�lectionnez les chambres � coucher");
DEFINE("_EZREALTY_DETAILS_LISTDATE","Date d'inscription");
DEFINE("_EZREALTY_DETAILS_LISTDATEDESC","Date d'inscription pour la vente");
DEFINE("_EZREALTY_DETAILS_AGENTID","ID# de l'agent vendeur");
DEFINE("_EZREALTY_DETAILS_AGENTIDDESC","A utiliser si vous avez des ID internes � votre soci�t� pour mieux retrouver le vendeur du bien");
DEFINE("_EZREALTY_DETAILS_PROPADDRESS1","Adresse 1");
DEFINE("_EZREALTY_DETAILS_PROPCITY","Localit�");
DEFINE("_EZREALTY_DETAILS_AREA","D�partement");
DEFINE("_EZREALTY_DETAILS_COUNTRY","Pays");
DEFINE("_EZREALTY_DETAILS_PROPPOSTCODE","Code Postal");
DEFINE("_EZREALTY_DETAILS_PROPTYPE","Type de bien");
DEFINE("_EZREALTY_DETAILS_ADLINE","Phrase courte d'accroche");
DEFINE("_EZREALTY_DETAILS_PROPDESC","Description compl�te du bien");
DEFINE("_EZREALTY_DETAILS_SHORTDESC","Description courte du bien:<br />(max 255 char)");
DEFINE("_EZREALTY_DETAILS_PROPPRICE","Prix de la propri�t�");
DEFINE("_EZREALTY_DETAILS_LANDTYPE","Terrain type/taille");
DEFINE("_EZREALTY_DETAILS_LANDTYPEDESC","ex. Libre, Bail, 100 hectare etc.");
DEFINE("_EZREALTY_DETAILS_BEDROOMS","Chambres � coucher");
DEFINE("_EZREALTY_DETAILS_BEDROOMSDESC","Nombre de chambres � coucher ");
DEFINE("_EZREALTY_DETAILS_BATHROOMS","Salle de bains");
DEFINE("_EZREALTY_DETAILS_BATHROOMSDESC","Nombre de salle de bains ");
DEFINE("_EZREALTY_DETAILS_PARKING","Place de stationnement");
DEFINE("_EZREALTY_DETAILS_PARKINGDESC","Nombre de places de stationnement disponibles pour voitures");
DEFINE("_EZREALTY_DETAILS_MAPREF","Plan de situation du bien");
DEFINE("_EZREALTY_DETAILS_MAPREFDESC","Plan de l'emplacement du bien.<br />Un site gratuit pour les plans existe sur multimap.com");
DEFINE("_EZREALTY_DETAILS_VTOUR","Visite virtuelle du bien");
DEFINE("_EZREALTY_DETAILS_VTOURDESC","L'URL de la page d'une visite virtuelle du bien. <br />Ce lien s'ouvrira dans une nouvelle fen�tre");
DEFINE("_EZREALTY_DETAILS_SAVED","D�tails du bien enregistr�");

DEFINE("_EZREALTY_VLDET_IMAGE1","IMAGE1");
DEFINE("_EZREALTY_VLDET_IMAGE2","IMAGE2");
DEFINE("_EZREALTY_VLDET_IMAGE3","IMAGE3");
DEFINE("_EZREALTY_VLDET_IMAGE4","IMAGE4");
DEFINE("_EZREALTY_VLDET_IMAGE5","IMAGE5");
DEFINE("_EZREALTY_VLDET_IMAGE6","IMAGE6");
DEFINE("_EZREALTY_VLDET_IMAGE7","IMAGE7");
DEFINE("_EZREALTY_VLDET_IMAGE8","IMAGE8");
DEFINE("_EZREALTY_VLDET_IMAGE9","IMAGE9");
DEFINE("_EZREALTY_VLDET_IMAGE10","IMAGE10");
DEFINE("_EZREALTY_VLDET_IMAGE11","IMAGE11");
DEFINE("_EZREALTY_VLDET_IMAGE12","IMAGE12");

DEFINE("_EZREALTY_VLDET_CURRENTIMG","Image actuelle");
DEFINE("_EZREALTY_VLDET_CHOOSENEW","S�lectionnez la nouvelle image");
DEFINE("_EZREALTY_VLDET_UPLOADNEW","Upload de l'image");
DEFINE("_EZREALTY_VLDET_DELETEIMG","Supprimmer l'image");
DEFINE("_EZREALTY_VLDET_DELETE","Suppression");
DEFINE("_EZREALTY_VLDET_OPENFULLSIZE","Ouvrir l'image en taille r�elle");
DEFINE("_EZREALTY_VLDET_TNPREV","Pr�affichage de la miniature");

DEFINE("_EZREALTY_DETAILS_CTOWN","Ville � proximit�");
DEFINE("_EZREALTY_DETAILS_CTPORT","Transport en commun � proximit�");
DEFINE("_EZREALTY_DETAILS_ADDFEATURES","Equipement suppl�mentaire");
DEFINE("_EZREALTY_DETAILS_AGE","Age du bien");
DEFINE("_EZREALTY_DETAILS_OHOUSE","Y a t'il des journ�es porte ouverte");
DEFINE("_EZREALTY_DETAILS_OHOUSEDET","Journ�e porte ouverte:<br />Si cette propri�t� a des jours de visite, incluez des d�tails comme des dates et des horaires etc.");

DEFINE("_EZREALTY_DETAILS_APPR","Validation du bien");
DEFINE("_EZREALTY_DETAILS_PUBL","Publication du bien");
DEFINE("_EZREALTY_DETAILS_LISTSTATUS","Type d'inscription");
DEFINE("_EZREALTY_DETAILS_FREESTATUS","Inscription gratuite");
DEFINE("_EZREALTY_DETAILS_LISTPREMIUM","Inscription payante");

DEFINE("_EZREALTY_DETAILS_ERROR1","Le bien n�cessite une adresse");
DEFINE("_EZREALTY_DETAILS_ERROR2","Le bien n�cessite le nom d'une ville");
DEFINE("_EZREALTY_DETAILS_ERROR3","Vous devez s�lectionnez un d�partement");
DEFINE("_EZREALTY_DETAILS_ERROR4","Vous devez choisir un pays");
DEFINE("_EZREALTY_DETAILS_ERROR5","Le bien doit avoir un code postal d�fini");
DEFINE("_EZREALTY_DETAILS_ERROR6","Vous devez choisir un type de propri�t�");
DEFINE("_EZREALTY_DETAILS_ERROR7","Vous devez d�finir le nombre de chambres � coucher");
DEFINE("_EZREALTY_DETAILS_ERROR8","Vous devez entrer un prix");
DEFINE("_EZREALTY_DETAILS_ERROR9","Vous devez choisir une gamme de prix");
DEFINE("_EZREALTY_DETAILS_ERROR10","Vous devez entrer une phrase courte d'accroche");
DEFINE("_EZREALTY_DETAILS_ERROR11","Vous devez entrer une description courte");
DEFINE("_EZREALTY_DETAILS_ERROR12","Le bien doit avoir au minimum une photo");

DEFINE("_EZREALTY_DETAILS_TAB1A","Adresse");
DEFINE("_EZREALTY_DETAILS_TAB1B","Adresse du bien");
DEFINE("_EZREALTY_DETAILS_TAB2A","Equipement");
DEFINE("_EZREALTY_DETAILS_TAB2B","Equipements du bien");
DEFINE("_EZREALTY_DETAILS_TAB3A","Marketing");
DEFINE("_EZREALTY_DETAILS_TAB3B","Information  marketing");
DEFINE("_EZREALTY_DETAILS_TAB4A","Images");
DEFINE("_EZREALTY_DETAILS_TAB4B","Propri�t�s d'image(s)");
DEFINE("_EZREALTY_DETAILS_TAB5A","Vendeur");
DEFINE("_EZREALTY_DETAILS_TAB5B","D�tails du vendeur");
DEFINE("_EZREALTY_DETAILS_TAB6A","Administration");
DEFINE("_EZREALTY_DETAILS_TAB6B","Processus d'administration");

DEFINE("_EZREALTY_DETAILS_MARKET2","N�gociation");
DEFINE("_EZREALTY_DETAILS_MARKET3","N�gociation du Contrat");
DEFINE("_EZREALTY_DETAILS_MARKET4","Sous Contrat");
DEFINE("_EZREALTY_DETAILS_MARKET5","Vendu");

DEFINE("_EZREALTY_DETAILS_SOURCE1","Moteur de recherche");
DEFINE("_EZREALTY_DETAILS_SOURCE2","Site Web");
DEFINE("_EZREALTY_DETAILS_SOURCE3","Navigation");
DEFINE("_EZREALTY_DETAILS_SOURCE4","Partenaire");
DEFINE("_EZREALTY_DETAILS_SOURCE5","Autre - � sp�cifier ci-dessous");

// Manage property price range page

DEFINE("_EZREALTY_PRICES_DISPLAYNUM","Afficher #");
DEFINE("_EZREALTY_PRICES_SEARCHCOM","Recherche");
DEFINE("_EZREALTY_PRICES_PUBSTATUS","Publi�");
DEFINE("_EZREALTY_PRICES_REORDER","R�organiser");
DEFINE("_EZREALTY_MODPRICES_ADD","Ajout");
DEFINE("_EZREALTY_MODPRICES_EDIT","Edition");
DEFINE("_EZREALTY_MODPRICES_ORDER","Trier");

// Manage property city/town/suburbs

DEFINE("_EZREALTY_LOCALITIES_TITLE","G�rer la ville/localit� dans la liste de recherche/s�lection");
DEFINE("_EZREALTY_LOCALITIES_DISPLAYNUM","Afficher #");
DEFINE("_EZREALTY_LOCALITIES_LOC","Nom de la ville/localit�");
DEFINE("_EZREALTY_LOCALITIES_PUBSTATUS","Publi�");
DEFINE("_EZREALTY_LOCALITIES_REORDER","R�organiser");
DEFINE("_EZREALTY_MODLOC_TITLE","El�ment de recherche/s�lection pour la ville/localit�");
DEFINE("_EZREALTY_MODLOC_ADD","Ajout");
DEFINE("_EZREALTY_MODLOC_EDIT","Edition");
DEFINE("_EZREALTY_MODLOC_LOC","Nom de la ville/localit�");
DEFINE("_EZREALTY_MODLOC_ORDER","Trier");
DEFINE("_EZREALTY_MODLOC_SAVED","D�tails de ville/localit� enregistr�");
DEFINE("_EZREALTY_MODLOC_ERROR1","Vous devez entrer un nom de ville/localit�");
DEFINE("_EZREALTY_LOCALITIES_EDITTAG","Edition de la ville/localit� du bien");

// Manage property states/regional areas

DEFINE("_EZREALTY_STATE_TITLE","G�rer le d�partement dans la liste de recherche/s�lection");
DEFINE("_EZREALTY_STATE_DISPLAYNUM","Afficher #");
DEFINE("_EZREALTY_STATE_LOC","Nom du d�partement");
DEFINE("_EZREALTY_STATE_PUBSTATUS","Publi�");
DEFINE("_EZREALTY_STATE_REORDER","R�organiser");
DEFINE("_EZREALTY_STATE_TITLE2","El�ment de recherche/s�lection pour le d�partement");
DEFINE("_EZREALTY_STATE_ADD","Ajout");
DEFINE("_EZREALTY_STATE_EDIT","Edition");
DEFINE("_EZREALTY_STATE_ORDER","Trier");
DEFINE("_EZREALTY_STATE_SAVED","D�tails du d�partement enregistr�s");
DEFINE("_EZREALTY_STATE_ERROR1","Vous devez entrer un nom pour le d�partement");
DEFINE("_EZREALTY_STATE_EDITTAG","Edition du d�partement");

// Manage property country areas

DEFINE("_EZREALTY_COUNTRY_TITLE","G�rer le pays dans la liste de recherche/s�lection");
DEFINE("_EZREALTY_COUNTRY_DISPLAYNUM","Afficher #");
DEFINE("_EZREALTY_COUNTRY_LOC","Nom du pays");
DEFINE("_EZREALTY_COUNTRY_PUBSTATUS","Publi�");
DEFINE("_EZREALTY_COUNTRY_REORDER","R�organiser");
DEFINE("_EZREALTY_COUNTRY_TITLE2","El�ment de recherche/s�lection pour le pays");
DEFINE("_EZREALTY_COUNTRY_ADD","Ajout");
DEFINE("_EZREALTY_COUNTRY_EDIT","Edition");
DEFINE("_EZREALTY_COUNTRY_ORDER","Trier");
DEFINE("_EZREALTY_COUNTRY_SAVED","Nom de pays enregistr�");
DEFINE("_EZREALTY_COUNTRY_ERROR1","Vous devez entrer un nom de pays");
DEFINE("_EZREALTY_COUNTRY_EDITTAG","Editon du pays");

// Manage bedroom numbers

DEFINE("_EZREALTY_ROOMS_TITLE","G�rer le nombre de chambres � coucher dans la liste de recherche/s�lection");
DEFINE("_EZREALTY_ROOMS_DISPLAYNUM","Afficher #");
DEFINE("_EZREALTY_ROOMS_LOC","Nombre de chambres � coucher");
DEFINE("_EZREALTY_ROOMS_PUBSTATUS","Publi�");
DEFINE("_EZREALTY_ROOMS_REORDER","R�organiser");
DEFINE("_EZREALTY_ROOMS_TITLE2","El�ment de recherche/s�lection pour la(les) chambre(s) � coucher");
DEFINE("_EZREALTY_ROOMS_ADD","Ajout");
DEFINE("_EZREALTY_ROOMS_EDIT","Edition");
DEFINE("_EZREALTY_ROOMS_ORDER","Trier");
DEFINE("_EZREALTY_ROOMS_SAVED","Nombre de chambres � coucher enregistr�");
DEFINE("_EZREALTY_ROOMS_ERROR1","Vous devez entrer un nombre de chambres � coucher");
DEFINE("_EZREALTY_ROOMS_EDITTAG","Edition du nombre de chambres � coucher");

// Manage leads list

DEFINE("_EZREALTY_LEADS_TITLE","G�rer la liste de recherche du(des) client(s)");
DEFINE("_EZREALTY_LEADS_DISPLAYNUM","Afficher #");
DEFINE("_EZREALTY_LEADS_AR","Date d'ajout/�dition");
DEFINE("_EZREALTY_LEADS_LCONTACT","D�tails de contact");
DEFINE("_EZREALTY_LEADS_LNAME","Nom");
DEFINE("_EZREALTY_LEADS_LEMAIL","E-mail");
DEFINE("_EZREALTY_LEADS_LLOC","Ville/Localit� souhait�e");
DEFINE("_EZREALTY_LEADS_EDITTAG","Afficher/Editer la liste de recherche du(des) client(s)");
DEFINE("_EZREALTY_LEADS_ADD","Ajout");
DEFINE("_EZREALTY_LEADS_EDIT","Edition");
DEFINE("_EZREALTY_LEADS_TITLE2","D�tails de vente de la liste de recherche du(des) client(s)");
DEFINE("_EZREALTY_LEADS_FMATCH","Trouver un bien correspondant");

DEFINE("_EZREALTY_LEADS_HPHONE","Num�ro de t�l�phone personnel");
DEFINE("_EZREALTY_LEADS_WPHONE","Num�ro de t�l�phone du travail");
DEFINE("_EZREALTY_LEADS_MOBILE","Num�ro de t�l�phone mobile");
DEFINE("_EZREALTY_LEADS_FAX","Num�ro de Fax");
DEFINE("_EZREALTY_LEADS_SOURCE","Comment nous avez vous trouv�");
DEFINE("_EZREALTY_LEADS_COMMENTS","Commentaires");
DEFINE("_EZREALTY_LEADS_DETAILS","D�tails du bien");
DEFINE("_EZREALTY_LEADS_BUDGET","Budget d'achat");

DEFINE("_EZREALTY_LEADS_SAVED","D�tails sur la liste de biens recherch�s par client enregistr�");

DEFINE("_EZREALTY_LEADS_ERROR1","Vous devez entrer un nom");

DEFINE("_EZREALTY_LEADS_ERROR2","Vous devez entrer une adresse email");
DEFINE("_EZREALTY_LEADS_ERROR3","Vous devez choisir un type de bien");
DEFINE("_EZREALTY_LEADS_ERROR4","Vous devez choisir une gamme de prix");
DEFINE("_EZREALTY_LEADS_ERROR5","Vous devez choisir la ville/localit�");
DEFINE("_EZREALTY_LEADS_ERROR6","Vous devez entrer le nombre de chambres � coucher");

// Manage property-type categories

DEFINE("_EZREALTY_CATEGORY_PAGETITLE","Gestion des cat�gories de biens");
DEFINE("_EZREALTY_CATEGORY_DISPLAYNUM","Afficher #");
DEFINE("_EZREALTY_CATEGORY_SEARCHCAT","Recherche");
DEFINE("_EZREALTY_CATEGORY_CATNAME","Cat�gorie");
DEFINE("_EZREALTY_CATEGORY_PUBSTATUS","Publi�");
DEFINE("_EZREALTY_CATEGORY_ACCLEVEL","Acc�s");
DEFINE("_EZREALTY_CATEGORY_REORDER","R�organiser");
DEFINE("_EZREALTY_CATEGORY_MAIN","Cat�gorie de bien");
DEFINE("_EZREALTY_CATEGORY_ADD","Ajout");
DEFINE("_EZREALTY_CATEGORY_EDIT","Edition");
DEFINE("_EZREALTY_CATEGORY_DEFTITLE","Titre");
DEFINE("_EZREALTY_CATEGORY_DEFCONTENT","Description");
DEFINE("_EZREALTY_CATEGORY_DEFACCESS","Acc�s");
DEFINE("_EZREALTY_CATEGORY_DEFORDER","Trier");
DEFINE("_EZREALTY_CATEGORY_IMAGE","Image pour la cat�gorie");
DEFINE("_EZREALTY_CATEGORY_IMAGESEL","S�lecteur d'image de cat�gorie");
DEFINE("_EZREALTY_CATEGORY_SAVED","Cat�gorie de bien enregistr�");
DEFINE("_EZREALTY_CATEGORY_ERROR1","La cat�gorie doit avoir un nom");
DEFINE("_EZREALTY_CATEGORY_EDITTAG","Edition de la cat�gorie de bien");

// Manage property-type categories

DEFINE("_EZREALTY_MARKET_PAGETITLE","Titre pour l'�tat de vente du bien");
DEFINE("_EZREALTY_MARKET_DISPLAYNUM","Afficher #");
DEFINE("_EZREALTY_MARKET_STATUS","Etat de vente");
DEFINE("_EZREALTY_MARKET_PUBSTATUS","Publi�");
DEFINE("_EZREALTY_MARKET_REORDER","R�organiser");
DEFINE("_EZREALTY_MARKET_MAIN","Titre de l'�tat de vente du bien sur le march�");
DEFINE("_EZREALTY_MARKET_ADD","Ajout");
DEFINE("_EZREALTY_MARKET_EDIT","Edition");
DEFINE("_EZREALTY_MARKET_DEFNAME","Nom");
DEFINE("_EZREALTY_MARKET_DEFORDER","Trier");
DEFINE("_EZREALTY_MARKET_SAVED","Titre de l'�tat de vente du bien enregistr�");
DEFINE("_EZREALTY_MARKET_ERROR1","L'�tat de vente du bien doit comporter un titre");

// General error messages

DEFINE("_EZREALTY_GENERAL_ERROR1","Choisissez un article � ");
DEFINE("_EZREALTY_CONFIG_ERROR","Le fichier de configuration est prot�g� en �criture. Changez la permission d��criture et r�essayez.");

// Miscellaneous language tags for hyperlinks and image tags

DEFINE("_EZREALTY_GENERAL_PUBLISHED","Publi�");
DEFINE("_EZREALTY_GENERAL_UNPUBLISHED","Non publi�");
DEFINE("_EZREALTY_GENERAL_APPROVED","Approuv�");
DEFINE("_EZREALTY_GENERAL_UNAPPROVED","Non approuv�");
DEFINE("_EZREALTY_GENERAL_CHECKOUT","V�rifi�");
DEFINE("_EZREALTY_GENERAL_RETURN","Retour vers la gestion de bien");
DEFINE("_EZREALTY_GENERAL_UP","Monter");
DEFINE("_EZREALTY_GENERAL_DOWN","Descendre");
DEFINE("_EZREALTY_GENERAL_EDITPROP","Editon du bien");
DEFINE("_EZREALTY_GENERAL_SOLD","Vendu");
DEFINE("_EZREALTY_GENERAL_CONTRACT","Sous contrat");

DEFINE("_EZREALTY_GENERIC_ADD","Ajout");
DEFINE("_EZREALTY_GENERIC_EDIT","Edition");

//////////////////// FRONT END FILE LANGUAGE TAGS ///////////////////////

// includes.ezrealty.php file

DEFINE("_EZREALTY_HOME","Accueil");

// ezrealty.php file

DEFINE("_EZREALTY_BACK","Retour");
DEFINE("_EZREALTY_INCLUDES_HOME","Accueil");
DEFINE("_EZREALTY_INCLUDES_SEARCH","Rechercher");
DEFINE("_EZREALTY_INCLUDES_NEW","Nouveaut�s");
DEFINE("_EZREALTY_CATEGORIES","Type de bien");
DEFINE("_EZREALTY_PROPERTIES","Propri�t�s");
DEFINE("_EZREALTY_PROPERTY","Bien");
DEFINE("_EZREALTY_INCLUDES_RSSOH","Liste de journ�es des visites");
DEFINE("_EZREALTY_INCLUDES_POSTMAIL","Merci - vous pouvez fermer la fen�tre maintenant");

// category display

DEFINE("_EZREALTY_PAGES","pages");
DEFINE("_EZREALTY_PREV","pr�c�dente");
DEFINE("_EZREALTY_NEXT","prochaine");
DEFINE("_EZREALTY_READMORE","lire la suite");
DEFINE("_EZREALTY_VIEWPROP","Afficher la cat�gorie");

// send to friend and arrange viewing forms

DEFINE("_EZREALTY_INVITE_VIEW_PROP","vous a invit� � voir un bien inscrit pour la vente. Utilisez le lien ci-dessous pour le voir.");
DEFINE("_EZREALTY_RECCOMEND_PROP_FROM_FREND"," Un bien recommand� pour vous par un ami");
DEFINE("_EZREALTY_FROM","de");
DEFINE("_EZREALTY_REPLYTO","R�pondre �");
DEFINE("_EZREALTY_MAIL_SENT","Merci! Votre recommandation de bien a �t� envoy�e ...");
DEFINE("_EZREALTY_MAIL_VIEWINGSENT","Merci! Votre demande de visite a �t� envoy�e ...");
DEFINE("_EZREALTY_INSPECTION"," Demande de visite de bien");
DEFINE("_EZREALTY_TELEPHONE","Num�ro de t�l�phone pour le contact:");
DEFINE("_EZREALTY_DATETIME","Date et heure pr�f�r�es:");
DEFINE("_EZREALTY_REQUEST_MAILINGLIST","aimerait �tre ajout� � votre liste de distribution. Merci d'utiliser le lien ci-dessous pour voir le bien qu'ils regardaient, cela peut vous aider � identifier leurs int�r�ts.");
DEFINE("_EZREALTY_PROPERTY_INTERESTS","Ce visiteur est int�ress� par ce type de bien:");
DEFINE("_EZREALTY_MAILING_TITLE"," Requ�te d'ajout � la liste de distribution");
DEFINE("_EZREALTY_MAILINGLIST_SENT","Merci! Votre requ�te d'ajout � la liste de distribution a bien �t� �t� envoy�e ...");
DEFINE("_EZREALTY_AGENTIDREF","Num�ro de r�f�rence de l'agent:");

// viewdetails.ezrealty.php file

DEFINE("_EZREALTY_VIEWDET_NAME_EMAIL","Merci de remplir enti�rement le formulaire!");
DEFINE("_EZREALTY_VIEWDET_NOVIEW","D�sol�, cette fonction n'est pas disponible � l'heure actuelle.");
DEFINE("_EZREALTY_PROPGONE","Le bien que vous recherchez n'existe plus, ou n'a pas encore �t� publi�!");
DEFINE("_EZREALTY_VIEWDET_PROPDET","D�tails du bien");
DEFINE("_EZREALTY_VIEWDET_MAP","Afficher la carte");
DEFINE("_EZREALTY_VIEWDET_TOUR","Visite");
DEFINE("_EZREALTY_VIEWDET_VTOUR","Faire une visite virtuelle");
DEFINE("_EZREALTY_VIEWDET_PRINT","Imprimer cette page");
DEFINE("_EZREALTY_VIEWDET_FAVS","Ajout au favoris");
DEFINE("_EZREALTY_VIEWDET_VIEWING","Plus d'infos");
DEFINE("_EZREALTY_VIEWDET_VNAME","Votre nom");
DEFINE("_EZREALTY_VIEWDET_VMAIL","Votre E-mail");
DEFINE("_EZREALTY_VIEWDET_VPHONE","Votre num�ro de t�l�phone");
DEFINE("_EZREALTY_VIEWDET_VTIME","Date & Heure d�sir�es");
DEFINE("_EZREALTY_VIEWDET_SEND","Envoyer");
DEFINE("_EZREALTY_VIEWDET_SEND_FRIEND","Envoyer � un ami");
DEFINE("_EZREALTY_VIEWDET_YOUR_NAME","Votre Nom");
DEFINE("_EZREALTY_VIEWDET_YOUR_MAIL","Votre E-Mail");
DEFINE("_EZREALTY_VIEWDET_FRIENDS_NAME","Le nom de votre ami");
DEFINE("_EZREALTY_VIEWDET_FRIENDS_MAIL","L'adresse E-Mail de votre ami");
DEFINE("_EZREALTY_VIEWDET_APPROX","Approx.");
DEFINE("_EZREALTY_VIEWDET_LINKS","Pratique");
DEFINE("_EZREALTY_VIEWDET_FPLANS","Plans");
DEFINE("_EZREALTY_VIEWDET_MAILING","Rejoignez notre liste de distribution");
DEFINE("_EZREALTY_VIEWDET_MAILING_SPEIL","Les listes de biens sont souvent mises � jour. Restez inform�s!");
DEFINE("_EZREALTY_VIEWDET_INTERESTS","Je suis int�ress� par les types de bien suivants");
DEFINE("_EZREALTY_VIEWDET_LOCALITY","Localit�");
DEFINE("_EZREALTY_VIEWDET_LAND","Type de terrain");
DEFINE("_EZREALTY_VIEWDET_BEDROOM","Chambre � coucher");
DEFINE("_EZREALTY_VIEWDET_BEDROOMS","Chambres � coucher");
DEFINE("_EZREALTY_VIEWDET_BATHROOM","Salle de bains");
DEFINE("_EZREALTY_VIEWDET_BATHROOMS","Salles de bains");
DEFINE("_EZREALTY_VIEWDET_PARKING","Stationnement pour");
DEFINE("_EZREALTY_VIEWDET_PARKING2","Stationnement");
DEFINE("_EZREALTY_VIEWDET_GALLERY","Galerie d'images");
DEFINE("_EZREALTY_VIEWDET_SOLD","Vendu");
DEFINE("_EZREALTY_VIEWDET_CONTRACT","Sous contrat");
DEFINE("_EZREALTY_VIEWDET_REGISTER","Enregistrez-vous");

DEFINE("_EZREALTY_VIEWDET_PRICE","Prix");
DEFINE("_EZREALTY_VIEWDET_EXTRA","Equipements");
DEFINE("_EZREALTY_VIEWDET_YES","Oui");
DEFINE("_EZREALTY_VIEWDET_NO","Non");
DEFINE("_EZREALTY_VIEWDET_LOCATION","Localit�");
DEFINE("_EZREALTY_VIEWDET_TOWN","Ville la plus proche");
DEFINE("_EZREALTY_VIEWDET_TPORT","Transport en commun");
DEFINE("_EZREALTY_VIEWDET_AGE","Age");

DEFINE("_EZREALTY_VIEWDET_PSELLERS","Vendeurs");
DEFINE("_EZREALTY_VIEWDET_SELLER","Vendeur");
DEFINE("_EZREALTY_VIEWDET_SELLER_PHONE","# de contact");
DEFINE("_EZREALTY_VIEWDET_SELLER_ARRANGE","Afficher le bien");
DEFINE("_EZREALTY_VIEWDET_SELLER_VIEWING","Organiser un rendez-vous directement avec le vendeur");

DEFINE("_EZREALTY_PIX_HOVER","Pour changer l'image, passer la souris sur la miniature ci-dessous");

// search.ezrealty.php file

DEFINE("_EZREALTY_SEARCHPRICE","Gamme de prix");
DEFINE("_EZREALTY_SEARCHPROPTYPE","Type de bien");
DEFINE("_EZREALTY_SEARCHLOC","Localit�");
DEFINE("_EZREALTY_SEARCHSUB","Ville/Localit�");
DEFINE("_EZREALTY_SEARCHREG","D�partement");
DEFINE("_EZREALTY_SEARCHCON","Pays");
DEFINE("_EZREALTY_SEARCHBRM","Chambres � coucher");
DEFINE("_EZREALTY_SEARCHORD","Ordre");
DEFINE("_EZREALTY_SEARCHADV","Filtre de recherche avanc�");
DEFINE("_EZREALTY_SEARCH_SEARCH","Recherche");

DEFINE("_EZREALTY_SEARCH_ALCAT","S�lectionnez toutes les cat�gories");
DEFINE("_EZREALTY_SEARCH_ALLOC","S�lectionnez toutes les villes/localit�s");
DEFINE("_EZREALTY_SEARCH_ALSTA","S�lectionnez toutes les d�partements");
DEFINE("_EZREALTY_SEARCH_ALCOU","S�lectionnez toutes les pays");
DEFINE("_EZREALTY_SEARCH_MINPRI","prix minimum");
DEFINE("_EZREALTY_SEARCH_MAXPRI","prix maximum");
DEFINE("_EZREALTY_SEARCH_MINBED","minimum");
DEFINE("_EZREALTY_SEARCH_MAXBED","maximum");
DEFINE("_EZREALTY_SEARCH_ONLYAV","Uniquement les biens disponibles");
DEFINE("_EZREALTY_SEARCH_PRIASC","Prix croissants");
DEFINE("_EZREALTY_SEARCH_PRIDESC","Prix d�croissants");
DEFINE("_EZREALTY_SEARCH_ASC","Date croissantes");
DEFINE("_EZREALTY_SEARCH_DESC","Date d�croissantes");

// results.ezrealty.php file

DEFINE("_EZREALTY_RESULTSL_SELECT","Veuillez s�lectionnez vos param�tres de recherche!");
DEFINE("_EZREALTY_RESULTS_RESULTS","R�sultats:");
DEFINE("_EZREALTY_RESULTS_NORESULTS","D�sol� - aucun r�sultat trouv�...");
DEFINE("_EZREALTY_RESULTS_NEW","Dernier");
DEFINE("_EZREALTY_RESULTS_NEWLISTINGS","Nouveaux biens");

// printdetails.ezrealty.php file

DEFINE("_EZREALTY_PRINT_ID","ID du bien");
DEFINE("_EZREALTY_PRINT_TELEPHONE","T�l�phone:");
DEFINE("_EZREALTY_PRINT_PRINT","Impression �cran");
DEFINE("_EZREALTY_PRINT_CLOSE","Fermer la fen�tre");

// submit lead stuff

DEFINE("_EZREALTY_SUBLEAD_TITLE","Entrez votre recherche");
DEFINE("_EZREALTY_SUBLEAD_INTRO","De nouvelles offres arrivent tous les jours. Si vous ne trouvez pas ce que vous recherchez aujourd'hui, pourquoi ne pas enregistrer vos crit�res de recherche. Nous entrerons en contact avec vous, d�s qu'une offre correspondant � vos besoins sera disponible.
");
DEFINE("_EZREALTY_SUBLEAD_THANKS","Merci - votre demande a �t� envoy�e.");
DEFINE("_EZREALTY_SUBLEAD_CONTACT","Vos d�tails de contact");
DEFINE("_EZREALTY_SUBLEAD_NOTON","D�sol� - actuellement on n'accepte pas de recherches par le client");

DEFINE("_EZREALTY_LM_ERROR1","Veuillez entrer votre nom");
DEFINE("_EZREALTY_LM_ERROR2","Veuillez entrer votre adresse email");
DEFINE("_EZREALTY_LM_ERROR3","Veuillez s�lectionnez une cat�gorie");
DEFINE("_EZREALTY_LM_ERROR4","Veuillez s�lectionnez une gamme de prix");
DEFINE("_EZREALTY_LM_ERROR5","Veuillez s�lectionnez une localit�");
DEFINE("_EZREALTY_LM_ERROR6","Veuillez s�lectionnez le nombre de chambres � coucher souhait�es");

DEFINE("_EZREALTY_EMAIL_ERROR1","Merci d�entrer votre nom.");
DEFINE("_EZREALTY_EMAIL_ERROR2","Merci d�entrer votre adresse E-Mail");
DEFINE("_EZREALTY_EMAIL_ERROR3","Merci d�entrer votre t�l�phone");
DEFINE("_EZREALTY_EMAIL_ERROR4","Merci d�entrer votre question");
DEFINE("_EZREALTY_EMAIL_ERROR5","Merci d�entrer le nom de votre ami.");
DEFINE("_EZREALTY_EMAIL_ERROR6","Merci d�entrer l'adresse E-Mail de votre ami.");
DEFINE("_EZREALTY_EMAIL_ERROR7","Merci d'indiquer vos crit�res de recherche");
DEFINE("_EZREALTY_EMAIL_ERROR8","D�sol� - cette fonction n'est pas disponible actuellement ");
DEFINE("_EZREALTY_EMAIL_ERROR9","Merci d'indiquer une date approximative pour une visite.");

// front-end member stuff

DEFINE("_EZREALTY_LISTINGS_INTRO","Vous pouvez disposer du nombre de fiches suivant pour la vente");
DEFINE("_EZREALTY_NOLISTINGS","Vous n'avez aucune fiche de vente actuellement");
DEFINE("_EZREALTY_ADDNEW","Ajoutez une nouvelle fiche");
DEFINE("_EZREALTY_SUBMIT_LISTING","Soumettez un bien");
DEFINE("_EZREALTY_NO_LOGIN","D�sol� - mais vous devez pr�alablement vous connecter");
DEFINE("_EZREALTY_MAX_NUM","D�sol� - vous avez atteint le maximum de");
DEFINE("_EZREALTY_MAXNUM_LIST","fiches");
DEFINE("_EZREALTY_YOUVEGOTMAIL","Nouveau bien");
DEFINE("_EZREALTY_DONE","Upload d'image et inscription du bien r�ussie!");
DEFINE("_EZREALTY_UPDATEDONE","Vous avez r�ussi la mise � jour de votre inscription!");
DEFINE("_EZREALTY_NO_EDIT","D�sol� - vous n'�tes pas autoris� � �diter cette fiche");
DEFINE("_EZREALTY_NODELETE","Vous n'�tes pas autoris� � supprimer cette fiche");
DEFINE("_EZREALTY_CHECKDELETE","�tes-vous s�r(e) de vouloir supprimer cette fiche ?");
DEFINE("_EZREALTY_DELETE_LISTING","Supprimez la fiche");
DEFINE("_EZREALTY_LISTINGS_PREVIEW","Aper�u de la fiche");
DEFINE("_EZREALTY_DELIMGOOPS","Vous ne pouvez pas supprimer l'image");
DEFINE("_EZREALTY_LISTING_DELETED","Fiche supprim�e avec succ�s");
DEFINE("_EZREALTY_LISTING_TERMS","Termes d'inscription");
DEFINE("_EZREALTY_PREVIEW_LISTING","Aper�u de votre liste de fiches");

DEFINE("_EZREALTY_MEMBERS_ADDRESS","Adresse");
DEFINE("_EZREALTY_MEMBERS_HITS","Hits");
DEFINE("_EZREALTY_MEMBERS_ACTION","Action");
DEFINE("_EZREALTY_MEMBERS_STATUS","Publi�");
DEFINE("_EZREALTY_MEMBERS_UPGRADE","Mise � niveau");
DEFINE("_EZREALTY_MEMBERS_MAKEFEAT","Int�grer � la liste payante");
DEFINE("_EZREALTY_MEMBERS_SELLERDET","D�tails du vendeur");

DEFINE("_EZREALTY_LISTING1","D�tails de contact du vendeur");
DEFINE("_EZREALTY_LISTING2","Nom");
DEFINE("_EZREALTY_LISTING3","Num�ro de t�l�phone");
DEFINE("_EZREALTY_LISTING4","Adresse E-Mail");
DEFINE("_EZREALTY_LISTING5","Adresse du bien");
DEFINE("_EZREALTY_LISTING6","D�tails du bien");
DEFINE("_EZREALTY_LISTING7","�quipements");
DEFINE("_EZREALTY_LISTING8","D�tails marketing du bien");
DEFINE("_EZREALTY_LISTING9","Ajout de d�tails du bien");
DEFINE("_EZREALTY_LISTING10","Edition des d�tails du bien");
DEFINE("_EZREALTY_LISTING11","Emplacement du vendeur");
DEFINE("_EZREALTY_LISTING12","Images");
DEFINE("_EZREALTY_LISTING_IMGDELETED","Image supprim�e");
DEFINE("_EZREALTY_LISTING_RESTRICTED","**Cette information n'est pas disponible pour des listes gratuites**");

DEFINE("_EZREALTY_SELLER_ERROR1","Vous devez inclure un nom de contact");
DEFINE("_EZREALTY_SELLER_ERROR2","Vous devez inclure un num�ro de t�l�phone de contact");
DEFINE("_EZREALTY_SELLER_ERROR3","Vous devez inclure une adresse �lectronique de contact");
DEFINE("_EZREALTY_SELLER_ERROR4","Vous devez inclure votre localit�");

DEFINE("_EZREALTY_SELLER_N","Nom");
DEFINE("_EZREALTY_SELLER_T","T�l�phone");
DEFINE("_EZREALTY_SELLER_E","E-Mail");
DEFINE("_EZREALTY_SELLER_L","Localit�");
DEFINE("_EZREALTY_SELLER_C","Contact");

DEFINE("_EZREALTY_NOCATLISTINGS","D�sol� - il n'y a aucune fiche de bien dans cette cat�gorie");

DEFINE("_EZREALTY_IPN_SUBJECT","Liste mise � niveau sur");
DEFINE("_EZREALTY_IPN_MSG1","Un membre du site vient de mettre � niveau sa liste sur");
DEFINE("_EZREALTY_IPN_MSG2","D�tails de l'acheteur:");
DEFINE("_EZREALTY_IPN_MSG3","ID# du bien");

DEFINE("_EZREALTY_POA","Prix � d�finir");
DEFINE("_EZREALTY_CONFIG_STATES","Utilisez les d�partements");
DEFINE("_EZREALTY_CONFIG_STATESDESC","Si vous vendez des biens immobiliers dans une r�gion non pourvue de d�partement le mettre sur 'NON' pour cacher cette variable.");
DEFINE("_EZREALTY_CONFIG_SBIMP","Liste par affichages");
DEFINE("_EZREALTY_CONFIG_SBIMPDESC","En permettant aux membres du site d�inscrire des biens, voulez-vous le faire sur les impressions - c'est-�-dire � la page de d�tails. Les listes cesseront alors de s'afficher une fois qu'elle exc�deront le nombre d'impressions d�finies et vous pourrez nettoyer la base de donn�es de ces vieilles listes en appuyant sur le bouton 'Nettoyage des listes'.");
DEFINE("_EZREALTY_CONFIG_IMPNUM","Nombres d'affichages");
DEFINE("_EZREALTY_CONFIG_IMPNUMDESC","Si vous limitez les listes bas�es sur des impressions/hits - combien voulez vous en afficher");

DEFINE("_EZREALTY_RESET_MSG","Les nombres d'affichages on �t� mis a 0");
DEFINE("_EZREALTY_RESET_BTN","Mise � 0");
DEFINE("_EZREALTY_CLEANDB","Nettoyage des listes");
DEFINE("_EZREALTY_LISTINGS_PAID1","Co�t de listes");
DEFINE("_EZREALTY_LISTINGS_PAID2","par mise � niveau");
DEFINE("_EZREALTY_LISTINGS_HITSINTRO","Les listes sont stopp�es et supprim�es de la base de donn�es apr�s");
DEFINE("_EZREALTY_LISTINGS_HITS2","hits");
DEFINE("_EZREALTY_BEDROOMS_EXPL","Utilisez des nombres entiers de 1 � plus, 0 est d�j� d�fini dans le code de menu d�roulant pour �tre utilis� dans des cas o� le nombre de pi�ces n�est pas applicable");
DEFINE("_EZREALTY_SELLERSPANEL","Panneau du vendeur");
DEFINE("_EZREALTY_MAINPANEL","Listes principales");


// NEW TAGS THAT WERE ADDED FOR THE 3.2.2 VERSION

DEFINE("_EZREALTY_SUB_MSG","Un membre de votre site a ajout� ou a mis � jour une inscription");
DEFINE("_EZREALTY_TOOLBAR_CLOSE","Fermer");
DEFINE("_EZREALTY_NLAVAIL","D�sol� - cette inscription est actuellement indisponible");

// NEW TAGS FOR THE CB INTEGRATION

DEFINE("_EZREALTY_CONFIG_CBINT","Int�gration � 'Community Builder'");
DEFINE("_EZREALTY_CONFIG_CBINTDESC","Si vous utiliser 'Community Builder', voulez vous utiliser ces d�tails de membre?");
DEFINE("_EZREALTY_PROFILER_CBMSG1","Le composant 'EZ Realty' n'est pas install�. Veuillez contacter l'administrateur du site.");
DEFINE("_EZREALTY_PROFILER_CBMSG2","Il n'y a pas de bien pour ce membre.");
DEFINE("_EZREALTY_PROFILER_CBPROFILE","Afficher le profile");



// The following language tags were translated by K.J. Strickland


// NEW TAGS THAT WERE ADDED AFTER THE 3.3.0 VERSION


DEFINE("_EZREALTY_CLICK_OPEN","Clic pour ouvrir");


// NEW TAGS THAT WERE ADDED FOR THE 4.0.0 RELEASE


DEFINE("_EZREALTY_CONFIG_FREEPIC","Images gratuites de listes");
DEFINE("_EZREALTY_CONFIG_FREEPICDESC","Si vous avez des listes gratuites et pay�es pour vos membres, voulez-vous que les listes gratuites puissent afficher une image ? Sinon un emplacement r�serv� vide sera affich� � la place de l'image, ce qui peut encourager � recourir aux listes pay�es. Si vous avez opt� pour le 'oui', les listes gratuites ne comporteront qu' une seule image. Cela n'affectera pas les listes SEULEMENT si vous fonctionnez en mode de listes gratuites - les membres peuvent utiliser 12 images dans ce mode.");
DEFINE("_EZREALTY_CONFIG_PAIDOPT1","GRATUIT avec option de MISE A NIVEAU");
DEFINE("_EZREALTY_CONFIG_PAIDOPT2","Listes PAYANTES SEULEMENT");
DEFINE("_EZREALTY_CONFIG_PAIDONLY","Choix de paiement");
DEFINE("_EZREALTY_CONFIG_PAIDONLYDESC","En proposant des listes d'offre payantes - vous voulez proposer les listes GRATUITES avec option MISE A NIVEAU - OU SEULEMENT listes payantes.");

DEFINE("_EZREALTY_CONFIG_LEVEL1","Nom du Niveau 1 de la liste payante");
DEFINE("_EZREALTY_CONFIG_LEVEL1DESC","Comment voulez vous nommer vos mises � niveau de listes - par exemple. Liste Basique/D�taill�e. Appara�tra comme nom d'article sur les boutons et les rapports de transaction de PayPal.");
DEFINE("_EZREALTY_CONFIG_LEVEL1COST","Co�t de la liste payante Niveau 1");
DEFINE("_EZREALTY_CONFIG_LEVEL1COSTDESC","Co�t pour passer d'une liste gratuite � une liste payante.");

DEFINE("_EZREALTY_CONFIG_LEVEL2","Nom du Niveau 2 de la liste payante");
DEFINE("_EZREALTY_CONFIG_LEVEL2DESC","Comment voulez vous nommer vos mises � niveau de listes - par exemple. Liste Premium/Am�lior�. Appara�tra comme nom d'article sur les boutons et les rapports de transaction de PayPal.");
DEFINE("_EZREALTY_CONFIG_LEVEL2COST","Co�t de la liste payante Niveau 2");
DEFINE("_EZREALTY_CONFIG_LEVEL2COSTDESC","Le co�t d'achat/mise � niveau");

DEFINE("_EZREALTY_DETAILS_TAB7A","Metatags");
DEFINE("_EZREALTY_DETAILS_METADESC","Description");
DEFINE("_EZREALTY_DETAILS_METAKEYS","Mots-cl�s");
DEFINE("_EZREALTY_FEND_BUYNOW","Achetez d'abord la 'liste basique' et vous n'aurez pas � payer les honoraires initiaux de la 'liste d�taill�e'.");
DEFINE("_EZREALTY_FEND_BUYNOW2","Achetez d'abord la 'liste basique' et vous n'aurez pas � payer les honoraires initiaux de la 'liste d�taill�e'.");
DEFINE("_EZREALTY_UPGRADE","Mise � niveau");
DEFINE("_EZREALTY_CHECK_LOC","V�rifiez Les Localit�s");
DEFINE("_EZREALTY_CHECK_STATE","V�rifiez Les Etats");
DEFINE("_EZREALTY_CHECK_COUNTRY","V�rifiez Les Pays");
DEFINE("_EZREALTY_CHECK_AVAIL","V�rifiez La Disponibilit�");
DEFINE("_EZREALTY_CHECK_SUBMIT","Soumettez � nouveau");
DEFINE("_EZREALTY_CHECK_GO","Allez");
DEFINE("_EZREALTY_CHECK_REFRESH","<strong><br /><br />R�g�n�rez l'�cran apr�s la fermeture cette fen�tre pour v�rifier visuellement la nouvelle entr�e.</strong>");

DEFINE("_EZREALTY_CONFIG_SELFENTRY","Ajouts d'entr�es");
DEFINE("_EZREALTY_CONFIG_SELFENTRYDESC","Voulez vous permettre aux membres la possibilit� d'ajouter eux m�mes de nouvelles localit�s, �tats et pays. En permettant ceci - ces localit�s, �tats et pays seront automatiquement �dit�s pour en permettre l'acc�s pendant  la cr�ation de leur liste de propri�t�.");
DEFINE("_EZREALTY_CONFIG_COLOUR1","Couleur 1 de survol");
DEFINE("_EZREALTY_CONFIG_COLOUR1DESC","C'est la couleur qui apparaitra au survol avec la souris d'un article dans la liste des propri�t�s.");
DEFINE("_EZREALTY_CONFIG_COLOUR2","Couleur 2 de survol");
DEFINE("_EZREALTY_CONFIG_COLOUR2DESC","C'est la couleur qui apparaitra au rel�chement de survol avec la souris d'un article dans la liste des propri�t�s - Devrait en principe correspondre � la couleur de fond de page.");

DEFINE("_EZREALTY_DATABASE1","Mise � niveau de la BDD");
DEFINE("_EZREALTY_DATABASE2","Des mises � niveau de base de donn�es ont �t� effectu�es");



// TAGS THAT HAD THEIR LANGUAGE CONTENT CHANGED FOR THE 4.0.0 RELEASE



DEFINE("_EZREALTY_LISTINGS_HITSEXPL","En effectuant une mise � niveau entre les listes niveau/type - les hits seront remis � z�ro (0)");
DEFINE("_EZREALTY_HEADER_OHOUSE","Visitable");


// NEW TAGS FOR THE 4.1.0 RELEASE

DEFINE("_EZREALTY_LISTING_SELECTTYPE","Type d'annonce");
DEFINE("_EZREALTY_TYPE_SALE","A vendre");
DEFINE("_EZREALTY_TYPE_RENTAL","A louer");
DEFINE("_EZREALTY_LISTING_TYPE","Type de Liste");
DEFINE("_EZREALTY_LISTING_ANYTYPE","Tout type de liste");
DEFINE("_EZREALTY_RENTAL_FREQUENCY","Fr�quence de location");
DEFINE("_EZREALTY_RENTAL_NA","Non applicable");
DEFINE("_EZREALTY_RENTAL_NIGHTLY","Par nuit");
DEFINE("_EZREALTY_RENTAL_WEEKLY","Par semaine");
DEFINE("_EZREALTY_RENTAL_FNIGHT","Par quinzaine");
DEFINE("_EZREALTY_RENTAL_MONTH","Par mois");
DEFINE("_EZREALTY_RENTAL_SQFT","Par pied carr�");
DEFINE("_EZREALTY_RENTAL_SQMTR","Par m�tre carr�");
DEFINE("_EZREALTY_RENTAL_SPARE","Entr�e disponible");


// TAGS THAT HAD THEIR LANGUAGE CONTENT CHANGED FOR THE 4.1.0 RELEASE


DEFINE("_EZREALTY_DETAILS_MARKET1","Invendu/Disponible");


// NEW TAGS FOR THE 4.2.0 RELEASE

DEFINE("_EZREALTY_CONFIG_MOBILE","T�l�phone mobile #");
DEFINE("_EZREALTY_CONFIG_MOBILEDESC","Utilis� pour le formulaire de contact de SMS si vous n'autorisez pas les membres du site � afficher la liste des biens, ou � les afficher. DOIT �tre au format de nombre international:- Code du Pays, Indicatif sans le '0' et Num�ro - sans espaces, seulement des chiffres. Si vous ne VOULEZ PAS utiliser de contacts SMS pour vos propres annonces - laisser � blanc.");

DEFINE("_EZREALTY_SELLER_SMS1","SMS #");
DEFINE("_EZREALTY_SELLER_SMS2","SMS moi!");
DEFINE("_EZREALTY_SELLER_SMS3","NOTE: Avant d'utiliser ceci, vous devez avoir un compte");
DEFINE("_EZREALTY_SELLER_SMS4","actif! Vous devez aussi param�trer une API HTTP depuis votre panneau de contr�le Clickatell.");
DEFINE("_EZREALTY_SELLER_SMS5","Votre num�ro de t�l�phone mobile au format international:- Code du pays, Indicatif sans le '0' et les chiffres - sans espaces, seulement des chiffres.");
DEFINE("_EZREALTY_SELLER_SMS6","Envoi de SMS via Clickatell � ce propri�taire/vendeur de bien");
DEFINE("_EZREALTY_SELLER_SMS7","Nom d'utilisateur");
DEFINE("_EZREALTY_SELLER_SMS8","Mot de passe");
DEFINE("_EZREALTY_SELLER_SMS9","T�l�phone mobile #");
DEFINE("_EZREALTY_SELLER_SMS10","Message");
DEFINE("_EZREALTY_SELLER_SMS11","Succ�s");
DEFINE("_EZREALTY_SELLER_SMS12"," ID de message");
DEFINE("_EZREALTY_SELLER_SMS13","envoi de message infructueux");
DEFINE("_EZREALTY_SELLER_SMS14","Erreur d'authentification");
DEFINE("_EZREALTY_SELLER_SMS15","Vous devez ins�rer votre Nom d'utilisateur Clickatell");
DEFINE("_EZREALTY_SELLER_SMS16","Vous devez ins�rer votre mot de passe Clickatell");
DEFINE("_EZREALTY_SELLER_SMS17","Vous devez ins�rer le num�ro de t�l�phone mobile associ� � votre compte Clickatell");
DEFINE("_EZREALTY_SELLER_SMS18","Vous devez entrer un message pour le propri�taire/vendeur du bien");
DEFINE("_EZREALTY_SELLER_SMS19","ID de l' API HTTP #");
DEFINE("_EZREALTY_SELLER_SMS20","Vous devez ins�rer votre ID d'API Clickatell. Si vous n'en disposez pas, vous pouvez en param�trer une via votre panneau de cotr�le Clickatell.");
DEFINE("_EZREALTY_SELLER_SMS21","maxi 150 caract�res ");
DEFINE("_EZREALTY_SELLER_SMS22","D�tails de votre compte Clickatell");
DEFINE("_EZREALTY_SELLER_SMS23","Envoi de SMS via Clickatell");
DEFINE("_EZREALTY_SELLER_SMS24","Envoi de SMS via Clickatell � ce propri�taire/vendeur de bien - Cr�er le compte du propri�taire/vendeur de bien AVANT d'envoyer un SMS!");
DEFINE("_EZREALTY_SELLER_SMS25","Fait!");
DEFINE("_EZREALTY_SELLER_SMS26","Envoi de SMS");
DEFINE("_EZREALTY_SELLER_SMS27","Assurez vous que les d�tails de votre compte Clickatell ont bien �t� renseign�s dans la zone de configuration d' EZ Realty  AVANT d'envoyer un SMS!!");

DEFINE("_EZREALTY_SELLER_SMS7DESC","Doit correspondre au Nom d'utilisateur de votre compte d'API Clickatell.");
DEFINE("_EZREALTY_SELLER_SMS8DESC","Doit correspondre au Mot de passe de votre compte d'API Clickatell");
DEFINE("_EZREALTY_SELLER_SMS19DESC","Doit correspondre � l'ID d'API HTTP# de votre compte ClickatellD. Cr�er votre ID d'API# via votre panneau de contr�le.");

DEFINE("_EZREALTY_CONFIG_TEXTBOX","Largeur de votre champ de texte");
DEFINE("_EZREALTY_CONFIG_TEXTBOXDESC","La taille de la largeur des champs de texte dans le formulaire d'Ajout/Modification des d�tails de propri�t�s (cot� visiteur du site). Cette taille permet de r�duire les distorsions d'affichage.");
DEFINE("_EZREALTY_CONFIG_TEXTAREA","Largeur de la zone de texte");
DEFINE("_EZREALTY_CONFIG_TEXTAREADESC","La taille de la largeur de la zone de texte dans le formulaire d'Ajout/Modification des d�tails de propri�t�s (cot� visiteur du site). Cette taille permet de r�duire les distorsions d'affichage.");
DEFINE("_EZREALTY_TYPE_LEASE","Pour le bail");
DEFINE("_EZREALTY_IMAGE_WARNING","<strong><font color='#FF0000'>Les formats des fichiers images DOIVENT �tre jpg ou png!!</font></strong>");
DEFINE("_EZREALTY_IMAGE_WARNING2","Une ou plusieurs images d�passent la largeur ou la hauteur autoris�e!!");

DEFINE("_EZREALTY_CONFIG_OHOUSE","Lien des Portes ouvertes");
DEFINE("_EZREALTY_CONFIG_OHOUSEDESC","Voulez vous afficher le lien'Portes ouvertes'?");
DEFINE("_EZREALTY_CONFIG_MAXWIDTH","Largeur d'image maxi autoris�e");
DEFINE("_EZREALTY_CONFIG_MAXWIDTHDESC","Quelle est en pixels la largeur maxi d'image autoris�e pour le chargement ?");
DEFINE("_EZREALTY_CONFIG_MAXHEIGHT","Hauteur d'image maxi autoris�e");
DEFINE("_EZREALTY_CONFIG_MAXHEIGHTDESC","Quelle est en pixels la hauteur maxi d'image autoris�e pour le chargement ?");

DEFINE("_EZREALTY_PIXELS","pixels");
DEFINE("_EZREALTY_BEDBATH","Lit/Bain");
DEFINE("_EZREALTY_BUDGET","Budget");
DEFINE("_EZREALTY_INTERESTED","Interess�?");
DEFINE("_EZREALTY_WANTED","Recherch�");
DEFINE("_EZREALTY_PROPERTIES_WANTED","Propri�t� recherch�e");
DEFINE("_EZREALTY_PROPERTIES_WANTEDDESC","Nous avons des personnes en attente pour");

DEFINE("_EZREALTY_LEAD_RESPONSE","La r�ponse du propri�taire/vendeur du bien");
DEFINE("_EZREALTY_RESPONS_PROPLEAD","devrait contenir une propri�t� pour les propri�taires/vendeurs que vous avez afficher. L'ID# du propri�taire/vendeur est:-");
DEFINE("_EZREALTY_LEAD_RESPONSEERROR"," Vous devez ins�rer un petit message");
DEFINE("_EZREALTY_CONFIG_COUNTRY","Utilisation des Pays");

DEFINE("_EZREALTY_CONFIG_NLLINK","Lien vers les Nouveaut�s");
DEFINE("_EZREALTY_CONFIG_NLLINKDESC","Voulez vous afficher le lien 'Nouveaut�s' dans la partie sup�rieure du site EZ REALTY(cot� visiteur)?");
DEFINE("_EZREALTY_STUDIO","Studio");
DEFINE("_EZREALTY_RESET","R�initialiser");
DEFINE("_EZREALTY_LEADCONTACT_PROMO","Voir une propri�t� qui pourrait correspondre � celle recherch�e par un acheteur?");
DEFINE("_EZREALTY_SKIPFREE_LISTING","Laisser le listing gratuit pour passer au listing payant!!");

DEFINE("_EZREALTY_CONFIG_COLCOUNT","Nombre de colonnes");
DEFINE("_EZREALTY_CONFIG_COLCOUNTDESC","Combien de colonnes souhaiter vous afficher pour la premi�re page des cat�gories de propri�t�s?");
DEFINE("_EZREALTY_CONFIG_COLWIDTH","Largeur des colonnes");
DEFINE("_EZREALTY_CONFIG_COLWIDTHDESC","De quelle largeur sont les colonnes sur la premi�re page des cat�gories de propri�t�s? Par exemple, pour une colonne, la largeur devrait �tre 100%, pour 2 colonnes elle devrait �tre 50%, et pour 3 colonnes 33%. Vous DEVEZ ins�rer le signe pour cent (%).");

DEFINE("_EZREALTY_ESSENTIALS","Essentiels");
DEFINE("_EZREALTY_OTHERSPECS","Autres");
DEFINE("_EZREALTY_NS","Non sp�cifi�");
DEFINE("_EZREALTY_EA","Email de l'admin");

DEFINE("_EZREALTY_CONFIG_FORMATTING","Formatage");
DEFINE("_EZREALTY_CONFIG_MAPPING","R�glage de la g�olocalisation");
DEFINE("_EZREALTY_CONFIG_MAPWIDTH","Largeur de la carte");
DEFINE("_EZREALTY_CONFIG_MAPWIDTHDESC","La largeur en pixels de la carte qui apparaitra sur le site.");
DEFINE("_EZREALTY_CONFIG_MAPHEIGHT","Hauteur de la carte");
DEFINE("_EZREALTY_CONFIG_MAPHEIGHTDESC","La hauteur en pixels de la carte qui apparaitra sur le site.");
DEFINE("_EZREALTY_CONFIG_ADDRESSWIDTH","Largeur du champ Adresse");
DEFINE("_EZREALTY_CONFIG_ADDRESSWIDTHDESC","La largeur du champ de texte au dessus de la carte qui affichera l'adresse de la propri�t�.");
DEFINE("_EZREALTY_PROPERTY_MAPLOC","Situation de la carte");
DEFINE("_EZREALTY_SEARCH_ALLPOSTCODES","Selection de tous les codes postaux");




// TAGS THAT HAD THEIR LANGUAGE CONTENT CHANGED FOR THE 4.2.0 RELEASE


DEFINE("_EZREALTY_CONFIG_NEWLIST","Page sp�ciale de listes de propri�t�s");
DEFINE("_EZREALTY_CONFIG_NEWLISTDESC","Nombre de propri�t�s � afficher sur la page 'Nouveaut�s', 'Portes ouvertes', 'Recherche de propri�t�s' et 'Flux RSS'");


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



//****************************************************//
//  TAGS CHANGED AFTER THE 5.1.4 STABLE RELEASE         //
//****************************************************//


DEFINE("_EZREALTY_DETAILS_SELLOC","Choisi");

?>