<?php
require_once realpath(dirname(__FILE__) . '/../vendor/autoload.php');
$br = php_sapi_name() === 'cli' ? PHP_EOL : '<br>';

use SMB\Pemojine\Container as PemojineContainer;
use SMB\Pemojine\Structure\Vendor;

// Create an instance of Google using a Container.
$pemojine = PemojineContainer::make(new Vendor\Google());

// Get the configured vendor name.
echo $pemojine->getVendorName(), $br; // => Google

// Get all BigGroups.
$allBigGroups = $pemojine->getAllBigGroups();

// $allBigGroups is an array with a big group name in the key and an object(BigGroup) in the value.
foreach ($allBigGroups as $bigGroupName => $bigGroup) {
    echo 'BigGroupName::' . $bigGroupName/* or $bigGroup->getName() */, $br;
    foreach ($bigGroup as $mediumGroupName => $mediumGroup) {
        echo 'MediumGroupName::' . $mediumGroupName/* or $mediumGroup->getName() */, $br;
        foreach ($mediumGroup as $groupName => $group) {
            // Output shortName.
            echo 'Group::' . $groupName/* or $group->getName(), $group->getShortName() */, $br;
            // Output Emoji.
            echo $group->output(), $br;
            // Output HTML reference character. e.g) '&#x1F600;', '&#x1F1EF;&#x1F1F5;'
            echo htmlspecialchars($group->outputHtml(), ENT_QUOTES, 'UTF-8'), $br;
            // Get unicode. e.g.) 'U+1F600', 'U+1F1EF U+1F1F5'
            echo $group->getUnicode(), $br;
            // Get unicode with removed blank. e.g.) 'U+1F600', 'U+1F1EFU+1F1F5'
            echo $group->getUnicodeWithRemovedBlank(), $br;
            // Get UTF8 string. e.g.) '\u{1F600}', '\u{1F1EF} \u{1F1F5}'
            echo $group->getUtf8String(), $br;
            // Get UTF8 string with removed blank. e.g.) '\u{1F600}', '\u{1F1EF}\u{1F1F5}'
            echo $group->getUtf8StringWithRemovedBlank(), $br;
            // Get aliases of shortName
            $alias = implode(' ', $group->getAliasesOfName()/* or $group->getAliasesOfShortName() */);
            echo htmlspecialchars($alias, ENT_QUOTES, 'UTF-8'), $br;
        }
    }
}

/*
 |----------------------------------------------------------------------
 | The example below is almost the same as above.
 |----------------------------------------------------------------------
 */

// Get all MediumGroups.
$allMediumGroups = $pemojine->getAllMediumGroups();

// $allMediumGroups is an array with a medium group name in the key and an object(MediumGroup) in the value.
foreach ($allMediumGroups as $mediumGroupName => $mediumGroup) {
    echo 'MediumGroupName::' . $mediumGroupName, $br;
    foreach ($mediumGroup as $groupName => $group) {
        echo 'Group::' . $groupName, $br;
        echo $group->output(), $br;
        echo htmlspecialchars($group->outputHtml(), ENT_QUOTES, 'UTF-8'), $br;
        echo $group->getUnicode(), $br;
        echo $group->getUnicodeWithRemovedBlank(), $br;
        echo $group->getUtf8String(), $br;
        echo $group->getUtf8StringWithRemovedBlank(), $br;
        $alias = implode(' ', $group->getAliasesOfName());
        echo htmlspecialchars($alias, ENT_QUOTES, 'UTF-8'), $br;
    }
}

// Get all Groups.
$allGroups = $pemojine->getAllGroups();

// $allGroups is an array with a group name(short name) in the key and an object(Group) in the value.
foreach ($allGroups as $groupName => $group) {
    echo 'Group::' . $groupName, $br;
    echo $group->output(), $br;
    echo htmlspecialchars($group->outputHtml(), ENT_QUOTES, 'UTF-8'), $br;
    echo $group->getUnicode(), $br;
    echo $group->getUnicodeWithRemovedBlank(), $br;
    echo $group->getUtf8String(), $br;
    echo $group->getUtf8StringWithRemovedBlank(), $br;
    $alias = implode(' ', $group->getAliasesOfName());
    echo htmlspecialchars($alias, ENT_QUOTES, 'UTF-8'), $br;
}
