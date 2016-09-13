<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 9/13/16
 * Time: 11:34
 */

namespace Provectus\RGenerator;


class ReportPart implements ReportPartInterface
{
    protected $content;

    /**
     * @param string $content
     */
    public function setContent(string $content)
    {
        $this->content = $content;
    }

    public function render(): string
    {
        return $this->content;
    }
}