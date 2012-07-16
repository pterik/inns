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

DEFINE("_EZREALTY_CONFIG_GENSET","Общий образец действия настроек");

// // configuration area settings

DEFINE("_EZREALTY_CONFIG_IMAGESIZES","Thumbnailing и размеры образца");
DEFINE("_EZREALTY_CONFIG_WIDTHPROPIMG","Основная ширина образца");
DEFINE("_EZREALTY_CONFIG_WIDTHPROPIMGDESC","Ширина основной недвижимости и план образца, когда рассматриваешь детали недвижимости на странице.Это выражается в пикселях и помогает соответствовать образцу с его шаблоном. Образцы будут пересортированы по шаблонам");
DEFINE("_EZREALTY_CONFIG_WIDTHCATTHUMB","Категория ширины Thumbnail");
DEFINE("_EZREALTY_CONFIG_WIDTHCATTHUMBDESC","Ширина образцов использеуется как их категория.");
DEFINE("_EZREALTY_CONFIG_WIDTHTHUMB","Thumbnail максимальная ширина");
DEFINE("_EZREALTY_CONFIG_WIDTHTHUMBDESC","Созданная ширина образца, которая затем будет использоваться.");

DEFINE("_EZREALTY_CONFIG_TNCREATOR","Создатель Thumbnail");
DEFINE("_EZREALTY_CONFIG_GDLIMIT","GD поддерживает только jpg и png!");
DEFINE("_EZREALTY_CONFIG_GDFOUND","Найти GD");
DEFINE("_EZREALTY_CONFIG_GDCHOOSE","Выбрать образец процессора для создания thumbnail.");
DEFINE("_EZREALTY_CONFIG_THUMBQUAL","Качество Thumbnail");
DEFINE("_EZREALTY_CONFIG_THUMBQUALDESC","Качество созданного образца");
DEFINE("_EZREALTY_CONFIG_IMGDIR","Образец инструкции");
DEFINE("_EZREALTY_CONFIG_IMGDIRDESC","Отсутствие образца в инструкции называется 'ezrealty',и находиться в components/com_ezrealty/ezrealty Thumbnails пополняют в пределах так называемого th. если вы хотите изменить имя директории, вы должны создать новую image/thumbs директорию вручную. Вы не можете изменять имя th дериктории.");
DEFINE("_EZREALTY_CONFIG_TNNONE","Нет");
DEFINE("_EZREALTY_CONFIG_TNGD1","библиотека GD");
DEFINE("_EZREALTY_CONFIG_TNGD2","библиотека GD2");

DEFINE("_EZREALTY_CONFIG_YOURBIZSET","Ваши деловые настройки");
DEFINE("_EZREALTY_CONFIG_BIZNAME","Деловое имя");
DEFINE("_EZREALTY_CONFIG_BIZNAMEDESC","Название вашего Делового имени отражается в компонентах заголовков и прочих, на пример на странице печати и электронных письмах.");
DEFINE("_EZREALTY_CONFIG_BIZAD","Деловой адрес");
DEFINE("_EZREALTY_CONFIG_BIZADDESC","Ваш Деловой адрес. Это появиться в начале страницы, так как будущие покупатели будут регистрироваться.");
DEFINE("_EZREALTY_CONFIG_TELEPHONE","Контактный телефон");
DEFINE("_EZREALTY_CONFIG_TELEPHONEDESC","Ваш контактный номер покажет приведённую в порядок форму и страницу.");
DEFINE("_EZREALTY_CONFIG_EMAIL","E-mail адрес");
DEFINE("_EZREALTY_CONFIG_EMAILDESC","E-mail используется для просмотра недвижимости и отсылки списка с запросами.");
DEFINE("_EZREALTY_CONFIG_CURRENCYSIGN","Курс валюты");
DEFINE("_EZREALTY_CONFIG_CURRENCYSIGNDESC","Курс валюты показывается до цен на недвижимость.");
DEFINE("_EZREALTY_CONFIG_BIZINTRO","Введение в бизнесс");
DEFINE("_EZREALTY_CONFIG_BIZINTRODESC","Аннотация о вашей недвижимости.");

DEFINE("_EZREALTY_CONFIG_LAYOUTSETTINGS","Руководствуйтесь основным планом вашего сайта");

DEFINE("_EZREALTY_CONFIG_TPL","Основной шаблон");
DEFINE("_EZREALTY_CONFIG_TPLDESC","Выберите тот план, который вы хотите. Этот ход повлияет на вид деталей недвижимости и на страницу.");
DEFINE("_EZREALTY_CONFIG_SELTPL","Выбрать шаблон");

DEFINE("_EZREALTY_CONFIG_PROPPERPAGE","Недвижимости на странице");
DEFINE("_EZREALTY_CONFIG_PROPPERPAGEDESC","Количество недвижимости, показанной на странице");
DEFINE("_EZREALTY_CONFIG_FEATURETITLE","Отличительные признаки ящика");
DEFINE("_EZREALTY_CONFIG_FEATURETITLEDESC","Какие вы хотите назвать отличительные черты для вашего каталога недвижимости.");
DEFINE("_EZREALTY_CONFIG_RECFRIEND","Рекомендовать соединение");
DEFINE("_EZREALTY_CONFIG_RECFRIENDDESC","Хотите ли вы позволить посетителям использовать данный отличительный признак?");
DEFINE("_EZREALTY_CONFIG_MAILINGVIEW","добавить соединение в каталог отправленных");
DEFINE("_EZREALTY_CONFIG_MAILINGDESC","Хотите ли вы показывать данный почтовый ящик? Это позволит посетителям автоматически послать вам email, а затем добавить содержание подробностей в ваш список отправленнных.");
DEFINE("_EZREALTY_CONFIG_SHOWLINKS","Показать ящик соединений");
DEFINE("_EZREALTY_CONFIG_SHOWLINKSDESC","Хотите ли вы показать этот ящик соединений, т.е. ящик, содержащийплан соединения, страницу и добавить лучшее?");
DEFINE("_EZREALTY_CONFIG_SC","Страна");
DEFINE("_EZREALTY_CONFIG_SCDESC","хотите ли вы включить государство или страну в развитие исследоватедьского фильтра, попадающего в ящик?");

DEFINE("_EZREALTY_CONFIG_RSS","Поддержка RSS");
DEFINE("_EZREALTY_CONFIG_RSSDESC","Хотите ли показать в RSS, содержащее соединение в вашем последнем каталоге недвижимости и так называемой недвижимости openhouse?");
DEFINE("_EZREALTY_CONFIG_RSSNN","Новый каталог RSS содержания");
DEFINE("_EZREALTY_CONFIG_RSSNNDESC","Что вы хотите назвать в вашем новом каталоге RSS содержать?");
DEFINE("_EZREALTY_CONFIG_RSSOH","OpenHouse RSS имя поддержки");
DEFINE("_EZREALTY_CONFIG_RSSOHDESC","Что вы хотите указать в вашем новом каталоге openhouse listings RSS feed?");

DEFINE("_EZREALTY_CONFIG_LEAD","Управление недвижимостью");
DEFINE("_EZREALTY_CONFIG_LEADDESC","Позволите ли вы регистрировать посетителям их потребности вместе с вашими?");

DEFINE("_EZREALTY_CONFIG_MEMSALES","Управляют основным каталогом зарегистрировавшиеся сотрудники");
DEFINE("_EZREALTY_CONFIG_MEMLISTINGS","Список сотрудников");
DEFINE("_EZREALTY_CONFIG_MEMLISTINGSDESC","Позволите ли вы регистрироваться сотрудникам для размещения недвижимости для продажи через основную панель каталога?");
DEFINE("_EZREALTY_CONFIG_NOTIFICATION","Каталог объявлений");
DEFINE("_EZREALTY_CONFIG_NOTIFICATIONDESC","Хотите ли вы быть усведомленным о новых и усовершенствованных каталогах?");
DEFINE("_EZREALTY_CONFIG_MEMAPPROVAL","Процесс утверждения");
DEFINE("_EZREALTY_CONFIG_MEMAPPROVALDESC","Новый и усовершенствованные каталоги нуждаются в утверждении до публикации?");
DEFINE("_EZREALTY_CONFIG_NUMLISTINGS","Количество каталогов");
DEFINE("_EZREALTY_CONFIG_NUMLISTINGSDESC","Сколько каталогов может быть у сотрудников?");

DEFINE("_EZREALTY_CONFIG_MEMBERSINTRO","Зона введения для сотрудников");
DEFINE("_EZREALTY_CONFIG_MEMBERSINTRODESC","Написать несколько аннотаций для зоны сотрудников-например, отнести к терминам каталога.");
DEFINE("_EZREALTY_CONFIG_TERMS","Сроки каталога");
DEFINE("_EZREALTY_CONFIG_TERMSDESC","За пределами сроков ваших каталогов.");

DEFINE("_EZREALTY_CONFIG_IMG1","Рисунки");
DEFINE("_EZREALTY_CONFIG_IMG2","настройки рисунка");
DEFINE("_EZREALTY_CONFIG_BIZ1","Бизнесс");
DEFINE("_EZREALTY_CONFIG_BIZ2","Бизнесс-настройки");
DEFINE("_EZREALTY_CONFIG_LAY1","План");
DEFINE("_EZREALTY_CONFIG_LAY2","расположение плана");
DEFINE("_EZREALTY_CONFIG_MEM1","Сотрудники");
DEFINE("_EZREALTY_CONFIG_MEM2","Продажи сотрудника");
DEFINE("_EZREALTY_CONFIG_PAID1","Платежи");
DEFINE("_EZREALTY_CONFIG_CUST1","Заказ");

