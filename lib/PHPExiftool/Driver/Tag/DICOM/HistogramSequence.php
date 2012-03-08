<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class HistogramSequence extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0060,3000';

    protected $Name = 'HistogramSequence';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Histogram Sequence';

}