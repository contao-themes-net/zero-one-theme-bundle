<?php

declare(strict_types=1);

/*
 * 0.1 theme for Contao Open Source CMS
 *
 * Copyright (C) 2022 pdir / digital agentur // pdir GmbH
 *
 * @package    contao-themes-net/zero-one-theme-bundle
 * @link       https://github.com/contao-themes-net/zero-one-theme-bundle
 * @license    pdir contao theme licence
 * @author     Mathias Arzberger <develop@pdir.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ContaoThemesNet\ZeroOneThemeBundle\Migration;

use Contao\CoreBundle\Migration\AbstractMigration;
use Contao\CoreBundle\Migration\MigrationResult;
use Doctrine\DBAL\Connection;

/**
 * @internal
 */
class Version200Update extends AbstractMigration
{
    /**
     * @var Connection
     */
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    /**
     * @throws \Exception
     */
    public function shouldRun(): bool
    {
        $schemaManager = $this->connection->createSchemaManager();

        // If the database table itself does not exist we should do nothing
        if (!$schemaManager->tablesExist(['tl_content'])) {
            return false;
        }

        $test = $this->connection->fetchOne("
            SELECT
                id
            FROM
                tl_content
            WHERE
                customTpl = 'ce_hyperlink_button_zeroone' OR 
                customTpl = 'ce_hyperlink_zeroone' OR 
                customTpl = 'ce_toplink_zeroone' OR 
                customTpl = 'ce_headline_zeroone' OR 
                customTpl = 'ce_code_zeroone' OR 
                customTpl = 'ce_table_zeroone' OR 
                customTpl = 'ce_gallery_zeroone' OR 
                customTpl = 'ce_download_zeroone' OR 
                customTpl = 'ce_downloads_zeroone' OR 
                customTpl = 'ce_youtube_zeroone' OR 
                cssID LIKE '%headline-dotted%'
        ");

        return false !== $test;
    }

    /**
     * @throws \Exception
     */
    public function run(): MigrationResult
    {
        // change templates
        $this->connection->executeStatement("
            UPDATE
                tl_content
            SET
                customTpl = 'content_element/hyperlink/button_zeroone'
            WHERE
                customTpl = 'ce_hyperlink_button_zeroone'
        ");

        $this->connection->executeStatement("
            UPDATE
                tl_content
            SET
                customTpl = ''
            WHERE
                customTpl = 'ce_hyperlink_zeroone'
        ");

        $this->connection->executeStatement("
            UPDATE
                tl_content
            SET
                customTpl = ''
            WHERE
                customTpl = 'ce_toplink_zeroone'
        ");

        $this->connection->executeStatement("
            UPDATE
                tl_content
            SET
                customTpl = ''
            WHERE
                customTpl = 'ce_headline_zeroone'
        ");

        $this->connection->executeStatement("
            UPDATE
                tl_content
            SET
                customTpl = 'content_element/code/code_zeroone'
            WHERE
                customTpl = 'ce_code_zeroone'
        ");

        $this->connection->executeStatement("
            UPDATE
                tl_content
            SET
                customTpl = 'content_element/table/table_zeroone'
            WHERE
                customTpl = 'ce_table_zeroone'
        ");

        $this->connection->executeStatement("
            UPDATE
                tl_content
            SET
                customTpl = 'content_element/gallery/gallery_zeroone'
            WHERE
                customTpl = 'ce_gallery_zeroone'
        ");

        $this->connection->executeStatement("
            UPDATE
                tl_content
            SET
                customTpl = 'content_element/download/download_zeroone'
            WHERE
                customTpl = 'ce_download_zeroone'
        ");

        $this->connection->executeStatement("
            UPDATE
                tl_content
            SET
                customTpl = 'content_element/downloads/downloads_zeroone'
            WHERE
                customTpl = 'ce_downloads_zeroone'
        ");

        $this->connection->executeStatement("
            UPDATE
                tl_content
            SET
                customTpl = 'content_element/youtube/youtube_zeroone'
            WHERE
                customTpl = 'ce_youtube_zeroone'
        ");

        $this->connection->executeStatement("
            UPDATE
                tl_content
            SET
                customTpl = 'content_element/headline/dotted_zeroone',
                cssID = REPLACE(cssID, 's:15:\"headline-dotted\";', 's:0:\"\";')
            WHERE
                cssID LIKE '%headline-dotted%'
        ");

        return $this->createResult(
            true
        );
    }
}
