<?php

namespace ContaoThemesNet\ZeroOneThemeBundle\Element;

class TabsStartElement extends \ContentElement
{
    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_tabs_start_zeroone';

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

        $this->Template->tabsElement = $this->tabs_element;
    }
}
