<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 9/13/16
 * Time: 11:22
 */

namespace Provectus\RGenerator;


interface ReportPartInterface
{
    public function render(): string;
}