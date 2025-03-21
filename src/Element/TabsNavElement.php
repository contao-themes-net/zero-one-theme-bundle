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

namespace ContaoThemesNet\ZeroOneThemeBundle\Element;

use Contao\ContentElement;
use Contao\StringUtil;

class TabsNavElement extends ContentElement
{
    /**
     * Template.
     *
     * @var string
     */
    protected $strTemplate = 'ce_tabs_nav_zeroone';

    /**
     * Generate the content element.
     */
    protected function compile(): void
    {
        $arrItems = [];
        $items = StringUtil::deserialize($this->tabs_navigation, true);
        $limit = \count($items) - 1;

        for ($i = 0, $c = \count($items); $i < $c; ++$i) {
            if (!isset($items[$i]['default'])) {
                $items[$i]['default'] = '';
            }

            $arrItems[] = [
                'class' => 0 === $i ? 'first' : ($i === $limit ? 'last' : ''),
                'content' => $items[$i]['label'],
                'value' => $items[$i]['value'],
                'default' => $items[$i]['default'],
            ];
        }

        $this->Template->items = $arrItems;
    }
}
