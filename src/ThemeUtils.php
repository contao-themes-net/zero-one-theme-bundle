<?php

namespace ContaoThemesNet\ZeroOneThemeBundle;

use Contao\File;
use Contao\System;
use Contao\StringUtil;

class ThemeUtils
{
    public static string $themeFolder = 'bundles/contaothemesnetzeroonetheme/';
    public static string $scssFolder = 'scss/';

    public static function getRootDir()
    {
        return System::getContainer()->getParameter('kernel.project_dir');
    }

    public static function getWebDir()
    {
        return StringUtil::stripRootDir(System::getContainer()->getParameter('contao.web_dir'));
    }

    public static function getCombinedStylesheet($theme = null): void
    {
        self::$scssFolder = self::$themeFolder.self::$scssFolder;

        // for multi domain setup
        if (null !== $theme) {
            self::$scssFolder = 'files/zeroOne/scss/'.$theme.'/';
        }

        $scssStr = '';
        $hash = hash('ripemd160', implode(" ,",$GLOBALS['ZERO_ONE_STYLES']));
        $objFile  = new File('var/cache/zeroOne/scss/' . $hash . '.scss');

        if(!$objFile->exists()) {
            // add 0.1 to end of array
            $GLOBALS['ZERO_ONE_STYLES'][] = '_0.1';
            $GLOBALS['ZERO_ONE_STYLES'] = array_unique($GLOBALS['ZERO_ONE_STYLES']);

            foreach($GLOBALS['ZERO_ONE_STYLES'] as $style) {
                $scssStr .= sprintf('@import "../../%s/bundles/contaothemesnetzeroonetheme/scss/%s.scss";%s',
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
