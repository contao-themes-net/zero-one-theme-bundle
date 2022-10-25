<?php

namespace ContaoThemesNet\ZeroOneThemeBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ContaoThemesNetZeroOneThemeBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
