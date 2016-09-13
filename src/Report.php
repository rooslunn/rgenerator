<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 9/13/16
 * Time: 11:47
 */

namespace Provectus\RGenerator;


final class Report
{
    protected $parts = [];

    public function addParr(ReportPartInterface $part)
    {
        $this->parts[] = $part;
    }

    public function clear()
    {
        $this->parts = [];
    }

    public function render()
    {
        foreach ($this->parts as $part) {
            echo $part->render() . PHP_EOL;
        }
    }
}