<?php
require_once realpath(dirname(__FILE__) . '/../vendor/autoload.php');
$br = php_sapi_name() === 'cli' ? PHP_EOL : '<br>';

use SMB\Pemojine\Helper\EmojiCounter;

use SMB\Pemojine\Container as PemojineContainer;
use SMB\Pemojine\Config\Vendor as ConfigVendor;

echo 'AllBigGroupCount: ' . EmojiCounter::getBigGroupCount(), $br;
echo 'AllMediumGroupCount: ' . EmojiCounter::getMediumGroupCount(), $br;
echo 'AllGroupCount: ' . EmojiCounter::getGroupCount(), $br;

// Coverage of each vendor.
foreach (ConfigVendor::$VENDORS_LIST as $vendor) {
    $class = 'SMB\Pemojine\Structure\Vendor\\'. $vendor;
    $repository = PemojineContainer::make(new $class());

    echo $br, '【' . $repository->getVendorName() . '】' , $br;

    $coverageOfBigGroup = EmojiCounter::getCoverageOfBigGroup($repository);
    echo 'Coverage of BigGroup ' . $coverageOfBigGroup->value . '% (' . $coverageOfBigGroup->formula . ')', $br;

    $coverageOfMediumGroup = EmojiCounter::getCoverageOfMediumGroup($repository);
    echo 'Coverage of MediumGroup ' . $coverageOfMediumGroup->value . '% (' . $coverageOfMediumGroup->formula . ')', $br;

    $coverageOfGroup = EmojiCounter::getCoverageOfGroup($repository);
    echo 'Coverage of Group ' . $coverageOfGroup->value . '% (' . $coverageOfGroup->formula . ')', $br;
}

// Coverage of Common.
$class = 'SMB\Pemojine\Structure\Vendor\\'. ConfigVendor::ALL_SUPPORTS_VENDOR_NAME;
$repository = PemojineContainer::make(new $class());

echo $br, '【' . $repository->getVendorName() . '】' , $br;

$coverageOfBigGroup = EmojiCounter::getCoverageOfBigGroup($repository);
echo 'Coverage of BigGroup ' . $coverageOfBigGroup->value . '% (' . $coverageOfBigGroup->formula . ')', $br;

$coverageOfMediumGroup = EmojiCounter::getCoverageOfMediumGroup($repository);
echo 'Coverage of MediumGroup ' . $coverageOfMediumGroup->value . '% (' . $coverageOfMediumGroup->formula . ')', $br;

$coverageOfGroup = EmojiCounter::getCoverageOfGroup($repository);
echo 'Coverage of Group ' . $coverageOfGroup->value . '% (' . $coverageOfGroup->formula . ')', $br;
