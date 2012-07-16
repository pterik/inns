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



DEFINE("_EZREALTY_NOREMOVE","N�o pode ser eliminada presentemente, porque ainda est�o listas  a usar.");

DEFINE("_EZREALTY_CLEAN","Remover listas expiradas..");



// configuration area settings



DEFINE("_EZREALTY_CONFIG_GENSET","Configura��es gerais das Imagens");



DEFINE("_EZREALTY_CONFIG_IMAGESIZES","Miniaturas e tamanhos de Imagens");

DEFINE("_EZREALTY_CONFIG_WIDTHPROPIMG","Largura Imagem Principal");

DEFINE("_EZREALTY_CONFIG_WIDTHPROPIMGDESC","Largura Imagem Principal e imagem dos planos quando vista na pa'gina com os detalhes da propriedade.� expressa em pixels para assistir no layout da p�gina. Imagens seram alterdas para esta Largura");

DEFINE("_EZREALTY_CONFIG_WIDTHCATTHUMB","Categoria Largura das Miniaturas");

DEFINE("_EZREALTY_CONFIG_WIDTHCATTHUMBDESC","Largura das Imagens usa a Categoria das Imagens.");

DEFINE("_EZREALTY_CONFIG_WIDTHTHUMB","Largura M�xima da Miniatura");

DEFINE("_EZREALTY_CONFIG_WIDTHTHUMBDESC","Largura das imagens miniatura criadas que ser�o usadas no site P�blico.");



DEFINE("_EZREALTY_CONFIG_TNCREATOR","Criador de miniaturas");

DEFINE("_EZREALTY_CONFIG_GDLIMIT","GD s� suporta jpg e png!");

DEFINE("_EZREALTY_CONFIG_GDFOUND","Encontrou  GD");

DEFINE("_EZREALTY_CONFIG_GDCHOOSE","Escolher processador de Imagem para cria��o de miniaturas.");

DEFINE("_EZREALTY_CONFIG_THUMBQUAL","Qualidade Miniaturas");

DEFINE("_EZREALTY_CONFIG_THUMBQUALDESC","Qualidade Miniaturas criadas.");

DEFINE("_EZREALTY_CONFIG_IMGDIR","Pasta das Imagens");

DEFINE("_EZREALTY_CONFIG_IMGDIRDESC","A pasta padr�o das imagens chama-se 'ezrealty', e est� localizada em components/com_ezrealty/ezrealty path. As Miniaturas est�o guardadas nu pasta debaixo da principal, chamada th. Se mudar o nome da pasta, precisa de criar uam nova pasta manualmente para imagens e miniaturas. N�O PODE MUDAR O NOME da pasta th .");

DEFINE("_EZREALTY_CONFIG_TNNONE","Nenhuma");

DEFINE("_EZREALTY_CONFIG_TNGD1","Libraria GD");

DEFINE("_EZREALTY_CONFIG_TNGD2","Libraria GD2");



DEFINE("_EZREALTY_CONFIG_YOURBIZSET","Suas Configura��es");

DEFINE("_EZREALTY_CONFIG_BIZNAME","Nome da Ag�ncia Imobli�ria");

DEFINE("_EZREALTY_CONFIG_BIZNAMEDESC","O nome da sua Ag�ncia Imobili�ria que vai mostrar no cabec�alho e em tudo que quiser imprimire em p�ginas de email.");

DEFINE("_EZREALTY_CONFIG_BIZAD","Morada");

DEFINE("_EZREALTY_CONFIG_BIZADDESC","A Morada da sua Ag�ncia. Isto vai mostrar no cabe�alho da p�gina a imprimir, para potenciais compradores ficarem com uma refer�ncia sua.");

DEFINE("_EZREALTY_CONFIG_TELEPHONE","Contacto telefone");

DEFINE("_EZREALTY_CONFIG_TELEPHONEDESC","O seu Contacto telefone vai mostrar no cabe�alho da p�gina a imprimir e nos formul�rios.");

DEFINE("_EZREALTY_CONFIG_EMAIL","Morada Email");

DEFINE("_EZREALTY_CONFIG_EMAILDESC","Morada Email a usar na inspec��o da propriedade e nas listas de pedidos enviadas por email.");

DEFINE("_EZREALTY_CONFIG_CURRENCYSIGN","S�mbolo da Moeda");

DEFINE("_EZREALTY_CONFIG_CURRENCYSIGNDESC","S�mbolo da Moeda a mostrar antes do valor dos Im�veis.");

DEFINE("_EZREALTY_CONFIG_BIZINTRO","Introduc��o da Ag�ncia Imobili�ria");

DEFINE("_EZREALTY_CONFIG_BIZINTRODESC","Texto introdut�rio acerca<br />da sua ag�ncia Imobili�ria.");



DEFINE("_EZREALTY_CONFIG_LAYOUTSETTINGS","Administrar a parte p�blica do portal");



DEFINE("_EZREALTY_CONFIG_TPL","Front-end Template");

DEFINE("_EZREALTY_CONFIG_TPLDESC","Escolher the layout you want for the front-end. This currently influences the look of the property Detalhes page and Imprimir Detalhes page.");

DEFINE("_EZREALTY_CONFIG_SELTPL","Escolher Template");



DEFINE("_EZREALTY_CONFIG_PROPPERPAGE","Im�veis por p�gina");

DEFINE("_EZREALTY_CONFIG_PROPPERPAGEDESC","N�mero de Im�veis por p�gina a mostrar no portal p�blico.");

DEFINE("_EZREALTY_CONFIG_RECFRIEND","Recomendar link da proriedade");

DEFINE("_EZREALTY_CONFIG_RECFRIENDDESC","Quer permitir os visitantes a usar \"Recomendar esta propriedade a um amigo\" \"recommend property to friend\" ");

DEFINE("_EZREALTY_CONFIG_MAILINGVIEW","Adicionar ao link da Lista de emails");

DEFINE("_EZREALTY_CONFIG_MAILINGDESC","Quer mostrar  \"Adicionar ao link da Lista de emails\" caixa email? Isto permite aos visitantes enviar autom�ticamente um  email e adicionar o conte�do ao link da Lista de emails.");

DEFINE("_EZREALTY_CONFIG_SHOWLINKS","Mostrar caixa com os links");

DEFINE("_EZREALTY_CONFIG_SHOWLINKSDESC","Quer Mostrar caixa com os links -Exemplo: Esta caixa contem o link do mapa, p�gina a imprimir e adicionar aos favoritos");

DEFINE("_EZREALTY_CONFIG_SC","Distrito");

DEFINE("_EZREALTY_CONFIG_SCDESC","Quer incluir Distrito como filtro na pesquisa avan�ada?");



DEFINE("_EZREALTY_CONFIG_RSS","RSS Feed");

DEFINE("_EZREALTY_CONFIG_RSSDESC","Quer mostrar o link RSS feed das listas dos �ltimos im�veis adicionados assim como listas com  Casa aberta?");

DEFINE("_EZREALTY_CONFIG_RSSNN","Novo nome a dar a RSS Lista Feed ");

DEFINE("_EZREALTY_CONFIG_RSSNNDESC","O que quer chamar a esta nova lista RSS feed?");

DEFINE("_EZREALTY_CONFIG_RSSOH","Nome de RSS Feed  Casa Aberta");

DEFINE("_EZREALTY_CONFIG_RSSOHDESC","O que quer chamar h� lista de RSS feed de Casa Aberta?");



DEFINE("_EZREALTY_CONFIG_LEAD","Refer�ncias de Im�veis");

DEFINE("_EZREALTY_CONFIG_LEADDESC","Gostaria de permitir aos seus visitantes o registo dos requerimentos de Im�veis consigo?");



DEFINE("_EZREALTY_CONFIG_MEMSALES","Administrar parte p�blica das listas de Im�veis por membros registados");

DEFINE("_EZREALTY_CONFIG_MEMLISTINGS","Lista de Membros registados");

DEFINE("_EZREALTY_CONFIG_MEMLISTINGSDESC","Gostaria de permitir a membros registados no portal a listar im�veis h� venda , atravez do painel de listas na parte p�blica do portal?");

DEFINE("_EZREALTY_CONFIG_NOTIFICATION","Notifica��o de Listas");

DEFINE("_EZREALTY_CONFIG_NOTIFICATIONDESC","Gostaria de ser notificado de listas novas/actulizadas?");

DEFINE("_EZREALTY_CONFIG_MEMAPPROVAL","Processo de Aprova��o");

DEFINE("_EZREALTY_CONFIG_MEMAPPROVALDESC","As listas novas ou actualizadas requerem aprova��o antes de serem p�blicadas?");

DEFINE("_EZREALTY_CONFIG_NUMLISTINGS","N�mero de listas");

DEFINE("_EZREALTY_CONFIG_NUMLISTINGSDESC","Quantas listas os membros podem ter?");



DEFINE("_EZREALTY_CONFIG_MEMBERSINTRO","�rea de Introdu��o dos membros");

DEFINE("_EZREALTY_CONFIG_MEMBERSINTRODESC","Escreva texto introdut�rio na area dos membros - exemplo:'Termos das Listas' etc.");

DEFINE("_EZREALTY_CONFIG_TERMS","Termos das Listas");

DEFINE("_EZREALTY_CONFIG_TERMSDESC","Descrever os Termos das Listas do seu Portal.");



DEFINE("_EZREALTY_CONFIG_IMG1","Imagens");

DEFINE("_EZREALTY_CONFIG_IMG2","Defini��es de Imagens");

DEFINE("_EZREALTY_CONFIG_BIZ1","Ag�ncia Imobli�ria");

DEFINE("_EZREALTY_CONFIG_BIZ2","Defini��es da Ag�ncia Imobli�ria");

DEFINE("_EZREALTY_CONFIG_LAY1","Disposi��o");

DEFINE("_EZREALTY_CONFIG_LAY2","Disposi��o do Portal");

DEFINE("_EZREALTY_CONFIG_MEM1","Membros");

DEFINE("_EZREALTY_CONFIG_MEM2","Vendas por Membros");

DEFINE("_EZREALTY_CONFIG_PAID1","Listas pagas");

DEFINE("_EZREALTY_CONFIG_CUST1","Custom");





DEFINE("_EZREALTY_CONFIG_PP","As suas configura��es PayPal para oferecer listas pagas");



DEFINE("_EZREALTY_CONFIG_PAIDLISTINGS","Listas pagas");

DEFINE("_EZREALTY_CONFIG_PAIDLISTINGSDESC","Quer oferecer a possibilidade te ter no portal Listas pagas? Listas pagas permite aos membros adicionar e incluir imagens e conte�do acerca das suas listas.");

DEFINE("_EZREALTY_CONFIG_PPEMAIL","Morada email PayPal");

