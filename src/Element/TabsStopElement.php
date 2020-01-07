<?php

namespace ContaoThemesNet\ZeroOneThemeBundle\Element;

class TabsStopElement extends \ContentElement
{
    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_tabs_stop_0dot1';

    /**
     * Generate the content element
     */
    protected function compile()
    {
        if (TL_MODE == 'BE')
        {
            $this->strTemplate = 'be_wildcard';
            $this->Template = new \BackendTemplate($this->strTemplate);
        }
    }
}
