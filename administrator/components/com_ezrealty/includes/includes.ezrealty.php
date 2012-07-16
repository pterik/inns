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


    # Don't allow direct linking

    defined ('_VALID_MOS') or die( 'Direct Access to this location is not allowed.' );





    /**************************************************\
                MAKE THE DROP-DOWN SELECTION LISTS
    \**************************************************/


//initialize the $row variable to get rid of all thos nasty screen warnings

$row = 0;


$pageorder[] = mosHTML::makeOption( 'a.id ASC', _EZREALTY_SEARCH_ASC );
$pageorder[] = mosHTML::makeOption( 'a.id DESC', _EZREALTY_SEARCH_DESC );
$pageorder[] = mosHTML::makeOption( 'a.price ASC', _EZREALTY_ORDER_LIST19 );
$pageorder[] = mosHTML::makeOption( 'a.price DESC', _EZREALTY_ORDER_LIST20 );
$lists['er_pageorder'] = mosHTML::selectList( $pageorder, 'er_pageorder', 'class="inputbox" size="1"' , 'value', 'text', $er_pageorder );



    /**************************************************\
                         End
    \**************************************************/

?>
