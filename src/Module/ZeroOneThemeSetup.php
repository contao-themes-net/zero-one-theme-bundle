<?php

namespace ContaoThemesNet\ZeroOneThemeBundle\Module;

use Contao\File;
use Contao\Folder;
use Contao\StringUtil;
use Contao\System;
use ContaoThemesNet\ZeroOneThemeBundle\ThemeUtils;

class ZeroOneThemeSetup extends \BackendModule
{
    const VERSION = '1.13.1';

    protected $strTemplate = 'be_zeroonetheme_setup';

    /**
     * Generate the module
     */
    protected function compile()
    {
        switch (\Input::get('act'))
        {
            case 'syncFolder':
                $path = sprintf('%s/%s/bundles/contaothemesnetzeroonetheme',
                    ThemeUtils::getRootDir(),
                    ThemeUtils::getWebDir());
                if (!file_exists("files/zeroOne"))
                {
                    new Folder("files/zeroOne");
                }

                $this->getFiles($path);
                $this->getSqlFiles(ThemeUtils::getRootDir() . "/vendor/contao-themes-net/zero-one-theme-bundle/src/templates");
                $this->Template->message = true;
                break;
            case 'truncateTlFiles':
                $this->import('Database');
                $this->Database->prepare("TRUNCATE tl_files")->execute();
                $this->Template->messageTruncate = true;
                break;
        }
        $this->Template->version = ZeroOneThemeSetup::VERSION;
    }

    protected function getFiles($path)
    {
        foreach (scan($path) as $dir)
        {
            if (!is_dir($path."/".$dir))
            {
                $pos = strpos($path,"contaothemesnetzeroonetheme");
                $filesFolder = "files/zeroOne".str_replace("contaothemesnetzeroonetheme","",substr($path,$pos))."/".$dir;

                if ($dir == "_custom_variables.scss" || $dir == "custom.scss")
                {
                    if (!file_exists(ThemeUtils::getRootDir()."/".$filesFolder))
                    {
                        $objFile = new File(ThemeUtils::getWebDir()."/bundles/".substr($path,$pos)."/".$dir, true);
                        $objFile->copyTo($filesFolder);
                    }
                }
                else if (strpos($filesFolder,"/img/") !== false || strpos($filesFolder,"/css/") !== false || strpos($filesFolder,".public") !== false)
                {
                    if (!file_exists(ThemeUtils::getRootDir()."/".$filesFolder))
                    {
                        $objFile = new File(ThemeUtils::getWebDir()."/bundles/".substr($path,$pos)."/".$dir, true);
                        $objFile->copyTo($filesFolder);
                    }
                }
            }
            else
            {
                $folder = $path."/".$dir;
                $pos = strpos($path,"contaothemesnetzeroonetheme");
                $filesFolder = "files/zeroOne".str_replace("contaothemesnetzeroonetheme","",substr($path,$pos))."/".$dir;

                if ($dir == "scss" || $dir == "img" || $dir == "css")
                {
                    if (!file_exists($filesFolder))
                    {
                        new Folder($filesFolder);
                    }

                    $this->getFiles($folder);
                }
            }
        }
    }

    protected function getSqlFiles($path)
    {
        foreach (scan($path) as $dir)
        {
            if (!is_dir($path."/".$dir))
            {
                $pos = strpos($path,"/vendor");
                $filesFolder = "templates/" . $dir;
                $objFile = new File(substr($path,$pos)."/".$dir, true);
                $objFile->copyTo($filesFolder);
            }
        }
    }
}
