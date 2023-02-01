<?php

declare(strict_types=1);

/*
 * 0.1 theme for Contao Open Source CMS
 *
 * Copyright (C) 2023 pdir / digital agentur // pdir GmbH
 *
 * @package    contao-themes-net/zero-one-theme-bundle
 * @link       https://github.com/contao-themes-net/zero-one-theme-bundle
 * @license    pdir contao theme licence
 * @author     Mathias Arzberger <develop@pdir.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ContaoThemesNet\ZeroOneThemeBundle\Element;

use Contao\BackendTemplate;
use Contao\ContentElement;
use Contao\System;
use Symfony\Component\HttpFoundation\Request;

class TabsStopElement extends ContentElement
{
    /**
     * Template.
     *
     * @var string
     */
    protected $strTemplate = 'ce_tabs_stop_zeroone';

    /**
     * Generate the content element.
     */
    protected function compile(): void
    {
        if (System::getContainer()->get('contao.routing.scope_matcher')->isBackendRequest(System::getContainer()->get('request_stack')->getCurrentRequest() ?? Request::create(''))) {
            $this->strTemplate = 'be_wildcard';
            $this->Template = new BackendTemplate($this->strTemplate);
        }
    }
}
