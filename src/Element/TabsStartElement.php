<?php

namespace ContaoThemesNet\ZeroOneThemeBundle\Element;

use Contao\BackendTemplate;
use Contao\ContentElement;
use Contao\System;
use Symfony\Component\HttpFoundation\Request;

class TabsStartElement extends ContentElement
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
		if (System::getContainer()->get('contao.routing.scope_matcher')->isBackendRequest(System::getContainer()->get('request_stack')->getCurrentRequest() ?? Request::create('')))
        {
            $this->strTemplate = 'be_wildcard';
            $this->Template = new BackendTemplate($this->strTemplate);
        }

        $this->Template->tabsElement = $this->tabs_element;
    }
}
