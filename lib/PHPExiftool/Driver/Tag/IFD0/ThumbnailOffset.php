<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class ThumbnailOffset extends AbstractTag
{

    protected $Id = 513;

    protected $Name = 'ThumbnailOffset';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'IFD0';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Thumbnail Offset';

    protected $flag_Protected = true;

    protected $Index = 1;

}
