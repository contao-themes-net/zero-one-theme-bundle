<?php

namespace ContaoThemesNet\ZeroOneThemeBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use ContaoThemesNet\ZeroOneThemeBundle\ContaoThemesNetZeroOneThemeBundle;
use ContaoThemesNet\ThemeComponentsBundle\ThemeComponentsBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoThemesNetZeroOneThemeBundle::class)
                ->setLoadAfter([
                    ContaoCoreBundle::class,
                    ThemeComponentsBundle::class
                ]),
        ];
    }
}
