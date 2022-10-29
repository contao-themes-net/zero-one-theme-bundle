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

namespace ContaoThemesNet\ZeroOneThemeBundle\Tests;

use ContaoThemesNet\ZeroOneThemeBundle\ContaoThemesNetZeroOneThemeBundle;
use PHPUnit\Framework\TestCase;

class ContaoThemesNetZeroOneThemeBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new ContaoThemesNetZeroOneThemeBundle();

        $this->assertInstanceOf('ContaoThemesNet\ZeroOneThemeBundle\ContaoThemesNetZeroOneThemeBundle', $bundle);
    }
}
