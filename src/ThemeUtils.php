<?php

namespace ContaoThemesNet\ZeroOneThemeBundle;

use Contao\File;
use Contao\System;

class ThemeUtils
{
    public static $strRootDir;
    public static $strWebDir;

    /**
     * public pseudo constructor.
     */
    public static function construct()
    {
        self::$strRootDir = System::getContainer()->getParameter('kernel.project_dir');
        self::$strWebDir = StringUtil::stripRootDir(System::getContainer()->getParameter('contao.web_dir'));
    }

    public static function getCombinedStylesheet() {

        $scssStr = '';
        $hash = hash('ripemd160', implode(" ,",$GLOBALS['ZERO_ONE_STYLES']));
        $objFile  = new File('var/cache/zeroOne/scss/' . $hash . '.scss');

        if(!$objFile->exists()) {
            // add 0.1 to end of array
            $GLOBALS['ZERO_ONE_STYLES'][] = '_0.1';
            $GLOBALS['ZERO_ONE_STYLES'] = array_unique($GLOBALS['ZERO_ONE_STYLES']);

            foreach($GLOBALS['ZERO_ONE_STYLES'] as $style) {
                $scssStr .= sprintf('@import "../../../../%s/bundles/contaothemesnetzeroonetheme/scss/%s.scss;%s',
                    self::$strWebDir,
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