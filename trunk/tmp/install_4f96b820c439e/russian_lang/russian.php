<?php

#############################################################################
#                                                                           #
#  EZ Realty 5.0.0 - A Mambo Real Estate component                          #
#  By: Kathy Strickland (aka PixelBunyiP)                                   #
#  Copyright (C) 2006 K.J. Strickland, Raptor Developments Pty Ltd          #
#  All rights reserved                                                      #
                                         #
#  Released as a commercial component!                                      #
#                                                                          #
#############################################################################

    /**** LANGUAGE FILE INFO *****************\
    **
    **   Russian language
    **   By: PhantomUA [WGT]
    **   http://wgtru.info/
    **
    \*****************************************/


defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );


// admin.ezrealty.php file language tags

DEFINE("_EZREALTY_NOREMOVE","Не удается удалить так как обьекты испольуют эту опцию.");
DEFINE("_EZREALTY_CLEAN","Удалить просроченные обьекты.");

// configuration area settings

DEFINE("_EZREALTY_CONFIG_GENSET","Настройки пути к рисункам");

DEFINE("_EZREALTY_CONFIG_IMAGESIZES","Эскизы & размеры рисунков");
DEFINE("_EZREALTY_CONFIG_WIDTHPROPIMG","Ширина главного рисунка");
DEFINE("_EZREALTY_CONFIG_WIDTHPROPIMGDESC","Ширина главного изображения недвижимости и плана этажей при просмотре деталей обьекта. Размер указывается в пикселях. Рисунки будут изменены к этой ширине");
DEFINE("_EZREALTY_CONFIG_WIDTHCATTHUMB","Ширина эскиза категории");
DEFINE("_EZREALTY_CONFIG_WIDTHCATTHUMBDESC","Ширина рисунков, которие используются как рисунки категории.");
DEFINE("_EZREALTY_CONFIG_WIDTHTHUMB","Максимальная ширина эскиза");
DEFINE("_EZREALTY_CONFIG_WIDTHTHUMBDESC","Ширина создаваемых эскизов, которіе будут использоватся на фронт-енде");

DEFINE("_EZREALTY_CONFIG_TNCREATOR","Создание эскизов");
DEFINE("_EZREALTY_CONFIG_GDLIMIT","GD поддерживает только jpg и png!");
DEFINE("_EZREALTY_CONFIG_GDFOUND","Найден GD");
DEFINE("_EZREALTY_CONFIG_GDCHOOSE","Выберите обработчик изображений для создания эскизов.");
DEFINE("_EZREALTY_CONFIG_THUMBQUAL","Качество эскиза");
DEFINE("_EZREALTY_CONFIG_THUMBQUALDESC","Качество создаваемых эскизов.");
DEFINE("_EZREALTY_CONFIG_IMGDIR","Папка изображений");
DEFINE("_EZREALTY_CONFIG_IMGDIRDESC","По умолчанию папка изображений называется 'ezrealty', и размещена в components/com_ezrealty/ezrealty . Эскизы сохраняются в папке с именем th. Если Вы измените название папки, Вы должны создать новую папку вручную. Вы не должны изменять название папки th.");
DEFINE("_EZREALTY_CONFIG_TNNONE","нет");
DEFINE("_EZREALTY_CONFIG_TNGD1","GD Библиотека");
DEFINE("_EZREALTY_CONFIG_TNGD2","GD2 Библиотека");

DEFINE("_EZREALTY_CONFIG_YOURBIZSET","Ваши бизнесс-настройки");
DEFINE("_EZREALTY_CONFIG_BIZNAME","Название фирмы");
DEFINE("_EZREALTY_CONFIG_BIZNAMEDESC","Название Вашей фирмы, показывается на верху компонента и в других местах, например странице печати и в email.");
DEFINE("_EZREALTY_CONFIG_BIZAD","Адрес фирмы");
DEFINE("_EZREALTY_CONFIG_BIZADDESC","Ваш адрес. Показывается на верху страницы печати, чтобы покупатели знают куда обращатся.");
DEFINE("_EZREALTY_CONFIG_TELEPHONE","Контактный телефон");
DEFINE("_EZREALTY_CONFIG_TELEPHONEDESC","Номер Вашего контактного телефона показывается на форме просмотра и странице печати.");
DEFINE("_EZREALTY_CONFIG_EMAIL","Email адрес");
DEFINE("_EZREALTY_CONFIG_EMAILDESC","Email используется для просмотра недвижимости и отсылки списка с запросами.");
DEFINE("_EZREALTY_CONFIG_CURRENCYSIGN","Знак валюты");
DEFINE("_EZREALTY_CONFIG_CURRENCYSIGNDESC","Знак валюты показывается перед ценами обьектов.");
DEFINE("_EZREALTY_CONFIG_BIZINTRO","Описание фирмы");
DEFINE("_EZREALTY_CONFIG_BIZINTRODESC","Текст описания о<br />Вашей фирме.");

DEFINE("_EZREALTY_CONFIG_LAYOUTSETTINGS","Управление дизайном фронт-енда");

DEFINE("_EZREALTY_CONFIG_TPL","Шаблон фронт-енда");
DEFINE("_EZREALTY_CONFIG_TPLDESC","Выберите шаблон для фронт-енда. Эта опция влияет на внешний вид страницы деталей обьекта и страницу печати.");
DEFINE("_EZREALTY_CONFIG_SELTPL","Выбрать шаблон");

DEFINE("_EZREALTY_CONFIG_PROPPERPAGE","Обьектов на страницу");
DEFINE("_EZREALTY_CONFIG_PROPPERPAGEDESC","Количество обьектов отображаемых на странице фронт-енда");
DEFINE("_EZREALTY_CONFIG_RECFRIEND","Ссылка рекоммендовать обьект");
DEFINE("_EZREALTY_CONFIG_RECFRIENDDESC","Вы хотите разрешить пользователям использовать опцию \"рекоммендовать обьект друзьям\" ?");
DEFINE("_EZREALTY_CONFIG_MAILINGVIEW","Ссылка Добавить в список рассылки");
DEFINE("_EZREALTY_CONFIG_MAILINGDESC","Вы хотите показывать опцию \"Добавить в список рассылки\"?");
DEFINE("_EZREALTY_CONFIG_SHOWLINKS","Блок показывать ссылки");
DEFINE("_EZREALTY_CONFIG_SHOWLINKSDESC","Вы хотите показывать блок ссылок - блок содержит ссылки на карту, страницу печати и Добавить в избранное?");
DEFINE("_EZREALTY_CONFIG_SC","Область/Страна");
DEFINE("_EZREALTY_CONFIG_SCDESC","Добавить выбор области и страны в фильтры расширенного поиска?");

DEFINE("_EZREALTY_CONFIG_RSS","RSS Feed");
DEFINE("_EZREALTY_CONFIG_RSSDESC","Показывать ссылку на RSS feed Ваших новых обьектов и OpenHouse?");
DEFINE("_EZREALTY_CONFIG_RSSNN","Название RSS Feed новых обьектов");
DEFINE("_EZREALTY_CONFIG_RSSNNDESC","Как Вы хотите назвать RSS feed новых обьектов?");
DEFINE("_EZREALTY_CONFIG_RSSOH","Название OpenHouse RSS Feed");
DEFINE("_EZREALTY_CONFIG_RSSOHDESC","Как Вы хотите назвать RSS feed OpenHouse обьектов?");

DEFINE("_EZREALTY_CONFIG_LEAD","Управление обьектами");
DEFINE("_EZREALTY_CONFIG_LEADDESC","Вы хотите разрешить посетителям регистрировать заявки с недвижимостью?");

DEFINE("_EZREALTY_CONFIG_MEMSALES","Управление обьектами недвижимости фронт-енда зарегистрированными пользователями");
DEFINE("_EZREALTY_CONFIG_MEMLISTINGS","Обьекты пользователя");
DEFINE("_EZREALTY_CONFIG_MEMLISTINGSDESC","Вы хотите разрешить зарегистрированным пользователям размещение недвижимости для продажи через панель фронт-енда?");
DEFINE("_EZREALTY_CONFIG_NOTIFICATION","Уведомление о обьектах");
DEFINE("_EZREALTY_CONFIG_NOTIFICATIONDESC","Уведомлять о новых или оновленных обьектах?");
DEFINE("_EZREALTY_CONFIG_MEMAPPROVAL","Процесс утверждения");
DEFINE("_EZREALTY_CONFIG_MEMAPPROVALDESC","Новые или оновленные обьекты нуждаются в утверждении администратора перед публикацией?");
DEFINE("_EZREALTY_CONFIG_NUMLISTINGS","Количество обьектов");
DEFINE("_EZREALTY_CONFIG_NUMLISTINGSDESC","Сколько обьектов могут иметь пользователи?");

DEFINE("_EZREALTY_CONFIG_MEMBERSINTRO","Описание в зоне пользователя");
DEFINE("_EZREALTY_CONFIG_MEMBERSINTRODESC","Напишите какой-то текст для зоні пользователей - например 'Условия добавления обьектов' и т.п.");
DEFINE("_EZREALTY_CONFIG_TERMS","Условия недвижимости");
DEFINE("_EZREALTY_CONFIG_TERMSDESC","Условия продажи недвижимости.");

DEFINE("_EZREALTY_CONFIG_IMG1","Рисунки");
DEFINE("_EZREALTY_CONFIG_IMG2","настройки рисунков");
DEFINE("_EZREALTY_CONFIG_BIZ1","Бизнес");
DEFINE("_EZREALTY_CONFIG_BIZ2","Настройки фирмы");
DEFINE("_EZREALTY_CONFIG_LAY1","Шаблон");
DEFINE("_EZREALTY_CONFIG_LAY2","Настройки шаблона");
DEFINE("_EZREALTY_CONFIG_MEM1","Пользователи");
DEFINE("_EZREALTY_CONFIG_MEM2","Продажи пользователей");
DEFINE("_EZREALTY_CONFIG_PAID1","Платежи");
DEFINE("_EZREALTY_CONFIG_CUST1","Признак");


DEFINE("_EZREALTY_CONFIG_PP","Ваши настройки PayPal для заказа размещения платных обьектов");

DEFINE("_EZREALTY_CONFIG_PAIDLISTINGS","Платежи");
DEFINE("_EZREALTY_CONFIG_PAIDLISTINGSDESC","Вы хотите размещать платные обьекты недвижимости? Платные обьекты позволяют пользователям добавлять дополнительные рисунки и информацию к ихним обьектам.");
DEFINE("_EZREALTY_CONFIG_PPEMAIL","PayPal email адрес");
DEFINE("_EZREALTY_CONFIG_PPEMAILDESC","Это должен быть Ваш ОСНОВНОЙ PayPal email адрес.");

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
DEFINE("_EZREALTY_CONFIG_CHECKMAIL","Проверить почту");
DEFINE("_EZREALTY_CONFIG_CHECKMAILDESC","Повторите Ваш основной PayPal email адрес. ");
DEFINE("_EZREALTY_CONFIG_PPCURRENCY","Код валюты");
DEFINE("_EZREALTY_CONFIG_PPCURRENCYDESC","Это должен быть 3-буквенный  код валюты PayPal Вашей основной PayPal валюты.");
DEFINE("_EZREALTY_CONFIG_PPBUTTON","Рисунок кнопки");
DEFINE("_EZREALTY_CONFIG_PPBUTTONDESC","Название изображения кнопки, которая используется для обновления обьектов недвижимости на фронт-енде. Рисунки кнопок должны быть в папке рисунков фронт-енда.");

DEFINE("_EZREALTY_CONFIG_PPPREMIUM","Название улучшения Стандарта");
DEFINE("_EZREALTY_CONFIG_PPPREMIUMDESC","Как Вы хотите назвать улучшения отображения обьектов - например Расширенные обьекты и т.п.");
DEFINE("_EZREALTY_CONFIG_PPCOST","Стоимость улучшения Стандарта");
DEFINE("_EZREALTY_CONFIG_PPCOSTDESC","Стоимость улучшения бесплатного обьекта недвижмости к платному.");
DEFINE("_EZREALTY_CONFIG_FPNAME","Название улучшения к специальному обьекту");
DEFINE("_EZREALTY_CONFIG_FPNAMEDESC","Как Вы хотите назвать улучшение к специальным обьектам - например Специальные обьекты. ");
DEFINE("_EZREALTY_CONFIG_FPCOST","Стоимость улучшения к Специальным обьектам");
DEFINE("_EZREALTY_CONFIG_FPCOSTDESC","Стоимость улучшения платного обьекта недвижимости к специальному. Помните - пользователи не могут улучшать сразу с бесплатного обьекта - они должны сначала улучшить к стандартному платному обьекту.");

DEFINE("_EZREALTY_CONFIG_PPPOSTMODE","Режим почты");
DEFINE("_EZREALTY_CONFIG_PPPOSTMODEDESC","Установите 'Live Sales' дял продажи реальных оновлений через систему PayPal, или проверте Ваши установки 'Test Sales' через PayPal Developers Network Sandbox.");
DEFINE("_EZREALTY_CONFIG_LS","Live Sales");
DEFINE("_EZREALTY_CONFIG_TS","Test Sales");

