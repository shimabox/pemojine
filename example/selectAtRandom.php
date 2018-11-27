<?php
require_once realpath(dirname(__FILE__) . '/../vendor/autoload.php');
$br = php_sapi_name() === 'cli' ? PHP_EOL : '<br>';

use SMB\Pemojine\Container as PemojineContainer;
use SMB\Pemojine\Structure\Vendor;

// Create an instance of Common using a Container.
$pemojine = PemojineContainer::make(new Vendor\Common());

/*
 |----------------------------------------------------------------------
 | When selecting randomly from Big Groups.
 |----------------------------------------------------------------------
 */
echo '---------- Selected randomly BigGroup. ----------', $br;

// Select a BigGroup at random
$randomBigGroup = $pemojine->randomFromBigGroup();

echo $randomBigGroup->getName(), $br; // Randomly chosen BigGroupName.

// When acquiring a random group from narrowed down.
$groupOfBig = $randomBigGroup->getGroupAtRandom();
echo $groupOfBig->getName()/* or $groupOfBig->getShortName() */, $br;
$alias = implode(' ', $groupOfBig->getAliasesOfName()/* or $groupOfBig->getAliasesOfShortName() */);
echo htmlspecialchars($alias, ENT_QUOTES, 'UTF-8'), $br;
echo $groupOfBig->output(), $br;
echo htmlspecialchars($groupOfBig->outputHtml(), ENT_QUOTES, 'UTF-8'), $br;
echo $groupOfBig->getUnicode(), $br;
echo $groupOfBig->getUnicodeWithRemovedBlank(), $br;
echo $groupOfBig->getUtf8String(), $br;
echo $groupOfBig->getUtf8StringWithRemovedBlank(), $br;

/*
 |----------------------------------------------------------------------
 | When selecting randomly from Medium Groups.
 |----------------------------------------------------------------------
 */
echo '---------- Selected randomly MediumGroup. ----------', $br;

// Select a MediumGroup at random
$randommMediumGroup = $pemojine->randomFromMediumGroup();

echo $randommMediumGroup->getName(), $br; // Randomly chosen MediumGroupName.

// When acquiring a random group from narrowed down.
$groupOfM = $randommMediumGroup->getGroupAtRandom();
echo $groupOfM->getName()/* or $groupOfM->getShortName() */, $br;
$alias = implode(' ', $groupOfM->getAliasesOfName()/* or $groupOfM->getAliasesOfShortName() */);
echo htmlspecialchars($alias, ENT_QUOTES, 'UTF-8'), $br;
echo $groupOfM->output(), $br;
echo htmlspecialchars($groupOfM->outputHtml(), ENT_QUOTES, 'UTF-8'), $br;
echo $groupOfM->getUnicode(), $br;
echo $groupOfM->getUnicodeWithRemovedBlank(), $br;
echo $groupOfM->getUtf8String(), $br;
echo $groupOfM->getUtf8StringWithRemovedBlank(), $br;

/*
 |----------------------------------------------------------------------
 | When selecting randomly from Groups.
 |----------------------------------------------------------------------
 */
echo '---------- Selected randomly Group. ----------', $br;

// Select a Group at random
$randomGroup = $pemojine->randomFromGroup();

echo $randomGroup->getName()/* or $randomGroup->getShortName() */, $br;
$alias = implode(' ', $randomGroup->getAliasesOfName()/* or $randomGroup->getAliasesOfShortName() */);
echo htmlspecialchars($alias, ENT_QUOTES, 'UTF-8'), $br;
echo $randomGroup->output(), $br;
echo htmlspecialchars($randomGroup->outputHtml(), ENT_QUOTES, 'UTF-8'), $br;
echo $randomGroup->getUnicode(), $br;
echo $randomGroup->getUnicodeWithRemovedBlank(), $br;
echo $randomGroup->getUtf8String(), $br;
echo $randomGroup->getUtf8StringWithRemovedBlank(), $br;
