<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class SeriesType extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0054,1000';

    protected $Name = 'SeriesType';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Series Type';

}