DEFINE("_EZREALTY_CONFIG_SUCCESS","Страница успешной обработки");
DEFINE("_EZREALTY_CONFIG_SUCCESSDESC","Введите текст для страницы успешного PayPal платежа.");
DEFINE("_EZREALTY_CONFIG_CANCEL","Страница неуспешной обработки");
DEFINE("_EZREALTY_CONFIG_CANCELDESC","Введите текст для страницы неуспешного/отмененного PayPal платежа.");

DEFINE("_EZREALTY_CONFIG_YES","Да");
DEFINE("_EZREALTY_CONFIG_NO","Нет");

DEFINE("_EZREALTY_CONFIG_CONFIGSAVED","Настройки сохранены");

// Miscellaneous administration area language tags - error notices and dropdown list boxes

DEFINE("_EZREALTY_ADMIN_BACK","Назад к Управлению обьектами");
DEFINE("_EZREALTY_ADMIN_SOURCEERROR","Ошибка: Файл не найден!");

// admin.ezrealty.html.php language tags

// Manage property listings page

DEFINE("_EZREALTY_LISTINGS_TITLE","Управление обьектами недвижимости");
DEFINE("_EZREALTY_LISTINGS_DISPLAYNUM","Номер #");
DEFINE("_EZREALTY_LISTINGS_SEARCHPROP","Поиск");
DEFINE("_EZREALTY_LISTINGS_FILTER","Фильтр по:-");
DEFINE("_EZREALTY_LISTINGS_SORTLOCALL","-Все города-");
DEFINE("_EZREALTY_LISTINGS_SORTTYPEALL","-Все типы/виды недвижимости-");
DEFINE("_EZREALTY_LISTINGS_SORTPRICEALL","-Весь диапазон цен-");
DEFINE("_EZREALTY_LISTINGS_PROPID","Агент ID#");
DEFINE("_EZREALTY_LISTINGS_PROPNAME","Адрес");
DEFINE("_EZREALTY_LISTINGS_PROPCAT","Тип недвижимости");
DEFINE("_EZREALTY_LISTINGS_PROPPRICE","Список цен");
DEFINE("_EZREALTY_LISTINGS_PROPHITS","Хиты");
DEFINE("_EZREALTY_LISTINGS_PUBSTATUS","Опубликовано");
DEFINE("_EZREALTY_LISTINGS_MARKETSTATUS","Продано?");
DEFINE("_EZREALTY_LISTINGS_APPROVEDSTATUS","Утверждено");
DEFINE("_EZREALTY_LISTINGS_LTYPE","Тип");
DEFINE("_EZREALTY_LISTINGS_AGENT","Агент");
DEFINE("_EZREALTY_LISTINGS_LISTINGDATE","Дата составления");
DEFINE("_EZREALTY_LISTINGS_UPDATE","Последнее обновление");
DEFINE("_EZREALTY_LISTINGS_EDIT","редактировать обьект");
DEFINE("_EZREALTY_LISTINGS_APPROVED","Утверждено");
DEFINE("_EZREALTY_LISTINGS_SELLER","Продавец");

// Add/edit property details page