DEFINE("_EZREALTY_CONFIG_PPEMAILDESC","Esta Morada email PayPal � a principal<br /><br />Visite

<a target='_blank' href='http://paypaltech.com/Stephen/affiliate/hemail.htm'>PayPal Tech Resources</a>

para inserir um m�todo simples de codificar o seu email  PayPal, e proteger the spam, assim copiando/colando  no espa�o em cima

.");

DEFINE("_EZREALTY_CONFIG_CHECKMAIL","CheckMail");

DEFINE("_EZREALTY_CONFIG_CHECKMAILDESC","Repetir  a sua Morada email PayPal como a principal aqui. Isto � usado para verificar a frude em transi��es electr�nicas envolvemdo a morada email PayPal email addresses. ");

DEFINE("_EZREALTY_CONFIG_PPCURRENCY","C�digo de C�mbio");

DEFINE("_EZREALTY_CONFIG_PPCURRENCYDESC","Ter� que ser um c�digo de 3 letras usadas em c�mbios por PayPal para a sua defini��o de c�mbio principal.");

DEFINE("_EZREALTY_CONFIG_PPBUTTON","Imagem But�o");

DEFINE("_EZREALTY_CONFIG_PPBUTTONDESC","Nome da Imagem But�o usada para actulizar as listas noportal. Imagem But�o ter's que permanecer na pasta das imagens principais do portal.");



DEFINE("_EZREALTY_CONFIG_PPPREMIUM","Nome Padr�o da actualiza��o.");

DEFINE("_EZREALTY_CONFIG_PPPREMIUMDESC","Que nome quer dar as listas de actualiza��o - exemplo: Listas Especiais. .");

DEFINE("_EZREALTY_CONFIG_PPCOST","Custo padr�o de actuliza��o");

DEFINE("_EZREALTY_CONFIG_PPCOSTDESC","O Custo padr�o de actuliza��o de listas gratuitas para pagas.");

DEFINE("_EZREALTY_CONFIG_FPNAME","Nome da actualiza��o das listas de Destaque");

DEFINE("_EZREALTY_CONFIG_FPNAMEDESC","Qual o nome que gostaria de dar a Nome da actualiza��o das listas de Destaque.");

DEFINE("_EZREALTY_CONFIG_FPCOST","Destaque Listing Upgrade Cost");

DEFINE("_EZREALTY_CONFIG_FPCOSTDESC","The cost of upgrading a paid property listing to a featured listing. Remember - members cannot upgrade directly from a free listing - they must first upgrade to a standard paid listing.");



DEFINE("_EZREALTY_CONFIG_PPPOSTMODE","Post Mode");

DEFINE("_EZREALTY_CONFIG_PPPOSTMODEDESC","Set to 'Live Sales' to sell real updates via the PayPal system, or test your installation by doing 'Test Sales' via the PayPal Developers Network Sandbox.");

DEFINE("_EZREALTY_CONFIG_LS","Live Sales");

DEFINE("_EZREALTY_CONFIG_TS","Test Sales");



DEFINE("_EZREALTY_CONFIG_SUCCESS","Success Page");

DEFINE("_EZREALTY_CONFIG_SUCCESSDESC","Enter the text for your successful PayPal payment transaction page.");

DEFINE("_EZREALTY_CONFIG_CANCEL","Cancel Page");

DEFINE("_EZREALTY_CONFIG_CANCELDESC","Enter the text for your PayPal transaction cancelled/unsuccessful page.");



DEFINE("_EZREALTY_CONFIG_YES","Sim");

DEFINE("_EZREALTY_CONFIG_NO","N�o");



DEFINE("_EZREALTY_CONFIG_CONFIGSAVED","Configura��es Salvas");



// Miscellaneous administration area language tags - error notices and dropdown list boxes



DEFINE("_EZREALTY_ADMIN_BACK","Regressar ao Painel de Control");

DEFINE("_EZREALTY_ADMIN_SOURCEERROR","ERRO: Ficheiro de Origem n�o foi encontrado!");



// admin.ezrealty.html.php language tags



// Manage property listings page



DEFINE("_EZREALTY_LISTINGS_TITLE","Administrar Lista de Im�veis");

DEFINE("_EZREALTY_LISTINGS_DISPLAYNUM","Mostrar #");

DEFINE("_EZREALTY_LISTINGS_SEARCHPROP","Pesquisa");

DEFINE("_EZREALTY_LISTINGS_FILTER","Filtrar por:-");

DEFINE("_EZREALTY_LISTINGS_SORTLOCALL","-Todas Localidades-");

DEFINE("_EZREALTY_LISTINGS_SORTTYPEALL","-Todos tipos de Im�veis-");

DEFINE("_EZREALTY_LISTINGS_SORTPRICEALL","-Todos os Pre�os-");

DEFINE("_EZREALTY_LISTINGS_PROPID","Agente #");

DEFINE("_EZREALTY_LISTINGS_PROPNAME","Morada");

DEFINE("_EZREALTY_LISTINGS_PROPCAT","Tipo de Im�vel");

DEFINE("_EZREALTY_LISTINGS_PROPPRICE","Valor");

DEFINE("_EZREALTY_LISTINGS_PROPHITS","Hits");

DEFINE("_EZREALTY_LISTINGS_PUBSTATUS","Publicado");

DEFINE("_EZREALTY_LISTINGS_MARKETSTATUS","Vendido?");

DEFINE("_EZREALTY_LISTINGS_APPROVEDSTATUS","Aprovado");

DEFINE("_EZREALTY_LISTINGS_LTYPE","Tipo");

DEFINE("_EZREALTY_LISTINGS_AGENT","Agente");

DEFINE("_EZREALTY_LISTINGS_LISTINGDATE","Data alistada");

DEFINE("_EZREALTY_LISTINGS_UPDATE","�ltima Actualiza��o");

DEFINE("_EZREALTY_LISTINGS_EDIT","Editar Im�vel");

DEFINE("_EZREALTY_LISTINGS_APPROVED","Aprovado");

DEFINE("_EZREALTY_LISTINGS_SELLER","Vendedor");



// Add/edit property details page



DEFINE("_EZREALTY_LISTINGS_SELLER_EXPL","<strong><font color='#AC5702'>Read me!</font></strong><br /><br />Seller Detalhes are used on the site's front-end to allow prospective buyers to 

contact the seller directly for more information or to organize a property inspection.  If you allow your site members 

to list properties for sale, they are required to complete this information.  If you want prospective buyers to contact 

you rather than the property owner - leave this section of information blank.  The normal \"arrange viewing\" email link 

to you will then show up if it has been configured to do so.");



DEFINE("_EZREALTY_DETAILS_REQ","*Obrigat�rio");

DEFINE("_EZREALTY_DETAILS_OPT","*Opcional");

DEFINE("_EZREALTY_DETAILS_TITLE","Lista de Im�veis");

DEFINE("_EZREALTY_DETAILS_MARKET","Estado de Mercado");

DEFINE("_EZREALTY_DETAILS_SOLDDESC"," - Esta Configura��o permite escoler o estado de Mercado do Im�vel 'Por vender / Dispon�vel'.");

DEFINE("_EZREALTY_DETAILS_SELMARKET","Escolher Estado de Mercado");

DEFINE("_EZREALTY_DETAILS_SELLOC","Escolher Localidade");

DEFINE("_EZREALTY_DETAILS_SELSTATE","Escolher Distrito");

DEFINE("_EZREALTY_DETAILS_SELCOUNTRY","Escolher Pa�s");

DEFINE("_EZREALTY_DETAILS_SELCAT","Escolher Categoria Im�vel");

DEFINE("_EZREALTY_DETAILS_SELPRICE","Escolher Varia�ao do Valor");

DEFINE("_EZREALTY_DETAILS_SELROOM","Im�vel n�o tem quartos");

DEFINE("_EZREALTY_DETAILS_LISTDATE","Data da Lista");

DEFINE("_EZREALTY_DETAILS_LISTDATEDESC","Data em que o Im�vel foi alistado para venda.");

DEFINE("_EZREALTY_DETAILS_AGENTID","N�mero �nico do Agente");

DEFINE("_EZREALTY_DETAILS_AGENTIDDESC","Usar isto se tem um n�mero �nico por agente, pois ser� mais f�cil controlar as propriedades por agente.");

DEFINE("_EZREALTY_DETAILS_PROPADDRESS1","Morada 1");

DEFINE("_EZREALTY_DETAILS_PROPCITY","Cidade / Localidade");

DEFINE("_EZREALTY_DETAILS_AREA","Distrito");

DEFINE("_EZREALTY_DETAILS_COUNTRY","Pa�s");

DEFINE("_EZREALTY_DETAILS_PROPPOSTCODE","C�digo Postal");

DEFINE("_EZREALTY_DETAILS_PROPTYPE","Tipo de Im�vel");

DEFINE("_EZREALTY_DETAILS_ADLINE","Slogan Comercial atraente");

DEFINE("_EZREALTY_DETAILS_PROPDESC","Descri��o Completa do Im�vel");

DEFINE("_EZREALTY_DETAILS_SHORTDESC","Descri��o Curta:<br />(max 255 char)");

DEFINE("_EZREALTY_DETAILS_PROPPRICE","Valor do Im�vel");

DEFINE("_EZREALTY_DETAILS_LANDTYPE","Tipo de Im�vel");

DEFINE("_EZREALTY_DETAILS_LANDTYPEDESC","Moradia, 100 acres etc.");

DEFINE("_EZREALTY_DETAILS_BEDROOMS","Quartos");

DEFINE("_EZREALTY_DETAILS_BEDROOMSDESC","O n�mero de quartos do Im�vel � de");

DEFINE("_EZREALTY_DETAILS_BATHROOMS","# REF Propriet�rio");

DEFINE("_EZREALTY_DETAILS_BATHROOMSDESC","O n�mero de Casa de Banho do Im�vel � de");

DEFINE("_EZREALTY_DETAILS_PARKING","Estacionamento");

DEFINE("_EZREALTY_DETAILS_PARKINGDESC","Espa�o para estacionamneto para");

DEFINE("_EZREALTY_DETAILS_MAPREF","Link de para o mapa de ref�ncia do Im�vel");

DEFINE("_EZREALTY_DETAILS_MAPREFDESC","The URL to this property's map reference if used.<br />A free mapping service can be found at multimap.com");

DEFINE("_EZREALTY_DETAILS_VTOUR","Link da p�gina Virtual Tour");

DEFINE("_EZREALTY_DETAILS_VTOURDESC","Se usado vai abrir uma nova janela com a virtual tour.");

DEFINE("_EZREALTY_DETAILS_SAVED","Detalhes do Im�vel Salvos");



DEFINE("_EZREALTY_VLDET_IMAGE1","IMAGEM 1");

DEFINE("_EZREALTY_VLDET_IMAGE2","IMAGEM 2");

DEFINE("_EZREALTY_VLDET_IMAGE3","IMAGEM 3");

DEFINE("_EZREALTY_VLDET_IMAGE4","IMAGEM 4");

DEFINE("_EZREALTY_VLDET_IMAGE5","IMAGEM 5");

DEFINE("_EZREALTY_VLDET_IMAGE6","IMAGEM 6");

DEFINE("_EZREALTY_VLDET_IMAGE7","IMAGEM7");

DEFINE("_EZREALTY_VLDET_IMAGE8","IMAGEM 8");

DEFINE("_EZREALTY_VLDET_IMAGE9","IMAGEM 9");

DEFINE("_EZREALTY_VLDET_IMAGE10","IMAGEM 10");

DEFINE("_EZREALTY_VLDET_IMAGE11","IMAGEM 11");

DEFINE("_EZREALTY_VLDET_IMAGE12","IMAGEM 12");



DEFINE("_EZREALTY_VLDET_CURRENTIMG","Imagem currente");

DEFINE("_EZREALTY_VLDET_CHOOSENEW","Escolher nova imagem");

DEFINE("_EZREALTY_VLDET_UPLOADNEW","Upload nova imagem");

DEFINE("_EZREALTY_VLDET_DELETEIMG","Eliminar imagem");

DEFINE("_EZREALTY_VLDET_DELETE","Eliminar ");

DEFINE("_EZREALTY_VLDET_OPENFULLSIZE","Abrir imagem grande");

DEFINE("_EZREALTY_VLDET_TNPREV","Ver Imagem miniatura");



DEFINE("_EZREALTY_DETAILS_CTOWN","Climatiza��o");

DEFINE("_EZREALTY_DETAILS_CTPORT","Caixilharia");

DEFINE("_EZREALTY_DETAILS_ADDFEATURES","Destaques Adicionais no Im�vel");

DEFINE("_EZREALTY_DETAILS_AGE","Idade do Im�vel");

DEFINE("_EZREALTY_DETAILS_OHOUSE","Comiss�es - Mostrar Sim / N�o");

DEFINE("_EZREALTY_DETAILS_OHOUSEDET","Entrar aqui  Valores de Comiss�o e/ou outra informa��o relativa. Apenas escolher N�o, para n�o ser v�sivel ao P�blico ");



DEFINE("_EZREALTY_DETAILS_APPR","Lista de Im�veis aprovada");

DEFINE("_EZREALTY_DETAILS_PUBL","Publicar listas de Im�veis");

DEFINE("_EZREALTY_DETAILS_LISTSTATUS","Tipo de Lista");

DEFINE("_EZREALTY_DETAILS_FREESTATUS","Lista Gratuita");

DEFINE("_EZREALTY_DETAILS_LISTPREMIUM","Por como Destaque");



DEFINE("_EZREALTY_DETAILS_ERROR1","Im�vel tem que ter morada");

DEFINE("_EZREALTY_DETAILS_ERROR2","Im�vel tem que ter cidade / localidade definida");

DEFINE("_EZREALTY_DETAILS_ERROR3","Tem que Escolher um Distrito");

DEFINE("_EZREALTY_DETAILS_ERROR4","Tem que Escolher um Pa�s");

DEFINE("_EZREALTY_DETAILS_ERROR5","Tem que ter um c�digo postal definido");

DEFINE("_EZREALTY_DETAILS_ERROR6","Tem que Escolher tipo de Im�vel");

DEFINE("_EZREALTY_DETAILS_ERROR7","Im�vel tem que ter # de quartos definido");

DEFINE("_EZREALTY_DETAILS_ERROR8","Tem que entrar valor do Im�vel");

DEFINE("_EZREALTY_DETAILS_ERROR9","Tem que escolher o par�metro de escolha da Varia��o de pre�o");

DEFINE("_EZREALTY_DETAILS_ERROR10","Tem que ter um Slogan de Venda atarente");

DEFINE("_EZREALTY_DETAILS_ERROR11","Tem que entrar uma curta descri��o");

DEFINE("_EZREALTY_DETAILS_ERROR12","Tem que ter pelo menos uma fotografia por Im�vel");



DEFINE("_EZREALTY_DETAILS_TAB1A","Morada");

DEFINE("_EZREALTY_DETAILS_TAB1B","Morada do Im�vel");

DEFINE("_EZREALTY_DETAILS_TAB2A","Destaques");

DEFINE("_EZREALTY_DETAILS_TAB2B","Destaques do Im�vel");

DEFINE("_EZREALTY_DETAILS_TAB3A","Marketing");

DEFINE("_EZREALTY_DETAILS_TAB3B","Informa��o Marketing");

DEFINE("_EZREALTY_DETAILS_TAB4A","Imagens");

DEFINE("_EZREALTY_DETAILS_TAB4B","Imagens do Im�vel");

DEFINE("_EZREALTY_DETAILS_TAB5A","Vendedor");

DEFINE("_EZREALTY_DETAILS_TAB5B","Detalhes do Vendedor");

DEFINE("_EZREALTY_DETAILS_TAB6A","Admin");

DEFINE("_EZREALTY_DETAILS_TAB6B","admin-processing");



DEFINE("_EZREALTY_DETAILS_MARKET2","Sobre Oferta");

DEFINE("_EZREALTY_DETAILS_MARKET3","Sujeito a Contracto");

DEFINE("_EZREALTY_DETAILS_MARKET4","Com a contracto corrente");

DEFINE("_EZREALTY_DETAILS_MARKET5","Vendido");



DEFINE("_EZREALTY_DETAILS_SOURCE1","Motor de Pesquisa");

DEFINE("_EZREALTY_DETAILS_SOURCE2","Web site");

DEFINE("_EZREALTY_DETAILS_SOURCE3","Veio h� nossa Loja");

DEFINE("_EZREALTY_DETAILS_SOURCE4","Rede de propriedades");

DEFINE("_EZREALTY_DETAILS_SOURCE5","Outro - por favor especifique");



// Manage property price range page



DEFINE("_EZREALTY_PRICES_DISPLAYNUM","Mostrar #");

DEFINE("_EZREALTY_PRICES_SEARCHCOM","Pesquisa");

DEFINE("_EZREALTY_PRICES_PUBSTATUS","Publicado");

DEFINE("_EZREALTY_PRICES_REORDER","Re-ordenar");

DEFINE("_EZREALTY_MODPRICES_ADD","Adicionar");

DEFINE("_EZREALTY_MODPRICES_EDIT","Editar");

DEFINE("_EZREALTY_MODPRICES_ORDER","Ordenar");



// Manage property city/town/suburbs



DEFINE("_EZREALTY_LOCALITIES_TITLE","Administrar a lista de Pesquisa/Escolha de Cidades / Localidades ");

DEFINE("_EZREALTY_LOCALITIES_DISPLAYNUM","Mostrar #");

DEFINE("_EZREALTY_LOCALITIES_LOC","Nome Cidade / Localidade");

DEFINE("_EZREALTY_LOCALITIES_PUBSTATUS","Publicado");

DEFINE("_EZREALTY_LOCALITIES_REORDER","Re ordenar");

DEFINE("_EZREALTY_MODLOC_TITLE","Pesquisa/Escolha de Cidades / Localidades item");

DEFINE("_EZREALTY_MODLOC_ADD","Adicionar");

DEFINE("_EZREALTY_MODLOC_EDIT","Editar");

DEFINE("_EZREALTY_MODLOC_LOC","Nome Localidade (cidade, localidade ou freguesia)");

DEFINE("_EZREALTY_MODLOC_ORDER","Ordenar");

DEFINE("_EZREALTY_MODLOC_SAVED","Deatlhes da LocalidadeSalvos");

DEFINE("_EZREALTY_MODLOC_ERROR1","Tem que entrar o nome de Cidade / Localidade etc");

DEFINE("_EZREALTY_LOCALITIES_EDITTAG","Editar Localidade do Im�vel");



// Manage property states/regional areas



DEFINE("_EZREALTY_STATE_TITLE","Administrar a lista area distrito  a pesquisar/Escolher ");

DEFINE("_EZREALTY_STATE_DISPLAYNUM","Mostrar #");

DEFINE("_EZREALTY_STATE_LOC","Distrito Nome");

DEFINE("_EZREALTY_STATE_PUBSTATUS","Publicado");

DEFINE("_EZREALTY_STATE_REORDER","Re ordenar");

DEFINE("_EZREALTY_STATE_TITLE2","Distrito item pesquisar/Escolher ");

DEFINE("_EZREALTY_STATE_ADD","Adicionar");

DEFINE("_EZREALTY_STATE_EDIT","Editar");

DEFINE("_EZREALTY_STATE_ORDER","Ordenar");

DEFINE("_EZREALTY_STATE_SAVED","detalhes de Distrito Salvos");

DEFINE("_EZREALTY_STATE_ERROR1","tem que entrar nome do Distrito");

DEFINE("_EZREALTY_STATE_EDITTAG","Editar Distrito");



// Manage property country areas



DEFINE("_EZREALTY_COUNTRY_TITLE","Manage Pa�s search/Escolher list");

DEFINE("_EZREALTY_COUNTRY_DISPLAYNUM","Display #");

DEFINE("_EZREALTY_COUNTRY_LOC","Pa�s Nome");

DEFINE("_EZREALTY_COUNTRY_PUBSTATUS","Publicado");

DEFINE("_EZREALTY_COUNTRY_REORDER","Reorder");

DEFINE("_EZREALTY_COUNTRY_TITLE2","Pa�s search/Escolher item");

DEFINE("_EZREALTY_COUNTRY_ADD","Adicionar");

DEFINE("_EZREALTY_COUNTRY_EDIT","Editar");

DEFINE("_EZREALTY_COUNTRY_ORDER","Ordenar");

DEFINE("_EZREALTY_COUNTRY_SAVED","Detalhes do Pa�s salvos");

DEFINE("_EZREALTY_COUNTRY_ERROR1","Tem que entrar o nome do Pa�s");

DEFINE("_EZREALTY_COUNTRY_EDITTAG","Editar Pa�s");



// Manage bedroom numbers



DEFINE("_EZREALTY_ROOMS_TITLE","Administrar a Pesquisa/escolha da lista do N�mero de quartos");

DEFINE("_EZREALTY_ROOMS_DISPLAYNUM","Mostrar #");

DEFINE("_EZREALTY_ROOMS_LOC","N�mero de Quartos");

DEFINE("_EZREALTY_ROOMS_PUBSTATUS","Publicado");

DEFINE("_EZREALTY_ROOMS_REORDER","Reordenarr");

DEFINE("_EZREALTY_ROOMS_TITLE2","Bedroom number search/Escolher item");

DEFINE("_EZREALTY_ROOMS_ADD","Adicionar");

DEFINE("_EZREALTY_ROOMS_EDIT","Editar");

DEFINE("_EZREALTY_ROOMS_ORDER","Ordenar");

DEFINE("_EZREALTY_ROOMS_SAVED","Bedroom Number Saved");

DEFINE("_EZREALTY_ROOMS_ERROR1","Tem que entrar n�mero de quartos");

DEFINE("_EZREALTY_ROOMS_EDITTAG","Editar n
umero de quartos Bedroom Number");



// Manage leads list



DEFINE("_EZREALTY_LEADS_TITLE","Administrar lista de Propri�tarios");

DEFINE("_EZREALTY_LEADS_DISPLAYNUM","Mostrar #");

DEFINE("_EZREALTY_LEADS_AR","Adicionar/Rever Data");

DEFINE("_EZREALTY_LEADS_LCONTACT","Detalhes de Contacto");

DEFINE("_EZREALTY_LEADS_LNAME","Nome");

DEFINE("_EZREALTY_LEADS_LEMAIL","Email");

DEFINE("_EZREALTY_LEADS_LLOC","Localidade desejada");

DEFINE("_EZREALTY_LEADS_EDITTAG","Editar/Ver detalhes da angaria��o");

DEFINE("_EZREALTY_LEADS_ADD","Adicionar");

DEFINE("_EZREALTY_LEADS_EDIT","Editar");

DEFINE("_EZREALTY_LEADS_TITLE2","Detalhes dos Propri�tario");

DEFINE("_EZREALTY_LEADS_FMATCH","Encontar Im�vel correspondente");



DEFINE("_EZREALTY_LEADS_HPHONE","Telefone Casa");

DEFINE("_EZREALTY_LEADS_WPHONE","Tel�movel");

DEFINE("_EZREALTY_LEADS_MOBILE","N�mero do bilhete de identidade");

DEFINE("_EZREALTY_LEADS_FAX","N�mero de contribuinte");

DEFINE("_EZREALTY_LEADS_SOURCE","Como nos encontrou");

DEFINE("_EZREALTY_LEADS_COMMENTS","Outras Refer�ncias dos propriet�rios");

DEFINE("_EZREALTY_LEADS_DETAILS","Detalhes do Im�vel");

DEFINE("_EZREALTY_LEADS_BUDGET","Or�amento para compra");



DEFINE("_EZREALTY_LEADS_SAVED","detalhes de angaria��o foram salvos");



DEFINE("_EZREALTY_LEADS_ERROR1","Tem que entrar Nome");



DEFINE("_EZREALTY_LEADS_ERROR2","Tem que entrar uma morada email");

DEFINE("_EZREALTY_LEADS_ERROR3","Tem que entrar tipo de Im�vel");

DEFINE("_EZREALTY_LEADS_ERROR4","Tem que entrar valor");

DEFINE("_EZREALTY_LEADS_ERROR5","Tem que entrar cidade / localidade");

DEFINE("_EZREALTY_LEADS_ERROR6","Tem que entrar # quartos");



// Manage property-type categories



DEFINE("_EZREALTY_CATEGORY_PAGETITLE","Categorias Im�veis");

DEFINE("_EZREALTY_CATEGORY_DISPLAYNUM","Mostrar #");

DEFINE("_EZREALTY_CATEGORY_SEARCHCAT","Pesquisa");

DEFINE("_EZREALTY_CATEGORY_CATNAME","Categoria");

DEFINE("_EZREALTY_CATEGORY_PUBSTATUS","Publicado");

DEFINE("_EZREALTY_CATEGORY_ACCLEVEL","Acesso");

DEFINE("_EZREALTY_CATEGORY_REORDER","Re-ordenar");

DEFINE("_EZREALTY_CATEGORY_MAIN","Categorias Im�veis");

DEFINE("_EZREALTY_CATEGORY_ADD","Adicionar");

DEFINE("_EZREALTY_CATEGORY_EDIT","Editar");

DEFINE("_EZREALTY_CATEGORY_DEFTITLE","Nome");

DEFINE("_EZREALTY_CATEGORY_DEFCONTENT","Descrip��o");

DEFINE("_EZREALTY_CATEGORY_DEFACCESS","Accesso");

DEFINE("_EZREALTY_CATEGORY_DEFORDER","Ordenar");

DEFINE("_EZREALTY_CATEGORY_IMAGE","Imagem Categoria");

DEFINE("_EZREALTY_CATEGORY_IMAGESEL","Escolha de Imagem da categoria");

DEFINE("_EZREALTY_CATEGORY_SAVED","Detalhes Categorias Im�veis salvo.");

DEFINE("_EZREALTY_CATEGORY_ERROR1","Categoria tem que ter um nome");

DEFINE("_EZREALTY_CATEGORY_EDITTAG","Editar a Categor�a Im�vel");



// Manage property-type categories



DEFINE("_EZREALTY_MARKET_PAGETITLE","Manage Market Status Notices");

DEFINE("_EZREALTY_MARKET_DISPLAYNUM","Mostrar #");

DEFINE("_EZREALTY_MARKET_STATUS","Estado Mercado");

DEFINE("_EZREALTY_MARKET_PUBSTATUS","Publicado");

DEFINE("_EZREALTY_MARKET_REORDER","Re-ordenar");

DEFINE("_EZREALTY_MARKET_MAIN","Market Status Notice");

DEFINE("_EZREALTY_MARKET_ADD","Adicionar");

DEFINE("_EZREALTY_MARKET_EDIT","Editar");

DEFINE("_EZREALTY_MARKET_DEFNAME","Nome");

DEFINE("_EZREALTY_MARKET_DEFORDER","Ordenar");

DEFINE("_EZREALTY_MARKET_SAVED","Aviso de Estado de Mercado salvo");

DEFINE("_EZREALTY_MARKET_ERROR1","Aviso de Estado de Mercado tem que ter um nome");



// General error messages



DEFINE("_EZREALTY_GENERAL_ERROR1","Escolher um item para ");

DEFINE("_EZREALTY_CONFIG_ERROR","Configura��o file not writeable! Please assign correct file permissions and try again.");



// Miscellaneous language tags for hyperlinks and image tags



DEFINE("_EZREALTY_GENERAL_PUBLISHED","Publicado");

DEFINE("_EZREALTY_GENERAL_UNPUBLISHED","N�o Publicado");

DEFINE("_EZREALTY_GENERAL_APPROVED","Aprovad0");

DEFINE("_EZREALTY_GENERAL_UNAPPROVED","N�o Aprovado");

DEFINE("_EZREALTY_GENERAL_CHECKOUT","Checked Out");

DEFINE("_EZREALTY_GENERAL_RETURN","Regressar a Configura��es");

DEFINE("_EZREALTY_GENERAL_UP","Ir para cima");

DEFINE("_EZREALTY_GENERAL_DOWN","Ir para baixo");

DEFINE("_EZREALTY_GENERAL_EDITPROP","Editar Im�vel");

DEFINE("_EZREALTY_GENERAL_SOLD","Vendido");

DEFINE("_EZREALTY_GENERAL_CONTRACT","Com Contracto corrente");



DEFINE("_EZREALTY_GENERIC_ADD","Adicionar");

DEFINE("_EZREALTY_GENERIC_EDIT","Editar");



//////////////////// FRONT END FILE LANGUAGE TAGS ///////////////////////



// includes.ezrealty.php file



DEFINE("_EZREALTY_HOME","Home");



// ezrealty.php file



DEFINE("_EZREALTY_BACK","Regressar");

DEFINE("_EZREALTY_INCLUDES_HOME","Home");

DEFINE("_EZREALTY_INCLUDES_SEARCH","Pesquisa");

DEFINE("_EZREALTY_INCLUDES_NEW","Novo");

DEFINE("_EZREALTY_CATEGORIES","Tipos de im�veis");

DEFINE("_EZREALTY_PROPERTIES","im�veis");

DEFINE("_EZREALTY_PROPERTY","Im�vel");

DEFINE("_EZREALTY_INCLUDES_RSSOH","Listas de Casa Aberta");

DEFINE("_EZREALTY_INCLUDES_POSTMAIL","Muito Obrigado - Pode fecahr a janela.");



// category display



DEFINE("_EZREALTY_PAGES","Paginas");

DEFINE("_EZREALTY_PREV","Ant");

DEFINE("_EZREALTY_NEXT","Seguinte");

DEFINE("_EZREALTY_READMORE","Ler mais");

DEFINE("_EZREALTY_VIEWPROP","Ver im�veis");



// send to friend and arrange viewing forms



DEFINE("_EZREALTY_INVITE_VIEW_PROP","has invited you to view a property listed for sale. Please use the link below to view it.");

DEFINE("_EZREALTY_RECCOMEND_PROP_FROM_FREND"," A recommended Im�vel from your friend");

DEFINE("_EZREALTY_FROM","From");

DEFINE("_EZREALTY_REPLYTO","Reply-To");

DEFINE("_EZREALTY_MAIL_SENT","Thankyou! Your property recommendation has been sent...");

DEFINE("_EZREALTY_MAIL_VIEWINGSENT","Thankyou! Your request for a property inspection has been sent...");

DEFINE("_EZREALTY_INSPECTION"," Im�vel Inspection Request");

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

DEFINE("_EZREALTY_PROPGONE","The property you are looking for no longer exists, or is is not yet Publicado for listing!");

DEFINE("_EZREALTY_VIEWDET_PROPDET","Detalhes do Im�vel");

DEFINE("_EZREALTY_VIEWDET_MAP","Ver mapa");

DEFINE("_EZREALTY_VIEWDET_TOUR","Tour");

DEFINE("_EZREALTY_VIEWDET_VTOUR","Ver virtual tour");

DEFINE("_EZREALTY_VIEWDET_PRINT","Imprimir esta P�gina");

DEFINE("_EZREALTY_VIEWDET_FAVS","Adicionar aos favoritos");

DEFINE("_EZREALTY_VIEWDET_VIEWING","Arrange Viewing");

DEFINE("_EZREALTY_VIEWDET_VNAME","Seu Nome");

DEFINE("_EZREALTY_VIEWDET_VMAIL","Seu Email");

DEFINE("_EZREALTY_VIEWDET_VPHONE","SeuTelefone");

DEFINE("_EZREALTY_VIEWDET_VTIME","hora e data preferida");

DEFINE("_EZREALTY_VIEWDET_SEND","Enviar");

DEFINE("_EZREALTY_VIEWDET_SEND_FRIEND","Enviar Amigo/a");

DEFINE("_EZREALTY_VIEWDET_YOUR_NAME","Seu Nome");

DEFINE("_EZREALTY_VIEWDET_YOUR_MAIL","Seu Email");

DEFINE("_EZREALTY_VIEWDET_FRIENDS_NAME","Nome seu/sua Amigo/a");

DEFINE("_EZREALTY_VIEWDET_FRIENDS_MAIL","Morada Email seu/sua Amigo/a");

DEFINE("_EZREALTY_VIEWDET_APPROX","aprox.");

DEFINE("_EZREALTY_VIEWDET_LINKS","Links de Clientes");

DEFINE("_EZREALTY_VIEWDET_FPLANS","Planos do Im�vel");

DEFINE("_EZREALTY_VIEWDET_MAILING","Aderir Lista de Emails");

DEFINE("_EZREALTY_VIEWDET_MAILING_SPEIL","Im�vel listings are always being updated. Keep yourself informed!");

DEFINE("_EZREALTY_VIEWDET_INTERESTS","Estou interessado/a nas seguintes propiedades");

DEFINE("_EZREALTY_VIEWDET_LOCALITY","Localidade");

DEFINE("_EZREALTY_VIEWDET_LAND","tipo de Im�vel");

DEFINE("_EZREALTY_VIEWDET_BEDROOM","Quarto");

DEFINE("_EZREALTY_VIEWDET_BEDROOMS","Quartos");

DEFINE("_EZREALTY_VIEWDET_BATHROOM","Casa de Banho");

DEFINE("_EZREALTY_VIEWDET_BATHROOMS","Casas de Banho");

DEFINE("_EZREALTY_VIEWDET_PARKING","Estacionamneto para");

DEFINE("_EZREALTY_VIEWDET_PARKING2","Estacionamneto");

DEFINE("_EZREALTY_VIEWDET_GALLERY","Galeria de Imagens");

DEFINE("_EZREALTY_VIEWDET_SOLD","Vendido");

DEFINE("_EZREALTY_VIEWDET_CONTRACT","Sobre contracto");

DEFINE("_EZREALTY_VIEWDET_REGISTER","Registar");



DEFINE("_EZREALTY_VIEWDET_PRICE","Pre�o");

DEFINE("_EZREALTY_VIEWDET_EXTRA","Caracter�sticas");

DEFINE("_EZREALTY_VIEWDET_YES","Sim");

DEFINE("_EZREALTY_VIEWDET_NO","N�o");

DEFINE("_EZREALTY_VIEWDET_LOCATION","Localiza��o");

DEFINE("_EZREALTY_VIEWDET_TOWN","Closest town");

DEFINE("_EZREALTY_VIEWDET_TPORT","Transport");

DEFINE("_EZREALTY_VIEWDET_AGE","Idade do Im�vel");



DEFINE("_EZREALTY_VIEWDET_PSELLERS","Vendedores");

DEFINE("_EZREALTY_VIEWDET_SELLER","vendedorr");

DEFINE("_EZREALTY_VIEWDET_SELLER_PHONE","Contact #");

DEFINE("_EZREALTY_VIEWDET_SELLER_ARRANGE","Ver Im�vel");

DEFINE("_EZREALTY_VIEWDET_SELLER_VIEWING","Arrangar uma inspe��o com o Vendedor");



DEFINE("_EZREALTY_PIX_HOVER","To change image, hover mouse over thumbnails below");



// search.ezrealty.php file



DEFINE("_EZREALTY_SEARCHPRICE","Varia��o de Pre�o");

DEFINE("_EZREALTY_SEARCHPROPTYPE","Tipo de Im�vel");

DEFINE("_EZREALTY_SEARCHLOC","Localidade");

DEFINE("_EZREALTY_SEARCHSUB","Freguesia");

DEFINE("_EZREALTY_SEARCHREG","Distrito");

DEFINE("_EZREALTY_SEARCHCON","Pa�s");

DEFINE("_EZREALTY_SEARCHBRM","Quartos");

DEFINE("_EZREALTY_SEARCHORD","Order");

DEFINE("_EZREALTY_SEARCHADV","Filtro de pesquisa avan�ada");

DEFINE("_EZREALTY_SEARCH_SEARCH","Pesquisa");



DEFINE("_EZREALTY_SEARCH_ALCAT","Escolher todas Categorias");

DEFINE("_EZREALTY_SEARCH_ALLOC","Escolher todas Localidades");

DEFINE("_EZREALTY_SEARCH_ALSTA","Escolher Todos Distritos");

DEFINE("_EZREALTY_SEARCH_ALCOU","Escolher Todos Pa�ses");

DEFINE("_EZREALTY_SEARCH_MINPRI","Escolher Pre�o Min");

DEFINE("_EZREALTY_SEARCH_MAXPRI","Escolher Pre�o Max");

DEFINE("_EZREALTY_SEARCH_MINBED","Escolher Min Quartos");

DEFINE("_EZREALTY_SEARCH_MAXBED","Escolher Max Quartos");

DEFINE("_EZREALTY_SEARCH_ONLYAV","Im�veis D�spon�veis");

DEFINE("_EZREALTY_SEARCH_PRIASC","Pre�o Ascendente");

DEFINE("_EZREALTY_SEARCH_PRIDESC","Pre�o Descendente");

DEFINE("_EZREALTY_SEARCH_ASC","Data Ascendente");

DEFINE("_EZREALTY_SEARCH_DESC","Data Descendente");



// results.ezrealty.php file



DEFINE("_EZREALTY_RESULTSL_SELECT","Por favor selecionne os par�metro de escolha!");

DEFINE("_EZREALTY_RESULTS_RESULTS","Resultados:-");

DEFINE("_EZREALTY_RESULTS_NORESULTS","Pedimos Desculpa , mas n�o foram encontrados Resultados..");

DEFINE("_EZREALTY_RESULTS_NEW","�ltimas");

DEFINE("_EZREALTY_RESULTS_NEWLISTINGS","Lista de Im�veis recentes");



// printdetails.ezrealty.php file



DEFINE("_EZREALTY_PRINT_ID","Im�vel #");

DEFINE("_EZREALTY_PRINT_TELEPHONE","Telefone:");

DEFINE("_EZREALTY_PRINT_PRINT","Imprimir Ecr�");

DEFINE("_EZREALTY_PRINT_CLOSE","Fechar Janela");



// submit lead stuff



DEFINE("_EZREALTY_SUBLEAD_TITLE","Enviar Requerimentos do Im�vel");

DEFINE("_EZREALTY_SUBLEAD_INTRO","Est�o sempre a chegar im�veis novos ao mercado. Se n�o encontra o que procura neste momento, porque n�o registar os requerimentos de Im�vel que procura connosco. Teremos o prazer de notificar quando algo correspondente ao que procura aparecer d�sponivel no mercado.

");

DEFINE("_EZREALTY_SUBLEAD_THANKS","Obrigado - Os requerimentos do Im�vel foram enviados.");

DEFINE("_EZREALTY_SUBLEAD_CONTACT","Seus detalhes de Contacto");

DEFINE("_EZREALTY_SUBLEAD_NOTON","Pedimos Desculpa, mas de momento n�o estamos a aceitar refer�ncias de Im�veis");



DEFINE("_EZREALTY_LM_ERROR1","Por favor entre o seu  Nome");

DEFINE("_EZREALTY_LM_ERROR2","Por favor entre o sua Morada email");

DEFINE("_EZREALTY_LM_ERROR3","Por favor e Escolher a categoria");

DEFINE("_EZREALTY_LM_ERROR4","Por favor Escolher a varia��o de pre�o");

DEFINE("_EZREALTY_LM_ERROR5","Por favor Escolher a Cidade / Localidade");

DEFINE("_EZREALTY_LM_ERROR6","Por favor Escolher n�mero aproximado de quartos");



DEFINE("_EZREALTY_EMAIL_ERROR1","Por favor inclua o seu Nome");

DEFINE("_EZREALTY_EMAIL_ERROR2","Por favor inclua o sua Morada email");

DEFINE("_EZREALTY_EMAIL_ERROR3","Por favor inclua o seu  Telefone");

DEFINE("_EZREALTY_EMAIL_ERROR4","Por favor inclua suas perguntas");

DEFINE("_EZREALTY_EMAIL_ERROR5","Por favor inclua  nome do/a amigo/a");

DEFINE("_EZREALTY_EMAIL_ERROR6","Por favor inclua  email do/a amigo/a");

DEFINE("_EZREALTY_EMAIL_ERROR7","Por favor inclua alguns dos seus interesses");

DEFINE("_EZREALTY_EMAIL_ERROR8","Pedimos Desculpa- Essa caracter�stica de emal, n�o se encontra d�sponivel de momento");

DEFINE("_EZREALTY_EMAIL_ERROR9","Por favor entre entre um per�odo de tempo para ver");



// front-end member stuff



DEFINE("_EZREALTY_LISTINGS_INTRO","You may have the following number of FREE listings for sale");

DEFINE("_EZREALTY_NOLISTINGS","You have no current listings");

DEFINE("_EZREALTY_ADDNEW","Add new listing");

DEFINE("_EZREALTY_SUBMIT_LISTING","Submit Listing");

DEFINE("_EZREALTY_NO_LOGIN","Sorry - but you need to login first");

DEFINE("_EZREALTY_MAX_NUM","Sorry - you have reached the maximum of");

DEFINE("_EZREALTY_MAXNUM_LIST","listings");

DEFINE("_EZREALTY_YOUVEGOTMAIL","New Im�vel Listing");

DEFINE("_EZREALTY_DONE","Image upload and property listing successful!");

DEFINE("_EZREALTY_UPDATEDONE","You have successfully updated your listing!");

DEFINE("_EZREALTY_NO_EDIT","Sorry - you're not allowed to edit this listing");

DEFINE("_EZREALTY_NODELETE","You are not allowed to Eliminar  this listing");

DEFINE("_EZREALTY_CHECKDELETE","Are you sure you want to Eliminar  this property listing?");

DEFINE("_EZREALTY_DELETE_LISTING","Eliminar  Listas");

DEFINE("_EZREALTY_LISTINGS_PREVIEW","Preview Listing");

DEFINE("_EZREALTY_DELIMGOOPS","Could not Eliminar  the image file");

DEFINE("_EZREALTY_LISTING_DELETED","Im�vel listing Eliminar d successfully");

DEFINE("_EZREALTY_LISTING_TERMS","Termos de Listagem");

DEFINE("_EZREALTY_PREVIEW_LISTING","Your Im�vel Listing Preview");



DEFINE("_EZREALTY_MEMBERS_ADDRESS","Address");

DEFINE("_EZREALTY_MEMBERS_HITS","Hits");

DEFINE("_EZREALTY_MEMBERS_ACTION","Action");

DEFINE("_EZREALTY_MEMBERS_STATUS","Publicado");

DEFINE("_EZREALTY_MEMBERS_UPGRADE","Upgrade");

DEFINE("_EZREALTY_MEMBERS_MAKEFEAT","Make Destaque");

DEFINE("_EZREALTY_MEMBERS_SELLERDET","Detalhes do Vendedor");



DEFINE("_EZREALTY_LISTING1","Detalhes de Conatcto do vendedor");

DEFINE("_EZREALTY_LISTING2","Nome de contacto");

DEFINE("_EZREALTY_LISTING3","Contacto Telefone");

DEFINE("_EZREALTY_LISTING4","Morada Email");

DEFINE("_EZREALTY_LISTING5","Morada do Im�vel h� venda");

DEFINE("_EZREALTY_LISTING6","Detalhes do Im�vel");

DEFINE("_EZREALTY_LISTING7","Features at a glance");

DEFINE("_EZREALTY_LISTING8","Im�vel Marketing details");

DEFINE("_EZREALTY_LISTING9","Adicionar Detalhes Im�vel");

DEFINE("_EZREALTY_LISTING10","Editar Detalhes Im�vel");

DEFINE("_EZREALTY_LISTING11","Seller's location");

DEFINE("_EZREALTY_LISTING12","Images");

DEFINE("_EZREALTY_LISTING_IMGDELETED","Image deleted");

DEFINE("_EZREALTY_LISTING_RESTRICTED","**This information is not available for free listings**");



DEFINE("_EZREALTY_SELLER_ERROR1","You must include a contact Nome");

DEFINE("_EZREALTY_SELLER_ERROR2","You must include a contact Telefone number");

DEFINE("_EZREALTY_SELLER_ERROR3","You must include a contact email address");

DEFINE("_EZREALTY_SELLER_ERROR4","You must include your location");



DEFINE("_EZREALTY_SELLER_N","Nome");

DEFINE("_EZREALTY_SELLER_T","Telefone");

DEFINE("_EZREALTY_SELLER_E","Email");

DEFINE("_EZREALTY_SELLER_L","Location");

DEFINE("_EZREALTY_SELLER_C","Contact");



DEFINE("_EZREALTY_NOCATLISTINGS","Sorry - there are no listings in this category");



DEFINE("_EZREALTY_IPN_SUBJECT","Listing Upgraded to");

DEFINE("_EZREALTY_IPN_MSG1","A site member has just upgraded their listing to");

DEFINE("_EZREALTY_IPN_MSG2","Purchaser details:-");

DEFINE("_EZREALTY_IPN_MSG3","Im�vel ID#");



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

DEFINE("_EZREALTY_BEDROOMS_EXPL","Use whole numbers from 1 upwards, as the 0 is already defined in the drop-down box code for use in instances where bedrooms are N�o � aplic�vel.");

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

DEFINE("_EZREALTY_PROFILER_CBPROFILE","Ver Perfil");









// NEW TAGS THAT WERE ADDED AFTER THE 3.3.0 VERSION





DEFINE("_EZREALTY_CLICK_OPEN","Click to open");









// NEW TAGS THAT WERE ADDED FOR THE 4.0.0 RELEASE



DEFINE("_EZREALTY_CONFIG_FREEPIC","Free Listing Images");

DEFINE("_EZREALTY_CONFIG_FREEPICDESC","If you have free and paid listings for your members, do you want free listings to be able to show an image? If you Escolher 'NO' just a placeholder will be displayed, which may encourage more paid listings. If you Escolher 'YES' - free listings will only be able to have one image. This will not affect listings if you're ONLY running in free listings mode - members can have 12 images when run in this mode.");

DEFINE("_EZREALTY_CONFIG_PAIDOPT1","FREE with option to UPGRADE");

DEFINE("_EZREALTY_CONFIG_PAIDOPT2","PAID listings ONLY");

DEFINE("_EZREALTY_CONFIG_PAIDONLY","Payment Choices");

DEFINE("_EZREALTY_CONFIG_PAIDONLYDESC","If offering paid listings - do you want to offer FREE listings with the option to upgrade - OR ONLY paid listings.");



DEFINE("_EZREALTY_CONFIG_LEVEL1","Paid Listing Level 1 Nome");

DEFINE("_EZREALTY_CONFIG_LEVEL1DESC","What would you like to call your listing upgrades - eg. Premium/Enhanced Listing etc. This will appear as the Item Nome in button code and PayPal transaction reports.");

DEFINE("_EZREALTY_CONFIG_LEVEL1COST","Paid Listing Level 1 Cost");

DEFINE("_EZREALTY_CONFIG_LEVEL1COSTDESC","The cost of upgrading a free property listing to a paid listing.");



DEFINE("_EZREALTY_CONFIG_LEVEL2","Paid Listing Level 2 Nome");

DEFINE("_EZREALTY_CONFIG_LEVEL2DESC","What would you like to call your listing upgrades - eg. Premium/Enhanced Listing etc. This will appear as the Item Nome in button code and PayPal transaction reports.");

DEFINE("_EZREALTY_CONFIG_LEVEL2COST","Paid Listing Level 2 Cost");

DEFINE("_EZREALTY_CONFIG_LEVEL2COSTDESC","The cost of purchasing/upgrading.");



DEFINE("_EZREALTY_DETAILS_TAB7A","Metatags");

DEFINE("_EZREALTY_DETAILS_METADESC","Descri��o");

DEFINE("_EZREALTY_DETAILS_METAKEYS","Keywords");

DEFINE("_EZREALTY_FEND_BUYNOW","Purchase a 'Destaque Listing' first and you don't have to pay the initial 'Premium Listing' fee.");

DEFINE("_EZREALTY_FEND_BUYNOW2","Upgrade to a 'Destaque Listing' first and you don't have to pay the initial 'Premium Listing' fee.");

DEFINE("_EZREALTY_UPGRADE","Upgrade");

DEFINE("_EZREALTY_CHECK_LOC","Check Localidades");

DEFINE("_EZREALTY_CHECK_STATE","Check Distritos");

DEFINE("_EZREALTY_CHECK_COUNTRY","Check Countries");

DEFINE("_EZREALTY_CHECK_AVAIL","Check Availability");

DEFINE("_EZREALTY_CHECK_SUBMIT","Submit New");

DEFINE("_EZREALTY_CHECK_GO","Go");

DEFINE("_EZREALTY_CHECK_REFRESH","<strong><br /><br />Refresh the screen after closing this window - then you'll see the new entry.</strong>");



DEFINE("_EZREALTY_CONFIG_SELFENTRY","Front-end Additions");

DEFINE("_EZREALTY_CONFIG_SELFENTRYDESC","Do you want to allow site members access to add new Localidades, Distritos and countries themselves. When allowing this - these Localidades, Distritos and countries will be automatically Publicado to allow access when creating their property listing.");

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



DEFINE("_EZREALTY_LISTING_SELECTTYPE","Escolher Tipo");

DEFINE("_EZREALTY_TYPE_SALE","Venda");

DEFINE("_EZREALTY_TYPE_RENTAL","Arrendamento");

DEFINE("_EZREALTY_LISTING_TYPE","Tipo de Lista");

DEFINE("_EZREALTY_LISTING_ANYTYPE","Qualquer Lista");

DEFINE("_EZREALTY_RENTAL_FREQUENCY","Frequ�ncia de Aluguer");

DEFINE("_EZREALTY_RENTAL_NA","N�o � aplic�vel");

DEFINE("_EZREALTY_RENTAL_NIGHTLY","Por noite");

DEFINE("_EZREALTY_RENTAL_WEEKLY","Por semana");

DEFINE("_EZREALTY_RENTAL_FNIGHT","Per fortnight");

DEFINE("_EZREALTY_RENTAL_MONTH","Por m�s");

DEFINE("_EZREALTY_RENTAL_SQFT","Per p� quadrado");

DEFINE("_EZREALTY_RENTAL_SQMTR","Per metro quadrado");

DEFINE("_EZREALTY_RENTAL_SPARE","Entrada separada");





// TAGS THAT HAD THEIR LANGUAGE CONTENT CHANGED FOR THE 4.1.0 RELEASE





DEFINE("_EZREALTY_DETAILS_MARKET1","Vender");





// NEW TAGS FOR THE 4.2.0 RELEASE



DEFINE("_EZREALTY_CONFIG_MOBILE","Mobile phone #");

DEFINE("_EZREALTY_CONFIG_MOBILEDESC","This will be used for the SMS contact form if you don't allow site members to list, or if you also list properties. It MUST be in the international number format:- Country Code, Network prefix without the leading '0' and Number - no spaces, only numerals. If you DON'T want to use SMS contacts for your own listings - leave these details blank.");



DEFINE("_EZREALTY_SELLER_SMS1","SMS #");

DEFINE("_EZREALTY_SELLER_SMS2","SMS me!");

DEFINE("_EZREALTY_SELLER_SMS3","NOTE: Before using this, You need to have an active");

DEFINE("_EZREALTY_SELLER_SMS4","account! You also need to set up a HTTP API via your Clickatell control panel.");

DEFINE("_EZREALTY_SELLER_SMS5","S� n�meros.");

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

DEFINE("_EZREALTY_SELLER_SMS27","Make sure your Clickatell details have been set in the EZ Realty Configura��o settings area BEFORE sending an SMS!!");



DEFINE("_EZREALTY_SELLER_SMS7DESC","This must be your Clickatell Central API account username.");

DEFINE("_EZREALTY_SELLER_SMS8DESC","This must be your Clickatell Central API account password");

DEFINE("_EZREALTY_SELLER_SMS19DESC","This must be your Clickatell Central API account HTTP API ID#. Create your API ID# via your Clickatell control panel.");





DEFINE("_EZREALTY_CONFIG_TEXTBOX","Text box width");

DEFINE("_EZREALTY_CONFIG_TEXTBOXDESC","The width of the larger text boxes in the front-end add/edit property details form. This width helps to reduce template distortion.");

DEFINE("_EZREALTY_CONFIG_TEXTAREA","Text area width");

DEFINE("_EZREALTY_CONFIG_TEXTAREADESC","The width of the text areas in the front-end add/edit property details form. This width helps to reduce template distortion.");

DEFINE("_EZREALTY_TYPE_LEASE","Trespasse");

DEFINE("_EZREALTY_IMAGE_WARNING","<strong><font color='#AC5702'>Formato das imagens s�mente jpg's ou png's!!</font></strong>");

DEFINE("_EZREALTY_IMAGE_WARNING2","One or more of your images exceed the allowed image height or width!!");



DEFINE("_EZREALTY_CONFIG_OHOUSE","Open House Link");

DEFINE("_EZREALTY_CONFIG_OHOUSEDESC","Do you want to show the 'Listas de Casa Aberta' link?");

DEFINE("_EZREALTY_CONFIG_MAXWIDTH","Largura M�xima de imagem");

DEFINE("_EZREALTY_CONFIG_MAXWIDTHDESC","Qual a largura m�xima das imagens para upload?");

DEFINE("_EZREALTY_CONFIG_MAXHEIGHT","Altura M�xima de imagem");

DEFINE("_EZREALTY_CONFIG_MAXHEIGHTDESC","Qual a altura m�xima das imagens para upload?");



DEFINE("_EZREALTY_PIXELS","pixels");

DEFINE("_EZREALTY_BEDBATH","Quarto/Casa de Banho");

DEFINE("_EZREALTY_BUDGET","Budget");

DEFINE("_EZREALTY_INTERESTED","Interessado?");

DEFINE("_EZREALTY_WANTED","Procura-se");

DEFINE("_EZREALTY_PROPERTIES_WANTED","Im�veis que se procuram");

DEFINE("_EZREALTY_PROPERTIES_WANTEDDESC","Temos clientes interessados no seguinte");



DEFINE("_EZREALTY_LEAD_RESPONSE"," Sales Lead Response");

DEFINE("_EZREALTY_RESPONS_PROPLEAD","may have a property for a sales lead you have listed. Lead ID# is:-");

DEFINE("_EZREALTY_LEAD_RESPONSEERROR"," You must include a short message");

DEFINE("_EZREALTY_CONFIG_COUNTRY","Usar Pa�ses");



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



DEFINE("_EZREALTY_CONFIG_FORMATTING","Formatar");

DEFINE("_EZREALTY_CONFIG_MAPPING","Configura��es do Mapa");

DEFINE("_EZREALTY_CONFIG_MAPWIDTH","Largura do mapa");

DEFINE("_EZREALTY_CONFIG_MAPWIDTHDESC","The width of the map on your site's front-end expressed in pixels.");

DEFINE("_EZREALTY_CONFIG_MAPHEIGHT","Altua do Mapa");

DEFINE("_EZREALTY_CONFIG_MAPHEIGHTDESC","The height of the map on your site's front-end expressed in pixels.");

DEFINE("_EZREALTY_CONFIG_ADDRESSWIDTH","Address Box Width");

DEFINE("_EZREALTY_CONFIG_ADDRESSWIDTHDESC","The width of the text box above the map that displays the property address.");

DEFINE("_EZREALTY_PROPERTY_MAPLOC","Localiza��o (Mapa)");

DEFINE("_EZREALTY_SEARCH_ALLPOSTCODES","Escolher todos C�digos Postais");









// TAGS THAT HAD THEIR LANGUAGE CONTENT CHANGED FOR THE 4.2.0 RELEASE





DEFINE("_EZREALTY_CONFIG_NEWLIST","Special property listing pages");

DEFINE("_EZREALTY_CONFIG_NEWLISTDESC","Number of properties to list on the 'New Listings', 'Listas de Casa Aberta', 'Properties Wanted' and 'RSS feed' page");





// NEW LANGUAGE TAGS FOR THE *** 4.2.0 STABLE *** RELEASE





DEFINE("_EZREALTY_ERROR_DUPLICATE","ERROR - duplicate entry!!");

DEFINE("_EZREALTY_OPENHOUSE_DETAILS","OpenHouse details");







// NEW LANGUAGE TAGS FOR THE *** 5.0.0 STABLE *** RELEASE





DEFINE("_EZREALTY_CPANEL","Painel de Control");



DEFINE("_EZREALTY_CPANEL_VMGR","Vehicle Manager");

DEFINE("_EZREALTY_CPANEL_MGCAT","Categorias");

DEFINE("_EZREALTY_CPANEL_MGVEHMAKE","Manage Vehicle Makes");

DEFINE("_EZREALTY_CPANEL_MGVEHMOD","Manage Vehicle Models");

DEFINE("_EZREALTY_CPANEL_MGENG","Manage Engine Size List");

DEFINE("_EZREALTY_CPANEL_MGPRICE","Lista de Pre�os");

DEFINE("_EZREALTY_CPANEL_PROFMGR","Agentes");

DEFINE("_EZREALTY_CPANEL_MGSALES","Propriet�rios");

DEFINE("_EZREALTY_CPANEL_SENDALERT","Envia Email Alerta");

DEFINE("_EZREALTY_CPANEL_CLEANLIST","Limpar Listas");

DEFINE("_EZREALTY_CPANEL_UPGRADE","Actualizar B. Dados");

DEFINE("_EZREALTY_CPANEL_HELP","Ajuda");

DEFINE("_EZREALTY_CPANEL_MIGRATE","Migrar Usu�rios");

DEFINE("_EZREALTY_CPANEL_CONFIG","Configura��es");

DEFINE("_EZREALTY_CPANEL_INTRO","Introduc��o");

DEFINE("_EZREALTY_CPANEL_OPTIMIZE","Optimizar Tabelas");







DEFINE("_EZREALTY_PROFILE_DSDET","Detalhes de Contacto");

DEFINE("_EZREALTY_PROFILE_MANAGE","Gerir Perfil Agente / Vendedor ");

DEFINE("_EZREALTY_PROFILE_IMAGE","Imagem Perfil ");

DEFINE("_EZREALTY_PROFILE_NAME","Nome Agente / Vendedor");

DEFINE("_EZREALTY_PROFILE_NUMPROPS","N�mero de Listas");

DEFINE("_EZREALTY_PROFILE_COMPANY","Companhia");

DEFINE("_EZREALTY_PROFILE_EDIT","Editar Vendedor");

DEFINE("_EZREALTY_PROFILE_LINK","Ligar com membro existente");

DEFINE("_EZREALTY_PROFILE_TYPE4","Tipo de Vendedor");

DEFINE("_EZREALTY_PROFILE_INTRO","Introdu��o Pessoal<br />255 char max");

DEFINE("_EZREALTY_PROFILE_ADDRESS1","# Rua");

DEFINE("_EZREALTY_PROFILE_ADDRESS2","Nome da Rua");

DEFINE("_EZREALTY_PROFILE_LOCALITY","Localidade");

DEFINE("_EZREALTY_PROFILE_PCODE","C�digo Postal");

DEFINE("_EZREALTY_PROFILE_STATE","Distrito");

DEFINE("_EZREALTY_PROFILE_COUNTRY","Pa�s");

DEFINE("_EZREALTY_PROFILE_EMAIL","Email");

DEFINE("_EZREALTY_PROFILE_PHONE","Telefone");

DEFINE("_EZREALTY_PROFILE_FAX","Fax");

DEFINE("_EZREALTY_PROFILE_MOBILE","# T�lem�vel");

DEFINE("_EZREALTY_PROFILE_SMS","International Mobile #");

DEFINE("_EZREALTY_PROFILE_ALLOWSMS","Allow SMS contact");

DEFINE("_EZREALTY_PROFILE_WEB","Web Site URL");

DEFINE("_EZREALTY_PROFILE_BLOG","Blog Site URL");

DEFINE("_EZREALTY_PROFILE_MSN","MSN Username");

DEFINE("_EZREALTY_PROFILE_SKYPE","Skype Username");

DEFINE("_EZREALTY_PROFILE_YAHOO","Yahoo Username");

DEFINE("_EZREALTY_PROFILE_ICQ","ICQ Username");

DEFINE("_EZREALTY_PROFILE_APPROVE","Prefil Aprovado");

DEFINE("_EZREALTY_PROFILE_DETAILS"," Detalhes Agente / Vendedor Perfil");

DEFINE("_EZREALTY_PROFILE_SAVE","Salvar/Actualizar Perfil");

DEFINE("_EZREALTY_PROFILE_PROFILE","Meu Perfil");

DEFINE("_EZREALTY_PROFILE_TYPE1","Escolher estado vendedor");

DEFINE("_EZREALTY_PROFILE_SAVED","Detalhes Perfil Salvos");

DEFINE("_EZREALTY_PROFILE_SEARCHALL","Pesquisar todas Localidades");

DEFINE("_EZREALTY_PROFILE_AGSELLERS","Os Nossos Agentes");

DEFINE("_EZREALTY_PROFILE_NOPROFILES","There are no Perfils currently listed");

DEFINE("_EZREALTY_PROFILE_FINDDEALER","Encontrar um agente na sua �rea");

DEFINE("_EZREALTY_PROFILE_AGLINK","Encontrar Agente");

DEFINE("_EZREALTY_PROFILE_MOBILE2","T�lem�vel");

DEFINE("_EZREALTY_PROFILE_TEXT","Text message");

DEFINE("_EZREALTY_AGENT_CURRENTLISTINGS","Listas Currentes");

DEFINE("_EZREALTY_AGENT_MYLISTINGS","Ver minhas Listas");

DEFINE("_EZREALTY_AGENT_LISTINGSFOR","Listas por:-");

DEFINE("_EZREALTY_DEALER_NOLISTINGS","There are no listings associated with this Perfil");

DEFINE("_EZREALTY_PROFILE_SENDCONTACT","Contactar este Agente / Vendedor");

DEFINE("_EZREALTY_PROFILE_SMSCONTACT","Send SMS via Clickatell to this Agente / Vendedor");

DEFINE("_EZREALTY_ERROR_NOPROFILE","ATTENTION - You must create your Perfil before being able to add/edit property listings!! Please click the 'My Perfil' link above to do this.");



DEFINE("_EZREALTY_CONFIG_CURRENCYPOS","Posi��o");

DEFINE("_EZREALTY_CONFIG_CURRENCYPOS_DESC","You may define whether to display the currency sign before or after the price");

DEFINE("_EZREALTY_CONFIG_CURRENCYFORMAT","Formato");

DEFINE("_EZREALTY_CONFIG_CURRENCYFORMAT_DESC","You may define whether to display the currency in a Coordenadas or european format");

DEFINE("_EZREALTY_CONFIG_BEFORE","Antes");

DEFINE("_EZREALTY_CONFIG_AFTER","Depois");

DEFINE("_EZREALTY_CONFIG_Coordenadas","Coordenadas");

DEFINE("_EZREALTY_CONFIG_EUROPEAN","European");

DEFINE("_EZREALTY_CONFIG_MAPTYPE1","Google maps");

DEFINE("_EZREALTY_CONFIG_MAPTYPE2","Yahoo maps");



DEFINE("_EZREALTY_CONFIG_SHOWPROF","Mostrar Perfil");

DEFINE("_EZREALTY_CONFIG_PROFILING","Gerir Configura��es de perfis do portal");

DEFINE("_EZREALTY_CONFIG_PROFACCESS","Acesso a Perfil ");

DEFINE("_EZREALTY_CONFIG_PROFACCESSDESC","Specify who should be able to view details of a seller's Perfil. REMEMBER - you MUST NOT restrict access above registered member level - otherwise people will not be able to contact the seller. For the majority of sites - public access should work well.");

DEFINE("_EZREALTY_CONFIG_PROFILEWIDTH","Perfil - Largura imagem");

DEFINE("_EZREALTY_CONFIG_PROFILEWIDTHDESC","Maximum allowed width of the Perfil image. Keep in mind that this is the width that will be displayed on the front-end Perfil page. Images that exceed this width will be rejected during the upload process.");

DEFINE("_EZREALTY_CONFIG_PROFILEHEIGHT","Perfil - Altura Imagem");

DEFINE("_EZREALTY_CONFIG_PROFILEHEIGHTDESC","Maximum allowed height of the Perfil image. keep in mind that this is the height that will be displayed on the front-end Perfil page. Images that exceed this height will be rejected during the upload process.");



DEFINE("_EZREALTY_PROFACCESS_DENIED","O nosso acesso a perfis de Agente / Vendedor � previligiado. Por favos fa�a login primeiro.");



DEFINE("_EZREALTY_CONFIG_PROFILES","Prefis");



DEFINE("_EZREALTY_CONFIG_USESMS","Enable SMS");

DEFINE("_EZREALTY_CONFIG_USESMS_DESC","Do you want to display the SMS contact link/form to enable SMS messaging via the site's front-end? If Clickatell doesn't service your part of the world - set this to NO.");



DEFINE("_EZREALTY_CONFIG_DEFEXPMGMT","Define your various Expiration Management settings");

DEFINE("_EZREALTY_CONFIG_USEEXPMGMT","Use Expiration Management");

DEFINE("_EZREALTY_CONFIG_USEEXPMGMTDESC","Do you want to use the expiration management system. This allows you to limit how long listings are displayed for based on either time or page impressions.");

DEFINE("_EZREALTY_CONFIG_EXPSYS","Expiration system");

DEFINE("_EZREALTY_CONFIG_EXPSYSDESC","If using the expiration management system - Escolher the method to limit how long listings are displayed for.");

DEFINE("_EZREALTY_CONFIG_EXPHITSBASED","Page Impressions");

DEFINE("_EZREALTY_CONFIG_EXPDATEBASED","Time-based");

DEFINE("_EZREALTY_CONFIG_EXPFIG","Time in Days");

DEFINE("_EZREALTY_CONFIG_EXPFIGDESC","If using 'Time-based' expiration management, specify how many days listings should be displayed for.");

DEFINE("_EZREALTY_CONFIG_EXPGRACE","Grace Period");

DEFINE("_EZREALTY_CONFIG_EXPGRACEDESC","If using 'Time-based' listings, specify a grace period in days. This is the amount of time between when a listing is discontinued, and when it can be cleaned from the database. During this period, listings can be renewed.");

DEFINE("_EZREALTY_CONFIG_LIGHTBOXEXP","Lightbox Expirary Time");

DEFINE("_EZREALTY_CONFIG_LIGHTBOXEXPDESC","How many days should lightbox items remain in the database. After this they can be pruned using the prune function.");

DEFINE("_EZREALTY_CONFIG_LISTINGSTEMPL","Listings Page Template");

DEFINE("_EZREALTY_CONFIG_LISTINGSTEMPL_DESC","There are now different layouts available for the listings pages - ie. category contents, new listings, search results, Destaque listings, model contents pages.");

DEFINE("_EZREALTY_CONFIG_MGSCHFILTER","Manage your search filter settings");

DEFINE("_EZREALTY_CONFIG_PAYMENTSYS","Escolher your payment system");

DEFINE("_EZREALTY_CONFIG_PAYMENTSYS_DESC","EZ Realty currently supports 2 ways to handle payments for paid upgrades. The PayPal system will allow you to handle these automatically via a built-in IPN script, or if PayPal isn't available to you - you can do this manually by linking listings to a page that explains how they must go about paying you.");

DEFINE("_EZREALTY_CONFIG_CHANGEIMAGES","Change Listing Images");

DEFINE("_EZREALTY_CONFIG_CHANGEIMAGES_DESC","Do you want to allow site members the ability to change the images in a listing once they've been uploaded? Setting this to 'no' will prevent changes to the images only. Some members may find this inconvenient if they don't like their initial image order.");

DEFINE("_EZREALTY_CONFIG_LEADSNOTIFY","Leads Notification");

DEFINE("_EZREALTY_CONFIG_LEADSNOTIFY_DESC","If you are using the Leads Management feature, do you want to be notified via email of new sales leads?");

DEFINE("_EZREALTY_CONFIG_MAPRES","Mapping Resolution");



DEFINE("_EZREALTY_MAPPING_STNUM","Use Street Number");

DEFINE("_EZREALTY_MAPPING_STNUMDESC","Do you want to use the street number for mapping purposes. If you Escolher NO the map will only identify the street, but if you Escolher YET it will identify the actual property location.");

DEFINE("_EZREALTY_MAPPING_STREET","Usar Nome Rua");

DEFINE("_EZREALTY_MAPPING_STREETDESC","Do you want to use the street name for mapping purposes. If you select NO the map will only identify to the next level up - ie. the locality.");

DEFINE("_EZREALTY_MAPPING_LOCALITY","Use Locality");

DEFINE("_EZREALTY_MAPPING_LOCALITYDESC","Do you want to use the Localidadefor mapping purposes. If you Escolher NO mappikng will be less selective.");

DEFINE("_EZREALTY_MAPPING_STATE","Usar Distritos");

DEFINE("_EZREALTY_MAPPING_STATEDESC","If your country isn't big enough for Distritos/regions, you'll probably need to set this to NO if using mapping.");





DEFINE("_EZREALTY_SCH_TYPE","Usar tipo de Lista");

DEFINE("_EZREALTY_SCH_TYPEDESC","Do you want to use the listing types dropdown list in the main search filter?");

DEFINE("_EZREALTY_SCH_CTG","Usar Categoria de Im�veis");

DEFINE("_EZREALTY_SCH_CTGDESC","Do you want to use the property categories list in the main search filter?");



DEFINE("_EZREALTY_SCH_LOC","Usar Distritos e Localidades");

DEFINE("_EZREALTY_SCH_LOCDESC","Do you want to display the chained Distritos and Localidades in the main search filter?");



DEFINE("_EZREALTY_SCH_CNID","Usar Pa�s");

DEFINE("_EZREALTY_SCH_CNIDDESC","Do you want to display countries in the main search filter?");

DEFINE("_EZREALTY_SCH_PCODE","Usar C�digo Postal");

DEFINE("_EZREALTY_SCH_PCODEDESC","Do you want to display zip/postcode in the main search filter?");

DEFINE("_EZREALTY_SCH_PRICE","Usar Varia��o de Pre�o");

DEFINE("_EZREALTY_SCH_PRICEDESC","Do you want to use the 2 price range lists in the main search filter?");

DEFINE("_EZREALTY_SCH_ROOMS","Usar Quartos");

DEFINE("_EZREALTY_SCH_ROOMSDESC","Do you want to use the 2 bedroom lists in the main search filter?");

DEFINE("_EZREALTY_SCH_MARKET","Usar Estado Mercado");

DEFINE("_EZREALTY_SCH_MARKETDESC","Do you want to use the market status list in the main search filter?");

DEFINE("_EZREALTY_SCH_MLS","Usar Ref #");

DEFINE("_EZREALTY_SCH_MLSDESC","Do you want to use the MLS id# Escolher list int he main search filter? This list is built from the unique agent id/mls id field.");



DEFINE("_EZREALTY_LISTINGS_EXPDATE","Expiration Date");

DEFINE("_EZREALTY_LISTINGS_EXPIRED","Expirado");

DEFINE("_EZREALTY_EXPDATE_RESET","The Expiration Date has been reset!");

DEFINE("_EZREALTY_SELECT_SELLER","Escolher Agente / Vendedor");

DEFINE("_EZREALTY_DEALER_SELLER","Agente / Vendedor");



DEFINE("_EZREALTY_DETAILS_UNITNUM","Andar");

DEFINE("_EZREALTY_DETAILS_STREETNUM","N�mero de Rua");

DEFINE("_EZREALTY_DETAILS_DISPLAYAD","Mostrar Morada");

DEFINE("_EZREALTY_LISTINGS_DISPLADDYEXTFEED","Quer mostrar a morada do Im�vel em qualquer outro link para outros portais?");



DEFINE("_EZREALTY_OPTIMIZE_DATABASE","The EZ Realty tables have been optimized");

DEFINE("_EZREALTY_MIGRATE_ERROR","Error - you forgot to Escolher your site members!");

DEFINE("_EZREALTY_COPY","Copy");

DEFINE("_EZREALTY_PROFILE_ERROR_MID","ERROR - You must assign an existing member to this Perfil!!");

DEFINE("_EZREALTY_SORT_ALLSTATES","Todos Distritos");

DEFINE("_EZREALTY_SORT_ALLCOUNTRIES","Todos Pa�ses");



DEFINE("_EZREALTY_ORDER_LIST1","ID asc");

DEFINE("_EZREALTY_ORDER_LIST2","ID desc");

DEFINE("_EZREALTY_ORDER_LIST3","Seller Nome asc");

DEFINE("_EZREALTY_ORDER_LIST4","Seller Nome desc");

DEFINE("_EZREALTY_ORDER_LIST5","Category Nome asc");

DEFINE("_EZREALTY_ORDER_LIST6","Category Nome desc");

DEFINE("_EZREALTY_ORDER_LIST9","Publicado asc");

DEFINE("_EZREALTY_ORDER_LIST10","Publicado desc");

DEFINE("_EZREALTY_ORDER_LIST11","Approved asc");

DEFINE("_EZREALTY_ORDER_LIST12","Approved desc");

DEFINE("_EZREALTY_ORDER_LIST13","Superior asc");

DEFINE("_EZREALTY_ORDER_LIST14","Premium desc");

DEFINE("_EZREALTY_ORDER_LIST15","Destaque asc");

DEFINE("_EZREALTY_ORDER_LIST16","Destaque desc");

DEFINE("_EZREALTY_ORDER_LIST17","Expiration date asc");

DEFINE("_EZREALTY_ORDER_LIST18","Expiration date desc");

DEFINE("_EZREALTY_ORDER_LIST19","Price asc");

DEFINE("_EZREALTY_ORDER_LIST20","Price desc");

DEFINE("_EZREALTY_ORDER_LIST21","Localidade asc");

DEFINE("_EZREALTY_ORDER_LIST22","Localidadedesc");





DEFINE("_EZREALTY_ORDERBY","Order by");



DEFINE("_EZREALTY_MYEZPANEL","My EZ Panel");

DEFINE("_EZREALTY_MYPROFILE","Meu Perfil");

DEFINE("_EZREALTY_MYLISTINGS","My Listings");



DEFINE("_EZREALTY_GENERIC_SAVED","Detalhes Salvos");



DEFINE("_EZREALTY_LISTINGS_ADDLIGHTBOX","Add to Shortlist");

DEFINE("_EZREALTY_NEEDTOLOGIN","Sorry - You must be logged in to use this feature.");

DEFINE("_EZREALTY_VIEW_LIGHTBOX","");

DEFINE("_EZREALTY_REMOVE_LIGHTBOX","Remove from Shortlist");



DEFINE("_EZREALTY_EMPTY_LIGHTBOX","There are no listings currently on your Shortlist");

DEFINE("_EZREALTY_MY_LIGHTBOX","My Shortlist");



DEFINE("_EZREALTY_CONFIG_ADDRESSIMG","Escolher which address variables to use when entering property information");

DEFINE("_EZREALTY_CONFIG_SHOWMEMB","Show Member's Area Link");

DEFINE("_EZREALTY_CONFIG_SHOWMEMBDESC","If you've got registered site members listing properties - do you want to display the link to the 'sellers panel' on the top EZ Realty menu. You may want to set this to 'no' so that you can create a menu link with user privileges.");

DEFINE("_EZREALTY_CONFIG_ADDPCODEDESC","Do you want to use the postcode when managing and displaying your property addresses?");

DEFINE("_EZREALTY_DETAILS_PROPCOUNTY","Freguesia / Municipalidade");

DEFINE("_EZREALTY_DETAILS_PROPCOUNTY_DESC","** Campo Opcional e est� relacionado coma �rea geogr�fica entre Cidade / Localidade e Distrito . N�o faz parte da morada do Im�vel, mas vai mostrar nos detalhes da p�gina do Im�vel.");

DEFINE("_EZREALTY_DETAILS_TOTALROOMS","# Roupeiros");

DEFINE("_EZREALTY_DETAILS_LIVINGAREA","Sala de Estar");

DEFINE("_EZREALTY_DETAILS_BOND","Arrendamento");

DEFINE("_EZREALTY_DETAILS_FRONTAGE","�rea Total (m2)");

DEFINE("_EZREALTY_DETAILS_DEPTH","�rea �til (m2)");

DEFINE("_EZREALTY_SHOW_PRICE","Mostrar Pre�o/Valor");

DEFINE("_EZREALTY_DETAILS_PRICEVIEW","Ver Pre�o/Valor");

DEFINE("_EZREALTY_DETAILS_PRICEVIEW_DESC","If hiding your property price - write a special message - eg. 'suit buyers circ. 1M'.");



DEFINE("_EZREALTY_DETAILS_BUSINESS","Ag�ncia info");

DEFINE("_EZREALTY_DETAILS_TAKINGS","Takings");

DEFINE("_EZREALTY_DETAILS_RETURNS","Returns");

DEFINE("_EZREALTY_DETAILS_NETPROFIT","Net profit");

DEFINE("_EZREALTY_DETAILS_BUSTYPE","Neg�cio type");

DEFINE("_EZREALTY_DETAILS_BUSSUBTYPE","Neg�cio specialty");



DEFINE("_EZREALTY_DETAILS_RURAL","Rural info");

DEFINE("_EZREALTY_DETAILS_FENCING","Fencing");

DEFINE("_EZREALTY_DETAILS_RAINFALL","Rainfall");

DEFINE("_EZREALTY_DETAILS_SOILTYPE","Soil type");

DEFINE("_EZREALTY_DETAILS_IRRIGATION","Irrigation");

DEFINE("_EZREALTY_DETAILS_CARRYINGCAP","Carrying capacity");

DEFINE("_EZREALTY_DETAILS_SERVICES","Services");



DEFINE("_EZREALTY_TYPE_AUCTION","Para Leil�o");

DEFINE("_EZREALTY_DETAILS_MARKET0","Estado  Mercado");

DEFINE("_EZREALTY_DETAILS_MLSID","REF #");

DEFINE("_EZREALTY_DETAILS_MLSIDDESC","Entre o N�mero de Refer�ncia aqui");



DEFINE("_EZREALTY_DETAILS_GRAZING","Grazing");

DEFINE("_EZREALTY_DETAILS_CROPPING","Cropping");

DEFINE("_EZREALTY_DETAILS_WATERRESOURCES","Water resources");

DEFINE("_EZREALTY_DETAILS_STORAGE","Arruma��o");

DEFINE("_EZREALTY_DETAILS_GENERAL","Informa��o Geral do Im�vel");



DEFINE("_EZREALTY_PRUNE_DONE","Lightbox entries pruned");



DEFINE("_EZREALTY_NOALERT_SENT","Alert emails for pending listing deletions have not been sent, as your site is not using time-based expiration management.");



DEFINE("_EZREALTY_EXPIRY_WARNING","Pending listing expiry");

DEFINE("_EZREALTY_EXPIRY_MESSAGE","Your property listing on our site is due to expire soon, and we hope you've had a successful advertising campaign. Should you wish to extend your advertisement, please visit our site to renew your listing. You'll find us here:-");

DEFINE("_EZREALTY_EXPIRY_MESSAGE2","Log into the site and visit the member's control panel. From there you'll be able to renew your listing. Should you choose not to renew it - your listing will be deleted without further notice.");

DEFINE("_EZREALTY_ALERTMSG_PT1","E-mail sent to");

DEFINE("_EZREALTY_ALERTMSG_PT2","users");

DEFINE("_EZREALTY_CONFIG_BRAZILIAN","Brazilian");



DEFINE("_EZREALTY_HEADER_FEATURED","Destaque");

DEFINE("_EZREALTY_FEATURED_PROPERTY_LIST","Our Destaque Properties");



DEFINE("_EZREALTY_CONFIG_TOPMENU","Manage the Top EZ Realty Menu Links");

DEFINE("_EZREALTY_CONFIG_USEMENU","Use Top Menu Links");

DEFINE("_EZREALTY_CONFIG_USEMENU_DESC","Do you want to use the top EZ Realty menu links? Setting this to 'no' will completely hide the top menu link.");

DEFINE("_EZREALTY_CONFIG_USEFEAT","Use Destaque Listings Link");

DEFINE("_EZREALTY_CONFIG_USEFEAT_DESC","Do you want to use the top Destaque listings link?");

DEFINE("_EZREALTY_CONFIG_AGLINK","Agente / Vendedor's Link");

DEFINE("_EZREALTY_CONFIG_AGLINK_DESC","Do you want to use the top Agente / Vendedor's link?");

DEFINE("_EZREALTY_CONFIG_SCHLINK","Use Pesquisa Filter Link");

DEFINE("_EZREALTY_CONFIG_SCHLINK_DESC","Do you want to use the top search filter link?");

DEFINE("_EZREALTY_CONFIG_MEMLINK","Use Members Link");

DEFINE("_EZREALTY_CONFIG_MEMLINK_DESC","Do you want to use the top link that goes into the member's listings management area?");



DEFINE("_EZREALTY_SEL_STATE","Escolher Distito");

DEFINE("_EZREALTY_SEL_LOCALITY","Escolher Locality");

DEFINE("_EZREALTY_CLICKOPEN","Click thumbnails to open");



DEFINE("_EZREALTY_LISTINGS_SUMMARY","Summary");

DEFINE("_EZREALTY_LISTINGS_EXPAND","click to expand");

DEFINE("_EZREALTY_LISTINGS_TECHNICAL","Technical Specifications");

DEFINE("_EZREALTY_LISTINGS_NOTECHSPECS","There are no technical specifications listed for this vehicle");

DEFINE("_EZREALTY_LISTINGS_CLICKOPEN","Click to open the full-size image");

DEFINE("_EZREALTY_LISTINGS_SPECS","Especifica��es");

DEFINE("_EZREALTY_LISTINGS_FEATS","Destaques");

DEFINE("_EZREALTY_TOOLS","Ferramentas");

DEFINE("_EZREALTY_DET_ADDFEAT","Destaques Adicionais");

DEFINE("_EZREALTY_DET_ADDNUM","Ad #");

DEFINE("_EZREALTY_DET_AGID","Agency reference #");

DEFINE("_EZREALTY_DET_MLSID","REF #");

DEFINE("_EZREALTY_DET_COUNTY","Freguesia");



DEFINE("_EZREALTY_CONFIG_BACKBUT","But�o para traz");

DEFINE("_EZREALTY_CONFIG_BACKBUTDESC","Do you want to display the back button on the footer of the page?");



DEFINE("_EZREALTY_TABS_SUMMARY","Sum�rio");

DEFINE("_EZREALTY_TABS_DETAILS","Detalhes");

DEFINE("_EZREALTY_TABS_FEATURES","Destaques");

DEFINE("_EZREALTY_TABS_DESCRIPTION","Descri��o");



DEFINE("_EZREALTY_PROFILE_CONTACT","Contactar Vendedor");



DEFINE("_EZREALTY_LISTINGS_RENEW","Renew");

DEFINE("_EZREALTY_LISTING_UPGRADE","Upgrade");

DEFINE("_EZREALTY_LEADS_SUBMSG","A visitor to your site has just submitted details to your leads management system. Please login to check it out when you've got the time.");



DEFINE("_EZREALTY_LISTINGS_TIMEINTRO","Listings are discontinued after");

DEFINE("_EZREALTY_LISTINGS_TIME2","days, and you will have a further");

DEFINE("_EZREALTY_LISTINGS_TIME3","days during which you may renew your listing.");

DEFINE("_EZREALTY_LISTINGS_TIMEEXPL","If upgrading between listing levels/types - the expiry date will be reset.");



DEFINE("_EZREALTY_MSG","Message");

DEFINE("_EZREALTY_SITE_CONTACT","General contact enquiry via");



DEFINE("_EZREALTY_LISTER_AGENT","Agente");

DEFINE("_EZREALTY_LISTER_OWNER","Dono/Vendedor");

DEFINE("_EZREALTY_LISTER_BROKER","Corrector");

DEFINE("_EZREALTY_LISTER_SELECTTYPE","Escolher tipo Vendedor");



DEFINE("_EZREALTY_SEARCH_ANYMLS","Qualquer # Ref");



DEFINE("_EZREALTY_YOUVEGOT_LEADSMAIL","New Im�vel Lead Submitted");



DEFINE("_EZREALTY_REDUNDANT","** This field is now redundant **");



DEFINE('_EZREALTY_NAV_LT','&lt;');

DEFINE('_EZREALTY_NAV_RT','&gt;');

DEFINE('_EZREALTY_NAV_PAGE','Pagina');

DEFINE('_EZREALTY_NAV_OF','de');

DEFINE('_EZREALTY_NAV_START','�nicio');

DEFINE('_EZREALTY_NAV_PREVIOUS','Ant');

DEFINE('_EZREALTY_NAV_NEXT','Seguinte');

DEFINE('_EZREALTY_NAV_END','Fim');

DEFINE('_EZREALTY_NAV_RESULTS','Resultados');



DEFINE('_EZREALTY_TABS_ADDRESS','Morada');

DEFINE('_EZREALTY_TABS_SPECS','Especifica��es');

DEFINE('_EZREALTY_TABS_MARKETING','Marketing');

DEFINE('_EZREALTY_TABS_ADMIN','Admin');

DEFINE('_EZREALTY_TABS_BUSINESS','Ag�ncia');

DEFINE('_EZREALTY_TABS_PROFILES','Perfis');

DEFINE('_EZREALTY_TABS_SMS','SMS');

DEFINE('_EZREALTY_TABS_MAPPING','Mapas');

DEFINE('_EZREALTY_TABS_EXP','Expira��o');

DEFINE('_EZREALTY_TABS_FORMATTING','Formatar');

DEFINE('_EZREALTY_TABS_SEARCH','Pesquisa');

DEFINE('_EZREALTY_TABS_LINKS','Links');

DEFINE('_EZREALTY_TABS_MEMBERS','Membros');

DEFINE('_EZREALTY_TABS_PAYMENTS','Pagamentos');



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



DEFINE('_EZREALTY_CONFIG_STATESLOCS','Distritos e Localidades');

DEFINE('_EZREALTY_CONFIG_LOCSONLY','Localidades s�mente');

DEFINE('_EZREALTY_CONFIG_NEITHER','Nenhuma');

DEFINE('_EZREALTY_CONFIG_STATELOCTITLE','Distritos e Localidades');

DEFINE('_EZREALTY_CONFIG_STATELOCTITLE_DESC','Define how to enter Distritos and Localidades info for your property addresses. Some very small places may not require either Distritos or Localidades, some may require only Localidades, and country-wide listings may require both Distritos and Localidades to be entered for property addresses.');

DEFINE('_EZREALTY_CONFIG_YOURVIDEOS','Your Video Settings');

DEFINE('_EZREALTY_CONFIG_FLV','Embed FLV Video Tour Files');

DEFINE('_EZREALTY_CONFIG_FLV_DESC','You can now allow externally hosted FLV files to be embedded in the page output for use as video tours, instead of linking to an external set of files such as virtual tours. FLV files are flash movies, which have a number of benefits over embedding other video formats.');

DEFINE('_EZREALTY_CONFIG_FLVWIDTH','Mostrar Largura');

DEFINE('_EZREALTY_CONFIG_FLVWIDTH_DESC','The Mostrar Largura of embedded FLV files. The width you define will depend on its position in the template, and your template width.');

DEFINE('_EZREALTY_CONFIG_FLVHEIGHT','Mostrar Altura');

DEFINE('_EZREALTY_CONFIG_FLVHEIGHT_DESC','The display height of embedded FLV files. This can be left the same as the Mostrar Largura.');

DEFINE('_EZREALTY_TABS_VIDEO','Video');

DEFINE('_EZREALTY_TABS_NOMAP','Sorry - there is no map available for this property');

DEFINE('_EZREALTY_TABS_NOVIDEO','Sorry - there is no video tour available for this property');



DEFINE('_EZREALTY_PROFILE_ERROR_TYPE','You must Escolher a seller type.');

DEFINE('_EZREALTY_PROFILE_TYPE','Seller Type');

DEFINE('_EZREALTY_LISTINGS_ASC','Listings asc');

DEFINE('_EZREALTY_LISTINGS_DESC','Listings desc');



DEFINE('_EZREALTY_LISTINGS_FLVMODE','Por favor entre a morada URL do ficheiro FLV.');

DEFINE('_EZREALTY_LOCALITY_DESC','Descrip��o Localidade');

DEFINE('_EZREALTY_SOLD_ERROR','Error - you must define a market status for your property listing');



DEFINE("_EZREALTY_APF11","Animais Estima��o permitidos");

DEFINE("_EZREALTY_SEARCH_ANYMARKET","Any Market Status");



DEFINE("_EZREALTY_SCH_PETS","Animais Dom�sticos permitidos");

DEFINE("_EZREALTY_SCH_PETSDESC","Do you want to use the 'pets allowed' yes/no Escolher list on the search filter?");

DEFINE("_EZREALTY_SCH_LUG","Use Lock-up Garage");

DEFINE("_EZREALTY_SCH_LUGDESC","Do you want to use the 'lock-up garage' yes/no Escolher list on the search filter?");







DEFINE("_EZREALTY_DETAILS_VIEWBOOKING","Usar o link de Reservas");

DEFINE("_EZREALTY_DETAILS_VIEWBOOKING_DESC","O portal tem tamb�m inserido uma fucionalidade integrda de Reservas  - Quer usar esta fun��o para administrar as reservas de propriedades?");

DEFINE("_EZREALTY_LEADS_STATUS","Estado da Angaria��o");

DEFINE("_EZREALTY_LEADS_REVIEW","Rever Requerimentos");

DEFINE("_EZREALTY_LEADS_CALL","Telefonar a Angariador");

DEFINE("_EZREALTY_LEADS_RECALL","tentar telefonar outra vez");

DEFINE("_EZREALTY_LEADS_DOEMAIL","Angaria��o Email");

DEFINE("_EZREALTY_LEADS_DOINSPECTION","Organizar Im�veis a ver");

DEFINE("_EZREALTY_LEADS_NOINTEREST","N�o est� mais interessado/a");

DEFINE("_EZREALTY_LEADS_CLOSED","Encerrado ");

DEFINE("_EZREALTY_LEADS_NOTES","Notas Administrativas e Dados Privados dos propriet�rios:-<br />Esta informa��o n�o � v�sivel na parte p�blica do portal. O objectivo � gravar o progresso, para pura refer�ncia.");

DEFINE("_EZREALTY_LEADS_ADMIN","Notas de processamento administrativo  - Dados privados dos Propri�tarios");

DEFINE("_EZREALTY_LEADS_LISTREQ","Registar os seus requerimentos");



DEFINE("_EZREALTY_MAPPING_INCOMPATIBLE","Sorry, the Google Maps API is not compatible with this browser");



DEFINE("_EZREALTY_CONFIG_OTHERLINKS","Cross-component Integration Links");

DEFINE("_EZREALTY_CONFIG_BOOKINGS","JomRes Bookings Integration");

DEFINE("_EZREALTY_CONFIG_BOOKINGS_DESC","Do you have the JomRes bookings component and syncbot installed to manage rental bookings?");

DEFINE("_EZREALTY_BOOKINGS","Bookings");



DEFINE("_EZREALTY_CHECK_PRUNE","You are about to prune the lightbox of favourite listings. Are you sure you want to do that?");

DEFINE("_EZREALTY_CHECK_ALERT","You are about to send out emails to all expired listings in the database. This may take a while if you have a lot. Are you sure you want to do that?");

DEFINE("_EZREALTY_CHECK_CLEAN","You are about to clean the database of old expired listings. You cannot undo this once they have been deleted. Are you sure you want to do that?");



DEFINE("_EZREALTY_CPANEL_FEEDS","Feeds");

DEFINE("_EZREALTY_SELECT_IMAGE","Escolher image");



DEFINE("_EZREALTY_PROFILE_LOGO","Logo da  Ag�ncia");

DEFINE("_EZREALTY_PROFILE_MAXSIZE","Tamanho m�ximo permitido");

DEFINE("_EZREALTY_CONFIG_LOGOWIDTH","Largura do Logo");

DEFINE("_EZREALTY_CONFIG_LOGOHEIGHT","Altura do Logo");



DEFINE("_EZREALTY_CONFIG_LOGOWIDTHDESC","Maximum allowed width of the logo image associated with a seller. Keep in mind that this is the width that will be displayed on the front-end Perfil page and property listings pages. Images that exceed this width will be rejected during the upload process. A good width is 160 pixels.");

DEFINE("_EZREALTY_CONFIG_LOGOHEIGHTDESC","Maximum allowed height of the logo image associated with a seller. Keep in mind that this is the width that will be displayed on the front-end Perfil page and property listings pages. Images that exceed this height will be rejected during the upload process. A good height is 30 pixels.");



DEFINE("_EZREALTY_HELPER_PETS","Animais de Ajuda");

DEFINE("_EZREALTY_NA","N�o � aplic�vel");



DEFINE("_EZREALTY_LISTINGS_PRESCHOOL","Paredes");

DEFINE("_EZREALTY_LISTINGS_PRIMARYSCHOOL","Revestimento Exterior ");

DEFINE("_EZREALTY_LISTINGS_HIGHSCHOOL","Varandas");

DEFINE("_EZREALTY_LISTINGS_UNIVERSITY","V�deo Porteiro");



DEFINE("_EZREALTY_CONFIG_MAPTYPE","Escolher O tipo de Servi�o de Mapas");

DEFINE("_EZREALTY_CONFIG_MAPTYPEDESC","Which mapping service do you want to use? If your template has lots of javascript, you may have to use the Yahoo mapping option here:- <a target='_blank' href='http://developer.yahoo.com/maps/'>http://developer.yahoo.com/maps/</a>.");

DEFINE("_EZREALTY_CONFIG_OSTATUS","Online status indicator");

DEFINE("_EZREALTY_CONFIG_OSTATUSDESC","Online status indicators for the IM systems come and go, and are occasionally offline - and have a range of different indicator buttons. Choose the 'Status Indicator Server' you want to use for your site.");

DEFINE("_EZREALTY_DRIVING_DIRECTIONS","CLICK HERE FOR DRIVING DIRECTIONS");



DEFINE("_EZREALTY_PROFILE_SHOWADDY","Mostrar Morada");

DEFINE("_EZREALTY_PROFILE_SHOWADDYDESC","Do you want to display your address on your Perfil page? If set to no - neither your address or a map to your address will be displayed.");

DEFINE("_EZREALTY_CONFIG_CURRENCYCODE","C�digo da Moeda");

DEFINE("_EZREALTY_CONFIG_CURRENCYCODEDESC","The 3-letter currency code of your property listings - eg. USD, AUD, GBP - the same way of defining currency codes for PayPal. This code is used for some external feeds for property listing sites.");

DEFINE("_EZREALTY_CONFIG_SHORTLIST","Short List");

DEFINE("_EZREALTY_CONFIG_SHORTLISTDESC","Do you want to use the 'short listing' feature? This does require registered members to be logged in to be able to use it, so if you don't provide this access - set this feature to 'NO'.");



DEFINE("_EZREALTY_LISTINGS_SCHOOLDIST","Pavimento");

DEFINE("_EZREALTY_LISTINGS_HOFEES","Outra Op��o");

DEFINE("_EZREALTY_APF12","Elevador");

DEFINE("_EZREALTY_SPECS","Quick Specs");

DEFINE("_EZREALTY_CLICK","Carregue para expandir");

DEFINE("_EZREALTY_OHOUSE","Casa Aberta");

DEFINE("_EZREALTY_DETAILS_MARKET6","N�o est� D�spon�vel");

DEFINE("_EZREALTY_ADDOWNER_ERROR","Error - you must specify an agent/owner responsible for maintaining this listing");



DEFINE("_EZREALTY_CPANEL_FEEDSDESC","In addition to the RSS 2.0 feeds that have always been available, EZ Realty now has the ability to feed your property listings to a couple of large external property listing sites.<br /><br /><strong>These feeds are new Destaques - and are still experimental - so if you encounter problems with them please submit a support ticket reporting any bugs.</strong>");

DEFINE("_EZREALTY_CPANEL_GOOGLE1","Your Google RSS 2.0 Feed");

DEFINE("_EZREALTY_CPANEL_GOOGLE2","Visit Google for more information");

DEFINE("_EZREALTY_CPANEL_EDGEIO1","Your Edgeio RSS 2.0 Feed");

DEFINE("_EZREALTY_CPANEL_EDGEIO2","Visit Edgeio for more information");

DEFINE("_EZREALTY_CPANEL_PROPSMART1","Your Propsmart RSS 2.0 Feed");

DEFINE("_EZREALTY_CPANEL_PROPSMART2","Visit PropSmart for more information");

DEFINE("_EZREALTY_MIGRATE_MEMBERS","Migrate users");



DEFINE("_EZREALTY_CPANEL_COUNTRIES","Pa�ses");

DEFINE("_EZREALTY_CPANEL_STATES","Distritos");

DEFINE("_EZREALTY_CPANEL_LOCALITIES","Localidades");

DEFINE("_EZREALTY_CPANEL_BEDROOMS","# Quartos");

DEFINE("_EZREALTY_CPANEL_PROPERTYMGR","Im�veis");



DEFINE("_EZREALTY_PRICE_DISPLAYVALUE","Mostrar valor");

DEFINE("_EZREALTY_FILTER_MLS","-Todas # Refer�ncias");

DEFINE("_EZREALTY_FILTER_AGENTS","-Todos Agentes(#)-");























//****************************************************//

//  EXISTING LANGUAGE TAGS THAT HAVE HAD THEIR CONTENT CHANGED FOR THE 5.0.0 RELEASE

//****************************************************//





DEFINE("_EZREALTY_CONFIG_USEMAP","Use Mapping");

DEFINE("_EZREALTY_CONFIG_USEMAPDESC","Do you want to use one of the mapping services? If wanting to use it - make sure you read their Terms of Use here:- <a target='_blank' href='http://www.google.com/apis/maps/terms.html'>http://www.google.com/apis/maps/terms.html</a> - alternatively - check the Yahoo mapping site for their TOS");

DEFINE("_EZREALTY_CONFIG_MAPAPI","Mapping API Number");

DEFINE("_EZREALTY_CONFIG_MAPAPIDESC","You MUST apply for a Mapping service API number for your site, then add it here if using the mapping. You can apply for an API number here:- <a target='_blank' href='http://www.google.com/apis/maps/'>http://www.google.com/apis/maps/</a> - or go to the Yahoo mapping site to get one of their mapping API's. Yahoo mapping API's can be obtained here:- <a target='_blank' href='http://developer.yahoo.com/maps/'>http://developer.yahoo.com/maps/</a>");

DEFINE("_EZREALTY_CONFIG_OP2","Define the notifications that you want");



DEFINE("_EZREALTY_DETAILS_PROPPRICEDESC","<font color='#AC5702'>Entrar n�meros no seguinte formato - 10000.00 - n�o usar v�rgulas !</font>");



DEFINE("_EZREALTY_CONFIG_ARRVIEW","Email Seller Link");

DEFINE("_EZREALTY_CONFIG_ARRVIEWDESC","Do you want to show the \"email seller\" contact link on the full property details page?");

DEFINE("_EZREALTY_DETAILS_PROPADDRESS2","Nome Rua");

DEFINE("_EZREALTY_CONFIG_TITLE","Configura��o");

DEFINE("_EZREALTY_CONFIG_COUNTRYDESC","If you do not want to use countries in your real Distrito listings and the leads registration form, set this to 'NO' to hide this variable.");

DEFINE("_EZREALTY_CLEANDB_SUCCESS","The database has been cleaned of listings that exceed the allowed number of impressions/days");

DEFINE("_EZREALTY_CLEANDB_FAIL","The database has not been cleaned as your site is not running with expiry management turned on");



DEFINE("_EZREALTY_PRICES_TITLE","Manage Pesquisa Filter Price Increment");

DEFINE("_EZREALTY_MODPRICES_TITLE","Pesquisa Filter Price Increment");

DEFINE("_EZREALTY_PRICES_RANGE","Pesquisa Filter Price Increment");

DEFINE("_EZREALTY_MODPRICES_RANGE","Define Pesquisa Filter Price Increment");

DEFINE("_EZREALTY_MODPRICES_SAVED","Pesquisa Filter Price Increment Saved");

DEFINE("_EZREALTY_MODPRICES_ERROR1","You must enter a price increment");

DEFINE("_EZREALTY_PRICES_EDITTAG","Edit Pesquisa Filter Price Increment");











//****************************************************//

//  EXISTING LANGUAGE TAGS THAT WILL BE REMOVED       //

//****************************************************//



DEFINE("_EZREALTY_CONFIG_CPITITLE","Custom Im�vel Information");

DEFINE("_EZREALTY_CONFIG_CPIDESC","The 3 custom Destaques allow you to define special information of relevance to your listings - eg. annual heating costs, annual rates/taxes etc. These names will appear in the add/edit listings page where you can then assign values applicable to the property, as well as on the front-end.");



DEFINE("_EZREALTY_CONFIG_APFTITLE","Destaques adicionais do Im�vel");

DEFINE("_EZREALTY_CONFIG_APFDESC","The 10 additional property Destaques appear as yes/no Escolherion boxes in the add/edit property information area.  On the front-end these names appear as a bulleted list. You're able to define the names of these Destaques so that they're relevant to your geographical area - but remember - once defined you should not change them as this may affect the accuracy of property information.");

DEFINE("_EZREALTY_CONFIG_FEATURETITLE","Special Feature Box");

DEFINE("_EZREALTY_CONFIG_FEATURETITLEDESC","What would you like to call the special feature for your property listings? (eg. Community Highlights etc). This forms the box title on the full property Descri��o page.");

DEFINE("_EZREALTY_CONFIG_STATES","Usar Distritos");

DEFINE("_EZREALTY_CONFIG_STATESDESC","If you sell real estate in a region that does not require Distritos like the larger countries, set this to 'NO' to hide this variable.");











//****************************************************//

//  TAGS FROM THE CONFIGURATION AREA THAT ARE NEEDED  //

//****************************************************//







DEFINE("_EZREALTY_SPECIAL_FEATURE","Destaques Comunidade");



DEFINE("_EZREALTY_CONFIG_CPI1","Cozinha Equipada");

DEFINE("_EZREALTY_CONFIG_CPI2","Chaves ");

DEFINE("_EZREALTY_CONFIG_CPI3","Mobilado");



DEFINE("_EZREALTY_APF1","Piscina");

DEFINE("_EZREALTY_APF2","Fog�o de Sala");

DEFINE("_EZREALTY_APF3","Churrasqueira");

DEFINE("_EZREALTY_APF4","Ar Condicionado");

DEFINE("_EZREALTY_APF5","Aquecimento Central");

DEFINE("_EZREALTY_APF6","Divis�es da Cozinha");

DEFINE("_EZREALTY_APF7","Outra Op��o");

DEFINE("_EZREALTY_APF8","Outra Op��o");

DEFINE("_EZREALTY_APF9","Outra Op��o");

DEFINE("_EZREALTY_APF10","Outra Op��o");





DEFINE("_EZREALTY_PREMIUM","Superior");

DEFINE("_EZREALTY_FEATURED","Destaque");











//****************************************************//

//  TAGS ADDED FOR THE 5.0.1 BETA RELEASE             //

//****************************************************//







DEFINE("_EZREALTY_TEMPLATE_ERROR","Error - you must define a layout template in the Configura��o area");









//****************************************************//

//  TAGS ADDED FOR THE 5.1.0 STABLE RELEASE           //

//****************************************************//





DEFINE("_EZREALTY_CONFIG_MARKETSTATUS","Escolher which choices to use in the Market Status List");

DEFINE("_EZREALTY_CONFIG_PROPTYPE","Escolher which choices to use in the Im�vel Type List");

DEFINE("_EZREALTY_CONFIG_FREQUITLIST","Escolher which choices to use in the Rental Frequency List");



DEFINE("_EZREALTY_CPANEL_STATIC","Conte�do");

DEFINE("_EZREALTY_CPANEL_DOCUMENTATION","Documenta��o");

DEFINE("_EZREALTY_CPANEL_MLIST","Listas envio Emails");



DEFINE("_EZREALTY_MANAGE_STATIC","Administrar conte�do est�tico");

DEFINE("_EZREALTY_CONTENT_ITEM","Item conte�do");

DEFINE("_EZREALTY_CONTENT_ERROR","Tem que adicionar mais conte�do");

DEFINE("_EZREALTY_MANAGE_SUBSCRIBER","Manage Mailing List Submissions");

DEFINE("_EZREALTY_SUBSCRIBER_NAME","Nome");

DEFINE("_EZREALTY_SUBSCRIBER_EMAIL","Morada Email ");

DEFINE("_EZREALTY_SUBSCRIBER_CONFIRMED","Confirmado");

DEFINE("_EZREALTY_SUBSCRIBER_DATE","Data");

DEFINE("_EZREALTY_ERROR_SUBNAME","Error - you must include a Nome");

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

DEFINE("_EZREALTY_MAIL_PROPADD2","Im�vel address");

DEFINE("_EZREALTY_MAIL_PROPADD3","-------------------------------------------------------");

DEFINE("_EZREALTY_MAIL_CONTACTDET","Contact details");

DEFINE("_EZREALTY_MAIL_EMAIL","Email address:-");

DEFINE("_EZREALTY_DETAILS_DECLAT","Latitude do Im�vel");

DEFINE("_EZREALTY_DETAILS_DECLONG","Longitude Im�vel");

DEFINE("_EZREALTY_SEARCH_ANY","Qualquer Im�vel");

DEFINE("_EZREALTY_SEARCH_ONLYFEAT","Somente Im�veis em Destaque");

DEFINE("_EZREALTY_SCH_FEAT","Usar listas de Destaque");

DEFINE("_EZREALTY_SCH_FEATDESC","Quer permitir as pessoas fazerem uma pesquisaDo you want to allow people to search for properties based on featured listing status?");



DEFINE("_EZREALTY_CONFIG_MAPTYPE3","Google Coordenadas Coordenadas");

DEFINE("_EZREALTY_MAP_DIRECTIONS","Get Driving Directions");



DEFINE("_EZREALTY_PRESCHOOL","Pre-school");

DEFINE("_EZREALTY_PRIMARYSCHOOL","Primary school");

DEFINE("_EZREALTY_HIGHSCHOOL","High school");

DEFINE("_EZREALTY_UNIVERSITY","University");

DEFINE("_EZREALTY_REQUESTMORE","Request more Info");

DEFINE("_EZREALTY_LOADING_IMAGE","Loading image. Please wait");

DEFINE("_EZREALTY_PROPERTY_TOOLS","Ferramentas Im�veis");

DEFINE("_EZREALTY_PROPERTY_INFO","Informa��o do Im�vel");

DEFINE("_EZREALTY_LISTED_BY","Listada por");

DEFINE("_EZREALTY_COUNCIL","Local council");



DEFINE("_EZREALTY_MAP_DIRECTIONS","Directions");

DEFINE("_EZREALTY_MAP_TOHERE","To here");

DEFINE("_EZREALTY_MAP_FROMHERE","From here");

DEFINE("_EZREALTY_MAP_START","Start address");

DEFINE("_EZREALTY_MAP_END","End address");



DEFINE("_EZREALTY_FORGOT_LOCALITY","Make sure that your Localidade etc is available for use in the property address - BEFORE getting to the add/edit details page!! Do it on the next page!!");

DEFINE("_EZREALTY_FORGOT_LOCALITY2","Make sure that your Localidade etc is available for use in the property address!! Do it now!!");



DEFINE("_EZREALTY_SEARCH_BATHROOMS","Bathrooms");

DEFINE("_EZREALTY_SELECT_BATHROOMS","Any bathroom number");



DEFINE("_EZREALTY_SCH_BTHROOMS","Use Bathrooms");

DEFINE("_EZREALTY_SCH_BTHROOMSDESC","Do you want to use the bathrooms Escolher list in the main search filter");

DEFINE("_EZREALTY_TYPE_TENDER","Sale by Tender");



DEFINE("_EZREALTY_FNA","Ficheiro n�o est� d�spon�vel");

DEFINE("_EZREALTY_KSNA","Your keyserver file is missing");



DEFINE("_EZREALTY_PNPFC","You can contact this seller once their Perfil is approved");

DEFINE("_EZREALTY_MAP_CHOOSE_ANOTHER","You must use Yahoo mapping or Googles Coordenadas  mapping with this template.");



DEFINE("_EZREALTY_MAP_DIRECTIONS","Directions");

DEFINE("_EZREALTY_MAP_TOHERE","Para aqui");

DEFINE("_EZREALTY_MAP_FROMHERE","De aqui");

DEFINE("_EZREALTY_MAP_START","Morada Inicial");

DEFINE("_EZREALTY_MAP_END","Morada Destino");



DEFINE("_EZREALTY_SHORTLIST_ERROR","Error - you already have this listing shortlisted.");

DEFINE("_EZREALTY_LOCALITY_DEMOGRAPHICS","Dados demogr�ficos da Localidade");



DEFINE("_EZREALTY_ENTER_CAPTCHA","Entre o c�digo de seguran�a qie se msotar em baixo");

DEFINE("_EZREALTY_SECURITY_FAILED","Erro - C�digo de Seguran�a Incorrecto");

DEFINE("_EZREALTY_PRINT_ADMIN","Imprimir");

DEFINE("_EZREALTY_FIND_COORDINATES","");



DEFINE("_EZREALTY_CONFIG_PAGEORDER","Default page order");

DEFINE("_EZREALTY_CONFIG_PAGEORDERDESC","This is the general ordering of properties on the frontend pages.");



DEFINE("_EZREALTY_FILTER_ALLSTREETS","Todas Ruas");

DEFINE("_EZREALTY_FILTER_ALLIDS","Todos #");



DEFINE("_EZREALTY_LISTS_STATEFIRST","Escolher Distrito primeiro - depois localidade");



DEFINE("_EZREALTY_CUSTOM4","Tipologia");

DEFINE("_EZREALTY_CUSTOM5","Outra Op��o");

DEFINE("_EZREALTY_FIELD_SEARCHABLE","Este Campo � pesquis�vel");

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



DEFINE("_EZREALTY_DUPLICATE_PROFILE_ERROR","Error - each site member can only have one Perfil, and you have already created a Perfil for this username.");









//****************************************************//

//  TAGS CHANGED FOR THE 5.1.0 STABLE RELEASE         //

//****************************************************//





DEFINE("_EZREALTY_REQUEST_PROPVIEWING","has requested a property inspection appointment.");

DEFINE("_EZREALTY_TYPE_SWAP","Im�vel Exchange");

DEFINE("_EZREALTY_MYLIGHTBOX","My Shortlist");

DEFINE("_EZREALTY_CPANEL_INTRO2","Welcome to EZ Realty.");

DEFINE("_EZREALTY_CPANEL_PRUNE","Prune Shortlist");

DEFINE("_EZREALTY_CONFIG_SHOWPROF_DESC","If you want to over-ride the display of Perfils and have all property enquiries directed to you - you can do this by setting this to NO. Members will still have to create their Perfils, but those details won't be displayed.");





?>