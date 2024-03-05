<?php

use Contao\Config;
use Contao\CoreBundle\DataContainer\PaletteManipulator;
use Contao\System;

PaletteManipulator::create()
	->addLegend('megamenu_legend', 'meta_legend', PaletteManipulator::POSITION_AFTER)
	->addField('megamenuImage', 'megamenu_legend', PaletteManipulator::POSITION_APPEND)
	->addField('megamenuImageSize', 'megamenu_legend', PaletteManipulator::POSITION_APPEND)
	->applyToPalette('regular', 'tl_page')
	->applyToPalette('forward', 'tl_page')
	->applyToPalette('redirect', 'tl_page')
;

$GLOBALS['TL_DCA']['tl_page']['fields']['megamenuImage'] = [
	'inputType' => 'fileTree',
	'exclude' => true,
	'eval' => ['fieldType' => 'radio', 'files' => true, 'filesOnly' => true, 'extensions' => Config::get('validImageTypes')],
	'sql' => 'blob NULL',
];

$GLOBALS['TL_DCA']['tl_page']['fields']['megamenuImageSize'] = [
	'label' => &$GLOBALS['TL_LANG']['MSC']['imgSize'],
	'exclude' => true,
	'inputType' => 'imageSize',
	'eval' => ['rgxp' => 'natural', 'includeBlankOption' => true, 'nospace' => true, 'helpwizard' => true, 'tl_class' => 'w50'],
	'options_callback' => static fn () => System::getContainer()->get('contao.image.image_sizes')->getOptionsForUser(BackendUser::getInstance()),
	'sql' => 'TEXT null',
];
