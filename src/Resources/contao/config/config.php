<?php

use ContaoThemesNet\ZeroOneThemeBundle\Element\TabsNavElement;
use ContaoThemesNet\ZeroOneThemeBundle\Element\TabsStartElement;
use ContaoThemesNet\ZeroOneThemeBundle\Element\TabsStopElement;

// Insert the zero one theme category
array_insert($GLOBALS['TL_CTE'], 1, ['zeroOneTheme' => []]);

/**
 * Add content elements
 */

$GLOBALS['TL_CTE']['zeroOneTheme']['tabsNavElement'] = TabsNavElement::class;
$GLOBALS['TL_CTE']['zeroOneTheme']['tabsStartElement'] = TabsStartElement::class;
$GLOBALS['TL_CTE']['zeroOneTheme']['tabsStopElement'] = TabsStopElement::class;

/**
 * Available tags for Zero One Theme
 */

array_push($GLOBALS['tl_config']['theme_tags'], '-');
$GLOBALS['tl_config']['theme_tags'][] = 'ZeroOne01/01';
$GLOBALS['tl_config']['theme_tags'][] = 'ZeroOne01/02';
$GLOBALS['tl_config']['theme_tags'][] = 'ZeroOne01/03';
$GLOBALS['tl_config']['theme_tags'][] = 'ZeroOne01/04';
$GLOBALS['tl_config']['theme_tags'][] = 'ZeroOne01/05';
$GLOBALS['tl_config']['theme_tags'][] = 'ZeroOne02/01';
$GLOBALS['tl_config']['theme_tags'][] = 'ZeroOne02/02';
$GLOBALS['tl_config']['theme_tags'][] = 'ZeroOne02/03';
$GLOBALS['tl_config']['theme_tags'][] = 'ZeroOne02/04';
$GLOBALS['tl_config']['theme_tags'][] = 'ZeroOne02/05';
$GLOBALS['tl_config']['theme_tags'][] = 'ZeroOne03/01';
$GLOBALS['tl_config']['theme_tags'][] = 'ZeroOne03/02';
$GLOBALS['tl_config']['theme_tags'][] = 'ZeroOne03/03';
$GLOBALS['tl_config']['theme_tags'][] = 'ZeroOne03/04';
$GLOBALS['tl_config']['theme_tags'][] = 'ZeroOne03/05';

/**
 * Wrapper elements
 */

$GLOBALS['TL_WRAPPERS']['start'][] = 'tabsStartElement';
$GLOBALS['TL_WRAPPERS']['stop'][] = 'tabsStopElement';

/**
 * Load default styles for every page
 */

if($GLOBALS['ZERO_ONE_STYLES'])
    $GLOBALS['ZERO_ONE_STYLES'] = [];

$GLOBALS['ZERO_ONE_STYLES'][] = 'variables';
$GLOBALS['ZERO_ONE_STYLES'][] = 'mixins';
$GLOBALS['ZERO_ONE_STYLES'][] = 'normalize';
$GLOBALS['ZERO_ONE_STYLES'][] = 'base';
$GLOBALS['ZERO_ONE_STYLES'][] = 'layout';
$GLOBALS['ZERO_ONE_STYLES'][] = 'utilities';
// $GLOBALS['ZERO_ONE_STYLES'][] = '0.1';
// $GLOBALS['ZERO_ONE_STYLES'][] = '';
// $GLOBALS['ZERO_ONE_STYLES'][] = '';
// $GLOBALS['ZERO_ONE_STYLES'][] = '';

/**
 * Backend Modules
 */
array_insert($GLOBALS['BE_MOD']['contaoThemesNet'], 1, array
(
    'zeroOneThemeSetup' => array
    (
        'callback'          => 'ContaoThemesNet\\ZeroOneThemeBundle\\Module\\ZeroOneThemeSetup',
        'tables'            => array(),
        'stylesheet'		=> 'bundles/contaothemesnetzeroonetheme/scss/backend.css'
    ),
));
