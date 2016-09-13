<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 9/13/16
 * Time: 11:46
 */

namespace Provectus\RGenerator;


final class ReportBody extends ReportPart
{
    public function __construct(string $body)
    {
        $this->content = $body;
    }
}