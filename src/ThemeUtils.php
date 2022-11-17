<?php

namespace ContaoThemesNet\ZeroOneThemeBundle;

use Contao\File;
use Contao\System;
use Contao\StringUtil;

class ThemeUtils
{
    public static function getRootDir() {
        return System::getContainer()->getParameter('kernel.project_dir');
    }

    public static function getWebDir() {
        return StringUtil::stripRootDir(System::getContainer()->getParameter('contao.web_dir'));
    }

    public static function getCombinedStylesheet() {
        $scssStr = '';
        $styles = implode(" ,",array_unique($GLOBALS['ZERO_ONE_STYLES']));

        if (isset($GLOBALS['CUSTOM_STYLES'])) {
            $styles .= ','.implode(" ,",array_unique($GLOBALS['CUSTOM_STYLES']));
        }

        $hash = hash('ripemd160', $styles);
        $objFile = new File('var/cache/zeroOne/scss/' . $hash . '.scss');

        if(!$objFile->exists()) {
            // add 0.1 to end of array
            $GLOBALS['ZERO_ONE_STYLES'][] = '_0.1';
            $GLOBALS['ZERO_ONE_STYLES'] = array_unique($GLOBALS['ZERO_ONE_STYLES']);

            foreach($GLOBALS['ZERO_ONE_STYLES'] as $style) {
                $scssStr .= sprintf('@import "../../../../%s/bundles/contaothemesnetzeroonetheme/scss/%s.scss";%s',
                    self::getWebDir(),
                    $style,
                    "\n"
                );
            }

            if (!isset($GLOBALS['CUSTOM_STYLES'])) {
                $GLOBALS['CUSTOM_STYLES'] = [];
            }

            $GLOBALS['CUSTOM_STYLES'] = array_unique($GLOBALS['CUSTOM_STYLES']);

            foreach($GLOBALS['CUSTOM_STYLES'] as $style) {
                $scssStr .= sprintf('@import "../../../../%s.scss";%s',
                    $style,
                    "\n"
                );
            }

            $objFile->write($scssStr);
            $objFile->close();
        }

        $GLOBALS['TL_CSS'][] = $objFile->path . '|static';
    }
}
