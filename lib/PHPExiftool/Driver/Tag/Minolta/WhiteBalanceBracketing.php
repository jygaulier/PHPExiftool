<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Minolta;

class WhiteBalanceBracketing extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'WhiteBalanceBracketing';

    protected $FullName = 'mixed';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'White Balance Bracketing';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 8,
            'Label' => 'Low',
        ),
        1 => array(
            'Id' => 9,
            'Label' => 'High',
        ),
        2 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        3 => array(
            'Id' => 1,
            'Label' => 'Low',
        ),
        4 => array(
            'Id' => 2,
            'Label' => 'High',
        ),
    );

}
