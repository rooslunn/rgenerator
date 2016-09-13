<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 9/13/16
 * Time: 11:42
 */

namespace Provectus\RGenerator;


final class ReportHeader extends ReportPart
{
    const HEADER = 'Common Header';

    public function __construct()
    {
        $this->content = self::HEADER;
    }
}