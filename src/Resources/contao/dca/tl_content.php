<?php

/**
 * Add palette to tl_content
 */

$GLOBALS['TL_DCA']['tl_content']['palettes']['tabsNavElement'] = '{type_legend},type;{tabs_nav_legend},tabs_navigation;{expert_legend:hide},cssID;{advanced_classes_legend},advancedCss;{invisible_legend:hide},invisible,start,stop;';
$GLOBALS['TL_DCA']['tl_content']['palettes']['tabsStartElement'] = '{type_legend},type;{tabs_nav_legend},tabs_element;{expert_legend:hide},cssID;{advanced_classes_legend},advancedCss;{invisible_legend:hide},invisible,start,stop;';
$GLOBALS['TL_DCA']['tl_content']['palettes']['tabsStopElement'] = '{type_legend},type;{invisible_legend:hide},invisible,start,stop;';

/**
 * Add fields to tl_content
 */

$GLOBALS['TL_DCA']['tl_content']['fields']['tabs_navigation'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['tabs_navigation'],
    'exclude' => true,
    'inputType' => 'optionWizard',
    'eval' => ['allowHtml'=>true, 'tl_class'=>'clr'],
    'sql' => "blob NULL"
];

$GLOBALS['TL_DCA']['tl_content']['fields']['tabs_element'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['tabs_element'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => ['tl_class'=>'w50'],
    'sql' => "text NULL"
];
