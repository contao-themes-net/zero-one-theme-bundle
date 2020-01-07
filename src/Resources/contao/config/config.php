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

$GLOBALS['tl_config']['theme_tags'] = [
    '-',
    'ZeroOne01/01',
    'ZeroOne01/02',
    'ZeroOne01/03',
    'ZeroOne01/04',
    'ZeroOne01/05',
    'ZeroOne02/01',
    'ZeroOne02/02',
    'ZeroOne02/03',
    'ZeroOne02/04',
    'ZeroOne02/05',
    'ZeroOne03/01',
    'ZeroOne03/02',
    'ZeroOne03/03',
    'ZeroOne03/04',
    'ZeroOne03/05',
];

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
