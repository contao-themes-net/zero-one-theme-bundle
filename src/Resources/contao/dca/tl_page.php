<?php

use Contao\Config;
use Contao\CoreBundle\DataContainer\PaletteManipulator;

PaletteManipulator::create()
    ->addLegend('megamenu_legend', 'meta_legend', PaletteManipulator::POSITION_AFTER)
    ->addField('megamenuImage', 'megamenu_legend', PaletteManipulator::POSITION_APPEND)
    ->applyToPalette('regular', 'tl_page')
;

$GLOBALS['TL_DCA']['tl_page']['fields']['megamenuImage'] = [
    'inputType' => 'fileTree',
    'exclude' => true,
    'eval' => ['fieldType' => 'radio', 'files' => true, 'filesOnly' => true, 'extensions' => Config::get('validImageTypes')],
    'sql' => 'blob NULL',
];
