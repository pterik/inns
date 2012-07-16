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
    **   English language
    **   By: K.J. Strickland (aka PixelBunyiP)
    **   http://www.raptorservices.com.au
    **  
    \*****************************************/


defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );


// admin.ezrealty.php file language tags

DEFINE("_EZREALTY_NOREMOVE","Cannot delete at this time as there are still listings using it.");
DEFINE("_EZREALTY_CLEAN","Remove expired listings.");

// configuration area settings

DEFINE("_EZREALTY_CONFIG_GENSET","General Image Path Settings");

DEFINE("_EZREALTY_CONFIG_IMAGESIZES","Thumbnailing & Image Sizes");
DEFINE("_EZREALTY_CONFIG_WIDTHPROPIMG","Main Image Width");
DEFINE("_EZREALTY_CONFIG_WIDTHPROPIMGDESC","Width of main property and floorplan image when viewed on the property details page. It's expressed in pixels to assist fitting the image within your template. Images will be resized to this width");
DEFINE("_EZREALTY_CONFIG_WIDTHCATTHUMB","Category Thumbnail Width");
DEFINE("_EZREALTY_CONFIG_WIDTHCATTHUMBDESC","Width of images is using category images.");
DEFINE("_EZREALTY_CONFIG_WIDTHTHUMB","Thumbnail max Width");
DEFINE("_EZREALTY_CONFIG_WIDTHTHUMBDESC","Width of the property image thumbnails created which will then be used on the front-end");

DEFINE("_EZREALTY_CONFIG_TNCREATOR","Thumbnail Creator");
DEFINE("_EZREALTY_CONFIG_GDLIMIT","GD only supports jpg and png!");
DEFINE("_EZREALTY_CONFIG_GDFOUND","Found GD");
DEFINE("_EZREALTY_CONFIG_GDCHOOSE","Choose image processor for thumbnail creation.");
DEFINE("_EZREALTY_CONFIG_THUMBQUAL","Thumbnail Quality");
DEFINE("_EZREALTY_CONFIG_THUMBQUALDESC","Quality of the thumbnails created.");
DEFINE("_EZREALTY_CONFIG_IMGDIR","Image Directory");
DEFINE("_EZREALTY_CONFIG_IMGDIRDESC","The default image directory is called 'ezrealty', and located in the components/com_ezrealty/ezrealty path. Thumbnails are stored in a directory within this one, called th. If you change your directory name, you'll need to create a new image/thumbs directory manually. You MUST NOT change the name of the th directory.");
DEFINE("_EZREALTY_CONFIG_TNNONE","None");
DEFINE("_EZREALTY_CONFIG_TNGD1","GD Library");
DEFINE("_EZREALTY_CONFIG_TNGD2","GD2 Library");

DEFINE("_EZREALTY_CONFIG_YOURBIZSET","Your Business Settings");
DEFINE("_EZREALTY_CONFIG_BIZNAME","Business Name");
DEFINE("_EZREALTY_CONFIG_BIZNAMEDESC","The name of your real estate business shown on the component header and elsewhere, eg. the print page and email pages.");
DEFINE("_EZREALTY_CONFIG_BIZAD","Business Address");
DEFINE("_EZREALTY_CONFIG_BIZADDESC","Your business address. This appears in the header of the print page so prospective buyers have a record of you.");
DEFINE("_EZREALTY_CONFIG_TELEPHONE","Contact telephone");
DEFINE("_EZREALTY_CONFIG_TELEPHONEDESC","Your contact telephone number shown on the arrange viewing form and the print page.");
DEFINE("_EZREALTY_CONFIG_EMAIL","Email address");
DEFINE("_EZREALTY_CONFIG_EMAILDESC","Email address to use with the property inspection and mailing list request forms.");
DEFINE("_EZREALTY_CONFIG_CURRENCYSIGN","Currency Sign");
DEFINE("_EZREALTY_CONFIG_CURRENCYSIGNDESC","The currency sign to show before property prices.");
DEFINE("_EZREALTY_CONFIG_BIZINTRO","Business Introduction");
DEFINE("_EZREALTY_CONFIG_BIZINTRODESC","Introductory text about<br />your real estate business.");

DEFINE("_EZREALTY_CONFIG_LAYOUTSETTINGS","Manage the front-end layout of your site");

DEFINE("_EZREALTY_CONFIG_TPL","Front-end Template");
DEFINE("_EZREALTY_CONFIG_TPLDESC","Select the layout you want for the front-end. This currently influences the look of the property details page and print details page.");
DEFINE("_EZREALTY_CONFIG_SELTPL","Select Template");

DEFINE("_EZREALTY_CONFIG_PROPPERPAGE","Properties per Page");
DEFINE("_EZREALTY_CONFIG_PROPPERPAGEDESC","Number of properties to show per page on the front-end");
DEFINE("_EZREALTY_CONFIG_RECFRIEND","Recommend Property Link");
DEFINE("_EZREALTY_CONFIG_RECFRIENDDESC","Do you want to allow visitors to use the \"recommend property to friend\" feature?");
DEFINE("_EZREALTY_CONFIG_MAILINGVIEW","Add to Mailing List Link");
DEFINE("_EZREALTY_CONFIG_MAILINGDESC","Do you want to show the \"add to mailing list\" email box? This allows visitors to send you an automatic email and you then add the contained details to your mailing list manager.");
DEFINE("_EZREALTY_CONFIG_SHOWLINKS","Show Links Box");
DEFINE("_EZREALTY_CONFIG_SHOWLINKSDESC","Do you want to show the links box - ie the box containing the map link, print page and add to favourites options?");
DEFINE("_EZREALTY_CONFIG_SC","State/Country");
DEFINE("_EZREALTY_CONFIG_SCDESC","Do you want to include the state and country drop-down boxes in the advanced search filter?");

DEFINE("_EZREALTY_CONFIG_RSS","RSS Feed");
DEFINE("_EZREALTY_CONFIG_RSSDESC","Would you like to show an RSS feed link of your latest property listings and openhouse listings?");
DEFINE("_EZREALTY_CONFIG_RSSNN","New RSS Listings Feed name");
DEFINE("_EZREALTY_CONFIG_RSSNNDESC","What would you like to call your new listings RSS feed?");
DEFINE("_EZREALTY_CONFIG_RSSOH","OpenHouse RSS Feed Name");
DEFINE("_EZREALTY_CONFIG_RSSOHDESC","What would you like to call your openhouse listings RSS feed?");

DEFINE("_EZREALTY_CONFIG_LEAD","Property Leads");
DEFINE("_EZREALTY_CONFIG_LEADDESC","Would you like to allow visitors to register their property requirements with you?");

DEFINE("_EZREALTY_CONFIG_MEMSALES","Manage Front-end Property Listings by Registered Members");
DEFINE("_EZREALTY_CONFIG_MEMLISTINGS","Member Listings");
DEFINE("_EZREALTY_CONFIG_MEMLISTINGSDESC","Would you like to allow registered site members to list properties for sale via the front-end listings panel?");
DEFINE("_EZREALTY_CONFIG_NOTIFICATION","Listings Notification");
DEFINE("_EZREALTY_CONFIG_NOTIFICATIONDESC","Would you like to be notified of new and updated listings?");
DEFINE("_EZREALTY_CONFIG_MEMAPPROVAL","Approval Process");
DEFINE("_EZREALTY_CONFIG_MEMAPPROVALDESC","Do new and updated listings require admin approval before publishing?");
DEFINE("_EZREALTY_CONFIG_NUMLISTINGS","Number of listings");
DEFINE("_EZREALTY_CONFIG_NUMLISTINGSDESC","How many listings can members have?");

DEFINE("_EZREALTY_CONFIG_MEMBERSINTRO","Member's Area Introduction");
DEFINE("_EZREALTY_CONFIG_MEMBERSINTRODESC","Write some introductory text for your member's area - eg. refer to the 'Terms of Listing' etc.");
DEFINE("_EZREALTY_CONFIG_TERMS","Terms of Listing");
DEFINE("_EZREALTY_CONFIG_TERMSDESC","Outline your site's terms of listing.");

