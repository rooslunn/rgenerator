<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 9/13/16
 * Time: 12:06
 */

namespace Provectus\RGenerator;


final class ReportGenerator
{
    const REPORT_COUNT = 2;

    public function run()
    {
        $header = new ReportHeader();
        $footer = new ReportFooter();

        for ($i = 1; $i <= self::REPORT_COUNT; ++$i)
        {
            $report = new Report();

            $report->addPart($header);
            $report->addPart(new ReportBody("Body for Report $i"));
            $report->addPart($footer);

            echo "==> Generating Report $i\n";
            echo $report->render();
            echo "==> Done.\n";
            echo PHP_EOL;
        }
    }
}