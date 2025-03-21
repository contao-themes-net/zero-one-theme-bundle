<?php

declare(strict_types=1);

/*
 * 0.1 theme for Contao Open Source CMS
 *
 * Copyright (C) 2025 pdir / digital agentur // pdir GmbH
 *
 * @package    contao-themes-net/zero-one-theme-bundle
 * @link       https://github.com/contao-themes-net/zero-one-theme-bundle
 * @license    pdir contao theme licence
 * @author     Mathias Arzberger <develop@pdir.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ContaoThemesNet\ZeroOneThemeBundle\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class ThemeStyleExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('addToThemeStyles', [$this, 'addStylesToGlobal']),
        ];
    }

    /**
     * @param array<int, string> $styles
     */
    public function addStylesToGlobal(array $styles): void
    {
        $GLOBALS['ZERO_ONE_STYLES'] = array_merge($GLOBALS['ZERO_ONE_STYLES'], $styles);
    }
}