DEFINE("_EZREALTY_CONFIG_CPITITLE","заказ об информировании недвижимости");
DEFINE("_EZREALTY_CONFIG_CPI1","Заказ 1");
DEFINE("_EZREALTY_CONFIG_CPI2","заказ 2");
DEFINE("_EZREALTY_CONFIG_CPI3","Заказ 3");
DEFINE("_EZREALTY_CONFIG_CPIDESC","3 характерных признака закахоа позволяют дать вам характеристику каталогам - к примеру ежегодные покупки, ежегодные налоги. Эти названия будут появляться в дополнительной части страницы,где вы сможете обозначить важность пригодной недвижимости, также как и основной.");

DEFINE("_EZREALTY_CONFIG_APFTITLE","Дополнительные признаки недвижимости");
DEFINE("_EZREALTY_CONFIG_APFDESC","10 дополнительных признаков недвижимости появляются в ящике в зоне информации о недвижимости. в основной части эти имена появляются как сводка. Вы должны давать характеристику всем названиям этих характеристик, так как они пригодны для вашей географической зоны- но сотрудник однажды давший характеристику уже не сможет изменить их так как это может подействовать на правильность информации.");
DEFINE("_EZREALTY_CONFIG_APF1","Признак1");
DEFINE("_EZREALTY_CONFIG_APF2","Признак2");
DEFINE("_EZREALTY_CONFIG_APF3","Признак3");
DEFINE("_EZREALTY_CONFIG_APF4","Признак4");
DEFINE("_EZREALTY_CONFIG_APF5","Признак5");
DEFINE("_EZREALTY_CONFIG_APF6","Признак6");
DEFINE("_EZREALTY_CONFIG_APF7","Признак7");
DEFINE("_EZREALTY_CONFIG_APF8","Признак8");
DEFINE("_EZREALTY_CONFIG_APF9","Признак9");
DEFINE("_EZREALTY_CONFIG_APF10","Признак10");

DEFINE("_EZREALTY_CONFIG_PP","Ваши PayPal настройки для оплаты платежей");

