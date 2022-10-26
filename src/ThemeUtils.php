<?php

declare(strict_types=1);

/*
 * 0.1 theme for Contao Open Source CMS
 *
 * Copyright (C) 2022 pdir / digital agentur // pdir GmbH
 *
 * @package    contao-themes-net/zero-one-theme-bundle
 * @link       https://github.com/contao-themes-net/zero-one-theme-bundle
 * @license    pdir contao theme licence
 * @author     Mathias Arzberger <develop@pdir.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ContaoThemesNet\ZeroOneThemeBundle;

use Contao\File;
use Contao\StringUtil;
use Contao\System;
use ScssPhp\ScssPhp\Compiler;
use Symfony\Component\Filesystem\Path;

class ThemeUtils
{
    public static string $themeFolder = 'bundles/contaothemesnetzeroonetheme/';
    public static string $scssFolder = 'scss/';

    public static function getRootDir(): string
    {
        return System::getContainer()->getParameter('kernel.project_dir');
    }

    public static function getWebDir(): string
    {
        return StringUtil::stripRootDir(System::getContainer()->getParameter('contao.web_dir'));
    }

    public static function getCombinedStylesheet(null|bool|string $theme = null): void
    {
        self::$scssFolder = Path::join(self::getWebDir(), 'bundles', self::$themeFolder, self::$scssFolder);

        $scssStr = '';
        $hash = hash('ripemd160', implode(' ,', $GLOBALS['ZERO_ONE_STYLES']));
        $objFile = new File('var/cache/zeroOne/scss/'.$hash.'.scss');

        if (!$objFile->exists()) {
            // add 0.1 to end of array
            $GLOBALS['ZERO_ONE_STYLES'][] = '_0.1';
            $GLOBALS['ZERO_ONE_STYLES'] = array_unique($GLOBALS['ZERO_ONE_STYLES']);

            foreach ($GLOBALS['ZERO_ONE_STYLES'] as $style) {
                $scssStr .= sprintf(
                    '@import "%s.scss";%s',
                    $style,
                    "\n"
                );
            }

            if (!isset($GLOBALS['CUSTOM_STYLES'])) {
                $GLOBALS['CUSTOM_STYLES'] = [];
            }

            $GLOBALS['CUSTOM_STYLES'] = array_unique($GLOBALS['CUSTOM_STYLES']);

            foreach ($GLOBALS['CUSTOM_STYLES'] as $style) {
                $scssStr .= sprintf(
                    '@import "../../../../%s.scss";%s',
                    $style,
                    "\n"
                );
            }

            // add custom
            $scssStr .= "@import \"custom.scss\";\n";
            $scssStr .= "@import \"_custom_variables.scss\";\n";

            $objFile->write($scssStr);
            $objFile->close();
        }

        if ($objFile->exists()) {
            $scssStr = $objFile->getContent();
        }

        $compiler = new Compiler();
        $compiler->setImportPaths([
            self::getRootDir().'/'.self::$scssFolder,
            self::getRootDir().'/files/zeroOne/scss/',
        ]);

        $objFile = new File('assets/css/zeroOne.'.$hash.'.css');
        $objFile->write($compiler->compileString($scssStr)->getCss());
        $objFile->close();

        $GLOBALS['TL_CSS'][] = $objFile->path.'|static';
    }
}
