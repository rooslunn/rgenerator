<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 9/13/16
 * Time: 11:45
 */

namespace Provectus\RGenerator;


final class ReportFooter extends ReportPart
{
    const FOOTER = 'Common Footer';

    public function __construct()
    {
        $this->content = self::FOOTER;
    }
}