DEFINE("_EZREALTY_LISTINGS_SELLER_EXPL","<strong><font color='#FF0000'>Прочтите!</font></strong><br /><br />Детали продавца используются на сайте чтобы покупатели
могли связатся с продавцом для проверки недвижимости или дополнительной информации. Если Вы разрешите пользователям
добавлять обьекты для продажи, они должны заполнить эту информацию.  Если Вы хотите чтобы покупатели связывались с Вами
а не с владельцами - оставьте этот блок пустым.");
DEFINE("_EZREALTY_DETAILS_REQ","*Требуется");
DEFINE("_EZREALTY_DETAILS_OPT","*Необязательный");
DEFINE("_EZREALTY_DETAILS_TITLE","Детали обьекта недвижимости");
DEFINE("_EZREALTY_DETAILS_MARKET","Статус продажи");
DEFINE("_EZREALTY_DETAILS_SOLDDESC"," - Эта опция позволяет показывать статус продажи обьекта - значение по умолчанию 'не продан'.");
DEFINE("_EZREALTY_DETAILS_SELMARKET","Выберите статус продажи");
DEFINE("_EZREALTY_DETAILS_SELLOC","Выберите город");
DEFINE("_EZREALTY_DETAILS_SELSTATE","Выберите область");
DEFINE("_EZREALTY_DETAILS_SELCOUNTRY","Выберите страну");
DEFINE("_EZREALTY_DETAILS_SELCAT","Выберите категорию недвижимости");
DEFINE("_EZREALTY_DETAILS_SELPRICE","Выберите диапазон цен");
DEFINE("_EZREALTY_DETAILS_SELROOM","У недвижимости нет спален");
DEFINE("_EZREALTY_DETAILS_LISTDATE","Дата обьекта");
DEFINE("_EZREALTY_DETAILS_LISTDATEDESC","Дата обьекта для продажи.");
DEFINE("_EZREALTY_DETAILS_AGENTID","Уникальный номер агента ID");
DEFINE("_EZREALTY_DETAILS_AGENTIDDESC","Используйте если у Вас есть уникальный номер чтобы отслеживать обьект в оффисе.");
DEFINE("_EZREALTY_DETAILS_PROPADDRESS1","Улица 1");
DEFINE("_EZREALTY_DETAILS_PROPCITY","Метро");
DEFINE("_EZREALTY_DETAILS_AREA","Район");
DEFINE("_EZREALTY_DETAILS_COUNTRY","Город");
DEFINE("_EZREALTY_DETAILS_PROPPOSTCODE","Почтовый индекс");
DEFINE("_EZREALTY_DETAILS_PROPTYPE","Тип недвижимости");
DEFINE("_EZREALTY_DETAILS_ADLINE","Короткая фраза для продаж");
DEFINE("_EZREALTY_DETAILS_PROPDESC","Полное описание недвижимости");
DEFINE("_EZREALTY_DETAILS_SHORTDESC","Краткое описание:<br />(макс 255 символов)");
DEFINE("_EZREALTY_DETAILS_PROPPRICE","Цена недвижимости");
DEFINE("_EZREALTY_DETAILS_LANDTYPE","Тип и размер земельной собственности, арендованного участка или недвижимости");
DEFINE("_EZREALTY_DETAILS_LANDTYPEDESC","Например, свободное владение,арендованное владение, 100 акров и так далее.");
DEFINE("_EZREALTY_DETAILS_BEDROOMS","Спальни");
DEFINE("_EZREALTY_DETAILS_BEDROOMSDESC","Количество спален в недвижимости");
DEFINE("_EZREALTY_DETAILS_BATHROOMS","Ванные комнаты");
DEFINE("_EZREALTY_DETAILS_BATHROOMSDESC","Количество ванн в недвижимости");
DEFINE("_EZREALTY_DETAILS_PARKING","Стоянка");
DEFINE("_EZREALTY_DETAILS_PARKINGDESC","Количество доступных мест для машин");
DEFINE("_EZREALTY_DETAILS_MAPREF","Ссылка на карту обьекта");
DEFINE("_EZREALTY_DETAILS_MAPREFDESC","URL на карту обьекта, если используется.<br />Бесплатный сервис multimap.com");
DEFINE("_EZREALTY_DETAILS_VTOUR","Ссылка на страницу виртуального тура");
DEFINE("_EZREALTY_DETAILS_VTOURDESC","URL на страницу виртуального тура по недвижимости, если используется.<br />Ссылка открывается в новом окне");
DEFINE("_EZREALTY_DETAILS_SAVED","Детали обьекта сохранены");

DEFINE("_EZREALTY_VLDET_IMAGE1","Рисунок 1");
DEFINE("_EZREALTY_VLDET_IMAGE2","Рисунок 2");
DEFINE("_EZREALTY_VLDET_IMAGE3","Рисунок ");
DEFINE("_EZREALTY_VLDET_IMAGE4","Рисунок 4");
DEFINE("_EZREALTY_VLDET_IMAGE5","Рисунок 5");
DEFINE("_EZREALTY_VLDET_IMAGE6","Рисунок 6");
DEFINE("_EZREALTY_VLDET_IMAGE7","Рисунок 7");
DEFINE("_EZREALTY_VLDET_IMAGE8","Рисунок 8");
DEFINE("_EZREALTY_VLDET_IMAGE9","Рисунок 9");
DEFINE("_EZREALTY_VLDET_IMAGE10","Рисунок 10");
DEFINE("_EZREALTY_VLDET_IMAGE11","Рисунок 11");
DEFINE("_EZREALTY_VLDET_IMAGE12","Рисунок 12");

DEFINE("_EZREALTY_VLDET_CURRENTIMG","Текущий рисунок");
DEFINE("_EZREALTY_VLDET_CHOOSENEW","Выбрать новый рисунок");
DEFINE("_EZREALTY_VLDET_UPLOADNEW","Загрузить новый рисунок");
DEFINE("_EZREALTY_VLDET_DELETEIMG","Удалить рисунок");
DEFINE("_EZREALTY_VLDET_DELETE","Удалить");
DEFINE("_EZREALTY_VLDET_OPENFULLSIZE","Открыть рисунок в полный размер");
DEFINE("_EZREALTY_VLDET_TNPREV","Просмотр эскиза");

DEFINE("_EZREALTY_DETAILS_CTOWN","Ближайший город");
DEFINE("_EZREALTY_DETAILS_CTPORT","Ближайший транспорт");
DEFINE("_EZREALTY_DETAILS_ADDFEATURES","Дополнительные опции недвижимости");
DEFINE("_EZREALTY_DETAILS_AGE","Возраст недвижимости");
DEFINE("_EZREALTY_DETAILS_OHOUSE","Есть день открытых дверей?");
DEFINE("_EZREALTY_DETAILS_OHOUSEDET","Детали дня открытых дверей:<br />Если у обьекта есть день открытых дверей, добавьте даты и время и т.п.");

DEFINE("_EZREALTY_DETAILS_APPR","Утвердить обьект недвижимости");
DEFINE("_EZREALTY_DETAILS_PUBL","Опубликовать обьект недвижимости");
DEFINE("_EZREALTY_DETAILS_LISTSTATUS","Тип недвижимости");
DEFINE("_EZREALTY_DETAILS_FREESTATUS","Бесплатный обьект");
DEFINE("_EZREALTY_DETAILS_LISTPREMIUM","Сделать специальным");

DEFINE("_EZREALTY_DETAILS_ERROR1","У недвижимости должен быть адрес");
DEFINE("_EZREALTY_DETAILS_ERROR2","У недвижимости должен быть указан город");
DEFINE("_EZREALTY_DETAILS_ERROR3","Вы должны выбрать область/регион");
DEFINE("_EZREALTY_DETAILS_ERROR4","Вы должны выбрать страну");
DEFINE("_EZREALTY_DETAILS_ERROR5","У недвижимости должен быть указан почтовый индекс");
DEFINE("_EZREALTY_DETAILS_ERROR6","Вы обязаны выбрать тип недвижимости");
DEFINE("_EZREALTY_DETAILS_ERROR7","У недвижимости должно быть определённое количество спален");
DEFINE("_EZREALTY_DETAILS_ERROR8","Вы обязаны ввести цену недвижимости");
DEFINE("_EZREALTY_DETAILS_ERROR9","Вы должны выбрать параметры поиска диапазона цен");
DEFINE("_EZREALTY_DETAILS_ERROR10","Вы обязаны ввести краткую фразу для продаж, так как стандартные шаблоны используют это значение");
DEFINE("_EZREALTY_DETAILS_ERROR11","Вы должны ввести краткое описание, так как стандартные шаблоны используют это значение");
DEFINE("_EZREALTY_DETAILS_ERROR12","Вы обязаны загрузить хотя бы 1 рисунок для обьекта невижимости");

DEFINE("_EZREALTY_DETAILS_TAB1A","Адрес");
DEFINE("_EZREALTY_DETAILS_TAB1B","Адрес недвижимости");
DEFINE("_EZREALTY_DETAILS_TAB2A","Опции");
DEFINE("_EZREALTY_DETAILS_TAB2B","Опции недвижимости");
DEFINE("_EZREALTY_DETAILS_TAB3A","Торговля");
DEFINE("_EZREALTY_DETAILS_TAB3B","Информация о торговле");
DEFINE("_EZREALTY_DETAILS_TAB4A","Рисунки");
DEFINE("_EZREALTY_DETAILS_TAB4B","Настройки рисунков");
DEFINE("_EZREALTY_DETAILS_TAB5A","Продавец");
DEFINE("_EZREALTY_DETAILS_TAB5B","Детали продавца");
DEFINE("_EZREALTY_DETAILS_TAB6A","Администратор");
DEFINE("_EZREALTY_DETAILS_TAB6B","Обработка админом");

DEFINE("_EZREALTY_DETAILS_MARKET2","Under Offer");
DEFINE("_EZREALTY_DETAILS_MARKET3","Subject to Contract");
DEFINE("_EZREALTY_DETAILS_MARKET4","Under Contract");
DEFINE("_EZREALTY_DETAILS_MARKET5","Продано");

DEFINE("_EZREALTY_DETAILS_SOURCE1","Поиск");
DEFINE("_EZREALTY_DETAILS_SOURCE2","Сайт");
DEFINE("_EZREALTY_DETAILS_SOURCE3","Walk-in");
DEFINE("_EZREALTY_DETAILS_SOURCE4","Property network");
DEFINE("_EZREALTY_DETAILS_SOURCE5","Other - please specify below");

// Manage property price range page

DEFINE("_EZREALTY_PRICES_DISPLAYNUM","Номер #");
DEFINE("_EZREALTY_PRICES_SEARCHCOM","Поиск");
DEFINE("_EZREALTY_PRICES_PUBSTATUS","Опубликовано");
DEFINE("_EZREALTY_PRICES_REORDER","Упорядочить");
DEFINE("_EZREALTY_MODPRICES_ADD","Добавить");
DEFINE("_EZREALTY_MODPRICES_EDIT","Редактировать");
DEFINE("_EZREALTY_MODPRICES_ORDER","Порядок");

// Manage property city/town/suburbs

DEFINE("_EZREALTY_LOCALITIES_TITLE","Управление списком поиска/выбора метро");
DEFINE("_EZREALTY_LOCALITIES_DISPLAYNUM","Номер #");
DEFINE("_EZREALTY_LOCALITIES_LOC","Название метро");
DEFINE("_EZREALTY_LOCALITIES_PUBSTATUS","Опубликовано");
DEFINE("_EZREALTY_LOCALITIES_REORDER","Упорядочить");
DEFINE("_EZREALTY_MODLOC_TITLE","Метро");
DEFINE("_EZREALTY_MODLOC_ADD","Добавить");
DEFINE("_EZREALTY_MODLOC_EDIT","Редактировать");
DEFINE("_EZREALTY_MODLOC_LOC","Название местонахождения (город или пригород и т.п.)");
DEFINE("_EZREALTY_MODLOC_ORDER","Порядок");
DEFINE("_EZREALTY_MODLOC_SAVED","Детали местанахождения сохранены");
DEFINE("_EZREALTY_MODLOC_ERROR1","Вы должны ввести название");
DEFINE("_EZREALTY_LOCALITIES_EDITTAG","Редактировать размещение недвижимости");

// Manage property states/regional areas

DEFINE("_EZREALTY_STATE_TITLE","Управление списком поиска по району");
DEFINE("_EZREALTY_STATE_DISPLAYNUM","Номер #");
DEFINE("_EZREALTY_STATE_LOC","Название района");
DEFINE("_EZREALTY_STATE_PUBSTATUS","Опубликовано");
DEFINE("_EZREALTY_STATE_REORDER","Порядок");
DEFINE("_EZREALTY_STATE_TITLE2","Элемент поиска/выбора области/региона");
DEFINE("_EZREALTY_STATE_ADD","Добавить");
DEFINE("_EZREALTY_STATE_EDIT","Редактировать");
DEFINE("_EZREALTY_STATE_ORDER","Упорядочить");
DEFINE("_EZREALTY_STATE_SAVED","Детали области сохранены");
DEFINE("_EZREALTY_STATE_ERROR1","Вы должны ввести название области");
DEFINE("_EZREALTY_STATE_EDITTAG","Редактировать область");

// Manage property country areas

DEFINE("_EZREALTY_COUNTRY_TITLE","Управление списком поиска/выбора города");
DEFINE("_EZREALTY_COUNTRY_DISPLAYNUM","Номер #");
DEFINE("_EZREALTY_COUNTRY_LOC","Название города");
DEFINE("_EZREALTY_COUNTRY_PUBSTATUS","Опубликовано");
DEFINE("_EZREALTY_COUNTRY_REORDER","Порядок");
DEFINE("_EZREALTY_COUNTRY_TITLE2","Элемент поиска/выбора страны");
DEFINE("_EZREALTY_COUNTRY_ADD","Добавить");
DEFINE("_EZREALTY_COUNTRY_EDIT","Редактировать");
DEFINE("_EZREALTY_COUNTRY_ORDER","Упорядочить");
DEFINE("_EZREALTY_COUNTRY_SAVED","Детали страны сохранены");
DEFINE("_EZREALTY_COUNTRY_ERROR1","Вы должны ввести название города");
DEFINE("_EZREALTY_COUNTRY_EDITTAG","Редактировать страну");

// Manage bedroom numbers

DEFINE("_EZREALTY_ROOMS_TITLE","Управление количеством спальных комнат");
DEFINE("_EZREALTY_ROOMS_DISPLAYNUM","Номер #");
DEFINE("_EZREALTY_ROOMS_LOC","Количество спален");
DEFINE("_EZREALTY_ROOMS_PUBSTATUS","Опубликовано");
DEFINE("_EZREALTY_ROOMS_REORDER","Порядок");
DEFINE("_EZREALTY_ROOMS_TITLE2","Количество спален");
DEFINE("_EZREALTY_ROOMS_ADD","Добавить");
DEFINE("_EZREALTY_ROOMS_EDIT","Редактировать");
DEFINE("_EZREALTY_ROOMS_ORDER","Порядок");
DEFINE("_EZREALTY_ROOMS_SAVED","Количество спален сохранено");
DEFINE("_EZREALTY_ROOMS_ERROR1","Вы должны ввести количество спален");
DEFINE("_EZREALTY_ROOMS_EDITTAG","Редактировать количество спален");

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

DEFINE("_EZREALTY_LEADS_HPHONE","Домашний телефон");
DEFINE("_EZREALTY_LEADS_WPHONE","Рабочий телефон");
DEFINE("_EZREALTY_LEADS_MOBILE","Мобильный телефон");
DEFINE("_EZREALTY_LEADS_FAX","Факс");
DEFINE("_EZREALTY_LEADS_SOURCE","Где Вы нас нашли");
DEFINE("_EZREALTY_LEADS_COMMENTS","Комментарии");
DEFINE("_EZREALTY_LEADS_DETAILS","Детали недвижимости");
DEFINE("_EZREALTY_LEADS_BUDGET","Purchase Budget");

DEFINE("_EZREALTY_LEADS_SAVED","Sales Lead Details Saved");

DEFINE("_EZREALTY_LEADS_ERROR1","Вы должны вести имя");

DEFINE("_EZREALTY_LEADS_ERROR2","Вы должны ввести email адрес");
DEFINE("_EZREALTY_LEADS_ERROR3","Вы должны выбрать тип недвижимости");
DEFINE("_EZREALTY_LEADS_ERROR4","Вы должны ввести диапазон цен");
DEFINE("_EZREALTY_LEADS_ERROR5","Вы должны ввести город");
DEFINE("_EZREALTY_LEADS_ERROR6","Вы должны ввести количество спален");

// Manage property-type categories

DEFINE("_EZREALTY_CATEGORY_PAGETITLE","Управление категориями");
DEFINE("_EZREALTY_CATEGORY_DISPLAYNUM","Номер #");
DEFINE("_EZREALTY_CATEGORY_SEARCHCAT","Поиск");
DEFINE("_EZREALTY_CATEGORY_CATNAME","Категория недвижимости");
DEFINE("_EZREALTY_CATEGORY_PUBSTATUS","Опубликовано");
DEFINE("_EZREALTY_CATEGORY_ACCLEVEL","Доступ");
DEFINE("_EZREALTY_CATEGORY_REORDER","Порядок");
DEFINE("_EZREALTY_CATEGORY_MAIN","Категория недвижимости");
DEFINE("_EZREALTY_CATEGORY_ADD","Добавить");
DEFINE("_EZREALTY_CATEGORY_EDIT","Редактировать");
DEFINE("_EZREALTY_CATEGORY_DEFTITLE","Название");
DEFINE("_EZREALTY_CATEGORY_DEFCONTENT","Описание");
DEFINE("_EZREALTY_CATEGORY_DEFACCESS","Доступ");
DEFINE("_EZREALTY_CATEGORY_DEFORDER","Упорядочить");
DEFINE("_EZREALTY_CATEGORY_IMAGE","Рисунок категории");
DEFINE("_EZREALTY_CATEGORY_IMAGESEL","Выбор рисунка категории");
DEFINE("_EZREALTY_CATEGORY_SAVED","Детали категории сохранены");
DEFINE("_EZREALTY_CATEGORY_ERROR1","У категории должно быть название");
DEFINE("_EZREALTY_CATEGORY_EDITTAG","Редактировать категорию");

// Manage property-type categories

DEFINE("_EZREALTY_MARKET_PAGETITLE","Управление статусами продажи");
DEFINE("_EZREALTY_MARKET_DISPLAYNUM","Номер #");
DEFINE("_EZREALTY_MARKET_STATUS","Статус продажи");
DEFINE("_EZREALTY_MARKET_PUBSTATUS","Опубликовано");
DEFINE("_EZREALTY_MARKET_REORDER","Порядок");
DEFINE("_EZREALTY_MARKET_MAIN","Примечание статуса продажи");
DEFINE("_EZREALTY_MARKET_ADD","Добавить");
DEFINE("_EZREALTY_MARKET_EDIT","Редактировать");
DEFINE("_EZREALTY_MARKET_DEFNAME","Название");
DEFINE("_EZREALTY_MARKET_DEFORDER","Упорядочить");
DEFINE("_EZREALTY_MARKET_SAVED","Детали статуса сохранены");
DEFINE("_EZREALTY_MARKET_ERROR1","Вы должны назвать статус продажи");

// General error messages

DEFINE("_EZREALTY_GENERAL_ERROR1","Выбрать элемент ");
DEFINE("_EZREALTY_CONFIG_ERROR","Не удается записать в файл конфигурации! Пожалуйста смените права записи на файл и повторите еще раз.");

// Miscellaneous language tags for hyperlinks and image tags

DEFINE("_EZREALTY_GENERAL_PUBLISHED","Опубликовано");
DEFINE("_EZREALTY_GENERAL_UNPUBLISHED","Неопубликовано");
DEFINE("_EZREALTY_GENERAL_APPROVED","Одобрено");
DEFINE("_EZREALTY_GENERAL_UNAPPROVED","Не одобрено");
DEFINE("_EZREALTY_GENERAL_CHECKOUT","Проверяется");
DEFINE("_EZREALTY_GENERAL_RETURN","Вернуться к управлению недвижимостью");
DEFINE("_EZREALTY_GENERAL_UP","Вверх");
DEFINE("_EZREALTY_GENERAL_DOWN","Вниз");
DEFINE("_EZREALTY_GENERAL_EDITPROP","Редактировать недвижимость");
DEFINE("_EZREALTY_GENERAL_SOLD","Продано");
DEFINE("_EZREALTY_GENERAL_CONTRACT","Under Contract");

DEFINE("_EZREALTY_GENERIC_ADD","Добавить");
DEFINE("_EZREALTY_GENERIC_EDIT","Редактировать");

//////////////////// FRONT END FILE LANGUAGE TAGS ///////////////////////

// includes.ezrealty.php file

DEFINE("_EZREALTY_HOME","Главная");

// ezrealty.php file

DEFINE("_EZREALTY_BACK","Назад");
DEFINE("_EZREALTY_INCLUDES_HOME","Главная");
DEFINE("_EZREALTY_INCLUDES_SEARCH","Поиск");
DEFINE("_EZREALTY_INCLUDES_NEW","Новые");
DEFINE("_EZREALTY_CATEGORIES","Типы недвижимости");
DEFINE("_EZREALTY_PROPERTIES","свойства");
DEFINE("_EZREALTY_PROPERTY","свойства");
DEFINE("_EZREALTY_INCLUDES_RSSOH","Обьекты Open House");
DEFINE("_EZREALTY_INCLUDES_POSTMAIL","Спасибо - теперь Вы можете закрыть окно.");

// category display

DEFINE("_EZREALTY_PAGES","Страницы");
DEFINE("_EZREALTY_PREV","Предыдущая");
DEFINE("_EZREALTY_NEXT","Следующая");
DEFINE("_EZREALTY_READMORE","Подробнее");
DEFINE("_EZREALTY_VIEWPROP","Просмотр свойств");

// send to friend and arrange viewing forms

DEFINE("_EZREALTY_INVITE_VIEW_PROP","запросил посмотреть Вас обьект недвижимости для продажи. Пожалуйста нажмите на ссылку ниже для просмотра.");
DEFINE("_EZREALTY_RECCOMEND_PROP_FROM_FREND"," Рекоммендовать недвижимость другу");
DEFINE("_EZREALTY_FROM","От");
DEFINE("_EZREALTY_REPLYTO","Ответ к");
DEFINE("_EZREALTY_MAIL_SENT","Спасибо! Ваша рекоммендация отправлена...");
DEFINE("_EZREALTY_MAIL_VIEWINGSENT","Спасибо! Ваш запрос на осмотр недвижимости отправлен...");
DEFINE("_EZREALTY_INSPECTION"," Запрос на осмотр недвижимости");
DEFINE("_EZREALTY_TELEPHONE","Контактный телефон:-");
DEFINE("_EZREALTY_DATETIME","Предпочитаемая дата и время:-");
DEFINE("_EZREALTY_REQUEST_MAILINGLIST","would like to be added to your mailing list. Please use the link below to view the property they were looking at, as this may help identify their interests.");
DEFINE("_EZREALTY_PROPERTY_INTERESTS","This visitor is interested in the following property types:-");
DEFINE("_EZREALTY_MAILING_TITLE"," Add to Mailing List Request");
DEFINE("_EZREALTY_MAILINGLIST_SENT","Thankyou! Your request to be added to our mailing list has been sent...");
DEFINE("_EZREALTY_AGENTIDREF","Agent ID property reference number:-");

// viewdetails.ezrealty.php file

DEFINE("_EZREALTY_VIEWDET_NAME_EMAIL","Пожалйста заполните все поля формы!");
DEFINE("_EZREALTY_VIEWDET_NOVIEW","Извените, эта опция в данный момент не доступна.");
DEFINE("_EZREALTY_PROPGONE","Недвижимость которую Вы ищете уже не существует, или еще не опубликована!");
DEFINE("_EZREALTY_VIEWDET_PROPDET","Детали недвижимости");
DEFINE("_EZREALTY_VIEWDET_MAP","Просмотр карты");
DEFINE("_EZREALTY_VIEWDET_TOUR","Тур");
DEFINE("_EZREALTY_VIEWDET_VTOUR","Просмотр виртуального тура");
DEFINE("_EZREALTY_VIEWDET_PRINT","Напечатать эту страницу");
DEFINE("_EZREALTY_VIEWDET_FAVS","Добавить в избранное");
DEFINE("_EZREALTY_VIEWDET_VIEWING","Упорядочить просмотр");
DEFINE("_EZREALTY_VIEWDET_VNAME","Ваше имя");
DEFINE("_EZREALTY_VIEWDET_VMAIL","Ваш Email");
DEFINE("_EZREALTY_VIEWDET_VPHONE","Ваш Telephone");
DEFINE("_EZREALTY_VIEWDET_VTIME","Предпочитаемая Дата & Время");
DEFINE("_EZREALTY_VIEWDET_SEND","Отправить");
DEFINE("_EZREALTY_VIEWDET_SEND_FRIEND","Отправить другу");
DEFINE("_EZREALTY_VIEWDET_YOUR_NAME","Ваше имя");
DEFINE("_EZREALTY_VIEWDET_YOUR_MAIL","Ваш Email");
DEFINE("_EZREALTY_VIEWDET_FRIENDS_NAME","Имя Вашего друга");
DEFINE("_EZREALTY_VIEWDET_FRIENDS_MAIL","Email Вашего друга");
DEFINE("_EZREALTY_VIEWDET_APPROX","приблизительно");
DEFINE("_EZREALTY_VIEWDET_LINKS","Ссылки пользователя");
DEFINE("_EZREALTY_VIEWDET_FPLANS","Планы этажей");
DEFINE("_EZREALTY_VIEWDET_MAILING","Подписаться на рассылку");
DEFINE("_EZREALTY_VIEWDET_MAILING_SPEIL","Список недвижимости. постоянно обновляется. Будьте информированным!");
DEFINE("_EZREALTY_VIEWDET_INTERESTS","Я заинтересован в следующих типах недвижимости");
DEFINE("_EZREALTY_VIEWDET_LOCALITY","Метро");
DEFINE("_EZREALTY_VIEWDET_LAND","Тип земли");
DEFINE("_EZREALTY_VIEWDET_BEDROOM","Спальная");
DEFINE("_EZREALTY_VIEWDET_BEDROOMS","Спальные");
DEFINE("_EZREALTY_VIEWDET_BATHROOM","Ванная");
DEFINE("_EZREALTY_VIEWDET_BATHROOMS","Ванные");
DEFINE("_EZREALTY_VIEWDET_PARKING","Парковка для");
DEFINE("_EZREALTY_VIEWDET_PARKING2","Парковка");
DEFINE("_EZREALTY_VIEWDET_GALLERY","Галерея рисунков");
DEFINE("_EZREALTY_VIEWDET_SOLD","Продано");
DEFINE("_EZREALTY_VIEWDET_CONTRACT","Under Contract");
DEFINE("_EZREALTY_VIEWDET_REGISTER","Регистрация");

DEFINE("_EZREALTY_VIEWDET_PRICE","Цена недвижимости");
DEFINE("_EZREALTY_VIEWDET_EXTRA","Свойства");
DEFINE("_EZREALTY_VIEWDET_YES","Да");
DEFINE("_EZREALTY_VIEWDET_NO","Нет");
DEFINE("_EZREALTY_VIEWDET_LOCATION","Метро");
DEFINE("_EZREALTY_VIEWDET_TOWN","Ближайший город");
DEFINE("_EZREALTY_VIEWDET_TPORT","Транспорт");
DEFINE("_EZREALTY_VIEWDET_AGE","Возраст");

DEFINE("_EZREALTY_VIEWDET_PSELLERS","Продавцы");
DEFINE("_EZREALTY_VIEWDET_SELLER","Продавец");
DEFINE("_EZREALTY_VIEWDET_SELLER_PHONE","Контакт #");
DEFINE("_EZREALTY_VIEWDET_SELLER_ARRANGE","Посромотр недвижимости");
DEFINE("_EZREALTY_VIEWDET_SELLER_VIEWING","Arrange inspection direct with seller");

DEFINE("_EZREALTY_PIX_HOVER","Для изменения рисунка, наведите курсор мыши над эскизами");

// search.ezrealty.php file

DEFINE("_EZREALTY_SEARCHPRICE","Диапазон цен");
DEFINE("_EZREALTY_SEARCHPROPTYPE","Тип невижимости");
DEFINE("_EZREALTY_SEARCHLOC","Метро");
DEFINE("_EZREALTY_SEARCHSUB","Пригород");
DEFINE("_EZREALTY_SEARCHREG","Область");
DEFINE("_EZREALTY_SEARCHCON","Страна");
DEFINE("_EZREALTY_SEARCHBRM","Спальные комнаты");
DEFINE("_EZREALTY_SEARCHORD","Порядок");
DEFINE("_EZREALTY_SEARCHADV","Расширенный поиск");
DEFINE("_EZREALTY_SEARCH_SEARCH","Поиск");

DEFINE("_EZREALTY_SEARCH_ALCAT","Выбрать все категории");
DEFINE("_EZREALTY_SEARCH_ALLOC","Выбрать все города");
DEFINE("_EZREALTY_SEARCH_ALSTA","Выбрать все области");
DEFINE("_EZREALTY_SEARCH_ALCOU","ВЫбрать все страны");
DEFINE("_EZREALTY_SEARCH_MINPRI","Выберите мин. цену");
DEFINE("_EZREALTY_SEARCH_MAXPRI","Выберите макс. цену");
DEFINE("_EZREALTY_SEARCH_MINBED","Выберите мин. спален");
DEFINE("_EZREALTY_SEARCH_MAXBED","Выберите макс.спален");
DEFINE("_EZREALTY_SEARCH_ONLYAV","Только доступные обьекты");
DEFINE("_EZREALTY_SEARCH_PRIASC","Возрастание цены");
DEFINE("_EZREALTY_SEARCH_PRIDESC","Уменьшение цены");
DEFINE("_EZREALTY_SEARCH_ASC","Возрастание даты");
DEFINE("_EZREALTY_SEARCH_DESC","Уменьшение даты");

// results.ezrealty.php file

DEFINE("_EZREALTY_RESULTSL_SELECT","Пожалуйста выберите параметры поиска!");
DEFINE("_EZREALTY_RESULTS_RESULTS","Результаты:");
DEFINE("_EZREALTY_RESULTS_NORESULTS","Извените - ничего не найдено...");
DEFINE("_EZREALTY_RESULTS_NEW","Новые");
DEFINE("_EZREALTY_RESULTS_NEWLISTINGS","Новые обьекты недвижимости");

// printdetails.ezrealty.php file

DEFINE("_EZREALTY_PRINT_ID","ID Недвижимости");
DEFINE("_EZREALTY_PRINT_TELEPHONE","Телефон:");
DEFINE("_EZREALTY_PRINT_PRINT","Печать");
DEFINE("_EZREALTY_PRINT_CLOSE","Закрыть окно");

// submit lead stuff

DEFINE("_EZREALTY_SUBLEAD_TITLE","Submit Property Requirements");
DEFINE("_EZREALTY_SUBLEAD_INTRO","Properties are always coming on the market.  If you can't find what you're looking for at the moment, why not register your property requirements with us.  We'll then notify you when something matching your requirements becomes available.
");
DEFINE("_EZREALTY_SUBLEAD_THANKS","Thankyou - your property requirements have been submitted.");
DEFINE("_EZREALTY_SUBLEAD_CONTACT","Ваши контактные данные");
DEFINE("_EZREALTY_SUBLEAD_NOTON","Sorry - we're not currently accepting property leads");

DEFINE("_EZREALTY_LM_ERROR1","Пожалуйста введите Ваше имя");
DEFINE("_EZREALTY_LM_ERROR2","Пожалуйста введите Ваш email");
DEFINE("_EZREALTY_LM_ERROR3","Пожалуйста выберите категорию");
DEFINE("_EZREALTY_LM_ERROR4","Пожалуйста выберите ценовой диапазон");
DEFINE("_EZREALTY_LM_ERROR5","Пожалуйста выберите город/пригород");
DEFINE("_EZREALTY_LM_ERROR6","Пожалуйста выберите приблизительное количество спален");

DEFINE("_EZREALTY_EMAIL_ERROR1","Пожалуйста введите Ваше имя");
DEFINE("_EZREALTY_EMAIL_ERROR2","Пожалуйста введите Ваш email");
DEFINE("_EZREALTY_EMAIL_ERROR3","Пожалуйста введите Ваш контактный телефон");
DEFINE("_EZREALTY_EMAIL_ERROR4","Пожалуйста введите Ваши вопросы");
DEFINE("_EZREALTY_EMAIL_ERROR5","Пожалуйста введите имя друга");
DEFINE("_EZREALTY_EMAIL_ERROR6","Пожалуйста введите email друга");
DEFINE("_EZREALTY_EMAIL_ERROR7","Пожалуйста опишите Ваши интересы");
DEFINE("_EZREALTY_EMAIL_ERROR8","Извените - эта email опция на данный момент не доступна");
DEFINE("_EZREALTY_EMAIL_ERROR9","Please include a general time-frame for viewing");

// front-end member stuff

DEFINE("_EZREALTY_LISTINGS_INTRO","Вы можете добавить данное количество бесплатных обьектов недвижимости");
DEFINE("_EZREALTY_NOLISTINGS","У Вас нет обьектов недвижимости");
DEFINE("_EZREALTY_ADDNEW","Добавить обьект недвижимости");
DEFINE("_EZREALTY_SUBMIT_LISTING","Отправить");
DEFINE("_EZREALTY_NO_LOGIN","Извените - Вы сначала должны авторизоватся");
DEFINE("_EZREALTY_MAX_NUM","Извените - Вы превысили максимум");
DEFINE("_EZREALTY_MAXNUM_LIST","обьектов недвижимости");
DEFINE("_EZREALTY_YOUVEGOTMAIL","Новые обьекты недвижимости");
DEFINE("_EZREALTY_DONE","Загрузка рисунка и недвижимости прошла успешно!");
DEFINE("_EZREALTY_UPDATEDONE","Вы успешно обновили недвижимость!");
DEFINE("_EZREALTY_NO_EDIT","Извените - Вы не можете редактировать эту недвижимость");
DEFINE("_EZREALTY_NODELETE","Вам не разрешено удалять эту недвижимость");
DEFINE("_EZREALTY_CHECKDELETE","Вы уверены что хотите удалить недвижимость?");
DEFINE("_EZREALTY_DELETE_LISTING","Удалить обьект");
DEFINE("_EZREALTY_LISTINGS_PREVIEW","Просмотр недвижимости");
DEFINE("_EZREALTY_DELIMGOOPS","Не удается удалить рисунок");
DEFINE("_EZREALTY_LISTING_DELETED","Недвижимость успешно удалена");
DEFINE("_EZREALTY_LISTING_TERMS","Условия недвижимости");
DEFINE("_EZREALTY_PREVIEW_LISTING","Просмотр Вашей недвижимости");

DEFINE("_EZREALTY_MEMBERS_ADDRESS","Адрес");
DEFINE("_EZREALTY_MEMBERS_HITS","Хитов");
DEFINE("_EZREALTY_MEMBERS_ACTION","Action");
DEFINE("_EZREALTY_MEMBERS_STATUS","Опубликовано");
DEFINE("_EZREALTY_MEMBERS_UPGRADE","Улучшить");
DEFINE("_EZREALTY_MEMBERS_MAKEFEAT","Сделать специальным предложением");
DEFINE("_EZREALTY_MEMBERS_SELLERDET","Детали продавца");

DEFINE("_EZREALTY_LISTING1","Контактные данные продавца");
DEFINE("_EZREALTY_LISTING2","Контактное имя");
DEFINE("_EZREALTY_LISTING3","Контактный телефон");
DEFINE("_EZREALTY_LISTING4","Email");
DEFINE("_EZREALTY_LISTING5","Адрес недвижимости");
DEFINE("_EZREALTY_LISTING6","Данные недвижимости");
DEFINE("_EZREALTY_LISTING7","Свойства");
DEFINE("_EZREALTY_LISTING8","Детали продажи недвижимости");
DEFINE("_EZREALTY_LISTING9","Добавить данные недвижимости");
DEFINE("_EZREALTY_LISTING10","Редактировать данные недвижимости");
DEFINE("_EZREALTY_LISTING11","Местоположение продавца");
DEFINE("_EZREALTY_LISTING12","Рисунки");
DEFINE("_EZREALTY_LISTING_IMGDELETED","Рисунок удален");
DEFINE("_EZREALTY_LISTING_RESTRICTED","**Эта информация не доступна для бесплатных обьектов**");

DEFINE("_EZREALTY_SELLER_ERROR1","Вы должны ввести контактное имя");
DEFINE("_EZREALTY_SELLER_ERROR2","Вы должны ввести контактный телефон");
DEFINE("_EZREALTY_SELLER_ERROR3","Вы должны ввести контактный email адрес");
DEFINE("_EZREALTY_SELLER_ERROR4","Вы должны ввести Ваше местоположение");

DEFINE("_EZREALTY_SELLER_N","Имя");
DEFINE("_EZREALTY_SELLER_T","Телефон");
DEFINE("_EZREALTY_SELLER_E","Email");
DEFINE("_EZREALTY_SELLER_L","Местоположение");
DEFINE("_EZREALTY_SELLER_C","Контакт");

DEFINE("_EZREALTY_NOCATLISTINGS","Извените - нет обьектов в данной категории");

DEFINE("_EZREALTY_IPN_SUBJECT","Обьект недвижимости улучшен к");
DEFINE("_EZREALTY_IPN_MSG1","Пользователь сайта улучшил обьект недвижимости к");
DEFINE("_EZREALTY_IPN_MSG2","Данные покупателя:-");
DEFINE("_EZREALTY_IPN_MSG3","Недвижимость ID#");

DEFINE("_EZREALTY_POA","POA");
DEFINE("_EZREALTY_CONFIG_SBIMP","List by Impressions");
DEFINE("_EZREALTY_CONFIG_SBIMPDESC","If allowing site members to list properties, do you want to do this based on impressions - ie. hits on the full details page. Listings will then cease to display once they exceed the number of impressions and you'll be able to clean the database of these old listings by pressing the 'Clean Listings' button.");
DEFINE("_EZREALTY_CONFIG_IMPNUM","Number of Impressions");
DEFINE("_EZREALTY_CONFIG_IMPNUMDESC","If limiting listings based on impressions/hits - how many should be shown.");

DEFINE("_EZREALTY_RESET_MSG","Хиты очищены");
DEFINE("_EZREALTY_RESET_BTN","Очистить");
DEFINE("_EZREALTY_CLEANDB","Очистить обьекты");
DEFINE("_EZREALTY_LISTINGS_PAID1","listings cost");
DEFINE("_EZREALTY_LISTINGS_PAID2","per upgrade");
DEFINE("_EZREALTY_LISTINGS_HITSINTRO","Listings are discontinued and removed from the database after");
DEFINE("_EZREALTY_LISTINGS_HITS2","хиты");
DEFINE("_EZREALTY_BEDROOMS_EXPL","Use whole numbers from 1 upwards, as the 0 is already defined in the drop-down box code for use in instances where bedrooms are not applicable.");
DEFINE("_EZREALTY_SELLERSPANEL","Панель продавца");
DEFINE("_EZREALTY_MAINPANEL","Обьекты недвижимости");


// NEW TAGS THAT WERE ADDED FOR THE 3.2.2 VERSION

DEFINE("_EZREALTY_SUB_MSG","Пользователь Вашего сайта добавил или обновил недвижимость");
DEFINE("_EZREALTY_TOOLBAR_CLOSE","Закрыть");
DEFINE("_EZREALTY_NLAVAIL","Извените - этот обьект счас не доступен");


// NEW TAGS THAT WERE ADDED AFTER THE 3.2.2 VERSION FOR CB INTEGRATION

DEFINE("_EZREALTY_CONFIG_CBINT","Community Builder Integration");
DEFINE("_EZREALTY_CONFIG_CBINTDESC","If you are using Community Builder, do you want to use the information from its membership tables for seller contact details?");
DEFINE("_EZREALTY_PROFILER_CBMSG1","The EZ Realty property listings component is not installed.  Please contact the site administrator.");
DEFINE("_EZREALTY_PROFILER_CBMSG2","There are no property listings for this member.");
DEFINE("_EZREALTY_PROFILER_CBPROFILE","View Profile");




// NEW TAGS THAT WERE ADDED AFTER THE 3.3.0 VERSION


DEFINE("_EZREALTY_CLICK_OPEN","Нажмите чтобы открыть");




// NEW TAGS THAT WERE ADDED FOR THE 4.0.0 RELEASE

DEFINE("_EZREALTY_CONFIG_FREEPIC","Free Listing Images");
DEFINE("_EZREALTY_CONFIG_FREEPICDESC","If you have free and paid listings for your members, do you want free listings to be able to show an image? If you select 'NO' just a placeholder will be displayed, which may encourage more paid listings. If you select 'YES' - free listings will only be able to have one image. This will not affect listings if you're ONLY running in free listings mode - members can have 12 images when run in this mode.");
DEFINE("_EZREALTY_CONFIG_PAIDOPT1","FREE with option to UPGRADE");
DEFINE("_EZREALTY_CONFIG_PAIDOPT2","Только платные обьекты");
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

DEFINE("_EZREALTY_DETAILS_TAB7A","Метатеги");
DEFINE("_EZREALTY_DETAILS_METADESC","Описание");
DEFINE("_EZREALTY_DETAILS_METAKEYS","Ключевые слова");
DEFINE("_EZREALTY_FEND_BUYNOW","Purchase a 'Featured Listing' first and you don't have to pay the initial 'Premium Listing' fee.");
DEFINE("_EZREALTY_FEND_BUYNOW2","Upgrade to a 'Featured Listing' first and you don't have to pay the initial 'Premium Listing' fee.");
DEFINE("_EZREALTY_UPGRADE","Upgrade");
DEFINE("_EZREALTY_CHECK_LOC","Проверить местополодения");
DEFINE("_EZREALTY_CHECK_STATE","Проверить области");
DEFINE("_EZREALTY_CHECK_COUNTRY","Проверить страны");
DEFINE("_EZREALTY_CHECK_AVAIL","Проверить доступность");
DEFINE("_EZREALTY_CHECK_SUBMIT","Добавить новый");
DEFINE("_EZREALTY_CHECK_GO","Вперед");
DEFINE("_EZREALTY_CHECK_REFRESH","<strong><br /><br />Refresh the screen after closing this window - then you'll see the new entry.</strong>");

DEFINE("_EZREALTY_CONFIG_SELFENTRY","Front-end Additions");
DEFINE("_EZREALTY_CONFIG_SELFENTRYDESC","Do you want to allow site members access to add new localities, states and countries themselves. When allowing this - these localities, states and countries will be automatically published to allow access when creating their property listing.");
DEFINE("_EZREALTY_CONFIG_COLOUR1","Rollover Colour 1");
DEFINE("_EZREALTY_CONFIG_COLOUR1DESC","This is the colour cells will change to when hovering your mouse over an item in the list of properties.");
DEFINE("_EZREALTY_CONFIG_COLOUR2","Rollover Colour 2");
DEFINE("_EZREALTY_CONFIG_COLOUR2DESC","This is the colour cells will return to after mousing off the cell. For best results - this should be the colour of your page background.");

DEFINE("_EZREALTY_DATABASE1","Обновить базу");
DEFINE("_EZREALTY_DATABASE2","Обновление базы выполнено");



// TAGS THAT HAD THEIR LANGUAGE CONTENT CHANGED FOR THE 4.0.0 RELEASE


DEFINE("_EZREALTY_LISTINGS_HITSEXPL","If upgrading between listing levels/types - hits will be reset to 0");
DEFINE("_EZREALTY_HEADER_OHOUSE","Open Houses");


// NEW TAGS FOR THE 4.1.0 RELEASE

DEFINE("_EZREALTY_LISTING_SELECTTYPE","Выберите тип");
DEFINE("_EZREALTY_TYPE_SALE","Продажа");
DEFINE("_EZREALTY_TYPE_RENTAL","Аренда");
DEFINE("_EZREALTY_LISTING_TYPE","Тип недвижимости");
DEFINE("_EZREALTY_LISTING_ANYTYPE","Любой");
DEFINE("_EZREALTY_RENTAL_FREQUENCY","Длительность Аренды");
DEFINE("_EZREALTY_RENTAL_NA","Не доступна");
DEFINE("_EZREALTY_RENTAL_NIGHTLY","На ночь");
DEFINE("_EZREALTY_RENTAL_WEEKLY","На неделю");
DEFINE("_EZREALTY_RENTAL_FNIGHT","На 2 недели");
DEFINE("_EZREALTY_RENTAL_MONTH","На месяц");
DEFINE("_EZREALTY_RENTAL_SQFT","За квадратный фут");
DEFINE("_EZREALTY_RENTAL_SQMTR","За квадратный метр");
DEFINE("_EZREALTY_RENTAL_SPARE","Spare entry");


// TAGS THAT HAD THEIR LANGUAGE CONTENT CHANGED FOR THE 4.1.0 RELEASE


DEFINE("_EZREALTY_DETAILS_MARKET1","Доступен");


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
DEFINE("_EZREALTY_IMAGE_WARNING","<strong><font color='#FF0000'>Типы рисунков должны быть только jpg или png!!</font></strong>");
DEFINE("_EZREALTY_IMAGE_WARNING2","One or more of your images exceed the allowed image height or width!!");

DEFINE("_EZREALTY_CONFIG_OHOUSE","Open House Link");
DEFINE("_EZREALTY_CONFIG_OHOUSEDESC","Do you want to show the 'Open House Listings' link?");
DEFINE("_EZREALTY_CONFIG_MAXWIDTH","Максимальная ширина рисунка");
DEFINE("_EZREALTY_CONFIG_MAXWIDTHDESC","Какая максимальная ширина (в пикселях) загружаемых рисунков?");
DEFINE("_EZREALTY_CONFIG_MAXHEIGHT","Максимальная ширина рисунка");
DEFINE("_EZREALTY_CONFIG_MAXHEIGHTDESC","Какая максимальная высота (в пикселях) загружаемых рисунков?");

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
DEFINE("_EZREALTY_STUDIO","Студия");
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

DEFINE("_EZREALTY_CONFIG_FORMATTING","Форматирование");
DEFINE("_EZREALTY_CONFIG_MAPPING","Настройки карт");
DEFINE("_EZREALTY_CONFIG_MAPWIDTH","Ширина карты");
DEFINE("_EZREALTY_CONFIG_MAPWIDTHDESC","Ширина карты в пикселях, показываемой на Вашем сайте.");
DEFINE("_EZREALTY_CONFIG_MAPHEIGHT","Высота карты");
DEFINE("_EZREALTY_CONFIG_MAPHEIGHTDESC","Высота карты в пикселях, показываемой на Вашем сайте.");
DEFINE("_EZREALTY_CONFIG_ADDRESSWIDTH","Address Box Width");
DEFINE("_EZREALTY_CONFIG_ADDRESSWIDTHDESC","The width of the text box above the map that displays the property address.");
DEFINE("_EZREALTY_PROPERTY_MAPLOC","Map Location");
DEFINE("_EZREALTY_SEARCH_ALLPOSTCODES","Выбрать все почтовые индексы");




// TAGS THAT HAD THEIR LANGUAGE CONTENT CHANGED FOR THE 4.2.0 RELEASE


DEFINE("_EZREALTY_CONFIG_NEWLIST","Special property listing pages");
DEFINE("_EZREALTY_CONFIG_NEWLISTDESC","Number of properties to list on the 'New Listings', 'Open House Listings', 'Properties Wanted' and 'RSS feed' page");


// NEW LANGUAGE TAGS FOR THE *** 4.2.0 STABLE *** RELEASE


DEFINE("_EZREALTY_ERROR_DUPLICATE","ERROR - duplicate entry!!");
DEFINE("_EZREALTY_OPENHOUSE_DETAILS","OpenHouse details");



// NEW LANGUAGE TAGS FOR THE *** 5.0.0 STABLE *** RELEASE


DEFINE("_EZREALTY_CPANEL","Панель");

DEFINE("_EZREALTY_CPANEL_VMGR","Управление транспортом");
DEFINE("_EZREALTY_CPANEL_MGCAT","Управление категориями");
DEFINE("_EZREALTY_CPANEL_MGVEHMAKE","Manage Vehicle Makes");
DEFINE("_EZREALTY_CPANEL_MGVEHMOD","Manage Vehicle Models");
DEFINE("_EZREALTY_CPANEL_MGENG","Manage Engine Size List");
DEFINE("_EZREALTY_CPANEL_MGPRICE","Управление ценами");
DEFINE("_EZREALTY_CPANEL_PROFMGR","Управление профилями");
DEFINE("_EZREALTY_CPANEL_MGSALES","Manage Sales Leads");
DEFINE("_EZREALTY_CPANEL_SENDALERT","Отправить уведомления на Email");
DEFINE("_EZREALTY_CPANEL_CLEANLIST","Очистить обьекты");
DEFINE("_EZREALTY_CPANEL_UPGRADE","Обновить базу");
DEFINE("_EZREALTY_CPANEL_HELP","Помощь");
DEFINE("_EZREALTY_CPANEL_MIGRATE","Импорт пользователей");
DEFINE("_EZREALTY_CPANEL_CONFIG","Настройки компонента");
DEFINE("_EZREALTY_CPANEL_INTRO","Вступление");
DEFINE("_EZREALTY_CPANEL_OPTIMIZE","Оптимизирование таблиц");



DEFINE("_EZREALTY_PROFILE_DSDET","Контактные данные");
DEFINE("_EZREALTY_PROFILE_MANAGE","Управление профилями Агентов/продавцов");
DEFINE("_EZREALTY_PROFILE_IMAGE","Рисунок профиля");
DEFINE("_EZREALTY_PROFILE_NAME","Имя агента/продавца");
DEFINE("_EZREALTY_PROFILE_NUMPROPS","Количество обьектов");
DEFINE("_EZREALTY_PROFILE_COMPANY","Компания");
DEFINE("_EZREALTY_PROFILE_EDIT","Редактировать продавца");
DEFINE("_EZREALTY_PROFILE_LINK","Ссылка на существующего пользователя");
DEFINE("_EZREALTY_PROFILE_TYPE4","Тип продавца");
DEFINE("_EZREALTY_PROFILE_INTRO","Персональное вступление<br />255 символов макс.");
DEFINE("_EZREALTY_PROFILE_ADDRESS1","Дом #");
DEFINE("_EZREALTY_PROFILE_ADDRESS2","Название улицы");
DEFINE("_EZREALTY_PROFILE_LOCALITY","Метро");
DEFINE("_EZREALTY_PROFILE_PCODE","Почтовый индекс");
DEFINE("_EZREALTY_PROFILE_STATE","Область");
DEFINE("_EZREALTY_PROFILE_COUNTRY","Страна");
DEFINE("_EZREALTY_PROFILE_EMAIL","Email");
DEFINE("_EZREALTY_PROFILE_PHONE","Телефон");
DEFINE("_EZREALTY_PROFILE_FAX","Факс");
DEFINE("_EZREALTY_PROFILE_MOBILE","Мобильный #");
DEFINE("_EZREALTY_PROFILE_SMS","Международный мобильный #");
DEFINE("_EZREALTY_PROFILE_ALLOWSMS","Разрешить SMS связь");
DEFINE("_EZREALTY_PROFILE_WEB","URL сайта");
DEFINE("_EZREALTY_PROFILE_BLOG","URL блога");
DEFINE("_EZREALTY_PROFILE_MSN","Имя в MSN");
DEFINE("_EZREALTY_PROFILE_SKYPE","Имя в Skype");
DEFINE("_EZREALTY_PROFILE_YAHOO","Имя в Yahoo");
DEFINE("_EZREALTY_PROFILE_ICQ","Номер ICQ");
DEFINE("_EZREALTY_PROFILE_APPROVE","Утвердить профиль");
DEFINE("_EZREALTY_PROFILE_DETAILS","Данные профиля Агента/Продавца");
DEFINE("_EZREALTY_PROFILE_SAVE","Сохранить/оновить профиль");
DEFINE("_EZREALTY_PROFILE_PROFILE","Мой профиль");
DEFINE("_EZREALTY_PROFILE_TYPE1","Выберите Ваш статус продавца");
DEFINE("_EZREALTY_PROFILE_SAVED","Данные профиля сохранены");
DEFINE("_EZREALTY_PROFILE_SEARCHALL","Поиск по всех городах");
DEFINE("_EZREALTY_PROFILE_AGSELLERS","Our Agents and Private Sellers");
DEFINE("_EZREALTY_PROFILE_NOPROFILES","There are no profiles currently listed");
DEFINE("_EZREALTY_PROFILE_FINDDEALER","Find an Agent/private seller in your area");
DEFINE("_EZREALTY_PROFILE_AGLINK","Найти агента");
DEFINE("_EZREALTY_PROFILE_MOBILE2","Мобильный");
DEFINE("_EZREALTY_PROFILE_TEXT","Текстовое сообщение");
DEFINE("_EZREALTY_AGENT_CURRENTLISTINGS","Текущие обьекты");
DEFINE("_EZREALTY_AGENT_MYLISTINGS","Просмотр моих обьектов");
DEFINE("_EZREALTY_AGENT_LISTINGSFOR","Обьекты:-");
DEFINE("_EZREALTY_DEALER_NOLISTINGS","Нет обьектов недвижимости связанных с этим профилем");
DEFINE("_EZREALTY_PROFILE_SENDCONTACT","Связатся с агентом/продавцом");
DEFINE("_EZREALTY_PROFILE_SMSCONTACT","Отправить SMS через Clickatell агенту/продавцу");
DEFINE("_EZREALTY_ERROR_NOPROFILE","ATTENTION - You must create your profile before being able to add/edit property listings!! Please click the 'My Profile' link above to do this.");

DEFINE("_EZREALTY_CONFIG_CURRENCYPOS","Позиция валюты");
DEFINE("_EZREALTY_CONFIG_CURRENCYPOS_DESC","Вы можете определить где показывать знак валюты - перед или после цены");
DEFINE("_EZREALTY_CONFIG_CURRENCYFORMAT","Формат валюты");
DEFINE("_EZREALTY_CONFIG_CURRENCYFORMAT_DESC","Вы можете определить как показывать валюту -  в десятичном или европейском формате");
DEFINE("_EZREALTY_CONFIG_BEFORE","Перед");
DEFINE("_EZREALTY_CONFIG_AFTER","После");
DEFINE("_EZREALTY_CONFIG_DECIMAL","Десятичный");
DEFINE("_EZREALTY_CONFIG_EUROPEAN","Европейский");
DEFINE("_EZREALTY_CONFIG_MAPTYPE1","Карты Google");
DEFINE("_EZREALTY_CONFIG_MAPTYPE2","Карты Yahoo");

DEFINE("_EZREALTY_CONFIG_SHOWPROF","Показать профиль");
DEFINE("_EZREALTY_CONFIG_PROFILING","Manage your site's profile settings");
DEFINE("_EZREALTY_CONFIG_PROFACCESS","Доступ к профилю");
DEFINE("_EZREALTY_CONFIG_PROFACCESSDESC","Определите кто смодет просматривать данные профиля продавца.");
DEFINE("_EZREALTY_CONFIG_PROFILEWIDTH","Ширина рисунка профиля");
DEFINE("_EZREALTY_CONFIG_PROFILEWIDTHDESC","Максимальная ширина рисунка профиля.");
DEFINE("_EZREALTY_CONFIG_PROFILEHEIGHT","Высота рисунка профиля");
DEFINE("_EZREALTY_CONFIG_PROFILEHEIGHTDESC","Максимальная высота рисунка профиля.");

DEFINE("_EZREALTY_PROFACCESS_DENIED","Our Agent/Seller profiles have access privileges enabled. Please login first.");

DEFINE("_EZREALTY_CONFIG_PROFILES","Профили");

DEFINE("_EZREALTY_CONFIG_USESMS","Включить SMS");
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
DEFINE("_EZREALTY_CONFIG_MAPRES","Разрешающая способность карты");

DEFINE("_EZREALTY_MAPPING_STNUM","Использовать номер дома");
DEFINE("_EZREALTY_MAPPING_STNUMDESC","Вы хотите использовать номер дома для карты? Если выберите нет - будет использоватся только название улицы.");
DEFINE("_EZREALTY_MAPPING_STREET","Использовать название улицы");
DEFINE("_EZREALTY_MAPPING_STREETDESC","Вы хотите использовать название улицы для карты? Если выберите нет - будет использоватся следующий уровень, например город.");
DEFINE("_EZREALTY_MAPPING_LOCALITY","Использовать город");
DEFINE("_EZREALTY_MAPPING_LOCALITYDESC","");
DEFINE("_EZREALTY_MAPPING_STATE","Использовать область/регион");
DEFINE("_EZREALTY_MAPPING_STATEDESC","");


DEFINE("_EZREALTY_SCH_TYPE","Использовать тип недвижимости");
DEFINE("_EZREALTY_SCH_TYPEDESC","Если ДА - будет использоватся в поисковом фильтре");
DEFINE("_EZREALTY_SCH_CTG","Использовать категории недвижимости");
DEFINE("_EZREALTY_SCH_CTGDESC","Если ДА - будет использоватся в поисковом фильтре");

DEFINE("_EZREALTY_SCH_LOC","Использовать области и города");
DEFINE("_EZREALTY_SCH_LOCDESC","Если ДА - будет использоватся в поисковом фильтре");

DEFINE("_EZREALTY_SCH_CNID","Использовать Страну");
DEFINE("_EZREALTY_SCH_CNIDDESC","Если ДА - будет использоватся в поисковом фильтре");
DEFINE("_EZREALTY_SCH_PCODE","Использовать почтовый индекс");
DEFINE("_EZREALTY_SCH_PCODEDESC","Если ДА - будет использоватся в поисковом фильтре");
DEFINE("_EZREALTY_SCH_PRICE","Использовать диапазон цен");
DEFINE("_EZREALTY_SCH_PRICEDESC","Показывать диапазон цен в поисковом фильтре?");
DEFINE("_EZREALTY_SCH_ROOMS","Использовать спальные");
DEFINE("_EZREALTY_SCH_ROOMSDESC","Использовать диапазон количества спальных комнат в поисковом фильтре?");
DEFINE("_EZREALTY_SCH_MARKET","Использовать Статус продажи");
DEFINE("_EZREALTY_SCH_MARKETDESC","Если ДА - будет использоватся в поисковом фильтре");
DEFINE("_EZREALTY_SCH_MLS","Использовать MLS #");
DEFINE("_EZREALTY_SCH_MLSDESC","Если ДА - будет использоватся в поисковом фильтре");

DEFINE("_EZREALTY_LISTINGS_EXPDATE","Expiration Date");
DEFINE("_EZREALTY_LISTINGS_EXPIRED","Expired");
DEFINE("_EZREALTY_EXPDATE_RESET","The Expiration Date has been reset!");
DEFINE("_EZREALTY_SELECT_SELLER","Выберите Агента/продавца");
DEFINE("_EZREALTY_DEALER_SELLER","Агент/продавец");

DEFINE("_EZREALTY_DETAILS_UNITNUM","Номер недвижимости");
DEFINE("_EZREALTY_DETAILS_STREETNUM","Номер квартиры");
DEFINE("_EZREALTY_DETAILS_DISPLAYAD","Показывать адрес");
DEFINE("_EZREALTY_LISTINGS_DISPLADDYEXTFEED","Вы хотите показывать адрес недвижимости в feeds для внешних сайтов?");

DEFINE("_EZREALTY_OPTIMIZE_DATABASE","The EZ Realty tables have been optimized");
DEFINE("_EZREALTY_MIGRATE_ERROR","Error - you forgot to select your site members!");
DEFINE("_EZREALTY_COPY","Copy");
DEFINE("_EZREALTY_PROFILE_ERROR_MID","ERROR - You must assign an existing member to this profile!!");
DEFINE("_EZREALTY_SORT_ALLSTATES","-Все области-");
DEFINE("_EZREALTY_SORT_ALLCOUNTRIES","-Все страны-");

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

DEFINE("_EZREALTY_MYEZPANEL","Моя панель недвижимости");
DEFINE("_EZREALTY_MYPROFILE","Мой профиль");
DEFINE("_EZREALTY_MYLISTINGS","Мои обьекты");

DEFINE("_EZREALTY_GENERIC_SAVED","Данные сохранены");

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
DEFINE("_EZREALTY_DETAILS_PROPCOUNTY","Округ/район");
DEFINE("_EZREALTY_DETAILS_PROPCOUNTY_DESC","** Дополнительное поле связаное с географической зоной.");
DEFINE("_EZREALTY_DETAILS_TOTALROOMS","Всего комнат");
DEFINE("_EZREALTY_DETAILS_LIVINGAREA","Жилая площадь");
DEFINE("_EZREALTY_DETAILS_BOND","Ипотека");
DEFINE("_EZREALTY_DETAILS_FRONTAGE","Фасад");
DEFINE("_EZREALTY_DETAILS_DEPTH","Высота");
DEFINE("_EZREALTY_SHOW_PRICE","Показывать цену");
DEFINE("_EZREALTY_DETAILS_PRICEVIEW","Просмотр цен");
DEFINE("_EZREALTY_DETAILS_PRICEVIEW_DESC","Если Вы скриваете цену недвижимости - напишите спц.сообщение - например. 'Позвоните чтобы узнать цену'.");

DEFINE("_EZREALTY_DETAILS_BUSINESS","Business info");
DEFINE("_EZREALTY_DETAILS_TAKINGS","Выручка");
DEFINE("_EZREALTY_DETAILS_RETURNS","Прибыль");
DEFINE("_EZREALTY_DETAILS_NETPROFIT","Чистая прибыль");
DEFINE("_EZREALTY_DETAILS_BUSTYPE","Тип бизнесса");
DEFINE("_EZREALTY_DETAILS_BUSSUBTYPE","Специализация");

DEFINE("_EZREALTY_DETAILS_RURAL","Сельськохозяйственная информация");
DEFINE("_EZREALTY_DETAILS_FENCING","Ограждения");
DEFINE("_EZREALTY_DETAILS_RAINFALL","Осадки");
DEFINE("_EZREALTY_DETAILS_SOILTYPE","Тип почвы");
DEFINE("_EZREALTY_DETAILS_IRRIGATION","Орошение");
DEFINE("_EZREALTY_DETAILS_CARRYINGCAP","Производительность");
DEFINE("_EZREALTY_DETAILS_SERVICES","Обслуживание");

DEFINE("_EZREALTY_TYPE_AUCTION","Для аукциона");
DEFINE("_EZREALTY_DETAILS_MARKET0","Статус продажи");
DEFINE("_EZREALTY_DETAILS_MLSID","Номер MLS ID");
DEFINE("_EZREALTY_DETAILS_MLSIDDESC","Если Вы агент, здесь Вы можете ввести Ваш MLS ID номер для этой недвижимости");

DEFINE("_EZREALTY_DETAILS_GRAZING","Пастбище");
DEFINE("_EZREALTY_DETAILS_CROPPING","Выращивание сельскохозяйственных культур");
DEFINE("_EZREALTY_DETAILS_WATERRESOURCES","Водные ресурсы");
DEFINE("_EZREALTY_DETAILS_STORAGE","Хранилище");
DEFINE("_EZREALTY_DETAILS_GENERAL","Общая информация");

DEFINE("_EZREALTY_PRUNE_DONE","Lightbox entries pruned");

DEFINE("_EZREALTY_NOALERT_SENT","Alert emails for pending listing deletions have not been sent, as your site is not using time-based expiration management.");

DEFINE("_EZREALTY_EXPIRY_WARNING","Pending listing expiry");
DEFINE("_EZREALTY_EXPIRY_MESSAGE","Your property listing on our site is due to expire soon, and we hope you've had a successful advertising campaign. Should you wish to extend your advertisement, please visit our site to renew your listing. You'll find us here:-");
DEFINE("_EZREALTY_EXPIRY_MESSAGE2","Log into the site and visit the member's control panel. From there you'll be able to renew your listing. Should you choose not to renew it - your listing will be deleted without further notice.");
DEFINE("_EZREALTY_ALERTMSG_PT1","E-mail sent to");
DEFINE("_EZREALTY_ALERTMSG_PT2","users");
DEFINE("_EZREALTY_CONFIG_BRAZILIAN","Brazilian");

DEFINE("_EZREALTY_HEADER_FEATURED","Специальное предложение");
DEFINE("_EZREALTY_FEATURED_PROPERTY_LIST","Our Featured Properties");

DEFINE("_EZREALTY_CONFIG_TOPMENU","Manage the Top EZ Realty Menu Links");
DEFINE("_EZREALTY_CONFIG_USEMENU","Use Top Menu Links");
DEFINE("_EZREALTY_CONFIG_USEMENU_DESC","Do you want to use the top EZ Realty menu links? Setting this to 'no' will completely hide the top menu link.");
DEFINE("_EZREALTY_CONFIG_USEFEAT","использовать ссылку специальные предложения");
DEFINE("_EZREALTY_CONFIG_USEFEAT_DESC","Do you want to use the top featured listings link?");
DEFINE("_EZREALTY_CONFIG_AGLINK","Agent/Seller's Link");
DEFINE("_EZREALTY_CONFIG_AGLINK_DESC","Do you want to use the top agent/seller's link?");
DEFINE("_EZREALTY_CONFIG_SCHLINK","Use Search Filter Link");
DEFINE("_EZREALTY_CONFIG_SCHLINK_DESC","Do you want to use the top search filter link?");
DEFINE("_EZREALTY_CONFIG_MEMLINK","Use Members Link");
DEFINE("_EZREALTY_CONFIG_MEMLINK_DESC","Do you want to use the top link that goes into the member's listings management area?");

DEFINE("_EZREALTY_SEL_STATE","Выберите область");
DEFINE("_EZREALTY_SEL_LOCALITY","Выберите город");
DEFINE("_EZREALTY_CLICKOPEN","Click thumbnails to open");

DEFINE("_EZREALTY_LISTINGS_SUMMARY","Краткая информация");
DEFINE("_EZREALTY_LISTINGS_EXPAND","click to expand");
DEFINE("_EZREALTY_LISTINGS_TECHNICAL","Technical Specifications");
DEFINE("_EZREALTY_LISTINGS_NOTECHSPECS","There are no technical specifications listed for this vehicle");
DEFINE("_EZREALTY_LISTINGS_CLICKOPEN","Click to open the full-size image");
DEFINE("_EZREALTY_LISTINGS_SPECS","Specifications");
DEFINE("_EZREALTY_LISTINGS_FEATS","Features");
DEFINE("_EZREALTY_TOOLS","Опции");
DEFINE("_EZREALTY_DET_ADDFEAT","Additional features");
DEFINE("_EZREALTY_DET_ADDNUM","Ad #");
DEFINE("_EZREALTY_DET_AGID","Agency reference #");
DEFINE("_EZREALTY_DET_MLSID","MLS ID");
DEFINE("_EZREALTY_DET_COUNTY","County/Municipality");

DEFINE("_EZREALTY_CONFIG_BACKBUT","Back button");
DEFINE("_EZREALTY_CONFIG_BACKBUTDESC","Do you want to display the back button on the footer of the page?");

DEFINE("_EZREALTY_TABS_SUMMARY","Краткая информация");
DEFINE("_EZREALTY_TABS_DETAILS","Детали");
DEFINE("_EZREALTY_TABS_FEATURES","Дополнительно");
DEFINE("_EZREALTY_TABS_DESCRIPTION","Описание");

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

DEFINE("_EZREALTY_LISTER_AGENT","Агент");
DEFINE("_EZREALTY_LISTER_OWNER","Владелец/Продавец");
DEFINE("_EZREALTY_LISTER_BROKER","Брокер");
DEFINE("_EZREALTY_LISTER_SELECTTYPE","Выберите тип продавца");

DEFINE("_EZREALTY_SEARCH_ANYMLS","Any MLS ID");

DEFINE("_EZREALTY_YOUVEGOT_LEADSMAIL","New Property Lead Submitted");

DEFINE("_EZREALTY_REDUNDANT","** This field is now redundant **");

DEFINE('_EZREALTY_NAV_LT','&lt;');
DEFINE('_EZREALTY_NAV_RT','&gt;');
DEFINE('_EZREALTY_NAV_PAGE','Страница');
DEFINE('_EZREALTY_NAV_OF','из');
DEFINE('_EZREALTY_NAV_START','Начало');
DEFINE('_EZREALTY_NAV_PREVIOUS','Предыдущая');
DEFINE('_EZREALTY_NAV_NEXT','Следующая');
DEFINE('_EZREALTY_NAV_END','Конец');
DEFINE('_EZREALTY_NAV_RESULTS','Результаты');

DEFINE('_EZREALTY_TABS_ADDRESS','Адрес');
DEFINE('_EZREALTY_TABS_SPECS','Характеристики');
DEFINE('_EZREALTY_TABS_MARKETING','Продажа');
DEFINE('_EZREALTY_TABS_ADMIN','Админ');
DEFINE('_EZREALTY_TABS_BUSINESS','Бизнес');
DEFINE('_EZREALTY_TABS_PROFILES','Профили');
DEFINE('_EZREALTY_TABS_SMS','SMS');
DEFINE('_EZREALTY_TABS_MAPPING','Карты');
DEFINE('_EZREALTY_TABS_EXP','Истечение срока');
DEFINE('_EZREALTY_TABS_FORMATTING','Форматирование');
DEFINE('_EZREALTY_TABS_SEARCH','Поиск');
DEFINE('_EZREALTY_TABS_LINKS','Ссылки');
DEFINE('_EZREALTY_TABS_MEMBERS','Пользователи');
DEFINE('_EZREALTY_TABS_PAYMENTS','Платежи');

DEFINE('_EZREALTY_DETAILS_STOCK','Склад');
DEFINE('_EZREALTY_DETAILS_FIXTURES','Приспособления');
DEFINE('_EZREALTY_DETAILS_FITTINGS','Оборудование');
DEFINE('_EZREALTY_DETAILS_SQUARES','Общая площадь');
DEFINE('_EZREALTY_DETAILS_POFFICE','Процент оффиса');
DEFINE('_EZREALTY_DETAILS_PWAREHOUSE','Процент склада');
DEFINE('_EZREALTY_DETAILS_LOADING','Погрузочные устройства');
DEFINE('_EZREALTY_DETAILS_NOADFEAT','Нет дополнительных свойств');
DEFINE('_EZREALTY_DETAILS_VIDEOTOUR','Видео Тур');

DEFINE('_EZREALTY_MIGRATE_USERS','Импорт пользователей');

DEFINE('_EZREALTY_CONFIG_STATESLOCS','Области и города');
DEFINE('_EZREALTY_CONFIG_LOCSONLY','Только города');
DEFINE('_EZREALTY_CONFIG_NEITHER','Ничего');
DEFINE('_EZREALTY_CONFIG_STATELOCTITLE','Области и города');
DEFINE('_EZREALTY_CONFIG_STATELOCTITLE_DESC','Define how to enter states and localities info for your property addresses. Some very small places may not require either states or localities, some may require only localities, and country-wide listings may require both states and localities to be entered for property addresses.');
DEFINE('_EZREALTY_CONFIG_YOURVIDEOS','Настройки Видео');
DEFINE('_EZREALTY_CONFIG_FLV','Добавлять FLV файлы Видео Тура');
DEFINE('_EZREALTY_CONFIG_FLV_DESC','Вы можете добавить FLV в страницу обьекта недвижимости.');
DEFINE('_EZREALTY_CONFIG_FLVWIDTH','Ширина видео');
DEFINE('_EZREALTY_CONFIG_FLVWIDTH_DESC','Ширина показываемых FLV файлов.');
DEFINE('_EZREALTY_CONFIG_FLVHEIGHT','Высота видео');
DEFINE('_EZREALTY_CONFIG_FLVHEIGHT_DESC','Высота показываемых FLV файлов.');
DEFINE('_EZREALTY_TABS_VIDEO','Видео');
DEFINE('_EZREALTY_TABS_NOMAP','Sorry - there is no map available for this property');
DEFINE('_EZREALTY_TABS_NOVIDEO','Sorry - there is no video tour available for this property');

DEFINE('_EZREALTY_PROFILE_ERROR_TYPE','Вы должны выбрать тип продавца.');
DEFINE('_EZREALTY_PROFILE_TYPE','Тип продавца');
DEFINE('_EZREALTY_LISTINGS_ASC','Listings asc');
DEFINE('_EZREALTY_LISTINGS_DESC','Listings desc');

DEFINE('_EZREALTY_LISTINGS_FLVMODE','Введите URL к файлам FLVдля видео тура.');
DEFINE('_EZREALTY_LOCALITY_DESC','Locality Description');
DEFINE('_EZREALTY_SOLD_ERROR','Error - you must define a market status for your property listing');

DEFINE("_EZREALTY_APF11","Животные разрешены");
DEFINE("_EZREALTY_SEARCH_ANYMARKET","Любой статус продажи");

DEFINE("_EZREALTY_SCH_PETS","Использовать Животные разрешены");
DEFINE("_EZREALTY_SCH_PETSDESC","Вы хотите добавить  выбор 'Животные разрешены' в поисковый фильтр?");
DEFINE("_EZREALTY_SCH_LUG","Использовать 'Гараж'");
DEFINE("_EZREALTY_SCH_LUGDESC","Вы хотите добавить выбор 'гараж' в поисковый фильтр?");



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

DEFINE("_EZREALTY_PROFILE_LOGO","Логотип Агенства");
DEFINE("_EZREALTY_PROFILE_MAXSIZE","Максимальный размер файла");
DEFINE("_EZREALTY_CONFIG_LOGOWIDTH","Ширина логотипа");
DEFINE("_EZREALTY_CONFIG_LOGOHEIGHT","Высота логотипа");

DEFINE("_EZREALTY_CONFIG_LOGOWIDTHDESC","Максимальная ширина логотипа загружается с продавцом.");
DEFINE("_EZREALTY_CONFIG_LOGOHEIGHTDESC","Максимальная высота логотипа, загружается с продавцом.");

DEFINE("_EZREALTY_HELPER_PETS","Helper Animals");
DEFINE("_EZREALTY_NA","Not Applicable");

DEFINE("_EZREALTY_LISTINGS_PRESCHOOL","Ближайшее дошкольное учреждение");
DEFINE("_EZREALTY_LISTINGS_PRIMARYSCHOOL","Ближайшая начальная школа");
DEFINE("_EZREALTY_LISTINGS_HIGHSCHOOL","Ближайшая средняя школа");
DEFINE("_EZREALTY_LISTINGS_UNIVERSITY","Ближайший колледж/университет");

DEFINE("_EZREALTY_CONFIG_MAPTYPE","Выберите сервис карт");
DEFINE("_EZREALTY_CONFIG_MAPTYPEDESC","Какой сервис карт Вы хотите использовать? Если Ваш шаблон содержит много javascript, Вы можете использовать карты Yahoo:- <a target='_blank' href='http://developer.yahoo.com/maps/'>http://developer.yahoo.com/maps/</a>.");
DEFINE("_EZREALTY_CONFIG_OSTATUS","Online status indicator");
DEFINE("_EZREALTY_CONFIG_OSTATUSDESC","Online status indicators for the IM systems come and go, and are occasionally offline - and have a range of different indicator buttons. Choose the 'Status Indicator Server' you want to use for your site.");
DEFINE("_EZREALTY_DRIVING_DIRECTIONS","CLICK HERE FOR DRIVING DIRECTIONS");

DEFINE("_EZREALTY_PROFILE_SHOWADDY","Показывать адрес");
DEFINE("_EZREALTY_PROFILE_SHOWADDYDESC","Вы хотите показывать адрес на странице Вашего профиля? Если выбрано Нет - адрес и карта адреса в Вашем профиле отображатся не будут .");
DEFINE("_EZREALTY_CONFIG_CURRENCYCODE","Код валюты");
DEFINE("_EZREALTY_CONFIG_CURRENCYCODEDESC","например, USD, AUD, GBP, руб.");
DEFINE("_EZREALTY_CONFIG_SHORTLIST","Short List");
DEFINE("_EZREALTY_CONFIG_SHORTLISTDESC","Do you want to use the 'short listing' feature? This does require registered members to be logged in to be able to use it, so if you don't provide this access - set this feature to 'NO'.");

DEFINE("_EZREALTY_LISTINGS_SCHOOLDIST","Школьный округ");
DEFINE("_EZREALTY_LISTINGS_HOFEES","Home Owner Assn. Fees");
DEFINE("_EZREALTY_APF12","Лифт");
DEFINE("_EZREALTY_SPECS","Quick Specs");
DEFINE("_EZREALTY_CLICK","нажмите для открытия");
DEFINE("_EZREALTY_OHOUSE","Openhouse");
DEFINE("_EZREALTY_DETAILS_MARKET6","Недоступен");
DEFINE("_EZREALTY_ADDOWNER_ERROR","Error - you must specify an agent/owner responsible for maintaining this listing");

DEFINE("_EZREALTY_CPANEL_FEEDSDESC","In addition to the RSS 2.0 feeds that have always been available, EZ Realty now has the ability to feed your property listings to a couple of large external property listing sites.<br /><br /><strong>These feeds are new features - and are still experimental - so if you encounter problems with them please submit a support ticket reporting any bugs.</strong>");
DEFINE("_EZREALTY_CPANEL_GOOGLE1","Your Google RSS 2.0 Feed");
DEFINE("_EZREALTY_CPANEL_GOOGLE2","Visit Google for more information");
DEFINE("_EZREALTY_CPANEL_EDGEIO1","Your Edgeio RSS 2.0 Feed");
DEFINE("_EZREALTY_CPANEL_EDGEIO2","Visit Edgeio for more information");
DEFINE("_EZREALTY_CPANEL_PROPSMART1","Your Propsmart RSS 2.0 Feed");
DEFINE("_EZREALTY_CPANEL_PROPSMART2","Visit PropSmart for more information");
DEFINE("_EZREALTY_MIGRATE_MEMBERS","Импорт пользователей");

DEFINE("_EZREALTY_CPANEL_COUNTRIES","Управление городами");
DEFINE("_EZREALTY_CPANEL_STATES","Управление районами");
DEFINE("_EZREALTY_CPANEL_LOCALITIES","Управление метро");
DEFINE("_EZREALTY_CPANEL_BEDROOMS","Управление спальнями");
DEFINE("_EZREALTY_CPANEL_PROPERTYMGR","Управление недвижимостью");

DEFINE("_EZREALTY_PRICE_DISPLAYVALUE","Display Value");
DEFINE("_EZREALTY_FILTER_MLS","-Все MLS ID-");
DEFINE("_EZREALTY_FILTER_AGENTS","-Все ID Агентов-");











//****************************************************//
//  EXISTING LANGUAGE TAGS THAT HAVE HAD THEIR CONTENT CHANGED FOR THE 5.0.0 RELEASE
//****************************************************//


DEFINE("_EZREALTY_CONFIG_USEMAP","Использовать карты");
DEFINE("_EZREALTY_CONFIG_USEMAPDESC","Вы хотите использовать сервисы карт? Если Вы решили использовать - прочитайте правила их использования:- <a target='_blank' href='http://www.google.com/apis/maps/terms.html'>http://www.google.com/apis/maps/terms.html</a> - или условия использования других сервисов у них на сайте");
DEFINE("_EZREALTY_CONFIG_MAPAPI","Mapping API Number");
DEFINE("_EZREALTY_CONFIG_MAPAPIDESC","Вы ДОЛЖНЫ получить Mapping service API number для Вашего сайта, и добавить его сюда, если хотите использовать карты. Вы можете получить API number здесь:- <a target='_blank' href='http://www.google.com/apis/maps/'>http://www.google.com/apis/maps/</a> - или на других сервисах, в зависимости какой Вы используете. Yahoo mapping API можно получить здесь:- <a target='_blank' href='http://developer.yahoo.com/maps/'>http://developer.yahoo.com/maps/</a>");
DEFINE("_EZREALTY_CONFIG_OP2","Выберите уведомления которые хотите получать");

DEFINE("_EZREALTY_DETAILS_PROPPRICEDESC","<font color='#FF0000'>Это поле использует маску ввода. Вводите данные в формате - 10000.00 - не используйте запятые!</font>");

DEFINE("_EZREALTY_CONFIG_ARRVIEW","Email Seller Link");
DEFINE("_EZREALTY_CONFIG_ARRVIEWDESC","Do you want to show the \"email seller\" contact link on the full property details page?");
DEFINE("_EZREALTY_DETAILS_PROPADDRESS2","Улица");
DEFINE("_EZREALTY_CONFIG_TITLE","Настройки");
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



DEFINE("_EZREALTY_SPECIAL_FEATURE","Дополнительные значения");

DEFINE("_EZREALTY_CONFIG_CPI1","Признак 1");
DEFINE("_EZREALTY_CONFIG_CPI2","Признак 2");
DEFINE("_EZREALTY_CONFIG_CPI3","Признак 3");

DEFINE("_EZREALTY_APF1","Басейн");
DEFINE("_EZREALTY_APF2","Камин");
DEFINE("_EZREALTY_APF3","Место для пикника");
DEFINE("_EZREALTY_APF4","Беседка");
DEFINE("_EZREALTY_APF5","Гараж");
DEFINE("_EZREALTY_APF6","Встроеный шкаф");
DEFINE("_EZREALTY_APF7","Центральное отопление");
DEFINE("_EZREALTY_APF8","Кондиционер");
DEFINE("_EZREALTY_APF9","Близко к магазинам");
DEFINE("_EZREALTY_APF10","Близко к школе");


DEFINE("_EZREALTY_PREMIUM","Премиум");
DEFINE("_EZREALTY_FEATURED","Специальное");





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

DEFINE("_EZREALTY_CPANEL_STATIC","Статическая информация");
DEFINE("_EZREALTY_CPANEL_DOCUMENTATION","Документация");
DEFINE("_EZREALTY_CPANEL_MLIST","Mailing List Submissions");

DEFINE("_EZREALTY_MANAGE_STATIC","Управление статичной информацией");
DEFINE("_EZREALTY_CONTENT_ITEM","Информация");
DEFINE("_EZREALTY_CONTENT_ERROR","Вы должны ввести какую-то информацию");
DEFINE("_EZREALTY_MANAGE_SUBSCRIBER","Manage Mailing List Submissions");
DEFINE("_EZREALTY_SUBSCRIBER_NAME","Имя");
DEFINE("_EZREALTY_SUBSCRIBER_EMAIL","Email адрес");
DEFINE("_EZREALTY_SUBSCRIBER_CONFIRMED","Подтверждение");
DEFINE("_EZREALTY_SUBSCRIBER_DATE","Дата");
DEFINE("_EZREALTY_ERROR_SUBNAME","Ошибка - Вы должны ввести мя");
DEFINE("_EZREALTY_ERROR_EMAIL","Ошибка - Вы должны ввести email адрес");
DEFINE("_EZREALTY_EMAIL_FORMAT_ERROR","Ошибка - неверный формат email адреса: пожалуйста введите правильный email адрес");
DEFINE("_EZREALTY_REGISTERED_ACCESS","Ошибка - Вы должны быть зарегистрированы и авторизированы как пользователь для просмотра этого обьекта недвижимости.");

DEFINE("_EZREALTY_APF13","Экстра 1");
DEFINE("_EZREALTY_APF14","Экстра 2");
DEFINE("_EZREALTY_APF15","Экстра 3");
DEFINE("_EZREALTY_APF16","Экстра 4");
DEFINE("_EZREALTY_APF17","Экстра 5");
DEFINE("_EZREALTY_APF18","Экстра 6");
DEFINE("_EZREALTY_APF19","Экстра 7");
DEFINE("_EZREALTY_APF20","Экстра 8");


DEFINE("_EZREALTY_BROKENLINK_WARNING","***ПРИМЕЧАНИЕ*** Some email programmes break long links, so if yours has done this - copy and paste the link parts into your browser address bar.");
DEFINE("_EZREALTY_REQUEST_FOLLOWLINK","Please use the link below to view the property in question:-");
DEFINE("_EZREALTY_MAIL_LISTDET","Listing details");
DEFINE("_EZREALTY_MAIL_PROPADD1","-------------------------------------------------------");
DEFINE("_EZREALTY_MAIL_PROPADD2","Property address");
DEFINE("_EZREALTY_MAIL_PROPADD3","-------------------------------------------------------");
DEFINE("_EZREALTY_MAIL_CONTACTDET","Contact details");
DEFINE("_EZREALTY_MAIL_EMAIL","Email address:-");
DEFINE("_EZREALTY_DETAILS_DECLAT","Географическая широта");
DEFINE("_EZREALTY_DETAILS_DECLONG","Географическая долгота");
DEFINE("_EZREALTY_SEARCH_ANY","Любая недвижимость");
DEFINE("_EZREALTY_SEARCH_ONLYFEAT","Only featured properties");
DEFINE("_EZREALTY_SCH_FEAT","Использовать специальные предложения недвижимости");
DEFINE("_EZREALTY_SCH_FEATDESC","Вы хотите разрешить поиск по обьектам специальных предложений?");

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

DEFINE("_EZREALTY_SEARCH_BATHROOMS","Ванные комнаты");
DEFINE("_EZREALTY_SELECT_BATHROOMS","Любое количество");

DEFINE("_EZREALTY_SCH_BTHROOMS","Использовать ванные комнаты");
DEFINE("_EZREALTY_SCH_BTHROOMSDESC","Если ДА - будет использоватся в поисковом фильтре");
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

DEFINE("_EZREALTY_ENTER_CAPTCHA","Введите проверочный код, показанный ниже");
DEFINE("_EZREALTY_SECURITY_FAILED","Ошибка - неверный проверочный код");
DEFINE("_EZREALTY_PRINT_ADMIN","Печать");
DEFINE("_EZREALTY_FIND_COORDINATES","Нажмите здесь чтобы узнать географические координаты");

DEFINE("_EZREALTY_CONFIG_PAGEORDER","Default page order");
DEFINE("_EZREALTY_CONFIG_PAGEORDERDESC","This is the general ordering of properties on the frontend pages.");

DEFINE("_EZREALTY_FILTER_ALLSTREETS","-Все улицы-");
DEFINE("_EZREALTY_FILTER_ALLIDS","-Все ID номера-");

DEFINE("_EZREALTY_LISTS_STATEFIRST","Select the state first - then locality");

DEFINE("_EZREALTY_CUSTOM4","Признак 4");
DEFINE("_EZREALTY_CUSTOM5","Признак 5");
DEFINE("_EZREALTY_FIELD_SEARCHABLE","Поле используется в поиске");
DEFINE("_EZREALTY_SCH_CUST4","Использовать поле Признак 4");
DEFINE("_EZREALTY_SCH_CUST4DESC","Вы хотите Использовать поле Признак 4 в Вашем поисковом фильтре? Не забудьте переименовать поле в языковом файле.");
DEFINE("_EZREALTY_SCH_CUST5","Использовать поле Признак 5");
DEFINE("_EZREALTY_SCH_CUST5DESC","Вы хотите Использовать поле Признак 5 в Вашем поисковом фильтре? Не забудьте переименовать поле в языковом файле.");
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
DEFINE("_EZREALTY_CONFIG_SHOWPROF_DESC","Если Вы не хотите показывать профили продавцов - выберите НЕТ. Пользователи смогут создавать свои профили, но ихние данные не будут отображатся.");


?>