DEFINE("_EZREALTY_CONFIG_IMG1","Images");
DEFINE("_EZREALTY_CONFIG_IMG2","image-settings");
DEFINE("_EZREALTY_CONFIG_BIZ1","Business");
DEFINE("_EZREALTY_CONFIG_BIZ2","business-settings");
DEFINE("_EZREALTY_CONFIG_LAY1","Layout");
DEFINE("_EZREALTY_CONFIG_LAY2","site-layout");
DEFINE("_EZREALTY_CONFIG_MEM1","Members");
DEFINE("_EZREALTY_CONFIG_MEM2","member-sales");
DEFINE("_EZREALTY_CONFIG_PAID1","Paid Listings");
DEFINE("_EZREALTY_CONFIG_CUST1","Custom");


DEFINE("_EZREALTY_CONFIG_PP","Your PayPal Settings for Offering Paid Listings");

DEFINE("_EZREALTY_CONFIG_PAIDLISTINGS","Paid Listings");
DEFINE("_EZREALTY_CONFIG_PAIDLISTINGSDESC","Do you want to offer paid property listings on your site? Paid listings allow members to include additional images and information in their listing.");
DEFINE("_EZREALTY_CONFIG_PPEMAIL","PayPal email address");
DEFINE("_EZREALTY_CONFIG_PPEMAILDESC","This must be your PRIMARY PayPal email address.<br /><br />Visit
<a target='_blank' href='http://paypaltech.com/Stephen/affiliate/hemail.htm'>PayPal Tech Resources</a>
for a simple method of encoding your PayPal email addy to protect it from spam bots, then copy/paste the code into the 
PayPal email address space above. DO NOT use this encoded email address for the checkmail address below - this must be 
presented in normal format.");
DEFINE("_EZREALTY_CONFIG_CHECKMAIL","CheckMail");
DEFINE("_EZREALTY_CONFIG_CHECKMAILDESC","Repeat your PRIMARY PayPal email address here. It's used to check transactions for forms of electronic fraud involving PayPal email addresses. This one MUST NOT be an encrypted format!!");
DEFINE("_EZREALTY_CONFIG_PPCURRENCY","Currency Code");
DEFINE("_EZREALTY_CONFIG_PPCURRENCYDESC","This must be the 3-letter PayPal currency code for your PRIMARY PayPal currency - not one your make up.");
DEFINE("_EZREALTY_CONFIG_PPBUTTON","Button Image");
DEFINE("_EZREALTY_CONFIG_PPBUTTONDESC","Name of the button image used for upgrading listings on the front-end. Button images must be kept in the front-end images directory.");

DEFINE("_EZREALTY_CONFIG_PPPREMIUM","Standard Upgrade Name");
DEFINE("_EZREALTY_CONFIG_PPPREMIUMDESC","What would you like to call your listing upgrades - eg. Premium/Enhanced Listing etc. This will appear as the Item Name in button code and PayPal transaction reports.");
DEFINE("_EZREALTY_CONFIG_PPCOST","Standard Upgrade Cost");
DEFINE("_EZREALTY_CONFIG_PPCOSTDESC","The cost of upgrading a free property listing to a paid listing.");
DEFINE("_EZREALTY_CONFIG_FPNAME","Featured Listing Upgrade Name");
DEFINE("_EZREALTY_CONFIG_FPNAMEDESC","What would you like to call your featured listing upgrades - eg. Featured Listing. This will appear as the Item Name in button code and PayPal transaction reports.");
DEFINE("_EZREALTY_CONFIG_FPCOST","Featured Listing Upgrade Cost");
DEFINE("_EZREALTY_CONFIG_FPCOSTDESC","The cost of upgrading a paid property listing to a featured listing. Remember - members cannot upgrade directly from a free listing - they must first upgrade to a standard paid listing.");

DEFINE("_EZREALTY_CONFIG_PPPOSTMODE","Post Mode");
DEFINE("_EZREALTY_CONFIG_PPPOSTMODEDESC","Set to 'Live Sales' to sell real updates via the PayPal system, or test your installation by doing 'Test Sales' via the PayPal Developers Network Sandbox.");
DEFINE("_EZREALTY_CONFIG_LS","Live Sales");
DEFINE("_EZREALTY_CONFIG_TS","Test Sales");

DEFINE("_EZREALTY_CONFIG_SUCCESS","Success Page");
DEFINE("_EZREALTY_CONFIG_SUCCESSDESC","Enter the text for your successful PayPal payment transaction page.");
DEFINE("_EZREALTY_CONFIG_CANCEL","Cancel Page");
DEFINE("_EZREALTY_CONFIG_CANCELDESC","Enter the text for your PayPal transaction cancelled/unsuccessful page.");

DEFINE("_EZREALTY_CONFIG_YES","Yes");
DEFINE("_EZREALTY_CONFIG_NO","No");

DEFINE("_EZREALTY_CONFIG_CONFIGSAVED","Settings saved");

// Miscellaneous administration area language tags - error notices and dropdown list boxes

DEFINE("_EZREALTY_ADMIN_BACK","Back to Property Management");
DEFINE("_EZREALTY_ADMIN_SOURCEERROR","ERROR: Source file not found!");

// admin.ezrealty.html.php language tags

// Manage property listings page

DEFINE("_EZREALTY_LISTINGS_TITLE","Manage Property Listings");
DEFINE("_EZREALTY_LISTINGS_DISPLAYNUM","Display #");
DEFINE("_EZREALTY_LISTINGS_SEARCHPROP","Search");
DEFINE("_EZREALTY_LISTINGS_FILTER","Filter by:-");
DEFINE("_EZREALTY_LISTINGS_SORTLOCALL","-All Localities-");
DEFINE("_EZREALTY_LISTINGS_SORTTYPEALL","-All Property Types-");
DEFINE("_EZREALTY_LISTINGS_SORTPRICEALL","-All Price Ranges-");
DEFINE("_EZREALTY_LISTINGS_PROPID","Agent ID#");
DEFINE("_EZREALTY_LISTINGS_PROPNAME","Address");
DEFINE("_EZREALTY_LISTINGS_PROPCAT","Property Type");
DEFINE("_EZREALTY_LISTINGS_PROPPRICE","Listed Price");
DEFINE("_EZREALTY_LISTINGS_PROPHITS","Hits");
DEFINE("_EZREALTY_LISTINGS_PUBSTATUS","Published");
DEFINE("_EZREALTY_LISTINGS_MARKETSTATUS","Sold?");
DEFINE("_EZREALTY_LISTINGS_APPROVEDSTATUS","Approved");
DEFINE("_EZREALTY_LISTINGS_LTYPE","Type");
DEFINE("_EZREALTY_LISTINGS_AGENT","Agent");
DEFINE("_EZREALTY_LISTINGS_LISTINGDATE","Date Listed");
DEFINE("_EZREALTY_LISTINGS_UPDATE","Last Update");
DEFINE("_EZREALTY_LISTINGS_EDIT","Edit Property");
DEFINE("_EZREALTY_LISTINGS_APPROVED","Approved");
DEFINE("_EZREALTY_LISTINGS_SELLER","Seller");

// Add/edit property details page

DEFINE("_EZREALTY_LISTINGS_SELLER_EXPL","<strong><font color='#FF0000'>Read me!</font></strong><br /><br />Seller details are used on the site's front-end to allow prospective buyers to 
contact the seller directly for more information or to organize a property inspection.  If you allow your site members 
to list properties for sale, they are required to complete this information.  If you want prospective buyers to contact 
you rather than the property owner - leave this section of information blank.  The normal \"arrange viewing\" email link 
to you will then show up if it has been configured to do so.");

DEFINE("_EZREALTY_DETAILS_REQ","*Required");
DEFINE("_EZREALTY_DETAILS_OPT","*Optional");
DEFINE("_EZREALTY_DETAILS_TITLE","Property Listing");
DEFINE("_EZREALTY_DETAILS_MARKET","Market Status");
DEFINE("_EZREALTY_DETAILS_SOLDDESC"," - This setting allows you to show the market status of a property listing - the default value is 'unsold'.");
DEFINE("_EZREALTY_DETAILS_SELMARKET","Select Market Status");
DEFINE("_EZREALTY_DETAILS_SELLOC","Select Locality");
DEFINE("_EZREALTY_DETAILS_SELSTATE","Select State");
DEFINE("_EZREALTY_DETAILS_SELCOUNTRY","Select Country");
DEFINE("_EZREALTY_DETAILS_SELCAT","Select Property Category");
DEFINE("_EZREALTY_DETAILS_SELPRICE","Select Price Range");
DEFINE("_EZREALTY_DETAILS_SELROOM","Property has no Bedrooms");
DEFINE("_EZREALTY_DETAILS_LISTDATE","Listing Date");
DEFINE("_EZREALTY_DETAILS_LISTDATEDESC","Date property was listed for sale.");
DEFINE("_EZREALTY_DETAILS_AGENTID","Unique Agent ID number");
DEFINE("_EZREALTY_DETAILS_AGENTIDDESC","Use this if you've got a unique number you use to track this property in your office etc.");
DEFINE("_EZREALTY_DETAILS_PROPADDRESS1","Street Address 1");
DEFINE("_EZREALTY_DETAILS_PROPCITY","City/Town/Suburb");
DEFINE("_EZREALTY_DETAILS_AREA","State/Regional Area");
DEFINE("_EZREALTY_DETAILS_COUNTRY","Country");
DEFINE("_EZREALTY_DETAILS_PROPPOSTCODE","Zip/Post Code");
DEFINE("_EZREALTY_DETAILS_PROPTYPE","Property Type");
DEFINE("_EZREALTY_DETAILS_ADLINE","Short Catchy Sales Phrase");
DEFINE("_EZREALTY_DETAILS_PROPDESC","Full Property Description");
DEFINE("_EZREALTY_DETAILS_SHORTDESC","Short description:<br />(max 255 char)");
DEFINE("_EZREALTY_DETAILS_PROPPRICE","Property Price");
DEFINE("_EZREALTY_DETAILS_LANDTYPE","Land Holding Type/Size");
DEFINE("_EZREALTY_DETAILS_LANDTYPEDESC","eg. Freehold, Leasehold, 100 acres etc.");
DEFINE("_EZREALTY_DETAILS_BEDROOMS","Bedrooms");
DEFINE("_EZREALTY_DETAILS_BEDROOMSDESC","number of bedrooms the property has");
DEFINE("_EZREALTY_DETAILS_BATHROOMS","Bathrooms");
DEFINE("_EZREALTY_DETAILS_BATHROOMSDESC","number of bathrooms the property has");
DEFINE("_EZREALTY_DETAILS_PARKING","Parking");
DEFINE("_EZREALTY_DETAILS_PARKINGDESC","amount of parking available for cars");
DEFINE("_EZREALTY_DETAILS_MAPREF","Property Map Reference Link");
DEFINE("_EZREALTY_DETAILS_MAPREFDESC","The URL to this property's map reference if used.<br />A free mapping service can be found at multimap.com");
DEFINE("_EZREALTY_DETAILS_VTOUR","Virtual Tour Page Link");
DEFINE("_EZREALTY_DETAILS_VTOURDESC","The URL to this property's virtual tour page if used.<br />This link will open in a new window");
DEFINE("_EZREALTY_DETAILS_SAVED","Property Details Saved");

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

DEFINE("_EZREALTY_VLDET_CURRENTIMG","Current Image");
DEFINE("_EZREALTY_VLDET_CHOOSENEW","Choose new image");
DEFINE("_EZREALTY_VLDET_UPLOADNEW","Upload new image");
DEFINE("_EZREALTY_VLDET_DELETEIMG","Delete image");
DEFINE("_EZREALTY_VLDET_DELETE","Delete");
DEFINE("_EZREALTY_VLDET_OPENFULLSIZE","Open full size image");
DEFINE("_EZREALTY_VLDET_TNPREV","Thumbnail Preview");

DEFINE("_EZREALTY_DETAILS_CTOWN","Closest town");
DEFINE("_EZREALTY_DETAILS_CTPORT","Closest transport");
DEFINE("_EZREALTY_DETAILS_ADDFEATURES","Additional property features");
DEFINE("_EZREALTY_DETAILS_AGE","Age of property");
DEFINE("_EZREALTY_DETAILS_OHOUSE","Is there an Open House Day");
DEFINE("_EZREALTY_DETAILS_OHOUSEDET","Open House Details:<br />If this property is having open house days, include details such as dates and times etc.");

DEFINE("_EZREALTY_DETAILS_APPR","Approve Property Listing");
DEFINE("_EZREALTY_DETAILS_PUBL","Publish Property Listing");
DEFINE("_EZREALTY_DETAILS_LISTSTATUS","Listing Type");
DEFINE("_EZREALTY_DETAILS_FREESTATUS","Free Listing");
DEFINE("_EZREALTY_DETAILS_LISTPREMIUM","Make Featured");

DEFINE("_EZREALTY_DETAILS_ERROR1","Property must have an address");
DEFINE("_EZREALTY_DETAILS_ERROR2","Property must have a city, town or suburb defined");
DEFINE("_EZREALTY_DETAILS_ERROR3","You must select a state/regional area");
DEFINE("_EZREALTY_DETAILS_ERROR4","You must select a country");
DEFINE("_EZREALTY_DETAILS_ERROR5","Property must have a postcode defined");
DEFINE("_EZREALTY_DETAILS_ERROR6","You must select a property type");
DEFINE("_EZREALTY_DETAILS_ERROR7","Property must have a bedroom number defined");
DEFINE("_EZREALTY_DETAILS_ERROR8","You must enter a property price");
DEFINE("_EZREALTY_DETAILS_ERROR9","You must select a price range search parameter");
DEFINE("_EZREALTY_DETAILS_ERROR10","You must enter a short catchy sales phrase as the default templates use this value");
DEFINE("_EZREALTY_DETAILS_ERROR11","You must enter a short description as the default templates use this value");
DEFINE("_EZREALTY_DETAILS_ERROR12","You must have at least 1 picture for your property listing");

DEFINE("_EZREALTY_DETAILS_TAB1A","Address");
DEFINE("_EZREALTY_DETAILS_TAB1B","property-address");
DEFINE("_EZREALTY_DETAILS_TAB2A","Features");
DEFINE("_EZREALTY_DETAILS_TAB2B","property-features");
DEFINE("_EZREALTY_DETAILS_TAB3A","Marketing");
DEFINE("_EZREALTY_DETAILS_TAB3B","marketing-information");
DEFINE("_EZREALTY_DETAILS_TAB4A","Images");
DEFINE("_EZREALTY_DETAILS_TAB4B","property-images");
DEFINE("_EZREALTY_DETAILS_TAB5A","Seller");
DEFINE("_EZREALTY_DETAILS_TAB5B","seller-details");
DEFINE("_EZREALTY_DETAILS_TAB6A","Admin");
DEFINE("_EZREALTY_DETAILS_TAB6B","admin-processing");

DEFINE("_EZREALTY_DETAILS_MARKET2","Under Offer");
DEFINE("_EZREALTY_DETAILS_MARKET3","Subject to Contract");
DEFINE("_EZREALTY_DETAILS_MARKET4","Under Contract");
DEFINE("_EZREALTY_DETAILS_MARKET5","Sold");

DEFINE("_EZREALTY_DETAILS_SOURCE1","Search engine");
DEFINE("_EZREALTY_DETAILS_SOURCE2","Web site");
DEFINE("_EZREALTY_DETAILS_SOURCE3","Walk-in");
DEFINE("_EZREALTY_DETAILS_SOURCE4","Property network");
DEFINE("_EZREALTY_DETAILS_SOURCE5","Other - please specify below");

// Manage property price range page

DEFINE("_EZREALTY_PRICES_DISPLAYNUM","Display #");
DEFINE("_EZREALTY_PRICES_SEARCHCOM","Search");
DEFINE("_EZREALTY_PRICES_PUBSTATUS","Published");
DEFINE("_EZREALTY_PRICES_REORDER","Reorder");
DEFINE("_EZREALTY_MODPRICES_ADD","Add");
DEFINE("_EZREALTY_MODPRICES_EDIT","Edit");
DEFINE("_EZREALTY_MODPRICES_ORDER","Ordering");

// Manage property city/town/suburbs

DEFINE("_EZREALTY_LOCALITIES_TITLE","Manage city/town/suburb search/select list");
DEFINE("_EZREALTY_LOCALITIES_DISPLAYNUM","Display #");
DEFINE("_EZREALTY_LOCALITIES_LOC","City/Town/Suburb name");
DEFINE("_EZREALTY_LOCALITIES_PUBSTATUS","Published");
DEFINE("_EZREALTY_LOCALITIES_REORDER","Reorder");
DEFINE("_EZREALTY_MODLOC_TITLE","city/town/suburb search/select item");
DEFINE("_EZREALTY_MODLOC_ADD","Add");
DEFINE("_EZREALTY_MODLOC_EDIT","Edit");
DEFINE("_EZREALTY_MODLOC_LOC","Locality name (city, town or suburb etc)");
DEFINE("_EZREALTY_MODLOC_ORDER","Ordering");
DEFINE("_EZREALTY_MODLOC_SAVED","Locality Details Saved");
DEFINE("_EZREALTY_MODLOC_ERROR1","You must enter the name of a suburb, town or city etc");
DEFINE("_EZREALTY_LOCALITIES_EDITTAG","Edit Property Locality");

// Manage property states/regional areas

DEFINE("_EZREALTY_STATE_TITLE","Manage state/regional area search/select list");
DEFINE("_EZREALTY_STATE_DISPLAYNUM","Display #");
DEFINE("_EZREALTY_STATE_LOC","State/Regional Area name");
DEFINE("_EZREALTY_STATE_PUBSTATUS","Published");
DEFINE("_EZREALTY_STATE_REORDER","Reorder");
DEFINE("_EZREALTY_STATE_TITLE2","State/Regional Area search/select item");
DEFINE("_EZREALTY_STATE_ADD","Add");
DEFINE("_EZREALTY_STATE_EDIT","Edit");
DEFINE("_EZREALTY_STATE_ORDER","Ordering");
DEFINE("_EZREALTY_STATE_SAVED","State Details Saved");
DEFINE("_EZREALTY_STATE_ERROR1","You must enter the name of a state");
DEFINE("_EZREALTY_STATE_EDITTAG","Edit State");

// Manage property country areas

DEFINE("_EZREALTY_COUNTRY_TITLE","Manage country search/select list");
DEFINE("_EZREALTY_COUNTRY_DISPLAYNUM","Display #");
DEFINE("_EZREALTY_COUNTRY_LOC","Country name");
DEFINE("_EZREALTY_COUNTRY_PUBSTATUS","Published");
DEFINE("_EZREALTY_COUNTRY_REORDER","Reorder");
DEFINE("_EZREALTY_COUNTRY_TITLE2","Country search/select item");
DEFINE("_EZREALTY_COUNTRY_ADD","Add");
DEFINE("_EZREALTY_COUNTRY_EDIT","Edit");
DEFINE("_EZREALTY_COUNTRY_ORDER","Ordering");
DEFINE("_EZREALTY_COUNTRY_SAVED","Country Details Saved");
DEFINE("_EZREALTY_COUNTRY_ERROR1","You must enter a Country name");
DEFINE("_EZREALTY_COUNTRY_EDITTAG","Edit Country");

// Manage bedroom numbers

DEFINE("_EZREALTY_ROOMS_TITLE","Manage bedroom number search/select list");
DEFINE("_EZREALTY_ROOMS_DISPLAYNUM","Display #");
DEFINE("_EZREALTY_ROOMS_LOC","Bedroom number");
DEFINE("_EZREALTY_ROOMS_PUBSTATUS","Published");
DEFINE("_EZREALTY_ROOMS_REORDER","Reorder");
DEFINE("_EZREALTY_ROOMS_TITLE2","Bedroom number search/select item");
DEFINE("_EZREALTY_ROOMS_ADD","Add");
DEFINE("_EZREALTY_ROOMS_EDIT","Edit");
DEFINE("_EZREALTY_ROOMS_ORDER","Ordering");
DEFINE("_EZREALTY_ROOMS_SAVED","Bedroom Number Saved");
DEFINE("_EZREALTY_ROOMS_ERROR1","You must enter a bedroom number");
DEFINE("_EZREALTY_ROOMS_EDITTAG","Edit Bedroom Number");

// Manage leads list

DEFINE("_EZREALTY_LEADS_TITLE","Manage Leads List");
DEFINE("_EZREALTY_LEADS_DISPLAYNUM","Display #");
DEFINE("_EZREALTY_LEADS_AR","Add/Review Date");
DEFINE("_EZREALTY_LEADS_LCONTACT","Contact Details");
DEFINE("_EZREALTY_LEADS_LNAME","Name");
DEFINE("_EZREALTY_LEADS_LEMAIL","Email");
DEFINE("_EZREALTY_LEADS_LLOC","Desired Location");
DEFINE("_EZREALTY_LEADS_EDITTAG","Edit/View Lead Details");
DEFINE("_EZREALTY_LEADS_ADD","Add");
DEFINE("_EZREALTY_LEADS_EDIT","Edit");
DEFINE("_EZREALTY_LEADS_TITLE2","Sales Lead Details");
DEFINE("_EZREALTY_LEADS_FMATCH","Find Property Match");

DEFINE("_EZREALTY_LEADS_HPHONE","Home phone");
DEFINE("_EZREALTY_LEADS_WPHONE","Work phone");
DEFINE("_EZREALTY_LEADS_MOBILE","Mobile phone");
DEFINE("_EZREALTY_LEADS_FAX","Fax");
DEFINE("_EZREALTY_LEADS_SOURCE","Where did you find us");
DEFINE("_EZREALTY_LEADS_COMMENTS","Comments");
DEFINE("_EZREALTY_LEADS_DETAILS","Property Details");
DEFINE("_EZREALTY_LEADS_BUDGET","Purchase Budget");

DEFINE("_EZREALTY_LEADS_SAVED","Sales Lead Details Saved");

DEFINE("_EZREALTY_LEADS_ERROR1","You must enter a name");

DEFINE("_EZREALTY_LEADS_ERROR2","You must enter an email address");
DEFINE("_EZREALTY_LEADS_ERROR3","You must enter a property type");
DEFINE("_EZREALTY_LEADS_ERROR4","You must enter a price range");
DEFINE("_EZREALTY_LEADS_ERROR5","You must enter a city/town/suburb");
DEFINE("_EZREALTY_LEADS_ERROR6","You must enter a bedroom number");

// Manage property-type categories

DEFINE("_EZREALTY_CATEGORY_PAGETITLE","Property Category Manager");
DEFINE("_EZREALTY_CATEGORY_DISPLAYNUM","Display #");
DEFINE("_EZREALTY_CATEGORY_SEARCHCAT","Search");
DEFINE("_EZREALTY_CATEGORY_CATNAME","Category");
DEFINE("_EZREALTY_CATEGORY_PUBSTATUS","Published");
DEFINE("_EZREALTY_CATEGORY_ACCLEVEL","Access");
DEFINE("_EZREALTY_CATEGORY_REORDER","Reorder");
DEFINE("_EZREALTY_CATEGORY_MAIN","Property Category");
DEFINE("_EZREALTY_CATEGORY_ADD","Add");
DEFINE("_EZREALTY_CATEGORY_EDIT","Edit");
DEFINE("_EZREALTY_CATEGORY_DEFTITLE","Title");
DEFINE("_EZREALTY_CATEGORY_DEFCONTENT","Description");
DEFINE("_EZREALTY_CATEGORY_DEFACCESS","Access");
DEFINE("_EZREALTY_CATEGORY_DEFORDER","Ordering");
DEFINE("_EZREALTY_CATEGORY_IMAGE","Category Image");
DEFINE("_EZREALTY_CATEGORY_IMAGESEL","Category Image Selector");
DEFINE("_EZREALTY_CATEGORY_SAVED","Property Category Details Saved");
DEFINE("_EZREALTY_CATEGORY_ERROR1","Category must have a title");
DEFINE("_EZREALTY_CATEGORY_EDITTAG","Edit Property Category");

// Manage property-type categories

DEFINE("_EZREALTY_MARKET_PAGETITLE","Manage Market Status Notices");
DEFINE("_EZREALTY_MARKET_DISPLAYNUM","Display #");
DEFINE("_EZREALTY_MARKET_STATUS","Market Status");
DEFINE("_EZREALTY_MARKET_PUBSTATUS","Published");
DEFINE("_EZREALTY_MARKET_REORDER","Reorder");
DEFINE("_EZREALTY_MARKET_MAIN","Market Status Notice");
DEFINE("_EZREALTY_MARKET_ADD","Add");
DEFINE("_EZREALTY_MARKET_EDIT","Edit");
DEFINE("_EZREALTY_MARKET_DEFNAME","Name");
DEFINE("_EZREALTY_MARKET_DEFORDER","Ordering");
DEFINE("_EZREALTY_MARKET_SAVED","Market Status Notice Details Saved");
DEFINE("_EZREALTY_MARKET_ERROR1","Market Status Notice must have a name");

// General error messages

DEFINE("_EZREALTY_GENERAL_ERROR1","Select an item to ");
DEFINE("_EZREALTY_CONFIG_ERROR","Configuration file not writeable! Please assign correct file permissions and try again.");

// Miscellaneous language tags for hyperlinks and image tags

DEFINE("_EZREALTY_GENERAL_PUBLISHED","Published");
DEFINE("_EZREALTY_GENERAL_UNPUBLISHED","Unpublished");
DEFINE("_EZREALTY_GENERAL_APPROVED","Approved");
DEFINE("_EZREALTY_GENERAL_UNAPPROVED","Not Approved");
DEFINE("_EZREALTY_GENERAL_CHECKOUT","Checked Out");
DEFINE("_EZREALTY_GENERAL_RETURN","Return to Property Manager");
DEFINE("_EZREALTY_GENERAL_UP","Move Up");
DEFINE("_EZREALTY_GENERAL_DOWN","Move Down");
DEFINE("_EZREALTY_GENERAL_EDITPROP","Edit Property");
DEFINE("_EZREALTY_GENERAL_SOLD","Sold");
DEFINE("_EZREALTY_GENERAL_CONTRACT","Under Contract");

DEFINE("_EZREALTY_GENERIC_ADD","Add");
DEFINE("_EZREALTY_GENERIC_EDIT","Edit");

//////////////////// FRONT END FILE LANGUAGE TAGS ///////////////////////

// includes.ezrealty.php file

DEFINE("_EZREALTY_HOME","Home");

// ezrealty.php file

DEFINE("_EZREALTY_BACK","Go Back");
DEFINE("_EZREALTY_INCLUDES_HOME","Home");
DEFINE("_EZREALTY_INCLUDES_SEARCH","Search");
DEFINE("_EZREALTY_INCLUDES_NEW","New");
DEFINE("_EZREALTY_CATEGORIES","Property Types");
DEFINE("_EZREALTY_PROPERTIES","properties");
DEFINE("_EZREALTY_PROPERTY","property");
DEFINE("_EZREALTY_INCLUDES_RSSOH","Open House Listings");
DEFINE("_EZREALTY_INCLUDES_POSTMAIL","Thank you - you can now close this window.");

// category display

DEFINE("_EZREALTY_PAGES","Pages");
DEFINE("_EZREALTY_PREV","Prev");
DEFINE("_EZREALTY_NEXT","Next");
DEFINE("_EZREALTY_READMORE","Read more");
DEFINE("_EZREALTY_VIEWPROP","View properties");

// send to friend and arrange viewing forms

DEFINE("_EZREALTY_INVITE_VIEW_PROP","has invited you to view a property listed for sale. Please use the link below to view it.");
DEFINE("_EZREALTY_RECCOMEND_PROP_FROM_FREND"," A recommended Property from your friend");
DEFINE("_EZREALTY_FROM","From");
DEFINE("_EZREALTY_REPLYTO","Reply-To");
DEFINE("_EZREALTY_MAIL_SENT","Thankyou! Your property recommendation has been sent...");
DEFINE("_EZREALTY_MAIL_VIEWINGSENT","Thankyou! Your request for a property inspection has been sent...");
DEFINE("_EZREALTY_INSPECTION"," Property Inspection Request");
DEFINE("_EZREALTY_TELEPHONE","Contact telepnone:-");
DEFINE("_EZREALTY_DATETIME","Preferred date and time:-");
DEFINE("_EZREALTY_REQUEST_MAILINGLIST","would like to be added to your mailing list. Please use the link below to view the property they were looking at, as this may help identify their interests.");
DEFINE("_EZREALTY_PROPERTY_INTERESTS","This visitor is interested in the following property types:-");
DEFINE("_EZREALTY_MAILING_TITLE"," Add to Mailing List Request");
DEFINE("_EZREALTY_MAILINGLIST_SENT","Thankyou! Your request to be added to our mailing list has been sent...");
DEFINE("_EZREALTY_AGENTIDREF","Agent ID property reference number:-");

// viewdetails.ezrealty.php file

DEFINE("_EZREALTY_VIEWDET_NAME_EMAIL","Please complete all fields in the form!");
DEFINE("_EZREALTY_VIEWDET_NOVIEW","Sorry, this feature is not available at the moment.");
DEFINE("_EZREALTY_PROPGONE","The property you are looking for no longer exists, or is is not yet published for listing!");
DEFINE("_EZREALTY_VIEWDET_PROPDET","Property Details");
DEFINE("_EZREALTY_VIEWDET_MAP","View map");
DEFINE("_EZREALTY_VIEWDET_TOUR","Tour");
DEFINE("_EZREALTY_VIEWDET_VTOUR","Take a virtual tour");
DEFINE("_EZREALTY_VIEWDET_PRINT","Print this page");
DEFINE("_EZREALTY_VIEWDET_FAVS","Add to favourites");
DEFINE("_EZREALTY_VIEWDET_VIEWING","Arrange Viewing");
DEFINE("_EZREALTY_VIEWDET_VNAME","Your Name");
DEFINE("_EZREALTY_VIEWDET_VMAIL","Your Email");
DEFINE("_EZREALTY_VIEWDET_VPHONE","Your Telephone");
DEFINE("_EZREALTY_VIEWDET_VTIME","Preferred Date & Time");
DEFINE("_EZREALTY_VIEWDET_SEND","Send");
DEFINE("_EZREALTY_VIEWDET_SEND_FRIEND","Send to Friend");
DEFINE("_EZREALTY_VIEWDET_YOUR_NAME","Your Name");
DEFINE("_EZREALTY_VIEWDET_YOUR_MAIL","Your Email");
DEFINE("_EZREALTY_VIEWDET_FRIENDS_NAME","Your Friend's Name");
DEFINE("_EZREALTY_VIEWDET_FRIENDS_MAIL","Your Friend's Email");
DEFINE("_EZREALTY_VIEWDET_APPROX","approx.");
DEFINE("_EZREALTY_VIEWDET_LINKS","Customer Links");
DEFINE("_EZREALTY_VIEWDET_FPLANS","Floorplans");
DEFINE("_EZREALTY_VIEWDET_MAILING","Join our Mailing List");
DEFINE("_EZREALTY_VIEWDET_MAILING_SPEIL","Property listings are always being updated. Keep yourself informed!");
DEFINE("_EZREALTY_VIEWDET_INTERESTS","I'm interested in the following property types");
DEFINE("_EZREALTY_VIEWDET_LOCALITY","Locality");
DEFINE("_EZREALTY_VIEWDET_LAND","Land type");
DEFINE("_EZREALTY_VIEWDET_BEDROOM","Bedroom");
DEFINE("_EZREALTY_VIEWDET_BEDROOMS","Bedrooms");
DEFINE("_EZREALTY_VIEWDET_BATHROOM","Bathroom");
DEFINE("_EZREALTY_VIEWDET_BATHROOMS","Bathrooms");
DEFINE("_EZREALTY_VIEWDET_PARKING","Parking for");
DEFINE("_EZREALTY_VIEWDET_PARKING2","Parking");
DEFINE("_EZREALTY_VIEWDET_GALLERY","Image Gallery");
DEFINE("_EZREALTY_VIEWDET_SOLD","Sold");
DEFINE("_EZREALTY_VIEWDET_CONTRACT","Under Contract");
DEFINE("_EZREALTY_VIEWDET_REGISTER","Register");

DEFINE("_EZREALTY_VIEWDET_PRICE","Price");
DEFINE("_EZREALTY_VIEWDET_EXTRA","Features at a Glance");
DEFINE("_EZREALTY_VIEWDET_YES","Yes");
DEFINE("_EZREALTY_VIEWDET_NO","No");
DEFINE("_EZREALTY_VIEWDET_LOCATION","Location");
DEFINE("_EZREALTY_VIEWDET_TOWN","Closest town");
DEFINE("_EZREALTY_VIEWDET_TPORT","Transport");
DEFINE("_EZREALTY_VIEWDET_AGE","Age");

DEFINE("_EZREALTY_VIEWDET_PSELLERS","Sellers");
DEFINE("_EZREALTY_VIEWDET_SELLER","Seller");
DEFINE("_EZREALTY_VIEWDET_SELLER_PHONE","Contact #");
DEFINE("_EZREALTY_VIEWDET_SELLER_ARRANGE","View property");
DEFINE("_EZREALTY_VIEWDET_SELLER_VIEWING","Arrange inspection direct with seller");

DEFINE("_EZREALTY_PIX_HOVER","To change image, hover mouse over thumbnails below");

// search.ezrealty.php file

DEFINE("_EZREALTY_SEARCHPRICE","Price range");
DEFINE("_EZREALTY_SEARCHPROPTYPE","Property type");
DEFINE("_EZREALTY_SEARCHLOC","Locality");
DEFINE("_EZREALTY_SEARCHSUB","Suburb");
DEFINE("_EZREALTY_SEARCHREG","State");
DEFINE("_EZREALTY_SEARCHCON","Country");
DEFINE("_EZREALTY_SEARCHBRM","Bedrooms");
DEFINE("_EZREALTY_SEARCHORD","Order");
DEFINE("_EZREALTY_SEARCHADV","Advanced Search Filter");
DEFINE("_EZREALTY_SEARCH_SEARCH","Search");

DEFINE("_EZREALTY_SEARCH_ALCAT","Select all Categories");
DEFINE("_EZREALTY_SEARCH_ALLOC","Select all Localities");
DEFINE("_EZREALTY_SEARCH_ALSTA","Select all States");
DEFINE("_EZREALTY_SEARCH_ALCOU","Select all Countries");
DEFINE("_EZREALTY_SEARCH_MINPRI","Select Min Price");
DEFINE("_EZREALTY_SEARCH_MAXPRI","Select Max Price");
DEFINE("_EZREALTY_SEARCH_MINBED","Select Min Bedrooms");
DEFINE("_EZREALTY_SEARCH_MAXBED","Select Max Bedrooms");
DEFINE("_EZREALTY_SEARCH_ONLYAV","Only Available Properties");
DEFINE("_EZREALTY_SEARCH_PRIASC","Price Ascending");
DEFINE("_EZREALTY_SEARCH_PRIDESC","Price Descending");
DEFINE("_EZREALTY_SEARCH_ASC","Date Ascending");
DEFINE("_EZREALTY_SEARCH_DESC","Date Descending");

// results.ezrealty.php file

DEFINE("_EZREALTY_RESULTSL_SELECT","Please select your search parameters!");
DEFINE("_EZREALTY_RESULTS_RESULTS","Results:-");
DEFINE("_EZREALTY_RESULTS_NORESULTS","Sorry - no results found...");
DEFINE("_EZREALTY_RESULTS_NEW","Latest");
DEFINE("_EZREALTY_RESULTS_NEWLISTINGS","New property listings");

// printdetails.ezrealty.php file

DEFINE("_EZREALTY_PRINT_ID","Property ID");
DEFINE("_EZREALTY_PRINT_TELEPHONE","Telephone:");
DEFINE("_EZREALTY_PRINT_PRINT","Print Screen");
DEFINE("_EZREALTY_PRINT_CLOSE","Close Window");

// submit lead stuff

DEFINE("_EZREALTY_SUBLEAD_TITLE","Submit Property Requirements");
DEFINE("_EZREALTY_SUBLEAD_INTRO","Properties are always coming on the market.  If you can't find what you're looking for at the moment, why not register your property requirements with us.  We'll then notify you when something matching your requirements becomes available.
");
DEFINE("_EZREALTY_SUBLEAD_THANKS","Thankyou - your property requirements have been submitted.");
DEFINE("_EZREALTY_SUBLEAD_CONTACT","Your contact details");
DEFINE("_EZREALTY_SUBLEAD_NOTON","Sorry - we're not currently accepting property leads");

DEFINE("_EZREALTY_LM_ERROR1","Please enter your name");
DEFINE("_EZREALTY_LM_ERROR2","Please enter an email address");
DEFINE("_EZREALTY_LM_ERROR3","Please select a category");
DEFINE("_EZREALTY_LM_ERROR4","Please select a price range");
DEFINE("_EZREALTY_LM_ERROR5","Please select a city/town/suburb");
DEFINE("_EZREALTY_LM_ERROR6","Please select an approximate bedroom number");

DEFINE("_EZREALTY_EMAIL_ERROR1","Please include your name");
DEFINE("_EZREALTY_EMAIL_ERROR2","Please include your email");
DEFINE("_EZREALTY_EMAIL_ERROR3","Please include your contact telephone");
DEFINE("_EZREALTY_EMAIL_ERROR4","Please include your questions");
DEFINE("_EZREALTY_EMAIL_ERROR5","Please include your friends name");
DEFINE("_EZREALTY_EMAIL_ERROR6","Please include your friends email");
DEFINE("_EZREALTY_EMAIL_ERROR7","Please include a bit about your interests");
DEFINE("_EZREALTY_EMAIL_ERROR8","Sorry - this email feature is not currently available");
DEFINE("_EZREALTY_EMAIL_ERROR9","Please include a general time-frame for viewing");

// front-end member stuff

DEFINE("_EZREALTY_LISTINGS_INTRO","You may have the following number of FREE listings for sale");
DEFINE("_EZREALTY_NOLISTINGS","You have no current listings");
DEFINE("_EZREALTY_ADDNEW","Add new listing");
DEFINE("_EZREALTY_SUBMIT_LISTING","Submit Listing");
DEFINE("_EZREALTY_NO_LOGIN","Sorry - but you need to login first");
DEFINE("_EZREALTY_MAX_NUM","Sorry - you have reached the maximum of");
DEFINE("_EZREALTY_MAXNUM_LIST","listings");
DEFINE("_EZREALTY_YOUVEGOTMAIL","New Property Listing");
DEFINE("_EZREALTY_DONE","Image upload and property listing successful!");
DEFINE("_EZREALTY_UPDATEDONE","You have successfully updated your listing!");
DEFINE("_EZREALTY_NO_EDIT","Sorry - you're not allowed to edit this listing");
DEFINE("_EZREALTY_NODELETE","You are not allowed to delete this listing");
DEFINE("_EZREALTY_CHECKDELETE","Are you sure you want to delete this property listing?");
DEFINE("_EZREALTY_DELETE_LISTING","Delete Listing");
DEFINE("_EZREALTY_LISTINGS_PREVIEW","Preview Listing");
DEFINE("_EZREALTY_DELIMGOOPS","Could not delete the image file");
DEFINE("_EZREALTY_LISTING_DELETED","Property listing deleted successfully");
DEFINE("_EZREALTY_LISTING_TERMS","Terms of Listing");
DEFINE("_EZREALTY_PREVIEW_LISTING","Your Property Listing Preview");

DEFINE("_EZREALTY_MEMBERS_ADDRESS","Address");
DEFINE("_EZREALTY_MEMBERS_HITS","Hits");
DEFINE("_EZREALTY_MEMBERS_ACTION","Action");
DEFINE("_EZREALTY_MEMBERS_STATUS","Published");
DEFINE("_EZREALTY_MEMBERS_UPGRADE","Upgrade");
DEFINE("_EZREALTY_MEMBERS_MAKEFEAT","Make Featured");
DEFINE("_EZREALTY_MEMBERS_SELLERDET","Seller Details");

DEFINE("_EZREALTY_LISTING1","Seller's contact details");
DEFINE("_EZREALTY_LISTING2","Contact name");
DEFINE("_EZREALTY_LISTING3","Contact telephone");
DEFINE("_EZREALTY_LISTING4","Email address");
DEFINE("_EZREALTY_LISTING5","Address of Property for sale");
DEFINE("_EZREALTY_LISTING6","Property details");
DEFINE("_EZREALTY_LISTING7","Features at a glance");
DEFINE("_EZREALTY_LISTING8","Property Marketing details");
DEFINE("_EZREALTY_LISTING9","Add Property Details");
DEFINE("_EZREALTY_LISTING10","Edit Property Details");
DEFINE("_EZREALTY_LISTING11","Seller's location");
DEFINE("_EZREALTY_LISTING12","Images");
DEFINE("_EZREALTY_LISTING_IMGDELETED","Image deleted");
DEFINE("_EZREALTY_LISTING_RESTRICTED","**This information is not available for free listings**");

DEFINE("_EZREALTY_SELLER_ERROR1","You must include a contact name");
DEFINE("_EZREALTY_SELLER_ERROR2","You must include a contact telephone number");
DEFINE("_EZREALTY_SELLER_ERROR3","You must include a contact email address");
DEFINE("_EZREALTY_SELLER_ERROR4","You must include your location");

DEFINE("_EZREALTY_SELLER_N","Name");
DEFINE("_EZREALTY_SELLER_T","Telephone");
DEFINE("_EZREALTY_SELLER_E","Email");
DEFINE("_EZREALTY_SELLER_L","Location");
DEFINE("_EZREALTY_SELLER_C","Contact");

DEFINE("_EZREALTY_NOCATLISTINGS","Sorry - there are no listings in this category");

DEFINE("_EZREALTY_IPN_SUBJECT","Listing Upgraded to");
DEFINE("_EZREALTY_IPN_MSG1","A site member has just upgraded their listing to");
DEFINE("_EZREALTY_IPN_MSG2","Purchaser details:-");
DEFINE("_EZREALTY_IPN_MSG3","Property ID#");

DEFINE("_EZREALTY_POA","POA");
DEFINE("_EZREALTY_CONFIG_SBIMP","List by Impressions");
DEFINE("_EZREALTY_CONFIG_SBIMPDESC","If allowing site members to list properties, do you want to do this based on impressions - ie. hits on the full details page. Listings will then cease to display once they exceed the number of impressions and you'll be able to clean the database of these old listings by pressing the 'Clean Listings' button.");
DEFINE("_EZREALTY_CONFIG_IMPNUM","Number of Impressions");
DEFINE("_EZREALTY_CONFIG_IMPNUMDESC","If limiting listings based on impressions/hits - how many should be shown.");

DEFINE("_EZREALTY_RESET_MSG","Hits have been reset");
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
DEFINE("_EZREALTY_TOOLBAR_CLOSE","Close");
DEFINE("_EZREALTY_NLAVAIL","Sorry - this listing is not currently available");


// NEW TAGS THAT WERE ADDED AFTER THE 3.2.2 VERSION FOR CB INTEGRATION

DEFINE("_EZREALTY_CONFIG_CBINT","Community Builder Integration");
DEFINE("_EZREALTY_CONFIG_CBINTDESC","If you are using Community Builder, do you want to use the information from its membership tables for seller contact details?");
DEFINE("_EZREALTY_PROFILER_CBMSG1","The EZ Realty property listings component is not installed.  Please contact the site administrator.");
DEFINE("_EZREALTY_PROFILER_CBMSG2","There are no property listings for this member.");
DEFINE("_EZREALTY_PROFILER_CBPROFILE","View Profile");




// NEW TAGS THAT WERE ADDED AFTER THE 3.3.0 VERSION


DEFINE("_EZREALTY_CLICK_OPEN","Click to open");




// NEW TAGS THAT WERE ADDED FOR THE 4.0.0 RELEASE

DEFINE("_EZREALTY_CONFIG_FREEPIC","Free Listing Images");
DEFINE("_EZREALTY_CONFIG_FREEPICDESC","If you have free and paid listings for your members, do you want free listings to be able to show an image? If you select 'NO' just a placeholder will be displayed, which may encourage more paid listings. If you select 'YES' - free listings will only be able to have one image. This will not affect listings if you're ONLY running in free listings mode - members can have 12 images when run in this mode.");
DEFINE("_EZREALTY_CONFIG_PAIDOPT1","FREE with option to UPGRADE");
DEFINE("_EZREALTY_CONFIG_PAIDOPT2","PAID listings ONLY");
DEFINE("_EZREALTY_CONFIG_PAIDONLY","Payment Choices");
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
DEFINE("_EZREALTY_DETAILS_METADESC","Description");
DEFINE("_EZREALTY_DETAILS_METAKEYS","Keywords");
DEFINE("_EZREALTY_FEND_BUYNOW","Purchase a 'Featured Listing' first and you don't have to pay the initial 'Premium Listing' fee.");
DEFINE("_EZREALTY_FEND_BUYNOW2","Upgrade to a 'Featured Listing' first and you don't have to pay the initial 'Premium Listing' fee.");
DEFINE("_EZREALTY_UPGRADE","Upgrade");
DEFINE("_EZREALTY_CHECK_LOC","Check Localities");
DEFINE("_EZREALTY_CHECK_STATE","Check States");
DEFINE("_EZREALTY_CHECK_COUNTRY","Check Countries");
DEFINE("_EZREALTY_CHECK_AVAIL","Check Availability");
DEFINE("_EZREALTY_CHECK_SUBMIT","Submit New");
DEFINE("_EZREALTY_CHECK_GO","Go");
DEFINE("_EZREALTY_CHECK_REFRESH","<strong><br /><br />Refresh the screen after closing this window - then you'll see the new entry.</strong>");

DEFINE("_EZREALTY_CONFIG_SELFENTRY","Front-end Additions");
DEFINE("_EZREALTY_CONFIG_SELFENTRYDESC","Do you want to allow site members access to add new localities, states and countries themselves. When allowing this - these localities, states and countries will be automatically published to allow access when creating their property listing.");
DEFINE("_EZREALTY_CONFIG_COLOUR1","Rollover Colour 1");
DEFINE("_EZREALTY_CONFIG_COLOUR1DESC","This is the colour cells will change to when hovering your mouse over an item in the list of properties.");
DEFINE("_EZREALTY_CONFIG_COLOUR2","Rollover Colour 2");
DEFINE("_EZREALTY_CONFIG_COLOUR2DESC","This is the colour cells will return to after mousing off the cell. For best results - this should be the colour of your page background.");

DEFINE("_EZREALTY_DATABASE1","Upgrade Database");
DEFINE("_EZREALTY_DATABASE2","Database upgrades have been done");



// TAGS THAT HAD THEIR LANGUAGE CONTENT CHANGED FOR THE 4.0.0 RELEASE


DEFINE("_EZREALTY_LISTINGS_HITSEXPL","If upgrading between listing levels/types - hits will be reset to 0");
DEFINE("_EZREALTY_HEADER_OHOUSE","Open Houses");


// NEW TAGS FOR THE 4.1.0 RELEASE

DEFINE("_EZREALTY_LISTING_SELECTTYPE","Select Type");
DEFINE("_EZREALTY_TYPE_SALE","For Sale");
DEFINE("_EZREALTY_TYPE_RENTAL","For Rent");
DEFINE("_EZREALTY_LISTING_TYPE","Listing Type");
DEFINE("_EZREALTY_LISTING_ANYTYPE","Any Listing Type");
DEFINE("_EZREALTY_RENTAL_FREQUENCY","Rental Frequency");
DEFINE("_EZREALTY_RENTAL_NA","Not applicable");
DEFINE("_EZREALTY_RENTAL_NIGHTLY","Per night");
DEFINE("_EZREALTY_RENTAL_WEEKLY","Per week");
DEFINE("_EZREALTY_RENTAL_FNIGHT","Per fortnight");
DEFINE("_EZREALTY_RENTAL_MONTH","Per month");
DEFINE("_EZREALTY_RENTAL_SQFT","Per square foot");
DEFINE("_EZREALTY_RENTAL_SQMTR","Per square metre");
DEFINE("_EZREALTY_RENTAL_SPARE","Spare entry");


// TAGS THAT HAD THEIR LANGUAGE CONTENT CHANGED FOR THE 4.1.0 RELEASE


DEFINE("_EZREALTY_DETAILS_MARKET1","Unsold/Available");


// NEW TAGS FOR THE 4.2.0 RELEASE

DEFINE("_EZREALTY_CONFIG_MOBILE","Mobile phone #");
DEFINE("_EZREALTY_CONFIG_MOBILEDESC","This will be used for the SMS contact form if you don't allow site members to list, or if you also list properties. It MUST be in the international number format:- Country Code, Network prefix without the leading '0' and Number - no spaces, only numerals. If you DON'T want to use SMS contacts for your own listings - leave these details blank.");

DEFINE("_EZREALTY_SELLER_SMS1","SMS #");
DEFINE("_EZREALTY_SELLER_SMS2","SMS me!");
DEFINE("_EZREALTY_SELLER_SMS3","NOTE: Before using this, You need to have an active");
DEFINE("_EZREALTY_SELLER_SMS4","account! You also need to set up a HTTP API via your Clickatell control panel.");
DEFINE("_EZREALTY_SELLER_SMS5","Your mobile number in international format:- Country Code, Network prefix without the leading '0' and Number - no spaces, only numerals.");
DEFINE("_EZREALTY_SELLER_SMS6","Send SMS via Clickatell to this property seller");
DEFINE("_EZREALTY_SELLER_SMS7","Username");
DEFINE("_EZREALTY_SELLER_SMS8","Password");
DEFINE("_EZREALTY_SELLER_SMS9","Mobile Phone #");
DEFINE("_EZREALTY_SELLER_SMS10","Message");
DEFINE("_EZREALTY_SELLER_SMS11","success");
DEFINE("_EZREALTY_SELLER_SMS12","message ID");
DEFINE("_EZREALTY_SELLER_SMS13","send message failed");
DEFINE("_EZREALTY_SELLER_SMS14","Authentication failure");
DEFINE("_EZREALTY_SELLER_SMS15","You need to insert your Clickatell username");
DEFINE("_EZREALTY_SELLER_SMS16","You need to insert your Clickatell password");
DEFINE("_EZREALTY_SELLER_SMS17","You need to insert the Mobile phone number associated with your Clickatell account");
DEFINE("_EZREALTY_SELLER_SMS18","You need to include a message to this property seller");
DEFINE("_EZREALTY_SELLER_SMS19","HTTP API ID#");
DEFINE("_EZREALTY_SELLER_SMS20","You need to insert your Clickatell API ID. If you don't already have one, set up a HTTP API via your Clickatell control panel.");
DEFINE("_EZREALTY_SELLER_SMS21","150 characters max");
DEFINE("_EZREALTY_SELLER_SMS22","Your Clickatell Details");
DEFINE("_EZREALTY_SELLER_SMS23","Send SMS via Clickatell");
DEFINE("_EZREALTY_SELLER_SMS24","Send SMS via Clickatell to this sales lead - Create sales lead BEFORE sending SMS!");
DEFINE("_EZREALTY_SELLER_SMS25","Done!");
DEFINE("_EZREALTY_SELLER_SMS26","Send SMS");
DEFINE("_EZREALTY_SELLER_SMS27","Make sure your Clickatell details have been set in the EZ Realty configuration settings area BEFORE sending an SMS!!");

DEFINE("_EZREALTY_SELLER_SMS7DESC","This must be your Clickatell Central API account username.");
DEFINE("_EZREALTY_SELLER_SMS8DESC","This must be your Clickatell Central API account password");
DEFINE("_EZREALTY_SELLER_SMS19DESC","This must be your Clickatell Central API account HTTP API ID#. Create your API ID# via your Clickatell control panel.");


DEFINE("_EZREALTY_CONFIG_TEXTBOX","Text box width");
DEFINE("_EZREALTY_CONFIG_TEXTBOXDESC","The width of the larger text boxes in the front-end add/edit property details form. This width helps to reduce template distortion.");
DEFINE("_EZREALTY_CONFIG_TEXTAREA","Text area width");
DEFINE("_EZREALTY_CONFIG_TEXTAREADESC","The width of the text areas in the front-end add/edit property details form. This width helps to reduce template distortion.");
DEFINE("_EZREALTY_TYPE_LEASE","For Lease");
DEFINE("_EZREALTY_IMAGE_WARNING","<strong><font color='#FF0000'>Image types MUST be jpg's or png's!!</font></strong>");
DEFINE("_EZREALTY_IMAGE_WARNING2","One or more of your images exceed the allowed image height or width!!");

DEFINE("_EZREALTY_CONFIG_OHOUSE","Open House Link");
DEFINE("_EZREALTY_CONFIG_OHOUSEDESC","Do you want to show the 'Open House Listings' link?");
DEFINE("_EZREALTY_CONFIG_MAXWIDTH","Maximum allowed image width");
DEFINE("_EZREALTY_CONFIG_MAXWIDTHDESC","What is the maximum width in pixels allowed for image uploads?");
DEFINE("_EZREALTY_CONFIG_MAXHEIGHT","Maximum allowed image height");
DEFINE("_EZREALTY_CONFIG_MAXHEIGHTDESC","What is the maximum height in pixels allowed for image uploads?");

DEFINE("_EZREALTY_PIXELS","pixels");
DEFINE("_EZREALTY_BEDBATH","Bed/Bath");
DEFINE("_EZREALTY_BUDGET","Budget");
DEFINE("_EZREALTY_INTERESTED","Interested?");
DEFINE("_EZREALTY_WANTED","Wanted");
DEFINE("_EZREALTY_PROPERTIES_WANTED","Properties Wanted");
DEFINE("_EZREALTY_PROPERTIES_WANTEDDESC","We've got people waiting for the following");

DEFINE("_EZREALTY_LEAD_RESPONSE"," Sales Lead Response");
DEFINE("_EZREALTY_RESPONS_PROPLEAD","may have a property for a sales lead you have listed. Lead ID# is:-");
DEFINE("_EZREALTY_LEAD_RESPONSEERROR"," You must include a short message");
DEFINE("_EZREALTY_CONFIG_COUNTRY","Use Countries");

DEFINE("_EZREALTY_CONFIG_NLLINK","New Listings Link");
DEFINE("_EZREALTY_CONFIG_NLLINKDESC","Do you want to show the new listings link on the front-end EZ Realty header?");
DEFINE("_EZREALTY_STUDIO","Studio");
DEFINE("_EZREALTY_RESET","Reset");
DEFINE("_EZREALTY_LEADCONTACT_PROMO","Got a property that may match one we've got a buyer for?");
DEFINE("_EZREALTY_SKIPFREE_LISTING","Skip the free listing and go straight to a paid listing!!");

DEFINE("_EZREALTY_CONFIG_COLCOUNT","Column count");
DEFINE("_EZREALTY_CONFIG_COLCOUNTDESC","How many columns do you want the first category listing page layout to have?");
DEFINE("_EZREALTY_CONFIG_COLWIDTH","Column width");
DEFINE("_EZREALTY_CONFIG_COLWIDTHDESC","How wide are the columns on the first category listing page? For example, if you have 1 column, the width should be 100%, if you have 2 columns the width should be 50%, and if you have 3 columns the width should be 33%. You MUST include the percent sign.");

DEFINE("_EZREALTY_ESSENTIALS","Essentials");
DEFINE("_EZREALTY_OTHERSPECS","Other Specs");
DEFINE("_EZREALTY_NS","Not specified");
DEFINE("_EZREALTY_EA","Email Admin");

DEFINE("_EZREALTY_CONFIG_FORMATTING","Formatting");
DEFINE("_EZREALTY_CONFIG_MAPPING","Mapping Settings");
DEFINE("_EZREALTY_CONFIG_MAPWIDTH","Map Width");
DEFINE("_EZREALTY_CONFIG_MAPWIDTHDESC","The width of the map on your site's front-end expressed in pixels.");
DEFINE("_EZREALTY_CONFIG_MAPHEIGHT","Map Height");
DEFINE("_EZREALTY_CONFIG_MAPHEIGHTDESC","The height of the map on your site's front-end expressed in pixels.");
DEFINE("_EZREALTY_CONFIG_ADDRESSWIDTH","Address Box Width");
DEFINE("_EZREALTY_CONFIG_ADDRESSWIDTHDESC","The width of the text box above the map that displays the property address.");
DEFINE("_EZREALTY_PROPERTY_MAPLOC","Map Location");
DEFINE("_EZREALTY_SEARCH_ALLPOSTCODES","Select all PostCodes");




// TAGS THAT HAD THEIR LANGUAGE CONTENT CHANGED FOR THE 4.2.0 RELEASE


DEFINE("_EZREALTY_CONFIG_NEWLIST","Special property listing pages");
DEFINE("_EZREALTY_CONFIG_NEWLISTDESC","Number of properties to list on the 'New Listings', 'Open House Listings', 'Properties Wanted' and 'RSS feed' page");


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
DEFINE("_EZREALTY_CPANEL_MIGRATE","Migrate Users");
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
DEFINE("_EZREALTY_PROFILE_ERROR_MID","ERROR - You must assign an existing member to this profile!!");
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
DEFINE("_EZREALTY_CONFIG_MAPTYPEDESC","Which mapping service do you want to use? If your template has lots of javascript, you may have to use the Yahoo mapping option here:- <a target='_blank' href='http://developer.yahoo.com/maps/'>http://developer.yahoo.com/maps/</a>.");
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

DEFINE("_EZREALTY_PRICES_TITLE","Manage Search Filter Price Increment");
DEFINE("_EZREALTY_MODPRICES_TITLE","Search Filter Price Increment");
DEFINE("_EZREALTY_PRICES_RANGE","Search Filter Price Increment");
DEFINE("_EZREALTY_MODPRICES_RANGE","Define Search Filter Price Increment");
DEFINE("_EZREALTY_MODPRICES_SAVED","Search Filter Price Increment Saved");
DEFINE("_EZREALTY_MODPRICES_ERROR1","You must enter a price increment");
DEFINE("_EZREALTY_PRICES_EDITTAG","Edit Search Filter Price Increment");





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