DEFINE("_EZREALTY_CONFIG_PAIDLISTINGS","Платежи");
DEFINE("_EZREALTY_CONFIG_PAIDLISTINGSDESC","Хотите ли вы предложить оплату каталогов на вашем участке? оплата каталогов позволяет сотрудникамвключать дополнительные образцы и информаци в их каталоги.");
DEFINE("_EZREALTY_CONFIG_PPEMAIL","PayPal email адрес");
DEFINE("_EZREALTY_CONFIG_PPEMAILDESC","Это должен быть ваш первоначальный PayPal email адрес<br /><br />Visit
<a target='_blank' href='http://paypaltech.com/Stephen/affiliate/hemail.htm'>PayPal Tech Resources</a>
простой метод зашифровать ваш PayPal email добавить защиту от spam bots, затем сканировать шифр в 
PayPal email адрес. не использовать этот зашифрованный адрес для проверенных отосланных адресов- это может быть представлено в нормальном формате.");
DEFINE("_EZREALTY_CONFIG_CHECKMAIL","Проверить почту");
DEFINE("_EZREALTY_CONFIG_CHECKMAILDESC","Повторите ваш основной PayPal e-mail адрес здесь. Он используется для поверки сделки в электронном виде запутывавших PayPal email адреса. Это не должно быть в an encrypted формате!!");
DEFINE("_EZREALTY_CONFIG_PPCURRENCY","код валюты");
DEFINE("_EZREALTY_CONFIG_PPCURRENCYDESC","должно быть 3 письма PayPal код валюты для вашей первоначальной PayPal валюты - ни одного вы не должны создавать.");
DEFINE("_EZREALTY_CONFIG_PPBUTTON","Рисунок кнопки");
DEFINE("_EZREALTY_CONFIG_PPBUTTONDESC","Название рисунка кнопки используемое для улучшения списка на главной странице.Рисунки кнопки не должны выходить за пределы основной директории.");

DEFINE("_EZREALTY_CONFIG_PPPREMIUM","стандарт улучшения имени");
DEFINE("_EZREALTY_CONFIG_PPPREMIUMDESC","Чтобы вы хотели указать в вашем каталоге улучшения - eg. Premium/Enhanced Listing etc. Это появиться как элемент имени в завершающем шифре и в докладах о сделке с PayPal.");
DEFINE("_EZREALTY_CONFIG_PPCOST","стандарт улучшения стоимости");
DEFINE("_EZREALTY_CONFIG_PPCOSTDESC"," стоимость улучшений каталога свободной недвижимости в оплаченному каталогу.");
DEFINE("_EZREALTY_CONFIG_FPNAME","Характерные признаки каталога улучшенных названий");
DEFINE("_EZREALTY_CONFIG_FPNAMEDESC","Чтобы вы хотели указать в данном каталоге. Это появиться как символ имени в коде завершения и в докладах о сделке с PayPal.");
DEFINE("_EZREALTY_CONFIG_FPCOST","Стоимость улучшения характерных признаков каталога");
DEFINE("_EZREALTY_CONFIG_FPCOSTDESC","Стоимость улучшений оплаченного каталога к признакам каталога.Помните, сотрудники не могут улучшить с бесплатного каталог, первое, что они должны улучшить стандарт оплаченного каталога.");

DEFINE("_EZREALTY_CONFIG_PPPOSTMODE","Рекламировать модель");
DEFINE("_EZREALTY_CONFIG_PPPOSTMODEDESC","ставить на 'Live Sales' для продажи обновлений через the PayPal system, проверить установленный вами 'Test Sales' через the PayPal Developers Network Sandbox.");
DEFINE("_EZREALTY_CONFIG_LS","Срок продажи");
DEFINE("_EZREALTY_CONFIG_TS","Проверить продажи");

DEFINE("_EZREALTY_CONFIG_SUCCESS","Страница успеха или старница, имеющай успеха");
DEFINE("_EZREALTY_CONFIG_SUCCESSDESC","Введите текст для успешного платежа PayPa сделки на старанице.");
DEFINE("_EZREALTY_CONFIG_CANCEL","аннулировать/стереть страницу");
DEFINE("_EZREALTY_CONFIG_CANCELDESC","Введите текст для вашейPayPal сделки на стёртой странице.");

DEFINE("_EZREALTY_CONFIG_YES","Да");
DEFINE("_EZREALTY_CONFIG_NO","Нет");

DEFINE("_EZREALTY_CONFIG_CONFIGSAVED","Настройки сохранены");

// Miscellaneous administration area language tags - error notices and dropdown list boxes

DEFINE("_EZREALTY_ADMIN_BACK","Вернуться к консоли управления");
DEFINE("_EZREALTY_ADMIN_SOURCEERROR","ОШИБКА: Источник (ключ или происхождение файла) не найдено!");

// admin.ezrealty.html.php language tags

// Manage property listings page

DEFINE("_EZREALTY_LISTINGS_TITLE","Руководить каталогом недвижимости");
DEFINE("_EZREALTY_LISTINGS_DISPLAYNUM","Показать #");
DEFINE("_EZREALTY_LISTINGS_SEARCHPROP","Искать");
DEFINE("_EZREALTY_LISTINGS_FILTER","Отфильтровать:-");
DEFINE("_EZREALTY_LISTINGS_SORTLOCALL","-Все размещения-");
DEFINE("_EZREALTY_LISTINGS_SORTTYPEALL","-Все типы/виды недвижимости-");
DEFINE("_EZREALTY_LISTINGS_SORTPRICEALL","-Весь диапазон цен-");
DEFINE("_EZREALTY_LISTINGS_PROPID","Агент ID#");
DEFINE("_EZREALTY_LISTINGS_PROPNAME","Адрес");
DEFINE("_EZREALTY_LISTINGS_PROPCAT","Тип недвижимости");
DEFINE("_EZREALTY_LISTINGS_PROPPRICE","Составить список цен");
DEFINE("_EZREALTY_LISTINGS_PROPHITS","Хиты");
DEFINE("_EZREALTY_LISTINGS_PUBSTATUS","Опубликовано");
DEFINE("_EZREALTY_LISTINGS_MARKETSTATUS","Продано?");
DEFINE("_EZREALTY_LISTINGS_APPROVEDSTATUS","Утверждено");
DEFINE("_EZREALTY_LISTINGS_LTYPE","Тип");
DEFINE("_EZREALTY_LISTINGS_AGENT","Агентt");
DEFINE("_EZREALTY_LISTINGS_LISTINGDATE","Дата составления");
DEFINE("_EZREALTY_LISTINGS_UPDATE","Последнее обновление");
DEFINE("_EZREALTY_LISTINGS_EDIT","Редактировать недвижимость");
DEFINE("_EZREALTY_LISTINGS_APPROVED","Утверждено");
DEFINE("_EZREALTY_LISTINGS_SELLER","Продавец");

// Add/edit property details page

DEFINE("_EZREALTY_LISTINGS_SELLER_EXPL","<strong><font color='#FF0000'>Read me!</font></strong><br /><br />Подробностии покупки используются на сайте для того, что позволит будущим покупателям непосредственно связаться с продавцом для получения большей информации или организовать просмотр недвижимости. Если вы позволите сотрудникам составить список недвижимости для продажи на вашем сайте, они будут нуждаться в более полной информации.Если вы хотите, чтобы будущие покупатели связались с вами быстрее чем с обладателем недвижимости-оставьте этот раздел в информационном бланке .Будет нормальное соединение по электронной почте с вами, затем вы покажете, если это будет сделано так .");

DEFINE("_EZREALTY_DETAILS_REQ","*Требование");
DEFINE("_EZREALTY_DETAILS_OPT","*Необязательный");
DEFINE("_EZREALTY_DETAILS_TITLE","Каталог недвижимости");
DEFINE("_EZREALTY_DETAILS_MARKET","Статус рынка");
DEFINE("_EZREALTY_DETAILS_SOLDDESC"," - Эта настройка позволит вам показать статус каталога недвижимости на рынке-при отсутсвии ценности это не продастся '.");
DEFINE("_EZREALTY_DETAILS_SELMARKET","Выберите статус рынка");
DEFINE("_EZREALTY_DETAILS_SELLOC","Выберите размещение");
DEFINE("_EZREALTY_DETAILS_SELSTATE","Выберите область");
DEFINE("_EZREALTY_DETAILS_SELCOUNTRY","Выберите страну");
DEFINE("_EZREALTY_DETAILS_SELCAT","Выберите категорию недвижимости");
DEFINE("_EZREALTY_DETAILS_SELPRICE","Выберите диапазон цен");
DEFINE("_EZREALTY_DETAILS_SELROOM","У этой недвижимости нет спален");
DEFINE("_EZREALTY_DETAILS_LISTDATE","Дата каталога");
DEFINE("_EZREALTY_DETAILS_LISTDATEDESC","Дата недвижимости составлена для продажи.");
DEFINE("_EZREALTY_DETAILS_AGENTID","Уникальный номер агента ID ");
DEFINE("_EZREALTY_DETAILS_AGENTIDDESC","Используйте это, если у вас есть уникальный номер и вы используйте для вылеживания недвижимости в вашем офисе.");
DEFINE("_EZREALTY_DETAILS_PROPADDRESS1","Адрес улицы 1");
DEFINE("_EZREALTY_DETAILS_PROPCITY","Большой город/маленький город/пригород");
DEFINE("_EZREALTY_DETAILS_AREA","Государство/Регион");
DEFINE("_EZREALTY_DETAILS_COUNTRY","Страна");
DEFINE("_EZREALTY_DETAILS_PROPPOSTCODE","Zip/почтовый шифр");
DEFINE("_EZREALTY_DETAILS_PROPTYPE","тип недвижимости");
DEFINE("_EZREALTY_DETAILS_ADLINE","Короткая фраза для продаж");
DEFINE("_EZREALTY_DETAILS_PROPDESC","Полное описание недвижимости");
DEFINE("_EZREALTY_DETAILS_SHORTDESC","Краткое описание:<br />(максимум 255 символов)");
DEFINE("_EZREALTY_DETAILS_PROPPRICE","Цена недвижимости");
DEFINE("_EZREALTY_DETAILS_LANDTYPE","Тип и размер земельной собственности, арендованного участка или недвижимости");
DEFINE("_EZREALTY_DETAILS_LANDTYPEDESC","egСвободное владение,арендованное владение, 100 акров и так далее.");
DEFINE("_EZREALTY_DETAILS_BEDROOMS","Спальни");
DEFINE("_EZREALTY_DETAILS_BEDROOMSDESC","Количество спален в недвижимости");
DEFINE("_EZREALTY_DETAILS_BATHROOMS","Ванные комнаты");
DEFINE("_EZREALTY_DETAILS_BATHROOMSDESC","Количество ванн в недвижимости");
DEFINE("_EZREALTY_DETAILS_PARKING","Стоянка");
DEFINE("_EZREALTY_DETAILS_PARKINGDESC","Количество доступных стоянок для машин");
DEFINE("_EZREALTY_DETAILS_MAPREF","План рекомендаций соединения недвижимости (или План рекомендаций, по которому можно соединить недвижимость");
DEFINE("_EZREALTY_DETAILS_MAPREFDESC","The URL к этому плану недвижимости снабжает ссылками, если использовать бесплатный сервис составления, который можно найти найти на multimap.com");
DEFINE("_EZREALTY_DETAILS_VTOUR","Виртуальное обращение, соединяющее страницу");
DEFINE("_EZREALTY_DETAILS_VTOURDESC","The URL к этой недвижимости на странице виртуального обращения/оборота, если использовать<br />Это соединение будет открыто в новом окне");
DEFINE("_EZREALTY_DETAILS_SAVED","детали недвижимости ");

DEFINE("_EZREALTY_VLDET_IMAGE1","Образец 1");
DEFINE("_EZREALTY_VLDET_IMAGE2","Образец 2");
DEFINE("_EZREALTY_VLDET_IMAGE3","Образец 3");
DEFINE("_EZREALTY_VLDET_IMAGE4","Образец 4");
DEFINE("_EZREALTY_VLDET_IMAGE5","Образец 5");
DEFINE("_EZREALTY_VLDET_IMAGE6","Образец 6");
DEFINE("_EZREALTY_VLDET_IMAGE7","Образец 7");
DEFINE("_EZREALTY_VLDET_IMAGE8","Образец 8");
DEFINE("_EZREALTY_VLDET_IMAGE9","Образец 9");
DEFINE("_EZREALTY_VLDET_IMAGE10","Образец 10");
DEFINE("_EZREALTY_VLDET_IMAGE11","Образец 11");
DEFINE("_EZREALTY_VLDET_IMAGE12","Образец 12");

DEFINE("_EZREALTY_VLDET_CURRENTIMG","Текущий рисунок");
DEFINE("_EZREALTY_VLDET_CHOOSENEW","Выбрать новый рисунок");
DEFINE("_EZREALTY_VLDET_UPLOADNEW","Загрузить новый рисунок");
DEFINE("_EZREALTY_VLDET_DELETEIMG","Удалить рисунок");
DEFINE("_EZREALTY_VLDET_DELETE","Удалить");
DEFINE("_EZREALTY_VLDET_OPENFULLSIZE","Окрыть полный размер рисунка");
DEFINE("_EZREALTY_VLDET_TNPREV","Просмотр Thumbnail");

DEFINE("_EZREALTY_DETAILS_CTOWN","Закрытый город");
DEFINE("_EZREALTY_DETAILS_CTPORT","Закрытый транспорт");
DEFINE("_EZREALTY_DETAILS_ADDFEATURES","Дополнительные признаки недвижимости");
DEFINE("_EZREALTY_DETAILS_AGE","Возраст недвижимости");
DEFINE("_EZREALTY_DETAILS_OHOUSE","Это день открытых дверей?");
DEFINE("_EZREALTY_DETAILS_OHOUSEDET","Подробности Open House:<br />Если у данной недвижимости есть дни открытых дверей. включите такие детали как даты и количество");

DEFINE("_EZREALTY_DETAILS_APPR","Утвердить каталог недвижимости");
DEFINE("_EZREALTY_DETAILS_PUBL","Опубликовать каталог недвижимости");
DEFINE("_EZREALTY_DETAILS_LISTSTATUS","Тип каталога");
DEFINE("_EZREALTY_DETAILS_FREESTATUS","Бесплатный каталог");
DEFINE("_EZREALTY_DETAILS_LISTPREMIUM","создать характерные признаки");

DEFINE("_EZREALTY_DETAILS_ERROR1","У недвижимости должен быть адрес");
DEFINE("_EZREALTY_DETAILS_ERROR2","У недвижимости должен быть определённый большой город, маленький город или пригород");
DEFINE("_EZREALTY_DETAILS_ERROR3","Вы обязаны выбрать Listing etc регион");
DEFINE("_EZREALTY_DETAILS_ERROR4","Вы обязаны выбрать страну");
DEFINE("_EZREALTY_DETAILS_ERROR5","У недвижимости должен быть определённый почтовый код");
DEFINE("_EZREALTY_DETAILS_ERROR6","Вы обязаны выбрать тип недвижимости");
DEFINE("_EZREALTY_DETAILS_ERROR7","У недвижимости должно быть определённое количество спален");
DEFINE("_EZREALTY_DETAILS_ERROR8","Вы обязаны ввести цену недвижимости");
DEFINE("_EZREALTY_DETAILS_ERROR9","Вы должны исследовательским параметром выбрать предел цены");
DEFINE("_EZREALTY_DETAILS_ERROR10","Вы обязаны ввести краткую фразу для продаж, так как отсутствие шаблона использует эту ценность/важность");
DEFINE("_EZREALTY_DETAILS_ERROR11","Вы обязаны ввести краткое описание, так как отсутствие шаблона использует эту ценность");
DEFINE("_EZREALTY_DETAILS_ERROR12","Вы обазаны по крайней мере иметь одно изображение для вашего каталога недвижимости");

DEFINE("_EZREALTY_DETAILS_TAB1A","адрес");
DEFINE("_EZREALTY_DETAILS_TAB1B","Адрес недвижимости");
DEFINE("_EZREALTY_DETAILS_TAB2A","Характерные признаки/черты");
DEFINE("_EZREALTY_DETAILS_TAB2B","Характерные признаки недвижимости");
DEFINE("_EZREALTY_DETAILS_TAB3A","Торговля");
DEFINE("_EZREALTY_DETAILS_TAB3B","Информация торговли");
DEFINE("_EZREALTY_DETAILS_TAB4A","Образцы");
DEFINE("_EZREALTY_DETAILS_TAB4B","образцы недвижимости");
DEFINE("_EZREALTY_DETAILS_TAB5A","Продавец");
DEFINE("_EZREALTY_DETAILS_TAB5B","Подробности о продавце");
DEFINE("_EZREALTY_DETAILS_TAB6A","Управлять");
DEFINE("_EZREALTY_DETAILS_TAB6B","Управлять процессом");

DEFINE("_EZREALTY_DETAILS_MARKET2","Предлагать при");
DEFINE("_EZREALTY_DETAILS_MARKET3","Тема обращения");
DEFINE("_EZREALTY_DETAILS_MARKET4","Обращение приt");
DEFINE("_EZREALTY_DETAILS_MARKET5","Продано");

DEFINE("_EZREALTY_DETAILS_SOURCE1","Поисковый движок");
DEFINE("_EZREALTY_DETAILS_SOURCE2","Сайт");
DEFINE("_EZREALTY_DETAILS_SOURCE3","Входить");
DEFINE("_EZREALTY_DETAILS_SOURCE4","Сеть недвижимости");
DEFINE("_EZREALTY_DETAILS_SOURCE5","Другие, пожалуйста, уточняйте ниже");

// Manage property price range page

DEFINE("_EZREALTY_PRICES_DISPLAYNUM","Показать #");
DEFINE("_EZREALTY_PRICES_SEARCHCOM","Искать");
DEFINE("_EZREALTY_PRICES_PUBSTATUS","Опубликованно");
DEFINE("_EZREALTY_PRICES_REORDER","Перенаправить");
DEFINE("_EZREALTY_MODPRICES_ADD","Добавить");
DEFINE("_EZREALTY_MODPRICES_EDIT","Редактировать");
DEFINE("_EZREALTY_MODPRICES_ORDER","Назначение/направление");

// Manage property city/town/suburbs

DEFINE("_EZREALTY_LOCALITIES_TITLE","Руководить выбором списка: большой или маленький город, пригород");
DEFINE("_EZREALTY_LOCALITIES_DISPLAYNUM","Показать");
DEFINE("_EZREALTY_LOCALITIES_LOC","Название большого или маленького города,пригорода");
DEFINE("_EZREALTY_LOCALITIES_PUBSTATUS","Опубликованное");
DEFINE("_EZREALTY_LOCALITIES_REORDER","Перенаправить");
DEFINE("_EZREALTY_MODLOC_TITLE","Выбор/поиск iem большого или маленького города. или пригорода");
DEFINE("_EZREALTY_MODLOC_ADD","Добавить");
DEFINE("_EZREALTY_MODLOC_EDIT","Редактировать");
DEFINE("_EZREALTY_MODLOC_LOC","Название местонахождения,город или пригород");
DEFINE("_EZREALTY_MODLOC_ORDER","Направление/назначение");
DEFINE("_EZREALTY_MODLOC_SAVED","Сохраненные подробности местонахождения");
DEFINE("_EZREALTY_MODLOC_ERROR1","Вы обязаны ввести название пригорода, большого города или маленького");
DEFINE("_EZREALTY_LOCALITIES_EDITTAG","Редактировать размещение недвижимости");

// Manage property states/regional areas

DEFINE("_EZREALTY_STATE_TITLE","Управление поиском/выбором списка государства/региона");
DEFINE("_EZREALTY_STATE_DISPLAYNUM","Показать #");
DEFINE("_EZREALTY_STATE_LOC","Название государства/региона");
DEFINE("_EZREALTY_STATE_PUBSTATUS","Опубликовано");
DEFINE("_EZREALTY_STATE_REORDER","Перенаправить");
DEFINE("_EZREALTY_STATE_TITLE2","Выбрать любой номер/символ государства/региона");
DEFINE("_EZREALTY_STATE_ADD","Добавить");
DEFINE("_EZREALTY_STATE_EDIT","Редактировать");
DEFINE("_EZREALTY_STATE_ORDER","Заказать");
DEFINE("_EZREALTY_STATE_SAVED","Подробности государства сохранены");
DEFINE("_EZREALTY_STATE_ERROR1","Вы обязаны ввести название государства");
DEFINE("_EZREALTY_STATE_EDITTAG","Редактировать государство");

// Manage property country areas

DEFINE("_EZREALTY_COUNTRY_TITLE","Управление выбором списка страны");
DEFINE("_EZREALTY_COUNTRY_DISPLAYNUM","Показать #");
DEFINE("_EZREALTY_COUNTRY_LOC","Название страны");
DEFINE("_EZREALTY_COUNTRY_PUBSTATUS","Опубликовано");
DEFINE("_EZREALTY_COUNTRY_REORDER","Перенаправить");
DEFINE("_EZREALTY_COUNTRY_TITLE2","выбрать любую страну");
DEFINE("_EZREALTY_COUNTRY_ADD","добавить");
DEFINE("_EZREALTY_COUNTRY_EDIT","Редактировать");
DEFINE("_EZREALTY_COUNTRY_ORDER","Заказ");
DEFINE("_EZREALTY_COUNTRY_SAVED","Подробности страны сохранены");
DEFINE("_EZREALTY_COUNTRY_ERROR1","Вы обязаны ввести название страны");
DEFINE("_EZREALTY_COUNTRY_EDITTAG","Отредактировать страну");

// Manage bedroom numbers

DEFINE("_EZREALTY_ROOMS_TITLE","Управление выбором списка количества спален");
DEFINE("_EZREALTY_ROOMS_DISPLAYNUM","Показать #");
DEFINE("_EZREALTY_ROOMS_LOC","Количество спален");
DEFINE("_EZREALTY_ROOMS_PUBSTATUS","Опубликовано");
DEFINE("_EZREALTY_ROOMS_REORDER","Перенаправить");
DEFINE("_EZREALTY_ROOMS_TITLE2","выбрать любой номер/символ количества спален");
DEFINE("_EZREALTY_ROOMS_ADD","Добавить");
DEFINE("_EZREALTY_ROOMS_EDIT","Редактировать");
DEFINE("_EZREALTY_ROOMS_ORDER","Направление");
DEFINE("_EZREALTY_ROOMS_SAVED","Количество спален сохранено");
DEFINE("_EZREALTY_ROOMS_ERROR1","Вы обязаны ввести количество спален");
DEFINE("_EZREALTY_ROOMS_EDITTAG","Отредактировать количество спален");

// Manage leads list

DEFINE("_EZREALTY_LEADS_TITLE","Склонять к списку");
DEFINE("_EZREALTY_LEADS_DISPLAYNUM","Добавить #");
DEFINE("_EZREALTY_LEADS_AR","Добавить/пересмотреть дату ");
DEFINE("_EZREALTY_LEADS_LCONTACT","Контактная информация");
DEFINE("_EZREALTY_LEADS_LNAME","Название");
DEFINE("_EZREALTY_LEADS_LEMAIL","E-mail");
DEFINE("_EZREALTY_LEADS_LLOC","Желаемое размещение");
DEFINE("_EZREALTY_LEADS_EDITTAG","Отредактировать/рассмотреть подробности");
DEFINE("_EZREALTY_LEADS_ADD","Добавить");
DEFINE("_EZREALTY_LEADS_EDIT","Отредактировать");
DEFINE("_EZREALTY_LEADS_TITLE2","Подробности необходимых продаж");
DEFINE("_EZREALTY_LEADS_FMATCH","Найти подходящую недвижимость");

DEFINE("_EZREALTY_LEADS_HPHONE","Домашний номер телефона");
DEFINE("_EZREALTY_LEADS_WPHONE","Рабочий номер телефона");
DEFINE("_EZREALTY_LEADS_MOBILE","Мобильный номер телефона");
DEFINE("_EZREALTY_LEADS_FAX","Fax");
DEFINE("_EZREALTY_LEADS_SOURCE","Где вы нашли нас?");
DEFINE("_EZREALTY_LEADS_COMMENTS","Комментарии");
DEFINE("_EZREALTY_LEADS_DETAILS","детали недвижимости");
DEFINE("_EZREALTY_LEADS_BUDGET","приобретать финансовую смету");

DEFINE("_EZREALTY_LEADS_SAVED","Сохраненные подробности, склонные к продажам");

DEFINE("_EZREALTY_LEADS_ERROR1","Вы должны ввести ваше имя");

DEFINE("_EZREALTY_LEADS_ERROR2","Вы должны ввести ваш email");
DEFINE("_EZREALTY_LEADS_ERROR3","Вы должны ввести тип недвижимости");
DEFINE("_EZREALTY_LEADS_ERROR4","вы должны ввести диапазон цен");
DEFINE("_EZREALTY_LEADS_ERROR5","Вы должны ввести большой город/маленький город/пригорд");
DEFINE("_EZREALTY_LEADS_ERROR6","Вы должны ввести количество спален");

// Manage property-type categories

DEFINE("_EZREALTY_CATEGORY_PAGETITLE","Управление категорией недвижимости");
DEFINE("_EZREALTY_CATEGORY_DISPLAYNUM","Показать #");
DEFINE("_EZREALTY_CATEGORY_SEARCHCAT","Поиск");
DEFINE("_EZREALTY_CATEGORY_CATNAME","Категория");
DEFINE("_EZREALTY_CATEGORY_PUBSTATUS","Опубликовано");
DEFINE("_EZREALTY_CATEGORY_ACCLEVEL","Доступ");
DEFINE("_EZREALTY_CATEGORY_REORDER","Перенаправить");
DEFINE("_EZREALTY_CATEGORY_MAIN","категория недвижимости");
DEFINE("_EZREALTY_CATEGORY_ADD","Добавить");
DEFINE("_EZREALTY_CATEGORY_EDIT","Отредактировать");
DEFINE("_EZREALTY_CATEGORY_DEFTITLE","Название");
DEFINE("_EZREALTY_CATEGORY_DEFCONTENT","Описание");
DEFINE("_EZREALTY_CATEGORY_DEFACCESS","Доступ");
DEFINE("_EZREALTY_CATEGORY_DEFORDER","Направление");
DEFINE("_EZREALTY_CATEGORY_IMAGE","Категория образца");
DEFINE("_EZREALTY_CATEGORY_IMAGESEL","Категория образца отборщика");
DEFINE("_EZREALTY_CATEGORY_SAVED","Сохраненные подробности категории недвижимости");
DEFINE("_EZREALTY_CATEGORY_ERROR1","У категории должно быть имя.");
DEFINE("_EZREALTY_CATEGORY_EDITTAG","Отредактировать категорию недвижимости");

// Manage property-type categories

DEFINE("_EZREALTY_MARKET_PAGETITLE","Управление привлечением рынка сбыта");
DEFINE("_EZREALTY_MARKET_DISPLAYNUM","Показать #");
DEFINE("_EZREALTY_MARKET_STATUS","Рынок сбыта");
DEFINE("_EZREALTY_MARKET_PUBSTATUS","Опубликовано");
DEFINE("_EZREALTY_MARKET_REORDER","Перенаправить");
DEFINE("_EZREALTY_MARKET_MAIN","Привлечь рынок сбыта");
DEFINE("_EZREALTY_MARKET_ADD","Добавить");
DEFINE("_EZREALTY_MARKET_EDIT","Редактировать");
DEFINE("_EZREALTY_MARKET_DEFNAME","Имя");
DEFINE("_EZREALTY_MARKET_DEFORDER","Направление");
DEFINE("_EZREALTY_MARKET_SAVED","Подробности привлечения рынка сбыта сохранены");
DEFINE("_EZREALTY_MARKET_ERROR1","У привления рынка сбыта должно быть имя");

// General error messages

DEFINE("_EZREALTY_GENERAL_ERROR1","Выбрать для");
DEFINE("_EZREALTY_CONFIG_ERROR","Файл конфигурации не записан. Пожалуйста исправьте права доступа к файлам и попытайтесь снова.");

// Miscellaneous language tags for hyperlinks and image tags

DEFINE("_EZREALTY_GENERAL_PUBLISHED","Опубликовано");
DEFINE("_EZREALTY_GENERAL_UNPUBLISHED","Не опубликовано");
DEFINE("_EZREALTY_GENERAL_APPROVED","Утверждено");
DEFINE("_EZREALTY_GENERAL_UNAPPROVED","Не утверждено");
DEFINE("_EZREALTY_GENERAL_CHECKOUT","Проконтролировано(проверено)");
DEFINE("_EZREALTY_GENERAL_RETURN","Вернуться к менеджеру недвижимости");
DEFINE("_EZREALTY_GENERAL_UP","Пододвинуть");
DEFINE("_EZREALTY_GENERAL_DOWN","Опустить");
DEFINE("_EZREALTY_GENERAL_EDITPROP","Редактировать свойства");
DEFINE("_EZREALTY_GENERAL_SOLD","Продано");
DEFINE("_EZREALTY_GENERAL_CONTRACT","под контрактом");

DEFINE("_EZREALTY_GENERIC_ADD","Добавить");
DEFINE("_EZREALTY_GENERIC_EDIT","Редактировать");

//////////////////// FRONT END FILE LANGUAGE TAGS ///////////////////////

// includes.ezrealty.php file

DEFINE("_EZREALTY_HOME","Дом");

// ezrealty.php file

DEFINE("_EZREALTY_BACK","Возвратиться");
DEFINE("_EZREALTY_INCLUDES_HOME","Домой");
DEFINE("_EZREALTY_INCLUDES_SEARCH","Искать");
DEFINE("_EZREALTY_INCLUDES_NEW","Новое");
DEFINE("_EZREALTY_CATEGORIES","Типы недвижимости");
DEFINE("_EZREALTY_PROPERTIES","Недвижимость");
DEFINE("_EZREALTY_PROPERTY","Недвижимость");
DEFINE("_EZREALTY_INCLUDES_RSSOH"," Каталоги Open House");
DEFINE("_EZREALTY_INCLUDES_POSTMAIL","Спасибо, сейчас вы можете закрыть это окно.");

// category display

DEFINE("_EZREALTY_PAGES","Страницы");
DEFINE("_EZREALTY_PREV","Предыдущий");
DEFINE("_EZREALTY_NEXT","Следующий");
DEFINE("_EZREALTY_READMORE","Прочитать больше");
DEFINE("_EZREALTY_VIEWPROP","просмотреть свойства");

// send to friend and arrange viewing forms

DEFINE("_EZREALTY_INVITE_VIEW_PROP","Вы посетили рассмотрение каталогов недвижимости для продажи.Пожалуйста, используйте ссылку ниже для просмотра.");
DEFINE("_EZREALTY_RECCOMEND_PROP_FROM_FREND","Рекомендованная недвижимость от вашего друга");
DEFINE("_EZREALTY_FROM","Откуда");
DEFINE("_EZREALTY_REPLYTO","Ответить на");
DEFINE("_EZREALTY_MAIL_SENT","Спасибо! Рекомендованная вами недвижимость отправлена...");
DEFINE("_EZREALTY_MAIL_VIEWINGSENT","Спасибо! Ваша просьба об осмотре недвижимости отправлена...");
DEFINE("_EZREALTY_INSPECTION"," Осмотр запрошенной недвижимости");
DEFINE("_EZREALTY_TELEPHONE","Контактный телефон:-");
DEFINE("_EZREALTY_DATETIME","Подходящая дата и время:-");
DEFINE("_EZREALTY_REQUEST_MAILINGLIST","Хотите ли вы быть добавленными в ваш список отправкии. Пожалуйста используйе ссылку ниже для просмотра... и тд и тп уточнить по месту.(!!!)");
DEFINE("_EZREALTY_PROPERTY_INTERESTS","Этот посетитель интересуется следующими типами недвижимости");
DEFINE("_EZREALTY_MAILING_TITLE"," Добавить в список отправленных запросов");
DEFINE("_EZREALTY_MAILINGLIST_SENT","Спасибо! Ваш запрос, добавленный к нашему списку отравленных, уже отослан...");
DEFINE("_EZREALTY_AGENTIDREF","Агентt ID ссылается на номер недвижимости:-");

// viewdetails.ezrealty.php file

DEFINE("_EZREALTY_VIEWDET_NAME_EMAIL","Пожалуйста, заполните все поля по форме!");
DEFINE("_EZREALTY_VIEWDET_NOVIEW","Извините, но этот признак не доступен сейчас.");
DEFINE("_EZREALTY_PROPGONE","Недвижимость, которую вы ищите не долго существует, или не опубликовала каталог!");
DEFINE("_EZREALTY_VIEWDET_PROPDET","Подробности недвижимости");
DEFINE("_EZREALTY_VIEWDET_MAP","Посмотреть карту");
DEFINE("_EZREALTY_VIEWDET_TOUR","Тур");
DEFINE("_EZREALTY_VIEWDET_VTOUR","Возьмите виртуальный тур");
DEFINE("_EZREALTY_VIEWDET_PRINT","Печатать эту страницу");
DEFINE("_EZREALTY_VIEWDET_FAVS","Добавить лучшего");
DEFINE("_EZREALTY_VIEWDET_VIEWING","Организовать обзор");
DEFINE("_EZREALTY_VIEWDET_VNAME","Ваше имя");
DEFINE("_EZREALTY_VIEWDET_VMAIL","Ваш E-mail");
DEFINE("_EZREALTY_VIEWDET_VPHONE","Ваш телефон");
DEFINE("_EZREALTY_VIEWDET_VTIME","Подходящая дата и время");
DEFINE("_EZREALTY_VIEWDET_SEND","Послать");
DEFINE("_EZREALTY_VIEWDET_SEND_FRIEND","Послать другу");
DEFINE("_EZREALTY_VIEWDET_YOUR_NAME","Ваше имя");
DEFINE("_EZREALTY_VIEWDET_YOUR_MAIL","Ваш Email");
DEFINE("_EZREALTY_VIEWDET_FRIENDS_NAME","Имя вашего друга");
DEFINE("_EZREALTY_VIEWDET_FRIENDS_MAIL"," Email вашего друга");
DEFINE("_EZREALTY_VIEWDET_APPROX","approx.");
DEFINE("_EZREALTY_VIEWDET_LINKS","Свои ссылки");
DEFINE("_EZREALTY_VIEWDET_FPLANS","Планы этажей");
DEFINE("_EZREALTY_VIEWDET_MAILING","Добавить в наш список расылки");
DEFINE("_EZREALTY_VIEWDET_MAILING_SPEIL","Каталоги недвижимости всегда обновляютс). Старайтесь быть информированным!");
DEFINE("_EZREALTY_VIEWDET_INTERESTS","Я интересуюсь в следующих типах недвижимости");
DEFINE("_EZREALTY_VIEWDET_LOCALITY","Местность");
DEFINE("_EZREALTY_VIEWDET_LAND","Тип земли");
DEFINE("_EZREALTY_VIEWDET_BEDROOM","Спальня");
DEFINE("_EZREALTY_VIEWDET_BEDROOMS","Спальни");
DEFINE("_EZREALTY_VIEWDET_BATHROOM","Ванна");
DEFINE("_EZREALTY_VIEWDET_BATHROOMS","Ванны");
DEFINE("_EZREALTY_VIEWDET_PARKING","Стоянка для ");
DEFINE("_EZREALTY_VIEWDET_PARKING2","Стоянка");
DEFINE("_EZREALTY_VIEWDET_GALLERY","Галерея фото");
DEFINE("_EZREALTY_VIEWDET_SOLD","Продано");
DEFINE("_EZREALTY_VIEWDET_CONTRACT","Под контрактом");
DEFINE("_EZREALTY_VIEWDET_REGISTER","Регистрация");

DEFINE("_EZREALTY_VIEWDET_PRICE","Цена");
DEFINE("_EZREALTY_VIEWDET_EXTRA","Характерные признаки с первого взгляда");
DEFINE("_EZREALTY_VIEWDET_YES","Да");
DEFINE("_EZREALTY_VIEWDET_NO","Нет");
DEFINE("_EZREALTY_VIEWDET_LOCATION","Размещение");
DEFINE("_EZREALTY_VIEWDET_TOWN","Город закрытого типа");
DEFINE("_EZREALTY_VIEWDET_TPORT","Транспорт");
DEFINE("_EZREALTY_VIEWDET_AGE","Возраст");

DEFINE("_EZREALTY_VIEWDET_PSELLERS","Продавцы");
DEFINE("_EZREALTY_VIEWDET_SELLER","Продавец");
DEFINE("_EZREALTY_VIEWDET_SELLER_PHONE","Контакт #");
DEFINE("_EZREALTY_VIEWDET_SELLER_ARRANGE","Рассмотреть недвижимость");
DEFINE("_EZREALTY_VIEWDET_SELLER_VIEWING","Упорядочить осмотр с продавцом");

DEFINE("_EZREALTY_PIX_HOVER","Для изменения фото, двигать мышкой по предпросмотру ниже");

// search.ezrealty.php file

DEFINE("_EZREALTY_SEARCHPRICE","Диапазон цен");
DEFINE("_EZREALTY_SEARCHPROPTYPE","Тип недвижимости");
DEFINE("_EZREALTY_SEARCHLOC","Размещение");
DEFINE("_EZREALTY_SEARCHSUB","Пригород");
DEFINE("_EZREALTY_SEARCHREG","Регион");
DEFINE("_EZREALTY_SEARCHCON","Страна");
DEFINE("_EZREALTY_SEARCHBRM","Спальни");
DEFINE("_EZREALTY_SEARCHORD","Заказать");
DEFINE("_EZREALTY_SEARCHADV","Расширенный поисковый фильтр");
DEFINE("_EZREALTY_SEARCH_SEARCH","Искать");

DEFINE("_EZREALTY_SEARCH_ALCAT","Выбрать все категории");
DEFINE("_EZREALTY_SEARCH_ALLOC","Выбрать все размещения");
DEFINE("_EZREALTY_SEARCH_ALSTA","Выбрать все регионы");
DEFINE("_EZREALTY_SEARCH_ALCOU","Выбрать все страны");
DEFINE("_EZREALTY_SEARCH_MINPRI","Выбрать минимальную цену");
DEFINE("_EZREALTY_SEARCH_MAXPRI","Выбрать максимальную цену");
DEFINE("_EZREALTY_SEARCH_MINBED","Выбрать минимум спален");
DEFINE("_EZREALTY_SEARCH_MAXBED","Выбрать максимум спален");
DEFINE("_EZREALTY_SEARCH_ONLYAV","Только доступные недвижимости");
DEFINE("_EZREALTY_SEARCH_PRIASC","Возрастание цены");
DEFINE("_EZREALTY_SEARCH_PRIDESC","Убывание цены");
DEFINE("_EZREALTY_SEARCH_ASC","Возрастание даты");
DEFINE("_EZREALTY_SEARCH_DESC","Убывание даты");

// results.ezrealty.php file

DEFINE("_EZREALTY_RESULTSL_SELECT","!Пожалуйста, выберите ваши параметры поиска");
DEFINE("_EZREALTY_RESULTS_RESULTS","Результаты:-");
DEFINE("_EZREALTY_RESULTS_NORESULTS","Извините, но результатов нет...");
DEFINE("_EZREALTY_RESULTS_NEW","Последние");
DEFINE("_EZREALTY_RESULTS_NEWLISTINGS","Новые каталоги недвижимости");

// printdetails.ezrealty.php file

DEFINE("_EZREALTY_PRINT_ID","Недвижимость ID");
DEFINE("_EZREALTY_PRINT_TELEPHONE","Телефон:");
DEFINE("_EZREALTY_PRINT_PRINT","Печатать экран");
DEFINE("_EZREALTY_PRINT_CLOSE","Закрыть окошко");

// submit lead stuff

DEFINE("_EZREALTY_SUBLEAD_TITLE","Представьте потребности недвижимости");
DEFINE("_EZREALTY_SUBLEAD_INTRO","Недвижимости всегда реализуются. Если вы не можете найти то, что вы ищете в данный момент, почему бы не зарегестрировать свои потребности недвижимости с нами. Затем мы уведомим вас, когда что-нибудь подходящее станет доступным.");
DEFINE("_EZREALTY_SUBLEAD_THANKS","Спасибо ваши требования о недвижимости, представлены на расмотрение.");
DEFINE("_EZREALTY_SUBLEAD_CONTACT","ВАШИ КОНТАКТЫ");
DEFINE("_EZREALTY_SUBLEAD_NOTON","Извините, но у нас нет текущего соглашения на недвижимость");

DEFINE("_EZREALTY_LM_ERROR1","Пожалуйста введите своё имя");
DEFINE("_EZREALTY_LM_ERROR2","пожалуйста введите свой e-mail");
DEFINE("_EZREALTY_LM_ERROR3","Пожалуйста выберите категорию");
DEFINE("_EZREALTY_LM_ERROR4","выберите диапазон цены");
DEFINE("_EZREALTY_LM_ERROR5","Пожалуйста, выберите большой или маленький город");
DEFINE("_EZREALTY_LM_ERROR6","Пожалуйста, выберите приблизительное количество спален");

DEFINE("_EZREALTY_EMAIL_ERROR1","Пожалуйста, укажите своё имя");
DEFINE("_EZREALTY_EMAIL_ERROR2","Пожалуйста, укажите свой email");
DEFINE("_EZREALTY_EMAIL_ERROR3","Пожалуйста, укажите ваш контактный телефон");
DEFINE("_EZREALTY_EMAIL_ERROR4","Пожалуйста, укажите ваши вопросы");
DEFINE("_EZREALTY_EMAIL_ERROR5","Пожалуйста, укажите имя вашего друга");
DEFINE("_EZREALTY_EMAIL_ERROR6","Пожалуйста укажите email вашего друга");
DEFINE("_EZREALTY_EMAIL_ERROR7","Пожалуйста, укажите немного информации о ваших интересах");
DEFINE("_EZREALTY_EMAIL_ERROR8","Извините, но этот характерный признак E-mail не доступен");
DEFINE("_EZREALTY_EMAIL_ERROR9","Пожалуйста, включите общее время для создания просмотра");

// front-end member stuff

DEFINE("_EZREALTY_LISTINGS_INTRO","У вас может быть следущее количество свободных списков для продажи");
DEFINE("_EZREALTY_NOLISTINGS","У вас нет текущих списков");
DEFINE("_EZREALTY_ADDNEW","Добавить новый список");
DEFINE("_EZREALTY_SUBMIT_LISTING","Предоставить список");
DEFINE("_EZREALTY_NO_LOGIN","Извините, но сперва вам необходимо авторизоваться");
DEFINE("_EZREALTY_MAX_NUM","Извините, но вы достигли максимального");
DEFINE("_EZREALTY_MAXNUM_LIST","Списки");
DEFINE("_EZREALTY_YOUVEGOTMAIL","Новый список недвижимости");
DEFINE("_EZREALTY_DONE","Фото и список недвижимости успешно загружен!");
DEFINE("_EZREALTY_UPDATEDONE","Вы успешно загрузили");
DEFINE("_EZREALTY_NO_EDIT","Извините. но мы не можем позволить редактировать этот список");
DEFINE("_EZREALTY_NODELETE","Вам не разрешается удалять этот список");
DEFINE("_EZREALTY_CHECKDELETE","Вы уверены, что вы хотите удалить этот список недвижимости?");
DEFINE("_EZREALTY_DELETE_LISTING","Удалить список");
DEFINE("_EZREALTY_LISTINGS_PREVIEW","Просмотр списка");
DEFINE("_EZREALTY_DELIMGOOPS","Не возможно удалить это фото");
DEFINE("_EZREALTY_LISTING_DELETED","Список недвижимости успешно удален");
DEFINE("_EZREALTY_LISTING_TERMS","Сроки списка");
DEFINE("_EZREALTY_PREVIEW_LISTING","Просмотр вашего списка недвижимости");

DEFINE("_EZREALTY_MEMBERS_ADDRESS","Адрес");
DEFINE("_EZREALTY_MEMBERS_HITS","Хиты");
DEFINE("_EZREALTY_MEMBERS_ACTION","Действие");
DEFINE("_EZREALTY_MEMBERS_STATUS","Опубликовано");
DEFINE("_EZREALTY_MEMBERS_UPGRADE","Улучшить");
DEFINE("_EZREALTY_MEMBERS_MAKEFEAT","Сделать характерные признаки");
DEFINE("_EZREALTY_MEMBERS_SELLERDET","Подробности для продавца");

DEFINE("_EZREALTY_LISTING1","Подробности контакта продавца");
DEFINE("_EZREALTY_LISTING2","Контактное имя");
DEFINE("_EZREALTY_LISTING3","Контактный телефон");
DEFINE("_EZREALTY_LISTING4","E-mail");
DEFINE("_EZREALTY_LISTING5","Адрес недвижимости для продажи");
DEFINE("_EZREALTY_LISTING6","Подробности недвижимости");
DEFINE("_EZREALTY_LISTING7","Характарные признаки с первого взгляда");
DEFINE("_EZREALTY_LISTING8","Подробности торговлей недвижимости");
DEFINE("_EZREALTY_LISTING9","Добавить подробности недвижимости");
DEFINE("_EZREALTY_LISTING10","Отредактировать подробности недвижимости");
DEFINE("_EZREALTY_LISTING11","Размещение продавца");
DEFINE("_EZREALTY_LISTING12","Фото");
DEFINE("_EZREALTY_LISTING_IMGDELETED","Фото удалено");
DEFINE("_EZREALTY_LISTING_RESTRICTED","**Эта информация не доступна для бесплатного каталога**");

DEFINE("_EZREALTY_SELLER_ERROR1","Вы обязаны включить контактное имя");
DEFINE("_EZREALTY_SELLER_ERROR2","Вы обязаны включить контактный номер телефона");
DEFINE("_EZREALTY_SELLER_ERROR3","Вы обязаны включить контактный");
DEFINE("_EZREALTY_SELLER_ERROR4","Вы обязаны включить ваше местонахождение");

DEFINE("_EZREALTY_SELLER_N","Имя");
DEFINE("_EZREALTY_SELLER_T","Телефон");
DEFINE("_EZREALTY_SELLER_E","E-mail");
DEFINE("_EZREALTY_SELLER_L","Размещение");
DEFINE("_EZREALTY_SELLER_C","Контакт");

DEFINE("_EZREALTY_NOCATLISTINGS","Извините, но нет каталога для этой категории");

DEFINE("_EZREALTY_IPN_SUBJECT","Список улучшений");
DEFINE("_EZREALTY_IPN_MSG1","Сайт сотрудников, который уже улучшен их каталогом");
DEFINE("_EZREALTY_IPN_MSG2","Подробности для покупателя:-");
DEFINE("_EZREALTY_IPN_MSG3","Недвижимость ID#");

DEFINE("_EZREALTY_POA","POA");
DEFINE("_EZREALTY_CONFIG_STATES","Используйте регионы");
DEFINE("_EZREALTY_CONFIG_STATESDESC","Если вы продаёте недвижимость в регионе, что не запрошен как большие страны,укажите 'нет', чтобы спрятать эту переменнную.");
DEFINE("_EZREALTY_CONFIG_SBIMP","Список впечатлений");
DEFINE("_EZREALTY_CONFIG_SBIMPDESC","Если позволенный сайт для составления каталогов недвижимости сотрудников, хотите ли вы взять за основу впечатления- это значит попадание в страницу полную подробностей.Будут каталоги, затем, представленные однажды они превзойдут границы количества впечатлений и вы будете очищать даты старых каталогов, нажатием the 'Чистые каталоги'.");
DEFINE("_EZREALTY_CONFIG_IMPNUM","Количество впечатлений");
DEFINE("_EZREALTY_CONFIG_IMPNUMDESC","Если каталог ограничивается впечатлениями- сколько должно быть указано.");

DEFINE("_EZREALTY_RESET_MSG","Успехи или попадания reset");
DEFINE("_EZREALTY_RESET_BTN","Reset");
DEFINE("_EZREALTY_CLEANDB","Чистые каталоги");
DEFINE("_EZREALTY_LISTINGS_PAID1","Стоимость каталогов");
DEFINE("_EZREALTY_LISTINGS_PAID2","Через улучшение");
DEFINE("_EZREALTY_LISTINGS_HITSINTRO","Каталоги не продолжаютя и возвращаются после даты основания");
DEFINE("_EZREALTY_LISTINGS_HITS2","Хиты");
DEFINE("_EZREALTY_BEDROOMS_EXPL","Используйте целые числа с 1, так как 0 уже определяет код выпадающего списка для использования в случаях когда спальни не пригодны.");
DEFINE("_EZREALTY_SELLERSPANEL","Панель продавца");
DEFINE("_EZREALTY_MAINPANEL","Основные списки");


// NEW TAGS THAT WERE ADDED FOR THE 3.2.2 VERSION

DEFINE("_EZREALTY_SUB_MSG","Сотрудник вашего сайта добавил или обновил список");
DEFINE("_EZREALTY_TOOLBAR_CLOSE","Закрыть");
DEFINE("_EZREALTY_NLAVAIL","Извините, но этот список временно не доступен");


// NEW TAGS THAT WERE ADDED AFTER THE 3.2.2 VERSION FOR CB INTEGRATION

DEFINE("_EZREALTY_CONFIG_CBINT","Сообщество строителей");
DEFINE("_EZREALTY_CONFIG_CBINTDESC","Если вы используете Сообщество строителей, хотите ли вы использовать информацию о расписании их контактов для продавца?");
DEFINE("_EZREALTY_PROFILER_CBMSG1","The EZ Realty и компонент каталога недвижимости не установлен. Пожалуйста, свяжитесь с вашим администратором.");
DEFINE("_EZREALTY_PROFILER_CBMSG2","Здесь нет каталогос для этого сотрудника.");
DEFINE("_EZREALTY_PROFILER_CBPROFILE","Рассмотреть профиль");




// NEW TAGS THAT WERE ADDED AFTER THE 3.3.0 VERSION


DEFINE("_EZREALTY_CLICK_OPEN","Щелкните чтобы открыть");




// NEW TAGS THAT WERE ADDED FOR THE 4.0.0 RELEASE

DEFINE("_EZREALTY_CONFIG_FREEPIC","Бесплатный каталог фото");
DEFINE("_EZREALTY_CONFIG_FREEPICDESC","Если у вас есть бесплатные или оплаченные каталоги для ваших сотрудников, хотите ли вы показать бесплатный образец каталога? Если выбираете нет это покажут списком оплаченных каталогов. Если выбираете да бесплатный каталог предаставляется только одним образцом. Это не повредит каталогу, если у вас есть только есть один бесплатный образец- члены могут иметь 12 образцов, руководствуясь этим методом.");
DEFINE("_EZREALTY_CONFIG_PAIDOPT1","Бесплатно с возможностью обновления");
DEFINE("_EZREALTY_CONFIG_PAIDOPT2","Только оплаченные каталоги");
DEFINE("_EZREALTY_CONFIG_PAIDONLY","Выборы оплаты");
DEFINE("_EZREALTY_CONFIG_PAIDONLYDESC","Если у вас предложенный оплаченны каталог, хотите ли вы бесплатный каталог с выбором улучшить или только оплаченные каталоги.");

DEFINE("_EZREALTY_CONFIG_LEVEL1","Оплаченный каталог уровень 1 имя");
DEFINE("_EZREALTY_CONFIG_LEVEL1DESC","что вы хотите указать в вашем каталоге улучшения, к примеру. Premium/Enhanced Listing etc.Это появиться как любой символ (номер) имени в коде и в докладе о сделке с PayPal .");
DEFINE("_EZREALTY_CONFIG_LEVEL1COST","Оплаченный каталог уровень 1 стоимост");
DEFINE("_EZREALTY_CONFIG_LEVEL1COSTDESC","TСтоимость улучшения бесплатного каталога недвижимости к оплаченному каталогу.");

DEFINE("_EZREALTY_CONFIG_LEVEL2","Оплаченный каталог уровень 2 имя");
DEFINE("_EZREALTY_CONFIG_LEVEL2DESC","- Что вы хотите указать в вашем каталоге улучшения, к примеру . Premium/Enhanced Listing etc. Это появиться как любой символ имени в коде и в докладе о сделке с PayPal .");
DEFINE("_EZREALTY_CONFIG_LEVEL2COST","Оплаченный каталог уровень 2 стоимость");
DEFINE("_EZREALTY_CONFIG_LEVEL2COSTDESC","Стоимость приобретения.");

DEFINE("_EZREALTY_DETAILS_TAB7A","МЕТА теги");
DEFINE("_EZREALTY_DETAILS_METADESC","Описание");
DEFINE("_EZREALTY_DETAILS_METAKEYS","Слова-ключи");
DEFINE("_EZREALTY_FEND_BUYNOW","При приобретениии 'Featured Listing' и и вы не будете платить за первоначальную 'Premium Listing' fee.");
DEFINE("_EZREALTY_FEND_BUYNOW2","Улучшить'Featured Listing' и вы не будете платитьза первоначальную and 'Premium Listing' fee.");
DEFINE("_EZREALTY_UPGRADE","Улучшить");
DEFINE("_EZREALTY_CHECK_LOC","Проверить размещения");
DEFINE("_EZREALTY_CHECK_STATE","Проверить регионы");
DEFINE("_EZREALTY_CHECK_COUNTRY","Проверить страны");
DEFINE("_EZREALTY_CHECK_AVAIL","Проверить пригодность");
DEFINE("_EZREALTY_CHECK_SUBMIT","Предоставить на рассмотрение новое");
DEFINE("_EZREALTY_CHECK_GO","Идти");
DEFINE("_EZREALTY_CHECK_REFRESH","<strong><br /><br />Вспомнить экран после закрытия этого окошка, затем вы увидите новый вход");

DEFINE("_EZREALTY_CONFIG_SELFENTRY","Front-end дополнения");
DEFINE("_EZREALTY_CONFIG_SELFENTRYDESC","Хотите ли вы позволить сотрудникам доступ к новым размещениям, государствам и странам. Когда позволите это- эти размещения, государства и страны автоматически опубликуются, позволяя доступ при создании их каталогов недвижимости W.");
DEFINE("_EZREALTY_CONFIG_COLOUR1","Перекатывать цвет 1");
DEFINE("_EZREALTY_CONFIG_COLOUR1DESC","Этот цвет секции будет изменяться, когда вы будете двигать мышкой по любому символу каталога.");
DEFINE("_EZREALTY_CONFIG_COLOUR2","Перекатывать цвет 2");
DEFINE("_EZREALTY_CONFIG_COLOUR2DESC","Этот цвет секции после того как вы перестанете двигать мышкой. Для лучших результатов необходимо использовать цвет вашей основной страницы.");

DEFINE("_EZREALTY_DATABASE1","Убновить базу данных");
DEFINE("_EZREALTY_DATABASE2","Обновление базы данных выполнено");



// TAGS THAT HAD THEIR LANGUAGE CONTENT CHANGED FOR THE 4.0.0 RELEASE


DEFINE("_EZREALTY_LISTINGS_HITSEXPL","Если будут улучшения между уровнями и типами каталогов-попадание будет 0");
DEFINE("_EZREALTY_HEADER_OHOUSE","Open Houses");


// NEW TAGS FOR THE 4.1.0 RELEASE

DEFINE("_EZREALTY_LISTING_SELECTTYPE","Выберите тип");
DEFINE("_EZREALTY_TYPE_SALE","Для продажи");
DEFINE("_EZREALTY_TYPE_RENTAL","Для аренды");
DEFINE("_EZREALTY_LISTING_TYPE","Тип каталога");
DEFINE("_EZREALTY_LISTING_ANYTYPE","Другие типы каталога");
DEFINE("_EZREALTY_RENTAL_FREQUENCY","Аренда с постоянным повторением");
DEFINE("_EZREALTY_RENTAL_NA","Не пригодный");
DEFINE("_EZREALTY_RENTAL_NIGHTLY","На неделю");
DEFINE("_EZREALTY_RENTAL_WEEKLY","На неделю");
DEFINE("_EZREALTY_RENTAL_FNIGHT","На две недели");
DEFINE("_EZREALTY_RENTAL_MONTH","На месяц");
DEFINE("_EZREALTY_RENTAL_SQFT","На квадратных футах");
DEFINE("_EZREALTY_RENTAL_SQMTR","На квадратных метрах");
DEFINE("_EZREALTY_RENTAL_SPARE","Свободный вход");


// TAGS THAT HAD THEIR LANGUAGE CONTENT CHANGED FOR THE 4.1.0 RELEASE


DEFINE("_EZREALTY_DETAILS_MARKET1","Unsold/Available");


// NEW TAGS FOR THE 4.2.0 RELEASE

DEFINE("_EZREALTY_CONFIG_MOBILE","Мобильный телефон #");
DEFINE("_EZREALTY_CONFIG_MOBILEDESC","Это будет использоваться в качестве SMS,если вы не хотите позволять составлять каталог на сайте сотрудника. Ваш мобильный телефон в международном формате:- Код страны, префикс сети без'0' и номер ? без промежутков,только числительные. Если вы не хотите использовать SMS контакты для ваших каталогов ? оставьте эти подробности пустыми.");

DEFINE("_EZREALTY_SELLER_SMS1","SMS #");
DEFINE("_EZREALTY_SELLER_SMS2","Мне SMS!");
DEFINE("_EZREALTY_SELLER_SMS3","Заметка: До использования, вам необходимо активизировать");
DEFINE("_EZREALTY_SELLER_SMS4","отчёт/Счёт! Вам необходимо установить a HTTP API через вашу Clickatell контрольную панель.");
DEFINE("_EZREALTY_SELLER_SMS5","Ваш мобильный телефон в международном формате:- Код страны,префикс сети без'0' и номер ? без промежутков,только числительные.");
DEFINE("_EZREALTY_SELLER_SMS6","Послать SMS через Clickatell к продавцу этой недвижимости");
DEFINE("_EZREALTY_SELLER_SMS7","Имя пользователя");
DEFINE("_EZREALTY_SELLER_SMS8","Password");
DEFINE("_EZREALTY_SELLER_SMS9","Мобильный телефон #");
DEFINE("_EZREALTY_SELLER_SMS10","Сообщение");
DEFINE("_EZREALTY_SELLER_SMS11","Успех");
DEFINE("_EZREALTY_SELLER_SMS12","Сообщение ID");
DEFINE("_EZREALTY_SELLER_SMS13","Посланное сообщение не дошло");
DEFINE("_EZREALTY_SELLER_SMS14","Подтверждённый недостаток");
DEFINE("_EZREALTY_SELLER_SMS15","Вам необходимо вставить Clickatell имя пользователя");
DEFINE("_EZREALTY_SELLER_SMS16","Вам необходимо вставить Clickatell password");
DEFINE("_EZREALTY_SELLER_SMS17","Вам необходимо вставить номер мобильного телефона, который ассоциируется с вашими Clickatell отчётом");
DEFINE("_EZREALTY_SELLER_SMS18","Вам необходимо включить сообщение для продавца недвижимости");
DEFINE("_EZREALTY_SELLER_SMS19","HTTP API ID#");
DEFINE("_EZREALTY_SELLER_SMS20","Вам необходимо добавить ваш. Если у вас уже его нет, установите HTTP API через вашу контрольную панель .");
DEFINE("_EZREALTY_SELLER_SMS21","150 максимальных характеров/ролей");
DEFINE("_EZREALTY_SELLER_SMS22","Ваши Clickatell подробности");
DEFINE("_EZREALTY_SELLER_SMS23","ПОСЛАТЬ sms через Clickatell");
DEFINE("_EZREALTY_SELLER_SMS24","ПошлитеSMS через Clickatell руководство по покупкам ? Создать руководство по покупкам до послания SMS!");
DEFINE("_EZREALTY_SELLER_SMS25","сделано!");
DEFINE("_EZREALTY_SELLER_SMS26","Послать SMS");
DEFINE("_EZREALTY_SELLER_SMS27","Уверяю, что ваши подробности Clickatell должны быть указаны формы настроек в EZ Realty до того как пошлёте SMS!!");

DEFINE("_EZREALTY_SELLER_SMS7DESC","Это должно быть ваш Clickatell Central API отчёт иени пользователя.");
DEFINE("_EZREALTY_SELLER_SMS8DESC","Это должно быть ваш Clickatell Central API отчёт password");
DEFINE("_EZREALTY_SELLER_SMS19DESC","Это должен быть ваш Clickatell Central APIотчёт HTTP API ID#. Создайте свой API ID# через вашу Clickatell контрольную панель.");


DEFINE("_EZREALTY_CONFIG_TEXTBOX","Ширина текста в ящике");
DEFINE("_EZREALTY_CONFIG_TEXTBOXDESC","Ширина текста добавляется и редактируется по форме детталей недвижимости.Эта ширина помогает уменьшить деформацию шаблона.");
DEFINE("_EZREALTY_CONFIG_TEXTAREA","Ширина пространства для текста");
DEFINE("_EZREALTY_CONFIG_TEXTAREADESC","Ширина пространства для текста добавляют и редактируют детали для недвижимостиT. Эта ШИРИНа помогает уменьшить деформацию шаблона.");
DEFINE("_EZREALTY_TYPE_LEASE","ДЛЯ АРЕНДЫ");
DEFINE("_EZREALTY_IMAGE_WARNING","<strong><font color='#FF0000'>типичный образец должен быть jpg's или png's!!</font></strong>");
DEFINE("_EZREALTY_IMAGE_WARNING2","Один или более ваших образцов превышают позволенную высоту и ширину образца!!");

DEFINE("_EZREALTY_CONFIG_OHOUSE","Open House Link");
DEFINE("_EZREALTY_CONFIG_OHOUSEDESC","Хотите ли вы показать the 'Open House Listings' link?");
DEFINE("_EZREALTY_CONFIG_MAXWIDTH","Максимально возможная ширина образца");
DEFINE("_EZREALTY_CONFIG_MAXWIDTHDESC","Какая максимальная широта в пикселях, которая может позволить загрузить образец?");
DEFINE("_EZREALTY_CONFIG_MAXHEIGHT","Максимально возможная высота образца");
DEFINE("_EZREALTY_CONFIG_MAXHEIGHTDESC","какая максимальная высота пикселей, которая позволит загрузить образец?");

DEFINE("_EZREALTY_PIXELS","Пиксели");
DEFINE("_EZREALTY_BEDBATH","Кровать/Ванна");
DEFINE("_EZREALTY_BUDGET","Бюджет/Запас");
DEFINE("_EZREALTY_INTERESTED","Интересовались?");
DEFINE("_EZREALTY_WANTED","Хотели");
DEFINE("_EZREALTY_PROPERTIES_WANTED","Хотели недвижимости");
DEFINE("_EZREALTY_PROPERTIES_WANTEDDESC","У нас есть люди которые ждут следующего");

DEFINE("_EZREALTY_LEAD_RESPONSE","Руководить ответом продаж");
DEFINE("_EZREALTY_RESPONS_PROPLEAD","Можно иметь недвижимость для продажи, если вы руководите составлениемmay. Lead ID# is:-");
DEFINE("_EZREALTY_LEAD_RESPONSEERROR","Вы должны включить короткое сообщение");
DEFINE("_EZREALTY_CONFIG_COUNTRY","Используйте страны");

DEFINE("_EZREALTY_CONFIG_NLLINK","Новый каталог соединений");
DEFINE("_EZREALTY_CONFIG_NLLINKDESC","Хотите ли вы показать новый каталог, который связывает основную недвижимость с главой недвижимости?");
DEFINE("_EZREALTY_STUDIO","Студия");
DEFINE("_EZREALTY_RESET","Reset");
DEFINE("_EZREALTY_LEADCONTACT_PROMO","Получил недвижимость, которая может подойти к тому, что уже покупатель купил?");
DEFINE("_EZREALTY_SKIPFREE_LISTING","Пропустить свободный каталог и строго следовать к оплаченному каталогу!!");

DEFINE("_EZREALTY_CONFIG_COLCOUNT","Посчитать колонки");
DEFINE("_EZREALTY_CONFIG_COLCOUNTDESC","Сколько колонок вы хотите разместить на странице каталога первой категори?");
DEFINE("_EZREALTY_CONFIG_COLWIDTH","Ширина колонки");
DEFINE("_EZREALTY_CONFIG_COLWIDTHDESC","Какая ширина колонки на странице первой категории каталога?К примеру, если у вас 1 колонка, ширина должна быть 100%, если 2 колонки ширина должна быть 50% и если 3 колонки, то ширина должна быть 33%. вы должны включить знак процента.");

DEFINE("_EZREALTY_ESSENTIALS","Самое главное (неотъемлемые части)");
DEFINE("_EZREALTY_OTHERSPECS","Другие Specs");
DEFINE("_EZREALTY_NS","Не устанавливать");
DEFINE("_EZREALTY_EA","Email Admin");

DEFINE("_EZREALTY_CONFIG_FORMATTING","Форматирование");
DEFINE("_EZREALTY_CONFIG_MAPPING","Настройки составления");
DEFINE("_EZREALTY_CONFIG_MAPWIDTH","Ширина плана");
DEFINE("_EZREALTY_CONFIG_MAPWIDTHDESC","Высота плана на вашем сайте выражена в пикселях.");
DEFINE("_EZREALTY_CONFIG_MAPHEIGHT","Высота плана");
DEFINE("_EZREALTY_CONFIG_MAPHEIGHTDESC","высота плана на вашем сайте выражена в пикселях.");
DEFINE("_EZREALTY_CONFIG_ADDRESSWIDTH","ширина адреса ящика");
DEFINE("_EZREALTY_CONFIG_ADDRESSWIDTHDESC","Ширина текста в ящике над картой показывает адрес недвижимости");
DEFINE("_EZREALTY_PROPERTY_MAPLOC","Размещение плана");
DEFINE("_EZREALTY_SEARCH_ALLPOSTCODES","выберите все почтовые шифры");




// TAGS THAT HAD THEIR LANGUAGE CONTENT CHANGED FOR THE 4.2.0 RELEASE


DEFINE("_EZREALTY_CONFIG_NEWLIST","Специальные страницы для каталога недвижимости");
DEFINE("_EZREALTY_CONFIG_NEWLISTDESC","Количество недвижимости составлено наN 'New Listings', 'Open House Listings', 'Properties Wanted' and 'RSS feed' page");



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