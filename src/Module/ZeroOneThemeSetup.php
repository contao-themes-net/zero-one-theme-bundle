<?php

namespace ContaoThemesNet\ZeroOneThemeBundle\Module;

use Contao\BackendModule;

class ZeroOneThemeSetup extends BackendModule
{
    const VERSION = '2.0.0';

    protected $strTemplate = 'be_zeroonetheme_setup';

    /**
     * Generate the module
     */
    protected function compile()
    {
        $this->Template->version = ZeroOneThemeSetup::VERSION;
    }
}
