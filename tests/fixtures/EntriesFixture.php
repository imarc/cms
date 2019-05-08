<?php
/**
 * @link https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license https://craftcms.github.io/license/
 */

namespace craftunit\fixtures;

use \craft\test\elementfixtures\EntriesFixture as BaseEntriesFixture;

/**
 * Class EntriesFixture
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @author Global Network Group | Giel Tettelaar <giel@yellowflash.net>
 * @since 3.1
 */
class EntriesFixture extends BaseEntriesFixture
{
    // Properties
    // =========================================================================

    /**
     * @inheritdoc
     */
    public $dataFile = __DIR__.'/data/entries.php';

    /**
     * @inheritdoc
     */
    public $depends = [SectionsFixture::class, EntryTypeFixture::class];
}