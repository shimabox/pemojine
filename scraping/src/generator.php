<?php
error_reporting(-1);
ini_set('display_errors', 1);

ini_set('memory_limit', -1);
set_time_limit(0);

require_once realpath(dirname(__FILE__) . '/../../vendor/autoload.php');

use SMB\Pemojine\Scraping\Parser\Parser;
use SMB\Pemojine\Scraping\Writer\Writer;
use SMB\Pemojine\Scraping\Result\Result;

use League\CLImate\CLImate;

$time_start = microtime(true);

$isCLI = php_sapi_name() === 'cli';

$parser = new Parser();

// target
$fullEmojiListURL      = 'https://unicode.org/emoji/charts/full-emoji-list.html';
$fullEmojiModifiersURL = 'https://unicode.org/emoji/charts/full-emoji-modifiers.html';

if ($isCLI) {
    $climate = new CLImate;
    $progress = $climate->progress()->total(100);
}

// scraping and parsing
!$isCLI ?: $progress->advance(1, 'Start scraping and parse 1.');
$ret = $parser->parse($fullEmojiListURL, 'full-emoji-list');
!$isCLI ?: $progress->advance(19, 'End scraping and parse 1.');

!$isCLI ?: $progress->advance(1, 'Start scraping and parse 2.');
$ret2 = $parser->parse($fullEmojiModifiersURL, 'full-emoji-modifiers');
!$isCLI ?: $progress->advance(19, 'End scraping and parse 2.');

!$isCLI ?: $progress->advance(1, 'Start merge.');
$parser->merge($ret, $ret2);
!$isCLI ?: $progress->advance(19, 'End merge.');

// write
!$isCLI ?: $progress->advance(1, 'Start write.');
$writer = new Writer($ret);
$writer->init();
$writer->write();
!$isCLI ?: $progress->advance(19, 'End write.');

$bigGroupCnt = count($ret);
$mediumGroupCnt = 0;
$groupCnt = 0;

$result = new Result();
foreach ($ret->getBigGroups() as $bigGroup) {
    $bigGroupName = $bigGroup->bigGroupName;
    $mediumGroupCnt += count($bigGroup);

    foreach ($bigGroup->getMediumGroups() as $mediumGroup) {
        $mediumGroupName = $mediumGroup->groupName;
        $groupCnt += count($mediumGroup);

        foreach ($mediumGroup->getGroups() as $group) {
            $groupName = $group->shortName;

            $codes = [];
            foreach ($group->getCodes() as $code) {
                $codes[] = $code;
            }
            $unicode = implode(' ', $codes);

            $result->add(
                $bigGroupName, 
                $mediumGroupName, 
                $groupName, 
                implode(' ', $group->shortNameAliases),
                $unicode,
                $group->validWithApple,
                $group->validWithGoogle,
                $group->validWithTwitter,
                $group->validWithEmojiOne,
                $group->validWithFacebook,
                $group->validWithSamsung,
                $group->validWithWindows,
                $group->validWithGMail,
                $group->validWithSoftBank,
                $group->validWithDoCoMo,
                $group->validWithKDDI
            );
        }
    }
}

if ($isCLI) {
    $progress->advance(20, 'Done!!');

    $climate->br();

    $climate->table($result->getResult());

    $climate->br();

    $climate->border('*', 80);
    $padding = $climate->padding(17)->char(' ');
    $padding->label('BigGroupCount:')->result($bigGroupCnt);
    $padding->label('MediumGroupCount:')->result($mediumGroupCnt);
    $padding->label('GroupCount:')->result($groupCnt);
    $climate->border('*', 80);

    $climate->br();

    $climate->border('*', 80);
    $padding = $climate->padding(22)->char(' ');
    $padding->label('time:')->result((microtime(true) - $time_start) . ' sec.');
    $padding->label('memory_get_peak_usage:')->result(memory_get_peak_usage(true) . ' byte.');
    $climate->border('*', 80);

    exit;
}

$html = '<table border="1">';
foreach ($result->getResult() as $index => $table) {

    if ($index === 0) {
        $html .= '<tr>';

        foreach (array_keys($table) as $header) {
            $html .= '<th style="padding: 5px;">' . $header . '</th>';
        }

        $html .= '</tr>';
    }

    $html .= '<tr>';
    foreach ($table as $head => $value) {
        $html .= '<td style="padding: 5px 10px;">' . $value . '</td>';
    }
    $html .= '</tr>';

}
$html .= '</table>';

echo '<strong>Done!!</strong><br>';
echo $html;

echo 'BigGroupCount: ' . $bigGroupCnt . '<br>';
echo 'MediumGroupCount: ' . $mediumGroupCnt . '<br>';
echo 'GroupCount: ' . $groupCnt . '<br>';

echo '<br>';

echo 'time: ' . (microtime(true) - $time_start) . ' sec.<br>';
echo 'memory_get_peak_usage: ' . memory_get_peak_usage(true) . ' byte.<br>';
