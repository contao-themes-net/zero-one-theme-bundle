<?php

declare(strict_types=1);

/*
 * 0.1 theme for Contao Open Source CMS
 *
 * Copyright (C) 2024 pdir / digital agentur // pdir GmbH
 *
 * @package    contao-themes-net/zero-one-theme-bundle
 * @link       https://github.com/contao-themes-net/zero-one-theme-bundle
 * @license    pdir contao theme licence
 * @author     Mathias Arzberger <develop@pdir.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ContaoThemesNet\ZeroOneThemeBundle\Twig;

use Contao\CoreBundle\Framework\ContaoFramework;
use Contao\FilesModel;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class FileExtension extends AbstractExtension
{
    public function __construct(private readonly ContaoFramework $framework)
    {
    }

    public function getFilters(): array
    {
        return [
            new TwigFilter('file', [$this, 'getFile']),
        ];
    }

    /**
     * @return string|int|array<int, string>|float
     */
    public function getFile(?string $uuid, string|null $attribute = null): string|int|array|float
    {
        if (null === $uuid) {
            return '';
        }

        $filesAdapter = $this->framework->getAdapter(FilesModel::class);
        $filesModel = $filesAdapter->findByUuid($uuid);

        if (null === $filesModel) {
            return '';
        }

        return match ($attribute) {
            'pid' => $filesModel->pid,
            'tstamp' => $filesModel->tstamp,
            'type' => $filesModel->type,
            'path' => $filesModel->path,
            'extension' => $filesModel->extension,
            'hash' => $filesModel->hash,
            'lastModified' => $filesModel->lastModified,
            'name' => $filesModel->name,
            'importantPartX' => $filesModel->importantPartX,
            'importantPartY' => $filesModel->importantPartY,
            'importantPartWidth' => $filesModel->importantPartWidth,
            'importantPartHeight' => $filesModel->importantPartHeight,
            'absolutePath' => $filesModel->getAbsolutePath(),
            'metaFields' => $filesModel->getMetaFields(),
            'metadata' => $filesModel->getMetadata(),
            default => $filesModel->id,
        };
    }
}
