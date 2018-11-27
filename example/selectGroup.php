<?php
require_once realpath(dirname(__FILE__) . '/../vendor/autoload.php');
$br = php_sapi_name() === 'cli' ? PHP_EOL : '<br>';

use SMB\Pemojine\Container as PemojineContainer;
use SMB\Pemojine\Structure\Vendor;
use SMB\Pemojine\Exception\GroupNotFound;

// Create an instance of Google using a Container.
$pemojine = PemojineContainer::make(new Vendor\Google());

// @link
// https://unicode.org/emoji/charts/full-emoji-list.html
// https://unicode.org/emoji/charts/full-emoji-modifiers.html

/*
 |----------------------------------------------------------------------
 | When selecting 'Animals & Nature' in Big Groups.
 |----------------------------------------------------------------------
 */
echo '---------- Selected BigGroup. ----------', $br;

// Select 'Animals & Nature'.
$selectedBigGroup = $pemojine->selectBigGroup('Animals & Nature');

echo $selectedBigGroup->getVendorName(), $br; // => 'Google'

echo $selectedBigGroup->getName(), $br; // => 'Animals & Nature'
// or $selectedBigGroup->getName();

// $selectedBigGroup is an iterator with a medium group name in the key and an object(MediumGroup) in the value.
foreach ($selectedBigGroup/* or $selectedBigGroup->getChildren() */ as $mediumGroupName => $mediumGroup) {
    echo 'MediumGroupName::' . $mediumGroupName/* or $mediumGroup->getName() */, $br;
    foreach ($mediumGroup/* or $mediumGroup->getChildren() */ as $groupName => $group) {
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

// When acquiring a random group from narrowed down.
$groupOfBig = $selectedBigGroup->getGroupAtRandom();
echo $groupOfBig->getName()/* or $groupOfBig->getShortName() */, $br;
$alias = implode(' ', $groupOfBig->getAliasesOfName()/* or $groupOfBig->getAliasesOfShortName() */);
echo htmlspecialchars($alias, ENT_QUOTES, 'UTF-8'), $br;
echo $groupOfBig->output(), $br;
echo htmlspecialchars($groupOfBig->outputHtml(), ENT_QUOTES, 'UTF-8'), $br;
echo $groupOfBig->getUnicode(), $br;
echo $groupOfBig->getUnicodeWithRemovedBlank(), $br;
echo $groupOfBig->getUtf8String(), $br;
echo $groupOfBig->getUtf8StringWithRemovedBlank(), $br;

// Exists?
assert($pemojine->hasBigGroup('Food & Drink') === true);
assert($pemojine->hasBigGroup('hoge') === false);

/*
 |----------------------------------------------------------------------
 | When selecting 'animal-mammal' in Medium Groups.
 |----------------------------------------------------------------------
 */
echo '---------- Selected MediumGroup. ----------', $br;

// Select 'animal-mammal'.
$selectedMediumGroup = $pemojine->selectMediumGroup('animal-mammal');

echo $selectedMediumGroup->getVendorName(), $br; // => 'Google'

echo $selectedMediumGroup->getName(), $br; // => 'animal-mammal'

// $selectedMediumGroup is an iterator with a group name in the key and an object(Group) in the value.
foreach ($selectedMediumGroup/* or $selectedMediumGroup->getChildren() */ as $groupName => $group) {
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

// When acquiring a random group from narrowed down.
$groupOfM = $selectedMediumGroup->getGroupAtRandom();
echo $groupOfM->getName()/* or $groupOfM->getShortName() */, $br;
$alias = implode(' ', $groupOfM->getAliasesOfName()/* or $groupOfM->getAliasesOfShortName() */);
echo htmlspecialchars($alias, ENT_QUOTES, 'UTF-8'), $br;
echo $groupOfM->output(), $br;
echo htmlspecialchars($groupOfM->outputHtml(), ENT_QUOTES, 'UTF-8'), $br;
echo $groupOfM->getUnicode(), $br;
echo $groupOfM->getUnicodeWithRemovedBlank(), $br;
echo $groupOfM->getUtf8String(), $br;
echo $groupOfM->getUtf8StringWithRemovedBlank(), $br;

// In the case of Medium Group, you can find a Big Group of parents.
$parent = $pemojine->selectMediumGroup('animal-mammal')->findParentGroup(); // => Parent BigGroup
assert($parent->getName() === 'Animals & Nature'); // => true

// The following are the same instances.
$a = $pemojine->selectBigGroup('Animals & Nature')->selectMediumGroup('animal-mammal');
$b = $pemojine->selectMediumGroup('animal-mammal');
assert($a === $b); // => true

// Exists?
assert($pemojine->hasMediumGroup('animal-bird') === true);
assert($pemojine->hasMediumGroup('piyo') === false);

/*
 |----------------------------------------------------------------------
 | When selecting 'flag: Japan' in Groups.
 |----------------------------------------------------------------------
 */
echo '---------- Selected Group. ----------', $br;

// Select 'flag: Japan' (You can also search by ':flag_jp:' or ':jp:').
$selectedGroup = $pemojine->selectGroup('flag: Japan');

echo $selectedGroup->getVendorName(), $br; // => 'Google'

echo $selectedGroup->getName()/* or getShortName() */, $br; // => 'flag: Japan'
$alias = implode(' ', $selectedGroup->getAliasesOfName()/* or getAliasesOfShortName() */);
echo htmlspecialchars($alias, ENT_QUOTES, 'UTF-8'), $br;
echo $selectedGroup->output(), $br;
echo htmlspecialchars($selectedGroup->outputHtml(), ENT_QUOTES, 'UTF-8'), $br; // => '&#x1F1EF;&#x1F1F5;'
echo $selectedGroup->getUnicode(), $br; // => 'U+1F1EF U+1F1F5'
echo $selectedGroup->getUnicodeWithRemovedBlank(), $br; // => 'U+1F1EFU+1F1F5'
echo $selectedGroup->getUtf8String(), $br; // => '\u{1F1EF} \u{1F1F5}'
echo $selectedGroup->getUtf8StringWithRemovedBlank(), $br; // => '\u{1F1EF]\u{1F1F5}'

// In the case of Group, you can find a Medium Group of parents.
$parent = $pemojine->selectGroup(':flag_jp:')->findParentGroup(); // => Parent MediumGroup
assert($parent->getName() === 'country-flag'); // => true

// The following are the same instances.
$a = $pemojine->selectMediumGroup('country-flag')->selectGroup(':jp:');
$b = $pemojine->selectGroup('flag: Japan');
assert($a === $b); // => true

// Exists?
assert($pemojine->hasGroup('grinning face with sweat') === true);
assert($pemojine->hasGroup(':sweat_smile:') === true);
assert($pemojine->hasGroup('\':)'/* ':) */) === true);
assert($pemojine->hasGroup('\':-)'/* ':-) */) === true);
assert($pemojine->hasGroup('fuga') === false);

/*
 |----------------------------------------------------------------------
 | Exception when target can not be found.
 |----------------------------------------------------------------------
 */

echo '---------- Throw a \SMB\Pemojine\Exception\GroupNotFound. ----------', $br;

// Throw a \SMB\Pemojine\Exception\GroupNotFound
try {
    $pemojine->selectBigGroup('hoge');
} catch (GroupNotFound $e) {
    echo $e->getMessage(), $br; // => Group not found: '$vendorName->$name'
}

try {
    $pemojine->selectMediumGroup('piyo');
} catch (GroupNotFound $e) {
    echo $e->getMessage(), $br;
}

try {
    $pemojine->selectGroup('fuga');
} catch (GroupNotFound $e) {
    echo $e->getMessage(), $br;
}
