<?php

namespace ContaoThemesNet\ZeroOneThemeBundle\Tests;

use ContaoThemesNet\ZeroOneThemeBundle\ContaoThemesNetZeroOneThemeBundle;
use PHPUnit\Framework\TestCase;

class ContaoThemesNetZeroOneThemeBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoThemesNetZeroOneThemeBundle();

        $this->assertInstanceOf('ContaoThemesNet\ZeroOneThemeBundle\ContaoThemesNetZeroOneThemeBundle', $bundle);
    }
}
