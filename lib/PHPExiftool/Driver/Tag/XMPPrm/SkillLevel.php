<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPPrm;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class SkillLevel extends AbstractTag
{

    protected $Id = 'skillLevel';

    protected $Name = 'SkillLevel';

    protected $FullName = 'XMP::prm';

    protected $GroupName = 'XMP-prm';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-prm';

    protected $g2 = 'Document';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Skill Level';

    protected $flag_Avoid = true;

}
