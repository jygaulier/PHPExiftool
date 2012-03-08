<?php

namespace PHPExiftool\Driver\Tag\ICCHeader;

class PrimaryPlatform extends \PHPExiftool\Driver\Tag
{

    protected $Id = 40;

    protected $Name = 'PrimaryPlatform';

    protected $FullName = 'ICC_Profile::Header';

    protected $GroupName = 'ICC-header';

    protected $g0 = 'ICC_Profile';

    protected $g1 = 'ICC-header';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = false;

    protected $Description = 'Primary Platform';

    protected $Values = array(
        'APPL' => array(
            'Id' => 'APPL',
            'Label' => 'Apple Computer Inc.',
        ),
        'MSFT' => array(
            'Id' => 'MSFT',
            'Label' => 'Microsoft Corporation',
        ),
        'SGI ' => array(
            'Id' => 'SGI ',
            'Label' => 'Silicon Graphics Inc.',
        ),
        'SUNW' => array(
            'Id' => 'SUNW',
            'Label' => 'Sun Microsystems Inc.',
        ),
        'TGNT' => array(
            'Id' => 'TGNT',
            'Label' => 'Taligent Inc.',
        ),
    );

}