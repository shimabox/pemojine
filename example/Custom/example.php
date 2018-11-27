<?php
require_once realpath(dirname(__FILE__) . '/../../vendor/autoload.php');
$br = php_sapi_name() === 'cli' ? PHP_EOL : '<br>';

use SMB\Pemojine\Container as PemojineContainer;

// Customized structure.
use SMB\Pemojine\Example\Custom\Structure\Vendor;

// Create an instance of `Original` using a Container.
$pemojine = PemojineContainer::make(new Vendor\Original());

// Get the configured vendor name.
echo $pemojine->getVendorName(), $br; // => Original

// Get all BigGroups.
$allBigGroups = $pemojine->getAllBigGroups();

// $allBigGroups is an array with a big group name in the key and an object(BigGroup) in the value.
foreach ($allBigGroups as $bigGroupName => $bigGroup) {
    echo 'BigGroupName::' . $bigGroupName/* or $bigGroup->getName() */, $br;
    foreach ($bigGroup as $mediumGroupName => $mediumGroup) {
        echo 'MediumGroupName::' . $mediumGroupName/* or $mediumGroup->getName() */, $br;
        foreach ($mediumGroup as $groupName => $group) {
            echo 'Group::' . $groupName/* or $group->getName(), $group->getShortName() */, $br;
            echo $group->output(), $br;
            echo htmlspecialchars($group->outputHtml(), ENT_QUOTES, 'UTF-8'), $br;
            echo $group->getUnicode(), $br;
            echo $group->getUnicodeWithRemovedBlank(), $br;
            echo $group->getUtf8String(), $br;
            echo $group->getUtf8StringWithRemovedBlank(), $br;
            $alias = implode(' ', $group->getAliasesOfName()/* or $group->getAliasesOfShortName() */);
            echo htmlspecialchars($alias, ENT_QUOTES, 'UTF-8'), $br;
        }
    }
}

/*
 |----------------------------------------------------------------------
 | When selecting randomly from Groups.
 |----------------------------------------------------------------------
 */
echo '---------- Selected randomly Group. ----------', $br;

// Select a Group at random
$selectedGroup = $pemojine->randomFromGroup();

echo $selectedGroup->getName()/* or $selectedGroup->getShortName() */, $br;
$alias = implode(' ', $selectedGroup->getAliasesOfName()/* or $selectedGroup->getAliasesOfShortName() */);
echo htmlspecialchars($alias, ENT_QUOTES, 'UTF-8'), $br;
echo $selectedGroup->output(), $br;
echo htmlspecialchars($selectedGroup->outputHtml(), ENT_QUOTES, 'UTF-8'), $br;
echo $selectedGroup->getUnicode(), $br;
echo $selectedGroup->getUnicodeWithRemovedBlank(), $br;
echo $selectedGroup->getUtf8String(), $br;
echo $selectedGroup->getUtf8StringWithRemovedBlank(), $br;

// In the case of Group, you can find a Medium Group of parents.
$parent = $pemojine->selectGroup(':u:')->findParentGroup(); // => Parent MediumGroup
assert($parent->getName() === 'UMA'); // => true

/*
 |----------------------------------------------------------------------
 | Outputter.
 |----------------------------------------------------------------------
 */
echo '---------- Use Outputter. ----------', $br;
$outputter = $pemojine->getOutputter();

// e.g) unicorn face
echo '----- e.g) unicorn face. -----', $br;
echo $outputter->output(':u:'/* Original */), $br; // => 🦄
echo htmlspecialchars($outputter->outputHtml(':unicorn:'), ENT_QUOTES, 'UTF-8'), $br; // => '&#x1f984;'
echo $outputter->outputByUnicode('U+1F984'), $br; // => 🦄
echo $outputter->getUnicode(':unicorn_face:'), $br; // => 'U+1F984'
echo $outputter->getUtf8String(':unicorn_face:'), $br; // => '\u{1F984}'

// e.g) gambling (Original)
echo '----- e.g) gambling. -----', $br;
echo $outputter->output('gambling'), $br; // => 🎰🎲🃏🀄🎴🤑💸
echo htmlspecialchars($outputter->outputHtml('gambling'), ENT_QUOTES, 'UTF-8'), $br; // => '&#x1F3B0;&#x1F3B2;&#x1F0CF;&#x1F004;&#x1F3B4;&#x1F911;&#x1F4B8;'
echo $outputter->outputByUnicode('U+1F3B0 U+1F3B2 U+1F0CF U+1F004 U+1F3B4 U+1F911 U+1F4B8'), $br; // => 🎰🎲🃏🀄🎴🤑💸
echo $outputter->getUnicode('gambling'), $br; // => 'U+1F3B0 U+1F3B2 U+1F0CF U+1F004 U+1F3B4 U+1F911 U+1F4B8'
echo $outputter->getUtf8String('gambling'), $br; // => '\u{1F3B0} \u{1F3B2} \u{1F0CF} \u{1F004} \u{1F3B4} \u{1F911} \u{1F4B8}'